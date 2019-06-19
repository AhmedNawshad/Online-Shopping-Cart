<!DOCTYPE>
<?php
include("functions/functions.php");
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
        <div class="main_wrapper">
			<div>
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
                
                <div id="content_area" class='bg-light'>
                    
                        <?php
                        if(isset($_GET['pro_id'])){
                            $product_id = $_GET['pro_id'];
                            $get_pro = "select * from products where product_id='$product_id'";
                            $run_pro = mysqli_query($con, $get_pro); 
                            while($row_pro=mysqli_fetch_array($run_pro)){
                                $pro_id = $row_pro['product_id'];
                                $pro_title = $row_pro['product_title'];
                                $pro_price = $row_pro['product_price'];
                                $pro_image = $row_pro['product_image'];
                                $pro_desc = $row_pro['product_desc'];
                                echo"
                                    <div id='pro_details' >
									
                                        <h3 style='text-align:center;'>$pro_title</h3>
										<center>
                                        <img src='admin_area/product_images/$pro_image'  width='180' height='180' />
										</center>
                                        <p><b>Price : $pro_price LKR</b></p>
										<div style='width:600px;'>
                                        <p style='border-bottom:1px solid black;'> $pro_desc</p>
										</div>
                                        <a href='index.php' style='float:left'>Go Back</a>
                                        <a href='index.php?pro_id=$pro_id'><button style='float:right' class='btn btn-outline-primary'>Add to Cart</button></a>
										
                                    </div>

                                ";

                            }
                        }
                        ?>
                   
                </div>
            </div>
            <!-- Content ends here-->
            
            <!-- Footer starts here-->
            <?php include("includes/footer.php"); ?>
            <!-- Footer ends here-->
        </div>
        <!-- Main Container ends here-->
    </body>

</html>