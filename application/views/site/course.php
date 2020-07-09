<section class="grey page-title">
    <div class="container">
        <div class="row">  
            <div class="col-md-6 text-left">
                <h1>Course Details</h1>
            </div><!-- end col -->
            <div class="col-md-6 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li class="active">Course Details</li>
                    </ol>
                </div><!-- end bread -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="white section">
    <div class="container">
        <div class="row">
            <div id="course-left-sidebar" class="col-md-4">
                <div class="course-image-widget">
                    <img src="upload/course_01.png" alt="" class="img-responsive">
                </div><!-- end image widget -->
                <div class="course-meta">
                    <p class="course-category">Category : <a href="#"><?=$course['subcategory_name']?></a></p>
                    <hr>
                    <div class="rating">
                        <p>Reviews : &nbsp;
                        <?php foreach (range(1,5) as $row) {
                            $o=$row>$course['star_rate']?'-o':null;
                            echo '<i class="fa fa-star'.$o.'"></i>';
                        } ?>
                        <a title="" href="#reviews">&nbsp; (<?=$course['star_rate']?>)</a></p>
                    </div><!-- end rating -->
                    <hr>
                    <p class="course-student">Students : <?=$course['students']?> Members </p>
                    <hr>
                    <p class="course-prize">Prize : Rs <?=$course['sale_price']?> <del>Rs <?=$course['actual_price']?></del></p>
                    <hr>
                    <p class="course-instructors">Instructor : <a href="#" title=""><img src="<?=base_url('assets/f/upload/student_01.png')?>" class="img-circle" alt=""> Admin</a></p>
                    <hr>
                    <p class="course-forum">Course Forum : <a href="#" title=""><?=$course['category_name']?></a></p>
                </div><!-- end meta -->
                <div class="course-button">
                    <a href="#" class="btn btn-primary btn-block">TAKE THIS COURSE</a>
                </div>
            </div><!-- end col -->

            <div id="course-content" class="col-md-8">
                <div class="course-description">
                    <small>Students: <span><?=$course['students']?> Members</span> </small>
                    <small>Course Price: <span>Rs <?=$course['sale_price']?> <del>Rs <?=$course['actual_price']?></span> </small>
                    <h3 class="course-title"><?=$course['course_title']?></h3>
                    <p><?=$course['description']?></p>
                </div><!-- end desc -->

                <div class="course-table">
                    <h4>Course Lessons</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Lesson Title</th>
                                <th>Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fa fa-play-circle"></i></td>
                                <td><a href="#">Introduction</a></td>
                                <td>12 Min</td>
                                <td><i class="fa fa-check"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-play-circle"></i></td>
                                <td>Lesson One - What is Photoshop</td>
                                <td>20 Min</td>
                                <td><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-play-circle"></i></td>
                                <td>Lesson Two - How to Use Tools</td>
                                <td>41 Min</td>
                                <td><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-play-circle"></i></td>
                                <td>Lesson Three - Creating First Homepage</td>
                                <td>15 Min</td>
                                <td><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-play-circle"></i></td>
                                <td>Lesson Four - Understanding Colors</td>
                                <td>29 Min</td>
                                <td><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-play-circle"></i></td>
                                <td>Lesson Five - International Sizes</td>
                                <td>31 Min</td>
                                <td><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-question-circle"></i></td>
                                <td><a href="course-quiz.html">Quiz Time - Your First Quiz</a></td>
                                <td>31 Min</td>
                                <td><i class="fa fa-close"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- end course-table -->

                <hr class="invis">

                <div id="reviews" class="feedbacks">
                    <!-- <p>
                        <a class="btn btn-default btn-block" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        What our customers said? (3 Feedbacks)
                        </a>
                    </p> -->
                    <?php if(1==2){ ?>
                    <div class="collapse" id="collapseExample">
                        <div class="well">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="upload/student_01.png" alt="Generic placeholder image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">John DOE</h4>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div><!-- end rating -->
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div><!-- end media -->

                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="upload/student_02.png" alt="Generic placeholder image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Amanda FOXOE</h4>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div><!-- end rating -->
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div><!-- end media -->

                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="upload/student_03.png" alt="Generic placeholder image">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">Mark BOBS</h4>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!-- end rating -->
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                </div>
                            </div><!-- end media -->
                        </div><!-- end well -->
                    </div><!-- end collapse -->
                    <?php } ?>
                </div><!-- end reviews -->
                <div class="other-courses">
                    <img src="images/others.png" alt="" class="">
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        <hr class="invis">
        <?php if(1==2){ ?>
        <div id="owl-featured" class="owl-custom">
            <div class="owl-featured">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="upload/course_01.png" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title clearfix">
                        <h4><a href="course-single.html">Learn Web Design & Development</a></h4>
                        <div class="shopmeta">
                            <span class="pull-left">12 Student</span>
                            <div class="rating pull-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- end rating -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item-title -->
                    <div class="visible-buttons">
                        <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                        <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
                    </div><!-- end buttons -->
                </div><!-- end relative -->
            </div><!-- end col -->

            <div class="owl-featured">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="upload/course_02.png" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title clearfix">
                        <h4><a href="course-single.html">Graphic Design & Logo Mockups Course</a></h4>
                        <div class="shopmeta">
                            <span class="pull-left">21 Student</span>
                            <div class="rating pull-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div><!-- end rating -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item-title -->
                    <div class="visible-buttons">
                        <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                        <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
                    </div><!-- end buttons -->
                </div><!-- end relative -->
            </div><!-- end col -->

            <div class="owl-featured">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="upload/course_03.png" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title clearfix">
                        <h4><a href="course-single.html">Social Media Network & Marketing</a></h4>
                        <div class="shopmeta">
                            <span class="pull-left">98 Student</span>
                            <div class="rating pull-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div><!-- end rating -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item-title -->
                    <div class="visible-buttons">
                        <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                        <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
                    </div><!-- end buttons -->
                </div><!-- end relative -->
            </div><!-- end col -->

            <div class="owl-featured">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="upload/course_04.png" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title clearfix">
                        <h4><a href="course-single.html">WordPress Blogging, Tumblr and Blogger</a></h4>
                        <div class="shopmeta">
                            <span class="pull-left">98 Student</span>
                            <div class="rating pull-right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div><!-- end rating -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item-title -->
                    <div class="visible-buttons">
                        <a title="Add to Cart" href="page-shop-cart.html"><span class="fa fa-cart-arrow-down"></span></a>
                        <a title="Read More" href="course-single.html"><span class="fa fa-search"></span></a>
                    </div><!-- end buttons -->
                </div><!-- end relative -->
            </div><!-- end col -->
        </div><!-- end owl-featured -->
        <?php } ?>
    </div><!-- end container -->
</section><!-- end section -->