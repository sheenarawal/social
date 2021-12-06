<style>
    .razorpay-payment-button{
        margin-top: -30px;
    }
</style>
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
                            <!--<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_ISvS3hfcz9J8kN" async> </script>-->
                            <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_ITKSLe3ivsKPOO" data-key="<?=$key?>" async> </script>
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
                                    <div class="form-group has-placeholder <?php if(session('errors.guardian')) : ?> has-error<?php endif ?>">
                                        <label for="login-guardian">Son/Daughter/Wife:Sri/Late</label>
                                        <i class="grey fa fa-users" aria-hidden="true"></i>
                                        <input type="text" class="form-control" id="login-guardian" placeholder="Son/Daughter/Wife:Sri/Late" name="guardian" required>
                                    </div>
                                    <?php if(session('errors.guardian')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.guardian') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group <?php if(session('errors.photo')) : ?> has-error<?php endif ?>">
                                        <label for="login-photo">Photo</label>
                                        <i class="grey fa fa-picture-o"  style="top: 50px"></i>
                                        <input type="file" class="form-control" id="login-photo" placeholder="Photo" name="photo" required>
                                    </div>
                                    <?php if(session('errors.photo')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.photo') ?>
                                        </div>
                                    <?php }?>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group <?php if(session('errors.address_proof')) : ?> has-error<?php endif ?>">
                                        <label for="login-address_proof">Address Proof</label>
                                        <i class="grey fa fa-map-marker" style="top: 50px"></i>
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
                                <div class="col-md-12">
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
                                    <div class="form-group has-placeholder <?php if(session('errors.ps')) : ?> has-error<?php endif ?>">
                                        <label for="login-ps">P.S.</label>
                                        <i class="grey fa fa-map-marker"></i>
                                        <input type="text" class="form-control" id="login-ps" placeholder="PS" name="ps" required>
                                    </div>
                                    <?php if(session('errors.ps')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.ps') ?>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.district')) : ?> has-error<?php endif ?>">
                                        <label for="login-district:">District:</label>
                                        <i class="grey fa fa-thumb-tack"></i>
                                        <input type="text" class="form-control" id="login-district:" placeholder="district:" name="district:" required>
                                    </div>
                                    <?php if(session('errors.district:')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.district:') ?>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.state')) : ?> has-error<?php endif ?>">
                                        <label for="login-state">State</label>
                                        <i class="grey fa fa-location-arrow"></i>
                                        <input type="text" class="form-control" id="login-state" placeholder="state" name="state" required>
                                    </div>
                                    <?php if(session('errors.state')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.state') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.pin')) : ?> has-error<?php endif ?>">
                                        <label for="pin">PIN</label>
                                        <i class="grey fa fa-map-pin"></i>
                                        <input type="text" class="form-control" id="pin" placeholder="PIN" name="pin" required>
                                    </div>
                                    <?php if(session('errors.pin')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.pin') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.land_mark')) : ?> has-error<?php endif ?>">
                                        <label for="login-land_mark">Nearest Location(Land Mark)</label>
                                        <i class="grey fa fa-map-signs"></i>
                                        <input type="text" class="form-control" id="land_mark" placeholder="Nearest Location(Land Mark)" name="land_mark" required>
                                    </div>
                                    <?php if(session('errors.land_mark')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.land_mark') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.dob')) : ?> has-error<?php endif ?>">
                                        <label for="login-dob">Data of Birth</label>
                                        <i class="grey fa fa-calendar-check-o"></i>
                                        <input type="text" class="form-control" id="login-dob" placeholder="Data of Birth" name="dob" required>
                                    </div>
                                    <?php if(session('errors.dob')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.dob') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.age')) : ?> has-error<?php endif ?>">
                                        <label for="login-age">Age</label>
                                        <i class="grey fa fa-map-marker"></i>
                                        <input type="text" class="form-control" id="login-age" placeholder="Age" name="age" required>
                                    </div>
                                    <?php if(session('errors.age')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.age') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.sex')) : ?> has-error<?php endif ?>">
                                        <label for="login-sex">Sex</label>
                                        <i class="grey fa fa-user" aria-hidden="true"></i>
                                        <input type="text" class="form-control" id="login-sex" placeholder="Sex" name="sex" required>
                                    </div>
                                    <?php if(session('errors.sex')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.sex') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.qualification')) : ?> has-error<?php endif ?>">
                                        <label for="login-qualification">Qualification</label>
                                        <i class="grey fa fa-book"></i>
                                        <input type="text" class="form-control" id="login-qualification" placeholder="Qualification" name="qualification" required>
                                    </div>
                                    <?php if(session('errors.qualification')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.qualification') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.curricular_activities')) : ?> has-error<?php endif ?>">
                                        <label for="login-curricular_activities">Extra Curricular activities</label>
                                        <i class="grey fa fa-map-marker"></i>
                                        <input type="text" class="form-control" id="login-curricular_activities" placeholder="Extra Curricular activities" name="curricular_activities" required>
                                    </div>
                                    <?php if(session('errors.curricular_activities')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.curricular_activities') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.blood_group')) : ?> has-error<?php endif ?>">
                                        <label for="login-blood_group">Blood Group</label>
                                        <i class="grey fa fa-tint"></i>
                                        <input type="text" class="form-control" id="login-blood_group" placeholder="Blood Group" name="blood_group" required>
                                    </div>
                                    <?php if(session('errors.blood_group')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.blood_group') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.occupation')) : ?> has-error<?php endif ?>">
                                        <label for="login-occupation">Occupation</label>
                                        <i class="grey fa fa-map-marker"></i>
                                        <input type="text" class="form-control" id="login-occupation" placeholder="Occupation" name="occupation" required>
                                    </div>
                                    <?php if(session('errors.occupation')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.occupation') ?>
                                        </div>
                                    <?php }?>
                                </div>
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

                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.other_society')) : ?> has-error<?php endif ?>">
                                        <label for="login-other_society">If Attached with any other society</label>
                                        <i class="grey fa fa-globe"></i>
                                        <input type="text" class="form-control" id="login-other_society" placeholder="If Attached with any other society" name="other_society" required>
                                    </div>
                                    <?php if(session('errors.other_society')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.other_society') ?>
                                        </div>
                                    <?php }?>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group has-placeholder <?php if(session('errors.introduced_by')) : ?> has-error<?php endif ?>">
                                        <label for="login-introduced_by">Introduced by</label>
                                        <i class="grey fa fa-handshake-o"></i>
                                        <input type="text" class="form-control" id="login-introduced_by" placeholder="Introduced by" name="introduced_by" required>
                                    </div>
                                    <?php if(session('errors.introduced_by')) { ?>
                                        <div class='text-danger'>
                                            <?= session('errors.introduced_by') ?>
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
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <input type="checkbox" id="already_paid" name="already_paid" value="yes">
                                        <label for="already_paid">Already Paid</label>
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