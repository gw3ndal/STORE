<!-- HEADER -->
<?php include("../app/view/layout/header.inc.php");?>
	<!-- Content -->
	<div id="content">

		<!-- Page Title -->
		<div class="page-title bg-dark dark">
			<!-- BG Image -->
			<div class="bg-image bg-parallax"><img src="assets/img/photos/bg-croissant1.jpg" alt="bandeau"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 push-lg-4">
						<h1 class="mb-3">Mon inscription</h1>
						<h4 class=" mb-0 text-center">Je suis nouveau client, je crée mon compte</h4>
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
					}
				?>
			</div>
		</div>

		<!-- Section -->
		<section class="section bg-light">

			<div class="container">
				<div class="row">			
					<!-- FORM REGISTER -->
					<form action="index.php?module=customer&action=register" method="post">
						<div class="bg-white p-4 p-md-5 mb-4">
							<h4 class="border-bottom pb-4"><i class="ti-desktop mr-3 text-primary"></i>Vos identifiants</h4>
							<div class="row text-lg">
								<div class="form-group col-sm-6">
									<label for="cus_mail">Adresse électronique:</label>
									<input type="email" class="form-control"  placeholder="*champ obligatoire" required="required" id="cus_mail" name="cus_mail">
								</div>
								<div class="form-group col-sm-6">
									<label for="cus_password">Créer votre mot de passe:</label>
									<input type="password" class="form-control"  placeholder="*champ obligatoire" required="required" id="cus_password" name="cus_password">
								</div>
							</div>
						</div>
						<div class="bg-white p-4 p-md-5 mb-4">
							<h4 class="border-bottom pb-4"><i class="ti ti-user mr-3 text-primary"></i>Informations personnelles</h4>
							<div class="row mb-5">
								<div class="col-md-4 col-sm-6 form-group">
									<label class="custom-control custom-radio">
										<input type="radio" name="cus_civility" class="custom-control-input" value="0" checked>
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Femme</span>
									</label>
								</div>
								<div class="col-md-4 col-sm-6 form-group">
									<label class="custom-control custom-radio">
										<input type="radio" name="cus_civility" class="custom-control-input" value="1">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Homme</span>				
									</label>
								</div>
								<div class="form-group col-sm-6">
									<label for="cus_lastname">Nom:</label>
									<input type="text" class="form-control"  placeholder="*champ obligatoire" required="required" id="cus_lastname" name="cus_lastname">
								</div>
								<div class="form-group col-sm-6">
									<label for="cus_firstname">Prénom:</label>
									<input type="text" class="form-control"  placeholder="*champ obligatoire" required="required" id="cus_firstname" name="cus_firstname">
								</div>
								<div class="form-group col-sm-12">
									<label for="add_address1">Adresse :</label>
									<input type="text" class="form-control"  placeholder="*champ obligatoire" required="required" id="add_address1" name="add_address1">
								</div>
								<div class="form-group col-sm-12">
									<label for="add_address2"><em>Complément d'adresse:</em></label>
									<input type="text" class="form-control" placeholder="*Optionnel" id="add_address2" name="add_address2">
								</div>
								<div class="form-group col-sm-6">
									<label for="add_city">Ville:</label>
									<input type="text" class="form-control" placeholder="*champ obligatoire" required="required" id="add_city" name="add_city">
								</div>
								<div class="form-group col-sm-6">
									<label for="add_zipcode">Code Postal:</label>
									<input type="text" class="form-control" placeholder="*champ obligatoire" required="required" id="add_zipcode" name="add_zipcode">
								</div>
							</div>
						</div>
						<div class="text-center">
							<button type="reset" class="btn btn-secondary btn-lg"><span>effacer</span></button>
							<button type="submit" class="btn btn-primary btn-lg"><span>S'inscrire</span></button>
						</div>
					</form>			
					<!-- /FORM REGISTER -->
				</div>
			</div>

		</section>
<!-- FOOTER -->
<?php include("../app/view/layout/footer.inc.php");?>

