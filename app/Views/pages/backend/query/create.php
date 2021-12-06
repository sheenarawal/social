<?= $this->extend('template/backend/header') ?>
<?= $this->section('backend_content') ?>
<?php $auth = session()->get('logged_in')['auth']; ?>

<section class="ls with_bottom_border">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="<?= route_to('backend.dashboard')?>>">Dashboard</a>
                    </li>
                    <li class="active"><?=ucfirst($type)?>s</li>
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
                <h3><?=ucfirst($type)?>s
                    <small class="pull-right">
                        <a href="#">
                            <i class="fa fa-comments"></i> discussion</a>
                    </small>
                </h3>
            </div>
        </div>
        <!-- .row -->


        <form class="form-horizontal" action="<?=route_to('backend.query.store',$type)?>" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-12">
                    <div class="with_border with_padding">
                        <h4><?=ucfirst($type)?> text
                            <span class="pull-right">
                                <button type="submit" class="theme_button small_button">Send Message</button>
                            </span>
                        </h4>
                        <hr>
                        <?php if ($auth['role'] == 0):?>
                            <div class="row form-group <?php if(session('errors.send_to')) : ?> has-error<?php endif ?>">
                                <label class="col-lg-3 control-label" for="send_to">Send to:</label>
                                <div class="col-lg-9">
                                    <select class="form-control" id="send_to" name="send_to">
                                        <option selected=""></option>
                                        <?php foreach ($users as $data):?>
                                            <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                                        <?php endforeach;?>

                                    </select>
                                    <?php if(session('errors.send_to')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.send_to') ?>
                                        </div>
                                    <?php }?>

                                    <input type="hidden" class="form-control" id="name" name="name" value="<?=$auth['name']?>">
                                </div>
                            </div>
                        <?php else:?>
                            <input type="hidden" class="form-control" id="name" name="send_to" value="1">
                            <div class="row form-group <?php if(session('errors.name')) : ?> has-error<?php endif ?>">
                                <label class="col-lg-3 control-label" for="name">Name: </label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="name" name="name" value="<?=old('name')?>" required>
                                    <?php if(session('errors.name')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.name') ?>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        <?php endif;?>
                        <div class="row form-group <?php if(session('errors.subject')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="subject">Subject: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="subject" name="subject" value="<?=old('subject')?>" required>
                                <?php if(session('errors.subject')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.subject') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.description')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="description">content: </label>
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
                                <button type="submit" class="theme_button wide_button">Send Message</button>
                                <a href="<?=route_to('backend.post.index',$type) ?>" class="theme_button inverse wide_button">Cancel</a>
                            </div>
                        </div>
                        <!-- .row  -->
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
