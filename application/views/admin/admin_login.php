    <?php include('includes/header.php'); ?>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary-subtle">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <!-- <p>Sign in to continue to Digital BCard.</p> -->
                                        <?php
                                        if ($this->session->has_userdata('msg')) {
                                            echo $this->session->userdata('msg');
                                            $this->session->unset_userdata('msg');
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="<?= base_url() ?>assets/admin/images/profile-img.png" alt="" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <!-- <div class="auth-logo">
                                <a href="<?= base_url() ?>login" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="<?= base_url() ?>assets/admin/images/logo-light.svg" alt="" class="rounded-circle" height="34" />
                                        </span>
                                    </div>
                                </a>

                                <a href="<?= base_url() ?>login" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="<?= base_url() ?>assets/image/digitallogo.png" alt="" class="rounded-circle" height="34" />
                                        </span>
                                    </div>
                                </a>
                            </div> -->
                            <div class="p-2">
                                <form class="form-horizontal" action="<?= base_url('adminlogin/validatelogin') ?>" method="post">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="admin_email" name="email" placeholder="Enter username" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" name="password" />
                                            <button class="btn btn-light" type="button" id="password-addon">
                                                <i class="mdi mdi-eye-outline"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                            Log In
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="mt-5 text-center">
                        <div>
                            <p>
                                Don't have an account ?
                                <a href="#" class="fw-medium text-primary"> Signup now </a>
                            </p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->
    <script src="<?= base_url() ?>assets/admin/libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url() ?>assets/admin/libs/node-waves/waves.min.js"></script>

    <!-- App js -->
    <script src="<?= base_url() ?>assets/admin/js/app.js"></script>
</body>

</html>