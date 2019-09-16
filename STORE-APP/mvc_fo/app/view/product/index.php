<!-- HEADER -->
<?php include("../app/view/layout/header.inc.php");?>
   <!-- Content -->
	<div id="content">

		<!-- Page Title -->
		<div class="page-title bg-dark dark">
			<!-- CATALOGUE IMAGE -->
			<div class="bg-image bg-parallax"><img src="<?= $catalogue["cat_main_img"]?>" alt="catalogue"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 push-lg-4">
						<h1 class="mb-0"><?= $catalogue["cat_main_descr"]?></h1>
						<h4 class="text-muted mb-0"></h4>
					</div>
				</div>
			</div>
		</div>

		<!-- Page Content -->
		<div class="page-content">
			<?php
			$i=0;
			foreach ($catal as $cat) {
			?>
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-10 push-md-1" role="tablist">
						<!-- Menu Category -->
						<div id="Burgers" class="menu-category">
							<div class="menu-category-title collapse-toggle" role="tab" data-target="#menuBurgersContent<?=$i?>" data-toggle="collapse" aria-expanded="true">
								<div class="bg-image"><img src="<?= $catal[$i]['cat_img_url']?>"></div>
								<h2 class="title"><?= $catal[$i]['cat_descr']?></h2>
							</div>
						
							<div id="menuBurgersContent<?=$i?>" class="menu-category-content padded collapse">
								<div class="row gutters-sm">
									<?php
										$data_pro=display_produit($catal[$i]['cat_id']);
									foreach($data_pro as $data){
										if(($data['pro_id'])!=null){
									?>		
									<div class="col-lg-4 col-6">
										<!-- Menu Item -->
										<div class="menu-item menu-grid-item">
											<a href="index.php?module=product&action=tablette&id=<?=$data['pro_id']?>">
												<img class="mb-4" src="<?= $data["pro_img_url_recto"]?>" alt="tablette">
											</a>
											<h6 class="mb-0"><?= $data["pro_title"]?></h6>
											<span class="text-muted text-sm"><?= $data["pro_subtitle1"]?></span>
											<div class="row align-items-center mt-4">
												<div class="col-sm-6">
													<span class="text-md mr-4"><?= $data["pro_price_euro"]?> <span class="text-muted">EURO</span></span>
												</div>
												<div class="col-sm-6 text-sm-right mt-2 mt-sm-0">
													<button data-target="#productModal" data-product="<?= $data['pro_id']?>" data-price="<?= $data['pro_price_euro']?>"  data-qte="<?php if(!empty($caddie)){ echo $caddie[0]['cad_qt'];}?>" data-sub="<?= $data['pro_subtitle1']?>" data-name="<?= $data['pro_title']?>" data-descr="<?= $data['pro_descr']?>" data-toggle="modal" class="btn btn-outline-secondary btn-sm">
														Ajout au panier
													</button>
												</div>
											</div>
										</div>
									</div>
									<?php
									}}
									?>
								</div>
								<?php
									if(count($data_pro)>=6){
								?>
								<div class="col-sm-12 text-sm-right mt-2 mt-sm-0">
									<a href="index.php?module=product&action=categorie&id=<?= $catal[$i]['cat_id']?>"><button class="btn btn-outline-secondary btn-sm"><span>VOIR TOUT</span></button></a>
								</div>
								<?php
									}
								?>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php $i++; } ?>
		</div>
<!-- FOOTER -->
<?php include("../app/view/layout/footer.inc.php");?>