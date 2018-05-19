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
    Normalization Client
  </title>
</head>
<body>
  <form action = "norm_client.php" method = "POST"/>
  <p>
  Client_id:
  <input  name = "client_id"/>
</p>
<p>
  Client Name:
  <input type = "text" name = "client_name"/>
</p>
<p>
  Zone:
  <input type = "text" name = "zone"/>
</p>
<p>
  Zonal Representative:
  <input type = "text" name ="zonal_repre"/>
</p>
<p>
  Phone Number:
  <input  name ="phone_no"/>
</p>
<input type = "submit" value="submit" name = "submit"/>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login";
$conn = mysqli_connect($servername,$db_user,$db_pass,$db_name);
  if(!$conn)
  {
    echo "sorry,connection error";
  }
  else {
    if(isset($_POST['client_id']))
    {
    if(isset($_POST['client_name']))
    {
    if(isset($_POST['zone']))
    {
      if(isset($_POST['zonal_repre']))
      {
        if(isset($_POST['phone_no']))
        {
          if($_POST['client_id'] !=null && $_POST['client_name'] !=null && $_POST['zone'] !=null && $_POST['zonal_repre'] !=null && $_POST['phone_no'] !=null)
          {
            $sql = "INSERT INTO norm_client(Client_id,Client_name,Zone,Zonal_repre,Phone_No) VALUES
             ('$_POST[client_id]','$_POST[client_name]','$_POST[zone]','$_POST[zonal_repre]','$_POST[phone_no]')";
             if(!mysqli_query($conn,$sql))
             {
               echo "error";
             }
             else {
               echo "ok added";
             }
          }
          else {
            echo "fill out the boxes";
          }
        }}}}}}}?>
