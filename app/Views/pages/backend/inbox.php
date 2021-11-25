
<section class="ls with_bottom_border">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="active">Inbox</li>
                </ol>
            </div>
            <!-- .col-* -->
            <div class="col-md-6 text-md-right">
							<span class="dashboard-daterangepicker">
								<i class="fa fa-calendar"></i>
								<span></span>
								<i class="caret"></i>
							</span>
            </div>
            <!-- .col-* -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>

<section class="ls section_padding_top_50 section_padding_bottom_50 columns_padding_10">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <h3>Inbox
                    <small>messages</small>
                </h3>
            </div>
            <!-- .col-* -->
        </div>
        <!-- .row -->

        <div class="row">
            <div class="col-xs-12">
                <div class="with_border with_padding">

                    <div class="row admin-table-filters">
                        <div class="col-lg-9">

                            <form action="https://html.modernwebtemplates.com/social-activism/" class="form-inline filters-form">
											<span>
												<label class="grey" for="with-selected">With Selected:</label>
												<select class="form-control with-selected" name="with-selected" id="with-selected">
													<option value="">-</option>
													<option value="forward">forward</option>
													<option value="markread">Mark as read</option>
													<option value="delete">Delete</option>
												</select>
											</span>
                                <span>
												<label class="grey" for="orderby">Sort By:</label>
												<select class="form-control orderby" name="orderby" id="orderby">
													<option value="date" selected>Date</option>
													<option value="sender">Sender</option>
													<option value="subject">Subject</option>
												</select>
											</span>

                                <span>
												<label class="grey" for="showcount">Show:</label>
												<select class="form-control showcount" name="showcount" id="showcount">
													<option value="10" selected>10</option>
													<option value="20">20</option>
													<option value="30">30</option>
													<option value="50">50</option>
													<option value="100">100</option>
												</select>
											</span>
                            </form>

                        </div>
                        <!-- .col-* -->
                        <div class="col-lg-3 text-lg-right">
                            <div class="widget widget_search">

                                <form method="get" class="searchform" action="https://html.modernwebtemplates.com/social-activism/">
                                    <!-- <div class="form-group-wrap"> -->
                                    <div class="form-group">
                                        <label class="sr-only" for="widget-search">Search for:</label>
                                        <input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search Here...">
                                    </div>
                                    <button type="submit" class="theme_button color1">Search</button>
                                    <!-- </div> -->
                                </form>
                            </div>

                        </div>
                        <!-- .col-* -->
                    </div>
                    <!-- .row -->

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td class="media-middle text-center">
                                    <input type="checkbox">
                                </td>
                                <th>From:</th>
                                <th>Message:</th>
                                <th>Date:</th>
                                <th>Size:</th>
                            </tr>
                            <tr class="item-editable">
                                <td class="media-middle text-center">
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="<?= base_url('assets/images/team/01.jpg') ?>" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                <a href="admin_profile.html">Alex Walker</a>
                                            </h5>
                                            &lt;<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="543139353d3814312c35392438317a373b39">[email&#160;protected]</a>&gt;
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>
                                        <a href="#">
                                            Consectetur adipisicing elit
                                        </a>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.</p>
                                </td>
                                <td class="media-middle">
                                    <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                </td>
                                <td class="media-middle">
                                    1.3Mb
                                </td>
                            </tr>
                            <tr class="item-editable">
                                <td class="media-middle text-center">
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="<?= base_url('assets/images/team/02.jpg') ?>" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                <a href="admin_profile.html">Janet C. Donnalds</a>
                                            </h5>
                                            &lt;<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cf2f9ebf9f1fdf5f0dcf9e4fdf1ecf0f9b2fff3f1">[email&#160;protected]</a>&gt;
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>
                                        <a href="#">
                                            Inventore accusamus illo
                                        </a>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.</p>
                                </td>
                                <td class="media-middle">
                                    <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                </td>
                                <td class="media-middle">
                                    28Kb
                                </td>
                            </tr>
                            <tr class="item-editable">
                                <td class="media-middle text-center">
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="<?= base_url('assets/images/team/03.jpg') ?>" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                <a href="admin_profile.html">Victoria Grow</a>
                                            </h5>
                                            &lt;<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="791817160d111c0b1c14181015391c01181409151c571a1614">[email&#160;protected]</a>&gt;
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>
                                        <a href="#">
                                            Cadipisicing elit
                                        </a>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.</p>
                                </td>
                                <td class="media-middle">
                                    <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                </td>
                                <td class="media-middle">
                                    66Kb
                                </td>

                            </tr>
                            <tr class="item-editable">
                                <td class="media-middle text-center">
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="<?= base_url('assets/images/team/01.jpg') ?>" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                <a href="admin_profile.html">Alex Walker</a>
                                            </h5>
                                            &lt;<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bbded6dad2d7fbdec3dad6cbd7de95d8d4d6">[email&#160;protected]</a>&gt;
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>
                                        <a href="#">
                                            Consectetur adipisicing elit
                                        </a>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.</p>
                                </td>
                                <td class="media-middle">
                                    <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                </td>
                                <td class="media-middle">
                                    1.3Mb
                                </td>
                            </tr>
                            <tr class="item-editable">
                                <td class="media-middle text-center">
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="<?= base_url('assets/images/team/02.jpg') ?>" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                <a href="admin_profile.html">Janet C. Donnalds</a>
                                            </h5>
                                            &lt;<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c2aca7b5a7afa3abae82a7baa3afb2aea7eca1adaf">[email&#160;protected]</a>&gt;
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>
                                        <a href="#">
                                            Inventore accusamus illo
                                        </a>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor laboriosam dolores magnam mollitia, voluptatibus inventore accusamus illo.</p>
                                </td>
                                <td class="media-middle">
                                    <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                </td>
                                <td class="media-middle">
                                    28Kb
                                </td>
                            </tr>
                            <tr class="item-editable">
                                <td class="media-middle text-center">
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-left">
                                            <img src="<?= base_url('assets/images/team/03.jpg') ?>" alt="...">
                                        </div>
                                        <div class="media-body">
                                            <h5>
                                                <a href="admin_profile.html">Victoria Grow</a>
                                            </h5>
                                            &lt;<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="61000f0e15090413040c00080d210419000c110d044f020e0c">[email&#160;protected]</a>&gt;
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>
                                        <a href="#">
                                            Cadipisicing elit
                                        </a>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni aliquam quisquam modi delectus veritatis est ut culpa minus repellendus.</p>
                                </td>
                                <td class="media-middle">
                                    <time datetime="2017-02-08T20:25:23+00:00" class="entry-date">08.02.2017 at 20:25</time>
                                </td>
                                <td class="media-middle">
                                    66Kb
                                </td>

                            </tr>
                        </table>
                    </div>
                    <!-- .table-responsive -->
                </div>
                <!-- .with_border -->
            </div>
            <!-- .col-* -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="pagination">
                            <li class="disabled">
                                <a href="#">
                                    <span class="sr-only">Prev</span>
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li>
                                <a href="#">
                                    <span class="sr-only">Next</span>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-md-right">
                        Showing 1 to 6 of 12 items
                    </div>
                </div>
            </div>
        </div>
        <!-- .row main columns -->
    </div>
    <!-- .container -->
</section>