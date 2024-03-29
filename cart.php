<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
include("includes/db.php");
?>
<html>
    <head>
        <title>My Online Shop</title>
        <link rel="stylesheet" href="styles/style.css" media="all" />
		<link rel="stylesheet" href="Styles/bootstrap.min.css"/>
		<link rel="stylesheet" href="Styles/font_awesome.css"/>
		
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/font_awesome.min.js"></script>
    </head>
    
    <body>
        <!-- Main Container starts here-->
        <div class="main_wrapper"><div>
				<?php include("includes/top_bar.php"); ?>
			</div>
            <!-- Header starts here-->
             <div id="header">
				<?php include("includes/header.php"); ?>
			</div>
            <!-- Header ends here-->
            
            <!-- Navegation Bar starts here-->
           <?php include("includes/nav_bar.php"); ?>
            <!-- Navegation Bar ends here-->
            
            <!-- Content starts here-->
            <div class="content_wrapper">
                <div>
				<?php include("includes/side_bar.php"); ?>
				</div>
                
                <div id="content_area">
                    
                    <div id="cart_box">
                        <form action="" method="post" enctype="multipart/form-data">
                            <table align="center" width="700" class="table">
                                <tr align="center">
                                    <th>Remove</th>
                                    <th>Product(S)</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                </tr>
                                <?php 
                                $total = 0;
                                global $con; 
                                $ip = getIp(); 
                                $sel_price = "select * from cart where ip_add='$ip'";
                                $run_price = mysqli_query($con, $sel_price); 
                                while($p_price=mysqli_fetch_array($run_price)){
                                    $pro_id = $p_price['p_id']; 
                                    $pro_price = "select * from products where product_id='$pro_id'";
                                    $run_pro_price = mysqli_query($con,$pro_price); 
                                    while ($pp_price = mysqli_fetch_array($run_pro_price)){
                                    $product_price = array($pp_price['product_price']);
                                    $product_title = $pp_price['product_title'];
                                    $product_image = $pp_price['product_image']; 
                                    $single_price = $pp_price['product_price'];
                                    $values = array_sum($product_price); 
                                    $total += $values; 

                                ?>
								
								<?php 
                                if(isset($_POST['update_cart'])){
                                    $qty = $_POST['qty'];
                                    $update_qty = "update cart set qty='$qty'";
                                    $run_qty = mysqli_query($con, $update_qty); 
                                    $_SESSION['qty']=$qty;
                                    $total = $total*$qty;
                                }
                                ?>
                                <tr align="center">
                                <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
                                <td><?php echo $product_title; ?><br>
                                <img src="admin_area/product_images/<?php echo $product_image;?>" width="60" height="60"/>
                                </td>
                                <td><input type="text" size="4" name="qty" value="<?php echo $_SESSION['qty'];?>"/></td>
                             
                                <td><?php echo $single_price." LKR"; ?></td>
                            </tr>
                            <?php } } ?>
                            <tr>
                                    <td colspan="4" align="right"><b>Sub Total:</b></td>
                                    <td><?php echo $total." LKR";?></td>
                                </tr>
                                <tr align="center">
                                    <td><input type="submit" name="update_cart" value="Update Cart" class="btn btn-warning"/></td>
									<td></td>
                                    <td><input type="submit" name="continue" value="Continue Shopping" class="btn btn-warning"/></td>
                                    <td><button class="btn btn-warning"> <a href="checkout.php" style="text-decoration:none; color:black;">Checkout</a></button></td>
                                </tr>
								
							

                            </table>
                        </form>
                        <?php
                        function updatecart(){
                            global $con;
                            $ip = getIp();
                            if(isset($_POST['update_cart'])){
                                foreach($_POST['remove'] as $remove_id){
                                    $delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
                                    $run_delete = mysqli_query($con, $delete_product);
                                    if($run_delete){
                                        echo "<script>window.open('cart.php','_self')</script>";
                                    }
                                }
                            }
                            if(isset($_POST['continue'])){
                                echo "<script>window.open('index.php','_self')</script>";
                            }
                        }
                        echo @$up_cart = updatecart();
                       ?>	

                    </div>

                </div>
            </div>
            <!-- Content ends here-->
            
            <!-- Footer starts here-->
			<footer>
           <?php include("includes/footer.php"); ?>
		   </footer>
            <!-- Footer ends here-->
        </div>
        <!-- Main Container ends here-->
    </body>

</html>