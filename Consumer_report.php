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
  echo "error";
}
 ?>
 <html>
<head>
  <title>
    Consumer_Report
  </title>
</head>
<body>
  <form action = "Consumer_report_db.php" method = "POST"/>
  <p>
    <label>Company Name:</label>
    <select name = "company_name" >
      <?php
          $query="SELECT Company_name from company";
          $query1=mysqli_query($conn,$query);
          while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
          {
            $company_name=$row[Company_name];
  ?>
  <option value="<?php echo  $company_name; ?>" selected = "selected">
    <?php
    echo $company_name;
     ?>
   </option>
            <?php
  }

 ?>
  </select>
  </p>
<p>
  <label>Last Deal:</label>
  <input type = "date" name = "last_deal"/>
</p>
<p>
  <label>Last Visit Payment:</label>
  <input type = "int" name = "last_pay"/>
</p>
<p>
  <label>Credit amount left: </label>
  <input type = "int" name = "credit_left"/>
</p>
<input type = "submit" name = "submit"/>
</body>
</html>
