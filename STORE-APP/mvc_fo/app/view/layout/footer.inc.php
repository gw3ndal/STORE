 <hr>
	   <!-- Footer -->
		<footer id="footer" class="bg-dark dark">
			
			<div class="container">
				<!-- Footer 1st Row -->
				<div class="footer-first-row row">
					<div class="col-lg-3 text-center mb-4">
						<a href="index.html"><img src="assets/img/logo/logo_0.png" alt="logo" width="88" class=""></a><br>
						<span class="toeshi"><?=SITE_NAME?></span>
					</div>
					<div class="col-lg-4 col-md-6">
						<h5 class="text-muted">ChocoLate news</h5>
						<ul class="list-posts">
							<li>
								<a href="https://www.alimentarium.org/fr/savoir/la-r%C3%A9putation-aphrodisiaque-du-chocolat" class="title">La réputation aphrodisiaque du chocolat</a>
								<span class="date">15 août, 2019</span>
							</li>
							<li>
								<a href="https://www.planetesante.ch/Magazine/Alimentation-et-nutrition/Cafe-et-chocolat/Du-chocolat-contre-un-trouble-majeur-du-rythme-cardiaque" class="title">Du chocolat contre un trouble majeur du rythme cardiaque</a>
								<span class="date">13 juillet, 2019</span>
							</li>
							<li>
								<a href="https://www.virginradio.fr/insolite-10-choses-que-vous-ne-savez-pas-sur-le-chocolat-a352119.html" class="title">La dose mortelle de chocolat pour un être humain est environ de 40 barres.</a>
								<span class="date">29 juin, 2019</span>
							</li>
						</ul>
					</div>
					<div class="col-lg-5 col-md-6">
						<h5 class="text-muted">Enregistrez votre email pour rien</h5>
						<!-- MailChimp Form -->
						<form action="//suelo.us12.list-manage.com/subscribe/post-json?u=ed47dbfe167d906f2bc46a01b&amp;id=24ac8a22ad" id="sign-up-form" class="sign-up-form validate-form mb-3" method="POST">
							<div class="input-group">
								<input name="EMAIL" id="mce-EMAIL" type="email" class="form-control" placeholder="Saisir votre email" required>
								<span class="input-group-btn">
									<button class="btn btn-primary btn-submit" type="submit">
										<span class="description">Enregistrer</span>
										<span class="success">
											<svg x="0px" y="0px" viewBox="0 0 32 32"><path stroke-dasharray="19.79 19.79" stroke-dashoffset="19.79" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M9,17l3.9,3.9c0.1,0.1,0.2,0.1,0.3,0L23,11"/></svg>
										</span>
										<span class="error">Tentez encore...</span>
									</button>
								</span>
							</div>
						</form>
						<h5 class="text-muted mb-3">Réseaux sociaux</h5>
						<a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>
						<a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
						<a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<!-- Footer 2nd Row -->
				<div class="footer-second-row">
					<span class="text-muted">Copyright <?=SITE_NAME?> 2019©</span>
				</div>
			</div>

			<!-- Back To Top -->
			<a href="#" id="back-to-top"><i class="ti ti-angle-up"></i></a>

		</footer>
		<!-- Footer / End -->

	</div>
	<!-- Content / End -->

	<!-- Panel Cart -->
	<div id="panel-cart">
		<div class="panel-cart-container">
			<div class="panel-cart-title">
				<h5 class="title">Votre Panier</h5>
				<button class="close" data-toggle="panel-cart"><i class="ti ti-close"></i></button>
			</div>
			<div class="panel-cart-content">
				<table class="table-cart">
				<?php
								if (count($caddie)==0) {?>
									
									<tr><td>Votre panier est vide </td></tr>
								
							<?php
        } else {
	    	foreach ($caddie as $products) {
	       ?>
					<tr>
						<td class="title">
						<span class="name"><a href="#productModal" data-product="<?= $products['pro_id']?>" data-price="<?= $products['pro_price_euro']?>" data-qte="<?= $products['cad_qt']?>" data-sub="<?= $products['pro_subtitle1']?>"data-name="<?= $products['pro_title']?>" data-descr="<?= $products['pro_descr']?>" data-toggle="modal"><?= $products['cad_qt']?> x <?= $products['pro_title']?></a></span>
							<span class="caption text-muted">chocolat noir grand cru | Cameroun</span>
						</td>
						<td class="price"><?= $products['price']?>€</td>
						<td class="actions">
						<a href="#productModal" data-product="<?= $products['pro_id']?>" data-price="<?= $products['pro_price_euro']?>" data-qte="<?= $products['cad_qt']?>" data-sub="<?= $products['pro_subtitle1']?>"data-name="<?= $products['pro_title']?>" data-descr="<?= $products['pro_descr']?>" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
										<a href="index.php?module=checkout&action=index&fait=suppression&pro_id=<?= $products['pro_id']?>" class="action-icon"><i class="ti ti-close"></i></a>
						</td>
					</tr>
					<?php  } } ?>
				</table>
				<div class="cart-summary">
					<div class="row">
						<div class="col-7 text-right text-muted">Prix:</div>
						<div class="col-5"><strong><?= $total['total'];?></strong></div>
					</div>
					<div class="row">
						<div class="col-7 text-right text-muted">Livraison:</div>
						<div class="col-5"><strong>-.--€</strong></div>
					</div>
					<hr class="hr-sm">
					<div class="row text-lg">
						<div class="col-7 text-right text-muted">Total:</div>
						<div class="col-5"><strong><?= $total['total'];?></strong></div>
					</div>
				</div>
			</div>
		</div>        
		<?php
			if (!isset($_SESSION["user"])){
		?>
		<a href="index.php?module=customer&action=login" class="panel-cart-action btn btn-secondary btn-block btn-lg">
		<?php
			} else{
		?>
		<a href="index.php?module=checkout&action=index" class="panel-cart-action btn btn-secondary btn-block btn-lg">
		<?php
			}
		?>
		<span>Commander</span></a>
	</div>

	<!-- Panel Mobile -->
	<nav id="panel-mobile">
		<div class="module module-logo bg-dark dark mobile-logo-toggle p-0">
			<a href="index.php">
				<img src="assets/img/logo/logo_0.png" alt="logo" width="88">
			</a>
			<br>    
			<div class="mobile-logo-toggle-toeshi">
				<a href="index.php"><?=SITE_NAME?></a>
			</div>
			<button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
			<div class="pb-2">
				<a href="index.php?#retour" class="btn btn-outline-primary"><span>catalogue</span></a>
			</div>
		</div>
		<!-- <div class="module module-social mobile-social mt-2">
			<a href="product_index" class="btn btn-outline-secondary"><span>catalogue</span></a>
		</div> -->
		<nav class="module module-navigation"></nav>
		<div class="module module-social mobile-social">
			<h6 class="text-sm mb-3">Nous suivre</h6>
			<a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
			<a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>
			<a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>
			<a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
			<a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
		</div>
		<div class="module module-social mobile-user p-0">
			<span class="icon icon-circle icon-primary icon-lg">
				<i class="ti ti-user"></i>
			</span><br>
			<?php
				if (!isset($_SESSION["user"])){
			?>
			<a href="index.php?module=customer&action=login"  data-toggle="modal" data-target="#logoutModal" class="font-weight-bold">Mon compte</a>
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
			<br>
			<span class="icon"><a href="_index.php"><i class="ti ti-settings text-secondary"></i></a></span>
			<?php
				}
			}
			?>
		</div>
	</nav>

	<!-- Body Overlay -->
	<div id="body-overlay"></div>

</div>

<!-- Modal / Product -->
<div class="modal fade" id="productModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form action="<?php if(isset($_SESSION['user'])){ echo 'index.php?module=checkout&action=index';}?>" method="post" name="addProduct" id="addProductForm">
				<div class="modal-header modal-header-lg dark bg-dark">
					<div class="bg-image"><img src="assets/img/photos/divers_8.jpg" alt="bandeau"></div>
					<h4 class="modal-title">Le chocolat est ruine, extase, amour,...</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
				</div>
				<div class="modal-product-details">
				<input type="hidden" id="productId" name="productId" />
					<div class="row align-items-center">
						<div class="col-9">
						<h6 class="mb-0" id="productName" name="productName"></h6>
						<h6 id="productSub" name="productSub"></h6>
						</div>
						<div class="col-3 text-lg text-right" id="productPrice"></div>
					</div>
				</div>
				<div class="modal-body panel-details-container">
					<!-- Panel Details / Size -->
					<div class="panel-details">
						<h5 class="panel-details-title">
							<a href="#panelDetailsSize" data-toggle="collapse">Descriptif</a>
						</h5>
						<div id="panelDetailsSize" class="collapse">
							<div class="panel-details-content">
							<p id="productDescr" class="lead">
							</div>
						</div>
					</div>
					<!-- Panel Details / Additions -->
					<div class="panel-details">
						<h5 class="panel-details-title">
							<a href="#panelDetailsAdditions" data-toggle="collapse">Quantité</a>
						</h5>
						<div id="panelDetailsAdditions" class="collapse show">
							<div class="panel-details-content">
								<div class="form-group text-center">
								<input type="number" id="qte" name="qte" class="form-control input-qty form-control-lg" value="1">
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
					if (!isset($_SESSION["user"])){
				?>
				<a  href="index.php?module=customer&action=login&notif=notconnected" class="modal-btn btn btn-secondary btn-block btn-lg">Ajout au panier</a>
				<?php
					} else{
				?>
				<button type="submit" class="modal-btn btn btn-secondary btn-block btn-lg">Ajout au panier</button>
				<?php
					}
				?>
			</form>
		</div>
	</div>
</div>
<!-- Modal / Address Edit -->
<div class="modal fade" id="editModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header modal-header-lg dark bg-dark">
				<div class="bg-image"><img src="assets/img/photos/modal-review4.jpg" alt="bandeau"></div>
				<h4 class="modal-title">modifier l'adresse de livraison</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
			</div>
			<div class="modal-product-details">
				<div class="row align-items-center">
					<div class="col-9">
						<h6 class="mb-0 text-uppercase"><?= $_SESSION["user"]["cus_lastname"] ?></h6>
						<span class="text-capitalize"><?= $_SESSION["user"]["cus_firstname"] ?></span>
					</div>
					<div class="col-3 text-lg text-right"><span class="icon"><i class="ti ti-receipt mr-3 text-primary"></i></span></div>
				</div>
			</div>
			<!-- FORM EDIT ADDRESS -->
			<form action="index.php?module=customer&action=address" method="post">
				<input type="hidden" name="cus_id" value="<?= $_SESSION["user"]["cus_id"]?>">
				<div class="modal-body panel-details-container">
					<div class="row mb-5">
						<div class="form-group col-sm-12">
							<label for="add_address1">Adresse:</label>
							<input type="text" class="form-control" required="required" id="add_address1" name="add_address1" value="<?= $read_add["add_address1"] ?>">
						</div>
						<div class="form-group col-sm-12">
							<label for="add_address2">Complément d'adresse:</label>
							<input type="text" class="form-control" placeholder="*Optionnel" id="add_address2" name="add_address2" value="<?= $read_add["add_address2"] ?>">
						</div>
						<div class="form-group col-sm-6">
							<label for="add_city">Ville:</label>
							<input type="text" class="form-control" required="required" id="add_city" name="add_city" value="<?= $read_add["add_city"] ?>">
						</div>
						<div class="form-group col-sm-6">
							<label for="add_zipcode">Code Postal:</label>
							<input type="text" class="form-control" required="required" id="add_zipcode" name="add_zipcode" value="<?= $read_add["add_zipcode"] ?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 p-0">
						<button type="reset" class="modal-btn btn btn-dark btn-block btn-lg"><span>réinitialiser</span></button>
					</div>
					<div class="col-sm-6 p-0">
						<button type="submit" class="modal-btn btn btn-outline-primary btn-block btn-lg"><span>VALIDER</span></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Modal / logout -->
<?php
if (isset($_SESSION["user"])){
?>
<div class="modal fade" id="logoutModal" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header modal-header-lg dark bg-dark">
				<?php
					if (isset($_SESSION["user"])) {
						if ($_SESSION["user"]["cus_civility"]==0) { 
				?>
				<div class="bg-image"><img src="assets/img/photos/bouche0.jpg" alt="bandeau"></div>
				<?php
					} else{
				?>
				<div class="bg-image"><img src="assets/img/photos/bouche1.jpg" alt="bandeau"></div>
				<?php
					}
				}
				?>				
				<h4 class="modal-title">Voulez-vous vous déconnecter <span class="text-capitalize font-weight-bold"><?= $_SESSION["user"]["cus_firstname"] ?></span>?</h4>
			</div>
				<div class="row">
					<div class="col-sm-6 p-0">
						<button class="modal-btn btn btn-dark btn-block btn-lg" data-dismiss="modal"><span>annuler</span></button>
					</div>
					<div class="col-sm-6 p-0">
						<a href="index.php?module=customer&action=logout" class="btn btn-primary btn-block btn-lg"><span>déconnexion</span></a>
					</div>
				</div>
		</div>
	</div>
</div>
<?php
}
?>

<!-- JS Plugins -->
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/tether/dist/js/tether.min.js"></script>
<script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
<script src="assets/plugins/jquery.scrollto/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/jquery.localscroll/jquery.localScroll.min.js"></script>
<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="assets/plugins/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.min.js"></script>
<script src="assets/plugins/twitter-fetcher/js/twitterFetcher_min.js"></script>
<script src="assets/plugins/skrollr/dist/skrollr.min.js"></script>
<script src="assets/plugins/animsition/dist/js/animsition.min.js"></script>

<!-- JS Core -->
<script src="assets/js/core.js"></script>
		<!-- JS Site -->
		<script src="assets/js/site.js"></script>


</body>

</html>