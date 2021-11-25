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
                    <li class="active">Post</li>
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
                <h3>Single Post
                    <small class="pull-right">
                        <a href="#">
                            <i class="fa fa-comments"></i> Post discussion</a>
                    </small>
                </h3>
            </div>
        </div>
        <!-- .row -->


        <form class="form-horizontal" action="<?=route_to('backend.post.store')?>" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-8">
                    <div class="with_border with_padding">
                        <h4>Post text
                            <span class="pull-right">
                                <button type="submit" class="theme_button small_button">Save Post</button>
                            </span>
                        </h4>
                        <hr>
                        <div class="row form-group <?php if(session('errors.title')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="title">Post title: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="title" name="title" value="<?=old('title')?>" required>
                                <?php if(session('errors.title')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.title') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.slug')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="slug">Post slug: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="slug" name="slug" value="<?=old('slug')?>" required>
                                <?php if(session('errors.slug')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.slug') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.category')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="category">Categories: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="category" name="category" value="<?=old('category')?>" required>
                                <?php if(session('errors.category')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.category') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.address')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="tag">Post Tags: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="tag" id="tag" value="<?=old('tag')?>" required>
                                <?php if(session('errors.tag')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.tag') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.description')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="description">Post content: </label>
                            <div class="col-lg-9">
                                <textarea rows="8" class="form-control" name="description" id="description"><?=old('description')?></textarea>
                                <?php if(session('errors.description')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.description') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="theme_button wide_button">Save Post</button>
                                <a href="<?=route_to('backend.post.index') ?>" class="theme_button inverse wide_button">Cancel</a>
                            </div>
                        </div>
                        <!-- .row  -->
                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->
                <div class="col-md-4">
                    <div class="with_border with_padding bottommargin_10">
                        <h4>Post Meta</h4>
                        <hr>
                        <div class="row form-group <?php if(session('errors.publish_date')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="publish_date">Publish date: </label>
                            <div class="col-lg-9">
                                <input type="date" class="form-control" name="publish_date" id="publish_date" value="<?= old('publish_date')?old('publish_date'):date('Y-m-d') ?>" required>
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
                                <input type="time" class="form-control" name="publish_time" id="publish_time" value="<?= old('publish_time')?old('publish_time'):date('h:i:s') ?>" required>
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
                                    <input type="radio" name="status" id="status1" value="0" checked="<?=old('status')== 0?'checked':'' ?>"> Draft
                                </label>
                                <label class="radio-inline" for="status2">
                                    <input type="radio" name="status" id="status2" value="1" <?=old('status')== 1?'checked':'' ?>> Published
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

                        <h4>Post Media</h4>

                        <hr>

                        <div class="item-editable bottommargin_20">


                            <div class="item-media">
                                <img src="<?=base_url('assets/images/gallery/01.jpg') ?>" alt="...">
                            </div>

                            <div class="item-edit-controls darklinks">
                                <a href="#">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </div>
                        </div>

                        <div class="form-group <?php if(session('errors.media')) : ?> has-error<?php endif ?>">
                            <label class="control-label" for="media">Post Media: </label>
                            <input type="text" class="form-control" name="media" id="media" >
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
