<?php if (!$app->cart->is_empty() & get_user()->role === CUSTOMER): ?>
    <div class="navbar-tool dropdown ml-2 ml-lg-2 mr-n1 mr-lg-2">
        <a class="navbar-tool-icon-box dropdown-toggle" href="<?php echo url_for('cart') ?>">
            <span class="navbar-tool-label"><?php echo $app->cart->count() ?></span>
            <i class="navbar-tool-icon czi-cart"></i>
        </a>
        <!-- Cart dropdown-->
        <div class="dropdown-menu dropdown-menu-right" style="width: 20rem;">
            <div class="widget widget-cart px-3 pt-2 pb-3">
                <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                    <?php foreach ($app->cart->products() as $key => $product): ?>
                        <div class="widget-cart-item pb-2 border-bottom">
                            <button class="close text-danger" type="button" aria-label="Remove">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="media align-items-center">
                                <a class="d-block mr-2"
                                   href="<?php echo $product->get_url() ?>">
                                    <img width="64"
                                         src="<?php echo $product->image ?>"
                                         alt="Product image for a <?php echo $product->name ?>"/>
                                </a>
                                <div class="media-body">
                                    <h6 class="widget-product-title">
                                        <a href="<?php echo $product->get_url() ?>">
                                            <?php echo $product->name ?>
                                        </a>
                                    </h6>
                                    <div class="widget-product-meta">
                                        <span class="text-accent mr-2"><?php echo CURRENCY['ZAR'] . $product->price ?></span>
                                        <span class="text-muted">&times; <?php echo $app->cart->count($key) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                    <div class="font-size-sm mr-2 py-2">
                        <span class="text-muted">Subtotal:</span>
                        <span class="text-accent font-size-base ml-1"><?php echo "R" . $app->cart->total() ?></span>
                    </div>
                    <a class="btn btn-outline-secondary btn-sm" href="<?php echo url_for('cart') ?>">
                        Show cart<i class="czi-arrow-right ml-1 mr-n1"></i>
                    </a>
                </div>
                <a class="btn btn-primary btn-sm btn-block" href="<?php echo url_for('order-checkout') ?>">
                    <i class="czi-card mr-2 font-size-base align-middle"></i>Checkout
                </a>
            </div>
        </div>
    </div>
<?php endif; ?>