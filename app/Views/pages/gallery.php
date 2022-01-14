<?= $this->extend('template/header') ?>
<?= $this->section('frontend_content') ?>


    <section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>About</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="index-2.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                        </li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


<section class="ls page_portfolio section_padding_top_130 section_padding_bottom_130">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <div class="filters hidden isotope_filters darklinks">
                    <a href="#" class="selected" data-filter="*">All</a>
                    <a href="#" data-filter=".activism">Activism</a>
                    <a href="#" data-filter=".events">Events</a>
                    <a href="#" data-filter=".projects">Projects</a>
                    <a href="#" data-filter=".participants">Participants</a>
                </div>

                <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters">
                    <?php foreach ($gallery as $item):?>
                    <div class="isotope-item col-lg-4 col-md-6 col-sm-12 activism">
                        <div class="vertical-item gallery-item content-absolute text-center ds">
                            <div class="item-media">
                                <img src="<?= base_url('uploads/'.$item['media'])?>" alt="">
                                <div class="media-links">
                                    <div class="links-wrap">
                                        <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="<?= base_url('uploads/'.$item['media'])?>"></a>

                                    </div>
                                </div>
                            </div>
                            <div class="item-content darken_gradient">
                                <h4 class="poppins">
                                    <a href="gallery-single.html"><?= $item['title'] ?></a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <!-- eof .isotope_container.row -->

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <?= $pager->links() ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



<?= $this->endSection() ?>

<?= $this->section('frontend_css') ?>

<?= $this->endSection() ?>
<?= $this->section('frontend_script') ?>
    <script src="<?= base_url('assets/js/switcher.js') ?>"></script>
<?= $this->endSection() ?>