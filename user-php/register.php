<?php
require("shared/connection.php");

if(isset($_POST['submite']))
{
$name = $_POST['uname'];
$email = $_POST['umail'];
$pswd = $_POST['upass'];

$querryy = "INSERT INTO `users`(`user_name`, `user_email`, `user_password`, `user_role_id`)
 VALUES ('$name','$email','$pswd','2')";
 $run - mysqli_query($conn,$querryy);
 if($run)
 {
    echo "<script> alert('User Has Been Registered!')
    window.location.href = 'login.php'</script>";

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
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body ><br><br><br><br><br>

<form action="" method="POST">
<div class="container m-auto mt-5 w-50" style="background-color: #009CFF;">
    <h2 class="text-light text-center" style="font-weight: bold;">Registration form</h2>
    <div class="mb-3"> <br>
      
        <input type="text" class="form-control w-50 m-auto" name="uname" id="exampleFormControlInput1" placeholder="Enter User Name...." required><br>

        <input type="email" class="form-control  w-50 m-auto"  name="umail" id="exampleFormControlInput1" placeholder="Enter E-mail Address ...." required><br>

        <input type="password" class="form-control  w-50 m-auto" name="upass" id="exampleFormControlInput1" placeholder="Enter Your Password here......" required>
        <br>
        <div class="m-auto text-center">
        <button type="submit" class="btn btn-outline-dark m-auto " name="submite">Register</button><br>
        <a href="login.php" type="submit" class="btn btn-outline-danger text-dark mt-2">login</a>
        <a href="index.php" type="submit" class="btn btn-outline-primary text-light mt-2">Back</a>
    </div><br>
      </div>

     
</div>
</form>
</body>
</html>
