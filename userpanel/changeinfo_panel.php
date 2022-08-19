<?php include 'authControllers.php'?>
<?php

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
}

if (isset($_GET['password-token'])) {
    $passwordToken = $_GET['password-token'];
    resetPassword($passwordToken);
}

if (empty($_SESSION['id'])) {
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/changeinfo_panel.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Change Info</title>
</head>
<body>
    <div class="container mt-5 px-2">
      <div class="mb-2 d-flex justify-content-between align-items-center">
        <div class="position-relative">
          <h3>Update your Personal Details</h3>
        </div>
        <!-- <div class="px-2">
          <span>Filters <i class="fa fa-angle-down"></i></span>
          <i class="fa fa-ellipsis-h ms-3"></i>
        </div> -->
      </div>
      <div class="table-responsive">
        <table class="table table-responsive table-borderless">
          <thead>
            <tr class="bg-light">
              <th scope="col" width="15%">#</th>
              <th scope="col" width="40%">Current Credentials</th>
              <th scope="col" width="15%">Status</th>
              <th scope="col" width="30%">Change Credentials</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>1</td>
                <td><?php echo $_SESSION['username']; ?></td>
                <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Good</span></td>
                <td><span class="ms-0"><a href="change_username.php" style="text-decoration: none; color: inherit">Change your Username</a></span></td>
            </tr>
            <tr>
                <td>2</td>
                <td>&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;</td>
                <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Good</span></td>
                <td><span class="ms-0">
                  <a href="change_password.php" style="text-decoration: none; color: inherit">Change your Password</a></span></td>
            </tr>
            <tr>
                <td>3</td>
                <td><?php echo $_SESSION['passing_year']; ?></td>
                <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Good</span></td>
                <td><span class="ms-0"><a href="change_year.php" style="text-decoration: none; color: inherit">Change your Year of Passing Out</a></span></td>
            </tr>
            <tr>
                <td>4</td>
                <td><?php echo $_SESSION['phone_number']; ?></td>
                <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Good</span></td>
                <td><span class="ms-0"><a href="change_phno.php" style="text-decoration: none; color: inherit">Change your Phone Number</a></span></td>
            </tr>
            <tr>
                <td>
                  <a href="logged_in.php">Home</a>
                </td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>  <strong>Note 1:</strong> Whenever you change your data, the updated data may take a while to update. In order to view your updated data, please login again.</td>
            </tr>
            <tr>
                <td></td>
                <td> <strong>Note 2:</strong> The number of characters in the password section does not represent the number of characters in your password. It is just for visualization purposes.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</body>
</html>