<?php
	require('system/functions.php');

	$nav_pages = [
		"home" => "",
		"team" => "",
		"reference" => "",
		"cenik" => "",
		"kontakt" => ""
	];

	$get_page = isset($_GET['page']) ? base64_decode($_GET['page']) : 'home';

	$pageExist = false;
	foreach (array_keys($nav_pages) as $key => $value)
	{
		if($value === $get_page)
		{
			$pageExist = true;
			break;
		}
	}

	if($pageExist)
		$nav_pages[$get_page] = "active";
	else
		$get_page = '404';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

	<title>Webdesign</title>
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
				<a class="<?php echo($nav_pages['home']); ?>" 
					href="?page=<?php echo base64_encode('home'); ?>"> Domů
		        </a>
				<a class="<?php echo($nav_pages['team']); ?>"
					href="?page=<?php echo base64_encode('team'); ?>">
					Tým
				</a>
				<a class="<?php echo($nav_pages['reference']); ?>"
					href="?page=<?php echo base64_encode('reference'); ?>">
					Reference
				</a>
				<a class="<?php echo($nav_pages['cenik']); ?>"
					href="?page=<?php echo base64_encode('cenik'); ?>">
					Ceník
				</a>
				<a class="<?php echo($nav_pages['kontakt']); ?>"
					href="?page=<?php echo base64_encode('kontakt'); ?>">
					Kontakt
				</a>
			</div>

			<div id="headerBorder"></div>
		</header>

		<div id="mainContent">
			<div class="mainWrap">

				<?php
					loadPage($get_page);
				?>

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