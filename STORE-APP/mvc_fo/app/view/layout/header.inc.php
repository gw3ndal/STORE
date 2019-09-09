<!DOCTYPE html>
<html lang="<?= APP_LANG ?>">
<head>

	<!-- Meta -->
	<!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->
	<meta charset="<?= APP_CHARSET ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Title -->
	<title><?=PAGE_TITLE?></title>
	<meta name="description" content="<?= (defined('PAGE_DESCR'))?PAGE_DESCR : PAGE_DESCR_DEFAUT ?>">

	<!-- Favicons -->
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
	<link rel="manifest" href="assets/img/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- CSS Plugins -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/plugins/slick-carousel/slick/slick.css" />
	<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css" />
	<link rel="stylesheet" href="assets/plugins/animsition/dist/css/animsition.min.css" />

	<!-- CSS Icons -->
	<link rel="stylesheet" href="assets/css/themify-icons.css" />
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css" />

	<!-- CSS Theme -->
	<link id="theme" rel="stylesheet" href="assets/css/themes/theme-beige.min.css" />


	<!-- CSS CREATED & LINKS ADDED -->
	<link href="assets/css/mystyle.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Red+Hat+Text:400,700&display=swap" rel="stylesheet">
</head>

<body>

<!-- Body Wrapper -->
<div id="body-wrapper" class="animsition">

	<!-- Header -->
	<header id="header" class="light menuFixed">

		<div class="container">
			<div class="row">
				<div class="col-md-2 bgLogo">
					<!-- Logo -->
					<div class="module module-navigation logo_0">
						<ul class="nav nav-main mgTest">
						<li><a href="https://youtu.be/_8VZ52fWYnQ?t=33" target="_blank">
							<img src="assets/img/logo_0.png" alt="logo" width="50" >
						</a>
						</li>
						<li class="toeshi left">
							<span><?=SITE_NAME?></span>
						</li>
					</ul>
					</div>
				</div>
				<div class="col-md-6">
					<!-- Navigation -->
					<nav class="module module-navigation left mr-4">
						<ul id="nav-main" class="nav nav-main">
							<li>
								<a href="index.php">Accueil</a>
							</li>
							<li class="has-dropdown">
								<a href="#">Label</a>
								<div class="dropdown-container">
									<ul class="dropdown-mega">
										<li><a href="products_by_cat.php">ARTISANAL</a></li>
										<li><a href="">BEAN TO BAR</a></li>
										<li><a href="">BIO</a></li>
										<li><a href="">CRU / NON-CONCHÉ</a></li>
										<li><a href="">ÉQUITABLE</a></li>
										<li><a href="">EXCLUSIF</a></li>
										<li><a href="">SANS SUCRE</a></li>
										<li><a href="">VEGAN</a></li>
									</ul><!-- 
									<div class="dropdown-image">
										<img src="assets/img/photos/dropdown-about.jpg" alt="">
									</div> -->
								</div>
							</li>
							<li class="has-dropdown">
								<a href="#">Production</a>
								<div class="dropdown-container">
									<ul class="dropdown-mega">
										<li><a href="products_by_cat.php">ALLEMAGNE</a></li>
										<li><a href="">BELGIQUE</a></li>
										<li><a href="">CANADA</a></li>
										<li><a href="">ESPAGNE</a></li>
										<li><a href="">FINLANDE</a></li>
										<li><a href="">FRANCE</a></li>
										<li><a href="">ISLANDE</a></li>
										<li><a href="">SUISSE</a></li>
										<li><a href="">USA</a></li>
									</ul><!-- 
									<div class="dropdown-image">
										<img src="assets/img/photos/dropdown-about.jpg" alt="">
									</div> -->
								</div>
							</li>
							<li class="has-dropdown">
								<a href="#">Fèves</a>
								<div class="dropdown-container">
									<div class="row">
										<div class="col-6">
											<ul class="dropdown-mega">
												<li><a href="products_by_cat.php">BELIZE</a></li>
												<li><a href="">BRÉSIL</a></li>
												<li><a href="">CAMEROUN</a></li>
												<li><a href="">COLOMBIE</a></li>
												<li><a href="">CONGO</a></li>
												<li><a href="">COSTA RICA</a></li>
												<li><a href="">CUBA</a></li>
												<li><a href="">ÉQUATEUR</a></li>
												<li><a href="">HONDURAS</a></li>
												<li><a href="">INDE</a></li>
											</ul>
										</div>
										<div class="col-6">
											<ul class="dropdown-mega">
												<li><a href="products_by_cat.php">JAMAÏQUE</a></li>
												<li><a href="">MADAGASCAR</a></li>
												<li><a href="">MEXIQUE</a></li>
												<li><a href="">NICARAGUA</a></li>
												<li><a href="">PAPOUASIE-NOUVELLE-GUINÉE</a></li>
												<li><a href="">PÉROU</a></li>
												<li><a href="">RÉPUBLIQUE DOMINICAINE</a></li>
												<li><a href="">TANZANIE</a></li>
												<li><a href="">VENEZUELA</a></li>
												<li><a href="">VIETNAM</a></li>
											</ul>
										</div>
									</div>
									<!-- 
									<div class="dropdown-image">
										<img src="assets/img/photos/dropdown-about.jpg" alt="">
									</div> -->
								</div>
							</li>
						<!-- 	<li class="has-dropdown">   
								<a href="#">Variétés</a>
								<div class="dropdown-container">
									<ul class="dropdown-mega">
										<li><a href="product_index.php">au lait</a></li>
										<li><a href="">blanc</a></li>
										<li><a href="">blond</a></li>
										<li><a href="">noir</a></li>
										<li><a href="">noir d'origine</a></li>
										<li><a href="">noir grand cru</a></li>
										<li><a href="">rubis</a></li>
									</ul>
									<div class="dropdown-image">
										<img src="assets/img/photos/dropdown-more.jpg" alt="">
									</div>
								</div>
							</li> -->
						</ul>
					</nav>
					<div class="nav nav-main mt-1 mb-1">
						<a href="index.php?module=product&action=catalogue&id=4" class="btn btn-outline-secondary"><span>catalogue</span></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="module left">
						<i class="ti ti-user mr-3 text-primary"></i>
						<?php
							if (!isset($_SESSION["user"])){
						?>
						<a href="index.php?module=customer&action=login"  data-toggle="modal" data-target="#logoutModal">Mon compte</a>
						<?php
							} else{
						?>
						<a href="#" data-toggle="modal" data-target="#logoutModal" class="font-weight-bold text-capitalize"><?= $_SESSION["user"]["cus_firstname"] ?></a>
						<?php
							}
						?>
						<?php
							if (isset($_SESSION["user"])) {
								if ($_SESSION["user"]["cus_admin"]==1) { 
						?>
						<a href="../../mvc_bo/view/dashboard/dashboard.php"><i class="ti ti-settings ml-3 text-primary"></i></a>
						<?php
							}
						}
						?>

					</div>
					<a href="#" class="module module-cart right" data-toggle="panel-cart">
						<span class="cart-icon">
							<i class="ti ti-shopping-cart"></i>
							<span class="notification">1</span>
						</span>
						<span class="cart-value">8.00€</span>
					</a>
				</div>
			</div>
		</div>
	</header>
	<!-- Header / End -->

	<!-- Header -->
	<header id="header-mobile" class="light">

		<div class="module module-nav-toggle">
			<a href="#" id="nav-toggle" data-toggle="panel-mobile"><span></span><span></span><span></span><span></span></a>
		</div>    

		<div class="module module-logo logo-mobile">
			<a href="index.php">
				<img src="assets/img/logo_0.png" alt="logo">
			</a>
			<span class="toeshi-black"><?=SITE_NAME?></span>
		</div>

		<a href="#" class="module module-cart" data-toggle="panel-cart">
			<i class="ti ti-shopping-cart"></i>
			<span class="notification">2</span>
		</a>
	</header>
	<!-- Header / End -->

