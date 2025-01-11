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
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label text-uppercase"> Name</label>
                                                    <input type="name" class="form-control" placeholder="Enter Your name" name="name" value="<?= $card['name'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label text-uppercase">E-mail</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email " >
                                                </div>
                                            </div>

                                            <!-- <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label text-uppercase">Designation</label>
                                                    <input type="text" class="form-control" placeholder="XXXX" name="designation" value="<?= $card['designation'] ?>" required>
                                                </div>
                                            </div> -->

                                            <!-- <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label text-uppercase">Company</label>
                                                    <select class="form-control" name="company_id" id="company_id">
                                                        <option>Select Company</option>
                                                        
                                                    </select>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label text-uppercase">services</label>
                                                    <input type="text" class="form-control" placeholder="XXXX" name="services" value="<?= $card['services'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label text-uppercase">phone1</label>
                                                    <input type="text" class="form-control" placeholder="XXXX" name="phone1" value="<?= $card['phone1'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label text-uppercase">phone2</label>
                                                    <input type="text" class="form-control" placeholder="XXXX" name="phone2" value="<?= $card['phone2'] ?>" required>
                                                </div>
                                            </div> -->
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="message" class="form-label text-uppercase">Message</label>
                                                    <input type="message" class="form-control"  name="message" value="<?= $card['message'] ?>" required>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label text-uppercase">Email</label>
                                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="email" value="<?= $card['email'] ?>" required>
                                                </div>
                                            </div> -->
                                          
                         

                                            <!-- <div class="col-md-4 <?= ($card['logo'] == '') ? 'd-none' : '' ?>">
                                                <div class="mb-3">
                                                    <img src="<?= base_url('uploads/bcard/' . $card['logo']) ?>" style="width:50px;" />
                                                </div>
                                            </div> -->

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