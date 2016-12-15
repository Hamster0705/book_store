<?php session_start();

	if(isset($_GET['nm']) and isset($_GET['rate']))
	{
		//add item
		$_SESSION['cart'][] = array("nm"=>$_GET['nm'],"rate"=>$_GET['rate'],"qty"=>"1");
		header("location: viewcart.php");
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location: viewcart.php");
	}
	else if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
			header("location: viewcart.php");
		}
	}
	$uid=$_SESSION['id'];
	$pro=$_GET['nm'];

	$query="insert into cart(u_id,product)
			values('$uid','$pro')";
			
	mysqli_query($conn,$query) or die("Can't Connect to Query...");
	header("location: viewcart.php");


?>