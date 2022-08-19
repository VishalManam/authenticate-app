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
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>User Panel</title>
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container px-5">
        <a class="navbar-brand" href="logged_in.php">User Panel</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                style="font-size: 18px"
                class="nav-link active"
                aria-current="page"
                href="logout.php"
                ><b><u>Logout</u></b></a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Content-->
    <div class="container px-4 px-lg-5">
      <!-- Call to Action-->
      <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
          <p style="font-size: 20px; text-align: left" class="text-white m-0" >Hello, <strong><?php echo $_SESSION['username']; ?></strong>. Welcome to your Account.</p>
          <?php if (!$_SESSION['verified']): ?>
          <p style="font-size: 20px; text-align: left" class="text-white m-0">
            You need to verify your email address!
            Sign into your email account and click
            on the verification link we just emailed you
            at
            <strong><?php echo $_SESSION['email']; ?></strong>.
          </p>
          <?php else: ?>
          <?php endif;?>
          <?php if (isset($_SESSION['message'])): ?>
          <div class="alert alert-success <?php echo $_SESSION['type'] ?>">
              <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['type']);
              ?>
          </div>
          <?php endif;?>
        </div>
      </div>
      <!-- Content Row-->
      <div class="row gx-4 gx-lg-5">
        <div class="col-md-6 mb-5">
          <div class="card h-100">
            <div class="card-body">
              
              <h2 class="card-title">Edit Profile</h2>
              <br />
              <p class="card-text">
                The link below will lead you to a page where you can change your
                credentials.
              </p>
            </div>
            <div class="card-footer">
              <a class="btn btn-primary btn-sm" href="changeinfo_panel.php">Change Credentials</a>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-4 mb-5">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Change your Username</h2>
              <br />
              <p class="card-text">
                The link below will lead you to a page where you can change your
                username. Make sure you use a name which you will easily
                remember. Spaces are invalid, you can use underscores along with numbers and alphabets.
              </p>
            </div>
            <div class="card-footer">
              <a class="btn btn-primary btn-sm" href="change_username.php">Change Username</a>
            </div>
          </div>
        </div> -->
        <div class="col-md-6 mb-5">
          <div class="card h-100">
            <div class="card-body">
              <h2 class="card-title">Continue to Home Page</h2>
              <br />
              <p class="card-text">
                This link will take you to your home page where you can find all your personal info.
              </p>
            </div>
            <div class="card-footer">
              <a class="btn btn-primary btn-sm" href="#">Go to Home Page</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <!-- <footer class="py-5 bg-dark">
      <div class="container px-4 px-lg-5">
        <p class="m-0 text-center text-white">
          Copyright &copy; Your Website 2022
        </p>
      </div>
    </footer> -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
