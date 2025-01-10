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
        <a href="<?=base_url()?>advance_search" class="tab active">Advance Search</a>
        <a href="<?=base_url()?>keryword_search" class="tab">Keyword Search</a>
        <a href="<?=base_url()?>profile_search" class="tab">Search by Profile Id</a>
    </div>
</div>

<div class="login-area py-120 pt-0">
    <div class="container">
        <div class="col-md-8 mx-auto">
            <div class="login-form">
                <div class="login-header">
                    <h2>Advance Search</h2>
                </div>
                <form action="">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Looking for</label>
                            <select class="form-control">
                                <option value="groom">Groom</option>
                                <option value="bride">Bride</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Marital Status</label>
                            <select class="form-control">
                                <option value="single">Single</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Have Children</label>
                            <select class="form-control">
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                                <option value="doesnt-matter">Doesn't matter</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
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

                        <div class="form-group col-md-6">
                            <label>Height</label>
                            <input type="text" class="form-control" placeholder="Enter height">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Complexion</label>
                            <input type="text" class="form-control" placeholder="Enter complexion">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Manglik</label>
                            <select class="form-control">
                                <option value="any">Any</option>
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                                <option value="anshik">Anshik</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Eating Habits</label>
                            <select class="form-control">
                                <option value="any">Any</option>
                                <option value="vegetarian">Vegetarian</option>
                                <option value="non-vegetarian">Non-Vegetarian</option>
                                <option value="eggetarian">Eggetarian</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Mother tongue</label>
                            <input type="text" class="form-control" placeholder="Enter mother tongue">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Religion</label>
                            <select class="form-control">
                                <option value="">Select Religion</option>
                                <option value="hindu">Hindu</option>
                                <option value="muslim">Muslim</option>
                                <option value="christian">Christian</option>
                                <option value="sikh">Sikh</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Caste</label>
                            <input type="text" class="form-control" placeholder="Enter caste">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Education</label>
                            <input type="text" class="form-control" placeholder="Enter education">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Occupation</label>
                            <input type="text" class="form-control" placeholder="Enter occupation">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Employed in</label>
                            <select class="form-control">
                                <option value="any">Any</option>
                                <option value="government">Government</option>
                                <option value="private">Private</option>
                                <option value="business">Business</option>
                                <option value="defence">Defence</option>
                                <option value="not-working">Not working</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Country</label>
                            <input type="text" class="form-control" placeholder="Enter country">
                        </div>

                        <div class="form-group col-md-6">
                            <label>State</label>
                            <input type="text" class="form-control" placeholder="Enter state">
                        </div>

                        <div class="form-group col-md-6">
                            <label>City</label>
                            <input type="text" class="form-control" placeholder="Enter city">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Citizenship</label>
                            <input type="text" class="form-control" placeholder="Enter citizenship">
                        </div>

                        <div class="form-group col-md-6">
                            <label>Profile with</label>
                            <select class="form-control">
                                <option value="photo">Photo</option>
                                <option value="any">Any</option>
                            </select>
                        </div>
                    </div>

                    <a href="<?= base_url() ?>search_profile" class="theme-btn mt-md-3 w-50">Search</a>
                </form>
            </div>
        </div>
    </div>
</div>



</main>
<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>