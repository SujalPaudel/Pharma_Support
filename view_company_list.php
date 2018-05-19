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

$sql = "SELECT * FROM company";
$result = mysqli_query($conn,$sql);
echo "<table border = '1'>
<tr>
<th>Company_id</th>
<th>Company_Name</th>
<th>Company_address</th>
<th>Contact No</th>
<th>Company Type</th>
<th>Contact Address</th>
<th>Representative</th>
<th>Mobile No</th>
</tr>";
  while($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<td>".$row['Company_id']."</td>";
    echo "<td>".$row['Company_name']."</td>";
    echo "<td>".$row['Company_address']."</td>";
    echo "<td>".$row['Contact_no']."</td>";
    echo"<td>".$row['Company_type']."</td>";
    echo"<td>".$row['near_cont_address']."</td>";
    echo "<td>".$row['representative']."</td>";
    echo "<td>".$row['mob_no']."</td>";

    echo "</tr>";
  }
  echo"</table>";

?>
