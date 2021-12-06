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
                    <li class="active">Calender</li>
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
                <h3>Single Calender
                    <small class="pull-right">
                        <a href="#">
                            <i class="fa fa-comments"></i> Calender discussion</a>
                    </small>
                </h3>
            </div>
        </div>
        <!-- .row -->


        <form class="form-horizontal" action="<?=route_to('backend.calendar.store')?>" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-8">
                    <div class="with_border with_padding">
                        <h4>Calender text
                            <span class="pull-right">
                                <button type="submit" class="theme_button small_button">Save Calender</button>
                            </span>
                        </h4>
                        <hr>
                        <div class="row form-group <?php if(session('errors.title')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="title">Title: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="title" name="title" value="<?=old('title')?>" required>
                                <?php if(session('errors.title')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.title') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.description')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="description">Description: </label>
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
                        
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="theme_button wide_button">Save Calender</button>
                                <a href="<?=route_to('backend.calendar.index') ?>" class="theme_button inverse wide_button">Cancel</a>
                            </div>
                        </div>
                        <!-- .row  -->
                    </div>
                    <!-- .with_border -->
                </div>

                <div class="col-md-4">
                    <div class="with_border with_padding bottommargin_10">
                        <h4>Start Date & Time</h4>
                        <hr>
                        <div class="row form-group <?php if(session('errors.start_date')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="start_date">Start Date: </label>
                            <div class="col-lg-9">
                                <input type="date" class="form-control" name="start_date" id="start_date" value="<?= old('start_date')?old('start_date'):date('Y-m-d') ?>" required>
                                <?php if(session('errors.start_date')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.start_date') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.start_time')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="start_time">Start Time: </label>
                            <div class="col-lg-9">
                                <input type="time" class="form-control" name="start_time" id="start_time" value="<?= old('start_time')?old('start_time'):date('h:i') ?>" required>
                                <?php if(session('errors.start_time')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.start_time') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <div class="with_border with_padding bottommargin_10">
                        <h4>End Date & Time</h4>
                        <hr>
                        <div class="row form-group <?php if(session('errors.end_date')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="end_date">End Date: </label>
                            <div class="col-lg-9">
                                <input type="date" class="form-control" name="end_date" id="end_date" value="<?= old('end_date')?old('end_date'):date('Y-m-d') ?>" required>
                                <?php if(session('errors.end_date')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.end_date') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.end_time')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="end_time">End Time: </label>
                            <div class="col-lg-9">
                                <input type="time" class="form-control" name="end_time" id="end_time" value="<?= old('end_time')?old('end_time'):date('h:i') ?>" required>
                                <?php if(session('errors.end_time')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.end_time') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>

                    </div>
                    <!-- .with_border -->
                </div>

            </div>
            <!-- .row  -->


        </form>

    </div>
    <!-- .container -->
</section>

<?= $this->endSection() ?>

<?= $this->section('backend_script') ?>

<?= $this->endSection() ?>
