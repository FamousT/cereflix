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
		
		
		<title>CEREFLIX - Playlist</title>
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
										<label class="checkbox-pro-container">Animation
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
					<div id="header-username"><!--Suzie Smith--></div><i class="fas fa-angle-down"></i>
				</div><!-- close #header-user-profile-click -->
				<div id="header-user-profile-menu">
					<ul>
						<li><a href="dashboard-profile.html"><span class="icon-User"></span>My Profile</a></li>
						<li><a href="dashboard-favorites.html"><span class="icon-Favorite-Window"></span>My Favorites</a></li>
						<li><a href="dashboard-account.html"><span class="icon-Gears"></span>Account Details</a></li>
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
	            <li class="current-menu-item">
	              <a href="playlists.php">
						<span class="icon-Movie"></span>
	                Playlists
	              </a>
	            </li>
	            <li>
	              <a href="animation.php">
						<span class="icon-Movie-Ticket"></span>
	                Animation
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
              <li class="normal-item-pro current-menu-item">
                <a href="playlists.php">
						<span class="icon-Movie"></span>
                  Playlists
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="animation.php">
						<span class="icon-Movie-Ticket"></span>
                  Animation
                </a>
              </li>
              <li class="normal-item-pro">
                <a href="action.php">
						<span class="icon-Clock"></span>
                  Categories
                </a>
              </li>

            </ul>
				<div class="clearfix"></div>
		</nav>
	
		<main id="col-main">
			
			<div class="container">

		 <div id="demo" class="carousel slide" data-ride="carousel">
		  <ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
		  </ul>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			<a href="https://drive.google.com/open?id=1VsqiiVx2P8FmAbi1qFDV1HRHP-5c41xv"><img src="images/millionaire2.jpg" alt="Chicago" width="1100" height="500px"></a>
			  <div class="carousel-caption" style="margin-bottom:180px;>
				<a class="progression" href="https://drive.google.com/open?id=1VsqiiVx2P8FmAbi1qFDV1HRHP-5c41xv"><i class="fas fa-play"></i></a>
			  </div>  
			</div>
			<div class="carousel-item">
			 <a href="https://drive.google.com/open?id=1m-XFZV-DbpbTBvYOCeKaNlbxDoGXtN-7"><img src="images/lion_heart3.jpg" width="1100" height="500px"></a>
			  <div class="carousel-caption" style="margin-bottom:10px;">
			  <a class="progression" href="https://drive.google.com/open?id=1m-XFZV-DbpbTBvYOCeKaNlbxDoGXtN-7"><i class="fas fa-play"></i></a>
				<p><font color="white"> <font size= "14">Lion Heart</font></font></p>
				<p>Lionheart is a 2018 Nigerian drama film produced by Chinny Onwugbenu and directed by Genevieve Nnaji. It stars Pete Edochie, Genevieve Nnaji, and Nkem Owoh. It was acquired by Netflix on 7 September 2018, making it the first Netflix original film produced in Nigeria.</p>
			  </div>   
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		  </a>
		</div>
		</div>

			
			
			<div class="dashboard-container">
				
				<ul class="dashboard-sub-menu">
					<li class="current"><a href="#!">Recently Played</a></li>
					<li><a href="#">Recommended</a></li>
					<li><a href="#">Most Popular</a></li>
					<li><a href="#!">My Playlists</a></li>
				</ul><!-- close .dashboard-sub-menu -->

				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-playlist-container-skrn">
							<a href="https://drive.google.com/open?id=1dc2SkWx7CUM2U26o1R99urowoJzH3dOV"><img src="images/akin_pawpaw.jpg" alt="Listing" style="height:200px; width:400px;" ></a>
							<div class="item-playlist-text-skrn">
								<img src="images/demo/user-6.jpg" alt="User Profile">
								<h5><a href="https://drive.google.com/open?id=1dc2SkWx7CUM2U26o1R99urowoJzH3dOV">By: Akin and Pawpaw</a></h5>
								<h6>8 Movies, 18 hrs 24 mins</h6>
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-playlist-container-skrn -->
					</div><!-- close .col -->
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-playlist-container-skrn">
							<a href="https://drive.google.com/open?id=147Nu-rBh9Q2HpPiXMK1E8sk_eWQ1gdRj"><img src="images/this_life.jpg" alt="Listing" style="height:200px; width:400px;" ></a>
							<div class="item-playlist-text-skrn">
								<img src="images/demo/user-7.jpg" alt="User Profile">
								<h5><a href="#!">By: Wale Adenuga Production</a></h5>
								<h6>8 Movies, 18 hrs 24 mins</h6>
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-playlist-container-skrn -->
					</div><!-- close .col -->
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-playlist-container-skrn">
							<a href="https://drive.google.com/open?id=1BT13oxmCOfjFd_suHv8csss0AQHqtJVq"><img src="images/nnenna.jpg" alt="Listing" style="height:200px; width:400px;" ></a>
							<div class="item-playlist-text-skrn">
								<img src="images/demo/user-8.jpg" alt="User Profile">
								<h5><a href="#!">By: Wale Adenuga Production</a></h5>
								<h6>8 Movies, 18 hrs 24 mins</h6>
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-playlist-container-skrn -->
					</div><!-- close .col -->
					
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-playlist-container-skrn">
							<a href="https://drive.google.com/open?id=1kTtntHDEmhfYmXWzbJYuyjmLI4Kq4ZM3a"><img src="images/papa_ajasco.jpg" alt="Listing" style="height:200px; width:400px;" ></a>
							<div class="item-playlist-text-skrn">
								<img src="images/demo/user-9.jpg" alt="User Profile">
								<h5><a href="#!">By: Wale Adenuga Production</a></h5>
								<h6>8 Movies, 18 hrs 24 mins</h6>
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-playlist-container-skrn -->
					</div><!-- close .col -->
					
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-playlist-container-skrn">
							<a href="https://drive.google.com/open?id=1LHSULBae4fy31vtul0KaHGIXI4VzcveQ"><img src="images/blood_money.jpg" alt="Listing" style="height:200px; width:400px;" ></a>
							<div class="item-playlist-text-skrn">
								<img src="images/demo/user-7.jpg" alt="User Profile">
								<h5><a href="#!">By: Chico Ejiro</a></h5>
								<h6>8 Movies, 18 hrs 24 mins</h6>
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-playlist-container-skrn -->
					</div><!-- close .col -->
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-playlist-container-skrn">
							<a href="https://drive.google.com/open?id=1Di94MBt--kh0AhIVEltucKCnBbLbiyqX"><img src="images/take_heed.jpg" alt="Listing" style="height:200px; width:400px;" ></a>
							<div class="item-playlist-text-skrn">
								<img src="images/demo/user-8.jpg" alt="User Profile">
								<h5><a href="#!">By: Alfa Sule</a></h5>
								<h6>8 Movies, 3 hrs 30 mins</h6>
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-playlist-container-skrn -->
					</div><!-- close .col -->
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-playlist-container-skrn">
							<a href="https://drive.google.com/open?id=1dc2SkWx7CUM2U26o1R99urowoJzH3dOV"><img src="images/lion_heart.jpg" alt="Listing" style="height:200px; width:400px;" ></a>
							<div class="item-playlist-text-skrn">
								<img src="images/demo/user-9.jpg" alt="User Profile">
								<h5><a href="#!">By: Genevieve Nnaji</a></h5>
								<h6>8 Movies, 2 hrs 24 mins</h6>
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-playlist-container-skrn -->
					</div><!-- close .col -->
					
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-playlist-container-skrn">
							<a href="#!"><img src="images/stolen_bible.jpg" alt="Listing" style="height:200px; width:400px;" ></a>
							<div class="item-playlist-text-skrn">
								<img src="images/demo/user-10.jpg" alt="User Profile">
								<h5><a href="#!">By: Emeka Nwabueze</a></h5>
								<h6>8 Movies, 1 hrs 24 mins</h6>
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-playlist-container-skrn -->
					</div><!-- close .col -->
					
				</div><!-- close .row -->
				
				<ul class="page-numbers">
					<li><a class="previous page-numbers" href="#!"><i class="fas fa-chevron-left"></i></a></li>
					<li><span class="page-numbers current">1</span></li>
				<!--	<li><a class="page-numbers" href="#!">2</a></li>
					<li><a class="page-numbers" href="#!">3</a></li>
					<li><a class="page-numbers" href="#!">4</a></li>
					<li><a class="next page-numbers" href="#!"><i class="fas fa-chevron-right"></i></a></li>  -->
				</ul>
				
						
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