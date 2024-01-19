<?php
include("shared/_navbar.php");
include("shared/_sidebar.php");
require("shared/connection.php");

$updatehonywaaliId2 = $_GET['updateID'];
$selectt = "SELECT * FROM `categroy` WHERE `category_id` = '$updatehonywaaliId2'";
$result = mysqli_query($conn, $selectt);
$record = mysqli_fetch_assoc($result);

if(isset($_POST['btn'])) 
{
    $catg_name = $_POST['ca_name'];

    $querry = "UPDATE `categroy` SET `category_name`='$catg_name' WHERE `category_id`='$updatehonywaaliId2'";    
    $run = mysqli_query($conn, $querry);
   
}
  else {
    echo mysqli_error($conn);
}
  

?>



 <!-- Content Start -->
 <div class="content ">
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100  p-4">
                            <h6 class="mb-4">Category Form</h6>
                            <form method="POST" enctype="multipart/form-data" >
                                <div class="mb-3">
                                    <input type="text" name="ca_name" value="<?php echo $record['category_name'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter category name......">
                                </div>
                                <button type="submitbtn" name="btn" class="btn btn-outline-primary">Submite</button>
                            </form>
                        </div>
                    </div>
                    <a href="displaycategory.php"><button class="btn btn-outline-danger">Display Catgory</button></a>
    </div>  

    <?php
include("shared/_footer.php");
?>