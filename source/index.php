<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<title>Peter Amelang</title>
	<meta name="description" content="Beschreibung" />
	<meta name="keywords" content="Suchbegriffe" />
	<meta name="robots" content="INDEX, FOLLOW" />
	<meta name="author" content="Peter Amelang" />

	<link rel="stylesheet" href="css/styles.css" />

	<meta property="og:title" content="Peter Amelang - Developer"/>
	<meta property="og:image" content="FB Bild"/>
	<meta property="og:site_name" content="Peter Amelang"/>
	<meta property="og:description" content="Peter Amelang, Allrounder, Backend-& Frontenddevloper & Trekkie with a passion for cycling."/>
	<meta property="og:type" content="website" />

	<link rel="apple-touch-icon" sizes="57x57" href="images/browser-icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/browser-icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/browser-icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/browser-icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/browser-icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/browser-icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/browser-icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/browser-icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/browser-icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/browser-icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/browser-icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/browser-icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/browser-icons/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/browser-icons/ms-icon-144x144.png">
</head>
<body>
	<div class="global-wrapper" id="fullpage">
		<div class="wrapper section" id="hello-container">
			<div id="header-logo"></div>
			<div class="content center">
				<p class="font-size-h1">Hello.</p>
				<hr>
				<p class="name">Peter Amelang</p>
			</div>
			<div class="btn-next-wrapper"></div>
		</div>
		<div class="wrapper section" id="who-container">
			<div class="navigation">
				<a href="#hello">Hello.</a>
				<a href="#who" class="active">Who?</a>

				<div class="btn-previous-wrapper"></div>

				<a href="#what">What?</a>
				<a href="#wow">Wow!</a>
			</div>
			<div class="content center">
				<div class="intro">
					<p class="name">My name is <b>Peter Amelang</b></p>
					<p class="about">I'm <b id="personal-info">IN TRAINING AT FORMAT D</b></p>
					<p class="location">Located in <b>munich</b></p>
				</div>
				<div class="skills">
					<div class="front-end">
						<p class="title">I do <b>Front-End-</b></p>
						<div class="skill-progress">
							<div class="skill">
								<p class="skill-title">jQuery</p>
								<div class="progress-bar progress-3"></div>
							</div>

							<div class="skill">
								<p class="skill-title">HTML & CSS</p>
								<a class="help-toggler"></a>
								<p class="help-content">HTML 5, CSS3, SASS</p>
								<div class="progress-bar progress-8"></div>
							</div>
						</div>
					</div>
					<div class="back-end">
						<p class="title">and <b>Back-End-Stuff</b></p>
						<div class="skill-progress">
							<div class="skill">
								<p class="skill-title">PHP</p>
								<a class="help-toggler"></a>
								<p class="help-content">OOP, MVC</p>
								<div class="progress-bar progress-2"></div>
							</div>

							<div class="skill">
								<p class="skill-title">Magento</p>
								<a class="help-toggler"></a>
								<p class="help-content">MVC</p>
								<div class="progress-bar progress-1"></div>
							</div>
						</div>
					</div>
					<div class="design">
						<p class="title">But also <b>Design</b></p>
						<div class="skill-progress">
							<div class="skill">
								<p class="skill-title">Sketch</p>
								<div class="progress-bar progress-3"></div>
							</div>

							<div class="skill">
								<p class="skill-title">Adobe Photoshop</p>
								<div class="progress-bar progress-5"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-next-wrapper"></div>
		</div>
		<div class="wrapper section" id="what-container">
			<?php if (1 != 1): ?>
			<div id="article-load-wrapper">

			</div>
			<?php endif; ?>
			<div class="navigation">
				<a href="#hello">Hello.</a>
				<a href="#who">Who?</a>

				<div class="btn-previous-wrapper"></div>

				<a href="#what" class="active">What?</a>
				<a href="#wow">Wow!</a>
			</div>
			<div class="content center">

				<?php if (1 == 1): ?>
					<p>Coming soon.</p>
				<?php else: ?>
				<div class="menu">
					<p>Have a look at my <b>work</b></p>

					<div class="btn-wrapper">
						<div class="view-toggler featured active" id="view-toggler-show-featured">Featured</div>
						<div class="view-toggler all" id="view-toggler-show-all">All</div>
					</div>
				</div>

				<!-- Show as default -->
				<div class="work-view" id="work-featured">
					<div class="item" id="scredia">
						<small>Project</small>
						<p class="font-size-h4">
							SCREDIA<br>
							SIMPLE. CREATIVE. MEDIA.
						</p>
					</div>
					<div class="item" id="redesign-web-comic-sans">
						<small>Design</small>
						<p class="font-size-h4">
							REDESIGNING<br>
							THE WEB FOR THE NEW<br>
							„COMIC SANS“ - TREND
						</p>
					</div>
					<div class="item" id="lazy-js">
						<small>Script</small>
						<p class="font-size-h4">
							LAZY.JS<br>
							THE SCRIPT I WAS<br>
							TO LAZY TO WRITE
						</p>
					</div>
				</div>

				<!-- Show by toggler -->
				<div class="work-view" id="work-all">
					<div class="projects">
						<small>Projects</small>
						<p class="item">
							SCREDIA<br>
							SIMPLE. CREATIVE. MEDIA.
						</p>
						<p class="item">
							LOREM IMPSUM<br>
							BLA BLI BLUB TITEL<br>
							ÜBER 3 ZEILEN, YEAH
						</p>
					</div>

					<div class="designs">
						<small>Designs</small>
						<p class="item">
							REDESIGNING<br>
							THE WEB FOR THE NEW<br>
							„COMIC SANS“ - TREND
						</p>
						<p class="item">
							CONCEPTING<br>
							AN BOOKING APP FOR<br>
							DESKTOP AND MOBILE
						</p>
					</div>

					<div class="scripts">
						<small>Scripts</small>
						<p class="item">
							LAZY.JS<br>
							THE SCRIPT I WAS<br>
							TO LAZY TO WRITE
						</p>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<div class="btn-next-wrapper"></div>
		</div>
		<div class="wrapper section" id="wow-container">
			<div class="navigation">
				<a href="#hello">Hello.</a>
				<a href="#who">Who?</a>

				<div class="btn-previous-wrapper"></div>

				<a href="#what">What?</a>
				<a href="#wow" class="active">Wow!</a>
			</div>
			<div class="content center">
				<div class="title-box">
					<p class="font-size-h1">Say hi.</p>
					<hr>
				</div>

				<a href="mailto:hi@peteramelang.com" class="font-size-h2">hi@peteramelang.com</a>

				<a href="https://dribbble.com/peteramelang" class="external-link">Visit me on <b class="dribbble">DRIBBBLE</b></a>
				<a href="https://github.com/peteramelang/" class="external-link">Visit me on <b class="github">github</b></a>
			</div>

			<p class="footer">
				<a href="#hello">peteramelang.net</a><b class="year">2015</b><a href="#">Impress</a>
			</p>

		</div>
	</div>

	<script src="js/main.min.js"></script>

</body>
</html>