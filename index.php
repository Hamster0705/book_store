<?php session_start();?>

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
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to Bookstore
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'Book Store';
								}
							?>
							</h1>
							<div class="entry">
							<br>
							<h1 style="padding-left: 10px; font-weight: bolder;">New books</h1><hr>
								<table border="0" width="100%" >
								<?php
								$query="select * from book where b_pbd like '%2016'";	
								$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
								$count=0;
												$num = mysqli_num_rows($res);
												if($num==0) {
													echo "<h1>Not found!</h1>";
													echo '<b><a href="request.php"> You can request book here.</a></b>';
												}
								while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="25%" align="center" style="margin-right: 5px">
													<div style="height:150px">
													<a href="detail.php?id='.$row['b_id'].'"><img src="'.$row['b_img'].'" width="100" height="140"><br></a>
													</div>
													<h4 style="font-weight:bolder; height:50px; width: 170px; font-size:16px">'.$row['b_nm'].'</h4>
													<h4 style="font-size:16px; color: #9999B2;text-align: center;font-stype:italic">'.$row['b_pbd'].'</h4>
													<h4 style="font-size:18px; color:red; text-align: center;font-weight:bolder">USD$'.$row['b_price'].'</h4>
														
														
														
													</td>';
													$count++;							
													
													if($count==4)
													{
														echo '</tr>';
														$count=0;
													}
												}	
								?>
								</table>
								<!--object width="550" height="400">
								<!--<param name="movie" value="somefilename.swf">
								<embed src="HotHotSoftware3DMenu.swf" width="550" height="400">
								</embed>
								</object>-->
								<br><br>
								
							</div>
							
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
