<!--ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="category.php">Category</a></li>
			<li><a href="subcategory.php">Sub_Category</a></li>
			<li><a href="all_book.php">Books</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
			
			<?php
				if(isset($_SESSION['status'])&& $_SESSION['unm']=="admin")
				{
					echo '<li><a href="../logout.php">Logout</a></li>';
				}
				else
				{
					echo '<li><a href="../register.php">Register</a></li>';
				}
			?>
			
		</ul-->
	<link rel="stylesheet" href="http://d3ogvdx946i4sr.cloudfront.net/assets/v2.3.1/css/common.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
	body{
    	background-color: #f0f0f0;
	}
	.custom {
    	margin: 5px 0 5px 0;
	}
	</style>
	<div class="user-nav-wrap " style="width: 1236px">
    <div class="user-nav">
        <ul class="left-nav nav mobile-nav-content" data-order="1">
            <li><a href="index.php" class="home-icon-link"><i class="icon-home"></i><span class="show-on-mobile">Home</span></a></li>
            <li><a  href="category.php"><i class=""></i>Categories</a></li>
            <li><a  href="all_book.php"><i class=""></i>Books</a></li>
            <li><a  href="check_request.php"><i class=""></i>Check requests</a></li>
            <li><a  href="check_order.php"><i class=""></i>Check orders</a></li>

        </ul>

        <ul class="right-nav mobile-nav-content" data-order="3">

            <li>
            	<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="../logout.php">Logout</a></li>';
					}
					else
					{
						echo '<li><a href="../register.php">Register</a></li>';
					}
				?>
            </li>
                </ul>
    </div>
</div>

<!--div class="header-wrap ">
	<header class="header">


		<div class="primary-wrap">
			<button class="mobile-trigger"><i class="icon-menu"></i></button>

			<div class="brand-wrap">
			<h1 style="color: white"> Bookstore</h1>
					</div>

			<div class="mobile-basket-wrap basket">
				<a href="" class="mobile-basket-btn basket-wrap">
                    <span class="item-count" data-item-count="0">0</span>
					<i class="icon-basket"></i>
				</a>
			</div>

			<div class="search-wrap" data-url="">
				<form id="book-search-form" action="search_result.php" autocomplete="off">
					<div class="el-wrap header-search-el-wrap">
						<input type="text" placeholder="Search for books by name" name="s" class="text-input" value="">
						<button class="header-search-btn" type="submit"><span class="text">Search</span></button>
					</div>
					<div class="result-wrap no-result">
					<div class="suggest-result"></div>
					<div class="book-result"></div>
					</div>
				</form>
				<a  href="search_adv.php" class="advanced-search">Advanced Search</a>
			</div>

	</header>
</div-->