<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Keith D. Moore</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<!--[if lte IE 8]>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
	<!--<![endif]-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/stylesheets/styles.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js"></script>
	<script src="http://cdn.jsdelivr.net/jquery.localscroll/1.4.0/jquery.localScroll.min.js"></script>
	<script type="text/javascript" src="assets/javascripts/jquery.matchHeight.js"></script>
	<script type="text/javascript" src="assets/javascripts/initPage.js" defer></script>

</head>
<body>

	<div class="fixed-menu">
		<div class="pure-menu pure-menu-horizontal">
			<ul class="pure-menu-list" id="nav">
				<li class="pure-menu-item"><a href="#home" class="pure-menu-link">Home</a></li>
				<li class="pure-menu-item"><a href="#portfolio" class="pure-menu-link">Portfolio</a></li>
				<li class="pure-menu-item"><a href="#contact" class="pure-menu-link">Contact</a></li>
			</ul>
		</div>
	</div>

	<div class="content-wrapper">

		<div class="section" id="home">
			<div class="splash">
				<h1>Keith D. Moore</h1>
				<p>Full Stack Developer</p>
				<ul class="social-links">
					<li><a class="social-item" href="https://github.com/kdavidmoore"><i class="fa fa-github-square" aria-hidden="true"></i> GitHub</a></li>
					<li><a class="social-item" href="https://linkedin.com/in/kdavidmoore"><i class="fa fa-linkedin-square" aria-hidden="true"></i> LinkedIn</a></li>
				</ul>
				<p class="button-wrapper">
					<a class="custom-button pure-button pure-button-primary" href="#portfolio">Browse Portfolio</a>
					<a class="custom-button pure-button pure-button-primary" href="moore_resume.pdf">Download Resume</a>
				</p>
			</div>
		</div>

		<div class="section" id="portfolio">

			<h1 class="section-header">Portfolio</h1>

			<div class="pure-g portfolio-wrapper">
				<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
					<div class="thumb-wrapper">
						<div class="outer-thumb">
							<img id="img-1" class="custom-img" src="assets/images/coffee.png" alt="Coffee Site">
						</div>
						<div class="hover-thumb">
							<h3>Coffee Site</h3>
							<p><a href="https://github.com/kdavidmoore/coffee2-angular" class="pure-button">GitHub</a> <a href="http://kdavidmoore.com/coffee" class="pure-button">Demo</a></p>
							<p class="info-text">An eCommerce site built using Node.js/Express, MongoDB, and AngularJS.</p>
						</div>
					</div>
				</div>
				<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
					<div class="thumb-wrapper">
						<div class="outer-thumb">
							<img id="img-2" class="custom-img" src="assets/images/electric.png" alt="Electric or Not">
						</div>
						<div class="hover-thumb">
							<h3>Electric or Not</h3>
							<p><a href="https://github.com/kdavidmoore/electric-or-not" class="pure-button">GitHub</a> <a href="http://kdavidmoore.com:3060" class="pure-button">Demo</a></p>
							<p class="info-text">A single-page voting app built using Node.js/Express, Bootstrap, and MongoDB.</p>
						</div>
					</div>
				</div>
				<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
					<div class="thumb-wrapper">
						<div class="outer-thumb">
							<img id="img-7" class="custom-img" src="assets/images/yikyak.png" alt="Rock Talk">
						</div>
						<div class="hover-thumb">
							<h3>Rock Talk</h3>
							<p><a href="https://github.com/kdavidmoore/yikyak-clone" class="pure-button">GitHub</a> <a href="http://kdavidmoore.com/savetherocks" class="pure-button">Demo</a></p>
							<p class="info-text">Social media app built using PHP, MySQL, and MeekroDB.</p>
						</div>
					</div>
				</div>
				<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
					<div class="thumb-wrapper">
						<div class="outer-thumb">
							<img id="img-4" class="custom-img" src="assets/images/langs.png" alt="Interactive Map">
						</div>
						<div class="hover-thumb">
							<h3>Interactive Map</h3>
							<p><a href="https://github.com/kdavidmoore/backTableBankers" class="pure-button">GitHub</a> <a href="http://kdavidmoore.com/languages" class="pure-button">Demo</a></p>
							<p class="info-text">Uses AngularJS and DataMaps.js to apply and graphically display up to three data filters.</p>
						</div>
					</div>
				</div>
				<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
					<div class="thumb-wrapper">
						<div class="outer-thumb">
							<img id="img-3" class="custom-img" src="assets/images/movies.png" alt="Movie Crawler">
						</div>
						<div class="hover-thumb">
							<h3>Movie Crawler</h3>
							<p><a href="https://github.com/kdavidmoore/movie-app" class="pure-button">GitHub</a> <a href="http://kdavidmoore.com/movie-crawler" class="pure-button">Demo</a></p>
							<p class="info-text">Pulls JSON data from themoviedb.org API; filters results using typeahead.js and Isotope.</p>
						</div>
					</div>
				</div>
				<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
					<div class="thumb-wrapper">
						<div class="outer-thumb">
							<img id="img-6" class="custom-img" src="assets/images/tweets.png" alt="Panama Papers Tweets">
						</div>
						<div class="hover-thumb">
							<h3>Panama Papers Tweets</h3>
							<p><a href="https://github.com/kdavidmoore/panama-papers-tweets" class="pure-button">GitHub</a> <a href="http://kdavidmoore.com/panama-papers" class="pure-button">Demo</a></p>
							<p class="info-text">Pulls data from Twitter API and filters results using AngularJS.</p>
						</div>
					</div>
				</div>
				<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
					<div class="thumb-wrapper">
						<div class="outer-thumb">
							<img id="img-5" class="custom-img" src="assets/images/chat.png" alt="Node Chat">
						</div>
						<div class="hover-thumb">
							<h3>Node Chat</h3>
							<p><a href="https://github.com/kdavidmoore/node-chat" class="pure-button">GitHub</a> <a href="https://shielded-fortress-12118.herokuapp.com/" class="pure-button">Demo</a></p>
							<p class="info-text">Send and recieve messages from multiple chat clients using Node.js and socket.io.</p>
						</div>
					</div>
				</div>
				<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
					<div class="thumb-wrapper">
						<div class="outer-thumb">
							<img id="img-8" class="custom-img" src="assets/images/calc.png" alt="JS Calculator">
						</div>
						<div class="hover-thumb">
							<h3>JS Calculator</h3>
							<p><a href="https://github.com/kdavidmoore/js-calculator" class="pure-button">GitHub</a> <a href="http://kdavidmoore.com/calculator" class="pure-button">Demo</a></p>
							<p class="info-text">Performs and displays simple calculations using HTML, CSS, jQuery, and JavaScript</p>
						</div>
					</div>
				</div>
				<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
					<div class="thumb-wrapper">
						<div class="outer-thumb">
							<img id="img-8" class="custom-img" src="assets/images/places.png" alt="Search Places">
						</div>
						<div class="hover-thumb">
							<h3>Search Places</h3>
							<p><a href="https://github.com/kdavidmoore/us-cities-angular" class="pure-button">GitHub</a> <a href="http://kdavidmoore.com/search-places" class="pure-button">Demo</a></p>
							<p class="info-text">Search for places and display directions using AngularJS and Google Maps JavaScript API.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section" id="contact">
			<h1 class="section-header">Contact</h1>
			<div class="form-wrapper">
				<form class="pure-form pure-g" action="mailer.php" method="post">
					<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
						<fieldset class="pure-group">
							<input type="text" class="pure-input-1 form-control" name="name" placeholder="Name" required>
							<input type="email" class="pure-input-1 form-control" name="email" placeholder="Email" required>
						</fieldset>

						<fieldset class="pure-group">
							<textarea class="pure-input-1 form-control" name="message" placeholder="Your message" required></textarea>
						</fieldset>

						<button type="submit" name="action" class="custom-button pure-button pure-input-1-2 pure-button-primary">Submit</button>
					</div>
				</form>
				<div class="pure-g">
					<div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-3">
						<div class="message-wrapper">
							<?php
								if (isset($_GET['sent'])){
									print "<div class='message' style='border: 1px solid #FF4431'>" .
										"<h3 style='color: #FF4431'>Message sent! I'll be in touch shortly.</h3>" .
										"</div>";
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<p>Keith D. Moore | All Rights Reserved</p>
	</div>

</body>
</html>
