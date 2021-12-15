<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Social Activism</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="icon" href="<?= base_url('assets/favicon.ico') ?>" type="image/x-icon" />
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animations.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/fonts.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>" class="color-switcher-link">
    <script src="<?= base_url('assets/js/vendor/modernizr-2.6.2.min.js') ?>"></script>

    <!--[if lt IE 9]>
    <script src="<?= base_url('assets/js/vendor/html5shiv.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/respond.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/vendor/jquery-1.12.4.min.js') ?>"></script>
    <![endif]-->
    <?= $this->renderSection('frontend_css') ?>
</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- search modal -->
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
    </button>
    <div class="widget widget_search">
        <form method="get" class="searchform search-form form-inline" action="https://html.modernwebtemplates.com/social-activism/">
            <div class="form-group">
                <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
            </div>
            <button type="submit" class="theme_button">Search</button>
        </form>
    </div>
</div>

<!-- Unyson messages modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls with_padding">

        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->

    </div>
</div>
<!-- eof .modal -->
<div id="canvas">
    <div id="box_wrapper">

        <?php if (uri_string() != 'login' && uri_string() != 'signup'){?>
        <?= view('template/navbar') ?>
        <?php } ?>


        <?= $this->renderSection('frontend_content') ?>


        <?php if (uri_string() != 'login' && uri_string() != 'signup'){?>
        <?= view('template/footer') ?>
        <?php }?>

        <?= view('template/copyright') ?>
    </div>
    <!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->

<script src="<?= base_url('assets/js/compressed.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>

<?= $this->renderSection('frontend_script') ?>

</body>

</html>
