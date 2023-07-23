<?php include 'authControllers.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <title>User Registration</title>
  <?php if (count($errors) > 0): ?>
    <div class="alert alert-danger">
      <?php foreach ($errors as $error): ?>
      <li>
        <?php echo $error; ?>
      </li>
      <?php endforeach;?>
    </div>
  <?php endif;?>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth">
        <h3 class="text-center form-title">Register</h3>
        <form action="register.php" method="post">
          <div class="form-group">
            <i class="fa fa-user" aria-hidden="true"></i>
            <label>Username</label>
            <input type="text" name="username" class="form-control form-control-lg" value="<?php echo $username; ?>">
          </div>
          <div class="form-group">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <label>Email</label>
            <input type="text" name="email" class="form-control form-control-lg" value="<?php echo $email; ?>">
          </div>
          <div class="form-group">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <label>Phone Number</label>
            <input type="tel" name="phone_number" class="form-control form-control-lg" value="<?php echo $phone_number; ?>">
          </div>
          <div class="form-group">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <label>Year of Passing Out</label>
            <input type="tel" name="passing_year" class="form-control form-control-lg" value="<?php echo $passing_year; ?>">
          </div>
          <div class="form-group">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <label>Confirm Password</label>
            <input type="password" name="passwordConf" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="signup-btn" class="btn btn-lg btn-block">Register</button>
          </div>
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </div>
  </div>
</body>
</html>