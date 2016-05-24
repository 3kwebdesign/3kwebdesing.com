<?php
	require_once('functions.php');
	
	$if_page_set = false;

	if(isset($_GET['page'])){
		$if_page_set = base64_decode($_GET['page']);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<meta name="description" content="" />
	<meta name="author" content="Daniel Krul" />
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
	<link rel="icon" href="favicon.png" type="image/x-icon" />
	<meta name="keywords" content="" />

	<title>3K Webdesign</title>

	<link rel="stylesheet" type="text/css" href="./css/style.css" />
	<link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css" />

	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/sweetalert.css" />
	<script type="text/javascript" src="./js/main.js"></script>
	<!-- <script type="text/javascript" src="./js/smooth.js"></script> -->
</head>
<body>
	<div id="page">
	<header id="header">
		<div class="cover">
		<a href="/">
			<div class="logo">
				<h1><span class="underline">3K</span> webdesign</h1>
			</div>
		</a>

			<menu class="menu">
				<a href="/">Domů</a>
				<a href="?page=<?php echo base64_encode('about'); ?>">O nás</a>
				<a href="?page=<?php echo base64_encode('reference'); ?>">Reference</a>
				<a href="?page=<?php echo base64_encode('cenik'); ?>">Ceník prací</a>
				<a href="">Odkaz #4</a>
				<span class="underline"><a href="?page=<?php echo base64_encode('kontakt'); ?>">Kontakt</a></span>
			</menu>

			<div class="quote">
				<i class="fa fa-quote-left fa-2x fa-pull-left" aria-hidden="true" style="color: white;"></i>

				<h2>Jsme tým profesionálních webových designérů a vývojářů. Tvoříme moderní responsivní webdesign podle přání zákazníka.</h2>
			</div>
		</div>
	</header>

	<div id="content">
	<?php
		if(!$if_page_set){
				include($_SERVER['DOCUMENT_ROOT'] . '/3kwebdesign.com/pages/main.php');
				} else {
					switch ($if_page_set) {
						case 'about':
							include($_SERVER['DOCUMENT_ROOT'] . '/3kwebdesign.com/pages/' . $if_page_set . '.php');
						break;

						case 'contribute':
							include($_SERVER['DOCUMENT_ROOT'] . '/3kwebdesign.com/pages/' . $if_page_set . '.php');
						break;

						case 'kontakt':
							include($_SERVER['DOCUMENT_ROOT'] . '/3kwebdesign.com/pages/' . $if_page_set . '.php');
						break;

						case 'reference':
							include($_SERVER['DOCUMENT_ROOT'] . '/3kwebdesign.com/pages/' . $if_page_set . '.php');
						break;

						case 'cenik':
							include($_SERVER['DOCUMENT_ROOT'] . '/3kwebdesign.com/pages/' . $if_page_set . '.php');
						break;

						default:
    						include($_SERVER['DOCUMENT_ROOT'] . '/3kwebdesign.com/pages/404.php');
						break;
					}
				}
	?>
	</div>
	</div>
</body>
</html>