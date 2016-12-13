<?php  session_start();
require('includes/config.php');	
	
	if(!empty($_POST))
	{
		$msg=array();
		
		if(empty($_POST['title']) || empty($_POST['author']))
		{
			$msg[]="Please full fill all requirement";
		}
		 
				
		if(is_numeric($_POST['title']))
		{
			$msg[]="Title must be in String Format...";
		}
		
		if(is_numeric($_POST['author']))	//See this validation for @,21212 Later
		{
			$msg[]="Author's name must be in String Format...";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			
			$id=$_SESSION['id'];
			$tt=$_POST['title'];
			$au=$_POST['author'];
			$oth=$_POST['other'];
			$stt='Waiting';
															
			$query="insert into request(u_id, re_bnm,re_bau,re_oth,re_stt)
			values('$id','$tt','$au','$oth','$stt')";
															
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			
			header("location:request_sucess.php");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>