<?php 
include("includes/db.php");
?>
<div> 
	
		<div id="cus_login">
		<form method="post" action=""> 	
			<h2>Login or Register to Buy!</h2></br>
			
				<b style="float:left;">Email:</b></br>
				<input type="text" name="email" placeholder="Enter Your E-mail" required class="form-control"/>
				</br>
			
			
			
				<b style="float:left;">Password:</b></br>
				<input type="password" name="pass" placeholder="Enter Your Password" required class="form-control"/>
				</br>
			
		
				<input type="submit" name="login" value="Login" class="btn btn-primary" style="float:right; width:200px;"/>
            </br></br></br>
       
			<h5 ><a href="customer_register.php" style="text-decoration:none;">New? Register Here</a></h5>
		</form>
		</div>
	
	
	<?php
    if(isset($_POST['login'])){
		$c_email = $_POST['email'];
		$c_pass = $_POST['pass'];
		$sel_c = "select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
		$run_c = mysqli_query($con, $sel_c);
		$check_customer = mysqli_num_rows($run_c); 
		if($check_customer==0){
            echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
            exit();
		}
        $ip = getIp(); 
		$sel_cart = "select * from cart where ip_add='$ip'";
		$run_cart = mysqli_query($con, $sel_cart); 
		$check_cart = mysqli_num_rows($run_cart); 
		if($check_customer>0 AND $check_cart==0){
            $_SESSION['customer_email']=$c_email; 
            echo "<script>alert('You logged in successfully, Thanks!')</script>";
            echo "<script>window.open('customer/my_account.php','_self')</script>";
		}
		else {
		    $_SESSION['customer_email']=$c_email; 
            echo "<script>alert('You logged in successfully, Thanks!')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
        }
    }
    ?>
</div>