<!DOCTYPE html>
<html>
<head>
  <title>
    Vehicle_Info
  </title>
</head>
<body>
  <form action = "vehicle.php" method = "POST"/>
  <p>
    <label>Vehicle Model:</label>
    <input type = "text" name = "model"/>
  </p>
  <p>
    <label>Vehicle Color:</label>
    <input type = "text" name = "color"/>
  </p>
  <p>
    <label>Driver: </label>
    <input type = "text" name = "driver"/>
  </p>
  <p>
  <label>Vehicle's Number:</label>
  <input type = "text" name = "number"/>
</p>
<p>
  <label>Date Bought:</label>
  <input type = "date" name = "date"/>
</p>
<input type = "submit" name = "submit" value = "submit"/>
</body>
</html>

<?php
$servername = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login";
if(isset($_POST['submit']))
{
$conn = mysqli_connect($servername,$db_user,$db_pass,$db_name);
if(!$conn)
{
  echo "Connection Error";
}
  else {
    if(isset($_POST['model']))
    {
      if(isset($_POST['color']))
    {
      if(isset($_POST['driver']))
    {
      if(isset($_POST['number']))
      {
        if(isset($_POST['date']))
        {

if($_POST['model']!=null && $_POST['color']!=null && $_POST['driver']!=null && $_POST['number']!=null && $_POST['date']!=null)
{
  $sql = "INSERT INTO vehicle_info(vehicle_model,vehicle_color,driver,numberr,date_bought) VALUES ('$_POST[model]','$_POST[color]','$_POST[driver]','$_POST[number]','$_POST[date]')";
  if(!mysqli_query($conn,$sql))
  {
    echo "Connection not Established";
  }
  else {
    echo "Connection established";
  }
}
  else {
    echo "Fill out all the forms";
  }
}
}}}}}}

?>
