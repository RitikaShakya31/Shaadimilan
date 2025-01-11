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
                                    <h4 class="card-title">Add Profile</h4>
                                    <p><?= $msg; ?></p>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="tb-fname" placeholder="" name="name">
                                                    <label for="tb-fname">Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-floating mb-3">
                                                    <input type="file" class="form-control" id="image-file" name="image">
                                                    <label for="image-file">Select Image</label>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="d-md-flex align-items-center mt-3">
                                                    <div class="ms-auto mt-3 mt-md-0">
                                                        <button type="submit" class="btn btn-primary text-white">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>S.no.</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if (!empty($feature_profile)) {
                                                foreach ($feature_profile as $row) {
                                                    $count = getNumRows('feature_profile', array('id' => $row['id']));
                                            ?>

                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $row['name']; ?></td>
                                                        <td><img src="<?= base_url('uploads/' . $row['image']) ?>" style="width:50px;" /></td>
                                                        <td><a href="<?= base_url('feature-delete/' .  $row['id']) ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
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