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
  <title>Update Stock</title>
</head>
<body>
  <form action = "update_stock.php" method = "POST"/>
  Item Name:
    <select name = "itm_name">
      <?php
          $query="SELECT item_name from stock";
          $query1=mysqli_query($conn,$query);
          while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
          {
            $item_name=$row[item_name];
  ?>
  <option value="<?php echo $item_name; ?>" selected = "selected">
    <?php
    echo $item_name;
     ?>
   </option>
            <?php
  }
}
   ?>
   </select>
<p>
  <label>Quantity:</label>
  <input type = "int" name = "Qnty"/>
</p>
<input type = "submit" value = "Update" name = "submit"/>
<br>
<button><a href = "view_stock.php">View Stocks</a></button>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
if(isset($_POST['itm_name'])  && isset($_POST['Qnty']))
{
  if($_POST['itm_name']!=null && $_POST['Qnty']!= null)
  {
    $item_name = $_POST['itm_name'];
    $quantity = $_POST['Qnty'];
    $query = "UPDATE stock SET quantity = '$quantity' WHERE item_name='$item_name'";
    $result = mysqli_query($conn,$query);
  if($result)
  {
    echo "Done";
  }
  else {
    echo "Not Done";
  }}
  else {
    echo "Fill Out all the boxes";
  }
}}
?>
