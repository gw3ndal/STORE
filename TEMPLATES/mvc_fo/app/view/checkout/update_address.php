<!-- HEADER -->
<?php include("layout/header.inc.php");?>
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
			</div>
		</div>

		<!-- Section -->
		<section class="section bg-light">

			<div class="container">
				<div class="row">
					<div class="col-xl-4 push-xl-8 col-lg-5 push-lg-7">
						<div class="shadow bg-white stick-to-content mb-4">
							<div class="bg-dark dark p-4"><h5 class="mb-0">Mon panier</h5></div>
							<table class="table-cart">
								<tr>
									<td class="title">
										<span class="name"><a href="#productModal" data-toggle="modal">CAMEROUN 2017</a></span>
										<span class="caption text-muted">chocolat noir grand cru | Cameroun</span>
									</td>
									<td class="price">8.00€</td>
									<td class="actions">
										<a href="#productModal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
										<a href="#" class="action-icon"><i class="ti ti-close"></i></a>
									</td>
								</tr>
							</table>
							<div class="cart-summary">
								<div class="row">
									<div class="col-7 text-right text-muted">Prix:</div>
									<div class="col-5"><strong>8.00€</strong></div>
								</div>
								<div class="row">
									<div class="col-7 text-right text-muted">Livraison:</div>
									<div class="col-5"><strong>4.00€</strong></div>
								</div>
								<hr class="hr-sm">
								<div class="row text-md">
									<div class="col-7 text-right text-muted">Total:</div>
									<div class="col-5"><strong>12.00€</strong></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-8 pull-xl-4 col-lg-7 pull-lg-5">			
						<!-- FORM ORDER -->
						<form action="" method="post">
							<div class="bg-white p-4 p-md-5 mb-4">
								<h4 class="border-bottom pb-4"><i class="ti ti-user mr-3 text-primary"></i>Adresse de livraison</h4>
								<div class="row mb-5">
									<div class="form-group col-sm-6">
										<label for="cus_lastname">Nom:</label>
										<input type="text" class="form-control" required="required" id="cus_lastname" name="cus_lastname" value="">
									</div>
									<div class="form-group col-sm-6">
										<label for="cus_firstname">Prénom:</label>
										<input type="text" class="form-control" required="required" id="cus_firstname" name="cus_firstname" value="">
									</div>
									<div class="form-group col-sm-12">
										<label for="add_address1">Adresse:</label>
										<input type="text" class="form-control" required="required" id="add_address1" name="add_address1" value="">
									</div>
									<div class="form-group col-sm-12">
										<label for="add_address2">Complément d'adresse:</label>
										<input type="text" class="form-control" placeholder="*Optionnel" id="add_address2" name="add_address2" value="">
									</div>
									<div class="form-group col-sm-6">
										<label for="add_city">Ville:</label>
										<input type="text" class="form-control" required="required" id="add_city" name="add_city" value="">
									</div>
									<div class="form-group col-sm-6">
										<label for="add_zipcode">Code Postal:</label>
										<input type="text" class="form-control" required="required" id="add_zipcode" name="add_zipcode" value="">
									</div>
									<div class="form-group col-sm-6">
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
										<p class="caption text-muted">livré sous 2 mois</p>
									</div>
									<div class="col-md-4 col-sm-6 form-group">
										<label class="custom-control custom-radio">
											<input type="radio" name="logistic_type" class="custom-control-input">
											<span class="custom-control-indicator"></span>
											<span class="custom-control-description">Collisimo</span>
											<span class="caption text-muted">&nbsp;(3.00€)</span>				
										</label>
										<p class="caption text-muted">livré sous  jours</p>
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
											<span class="custom-control-description">Carte de crédit</span>
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
								<a href="confirmation.php"><button type="submit" class="btn btn-primary btn-lg"><span>Valider</span></button></a>
							</div>
						</form>
					</div>
				</div>
			</div>

		</section>
<!-- FOOTER -->
<?php include("layout/footer.inc.php");?>

