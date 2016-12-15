<?php session_start();
	require('includes/config.php');
	
	$id=$_GET['id'];
	
	$q="select * from book where b_id=$id";
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
		<?php
			include("includes/head.inc.php");
		?>
	<style type="text/css">
	.cen{
		text-align: center;
		display: table-cell;
		vertical-align: middle; 
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
			<!-- end header -->
		
			<!-- start page -->

				<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="post">
									<h1>Categories:</h1>
									<div class="entry">
										<?php
										
											echo 
											'<div style="min-height:400px">
											<table border="0"  width="100%" bgcolor="#ffffff" style="font-size: 15px;">

												<tr> 
													
													<td width="35%" rowspan="3" class="cen">
														<img src="'.$row['b_img'].'" width="265px">
													
													</td>
												</tr>
											
												<tr> 
													<td width="65%" height="auto" style="margin-top:0">
														<table border="0"  width="100%" height="100%">
														<tr><h1 class="title" style="padding-top:20px">'.$row['b_nm'].'</h1></tr>
														<td style="font-size: 16px; font-style:italic">By (author): '.$row['b_author'].'</td>
														<tr>
															<td style="font-size: 20px;font-weight: bolder;color: red">USD $'.$row['b_price'].'</td>
														</tr>
														<tr><td>'.$row['b_desc'].'</td></tr>
																														
															
														</table>
										
														
													</td>
												</tr>
											</table>
											</div>
										
												<tr valign="bottom" >
												
														<a href="'.$row['b_img'].'" rel="lightbox"><img src="images/zoom.gif" ></a>
													
												</tr>
											<div  style="height:10px;background-color:#EAEAEA"></div>
											<table border="0" width="100%" style="font-size: 16px">	
												<tr align="">
													 <td colspan="3"> <h2 style="font-size: 22px;font-weight: bolder;background:white; color:black;height:auto">Product Details</h2><hr>
													 </td>
												</tr>

												<tr>
													<td style="padding-left:20px;font-weight:bolder;width:100px">  Pages</td>
													<td>: </td>
													<td>'.$row['b_page'].'</td>
												</tr>

												<tr>
													<td style="padding-left:20px;font-weight:bolder;width:100px">Publisher </td>
													<td>: </td>
													<td >'.$row['b_publisher'].'</td>					
												</tr>											
															
												<tr>
													<td style="padding-left:20px;font-weight:bolder;width:100px"> Language</td>
													<td>: </td>
													<td >'.$row['b_lang'].'</td>				
												</tr>

												<tr>
													<td style="padding-left:20px;font-weight:bolder;width:100px">ISBN</td>
													<td>: </td>
													<td >'.$row['b_isbn'].'</td>
												</tr>
															
												
												<tr>
													<td style="padding-left:20px;font-weight:bolder;width:100px">  Availability</td>
													<td>: </td>
													<td style="color:red">'.$row['b_stt'].'</td>
												</tr>

												<tr>
													<td style="padding-left:20px;color:white; width:100px"> hien</td>
													<td></td>
													<td ></td>
												</tr>
											</table>';
											if($row['b_stt']=="Unavailable"){
											echo'
											<table border="0" width="100%">
												
												 <tr align="center" bgcolor="#EAEAEA" style="font-size:18px; font-weight:bolder; color:red">';
												 
												 if(isset($_SESSION['status']))
												 {
													echo ' <td>
													<form method="post">
													<input type="submit" name ="submit" id="x" value="Request book" />
													</form>';
													if(isset($_POST['submit'])){
															$id=$_SESSION['id'];
															$tt=$row['b_nm'];
															$au=$row['b_author'];
															$oth=$row['b_lang'];
															$stt='Waiting';
															
															$query="insert into request(u_id, re_bnm,re_bau,re_oth,re_stt)
															values('$id','$tt','$au','$oth','$stt')";
															
															mysqli_query($conn,$query) or die("Can't Execute Query...");
															echo 'Request success! Check your order status to confirm.';
													}
													'</td>';
													
													
												}
												else
												{
													echo '<td><br><a href="register.php"> <h4>Please Login..</h4></a></td>';
												}
												echo '</tr>
											</table>';
											}
											else {echo'	
											<table border="0" width="100%">
												
												 <tr align="center" bgcolor="#EAEAEA" style="font-size:15px">';
												 
												 if(isset($_SESSION['status']))
												 {
													echo ' <td><a href="process_cart.php?nm='.$row['b_nm'].'&rate='.$row['b_price'].'"><img src="images/addcart.jpg">
													</a></td>';
												}
												else
												{
													echo '<td><br><a href="register.php"> <h4>Please Login..</h4></a></td>';
												}
												echo '</tr>
											</table>';
											}
										?>
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
