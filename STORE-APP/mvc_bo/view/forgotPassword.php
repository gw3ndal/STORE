<?php include 'layout/header.inc.php'?>
<!-- ############ LAYOUT START-->
<div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
        <div class="pull-center">
            <div ui-include="'../views/blocks/navbar.brand.html'"></div>
        </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
        <div class="m-b">
            Mot de passe oublié ?
            <p class="text-xs m-t">Entrez votre adresse électronique ci-dessous et nous vous enverrons des instructions sur la façon de changer votre mot de passe.</p>
        </div>
        <form name="reset">
            <div class="md-form-group">
                <input type="email" class="md-input" required>
                <label>Votre adresse E-mail</label>
            </div>
            <button type="submit" class="btn primary btn-block p-x-md">Envoyer</button>
        </form>
    </div>
    <p id="alerts-container"></p>
    <div class="p-v-lg text-center">Retour à <a ui-sref="access.signin" href="<?=root('view/signin.php')?>" class="text-primary _600">S'identifier</a></div>
</div>
<!-- ############ LAYOUT END-->
<?php include 'layout/scripts.inc.php'?>