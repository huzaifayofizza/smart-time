<?php
require("shared/connection.php");
$deletehonywaalarecord = $_GET['deleteid'];

$queryy = "DELETE FROM `product` WHERE product_id = '$deletehonywaalarecord '";
$run = mysqli_query($conn,$queryy);

if($run)
{
    echo "<script>alert('Your Selected Record Has Been Deleted!')
    window.location.href='displayproduct.php'</script>";
}
?>