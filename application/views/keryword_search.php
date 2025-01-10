<?php include('includes/header.php') ?>
<main class="main">

    <div class="site-breadcrumb" style="background: url(assets/img/images/banner-1.png)">
        <div class="container">
            <h2 class="breadcrumb-title">Search Your Partner</h2>
        </div>
    </div>
    <div class="tabs-container">
    <div class="tabs">
        <a href="<?=base_url()?>" class="tab">Quick Search</a>
        <a href="<?=base_url()?>advance_search" class="tab">Advance Search</a>
        <a href="<?=base_url()?>keryword_search" class="tab active">Keyword Search</a>
        <a href="<?=base_url()?>profile_search" class="tab">Search by Profile Id</a>
    </div>
</div>

<div class="login-area py-120 pt-0">
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="login-form">
                <div class="login-header">
                    <h2>Keyword Search</h2>
                </div>
                <form action="#">
                    <div class="form-group">
                        <label>Looking for</label>
                        <select class="form-control">
                            <option value="groom">Groom</option>
                            <option value="bride">Bride</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Age</label>
                        <select class="form-control">
                            <option value="">Select Age</option>
                            <option value="18-25">18-25</option>
                            <option value="26-30">26-30</option>
                            <option value="31-35">31-35</option>
                            <option value="36-40">36-40</option>
                            <option value="40+">40+</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Keyword Search</label>
                        <input type="text" class="form-control" placeholder="Enter keyword">
                        <small class="form-text text-muted">Keywords: eg: Brahmin, Engineer, Delhi, Religious</small>
                    </div>
                </form>
                <a href="<?= base_url() ?>search_profile" class="theme-btn mt-md-3 w-50">Search</a>
            </div>
        </div>
    </div>
</div>

</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>