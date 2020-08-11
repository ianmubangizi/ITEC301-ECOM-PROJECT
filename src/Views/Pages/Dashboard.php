<?php $tab = set_page_tab("Dashboard", 'settings'); ?>
<div class="page-title-overlap bg-dark pt-4">
    <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
        <div class="media media-ie-fix align-items-center pb-3">
            <div class="img-thumbnail rounded-circle position-relative" style="width: 6.375rem;">
                <img class="rounded-circle" src="<?php echo $user->image ?>"
                     alt="Image of <?php echo $user->full_name() ?> as manager @ <?php echo site() ?>">
            </div>
            <div class="media-body pl-3">
                <h3 class="text-light font-size-lg mb-0">
                    <?php echo site() ?> Dashboard
                </h3>
                <span class="d-block text-light font-size-ms opacity-60 py-1">
                    Manager: <?php echo $user->full_name() ?>
                </span>
            </div>
        </div>
        <div class="d-flex">
            <div class="text-sm-right mr-5">
                <div class="text-light font-size-base">Total Orders</div>
                <h3 class="text-light">375</h3>
            </div>
            <div class="text-sm-right mr-5">
                <div class="text-light font-size-base">Pending Orders</div>
                <h3 class="text-light">26</h3>
            </div>
        </div>
    </div>
</div>
<div class="container mb-5 pb-3">
    <div class="bg-light box-shadow-lg rounded-lg overflow-hidden">
        <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4">
                <div class="d-block d-lg-none p-4">
                    <a class="btn btn-outline-accent d-block" href="#account-menu"
                       data-toggle="collapse">
                        <i class="czi-menu mr-2"></i>Account menu</a>
                </div>
                <!-- Actual menu-->
                <div class="cz-sidebar-static h-100 p-0">
                    <div class="secondary-nav collapse border-right" id="account-menu">
                        <div class="bg-secondary p-4">
                            <h3 class="font-size-sm mb-0 text-muted">Dashboard</h3>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="border-bottom mb-0">
                                <a class="nav-link-style d-flex align-items-center px-4 py-3<?php echo active_tab('orders') ?>"
                                   href="<?php echo url_for('dashboard') . '?tab=orders' ?>">
                                    <i class="czi-dollar opacity-60 mr-2"></i>Orders
                                    <span class="font-size-sm text-muted ml-auto">375</span>
                                </a>
                            </li>
                            <li class="border-bottom mb-0">
                                <a class="nav-link-style d-flex align-items-center px-4 py-3<?php echo active_tab('products') ?>"
                                   href="<?php echo url_for('dashboard') . '?tab=products' ?>">
                                    <i class="czi-package opacity-60 mr-2"></i>Products
                                </a>
                            </li>
                            <li class="border-bottom mb-0">
                                <a class="nav-link-style d-flex align-items-center px-4 py-3<?php echo active_tab('inventory') ?>"
                                   href="<?php echo url_for('dashboard') . '?tab=inventory' ?>">
                                    <i class="czi-store opacity-60 mr-2"></i>Inventory
                                    <span class="font-size-sm text-muted ml-auto">5 <small>out of stock</small></span>
                                </a>
                            </li>
                            <li class="border-bottom mb-0">
                                <a class="nav-link-style d-flex align-items-center px-4 py-3<?php echo active_tab('settings') ?>"
                                   href="<?php echo url_for('dashboard') . '?tab=settings' ?>">
                                    <i class="czi-settings opacity-60 mr-2"></i>Site Settings
                                </a>
                            </li>
                            <li class="mb-0">
                                <a class="nav-link-style d-flex align-items-center px-4 py-3"
                                   href="<?php echo url_for('sign-out') ?>">
                                    <i class="czi-sign-out opacity-60 mr-2"></i>Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            <!-- Content-->
            <?php include_once(view("Dashboard\\$tab")) ?>
        </div>
    </div>
</div>