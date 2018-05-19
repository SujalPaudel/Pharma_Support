<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "login";
$conn = mysqli_connect($servername,$username,$password,$db_name);
if(!$conn)
{
  echo "Connection with database not established";
}
?>
<html>
<head>
  <title>
    Zonal_Representatives
  </title>
</head>
<body>
  <form action = "zonal_representatives.php" method="post"/>
  <p>
    <label>Representative_id</label>
    <input type = "varchar" name = "repre_id"/>
  </p>
  <p>
    <label>Representative Name</label>
    <input type = "text" name = "repre_name"/>
  </p>
  <p>
    <label>Representing Zone</label>
    <input type = "text" name = "repre_zone"/>
  </p>
  <p>
    <label>Mobile Number</label>
    <input type = "int" name = "mob_num"/>
  </p>
  <p>
    <label>Address</label>
    <input type = "varchar" name = "add"/>
  </p>
  <p>
    <label>Enrolled Date</label>
    <input type = "date" name = "date"/>
  </p>
  No of client
  <?php
  int count=0;
  $query = "SELECT zone FROM client";
  $query1 = mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($query1,MYSQLI_ASSOC))
  {
    $zone = $row[zone];
    if($zone == $_POST['repre_zone'])
    {
      count = count+1;
    }
  }
  ?>

  <input type = "submit"  value = "submit" name = "submit"/>

</body>
</html>


<?

 if(isset($_POST['submit']))
 {

   if(isset($_POST['repre_id']) && isset($_POST['repre_name']) && isset($_POST['repre_zone']) && isset($_POST['mob_num']) && isset($_POST['add']) && isset($_POST['date']))
   {
     if(($_POST['repre_id'] && $_POST['repre_name'] && $_POST['repre_zone'] && $_POST['mob_num'] && $_POST['add'] && $_POST['date']) != null )
     {
       $sql = "INSERT INTO zonal_representatives(Repre_id,Repre_name,Repre_zone,Repre_contact,Repre_address,Year_Enrolled) VALUES ('$_POST[repre_id]','$_POST[repre_name]',
         '$_POST[repre_zone]','$_POST[mob_num]','$_POST[add]','$_POST[date]')";
         if(mysqli_query($conn,$sql))
         {
           echo "Done";
         }
         else{
           echo "Error";
         }
     }
   }
   else {
     echo "Fill out all the boxes";
   }

 }





 ?>
