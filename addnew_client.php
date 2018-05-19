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
      Add_New_client
    </title>
  </head>
    <body>
      <form action = "addnew_client.php" method = "POST">
        <p>
          <label>Client Id: </label>
          <input type = "text" name = "client_id"/>
        </p>
      <p>
        <label>Client's Company Name : </label>
        <input type = "text" name = "client_name"/>
      </p>
      <p>
          <label>Client Type : </label>
          <input type = "text" name = "comp_type"/>
        </p>
      <p>
        <label>Contact Person : </label>
        <input type = "text" name = "contact_person"/>
      </p>
      <p>
        <label>Mobile : </label>
        <input type = "int" name = "mobile"/>
      </p>
      <p>
        <label>City : </label>
        <input type = "text" name = "city"/>
      </p>
      <p>
        <label>Zone : </label>
        <input type = "text" name = "zone"/>
      </p>
      <p>
        <label>Office Contact : </label>
        <input type = "int" name = "cont_info"/>
      </p>
      <p>
        <input type = "submit" value = "Add Client" name = "submit"/>
      </p>
</form>
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
  echo "Database connection not established";
}
else {
  if(isset($_POST['client_id']))
  {
  if(isset($_POST['client_name']))
  {
    if(isset($_POST['comp_type']))
    {
    if(isset($_POST['contact_person']))
    {
      if(isset($_POST['mobile']))
      {
        if(isset($_POST['city']))
          {
          if(isset($_POST['zone']))
          {
            if(isset($_POST['cont_info']))
            {
              if($_POST['client_id'] != null && $_POST['client_name'] != null &&  $_POST['comp_type'] != null && $_POST['contact_person'] != null && $_POST['mobile'] != null
              && $_POST['city'] != null && $_POST['zone'] != null && $_POST['cont_info'] != null)
{
          $sql = "INSERT INTO client(client_id,client_name,comp_type,cont_person,mobile,address,zone,office_cont) VALUES ('$_POST[client_id]','$_POST[client_name]','$_POST[comp_type]','$_POST[contact_person]','$_POST[mobile]',
          '$_POST[city]','$_POST[zone]','$_POST[cont_info]')";
            $new = mysqli_query($conn,$sql);
            if(!$new)
            {
              echo "error";
            }
            else {
            echo "added to the new client section";
          }
        }
        else {
              echo "Fill out all the boxes";
        }

      }}}}}}}}}}
        ?>
