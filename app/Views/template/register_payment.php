
<!-- template sections -->
<section class="ls section_padding_top_100 section_padding_bottom_100 section_full_height">
    <div class="container">
        <div class="row">
            <?php $validation = \Config\Services::validation(); ?>
            <div class="col-md-8 col-sm-offset-2 to_animate">
                <div class="with_border with_padding">
                    <h4 class="text-center">
                        Member Donation
                    </h4>
                    <hr class="bottommargin_30">
                    <div class="wrap-forms">
                        <form method="post" class="pay_btn" action="<?= route_to('register.payment.store')?>" enctype="multipart/form-data">

                            <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_ISvXHa1vbSiJRp" async> </script>
                            <div class="">
                                <a class="theme_button color1" href="">Create an account</a>

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
<style>
    .pay_btn{
        display: flex;
    }
    .btn-outer{
        text-align: right;
        padding-right: 10px;
        width: 50%;
    }
    }
</style>