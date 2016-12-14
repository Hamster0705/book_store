<style type="text/css">
.sidebar .sidebar-section, .sidebar .mini-basket {
    padding: .5rem 1rem;
    margin: .5rem;
    background: #fff;
    box-shadow: 0.1rem 0.1rem 0.2rem rgba(0,0,0,0.1);
    margin-left: 0;
}
.form-group{
	margin-left: 10px;
}
.form-control{
	width: 260px;
	margin-right: 10px;
}
</style>

<div class="sidebar-section search-filter">
	<h2>Filter your search</h2>
	<div class="sidebar-section-content search-filter-sidebar" style="font-size: 16px">
		<form class="filter-menu" action="search_detail.php" method="get">
			<div class="form-group">
				<label for="searchTerm">Keyword</label>
				<input type="text" class="form-control" name="s" value="<?php if(isset($_GET['s'])) echo htmlspecialchars($_GET['s']); ?>">
			</div>

			<!--input type="hidden" name="searchSortBy" value="">
			<input type="hidden" name="category" value=""-->
			<div class="form-group">
				<label for="searchTerm">Author</label>
				<input type="text" class="form-control" name="searchAuthor" value="<?php if(isset($_GET['submit'])) echo $_GET['searchAuthor']; ?>">
			</div>
			<div class="form-group">
				<label for="searchTerm">Publisher</label>
				<input type="text" class="form-control" name="searchPublisher" value="<?php if(isset($_GET['submit'])) echo $_GET['searchPublisher']; ?>">
			</div>

			<div class="form-group">
				<label for="searchTerm">ISBN</label>
				<input type="text" class="form-control" name="searchISBN" value="<?php if(isset($_GET['submit'])) echo $_GET['searchISBN']; ?>">
			</div>

			<div class="form-group">
				<label for="filter_search_lang">Language</label>
				<input type="text" class="form-control" name="searchLang" value="<?php if(isset($_GET['submit'])) echo $_GET['searchLang']; ?>">
			</div>
			<div class="form-group">
				<label for="filter_price">Price range</label>
				<select class="form-control" name="price" id="filterPrice">
					<option value="" label="All" selected="selected">All</option>
					<option value="low" label="Under $20">Under $20</option>
					<option value="med" label="$20 to $40">$20 to $40</option>
					<option value="high" label="$40 +">$40 +</option>
				</select>
			</div>

			<div class="form-group">
				<label for="filter_availability">Availability</label>
				<select class="form-control" name="ava" id="filterAvailability">
					<option value="" label="All" selected="selected">All</option>
					<option value="Available" label="Available">Available</option>
					<option value="Unavailable" label="Unavailable">Unavailable</option>
				</select>
				
			</div>


			<div class="form-group padded-btn-wrap">

					<input type="submit" class="btn btn-primary" value="Refine results" />

			</div>
		</form>
	</div>
</div>