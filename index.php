<!DOCTYPE>
<?php
session_start();
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
				<?php include("includes/nav_bar.php"); ?>
				
			<div>
				<?php include("includes/side_bar.php"); ?>
			</div>
				
            
            <div class="content_wrapper">
                
              
                <div id="content_area" class="bg-light">
                    
                    <div id="products_box">
                        <?php getPro(); ?>
                        <?php getCatPro(); ?>
                        <?php getBrandPro(); ?>
                    </div>
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