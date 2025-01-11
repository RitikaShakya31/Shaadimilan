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
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label text-uppercase">Franchisee
                                                        Address</label>
                                                    <textarea class="form-control" placeholder="Enter Address"
                                                        name="address" rows="10" required><?= $address ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="margin-top:28px;">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h5 class="mt-3">View Religion List</h5>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body" style="overflow: auto; ">
                                    <table id="datatable-buttons"
                                        class="table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>S.no.</th>
                                                <th>Address </th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if (!empty($franchisee)) {
                                                foreach ($franchisee as $row) {
                                                    $id = encryptId($row['id']);
                                                    ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $row['address']; ?></td>
                                                        <td>
                                                        <a href="<?= base_url("franchisee-list?id=$id"); ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                                                            <a href="<?= base_url('adminDashboard/franchisee_delete/' . $row['id']) ?>"
                                                                onclick="return confirm('Are you sure to delete this data?')"
                                                                class="btn btn-danger">Delete</a></td>
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
                    </div>
                </div>
            </div>
            <?php include('includes/footer.php') ?>
        </div>
        <!-- end main content-->
    </div>
    <?php include('includes/footer-link.php'); ?>
</body>
</html>