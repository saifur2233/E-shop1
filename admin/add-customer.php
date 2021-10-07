<?php
require_once('functions/function.php');
get_header();

 ?>
<div class="col-md-12">
  <div class="container">
    <div class="col-md-8">
      <div class="card text-center">
      <div class="card-header">
        <h5 style="float: left;">Add Customer info</h5>
      </div>
      <div class="card-body">
        <h5 class="card-title"></h5>
        <?php
        if(!empty($_POST)){
          $email = $_POST['email'];
          $username = $_POST['username'];
          $mobile = $_POST['mobile'];
          $password = md5($_POST['password']);
          $cpassword = md5($_POST['cpassword']);
          if (!empty($email)) {
            if(!empty($username)){
            if ( $password == $cpassword) {
              $insert="INSERT INTO users(email,username,mobile,password)
              VALUES('$email','$username','$mobile','$cpassword')";
              if(mysqli_query($con,$insert)){
                  echo '<script>alert("Registration Complete.Now, Log in..")</script>';
              }else{
                  echo '<script>alert("Registration Failed! Please, Try Again...")</script>';
              }
            }
          }
         }
          }
         ?>
        <form class="" method="post" style="width:500px;">
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Email" name="email">
          </div>
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Username" name="username">
          </div>
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Mobile" name="mobile">
          </div>
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Password" name="password">
          </div>
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Confirm Password" name="cpassword">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="card-footer text-muted">
      
      </div>
    </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
