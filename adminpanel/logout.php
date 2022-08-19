<?php
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['password']);
header("location: adminlogin.php");