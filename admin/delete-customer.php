<?php
    require_once('functions/function.php');
    $id=$_GET['d'];
    $dele="DELETE FROM users WHERE id='$id'";
    mysqli_query($con,$dele);
    header('Location: view-customer.php');
?>
