<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>FAQ 2</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="index-2.html">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="active">FAQ 2</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="ls section_padding_100 columns_padding_25">
    <div class="container">
        <div class="row vertical-tabs">
            <div class="col-sm-5">

                <!-- Nav tabs -->
                <ul class="nav" role="tablist">
                    <?php $i=1; 
                    foreach ($faq as $data){  ?>
                    <li <?php if($i==1){ ?> class="active" <?php } ?>>
                        <a href="#vertical-tab<?php echo $i; ?>" role="tab" data-toggle="tab"><?php echo $data['title']; ?></a>
                    </li>
                <?php $i++; } ?>
                </ul>

            </div>

            <div class="col-sm-7">

                <!-- Tab panes -->
                <div class="tab-content no-border">
                    <?php $j=1;
                    foreach ($faq as $data){ ?>
                    <div class="tab-pane fade <?php if($j==1){ ?> in active <?php } ?>" id="vertical-tab<?php echo $j; ?>">
                        <h3 class="poppins"><?php echo $data['title']; ?>?</h3>
                        <p><?php echo $data['description']; ?></p>
                    </div>
                    <?php $j++; } ?>
                </div>

            </div>


        </div>

    </div>
</section>