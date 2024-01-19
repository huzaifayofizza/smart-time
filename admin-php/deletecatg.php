<?php
require("shared/connection.php");
$deletehonywaalarecord = $_GET['deleteid'];

$querryy = "DELETE FROM `categroy` WHERE `category_id` = '$deletehonywaalarecord'";
$run = mysqli_query($conn,$querryy);

if($run)
{
    echo "<script>alert('Your Selected Record Has Been Deleted!')
    window.location.href='displaycategory.php'</script>";

}
?>