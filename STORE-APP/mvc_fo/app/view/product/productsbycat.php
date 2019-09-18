<!-- HEADER -->
<?php include("../app/view/layout/header.inc.php");?>
   <!-- Content -->
	<div id="content">

		<!-- Page Title -->
		<div class="page-title bg-dark dark">
			<!-- CATEGORIE IMAGE -->
			<div class="bg-image bg-parallax"><img src="<?=$procatal[0]["cat_img_url"]?>" alt="catalogue"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 push-lg-4">
						<h1 class="mb-0 text-warning">
							<?php
								if(!empty($procatal)){
									echo $procatal[0]['cat_descr'];
								}else {
										echo "Produit Divers";
								}
							?>
						</h1>
						<h4 class="text-muted mb-0"></h4>
					</div>
				</div>
			</div>
		</div>

		<!-- Page Content -->
		<div class="page-content">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-10 push-md-1" role="tablist">
						<!-- Menu Category -->
						<div id="Burgers" class="menu-category">
							<div id="menuBurgersContent" class="menu-category-content padded collapse show">
								<div class="row gutters-sm">
									<?php
										foreach ($procatal as $pro) {
									?>
									<div class="col-lg-4 col-6">
										<!-- Menu Item -->
										<div class="menu-item menu-grid-item">
											<a href="index.php?module=product&action=tablette&id=<?=$pro['pro_id']?>">
												<img class="mb-4" src="<?= $pro['pro_img_url_recto']?>" alt="tablette">
											</a>
											<h6 class="mb-0"><?= $pro['pro_title']?></h6>
											<span class="text-muted text-sm"><?= $pro['pro_subtitle1']?></span>
											<div class="row align-items-center mt-4">
												<div class="col-sm-6">
													<span class="text-md mr-4"><?= $pro['pro_price_euro']?>
													<span class="text-muted"> EURO</span></span>
												</div>
												<div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
													<button data-target="#productModal" data-product="<?= $pro['pro_id']?>" data-price="<?= $pro['pro_price_euro']?>"  data-qte="<?php if(!empty($caddie)){ echo $caddie[0]['cad_qt'];}?>" data-sub="<?= $pro['pro_subtitle1']?>" data-name="<?= $pro['pro_title']?>" data-descr="<?= $pro['pro_descr']?>" data-toggle="modal" class="btn btn-outline-secondary btn-sm">
														Ajout au panier
													</button>
												</div>
											</div>
										</div>
									</div>
									<?php
										}
									?>
								</div>
							</div>
						</div>
                        <!-- Pagination -->
                        <nav aria-label="Page navigation" class="mt-5">
                            <ul class="pagination justify-content-center">
								<?php
									if($page_demandee>1) {
								?>
									<li class="page-item">
										<a class="page-link" href="index.php?module=product&action=categorie&id=<?= $_GET["id"] ?>&page=<?= $page_demandee - 1 ?>" aria-label="Previous">
											<i class="ti-arrow-left"></i>
											<span class="sr-only">Précédent</span>
										</a>
									</li>
								<?php
									} 
								?>
								<?php
									for ($i=1; $i <=$pages ; $i++) {
								?>
								<?php
									if($i != $page_demandee) {
								?>
								<li class="page-item"><a class="page-link" href="index.php?module=product&action=categorie&id=<?= $_GET["id"] ?>&page=<?= $i ?>"><?= $i ?></a></li>
								<?php
									}else {
								?>
								<li class="page-item"><span class="page-link active"><?= $i ?></span></li>					   
								<?php
									} 
								?>
								<?php
								} 
								?>
								<?php
									if($page_demandee<$pages) {
								?>
									<li class="page-item">
										<a class="page-link" href="index.php?module=product&action=categorie&id=<?= $_GET["id"] ?>&page=<?= $page_demandee + 1 ?>" aria-label="Next">
											<i class="ti-arrow-right"></i>
											<span class="sr-only">Suivant</span>
										</a>
									</li>   
								<?php
									} 
								?>                             
                            </ul>
                        </nav>
					</div>
				</div>
			</div>
		</div>
<!-- FOOTER -->
<?php include("../app/view/layout/footer.inc.php");?>