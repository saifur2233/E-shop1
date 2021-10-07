<?php
require_once('functions/function.php');
get_header();
$id=$_GET['ed'];
$sel="SELECT * FROM users WHERE id=$id";
$Q=mysqli_query($con,$sel);
$info=mysqli_fetch_assoc($Q);
if(!empty($_POST)){
    $eid=$_POST['eid'];
    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    if(!empty($password)){
        $update="UPDATE users SET username='$username',mobile='$mobile',password='$password' WHERE id='$id'";
        if(mysqli_query($con,$update)){
            header('Location: view-customer.php');
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
        <h5 style="float: left;">Edit Customer Information</h5>
      </div>
      <div class="card-body">
        <h5 class="card-title">Edit Customer Details</h5>
        <form class="" method="post" style="width:500px;">
          <div class="form-group">
          <div class="input-group">
            <input type="hidden" name="eid" value="<?= $info['id'];?>">
            <span class="input-group-text">Email</span>
            <input type="text" class="form-control" name="email" value="<?= $info['email']; ?>" disabled>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
            <span class="input-group-text">Username</span>
            <input type="text" class="form-control" name="username" value="<?= $info['username']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
            <span class="input-group-text">Mobile Number</span>
            <input type="text" class="form-control" name="mobile" value="<?= $info['mobile']; ?>">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
            <span class="input-group-text">Password</span>
            <input type="text" class="form-control" name="password" value="<?= $info['password']; ?>">
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
