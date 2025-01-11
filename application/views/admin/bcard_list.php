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
                                                <th>Reg. Date</th>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Logo</th>
                                                <th>Email</th>
                                                <th>View</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i=1;
                                            if (!empty($bcard_list)) {
                                                foreach ($bcard_list as $row) {
                                                    // $count = getNumRows('tbl_register', array('company_id' => $row['id']));
                                            ?>

                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= convertDatedmy($row['create_date']); ?></td>
                                                        <td><?= $row['name']; ?></td>
                                                        <td><?= $row['designation']; ?></td>
                                                        <td><img src="<?= base_url('uploads/bcard/' . $row['logo']) ?>" style="width:50px;"/>
                                                        </td>
                                                        <td><?= $row['email']; ?></td>
                                                        <td><a href="<?= base_url($row['slug_company'].'/'.$row['slug_url']) ?>"  target="_blank" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                                                        <td><a href="<?= base_url('add-bcard/'.$row['id']) ?>" class="btn btn-primary">Edit</a></td>
                                                        <td><a href="<?= base_url('bcard-delete/'.$row['id']) ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
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