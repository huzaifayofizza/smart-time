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
              <h3 class="page-title"> Category Table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Category Table </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category Table</h4>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Category Name</th> 
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                 <?php
                 $queryy = "SELECT * FROM `categroy`";
                 $run = mysqli_query($conn,$queryy);
                 while($data=mysqli_fetch_assoc($run))
                 {
                 ?>
                 <tr>
                 <td><?php echo $data['category_name'] ?></td>
                  <td><a href="updatecatg.php?updateID=<?php echo $data['category_id'] ?>"><button type="button" class="btn btn-outline-info fw-bold">update</button></a></td>
                  <td><a href="deletecatg.php?deleteid=<?php echo $data['category_id'] ?>"><button type="button" class="btn btn-outline-danger fw-bold">delete</button></a></td>
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