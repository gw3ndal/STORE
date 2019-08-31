<?php include '../layout/menu.inc.php';?>

<!-- ############ LAYOUT START-->
<!-- content -->
<div id="content" class="app-content box-shadow-z0" role="main">


    <div ui-view class="app-body" id="view">

        <!-- ############ PAGE START-->
        <div class="padding">
            <div class="row d-flex justify-content-center ">
                <div class="col-sm-12 col-md-8">
                    <a class="md-btn md-flat m-b-sm px-3" href="<?=root('view/customers/show_customers.php')?>">
                        <i class="fa fa-chevron-left mr-2"></i>
                        Voir les Comptes
                    </a>
                    <form ui-jp="parsley">
                        <div class="box padding">
                            <div class="box-header mb-3">
                                <h2>Créer un compte Client</h2>
                            </div>
                            <div class="box-divider m-0"></div>
                            <div class="box-body">
                                <p class="text-muted">Veuillez remplir tous les champs</p>

                                <div class="form-group row align-items-baseline">
                                    <label class="col-sm-2 form-control-label">Sexe</label>
                                    <p class="">
                                        <label class="md-check ml-2">
                                            <input type="radio" name="b" checked class="has-value" value="Féminin">
                                            <i class="pink no-icon"></i>
                                            Féminin
                                        </label>
                                    </p>
                                    <p class="ml-4">
                                        <label class="md-check">
                                            <input type="radio" name="b" class="has-value" value="Masculin">
                                            <i class="blue no-icon"></i>
                                            Masculin
                                        </label>
                                    </p>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Nom</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Entrez un nom" data-parsley-range="[1, 45]" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Prénom</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Entrez un prénom" data-parsley-range="[1, 45]" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" required="" placeholder="Entrez une adresse email" data-parsley-id="56" data-parsley-range="[4, 80]">
                                    </div>
                                </div>


                                <div class="row m-b justify-content-end">
                                    <div class="col-sm-5">
                                        <label>Mot de passe</label>
                                        <input type="password" class="form-control" required="" placeholder="Entrez un mot de passe" id="pwd" data-parsley-id="8" data-parsley-range="[4, 32]" />
                                    </div>
                                    <div class=" col-sm-5">
                                        <label>Confirmer</label>
                                        <input type="password" class="form-control" data-parsley-equalto="#pwd" required="" placeholder="Confirmez le mot de passe" data-parsley-id="10" data-parsley-range="[4, 32]" />
                                    </div>
                                </div>
                            </div>
                            <div class=" p-a text-right">
                                <button type="submit" class="btn text-dark warn pointer">Valider</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- ############ PAGE END-->
    </div>
</div>
<!-- / -->
<!-- ############ LAYOUT END-->

<?php include '../layout/footer.inc.php';?>
<?php $myScript = MY_SCRIPT?>
<?php include '../layout/scripts.inc.php';?>