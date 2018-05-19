<?php

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
  if(isset($_POST['item_id']))
  {
 if(isset($_POST['item_name']))
 {
   if(isset($_POST['item_detail']))
   {
       if(isset($_POST['item_price']))
       {
         if(isset($_POST['quantity']))
         {
             if(isset($_POST['company_name']))
           {
             if(isset($_POST['location']))
             {
               if(isset($_POST['bought_date']))
               {
               if(isset($_POST['expiry_date']))

                 {
                   if($_POST['item_id']!= null && $_POST['item_name'] != null && $_POST['item_detail'] != null && $_POST['item_price'] != null
                   && $_POST['quantity'] != null && $_POST['company_name'] != null && $_POST['location'] != null && $_POST['bought_date'] != null
                   && $_POST['expiry_date'] != null)
                 {
                    $sql = "INSERT INTO stock (item_id,item_name,item_detail,item_price,quantity,company_name,location,bought_date,expire_date)
                      VALUES ('$_POST[item_id]','$_POST[item_name]','$_POST[item_detail]','$_POST[item_price]','$_POST[quantity]','$_POST[company_name]','$_POST[location]','$_POST[bought_date]','$_POST[expiry_date]')";

                      if(!mysqli_query($conn,$sql))
                      {
                        echo"The Item Id Exists:Please Enter A Unique ";
                      }
                      else
                      {
                        echo "done";
                      }
                    }
                    else{
                      echo "Please fill out all the boxes";
                    }
                  }}}}}}}}}}

                    ?>
