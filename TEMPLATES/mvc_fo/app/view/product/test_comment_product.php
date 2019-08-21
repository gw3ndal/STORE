<!-- HEADER -->
<?php include("../app/view/layout/header.inc.php");?>		<!-- Content -->
	<div id="content" class="bg-light">

		<!-- Post / Single -->
		<article class="post single">
			<div class="post-image bg-parallax"><img src="assets/img/posts/post01_lg.jpg" alt=""></div>
			<div class="container container-md">
				<div class="post-content">
					<ul class="post-meta">
						<li>24 July, 2016</li>
						<li>by Johnatan Doe</li>
					</ul>
					<h1 class="post-title">Delicious idea for your Sunday dessert</h1>
					<hr>
					<p class="lead">Integer commodo nisi nec hendrerit volutpat. Ut semper lacus felis, vitae malesuada orci dapibus at. Etiam bibendum sed quam vitae scelerisque. Mauris aliquet vulputate lorem ultrices porttitor. Vivamus lobortis nisl felis, laoreet tincidunt lectus bibendum id. </p>
					<p>Etiam et lobortis turpis, blandit vestibulum nisl. Sed vel enim sit amet lectus mollis feugiat eget et augue. Nunc eu felis dignissim, malesuada mi at, tempor ex. Quisque quis elit non sem vehicula dictum at sed turpis. In dignissim sodales leo nec pharetra. Fusce a lectus quis lorem condimentum consectetur ac at turpis. Nunc pulvinar non nisl tempor blandit.</p>
					<p>Cras non placerat mi. Sed condimentum tristique gravida. In egestas malesuada tempus. In quis orci eros. Sed risus ligula, scelerisque nec lacinia eu, rutrum a est. Cras sodales libero libero, sagittis tempor augue sollicitudin ut. In tortor nibh, aliquet sed rutrum sit amet, scelerisque sit amet odio. Nulla facilisi. Ut hendrerit justo eu eleifend volutpat.</p>
					<p>Proin eu faucibus ante. Nunc euismod purus vel neque porta egestas. Nunc pellentesque enim felis, at egestas libero semper quis. Nullam non tristique metus. Cras ipsum justo, dignissim eu euismod id, fermentum eu lectus. Praesent malesuada dolor eu magna posuere, non pharetra est semper. Curabitur interdum lacinia justo ac posuere. Phasellus auctor tempus est, a tempor odio dictum id. Nulla at ullamcorper est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur pulvinar tristique justo, sit amet rutrum lectus posuere et. Donec quis facilisis dolor, et molestie elit.</p>
					<hr>
					<div class="post-comments post-module">
						<h4><i class="ti ti-comments mr-3 text-primary"></i>Comments</h4>
						<div class="content">
							<ul class="comments">
								<li>
									<div class="avatar"><img src="assets/img/avatars/avatar01.jpg" alt=""></div>
									<div class="content">
										<span class="details">Jessica Biel on September 20,  <a href="#" class="text-primary">Reply</a></span>
										<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
									</div>
									<ul>
										<li>
											<div class="avatar"><img src="assets/img/avatars/avatar02.jpg" alt=""></div>
											<div class="content">
												<span class="details">Jessica Biel on September 20</span>
												<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus, nec dapibus felis tempus in. Quisque eget elementum sem, cursus tristique orci. Donec velit nisi, auctor ac pharetra in, maximus eu justo.</p>
											</div>
										</li>
									</ul>
								</li>
								<li>
									<div class="avatar"><img src="assets/img/avatars/avatar03.jpg" alt=""></div>
									<div class="content">
										<span class="details">Jessica Biel on September 20,  <a href="#" class="text-primary">Reply</a></span>
										<p>Morbi ut faucibus nulla, at fringilla est. Morbi lacinia sagittis purus.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<hr>
					<div class="post-add-comment post-module">
						<h4><i class="ti ti-pencil mr-3 text-primary"></i>Write a comment</h4>
						<div class="content">
							<form action="#" id="add-comment" class="validate-form">
								<div class="row gutters-sm">
									<div class="col-md-6 form-group">
										<input type="text" class="form-control" placeholder="Name" required>
									</div>
									<div class="col-md-6 form-group">
										<input type="email" class="form-control" placeholder="E-mail" required>
									</div>
								</div>
								<div class="form-group">
									<textarea id="comment" cols="30" rows="4" class="form-control" placeholder="Comment" required></textarea>
								</div>
								<div class="text-center">
									<button class="btn btn-primary"><span>Send a comment</span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</article>
<!-- FOOTER -->
<?php include("../app/view/layout/footer.inc.php");?>