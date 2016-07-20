<?php

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

	<title>3K Webdesign</title>
	<link rel="shortcut icon" href="./design/icons/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="./design/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="./css/sweetalert.css" />
	<link rel="stylesheet" type="text/css" href="./css/nprogress.css" />
	<link rel="stylesheet" type="text/css" href="./css/style.css" />

	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/nprogress.js"></script>
	<script type="text/javascript" src="./js/sweetalert.min.js"></script>
	<script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
	<div id="page">
		<header id="header">
			<div class="logo">
				<a href="/">
					<img src="design/images/logo.png" />

					<div class="title">
						Webdesign
					</div>
				</a>
			</div>

			<div class="menu">
				<a href="">Domů</a>
				<a href="">Tým</a>
				<a href="">Blog</a>
				<a href="">Ceník</a>
				<a href="">Kontakt</a>
			</div>

			<div id="headerBorder"></div>
		</header>

		<div id="mainContent">
			<div class="mainWrap">
				<hr class="mainBorder" />
				<h1 class="mainTitle">Lorem impsum dolor sit amet</h1>
				<p class="intro">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc luctus dui diam, et faucibus tellus accumsan a. Aenean at odio lectus. Integer tortor dui, iaculis eget efficitur sed, egestas nec odio.
				</p>

				<a href="" class="contactButton">Kontaktujte nás</a>
				<hr class="mainBorder" />
			</div>
		</div>

		<footer id="foot">
			<div class="socialSites">
				<i class="fa fa-envelope ico-envelope"></i>
				<i class="fa fa-twitter ico-twitter"></i>
				<i class="fa fa-facebook ico-facebook"></i>
			</div>
		</footer>
	</div>

	<script>

    	NProgress.start();

    	var interval = setInterval(function() { NProgress.inc(); }, 1000);        

    	$(window).load(function () {
        	clearInterval(interval);
        	NProgress.done();
    	});

    	$(window).unload(function () {
        	NProgress.start();
    	});

	</script>
</body>
</html>