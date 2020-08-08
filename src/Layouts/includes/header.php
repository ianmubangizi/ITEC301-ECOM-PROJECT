<header class="bg-light box-shadow-sm navbar-sticky">
    <div class="navbar navbar-expand-lg navbar-light py-0">
        <div class="container">
            <a class="navbar-brand d-none d-sm-block mr-4 order-lg-1"
               href="<?php echo url_for('index') ?>"
               style="min-width: 7rem;">
                <img width="128" src="<?php echo static_file('img', 'banner-black.png'); ?>"
                     alt="Logo for <?php echo $app->site; ?>"/>
            </a>
            <a class="navbar-brand d-sm-none mr-2 order-lg-1" href="<?php echo url_for('index') ?>"
               style="min-width: 4.625rem;">
                <img width="28" src="<?php echo static_file('img', 'logo-icon-black.png'); ?>"
                     alt="Logo for <?php echo $app->site; ?>"/>
            </a>
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-tool d-none d-lg-flex" href="#search-collapse" data-toggle="collapse" role="button"
                   aria-expanded="false" aria-controls="search-collapse">
                    <span class="navbar-tool-tooltip">Search</span>
                    <div class="navbar-tool-icon-box">
                        <i class="navbar-tool-icon czi-search"></i>
                    </div>
                </a>
                <?php include_once('partials/auth-icon.php'); ?>
                <?php include_once('partials/cart-icon.php'); ?>
            </div>
            <div class="collapse navbar-collapse mr-auto order-lg-2" id="navbar-collapse">
                <!-- Search-->
                <div class="input-group-overlay d-lg-none my-3">
                    <label for="search-box-collapse" class="input-group-prepend-overlay">
                        <span class="input-group-text">
                            <i class="czi-search"></i>
                        </span>
                    </label>
                    <input id="search-box-collapse" class="form-control prepended-form-control" type="text"
                           placeholder="Search for pages or products">
                </div>
                <!-- Primary menu-->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url_for('index') ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?php echo url_for('shop') ?>">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url_for('about-us') ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo url_for('contact-us') ?>">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="search-box collapse" id="search-collapse">
        <div class="card pt-2 pb-4 border-0 rounded-0">
            <div class="container">
                <div class="input-group-overlay">
                    <label for="search-box" class="input-group-prepend-overlay">
                        <span class="input-group-text">
                            <i class="czi-search"></i>
                        </span>
                    </label>
                    <input id="search-box" class="form-control prepended-form-control" type="text"
                           placeholder="Search for pages or products">
                </div>
            </div>
        </div>
    </div>
</header>
