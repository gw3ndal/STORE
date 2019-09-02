<!DOCTYPE html>
<html lang="<?= APP_LANG ?>">

<head>

	<meta charset="<?= APP_CHARSET ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?=PAGE_TITLE?></title>
	<meta name="description" content="<?= (defined('PAGE_DESCR'))?PAGE_DESCR : PAGE_DESCR_DEFAUT ?>">

	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
	<!-- Custom fonts for this template-->
	<link rel="stylesheet" href="assets/css/themify-icons.css" />
	<link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template-->
	<link href="assets/css/sb-admin.css" rel="stylesheet">
	<!-- CSS PERSO-->
	<link href="assets/css/mystyle.css" rel="stylesheet">

</head>

<body class="bg-dark">

	<div class="container">
		<?php
			if (isset($_GET["notif"])){
				if($_GET["notif"] =="nok"){
		?>			
		<div class="row alert alert-danger text-center" style="opacity:0.8;" role="alert">
			<div class="col-1 p-0">
				<i class="ti ti-alert"></i>
			</div>
			<div class="col-9">
			 <label>Connexion impossible!<br>
			 Merci de vérifier vos identifiants.</label>
			</div>
			<div class="col-1 p-0">
				<i class="ti ti-alert"></i>
			</div>
		</div>
		<?php
				}  
			}
		?>
		<div class="card card-login mx-auto mt-5">
			<div class="card-header">Merci de vous identifier</div>
			<div class="card-body">
				<form action="index.php?module=customer&action=login" method="post">
					<div class="form-group">
						<div class="form-label-group">
							<input type="email" name="cus_mail" id="cus_mail" class="form-control" placeholder="Email" required autofocus="autofocus">
							<label for="cus_mail">E-mail</label>
						</div>
					</div>
					<div class="form-group">
						<div class="form-label-group">
							<input type="password" name="cus_password" id="cus_password" class="form-control" placeholder="Mot de Passe" required>
							<label for="cus_password">Mot de passe</label>
						</div>
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label>
								<input type="checkbox" value="remember-me" name="remember">
								Se souvenir de moi
							</label>
						</div>
					<a class="d-block small accueil" href="index.php">Revenir à la page d'accueil en tant que visiteur</a>
					</div>
					<div class="text-center"><input type="submit" name="" class="btn btn-dark" value="SE CONNECTER"></div>
					<!-- <a class="btn btn-primary btn-block" href="_index.php">Login</a> -->
				</form>
				<div class="text-center">
					<a  class="btn border-dark btn-block mt-3 font-weight-bold" href="index.php?module=customer&action=register">Créer un compte</a>
					<!-- <a class="d-block small" href="forgot-password.php">Mot de passe oublié?</a> -->
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
