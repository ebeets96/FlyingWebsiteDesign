
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact | Flying</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="navbar.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<nav>
			<img id="logo" src="images/logo.png" width="400" height="100" />
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="wfc.html">WFC</a></li>
				<li><a href="contact.html" class="current">Contact</a></li>
			</ul>
			<br class="clear" />
		</nav>
	</header>
	<main>
		<article>
			<h1>Form Result</h1>
			<table border="1" width="800">
				<tr>
					<th width="200">Your name:</th><td><?php echo $_POST["name"]; ?></td>
				</tr>
				<tr>
					<th width="200">Your email:</th><td><?php echo $_POST["email"]; ?></td>
				</tr>
				<tr>
					<th width="200">Message sent to:</th><td><?php echo $_POST["to"]; ?></td>
				</tr>
				<tr>
					<th width="200">Message:</th><td><?php echo str_replace("\n","<br />",$_POST["message"]); ?></td>
				</tr>
			</table>
		</article>
	</main>
	<footer>
		<section>
			<nav class="flt_l">
				<h2>Flight Training Information</h2>
				<ul>
					<li><a href="http://flighttraining.aopa.org">Flight Training Magazine</a></li>
					<li><a href="https://www.eaa.org/en/eaa/aviation-communities-and-interests/aviation-beginners-and-newcomers/learn-how-to-fly-and-discover-the-freedom-of-flight">EAA Learn to Fly</a></li>
					<li><a href="https://www.eaa.org/en/eaa/aviation-education-and-resources/eaa-youth-education/eaa-young-eagles-program">EAA Young Eagles</a></li>
				</ul>
			</nav>
			<nav class="flt_r">
				<h2>Important Pilot Resources</h2>
				<ul>
					<li><a href="http://www.sportys.com/pilotshop/">Sporty's Pilot Shop</a></li>
					<li><a href="http://skyvector.com">SkyVector Aviation Maps</a></li>
					<li><a href="http://www.ecfr.gov/cgi-bin/text-idx?c=ecfr&tpl=/ecfrbrowse/Title14/14tab_02.tpl">FAA FAR's</a></li>
				</ul>
			</nav>
			<br class="clear" />
		</section>
	</footer>
	<div id="red_footer">
		<div id="footnotes">	
			<p>&copy;2015 Eric Beets</p>
		</div>
	</div>
</body>
</html>
