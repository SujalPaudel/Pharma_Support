<?php
include 'session.php';
 ?>
<?php
$servername = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login";

$conn = mysqli_connect($servername,$db_user,$db_pass,$db_name);
if(!$conn)
{
  echo "sorry connection error";
}
$sql = "SELECT * FROM client";
$result = mysqli_query($conn,$sql);

echo "<table border = '1'>
<tr>
<th>Client ID</th>
<th>Client Name</th>
<th>Contact Person</th>
<th>Mobile</th>
<th>Address</th>
<th>Zone</th>
<th>Office_Contact</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>".$row['client_id']."</td>";
  echo "<td>".$row['client_name']."</td>";
  echo "<td>".$row['cont_person']."</td>";
  echo "<td>".$row['mobile']."</td>";
  echo "<td>".$row['address']."</td>";
  echo "<td>".$row['zone']."</td>";
  echo "<td>".$row['office_cont']."</td>";
}
echo "</table>";
?>
