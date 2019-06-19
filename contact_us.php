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
                
                <div id="content_area"><br>
						<div id="contact" style="min-height:660px" class="bg-light">
							
								<div class="container">
								<h1 class="display-4" style="border-bottom:3px solid gray; padding-bottom: 10px; padding-top:20px; text-align:center; font-weight:bold; color:black;">Contact Us</h1></br>
								<div class="row">
								<div class="col-md-5">
									<h4 style="font-weight:; margin-top: ; color:black; font-size:30px; margin-bottom:15px;">Address Info</h4>
									<h3 style="font-size:20px; font-weight:bold;">&nbsp; Email</h3>
									<div class="con_det" style="margin-left:38px;">
									<p style="margin-bottom:0px;">ahmednawshad123@gmail.com</p>
									<p>nawshad1@gmail.com</p>
									</div>
									
									<h3 style="font-size:20px; font-weight:bold;">&nbsp; Phone</h3>
									<div class="con_det" style="margin-left:38px;">
									<p style="margin-bottom:0px;">0094 767676554</p>
									<p>0094 788183396</p>
									</div>
									
									<h3 style="font-size:20px; font-weight:bold;">&nbsp;Address</h3>
									<div class="con_det" style="margin-left:38px;">
									<p style="margin-bottom:0px;">E23/1, Pallipporuwa, Hemmathagama. Sri Lanka</p>
									<p>Kandy - 71640</p>
									</div>
									
								</div>
								<div class="col-md-7">
									
									<h4 style="font-weight:; margin-top: ; color:black; font-size:30px; margin-bottom:15px;">Get in Touch</h4>
									
									<form action="index.php" method="post">
										<div class="input-group mb-3">
												<div class="input-group-prepend">
													<b style="font-size:17px; font-weight:bold; margin-right:20px;">&nbsp; Name &nbsp;&nbsp;&nbsp;</b>
												</div>
											<input type="text" class="form-control" name="name" placeholder="Name" style="border-radius:10px; min-width:140px; margin-top:7px;" required="required">
										</div>
										<div class="input-group mb-3">
												<div class="input-group-prepend">
													<b style="font-size:17px; font-weight:bold; margin-right:20px;">&nbsp; Email &nbsp;&nbsp;&nbsp;&nbsp;</b>
												</div>
											<input type="email" class="form-control" name="email" placeholder="Email" style="border-radius:10px; min-width:140px; margin-top:7px;" required="required">
										</div>
										<div class="input-group mb-3">
												<div class="input-group-prepend">
													<b style="font-size:17px; font-weight:bold; margin-right:20px;">&nbsp; Phone &nbsp;&nbsp;&nbsp;</b>
												</div>
											<input type="text" class="form-control" name="phone" placeholder="Phone" style="border-radius:10px; min-width:140px; margin-top:7px; " required="required">
										</div>
										<div class="input-group mb-3">
												<div class="input-group-prepend">
													<b style="font-size:17px; font-weight:bold; margin-right:20px;">&nbsp; Message</b>
												</div>
											<textarea class="form-control" rows="5" id="comment" name="message" style="border-radius:10px; min-width:140px; margin-top:7px;" placeholder="Message" required="required"></textarea>
										</div>
										<!-- <button type="button" class="btn btn-outline-dark" style="margin-top:10px; font-weight:bold; height:50px;width:150px; float:right; border-radius:30px; margin-bottom:15px;" name="submit">Submit </button> -->
										<input type="submit" name="submit" class="btn btn-outline-dark" value="Submit" style="margin-top:10px; font-weight:bold; width:150px; float:right;  margin-bottom:15px;" >
									</form>
									<?php
										
									?>
									
								</div>
								
								
							</div>
							</div>
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