<?php
include 'session.php';
 ?>
<?php
$servername = "localhost";
$username = "root";
$db_name = "login";
$db_pass = "";
$connect = mysqli_connect($servername,$username,$db_pass,$db_name);
{
  if(!$connect)
  {
    echo "Unable to connect";
  }
?>
<html>
<head>
  <title>
    Remove_Client
  </title>
</head>
<body>
  <form action = "remove_client.php" method="post"/>
    Client Name
      <select name = "client_name">
        <?php
            $query="SELECT client_name from client";
            $query1=mysqli_query($connect,$query);
            while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
            {
              $client_name=$row[client_name];
    ?>
    <option value="<?php echo $client_name; ?>" selected = "selected">
      <?php
      echo $client_name;
       ?>
     </option>
              <?php
    }
  }
     ?>
    </select>
    <p>
  <input type = "submit" value = "Remove" name = "submit"/>
</p>
</form>
<?php
if(isset($_POST['submit']))
{
  $query = "DELETE FROM client WHERE client_name = '$client_name'";
  $result = mysqli_query($connect,$query);
  if($result)
  {
    echo "Successfully Removed";
  }
  else {
      echo "Data not deleted";
}}
?>
</body>
</html>
