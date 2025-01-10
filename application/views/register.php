<?php include('includes/header.php') ?>
<main class="main">
    <div class="rsvp-area py-120" style="background: url(assets/img/images/register-background2.png);">
        <div class="container">
            <div class="col-md-12 col-lg-8 mx-lg-auto">
                <div class="rsvp-form">
                    <div class="rsvp-form-shape">
                        <img class="rsvp-form-shape-1" src="<?= base_url() ?>assets/img/shape/14.png" alt="shadi Milan">
                        <img class="rsvp-form-shape-2" src="<?= base_url() ?>assets/img/shape/10.png" alt="shadi Milan">
                    </div>
                    <div class="row">
                        <div class="col-12 mx-auto wow fadeInDown" data-wow-duration="1s" data-wow-delay=".25s">
                            <div class="site-heading text-center">
                                <h2 class="site-title">Sign Up Today to Unlock <br> Exclusive Benefits!</h2>
                                <p>Already a member? <a href="<?= base_url() ?>login">Login</a></p>
                                <div class="header-img-divider">
                                <img src="<?= base_url() ?>assets/img/images/shape.png" alt="shadi Milan">
                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">Mobile:</label>
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Number">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email" readonly>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="upload-image">Upload Image:</label>
                                    <input type="file" id="upload-image" name="upload_image" class="form-control">
                                </div>
                            </div>

                            <div class="text-center mb-4">
                                <h3>Basic Information</h3>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="role">Bride/Groom:</label>
                                    <select class="form-select" id="role" name="role">
                                        <option value="">Select</option>
                                        <option value="bride">Bride</option>
                                        <option value="groom">Groom</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gender">Gender:</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="height">Height:</label>
                                    <select id="height" name="height" class="form-select">
                                        <option value="">Select Height</option>
                                        <option value="4ft 5in">4ft 5in</option>
                                        <option value="4ft 6in">4ft 6in</option>
                                        <option value="4ft 7in">4ft 7in</option>
                                        <option value="4ft 8in">4ft 8in</option>
                                        <option value="4ft 9in">4ft 9in</option>
                                        <option value="4ft 10in">4ft 10in</option>
                                        <option value="4ft 11in">4ft 11in</option>
                                        <option value="5ft">5ft</option>
                                        <option value="5ft 1in">5ft 1in</option>
                                        <option value="5ft 2in">5ft 2in</option>
                                        <option value="5ft 3in">5ft 3in</option>
                                        <option value="5ft 4in">5ft 4in</option>
                                        <option value="5ft 5in">5ft 5in</option>
                                        <option value="5ft 6in">5ft 6in</option>
                                        <option value="5ft 7in">5ft 7in</option>
                                        <option value="5ft 8in">5ft 8in</option>
                                        <option value="5ft 9in">5ft 9in</option>
                                        <option value="5ft 10in">5ft 10in</option>
                                        <option value="5ft 11in">5ft 11in</option>
                                        <option value="6ft">6ft</option>
                                        <option value="6ft 1in">6ft 1in</option>
                                        <option value="6ft 2in">6ft 2in</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="language">Language:</label>
                                    <input type="text" id="language" name="language" class="form-control" placeholder="Language">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                    <input type="date" id="dob" name="dob" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="religion">Religion:</label>
                                    <input type="text" id="religion" name="religion" class="form-control" placeholder="Religion">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="marital-status">Marital Status:</label>
                                    <select id="marital-status" name="marital_status" class="form-select">
                                        <option value="">Select Marital Status</option>
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="divorced">Divorced</option>
                                        <option value="widowed">Widowed</option>
                                    </select>
                                </div>
                            </div>

                            <div class="text-center mb-4">
                                <h3>Contact Information</h3>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    <input type="text" id="country" name="country" class="form-control" placeholder="State" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="state">State:</label>
                                    <input type="text" id="state" name="state" class="form-control" placeholder="State" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="city">City:</label>
                                    <input type="text" id="city" name="city" class="form-control" placeholder="City" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contact-address">Contact:</label>
                                    <input type="text" id="contact-address" name="contact_address" class="form-control" placeholder="Contact" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mobile">Mobile:</label>
                                    <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="citizenship">Citizenship:</label>
                                    <input type="text" id="citizenship" name="citizenship" class="form-control" placeholder="Citizenship" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">Creating an account means you’re okay with our <a href="#">Terms of Service</a>, <a href="#">Privacy Policy</a>, and our default <a href="#">Notification Settings</a>.</label>
                                </div>
                            </div>

                        </div>
                       <div class="col-md-12 text-center">
                       <a href="<?= base_url() ?>search_profile" class="theme-btn mt-md-3 w-50">Create Account</a>
                       </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>




</main>

<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>