<?php
require("shared/connection.php");
session_start();

// if(isset($_SESSION["shopping_cart"])) 
// {
// $cart_count = count(array_keys($_SESSION["shopping_cart"]));
// }
// else
// {
//     $cart_count= "";
// }
?>

<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon2.png" type="">
      <title>Smart-Time</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
      
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.php"><img width="150" src="images/logo2.png" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav text-dark">
                           <a class="nav-link text-dark"  style="font-weight: bold;" href="index.php">Home</a>
                        </li>
                       <li class="nav text-dark dropdown">
                           <a class="nav-link  text-dark dropdown-toggle"  style="font-weight: bold;" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Category <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <?php
                              $queryy = "SELECT * FROM `categroy`";
                              $run = mysqli_query($conn,$queryy);
                              while($data = mysqli_fetch_assoc($run))
                              {
                              ?>
                              <li><a class="text-dark" href="getprod.php?get_ID=<?php echo ($data) ['category_id']?>"><?php echo ($data) ['category_name']?></a></li><hr>
                              <?php } ?>
                              </ul>
                        </li>
                        <li class="nav text-dark">
                           <a class="nav-link text-dark" style="font-weight: bold;"  href="product.php">Products</a>
                        </li>
                        <li class="nav text-dark">
                           <a class="nav-link text-dark" style="font-weight: bold;"  href="about.php">About</a>
                        </li>
                        <li class="nav text-dark">
                           <a class="nav-link text-dark" style="font-weight: bold;"  href="contact.php">Contact</a>
                        </li>
                        <!-- <li class="nav">
                         <a class="nav-" href="single-product.php"><img src="assets/images/cart-icon.png" class=""><span><?php echo $cart_count;?></span></a>
                            </li> -->
                         <li class="scroll-to-section"></li>

                        <?php
                        if(!isset($_SESSION['user_name']))
                        {
                        ?>
                          <li class="nav-">
                           <a class="nav-link text-dark" style="font-weight: bold;" href="login.php">Login</a>
                        </li>
                        <li class="nav-">
                           <a class="nav-link text-dark" style="font-weight: bold;"  href="register.php">Rigestration</a>
                        </li>
                        <?php
                        } else {
                        ?>
                         <li class="nav-">
                           <a class="nav-link text-dark" style="font-weight: bold;" href="#"><?php echo $_SESSION['user_name']?></a>
                        </li>
                        <li class="nav-">
                           <a class="nav-link text-dark" style="font-weight: bold;" href="logout.php">logout</a>
                        </li>
                        <?php
                        } 
                        ?>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>
         <!-- end header section -->