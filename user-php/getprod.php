<?php
require("Shared/connection.php");
include("shared/_navbar.php");
?>
      <!-- inner page section -->
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>Specfic Product</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->


   <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
            <div class="row">
            <?php
               $record = $_GET['get_ID'];
               $queryy = "SELECT * FROM `product` INNER JOIN categroy ON product.prod_cate_id = categroy.category_id WHERE prod_cate_id =  $record" ;
               $run = mysqli_query($conn, $queryy);
               while($data = mysqli_fetch_assoc($run))
               {
               ?>
               <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           
                          
               <form action="" method="POST">
                  <input type="hidden" value="<?php echo $data['product_id']?>" >
                  <?php if (isset($_SESSION['user_id'])) { ?>
                   <button type="submit" name="submit" class="btn btn-outline-dark">Add to Cart</button>
                   <?php } else { ?>
                    <button type="button" name="button" class="btn d-flex m-auto"><a
                   class="btn btn-dark  d-flex m-auto" href="login.php">Add to Cart</a></button>

                           <?php } ?>

               </form>
               </div>
                        </div>
                        <div class="detail-box">
                        <h5>
                        <?php echo $data ['product_name']?>
                        </h5>
                        <h6>
                        <span>$</span><?php echo $data ['prod_price']?>
                        </h6>
                      
                  
                     </div>
                     <div class="img-box">
                        <img src="../admin-php/<?php echo $data ['product_img']?>" alt="">`
                     </div>
                     <h6><span style="font-weight: bold;">Desc:</span> <?php echo $data ['product_desc']?></h6>
            </div>
         </div>
         <?php
               }
               ?> 
          
            
            </section>
      
            <div class="text-center ">
            <a href="product.php" class="text-light"><button class="btn btn-outline-dark w-25"  style="font-weight:bold;"> View All products</button></a>
             <br><hr></div>

      <?php
      include("shared/_footer.php");
      ?>