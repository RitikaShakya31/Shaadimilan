<?php include('includes/header.php') ?>
<main class="main">


<div class="login-area py-120" style="background: url(assets/img/images/blur-background3.png);"> 
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="login-form">
                <div class="login-header">
                    <img src="<?= base_url() ?>assets/img/images/Shadi.png" alt="Shadi Milan">
                    <p>Reset your Shadi Milan account password</p>
                </div>
                <form action="">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="d-flex align-items-center">
                        <button type="submit" class="theme-btn"><i class="far fa-key"></i> Send Reset
                            Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</main>

<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>