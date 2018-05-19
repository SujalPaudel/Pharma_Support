<?php
session_start();
//destory Session
unset($_SESSION['login_status']);

header("Location:login.php");
?>
