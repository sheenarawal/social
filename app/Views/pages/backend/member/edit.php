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
                    <li class="active">Member</li>
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
                <h3>Member
                    <small class="pull-right">
                        <a href="#">
                            <i class="fa fa-comments"></i> Post discussion</a>
                    </small>
                </h3>
            </div>
        </div>
        <!-- .row -->
        <form class="form-horizontal" action="<?=route_to('backend.member.update',$user['id'])?>" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-8">
                    <div class="with_border with_padding">
                        <h4>Member text
                            <span class="pull-right">
                                <button type="submit" class="theme_button small_button">Update Member</button>
                            </span>
                        </h4>
                        <hr>
                        <div class="row form-group <?php if(session('errors.name')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="name">Member Name: </label>
                            <div class="col-lg-9">
                                <input type="hidden" name="user_id" value="<?=esc($user['id'])?>" required>
                                <input type="text" class="form-control" id="name" name="name" value="<?=esc($user['name'])?>" required>
                                <?php if(session('errors.name')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.name') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.email')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="email">Member Email: </label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" id="email" name="email" value="<?=esc($user['email'])?>" required>
                                <?php if(session('errors.email')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.email') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.mobile')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="mobile">Mobile: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="mobile" name="mobile" value="<?=esc($user['mobile'])?>" required>
                                <?php if(session('errors.mobile')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.mobile') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.password')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="password">Member Password: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="password" id="password" value="<?=esc($user['password'])?>" required>
                                <?php if(session('errors.password')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.password') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.address')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="address">Member Address: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" name="address" id="address" value="<?=esc($user['address'])?>" required>
                                <?php if(session('errors.address')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.address') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.description')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="description">Member content: </label>
                            <div class="col-lg-9">
                                <textarea rows="8" class="form-control" name="description" id="description"><?=esc($description)?></textarea>
                                <?php if(session('errors.description')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.description') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="theme_button wide_button">Update Member</button>
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
                        <h4>Member Meta</h4>
                        <hr>
                        <div class="item-editable bottommargin_20">


                            <div class="item-address_proof">
                                <img src="<?=base_url('uploads/'.$user['photo']) ?>" alt="...">
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
                        <div class="form-group <?php if(session('errors.photo')) : ?> has-error<?php endif ?>">
                            <label class="control-label" for="photo">Member Photo: </label>
                            <input type="file" class="form-control" name="photo" id="photo" >
                            <?php if(session('errors.photo')) { ?>
                                <div class='text-danger'>
                                    <?= session('errors.photo') ?>
                                </div>
                            <?php }?>
                        </div>

                        <?php if ($auth['role']==0):?>
                        <div class="row">
                            <label class="col-lg-3 control-label">Status: </label>
                            <div class="col-lg-9">
                                <label class="radio-inline" for="status1">
                                    <input type="radio" name="status" id="status1" value="0" checked="<?=esc($user['status'])== 0?'checked':'' ?>"> Pending
                                </label>
                                <label class="radio-inline" for="status2">
                                    <input type="radio" name="status" id="status2" value="1" <?=esc($user['status'])== 1?'checked':'' ?>> Approve
                                </label>
                                <?php if(session('errors.status')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.status') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <?php endif ?>


                    </div>
                    <!-- .with_border -->

                    <div class="with_border with_padding">

                        <h4>Member Address Proof</h4>

                        <hr>

                        <div class="item-editable bottommargin_20">


                            <div class="item-address_proof">
                                <img src="<?=base_url('uploads/'.$user['address_proof']) ?>" alt="...">
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

                        <div class="form-group <?php if(session('errors.address_proof')) : ?> has-error<?php endif ?>">
                            <label class="control-label" for="address_proof">Member Address Proof: </label>
                            <input type="file" class="form-control" name="address_proof" id="address_proof" >
                            <?php if(session('errors.address_proof')) { ?>
                                <div class='text-danger'>
                                    <?= session('errors.address_proof') ?>
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
