<?= $this->extend('template/header') ?>
<?= $this->section('frontend_content') ?>

<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Event</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="/">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li class="active">Event Details</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls section_padding_top_150 section_padding_bottom_130 columns_padding_25">
    <div class="container">
        <div class="row">

            <?php foreach ($posts as $entry) { ?>
                <div class="col-sm-7 col-md-8 col-lg-8 col-sm-push-5 col-md-push-4 col-lg-push-4">

                    <article class="event-single vertical-item content-padding big-padding with_border rounded">
                        <div class="item-media entry-thumbnail top_rounded overflow_hidden">
                            <img src="<?= base_url('uploads/' . $entry['media']) ?>" alt="">
                        </div>

                        <div class="item-content">

                            <header class="entry-header">

                                <p class="grey darklinks margin_0">
                                    <span class="rightpadding_20"><i
                                                class="fa fa-calendar rightpadding_5 highlight"></i> <?php echo $entry['publish_date']; ?></span>
                                    <i class="fa fa-map-marker rightpadding_5 highlight"></i> <?php echo $entry['location']; ?>
                                </p>

                                <h1 class="entry-title topmargin_10">
                                    <a href="" rel="bookmark"><?php echo $entry['title']; ?></a>
                                </h1>

                            </header>
                            <!-- .entry-header -->

                            <div class="entry-content">

                                <p>
                                    <?php echo $entry['description']; ?>
                                </p>

                            </div>

                        </div>
                        <!-- .item-content -->

                    </article>

                    <div class="with_padding big-padding with_border rounded comments-wrapper">
                        <div class="comments-area" id="comments">
                            <h3 class="text-uppercase bottommargin_40">3 comments in this topic:</h3>
                            <ol class="comment-list">
                                <li class="comment even thread-even depth-1 parent">
                                    <article class="comment-body media">
                                        <div class="media-left">
                                            <img class="media-object" alt="" src="images/faces/02.jpg">
                                        </div>
                                        <div class="media-body">
													<span class="reply greylinks">
														<a href="#respond">
															<i class="fa fa-reply"></i>
														</a>
													</span>
                                            <div class="comment-meta darklinks">
                                                <a class="author_url" rel="external nofollow" href="#">Clifford
                                                    Marshall</a>
                                                <span class="comment-date small-text weight-black highlight">
															<time datetime="2017-03-13T08:50:40+00:00">
																07/08/2017
															</time>
														</span>
                                            </div>
                                            <p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in
                                                vulputate at, tempus viverra turpis.</p>
                                        </div>
                                    </article>
                                    <!-- .comment-body -->

                                    <ol class="children">
                                        <li class="comment byuser odd alt depth-2 parent">
                                            <article class="comment-body media">
                                                <div class="media-left">
                                                    <img class="media-object" alt="" src="images/faces/03.jpg">
                                                </div>
                                                <div class="media-body">
															<span class="reply greylinks">
																<a href="#respond">
																	<i class="fa fa-reply"></i>
																</a>
															</span>
                                                    <div class="comment-meta darklinks">
                                                        <a class="author_url" rel="external nofollow" href="#">Joshua
                                                            Dean</a>
                                                        <span class="comment-date small-text weight-black highlight">
																	<time datetime="2017-03-13T08:50:40+00:00">
																		07/08/2017
																	</time>
																</span>
                                                    </div>
                                                    <p>Second Level Cras sit amet nibh libero, in gravida nulla. Nulla
                                                        vel metus scelerisque ante sollicitudin commodo. Cras purus
                                                        odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                </div>
                                            </article>
                                            <!-- .comment-body -->

                                            <ol class="children">
                                                <li class="comment byuser even depth-3">
                                                    <article class="comment-body media">
                                                        <div class="media-left">
                                                            <img class="media-object" alt="" src="images/faces/01.jpg">
                                                        </div>
                                                        <div class="media-body">
																	<span class="reply greylinks">
																		<a href="#respond">
																			<i class="fa fa-reply"></i>
																		</a>
																	</span>
                                                            <div class="comment-meta darklinks">
                                                                <a class="author_url" rel="external nofollow" href="#">Ralph
                                                                    Guerrero</a>
                                                                <span class="comment-date small-text weight-black highlight">
																			<time datetime="2017-03-13T08:50:40+00:00">
																				07/08/2017
																			</time>
																		</span>
                                                            </div>
                                                            <p>Third Level Cras sit amet nibh libero, in gravida nulla.
                                                                Nulla vel metus scelerisque ante sollicitudin commodo.
                                                                Cras purus odio, vestibulum in vulputate at, tempus
                                                                viverra turpis.</p>
                                                        </div>
                                                    </article>
                                                    <!-- .comment-body -->
                                                </li>
                                                <!-- #comment-## -->
                                            </ol>
                                            <!-- .children -->
                                        </li>
                                        <!-- #comment-## -->
                                    </ol>
                                    <!-- .children -->
                                </li>
                                <!-- #comment-## -->

                            </ol>
                            <!-- .comment-list -->
                        </div>
                        <!-- #comments -->


                        <div class="comment-respond" id="respond">
                            <h3>Leave Comment:</h3>

                            <form class="comment-form columns_padding_10" id="commentform" method="post"
                                  action="https://html.modernwebtemplates.com/social-activism/">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group margin_0">
                                            <label for="author">Name
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" aria-required="true" size="30" value="" name="author"
                                                   id="author" class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group margin_0">
                                            <label for="comment_email">Email Address</label>
                                            <input type="email" size="30" value="" name="comment_email"
                                                   id="comment_email" class="form-control" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group margin_0">
                                            <label for="comment">Comment</label>
                                            <textarea aria-required="true" rows="5" cols="45" name="comment"
                                                      id="comment" class="form-control"
                                                      placeholder="Your Comment..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit topmargin_30">
                                    <button type="submit" id="submit" name="submit"
                                            class="theme_button color1 wide_button">Send now!
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- #respond -->
                    </div>

                </div>

            <?php } ?>
            <!--eof .col-sm-8 (main content)-->

            <!-- sidebar -->
            <aside class="col-sm-5 col-md-4 col-lg-4 col-sm-pull-7 col-md-pull-8 col-lg-pull-8">

                <div class="widget widget_apsc_widget">
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

                <div class="widget widget_mailchimp">

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
                        <?php foreach ($recent_posts as $post) { ?>
                            <li class="media">
                                <div class="media-left media-middle">
                                    <img src="images/<?php echo $post['media']; ?>" alt=""/>
                                </div>
                                <div class="media-body media-middle">
                                    <h4>
                                        <a href="/event-details/<?php echo $post['id']; ?>">
                                            <?php echo $post['title']; ?>
                                        </a>
                                    </h4>
                                    <span>
												<time class="entry-date small-text highlight"
                                                      datetime="2017-03-13T08:50:40+00:00">
													<?php echo $post['publish_date']; ?>
												</time>
											</span>
                                </div>
                            </li>
                        <?php } ?>

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

<section class="ds darkblue page_copyright section_padding_15">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p class="small-text bold">&copy; Copyright 2017 All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('frontend_css') ?>

<?= $this->endSection() ?>
<?= $this->section('frontend_script') ?>

<?= $this->endSection() ?>
