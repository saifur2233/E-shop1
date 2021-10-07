<?php
require_once('functions/function.php');
get_header();

 ?>
<div class="col-md-12">
  <div class="admin-info" style="display: flex;align-items: center;justify-content: center;">
  <div class="card text-center" style="width:500px;height:500px; margin-top:100px;margin-bottom:100px;padding:10px;font-weight:bold; font-size:20px;">
<div class="card-header">
  <h5>Profile Information</h5>
</div>
<div class="card-body">
  <table class="table table-bordered table-striped table-responsive view_table_cus">
    <tr>
        <td>Name</td>
          <td>:</td>
          <td><?= $_SESSION['admin_fullname']; ?></td>
      </tr>
      <tr>
          <td>Name</td>
            <td>:</td>
            <td><?= $_SESSION['admin_name']; ?></td>
        </tr>
      <tr>
        <td>Email</td>
          <td>:</td>
          <td><?= $_SESSION['admin_email']; ?></td>
      </tr>
      <tr>
        <td>Mobile</td>
          <td>:</td>
          <td><?= $_SESSION['admin_mobile']; ?></td>
      </tr>

      <tr>
        <td>Password</td>
          <td>:</td>
          <td><?= $_SESSION['admin_pass']; ?></td>
      </tr>
  </table>
</div>
<div class="card-footer text-muted">
<a href="edit-profile.php?ed=<?= $_SESSION['admin_id']; ?>" class="btn btn-primary">Edit Profile</a>
</div>
</div>
</div>
</div>
 <?php get_footer(); ?>
