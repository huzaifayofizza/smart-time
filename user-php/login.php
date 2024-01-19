<?php
require("shared/connection.php");
session_start();

 if(isset($_SESSION['User_Name']))
 {
   header("location:index.php");
 }

 if(isset($_POST['login']))
 {
   $email = $_POST['mail'];
   $pass = $_POST['pass'];

   $queryy = "SELECT * FROM `users` WHERE `user_email`='$email' AND  `user_password`='$pass'";
   $run = mysqli_query($conn,$queryy);
   $row = mysqli_fetch_assoc($run);
   if(mysqli_num_rows($run)>0)
   {
      if($row['user_role_id'] == 1)
      {
         $_SESSION['user_id'] = $row['user_id'];
         $_SESSION['user_name'] = $row['user_name'];
         $_SESSION['user_email'] = $row['user_email'];
         $_SESSION['user_password'] = $row['user_password'];
         header("location:../admin-php/index.php");
      }
      else
      {
         $_SESSION['user_id'] = $row['user_id'];
         $_SESSION['user_name'] = $row['user_name'];
         $_SESSION['user_email'] = $row['user_email'];
         $_SESSION['user_password'] = $row['user_password'];
         header("location:index.php");
      }
   }
   else
    {
       echo "<h2 class='text-center text-danger'>Login Denied</h2>";
    }
 }

?>
     
     

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon2.png" type="">
    <title>sign-up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <br><br><br><br><br><br><br>

<div class="container m-auto mt-5 w-50" style="background-color: #009CFF;">
    <h2 class="text-center text-light" style="font-weight: bold;">Login form</h2>
    <div class="mb-3"> <br>
    <form action="" method="POST">
        <input type="email" class="form-control  w-50 m-auto" id="exampleFormControlInput1" name="mail" placeholder="Enter E-mail Address ...." required><br>

        <input type="password" class="form-control  w-50 m-auto" id="exampleFormControlInput1" name="pass" placeholder="Enter Your Password here......" required>
        <br>
        <div class="m-auto text-center">

        <button type="submit" class="btn btn-outline-dark m-auto" name="login">login</button>
        </form>
    </div>
      </div>
     
      <div class="m-auto text-center">
      <a href="register.php"><button type="submit" class="btn btn-outline-danger m-auto">Registration</button></a>
      <a href="index.php" type="submit" class="btn btn-outline-primary text-light">Back</a>

      </div> <br>
     

</div>



</body>
</html>    
