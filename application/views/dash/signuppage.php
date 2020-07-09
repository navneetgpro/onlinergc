<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="online classes">
		<meta name="author" content="onlinergc">
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
		<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/toastr.min.css')?>">
		<style>.toast-message p{color:white;}</style>
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
						<h2>Welcome to OnlineRGC</h2>
						<p>Sign Up and Start Learning!</p>
						<form id="formid">
							<div class="ui search focus snupf">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="text" name="fullname" value="" id="id_fullname" required="" maxlength="64" placeholder="Full Name">															
								</div>
							</div>
							<div class="ui search focus snupf mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="tel" name="phone" value="" id="id_phone" required="" maxlength="10" placeholder="Enter Contact No">															
								</div>
							</div>
							<div class="ui search focus snupf mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="email" name="email" value="" id="id_email" required="" maxlength="100" placeholder="Enter Email">															
								</div>
							</div>
							<div class="ui search focus snupf mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="password" name="password" value="" id="id_password" required="" maxlength="64" placeholder="Password">															
								</div>
                            </div>
                            <div style="display:none" class="otptab ui search focus mt-15">
								<div class="ui left icon input swdh11 swdh19">
									<input class="prompt srch_explore" type="number" name="chkotp" value="" id="id_otp" required="" maxlength="6" placeholder="Enter OTP">															
								</div>
							</div>
							<button class="snupf login-btn nxtbtn" type="button">Next</button>
							<button style="display:none" class="otptab login-btn ajaxform" type="button" data-control="auth/register" data-form="formid">Submit</button>
						</form>
						<p class="sgntrm145">By signing up, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>
						<p class="mb-0 mt-30">Already have an account? <a href="<?=base_url('d/signin')?>">Log In</a></p>
					</div>
					<div class="sign_footer"><img src="<?=base_url('assets/images/sign_logo.png')?>" alt="">© <?=YearCopyright('2020')?> <strong>Online RGC</strong>. All Rights Reserved.</div>
				</div>				
			</div>				
		</div>				
	</div>
	<!-- Signup End -->	

    <script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?=base_url('assets/js/app.js')?>"></script>
    <script>
        $(document).on('click','.nxtbtn',function(){
            const tget = this;
            let btext = $(tget).text();
            $(tget).prop('disabled', true);
            const snupf = $('.snupf');
            const otptab = $('.otptab');
            var form_data = $('#formid').serialize();
            $.ajax({
                type: 'post',
                url: baseurl + "/auth/signupotp",
                data: form_data,
                dataType: 'json',
                beforeSend: function () {
                    $(tget).text('processing...');
                    $('.error').html('');
                    return;
                },
                success: function (data) {
                    var data = eval(data);
                    toastr[data.status === "ok" ? "success" : "error"](data.data);
                    if(data.status === "ok"){
                        snupf.hide();
                        otptab.show();
                    }
                    $(tget).text(btext);
                    $(tget).prop('disabled', false);
                },
                error: function (jqXHR, exception) {
                    $(tget).text(btext);
                    $(tget).prop('disabled', false);
                    if (jqXHR.status === 0) {
                        alert('Not connect.\n Verify Network.');
                    } else if (jqXHR.status == 404) {
                        alert('Requested page not found. [404]');
                    } else if (jqXHR.status == 500) {
                        alert('Internal Server Error [500].');
                    } else if (exception === 'parsererror') {
                        alert('Requested JSON parse failed.');
                    } else if (exception === 'timeout') {
                        alert('Time out error.');
                    } else if (exception === 'abort') {
                        alert('Ajax request aborted.');
                    } else {
                        alert('Uncaught Error.\n' + jqXHR.responseText);
                    }
                }
            });
            return false;
        })
    </script>
	<script src="<?=base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
	<script src="<?=base_url('assets/vendor/OwlCarousel/owl.carousel.js')?>"></script>
	<script src="<?=base_url('assets/vendor/semantic/semantic.min.js')?>"></script>
	<script src="<?=base_url('assets/js/custom1.js')?>"></script>
	<script src="<?=base_url('assets/js/night-mode.js')?>"></script>
	<script src="<?=base_url('assets/js/toastr.min.js')?>"></script>
	<script>
		toastr.options = { "closeButton": true, "progressBar": true, "showEasing": "swing" }
	</script>
	
</body>
</html>