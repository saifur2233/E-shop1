<?php
require_once('functions/function.php');
get_header();

 ?>
<div class="col-md-12">

  <div class="card text-center">
  <div class="card-header">
    <h5 style="float: left;">Pennding Order</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title">Waiting for Approval</h5>
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Phone</th>
      <th scope="col">City</th>
      <th scope="col">Zip</th>
      <th scope="col">Address</th>
      <th scope="col">Payment</th>
      <th scope="col">mobile</th>
      <th scope="col">TransactionId</th>
      <th scope="col">Approve</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
        $sel="SELECT * FROM shipping_info ORDER BY id DESC";
        $Q=mysqli_query($con,$sel);
        while($data=mysqli_fetch_assoc($Q)){
    ?>
    <tr>
      <th scope="row"><?php echo ++$i; ?></th>
      <td><?= $data['fullname']; ?></td>
      <td><?= $data['phone']; ?></td>
      <td><?= $data['city']; ?></td>
      <td><?= $data['zip']; ?></td>
      <td><?= $data['address']; ?></td>
      <td><?= $data['paymethod']; ?></td>
      <td><?= $data['mobile']; ?></td>
      <td><?= $data['transactionId']; ?></td>
      <td><a href="confirm-order.php?app=<?= $data['id']; ?>" class="btn btn-primary mr-2">Approve</a><a href="delete-order.php?d=<?= $data['id']; ?>" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></a> </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
</div>

<?php get_footer(); ?>
