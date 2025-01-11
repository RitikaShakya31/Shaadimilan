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
                    <?php ('includes/pagetitle.php'); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap ">
                                        <thead>
                                            <tr>
                                                <th>S.no.</th>  
                                                <th>Gender</th>
                                                <th>Age From</th>
                                                <th>Age To</th>
                                                <th>Religion</th>
                                                <th>Mother Tongue</th>
                                                <th>Photo</th>
                                                <th>Horoscope</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if (!empty($search_list)) {
                                                foreach ($search_list as $row) {
                                                    $count = getNumRows('search', array('id' => $row['id']));
                                            ?>

                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $row['sex'] ?></td>
                                                        <td><?= $row['agefrom'] ?></td>
                                                        <td><?= $row['ageto'] ?></td>
                                                        <td><?= $row['religion'] ?></td>
                                                        <td><?= $row['mtongue'] ?></td>
                                                        <td><?= $row['chkphoto'] ?></td>
                                                        <td><?= $row['chkhoro'] ?></td>
                                                       
                                                        <!-- <td><a href="<?= base_url('company-delete/' . $row['id']) ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td> -->
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