<html>
<head>
  <title> Supplies </title>
  <link rel = "stylesheet" href = "style.css"/>
</head>
<body>
  <form action = "connect.php" method = "POST">
    <p>
      <label>Item Id:</label>
      <input type = "text" name = "item_id" />
    </p>
    <p>
      <label>Item Name:</label>
      <input type = "text" name = "item_name" />
    </p>
    <p>
      <label>Item Detail:</label>
      <input type = "text" name = "item_detail" />
    </p>
    <p>
      <label>Item Price(PerStandardUnit):</label>
      <input type = "String" name = "item_price" />
    </p>
    <p>
    <label>Quantity:</label>
    <input type = "int" name = "quantity" />
  </p>
<p>
  <label>Company Name:</label>
  <input type = "text" name = "company_name" />
</p>
<p>
<label>Location:</label>
<input type = "text" name = "location" />
</p>
<p>
<label>Bought Date:</label>
<input type = "date" name = "bought_date" />
</p>
<p>
<label>Expiry Date:</label>
<input type = "date" name = "expiry_date" />
</p>
<p>
  <input type = "submit" value = "Add Stock" name  = "submit"/>
</p>
  </form>
  </body>
  </html>
