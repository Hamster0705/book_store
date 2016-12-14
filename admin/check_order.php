<?php 
session_start();
require('includes/config.php');

	$q="select * from request, user where request.u_id = user.u_id";
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
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				<h1>Handle requests from users</h1>
				<?php
				if(isset($_POST['Submit'])){
						echo "<h2 style='background-color: white;color:red; font-size:25px;padding-bottom:50px'>Completed!</h2>";

					}
				?>
				
					<table border='1' WIDTH='100%' style="font-size: 18px;background-color: white;">
					<thead>
						<tr scope="row" >
						<th scope="col" WIDTH='5%' style="text-align: center;"><b>No.</b></th>
						<th scope="col" style="text-align: center;" WIDTH='14%'><b>User</b></th>
						<th scope="col" style="text-align: center;" WIDTH='20%'><b>Book's title</b></th>
						<th scope="col" style="text-align: center;" WIDTH='15%'><b>Author</b></th>
						<th scope="col" style="text-align: center;" WIDTH='21%'><b>Other info</b></th>
						<th scope="col" style="text-align: center;" WIDTH='8%'><b>Status</b></th>
						<th scope="col" style="align: center;" WIDTH='8%'><b>Change Status</b></th>	
						</tr>
					</thead>
					<tbody>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr scope="raw" >
										<td style="text-align: center;">'.$count.'
										
										<td scope="col" >'.$row['u_unm'].'
										<td scope="col" >'.$row['re_bnm'].'
										<td scope="col" >'.$row['re_bau'].'
										<td scope="col" >'.$row['re_oth'].'
										<td scope="col" >'.$row['re_stt'].'
										<td>
										<form action="check_request.php" method="POST">';
										echo '
										<input type="submit" class="btn btn-primary custom" name="'.$row['re_id'].'" value="Processing" style="font-size: 14px;"></input>
										<input type="submit" class="btn btn-primary" name="'.$row['re_id'].'" value="Founded" style="font-size: 14px;"></input>
										</form>';
										if(isset($_POST[''.$row['re_id'].''])){
											$id = $row['re_id'];
											$stt = $_POST[''.$row['re_id'].''];
											$query="update request set re_stt = '$stt'
													where re_id = '$id'";
											mysqli_query($conn,$query) or die("Can't Connect to Query...");
										}
										echo '</td>
		    						</tr>';
									$count++;
									
										
										/*<select name="new" style="width:100px" >
										<option value=1>Processing</opiton>
										<option value=2>OK</opiton>
										</select>*/
																}
						
					echo '</tbody>

					</TABLE>
					<form action="check_request.php" method="POST">
					<input type="submit" name="Submit" value="Submit" style="margin:20px 0 0 530px; font-size: 18px; width:120px">
					</input>
					</form>
					<div>';

					?></div>

				
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
