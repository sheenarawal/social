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
                    <li class="active">Gallery Edit</li>
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
                <h3>Edit Gallery Image
                </h3>
            </div>
        </div>
        <!-- .row -->
        <form class="form-horizontal" action="<?=route_to('backend.gallery.update',$image['id'])?>" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-8">
                    <div class="with_border with_padding">
                        <h4>Image text
                            <span class="pull-right">
                                <button type="submit" class="theme_button small_button">Update Gallery Image</button>
                            </span>
                        </h4>
                        <hr>
                        <div class="row form-group <?php if(session('errors.title')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="title">Image Title: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="title" name="title" value="<?= esc($image['title']) ?>" required>
                                <?php if(session('errors.title')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.title') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row hidden form-group <?php if(session('errors.category')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="category">Image Category: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="category" name="category" value="<?= esc($image['category']) ?>" required>
                                <?php if(session('errors.category')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.category') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.media')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="media">Image: </label>
                            <div class="col-lg-9">
                                <input type="file" class="form-control" id="media" name="media" value="<?= esc($image['media']) ?>" >
                                <?php if(session('errors.media')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.media') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>

                        <div class="row hidden form-group <?php if(session('errors.description')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="description">Image content: </label>
                            <div class="col-lg-9">
                                <textarea rows="8" class="form-control" name="description" id="description"><?= esc($image['description'])?></textarea>
                                <?php if(session('errors.description')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.description') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="theme_button wide_button">Update Gallery Image</button>
                                <a href="<?=route_to('backend.gallery.index') ?>" class="theme_button inverse wide_button">Cancel</a>
                            </div>
                        </div>
                        <!-- .row  -->
                    </div>
                    <!-- .with_border -->
                </div>
                <!-- .col-* -->
                <div class="col-md-4">

                    <div class="with_border with_padding">

                        <h4>Image Media</h4>

                        <hr>

                        <div class="item-editable bottommargin_20">


                            <div class="item-media">
                                <img src="<?=base_url('uploads/'.$image['media']) ?>" alt="...">
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
