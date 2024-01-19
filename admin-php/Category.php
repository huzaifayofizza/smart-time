<?php
include("shared/_navbar.php");
include("shared/_sidebar.php");
require("shared/connection.php");
?>
 <!-- Content Start -->
 <div class="content ">
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100  p-4">
                            <h6 class="mb-4">Category Form</h6>
                            <form method="POST">
                                <div class="mb-3">
                                    <input type="text" name="cname" class="form-control" id="exampleInputEmail1" placeholder="Enter category name......">
                                </div>
                                <button type="submit" name="btn" class="btn btn-outline-primary">Submite</button>
                            </form>
                        </div>
                    </div>
    </div>  
          <?php
          if(isset($_POST['btn']))
          {
            $catg_name = $_POST['cname'];

            $queryy = "INSERT INTO `categroy`(`category_name`) VALUES ('$catg_name') ";
            $run = mysqli_query($conn,$queryy);
          }
include("shared/_footer.php");
?>