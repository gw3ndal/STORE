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
            Créer votre compte
        </div>
        <form name="form">
            <div class="md-form-group">
                <input type="text" class="md-input" required>
                <label>Nom</label>
            </div>
            <div class="md-form-group">
                <input type="email" class="md-input" required>
                <label>E-mail</label>
            </div>
            <div class="md-form-group">
                <input type="password" class="md-input" required>
                <label>Mot de passe</label>
            </div>
            <div class="m-b-md">
                <label class="md-check">

                    <input type="checkbox" required><i class="primary"></i> Accepter les <a href="">termes et la politique</a>
                </label>
            </div>
            <button type="submit" class="btn primary btn-block p-x-md">S'inscrire</button>
        </form>
    </div>

    <div class="p-v-lg text-center">
        <div><a ui-sref="access.signin" href="<?=root('view/logins/signin.php')?>" class="text-primary _600">Se connecter à un compte existant</a></div>
    </div>
</div>

<!-- ############ LAYOUT END-->

</div>
<?php include '../layout/scripts.inc.php';?>