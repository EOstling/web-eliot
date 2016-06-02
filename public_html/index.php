<?php
$CURRENT_DIR = __DIR__;
require_once("lib/template/head-utils.php");
?>
<body class="sfooter">
	<div class="sfooter-content">

		<!-- header -->
		<header class="p-y-4">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav"
								  aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Eliot Ostling</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="main-nav">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="about-me/index.html">About me</a></li>
							<li><a href="portfolio/index.html">Portfolio</a></li>
							<li><a href="current-events/index.html">Current events</a></li>
							<li><a href="contact-me/index.html">Contact me</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</header>

		<!-- Splash Page -->
		<section id="welcome" class="p-y-4">
			<div class="container">
				<div class="jumbotron">
					<div class="row">
						<h1>Eliot Ostling</h1>
						<p>Web developer, computer programmer , chess enthusiast, coffee hound & game of thrones nerd </p>
						<p>Hi everybody! This site is the best way of seeing a New Mexican Programmer evolve as the world
							evolves
							around him</p>
					</div>
					<div class="row">
						<div class="col-md-4">
							<iframe src="https://liveblitz.chessbase.com" width="100%" height="350"></iframe>
						</div>
						<div class="col-md-4">
							<img class="img-responsive" src="img/angular.png" alt="angularific">
						</div>
						<div class="col-md-4">
							<img class="img-responsive" src="img/php-logo.jpg" alt="logo">
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
	<footer class="p-y-4">
		<div class="container">
			<div class="copyright text-center">
				&copy; Eliot Robert Ostling valar morgulus
			</div>
		</div>
	</footer>
</body>

</html>