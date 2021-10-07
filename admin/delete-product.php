<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $dele="DELETE FROM all_products WHERE product_id='$id'";
    mysqli_query($con,$dele);
    header('Location: view-product.php');
?>
