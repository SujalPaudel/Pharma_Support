<html>
<head>
  <title>
    Staff_Info
  </title>
</head>
<body>
  <form action = "staffs_info_db.php" method = "POST"/>
  <p>
  <label>Staff Name:</label>
    <input type = "text" name = "staff_name"/>
  </p>
  <p>
    <label>Address:</label>
    <input type = "text" name = "address"/>
  </p>
  <p>
  Gender:
  <select name = "gender">
    <option vaue = "male">Male</option>
    <option value = "female">Female </option>
  </select>
</p>
  <p>
    <label>Contact Number:</label>
    <input type = "int" name = "number"/>
  </p>
  <p>
    <label>Blood Group:</label>
    <input type = "text" name = "blood"/>
  </p>
  <p>
    <label>Position:</label>
    <input type = "text" name = "post"/>
  </p>
  <p>
    <label>Salary:</label>
    <input type = "text" name = "salary"/>
  </p>
  <input type = "submit" value = "submit" name = "submit"/>
</body>
</html>
