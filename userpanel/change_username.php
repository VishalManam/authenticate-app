<?php include 'authControllers.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <title>Change Username</title>
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
        <h3 class="text-center form-title">Change your Username</h3>
        <form action="change_username.php" method="post">
          <div class="form-group">
            <label>New Username</label>
            <input type="text" name="username" class="form-control form-control-lg">
          </div>
          <br>
          <div class="form-group">
            <button type="submit" name="change-username-btn" class="btn btn-lg btn-block">Change Username</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>