<?= $this->extend('template/backend/header') ?>
<?= $this->section('backend_content') ?>
<section class="ls with_bottom_border">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <ol class="breadcrumb darklinks">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="active">Calendar</li>
                </ol>
            </div>
            <!-- .col-* -->
            <div class="col-md-6 ">
                <span class="dashboard-daterangepicker hidden">
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
            <!-- Calendar -->
            <div class="col-md-8 col-md-offset-2 ">

                <h3 class="module-title darkgrey_bg_color">Events</h3>
                <div class="events_calendar"></div>

            </div>
        </div>

    </div>
    <!-- .container -->
</section>

<?= $this->endSection() ?>

<?= $this->section('backend_css') ?>
<style>
    .pagination>li:first-child>a, .pagination>li:first-child>span
    {
        margin-right: 0;
    }
</style>
<?= $this->endSection() ?>
<?= $this->section('backend_script') ?>
<script>
    jQuery('.events_calendar').fullCalendar(
        {
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek'
            },
            defaultDate: "<?=date('Y-m-d')?>",
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            navLinks: true,
            aspectRatio: 1,
            events: <?php echo $calendar_view;?>
        }
    );
</script>
<?= $this->endSection() ?>
