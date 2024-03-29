<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script src="//cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>
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
			<div id="video-logo-background"><a href="dashboard-home.html"><img src="images/logo-video-layout.png" alt="Logo"></a></div>
			
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
	            <li>
	              <a href="#">
						<span class="icon-Clock"></span>
	                Coming Soon
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
                <a href="#">
						<span class="icon-Clock"></span>
                  Coming Soon
                </a>
              </li>

            </ul>
				<div class="clearfix"></div>
		</nav>
		
		
		<div id="content-sidebar-pro">
			
			<div id="content-sidebar-image">
				<img src="images/dashboard5.jpg" alt="Movie Poster">
			</div>
			
			<div class="content-sidebar-section">
				<h2 class="content-sidebar-sub-header">AKI & PAWPAW</h2>
				<ul class="progression-studios-slider-rating">
					<li>PG-13</li><li>HD</li>
				</ul>
			</div><!-- close .content-sidebar-section -->
			
			<div class="content-sidebar-section">
				<h4 class="content-sidebar-sub-header">Release Date</h4>
				<div class="content-sidebar-short-description">2 October, 2017 (NG)</div>
			</div><!-- close .content-sidebar-section -->
			
			<div class="content-sidebar-section">
				<h4 class="content-sidebar-sub-header">Length</h4>
				<div class="content-sidebar-short-description">2 hr 43 min</div>
			</div><!-- close .content-sidebar-section -->
			
			<div class="content-sidebar-section">
				<h4 class="content-sidebar-sub-header">Director</h4>
				<div class="content-sidebar-short-description">James Wan</div>
			</div><!-- close .content-sidebar-section -->

			
			
			<div class="content-sidebar-section">
				<h2 class="content-sidebar-sub-header adjusted-recent-reviews">Recent Reviews</h2>
				<ul id="sidebar-reviews-pro">
					<li>
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
						<h6>Dan Cederholm</h6>
						<div class="sidebar-review-time">October 22, 2017</div>
						<div class="spoiler-review">Contains Spoiler</div>
						<p>They don't make many Sci-Fi films these days. This was a pleasant surprise all throughout the film. I really like this film.</p>
					</li>
					<li>
				      <div
				        class="circle-rating-pro"
				        data-value="0.53"
				        data-animation-start-value="0.53"
				        data-size="32"
				        data-thickness="3"
				        data-fill="{
				          &quot;color&quot;: &quot;#ff4141&quot;
				        }"
				        data-empty-fill="#ffe1e1"
				        data-reverse="true"
				      ><span style="color:#ff4141;">5.3</span></div>
						<h6>Jeff Seid</h6>
						<div class="sidebar-review-time">October 18, 2017</div>
						<p>Coming out of the theatres following my viewing of this film, I was confused. I couldn't decide whether I liked it or not.</p>
					</li>
					<li>
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
						<h6>Christian De Guzman</h6>
						<div class="sidebar-review-time">August 26, 2017</div>
						<div class="spoiler-review">Contains Spoiler</div>
						<p>I have been a cinema lover for years, read a lot of reviews on SKRN and everywhere, and never found the right movie to write my first review. I always thought I would wait for the movie.</p>
						<p>And this is it!</p>
					</li>
					<li>
				      <div
				        class="circle-rating-pro"
				        data-value="0.9"
				        data-animation-start-value="0.9"
				        data-size="32"
				        data-thickness="3"
				        data-fill="{
				          &quot;color&quot;: &quot;red&quot;
				        }"
				        data-empty-fill="#def6de"
				        data-reverse="true"
				      ><span style="color:red;">9.0</span></div>
						<h6>Jennifer Thomas</h6>
						<div class="sidebar-review-time">August 15, 2017</div>
						<p>'Oblivion’ was incredible. The visuals, the score, the acting, were all amazing. The plot is definitely one of the most original I've seen in a while</p>
					</li>
				</ul>
				<a href="#!" class="btn btn-green-pro btn-sm">See All Reviews</a>
			</div><!-- close .content-sidebar-section -->
			
		</div><!-- close #content-sidebar-pro -->
		
		
		<main id="col-main-with-sidebar">
			
			<div id="movie-detail-header-pro" style="background-image:url('images/dashboard3.jpg')">
				
				<div class="progression-studios-slider-more-options">
					<i class="fas fa-ellipsis-h"></i>
					<ul>
						<li><a href="#!">Add to Favorites</a></li>
						<li><a href="#!">Add to Watchlist</a></li>
						<li><a href="#!">Add to Playlist</a></li>
						<li><a href="#!">Share...</a></li>
						<li><a href="#!">Write A Review</a></li>
					</ul>
				</div>
				
				<a class="movie-detail-header-play-btn afterglow" href="#VideoLightbox-1"><i class="fas fa-play"></i></a>
				
				
	         <video id="VideoLightbox-1"  poster="images/dashboard4.jpg" width="960" height="540" src="vid.mp4">
	         </video>
				
				<div id="movie-detail-header-media">
					<div class="dashboard-container">
						<h5>Media</h5>						
						<div class="row">
							<div class="col-6 col-md-4 col-lg-4">
								<a class="movie-detail-media-link afterglow" href="#VideoLightbox-1">
									<div class="movie-detail-media-image">
										<img src="images/aki3.jpg">
										<span><i class="fas fa-play"></i></span>
										<h6>Trailer</h6>
									</div>
								</a>
							</div>
							<div class="col-6 col-md-4 col-lg-4">
								<a class="movie-detail-media-link afterglow" href="#VideoLightbox-1">
									<div class="movie-detail-media-image">
										<img src="images/aki2.jpg">
										<span><i class="fas fa-play"></i></span>
										<h6>Interview</h6>
									</div>
								</a>
							</div>
							<div class="col-6 col-md-4 col-lg-4">
								<a class="movie-detail-media-link" href="#!">
									<div class="movie-detail-media-image">
										<img src="images/aki3.jpg">
										<span><i class="fas fa-play"></i></span>
										<h6>Movie Stills</h6>
									</div>
								</a>
							</div>
						</div><!-- close .row -->
					</div><!-- close .dashboard-container -->
				</div><!-- close #movie-detail-header-media -->
				
				<div id="movie-detail-gradient-pro"></div>
			</div><!-- close #movie-detail-header-pro -->
			
			
			<div id="movie-detail-rating">
				<div class="dashboard-container">
					<div class="row">
						<div class="col-sm">
							<h5>Rate True Blood</h5>
							
							<div class="rating-pro">
   							  <label>
   							    <input type="radio" name="rating-pro" value="10" title="10 stars"> 10
   							  </label>
  							  <label>
  							    <input type="radio" name="rating-pro" value="9" title="9 stars"> 9
  							  </label>
  							  <label>
  							    <input type="radio" name="rating-pro" value="8" title="8 stars"> 8
  							  </label>
  							  <label>
  							    <input type="radio" name="rating-pro" value="7" title="7 stars"> 7
  							  </label>
 							  <label>
 							    <input type="radio" name="rating-pro" value="6" title="6 stars"> 6
 							  </label>
							  <label>
							    <input type="radio" name="rating-pro" value="5" title="5 stars"> 5
							  </label>
							  <label>
							    <input type="radio" name="rating-pro" value="4" title="4 stars"> 4
							  </label>
							  <label>
							    <input type="radio" name="rating-pro" value="3" title="3 stars"> 3
							  </label>
							  <label>
							    <input type="radio" name="rating-pro" value="2" title="2 stars"> 2
							  </label>
							  <label>
							    <input type="radio" name="rating-pro" value="1" title="1 star"> 1
							  </label>
							</div>
							
						</div>
						<div class="col-sm">
							<h6>User Rating</h6>
					      <div
					        class="circle-rating-pro"
					        data-value="0.86"
					        data-animation-start-value="0.86"
					        data-size="40"
					        data-thickness="3"
					        data-fill="{
					          &quot;color&quot;: &quot;red&quot;
					        }"
					        data-empty-fill="#def6de"
					        data-reverse="true"
					      ><span style="color:red;">8.6</span></div>
							<div class="clearfix"></div>
						</div>
					</div><!-- close .row -->
				</div><!-- close .dashboard-container -->
			</div><!-- close #movie-detail-rating -->
			
			<div class="dashboard-container">
				
				
				<div class="movie-details-section">
					<h2>Storyline</h2>
					<p>Mae Holland (Emma Watson) seizes the opportunity of a lifetime when she lands a job with the world's most powerful technology and social media company. Encouraged by the company's founder (Tom Hanks), Mae joins a groundbreaking experiment that pushes the boundaries of privacy, ethics and personal freedom. Her participation in the experiment, and every decision she makes soon starts to affect the lives and futures of her friends, family and that of humanity.</p>
				</div><!-- close .movie-details-section -->

				<div class="movie-details-section">
					<h2>The Cast</h2>
					<div class="row">
						<div class="col-12 col-md-6 col-lg-6 col-xl-4">
							<div class="item-listing-container-skrn">
								<a href="#!"><img src="http://via.placeholder.com/507x672" alt="Cast"></a>
								<div class="item-listing-text-skrn item-listing-movie-casting">
									<h6><a href="#!">Robert Downey Jr.</a></h6>
									<div class="movie-casting-sub-title">Tony Stark</div>
								</div><!-- close .item-listing-text-skrn -->
							</div><!-- close .item-listing-container-skrn -->
						</div><!-- close .col -->
						
						<div class="col-12 col-md-6 col-lg-6 col-xl-4">
							<div class="item-listing-container-skrn">
								<a href="#!"><img src="http://via.placeholder.com/507x672" alt="Cast"></a>
								<div class="item-listing-text-skrn item-listing-movie-casting">
									<h6><a href="#!">Scarlett Johansson</a></h6>
									<div class="movie-casting-sub-title">Black Widow</div>
								</div><!-- close .item-listing-text-skrn -->
							</div><!-- close .item-listing-container-skrn -->
						</div><!-- close .col -->
						
						<div class="col-12 col-md-6 col-lg-6 col-xl-4">
							<div class="item-listing-container-skrn">
								<a href="#!"><img src="http://via.placeholder.com/507x672" alt="Cast"></a>
								<div class="item-listing-text-skrn item-listing-movie-casting">
									<h6><a href="#!">Chris Hemsworth
Thor</a></h6>
									<div class="movie-casting-sub-title">Tony Stark</div>
								</div><!-- close .item-listing-text-skrn -->
							</div><!-- close .item-listing-container-skrn -->
						</div><!-- close .col -->
						
					</div><!-- close .row -->
				</div><!-- close .movie-details-section -->

					
				<div class="movie-details-section">
					<h2>Similar Movies</h2>
					<div class="row">
						<div class="col-12 col-md-6 col-lg-6 col-xl-4">
							<div class="item-listing-container-skrn">
								<a href="dashboard-movie-profile.html"><img src="http://via.placeholder.com/500x707" alt="Listing"></a>
								<div class="item-listing-text-skrn">
									<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Bad Neighbors 2</a></h6>
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
					
					
						<div class="col-12 col-md-6 col-lg-6 col-xl-4">
							<div class="item-listing-container-skrn">
								<a href="dashboard-movie-profile.html"><img src="http://via.placeholder.com/500x707" alt="Listing"></a>
								<div class="item-listing-text-skrn">
									<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">Star Wars: Rogue One</a></h6>
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
					
						<div class="col-12 col-md-6 col-lg-6 col-xl-4">
							<div class="item-listing-container-skrn">
								<a href="dashboard-movie-profile.html"><img src="http://via.placeholder.com/500x707" alt="Listing"></a>
								<div class="item-listing-text-skrn">
									<div class="item-listing-text-skrn-vertical-align"><h6><a href="dashboard-movie-profile.html">The Imitation Game</a></h6>
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
					</div><!-- close .row -->
				
				</div><!-- close .movie-details-section -->
				
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