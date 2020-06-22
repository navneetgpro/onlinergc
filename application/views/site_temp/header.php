<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Study Online Course">
	<meta name="author" content="OnlineRGC">
	<title>OnlineRGC</title>

	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="<?=base_url('assets/images/fav.png')?>">

	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
	<link href="<?=base_url('assets/vendor/unicons-2.0.1/css/unicons.css')?>" rel='stylesheet'>
	<link href="<?=base_url('assets/css/vertical-responsive-menu.min.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/student_dashboard.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/student_responsive.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/style.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/responsive.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/night-mode.css')?>" rel="stylesheet">

	<!-- Vendor Stylesheets -->
	<link href="<?=base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/vendor/OwlCarousel/assets/owl.carousel.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/semantic/semantic.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/toastr.min.css')?>">
	<script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
</head>

<body>
	<!-- Header Start -->
	<header class="header clearfix">
		<button type="button" id="toggleMenu" class="toggle_menu">
			<i class='uil uil-bars'></i>
		</button>
		<button id="collapse_menu" class="collapse_menu">
			<i class="uil uil-bars collapse_menu--icon "></i>
			<span class="collapse_menu--label"></span>
		</button>
		<div class="main_logo" id="logo">
			<a href="index.html"><img src="<?=base_url('assets/images/logo.svg')?>" alt=""></a>
			<a href="index.html"><img class="logo-inverse" src="<?=base_url('assets/images/ct_logo.svg')?>" alt=""></a>
		</div>
		<div class="search120">
			<div class="ui search">
				<div class="ui left icon input swdh10">
					<input class="prompt srch10" type="text" placeholder="Search across your channel">
					<i class='uil uil-search-alt icon icon1'></i>
				</div>
			</div>
		</div>
		<div class="header_right">
			<ul>
				<li>
					<a href="index.html" class="option_links"><i class='uil uil-home-alt'></i><span
							class="noti_count">9+</span></a>
				</li>
				<li class="ui dropdown">
					<a href="#" class="option_links"><i class='uil uil-envelope-alt'></i><span
							class="noti_count">3</span></a>
					<div class="menu dropdown_ms">
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src="<?=base_url('assets/images/left-imgs/img-6.jpg')?>" alt="">
								<div class="pd_content">
									<h6>Zoena Singh</h6>
									<p>Hi! Sir, How are you. I ask you one thing please explain it about you.</p>
									<span class="nm_time">2 min ago</span>
								</div>
							</div>
						</a>
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src="<?=base_url('assets/images/left-imgs/img-5.jpg')?>" alt="">
								<div class="pd_content">
									<h6>Joy Dua</h6>
									<p>Hello, You paid my course tutoria error solved.</p>
									<span class="nm_time">10 min ago</span>
								</div>
							</div>
						</a>
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src="<?=base_url('assets/images/left-imgs/img-8.jpg')?>" alt="">
								<div class="pd_content">
									<h6>Jass</h6>
									<p>Thanks dear, for purchased my course.</p>
									<span class="nm_time">25 min ago</span>
								</div>
							</div>
						</a>
						<a class="vbm_btn" href="student_messages.html">View All <i class='uil uil-arrow-right'></i></a>
					</div>
				</li>
				<li class="ui dropdown">
					<a href="#" class="option_links"><i class='uil uil-bell'></i><span class="noti_count">3</span></a>
					<div class="menu dropdown_mn">
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src="<?=base_url('assets/images/left-imgs/img-1.jpg')?>" alt="">
								<div class="pd_content">
									<h6>Rock William</h6>
									<p>Like Your Comment On Video <strong>How to create sidebar menu</strong>.</p>
									<span class="nm_time">2 min ago</span>
								</div>
							</div>
						</a>
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src="<?=base_url('assets/images/left-imgs/img-2.jpg')?>" alt="">
								<div class="pd_content">
									<h6>Jassica Smith</h6>
									<p>Added Your New Review In Course <strong>Full Stack PHP Developer</strong>.</p>
									<span class="nm_time">12 min ago</span>
								</div>
							</div>
						</a>
						<a href="#" class="channel_my item">
							<div class="profile_link">
								<img src="<?=base_url('assets/images/left-imgs/img-9.jpg')?>" alt="">
								<div class="pd_content">
									<p> Reply your comment on this course <strong>Bootstrap Full Tutorial</strong>.</p>
									<span class="nm_time">20 min ago</span>
								</div>
							</div>
						</a>
						<a class="vbm_btn" href="student_notifications.html">View All <i
								class='uil uil-arrow-right'></i></a>
					</div>
				</li>
				<li class="ui dropdown">
					<a href="#" class="opts_account">
						<img src="<?=base_url('assets/images/left-imgs/img-1.jpg')?>" alt="">
					</a>
					<div class="menu dropdown_account">
						<div class="channel_my">
							<div class="profile_link">
								<img src="<?=base_url('assets/images/left-imgs/img-1.jpg')?>" alt="">
								<div class="pd_content">
									<div class="rhte85">
										<h6>John Doe</h6>
									</div>
									<span>Johndoe@gmail.com</span>
								</div>
							</div>
							<a href="my_student_profile_view.html" class="dp_link_12">View Student Profile</a>
						</div>
						<div class="night_mode_switch__btn">
							<a href="#" id="night-mode" class="btn-night-mode">
								<i class="uil uil-moon"></i> Night mode
								<span class="btn-night-mode-switch">
									<span class="uk-switch-button"></span>
								</span>
							</a>
						</div>
						<a href="student_dashboard.html" class="item channel_item">Cursus Dashboard</a>
						<a href="setting.html" class="item channel_item">Setting</a>
						<a href="help.html" class="item channel_item">Help</a>
						<a href="feedback.html" class="item channel_item">Send Feedback</a>
						<a href="<?=base_url('auth/logout')?>" class="item channel_item">Sign Out</a>
					</div>
				</li>
			</ul>
		</div>
	</header>
	<!-- Header End -->
	<?php $f = $this->uri->segment(1);
		  $s = $this->uri->segment(2);
	$baseu = base_url();
	$curl = current_url();
	function ractive($u,$p){ echo $u==$p ? ' active' : ''; }
	function ractivemutli($s,$pages){
		if (in_array($s, $pages)){
			echo ' active';
		}else{ echo ''; }
	} ?>
	<!-- Left Sidebar Start -->
	<nav class="vertical_nav">
		<div class="left_section menu_left" id="js-menu">
			<div class="left_section">
				<ul>
					<li class="menu--item">
						<a href="<?=base_url()?>" class="menu--link<?=ractive($curl,$baseu)?>" title="Dashboard">
							<i class="uil uil-apps menu--icon"></i>
							<span class="menu--label">Dashboard</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="<?=base_url('p/certificates')?>"class="menu--link<?=ractive($s,"certificates")?>" title="My Certificates">
							<i class='uil uil-award menu--icon'></i>
							<span class="menu--label">My Certificates</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="student_courses.html" class="menu--link" title="Courses">
							<i class='uil uil-book-alt menu--icon'></i>
							<span class="menu--label">Purchased Courses</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="student_messages.html" class="menu--link" title="Messages">
							<i class='uil uil-comments menu--icon'></i>
							<span class="menu--label">Messages</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="student_notifications.html" class="menu--link" title="Notifications">
							<i class='uil uil-bell menu--icon'></i>
							<span class="menu--label">Notifications</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="student_all_reviews.html" class="menu--link" title="Reviews">
							<i class='uil uil-star menu--icon'></i>
							<span class="menu--label">Reviews</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="student_credits.html" class="menu--link" title="Credits">
							<i class='uil uil-wallet menu--icon'></i>
							<span class="menu--label">Credits</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="student_statements.html" class="menu--link" title="Statements">
							<i class='uil uil-file-alt menu--icon'></i>
							<span class="menu--label">Statements</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="left_section pt-2">
				<ul>
					<li class="menu--item">
						<a href="setting.html" class="menu--link" title="Setting">
							<i class='uil uil-cog menu--icon'></i>
							<span class="menu--label">Setting</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="feedback.html" class="menu--link" title="Send Feedback">
							<i class='uil uil-comment-alt-exclamation menu--icon'></i>
							<span class="menu--label">Send Feedback</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Left Sidebar End -->
	