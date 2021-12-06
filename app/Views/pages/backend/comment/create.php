<?= $this->extend('template/backend/header') ?>
<?= $this->section('backend_content') ?>
<section class="ls with_bottom_border">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="#">Homepage</a>
                    </li>
                    <li class="active">Comment</li>
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
            <div class="col-sm-12">
                <h3>Comment Summary</h3>
            </div>
        </div>
        <!-- .row -->

        <form class="form-horizontal" action="<?=route_to('backend.comment.store')?>" method="post">

            <div class="row">
                <div class="col-md-12">
                    <div class="with_border with_padding">

                        <h4>
                            Comment Totals
                            <span class="pull-right">
                                <button type="submit" class="theme_button small_button">Save comment</button>
                            </span>
                        </h4>

                        <hr>
                        <div class="row form-group hidden">
                            <label class="col-lg-3 control-label">Publish date: </label>
                            <div class="col-lg-9">
                                <input type="date" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group hidden">
                            <label class="col-lg-3 control-label">Publish time: </label>
                            <div class="col-lg-9">
                                <input type="time" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group <?php if(session('errors.title')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="title">Comment title: </label>
                            <div class="col-lg-9">
                                <input id="title" type="text" class="form-control" name="title" value="<?=old('title')?>">
                                <?php if(session('errors.title')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.title') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>

                        <div class="row form-group <?php if(session('errors.comment_for')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="comment_for">Comment For: </label>
                            <div class="col-lg-9">
                                <input type="hidden" value="<?= $type?>">
                                <input id="comment_for" type="text" class="form-control" name="comment_for" value="<?=$comment_for['title']?>" readonly>
                                <?php if(session('errors.comment_for')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.comment_for') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>

                        <div class="row form-group <?php if(session('errors.rating')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="rating">Comment rating:</label>
                            <div class="col-lg-9">
                                <select class="form-control" id="rating" name="rating">
                                    <option selected=""></option>
                                    <?php for ($i=0.5;$i <= 5.5;$i += 0.5   ):?>
                                    <option value="5"><?= floatval($i)?></option>
                                    <?php endfor;?>
                                </select>
                                <?php if(session('errors.rating')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.rating') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>

                        <div class="row form-group <?php if(session('errors.description')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="description">Comment Description: </label>
                            <div class="col-lg-9">
                                <textarea rows="5" class="form-control" id="description" name="description"></textarea>
                                <?php if(session('errors.description')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.description') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.status')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="status">Comment status:</label>
                            <div class="col-lg-9">
                                <select class="form-control" id="status" name="status">
                                    <option selected=""></option>
                                    <option>Approved</option>
                                    <option>Span</option>
                                    <option>Canceled</option>
                                    <option>Deleted</option>
                                </select>
                                <?php if(session('errors.status')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.status') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="theme_button wide_button">Save comment</button>
                                <a href="admin_comments.html" class="theme_button inverse wide_button">Cancel</a>
                            </div>
                        </div>
                        <!-- .row  -->

                    </div>
                    <!-- .with_border -->

                </div>
                <!-- .col-* -->
            </div>
            <!-- .row  -->
        </form>

        <div class="row flex-row">

            <div class="col-md-6">
                <div class="with_border with_padding">
                    <h5>
                        User Info:
                    </h5>
                    <ul class="list1 no-bullets">

                        <li>
                            <div class="media">

                                <div class="media-left">
                                    <img src="images/team/01.jpg" alt="...">
                                </div>
                                <div class="media-body media-middle">
                                    <h5 class="bottommargin_0">
                                        <a href="admin_profile.html">Alex Walker</a>
                                    </h5>
                                    &lt;<a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4a2f272b23260a2f322b273a262f64292527">[email&#160;protected]</a>&gt;

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media small-teaser">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon label-success fontsize_16">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <strong class="grey">
                                        Comments:
                                    </strong>
                                    146
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media small-teaser">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon label-info fontsize_16">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <strong class="grey">
                                        Member sicne:
                                    </strong>
                                    12/10/2014
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media small-teaser">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon label-warning fontsize_16">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <strong class="grey">
                                        Orders:
                                    </strong>
                                    12
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- .muted_background -->
            </div>
            <!-- .col-* -->
            <div class="col-md-6">
                <div class="with_border with_padding">

                    <form method="post" action="https://html.modernwebtemplates.com/social-activism/">
                        <div class="wrap-forms">
                            <div class="row">
                                <div class="col-xs-12">
                                    <h4>Answer to The Comment</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group has-placeholder">
                                        <label for="form-id-1">Title
                                            <sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" name="name" placeholder="Title" value="" id="form-id-1" required="required">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group has-placeholder">
                                        <label for="form-id-4">Message
                                            <sup>*</sup>
                                        </label>
                                        <textarea class="form-control" name="message" placeholder="Message" id="form-id-4" required="required" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row"></div>
                        </div>
                        <div class="wrap-forms">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input class="theme_button wide_button color1" type="submit" value="Answer">
                                    <input class="theme_button wide_button" type="reset" value="Clear">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>

<?= $this->endSection() ?>

<?= $this->section('backend_css') ?>
<?= $this->endSection() ?>
<?= $this->section('backend_script') ?>

<?= $this->endSection() ?>
