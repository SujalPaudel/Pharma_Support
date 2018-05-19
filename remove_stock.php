<?php
include 'session.php';
 ?>
<html>
<head>
  <title>Remove_Stock</title>
</head>
<body>
  <form action = "remove_stock.php" method = "POST"/>
  <p>
    <label>Item Name:</label>
    <input type = "text" name = "name"/>
  </p>
  <p>
    <input type = "submit" value = "submit" name = "delete"/>
  </p>
</body>
</html>

<?php
if(isset($_POST['delete']))
{
$servername = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login";
if(isset($_POST['name']))
{
if($_POST['name']!=null)
{
$name = $_POST['name'];
$connect = mysqli_connect($servername,$db_user,$db_pass,$db_name);
$query = "DELETE FROM stock WHERE item_name = '$name'";
$result = mysqli_query($connect,$query);
if($result)
{
  echo "data deleted";
}
else {
  echo "data not deleted";
}
}
else {
  echo "Fill out the boxes";
}}}
?>
