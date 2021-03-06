<?php
	session_start();

	require_once('functions.php');
	
	include_once($_SERVER['DOCUMENT_ROOT'] . '/Society/scripts/language.php');
	
	if(!isset($_COOKIE['lang'])){
		setcookie('lang', 'en', time() + (86400 * 365), "/");
	}

    if(isset($_POST['countries'])){
		setcookie('lang', $_POST['countries'], time() + (86400 * 365), "/");
		header('Location: '. basename($_SERVER["SCRIPT_FILENAME"], '.php') . '.php?' . $_SERVER['QUERY_STRING']);
    }

    $page_included = false;

    if(isset($_GET['page_name'])){
    	$page_included = base64_decode($_GET['page_name']);
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="manifest" href="manifest.json">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="Daniel Krul">
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<link rel="icon" href="favicon.png" type="image/x-icon">
	<meta name="keywords" content="">

	<title>Society</title>

	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/sweetalert.css">
	<link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">

	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/tooltipsy.min.js"></script>
	<script type="text/javascript" src="./js/sweetalert.min.js"></script>
	<script type="text/javascript" src="./js/main.js"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiMRP9nxzCnQqK3KneoEYZqLs9YAPvVIY"></script>
	<!-- <script type="text/javascript" src="./js/smooth.js"></script> -->
</head>
<body>
	<menu id="mainLeftMenu">
		<div class="logo">
			<a href=""><h1>Society</h1></a>
		</div>

		<nav class="menu">
			<ul>
				<li>
					<a href="/">
						<span class="fa fa-home <?php echo $page_included ? '' : 'active'; ?>">
							<p class="inside">
							<?php $_GET['translatedID'] = 0; include('scripts/translated.php'); ?>
							</p>
						</span>
					</a>
				</li>

				<li>
					<a href="?page_name=<?php echo base64_encode('about'); ?>">
						<span class="fa fa-question <?php echo $page_included == 'about' ? 'active' : ''; ?>">
							<p class="inside">
							<?php $_GET['translatedID'] = 1; include('scripts/translated.php'); ?>
							</p>
						</span>
					</a>
				</li>

				<li>
					<a href="?page_name=<?php echo base64_encode('contribute'); ?>">
						<span class="fa fa-usd <?php echo $page_included == 'contribute' ? 'active' : ''; ?>">
							<p class="inside">
							<?php $_GET['translatedID'] = 2; include('scripts/translated.php'); ?>
							</p>
						</span>
					</a>
				</li>

				<li>
					<a href="?page_name=<?php echo base64_encode('contact'); ?>">
						<span class="fa fa-envelope <?php echo $page_included == 'contact' ? 'active' : ''; ?>">
							<p class="inside">
							<?php $_GET['translatedID'] = 3; include('scripts/translated.php'); ?>
							</p>
						</span>
					</a>
				</li>

				<li>
					<a href="?page_name=<?php echo base64_encode('bug_report'); ?>">
						<span class="fa fa-exclamation-triangle <?php echo $page_included == 'bug_report' ? 'active' : ''; ?>" aria-hidden="true">
							<p class="inside">
							<?php $_GET['translatedID'] = 4; include('scripts/translated.php'); ?>
							</p>
						</span>
					</a>
				</li>

				<li>
					<a href="?page_name=<?php echo base64_encode('download'); ?>">
						<span class="fa fa-download <?php echo $page_included == 'download' ? 'active' : ''; ?>" aria-hidden="true">
							<p class="inside">
							<?php $_GET['translatedID'] = 8; include('scripts/translated.php'); ?>
							</p>
						</span>
					</a>
				</li>
			</ul>
		</nav>

		<div class="footer">
			<div class="inner">
				<div class="icons">
					<a href="">
						<i class="fa fa-facebook" title="Facebook"></i>
					</a>
					<a href="">
						<i class="fa fa-twitter" title="Twitter" aria-hidden="true"></i>
					</a>
					<a href="">
						<i class="fa fa-instagram" title="Instagram" aria-hidden="true"></i>
					</a>
					<a href="mailto:dankrul.krul@gmail.com">
						<i class="fa fa-envelope" title="E-mail"></i>
					</a>
				</div>
			</div>
		</div>
	</menu>

	<article id="mainRight">
		<div class="cover">

			<?php 

			include($_SERVER['DOCUMENT_ROOT'] . '/Society/scripts/lang_select.php');

			?>

			<div class="inner">
				<?php

				if(!$page_included){
					include($_SERVER['DOCUMENT_ROOT'] . '/Society/pages/main.php');
				} else {
					switch ($page_included) {
						case 'about':
							include($_SERVER['DOCUMENT_ROOT'] . '/Society/pages/' . $page_included . '.php');
						break;

						case 'contribute':
							include($_SERVER['DOCUMENT_ROOT'] . '/Society/pages/' . $page_included . '.php');
						break;

						case 'contact':
							include($_SERVER['DOCUMENT_ROOT'] . '/Society/pages/' . $page_included . '.php');
						break;

						case 'bug_report':
							include($_SERVER['DOCUMENT_ROOT'] . '/Society/pages/' . $page_included . '.php');
						break;

						case 'download':
							include($_SERVER['DOCUMENT_ROOT'] . '/Society/pages/' . $page_included . '.php');
						break;

						default:
    						include($_SERVER['DOCUMENT_ROOT'] . '/Society/pages/main.php');
						break;
					}
				}

				?>
			</div>
		</div>
	</article>

	<div id="visibilityContainer">
		<div class="mainContent">
			<div class="mainWrap">
				<div class="topContent">
				</div>

				<div class="middleContent">
				</div>

				<div class="bottomContent">
				</div>
			</div>
		</div>
	</div>
</body>
</html>