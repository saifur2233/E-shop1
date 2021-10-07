<?php
  require_once('functions/function.php');
  get_header();
  $id=$_GET['ed'];
  $sel="SELECT * FROM admin_info WHERE id=$id";
  $Q=mysqli_query($con,$sel);
  $info=mysqli_fetch_assoc($Q);
  if(!empty($_POST)){
      $eid=$_POST['eid'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      $fullname=$_POST['fullname'];
      $mobile=$_POST['mobile'];

      if(!empty($eid)){
          $update="UPDATE admin_info SET uname='$username',pass='$password',fullname='$fullname',mobile='$mobile' WHERE id='$id'";
          if(mysqli_query($con,$update)){
              header('Location: profile.php');
          }else{
            echo "Update failed!";
          }
      }else{
          echo "Sorry!";
      }
  }
 ?>
 <div class="col-md-12">
<div class="profile-area" style="display: flex;align-items: center;justify-content: center;">
  <div class="info">
    <div class="card text-center" style="width:550px;height:500px; margin-top:100px;margin-bottom:100px;padding:10px;font-weight:bold;">
  <div class="card-header">
    <h5>Profile Information</h5>
  </div>
  <div class="card-body">
    <form class="" method="post" style="width:500px;">
      <div class="form-group">
      <div class="input-group">
        <input type="hidden" name="eid" value="<?= $_SESSION['admin_id'];?>">
        <span class="input-group-text">Email</span>
        <input type="text" class="form-control" name="email" value="<?= $_SESSION['admin_email']; ?>" disabled>
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
        <span class="input-group-text">Full Name</span>
        <input type="text" class="form-control" name="fullname" value="<?= $_SESSION['admin_fullname']; ?>">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
        <span class="input-group-text">Username</span>
        <input type="text" class="form-control" name="username" value="<?= $_SESSION['admin_name']; ?>">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
        <span class="input-group-text">Mobile Number</span>
        <input type="text" class="form-control" name="mobile" value="<?= $_SESSION['admin_mobile']; ?>">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
        <span class="input-group-text">Password</span>
        <input type="text" class="form-control" name="password" value="<?= $_SESSION['admin_pass']; ?>">
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
 <?php
  get_footer();
  ?>
