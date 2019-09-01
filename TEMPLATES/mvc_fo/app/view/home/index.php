<!-- HEADER -->
<?php include("../app/view/layout/header.inc.php");?>
    <!-- Content -->
	<div id="content">

		<!-- Section - Main -->
		<section class="section section-main section-main-1 bg-light">
			
			<div class="container dark">
				<div class="slide-container">
					<div id="section-main-1-carousel-image" class="image inner-controls">
						<div class="slide"><div class="bg-image"><img src="https://www.chocolatsdumonde.ch/wp-content/uploads/Millesime_CamerounNoir_A.jpg" alt="tablette"></div></div>
						<div class="slide"><div class="bg-image"><img src="https://www.chocolatsdumonde.ch/wp-content/uploads/Millesime_CamerounNoir_A.jpg" alt="tablette"></div></div>
						<div class="slide"><div class="bg-image"><img src="https://www.chocolatsdumonde.ch/wp-content/uploads/Millesime_CamerounNoir_A.jpg" alt="tablette"></div></div>
					</div>
					<div class="content dark">
						<div id="section-main-1-carousel-content">
							<?php
								foreach($newProducts as $newPro){
							?>
							<div class="content-inner">
								<h4 class="text-muted">Nouveautés!</h4>
								<h1><?= $newPro["display_name"]?></h1>
								<h5 class="text-muted mb-5">chocolat noir grand cru | Cameroun</h5>
								<div class="btn-group">
									<a href="#productModal" data-toggle="modal" class="btn btn-outline-primary btn-lg"><span>Ajout au panier</span></a>
									<span class="price price-lg">pour 8.00€</span>
								</div>
							</div>							
							<?php
								}
							?>
						</div>
						<nav class="content-nav">
							<a class="prev" href="#"><i class="ti-arrow-left"></i></a>
							<a class="next" href="#"><i class="ti-arrow-right"></i></a>
						</nav>
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
				<h1 class="mb-6">Faîtes votre choix | <span class="toeshi-black-2 font-weight-light">TŒSHĪ</span></h1>
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
				<div class="menu-sample">
					<a href="product_index.php">
						<img src="assets/img/photos/menu-sample-burgers.jpg" alt="categorie" class="image">
						<h3 class="title">Labels</h3>
					</a>
				</div>
				<!-- Menu Sample -->
				<div class="menu-sample">
					<a href="product_index.php">
						<img src="https://scanup.fr/wp-content/uploads/2018/12/3-chocolats.jpg" alt="categorie" class="image">
						<h3 class="title">Variétés</h3>
					</a>
				</div>
				<!-- Menu Sample -->
				<div class="menu-sample">
					<a href="product_index.php">
						<img src="assets/img/photos/menu-sample-sushi.jpg" alt="categorie" class="image">
						<h3 class="title">Fèves</h3>
					</a>
				</div>
				<!-- Menu Sample -->
				<div class="menu-sample">
					<a href="menu-list-navigation.html#Pasta">
						<img src="assets/img/photos/menu-sample-pasta.jpg" alt="categorie" class="image">
						<h3 class="title">Production</h3>
					</a>
				</div>
			</div>

		</section>

<!-- FOOTER -->
<?php include("../app/view/layout/footer.inc.php");?>


