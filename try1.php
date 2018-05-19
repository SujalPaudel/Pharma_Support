
<?php
$servername = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login";

$conn = mysqli_connect($servername,$db_user,$db_pass,$db_name);
$query = "SELECT Company_name FROM 'company'";
$result1 = mysqli_query($conn,$query);
?>
<html>
<head>
  <title>
    Try_php
  </title>
</head>
<body>
    <select>
      <?php
      while($row1 = mysqli_fetch_array($result1)):;
      ?>
      <option><?php
      echo "$row[Company_name].$row[Company_name].";

      ?>
    </option>
    <?php endwhile;?>
  </select>
</body>
</html>
