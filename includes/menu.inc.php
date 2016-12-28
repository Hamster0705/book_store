	<link rel="stylesheet" href="http://d3ogvdx946i4sr.cloudfront.net/assets/v2.3.1/css/common.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		@font-face {
	    font-family: 'f1';
	    src: url('css/Mightype Script.otf'); /*URL to font*/
		}
		.free{
			line-height: 4.4rem;
		    height: 4.4rem;
		    padding: 0 5rem;
		    border: 0;
		    padding-left: -50px;
		    background: #403042;
		    font-size: 18px;
		    width: auto;
		    float: right;
		}
	</style>
	<div class="user-nav-wrap " style="width: 1236px">
    <div class="user-nav">
        <ul class="left-nav nav mobile-nav-content" data-order="1">
            <li><a href="index.php" class="home-icon-link"><i class="icon-home"></i><span class="show-on-mobile">Home</span></a></li>
            <li><a  href="viewcart.php"><i class="fa fa-cart-plus" aria-hidden="true"></i>View cart</a></li>
            <li><a href="order_status.php"><i class="icon-order-status"></i>Order status</a></li>
            <li><a  href="request.php"><i class="icon-em"></i>Request</a></li>
            <li><a  href="aboutus.php"><i class="icon-info"></i>About us</a></li>

        </ul>
        <div class="middle-nav">
 			<div class="free">
                <?php 
        		if(isset($_SESSION['status']))
				{
					echo 'Hello <p style="font-weight:bolder; display:inline; color: yellow; font-size:20px"> '.$_SESSION['unm'].'</p>.';
				}
				?>
			</div>
        </div>

        <ul class="right-nav mobile-nav-content" data-order="1">
            <li></li>
            <li>
            	<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>';
					}
					else
					{
						echo '<li><a href="register.php"><i class="fa fa-user-o" aria-hidden="true"></i>Register</a></li>';
					}
				?>
            </li>
                </ul>
    </div>
</div>

<div class="header-wrap ">
	<header class="header">


		<div class="primary-wrap">
			<button class="mobile-trigger"><i class="icon-menu"></i></button>

			<div class="brand-wrap">
			<h1 style="color: yellow; font-family: 'f1'; font-size: 35px"> Bookstore</h1>
			<marquee align="center" direction="left" scrollamount="5" width="200px">

<h1 style="color: white; font-style: italic;font-size: 1.6rem;padding-top: 10px">Online bookstore for everybody</h1>
</marquee>
			
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
</div>

	<!--form method="GET" action="search_result.php">
					<fieldset>
					<input type="text" id="search" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
	<!--ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="register.php">Register</a></li>
			<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php">Logout</a></li>';
					}
					else
					{
						echo '<li><a href="register.php">Register</a></li>';
					}
			?>
			
			
			<li class="last"><a href="contact.php">Contact</a></li>
			<li class="last"><a href="aboutus.php">About Us</a></li>
			<li><a href="viewcart.php">View Cart</a></li>
			
	</ul-->