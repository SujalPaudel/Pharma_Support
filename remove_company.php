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
    Remove_Company
  </title>
</head>
<body>
  <form action = "remove_company.php" method="post"/>
    Company Name
      <select name = "company_name">
        <?php
            $query="SELECT Company_name from company";
            $query1=mysqli_query($connect,$query);
            while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
            {
              $company_name=$row[Company_name];
    ?>
    <option value="<?php echo $company_name; ?>">
      <?php
      echo $company_name;
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
  $query = "DELETE FROM company WHERE Company_name = 'company_name'";
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
