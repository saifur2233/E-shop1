<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $dele="DELETE FROM shipping_info WHERE id='$id'";
    mysqli_query($con,$dele);
    header('Location: approve-order.php');
?>
