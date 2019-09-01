<?php include '../layout/header.inc.php'?>

<!-- ############ LAYOUT START-->
<div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
        <div class="pull-center">
            <div ui-include="'../views/blocks/navbar.brand.html'"></div>
        </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
        <div class="m-b text-sm">
            Connexion
        </div>
        <form name="form">
            <div class="md-form-group float-label">
                <input type="email" class="md-input" ng-model="user.email" required>
                <label>E-mail</label>
            </div>
            <div class="md-form-group float-label">
                <input type="password" class="md-input" ng-model="user.password" required>
                <label>Mot de passe</label>
            </div>
            <div class="m-b-md">
                <label class="md-check">
                    <input type="checkbox"><i class="primary"></i> Garder ma connexion
                </label>
            </div>
            <button type="submit" class="btn primary btn-block p-x-md">S'identifier</button>
        </form>
    </div>

    <div class="p-v-lg text-center">
        <div class="m-b"><a ui-sref="access.forgot-password" href="<?=root('view/logins/forgotPassword.php')?>" class="text-primary _600">Mot de passe oublié?</a></div>
        <div>Vous n'avez pas de compte?<a ui-sref="access.signup" href="<?=root('view/logins/signup.php')?>" class="text-primary _600"> S'inscrire</a></div>
    </div>
</div>
<!-- ############ LAYOUT END-->

<?php include '../layout/scripts.inc.php';?>