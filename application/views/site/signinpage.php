<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">
		<title>Online RGC</title>
		
		<!-- Favicon Icon -->
        <link rel="icon" type="image/png" href="<?=base_url('assets/images/fav.png')?>">

        <!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='<?=base_url('assets/vendor/unicons-2.0.1/css/unicons.css')?>' rel='stylesheet'>
		<link href="<?=base_url('assets/css/vertical-responsive-menu.min.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/css/style.css" rel="stylesheet')?>">
		<link href="<?=base_url('assets/css/responsive.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/css/night-mode.css')?>" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="<?=base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/vendor/OwlCarousel/assets/owl.carousel.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css')?>" rel="stylesheet">
		<link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/semantic/semantic.min.css')?>">
		
	</head> 

<body>
	<!-- Signup Start -->
	<div class="sign_in_up_bg">
		<div class="container">
			<div class="row justify-content-lg-center justify-content-md-center">
				<div class="col-lg-12">
					<div class="main_logo25" id="logo">
						<a href="index.html"><img src="<?=base_url('assets/images/logo.svg')?>" alt=""></a>
						<a href="index.html"><img class="logo-inverse" src="<?=base_url('assets/images/ct_logo.svg')?>" alt=""></a>
					</div>
				</div>
			
				<div class="col-lg-6 col-md-8">
					<div class="sign_form">
						<h2>Welcome Back</h2>
						<p>Log In to Your OnlineRGC Account!</p>
						<button class="social_lnk_btn color_btn_fb"><i class="uil uil-facebook-f"></i>Continue with Facebook</button>
						<button class="social_lnk_btn mt-15 color_btn_tw"><i class="uil uil-twitter"></i>Continue with Twitter</button>
						<button class="social_lnk_btn mt-15 color_btn_go"><i class="uil uil-google"></i>Continue with Google</button>
						<form action="<?=base_url()?>">
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh95">
									<input class="prompt srch_explore" type="email" name="emailaddress" value="" id="id_email" required="" maxlength="64" placeholder="Email Address">															
									<i class="uil uil-envelope icon icon2"></i>
								</div>
							</div>
							<div class="ui search focus mt-15">
								<div class="ui left icon input swdh95">
									<input class="prompt srch_explore" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Password">
									<i class="uil uil-key-skeleton-alt icon icon2"></i>
								</div>
							</div>
							<div class="ui form mt-30 checkbox_sign">
								<div class="inline field">
									<div class="ui checkbox mncheck">
										<input type="checkbox" tabindex="0" class="hidden">
										<label>Remember Me</label>
									</div>
								</div>
							</div>
							<button class="login-btn" type="submit">Sign In</button>
						</form>
						<p class="sgntrm145">Or <a href="forgot_password.html">Forgot Password</a>.</p>
						<p class="mb-0 mt-30 hvsng145">Don't have an account? <a href="sign_up.html">Sign Up</a></p>
					</div>
					<div class="sign_footer"><img src="<?=base_url('assets/images/sign_logo.png')?>" alt="">© <?=YearCopyright('2020')?> <strong>Online RGC</strong>. All Rights Reserved.</div>
				</div>				
			</div>				
		</div>				
	</div>
	<!-- Signup End -->	

    <script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/app.js')?>"></script>
	<script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
	<script src="<?=base_url('assets/vendor/OwlCarousel/owl.carousel.js')?>"></script>
	<script src="<?=base_url('assets/vendor/semantic/semantic.min.js')?>"></script>
	<script src="<?=base_url('assets/js/custom1.js')?>"></script>
	<script src="<?=base_url('assets/js/night-mode.js')?>"></script>
	
</body>
</html>