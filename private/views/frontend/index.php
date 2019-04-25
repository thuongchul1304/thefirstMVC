<?php session_start();
?><!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Trang chủ</title>
	<!-- custom-theme -->
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
	<div class="banner_top" id="home">
		<div class="wrapper_top_w3layouts">

			<div class="header_agileits">
				<div class="logo">
					<h1><a class="navbar-brand" href="#"><span>Thuong</span> <i>Shoes</i></a></h1>
				</div>
				
				<?php include 'menu.php'; ?>
				<!-- cart details -->
				<?php require 'cart.php'; ?>
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
			</div>
			<!-- /slider -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides callbacks callbacks1" id="slider4">

						<li>
							<div class="banner-top2">
								<div class="banner-info-wthree">
									<h3>Nike</h3>
									<p>Xem cảm thấy tốt như thế nào.</p>

								</div>

							</div>
						</li>
						<li>
							<div class="banner-top3">
								<div class="banner-info-wthree">
									<h3>Heels</h3>
									<p>Cho tất cả các bước chân của cuộc sống.</p>

								</div>

							</div>
						</li>
						<li>
							<div class="banner-top">
								<div class="banner-info-wthree">
									<h3>Sneakers</h3>
									<p>Thương hiệu nổi tiếng hàng đầu.</p>

								</div>

							</div>
						</li>
						<li>
							<div class="banner-top1">
								<div class="banner-info-wthree">
									<h3>Adidas</h3>
									<p>Tự tin trên mỗi bước chân.</p>

								</div>

							</div>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //slider -->
			<ul class="top_icons">
				<li><a href="#"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-twitter" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-linkedin" aria-hidden="true"></span></a></li>
				<li><a href="#"><span class="fa fa-google-plus" aria-hidden="true"></span></a></li>

			</ul>
		</div>
	</div>
	<!-- //banner -->

	<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="../../public/js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- /nav -->
	<script src="../../public/js/modernizr-2.6.2.min.js"></script>
	<script src="../../public/js/classie.js"></script>
	<script src="../../public/js/demo1.js"></script>
	<!-- //nav -->
	<!-- cart-js -->

	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
	});
</script>
<!-- //cart-js -->
<!--search-bar-->
<script src="../../public/js/search.js"></script>
<!--//search-bar-->
<script src="../../public/js/responsiveslides.min.js"></script>
<script>
	$(function () {
		$("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 1000,
			namespace: "callbacks",
			before: function () {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function () {
				$('.events').append("<li>after event fired.</li>");
			}
		});
	});
</script>
<!-- js for portfolio lightbox -->
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
	<script language="JavaScript">
		function setVisibility(id, visibility) {
			document.getElementById(id).style.display = visibility;
		}
	</script>
<script type="text/javascript" src="../../public/js/bootstrap-3.1.1.min.js"></script>

<script src="../../../public/js/minicart.js"></script>
</body>

</html>