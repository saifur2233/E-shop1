<?php
  require_once('functions/function.php');
  get_header();
  needLogged();

  $total_item_cart=0;
   if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["shopping_cart"])) {
      $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
      if(!in_array($_GET["id"], $item_array_id))
       {
         $count = count($_SESSION["shopping_cart"]);
         $item_array = array(
           'item_id'			=>	$_GET["id"],
           'item_name'			=>	$_POST["hidden_name"],
           'item_price'		=>	$_POST["hidden_price"],
           'item_quantity'		=>	$_POST["quantity"]
         );
         $_SESSION["shopping_cart"][$count] = $item_array;
       }
       else
       {
         echo '<script>alert("Item Already Added")</script>';
       }
    }else
     {
       $item_array = array(
         'item_id'			=>	$_GET["id"],
         'item_name'			=>	$_POST["hidden_name"],
         'item_price'		=>	$_POST["hidden_price"],
         'item_quantity'		=>	$_POST["quantity"]
       );
       $_SESSION["shopping_cart"][0] = $item_array;
     }
  }

  //remove item from Cart
 ?>
    <div class="Slider-area">
    </div>
    <div class="gap-area">
      <div class="containerbar">
        <marquee behavior="scroll" direction="left">
          <h4 style="color:#fff;">Welcome to E-Shopping. E-Shopping is one of the biggest online shopping mall.
           Lorem Ipsum is simply dummy text of the printing and typesetting industry.
           Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
            type and scrambled it to make a type specimen book.
        </h4> </marquee>
      </div>
    </div>
    <div class="product-area">
      <div class="container">
      <div id="hotdeals" class="container d-block bg-primary text-center py-3" style="height:60px";>
     <h1 class="text-center text-white mb-5"
     style="font-family: 'Abril Fatface', cursive;"> HOT DEALS OF THE DAY</h1>
     </div>

          <div class="row mt-3" id="hotdeals">
            <?php
                  $sel="SELECT * FROM all_products WHERE categories='hot_deals' ORDER BY product_id DESC";
                  $Q=mysqli_query($con,$sel);
                  while($data=mysqli_fetch_assoc($Q)){
               ?>
               <form class="form-group" method="post" action="index.php?action=add&id=<?= $data['product_id'];?>" enctype="multipart/form-data">
            <div class="col-md-3 my-2">
              <div class="card" style="width: 18rem;">
               <img src="<?= $data['product_img'];?>" height="200" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title"><?= $data['product_name']; ?></h5>
                 <h6 class="card-title">Price: <?= $data['price'];?>TK</h6>
                 <input type="hidden" name="hidden_name" value="<?= $data['product_name']; ?>">
                 <input type="hidden" name="hidden_price" value="<?= $data['price'];?>">
                 <input class="form-control mb-2" type="number" min="1" max="50" name="quantity" value="1">
                 <input type="submit" name="add_to_cart" style="margin-top:5px;background:#009933;color:#fff;" class="btn btn-success w-100 rounded" value="Add to Cart" />
               </div>
               </div>
            </div>
              </form>
            <?php } ?>
          </div>


      </div>
    </div>
    <div class="product-area">
      <div class="container">
      <div class="container d-block bg-primary text-center py-3" style="height:60px";>
     <h1 class="text-center text-white mb-5"
     style="font-family: 'Abril Fatface', cursive;"> NEW COLLECTION OF THE DAY</h1>
     </div>
          <div class="row mt-3" id="newcollection">
            <?php
                  $sel="SELECT * FROM all_products WHERE categories='new_collection' ORDER BY product_id DESC";
                  $Q=mysqli_query($con,$sel);
                  while($data=mysqli_fetch_assoc($Q)){
               ?>
               <form class="form-group" method="post" action="index.php?action=add&id=<?= $data['product_id'];?>" enctype="multipart/form-data">
            <div class="col-md-3 my-2">
              <div class="card" style="width: 18rem;">
               <img src="<?= $data['product_img'];?>" height="200" class="card-img-top" alt="...">
               <div class="card-body">
                 <h5 class="card-title"><?= $data['product_name']; ?></h5>
                 <h6 class="card-title">Price: <?= $data['price'];?>TK</h6>
                 <input type="hidden" name="hidden_name" value="<?= $data['product_name']; ?>">
                 <input type="hidden" name="hidden_price" value="<?= $data['price'];?>">
                 <input class="form-control mb-2" type="number" min="1" max="50" name="quantity" value="1">
                 <input type="submit" name="add_to_cart" style="margin-top:5px;background:#009933;color:#fff;" class="btn btn-success w-100 rounded" value="Add to Cart" />
               </div>
               </div>
            </div>
          </form>
          <?php } ?>
          </div>
      </div>
    </div>
<?php
get_footer();
 ?>
