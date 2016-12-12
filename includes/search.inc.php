<ul>
			<li id="login">
				
						<?php
						require('includes/config.php');
							if(isset($_SESSION['status']))
							{
								echo '<h2 style="margin-left: -15px">Hello :  '.$_SESSION['unm'].'</h2>';
							}
							else
							{
								echo '<form action="process_login.php" method="POST">
										<h2 style="margin-left: -15px">LogIn</h2>
											<b>Username:</b>
											<br><input type="text" name="usernm" style="width=200px"><br>
											<br>
											
											
											<b>Password:</b>
											<br><input type="password" name="pwd">
											<input type="submit" id="x" value="Login" />
										</form>';
							}
						?>
			</li>

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
										
			
										$query="select * from category ";
			
										$res=mysqli_query($conn,$query);
											
										while($row=mysqli_fetch_assoc($res))
											{
												echo '<li><a href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
												//pass catid not catnm
											}
			
											mysqli_close($conn);
								?>
				</ul>
			</li>
			
		</ul>