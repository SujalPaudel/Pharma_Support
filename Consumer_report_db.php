<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "login";

if(isset($_POST['submit']))
{
$conn = mysqli_connect($servername,$username,$password,$db_name);

                    if($_POST['company_name'] !=null  &&
                    $_POST['last_deal']!=null &&  $_POST['last_pay']!=null && $_POST['credit_left']!=null )
                    {
                    $sql = "INSERT INTO consumer_report(Company_name,Last_deal,last_pay,credit_left) VALUES('$_POST[company_name]',
                      '$_POST[last_deal]',
                      '$_POST[last_pay]','$_POST[credit_left]')";
                      if(!mysqli_query($conn,$sql))
                      {
                        echo "error";
                      }
                      else {
                        echo "ok added";
                      }
                    }

                    else "fill out all the boxes";
                  }


?>
