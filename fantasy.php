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
		
		<title>CEREFLIX - Fantasys</title>
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
					<div id="header-username">Suzie Smith</div><i class="fas fa-angle-down"></i>
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
	            <li class="current-menu-item">
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
             
			<li class="normal-item-pro current-menu-item">
                <a href="animation.php">
						<span class="icon-Movie-Ticket"></span>
                  Animation
                </a>
            </li>
			
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
                <a href="action.php">
						<span class="icon-Clock"></span>
                  Categories
                </a>
              </li>

            </ul>
				<div class="clearfix"></div>
		</nav>
	
		<main id="col-main">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="action.php">Action</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adventure.php">Adventure</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="animation2.php">Animation</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="comedy.php">Comedy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="documentary.php">Documentary</a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link" href="drama.php">Drama</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="fantasy.php">Fantasy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="horror.php">Horror</a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link" href="romance.php">Romance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="thriller.php">Thrillers</a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link" href="sci_fi.php">Sci-fi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="western.php">Western</a>
      </li>

    </ul>
  </div>
</nav>
			
			<div class="clearfix"></div>
			
			<div class="dashboard-container">
				
			<br><h4 class="heading-extra-margin-bottom">Fanatasy</h4>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="item-listing-container-skrn">
							<a href="https://drive.google.com/open?id=17fksKvaz6fS8iryrrETUWhfIYz7UoEmf"><img src="images/gammy.jpg" alt="Listing" style="height:200px; width:400px;" ></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=17fksKvaz6fS8iryrrETUWhfIYz7UoEmf">Gammy and the Living things</a></h6>
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
							<a href="https://drive.google.com/open?id=1cM73YLSlcnBcX-ibjMM4E4ToyeIB6rlM"><img src="images/monsters.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=1cM73YLSlcnBcX-ibjMM4E4ToyeIB6rlM">Monster and Aliens</a></h6>
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
							<a href="https://drive.google.com/open?id=116gYzTy9uuIfjBcPYNCARcqvye1LCWhT"><img src="images/panda.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=116gYzTy9uuIfjBcPYNCARcqvye1LCWhT">Kung fu Panda</a></h6>
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
							<a href="https://drive.google.com/open?id=1y3S0puCesWFyhqOynvTcnSlUPPj5Uwzn"><img src="images/justice_league.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=1y3S0puCesWFyhqOynvTcnSlUPPj5Uwzn">Justice League</a></h6>
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
							<a href="https://drive.google.com/open?id=1l_oZup-TrlzcDOCC9RsoMWHSIIdC9CI7"><img src="images/avengers.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=1l_oZup-TrlzcDOCC9RsoMWHSIIdC9CI7">Avengers</a></h6>
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
							<a href="https://drive.google.com/open?id=1s9HCDuspvaYejECaE7zPUgFo6HP0Lf-S"><img src="images/avatar2.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=1s9HCDuspvaYejECaE7zPUgFo6HP0Lf-S">Avatar</a></h6>
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
							<a href="https://drive.google.com/open?id=1_pdpS4hu1GvXQ2gkqx6GAEzAfevYwMDO"><img src="images/lion_king.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=1_pdpS4hu1GvXQ2gkqx6GAEzAfevYwMDO">The Lion King</a></h6>
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
							<a href="https://drive.google.com/open?id=19BZWPyj-wkbq-saZHijctuIkdzi0GEq9"><img src="images/xmen.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=19BZWPyj-wkbq-saZHijctuIkdzi0GEq9">X-Men</a></h6>
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
							<a href="https://drive.google.com/open?id=1Uv7fteDaTPcCmjwmdF5CpNwzSsHfvORY"><img src="images/hulk.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=1Uv7fteDaTPcCmjwmdF5CpNwzSsHfvORY">Hulk</a></h6>
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
							<a href="https://drive.google.com/open?id=1fA-DivNqo1HPNraf5xt9B7LHH3Zswl-M"><img src="images/raid_redemption.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=1fA-DivNqo1HPNraf5xt9B7LHH3Zswl-M">Raid Redemption</a></h6>
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
							<a href="https://drive.google.com/open?id=1iHn_1obft7tXPwbH8DwliKNi0jxgVzOp"><img src="images/hotel.jpeg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=1iHn_1obft7tXPwbH8DwliKNi0jxgVzOp">Hotel Translyvania</a></h6>
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
							<a href="https://drive.google.com/open?id=1C_FcZJaICfZdTg05CwzkKfFGOd_gmIL8"><img src="images/animation3.jpg" alt="Listing" style="height:200px; width:400px;"></a>
							<div class="item-listing-text-skrn">
								<div class="item-listing-text-skrn-vertical-align"><h6><a href="https://drive.google.com/open?id=1C_FcZJaICfZdTg05CwzkKfFGOd_gmIL8">The Incredible</a></h6>
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
					<!--<li><a class="page-numbers" href="#!">2</a></li>
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