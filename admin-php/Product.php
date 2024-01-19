<?php
require("shared/connection.php");
include("shared/_navbar.php");
include("shared/_sidebar.php");

if(isset($_POST['subbtn']))
{
  $p_name = $_POST['pname'];
  $d_name = $_POST['dname'];
  $imgname = $_FILES['image']['name'];
  $imgpath = $_FILES['image']['tmp_name'];
  $folder = "assets/images/".$imgname;
  move_uploaded_file($imgpath,$folder);
  $price = $_POST['price'];
  $pcatg = $_POST['prod_select'];

  $queryy = "INSERT INTO `product`(`product_name`, `product_desc`, `product_img`, `prod_price`, `prod_cate_id`)
   VALUES ('$p_name','$d_name','$folder','$price','$pcatg')";
   $result = mysqli_query($conn,$queryy);
   echo "<script>alert('Your Product Has Been Inserted!');</script>";
}


?>


 <!-- Content Start -->
 <div class="content">
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100  p-4">
                            <h6 class="mb-4">product Form</h6>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input type="text" name="pname" class="form-control" id="exampleInputEmail1" placeholder="Enter product name......">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="dname" class="form-control" id="exampleInputEmail1" placeholder="Enter product desc......">
                                </div>
                                <div class="mb-3">
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="mb-3">
                                    <input type="" name="price" class="form-control" id="exampleInputEmail1" placeholder="Enter product price......">
                                </div>
                                <div class="form-group">
                                 <select class="form-control form-control" id="exampleFormControlSelect1" name="prod_select" Required>
                                  <?php
                                  $queryy = "SELECT * FROM `categroy`";
                                  $run = mysqli_query($conn,$queryy);
                                  while($data = mysqli_fetch_assoc($run))
                                  {
                                  ?>
                                   <option value="<?php echo $data['category_id']?>"><?php echo $data['category_name']?></option>
                                    <?php } ?>
                                </select>
                                </div>
                                <br>
                                <button type="submit" name="subbtn" class="btn btn-outline-primary">Submite</button>
                            </form>
                        </div>
                    </div>
              </div>
              
          <?php
include("shared/_footer.php");
?>