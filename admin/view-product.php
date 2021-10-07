<?php
require_once('functions/function.php');
get_header();

 ?>
<div class="col-md-12">
  <div class="container">
    <div class="card text-center">
    <div class="card-header">
      <h5 style="float: left;">All Product Information</h5>
    </div>
    <div class="card-body">
      <h5 class="card-title">View Product Details</h5>
      <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Category</th>
        <th scope="col">Product Img</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $i = 0;
          $sel="SELECT * FROM all_products ORDER BY product_id DESC";
          $Q=mysqli_query($con,$sel);
          while($data=mysqli_fetch_assoc($Q)){
      ?>
      <tr>
        <th scope="row"><?php echo ++$i; ?></th>
        <td><?= $data['product_name']; ?></td>
        <td><?= $data['price']; ?></td>
        <td><?= $data['quantity']; ?></td>
        <td><?= $data['categories']; ?></td>
        <td><?= $data['categories']; ?></td>
        <td>
          <a href="edit-product.php?e=<?= $data['product_id']; ?>" class="btn btn-primary">Edit</a>
          <a href="delete-product.php?d=<?= $data['product_id']; ?>" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></a> </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
    </div>
    <div class="card-footer text-muted">
      
    </div>
  </div>
  </div>
</div>
<?php get_footer(); ?>
