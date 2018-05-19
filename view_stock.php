<?php
include 'session.php';
 ?>
 <?php
$servername = "localhost";
$username = "root";
$pass  = "";
$db_name = "login";

$conn = mysqli_connect($servername,$username,$pass,$db_name);
if(!$conn)
{
  echo("Connection Failed:");
}

$sql = "SELECT * FROM stock";
$result = mysqli_query($conn,$sql);
echo "<table border = '1'>
<tr>
<th>item_name</th>
<th>item_detail</th>
<th>item_price</th>
<th>quantity</th>
<th>company_name</th>
<th>location</th>
<th>expiry_date</th>
</tr>";
  while($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<td>".$row['item_name']."</td>";
    echo "<td>".$row['item_detail']."</td>";
    echo "<td>".$row['item_price']."</td>";
    echo "<td>".$row['quantity']."</td>";
    echo"<td>".$row['company_name']."</td>";
    echo"<td>".$row['location']."</td>";
    echo "<td>".$row['expire_date']."</td>";
    echo "</tr>";
  }
  echo"</table>";

?>
