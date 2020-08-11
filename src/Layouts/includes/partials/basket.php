<?php if (!$basket->is_empty()):
    foreach ($basket->products() as $key => $product): ?>
        <div class="d-sm-flex justify-content-between align-items-center my-4 pb-3 border-bottom">
            <div class="media media-ie-fix d-block d-sm-flex align-items-center text-center text-sm-left"><a
                        class="d-inline-block mx-auto mr-sm-4" href="<?php echo url_for('shop') ?>"
                        style="width: 10rem;">
                    <img src="<?php echo $product->image ?>"
                         alt="Product image: <?php echo $product->name ?>"></a>
                <div class="media-body pt-2">
                    <h3 class="product-title font-size-base mb-2">
                        <a href="shop-single-v1.html"><?php echo $product->name ?></a>
                    </h3>
                    <div class="font-size-sm">
                        <span class="text-muted mr-2">Stock:</span><?php echo $product->sale ?>
                    </div>
                    <div class="font-size-sm">
                        <span class="text-muted mr-2">Category:</span><?php echo $product->inventory ?>
                    </div>
                    <div class="font-size-lg text-muted text-success pt-2">
                        <?php echo CURRENCY['ZAR'] . $product->price ?>
                    </div>
                    <div class="font-size-lg text-primary pt-2">
                        On Sale: <?php echo CURRENCY['ZAR'] . $product->sale ?>
                    </div>
                </div>
            </div>
            <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left"
                 style="max-width: 9rem;">
                <div class="form-group mb-0">
                    <label class="font-weight-medium" for="cart-product-quantity">Quantity</label>
                    <input class="form-control" type="number" id="cart-product-quantity"
                           value="<?php echo $basket->count($key) ?>">
                </div>
                <button class="btn btn-link px-0 text-danger" type="button">
                    <i class="czi-close-circle mr-2"></i>
                    <span class="font-size-sm">Remove</span>
                </button>
            </div>
        </div>
    <?php endforeach; ?>
    <button class="btn btn-outline-accent btn-block" type="button">
        <i class="czi-loading font-size-base mr-2"></i>
        Update <?php echo $basket->type === CART ? 'cart' : 'wishlist' ?>
    </button>
<?php else: ?>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div>
                <h1 class="h5 display-404">Empty <?php echo $basket->type === CART ? 'cart' : 'wishlist' ?></h1>
                <?php if ($basket->type === CART): ?>
                    <h2 class="h3 text-center mb-4">Shop until you drop <i class="czi-smile mr-2"></i></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>