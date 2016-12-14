<style type="text/css">
	b{
		font-size:18px;
	}
</style>
<ul>
			
				
						<?php
						require('includes/config.php');
							if(!isset($_SESSION['status']))
							{
								echo '<form action="process_login.php" method="POST" style="margin-left: 15px; margin-bottom:20px">
										<h2 style="margin-left: -15px"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Login</h2>
											<b style="">User name:</b>
											<br><input type="text" name="usernm" style="width=200px; font-size:18px"><br>
											<br>
											
											
											<b>Password:</b>
											<br><input type="password" name="pwd" style="width=200px; font-size:18px" >
											<input type="submit" id="x" value="Login" />
											<div style="font-size:20px; font-weight:bolder; color: red;">';
											if ( isset ( $error_login) ){
											
										    	echo $error_login;
										    	
											}
											if ( isset ( $error_user) ){
										    	echo $error_user;
										    	echo "<br><p style='display: inline; font-size:15px; color: black; font-weight:bold'>If you're sure that you haven't registered your account, 
										    		<p style='display: inline; font-size:15px; font-weight:bolder;color: black; font-weight:bold'><a href='register.php'>register</a></p>
										    		<p style='display: inline; font-size:15px;color: black; font-weight:bold'> now.</p>";
											}
											echo '<br>
											</div>
											</form>';
							}
						if(isset($_GET['cat_nm'])){
							echo '<h2 style="margin-left: px">Sub categories</h2>';
							//echo '<ul>';
							$q = "select * from subcat where parent_id = ".$_GET['cat'];
							$res = mysqli_query($conn,$q) or die("Can't Execute Query..");
	
							$row1 = mysqli_fetch_assoc($res);
									do
									{
										
										echo '<li style="margin-bottom:0px"><a href="booklist.php?subcatid='.$row1['subcat_id'].'&subcatnm='.$row1["subcat_nm"].'">'.$row1['subcat_nm'].'</a><hr></li>';
										//&subcatnm='.$row1["subcat_nm"].'
									}while($row1 = mysqli_fetch_assoc($res));
									
							//echo "</ul>";
								
						}
						?>


			<!--li id="search">
				<h2>Search</h2>
				<form method="GET" action="search_result.php">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li-->
			<li>
				<h2 style="margin-left: -15px">Categories</h2>
				<ul>
					
								<?php
										
			
										$query="select * from category order by cat_nm";
			
										$res=mysqli_query($conn,$query);
											
										while($row=mysqli_fetch_assoc($res))
											{
												echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&cat_nm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
												//pass catid not catnm
											}
			
											mysqli_close($conn);
								?>
				</ul>
			</li>
			
		</ul>