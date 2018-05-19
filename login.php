  <!DOCTYPE html>
      <html>
      <head>
        <title>Login Page</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
      </head>
      <body>

          <form action = "login.php" method = "POST">
            <p>
              <label>Username:</label>
              <input type = "text"   name = "Username" />
            </p>
            <p>
              <label>Password:</label>
              <input type = "password" name = "pass" />
            </p>
            <p>
              <input type = "submit"  value = "login" name = "submit" />
            </p>
          </form>

      </body>
      </html>
      <?php
        session_start();
        if(isset($_POST['submit']))
        {
          $db ="login";
          $Username = $_POST['Username'];
          $Password = $_POST['pass'];
          $sql = "SELECT * FROM users WHERE Username = '$Username' and Password='$Password';";

          $servername="localhost";
          $db_user = "root";
          $db_pass="";
          $conn = mysqli_connect($servername, $db_user,$db_pass,$db);



          $query = mysqli_query($conn,$sql);
          $row = mysqli_fetch_array($query);
          $id = $row['id'];
          $user=$row['Username'];
          $login_password = $row['Password'];
          if($Password==null || $Username==null){
            echo "Please fill all the boxes";
          }
          else if($Password == $login_password && $Username==$user)
          {
            header("Location:welcome.php");
            $_SESSION['login_status'] = true;
          }

            else {
              echo"Invalid Info";
            }

          }
        ?>
