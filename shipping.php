<?php
 require_once('functions/function.php');
 get_header();
 needLogged();
 ?>
 <div class="container bg-info my-5 py-2" style="height:80px; width:800px;">
   <h1 class="text-center text-white mb-5"
   style="font-family: 'Abril Fatface', cursive;"> PLACE TO ORDER</h1>
 </div>
 <div class="shipping_details my-5">
   <div class="container">
     <div class="row">
       <div class="col-md-6">
         <div class="card">
           <div class="card-header">Shipping Items</div>
           <div class="card-body">
             <table class="table table-info table-striped">
               <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product Name</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price</th>
                  <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                  <?php

         					if(!empty($_SESSION["shopping_cart"]))
         					{
                    $i = 0;
         						$total = 0;
         						foreach($_SESSION["shopping_cart"] as $keys => $values)
         						{
         					?>
                <tr>
                  <th scope="row"><?php echo ++$i; ?></th>
                  <td><?php echo $values["item_name"]; ?></td>
       						<td><?php echo $values["item_quantity"]; ?></td>
       						<td>$<?php echo $values["item_price"]; ?></td>
       						<td>$<?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                </tr>
                <?php
       							$total = $total + ($values["item_quantity"] * $values["item_price"]);
       						}
       					?>
       					<tr>
       						<td colspan="4" align="right">Total</td>
       						<td align="right">$<?php echo number_format($total, 2); ?></td>

       					</tr>
       					<?php
       					}
       					?>
              </tbody>
             </table>
           </div>
         </div>
       </div>
       <div class="col-md-6">
         <div class="card">
           <div class="card-body">
             <img src="images/shipping.jpg" class="responsive img-fluid" alt="">
           </div>
         </div>
       </div>
     </div>
     </div>
   </div>
       <div class="ship-page-divider" style="border-top: 5px dashed #ff0066;"></div>
   <div class="info_details my-5">
     <?php
     if(!empty($_POST)){
     $fullname = $_POST['fullname'];
     $phone = $_POST['phone'];
     $city = $_POST['city'];
     $zip = $_POST['zip'];
     $address = $_POST['address'];
     $paymethod = $_POST['paymethod'];
     $mobile = $_POST['mobile'];
     $transactionId = $_POST['transactionId'];

     $insert="INSERT INTO shipping_info(fullname,phone,city,zip,address,paymethod,mobile,transactionId)
     VALUES('$fullname','$phone','$city','$zip','$address','$paymethod','$mobile','$transactionId')";
     if(mysqli_query($con,$insert)){
         echo '<script>alert("Successfully")</script>';
         header('Location: last.php');
     }else{
         echo '<script>alert("Sending Failed!")</script>';
     }
   }
      ?>
    <form class="form-group" method="post">
     <div class="container">
       <div class="row">
         <div class="col-md-7">
             <div class="card">
               <div class="card-header">
                 Your Shipping Information
               </div>
               <div class="card-body">
                 <div class="mb-2 row">
                   <label for="fullname" class="col-md-3 col-form-label">Full Name:</label>
                   <div class="col-md-9">
                     <input type="text" class="form-control" name="fullname" required>
                   </div>
                 </div>
                 <div class="mb-2 row">
                   <label for="phone" class="col-md-3 col-form-label">Phone Number:</label>
                   <div class="col-md-9">
                     <input type="text" class="form-control" name="phone" required>
                   </div>
                 </div>
                 <div class="mb-2 row">
                   <label for="city" class="col-md-3 col-form-label">City:</label>
                   <div class="col-md-9">
                     <input type="text" class="form-control" name="city" required>
                   </div>
                 </div>
                 <div class="mb-2 row">
                   <label for="zip" class="col-md-3 col-form-label">Zip Code:</label>
                   <div class="col-md-9">
                     <input type="text" class="form-control" name="zip" required>
                   </div>
                 </div>
                 <div class="mb-2 row">
                   <label for="address" class="col-md-3 col-form-label">Address:</label>
                   <div class="col-md-9">
                     <input type="text" class="form-control" name="address" required>
                   </div>
                 </div>
               </div>
             </div>
         </div>
         <div class="col-md-5">
            <div class="card">
              <div class="card-header">
                Your Payment Information
              </div>
              <div class="card-body">
                <div class="mb-2 row">
                  <label for="fullname" class="col-md-3 col-form-label">Payment:</label>
                  <div class="col-md-9">
                    <select name="paymethod">
                      <option value="bkash">Bkash</option>
                      <option value="nagad">Nagad</option>
                      <option value="roket">Roket</option>
                    </select>
                  </div>
                </div>
                <div class="mb-2 row">
                  <label for="fullname" class="col-md-3 col-form-label">Phone:</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="mobile" required>
                  </div>
                </div>
                <div class="mb-2 row">
                  <label for="fullname" class="col-md-3 col-form-label">TransactionID:</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="transactionId" required>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <input class="btn btn-primary" type="submit" name="" value="CONFIRM ORDER">
              </div>
            </div>
         </div>
       </div>
     </div>
               </form>
   </div>
 <?php
  get_footer();
  ?>
