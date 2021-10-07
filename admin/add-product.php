<?php
require_once('functions/function.php');
get_header();

 ?>
<div class="col-md-12">
  <div class="container">
    <div class="card text-center">
    <div class="card-header">
      <h5 style="float: left;">Add Product Info</h5>
    </div>
    <div class="card-body">
      <h5 class="card-title"></h5>
      <?php
      if(!empty($_POST)){
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $categories = $_POST['categories'];
        $image=$_FILES['pic'];
        $imageName='user_'.time().'_'.rand(10000000,1000000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
        if (!empty($product_name)) {
          if(!empty($categories)){
            $insert="INSERT INTO all_products(product_name,price,quantity,categories,product_img)
            VALUES('$product_name','$price','$quantity','$categories','$image')";
            if(mysqli_query($con,$insert)){
              //move_uploaded_file($image,'../images/'.$imageName);
                echo '<script>alert("Successfully product Added to the System..")</script>';
            }else{
                echo '<script>alert(" Failed! Please, Try Again...")</script>';
            }

        }
       }
        }
       ?>
      <form class="" method="post" style="width:500px;">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Product Name" name="product_name">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Price" name="price">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Quantity" name="quantity">
        </div>
        <div class="form-group">
          <select class="form-control" name="categories">
            <option value="hot_deals">Hot Deals</option>
            <option value="new_collection">New Collection</option>
          </select>
        </div>
        <div class="form-group">
        <input type="file" class="form-control-file" name="pic" value="images/10.png">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="card-footer text-muted">
      2 days ago
    </div>
  </div>
  </div>
</div>
<?php get_footer(); ?>
