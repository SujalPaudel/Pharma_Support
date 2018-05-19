<?php
$servername = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "login";

$conn = mysqli_connect($servername,$db_user,$db_pass);
  if(!$conn)
  {
    echo "sorry couldnot connect";
  }
  else
  {
    mysqli_select_db($conn,$db_name);
    if(isset($_POST['client_id']))
    {
      if(isset($_POST['com_name']))
      {
        if(isset($_POST['contact']))
        {
          if(isset($_POST['mobile']))
          {
            if(isset($_POST['address']))
            {
              if(isset($_POST['city']))
              {
              if(isset($_POST['cont_info']))
              {
              $sql = "INSERT INTO client(client_id,company_name,cont_person,mobile,address,city,office_cont) VALUES ('$_POST[client_id]','$_POST[com_name]','$_POST[contact]','$_POST[mobile]',
                '$_POST[address]','$_POST[city]','$_POST[cont_info]')";
                $new = mysqli_query($conn,$sql);
                if(!$new)
                {
                  echo "error";
                }
                else {
                echo "added to the new client section";
              }
            }}}}}}}}
            ?>
