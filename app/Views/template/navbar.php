

<section class="page_topline ds darkblue parallax table_section table_section_sm section_padding_bottom_10 section_padding_top_10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 text-center text-sm-left">
                <div class="inline-content darklinks">
								<span>
									<i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i>
									(800) 123 4567
								</span>
                    <span class="small-text">
									<i class="fa fa-envelope highlight rightpadding_5" aria-hidden="true"></i>
									<a href="mailto:"><span>xyz@gmail.com</span></a>
								</span>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div>
                    <a class="social-icon color-icon soc-facebook" href="#" title="Facebook"></a>
                    <a class="social-icon color-icon soc-twitter" href="#" title="Twitter"></a>
                    <a class="social-icon color-icon soc-google" href="#" title="Google"></a>
                    <a class="social-icon color-icon soc-skype" href="#" title="Skype"></a>
                    <a class="social-icon color-icon soc-youtube" href="#" title="Youtube"></a>
                </div>
            </div>
            <div class="col-sm-6 text-center text-sm-right">
                <div class="widget widget_search inline-block">
                    <form method="get" class="searchform form-inline" action="https://html.modernwebtemplates.com/social-activism/">
                        <div class="form-group-wrap">
                            <div class="form-group margin_0">
                                <label class="sr-only" for="topline-search">Search for:</label>
                                <input id="topline-search" type="text" value="" name="search" class="form-control" placeholder="Search Keyword">
                            </div>
                            <button type="submit" class="theme_button color1 no_bg_button">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<header class="page_header header_white toggler_xs_right section_padding_15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 display_table">
                <div class="header_left_logo display_table_cell">
                    <a href="<?= route_to('frontend.index') ?>" class="logo top_logo">
                        <img src="assets/images/logo.png" alt="">
                        <span class="logo_text">
										Social
										<strong>Activism</strong>
									</span>
                    </a>
                </div>

                <div class="header_mainmenu display_table_cell text-center">
                    <!-- main nav start -->
                    <nav class="mainmenu_wrapper">
                        <ul class="mainmenu nav sf-menu">
                            <li class="active">
                                <a href="<?= route_to('frontend.index') ?>">Home</a>
                                <!--<ul>
                                    <li>
                                        <a href="index.html">MultiPage</a>
                                    </li>
                                    <li>
                                        <a href="index_static.html">Static Intro</a>
                                    </li>
                                    <li>
                                        <a href="admin_index.html">Admin Dashboard</a>
                                    </li>
                                </ul>-->
                            </li>

                            <li>
                                <a href="<?= route_to('frontend.about') ?>">About</a>
                            </li>

                            <li>
                                <a href="<?= route_to('frontend.events') ?>">Events</a>
                            </li>

                            <li>
                                <a href="<?= route_to('frontend.contact') ?>">Contact</a>
                            </li>

                            <li>
                                <a href="<?= route_to('frontend.faq') ?>">Faq</a>
                            </li>

                        </ul>
                    </nav>
                    <!-- eof main nav -->
                    <!-- header toggler -->
                    <span class="toggle_menu">
									<span></span>
								</span>
                </div>

                <div class="header_right_buttons display_table_cell text-right hidden-xs">
                    <a href="index-2.html#appointment" class="theme_button color1 two_lines bottommargin_0">Donate Now!</a>
                </div>
            </div>
        </div>
    </div>
</header>