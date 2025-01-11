<?php include ('includes/header.php'); ?>

<body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include ('includes/top-header.php'); ?>
        <?php include ('includes/menu.php'); ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
          
            <div class="page-content">
                <div class="container-fluid">
                    <?php include ('includes/pagetitle.php'); ?>
                    <div class="row">
                        <h5>Add Occupation</h5>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label text-uppercase">Occupation Type</label>
                                                    <input type="name" class="form-control" placeholder="Enter Occupation Type"
                                                        name="name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3"  style="margin-top:28px;">
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>

                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <div class="row">
                    <h5 class="mt-3">View Occupation List</h5>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body" style="overflow: auto; ">
                                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Occupation </th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        if (!empty($occupation)) {
                                            foreach ($occupation as $row) {
                                                ?>
                                                <tr>
                                                    <td><?= $i++; ?></td>
                                                    <td><?= $row['name']; ?></td>
                                                    <td><a href="<?= base_url('adminDashboard/occupation_delete/' . $row['id']) ?>"
                                                            onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>

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

        <?php include ('includes/footer.php') ?>
    </div>
    <!-- end main content-->
    </div>
    <?php include ('includes/footer-link.php'); ?>
</body>

</html>