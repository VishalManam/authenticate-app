<?php include 'authControllers.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <title>Change Password</title>
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
      <div class="col-md-4 offset-md-4 form-wrapper auth login">
        <h3 class="text-center form-title">Change your Password</h3>
        <form action="reset_password.php" method="post">
          <div class="form-group">
            <label>New Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <label>Confirm New Password</label>
            <input type="password" name="passwordConf" class="form-control form-control-lg">
          </div>
          <br />
          <div class="form-group">
            <button type="submit" name="change-password-btn" class="btn btn-lg btn-block">Change Password</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>