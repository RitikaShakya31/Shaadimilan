<?php include('includes/header.php') ?>
<main class="main">

<!-- <div class="site-breadcrumb" style="background: url(<?= base_url() ?>assets/img/breadcrumb/01.jpg)">
    <div class="container">
        <h2 class="breadcrumb-title">Login</h2>
    </div>
</div> -->

<div class="login-area py-120" style="background: url(assets/img/images/blur-background3.png);">
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="login-form">
                <div class="login-header">
                    <img src="<?= base_url() ?>assets/img/images/Shadi.png" alt="Shadi Milan">
                    <p>Login with your Shadi Milan account</p>
                </div>
                <form action="#">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Your Password">
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>
                        <a href="<?= base_url() ?>forget_password" class="forgot-pass">Forgot Password?</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <button type="submit" class="theme-btn"><i class="far fa-sign-in"></i> Login</button>
                    </div>
                </form>
                <div class="login-footer">
                    <p>Don't have an account? <a href="<?= base_url() ?>register">Register.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>