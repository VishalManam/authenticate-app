<?php
require_once 'send_emails.php';
session_start();
$username = "";
$email = "";
$phone_number = "";
$passing_year = "";
$errors = [];

$conn = new mysqli('localhost', 'root', '', 'verify_user');

// SIGN UP USER
if (isset($_POST['signup-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username required';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['phone_number'])) {
        $errors['phone_number'] = 'Phone Number required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    if (empty($_POST['passing_year'])) {
        $errors['passing_year'] = 'Passing Year required for Verification';
    }
    if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
        $errors['passwordConf'] = 'The two passwords do not match';
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $passing_year = $_POST['passing_year'];
    $token = bin2hex(random_bytes(50)); // generate unique token
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password

    $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['username'] = "Username already exists";
    }
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
    }
    $sql = "SELECT * FROM users WHERE phone_number='$phone_number' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['phone_number'] = "Phone Number already exists";
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO users SET username=?, email=?, phone_number=?, passing_year=?, token=?, password=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssssss', $username, $email, $phone_number, $passing_year, $token, $password);
        $result = $stmt->execute();

        if ($result) {
            $user_id = $stmt->insert_id;
            $stmt->close();

            // TO DO: send verification email to user
            sendVerificationEmail($email, $token);

            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['phone_number'] = $phone_number;
            $_SESSION['passing_year'] = $passing_year;
            $_SESSION['verified'] = false;
           // $_SESSION['message'] = 'You are logged in!';
            $_SESSION['type'] = 'alert-success';
            header('location: logged_in.php');
        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
        }
    }
}

// LOGIN
if (isset($_POST['login-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username or email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    if (empty($_POST['passing_year'])) {
        $errors['passing_year'] = 'Year of Passing Out required';
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passing_year = $_POST['passing_year'];

    if (count($errors) === 0) {
        $query = "SELECT * FROM users WHERE username=? OR email=? OR passing_year=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('sss', $username, $password, $passing_year);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if (!empty($user) && password_verify($password, $user['password'])) { // if password matches
                $stmt->close();

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['phone_number'] = $user['phone_number'];
                $_SESSION['passing_year'] = $user['passing_year'];
                $_SESSION['verified'] = $user['verified'];
                // $_SESSION['message'] = 'You are logged in!';
                $_SESSION['type'] = 'alert-success';
                header('location: logged_in.php');
                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "Wrong username / password / year of passing out";
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }
}

// FORGOT PASSWORD
if (isset($_POST['forgot-password'])) {
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email Address is Invalid";
    }
    if (empty($email)) {
        $errors['email'] = "Email Address Required";
    }

    if (count($errors) == 0) {
        $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        $token = $user['token'];
        sendPasswordResetLink($email, $token);
        header('location: password_message.php');
        exit(0);
    }
}

// RESET PASSWORD
if (isset($_POST['reset-password-btn'])) {
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    if (empty($password) || empty($passwordConf)) {
        $errors['password'] = "Password Required";
    }
    if ($password !== $passwordConf) {
        $errors['password'] = "The passwords don't match";
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $email = $_SESSION['email'];

    if (count($errors) == 0) {
        $sql = "UPDATE users SET password = '$password' where email = '$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location: login.php');
            exit(0);
        }
    }
}

function resetPassword($token)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE token = '$token' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $user['email'];
    header('location: reset_password.php');
    exit(0);
}

// CHANGE PASSWORD
if (isset($_POST['change-password-btn'])) {
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    if (empty($password) || empty($passwordConf)) {
        $errors['password'] = "Password Required";
    }
    if ($password !== $passwordConf) {
        $errors['password'] = "The passwords don't match";
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $email = $_SESSION['email'];

    if (count($errors) == 0) {
        $sql = "UPDATE users SET password = '$password' where email = '$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location: changeinfo_panel.php');
            exit(0);
        }
    }
}

// CHANGE USERNAME
if (isset($_POST['change-username-btn'])) {
    $username = $_POST['username'];

    if (empty($username)) {
        $errors['username'] = "Username Required";
    }

    $username = $_POST['username'];
    $email = $_SESSION['email'];

    if (count($errors) == 0) {
        $sql = "UPDATE users SET username = '$username' where email = '$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location: changeinfo_panel.php');
            exit(0);
        }
    }
}

// CHANGE YEAR OF PASSING OUT
if (isset($_POST['change-year-btn'])) {
    $passing_year = $_POST['passing_year'];

    if (empty($passing_year)) {
        $errors['passing_year'] = "Year of Passing out Required";
    }

    $passing_year = $_POST['passing_year'];
    $email = $_SESSION['email'];

    if (count($errors) == 0) {
        $sql = "UPDATE users SET passing_year = '$passing_year' where email = '$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location: changeinfo_panel.php');
            exit(0);
        }
    }
}

// CHANGE PHONE NUMBER
if (isset($_POST['change-phno-btn'])) {
    $phone_number = $_POST['phone_number'];

    if (empty($phone_number)) {
        $errors['phone_number'] = "Phone Number Required";
    }

    $phone_number = $_POST['phone_number'];
    $email = $_SESSION['email'];

    if (count($errors) == 0) {
        $sql = "UPDATE users SET phone_number = '$phone_number' where email = '$email'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location: changeinfo_panel.php');
            exit(0);
        }
    }
}