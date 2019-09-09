<!-- HEADER -->
<?php include("../app/view/layout/header.inc.php");?>
	<!-- Content -->
	<div id="content">
		<!-- Section -->
		<section class="section bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 push-lg-2">
						<!-- Product Single -->
						<div class="product-single">
							<!-- <div class="product-image">
								<img src="assets/img/photos/product-single.jpg" alt="tablette">
							</div> -->
							<div class="product-content">
								<div class="product-header text-center">
									<h1 class="product-title"><?= $data["pro_title"]?></h1>
									<span class="product-caption text-muted"><?= $data["pro_subtitle1"]?></span>
									<span class="product-caption text-muted"><?= $data["pro_subtitle2"]?></span>
									<span class="product-caption text-muted text-lowercase"><strong>Catégories: </strong><?= $categories[0]["categories"]?></span>
									</div>
									<p class="lead">
										<?= $data["pro_descr"]?><br>
										70g
									</p>
								<hr class="hr-primary">
								<div class="row gutters-sm">
									<div class="col-lg-6 col-12">
										<!-- Menu Item -->
										<div class="menu-item menu-grid-item">
											<a href="index.php?module=product&action=photos&id=<?=$data['pro_id']?>"><img class="mb-4" src="<?= $data["pro_img_url_recto"]?>" alt="tablette"></a>
										</div>
									</div>
									<div class="col-lg-6 col-12">
										<!-- Menu Item -->
										<div class="menu-item menu-grid-item">
											<a href="index.php?module=product&action=photos&id=<?=$data['pro_id']?>#verso"><img class="mb-4" src="<?= $data["pro_img_url_verso"]?>" alt="tablette"></a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										
									</div>
								</div>
								<h5 id="qte" class="text-center text-muted">Envie d'y croquer!</h5>
								<div class="product-price text-center"><?= $data["pro_price_euro"]?>€</div>
								<div class="row">
									<div class="col-sm-6">
										 <div class="form-group text-center">
											<input type="number" class="form-control input-qty form-control-lg" value="1">
										</div>
									</div>
									<div class="col-sm-6">
										<a href="" class="btn btn-outline-primary btn-lg btn-block"><span>Ajout au Panier</span></a>
									</div>
								</div>
								<div class="text-center mt-4">
									<a href="menu-list-collapse.html" class="btn btn-link">Retour au menu</a>
								</div>
							</div>
							<h3 class="mt-5 mb-5 text-center">Avis gourmands</h3>
							<!-- Blockquote -->
							<blockquote class="blockquote blockquote-lg" data-center-top="filter: blur(0); transform: scale(1);" data-bottom-top="transform: scale(0.9);">
								<div class="blockquote-content dark">
									<div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i></div>
									<p>C'est vraiment mon chicoula préféré. C'est le meilleur wola!</p>
								</div>
								<footer>
									<img src="assets/img/avatars/avatar03.jpg" alt="portrait">
									<span class="name">Pablo Chiquito<span class="text-muted">, LinkedIn</span></span>
								</footer>
							</blockquote>
							<!-- Blockquote -->
							<blockquote class="blockquote blockquote-lg" data-center-top="filter: blur(0); transform: scale(1);" data-bottom-top="transform: scale(0.9);">
								<div class="blockquote-content dark">
									<div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
									<p>Ce chocolat a réellement changé ma vie. Depuis que j'en mange, j'ai arrêté de bicrave et je vote LREM.</p>
								</div>
								<footer>
									<img src="assets/img/avatars/avatar04.jpg" alt="portrait">
									<span class="name">Joseph Starr<span class="text-muted">, LinkedIn</span></span>
								</footer>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- FOOTER -->
<?php include("../app/view/layout/footer.inc.php");?>

