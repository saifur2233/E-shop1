<?php
  require_once('functions/function.php');
  get_header();

  if(isset($_GET["action"]))
   {
     if($_GET["action"] == "delete")
     {
       foreach($_SESSION["shopping_cart"] as $keys => $values)
       {
         if($values["item_id"] == $_GET["id"])
         {
           unset($_SESSION["shopping_cart"][$keys]);
           echo '<script>alert("Item Removed")</script>';
           echo '<script>window.location="view_cart.php"</script>';
         }
       }
     }
   }
 ?>
 <div class="slider-for-cart">

 </div>
 <div class="container bg-info my-5 py-2" style="height:80px; width:800px;">
   <h1 class="text-center text-white mb-5"
   style="font-family: 'Abril Fatface', cursive;"> VIEW SELECTED PRODUCTS</h1>
 </div>
 <div class="cart-main-section">
   <div class="container">
     <div class="table-responsive">
       <table class="table table-bordered">
          <tr>
            <th width="40%">Product Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
          </tr>
          <?php
          if(!empty($_SESSION["shopping_cart"]))
          {
            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
          ?>
          <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"]; ?></td>
            <td>$ <?php echo $values["item_price"]; ?></td>
            <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
            <td><a href="view_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
          <?php
              $total = $total + ($values["item_quantity"] * $values["item_price"]);
            }
          ?>
          <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right">$ <?php echo number_format($total, 2); ?></td>
            <td></td>
          </tr>
          <?php
          }
          ?>
        </table>
     </div>
     <div class="shipping-btn my-3">
      <?php

                  if(!empty($_SESSION["shopping_cart"]))
                  { ?>
                    <a href="shipping.php" class="btn btn-info">Go to Shipping</a>
                 <?php }else{ ?>
                  <h5>You don't select any items!!!</h5>
                 <?php }
                  ?>
       
     </div>
   </div>
 </div>
 <?php
  get_footer();
  ?>
