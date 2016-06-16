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
							<li><a href="#about">About me</a></li>
							<li><a href="#current-events">Current events</a></li>
							<li><a href="#contact-me">Contact me</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</header>

		<!-- Splash Page -->
		<section id="welcome" class="p-y-4">
			<div class="container">
				<div class="jumbotron transparent-bg">
					<div class="row">
						<h1>Eliot Ostling</h1>
						<p>Web developer, computer programmer , chess enthusiast, coffee hound & game of thrones nerd </p>
					</div>
					<div class="row">
						<div class="col-md-4">
							<iframe src="https://liveblitz.chessbase.com" width="100%" height="350"></iframe>
						</div>
						<div class="col-md-4">
							<img class="img-responsive" src="img/angular.svg" alt="angularific">
						</div>
						<div class="col-md-4">
							<img class="img-responsive" src="img/php.svg" alt="logo">
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="about">
			<div class="container">
					<div class="col-xs-12">
						<div class="well text-center">
							<p>I am a Web developer that is a chess-centric! What does this really mean? Well I am currently working
							on several apps that gives chess more coverage. Whilst this is my main goal, I am constantly looking
							for better ways to solve the same problem. This methodolgoy can be applied to anything and trust
							me I do! </p>
						</div>
					</div>

			</div>


		</section>

		<section id="current-events">
			<div class="container">
					<div class="col-xs-12">
						<div class="well text-center">
							<ul>Current Project:</ul>
							<li>Coming Soon</li>
						</div>
					</div>
			</div>

		</section>




		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<section id="contact-me">					<!--Begin Contact Form-->
					<form id="contact-form" action="php/mailer.php" method="post">
						<div class="form-group">
							<label for="name">Name <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<input type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="subject">Subject</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</div>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
							</div>
						</div>
						<div class="form-group">
							<label for="message">Message <span class="text-danger">*</span></label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-comment" aria-hidden="true"></i>
								</div>
							<textarea class="form-control" rows="5" id="message" name="message"
										 placeholder="Message (2000 characters max)"></textarea>
							</div>
						</div>

						<!-- reCAPTCHA -->
						<div class="g-recaptcha" data-sitekey="6Lf2DSITAAAAAPTOdhrZZ7Gv3Va366TimJD3S7Lw"></div>

						<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
					</form>

					<!--empty area for form error/success output-->
					<div class="row">
						<div class="col-xs-12">
							<div id="output-area"></div>
						</div>
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