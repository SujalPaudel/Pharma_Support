<?php
$srvername = "localhost";
$username = "root";
$password = "";
$db_name = "login";

if(!isset($_POST['search']))
{
  header("Location:index.php");
}
$make_index = "CREATE INDEX idx_raju ON client(client_name)";
$made_index = mysqli_query($make_index);
$try_index = "SELECT * FROM client WHERE $made_index == $_POST['search']";

?>
