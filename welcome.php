<?php
session_start();
  if(isset($_SESSION['login_status']) == false)
  {
    header("Location:login.php");
  }
?>
<html>
<head>
  <title>
    Welcome Page
  </title>
</head>
<body bgcolor = "gray">
  <p>
  <h1>
    <center>"Welcome To Your Account"</center>
  </h1>
  <button><a href ="stock_operation.php">Stock Operations</a></button>
    <br><br>
    <button><a href = "company_operations.php">Company Operations</a></button>
      <br><br>
    <button><a href = "client_operation.php">Client Operations</a></button>
    <br><br>
      <button><a href = "order_submission.php">Order Submission</a></button>
      <br><br>
      <button><a href = "logout.php">Logout</button>

</p>
</body>
</html>
