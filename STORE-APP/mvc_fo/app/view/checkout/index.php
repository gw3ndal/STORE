
	<!-- Content -->
	<div id="content">

		<!-- Page Title -->
		<div class="page-title bg-dark dark">
			<!-- BG Image -->
			<div class="bg-image bg-parallax"><img src="assets/img/photos/bg-croissant2.jpg" alt="bandeau"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 push-lg-4">
						<h1 class="mb-0">Ma commande</h1>
						<h4 class="text-muted mb-0">Par ici la moulaga</h4>
					</div>
				</div>
				<?php
					if (isset($_GET["notif"])){
						if($_GET["notif"] =="nok"){
				?>        
				<div class="row alert alert-danger text-center" style="opacity:0.8;" role="alert">
					<div class="col-1 p-0">
						<i class="ti ti-alert"></i>
					</div>
					<div class="col-9">
					 <label>Oups! Pas de bras pas de chocolat. Merci de retenter votre affaire </label>
					</div>
					<div class="col-1 p-0">
						<i class="ti ti-alert"></i>
					</div>
				</div>
				<?php
						}
						if($_GET["notif"] =="ok"){
				?>
				<div class="row alert alert-success text-center" style="opacity:0.8;" role="alert">
					<div class="col-1 p-0">
						<i class="ti ti-truck"></i>
					</div>
					<div class="col-9">
					 <label>Votre adresse de livraison a bien été modifiée </label>
					</div>
					<div class="col-1 p-0">
						<i class="ti ti-truck"></i>
					</div>
				</div>
				<?php
						}  
					}
				?>
			</div>
		</div>

		<!-- Section -->
		<section class="section bg-light">

			<div class="container">
				<div class="row">
					<div class="col-xl-4 push-xl-8 col-lg-5 push-lg-7">
						
						<div class="bg-dark dark p-4"><h5 class="mb-0">Mon panier</h5></div>
						<table class="table-cart">
							<div class="shadow bg-white stick-to-content mb-4">
							<?php
								if (count($caddie)==0) {?>
									
									<tr><td>Votre panier est vide </td></tr>
								
							<?php
        } else {
	    	foreach ($caddie as $products) {
	       ?>
			
	
	   							<tr>
									<td class="title">
										<span class="name"><a href="#productModal" data-product="<?= $products['pro_id']?>" data-price="<?= $products['pro_price_euro']?>" data-qte="<?= $products['cad_qt']?>" data-sub="<?= $products['pro_subtitle1']?>"data-name="<?= $products['pro_title']?>" data-name="<?= $products['pro_descr']?>" data-toggle="modal"><?= $products['cad_qt']?> x <?= $products['pro_title']?></a></span>
										<span class="caption text-muted"><?= $products['pro_subtitle1']?></span>
									</td>
									<td class="price"><?= $products['price']?>€</td>
									<td class="actions">
									<a href="#productModal" data-product="<?= $products['pro_id']?>" data-price="<?= $products['pro_price_euro']?>" data-qte="<?= $products['cad_qt']?>" data-sub="<?= $products['pro_subtitle1']?>"data-name="<?= $products['pro_title']?>" data-name="<?= $products['pro_descr']?>" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
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
									<div class="col-5"><strong>4.00€</strong></div>
								</div>
								<hr class="hr-sm">
								<div class="row text-md">
									<div class="col-7 text-right text-muted">Total:</div>
									<div class="col-5"><strong><?= $total['total']+4;?></strong></div>
									<div><a href="?deletepanier=true">sup le panier</a><div>

								</div>
							</div>
						</div>
		
					</div>
					<div class="col-xl-8 pull-xl-4 col-lg-7 pull-lg-5">			
						<div class="bg-white p-4 p-md-5 mb-4">
							<h4 class="border-bottom pb-4"><i class="ti ti-user mr-3 text-primary"></i>Adresse de livraison</h4>
							<div class="row mb-4">
								<div class="form-group col-sm-6">
									<h5 class="text-muted mb-2">Nom:</h5>
									<h6 class="mb-2 text-uppercase"><?= $_SESSION["user"]["cus_lastname"] ?></h6>
								</div>
								<div class="form-group col-sm-6">
									<h5 class="text-muted mb-2">Prénom:</h5>
									<h6 class="mb-2 text-uppercase"><?= $_SESSION["user"]["cus_firstname"] ?></h6>
								</div>
								<div class="form-group col-sm-12">
									<h5 class="text-muted mb-2 text-capitalize">Adresse:</h5>
									<h6 class="mb-2 text-capitalize"><?= $read_add["add_address1"] ?></h6>
									<p class="mb-2 text-capitalize"><?= $read_add["add_address2"] ?></p>
								</div>
								<div class="form-group col-sm-6">
									<h5 class="text-muted mb-2">Ville:</h5>
									<h6 class="mb-3 text-capitalize"><?= $read_add["add_city"] ?></h6>
								</div>
								<div class="form-group col-sm-6">
									<h5 class="text-muted mb-3">Code Postal:</h5>
									<h6 class="mb-3"><?= $read_add["add_zipcode"] ?></h6>
								</div>
									<div class="col-sm-6">
									</div>
									<div class="col-sm-6">
										<button class="btn btn-outline-danger btn-lg btn-block"  data-target="#editModal" data-toggle="modal"><span>modifier l'adresse</span></button>
									</div>
							</div>
							<h4 class="border-bottom pb-4"><i class="ti ti-package mr-3 text-primary"></i>Type de livraison</h4>
							<div class="row text-lg">
								<div class="col-md-4 col-sm-6 form-group">
									<label class="custom-control custom-radio">
										<input type="radio" name="logistic_type" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">MuleXpress</span>
										<span class="caption text-muted">&nbsp;(gratuit)</span>
									</label>
									<p class="caption text-muted">livré sous 2 à 6 mois</p>
								</div>
								<div class="col-md-4 col-sm-6 form-group">
									<label class="custom-control custom-radio">
										<input type="radio" name="logistic_type" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Collisimo</span>
										<span class="caption text-muted">&nbsp;(3.00€)</span>				
									</label>
									<p class="caption text-muted">livré sous 10 jours</p>
								</div>
								<div class="col-md-4 col-sm-6 form-group">
									<label class="custom-control custom-radio">
										<input type="radio" name="logistic_type" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Chronopost</span>
										<span class="caption text-muted">&nbsp;(5.00€)</span>
									</label>
									<p class="caption text-muted">livré sous 2 jours</p>
								</div>
							</div>

							<h4 class="border-bottom pb-4"><i class="ti ti-wallet mr-3 text-primary"></i>Mode de Paiement</h4>
							<div class="row text-lg">
								<div class="col-md-4 col-sm-6 form-group">
									<label class="custom-control custom-radio">
										<input type="radio" name="payment_type" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">PayPal</span>
									</label>
								</div>
								<div class="col-md-4 col-sm-6 form-group">
									<label class="custom-control custom-radio">
										<input type="radio" name="payment_type" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Carte bancaire</span>
									</label>
								</div>
								<div class="col-md-4 col-sm-6 form-group">
									<label class="custom-control custom-radio">
										<input type="radio" name="payment_type" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Monero</span>
									</label>
								</div>
							</div>
						</div>
						<div class="text-center">
							<a href="checkout_confirmation.php"><button type="submit" class="btn btn-primary btn-lg"><span>Valider</span></button></a>
						</div>
					</form>
					</div>
				</div>
			</div>

		</section>
<!-- FOOTER -->
<?php include("../app/view/layout/footer.inc.php");?>

