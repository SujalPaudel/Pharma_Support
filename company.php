<?php
include 'session.php';
 ?>
<html>
<head>
  <title>
    Dealer_Companies And Factories
  </title>
</head>
<body>
<form action = "company_connect.php" method = "POST"/>
<p>
  <label>Company Id : </label>
  <input type = "text" name = "comp_id"/>
</p>
<p>
  <label>Company Name : </label>
  <input type = "text" name = "comp_name"/>
</p>
<p>
  <label>Company Adress : </label>
  <input type = "text" name = "comp_address"/>
</p>
<p>
  <label>Contact Number : </label>
  <input type= "int" name = "cont_no"/>
</p>
<p>
Company Type:
<select name = "type">
  <option value = "dealer">Dealer </option>
  <option value = "industry">Industry </option>
  <option value = "salesperson">Salesperson</option>
</select>
</p>
<p>
  <label>Representative : </label>
  <input type = "text" name  = "representative"/>
</p>

<p>
  <label>Mobile Number : </label>
  <input type = "int" name ="mob_no"/>
</p>
<input type = "submit" value = "Add Company" name = "add"/>
</body>
</html>
