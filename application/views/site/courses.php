<section class="grey page-title">
    <div class="container">
        <div class="row">  
            <div class="col-md-6 text-left">
                <h1>All Courses</h1>
            </div><!-- end col -->
            <div class="col-md-6 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li class="active">All Courses</li>
                    </ol>
                </div><!-- end bread -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->
<?php function series($c=2){
    $v=[]; foreach (range(0,$c) as $n) {
        $v[] = 4*$n+1;
    } return $v;
} ?>
<section class="white section">
    <div class="container">
        <div class="row course-list">
            <?php $c=0; $g=series(count($coursesarr));
            foreach ($coursesarr as $course) { $c++; ?>
            <div class="col-md-3 col-sm-6 col-xs-12<?=in_array($c,$g)?" first":null?>">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="<?=base_url('assets/images/courses/'.$course['banner_img'])?>" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title clearfix">
                        <h4><a href="<?=base_url('p/course/'.$course['id'])?>"><?=$course['course_title']?></a></h4>
                        <div class="shopmeta">
                            <span class="pull-left"><strong>Rs <?=$course['sale_price']?></strong> <del>Rs <?=$course['actual_price']?></del></span>
                            <div class="rating pull-right">
                            <?php foreach (range(1,5) as $row) {
                                $o=$row>$course['star_rate']?'-o':null;
                                echo '<i class="fa fa-star'.$o.'"></i>';
                            } ?>
                            </div><!-- end rating -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item-title -->
                    <div class="visible-buttons">
                        <a title="Buy Course" href="#"><span class="fa fa-cart-arrow-down"></span></a>
                        <a title="Read More" href="<?=base_url('p/course/'.$course['id'])?>"><span class="fa fa-search"></span></a>
                    </div><!-- end buttons -->
                </div><!-- end relative -->
            </div><!-- end col -->
            <?php } if(count($coursesarr)==0){ ?>
            <div class="col-lg-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="text-center"><h2>No Course Found..</h2></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div><!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <nav class="text-center">
                <?php if($c>0){ echo $this->pagination->create_links(); } ?>
                </nav>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="grey section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h4>Happy Students</h4>
                    <p>What Our Students Say About LearnPLUS</p>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="testimonial">
                    <img class="alignleft img-circle" src="upload/student_01.png" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing and industry. </p>
                    <div class="testimonial-meta">
                    <h4>John DOE <small><a href="#">envato.com</a></small></h4>
                    </div>
                </div><!-- end dmbox -->
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="testimonial">
                    <img class="alignleft img-circle" src="upload/student_02.png" alt="">
                    <p>Lorem Ipsum is simply dummy text of the most popular items.</p>
                    <div class="testimonial-meta">
                    <h4>Jenny Anderson <small><a href="#">photodune.com</a></small></h4>
                    </div>
                </div><!-- end dmbox -->
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="testimonial">
                    <img class="alignleft img-circle" src="upload/student_03.png" alt="">
                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    <div class="testimonial-meta">
                    <h4>Mark BOBS <small><a href="#">tutsplus.com</a></small></h4>
                    </div>
                </div><!-- end dmbox -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->

        <div class="button-wrapper text-center">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since<br> the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
            <a href="#" class="btn btn-default border-radius"><i class="fa fa-sign-in"></i> Join Us Today</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" class="btn btn-primary"><i class="fa fa-download"></i> Download PDF</a> 
        </div><!-- end button-wrapper -->

    </div><!-- end container -->
</section><!-- end section -->