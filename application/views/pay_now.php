<?php include('includes/header.php') ?>
<main class="main">
    <div class="site-breadcrumb" style="background: url(assets/img/images/banner-1.png)">
        <div class="container">
            <h2 class="breadcrumb-title">Payment</h2>
        </div>
    </div>
    <div class="shop-checkout py-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="checkout-widget">
                        <div class="checkout-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="transaction-id">Transaction ID</label>
                                            <input
                                                type="text"
                                                id="transaction-id"
                                                class="form-control"
                                                placeholder="Transaction ID" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="membership-type">Membership Type</label>
                                            <input
                                                type="text"
                                                id="membership-type"
                                                class="form-control"
                                                value="RISHTEY SILVAR"
                                                readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                            <input
                                                type="text"
                                                id="amount"
                                                class="form-control"
                                                value="4499"
                                                readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="duration">Duration</label>
                                            <input
                                                type="text"
                                                id="duration"
                                                class="form-control"
                                                value="5 months"
                                                readonly />
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                    <a href="<?= base_url() ?>payment" class="theme-btn mt-md-3 w-auto">Pay Now</a>
                                    </div>
                                </div>
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