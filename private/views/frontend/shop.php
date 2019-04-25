<?php session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Downy Shoes an Ecommerce Category Bootstrap Responsive Website Template | Shop :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Downy Shoes Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<?php include 'linkcss.php'; ?>
</head>

<body>
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="index.html"><span>Downy</span> <i>Shoes</i></a></h1>
				</div>
				<?php include 'menu.php'; ?>
				<!-- cart details -->
				<?php require 'cart.php'; ?>
			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
				<form action="#" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="http://localhost/web/">Home</a><i>|</i></li>
					<li>Shop</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<!-- tittle heading -->

			<!-- //tittle heading -->
			<!-- product left -->
			<div class="side-bar col-md-3">
				<div class="search-hotel">
					<h3 class="agileits-sear-head">Search Here..</h3>
					<form action="#" method="post">
						<input type="search" placeholder="Product name..." name="search" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				<!-- price range -->
				<div class="range">
					<h3 class="agileits-sear-head">Price range</h3>
					<ul class="dropdown-menu6">
						<li>

							<div id="slider-range"></div>
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>
					</ul>
				</div>
				<!-- //price range -->
				<!--preference -->
				<div class="left-side">
					<h3 class="agileits-sear-head">Occasion</h3>
					<ul>
						<?php foreach ($group as $val): ?>
							<li>
								<a href="index?type=<?=$val['link']?>" title="">
									<input type="checkbox" class="checked">
									<span class="span"><?=$val['Name']?></span>
								</a>
							</li>
						<?php endforeach ?>

					</ul>
				</div>
				<!-- // preference -->
				<!-- discounts -->
				<div class="left-side">
					<h3 class="agileits-sear-head">Discount</h3>
					<ul>
						<li>
							<a href="index?type=price1" title=""><input type="checkbox" class="checked">
								<span class="span">$100-$500</span></a>
							</li>
							<li>
								<a href="index?type=price2" title=""><input type="checkbox" class="checked">
									<span class="span">$500-$1000</span></a>
								</li>
								<li>
									<a href="index?type=price3" title=""><input type="checkbox" class="checked">
										<span class="span">$1000-$1500</span></a>
									</li>
									<li>
										<a href="index?type=price4" title=""><input type="checkbox" class="checked">
											<span class="span">$1500-$2000</span></a>
										</li>
										<li>
											<a href="index?type=price5" title=""><input type="checkbox" class="checked">
												<span class="span"> > $2000 </span></a>
											</li>
										</ul>
									</div>
									<!-- //discounts -->
									<!-- reviews -->
									<!-- //reviews -->
									<!-- deals -->
									<div class="deal-leftmk left-side">
										<h3 class="agileits-sear-head">Special Deals</h3>
										<?php foreach ($special as $val): ?>
											<div class="special-sec1">
												<div class="col-xs-4 img-deals">
													<img src="<?php echo IMG_PATH ?>shoes/<?=$val['Image']?>" alt="">
												</div>
												<div class="col-xs-8 img-deal1">
													<h3><?=$val['Name']?></h3>
													<a href="single.html">$<?=$val['PriceNew']?></a>
												</div>
												<div class="clearfix"></div>
											</div>
										<?php endforeach ?>
									</div>
									<!-- //deals -->

								</div>
								<!-- //product left -->
								<!-- product right -->
								<div class="left-ads-display col-md-9">
									<div class="wrapper_top_shop">
										<div class="col-md-4 shop_left">
											<img src="<?php echo IMG_PATH ?>banner1.jpg" alt="">
											<h6><a href="index" title="">All</a></h6>
										</div>
										<div class="col-md-4 shop_right">
											<img src="<?php echo IMG_PATH ?>banner3.jpg" alt="">
											<h6><a href="index?type=men" title="">Men</a></h6>
										</div>
										<div class="col-md-4 shop_right">
											<img src="<?php echo IMG_PATH ?>banner4.jpg" alt="">
											<h6><a href="index?type=women" title="">WOMEN</a></h6>
										</div>
										<div class="clearfix"></div>
										<!-- product-sec1 -->
										<div class="product-sec1">
											<!--/mens-->
											<?php foreach ($result as  $value): ?>
												<div class="col-md-4 product-men">
													<div class="product-shoe-info shoe">
														<div class="men-pro-item">
															<div class="men-thumb-item">
																<img src="<?php echo IMG_PATH ?>shoes/<?=$value['Image']?>" style="width:235.844px;height: 277.422px">
																<input type="text" name="imgProduct" class="imgProduct<?=$value['Id']?>" value="<?=$value['Image']?>" hidden>																	
																<div class="men-cart-pro">
																	<div class="inner-men-cart-pro">
																		<a href="single/<?=$value['Id']?>" class="link-product-add-cart">
																			
																			<?php if ($value['Quantity'] <= 0): ?>
																				Sold Out														
																				<?php else: ?>	
																					Quick View
																				<?php endif ?>
																				
																			</a>
																		</div>
																	</div>
																	<span class="product-new-top">New</span>
																</div>
																<div class="item-info-product">
																	<h4 style="width:220px;height:57px;" >
																		<a href=""><?=$value['Name']?></a>
																		<input type="text" name="nameProduct" class="nameProduct<?=$value['Id']?>" value="<?=$value['Name']?>" hidden>
																	</h4>
																	<div class="info-product-price">
																		<div class="grid_meta">
																			<div class="product_price">
																				<div class="grid-price ">
																					<span class="money" ><?=$value['Price']?>$</span>
																					<input type="text" name="priceProduct" class="priceProduct<?=$value['Id']?>" value="<?=$value['Price']?>" hidden>
																				</div>
																			</div>
																			<ul class="stars">
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																			</ul>
																		</div>
																		<div class="shoe single-item hvr-outline-out">
																			<?php if ($value['Quantity'] <= 0): ?>
																				<button type="button"  value="<?=$value['Id']?>" class="shoe-cart pshoe-cart addProduct" disabled>
																					<i class="fa fa-cart-plus" aria-hidden="true"></i>
																				</button>																			
																				<?php else: ?>	
																					<button type="button"  value="<?=$value['Id']?>" class="shoe-cart pshoe-cart addProduct">
																						<i class="fa fa-cart-plus" aria-hidden="true"></i>
																					</button>
																				<?php endif ?>

																			</form>

																		</div>
																	</div>
																	<div class="clearfix"></div>
																</div>
															</div>
														</div>
													</div>
												<?php endforeach ?>
												<div class="clearfix"></div>

											</div>

											<!-- //product-sec1 -->
											<div class="col-md-6 shop_left shp">
												<img src="<?php echo IMG_PATH ?>banner4.jpg" alt="">
												<h6>21% off</h6>
											</div>
											<div class="col-md-6 shop_right shp">
												<img src="<?php echo IMG_PATH ?>banner1.jpg" alt="">
												<h6>31% off</h6>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<!-- //top products -->
							<div class="mid_slider_w3lsagile">
								<div class="col-md-3 mid_slider_text">
									<h5>Some More Shoes</h5>
								</div>
								<div class="col-md-9 mid_slider_info">
									<div id="myCarousel" class="carousel slide" data-ride="carousel">
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#myCarousel" data-slide-to="0" class=""></li>
											<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
											<li data-target="#myCarousel" data-slide-to="2" class=""></li>
											<li data-target="#myCarousel" data-slide-to="3" class=""></li>
										</ol>
										<div class="carousel-inner" role="listbox">
											<div class="item">
												<div class="row">
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g1.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g2.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g3.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g4.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
												</div>
											</div>
											<div class="item active">
												<div class="row">
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g5.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g6.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g2.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g1.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="row">
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g1.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g2.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g3.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g4.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="row">
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g1.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g2.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g3.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
													<div class="col-md-3 col-sm-3 col-xs-3 slidering">
														<div class="thumbnail"><img src="<?php echo IMG_PATH ?>g4.jpg" alt="Image" style="max-width:100%;"></div>
													</div>
												</div>
											</div>
										</div>
										<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
											<span class="fa fa-chevron-left" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
											<span class="fa fa-chevron-right" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
										<!-- The Modal -->

									</div>
								</div>

								<div class="clearfix"> </div>
							</div>
							<!-- /newsletter-->

							<!-- footer -->
							<div class="footer_agileinfo_w3">
								<div class="footer_inner_info_w3ls_agileits">
									<div class="col-md-3 footer-left">
										<h2><a href="index.html"><span>D</span>owny Shoes </a></h2>
										<p>Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
										<ul class="social-nav model-3d-0 footer-social social two">
											<li>
												<a href="#" class="facebook">
													<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
													<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
												</a>
											</li>
											<li>
												<a href="#" class="twitter">
													<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
													<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
												</a>
											</li>
											<li>
												<a href="#" class="instagram">
													<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
													<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
												</a>
											</li>
											<li>
												<a href="#" class="pinterest">
													<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
													<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
												</a>
											</li>
										</ul>
									</div>
									<div class="col-md-9 footer-right">
										<div class="sign-grds">
											<div class="col-md-4 sign-gd">
												<h4>Our <span>Information</span> </h4>
												<ul>
													<li><a href="http://localhost/web/">Home</a></li>
													<li><a href="about.html">About</a></li>
													<li><a href="404.html">Services</a></li>
													<li><a href="404.html">Short Codes</a></li>
													<li><a href="contact.html">Contact</a></li>
												</ul>
											</div>

											<div class="col-md-5 sign-gd-two">
												<h4>Store <span>Information</span></h4>
												<div class="address">
													<div class="address-grid">
														<div class="address-left">
															<i class="fa fa-phone" aria-hidden="true"></i>
														</div>
														<div class="address-right">
															<h6>Phone Number</h6>
															<p>+1 234 567 8901</p>
														</div>
														<div class="clearfix"> </div>
													</div>
													<div class="address-grid">
														<div class="address-left">
															<i class="fa fa-envelope" aria-hidden="true"></i>
														</div>
														<div class="address-right">
															<h6>Email Address</h6>
															<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
														</div>
														<div class="clearfix"> </div>
													</div>
													<div class="address-grid">
														<div class="address-left">
															<i class="fa fa-map-marker" aria-hidden="true"></i>
														</div>
														<div class="address-right">
															<h6>Location</h6>
															<p>Broome St, NY 10002,California, USA.

															</p>
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
											</div>
											<div class="col-md-3 sign-gd flickr-post">
												<h4>Flickr <span>Posts</span></h4>
												<ul>
													<li><a href="single.html"><img src="<?php echo IMG_PATH ?>t1.jpg" alt=" " class="img-responsive" /></a></li>
													<li><a href="single.html"><img src="<?php echo IMG_PATH ?>t2.jpg" alt=" " class="img-responsive" /></a></li>
													<li><a href="single.html"><img src="<?php echo IMG_PATH ?>t3.jpg" alt=" " class="img-responsive" /></a></li>
													<li><a href="single.html"><img src="<?php echo IMG_PATH ?>t4.jpg" alt=" " class="img-responsive" /></a></li>
													<li><a href="single.html"><img src="<?php echo IMG_PATH ?>t1.jpg" alt=" " class="img-responsive" /></a></li>
													<li><a href="single.html"><img src="<?php echo IMG_PATH ?>t2.jpg" alt=" " class="img-responsive" /></a></li>
													<li><a href="single.html"><img src="<?php echo IMG_PATH ?>t3.jpg" alt=" " class="img-responsive" /></a></li>
													<li><a href="single.html"><img src="<?php echo IMG_PATH ?>t2.jpg" alt=" " class="img-responsive" /></a></li>
													<li><a href="single.html"><img src="<?php echo IMG_PATH ?>t4.jpg" alt=" " class="img-responsive" /></a></li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						<!-- //footer -->
						<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
						<!-- js -->

						<script type="text/javascript" src="../../public/js/jquery-2.1.4.min.js"></script>
						<!-- //js -->
						<!-- /nav -->
						<script src="../../public/js/modernizr-2.6.2.min.js"></script>
						<script src="../../public/js/classie.js"></script>
						<script src="../../public/js/demo1.js"></script>
						<!-- //nav -->
						<!--search-bar-->
						<script src="../../public/js/search.js"></script>
						<!--//search-bar-->
						<!-- price range (top products) -->
						<script src="../../public/js/jquery-ui.js"></script>

						<script>
							$(window).load(function () {
								$("#slider-range").slider({
									range: true,
									min: 0,
									max: 9000,
									values: [50, 6000],
									slide: function (event, ui) {
										$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
									}
								});
								$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="../../public/js/move-top.js"></script>
	<script type="text/javascript" src="../../public/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="../../public/js/bootstrap-3.1.1.min.js"></script>
	<script language="JavaScript">
		function setVisibility(id, visibility) {
			document.getElementById(id).style.display = visibility;
		}
	</script>
	<script type="text/javascript" src="../../public/js/minicart.js"></script>
	<script src="../../public/js/delete.js"></script>
</body>

</html>
