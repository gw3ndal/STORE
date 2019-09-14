<!-- HEADER -->
<?php include("../app/view/layout/header.inc.php");?>
    <!-- Content -->
	<div id="content">

		<!-- Section - Main -->
		<section class="section section-main section-main-1 bg-light">
			
			<div class="container dark">
				<div class="slide-container">
					<div id="section-main-1-carousel-image" class="image inner-controls">			
						<?php
							foreach($newProducts as $newPro){
						?>
						<div class="slide">
							<div class="bg-image">
								<img src="<?= $newPro["pro_img_url_recto"]?>" alt="tablette">
							</div>
						</div>				
						<?php
							}
						?>
					</div>
					<div class="content dark">
						<div id="section-main-1-carousel-content" class=" hide-this-2">
							<?php
								foreach($newProducts as $newPro){
							?>
							<div class="content-inner">
								<h4 class="text-muted">Nouveautés!</h4>
								<h1><?= $newPro["pro_title"]?></h1>
								<h5 class="text-muted mb-5"><?= $newPro["pro_subtitle1"]?> | <?= $newPro["pro_subtitle3"]?></h5>
								<div class="btn-group">
								<a href="#productModal" data-product="<?= $newPro['pro_id']?>" data-price="<?= $newPro['pro_price_euro']?>"  data-qte="<?php if(!empty($caddie)){ echo $caddie[0]['cad_qt'];}?>" data-sub="<?= $newPro['pro_subtitle1']?>" data-name="<?= $newPro['pro_title']?>" data-descr="<?= $newPro['pro_descr']?>" data-toggle="modal" class="btn btn-outline-primary btn-lg">
									Ajout au panier
								</a>
									<span class="price price-lg">pour <?= $newPro["pro_price_euro"]?> €</span>
								</div>
							</div>							
							<?php
								}
							?>
						</div>
						<nav class="content-nav hide-this-2">
							<a class="prev" href="#"><i class="ti-arrow-left"></i></a>
							<a class="next" href="#"><i class="ti-arrow-right"></i></a>
						</nav>
					</div>
					<div class="content dark display-this new-title">
						<h4 class="mt-3 mb-3 text-center">NOUVEAUTÉS</h4>
					</div>
				</div>
			</div>

		</section>

		<!-- Section - About -->
		<section class="section section-bg-edge">

			<div class="image right col-md-6 push-md-6">
				<div class="bg-image"><img src="assets/img/photos/pic-home.jpg" alt="coeur"></div>
			</div>
		
			<div class="container">
				<div class="col-lg-5 col-md-9">
					<div class="rate mb-5 rate-lg"><i class="ti-world active"></i><i class="ti-world active"></i><i class="ti-world"></i><i class="ti-world active"></i><i class="ti-world active"></i></div>
					<h1>Le meilleur d'ici et d'ailleurs!</h1>
					<p class="lead text-muted mb-5">Une sélection rigoureuse pour ne proposer que le meilleur et le plus original ma gueule.</p>
					<div class="blockquotes">
						<!-- Blockquote -->
						<blockquote class="blockquote light animated" data-animation="fadeInLeft">
							<div class="blockquote-content">
								<div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
								<p>Neuf personnes sur dix aiment le chocolat ; la dixième ment.</p>
							</div>
							<footer>
								<img src="assets/img/avatars/avatar06.jpg" alt="portrait">
								<span class="name">John G. Quik<span class="text-muted">, Skyblog</span></span>
							</footer>
						</blockquote>
						<!-- Blockquote -->
						<blockquote class="blockquote animated" data-animation="fadeInRight" data-animation-delay="300">
							<div class="blockquote-content dark">
								<div class="rate rate-sm mb-3"><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star active"></i><i class="fa fa-star"></i></div>
								<p>Prenez du chocolat afin que les plus méchantes compagnies vous paraissent bonnes.</p>
							</div>
							<footer>
								<img src="assets/img/avatars/avatar07.jpg" alt="portrait">
								<span class="name">Daniel Hernandez<span class="text-muted">, SMS</span></span>
							</footer>
						</blockquote>
					</div>
				</div>
			</div>

		</section>

		<!-- Section - Steps -->
		<section class="section section-extended right dark">

			<div class="container bg-dark">
				<div class="row">
					<div class="col-md-4">
						<!-- Step -->
						<div class="feature feature-1 mb-md-0">
							<div class="feature-icon icon icon-primary"><i class="ti ti-shopping-cart"></i></div>
							<div class="feature-content">
								<h4 class="mb-2"><a href="menu-list-collapse.html">Remplissez votre panier</a></h4>
								<p class="text-muted mb-0">Le panier est solide alors ne vous gênez pas.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<!-- Step -->
						<div class="feature feature-1 mb-md-0">
							<div class="feature-icon icon icon-primary"><i class="ti ti-wallet"></i></div>
							<div class="feature-content">
								<h4 class="mb-2">Procédez au paiement</h4>
								<p class="text-muted mb-0">Paiement sécurisé grâce au MuguSecureSytem</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<!-- Step -->
						<div class="feature feature-1 mb-md-0">
							<div class="feature-icon icon icon-primary"><i class="ti ti-package"></i></div>
							<div class="feature-content">
								<h4 class="mb-2">Réception commande.</h4>
								<p class="text-muted mb-3">Livraison écoresponsable à dos de mule à prix fixe.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>

		<!-- Section - Menu -->
		<section  id="retour"class="section pb-0 protrude">

			<div class="container">
				<h1 class="mb-6">Faîtes votre choix | <span class="toeshi-black-2 font-weight-light"><?=SITE_NAME?></span></h1>
			</div>

			<div class="menu-sample-carousel carousel inner-controls" data-slick='{
				"dots": true,
				"slidesToShow": 3,
				"slidesToScroll": 1,
				"infinite": true,
				"responsive": [
					{
						"breakpoint": 991,
						"settings": {
							"slidesToShow": 2,
							"slidesToScroll": 1
						}
					},
					{
						"breakpoint": 690,
						"settings": {
							"slidesToShow": 1,
							"slidesToScroll": 1
						}
					}
				]
			}'>
				<!-- Menu Sample -->
				<?php
					foreach($categ as $cat){
				?>
				<div class="menu-sample">
					<a href="index.php?module=product&action=catalogue&id=<?=$cat['cat_main_id']?>">
						<img src="<?= $cat["cat_main_img"]?>" alt="categorie" class="image">
						<h3 class="title"><?= $cat["cat_main_descr"]?></h3>
					</a>
				</div>
				<?php
					}
				?>
			</div>

		</section>

<!-- FOOTER -->
<?php include("../app/view/layout/footer.inc.php");?>


