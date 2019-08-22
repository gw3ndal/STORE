<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
        Flatkit - HTML Version | Bootstrap 4 Web App Kit with AngularJS
    </title>
    <meta name="description"
        content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent" />
    <link rel="apple-touch-icon" href="../vendor/assets/images/logo.png" />
    <meta name="apple-mobile-web-app-title" content="Flatkit" />
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes" />
    <link rel="shortcut icon" sizes="196x196" href="../vendor/assets/images/logo.png" />

    <!-- style -->
    <link rel="stylesheet" href="../vendor/assets/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="../vendor/assets/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="../vendor/assets/font-awesome/css/font-awesome.min.css"
        type="text/css" />
    <link rel="stylesheet" href="../vendor/assets/material-design-icons/material-design-icons.css"
        type="text/css" />

    <link rel="stylesheet" href="../vendor/assets/bootstrap/dist/css/bootstrap.min.css"
        type="text/css" />
    <!-- build:css ../vendor/assets/styles/app.min.css -->
    <link rel="stylesheet" href="../vendor/assets/styles/app.css" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="../vendor/assets/styles/font.css" type="text/css" />
</head>

<body class="hg">
    <div class="app hg__main" id="app">
        <!-- START MENU -->
        <div class="app-header white box-shadow">
            <div class="navbar navbar-toggleable-sm flex-row align-items-center box-shadow">
                <a data-toggle="collapse" data-target="#navbar-5"
                    class="navbar-item hidden-md-up mr-3">
                    <i class="material-icons">menu</i>
                </a>
                <!-- brand -->
                <a class="navbar-brand">
                    <img src="../vendor/assets/images/logo.png" alt="profile image">
                    <span class="hidden-folded inline">ADMIN</span>
                </a>
                <!-- / brand -->

                <!-- navbar collapse -->
                <div class="collapse navbar-collapse justify-content-center" id="navbar-5">
                    <!-- link and dropdown -->
                    <ul
                        class="nav navbar-nav navbar-nav-inline text-center pull-left m-r text-warn-hover">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="">
                                <span class="nav-text">
                                    <i class="material-icons">shopping_basket</i>
                                    <span class="text-xs">Produits</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link"
                                href="http://localhost/app/STORE/STORE-APP/mvc_bo/view/show_categories.php">
                                <span class="nav-text">
                                    <i class="material-icons">local_play</i>
                                    <span class="text-xs">Catégories</span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="">
                                <span class="nav-text">
                                    <i class="material-icons">person_pin</i>
                                    <span class="text-xs">Utilisateurs</span>
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
                                <img src="../vendor/assets/images/a3.jpg" alt="...">
                                <i class="on b-white bottom"></i>
                            </span>
                            <span class="hidden-md-down nav-text m-l-sm text-left">
                                <span class="_500">Rose Martin</span>
                                <small class="text-muted">Administrator</small>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-overlay pull-right">

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