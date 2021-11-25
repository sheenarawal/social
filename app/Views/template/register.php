
<!-- template sections -->
<section class="ls section_padding_top_100 section_padding_bottom_100 section_full_height">
    <div class="container">
        <div class="row">
            <?php $validation = \Config\Services::validation(); ?>
            <div class="col-md-8 col-sm-offset-2 to_animate">
                <div class="with_border with_padding">


                    <h4 class="text-center">
                        Sign Up New Account
                    </h4>
                    <hr class="bottommargin_30">
                    <div class="wrap-forms">
                        <form method="post" action="<?= route_to('register.store')?>" enctype="multipart/form-data">

                            <? if(session('error')){  ?>
                                <span class="text-danger"><?= session('error') ?></span>
                            <? }?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.name')) : ?> has-error<?php endif ?>">
                                        <label for="login-name">Your Name</label>
                                        <i class="grey fa fa-user"></i>
                                        <input type="text" class="form-control" id="login-name" placeholder="Name" name="name" value="<?=old('name')?>" required>
                                    </div>
                                    <?php if(session('errors.name')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.name'); ?>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.email')) : ?> has-error<?php endif ?>">
                                        <label for="login-email">Email address</label>
                                        <i class="grey fa fa-envelope-o"></i>
                                        <input type="email" class="form-control" id="login-email" placeholder="Email Address" name="email" value="<?=old('email')?>" required>
                                    </div>
                                    <?php if(session('errors.email')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.email') ?>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.mobile')) : ?> has-error<?php endif ?>">
                                        <label for="login-mobile">Mobile</label>
                                        <i class="grey fa fa-phone"></i>
                                        <input type="text" class="form-control" id="login-mobile" placeholder="Mobile No" name="mobile" value="<?=old('mobile')?>" required>
                                    </div>
                                    <?php if(session('errors.mobile')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.mobile') ?>
                                        </div>
                                    <?php }?>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.photo')) : ?> has-error<?php endif ?>">
                                        <label for="login-photo">Photo</label>
                                        <i class="grey fa fa-picture-o"></i>
                                        <input type="file" class="form-control" id="login-photo" placeholder="Photo" name="photo" required>
                                    </div>
                                    <?php if(session('errors.photo')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.photo') ?>
                                        </div>
                                    <?php }?>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.address')) : ?> has-error<?php endif ?>">
                                        <label for="login-address">Address</label>
                                        <i class="grey fa fa-map-marker"></i>
                                        <input type="text" class="form-control" id="login-address" placeholder="Address" name="address" value="<?=old('address')?>" required>
                                    </div>
                                    <?php if(session('errors.address')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.address') ?>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.address_proof')) : ?> has-error<?php endif ?>">
                                        <label for="login-address_proof">Address Proof</label>
                                        <i class="grey fa fa-map-marker"></i>
                                        <input type="file" class="form-control" id="login-address_proof" placeholder="Address Proof" name="address_proof" required>
                                    </div>
                                    <?php if(session('errors.address_proof')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.address_proof') ?>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <input type="checkbox" id="remember_me_checkbox">
                                        <label for="remember_me_checkbox">Rememrber Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="submit" class="theme_button color1">Create an account</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- .with_border -->

                <p class="divider_20 text-center">
                    Already registered? <a href="<?= route_to('login') ?>">Log In</a>.
                </p>

            </div>
            <!-- .col-* -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>