<?php

use Mubangizi\Models\Basket;

$basket = new Basket(0, WISHLIST);
$tab = set_page_tab("Account", 'info');
?>
<div class="container pb-5 mb-2 mb-md-3">
    <div class="row">
        <aside class="col-lg-4 pt-4 pt-lg-0">
            <div class="cz-sidebar-static rounded-lg box-shadow-lg px-0 pb-0 mb-5 mb-lg-0">
                <div class="px-4 mb-4">
                    <div class="media align-items-center">
                        <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;">
                            <img class="rounded-circle" src="<?php echo $user->image ?>" alt="Susan Gardner">
                        </div>
                        <div class="media-body pl-3">
                            <h3 class="font-size-base mb-0"><?php echo $user->full_name() ?></h3>
                            <span class="text-accent font-size-sm"><?php echo $user->email ?></span>
                        </div>
                    </div>
                </div>
                <div class="bg-secondary px-4 py-3">
                    <h3 class="font-size-sm mb-0 text-muted">Account</h3>
                </div>
                <ul class="list-unstyled mb-0">
                    <li class="border-bottom mb-0">
                        <a class="nav-link-style d-flex align-items-center px-4 py-3<?php echo active_tab('info', $tab) ?>"
                           href="<?php echo url_for('profile') . '?tab=info' ?>">
                            <i class="czi-user opacity-60 mr-2"></i>Profile info
                        </a>
                    </li>
                    <li class="border-bottom mb-0">
                        <a class="nav-link-style d-flex align-items-center px-4 py-3<?php echo active_tab('orders') ?>"
                           href="<?php echo url_for('profile') . '?tab=orders' ?>">
                            <i class="czi-bag opacity-60 mr-2"></i>Orders
                            <span class="font-size-sm text-muted ml-auto">1</span>
                        </a>
                    </li>
                    <li class="border-bottom mb-0">
                        <a class="nav-link-style d-flex align-items-center px-4 py-3<?php echo active_tab('wishlist') ?>"
                           href="<?php echo url_for('profile') . '?tab=wishlist' ?>">
                            <i class="czi-heart opacity-60 mr-2"></i>Wishlist
                            <?php if ($basket->count() > 0): ?>
                                <span class="font-size-sm text-muted ml-auto"><?php echo $basket->count() ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                </ul>
                <div class="bg-secondary px-4 py-3">
                    <h3 class="font-size-sm mb-0 text-muted">Settings</h3>
                </div>
                <ul class="list-unstyled mb-0">
                    <li class="border-bottom mb-0">
                        <a class="nav-link-style d-flex align-items-center px-4 py-3<?php echo active_tab('addresses') ?>"
                           href="<?php echo url_for('profile') . '?tab=addresses' ?>">
                            <i class="czi-location opacity-60 mr-2"></i>Addresses
                        </a>
                    </li>
                    <li class="mb-0">
                        <a class="nav-link-style d-flex align-items-center px-4 py-3<?php echo active_tab('payment-methods') ?>"
                           href="<?php echo url_for('profile') . '?tab=payment-methods' ?>">
                            <i class="czi-card opacity-60 mr-2"></i>Payment methods
                        </a>
                    </li>
                    <li class="d-lg-none border-top mb-0">
                        <a class="nav-link-style d-flex align-items-center px-4 py-3"
                           href="<?php echo url_for('sign-out') ?>">
                            <i class="czi-sign-out opacity-60 mr-2"></i>Sign out
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <?php include_once(view("Account\\$tab")) ?>
    </div>
</div>