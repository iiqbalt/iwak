@extends('layouts.homepage.app_home')

@section('content')
			<!-- mt side menu start here -->
			<div class="mt-side-menu">
				<!-- mt holder start here -->
				<div class="mt-holder">
					<a href="#" class="side-close"><span></span><span></span></a>
					<strong class="mt-side-title">MY ACCOUNT</strong>
					<!-- mt side widget start here -->
					<div class="mt-side-widget">
						<header>
							<span class="mt-side-subtitle">SIGN IN</span>
							<p>Welcome back! Sign in to Your Account</p>
						</header>
						<form action="#">
							<fieldset>
								<input type="text" placeholder="Username or email address" class="input">
								<input type="password" placeholder="Password" class="input">
								<div class="box">
									<span class="left"><input class="checkbox" type="checkbox" id="check1"><label for="check1">Remember Me</label></span>
									<a href="#" class="help">Help?</a>
								</div>
								<button type="submit" class="btn-type1">Login</button>
							</fieldset>
						</form>
					</div>
					<!-- mt side widget end here -->
					<div class="or-divider"><span class="txt">or</span></div>
					<!-- mt side widget start here -->
					<div class="mt-side-widget">
						<header>
							<span class="mt-side-subtitle">CREATE NEW ACCOUNT</span>
							<p>Create your very own account</p>
						</header>
						<form action="#">
							<fieldset>
								<input type="text" placeholder="Username or email address" class="input">
								<button type="submit" class="btn-type1">Register</button>
							</fieldset>
						</form>
					</div>
					<!-- mt side widget end here -->
				</div>
				<!-- mt holder end here -->
			</div><!-- mt side menu end here -->
			<!-- mt search popup start here -->
			<div class="mt-search-popup">
				<div class="mt-holder">
					<a href="#" class="search-close"><span></span><span></span></a>
					<div class="mt-frame">
						<form action="#">
							<fieldset>
								<input type="text" placeholder="Search...">
								<span class="icon-microphone"></span>
								<button class="icon-magnifier" type="submit"></button>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!-- mt search popup end here -->
			<!-- mt main slider start here -->
			<div class="mt-main-slider">
				<!-- slider banner-slider start here -->
				<div class="slider banner-slider">
					<!-- holder start here -->
					<div class="holder text-center" style="background-image: url(http://placehold.it/1920x585);">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="text centerize">
										<strong class="title">FURNITURE DESIGNS IDEAS</strong>
										<h1>LIGHTING</h1>
										<h2>PENDANT LAMPS</h2>
										<div class="txt">
											<p>Consectetur adipisicing elit. Beatae accusamus, optio, repellendus inventore</p>
										</div>
										<a href="product-detail.html" class="shop">shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- holder end here -->

					<!-- holder start here -->
					<div class="holder text-center" style="background-image: url(http://placehold.it/1920x585);">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="text right">
										<strong class="title">FURNITURE DESIGNS IDEAS</strong>
										<h1>LOUNGE CHAIRS</h1>
										<h2>SW DAYBED</h2>
										<div class="txt">
											<p>Consectetur adipisicing elit. Beatae accusamus, optio, repellendus inventore</p>
										</div>
										<a href="product-detail.html" class="shop">shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- holder end here -->
					
					<!-- holder start here -->
					<div class="holder text-center" style="background-image: url(http://placehold.it/1920x585);">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="text">
										<strong class="title">FURNITURE DESIGNS IDEAS</strong>
										<h1>CARDBOARD</h1>
										<h2> Sofas and Armchairs</h2>
										<div class="txt">
											<p>Consectetur adipisicing elit. Beatae accusamus, optio, repellendus inventore</p>
										</div>
										<a href="product-detail.html" class="shop">shop now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- holder end here -->
				</div>
				<!-- slider regular end here -->
			</div><!-- mt main slider end here -->
			<!-- mt main start here -->
			<main id="mt-main">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<!-- banner frame start here -->
							<div class="banner-frame">
								<!-- banner-1 start here -->
								<div class="banner-1 wow fadeInLeft" data-wow-delay="0.4s">
									<img alt="image description" src="http://placehold.it/385x480">
									<div class="holder">
										<h2>MY SMALL WRITING <br>DESK</h2>
										<div class="txts">
											<a class="btn-shop" href="product-detail.html">
												<span>shop now</span>
												<i class="fa fa-angle-right"></i>
											</a>
											<div class="discount">
												<span>-20%</span>
											</div>
										</div>
									</div>
								</div>
								<!-- banner-1 end here -->

								<!-- banner-box first start here -->
								<div class="banner-box first">
									<!-- banner-2 start here -->
									<div class="banner-2 wow fadeInUp" data-wow-delay="0.4s">
										<img alt="image description" src="http://placehold.it/385x225">
										<div class="holder">
											<h2>MODULAR LOUNGE <br>TEAK</h2>
											<span class="price">$ 129.00</span>
										</div>
									</div>
									<!-- banner-2 end here -->

									<!-- banner-3 start here -->
									<div class="banner-3 right wow fadeInDown" data-wow-delay="0.4s">
										<img alt="image description" src="http://placehold.it/385x225">
										<div class="holder">
											<h2>Modular technical <br>fabric sofa</h2>
											<a href="product-detail.html" class="shop">SHOP NOW</a>
										</div>
									</div>
									<!-- banner-3 end here -->
								</div>
								<!-- banner-box first end here -->

								<!-- banner-4 start here -->
								<div class="banner-4 hidden-sm wow fadeInRight" data-wow-delay="0.4s">
									<img alt="image description" src="http://placehold.it/385x480">
									<div class="holder">
										<h2>Direct light <br>pendant lamp</h2>
										<span class="price">$ 129.00</span>
										<a class="btn-shop add" href="product-detail.html">
											<span>shop now</span>
											<i class="fa fa-angle-right"></i>
										</a>
									</div>
								</div>
								<!-- banner-4 end here -->
							</div>
							<!-- banner frame end here -->
							<!-- mt producttabs start here -->
							<div class="mt-producttabs wow fadeInUp" data-wow-delay="0.4s">
								<!-- producttabs start here -->
								<ul class="producttabs">
									<li><a href="#tab1" class="active">FEATURED</a></li>
									<li><a href="#tab2">LATEST</a></li>
									<li><a href="#tab3">BEST SELLER</a></li>
								</ul>
								<!-- producttabs end here -->
								<div class="tab-content text-center">
									<div id="tab1">
										<!-- tabs slider start here -->
										<div class="tabs-slider">
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<span class="caption">
																	<span class="new">NEW</span>
																</span>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Puff Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>287,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Easy chair with armrests</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>287,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<span class="caption">
																	<span class="off">15% Off</span>
																</span>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Upholstered chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Wood Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>198,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Trestle-based chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>198,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<span class="caption">
																	<span class="off">15% Off</span>
																	<span class="new">NEW</span>
																</span>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<span class="caption">
																	<span class="off">15% Off</span>
																</span>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Upholstered chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
										</div>
										<!-- tabs slider end here -->
									</div>
									<div id="tab2">
										<!-- tabs slider start here -->
										<div class="tabs-slider">
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Easy chair with armrests</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>287,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<span class="caption">
																	<span class="new">NEW</span>
																</span>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Puff Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>287,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<span class="caption">
																	<span class="off">15% Off</span>
																</span>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Upholstered chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Trestle-based chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>198,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Wood Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>198,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<span class="caption">
																	<span class="off">15% Off</span>
																	<span class="new">NEW</span>
																</span>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<span class="caption">
																	<span class="off">15% Off</span>
																</span>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Upholstered chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
										</div>
										<!-- tabs slider end here -->
									</div>
									<div id="tab3">
										<!-- tabs slider start here -->
										<div class="tabs-slider">
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<span class="caption">
																	<span class="new">NEW</span>
																</span>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Puff Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>287,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Easy chair with armrests</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>287,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<span class="caption">
																	<span class="off">15% Off</span>
																</span>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Upholstered chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Wood Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>198,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Trestle-based chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>198,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<span class="caption">
																	<span class="off">15% Off</span>
																	<span class="new">NEW</span>
																</span>
																<ul class="mt-stars">
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star"></i></li>
																	<li><i class="fa fa-star-o"></i></li>
																</ul>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
											<!-- slide start here -->
											<div class="slide">
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<span class="caption">
																	<span class="off">15% Off</span>
																</span>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Upholstered chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
													</div>
												</div>
												<!-- mt product1 center end here -->
												<!-- mt product1 center start here -->
												<div class="mt-product1 mt-paddingbottom20">
													<div class="box">
														<div class="b1">
															<div class="b2">
																<a href="product-detail.html"><img src="http://placehold.it/215x215" alt="image description"></a>
																<ul class="links">
																	<li><a href="#"><i class="icon-handbag"></i><span>Add to Cart</span></a></li>
																	<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
																	<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
													<div class="txt">
														<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
														<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
													</div>
												</div><!-- mt product1 center end here -->
											</div>
											<!-- slide end here -->
										</div>
										<!-- tabs slider end here -->
									</div>
								</div>
							</div>
							<!-- mt producttabs end here -->
						</div>
					</div>
				</div>
				<!-- mt bestseller start here -->
				<div class="mt-bestseller bg-grey text-center wow fadeInUp" data-wow-delay="0.4s">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 mt-heading text-uppercase">
								<h2 class="heading">BEST SELLER</h2>
								<p>EXCEPTEUR SINT OCCAECAT</p>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<div class="bestseller-slider">
									<div class="slide">
										<!-- mt product1 center start here -->
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.html"><img src="http://placehold.it/275x285" alt="image description"></a>
														<span class="caption">
															<span class="best-price">Best Price</span>
														</span>
														<ul class="links add">
															<li><a href="#"><i class="icon-handbag"></i></a></li>
															<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
															<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
												<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
									<div class="slide">
										<!-- mt product1 center start here -->
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.html"><img src="http://placehold.it/275x285" alt="image description"></a>
														<ul class="links add">
															<li><a href="#"><i class="icon-handbag"></i></a></li>
															<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
															<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.html">Marvelous Modern 3 Seater</a></strong>
												<span class="price"><i class="fa fa-eur"></i> <span>599,00</span></span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
									<div class="slide">
										<!-- mt product1 center start here -->
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.html"><img src="http://placehold.it/275x285" alt="image description"></a>
														<ul class="links add">
															<li><a href="#"><i class="icon-handbag"></i></a></li>
															<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
															<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.html">Puff  Armchair</a></strong>
												<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
									<div class="slide">
										<!-- mt product1 center start here -->
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.html"><img src="http://placehold.it/275x285" alt="image description"></a>
														<span class="caption">
															<span class="best-price">Best Price</span>
														</span>
														<ul class="links add">
															<li><a href="#"><i class="icon-handbag"></i></a></li>
															<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
															<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.html">Bombi Chair</a></strong>
												<span class="price"><i class="fa fa-eur"></i> <span>399,00</span></span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
									<div class="slide">
										<!-- mt product1 center start here -->
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.html"><img src="http://placehold.it/275x285" alt="image description"></a>
														<ul class="links add">
															<li><a href="#"><i class="icon-handbag"></i></a></li>
															<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
															<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.html">Marvelous Modern 3 Seater</a></strong>
												<span class="price"><i class="fa fa-eur"></i> <span>599,00</span></span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
									<div class="slide">
										<!-- mt product1 center start here -->
										<div class="mt-product1 large">
											<div class="box">
												<div class="b1">
													<div class="b2">
														<a href="product-detail.html"><img src="http://placehold.it/275x285" alt="image description"></a>
														<span class="caption">
															<span class="off">15% Off</span>
														</span>
														<ul class="links add">
															<li><a href="#"><i class="icon-handbag"></i></a></li>
															<li><a href="#"><i class="icomoon icon-heart-empty"></i></a></li>
															<li><a href="#"><i class="icomoon icon-exchange"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="txt">
												<strong class="title"><a href="product-detail.html">Puff  Armchair</a></strong>
												<span class="price"><i class="fa fa-eur"></i> <span>200,00</span></span>
											</div>
										</div><!-- mt product1 center end here -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- mt bestseller start here -->
				<div class="mt-smallproducts wow fadeInUp" data-wow-delay="0.4s">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
								<h3 class="heading">Hot Sale</h3>
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="http://placehold.it/80x80"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Egon Wooden Chair</a></strong>
											<ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<del class="off">$75,00</del>
										<span class="price">$55,00</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="http://placehold.it/80x80"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Oyo Cantilever Chair</a></strong>
										</div>
										<del class="off">$75,00</del>
										<span class="price">$55,00</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="http://placehold.it/80x80"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Kurve Chair</a></strong>
											<ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<del class="off">$75,00</del>
										<span class="price">$55,00</span>
									</div>
								</div><!-- mt product4 end here -->
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomsm">
								<h3 class="heading">Featured Products</h3>
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="http://placehold.it/80x80"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Bombi Chair</a></strong>
										</div>
										<del class="off">$75,00</del>
										<span class="price">$33,00</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="http://placehold.it/80x80"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Oyo Cantilever Chair</a></strong>
										</div>
										<span class="price">$55,00</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="http://placehold.it/80x80"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Puff Chair</a></strong>
										</div>
										<del class="off">$75,00</del>
										<span class="price">$55,00</span>
									</div>
								</div><!-- mt product4 end here -->
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3 mt-paddingbottomxs">
								<h3 class="heading">Sale Products</h3>
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="http://placehold.it/80x80"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Marvelous Wooden Chair</a></strong>
										</div>
										<del class="off">$75,00</del>
										<span class="price">$55,00</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="http://placehold.it/80x80"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Oyo Cantilever Chair</a></strong>
											<ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<span class="price">$55,00</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="http://placehold.it/80x80"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Kurve Chair</a></strong>
										</div>
										<del class="off">$75,00</del>
										<span class="price">$55,00</span>
									</div>
								</div><!-- mt product4 end here -->
							</div>
							<div class="col-xs-12 col-sm-6 col-md-3">
								<h3 class="heading">Top Rated Products</h3>
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="http://placehold.it/80x80"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Egon Wooden Chair</a></strong>
											<ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<del class="off">$75,00</del>
										<span class="price">$55,00</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="http://placehold.it/80x80"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Oyo Cantilever Chair</a></strong>
											<ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<del class="off">$75,00</del>
										<span class="price">$55,00</span>
									</div>
								</div><!-- mt product4 end here -->
								<!-- mt product4 start here -->
								<div class="mt-product4 mt-paddingbottom20">
									<div class="img">
										<a href="product-detail.html"><img alt="image description" src="http://placehold.it/80x80"></a>
									</div>
									<div class="text">
										<div class="frame">
											<strong><a href="product-detail.html">Kurve Chair</a></strong>
											<ul class="mt-stars">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-o"></i></li>
											</ul>
										</div>
										<del class="off">$75,00</del>
										<span class="price">$55,00</span>
									</div>
								</div><!-- mt product4 end here -->
							</div>
						</div>
					</div>
				</div><!-- mt bestseller end here -->
			</main><!-- mt main end here -->
			
@endsection
