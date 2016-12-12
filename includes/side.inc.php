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
	width: 280px;
	margin-right: 10px;
}
</style>

<div class="sidebar-section search-filter">
	<h2>Filter your search</h2>
	<div class="sidebar-section-content search-filter-sidebar">
		<form class="filter-menu" action="search_detail.php" method="get">
			<div class="form-group">
				<label for="searchTerm">Keyword</label>
				<input type="text" class="form-control" name="s" value="<?php echo htmlspecialchars($_GET['s']); ?>">
			</div>

			<!--input type="hidden" name="searchSortBy" value="">
			<input type="hidden" name="category" value=""-->
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
				<select class="form-control" name="availability" id="filterAvailability">
					<option value="" label="All" selected="selected">All</option>
					<option value="1" label="Available">Available</option>
					<option value="2" label="Unavailable">Unavailable</option>
				</select>
				<script type="text/javascript">
				document.getElementById('availability').value = "<?php echo $_GET['availability'];?>";
				</script>
			</div>

			<div class="form-group">
				<label for="filter_search_lang">Language</label>
				<select class="form-control" name="searchLang" id="filterLang">
					<option value="" label="All" selected="selected">All</option>
					<option value="SQ">Albanian</option>
					<option value="AR">Arabic</option>
					<option value="HY">Armenian</option>
					<option value="EU">Basque</option>
					<option value="BN">Bengali</option>
					<option value="BG">Bulgarian</option>
					<option value="CA">Catalan</option>
					<option value="KM">Cambodian</option>
					<option value="ZH">Chinese</option>
					<option value="HR">Croation</option>
					<option value="CS">Czech</option>
					<option value="DA">Danish</option>
					<option value="NL">Dutch</option>
					<option value="EN">English</option>
					<option value="ET">Estonian</option>
					<option value="FJ">Fiji</option>
					<option value="FI">Finnish</option>
					<option value="FR">French</option>
					<option value="KA">Georgian</option>
					<option value="DE">German</option>
					<option value="EL">Greek</option>
					<option value="GU">Gujarati</option>
					<option value="HE">Hebrew</option>
					<option value="HI">Hindi</option>
					<option value="HU">Hungarian</option>
					<option value="IS">Icelandic</option>
					<option value="ID">Indonesian</option>
					<option value="GA">Irish</option>
					<option value="IT">Italian</option>
					<option value="JA">Japanese</option>
					<option value="JW">Javanese</option>
					<option value="KO">Korean</option>
					<option value="LA">Latin</option>
					<option value="LV">Latvian</option>
					<option value="LT">Lithuanian</option>
					<option value="MK">Macedonian</option>
					<option value="MS">Malay</option>
					<option value="ML">Malayalam</option>
					<option value="MT">Maltese</option>
					<option value="MI">Maori</option>
					<option value="MR">Marathi</option>
					<option value="MN">Mongolian</option>
					<option value="NE">Nepali</option>
					<option value="NO">Norwegian</option>
					<option value="FA">Persian</option>
					<option value="PL">Polish</option>
					<option value="PT">Portuguese</option>
					<option value="PA">Punjabi</option>
					<option value="QU">Quechua</option>
					<option value="RO">Romanian</option>
					<option value="RU">Russian</option>
					<option value="SM">Samoan</option>
					<option value="SR">Serbian</option>
					<option value="SK">Slovak</option>
					<option value="SL">Slovenian</option>
					<option value="ES">Spanish</option>
					<option value="SW">Swahili</option>
					<option value="SV">Swedish </option>
					<option value="TA">Tamil</option>
					<option value="TT">Tatar</option>
					<option value="TE">Telugu</option>
					<option value="TH">Thai</option>
					<option value="BO">Tibetan</option>
					<option value="TO">Tonga</option>
					<option value="TR">Turkish</option>
					<option value="UK">Ukranian</option>
					<option value="UR">Urdu</option>
					<option value="UZ">Uzbek</option>
					<option value="VI">Vietnamese</option>
					<option value="CY">Welsh</option>
					<option value="XH">Xhosa</option>
				</select>
				<script type="text/javascript">
				document.getElementById('searchLang').value = "<?php echo $_GET['searchLang'];?>";
				</script>
			</div>


			<div class="form-group padded-btn-wrap">

					<input type="submit" class="btn btn-primary" value="Refine results" />

			</div>
		</form>
	</div>
</div>