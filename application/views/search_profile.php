<?php include('includes/header.php') ?>
<main class="main">
    <div class="site-breadcrumb" style="background: url(assets/img/images/banner-1.png)">
        <div class="container">
            <h2 class="breadcrumb-title">Search Profile</h2>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-5">
            <h4 class="text-white mb-4 filter-profile-1">Filter Profile By</h4>
                <div class="filter-widget p-4 search-profile-1">
                    <form>
                        <div class="mb-3">
                            <label class="text-white">Marital Status</label>
                            <select class="form-control bg-white">
                                <option>Select Marital Status</option>
                                <option>Single</option>
                                <option>Married</option>
                                <option>Divorced</option>
                                <option>Widowed</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="text-white">Select Language</label>
                            <select class="form-control bg-white">
                                <option>Select Language</option>
                                <option>English</option>
                                <option>Hindi</option>
                                <option>Punjabi</option>
                                <option>Gujarati</option>
                                <option>Tamil</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="text-white">Select City</label>
                            <select class="form-control bg-white">
                                <option>Select City</option>
                                <option>Mumbai</option>
                                <option>Delhi</option>
                                <option>Bangalore</option>
                                <option>Chennai</option>
                                <option>Kolkata</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="text-white">Education</label>
                            <select class="form-control bg-white">
                                <option>Select Education</option>
                                <option>High School</option>
                                <option>Bachelor's Degree</option>
                                <option>Master's Degree</option>
                                <option>Doctorate</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="text-white">Religion</label>
                            <select class="form-control bg-white">
                                <option>Select Religion</option>
                                <option>Hindu</option>
                                <option>Muslim</option>
                                <option>Christian</option>
                                <option>Sikh</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-md-12 text-center">
                        <a href="<?= base_url() ?>search_profile" class="theme-btn mt-md-3 w-50 search-btn">Search</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card p-4 search-cards-1">
                    <div class="row">
                        <div class="d-flex gap-2 mb-3 justify-content-end">
                            <a href="<?= base_url() ?>member_profile">
                            <button class="btn btn-danger btn-sm" aria-label="User Profile">
                                <i class="fas fa-user"></i>
                            </button>
                            </a>
                            <a href="<?= base_url() ?>print_profile">
                            <button class="btn btn-danger btn-sm" aria-label="Print">
                                <i class="fas fa-print"></i>
                            </button>
                            </a>
                            <a href="<?= base_url() ?>">
                            <button class="btn btn-danger btn-sm" aria-label="Share">
                                <i class="fas fa-share"></i>
                            </button>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <h5 class="card-title text-danger mb-2">Iqra Khans</h5>
                            <p class="text-muted mb-3">Free | R17971</p>
                        </div>

                        <div class="col-md-4">
                            <div class="content-box-1">
                                <p class="text-muted mb-0">
                                    <i class="fas fa-quote-left me-2"></i>Hii my name is ritika shakya<i class="fas fa-quote-right ms-2"></i>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <ul class="list-unstyled">
                                <li><strong>Height:</strong> 5ft.1in - 155cm</li>
                                <li><strong>Cast:</strong> ---</li>
                                <li><strong>Religion:</strong> Christian - Catholic</li>
                                <li><strong>Education:</strong> ---</li>
                                <li><strong>Occupation:</strong> ---</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>