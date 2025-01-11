<?php include('includes/header.php'); ?>

<body data-sidebar="dark">
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
                    <h5>Add Membership plans</h5>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body" >
                                    <!-- <h4 class="card-title mb-4">Form Grid Layout</h4> -->
                                    <form  method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label text-uppercase">Membership Title</label>
                                                    <input type="name" class="form-control" placeholder="Enter Heading" name="heading" value="<?= $card['heading'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label text-uppercase">Tags</label>
                                                    <input type="name" class="form-control" placeholder="Enter Tags For Membership plan" name="sub_head" value="<?= $card['sub_head'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label text-uppercase">Amount</label>
                                                    <input type="name" class="form-control" placeholder="Enter Amount" name="amt" value="<?= $card['amt'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label text-uppercase">Duration</label>
                                                    <input type="name" class="form-control" placeholder="Number of Months" name="duration" value="<?= $card['duration'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label text-uppercase">Membership Description</label>
                                                    <input type="name" class="form-control" placeholder="Enter Description"   name="discription" value="<?= $card['discription'] ?>" required>
                                                </div>
                                            </div>
                                            <div >
                                            
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>

                                        </div>
                                        
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <div class="row">
                        <h5 class="mt-3">View Membership plans</h5>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body" style="overflow: auto; "     >

                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>S.no.</th>
                                                <th>Membership Title </th>
                                                <th>Tags</th>
                                                <th>Amount</th>
                                                <th>Duration</th>
                                                <th>Membership Description</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if (!empty($membership)) {
                                                foreach ($membership as $row) {
                                                    $count = getNumRows('membership', array('id' => $row['id']));
                                            ?>

                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $row['heading']; ?></td>
                                                        <td><?= $row['sub_head']; ?></td>
                                                        <td><?= $row['amt']; ?></td>
                                                        <td><?= $row['duration']; ?></td>
                                                        <td  style="white-space: break-spaces;"><?= $row['discription']; ?></td>
                                                        <td><a href="<?= base_url('member-delete/' .  $row['id']) ?>" onclick="return confirm('Are you sure to delete this data?')" class="btn btn-danger">Delete</a></td>
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