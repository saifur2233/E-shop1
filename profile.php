<?php
  require_once('functions/function.php');
  get_header();
 ?>
<div class="profile-area" style="display: flex;align-items: center;justify-content: center;">
  <div class="info">
    <div class="card text-center" style="width:550px;height:400px; margin-top:100px;margin-bottom:100px;padding:10px;font-weight:bold;">
  <div class="card-header">
    <h5>Profile Information</h5>
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped table-responsive table-danger view_table_cus">
      <tr>
          <td>Name</td>
            <td>:</td>
            <td><?= $_SESSION['user_username']; ?></td>
        </tr>
        <tr>
          <td>Email</td>
            <td>:</td>
            <td><?= $_SESSION['user_email']; ?></td>
        </tr>
        <tr>
          <td>Mobile</td>
            <td>:</td>
            <td><?= $_SESSION['user_mobile']; ?></td>
        </tr>

        <tr>
          <td>Password</td>
            <td>:</td>
            <td><?= $_SESSION['user_password']; ?></td>
        </tr>
    </table>
  </div>
  <div class="card-footer text-muted">
<a href="edit-profile.php?ed=<?= $_SESSION['user_id']; ?>" class="btn btn-primary">Edit Profile</a>
  </div>
</div>
  </div>
</div>
 <?php
  get_footer();
  ?>
