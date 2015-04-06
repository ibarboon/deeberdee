<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Deeberdee | เบอร์มงคล เบอร์สวย เลขดี</title>
		<meta name="description" content="เบอร์มงคล เบอร์สวย เบอร์รับโชค เลขดี เลขศาสตร์ ผลรวมดี">
		<meta name="author" content="Deeberdee">
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Main Style -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
		<!-- Color Style -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/skins/colors/orange.css'); ?>">
		<!-- Layout Style -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/layout/wide.css'); ?>">
		<!--[if lt IE 9]><script src="<?php echo base_url('assets/js/html5.js'); ?>"></script><![endif]-->
		<!--link rel="shortcut icon" href="images/favicon.ico"-->
	</head>
	<body>
		<div id="wrap" class="boxed">
			<header class="fixed">
				<div class="top-bar">
					<div class="container clearfix">
						<div class="slidedown">
							<div class="eight columns">
								<div class="phone-mail">
									<?php
										foreach ($main_contact_list as $main_contact) {
											if ((int)strpos($main_contact['option_value'], '|') > 0) {
												$item = explode('|', $main_contact['option_value']);
											}
											echo "<a href=\"javascript: void(0);\"><i class=\"$item[0]\"></i> $item[1] : $item[2]</a>";
										}
									?>
								</div><!-- end .phone-mail -->
							</div><!-- end .eight.columns -->
							<div class="eight columns">
								<div class="social">
									<?php
										foreach ($social_network_list as $social_network) {
											if ((int)strpos($social_network['option_value'], '|') > 0) {
												$item = explode('|', $social_network['option_value']);
											}
											echo "<a href=\"$item[1]\" target=\"_blank\"><i class=\"$item[0] s-18\"></i></a>";
										}
									?>
								</div><!-- end .social -->
							</div><!-- end .eight.columns -->
						</div><!-- end .slidedown -->
					</div><!-- end .container -->
				</div><!-- end .top-bar -->
				<div class="main-header">
					<div class="container clearfix">
						<a href="#" class="down-button">
							<i class="icon-angle-down"></i>
						</a>
						<div class="one-third column">
							<div class="logo">
								<a href="<?php echo site_url('home');?>">
									<img src="<?php echo base_url('assets/images/logo-ex.png'); ?>" alt="Deeberdee | เบอร์มงคล เบอร์สวย เลขดี" />
								</a>
							</div><!-- end .logo -->
						</div>
						<div class="two-thirds column">
							<nav id="menu" class="navigation" role="navigation">
								<a href="#">Show navigation</a>
								<ul id="nav">
									<?php
										foreach ($menu_list as $menu) {
											if ($menu['option_key'] === $current_page) {
												echo '<li class="active"><a href="'.site_url($menu['option_key']).'">'.$menu['option_value'].'</a></li>';
											} else {
												echo '<li><a href="'.site_url($menu['option_key']).'">'.$menu['option_value'].'</a></li>';
											}
										}
									?>
								</ul><!-- end #nav -->
							</nav><!-- end #menu .navigation -->
						</div>
					</div><!-- end .container -->
				</div><!-- end .main-header -->
			</header>