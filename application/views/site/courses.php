<section class="grey page-title">
    <div class="container">
        <div class="row">  
            <div class="col-md-6 text-left">
                <h1>Course List Page</h1>
            </div><!-- end col -->
            <div class="col-md-6 text-right">
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li class="active">Course List Page</li>
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
            <?php $c=0; $g=series(4);
            foreach (range(1,5) as $key => $value) { $c++; ?>
            <div class="col-md-3 col-sm-6 col-xs-12<?=in_array($c,$g)?" first":null?>">
                <div class="shop-item-list entry">
                    <div class="">
                        <img src="<?=base_url('assets/f/upload/course_01.png')?>" alt="">
                        <div class="magnifier">
                        </div>
                    </div>
                    <div class="shop-item-title clearfix">
                        <h4><a href="<?=base_url('p/course/1')?>">Learn Web Design & Development</a></h4>
                        <?php $rate = mt_rand(1,5); ?>
                        <div class="shopmeta">
                            <span class="pull-left"><strong>Rs 599</strong> <del>Rs 1299</del></span>
                            <div class="rating pull-right">
                            <?php foreach (range(1,5) as $row) {
                                $o=$row>$rate?'-o':null;
                                echo '<i class="fa fa-star'.$o.'"></i>';
                            } ?>
                            </div><!-- end rating -->
                        </div><!-- end shop-meta -->
                    </div><!-- end shop-item-title -->
                    <div class="visible-buttons">
                        <a title="Add to Cart" href="#"><span class="fa fa-cart-arrow-down"></span></a>
                        <a title="Read More" href="<?=base_url('p/course/1')?>"><span class="fa fa-search"></span></a>
                    </div><!-- end buttons -->
                </div><!-- end relative -->
            </div><!-- end col -->
            <?php } ?>
        </div><!-- end row -->

        <div class="row">
            <div class="col-md-12">
                <nav class="text-center">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
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