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
                                <h4 class="card-title">Add Social Links</h4>
                                <p><?= $msg; ?></p>
                                <form method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="tb-fname" placeholder="" name="icon">
                                                <label for="tb-fname">Address</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="tb-fname" placeholder="" name="url">
                                                <label for="tb-fname">Phone Number</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="tb-fname" placeholder="" name="url">
                                                <label for="tb-fname">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="d-md-flex align-items-center mt-3">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <button type="submit" name="submit" class="btn btn-primary text-white">Submit</button>
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

                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap ">
                                        <thead>
                                            <tr>
                                                <th>S.no.</th>  
                                                <th>Address</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if (!empty($contact)) {
                                                foreach ($contact as $row) {
                                                    // $count = getNumRows('search', array('id' => $row['id']));
                                            ?>

                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $row['address'] ?></td>
                                                        <td><?= $row['number'] ?></td>
                                                        <td><?= $row['email'] ?></td>
                                                        <td><a href="<?= base_url('contact-delete/' . $row['id']) ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
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