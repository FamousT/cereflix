<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">
		
		<link rel="stylesheet" href="icons/fontawesome/css/fontawesome-all.min.css"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css"><!-- iconsmind.com Icons -->
		
		
		<title>CEREFLIX - Media Streaming App</title>
	</head>
	<body>
		<div id="sidebar-bg">
			
      <header id="videohead-pro" class="sticky-header">
			<div id="video-logo-background"><a href="index.php"><img src="images/cere.png" alt="Logo"></a></div>
			
			<div id="video-search-header">
				<div id="search-icon-more"></div>
				<input type="text" placeholder="Search for Movies or TV Series" aria-label="Search">
				<div id="video-search-header-filtering">
					<form id="video-search-header-filtering-padding">
						<div class="row">
							<div class="col-sm extra-padding">
								<h5>Type:</h5>
								
								<div class="row">
									<div class="col-sm">
										<label class="checkbox-pro-container">Movies
										  <input type="checkbox" checked="checked" id="movies-type">
										  <span class="checkmark-pro"></span>
										</label>
								
										<label class="checkbox-pro-container">TV Series
										  <input type="checkbox" id="tv-type">
										  <span class="checkmark-pro"></span>
										</label>
									</div><!-- close .col -->
									<div class="col">
										<label class="checkbox-pro-container">New Releases
										  <input type="checkbox" id="movie-type">
										  <span class="checkmark-pro"></span>
										</label>
								
										<label class="checkbox-pro-container">Documentary
										  <input type="checkbox" id="documentary-type">
										  <span class="checkmark-pro"></span>
										</label>
									</div><!-- close .col -->
								</div><!-- close .row -->
								
								<div class="dotted-dividers-pro"></div>
							</div><!-- close .col -->
							<div class="col-sm extra-padding">
								<h5>Genres:</h5>
								<select class="custom-select">
								  <option selected>All Genres</option>
								  <option value="1">Action</option>
								  <option value="2">Adventure</option>
								  <option value="3">Drama</option>
								  <option value="4">Animation</option>
								  <option value="5">Documentary</option>
								  <option value="6">Drama</option>
								  <option value="7">Horror</option>
								  <option value="8">Thriller</option>
								  <option value="9">Fantasy</option>
								  <option value="10">Romance</option>
								  <option value="11">Sci-Fi</option>
								  <option value="12">Western</option>
								</select>
								<div class="dotted-dividers-pro"></div>
							</div><!-- close .col -->
							<div class="col-sm extra-padding">
								<h5>Country:</h5>
								<select class="custom-select">
								  <option selected>All Countries</option>
								  <option value="1">Argentina</option>
								  <option value="2">Australia</option>
								  <option value="3">Bahamas</option>
								  <option value="4">Belgium</option>
								  <option value="5">Brazil</option>
								  <option value="6">Canada</option>
								  <option value="7">Chile</option>
								  <option value="8">China</option>
								  <option value="9">Denmark</option>
								  <option value="10">Ecuador</option>
								  <option value="11">France</option>
								  <option value="12">Germany</option>
								  <option value="13">Greece</option>
								  <option value="14">Guatemala</option>
								  <option value="15">Italy</option>
								  <option value="16">Japan</option>
								  <option value="17">asdfasdf</option>
								  <option value="18">Korea</option>
								  <option value="19">Malaysia</option>
								  <option value="20">Monaco</option>
								  <option value="21">Morocco</option>
								  <option value="22">New Zealand</option>
								  <option value="23">Panama</option>
								  <option value="24">Portugal</option>
								  <option value="25">Russia</option>
								  <option value="26">United Kingdom</option>
								  <option value="27">United States</option>
								</select>
								<div class="dotted-dividers-pro"></div>
							</div><!-- close .col -->
							<div class="col-sm extra-padding extra-range-padding">
								<h5>Average Rating:</h5>
				            <input class="range-example-rating-input" type="text" min="0" max="10" value="4,10" step="1" />
								<!-- JS is under /js/script.jss -->
							</div><!-- close .col -->
						</div><!-- close .row -->
						<div id="video-search-header-buttons">
							<a href="#!" class="btn btn-green-pro">Filter Search</a>
							<a href="#!" class="btn">Reset</a>
						</div><!-- close #video-search-header-buttons -->
					</form><!-- #video-search-header-filtering-padding -->
				</div><!-- close #video-search-header-filtering -->
			</div><!-- close .video-search-header -->
			
			<div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>
			
			
			<div id="header-user-profile">
				<div id="header-user-profile-click" class="noselect">
					<img src="images/demo/user-profile.jpg" alt="Suzie">
					<div id="header-username">Suzie Smith</div><i class="fas fa-angle-down"></i>
				</div><!-- close #header-user-profile-click -->
				<div id="header-user-profile-menu">
					<ul>
						<li><a href="dashboard-profile.php"><span class="icon-User"></span>My Profile</a></li>
						<li><a href="dashboard-favorites.php"><span class="icon-Favorite-Window"></span>My Favorites</a></li>
						<li><a href="dashboard-account.php"><span class="icon-Gears"></span>Account Details</a></li>
						<li><a href="#!"><span class="icon-Life-Safer"></span>Help/Support</a></li>
						<li><a href="index.php"><span class="icon-Power-3"></span>Log Out</a></li>
					</ul>
				</div><!-- close #header-user-profile-menu -->
			</div><!-- close #header-user-profile -->
			
			<div id="header-user-notification">
				<div id="header-user-notification-click" class="noselect">
					<i class="far fa-bell"></i>
					<span class="user-notification-count">3</span>
				</div><!-- close #header-user-profile-click -->
				<div id="header-user-notification-menu">
					<h3>Notifications</h3>
					<div id="header-notification-menu-padding">
							<ul id="header-user-notification-list">
								<li><a href="#!"><img src="images/demo/user-profile-2.jpg" alt="Profile">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. <div class="header-user-notify-time">21 hours ago</div></a></li>
								<li><a href="#!"><img src="images/demo/user-profile-3.jpg" alt="Profile">Donec vitae lacus id arcu molestie mollis. <div class="header-user-notify-time">3 days ago</div></a></li>
								<li><a href="#!"><img src="images/demo/user-profile-4.jpg" alt="Profile">Aenean vitae lectus non purus facilisis imperdiet. <div class="header-user-notify-time">5 days ago</div></a></li>
							</ul>
							<div class="clearfix"></div>
						</div><!-- close #header-user-profile-menu -->
					</div>
			</div><!-- close #header-user-notification -->
			
			
			
			<div class="clearfix"></div>
			
			<nav id="mobile-navigation-pro">
			
				<ul id="mobile-menu-pro">
	            <li>
	              <a href="tv_series.php">
						<span class="icon-Old-TV"></span>
	                TV Series
	              </a>
	            <li>
	            <li>
	              <a href="movies.php">
						<span class="icon-Reel"></span>
	                Movies
	              </a>
	            </li>
	            <li>
	              <a href="playlists.php">
						<span class="icon-Movie"></span>
	                Playlists
	              </a>
	            </li>
	            <li class="normal-item-pro">
                <a href="new_releases.php">
						<span class="icon-Movie-Ticket"></span>
                  New Releases
                </a>
              </li>
	            <li>
	              <a href="action.php">
						<span class="icon-Clock"></span>
	                Categories
	              </a>
	            </li>
	            <li>
	              <a href="#!">
						<i class="far fa-bell"></i>
						<span class="user-notification-count">3</span>
	                Notifications
	              </a>
	            </li>
				</ul>
				<div class="clearfix"></div>
				
				<div id="search-mobile-nav-pro">
					<input type="text" placeholder="Search for Movies or TV Series" aria-label="Search">
				</div>
				
			</nav>
			
      </header>
		
		
		
		<nav id="sidebar-nav"><!-- Add class="sticky-sidebar-js" for auto-height sidebar -->
            <ul id="vertical-sidebar-nav" class="sf-menu">
              <li class="normal-item-pro">
                <a href="tv_series.php">
						<span class="icon-Old-TV"></span>
                  TV Series
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="movies.php">
						<span class="icon-Reel"></span>
                  Movies
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="playlists.php">
						<span class="icon-Movie"></span>
                  Playlists
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="new_releases.php">
						<span class="icon-Movie-Ticket"></span>
                  New Releases
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="Categories.php">
						<span class="icon-Clock"></span>
                  Categories 
                </a>
              </li>

            </ul>
				<div class="clearfix"></div>
		</nav>
	
		<main id="col-main">
			
			<div class="dashboard-container">
				
				<ul class="dashboard-sub-menu">
					<li class="current"><a href="account.php">Account Settings</a></li>
					<li><a href="payment.php">Payment Info</a></li>
				</ul><!-- close .dashboard-sub-menu -->
				
				<div class="container-fluid">
					<div class="row">
					
						<div class="col-12  col-lg-3">
							<div id="account-edit-photo">
								<div><img src="http://via.placeholder.com/400x400.jpg" alt="Account Image"></div>
								<p><a href="#!" class="btn btn-green-pro">Change Profile Picture</a></p>
								<p><a href="#!" class="btn">Delete Photo</a></p>
							</div>
						</div><!-- close .col -->
						<div class="col">
						
							<form class="account-settings-form">
						
							<h5>General Information</h5>
							<p class="small-paragraph-spacing">By letting us know your name, we can make our support experience much more personal.</p>
							<div class="row">
								<div class="col-sm">
	   	  						 <div class="form-group">
	   								 <label for="first-name" class="col-form-label">First Name:</label>
	   	  							 <input type="text" class="form-control" id="first-name" value="Suzie">
	   	  						 </div>
								</div><!-- close .col -->
								<div class="col-sm">
    	  	  						 <div class="form-group">
    	  								 <label for="last-name" class="col-form-label">Last Name:</label>
    	  	  							 <input type="text" class="form-control" id="last-name" value="Smith">
    	  	  						 </div>
								</div><!-- close .col -->
								<div class="col-sm">
    	  	  						 <div class="form-group">
    	  								 <label for="last-name" class="col-form-label">Country:</label>
		 								<select class="custom-select">
		 								  <option value="0">All Countries</option>
		 								  <option value="1">Argentina</option>
		 								  <option value="2">Australia</option>
		 								  <option value="3">Bahamas</option>
		 								  <option value="4">Belgium</option>
		 								  <option value="5">Brazil</option>
		 								  <option value="6">Canada</option>
		 								  <option value="7">Chile</option>
		 								  <option value="8">China</option>
		 								  <option value="9">Denmark</option>
		 								  <option value="10">Ecuador</option>
		 								  <option value="11">France</option>
		 								  <option value="12">Germany</option>
		 								  <option value="13">Greece</option>
		 								  <option value="14">Guatemala</option>
		 								  <option value="15">Italy</option>
		 								  <option value="16">Japan</option>
		 								  <option value="17">asdfasdf</option>
		 								  <option value="18">Korea</option>
		 								  <option value="19">Malaysia</option>
		 								  <option value="20">Monaco</option>
		 								  <option value="21">Morocco</option>
		 								  <option value="22">New Zealand</option>
		 								  <option value="23">Panama</option>
		 								  <option value="24">Portugal</option>
		 								  <option value="25">Russia</option>
		 								  <option value="26">United Kingdom</option>
		 								  <option selected>United States</option>
		 								</select>
    	  	  						 </div>
								</div><!-- close .col -->
							</div><!-- close .row -->
							<hr>
						
							<h5>Account Information</h5>
							<p class="small-paragraph-spacing">You can change the email address you use here.</p>
							
							<div class="row">
								<div class="col-sm">
	   	  						 <div class="form-group">
	   								 <label for="e-mail" class="col-form-label">E-mail</label>
	   	  							 <input type="text" class="form-control" id="e-mail" value="suzie@outlook.com">
	   	  						 </div>
								</div><!-- close .col -->
								<div class="col-sm">
    	  	  						 <div class="form-group">
    	  								 <div><label for="button-change" class="col-form-label">&nbsp; &nbsp;</label></div>
    	  	  							 <a href="#!" class="btn btn-form">Change E-mail</a>
    	  	  						 </div>
								</div><!-- close .col -->
								
							</div><!-- close .row -->
							
							<hr>
							<h5>Change Password</h5>
							<p class="small-paragraph-spacing">You can change the password you use for your account here.</p>
							<div class="row">
								<div class="col-sm">
	   	  						 <div class="form-group">
	   								 <label for="password" class="col-form-label">Current Password:</label>
	   	  							 <input type="text" class="form-control" id="password" value="&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;">
	   	  						 </div>
								</div><!-- close .col -->
								<div class="col-sm">
	   	  						 <div class="form-group">
	   								 <label for="new-password" class="col-form-label">New Password:</label>
	   	  							 <input type="text" class="form-control" id="new-password" placeholder="Minimum of 6 characters">
	   	  						 </div>
								</div><!-- close .col -->
								<div class="col-sm">
	   	  						 <div class="form-group">
	   								 <div><label for="confirm-password" class="col-form-label">&nbsp; &nbsp;</label></div>
	   	  							 <input type="text" class="form-control" id="confirm-password" placeholder="Confirm New Password">
	   	  						 </div>
								</div><!-- close .col -->
							</div><!-- close .row -->
							
							<hr>
							<h5>Preferred Genres</h5>
							<p class="small-paragraph-spacing">Pick your favorite genres for content.</p>
							
								<div class="registration-genres-step">
									<ul class="registration-genres-choice">
										<li class="active">
											<i class="fas fa-check-circle"></i>
											<img src="images/genres/drama.png" alt="Drama">
											<h6>Drama</h6>
										</li>
										<li>
											<i class="fas fa-check-circle"></i>
											<img src="images/genres/comedy.png" alt="Comedy">
											<h6>Comedy</h6>
										</li>
										<li>
											<i class="fas fa-check-circle"></i>
											<img src="images/genres/action.png" alt="Action">
											<h6>Action</h6>
										</li>
										<li>
											<i class="fas fa-check-circle"></i>
											<img src="images/genres/romance.png" alt="Romance">
											<h6>Romance</h6>
										</li>
										<li class="active">
											<i class="fas fa-check-circle"></i>
											<img src="images/genres/horror.png" alt="Horror">
											<h6>Horror</h6>
										</li>
										<li class="active">
											<i class="fas fa-check-circle"></i>
											<img src="images/genres/fantasy.png" alt="Fantasy">
											<h6>Fantasy</h6>
										</li>
										<li>
											<i class="fas fa-check-circle"></i>
											<img src="images/genres/sci-fi.png" alt="Sci-Fi">
											<h6>Sci-Fi</h6>
										</li>
										<li>
											<i class="fas fa-check-circle"></i>
											<img src="images/genres/thriller.png" alt="Thriller">
											<h6>Thriller</h6>
										</li>
										<li>
											<i class="fas fa-check-circle"></i>
											<img src="images/genres/western.png" alt="Western">
											<h6>Western</h6>
										</li>
										<li>
											<i class="fas fa-check-circle"></i>
											<img src="images/genres/adventure.png" alt="Adventure">
											<h6>Adventure</h6>
										</li>
										<li>
											<i class="fas fa-check-circle"></i>
											<img src="images/genres/animation.png" alt="Animation">
											<h6>Animation</h6>
										</li>
										<li>
											<i class="fas fa-check-circle"></i>
											<img src="images/genres/documentary.png" alt="Documentary">
											<h6>Documentary</h6>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div><!-- close .registration-genres-step -->
								<div class="clearfix"></div>
							<hr>
							<p><a href="dashboard-account.html" class="btn btn-green-pro">Save Changes</a></p>
							<br>
							</form>
						
						</div><!-- close .col -->
					
					</div><!-- close .row -->
				</div><!-- close .container-fluid -->
						
			</div><!-- close .dashboard-container -->
		</main>
		
		
		</div><!-- close #sidebar-bg-->
		
		<!-- Required Framework JavaScript -->
		<script src="js/libs/jquery-3.3.1.min.js"></script><!-- jQuery -->
		<script src="js/libs/popper.min.js" defer></script><!-- Bootstrap Popper/Extras JS -->
		<script src="js/libs/bootstrap.min.js" defer></script><!-- Bootstrap Main JS -->
		<!-- All JavaScript in Footer -->
		
		<!-- Additional Plugins and JavaScript -->
		<script src="js/navigation.js" defer></script><!-- Header Navigation JS Plugin -->
		<script src="js/jquery.flexslider-min.js" defer></script><!-- FlexSlider JS Plugin -->
		<script src="js/jquery-asRange.min.js" defer></script><!-- Range Slider JS Plugin -->
		<script src="js/circle-progress.min.js" defer></script><!-- Circle Progress JS Plugin -->
		<script src="js/afterglow.min.js" defer></script><!-- Video Player JS Plugin -->
		<script src="js/script.js" defer></script><!-- Custom Document Ready JS -->
		<script src="js/script-dashboard.js" defer></script><!-- Custom Document Ready for Dashboard Only JS -->
		
		
	</body>
</html>