<section class="grey section">
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-8 col-sm-8 col-xs-12">
                <div class="blog-wrapper">
                    <div class="row second-bread">  
                        <div class="col-md-6 text-left">
                            <h1>Blog & News</h1>
                        </div><!-- end col -->
                        <div class="col-md-6 text-right">
                            <div class="bread">
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Blog</li>
                                </ol>
                            </div><!-- end bread -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end blog-wrapper -->

                <?php $p=false; foreach($listblogs as $blog){ $p=true; ?>
                <div class="blog-wrapper">
                    <div class="blog-title">
                        <a class="category_title" href="#" title=""><?=$blog['subcat_name']?></a>
                        <h2><a href="single.html" title=""><?=$blog['blog_title']?></a></h2>
                        <div class="post-meta">
                            <span>
                            <i class="fa fa-user"></i>
                            <a href="#"><?=$thisvar->blog->blog_by($blog['created_by'])?></a>
                            </span>
                            <span>
                            <i class="fa fa-tag"></i>
                            <a href="#"><?=$blog['category_name']?></a>
                            </span>
                            <span>
                            <i class="fa fa-comments"></i>
                            <a href="#"><?=$blog['comments']?> Comments</a>
                            </span>
                            <span>
                            <i class="fa fa-eye"></i>
                            <a href="#"><?=$blog['views']?> Views</a>
                            </span>
                        </div>
                    </div><!-- end blog-title -->
                    <div class="blog-image">
                        <a href="single.html" title=""><img src="upload/blog_01.jpg" alt="" class="img-responsive"></a>
                    </div><!-- end image -->
                    <div class="blog-desc">
                        <div class="post-date">
                            <span class="day"><?=date('d',strtotime($blog['timestamp']))?></span>
                            <span class="month"><?=date('M',strtotime($blog['timestamp']))?></span>
                        </div>
                        <p><?=empty($blog['blog_details'])?'No details...':desc_shorter($blog['blog_details'])?></p>
                        <a href="<?=base_url('p/blog/'.$blog['id'])?>" class="readmore">Read More</a>
                    </div><!-- end desc -->
                </div><!-- end blog-wrapper -->
                <?php } if(count($listblogs)==0){ ?>
                <div class="col-lg-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <div class="text-center"><h2>No Blogs Found..</h2></div>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <hr class="invis">
                <nav class="text-center">
                <?php if($p){ echo $this->pagination->create_links(); } ?>
                </nav>
                <?php function desc_shorter($text, $chars_limit=280){
                    $text = strip_tags($text);
                    if (strlen($text) > $chars_limit){
                        $new_text = substr($text, 0, $chars_limit);
                        $new_text = trim($new_text);
                        return $new_text . "...";
                    }else{ return $text; }
                } ?>
            </div><!-- end content -->

            <div id="sidebar" class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget">
                    <div class="searchform">
                        <form>
                            <input type="text" class="form-control" placeholder="What you are looking for?">
                        </form>
                    </div><!-- end newsletter -->
                </div><!-- end widget -->

                <div class="widget">
                    <div class="widget-title">
                        <h4>Subscribe Us</h4>
                        <hr>
                    </div>

                    <div class="newsletter">
                        <p>Subscribe to our weekly Newsletter and stay tuned and get more freebies.</p>
                        <form>
                            <input type="text" class="form-control" placeholder="Enter your email here...">
                            <input type="submit" value="Subscribe Now!" class="btn btn-primary btn-block" />
                        </form>
                    </div><!-- end newsletter -->
                </div><!-- end widget -->

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
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->
