<!-- HEADER -->
<?php include("../app/view/layout/header.inc.php");?>
    <!-- Content -->
    <div id="content">

        <!-- Section -->
        <section id="gallery" class="section section-gallery cover">
        
            <!-- Gallery Carousel -->
            <div class="gallery-carousel inner-controls">
                <div class="slide"><div id="recto" class="bg-image bg-parallax"><img src="<?= $pics["pro_img_url_recto"]?>" alt="recto"></div></div>
                <div class="slide"><div id="verso" class="bg-image bg-parallax"><img src="<?= $pics["pro_img_url_verso"]?>" alt="verso"></div></div>
            </div>

            <!-- Gallery Carousel Nav -->
            <div class="gallery-nav">
            </div>

            <div class="set-fullscreen">
                <a href="index.php?module=product&action=tablette&id=<?=$pics['pro_id']?>"><i class="ti ti-layout-grid3-alt"></i></a>
            </div>

        </section>
<!-- FOOTER -->
<?php include("../app/view/layout/footer.inc.php");?>

 