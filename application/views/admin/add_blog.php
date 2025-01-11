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
                                    <form  method="post" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Blog Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter video Name"  value="<?= $blog['name'] ?>" required>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <!-- <label for="video" class="form-label">Video</label> -->
                                                    <input type="file" name="video" id="video" accept="video/*">
                                                </div>
                                            </div>
                                            <div class="col-md-4 <?= ($blog['video'] == '') ? 'd-none' : '' ?>">
                                                <div class="mb-3">
                                                    <video src="<?= base_url('uploads/video/' . $blog['video']) ?>" ></video>
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