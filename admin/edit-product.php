<?php
require_once('functions/function.php');
get_header();
$id=$_GET['e'];
$sel="SELECT * FROM all_products WHERE product_id=$id";
$Q=mysqli_query($con,$sel);
$info=mysqli_fetch_assoc($Q);
if(!empty($_POST)){
    $eid=$_POST['eid'];
    $product_name=$_POST['product_name'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $categories=$_POST['categories'];
    $product_img=$_POST['product_img'];

    if(!empty($product_name)){
        $update="UPDATE all_products SET product_name='$product_name',price='$price',quantity='$quantity',categories='$categories',product_img='$product_img' WHERE product_id='$id'";
        if(mysqli_query($con,$update)){
            header('Location: view-product.php');
        }else{
          echo "Update failed!";
        }
    }else{
        echo "Please enter your name!";
    }
}
 ?>
<div class="col-md-12">
  <div class="container">
    <div class="col-md-8">
      <div class="card text-center">
      <div class="card-header">
        <h5 style="float: left;">Edit Product Information</h5>
      </div>
      <div class="card-body">
        <h5 class="card-title">Edit Product Details</h5>
        <form class="" method="post" style="width:500px;">
          <div class="form-group">
          <div class="input-group">
            <input type="hidden" name="eid" value="<?= $info['product_id'];?>">
            <span class="input-group-text">Product Name</span>
            <input type="text" class="form-control" name="product_name" value="<?= $info['product_name']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
            <span class="input-group-text">Price</span>
            <input type="text" class="form-control" name="price" value="<?= $info['price']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
            <span class="input-group-text">Quantity</span>
            <input type="text" class="form-control" name="quantity" value="<?= $info['quantity']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
            <span class="input-group-text">Category</span>
            <input type="text" class="form-control" name="categories" value="<?= $info['categories']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
            <span class="input-group-text">Product Image</span>
            <input type="text" class="form-control" name="product_img" value="<?= $info['product_img']; ?>">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Update Info</button>
        </form>
      </div>
      <div class="card-footer text-muted">
        
      </div>
    </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
