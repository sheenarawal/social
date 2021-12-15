<?= $this->extend('template/header') ?>
<?= $this->section('frontend_content') ?>


<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Post Page</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="index-2.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li class="active">Post Page</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_150 section_padding_bottom_150 columns_padding_25">
    <div class="container">
        <div class="row">

            <div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">
                <?php foreach ($posts as $post): ?>
                    <div class="author-meta side-item side-md content-padding with_border rounded">

                        <div class="row">

                            <div class="col-md-4">
                                <div class="item-media top_rounded overflow_hidden">
                                    <a href="<?=route_to('frontend.post.show',$post['id'])?>">
                                        <img src="<?= base_url('uploads/'.$post['media'])?>" alt="">
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="item-content">
                                    <a href="<?=route_to('frontend.post.show',$post['id'])?>"><h4 class="margin_0 weight-black"><?= $post['title']?></h4></a>
                                    <p class="small-text highlight bottommargin_10">Activist</p>

                                    <p><?php substr($post['description'], 0, 50) . ' ....';?></p>
                                    <!-- <div class="author-social"> -->
                                    <div class="greylinks hidden">
                                        <a href="#" class="social-icon soc-facebook"></a>
                                        <a href="#" class="social-icon soc-twitter"></a>
                                        <a href="#" class="social-icon soc-google"></a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!--eof .col-sm-8 (main content)-->

            <!-- sidebar -->
            <aside class="col-sm-5 col-md-4 col-lg-4 col-sm-pull-7 col-md-pull-8 col-lg-pull-8">

                <div class="widget widget_apsc_widget hidden">
                    <h3 class="widget-title">Get In Touch</h3>
                    <div class="apsc-icons-wrapper clearfix apsc-theme-4">
                        <div class="apsc-each-profile">
                            <a class="apsc-facebook-icon clearfix" href="#">
                                <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-facebook apsc-facebook"></i>
													<span class="media-name">Facebook</span>
												</span>
                                    <span class="apsc-count">9.8K</span>
                                    <span class="apsc-media-type">Fans</span>
                                </div>
                            </a>
                        </div>
                        <div class="apsc-each-profile">
                            <a class="apsc-twitter-icon clearfix" href="#">
                                <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="fa fa-twitter apsc-twitter"></i>
													<span class="media-name">Twitter</span>
												</span>
                                    <span class="apsc-count">4.9K</span>
                                    <span class="apsc-media-type">Followers</span>
                                </div>
                            </a>
                        </div>
                        <div class="apsc-each-profile">
                            <a class="apsc-google-plus-icon clearfix" href="#">
                                <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-googlePlus fa fa-google-plus"></i>
													<span class="media-name">google+</span>
												</span>
                                    <span class="apsc-count">10.1M</span>
                                    <span class="apsc-media-type">Followers</span>
                                </div>
                            </a>
                        </div>
                        <div class="apsc-each-profile">
                            <a class="apsc-instagram-icon clearfix" href="#">
                                <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-instagram fa fa-instagram"></i>
													<span class="media-name">Instagram</span>
												</span>
                                    <span class="apsc-count">4</span>
                                    <span class="apsc-media-type">Followers</span>
                                </div>
                            </a>
                        </div>
                        <div class="apsc-each-profile">
                            <a class="apsc-youtube-icon clearfix" href="#">
                                <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-youtube fa fa-youtube"></i>
													<span class="media-name">Youtube</span>
												</span>
                                    <span class="apsc-count">2.2K</span>
                                    <span class="apsc-media-type">Subscriber</span>
                                </div>
                            </a>
                        </div>
                        <div class="apsc-each-profile">
                            <a class="apsc-soundcloud-icon clearfix" href="#">
                                <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-soundcloud fa fa-soundcloud"></i>
													<span class="media-name">Soundcloud</span>
												</span>
                                    <span class="apsc-count">8K</span>
                                    <span class="apsc-media-type">Followers</span>
                                </div>
                            </a>
                        </div>
                        <div class="apsc-each-profile">
                            <a class="apsc-dribble-icon clearfix" href="#">
                                <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-dribbble fa fa-dribbble"></i>
													<span class="media-name">dribble</span>
												</span>
                                    <span class="apsc-count">0</span>
                                    <span class="apsc-media-type">Followers</span>
                                </div>
                            </a>
                        </div>
                        <div class="apsc-each-profile">
                            <a class="apsc-edit-icon clearfix" href="#">
                                <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-posts fa fa-edit"></i>
													<span class="media-name">Post</span>
												</span>
                                    <span class="apsc-count">1</span>
                                    <span class="apsc-media-type">Post</span>
                                </div>
                            </a>
                        </div>
                        <div class="apsc-each-profile">
                            <a class="apsc-comment-icon clearfix" href="#">
                                <div class="apsc-inner-block">
												<span class="social-icon">
													<i class="apsc-comments fa fa-comments"></i>
													<span class="media-name">Comment</span>
												</span>
                                    <span class="apsc-count">0</span>
                                    <span class="apsc-media-type">Comments</span>
                                </div>
                            </a>
                        </div>

                    </div>

                </div>

                <div class="widget widget_mailchimp hidden">

                    <h3 class="widget-title">Newsletter</h3>

                    <form class="signup" action="https://html.modernwebtemplates.com/social-activism/" method="get">
                        <div class="form-group">
                            <input name="email" type="email" class="mailchimp_email form-control"
                                   placeholder="E-mail Address">
                        </div>
                        <button type="submit" class="theme_button color1">Send</button>
                        <p>Enter your email address here always to be updated. We promise not to spam!</p>
                        <div class="response"></div>

                    </form>

                </div>

                <div class="widget widget_flickr">

                    <h3 class="widget-title">Flickr Widget</h3>
                    <ul id="flickr"></ul>
                </div>

                <div class="widget widget_categories">

                    <h3 class="widget-title">Categories</h3>
                    <div class="form-group select-group">
                        <label for="category" class="sr-only">Select Category</label>
                        <select id="category" name="category" class="choice empty form-control">
                            <option value="" disabled="" selected="" data-default="">Select Category</option>
                            <option value="cat_1">Category 1</option>
                            <option value="cat_2">Category 2</option>
                            <option value="cat_3">Category 3</option>
                            <option value="cat_4">Category 4</option>
                            <option value="cat_5">Category 5</option>
                            <option value="cat_6">Category 6</option>
                            <option value="cat_7">Category 7</option>
                            <option value="cat_8">Category 8</option>
                        </select>
                        <i class="fa fa-angle-down theme_button no-bg-button" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="widget widget_recent_posts">

                    <h3 class="widget-title">Recent Posts</h3>
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left media-middle">
                                <img src="images/recent_post1.jpg" alt=""/>
                            </div>
                            <div class="media-body media-middle">
                                <h4>
                                    <a href="blog-single-left.html">
                                        Tail cupim officia short loin frankfurter alcatra
                                    </a>
                                </h4>
                                <span>
												<time class="entry-date small-text highlight"
                                                      datetime="2017-03-13T08:50:40+00:00">
													june 10, 2017
												</time>
											</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left media-middle">
                                <img src="images/recent_post2.jpg" alt=""/>
                            </div>
                            <div class="media-body media-middle">
                                <h4>
                                    <a href="blog-single-left.html">
                                        Biltong venison beef swine. Corned beef pork ham
                                    </a>
                                </h4>
                                <span>
												<time class="entry-date small-text highlight"
                                                      datetime="2017-03-13T08:50:40+00:00">
													june 11, 2017
												</time>
											</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left media-middle">
                                <img src="images/recent_post3.jpg" alt=""/>
                            </div>
                            <div class="media-body media-middle">
                                <h4>
                                    <a href="blog-single-left.html">
                                        Prosciutto hamburger filet mignon
                                    </a>
                                </h4>
                                <span>

												<time class="entry-date small-text highlight"
                                                      datetime="2017-03-13T08:50:40+00:00">
													june 12, 2017
												</time>
											</span>
                            </div>
                        </li>


                    </ul>
                </div>

                <div class="widget widget_archive">

                    <h3 class="widget-title">Archives</h3>
                    <div class="form-group select-group">
                        <label for="archive" class="sr-only">Select Month</label>
                        <select id="archive" name="archive" class="choice empty form-control">
                            <option value="" disabled="" selected="" data-default="">Select Month</option>
                            <option value="cat_1">Month 1</option>
                            <option value="cat_2">Month 2</option>
                            <option value="cat_3">Month 3</option>
                            <option value="cat_4">Month 4</option>
                            <option value="cat_5">Month 5</option>
                            <option value="cat_6">Month 6</option>
                            <option value="cat_7">Month 7</option>
                            <option value="cat_8">Month 8</option>
                        </select>
                        <i class="fa fa-angle-down theme_button no-bg-button" aria-hidden="true"></i>
                    </div>
                </div>


            </aside>
            <!-- eof aside sidebar -->

        </div>
    </div>
</section>


<?= $this->endSection() ?>

<?= $this->section('frontend_css') ?>

<?= $this->endSection() ?>
<?= $this->section('frontend_script') ?>

<?= $this->endSection() ?>
