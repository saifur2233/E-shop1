<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Admin Panel</title>
  </head>
  <body>
    <div class="main-all-content">
      <div class="row" style="background:#006666;">
        <div class="col-md-12 py-2">
          <p style="color:#fff; text-align: center; font-size:28px;font-weight: bold;">Welcome to the Admin Panel</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li><a href="view-customer.php">View Customers</a></li>
            <li><a href="add-customer.php">Add Customers</a></li>
            <li><a href="view-product.php">Products</a></li>
            <li><a href="add-product.php">Add Products</a></li>
            <li><a href="order-list.php">Order list</a></li>
            <li><a href="approve-order.php">Approve Order</a></li>
            <li><a href="messages.php">Messages</a></li>
            <li style="float:right;"><a href="logout.php">Logout</a></li>
            <li style="float:right;"><a class="active" href="profile.php"><i class="fas fa-user-circle"></i> <?= $_SESSION['admin_name']; ?></a></li>
            <li style="float:right;"><a href="#">About</a></li>
          </ul>
        </div>
