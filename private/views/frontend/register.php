<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng kí</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH ?>sourcesanspro-font.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="<?php echo CSS_PATH ?>register.css"/>
</head>
<body class="form-v8">
	<div class="page-content">
		<a href="http://localhost/web/frontend/" class="next">&laquo;Back</a>
		<div class="form-v8-content">
			<div class="form-left">
				<img src="<?php echo IMG_PATH?>user.png" alt="form">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign Up</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Sign In</button>
					</div>
				</div>
				<form class="form-detail" action="#" method="post">
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="full_name" id="full_name" class="input-text" required >
								<span class="label">Name</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="Username" id="full_name" class="input-text" required pattern="[a-zA-Z0-9]{6,15}" title="Username từ 6 đến 15 kí tự không chứa kí tự đặc biệt">
								<span class="label">Username</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="your_email" id="your_email" class="input-text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Vui lòng nhập đúng định dạng Email">
								<span class="label">E-Mail</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
								<span class="label">Comfirm Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Register">
						</div>
					</div>
				</form>
				<form class="form-detail" action="login" method="post">
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="Username" id="full_name" class="input-text" required>
								<span class="label">Username</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password_1" id="password_1" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<?php if (isset($_COOKIE['username'])): ?>
								<input type="submit" name="login" class="register" value="You're Signed In" disabled>
								<?php else: ?>	
								<input type="submit" name="login" class="register" value="Sign In">
							<?php endif ?>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>