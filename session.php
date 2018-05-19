<?php
session_start();
if($_SESSION['login_status'] == false)
{
  header("Location:login.php");
}
?>
