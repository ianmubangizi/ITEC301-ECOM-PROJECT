<aside class="col-lg-4 pt-4 pt-lg-0">
    <?php if ('/' . $_REQUEST['path'] === url_for('order-cart')): ?>
        <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
            <?php if (!$app->cart->is_empty()): ?>
                <div class="text-center mb-4 pb-3 border-bottom">
                    <h2 class="h6 mb-3 pb-1">Subtotal</h2>
                    <h3 class="font-weight-normal"><?php echo CURRENCY['ZAR'] . $app->cart->total() ?></h3>
                </div>
                <div class="form-group mb-4">
                    <label class="mb-3" for="order-comments">
                        <span class="badge badge-info font-size-xs mr-2">Note</span>
                        <span class="font-weight-medium">Additional comments</span></label>
                    <textarea class="form-control" rows="6" id="order-comments" name="order-comments"></textarea>
                </div>
                <a class="btn btn-primary btn-shadow btn-block mt-4" href="<?php echo url_for('order-details') ?>">
                    <i class="czi-card font-size-lg mr-2"></i>Proceed to Checkout
                </a>
            <?php else: ?>
                <h3 class="font-weight-normal text-center my-4 display-404" style="font-size: 3em">Empty Cart</h3>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <div class="cz-sidebar-static rounded-lg box-shadow-lg ml-lg-auto">
            <?php if (!$app->cart->is_empty()): ?>
                <div class="widget mb-3">
                    <h2 class="widget-title text-center">Order summary</h2>
                    <?php foreach ($app->cart->products() as $key => $product): ?>
                        <div class="media align-items-center pb-2 border-bottom">
                            <a class="d-block mr-2" href="<?php echo $product->get_url() ?>">
                                <img width="64" src="<?php echo $product->image ?>" alt="Product">
                            </a>
                            <div class="media-body">
                                <h6 class="widget-product-title">
                                    <a href="<?php echo $product->get_url() ?>"><?php echo $product->name ?></a>
                                </h6>
                                <div class="widget-product-meta">
                                    <span class="text-accent mr-2"><?php echo $product->price ?></span>
                                    <span class="text-muted"><?php echo $app->cart->count($key) ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <ul class="list-unstyled font-size-sm pb-2 border-bottom">
                    <li class="d-flex justify-content-between align-items-center">
                        <span class="mr-2">Subtotal:</span>
                        <span class="text-right"><?php echo CURRENCY['ZAR'] . $app->cart->total() ?></span>
                    </li>
                </ul>
                <h3 class="font-weight-normal text-center my-4"><?php echo CURRENCY['ZAR'] . $app->cart->total() ?></h3>
            <?php else: ?>
                <h3 class="font-weight-normal text-center my-4 display-404" style="font-size: 3em">Empty Cart</h3>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</aside>
