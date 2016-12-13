<?php session_start();
require('includes/config.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style type="text/css">
		.red{
			color: red;
		}
		.btn:hover{
			background-color: red;
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
					
					<div id="logo-wrap">
						<div id="logo">
								<?php
									include("includes/logo.inc.php");
								?>
						</div>
					</div>
			<!-- end header -->
			
			<!-- start page -->

					<div id="page">
					
						<!-- start content -->
							<div id="content">
								<div class="post"><h1 style="margin-top: 10px;font-size: 30px;font-weight: bolder;">Advanced Search</h1>
									<div class="content" style="font-size: 16px">
    
    <p>Please enter something into the fields below to start a search.</p>
    <form action="search_detail.php">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="searchTerm">Keyword</label>
                    <input type="text" class="form-control" name="s" value="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="searchTerm">Author</label>
                    <input type="text" class="form-control" name="searchAuthor" value="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="searchTerm">ISBN</label>
                    <input type="text" class="form-control" name="searchISBN" value="">
                </div>
            </div>
            
        </div>
        <div class="row">

            <!--div class="col-md-4">
                <div class="form-group">
                    <label for="searchTerm">Publisher</label>
                    <input type="text" class="form-control" name="searchPublisher" value="<?php echo htmlspecialchars($_GET['searchPublisher']); ?>">
                </div>
            </div-->
            <div class="col-md-4">
                <div class="form-group">
                    <label for="searchTerm">Publisher</label>
                    <input type="text" class="form-control" name="searchPublisher" value="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="filter_search_lang">Language</label>
                    <input type="text" class="form-control" name="searchLang" id="filterLang" value="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="filter_price">Price range</label>
					<select class="form-control" name="price" id="filterPrice">
						<option value="" label="All" selected="selected">All</option>
						<option value="low" label="Under $20">Under $20</option>
						<option value="med" label="$20 to $40">$20 to $40</option>
						<option value="high" label="$40 +">$40 +</option>
					</select>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-4">
                <div class="form-group">
                    <label for="filter_availability">Availability</label>
					<select class="form-control" name="ava" id="filterAvailability">
						<option value="" label="All" selected="selected">All</option>
						<option value="Available" label="Available">Available</option>
						<option value="Unavailable" label="Unavailable">Unavailable</option>
					</select>
                </div>
            </div>
            <div class="col-xs-8">
                <div class="form-group pull-right">
                    <input type="hidden" name="advanced" value="true">
                    <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 20px">Search</button>
                </div>
            </div>
        </div>
    </form>
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
