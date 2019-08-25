<?php include 'layout/header.inc.php';?>

<!-- ############ LAYOUT START-->
<div class="col-lg-8 mx-auto p">

    <div class="d-flex justify-content-end mb-2">
        <a href="" class="btn btn-md black">
            <span class="pull-left m-r-sm">
                <i class="fa fa-plus "></i>
            </span>
            <span class="clear text-left l-h-1x">
                <b class="text-sm m-b-xs">Ajouter un Produit</b>
            </span>
        </a>
    </div>

    <div class="box">
        <div class="box-header">
            <h3 class=" d-flex align-items-center">
                <span class="text-u-c">Le Catalogue</span>
                <span class="label rounded ml-2 success totalNumber"></span>
            </h3>
            <small>Tous nos produits</small>
        </div>
        <div class="box-divider m-0"></div>
        <ul class="list inset totalElements">
            <!-- START FOREACH LOOP -->
            <li class="list-item">
                <a herf="" class="list-left">
                    <span class="w-40 r-2x _600 text-lg accent text-u-c firstLetter"></span>
                </a>
                <div class="list-body">
                    <div class="m-y-sm pull-right">
                        <a href="" class="btn btn-sm  white b-info">
                            <i class="fa fa-eye"></i>
                        </a>
                        <a href="" class="btn btn-sm  white b-danger">
                            <i class="fa fa-trash"></i>
                        </a>
                        <a href="" class="btn btn-sm white b-success">
                            <i class="fa fa-pencil "></i>
                        </a>
                    </div>
                    <div><a class="firstTitle" href="">PEROU 2018 LACTE CARAMEL BEURRE SALE</a></div>
                    <div class="text-sm">
                        <span class="text-muted">Chocolat noir au lait grand cru avec caramel |
                            Pérou</span>
                        <span class="label brown-300">B</span>
                        <span class="label red-300">N</span>
                    </div>
                </div>
            </li>
            <!-- END FOREACH LOOP -->

            <!-- STAR REMOVE -->

            <!-- END REMOVE -->

        </ul>
    </div>
</div>
<!-- ############ LAYOUT END-->

<?php include 'layout/footer.inc.php';?>