<?= $this->extend('template/header') ?>
<?= $this->section('frontend_content') ?>

<section class="page_breadcrumbs cs gradient2 parallax section_padding_top_50 section_padding_bottom_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Contact</h2>
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="<?= route_to('frontend.index') ?>">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section id="map" class="ls" data-address="Terracina, LT, Italia">
    <!-- marker description and marker icon goes here -->
    <div class="map_marker_description">
        <h3>Map Title</h3>
        <p>Map description text</p>
        <!-- <img class="map_marker_icon" src="images/map_marker_icon.png" alt=""> -->
    </div>
</section>

<section class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="module-header">Contact Form</h3>
            </div>
        </div>
        <div class="row">

            <div class="col-md-8 to_animate" data-animation="scaleAppear">

                <form class="contact-form columns_padding_5" method="post" action="https://html.modernwebtemplates.com/social-activism/">


                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Full Name
                                <span class="required">*</span>
                            </label>
                            <i class="fa fa-user highlight" aria-hidden="true"></i>
                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone">Phone Number
                                <span class="required">*</span>
                            </label>
                            <i class="fa fa-phone highlight" aria-hidden="true"></i>
                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email address
                                <span class="required">*</span>
                            </label>
                            <i class="fa fa-envelope highlight" aria-hidden="true"></i>
                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="subject">Subject
                                <span class="required">*</span>
                            </label>
                            <i class="fa fa-flag highlight" aria-hidden="true"></i>
                            <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                    <div class="col-sm-12">

                        <div class="contact-form-message form-group">
                            <label for="message">Message</label>
                            <i class="fa fa-comment highlight" aria-hidden="true"></i>
                            <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 bottommargin_0">

                        <div class="contact-form-submit topmargin_10">
                            <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1 wide_button margin_0">Send message</button>
                        </div>
                    </div>


                </form>
            </div>

            <div class="col-md-4 to_animate" data-animation="scaleAppear">

                <ul class="list1 no-bullets no-top-border no-bottom-border">

                    <li>
                        <div class="media">
                            <div class="media-left">
                                <i class="rt-icon2-shop highlight fontsize_18"></i>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading grey">Postal Address:</h5>
                                PO Box 97845 Some str. 567, Los Angeles, California, United States
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <i class="rt-icon2-phone5 highlight fontsize_18"></i>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading grey">Phone:</h5>
                                8(800) 123-12345
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <i class="rt-icon2-stack4 highlight fontsize_18"></i>
                            </div>
                            <div class="media-body">
                                <h5 class="media-heading grey">Fax:</h5>
                                8(800) 123-12345
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <i class="rt-icon2-mail highlight fontsize_18"></i>
                            </div>
                            <div class="media-body greylinks">
                                <h5 class="media-heading grey">Email:</h5>
                                <a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection#374e584245775a565e5b1954585a"><span class="__cf_email__" data-cfemail="1d6e727e747c715d78657c706d7178337e7270">[email&#160;protected]</span></a>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</section>


<?= $this->endSection() ?>

<?= $this->section('frontend_css') ?>

<?= $this->endSection() ?>
<?= $this->section('frontend_script') ?>

<?= $this->endSection() ?>