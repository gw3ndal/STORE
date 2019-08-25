<?php include 'header.inc.php'?>
<!-- START MENU -->
<div class="app-header white box-shadow">
    <div class="navbar navbar-toggleable-sm flex-row align-items-center box-shadow">
        <a data-toggle="collapse" data-target="#navbar-5" class="navbar-item hidden-md-up mr-3">
            <i class="material-icons">menu</i>
        </a>
        <!-- brand -->
        <a class="navbar-brand" href="<?=root('view/dashboard.php')?>">
            <img src="<?=root('public/assets/images/logo.png')?>" alt="profile image">
            <span class="hidden-folded inline">ADMIN</span>
        </a>
        <!-- / brand -->
        <!-- navbar collapse -->
        <div class="collapse navbar-collapse justify-content-center" id="navbar-5">
            <!-- link and dropdown -->
            <ul class="nav navbar-nav navbar-nav-inline text-center pull-left m-r text-warn-hover">
                <li class="nav-item mx-2">
                    <a class="nav-link btn menuChoco" href="<?=url_for('show_products.php');?>">
                        <span class="nav-text">
                            <i class="material-icons">shopping_basket</i>
                            <span class="text-xs">Produits</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link btn menuChoco" href="<?=url_for('show_categories.php');?>">
                        <span class="nav-text">
                            <i class="material-icons">local_play</i>
                            <span class="text-xs">Catégories</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link btn menuChoco" href="<?=url_for('show_customers.php');?>">
                        <span class="nav-text">
                            <i class="material-icons">person_pin</i>
                            <span class="text-xs">Clients</span>
                        </span>
                    </a>
                </li>
            </ul>
            <!-- / link and dropdown -->
        </div>
        <!-- / navbar collapse -->
        <!-- nabar right -->
        <ul class="nav navbar-nav flex-row align-items-center ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link text-ellipsis" href="" data-toggle="dropdown">
                    <span class="avatar w-32">
                        <img src="<?=root('public/assets/images/a3.jpg')?>" alt="...">
                        <i class="on b-white bottom"></i>
                    </span>
                    <span class="hidden-md-down nav-text m-l-sm text-left">
                        <span class="_500">Rose Martin</span>
                        <small class="text-muted">Administrator</small>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-scale pull-right">
                    <a class="dropdown-item" ui-sref="app.page.profile">
                        <span>Profile</span>
                    </a>
                    <a class="dropdown-item" ui-sref="app.page.setting">
                        <span>Settings</span>
                        <span class="label primary m-l-xs">3/9</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" ui-sref="access.signin">Sign out</a>
                </div>
            </li>
        </ul>
        <!-- / navbar right -->

    </div>
</div>
<!-- END MENU -->
<div style="padding-top:100px;">