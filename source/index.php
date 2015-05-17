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
	<div class="global-wrapper">
		<div class="wrapper" id="hello">
			<div class="content center">
				<h1>Hello.</h1>
				<hr>
				<p>Peter Amelang</p>
			</div>
			<div class="btn-next-wrapper"></div>
		</div>
		<div class="wrapper" id="who">
			<div class="navigation">
				<a href="#">Hello.</a>
				<a href="#">Who?</a>

				<div class="btn-previous-wrapper"></div>

				<a href="#">What?</a>
				<a href="#">Wow!</a>
			</div>
			<div class="content center">
				<div class="intro">
					<p>My name is </p><p class="font-size-h3">Peter Amelang</p>
					<p>I'm </p><p class="font-size-h4" id="personal-info">a placeholder</p>
					<p>Located in </p><p class="font-size-h4">munich</p>
				</div>
				<div class="skills">
					<div class="front-end">
						<p>I do </p><p class="font-size-h4">Front-End-</p>
						<div class="skill-progress">
							<p>jQuery</p>
							<div class="progress-bar progress-3"></div>

							<p>HTML & CSS</p>
							<a class="help-toggler"></a>
							<div class="progress-bar progress-8"></div>
							<p class="help-content">HTML 5, CSS3, SASS</p>
						</div>
					</div>
					<div class="back-end">
						<p>and </p><p class="font-size-h4">Back-End-Stuff</p>
						<div class="skill-progress">
							<p>PHP</p>
							<a class="help-toggler"></a>
							<div class="progress-bar progress-2"></div>
							<p class="help-content">HTML 5, CSS3, SASS</p>

							<p>Magento</p>
							<a class="help-toggler"></a>
							<div class="progress-bar progress-1"></div>
							<p class="help-content">HTML 5, CSS3, SASS</p>
						</div>
					</div>
					<div class="design">
						<p>But also </p><p class="font-size-h4">Design</p>
						<div class="skill-progress">
							<p>Sketch</p>
							<div class="progress-bar progress-3"></div>

							<p>Photoshop</p>
							<div class="progress-bar progress-6"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-next-wrapper"></div>
		</div>
		<div class="wrapper" id="what">
			<div class="navigation">
				<a href="#">Hello.</a>
				<a href="#">Who?</a>

				<div class="btn-previous-wrapper"></div>

				<a href="#">What?</a>
				<a href="#">Wow!</a>
			</div>
			<div class="content center">
				<div class="menu">
					<p>Have a look at my </p><p class="font-size-h4">work</p>

					<div class="view-toggler featured">Featured</div>
					<div class="view-toggler all">All</div>
				</div>

				<!-- Show as default -->
				<div class="work-view" id="work-featured">
					<div class="item">
						<small>Project</small>
						<p class="font-size-h3">
							SCREDIA<br>
							SIMPLE. CREATIVE. MEDIA.
						</p>
					</div>
					<div class="item">
						<small>Design</small>
						<p class="font-size-h3">
							REDESIGNING<br>
							THE WEB FOR THE NEW<br>
							„COMIC SANS“ - TREND
						</p>
					</div>
					<div class="item">
						<small>Script</small>
						<p class="font-size-h3">
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
		<div class="wrapper" id="wow">
			<div class="navigation">
				<a href="#">Hello.</a>
				<a href="#">Who?</a>

				<div class="btn-previous-wrapper"></div>

				<a href="#">What?</a>
				<a href="#">Wow!</a>
			</div>

			<div class="content center">
				<h1>Say hi.</h1>
				<hr>

				<p class="font-size-h2">hi@peteramelang.com</p>

				<div><p>Visit me on </p><p class="font-size-h4 dribbble">DRIBBBLE</p></div>
				<div><p>Visit me on </p><p class="font-size-h4 github">github</p></div>
			</div>

			<ul class="footer">
				<li>
					<a href="#">peteramelang.net</a>
				</li>
				<li>
					2015
				</li>
				<li>
					<a href="#">Impress</a>
				</li>
			</ul>

		</div>
	</div>
</body>


</html>