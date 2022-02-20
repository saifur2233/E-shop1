<?php
  require_once('functions/function.php');
  get_header();
 ?>
 <div class="container bg-info my-5 py-2" style="height:80px; width:800px;">
   <h1 class="text-center text-white mb-5"
   style="font-family: 'Abril Fatface', cursive;"> CONTACT FORM</h1>
 </div>
 <div class="contact-area bg-light">
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <div class="contact">
           <?php
               if(!empty($_POST)){
                   $fname = $_POST['fname'];
                   $lname = $_POST['lname'];
                   $email = $_POST['email'];
                   $phone = $_POST['phone'];
                   $message = $_POST['message'];

                   $insert="INSERT INTO contact_messages(fname,lname,email,phone,message)
                   VALUES('$fname','$lname','$email','$phone','$message')";
                   if(mysqli_query($con,$insert)){
                       echo '<script>alert("Your Message Successfully Send...")</script>';
                   }else{
                       echo '<script>alert("Sending Failed! Please, Try Again...")</script>';
                   }
                 }
            ?>
           <form class="form-group" action="#" method="post">
             <div class="row">
               <div class="col-md-6 mb-3">
                 <input class="form-control" type="text" name="fname" placeholder="First Name" value="" required>
               </div>
               <div class="col-md-6 mb-3">
                 <input class="form-control" type="text" name="lname" placeholder="Last Name" value="" required>
               </div>
               <div class="col-md-12 mb-3">
                 <input class="form-control" type="text" name="email" placeholder="Eamil" value="" required>
               </div>
               <div class="col-md-12 mb-3">
                 <input class="form-control" type="text" name="phone" placeholder="Phone Number" value="" required>
               </div>
               <div class="col-md-12 mb-4">
              <textarea class="form-control" placeholder="Write your message" name="message" required></textarea>
              </div>
              <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
              </div>
             </div>
           </form>
         </div>
       </div>
       <div class="col-md-4">
         <div class="divider"></div>
         <div class="shop_address" style="border-left: 2px solid #ff0066;height: 350px; padding-left:30px;">
           <h4 style="padding-top:40px;font-weight:bold;color:#17a2b8;">Contact Info</h4>
           <p style="font-weight:bold;padding-top:20px;"><i style="color: #ff0066;" class="fas fa-phone-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;  01838082983</p>
           <p style="font-weight:bold;"><i style="color: #ff0066;" class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp; contact.eshopping@gmail.com</p>
           <p style="font-weight:bold;"><i style="color: #ff0066;" class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp; 12/C Uttora, Dhaka, Bangladesh</p>
         </div>
       </div>
     </div>
   </div>

 </div>
 <?php
  get_footer();
  ?>
