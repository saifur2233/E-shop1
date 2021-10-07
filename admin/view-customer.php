<?php
require_once('functions/function.php');
get_header();

 ?>
<div class="col-md-12">
  <div class="card text-center">
  <div class="card-header">
    <h5 style="float: left;">Customer Information</h5> <a style="float: right;" href="#" class="btn btn-primary">Go somewhere</a>
  </div>
  <div class="card-body">
    <h5 class="card-title">View Customer Details</h5>
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
        $sel="SELECT * FROM users ORDER BY id DESC";
        $Q=mysqli_query($con,$sel);
        while($data=mysqli_fetch_assoc($Q)){
    ?>
    <tr>
      <th scope="row"><?php echo ++$i; ?></th>
      <td><?= $data['email']; ?></td>
      <td><?= $data['username']; ?></td>
      <td><?= $data['mobile']; ?></td>
      <td><?= $data['password']; ?></td>
      <td>
        <a href="edit-customer.php?ed=<?= $data['id']; ?>" class="btn btn-primary">Edit</a>
        <a href="delete-customer.php?d=<?= $data['id']; ?>" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></a> </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>
</div>
<?php get_footer(); ?>
