<?php include('includes/header.php'); ?>
<body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include('includes/top-header.php'); ?>
        <?php include('includes/menu.php'); ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <?php include('includes/pagetitle.php'); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>S.no.</th>
                                                <!-- <th>Reg. Date</th> -->
                                                <th>Name</th>
                                                <th>Video</th>
                                                <!-- <th>Email</th> -->
                                                <!-- <th>BCard</th> -->
                                                <!-- <th>Edit</th> -->
                                                <!-- <th>Delete</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if (!empty($blog_list)) {
                                                foreach ($blog_list as $row) {
                                                    $count = getNumRows('tbl_blogs', array('id' => $row['id']));
                                            ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $row['name']; ?></td>
                                                        <td><video src="<?= base_url('uploads/video' . $row['video']) ?>"></video></td>
                                                        <td><a href="<?= base_url('blog-delete/' . $row['id']) ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <?php include('includes/footer.php') ?>
        </div>
        <!-- end main content-->
    </div>
    <?php include('includes/footer-link.php'); ?>
</body>
</html>