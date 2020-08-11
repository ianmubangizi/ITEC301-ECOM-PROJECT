<?php $products = get_products(); ?>
<div class="container pb-5 mb-2 mb-md-4">
    <div class="row pt-3">
        <?php foreach ($products as $key => $product): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                    <?php if ($product->sale > 0): ?>
                        <span class="badge badge-danger badge-shadow">On Sale</span>
                    <?php endif; ?>
                    <button class="btn-wishlist btn-sm"
                            type="button" data-toggle="tooltip"
                            data-placement="left"
                            title="Add to wishlist">
                        <i class="czi-heart"></i>
                    </button>
                    <a class="card-img-top d-block overflow-hidden"
                       href="<?php echo url_for('shop') . "?{$product->inventory->category}" ?>">
                        <img class="rounded m-1" style="max-height: 280px; min-width: 290px"
                             src="<?php echo $product->image ?>" alt="<?php echo $product->name ?>">
                    </a>
                    <div class="card-body py-2">
                        <div class="product-meta d-inline-block text-accent">
                            <span class="badge-secondary font-size-sm text-body p-1 rounded align-middle">
                                <small><?php echo $product->inventory->category ?></small>
                            </span>
                        </div>
                        <h3 class="product-title font-size-sm mt-2">
                            <a href="<?php echo $product->get_url() ?>"><?php echo $product->name ?></a>
                        </h3>
                        <div class="d-flex justify-content-between">
                            <div class="product-price">
                                <?php if ($product->sale > 0): ?>
                                    <span class="text-primary"><?php echo CURRENCY['ZAR'] . $product->sale ?></span>
                                    <del class="font-size-sm text-muted"><?php echo CURRENCY['ZAR'] . $product->price ?></del>
                                <?php else: ?>
                                    <span class="text-success"><?php echo CURRENCY['ZAR'] . $product->price ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="star-rating">
                                <i class="sr-star czi-star-filled active"></i>
                                <i class="sr-star czi-star-filled active"></i>
                                <i class="sr-star czi-star-filled active"></i>
                                <i class="sr-star czi-star-filled active"></i>
                                <i class="sr-star czi-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-body-hidden">
                        <button class="btn btn-primary btn-sm btn-block mb-2"
                                type="button" data-toggle="toast"
                                data-target="#cart-toast">
                            <i class="czi-cart font-size-sm mr-1"></i>Add to Cart
                        </button>
                        <div class="text-center">
                            <a class="nav-link-style font-size-ms"
                               href="#quick-view"
                               data-toggle="modal">
                                <i class="czi-eye align-middle mr-1"></i>Quick view
                            </a>
                        </div>
                    </div>
                </div>
                <hr class="d-sm-none">
            </div>
        <?php endforeach; ?>
    </div>
    <hr class="my-3">
    <?php include_once(layouts('page-pagination', 'partials')) ?>
</div>