<?php
include 'session.php';
 ?>
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
?>
<html>
<head>
  <title>
  Order Submission
  </title>
</head>
<body>
  <form action = "order_submission.php" method = "POST">
    <p>
      <label>Client Id:</label>
      <select name = "client_id" >
        <?php
            $query="SELECT Client_id from client";
            $query1=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
            {
              $client_id=$row[Client_id];
    ?>
    <option value="<?php echo  $client_id; ?>" selected = "selected">
      <?php
      echo $client_id;
       ?>
     </option>
              <?php
    }
    }

     ?>
    </select>
    </p>

<p>
    <label>Choose item to be sold</label>
    <input type = "text" name = "item_name1"/>
  </p>
  <p>
    <label>Quantity</label>
    <input type = "int" name = "qnt"/>
  </p>
    <input type = "submit"  value = "submit" name = "submit"/>
    <input type = "submit" value = "check_me" name = "got_it"/>
</form>
<?php
if(isset($_POST['submit']))
{
  if($_POST['item_name1']!=null && $_POST['qnt']!=null)
  {
  $new = "INSERT INTO client_sell(Client_id,sell_item,Quantity) VALUES ('$client_id','$_POST[item_name1]','$_POST[qnt]')";
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
elseif(isset($_POST['got_it']))
{
header('Location:view_stock.php');
}
?>
</body>
</html>
