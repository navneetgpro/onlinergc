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
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/toastr.min.css')?>">

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
                                <a href="<?=base_url('d/signin')?>" ><i class="fa fa-lock"></i> Login & Register</a>
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
                                <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url('assets/f/images/logo.png')?>" alt=""></a>
                            </div>
                        </div><!-- end navbar-header -->
            
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a class="<?=ractive($curl,$baseu)?>" href="<?=base_url()?>">Home</a></li>
                                <li><a class="<?=ractivemutli($s,['about'])?>" href="<?=base_url('p/about')?>">About</a></li>
                                <li><a class="<?=ractivemutli($s,['courses','course'])?>" href="<?=base_url('p/courses')?>">Courses</a></li>
                                <li><a class="<?=ractivemutli($s,['faq'])?>" href="<?=base_url('p/faq')?>">FAQ</a></li>
                                <li><a class="<?=ractivemutli($s,['blogs','blog'])?>" href="<?=base_url('p/blogs')?>">Blog</a></li>
                                <li><a class="<?=ractivemutli($s,['contact'])?>" href="<?=base_url('p/contact')?>">Contact</a></li>
                            </ul><!-- end nav navbar-nav -->
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="btn btn-primary" href="<?=base_url('d/signup')?>"><i class="fa fa-sign-in"></i> Register Now</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!-- end navbar navbar-default clearfix -->
                </div><!-- end menu 1 -->  
            </div><!-- end container -->
		</header><!-- end header -->