
<html>
<form action = "try.php" method = "POST"/>
<input type = "submit" value = "submit" name = "submit"/>
</html>
<?php
$servername = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login";

$conn =  mysqli_connect($servername,$db_user,$db_pass,$db_name);
$sql = "SELECT Company_name FROM company";
$result = mysqli_query($conn,$sql);

echo "<select name = 'try'>";
while ($row = mysqli_fetch_array($result)) {
  echo "<option value='".$row['Company_name']."'>".$row['Company_name']."</option>";
  
}
echo "</select>";

?>
