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
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <!-- <h4 class="card-title mb-4">Form Grid Layout</h4> -->
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Course Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Company Name" name="name" value="<?= $company['name'] ?>" required>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Logo</label>
                                                    <input type="file" class="form-control" name="logo" placeholder="Enter Your Email ID" accept="image/png, image/gif, image/jpeg">
                                                </div>
                                            </div>
                                          
                                            <div class="col-md-4 <?= ($company['logo'] == '') ? 'd-none' : '' ?>">
                                                <div class="mb-3">
                                                    <img src="<?= base_url('uploads/' . $company['logo']) ?>" style="width:50px;" />
                                                </div>
                                            </div>

                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>

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