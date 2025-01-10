<body>
<div class="preloader">
    <div class="loader">
        <div class="loader-shadow"></div>
        <div class="loader-box"></div>
        <img src="<?= base_url() ?>assets/img/images/favicon.png" alt="Shadi Milan" class="loader-image">
    </div>
</div>

    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <div class="header-top-left">
                        <div class="header-top-contact">
                            <ul>
                                <li>
                                    <div class="header-top-contact-info">
                                        <a href="<?= base_url()?>"><i class="far fa-map-marker-alt"></i>Bhopal</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-top-contact-info">
                                        <a href=""><i class="far fa-envelope"></i>
                                            <span class="__cf_email__">@infoshadimilan.com</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-top-right">
                        <div class="header-top-social">
                            <a href="<?= base_url()?>"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?= base_url()?>"><i class="fab fa-x-twitter"></i></a>
                            <a href="<?= base_url()?>"><i class="fab fa-instagram"></i></a>
                            <a href="<?= base_url()?>"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="<?= base_url()?>">
                        <img src="<?= base_url()?>assets/img/images/Shadi.png" alt="Shadi Milan">
                    </a>
                    <div class="mobile-menu-right">
                        <!-- <div class="mobile-menu-list">
                            <a href="#" class="mobile-menu-link search-box-outer"><i class="far fa-search"></i></a>
                        </div> -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-btn-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="<?= base_url()?>">Home</a>
                            </li>
                            <li class="nav-item dropdown fonts-Raleway">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown">Search</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="<?= base_url()?>quick_search">Quick Search</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url()?>advance_search">Advance Search</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url()?>keryword_search">Keyword Search</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url()?>profile_search">Search by Id</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>membership">Membership</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>payment">Payment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url() ?>login">Login</a>
                            </li>
                        </ul>
                       
                    </div>
                    <div class="header-nav-right">
                            <div class="header-btn">
                                <a href="<?= base_url() ?>register" class="theme-btn">Register <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div> -->


