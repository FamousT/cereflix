<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="icons/fontawesome/css/fontawesome-all.min.css"><!-- FontAwesome Icons -->
		<link rel="stylesheet" href="icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css"><!-- iconsmind.com Icons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" />

		
		<title>CEREFLIX - Horror</title>
		
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
					<div id="header-username"></div><i class="fas fa-angle-down"></i>
				</div><!-- close #header-user-profile-click -->
				<div id="header-user-profile-menu">
					<ul>
						<li><a href="dashboard-profile.html"><span class="icon-User"></span>My Profile</a></li>
						<li><a href="dashboard-favorites.html"><span class="icon-Favorite-Window"></span>My Favorites</a></li>
						<li><a href="dashboard-account.html"><span class="icon-Gears"></span>Account Details</a></li>
						<li><a href="#!"><span class="icon-Life-Safer"></span>Help/Support</a></li>
						<li><a href="index.html"><span class="icon-Power-3"></span>Log Out</a></li>
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
	            <li class="current-menu-item">
	              <a href="action.php">
						<span class="icon-Clock"></span>
	                Categories
	              </a>
	            </li>
	            <li>
	              <a href="#!">
						<i class="far fa-bell"></i>
						<span class="notification">3</span>
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
              <li>
                <a href="tv_series.php">
						<span class="icon-Old-TV"></span>
                  TV Series
                </a>
              </li>
              <li class="movies">
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
              <li class="normal-item-pro current-menu-item">
                <a href="action.php">
						<span class="icon-Clock"></span>
                  Categoriess
                </a>
              </li>

            </ul>
				<div class="clearfix"></div>
		</nav>
	
		<main id="col-main">
		
		<ul class="dashboard-genres-pro animate slideInDown" style="padding:0px; margin:0px;" >
				
				
				<li>
					<a href="action.php"><img src="images/genres/action.png" alt="Action" style="height:30px; width:30px;"></a>
					<h6>Action</h6>
				</li>
				<li>
					<a href="adventure.php"><img src="images/genres/adventure.png" alt="Adventure" style="height:30px; width:30px;"></a>
					<h6>Adventure</h6>
				</li>
				<li>
					<a href="animation2.php"><img src="images/genres/animation.png" alt="Animation" style="height:30px; width:30px;"></a>
					<h6>Animation</h6>
				</li>
				<li>
					<a href="comedy.php"><img src="images/genres/comedy.png" alt="Comedy" style="height:30px; width:30px;" ></a>
					<h6>Comedy</h6>
				</li>
				<li>
					<a href="documentary.php"><img src="images/genres/documentary.png" alt="Documentary" style="height:30px; width:30px;"></a>
					<h6>Documentary</h6>
				</li>
				<li>

					<a href="drama.php"><img src="images/genres/drama.png" alt="Drama" style="height:30px; width:30px;" ></a>
					<h6>Drama</h6>
				</li>
				<li>
					<a href="fantasy.php"><img src="images/genres/fantasy.png" alt="Fantasy" style="height:30px; width:30px;"></a>
					<h6>Fantasy</h6>
				</li>
				<li class="active">
					<a href="horror.php"><img src="images/genres/horror.png" alt="Horror" style="height:30px; width:30px;"></a>
					<h6>Horror</h6>
				</li>
				<li>
					<a href="romance.php"><img src="images/genres/romance.png" alt="Romance" style="height:30px; width:30px;"></a>
					<h6>Romance</h6>
				</li>				
				<li>
					<a href="sci_fi.php"><img src="images/genres/sci-fi.png" alt="Sci-Fi" style="height:30px; width:30px;"></a>
					<h6>Sci-Fi</h6>
				</li>
				<li>
					<a href="thriller.php"><img src="images/genres/thriller.png" alt="Thriller" style="height:30px; width:30px;"></a>
					<h6>Thriller</h6>
				</li>
				<li>
					<a href="western.php"><img src="images/genres/western.png" alt="Western" style="height:30px; width:30px;"></a>
					<h6>Western</h6>
				</li>
				
				
			</ul>
			
			
			<div class="clearfix"></div>

			<br><div class="dashboard-container animate slideInUp">
				<h4 class="heading-extra-margin-bottom">Horror</h4>

					<div class="row">
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/open?id=1dc2SkWx7CUM2U26o1R99urowoJzH3dOV"><img src="images/madam_joy.jpg" alt="Listing" style="height:200px; width:400px;" ></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=1dc2SkWx7CUM2U26o1R99urowoJzH3dOV">Madam Joy</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value="0.86"
							        data-animation-start-value="0.86"
							        data-size="32"
							        data-thickness="3"
							        data-fill="{
							          &quot;color&quot;: &quot;red&quot;
							        }"
							        data-empty-fill="#def6de"
							        data-reverse="true"
							      ><span style="color:red;">8.6</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/file/d/1PXFRdeskrTYIWssIByYcsKd019RVh5W5/view?usp=sharing"><img src="images/things_apart.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Things fall Apart</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value="0.6"
							        data-animation-start-value="0.6"
							        data-size="32"
							        data-thickness="3"
							        data-fill="{
							          &quot;color&quot;: &quot;#ff4141&quot;
							        }"
							        data-empty-fill="#ffe1e1"
							        data-reverse="true"
							      ><span style="color:#ff4141;">6.0</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
					
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/open?id=1NXN8SH3Z4-bdH5d-qJxKrFfoJFNYSkiM"><img src="images/figurine.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">figurine</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value="0.86"
							        data-animation-start-value="0.86"
							        data-size="32"
							        data-thickness="3"
							        data-fill="{
							          &quot;color&quot;: &quot;red&quot;
							        }"
							        data-empty-fill="#def6de"
							        data-reverse="true"
							      ><span style="color:red;">8.6</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/open?id=1d9spqIz6OXk9R5AC_7tMvOmPa3BUjB9V"><img src="images/saworoide.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Saworoide</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value="0.72"
							        data-animation-start-value="0.72"
							        data-size="32"
							        data-thickness="3"
							        data-fill="{
							          &quot;color&quot;: &quot;red&quot;
							        }"
							        data-empty-fill="#def6de"
							        data-reverse="true"
							      ><span style="color:red;">7.2</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
					
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/open?id=1LHSULBae4fy31vtul0KaHGIXI4VzcveQ"><img src="images/blood_money.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Blood Money</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value="0.86"
							        data-animation-start-value="0.86"
							        data-size="32"
							        data-thickness="3"
							        data-fill="{
							          &quot;color&quot;: &quot;red&quot;
							        }"
							        data-empty-fill="#def6de"
							        data-reverse="true"
							      ><span style="color:red;">8.6</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/open?id=1ZXWvKlQfH1p8FR_rjunHp_YIcwxjk2OF"><img src="images/koto_aye.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Koto Aye</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value="0.6"
							        data-animation-start-value="0.6"
							        data-size="32"
							        data-thickness="3"
							        data-fill="{
							          &quot;color&quot;: &quot;#ff4141&quot;
							        }"
							        data-empty-fill="#ffe1e1"
							        data-reverse="true"
							      ><span style="color:#ff4141;">6.0</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
					
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/open?id=1uwPNPrCA0or44JKTQdy-QN2p7utiL07m"><img src="images/agbara_nla.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Agbara Nla (A.K.A AYAMATANGA)</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value="0.86"
							        data-animation-start-value="0.86"
							        data-size="32"
							        data-thickness="3"
							        data-fill="{
							          &quot;color&quot;: &quot;red&quot;
							        }"
							        data-empty-fill="#def6de"
							        data-reverse="true"
							      ><span style="color:red;">8.6</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/open?id=1m-XFZV-DbpbTBvYOCeKaNlbxDoGXtN-7"><img src="images/living.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Living in Bondage</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value="0.72"
							        data-animation-start-value="0.72"
							        data-size="32"
							        data-thickness="3"
							        data-fill="{
							          &quot;color&quot;: &quot;red&quot;
							        }"
							        data-empty-fill="#def6de"
							        data-reverse="true"
							      ><span style="color:red;">7.2</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/open?id=1hv8wWRQoqo-6Bi6c7lU4mlx90qfsQs9Z"><img src="images/lagos_benin.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Lagos to Benin</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value="0.86"
							        data-animation-start-value="0.86"
							        data-size="32"
							        data-thickness="3"
							        data-fill="{
							          &quot;color&quot;: &quot;red&quot;
							        }"
							        data-empty-fill="#def6de"
							        data-reverse="true"
							      ><span style="color:red;">8.6</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/open?id=14Oy0uKkXaMcnt37K8CylJOPnVqpmWAA5"><img src="images/sikiratu_sindodo.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Sikiratu Sindodo</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value="0.6"
							        data-animation-start-value="0.6"
							        data-size="32"
							        data-thickness="3"
							        data-fill="{
							          &quot;color&quot;: &quot;#ff4141&quot;
							        }"
							        data-empty-fill="#ffe1e1"
							        data-reverse="true"
							      ><span style="color:#ff4141;">6.0</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
					
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/open?id=1dc2SkWx7CUM2U26o1R99urowoJzH3dOV"><img src="images/akin_pawpaw4.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Junior Boys</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value="0.86"
							        data-animation-start-value="0.86"
							        data-size="32"
							        data-thickness="3"
							        data-fill="{
							          &quot;color&quot;: &quot;red&quot;
							        }"
							        data-empty-fill="#def6de"
							        data-reverse="true"
							      ><span style="color:red;">8.6</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
					
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/open?id=1Di94MBt--kh0AhIVEltucKCnBbLbiyqX"><img src="images/take_heed.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=1Di94MBt--kh0AhIVEltucKCnBbLbiyqX">Take Heed</a></h6>
							      <div
							        class="circle-rating-pro"
							        data-value="0.72"
							        data-animation-start-value="0.72"
							        data-size="32"
							        data-thickness="3"
							        data-fill="{
							          &quot;color&quot;: &quot;red&quot;
							        }"
							        data-empty-fill="#def6de"
							        data-reverse="true"
							      ><span style="color:red;">7.2</span></div>
								</div><!-- close .item-listing-text-skrn-vertical-align -->
							</div><!-- close .item-listing-text-skrn -->
						</div><!-- close .item-listing-container-skrn -->
					</div><!-- close .col -->
					
				</div><!-- close .row -->
				
				
				<ul class="page-numbers">
					<li><a class="previous page-numbers" href="#!"><i class="fas fa-chevron-left"></i></a></li>
					<li><span class="page-numbers current">1</span></li>
					<!-- <li><a class="page-numbers" href="#!">2</a></li>
					<li><a class="page-numbers" href="#!">3</a></li>
					<li><a class="page-numbers" href="#!">4</a></li>
					<li><a class="next page-numbers" href="#!"><i class="fas fa-chevron-right"></i></a></li> -->
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