<script>const blogid = <?=$blogid?>;</script>
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
                <div class="blog-wrapper single-blog-wrapper">
                    <div class="blog-title">
                        <a class="category_title" href="#" title="<?=$blog['subcat_name']?>"><?=$blog['subcat_name']?></a>
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
                            <a href="#"><span style="margin: 0;" class="ccomment"><?=$blog['comments']?></span> Comments</a>
                            </span>
                            <span>
                            <i class="fa fa-eye"></i>
                            <a href="#"><?=$blog['views']?> Views</a>
                            </span>
                            <span>
                            <i class="fa fa-clock-o"></i>
                            <a href="#"><?=date('d M Y',strtotime($blog['timestamp']))?></a>
                            </span>
                        </div>
                    </div><!-- end blog-title -->
                    <div class="blog-image">
                        <a href="single.html" title=""><img src="upload/blog_01.jpg" alt="" class="img-responsive"></a>
                    </div><!-- end image -->
                    <div class="blog-desc">
                        <p>
                            <?=$blog['blog_details']?>
                        </p>

                    </div><!-- end desc -->
                </div><!-- end blog-wrapper -->

                <hr class="invis">

                <div class="blog-wrapper comment-wrapper">
                    <div id="reviews" class="feedbacks">
                        <h3>
                            What others say about this post? (<span class="ccomment"><?=$blog['comments']?></span> Comments)
                        </h3>
                        <div>
                            <div class="well">

                                <div id="blog_commets">
                                    <p><center>No Comment found</center></p>
                                </div>

                                <div class="content-widget">
                                    <div class="widget-title">
                                        <h4>Leave a Comment</h4>
                                        <hr>
                                    </div>

                                    <div class="commentform">
                                        <p>Please Leave a comment here...</p>
                                        <form id="formid">
                                            <input type="hidden" name="blogid" value="<?=$blogid?>">
                                            <input type="text" class="form-control" name="pname" placeholder="Your name">
                                            <textarea type="text" class="form-control" name="pcomment" placeholder="Message goes here"></textarea>
                                            <input type="submit" value="Send Comment" class="addcomment btn btn-primary btn-block" />
                                        </form>
                                    </div><!-- end newsletter -->
                                </div><!-- end widget -->

                            </div><!-- end well -->
                        </div><!-- end collapse -->
                    </div><!-- end reviews -->
                </div><!-- end blog-wrapper -->
    
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