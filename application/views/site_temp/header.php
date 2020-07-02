<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="keywords" content="">

	<title>OnlineRGC | Online Learning PlateForm</title>

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-180x180.png" />

    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/f/rs-plugin/css/settings.css')?>" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/f/fonts/font-awesome-4.3.0/css/font-awesome.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/f/css/bootstrap.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/f/css/animate.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/f/css/menu.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/f/css/carousel.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/f/style.css')?>">

	<!-- COLORS -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/f/css/custom.css')?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		
</head>
<body>

    <div id="loader">
        <div class="loader-container">
            <img src="images/site.gif" alt="" class="loader-site">
        </div>
    </div>

	<div id="wrapper">
		<div class="topbar">
        	<div class="container">
        		<div class="row">
	                <div class="col-md-6 text-left">
	                    <p><i class="fa fa-graduation-cap"></i> Best learning management template for ever.</p>
					</div><!-- end left -->

	                <div class="col-md-6 text-right">
						<ul class="list-inline">
                            <li>
                                <a class="social" href="#"><i class="fa fa-facebook"></i></a> 
                                <a class="social" href="#"><i class="fa fa-twitter"></i></a> 
                                <a class="social" href="#"><i class="fa fa-google-plus"></i></a> 
                                <a class="social" href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-lock"></i> Login & Register</a>
                                <div class="dropdown-menu">
                                    <form method="post"> 
                                        <div class="form-title">
                                            <h4>Login Area</h4>
                                            <hr>
                                        </div>
                                        <input class="form-control" type="text" name="username" placeholder="User Name"> 
                                        <div class="formpassword">
                                            <input class="form-control" type="password" name="password" placeholder="******"> 
                                        </div>
                                        <div class="clearfix"></div>
                                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                                        <hr>
                                        <h4><a href="#">Create an Account</a></h4>
                                    </form> 
                                </div>
                            </li>
                        </ul>
					</div><!-- end right -->
				</div><!-- end row -->
        	</div><!-- end container -->
		</div><!-- end topbar -->
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
        <header class="header">
            <div class="container">
                <div class="hovermenu ttmenu">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="logo">
                                <a class="navbar-brand" href="index-2.html"><img src="images/logo.png" alt=""></a>
                            </div>
                        </div><!-- end navbar-header -->
            
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Home <b class="fa fa-angle-down"></b></a>
                                    <ul class="dropdown-menu menu-bg wbg">
                                        <li>
                                        <div class="ttmenu-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="box">
                                                        <ul>
                                                            <li><a href="index1.html">Home Version 1</a></li>
                                                            <li><a href="index2.html">Home Version 2</a></li>
                                                            <li><a href="index3.html">Home Version 3</a></li>
                                                            <li><a href="index4.html">Home Version 4</a></li>
                                                            <li><a href="index5.html">Home Version 5</a></li>
                                                            <li><a href="index6.html">Home Version 6</a></li>
                                                            <li><a href="index7.html">Home Version 7</a></li>
                                                        </ul>
                                                    </div><!-- end box -->
                                                </div><!-- end col -->
                                                <div class="col-md-6">
                                                    <div class="box">
                                                        <ul>
                                                            <li><a href="index8.html">Home Version 8</a></li>
                                                            <li><a href="index9.html">Home Version 9</a></li>
                                                            <li><a href="index10.html">Home Version 10</a></li>
                                                        </ul>
                                                    </div><!-- end box -->
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end ttmenu-content -->
                                        </li>
                                    </ul>
                                </li><!-- end mega menu -->
                                <li><a href="page-about.html">About</a></li>
                                <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Courses <b class="fa fa-angle-down"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                        <div class="ttmenu-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="box">
                                                        <ul>
                                                            <li><a href="course-list.html">Courses List</a></li>
                                                            <li><a href="course-grid.html">Courses Grid</a></li>
                                                            <li><a href="course-filterable.html">Courses Filterable</a></li>
                                                            <li><a href="course-single.html">Single Course</a></li>
                                                            <li><a href="course-quiz.html">Take a Quiz</a></li>
                                                            <li><a href="course-achievements.html">Achievements</a></li>
                                                        </ul>
                                                    </div><!-- end box -->
                                                </div><!-- end col -->
                                                <div class="col-md-6">
                                                    <div class="box">
                                                        <ul>
                                                            <li><a href="course-instructors.html">Course Instructors</a></li>
                                                            <li><a href="forums.html">Community Forums</a></li>
                                                            <li><a href="course-login.html">Login & Register</a></li>
                                                            <li><a href="course-account.html">Edit Your Account</a></li>
                                                            <li><a href="course-testimonials.html">Happy Students</a></li>
                                                            <li><a href="course-faqs.html">Friendly Asked Questions</a></li>
                                                        </ul>
                                                    </div><!-- end box -->
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                            <hr>
											<div class="row">
                                                <div class="col-md-3 col-sm-6 nopadding">
													<img class="img-thumbnail" src="upload/service_01.png" alt="">
                                                </div>
                                                <div class="col-md-3 col-sm-6 nopadding">
													<img class="img-thumbnail" src="upload/service_02.png" alt="">
                                                </div>
                                                <div class="col-md-3 col-sm-6 nopadding">
													<img class="img-thumbnail" src="upload/service_03.png" alt="">
                                                </div>
                                                <div class="col-md-3 col-sm-6 nopadding">
													<img class="img-thumbnail" src="upload/service_04.png" alt="">
                                                </div>
                                            </div><!-- end row -->
                                        </div><!-- end ttmenu-content -->
                                        </li>
                                    </ul>
                                </li><!-- end mega menu -->
                                <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Features <b class="fa fa-angle-down"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                        <div class="ttmenu-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="box">
                                                        <ul>
                                                            <li><a href="page-services.html">Our Services</a></li>
                                                            <li><a href="page-contact.html">Contact Us</a></li>
                                                            <li><a href="page-pricing.html">Pricing Tables</a></li>
                                                            <li><a href="page-shortcodes.html">Shortcodes</a></li>
                                                            <li><a href="page-typography.html">Typography</a></li>
                                                            <li><a href="page-fullwidth.html">Page Fullwidth</a></li>
                                                            <li><a href="page-sidebar.html">Page Sidebar</a></li>
                                                        </ul>
                                                    </div><!-- end box -->
                                                </div><!-- end col -->
                                                <div class="col-md-6">
                                                    <div class="box">
                                                        <ul>
                                                            <li><a href="page-shop.html">Shop Layout</a></li>
                                                            <li><a href="page-shop-single.html">Shop Single</a></li>
                                                            <li><a href="page-shop-single-alt.html">Shop Single Alt</a></li>
                                                            <li><a href="page-shop-cart.html">Shopping Cart</a></li>
                                                            <li><a href="blog.html">Blog & News</a></li>
                                                            <li><a href="single.html">Single Blog</a></li>
                                                            <li><a href="page-not-found.html">404 - Not Found</a></li>
                                                        </ul>
                                                    </div><!-- end box -->
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </div><!-- end ttmenu-content -->
                                        </li>
                                    </ul>
                                </li><!-- end mega menu -->
                                <li><a href="forums.html">Community</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a class="<?=ractivemutli($s,['contact'])?>" href="<?=base_url('p/contact')?>">Contact</a></li>
                            </ul><!-- end nav navbar-nav -->
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="btn btn-primary" href="course-login.html"><i class="fa fa-sign-in"></i> Register Now</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!-- end navbar navbar-default clearfix -->
                </div><!-- end menu 1 -->  
            </div><!-- end container -->
		</header><!-- end header -->