<?php
require_once('functions/function.php');
get_header();

 ?>
<div class="col-md-12">
  <div class="container">
  <div class="card text-center">
  <div class="card-header">
    <h5 style="float: left;">Contact Messages</h5>
  </div>
  <div class="card-body">
    <h5 class="card-title">All Contact Messages</h5>
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Message</th>
      <th scope="col">Reply</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
        $sel="SELECT * FROM contact_messages ORDER BY id DESC";
        $Q=mysqli_query($con,$sel);
        while($data=mysqli_fetch_assoc($Q)){
    ?>
    <tr>
      <th scope="row"><?php echo ++$i; ?></th>
      <td><?= $data['fname']; ?></td>
      <td><?= $data['lname']; ?></td>
      <td><?= $data['email']; ?></td>
      <td><?= $data['phone']; ?></td>
      <td><?= substr($data['message'],0,15); ?>...</td>
      <td><a href="mailto:<?= $data['email'];?>?subject=E-Shopping%20Support%20Team" class="btn btn-primary mr-2">Reply</a></td>
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
  </div>
<?php get_footer(); ?>
