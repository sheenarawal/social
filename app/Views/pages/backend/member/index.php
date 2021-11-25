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
                    <li class="active">Posts</li>
                </ol>
            </div>
            <!-- .col-* -->
            <div class="col-md-6 ">

                <?php if (session('success')) { ?>
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong><?= session('success') ?>
                    </div>
                <?php } ?>
                <?php if (session('error')) { ?>
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <strong>Error!</strong><?= session('error') ?>
                    </div>
                <?php } ?>
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
            <div class="col-md-12">
                <h3>Posts</h3>
            </div>
            <!-- .col-* -->
        </div>
        <!-- .row -->

        <div class="row">
            <div class="col-xs-12">
                <div class="with_border with_padding">

                    <div class="row admin-table-filters">
                        <div class="col-lg-9">

                            <form action="https://html.modernwebtemplates.com/social-activism/"
                                  class="form-inline filters-form">
                                <span>
                                    <label class="grey" for="with-selected">With Selected:</label>
                                    <select class="form-control with-selected" name="with-selected"
                                            id="with-selected">
                                        <option value="">-</option>
                                        <option value="approve">Approve</option>
                                        <option value="publish">Publish</option>
                                        <option value="delete">Delete</option>
                                    </select>
                                </span>
                                <span class="hidden">
                                    <label class="grey" for="orderby">Sort By:</label>
                                    <select class="form-control orderby" name="orderby" id="orderby">
                                        <option value="date" selected>Date</option>
                                        <option value="author">Author</option>
                                        <option value="title">Title</option>
                                        <option value="status">Status</option>
                                    </select>
                                </span>

                                <span>
                                    <label class="grey" for="showcount">Show:</label>
                                    <select class="form-control showcount" name="showcount" id="showcount">
                                        <option value="10" selected>10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </span>
                            </form>

                        </div>
                        <!-- .col-* -->
                        <div class="col-lg-3 text-lg-right">
                            <div class="widget widget_search">

                                <form method="get" action="<?=route_to('backend.post.index')?> ">
                                    <!-- <div class="form-group-wrap"> -->
                                    <div class="form-group">
                                        <label class="sr-only" for="widget-search">Search for:</label>
                                        <input id="widget-search" type="text" value="" name="search"
                                               class="form-control" placeholder="Search Here...">
                                    </div>
                                    <button type="submit" class="theme_button color1">Search</button>
                                    <!-- </div> -->
                                </form>
                            </div>

                        </div>
                        <!-- .col-* -->
                    </div>
                    <!-- .row -->


                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th class="media-middle text-center">
                                    <input type="checkbox">
                                </th>
                                <th>Name:</th>
                                <th>User Name:</th>
                                <th>Mobile:</th>
                                <th>address:</th>
                                <th>Status:</th>
                                <th>Action:</th>
                            </tr>
                            <?php foreach ($users as $data){ ?>
                                <tr class="item-editable">
                                    <td class="media-middle text-center">
                                        <input type="checkbox">
                                    </td>
                                    <td class="media-middle">
                                        <h5>
                                            <a href="<?=route_to('backend.post.edit').'?id='.$data['id'] ?>">
                                                <?= $data['name']?>
                                            </a>
                                        </h5>
                                    </td>
                                    <td class="media-middle">
                                        <?= $data['username']?>
                                    </td>
                                    <td class="media-middle">
                                        <?= $data['mobile']?>
                                    </td>
                                    <td class="media-middle">
                                        <?= $data['address']?>
                                    </td>
                                    <td class="media-middle">
                                        <?php if ($data['status'] == 1): ?>
                                        <span class="text-success">Approve</span>
                                        <?php else:?>
                                            <span class="text-danger">Pending</span>
                                        <?php endif ?>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link " href="<?=route_to('backend.member.edit').'?id='.$data['id'] ?>">
                                                <i class="fa fa-pencil-square-o text-success" aria-hidden="true"></i></a>
                                            <a class="btn btn-link " href="<?=route_to('backend.member.delete').'?id='.$data['id'] ?>">
                                                <i class="fa fa-trash-o " aria-hidden="true"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php }?>
                        </table>
                    </div>
                    <!-- .table-responsive -->
                </div>
                <!-- .with_border -->
            </div>
            <!-- .col-* -->
        </div>
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-6">
                        <?= $pager->links() ?>
                    </div>
                    <div class="col-md-6 text-md-right">
                        Showing 1 to 6 of 12 items
                    </div>
                </div>
            </div>
        </div>
        <!-- .row main columns -->
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

<?= $this->endSection() ?>
