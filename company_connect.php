<?php
$servername = "localhost";
$username = "root";
$pass  = "";
$db_name = "login";
if(isset($_POST['add']))
{
$conn = mysqli_connect($servername,$username,$pass,$db_name);
if(!$conn)
{
  echo("Connection Failed:");
}
else {
  if(isset($_POST['comp_id']))
  {
  if(isset($_POST['comp_name']))
  {
    if(isset($_POST['comp_address']))
  {
    if(isset($_POST['cont_no']))
  {
    if(isset($_POST['type']))
      {
      if(isset($_POST['representative']))
      {
        if(isset($_POST['mob_no']))
        {
          if($_POST['comp_id'] !=null && $_POST['comp_name'] !=null && $_POST['comp_address'] !=null && $_POST['cont_no'] !=null && $_POST['type'] !=null &&
           $_POST['representative'] != null && $_POST['mob_no'] != null)
          {
          $sql = "INSERT INTO company(Comp_id,Company_name,Company_address,Contact_no,Company_type,representative,mob_no) VALUES
           ('$_POST[comp_id]','$_POST[comp_name]','$_POST[comp_address]','$_POST[cont_no]','$_POST[type]','$_POST[representative]','$_POST[mob_no]')";
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
      }
      }
    }
  }}


}
}
}}
 ?>
