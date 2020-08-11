<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
        <section class="col-lg-8">
            <!-- Steps-->
            <?php $last = 2; include_once('Navigation/Steps.php'); ?>
            <div class="d-sm-flex justify-content-between align-items-center bg-secondary p-4 rounded-lg mb-grid-gutter">
                <div class="media align-items-center">
                    <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;"><span
                                class="badge badge-warning" data-toggle="tooltip" title=""
                                data-original-title="Reward points">384</span><img class="rounded-circle"
                                                                                   src="img/shop/account/avatar.jpg"
                                                                                   alt="Susan Gardner"></div>
                    <div class="media-body pl-3">
                        <h3 class="font-size-base mb-0">Susan Gardner</h3><span class="text-accent font-size-sm">s.gardner@example.com</span>
                    </div>
                </div>
                <a class="btn btn-light btn-sm btn-shadow mt-3 mt-sm-0" href="../../../../index.php"><i
                            class="czi-edit mr-2"></i>Edit profile</a>
            </div>
            <!-- Shipping address-->
            <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Shipping address</h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-fn">First Name</label>
                        <input class="form-control" type="text" id="checkout-fn">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-ln">Last Name</label>
                        <input class="form-control" type="text" id="checkout-ln">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-email">E-mail Address</label>
                        <input class="form-control" type="email" id="checkout-email">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-phone">Phone Number</label>
                        <input class="form-control" type="text" id="checkout-phone">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-company">Company</label>
                        <input class="form-control" type="text" id="checkout-company">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-country">Country</label>
                        <select class="form-control custom-select" id="checkout-country">
                            <option>Choose country</option>
                            <option>Australia</option>
                            <option>Canada</option>
                            <option>France</option>
                            <option>Germany</option>
                            <option>Switzerland</option>
                            <option>USA</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-city">City</label>
                        <select class="form-control custom-select" id="checkout-city">
                            <option>Choose city</option>
                            <option>Amsterdam</option>
                            <option>Berlin</option>
                            <option>New York</option>
                            <option>Paris</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-zip">ZIP Code</label>
                        <input class="form-control" type="text" id="checkout-zip">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-address-1">Address 1</label>
                        <input class="form-control" type="text" id="checkout-address-1">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="checkout-address-2">Address 2</label>
                        <input class="form-control" type="text" id="checkout-address-2">
                    </div>
                </div>
            </div>
            <h6 class="mb-3 py-3 border-bottom">Billing address</h6>
            <?php include_once('Navigation/Desktop.php') ?>
        </section>
        <?php include_once('Summary.php') ?>
    </div>
    <?php include_once('Navigation/Mobile.php') ?>
</div>