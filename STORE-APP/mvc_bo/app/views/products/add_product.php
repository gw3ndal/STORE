<?php include APP_PATH . '/views/layout/menu.inc.php';?>
<!-- ############ LAYOUT START-->
<!-- content -->
<div id="content" class="app-content box-shadow-z0" role="main">

    <div ui-view class="app-body" id="view">

        <!-- ############ PAGE START-->
        <div class="padding">
            <div class="row d-flex justify-content-center ">
                <div class="col-sm-12 col-md-8">
                    <a class="md-btn md-flat m-b-sm px-3" href="<?=WWW_PUBLIC . '/products/show'?>">
                        <i class="fa fa-chevron-left mr-2"></i>
                        Voir les Produits
                    </a>
                    <form ui-jp="parsley">
                        <div class="box padding">
                            <div class="box-header mb-3">
                                <h2>Ajout d'un Produit</h2>
                            </div>
                            <div class="box-divider m-0"></div>
                            <div class="box-body">
                                <p class="text-muted">Veuillez remplir les champs</p>

                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Titre</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Le titre du produit" data-parsley-range="[4, 200]" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Sous Titre 1</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Le 1er sous-titre du produit" data-parsley-range="[4, 255]">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Sous Titre 2</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Le 2ème sous-titre du produit" data-parsley-range="[4, 255]">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Sous Titre 3</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Le 3ème sous-titre du produit" data-parsley-range="[4, 255]">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">IMAGE RECTO</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" placeholder="L'URL de l'image Recto" data-parsley-id="54" data-parsley-range="[4, 255]" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">IMAGE VERSO</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" placeholder="L'URL de l'image Verso" data-parsley-id="54" data-parsley-range="[4, 255]" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="6" data-minwords="6" required="" placeholder="Saisissez la description du produit" data-parsley-range="[30, 5000]" data-parsley-id="25"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 form-control-label">Prix</label>
                                    <div class="col-sm-10">
                                        <input type="text" data-parsley-type="number" class="form-control has-value " placeholder="Le prix du produit en euro" data-parsley-id="60" required>
                                    </div>
                                </div>

                                <div class=" p-a text-right">
                                    <button type="submit" class="btn text-dark warn pointer">Ajouter</button>
                                </div>
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

<?php include APP_PATH . '/views/layout/footer.inc.php';?>
<?php include APP_PATH . '/views/layout/scripts.inc.php';?>