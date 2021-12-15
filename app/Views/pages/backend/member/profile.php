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
                    <li class="active">Member Profile</li>
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
                <h3>Member Profile
                    <small class="pull-right">
                        <a href="#">
                            <i class="fa fa-comments"></i> Post discussion</a>
                    </small>
                </h3>
            </div>
        </div>
        <!-- .row -->
        <form class="form-horizontal" action="<?=route_to('backend.member.updateProfile',isset($user['user_id'])?$user['user_id']:$id)?>" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-8">
                    <div class="with_border with_padding">
                        <h4>Member text
                            <span class="pull-right">
                                <button type="submit" class="theme_button small_button">Update Profile</button>
                            </span>
                        </h4>
                        <hr>
                        <div class="row form-group <?php if(session('errors.guardian')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="guardian">Son/Daughter/Wife:Sri/Late: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="guardian" name="guardian" value="<?=esc(isset($user['guardian'])?$user['guardian']:'')?>" required>
                                <?php if(session('errors.guardian')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.guardian') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.ps')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="ps">Member PS: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="ps" name="ps" value="<?=esc(isset($user['ps'])?$user['ps']:'')?>" required>
                                <?php if(session('errors.ps')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.ps') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.qualification')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="qualification">Qualification </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="qualification" name="qualification" value="<?=esc(isset($user['qualification'])?$user['qualification']:'')?>" required>
                                <?php if(session('errors.qualification')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.qualification') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.curricular_activities')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="curricular_activities">Extra Curricular Activities </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="curricular_activities" name="curricular_activities" value="<?=esc(isset($user['curricular_activities'])?$user['curricular_activities']:'')?>" required>
                                <?php if(session('errors.curricular_activities')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.curricular_activities') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.blood_group')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="blood_group">Blood Group </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="blood_group" name="blood_group" value="<?=esc(isset($user['blood_group'])?$user['blood_group']:'')?>" required>
                                <?php if(session('errors.blood_group')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.blood_group') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.occupation')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="occupation">Occupation </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="occupation" name="occupation" value="<?=esc(isset($user['occupation'])?$user['occupation']:'')?>" required>
                                <?php if(session('errors.occupation')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.occupation') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.other_society')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="other_society">If Attached with any other society </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="other_society" name="other_society" value="<?=esc(isset($user['other_society'])?$user['other_society']:'')?>" required>
                                <?php if(session('errors.other_society')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.other_society') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.introduced_by')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="introduced_by">If Attached with any other society </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="introduced_by" name="introduced_by" value="<?=esc(isset($user['other_society'])?$user['other_society']:'')?>" required>
                                <?php if(session('errors.introduced_by')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.introduced_by') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="theme_button wide_button">Update Profile</button>
                                <a href="<?=route_to('backend.post.index') ?>" class="theme_button inverse wide_button">Cancel</a>
                            </div>
                        </div>
                        <!-- .row  -->
                    </div>
                    <!-- .with_border -->
                </div>
                <div class="col-md-4">
                    <div class="with_border with_padding bottommargin_10">
                        <h4>Member Date</h4>
                        <hr>

                        <div class="row form-group <?php if(session('errors.dob')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="dob">Data of Birth: </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="dob" name="dob" value="<?=esc(isset($user['dob'])?$user['dob']:'')?>" required>
                                <?php if(session('errors.dob')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.dob') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.age')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="age">Age </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="age" name="age" value="<?=esc(isset($user['age'])?$user['age']:'')?>" required>
                                <?php if(session('errors.age')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.age') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row form-group <?php if(session('errors.sex')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-3 control-label" for="sex">Sex </label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="sex" name="sex" value="<?=esc(isset($user['sex'])?$user['sex']:'')?>" required>
                                <?php if(session('errors.sex')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.sex') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>

                    </div>
                    <!-- .with_border -->
                    <div class="with_border with_padding bottommargin_10">
                        <h4>Member Address</h4>
                        <hr>


                        <div class="row <?php if(session('errors.district')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-9 " for="district">Member District: </label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" id="district" name="district" value="<?=esc(isset($user['district'])?$user['district']:'')?>" required>
                                <?php if(session('errors.district')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.district') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row <?php if(session('errors.state')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-9" for="state">Member State: </label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" id="state" name="state" value="<?=esc(isset($user['state'])?$user['state']:'')?>" required>
                                <?php if(session('errors.state')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.state') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row <?php if(session('errors.pin')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-9" for="pin">Member Pin: </label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" id="pin" name="pin" value="<?=esc(isset($user['pin'])?$user['pin']:'')?>" required>
                                <?php if(session('errors.pin')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.pin') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                        <div class="row <?php if(session('errors.land_mark')) : ?> has-error<?php endif ?>">
                            <label class="col-lg-9" for="land_mark">Nearest Location(Land Mark): </label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" id="land_mark" name="land_mark" value="<?=esc(isset($user['land_mark'])?$user['land_mark']:'')?>" required>
                                <?php if(session('errors.land_mark')) { ?>
                                    <div class='text-danger'>
                                        <?= session('errors.land_mark') ?>
                                    </div>
                                <?php }?>
                            </div>
                        </div>

                    </div>

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
