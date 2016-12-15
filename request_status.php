<?php 
session_start();
require('includes/config.php');
	$id = $_SESSION['id'];
	$q="select * from request where u_id = '$id'";
	$res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

		<?php
			include("includes/head.inc.php");
		?>

		<style>
			table{
				padding:5px;border:10px solid #9BAFF1;
				
				font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
			}
			tr{
				vertical-align: baseline;
			    margin: 0;
			    padding: 0;
			    outline: 0;
			    border: 0;
			    background: 0 0;
			}
			tr,td, th{
				border: 0.18rem dotted black;
			}
			td,th{padding:15px;height: 40px;}
			tr:nth-child(even) {
			    background-color: #E8EDFF;
			}
			tr:nth-child(odd) {
			    background-color: #E8EDFF;
			}
			th{font-size: 20px; color:#003399;background-color: #B9C9FE;text-decoration: none}

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
		<div class="post">
			<h1 class="title" style="font-size: 30px;font-weight: bolder;"></h1>
			<div class="entry" style="background-color: transparent;">
				<h1>Your requests</h1>
				<?php
				if(isset($_POST['Submit'])){
						echo "<h2 style='background-color: white;color:red; font-size:25px;padding-bottom:50px'>Completed!</h2>";

					}
				?>
				
					<table border='1' WIDTH='100%' style="font-size: 18px;background-color: white;">
					<thead>
						<tr scope="row" >
						<th scope="col" WIDTH='3%' style="text-align: center;"><b>No.</b></th>
						<th scope="col" style="text-align: center;" WIDTH='20%'><b>Book's title</b></th>
						<th scope="col" style="text-align: center;" WIDTH='15%'><b>Author</b></th>
						<th scope="col" style="text-align: center;" WIDTH='21%'><b>Other info</b></th>
						<th scope="col" style="text-align: center;" WIDTH='18%'><b>Status</b></th>
						</tr>
					</thead>
					<tbody>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr scope="raw" >
										<td style="text-align: center;">'.$count.'
										<td scope="col" >'.$row['re_bnm'].'
										<td scope="col" >'.$row['re_bau'].'
										<td scope="col" >'.$row['re_oth'].'
										<td>';
										
										if($row['re_stt']=="Processing"){
											echo "We are finding your book and notify you as soon as we can";
										}
										if($row['re_stt']=="Founded"){
											if($row['bid']!= NULL){
											echo 'You can order book <a href="detail.php?id='.$row['bid'].'">here</a>';
											}
											else echo "Not add book";
										}
										if($row['re_stt']=="Waiting"){
											echo 'Admin have not check';
										}
										echo '</td>
		    						</tr>';
									$count++;
							}
						
					echo '</tbody>

					</TABLE>
					<div>';

					?>
					</div>
				
			</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
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
