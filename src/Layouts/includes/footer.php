<footer class="bg-dark pt-5">
    <div class="container">
        <div class="row pb-2">
            <div class="col-md-4 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">Product Categories</h3>
                    <ul class="widget-list">
                        <?php foreach (get_categories() as $category): ?>
                            <li class="widget-list-item">
                                <a class="widget-list-link"
                                   href="<?php echo url_for('shop') . "?category=$category->name" ?>">
                                    <?php echo $category->name ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">Shipping / Order Details</h3>
                    <ul class="widget-list">
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp;
                                policies</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a>
                        </li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
                    </ul>
                </div>
                <div class="widget widget-links widget-light pb-2 mb-4">
                    <h3 class="widget-title text-light">About us</h3>
                    <ul class="widget-list">
                        <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
                        <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="widget pb-2 mb-4">
                    <h3 class="widget-title text-light pb-1">Stay informed</h3>
                    <form class="cz-subscribe-form validate"
                          action="<?php echo url_for('subscribe') ?>"
                          method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                        <div class="input-group input-group-overlay flex-nowrap">
                            <label for="subscribe-email" class="input-group-prepend-overlay">
                                <span class="input-group-text text-muted font-size-base">
                                    <i class="czi-mail"></i>
                                </span>
                            </label>
                            <input id="subscribe-email" class="form-control prepended-form-control" type="email"
                                   name="email"
                                   placeholder="Your email" required="">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                            </div>
                        </div>
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <label>
                                <input class="cz-subscribe-form-antispam" type="text"
                                       name="<?php echo url_for('subscribe-token') ?>" tabindex="-1">
                            </label>
                        </div>
                        <small class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early
                            discount offers, updates and new products info.</small>
                        <div class="subscribe-status"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-5 bg-darker">
        <div class="container">
            <hr class="hr-light pb-4 mb-3">
            <div class="row pb-2">
                <div class="col-md-6 text-center text-md-left mb-4">
                    <div class="text-nowrap mb-4">
                        <a class="d-inline-block align-middle mt-n1 mr-3">
                            <img class="d-block" width="128"
                                 src="<?php echo static_file('img', 'banner-white.png'); ?>"
                                 alt="Logo for <?php echo $app->site; ?>">
                        </a>
                    </div>
                    <div class="widget widget-links widget-light">
                        <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                            <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Support</a></li>
                            <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Privacy</a></li>
                            <li class="widget-list-item mr-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 text-center text-md-right mb-4">
                    <div class="mb-3">
                        <a class="social-btn sb-light sb-twitter ml-2 mb-2" href="#">
                            <i class="czi-twitter"></i>
                        </a>
                        <a class="social-btn sb-light sb-facebook ml-2 mb-2" href="#">
                            <i class="czi-facebook"></i>
                        </a>
                        <a class="social-btn sb-light sb-instagram ml-2 mb-2" href="#">
                            <i class="czi-instagram"></i>
                        </a>
                        <a class="social-btn sb-light sb-pinterest ml-2 mb-2" href="#">
                            <i class="czi-pinterest"></i>
                        </a>
                        <a class="social-btn sb-light sb-youtube ml-2 mb-2" href="#">
                            <i class="czi-youtube"></i>
                        </a>
                    </div>
                    <img class="d-inline-block" width="187" src="/public/img/cards.png" alt="Payment methods">
                </div>
            </div>
        </div>
    </div>
</footer>
