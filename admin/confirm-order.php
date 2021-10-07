<?php
    require_once('functions/function.php');
    $id=$_GET['app'];
    $in= "INSERT INTO confirm_order SELECT * FROM shipping_info WHERE id='$id'";
    mysqli_query($con,$in);
    $del="DELETE FROM shipping_info WHERE id='$id'";
    mysqli_query($con,$del);
    header('Location: approve-order.php');
?>
