<?php include 'authControllers.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <title>Forgot Password</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth login">
        <h3 class="text-center form-title">Password Recovery</h3>
        <p>
            Please enter the Email Address you used to sign up on this site and we will assist you in recovering your password.
        </p>
        <form action="forgot_password.php" method="post">

            <?php if (count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error): ?>
                <li>
                <?php echo $error; ?>
                </li>
                <?php endforeach;?>
            </div>
            <?php endif;?>

          <div class="form-group">
            <input type="email" name="email" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="forgot-password" class="btn btn-lg btn-block">Recover your Password</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>