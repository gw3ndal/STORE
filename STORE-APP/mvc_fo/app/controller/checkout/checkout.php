<?php

    include("../app/model/checkout/caddiecommande.php");
    include("../app/model/checkout/validecommande.php");
    include("../app/model/checkout/prodcommande.php");
    include("../app/model/checkout/suppanier.php");
    //  var_dump($_POST);
    
    if(isset($_POST)) {
        $valide=validecommande($_POST);
        $valide;
        $caddie=caddiecommande();
        prodcommande($valide,$caddie);
        
        suppanier($_SESSION['user']['cus_id']);
        include("../app/view/checkout/validecommande.php");
    } else {
        header("Location:?error=notadd");
    }
