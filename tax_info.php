<html>
<head>
  <title> Tax_info </title>
</head>
<body>
  <form action = "tax_info.php" method = "POST">
    <p>
        <label>Year:</label>
      <input type = "int" name = "year" />
    </p>
    <p>
      <label>Total Income:</label>
      <input type = "int" name = "total_income" />
    </p>
    <p>
      <label>Tax  Percentage:</label>
      <input type = "float" name = "tax_percent" />
    </p>
  <p>
  <input type = "submit" value = "Submit" name  = "submit"/>
  </p>
  </form>
  </body>
  </html>
  <?php
  if(isset($_POST['submit']))
  {
  $servername = "localhost";
   $db_username = "root";
   $db_pass = "";
   $db_name = "login";

   $conn = mysqli_connect($servername,$db_username,$db_pass);
   if(!$conn)
   {
     echo"couldnot connect";
   }
   else
    {
   mysqli_select_db($conn,$db_name);
   if(isset($_POST['year']) && isset($_POST['total_income']) && isset($_POST['tax_percent']))
   {
     if($_POST['year'] != null && $_POST['total_income'] != null && $_POST['tax_percent'] != null)
     {
       $tax_amt = (($_POST['total_income']) * ($_POST['tax_percent'])/100);
       echo $tax_amt;
     $sql = "INSERT INTO tax_info (Year,Total_income,Tax_percentage,Tax_amt)
       VALUES ('$_POST[year]','$_POST[total_income]','$_POST[tax_percent]','$tax_amt')";
       if(!mysqli_query($conn,$sql))
       {
         echo"error";
       }
       else
       {
         echo "done";
       }
     }
     else{
       echo "Please fill out all the boxes";
     }
   }}}
?>
