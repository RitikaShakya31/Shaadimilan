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
                                    <h4 class="card-title">Update Contact</h4>
                                    <p><?= $msg; ?></p>
                                    <form method="post" enctype="multipart/form-data">
                                    <?php
                                            $i = 1;
                                            if (!empty($contact)) {
                                                foreach ($contact as $row) {
                                                    $count = getNumRows('contact', array('id' => $row['id']));
                                            ?>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="tb-fname" placeholder="" name="address" value="<?= $row['address']; ?>">
                                                    <label for="tb-fname">Address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="tb-fname" placeholder="" name="number" value="<?= $row['number']; ?>">
                                                    <label for="tb-fname">Phone Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="tb-fname" placeholder="" name="email" value="<?= $row['email']; ?>">
                                                    <label for="tb-fname">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="tb-fname" placeholder="" name="twitter" value="<?= $row['twitter']; ?>">
                                                    <label for="tb-fname">Twitter</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="tb-fname" placeholder="" name="facebook" value="<?= $row['facebook']; ?>">
                                                    <label for="tb-fname">Facebook</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="tb-fname" placeholder="" name="instagram" value="<?= $row['instagram']; ?>">
                                                    <label for="tb-fname">Instagram</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="tb-fname" placeholder="" name="youtube" value="<?= $row['youtube']; ?>">
                                                    <label for="tb-fname">Youtube</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="tb-fname" placeholder="" name="linkedin" value="<?= $row['linkedin']; ?>">
                                                    <label for="tb-fname">Linkedin</label>
                                                </div>
                                            </div>
                                            

                                            <div class="col-2">
                                                <div class="align-items-center ">
                                                    <div class="">
                                                        <button type="submit" class="btn btn-primary text-white">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                                }
                                            }
                                            ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
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
                                            if (!empty($contact_list)) {
                                                foreach ($contact_list as $row) {
                                                    $count = getNumRows('contact_list', array('id' => $row['id']));
                                            ?>

                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $row['address']; ?></td>
                                                        <td><?= $row['number']; ?></td>
                                                        <td><?= $row['email']; ?></td>
                                                        <td><a href="<?= base_url('contact-delete/' .  $row['id']) ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>  -->
                    <!-- end row -->

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