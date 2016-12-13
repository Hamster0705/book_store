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
									<h1 class="title" style="margin-top: 20px">Thank for your contact! We will notify you as soon as we can.</h1>
									<style type="text/css">
									
									</style>
									<a href="request.php"><h2 style="display: inline;height: auto;background: transparent;color: blue;padding: 0 0 0 0">Continue request</h2></a> 
									<h2 style="display: inline;height: auto;background: transparent;color: black;padding: 0 0 0 0">or</h2>
									<a href="index.php"><h2 style="display: inline;height: auto; background: transparent;color: blue;padding: 0 0 0 0">back to homepage</h2></a> 
					
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
