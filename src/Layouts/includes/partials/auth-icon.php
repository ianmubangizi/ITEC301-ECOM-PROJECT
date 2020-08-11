<?php $user = get_user();
if ($user->role === CUSTOMER | $user->role === MANAGER):
    if ($user->role === CUSTOMER): ?>
        <a class="navbar-tool d-none d-lg-flex" href="<?php echo url_for('profile') . '?tab=wishlist' ?>">
            <span class="navbar-tool-tooltip">Wishlist</span>
            <div class="navbar-tool-icon-box">
                <i class="navbar-tool-icon czi-heart"></i>
            </div>
        </a>
    <?php endif; ?>
    <div class="navbar-tool dropdown ml-2 ml-lg-2">
        <span class="navbar-tool-tooltip">Profile</span>
        <a class="navbar-tool-icon-box<?php echo $user->image ? ' border ' : ' ' ?>dropdown-toggle"
           href="<?php echo $user->role === CUSTOMER ? url_for('profile') : url_for('dashboard') ?>">
            <?php if ($user->image): ?>
                <img class="rounded-circle" style="max-height: 38px; max-width: 38px" src="<?php echo $user->image ?>"
                     alt="Profile image of <?php echo $user->full_name() ?>">
            <?php else: ?>
                <i class="navbar-tool-icon czi-user"></i>
            <?php endif; ?>
        </a>
        <a class="navbar-tool-text ml-n1">
            <small><?php echo $user->firstname ?></small><?php echo trim_string($user->lastname, 10) ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" style="min-width: 14rem;">
            <?php if ($user->role === CUSTOMER): ?>
                <h6 class="dropdown-header">Account</h6>
                <a class="dropdown-item d-flex align-items-center"
                   href="<?php echo url_for('profile') . '?tab=info' ?>">
                    <i class="czi-user opacity-60 mr-2"></i>Profile
                </a>
                <a class="dropdown-item d-flex align-items-center"
                   href="<?php echo url_for('profile') . '?tab=orders' ?>">
                    <i class="czi-basket opacity-60 mr-2"></i>Orders
                </a>
                <a class="dropdown-item d-flex align-items-center"
                   href="<?php echo url_for('profile') . '?tab=wishlist' ?>">
                    <i class="czi-heart opacity-60 mr-2"></i>Wishlist
                    <span class="font-size-xs text-muted ml-auto">4</span>
                </a>
            <?php else: ?>
                <h6 class="dropdown-header">Dashboard</h6>
                <a class="dropdown-item d-flex align-items-center"
                   href="<?php echo url_for('dashboard') . '?tab=orders' ?>">
                    <i class="czi-dollar opacity-60 mr-2"></i>Orders
                    <span class="font-size-xs text-muted ml-auto">375</span>
                </a>
                <a class="dropdown-item d-flex align-items-center"
                   href="<?php echo url_for('dashboard') . '?tab=products' ?>">
                    <i class="czi-package opacity-60 mr-2"></i>Products
                </a>
                <a class="dropdown-item d-flex align-items-center"
                   href="<?php echo url_for('dashboard') . '?tab=inventory' ?>">
                    <i class="czi-store opacity-60 mr-2"></i>Inventory
                    <span class="font-size-xs text-muted ml-auto">5</span>
                </a>
            <?php endif; ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item d-flex align-items-center" href="<?php echo url_for('sign-out') ?>">
                <i class="czi-sign-out opacity-60 mr-2"></i>Sign Out
            </a>
        </div>
    </div>
<?php else: ?>
    <a class="navbar-tool ml-1 ml-lg-0 mr-n1 mr-lg-2" href="#auth-modal" data-toggle="modal">
        <span class="navbar-tool-tooltip">Sign in / Sign up</span>
        <div class="navbar-tool-icon-box dropdown">
            <i class="navbar-tool-icon czi-sign-in"></i>
        </div>
    </a>
<?php endif; ?>