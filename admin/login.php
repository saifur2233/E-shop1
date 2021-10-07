<?php
      require_once('functions/function.php');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
  body{
    justify-content: center;
    display: flex;
  }
</style>
  </head>
  <body>
    <div class="card text-center" style="width:500px;height:300px; margin-top:200px;">
      <div class="card-header">
        Admin Login Panel
      </div>
      <div class="card-body">
        <?php
            if(!empty($_POST)){
                $uname=$_POST['uname'];
                $pass=$_POST['pass'];
                $sel="SELECT * FROM admin_info WHERE uname='$uname' AND pass='$pass'";
                $Q=mysqli_query($con,$sel);
                $data=mysqli_fetch_assoc($Q);

                if($data){
                    $_SESSION['admin_id']=$data['id'];
                    $_SESSION['admin_name']=$data['uname'];
                    $_SESSION['admin_email']=$data['email'];
                    $_SESSION['admin_fullname']=$data['fullname'];
                    $_SESSION['admin_mobile']=$data['mobile'];
                    $_SESSION['admin_pass']=$data['pass'];
                    header('Location: index.php');
                }else{

                   echo "Username or Password didn't match!";
                }
            }
        ?>
        <form class="" method="post" action="">
  <div class="mb-3">
    <input type="text" name="uname" placeholder="Username" class="form-control">
  </div>
  <div class="mb-3">
    <input type="password" name="pass" placeholder="Password" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="card-footer text-muted">
        
      </div>
    </div>
  </body>
</html>
