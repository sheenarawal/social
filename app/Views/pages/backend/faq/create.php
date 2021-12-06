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
                    <li class="active">Faq</li>
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
                <h3>Single Faq
                    <small class="pull-right">
                        <a href="#">
                            <i class="fa fa-comments"></i> Faq discussion</a>
                    </small>
                </h3>
            </div>
        </div>
        <!-- .row -->


        <form class="form-horizontal" action="<?=route_to('backend.faq.store')?>" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-12">
                    <div class="with_border with_padding">
                        <h4>Faq text
                            <span class="pull-right">
                                <button type="submit" class="theme_button small_button">Save Faq</button>
                            </span>
                        </h4>
                        <hr>
                        <div class="row form-group <?php if(session('errors.question')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="question">Question: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="question" name="question" value="<?=old('question')?>" required>
                                <?php if(session('errors.question')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.question') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.answer')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="answer">Answer: </label>
                            <div class="col-lg-9">
                                <textarea rows="8" class="form-control" name="answer" id="answer"><?=old('answer')?></textarea>
                                <?php if(session('errors.answer')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.answer') ?>
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
                                <button type="submit" class="theme_button wide_button">Save Faq</button>
                                <a href="<?=route_to('backend.faq.index') ?>" class="theme_button inverse wide_button">Cancel</a>
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
