<?php
$servername = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login";

$conn = mysqli_connect($servername,$db_user,$db_pass,$db_name);
{
  if(!$conn)
  {
    echo "sorry,connection error";
  }
}
?>
<html>
<head>
  <title>
    Client_Sell
  </title>
</head>
<body>
  <p>
  <form action = "client_sell.php" method = "POST">
    Client Id:
      <select name = "type">
        <?php
            $query="SELECT client_id from client";
            $query1=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))//(result,result_type(what type of array should be produced?))
            {
              $client_id=$row[client_id];
    ?>

    <option value="<?php echo $client_id ?>">
      <?php
      echo $client_id;
       ?>
       </option>
              <?php
    }
     ?>
    </select>
  </p>

Client Name:
  <select name = "type">
    <?php
        $query="SELECT client_name from client";
        $query1=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))//(result,result_type(what type of array should be produced?))
        {
          $clientname=$row[client_name];
?>

<option value="<?php echo $clientname ?>">
  <?php
  echo $clientname;
   ?>
   </option>
          <?php
}
 ?>
</select>
<p>
    <label>Choose item to be sold</label>
    <input type = "text" name = "item_name"/>
  </p>
  <p>
      <label>Quantity</label>
      <input type = "int" name = "qnt"/>
    </p>
    <input type = "submit"  value = "submit" name = "submit"/>
    <br><br>
    <button><a href = "view_client.php">Click to Confirm</a></button>
</form>

<?php
if(isset($_POST['submit']))
{
  $clientname = $_POST['type'];

  if($_POST['item_name']!=null && $_POST['qnt']!= null)
  {
  $new = "INSERT INTO client_sell(Client_id,client_name,sell_item,Quantity) VALUES ('$client_id','$clientname','$_POST[item_name]','$_POST[qnt]')";
  if(!mysqli_query($conn,$new))
  {
    echo "error";
  }
  else {
    echo "ok";
  }
}
else {
  echo "Fill out all the boxes";
}}
?>
</body>
</html>
