<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<!-- Mirrored from html.modernwebtemplates.com/social-activism/admin_inbox.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 08:43:44 GMT -->
<head>
    <title>Social Activism</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animations.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/fonts.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" class="color-switcher-link">
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>" class="color-switcher-link">
    <script src="<?= base_url('assets/js/vendor/modernizr-2.6.2.min.js')?>"></script>

    <!--[if lt IE 9]>
    <script src="<?= base_url('assets/js/vendor/html5shiv.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/respond.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <![endif]-->

    <?= $this->renderSection('backend_css') ?>

</head>

<body class="admin">

<div class="preloader">
    <div class="preloader_image"></div>
</div>

<?php if (session('error')):?>
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-danger">Error ! </h4>
                    <h5><?= session('error') ?></h5>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>

<?php if (session('success')):?>
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-success">Success ! </h4>
                <h5><?= session('success') ?></h5>
            </div>
        </div>
    </div>
</div>
<!-- eof .modal -->
<?php endif;?>

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="admin_contact_modal">
    <!-- <div class="ls with_padding"> -->
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form class="with_padding contact-form" method="post" action="">
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Contact Admin</h3>
                        <div class="contact-form-name">
                            <label for="name">Full Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="contact-form-subject">
                            <label for="subject">Subject
                                <span class="required">*</span>
                            </label>
                            <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="contact-form-message">
                            <label for="message">Message</label>
                            <textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 text-center">
                        <div class="contact-form-submit">
                            <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button wide_button color1">Send Message</button>
                            <button type="reset" id="contact_form_reset" name="contact_reset" class="theme_button wide_button">Clear Form</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- eof .modal -->

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">


        <?= view('template/backend/sidebar') ?>

        <?= $this->renderSection('backend_content') ?>
        <?= $this->renderSection('backend_copyright') ?>
        <?= $this->renderSection('backend_footer') ?>

    </div>
    <!-- eof #box_wrapper -->
</div>

<a class="side-button side-contact-button" data-target="#admin_contact_modal" href="#admin_contact_modal" data-toggle="modal" role="button">
    <i class="fa fa-envelope"></i>
</a>

<?= view('template/backend/script') ?>

<?= $this->renderSection('backend_script') ?>
<script>
    $(document).ready(function () {
        $('#messages_modal').modal('show')
    })
</script>
</body>


</html>
