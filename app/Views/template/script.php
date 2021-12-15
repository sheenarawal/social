</div>
<!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->

<!--<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
<script src="<?= base_url('assets/js/compressed.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>
<!-- <script>
    $(document).ready(function() {
        if ($(window).width() <= 767) {
            $('.sf-menu').append($('#social_icons').html());
            $('#social_icons').fadeOut();
        }
    });
</script> -->
<script>
    $(document).ready(function() {
        $('#already_paid').change(function() {
            if(this.checked) {
                $('.razorpay-payment-button').hide();
            } else {
                $('.razorpay-payment-button').show();
            }

        });
    });
</script>

</body>


<!-- Mirrored from html.modernwebtemplates.com/social-activism/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 08:41:54 GMT -->
</html>