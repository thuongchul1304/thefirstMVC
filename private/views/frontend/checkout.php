<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Downy Shoes an Ecommerce Category Bootstrap Responsive Website Template | Check Out :: w3layouts</title>
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
				<?php include 'cart.php'; ?>
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
					<li><a href="index.html">Home</a><i>|</i></li>
					<li>Check Out</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<?php if (!isset($_SESSION['cart']) Or $_SESSION['cart'] == null): ?>
					<div class="row" style="height: 180px;padding: 15px">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<img src="<?= IMG_PATH ?>/giohang.png" class="img-responsive" >
							<p class="lead" style="text-align: center;">Giỏ hàng trống</p>
							<div class="center-block">
								<a href="http://localhost/web/shop" title="" class="btn btn-primary" style="margin-left: 100px">Quay về trang chủ</a>
							</div>
							
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							
						</div>
					</div>
					<?php else: ?>
						<h3>Chec<span>kout</span></h3>

						<div class="checkout-right">
							<h4>Your shopping cart contains: <span> <?php echo count($_SESSION['cart']); ?> Products</span></h4>
							<table class="timetable_sub">
								<thead>
									<tr>
										<th>SL No.</th>
										<th>Product</th>
										<th>Quality</th>
										<th>Product Name</th>

										<th>Price</th>
										<th>Remove</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1;
									$tongtien=0;
									foreach ($_SESSION['cart'] as $key => $value): 
										$tongtien+=$_SESSION['cart'][$key]['Price']*$_SESSION['cart'][$key]['qty'];

										?>
										<tr class="rem1">
											<td class="invert"><?=$i?></td>
											<td class="invert-image"><a href="single.html"><img src="<?php echo IMG_PATH ?>shoes/<?=$value['Image']?>" alt=" " class="img-responsive"></a></td>
											<td class="invert">
												<div class="quantity">
													<div class="quantity-select" style="width: 150px;">
														<div class="entry value-minus" data-sbmincart-id=<?=$value['Id']?> datavalue=<?=$value['qty']?>>&nbsp;</div>
														<div class="entry value valueqty "><span><?=$value['qty']?></span></div>
														<div class="entry value-plus active" data-sbmincart-id=<?=$value['Id']?> datavalue=<?=$value['qty']?>>&nbsp;</div>
													</div>
												</div>
											</td>
											<td class="invert"><?=$value['Name']?></td>

											<td class="invert">$<?=$value['Price']?></td>
											<td class="invert">
												<div class="rem">
													<div class="close1 remove" data-sbmincart-idx="<?=$value['Id']?>"></div>
												</div>

											</td>
										</tr>
										<?php $i++;
									endforeach ?>


								</tbody>
							</table>
						</div>
						<div class="checkout-left">
							<div class="col-md-4 checkout-left-basket">
								<div class="total-here"></div>

								<ul>
									<?php 
									foreach ($_SESSION['cart'] as $key => $value): 
										?>
										<li><?=$value['Name']?><i>-</i> <span>$<?=$value['Price']?></span></li>
									<?php endforeach ?>
									<li>Total$ <i>-</i> <span id="abc"></span></li>
								</ul>
							</div>
							<div class="col-md-8 address_form">
								<h4>Add a new Details</h4>
								<form action="" method="post" class="creditly-card-form agileinfo_form">
									<section class="creditly-wrapper wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Full name: </label>
													<input class="billing-address-name form-control" type="text" name="user_name" placeholder="Full name" required>
												</div>
												<div class="card_number_grids">
													<div class="card_number_grid_left">
														<div class="controls">
															<label class="control-label">Mobile number:</label>
															<input class="form-control" type="text" placeholder="Mobile number" name="user_phone" required> 
														</div>
													</div>
													<div class="card_number_grid_right">
														<div class="controls">
															<label class="control-label">Email: </label>
															<input class="form-control" type="text" placeholder="Email" name="user_email" required>
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Town/City: </label>
													<select class="form-control option-w3ls" style="height: 50px" name="country">
														<?php foreach ($list_country as $key => $value): ?>
															<option value="<?=$value?>" ><?=$key?> - <?=$value?></option >
														<?php endforeach ?>
													</select>
												</div>
												<div class="controls">
													<label class="control-label">Delivery Address</label>
													<input class="form-control" type="text" placeholder="Specific Address" name="address" required>
												</div>
												<div class="card_number_grid_right">
													<div class="controls">
														<label class="control-label">Message: </label>
														<textarea class="form-control" type="text" placeholder="Message" name="message" ></textarea> 
													</div>
												</div>
												<div class="controls">
													<label class="control-label">Amout:</label>
													<input class="form-control" type="text" value="<?=$tongtien?>"  name="amount">
												</div>

											</div>
											<input type="submit" class="submit check_out" value="Delivery to this Address" style="padding: 10px 20px;
											color: #fff;
											font-size: 1em;
											background: #212121;
											text-decoration: none;" name="checkout">
										</div>
									</section>
								</form>
								<div class="checkout-right-basket">
									
								</div>
							<?php endif ?>
						</div>

						<div class="clearfix"> </div>


						<div class="clearfix"></div>
					</div>
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
			<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			<!-- js -->
			<script type="text/javascript" src="<?php echo JS_PATH ?>jquery-2.1.4.min.js"></script>
			<!-- //js -->
			<!-- /nav -->
			<script src="<?php echo JS_PATH ?>modernizr-2.6.2.min.js"></script>
			<script src="<?php echo JS_PATH ?>classie.js"></script>
			<script src="<?php echo JS_PATH ?>demo1.js"></script>
			<!-- //nav -->
			<!--search-bar-->
			<script src="<?php echo JS_PATH ?>search.js"></script>
			<!--//search-bar-->
			<!--quantity-->
			<script>
				$('.value-plus').on('click', function () {
					var divUpd = $(this).parent().find('.value'),
					newVal = parseInt(divUpd.text(), 10) + 1;
					divUpd.text(newVal);
				});

				$('.value-minus').on('click', function () {
					var divUpd = $(this).parent().find('.value'),
					newVal = parseInt(divUpd.text(), 10) - 1;
					if (newVal >= 1) divUpd.text(newVal);
				});
			</script>
			<!--quantity-->
			<script>
				$(document).ready(function (c) {
					$('.close1').on('click', function (c) {
						$('.rem1').fadeOut('slow', function (c) {
							$('.rem1').remove();
						});
					});
				});
			</script>
			<script>
				$(document).ready(function (c) {
					$('.close2').on('click', function (c) {
						$('.rem2').fadeOut('slow', function (c) {
							$('.rem2').remove();
						});
					});
				});
			</script>
			<script>
				$(document).ready(function (c) {
					$('.close3').on('click', function (c) {
						$('.rem3').fadeOut('slow', function (c) {
							$('.rem3').remove();
						});
					});
				});
			</script>
			<script language="JavaScript">
				function setVisibility(id, visibility) {
					document.getElementById(id).style.display = visibility;
				}
			</script>
			<script type="text/javascript" src="../../public/js/minicart.js"></script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="<?php echo JS_PATH ?>move-top.js"></script>
			<script type="text/javascript" src="<?php echo JS_PATH ?>easing.js"></script>
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
			<script type="text/javascript" src="<?php echo JS_PATH ?>bootstrap-3.1.1.min.js"></script>
			<script src="../../public/js/delete.js"></script>

		</body>

		</html>