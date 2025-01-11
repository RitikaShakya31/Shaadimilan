<footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-50 pb-50">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="<?= base_url()?>" class="footer-logo">
                                <img src="<?= base_url()?>assets/img/images/footer-logo.png" alt="shadi Milan">
                            </a>
                            <p class="mb-4">
                            At Shadi Milan, we are dedicated to creating meaningful connections that last a lifetime.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="<?= base_url() ?>"><i class="fas fa-angle-double-right"></i>Home</a></li>
                                <li><a href="<?= base_url()?>membership"><i class="fas fa-angle-double-right"></i>Membership</a></li>
                                <li><a href="<?= base_url()?>quick_search"><i class="fas fa-angle-double-right"></i>Search</a></li>
                                <li><a href="<?= base_url()?>payment"><i class="fas fa-angle-double-right"></i>Payment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Important Links</h4>
                            <ul class="footer-list">
                                <li><a href="<?= base_url() ?>about"><i class="fas fa-angle-double-right"></i>About Us</a></li>
                                <li><a href="<?= base_url()?>contact"><i class="fas fa-angle-double-right"></i>Contact Us</a></li>
                                <li><a href="<?= base_url()?>privacy_policy"><i class="fas fa-angle-double-right"></i>Privacy Policy</a></li>
                                <li><a href="<?= base_url()?>terms_condition"><i class="fas fa-angle-double-right"></i>Terms Condition</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Social Media</h4>
                            <ul class="footer-social">
                            <li><a href="<?= $contact[0]['facebook'] ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?= $contact[0]['twitter'] ?>"><i class="fab fa-x-twitter"></i></a></li>
                            <li><a href="<?= $contact[0]['linkedin'] ?>"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="<?= $contact[0]['youtube'] ?>"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="<?= base_url() ?>"> Shadi Milan </a> All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" id="scroll-top"><i class="far fa-angle-up"></i></a>

