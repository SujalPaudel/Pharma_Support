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
    Norm_soln
  </title>
</head>
<body>
  <form action = "soln_of_norm.php" method = "POST"/>
  <p>
  Zone:
  <input  name = "zone"/>
</p>
<p>
  Zonal Representative:
  <input type = "text" name = "zonal_repre"/>
</p>
<p>
  Phone Number:
  <input  name = "phone_no"/>
</p>
<input type= "submit" value = "submit" name = "submit"/>
</html>
<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$username = "root";
$pass  = "";
$db_name = "login";
$conn = mysqli_connect($servername,$username,$pass,$db_name);
if(!$conn)
{
  echo("Connection Failed:");
}
else {
  if(isset($_POST['zone']))
  {
  if(isset($_POST['zonal_repre']))
  {
    if(isset($_POST['phone_no']))
    {
      if($_POST['zone'] !=null && $_POST['zonal_repre'] !=null  && $_POST['phone_no'] !=null )
      {
    $sql = "INSERT INTO zone_wth_repre(Zone,Zonal_repre,Phone_no) VALUES
     ('$_POST[zone]','$_POST[zonal_repre]','$_POST[phone_no]')";
     if(!mysqli_query($conn,$sql))
     {
       echo "Some Error Has Occured";
     }
     else {
       echo "Successfully Data Added";
     }
  }
  else {
    echo "Fill Out All the boxes";
  }}}}}}?>
