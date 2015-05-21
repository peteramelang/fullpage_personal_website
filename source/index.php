<!DOCTYPE html>
<html lang="de">
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

	<meta property="og:title" content="FB Titel"/>
	<meta property="og:image" content="FB Bild"/>
	<meta property="og:site_name" content="Peter Amelang"/>
	<meta property="og:description" content="FB Beschreibung"/>
	<meta property="og:type" content="website" />

	<!--<meta name="msapplication-square70x70logo" content="images/windows-tile-70x70.png">
	<meta name="msapplication-square150x150logo" content="images/windows-tile-150x150.png">
	<meta name="msapplication-square310x310logo" content="images/windows-tile-310x310.png">
	<meta name="msapplication-TileImage" content="images/windows-tile-144x144.png">
	<meta name="msapplication-TileColor" content="#292929">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="images/apple-touch-icon-152x152-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="images/apple-touch-icon-120x120-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="images/apple-touch-icon-76x76-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="images/apple-touch-icon-60x60-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon.png">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Format D">
	<link rel="icon" sizes="196x196" href="images/homescreen-196x196.png">
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="icon" type="image/png" sizes="64x64" href="images/favicon.png">-->
</head>
<body>
	<div class="global-wrapper" id="fullpage">
		<div class="wrapper section" id="hello-container">
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
								<p class="help-content">HTML 5, CSS3, SASS</p>
								<div class="progress-bar progress-2"></div>
							</div>

							<div class="skill">
								<p class="skill-title">Magento</p>
								<a class="help-toggler"></a>
								<p class="help-content">HTML 5, CSS3, SASS</p>
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
								<div class="progress-bar progress-6"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-next-wrapper"></div>
		</div>
		<div class="wrapper section" id="what-container">
			<div class="navigation">
				<a href="#hello">Hello.</a>
				<a href="#who">Who?</a>

				<div class="btn-previous-wrapper"></div>

				<a href="#what" class="active">What?</a>
				<a href="#wow">Wow!</a>
			</div>
			<div class="content center">
				<div class="menu">
					<p>Have a look at my <b>work</b></p>

					<div class="btn-wrapper">
						<div class="view-toggler featured active" id="view-toggler-show-featured">Featured</div>
						<div class="view-toggler all" id="view-toggler-show-all">All</div>
					</div>
				</div>

				<!-- Show as default -->
				<div class="work-view" id="work-featured">
					<div class="item">
						<small>Project</small>
						<p class="font-size-h4">
							SCREDIA<br>
							SIMPLE. CREATIVE. MEDIA.
						</p>
					</div>
					<div class="item">
						<small>Design</small>
						<p class="font-size-h4">
							REDESIGNING<br>
							THE WEB FOR THE NEW<br>
							„COMIC SANS“ - TREND
						</p>
					</div>
					<div class="item">
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

				<a href="#" class="external-link">Visit me on <b class="dribbble">DRIBBBLE</b></a>
				<a href="#" class="external-link">Visit me on <b class="github">github</b></a>
			</div>

			<div class="footer">
				<a href="#">peteramelang.net</a>
				<p class="year">2015</p>
				<a href="#">Impress</a>
			</div>

		</div>
	</div>

	<script src="js/main.min.js"></script>

</body>
</html>