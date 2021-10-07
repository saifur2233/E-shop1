<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-Shop | Largest Online Shop</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  </head>
  <body>
    <div class="first-maindiv">
    <nav class="fixed">
      <div class="logo">E-Shop</div>
      <label for="btn" class="icon">
        <span class="fa fa-bars"></span>
      </label>
      <input type="checkbox" id="btn">
      <ul>
        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
        <li>
          <label for="btn-1" class="show">Categories +</label>
          <a href="#"><i class="fas fa-list"></i> Categories</a>
          <input type="checkbox" id="btn-1">
          <ul>
            <li><a href="#hotdeals">Hot Deals</a></li>
            <li><a href="#newcollection">New Product</a></li>

          </ul>
        </li>
        <li>
          <label for="btn-2" class="show">About Us +</label>
          <a href="about.php"><i class="far fa-address-book"></i> About Us</a>
        </li>
        <li><a href="contact.php"><i class="fas fa-phone-square-alt"></i> Contact</a></li>
        <li><a href="view_cart.php"><i class="fas fa-shopping-cart"></i> View-Cart</a></li>
        <?php if (empty($_SESSION['user_username'])) {
      ?>
        <li><a href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li> <?php }else{ ?>
          <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li> <?php } ?>
        <li><a href="profile.php"><i class="far fa-user-circle"></i> <?= $_SESSION['user_username']; ?></a></li>
      </ul>
    </nav>
  </div>
