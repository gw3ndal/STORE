<!-- HEADER -->
<?php include("../app/view/layout/header.inc.php");?>
   <!-- Content -->
	<div id="content">

		<!-- Page Title -->
		<div class="page-title bg-dark dark">
			<!-- CATEGORIE IMAGE -->
			<div class="bg-image bg-parallax"><img src="assets/img/photos/var_lait.jpg" alt="catalogue"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 push-lg-4">
						<h1 class="mb-0">AU LAIT</h1>
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
									<div class="col-lg-4 col-6">
										<!-- Menu Item -->
										<div class="menu-item menu-grid-item">
											<a href="product.php"><img class="mb-4" src="https://www.chocolatsdumonde.ch/wp-content/uploads/Millesime_CamerounNoir_A.jpg" alt="tablette"></a>
											<h6 class="mb-0">CAMEROUN 2017</h6>
											<span class="text-muted text-sm">chocolat noir grand cru | Cameroun</span>
											<div class="row align-items-center mt-4">
												<div class="col-sm-6"><span class="text-md mr-4">8.00 <span class="text-muted">EURO</span></span></div>
												<div class="col-sm-6 text-sm-right mt-2 mt-sm-0"><button class="btn btn-outline-secondary btn-sm" data-target="#productModal" data-toggle="modal"><span>Ajout Panier</span></button></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <!-- Pagination -->
                        <nav aria-label="Page navigation" class="mt-5">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
                                	<a class="page-link" href="#" aria-label="Previous">
                                    	<i class="ti-arrow-left"></i>
                                    	<span class="sr-only">Previous</span>
                                  	</a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="ti-arrow-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
					</div>
				</div>
			</div>
		</div>
<!-- FOOTER -->
<?php include("../app/view/layout/footer.inc.php");?>