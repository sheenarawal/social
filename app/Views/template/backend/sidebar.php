<?php $auth = session()->get('logged_in')['auth']; ?>
<header class="page_header_side page_header_side_sticked active-slide-side-header ds">
    <div class="side_header_logo ds ms">
        <a href="<?=route_to('backend.dashboard')?>">
            <span class="logo_text margin_0">
                Social
                <strong>Activism</strong>
            </span>
        </a>
    </div>
    <span class="toggle_menu_side toggler_light header-slide">
					<span></span>
				</span>
    <div class="scrollbar-macosx">
        <div class="side_header_inner">

            <!-- user -->

            <div class="user-menu">
                <ul class="menu-click">
                    <li>
                        <a href="#">
                            <div class="media">
                                <div class="media-left media-middle">
                                    <img src="<?= base_url('assets/images/team/01.jpg') ?>" alt="">
                                </div>
                                <div class="media-body media-middle">
                                    <h4><?= ucfirst($auth['name']) ?></h4>
                                    <?= $auth['role'] =='0'?'Administrator':'Member'?>

                                </div>

                            </div>
                        </a>
                        <ul>
                            <li>
                                <a href="<?= route_to('backend.profile')?>">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="<?= route_to('backend.member.editProfile',$auth['id'])?>">
                                    <i class="fa fa-edit"></i>
                                    Edit Profile
                                </a>
                            </li>
                            <li class="hidden">
                                <a href="">
                                    <i class="fa fa-envelope-o"></i>
                                    Inbox
                                </a>
                            </li>
                            <li>
                                <a href="<?= route_to('logout') ?>">
                                    <i class="fa fa-sign-out"></i>
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- main side nav start -->
            <nav class="mainmenu_side_wrapper">
                <h3 class="dark_bg_color">Dashboard</h3>
                <ul class="menu-click">
                    <li>
                        <a href="<?= route_to('backend.dashboard') ?>">
                            <i class="fa fa-th-large"></i>
                            Dashboard
                        </a>

                    </li>
                </ul>

                <h3 class="dark_bg_color">Pages</h3>

                <ul class="menu-click">
                    <?php if ($auth['role'] == 0): ?>

                        <li>
                            <a href="#">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                Member
                            </a>
                            <ul>
                                <li>
                                    <a href="<?=route_to('backend.member.index')?>">
                                        Member List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-file-text"></i>
                                Posts
                            </a>
                            <ul>
                                <li>
                                    <a href="<?= route_to('backend.post.index') ?>">
                                        Posts List
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= route_to('backend.post.create') ?>">
                                        Create Post
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                                Notice
                            </a>
                            <ul>
                                <li>
                                    <a href="<?=route_to('backend.query.index','notice')?>">
                                        Notices
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=route_to('backend.query.create','notice')?>">
                                        Single Notice
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">
                                <i class="fa fa-comment"></i>
                                Events
                            </a>
                            <ul>
                                <li>
                                    <a href="<?=route_to('backend.event.index')?>">
                                        Events
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=route_to('backend.event.create')?>">
                                        Single Event
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">
                                <i class="fa fa-image"></i>
                                Gallery
                            </a>
                            <ul>
                                <li>
                                    <a href="<?=route_to('backend.gallery.index')?>">
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=route_to('backend.gallery.create')?>">
                                        Single Image
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">
                                <i class="fa fa-comment"></i>
                                FAQ
                            </a>
                            <ul>
                                <li>
                                    <a href="<?=route_to('backend.faq.index')?>">
                                        FAQs
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=route_to('backend.faq.create')?>">
                                        Single FAQ
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                Calendar
                            </a>
                            <ul>
                                <li>
                                    <a href="<?=route_to('backend.calendar.view')?>">
                                        View Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=route_to('backend.calendar.index')?>">
                                        Calendar Updates
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=route_to('backend.calendar.create')?>">
                                        Single Calendar
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php else:?>
                        <li>
                            <a href="<?=route_to('backend.profile') ?>">
                                <i class="fa fa-users"></i>
                                Member
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-comment"></i>
                                Query / Complaint
                            </a>
                            <ul>
                                <li>
                                    <a href="<?=route_to('backend.query.index','query')?>">
                                        Queries
                                    </a>
                                </li>
                                <li>
                                    <a href="<?=route_to('backend.query.create','query')?>">
                                        Single Query
                                    </a>
                                </li>
                            </ul>
                        </li>
                    <?php endif;?>

                    <li class="hidden">
                        <a href="#">
                            <i class="fa fa-comment"></i>
                            Comments
                        </a>
                        <ul>
                            <li>
                                <a href="<?=route_to('backend.comment.index')?>">
                                    Comments
                                </a>
                            </li>
                            <li>
                                <a href="<?=route_to('backend.comment.create')?>">
                                    Single Comment
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <h3 class="dark_bg_color hidden">UI Elements</h3>
                <ul class="menu-click hidden">
                    <li>
                        <a href="admin_tables.html">
                            <i class="fa fa-table"></i>
                            Tables
                        </a>
                    </li>
                    <li>
                        <a href="admin_forms.html">
                            <i class="fa fa-check-square-o"></i>
                            Forms
                        </a>
                    </li>
                    <li>
                        <a href="admin_bootstrap.html">
                            <i class="fa fa-cog"></i>
                            Bootstrap
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- eof main side nav -->

            <div class="with_padding grey text-center hidden">
                10GB of
                <strong>250GB</strong> Free
            </div>

        </div>
    </div>
</header>

<header class="page_header header_darkgrey">

    <div class="widget widget_search">
        <form method="get" class="searchform form-inline" action="https://html.modernwebtemplates.com/social-activism/">
            <div class="form-group">
                <label class="screen-reader-text" for="widget-search-header">Search for:</label>
                <input id="widget-search-header" type="text" value="" name="search" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="theme_button color1">Search</button>
        </form>
    </div>


    <div class="pull-right big-header-buttons">
        <ul class="inline-dropdown inline-block">


            <li class="dropdown header-notes-dropdown">
                <a class="header-button" data-target="#" href="index-2.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                    <i class="fa fa-bell-o grey"></i>
                    <span class="header-button-text">Messages</span>
                    <span class="header-dropdown-number">
									12
								</span>
                </a>

                <div class="dropdown-menu ls">
                    <div class="dropdwon-menu-title with_background">
                        <strong>12 Pending</strong> Notifications

                        <div class="pull-right darklinks">
                            <a href="#">View All</a>
                        </div>

                    </div>
                    <ul class="list-unstyled">

                        <li>
                            <div class="media with_background">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon label-success">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
												<span class="grey">
													New user registered
												</span>
                                    <span class="pull-right">Just Now</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media with_background">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon label-info">
                                        <i class="fa fa-bullhorn"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
												<span class="grey">
													New user registered
												</span>
                                    <span class="pull-right">20 minutes</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="media with_background">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon label-danger">
                                        <i class="fa fa-bolt"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
												<span class="grey">
													Server overloaded
												</span>
                                    <span class="pull-right">1 hour</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="media with_background">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon label-success">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
												<span class="grey">
													New order
												</span>
                                    <span class="pull-right">3 hours</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="media with_background">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon label-warning">
                                        <i class="fa fa-bell-o"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
												<span class="grey">
													Long database query
												</span>
                                    <span class="pull-right">4 hours</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="media with_background">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon label-success">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
												<span class="grey">
													New user registered
												</span>
                                    <span class="pull-right">4 hours</span>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="dropdown header-notes-dropdown">
                <a class="header-button" data-target="#" href="index-2.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                    <i class="fa fa-envelope-o grey"></i>
                    <span class="header-button-text">Inbox</span>
                    <span class="header-dropdown-number">
									8
								</span>
                </a>

                <div class="dropdown-menu ls">
                    <div class="dropdwon-menu-title with_background">
                        <strong>8 New</strong> Messages

                        <div class="pull-right darklinks">
                            <a href="#">View All</a>
                        </div>

                    </div>
                    <ul class="list1 no-bullets no-top-border no-bottom-border">

                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <img src="<?= base_url('assets/images/team/01.jpg') ?>" alt="...">
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <a href="#">
                                            Alex Walker <span class="pull-right">23 feb at 11:36</span>
                                        </a>
                                    </h5>
                                    <div>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <img src="<?= base_url('assets/images/team/02.jpg') ?>" alt="...">
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <a href="#">
                                            Janet C. Donnalds <span class="pull-right">23 feb at 12:17</span>
                                        </a>
                                    </h5>
                                    <div>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero itaque dolor.
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left">
                                    <img src="<?= base_url('assets/images/team/03.jpg') ?>" alt="...">
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">
                                        <a href="#">
                                            Victoria Grow <span class="pull-right">23 feb at 16:44</span>
                                        </a>
                                    </h5>
                                    <div>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, esse, magni.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="dropdown header-notes-dropdown">
                <a class="header-button" data-target="#" href="index-2.html" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                    <i class="fa fa-calendar-o grey"></i>
                    <span class="header-button-text">User</span>
                </a>
                <div class="dropdown-menu ls">

                    <div class="dropdwon-menu-title with_background">
                        <strong>14 Pending</strong> Tasks

                        <div class="pull-right darklinks">
                            <a href="#">View All</a>
                        </div>

                    </div>

                    <ul class="list-unstyled">

                        <li>
                            <p class="progress-bar-title grey">
                                <strong>Progress</strong>
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="90">
                                    <span>90%</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <p class="progress-bar-title grey">
                                <strong>Success</strong>
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="52">
                                    <span>52%</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <p class="progress-bar-title grey">
                                <strong>Knowing</strong>
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="75">
                                    <span>75%</span>
                                </div>
                            </div>
                        </li>

                        <li>
                            <p class="progress-bar-title grey">
                                <strong>Rating</strong>
                            </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="95">
                                    <span>95%</span>
                                </div>
                            </div>
                        </li>

                    </ul>

                </div>

            </li>

            <!-- Uncomment following to show user menu

        <li class="dropdown user-dropdown-menu">
            <a class="header-button" id="user-dropdown-menu" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                <i class="fa fa-user grey"></i> <span class="header-button-text">User</span>
            </a>
            <div class="dropdown-menu ls">
                <ul class="nav darklinks">
                    <li>
                        <a href="admin_profile.html">
                            <i class="fa fa-user"></i>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="admin_profile_edit.html">
                            <i class="fa fa-edit"></i>
                            Edit Profile
                        </a>
                    </li>
                    <li>
                        <a href="admin_inbox.html">
                            <i class="fa fa-envelope-o"></i>
                            Inbox
                        </a>
                    </li>
                    <li>
                        <a href="admin_signin.html">
                            <i class="fa fa-sign-out"></i>
                            Log Out
                        </a>
                    </li>
                </ul>

            </div>

        </li>

    -->

            <li class="dropdown visible-xs-inline-block">
                <a href="#" class="search_modal_button header-button">
                    <i class="fa fa-search grey"></i>
                    <span class="header-button-text">Search</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- eof .header_right_buttons -->
</header>
