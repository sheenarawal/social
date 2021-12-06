<?= $this->extend('template/backend/header') ?>
<?= $this->section('backend_content') ?>
<section class="ls with_bottom_border">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="<?= route_to('backend.dashboard')?>>">Dashboard</a>
                    </li>
                    <li class="active">Event Edit</li>
                </ol>
            </div>
            <!-- .col-* -->
            <div class="col-md-6 text-md-right hidden">
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
                <h3>Edit Event
                    <small class="pull-right">
                        <a href="#">
                            <i class="fa fa-comments"></i> Event discussion</a>
                    </small>
                </h3>
            </div>
        </div>
        <!-- .row -->
        <form class="form-horizontal" action="<?=route_to('backend.event.update',$event['id'])?>" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-8">
                    <div class="with_border with_padding">
                        <h4>Event text
                            <span class="pull-right">
                                <button type="submit" class="theme_button small_button">Update Event</button>
                            </span>
                        </h4>
                        <hr>
                        <div class="row form-group <?php if(session('errors.title')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="title">Event title: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="title" name="title" value="<?= esc($event['title']) ?>" required>
                                <?php if(session('errors.title')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.title') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.slug')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="slug">Event slug: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="slug" name="slug" value="<?= esc($event['slug'])?>" required>
                                <?php if(session('errors.slug')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.slug') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.location')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="location">Location: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="location" name="location" value="<?= esc($event['location'])?>" required>
                                <?php if(session('errors.location')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.location') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.address')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="tag">event Tags: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="tag" id="tag" value="<?= esc($event['tag'])?>" required>
                                <?php if(session('errors.tag')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.tag') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.description')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="description">Event content: </label>
                            <div class="col-lg-9">
                                <textarea rows="8" class="form-control" name="description" id="description"><?= esc($event['description'])?></textarea>
                                <?php if(session('errors.description')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.description') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="theme_button wide_button">Update Event</button>
                                <a href="<?=route_to('backend.event.index') ?>" class="theme_button inverse wide_button">Cancel</a>
                            </div>
                        </div>
                        <!-- .row  -->
                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->
                <div class="col-md-4">
                    <div class="with_border with_padding bottommargin_10">
                        <h4>Event Meta</h4>
                        <hr>
                        <div class="row form-group <?php if(session('errors.publish_date')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="publish_date">Publish date: </label>
                            <div class="col-lg-9">
                                <input type="date" class="form-control" name="publish_date" id="publish_date" value="<?=  esc($event['publish_date'])? esc($event['publish_date']):date('Y-m-d') ?>" required>
                                <?php if(session('errors.publish_date')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.publish_date') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.publish_time')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="publish_time">Publish time: </label>
                            <div class="col-lg-9">
                                <input type="time" class="form-control" name="publish_time" id="publish_time" value="<?=  esc($event['publish_time'])? esc($event['publish_time']):date('h:i:s') ?>" required>
                                <?php if(session('errors.publish_time')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.publish_time') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>

                        <div class="row">
                            <label class="col-lg-3 control-label">Status: </label>
                            <div class="col-lg-9">
                                <label class="radio-inline" for="status1">
                                    <input type="radio" name="status" id="status1" value="0" checked="<?= esc($event['status'])== 0?'checked':'' ?>"> Draft
                                </label>
                                <label class="radio-inline" for="status2">
                                    <input type="radio" name="status" id="status2" value="1" <?= esc($event['status'])== 1?'checked':'' ?>> Published
                                </label>
                                <?php if(session('errors.status')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.status') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>


                    </div>
                    <!-- .with_border -->

                    <div class="with_border with_padding">

                        <h4>Event Media</h4>

                        <hr>

                        <div class="item-editable bottommargin_20">


                            <div class="item-media">
                                <img src="<?=base_url('uploads/'.$event['media']) ?>" alt="...">
                            </div>

                            <div class="item-edit-controls darklinks hidden">
                                <a href="#">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </div>
                        </div>

                        <div class="form-group <?php if(session('errors.media')) : ?> has-error<?php endif ?>">
                            <label class="control-label" for="media">Event Media: </label>
                            <input type="file" class="form-control" name="media" id="media" >
                            <?php if(session('errors.media')) { ?>
                                <div class='text-danger'>
                                    <?= session('errors.media') ?>
                                </div>
                            <?php }?>
                        </div>

                    </div>
                    <!-- .with_border -->

                </div>
                <!-- .col-* -->


            </div>
            <!-- .row  -->


        </form>

    </div>
    <!-- .container -->
</section>

<?= $this->endSection() ?>

<?= $this->section('backend_script') ?>

<?= $this->endSection() ?>
