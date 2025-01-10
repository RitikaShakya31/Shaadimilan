<?php include('includes/header.php') ?>
<main class="main">

    <div class="site-breadcrumb" style="background: url(assets/img/images/banner-1.png)">
        <div class="container">
            <h2 class="breadcrumb-title">Search Your Partner
            </h2>
        </div>
    </div>
    <div class="tabs-container">
    <div class="tabs">
        <a href="<?=base_url()?>" class="tab">Quick Search</a>
        <a href="<?=base_url()?>advance_search" class="tab">Advance Search</a>
        <a href="<?=base_url()?>keryword_search" class="tab">Keyword Search</a>
        <a href="<?=base_url()?>profile_search" class="tab active">Search by Profile Id</a>
    </div>
</div>

<div class="login-area py-120 pt-0">
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="login-form">
                <div class="login-header">
                    <h2>Profile Search</h2>
                </div>
                <form action="">
                    <div class="form-group">
                        <label>Profile Id</label>
                        <input type="text" class="form-control" placeholder="Enter Profile Id">
                        <small class="form-text text-muted">Search by: Profile Id</small>
                    </div>
                </form>
                <a href="<?=base_url()?>search_profile" class="theme-btn mt-md-3 w-50">Search</a>
            </div>
        </div>
    </div>
</div>

</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>