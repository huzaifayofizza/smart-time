<?php
include("shared/_navbar.php");
include("shared/_sidebar.php");
require("shared/connection.php");

$updatehonywaaliId = $_GET['updateId'];
$selectt = "SELECT * FROM `product` WHERE `product_id` = '$updatehonywaaliId'";
$result = mysqli_query($conn, $selectt);
$record = mysqli_fetch_assoc($result);

if(isset($_POST['subbtn'])) 
{
    $name = $_POST['pname'];
    $desc = $_POST['dname'];
    $price = $_POST['price'];
    $catg = $_POST['pro_select'];
    $file = $_FILES['image']['name'];
    $filetemp= $_FILES['image']['tmp_name'];
    $filesize = $_FILES['image']['size'];
    $filetype = $_FILES['image']['type'];
    $path = "assets/images/". $file;

    if(is_uploaded_file($filetemp)) {
        if ($filetype == "image/jpeg" || $filetype == "image/jpg" || $filetype == "image/png")
        {
            if ($filesize <= 1000000) 
            {
                move_uploaded_file($filetemp, $path);
                $queryy = "UPDATE `product` SET `product_name`='$name', `product_desc`='$desc',
                 `prod_price`='$price', `product_img`='$path' , `prod_cate_id` = '$catg' WHERE `product_id` = '$updatehonywaaliId'";
                $run = mysqli_query($conn, $queryy);

                if($run) 
                {
                    echo "<script>alert('Updated');</script>";
                } 
                else 
                {
                    echo mysqli_error($conn);
                }
            } else 
            {
                echo "Size Error";
            }
        } else {
            echo "Filetype Not Correct";
        }
    } else {
        $queryy = "UPDATE `product` SET `product_name`='$name', `product_desc`='$desc', `prod_price`='$price' ,
        `product_img`='$path'  , `prod_cate_id` = '$catg' WHERE `product_id` = '$updatehonywaaliId'";
        $run = mysqli_query($conn, $queryy);

        if ($run) {
            echo "<script>alert('Your Product Has Been Updated');</script>";
        } else {
            echo mysqli_error($conn);
        }
    }
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
                                    <input type="text" name="pname" value="<?php echo $record['product_name']?>" class="form-control" id="exampleInputEmail1" placeholder="Enter product name......">
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="dname" class="form-control" value="<?php echo $record['product_desc']?>" id="exampleInputEmail1" placeholder="Enter product desc......">
                                </div>
                                <div class="mb-3">
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" >
                                    <img src="<?php echo $record['product_img']?>" height="160px" width="160px"  alt="">
                                </div>
                                <div class="mb-3">
                                    <input type="" name="price" class="form-control"  value="<?php echo $record['prod_price']?>" id="exampleInputEmail1" placeholder="Enter product price......">
                                </div>
                                <div class="form-group">
                                <select class="form-control" name="pro_select">
                        <?php
                        $queryy = "SELECT * FROM `categroy`";
                        $run = mysqli_query($conn,$queryy);
                        while($data=mysqli_fetch_assoc($run))
                        {
                            if($data['category_id'] == $record['prod_cate_id'])
                            {
                        ?>
                            <option selected value="<?php echo $data['category_id']?>"><?php echo $data['category_name']?></option>
                        <?php }
                        else
                        {   ?>
                            <option  value="<?php echo $data['category_id']?>"><?php echo $data['category_name']?></option>
                     <?php   }
                        } 
                        ?>
                        </select>
                                </div>
                                <br>
                                <button type="submit" name="subbtn" class="btn btn-outline-primary d-flex m-auto">Submit</button>
                            </form>
                        </div>
                    </div>
              </div><br>
              <a href="displayproduct.php"><button class="btn btn-outline-danger">Display Product</button></a>
              
          <?php
include("shared/_footer.php");
?>