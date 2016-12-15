<?php session_start();
require('includes/config.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style type="text/css">
		.red{
			color: red;
		}
		</style>
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
			
			<!-- start page -->

					<div id="page">
					
						<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title">Request books you want</h1>
									<form action="request_status.php" method="POST">
									<input type="submit" class="btn btn-primary" style="font-size: 20px" name="check" value="Check your request"></input>
									</form>
					<?php
					if(isset($_SESSION['check'])){
						header("location: request_status.php");
					}
					if(!isset($_SESSION['status'])){
						echo '<a href="register.php"> <h1>Please Login..</h1></a>';
					}
					else echo'
									
									<div class="entry">
									<h3  style="margin-left: 20px; padding-top: 20px"> Require <span class="red">*</span> </h3>
										<form action="process_request.php" method="POST"  style="margin-left: 20px">
												

											<br>
												Book title <span class="red">*</span>:<br>
												<input type="text" name="title" size=35>
												<br><br><br>

												Author <span class="red">*</span>:<br>
												<input type="text" name="author" size=35>
												<br><br><br>

												Other informations:<br>
												<textarea cols="40" rows="10" name="other" ></textarea>
												<br><br><br>

												<input  type="submit" name="btn" value="   OK   "  >

												
										</form>
									
									</div>'
						?>	
									
								</div>	
							</div>
						<!-- end content -->
						
						
						<!-- start sidebar -->
						<div id="sidebar">
								<?php
									include("includes/search.inc.php");
								?>
						</div>
						<!-- end sidebar -->
						
						<div style="clear: both;">&nbsp;</div>
					</div>
			<!-- end page -->
						
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
