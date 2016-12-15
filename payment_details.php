<?php session_start();
require('includes/config.php');
	$id = $_SESSION['id'];
	$q="select * from orders where u_id = '$id'";
	$res=mysqli_query($conn,$q) or die("Can't Execute Query...");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				<div id="logo-wrap">
				<div id="logo">
						<?php
							include("includes/logo.inc.php");
						?>
				</div>
				</div>
				
			<!-- end header -->
			<font style="font-size:30px;margin-left:260px">Payment options</font>
<div class="container">			
			<hr style="margin-left:260px;margin-right:260px;"></hr>
			<!--div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">Secure Online Payment</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">Cash On Delivery</a></div></br-->
			<form action="payment_details.php" method="POST">
			<input type="submit" class="btn btn-primary" name="submit" value="Payment by bank account" style="font-size: 14px;"></input>
			<input type="submit" class="btn btn-primary" name="submit" value="Cash On Delivery" style="font-size: 14px;"></input>
			</form>
			<?php
			while($row=mysqli_fetch_assoc($res)){
				if(isset($_POST['submit'])){
					$mt = $_POST['submit'];
					$query="update orders set method = '$mt' where id = '$id'";
					mysqli_query($conn,$query) or die("Can't Connect to Query...");

				}
			}
			echo '<br><h1>Success! Chúng tôi sẽ liên lạc với bạn ngay khi có thể!</h1>';
			?>