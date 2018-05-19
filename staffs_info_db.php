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
else
  {
    if($_POST['staff_name']!=null && $_POST['address']!=null && $_POST['gender']!=null && $_POST['number']!=null && $_POST['blood']!=null && $_POST['post']!=null && $_POST['salary']!=null)
    {
      $sql = "INSERT INTO staff_info(staff_name,address,gender,numberr,blood,post,salary) VALUES('$_POST[staff_name]','$_POST[address]','$_POST[gender]',
      '$_POST[number]','$_POST[blood]','$_POST[post]','$_POST[salary]')";
      $query = mysqli_query($conn,$sql);
      if(!$query)
      {
        echo "error occured";
      }
      else {
        echo "ok done";
      }
    }
  }
}
?>
