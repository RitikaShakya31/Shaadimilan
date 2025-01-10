<?php include('includes/header.php') ?>
<main class="main">
    <div class="hero-section">
        <div class="hero-single" style="background: url(assets/img/images/banner/4.png)">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9 col-lg-9 mx-auto">
                        <div class="hero-content text-center">
                            <div class="hero-content-shape">
                                <img class="hero-content-shape-1" src="<?= base_url() ?>assets/img/shape/06.png" alt="shadi Milan">
                                <!-- <img class="hero-content-shape-2" src="assets/img/shape/11.png" alt="shadi Milan"> -->
                            </div>
                            <h6 class="hero-sub-title fonts-lato">Experience the essence of this place</h6>
                            <p class="hero-title fonts-Raleway">
                                Where love meets destiny. Discover the story behind Shadi Milan that inspires us to create meaningful connections
                            </p>

                            <form class="search-form d-flex justify-content-center mt-4">
                                <select class="form-control me-2" aria-label="Looking For">
                                    <option selected>I'm looking for</option>
                                    <option value="bride">Bride</option>
                                    <option value="groom">Groom</option>
                                </select>
                                <select class="form-control me-2" aria-label="Age">
                                    <option selected>Age</option>
                                    <option value="18-25">18-25</option>
                                    <option value="26-35">26-35</option>
                                    <option value="36-45">36-45</option>
                                </select>
                                <select class="form-control me-2" aria-label="Religion">
                                    <option selected>Any Religion</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="christian">Christian</option>
                                    <option value="muslim">Muslim</option>
                                </select>
                                <select class="form-control me-2" aria-label="Mother Tongue">
                                    <option selected>Any Mother Tongue</option>
                                    <option value="english">English</option>
                                    <option value="hindi">Hindi</option>
                                    <option value="spanish">Spanish</option>
                                </select>
                                <button type="submit" class="btn btn-dark search-btn-1">Search</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline">Feature Profile</span>
                        <p class="site-title profile-feature">A profile showcases unique qualities. On <span>Shadi Milan</span>, <br>it celebrates love and connections.</p>
                        <div class="header-img-divider">
                            <img src="<?= base_url() ?>assets/img/images/shape.png" alt="shadi Milan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?= base_url() ?>assets/img/images/feature/4.png" alt="shadi Milan">
                        </div>
                        <div class="service-icon">
                            <i class="flaticon-wedding-ring"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="<?= base_url() ?>">Wedding Rings</a>
                            </h3>
                            <div class="service-arrow">
                                <a href="<?= base_url() ?>member_profile" class="service-btn">View Full Profile<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?= base_url() ?>assets/img/images/feature/5.png" alt="shadi Milan">
                        </div>
                        <div class="service-icon">
                            <i class="flaticon-wedding-ring"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="<?= base_url() ?>">Video & Photography</a>
                            </h3>
                            <div class="service-arrow">
                                <a href="<?= base_url() ?>member_profile" class="service-btn">View Full Profile<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="<?= base_url() ?>assets/img/images/feature/6.png" alt="shadi Milan">
                        </div>
                        <div class="service-icon">
                            <i class="flaticon-wedding-ring"></i>
                        </div>
                        <div class="service-content">
                            <h3 class="service-title">
                                <a href="<?= base_url() ?>">Anniversary Program</a>
                            </h3>
                            <div class="service-arrow">
                                <a href="<?= base_url() ?>member_profile" class="service-btn">View Full Profile<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pricing-area py-120">
        <div class="pricing-shape">
            <img src="<?= base_url() ?>assets/img/shape/07.png" alt="shadi Milan">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center mb-md-5">
                    <span class="site-title-tagline fs-22">Membership Plans</span>
                    <h2 class="site-title font-play">Get Started
                        Pick your  <span> Plan Now</span></h2>
                    <div class="header-img-divider">
                        <img src="<?= base_url() ?>assets/img/images/shape.png" alt="shadi Milan">
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <div class="pricing-item text-center">
                        <div class="pricing-header">
                            <h4 class="text-start">SHAADI MILAN MINI</h4>
                            <h1 class="pricing-amount">2000</h1>
                            <p class="text-start">3 months</p>
                        </div>
                        <div class="pricing-feature text-justify">
                            <p>
                                This package provides basic matchmaking services for a duration of 3 months, helping you begin your journey towards finding the perfect match.
                            </p>
                            <div class="d-flex mt-md-1 mt-3">
                            <a href="<?= base_url() ?>pay_now" class="theme-btn mt-md-3">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pricing-item text-center">
                        <div class="pricing-header">
                            <h4 class="text-start">SHAADI MILAN SILVER</h4>
                            <h1 class="pricing-amount">4499</h1>
                            <p class="text-start">5 months</p>
                        </div>
                        <div class="pricing-feature text-justify">
                            <p>
                                Our Silver package offers enhanced matchmaking services over a span of 5 months, allowing for a deeper and more personalized search.
                            </p>
                            <div class="d-flex mt-md-1 mt-3">
                            <a href="<?= base_url() ?>pay_now" class="theme-btn mt-md-3">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pricing-item text-center">
                        <div class="pricing-header">
                            <h4 class="text-start">SHAADI MILAN DIAMOND</h4>
                            <h1 class="pricing-amount">5999</h1>
                            <p class="text-start">7 months</p>
                        </div>
                        <div class="pricing-feature text-justify">
                            <p class="text-start">
                                The Diamond package offers premium matchmaking services for a duration of 7 months, ensuring a thorough and comprehensive search for your life partner.
                            </p>
                            <div class="d-flex mt-md-1 mt-3">
                            <a href="<?= base_url() ?>pay_now" class="theme-btn mt-md-3">Pay Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="time-place py-120 bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline fs-22">Our Success Stories</span>
                        <h2 class="site-title font-play fs-47">Where Hearts Find <span>Their <br>Perfect Match</span></h2>
                        <div class="header-img-divider">
                            <img src="<?= base_url() ?>assets/img/images/shape.png" alt="shadi Milan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4">
                    <div class="time-place-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="time-place-item-shape"><img src="<?= base_url() ?>assets/img/shape/06.png" alt="shadi Milan"></div>
                        <div class="time-place-title">
                            <h4 class="text-center">Mother Tongue</h4>
                            <div class="time-place-title-shape pt-md-1 pb-md-1"><img src="<?= base_url() ?>assets/img/shape/13.png" alt="shadi Milan"></div>
                        </div>
                        <div class="time-place-content">
                            <p>Bengali | Bhojpuri | Bihari | Gujarati | Haryanvi | Hindi | Maithili | Marathi | Oriya | Punjabi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="time-place-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="time-place-item-shape"><img src="<?= base_url() ?>assets/img/shape/06.png" alt="shadi Milan"></div>
                        <div class="time-place-title">
                            <h4 class="text-center">Religion</h4>
                            <div class="time-place-title-shape pt-md-1 pb-md-1"><img src="<?= base_url() ?>assets/img/shape/13.png" alt="shadi Milan"></div>
                        </div>
                        <div class="time-place-content">
                            <p>Christian - Catholic | parsi-Parsi | Christian - Protestant | Buddhist | Hindu | Muslim Shiya</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="time-place-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="time-place-item-shape"><img src="<?= base_url() ?>assets/img/shape/06.png" alt="shadi Milan"></div>
                        <div class="time-place-title">
                            <h4 class="text-center">Community</h4>
                            <div class="time-place-title-shape pt-md-1 pb-md-1"><img src="<?= base_url() ?>assets/img/shape/13.png" alt="shadi Milan"></div>
                        </div>
                        <div class="time-place-content">
                            <p>Agarwal | Brahmin | Chaurasia | Gupta | Joshi | Kshatriya | Patel | Rai | Rajput</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area py-120 mb-30">
        <div class="about-shape">
            <img class="about-shape-1" src="<?= base_url() ?>assets/img/shape/04.png" alt="shadi Milan">
            <img class="about-shape-2" src="<?= base_url() ?>assets/img/shape/05.png" alt="shadi Milan">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="about-img">
                            <img src="<?= base_url() ?>assets/img/images/about/1.png" alt="shadi Milan">
                        </div>
                        <div class="about-img-shape">
                            <img src="<?= base_url() ?>assets/img/shape/01.svg" alt="shadi Milan">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                        <div class="site-heading mb-3">
                            <span class="site-title-tagline who-we-are">Who We Are</span>
                            <h2 class="site-title font-play">Celebrating Diversity and <span>Uniqueness </span> in Every Bond
                            </h2>
                        </div>
                        <p class="about-text text-justify">At Shadi Milan, we are more than just a platform – we are a community dedicated to fostering meaningful connections. With a deep belief in the transformative power of relationships, we strive to create an environment where individuals can find companionship, friendship, and love that lasts a lifetime.</p>
                        <div class="about-list-wrapper">
                            <ul class="about-list list-unstyled">
                                <li>
                                    <div class="about-icon"><span class="fas fa-check-circle"></span></div>
                                    <div class="about-list-text">
                                        <p>At Shadi Milan, we believe in the transformative power of relationships.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-icon"><span class="fas fa-check-circle"></span></div>
                                    <div class="about-list-text">
                                        <p>We celebrate the diversity and uniqueness of every individual.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-icon"><span class="fas fa-check-circle"></span></div>
                                    <div class="about-list-text">
                                        <p>With Shadi Milan, you step into a world full of endless possibilities.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="about-bottom">
                            <a href="<?= base_url() ?>about" class="theme-btn">Read More <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonial-area bg py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                    <div class="site-heading text-center">
                        <span class="site-title-tagline who-we-are fs-22">Testimonials</span>
                        <h2 class="site-title font-play">What Our Client <span>Say's</span></h2>
                        <div class="header-img-divider">
                            <img src="<?= base_url() ?>assets/img/images/shape.png" alt="shadi Milan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                <div class="testimonial-single">
                    <div class="testimonial-shape"><img src="<?= base_url() ?>assets/img/shape/09.png" alt="shadi Milan"></div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="<?= base_url() ?>assets/img/images/user.png" alt="shadi Milan">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Ayesha & Arjun</h4>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            "Shadi Milan made our journey of finding each other effortless. The platform is easy to use and the connections we made were meaningful and real. We're grateful to have found each other through such a wonderful service!
                        </p>
                        <div class="testimonial-quote-icon">
                            <i class="flaticon-straight-quotes"></i>
                        </div>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-shape"><img src="<?= base_url() ?>assets/img/shape/09.png" alt="shadi Milan"></div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="<?= base_url() ?>assets/img/images/user.png" alt="shadi Milan">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Raj & Priya</h4>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            We couldn’t have asked for a better experience. Shadi Milan not only helped us find our perfect match but also connected us with amazing people along the way. The sense of community and care is truly special. </p>
                        <div class="testimonial-quote-icon">
                            <i class="flaticon-straight-quotes"></i>
                        </div>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-single">
                    <div class="testimonial-shape"><img src="<?= base_url() ?>assets/img/shape/09.png" alt="shadi Milan"></div>
                    <div class="testimonial-content">
                        <div class="testimonial-author-img">
                            <img src="<?= base_url() ?>assets/img/images/user.png" alt="shadi Milan">
                        </div>
                        <div class="testimonial-author-info">
                            <h4>Neha & Sameer</h4>
                        </div>
                    </div>
                    <div class="testimonial-quote">
                        <p>
                            Our experience with Shadi Milan was nothing short of magical. We appreciate how the platform brings together people with genuine intentions. It was the start of something beautiful, and we’re so thankful! </p>
                        <div class="testimonial-quote-icon">
                            <i class="flaticon-straight-quotes"></i>
                        </div>
                    </div>
                    <div class="testimonial-rate">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="quote-area py-120">
        <div class="container">
            <div class="quote-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="quote-img">
                            <img src="<?= base_url() ?>assets/img/quote/01.png" alt="shadi Milan">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="quote-content">
                            <div class="quote-header">
                                <h6>Get Free Quote</h6>
                                <h2>Feel Free To Contact With Us</h2>
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="phone" name="phone" class="form-control" placeholder="Contact">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="address" name="address" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Message"
                                        rows="4"></textarea>
                                </div>
                                <button class="theme-btn">Submit Now<i class="far fa-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>