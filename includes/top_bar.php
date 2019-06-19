				
				 <?php cart(); ?>
				
				<div id="shopping_cart" ">
                    <span style="float:left; font-size:16px; margin-left:20px;">
                        <?php 
                            if(isset($_SESSION['customer_email'])){
                                echo "<b>Logged has : </b>" . $_SESSION['customer_email'];
                            }else {
                                echo "<b>You're not Logged in</b>";
                            }
                        ?>
                    </span>   
                     
					<span style="float:right; font-size:16px; "> 
                        <b style="color:black">Shopping Cart : </b>Total Items: <?php total_items(); ?>  ||  Total Price: <?php total_price(); ?><a href="cart.php" class="btn btn-link btn-sm" style="border-radius:0px;font-weight:bold; height:30px; margin:0px; padding-top:2px;"> Go to Cart</a>
                        
                        <?php 
                            if(!isset($_SESSION['customer_email'])){
                                echo "<a href='checkout.php' class='btn btn-warning btn-sm' style='border-radius:0px;font-weight:bold; height:30px; margin:0px;'>Login</a>";
                            }
                            else {
                                echo "<a href='logout.php' class='btn btn-warning btn-sm' style='border-radius:0px;font-weight:bold; height:30px;'>Logout</a>";
                            }
                        ?>
                    </span>
                </div>