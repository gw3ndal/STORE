<?php
require_once "uniqueDatas.php";
require_once "database.php";
$pdo = dbConnect();

// PRODUCTS:
// foreach ($datas as $data) {
//     $sql = "INSERT INTO st_products (pro_title, pro_subtitle1,pro_subtitle2,pro_subtitle3, pro_img_url_recto, pro_img_url_verso, pro_descr, pro_price_euro) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
//     $pdo->prepare($sql)->execute([$data['title'], $data['subtitle_1'], $data['subtitle_2'], $data['subtitle_3'], $data['image_recto'], $data['image_verso'], $data['description'], $data['price_euro']]);
// }
// ==============================================================================================
// CATEGORIES:
// $sql = "INSERT INTO st_categories (cat_descr)
//         VALUES
//         ('LABELS ET DIÈTES'),
//         ('LIEU DE PRODUCTION'),
//         ('ORIGINE DES FÈVES'),
//         ('TYPE DE CHOCOLAT'),
//         ('ARTISANAL'),
//         ('BEAN TO BAR'),
//         ('BIO'),
//         ('CRU / NON-CONCHÉ'),
//         ('ÉQUITABLE'),
//         ('EXCLUSIF'),
//         ('SANS SUCRE'),
//         ('VEGAN'),
//         ('ALLEMAGNE'),
//         ('BELGIQUE'),
//         ('CANADA'),
//         ('ESPAGNE'),
//         ('FINLANDE'),
//         ('FRANCE'),
//         ('ISLANDE'),
//         ('SUISSE'),
//         ('USA'),
//         ('BELIZE'),
//         ('BRÉSIL'),
//         ('CAMEROUN'),
//         ('COLOMBIE'),
//         ('CONGO'),
//         ('COSTA RICA'),
//         ('CUBA'),
//         ('ÉQUATEUR'),
//         ('HONDURAS'),
//         ('INDE'),
//         ('JAMAÏQUE'),
//         ('MADAGASCAR'),
//         ('MEXIQUE'),
//         ('NICARAGUA'),
//         ('PAPOUASIE-NOUVELLE-GUINÉE'),
//         ('PÉROU'),
//         ('RÉPUBLIQUE DOMINICAINE'),
//         ('TANZANIE'),
//         ('VENEZUELA'),
//         ('VIETNAM'),
//         ('AU LAIT'),
//         ('BLANC'),
//         ('BLOND'),
//         ('NOIR'),
//         ('NOIR D’ORIGINE'),
//         ('NOIR GRAND CRU '),
//         ('RUBIS'),
//         ('A. MORIN'),
//         ('ARETÉ'),
//         ('BELYZIUM'),
//         ('CACAO SAMPAKA'),
//         ('ERITHAJ'),
//         ('GARÇOA'),
//         ('GOODIO'),
//         ('IDILIO ORIGINS'),
//         ('LA FLOR'),
//         ('MILLÉSIME'),
//         ('OMNOM'),
//         ('ORFÈVE'),
//         ('QANTU')";
// $pdo->prepare($sql)->execute();