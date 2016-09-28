<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/assets/vendor/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/assets/fonts/stylesheet.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/assets/css/bootstrap.css">

	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/assets/css/basscss.min.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri())?>/assets/css/main.css">


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div id="banner">
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="#">
					<img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/logo.png" alt="">
				</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">

					<li><a href="#">สินค้า</a></li>
					<li><a href="#">บริการ</a></li>
					<li><a href="#">วิธีการชำระเงิน </a></li>
					<li><a href="#">ติดต่อเรา</a></li>

				</ul>


			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<div class="main-text">
			<h1 class="mb3">TNT SMART PLUS SERVICE</h1>
			<h1 class="subtitle italic">ให้บริการ เกี่ยวกับเครื่องรัดกล่อง แบบครบวงจร ทั้งซ่อม และ ซื้อ - ขาย</h1>
		</div>
		<div class="p3"><a class="btn btn-primary">ปรึกษาเรา</a></div>
		<div class="p3"><img src="<?php echo esc_url(get_template_directory_uri())?>/assets/images/playicon.png" alt=""></div>
		<div class="adown"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
	</div>
</div>

