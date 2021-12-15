<!-- template sections -->


<section class="intro_section page_mainslider ds">
    <div class="flexslider" data-nav="false">
        <ul class="slides">

            <li>
                <img src="assets/images/slide01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h2 class="text-uppercase">
                                            Protest!
                                        </h2>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h3 class="text-uppercase">
                                            It is your legal weapon
                                        </h3>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <a href="about" class="theme_button color2">Become Activist</a>
                                    </div>
                                </div>
                                <!-- eof .slide_description -->
                            </div>
                            <!-- eof .slide_description_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>

            <li>
                <img src="assets/images/slide02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h2 class="text-uppercase">
                                            Get Up!
                                        </h2>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h3 class="text-uppercase">
                                            For your rights
                                        </h3>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <a href="about" class="theme_button color2">About us</a>
                                    </div>
                                </div>
                                <!-- eof .slide_description -->
                            </div>
                            <!-- eof .slide_description_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>

            <li>
                <img src="assets/images/slide03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="slide_description_wrapper">
                                <div class="slide_description">
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h2 class="text-uppercase">
                                            Throw
                                        </h2>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <h3 class="text-uppercase">
                                            The chains of justice
                                        </h3>
                                    </div>
                                    <div class="intro-layer" data-animation="fadeInUp">
                                        <a href="contact" class="theme_button color2">Contact us</a>
                                    </div>
                                </div>
                                <!-- eof .slide_description -->
                            </div>
                            <!-- eof .slide_description_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>

        </ul>
    </div>
    <!-- eof flexslider -->

</section>

<section class="ls ms section_padding_20 top_offset_content columns_margin_bottom_20">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-6 to_animate" data-animation="fadeInUp">
                <div class="ls with_padding big-padding bg_teaser rounded">
                    <img src="assets/images/story_bg.jpg" alt="">
                    <div>
                        <h3 class="thin text-uppercase">
                            Our
                            <br>
                            <strong>story</strong>
                        </h3>
                        <p class="small-text bold darklinks">
                            <a href="about">About us</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 to_animate" data-animation="fadeInUp">
                <div class="ls with_padding big-padding bg_teaser rounded">
                    <img src="assets/images/goals_bg.jpg" alt="">
                    <div>
                        <h3 class="thin text-uppercase">
                            Our
                            <br>
                            <strong>goals</strong>
                        </h3>
                        <p class="small-text bold darklinks">
                            <a href="about">Know more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 to_animate" data-animation="fadeInUp">
                <div class="ls with_padding big-padding bg_teaser rounded">
                    <img src="assets/images/activists_bg.jpg" alt="">
                    <div>
                        <h3 class="thin text-uppercase">
                            Our
                            <br>
                            <strong>activists</strong>
                        </h3>
                        <p class="small-text bold darklinks">
                            <a href="about">Know more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_150 section_padding_bottom_10 columns_margin_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="rounded overflow_hidden">
                    <div class="with_padding gradient_bg_color heading_wrappper">
                        <h5 class="text-uppercase margin_0">Featured</h5>
                    </div>

                    <div class="with_padding with_background">

                        <div class="widget widget_slider widget_featured_posts">

                            <div class="owl-carousel" data-nav="true" data-loop="true" data-autoplay="true" data-items="1" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">
                                <?php $i=0; foreach ($posts as $data){ 
                                    if($i%3==0){ ?>
                                <ul>
                                <?php } ?>
                                    <li class="media big-left-media">
                                        <div class="media-left media-middle">
                                            <img src="assets/images/post-thumbs/<?php echo $data['media']; ?>" alt="">
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4>
                                                <a href="blog-single-right">
                                                   <?php echo $data['title']; ?>
                                                </a>
                                            </h4>
                                            <p class="small-text highlight highlightlinks">
                                                <a href="blog-single-right">Admin</a>,
                                                <a href="blog-right" >
                                                    <time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
                                                        <?php echo  $data['publish_date']; ?>
                                                    </time>
                                                </a>
                                            </p>
                                        </div>
                                    </li>
                                
                                  <?php $i++;
if($i%3==0){ ?>
                                </ul>
<?php }} ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="owl-carousel" data-responsive-lg="2" data-responsive-md="2" data-responsive-sm="1">
                    <?php foreach ($posts_main as $data_main){  ?>
                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="assets/images/gallery/<?php echo $data_main['media']; ?>" alt="">
                            <div class="media-links">
                                <a href="blog-single-right" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h4 class="entry-title">
                                    <a href="blog-single-right"> <?php echo $data_main['title']; ?></a>
                                </h4>
                            </header>
                            <div class="entry-content">
                                <p> <?php echo substr($data_main['description'], 0, 145) . ' ....'; ?></p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <p class="inline-content small-text">
								<span>
									<i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
									<a href="blog-single-right">Admin</a>
								</span>
                                <span>
									<i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
									<a href="blog-single-right">
										<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
											<?php echo  $data_main['publish_date']; ?>
										</time>
									</a>
								</span>
                            </p>
                        </footer>
                    </article>
                <?php } ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_40 section_padding_bottom_40">
    <div class="container">
        <div class="row isotope_container isotope masonry-layout columns_padding_1">
            <?php
                $count=1;
             foreach ($events as $event_data){
             if($count!=3){  ?>
            <div class="isotope-item col-md-3 col-sm-6">
                <article class="vertical-item content-absolute rounded overflow_hidden text-center">
                    <div class="item-media rounded overflow_hidden">
                        <img src="assets/images/gallery/<?php echo $event_data['media']; ?>" alt="">
                        <div class="media-links">

                        </div>
                    </div>
                    <div class="item-content darken_gradient">
                        <h4 class="entry-title margin_0"><a href="event-single-right"><?php echo $event_data['title']; ?></a></h4>
                    </div>
                </article>
            </div>
            <?php } if($count==3){ ?>
            <div class="isotope-item col-md-6 col-sm-12">
                <article class="vertical-item content-absolute rounded overflow_hidden text-center">
                    <div class="item-media rounded overflow_hidden">
                        <img src="assets/images/gallery/05.jpg" alt="">
                        <div class="media-links">

                        </div>
                    </div>
                    <div class="item-content darken_gradient ds">
                        <div id="comingsoon-countdown"></div>
                        <h3 class="entry-title bottommargin_10"><a href="event-single-right">Our Next Activity</a></h3>
                        <div class="entry-meta inline-content small-text darklinks">
                                        <span>
                                            <i class="fa fa-map-marker rightpadding_5 highlight" aria-hidden="true"></i>
                                            <a href="event-single-right">Lowes Alley, Thornville, OH</a>
                                        </span>
                            <span>
                                            <i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
                                            <span class="grey">08:00 AM - 05:00 PM</span>
                                        </span>
                        </div>
                    </div>
                </article>
            </div>

        <?php $count++; }} ?>
        </div>
    </div>
</section>

<section class="ls section_padding_top_30 section_padding_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-carousel" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2">
                    <?php foreach ($posts_up_banner as $data_up_banner){  ?>
                    <article class="vertical-item content-padding text-center with_border rounded">
                        <div class="item-media top_rounded overflow_hidden">
                            <img src="assets/images/gallery/<?php echo  $data_up_banner['media']; ?>" alt="">
                            <div class="media-links">
                                <a href="blog-single-right" class="abs-link"></a>
                            </div>
                        </div>
                        <div class="item-content">
                            <header class="entry-header">
                                <h4 class="entry-title">
                                    <a href="blog-single-right"><?php echo  $data_up_banner['title']; ?></a>
                                </h4>
                            </header>
                            <div class="entry-content">
                                <p><?php echo substr($data_up_banner['description'], 0, 400) . ' ....'; ?></p>
                            </div>
                        </div>
                        <footer class="entry-meta with_top_border darklinks">
                            <p class="inline-content small-text">
								<span>
									<i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
									<a href="blog-single-right">Admin</a>
								</span>
                                <span>
									<i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
									<a href="blog-single-right">
										<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
											<?php echo  $data_up_banner['publish_time']; ?>
										</time>
									</a>
								</span>
                            </p>
                        </footer>
                    </article>
                <?php  } ?>
                    </div>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_30 section_padidng_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <section class="intro_section ds gradient_bg_color2 transp_image rounded">
                    <div class="flexslider" data-nav="false">
                        <ul class="slides">

                            <li>
                                <img src="assets/images/banner_slide01.jpg" alt="" class="rounded">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <div class="slide_description_wrapper">
                                                <div class="slide_description">
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <h2 class="text-uppercase thin">
                                                            Become
                                                            <strong>an activist</strong>
                                                        </h2>
                                                    </div>
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <h3 class="text-uppercase">
                                                            If you gonna make it better
                                                        </h3>
                                                    </div>
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <a href="signup" class="theme_button color1">Sign up now</a>
                                                    </div>
                                                </div>
                                                <!-- eof .slide_description -->
                                            </div>
                                            <!-- eof .slide_description_wrapper -->
                                        </div>
                                        <!-- eof .col-* -->
                                    </div>
                                    <!-- eof .row -->
                                </div>
                                <!-- eof .container -->
                            </li>

                            <li>
                                <img src="assets/images/banner_slide02.jpg" alt="" class="rounded">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <div class="slide_description_wrapper">
                                                <div class="slide_description">
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <h2 class="text-uppercase thin">
                                                            Your
                                                            <strong>Support</strong>
                                                        </h2>
                                                    </div>
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <h3 class="text-uppercase">
                                                            May help us
                                                        </h3>
                                                    </div>
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <a href="signup" class="theme_button color1">Sign up now</a>
                                                    </div>
                                                </div>
                                                <!-- eof .slide_description -->
                                            </div>
                                            <!-- eof .slide_description_wrapper -->
                                        </div>
                                        <!-- eof .col-* -->
                                    </div>
                                    <!-- eof .row -->
                                </div>
                                <!-- eof .container -->
                            </li>

                            <li>
                                <img src="assets/images/banner_slide03.jpg" alt="" class="rounded">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <div class="slide_description_wrapper">
                                                <div class="slide_description">
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <h2 class="text-uppercase thin">
                                                            Next
                                                            <strong>Meeting</strong>
                                                        </h2>
                                                    </div>
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <h3 class="text-uppercase">
                                                            23/08/2017
                                                        </h3>
                                                    </div>
                                                    <div class="intro-layer to_animate" data-animation="fadeInUp">
                                                        <a href="about" class="theme_button color1">How to get</a>
                                                    </div>
                                                </div>
                                                <!-- eof .slide_description -->
                                            </div>
                                            <!-- eof .slide_description_wrapper -->
                                        </div>
                                        <!-- eof .col-* -->
                                    </div>
                                    <!-- eof .row -->
                                </div>
                                <!-- eof .container -->
                            </li>

                        </ul>
                    </div>
                    <!-- eof flexslider -->
                </section>

            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_30 section_padding_bottom_150">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                 <?php $j=0; foreach ($posts_down_banner as $data_down_banner){  ?>
                <article class="post format-small-image with_border side-item side-md content-padding responsive-thumb rounded topmargin_40">

                    <!-- <div class=""> -->

                    <div class="row">

                        <div class="col-md-6 <?php if($j%2==0){ ?> col-md-push-6 <?php } ?>">
                            <div class="item-media entry-thumbnail top_rounded overflow_hidden">
                                <img src="assets/images/gallery/<?php echo  $data_down_banner['media']; ?>" alt="">
                            </div>
                        </div>

                        <div class="col-md-6 <?php if($j%2==0){ ?> col-md-pull-6 <?php } ?>">
                            <div class="item-content">

                                <h4 class="entry-title ">
                                    <a href="blog-single-right" rel="bookmark"><?php echo  $data_down_banner['title']; ?></a>
                                </h4>

                                <!-- .entry-meta -->

                                <p><?php echo  $data_down_banner['description']; ?></p>

                            </div>

                            <footer class="entry-meta with_top_border darklinks">
                                <p class="inline-content small-text">
										<span>
											<i class="fa fa-user rightpadding_5 highlight" aria-hidden="true"></i>
											<a href="blog-single-right">Admin</a>
										</span>
                                    <span>
											<i class="fa fa-calendar rightpadding_5 highlight" aria-hidden="true"></i>
											<a href="blog-single-right">
												<time class="entry-date" datetime="2017-03-13T08:50:40+00:00">
													<?php echo  $data_down_banner['publish_time']; ?>
												</time>
											</a>
										</span>
                                </p>
                            </footer>
                        </div>

                    </div>
                    <!-- </div> -->
                </article>
            <?php $j++; } ?>
                <p class="topmargin_40 text-center">
                    <a href="#" class="theme_button color2">Load More</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section_subscribe cs gradient2 parallax section_padding_75">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section_header thin">
                    <strong>Newsletter</strong>
                    Subscribe
                </h2>
                <div class="widget widget_mailchimp">
                    <form class="signup form-inline inline-form" action="https://html.modernwebtemplates.com/social-activism/" method="get">
                        <div class="form-group-wrap">
                            <div class="form-group margin_0">
                                <input class="mailchimp_email form-control" name="email" type="email" placeholder="Email Address">
                            </div>
                            <button type="submit" class="theme_button no_bg_button">Sign Up!</button>
                        </div>
                        <div class="response"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>