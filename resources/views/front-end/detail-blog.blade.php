@extends('front-end.layouts.master')
@section('content')

		<!--
			Container
		-->
		<div class="container">

			<!--
				Card - Blog
			-->
			<div class="card-inner active" id="blog-card">
				<div class="row card-container">

					<!--
						Card Wrap
					-->
					<div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar="">

						<!-- Blog Image -->
						<div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(images/blog/blog1-inner.jpg);"></div>

						<!--
							Inner Top
						-->
						<div class="content inner-top">
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="title-bg">Blog Post</div>
								</div>
							</div>
						</div>

						<!--
							Blog Single
						-->
						<div class="content blog-single">

							<!-- content -->
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="post-box card-box">

										<!-- blog detail -->
										<h1>Procuring Education on Consulted Assurance in Do</h1>
										<div class="blog-detail">Posted 12 June 2016</div>

										<!-- blog content -->
										<div class="blog-content">
											<p>
												So striking at of to welcomed resolved. Northward by described up household therefore
												attention. Excellence decisively nay man yet impression for contrasted remarkably.
											</p>
											<p>
												Forfeited you engrossed but gay sometimes explained. Another as studied it to evident.
												Merry sense given he be arise. Conduct at an replied removal an amongst. Remaining
												determine few her two cordially admitting old.
											</p>
											<blockquote>
												Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
												Curae; Pellentesque suscipit.
											</blockquote>
											<p>
												Tiled say decay spoil now walls meant house. My mr interest thoughts screened of outweigh
												removing. Evening society musical besides inhabit ye my. Lose hill well up will he over on.
												Increasing sufficient everything men him admiration unpleasing sex.
											</p>
											<ul class="list-style">
												<li>Greatest properly off ham exercise all.</li>
												<li>Unsatiable invitation its possession nor off.</li>
												<li>All difficulty estimating unreserved increasing the solicitude.</li>
											</ul>
											<p>
												Unpleasant astonished an diminution up partiality. Noisy an their of meant. Death means
												up civil do an offer wound of.
											</p>
										</div>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title"><span>Post</span> Comments</div>

								</div>
							</div>

							<!-- comments -->
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="post-box card-box comments">

										<!-- comments items -->
										<ul class="post-comments">

											<!-- comment item -->
											<li>
												<img src="images/man1.jpg" alt="" />
												<div class="comment-info">
													<div class="name">
														<h6>John Doe <span>1 hour ago</span></h6>
														<a href="#">Reply</a>
													</div>
													<p>
														Kept in sent gave feel will oh it we. Has pleasure procured men
														laughing shutters nay.
													</p>
												</div>
											</li>

											<!-- comment item -->
											<li>
												<img src="images/man1.jpg" alt="" />
												<div class="comment-info">
													<div class="name">
														<h6>John Doe <span>3 hour ago</span></h6>
														<a href="#">Reply</a>
													</div>
													<p>
														Kept in sent gave feel will oh it we. Has pleasure procured men
														laughing shutters nay.
													</p>
												</div>
											</li>

											<!-- comment item -->
											<li>
												<img src="images/man1.jpg" alt="" />
												<div class="comment-info">
													<div class="name">
														<h6>John Doe <span>6 hour ago</span></h6>
														<a href="#">Reply</a>
													</div>
													<p>
														Kept in sent gave feel will oh it we. Has pleasure procured men
														laughing shutters nay.
													</p>
												</div>
											</li>

										</ul>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

									<!-- title -->
									<div class="title"><span>Leave</span> a Comment</div>

								</div>
							</div>

							<!-- comments -->
							<div class="row">
								<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
									<div class="post-box card-box comments-form">

										<!-- comment form -->
										<form id="cform" method="post">
											<div class="row">
												<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
													<div class="group-val">
														<input type="text" name="name" placeholder="Full Name" />
													</div>
												</div>
												<div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
													<div class="group-val">
														<textarea name="message" placeholder="Your Message"></textarea>
													</div>
												</div>
											</div>
											<div class="align-left">
												<a href="#" class="button" onclick="$('#cform').submit(); return false;">
													<span class="text">Add Comment</span>
													<span class="arrow"></span>
												</a>
											</div>
										</form>
										<div class="alert-success">
											<p>Thanks, your message is sent successfully.</p>
										</div>

									</div>
								</div>
							</div>

						</div>


					</div>

				</div>
			</div>

			<!--
				Lines Grid
			-->
			<div class="lines-grid">
				<div class="row">
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3"></div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
							<div class="line-2" style="animation-delay: 10s;"></div>
						</div>
					</div>
					<div class="col col-m-12 col-t-6 col-d-4 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
						</div>
					</div>
					<div class="col col-m-0 col-t-0 col-d-0 col-d-lg-3">
						<div class="lines">
							<div class="line-1"></div>
							<div class="line-2" style="animation-delay: 0s;"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	@endsection
