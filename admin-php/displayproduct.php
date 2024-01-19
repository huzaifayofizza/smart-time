<?php
include("shared/_navbar.php");
include("shared/_sidebar.php");
require("shared/connection.php");
?>
<!-- Content Start -->
<div class="content">
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Product Table </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Product Table </li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Product Table</h4>
              </p>
              <table class="table">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $queryy = "SELECT * FROM `product`";
                  $run = mysqli_query($conn,$queryy);
                  while($data=mysqli_fetch_assoc($run))
                  {
                  ?>
                  <tr>
                  <td style = "white-space: pre-line"><?php echo $data['product_name'] ?></td>
                  <td style = "white-space: pre-line"><?php echo $data['product_desc'] ?></td>
                  <td ><img src="<?php echo $data['product_img'] ?>"  height="160px" width="160px"></td>
                  <td><?php echo $data['prod_price'] ?></td>
                  <td><a href="updateprod.php?updateId=<?php echo $data['product_id'] ?>"><button type="button" class="btn btn-outline-info fw-bold">update</button></a></td>
                  <td><a href="deleteprod.php?deleteid=<?php echo $data['product_id'] ?>"><button type="button" class="btn btn-outline-danger fw-bold">delete</button></a></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:../../partials/_footer.html -->
  <?php
include("shared/_footer.php");
?>