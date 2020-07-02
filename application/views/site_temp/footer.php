<footer class="dark footer section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>About LearnPLUS</h4>
                                <hr>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took...</p>

                            <a href="#" class="btn btn-default">Read More</a>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Recent Tweets</h4>
                                <hr>
                            </div>
                            <div class="twitter-widget">
                                <ul class="latest-tweets">
                                    <li>
                                        <p><a href="#" title="">@Mark</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
                                        <span>2 hours ago</span>
                                    </li>
                                    <li>
                                        <p><a href="#" title="">@Envato</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam.</p>
                                        <span>2 hours ago</span>
                                    </li>
                                </ul><!-- end latest-tweet -->
                            </div><!-- end twitter-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Popular Courses</h4>
                                <hr>
                            </div>

                            <ul class="popular-courses">
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/service_01.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/service_02.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/service_03.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/service_04.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/service_05.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/service_06.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/service_07.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/service_08.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="single-course.html" title=""><img class="img-thumbnail" src="upload/service_09.png" alt=""></a>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Contact Details</h4>
                                <hr>
                            </div>

                            <ul class="contact-details">
                                <li><i class="fa fa-link"></i> <a href="#">www.yoursite.com</a></li>
                                <li><i class="fa fa-envelope"></i> <a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                                <li><i class="fa fa-phone"></i> +90 123 45 67</li>
                                <li><i class="fa fa-fax"></i> +90 123 45 68</li>
                                <li><i class="fa fa-home"></i> Envato INC 22 Elizabeth Str. Melbourne. Victoria 8777.</li>
                            </ul>

                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end section -->

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <p>© 2015 LearnPLUS Pty Ltd. by <a href="#">Template Visual</a></p>
                    </div><!-- end col -->
                    <div class="col-md-6 text-right">
                        <ul class="list-inline">
                            <li><a href="#">Terms of Usage</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>

                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
	</div><!-- end wrapper -->
    <?php $f = $this->uri->segment(1);
		  $s = $this->uri->segment(2);
	$baseu = base_url();
    $curl = current_url();
    function ractiveb($u,$p){ return $u==$p ? true : false; }
	function footerjs($s,$pages){
		if (in_array($s, $pages)){
			return true;
		}else{ return false; }
	} ?>
	<script src="<?=base_url('assets/f/js/jquery.min.js')?>"></script>
	<script src="<?=base_url('assets/f/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('assets/f/js/retina.js')?>"></script>
    <script src="<?=base_url('assets/f/js/wow.js')?>"></script>
    <script src="<?=base_url('assets/f/js/carousel.js')?>"></script>
    <!-- CUSTOM PLUGINS -->
    <script src="<?=base_url('assets/f/js/custom.js')?>"></script>
    <?php if(ractiveb($curl,$baseu)){ ?>
     <!-- SLIDER REV -->
     <script src="<?=base_url('assets/f/rs-plugin/js/jquery.themepunch.tools.min.js')?>"></script>
    <script src="<?=base_url('assets/f/rs-plugin/js/jquery.themepunch.revolution.min.js')?>"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
            {
            dottedOverlay:"none",
            delay:16000,
            startwidth:1170,
            startheight:620,
            hideThumbs:200,     
            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,  
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview3",  
            touchenabled:"on",
            onHoverStop:"on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,          
            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
            parallaxDisableOnMobile:"off",           
            keyboardNavigation:"off",   
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,
            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,
            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,  
            shadow:0,
            fullWidth:"on",
            fullScreen:"off",
            spinner:"spinner4",  
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",  
            autoHeight:"off",           
            forceFullWidth:"off",                         
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,            
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            fullScreenOffsetContainer: ""  
            }); 
        });
    </script>

    <script src="js/bxslider.js"></script>
    <script type="text/javascript">
    /* ==============================================
        Vertical Carousel
    =============================================== */
    (function($) {
    "use strict";
        $('.bxslider').bxSlider({
            mode: 'vertical',
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 0,
            pager: false,
            nextText:  '<i class="fa fa-arrow-down"></i>',
            prevText:  '<i class="fa fa-arrow-up"></i>',
            speed: 1000,
            auto: true
        });
    })(jQuery);
    </script>
    <?php }
    if(footerjs($s,['contact'])){ ?>
    <script src="//maps.google.com/maps/api/js?sensor=false"></script>
    <script src="<?=base_url('assets/f/js/contact.js')?>"></script>
    <script src="<?=base_url('assets/f/js/map.js')?>"></script>
    <?php } ?>
</body>
</html>