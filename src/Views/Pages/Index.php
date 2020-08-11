<?php $inventory = get_inventory(); ?>
<section class="cz-carousel cz-controls-lg">
    <div class="cz-carousel-inner"
         data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;nav&quot;:true, &quot;controls&quot;: false},&quot;992&quot;:{&quot;nav&quot;:false, &quot;controls&quot;: true}}}">
        <?php foreach ($inventory as $_inventory): ?>
            <?php if ($_inventory->title !== 'General'): ?>
                <div class="px-lg-5" style="background-color: <?php echo rand_color() ?>;">
                    <div class="d-lg-flex justify-content-between align-items-center pl-lg-4">
                        <img class="d-block order-lg-2 mr-lg-n5 flex-shrink-0"
                             style="max-height: 640px;"
                             src="<?php echo $_inventory->image ?>"
                             alt="<?php echo $_inventory->title ?>">
                        <div class="position-relative mr-lg-n3 py-5 px-4 mb-lg-5 order-lg-1"
                             style="max-width: 42rem; z-index: 10;">
                            <div class="pb-lg-5 mb-lg-5 text-center text-lg-left text-lg-nowrap">
                                <h2 class="text-light font-weight-light pb-1 from-left">Has just arrived!</h2>
                                <h1 class="text-light display-4 from-left delay-1"><?php echo $_inventory->title ?></h1>
                                <a class="btn btn-primary scale-up delay-4"
                                   href="<?php echo url_for('shop') . "?$_inventory->category" ?>">
                                    Shop Now<i class="czi-arrow-right ml-2 mr-n1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>
<?php $products = get_products(); ?>
<section class="container pt-md-3 pb-5 mb-md-3">
    <h2 class="h3 text-center">Trending products</h2>
    <div class="row pt-4 mx-n2">
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
    <div class="text-center pt-3">
        <a class="btn btn-outline-accent" href="<?php echo url_for('shop') ?>">
            More products<i class="czi-arrow-right ml-1"></i>
        </a>
    </div>
</section>
<section class="container mb-4 pb-3 pb-sm-0 mb-sm-5">
    <div class="row">
        <div class="col-md-5">
            <div class="d-flex flex-column h-100 overflow-hidden rounded-lg" style="background-color: #e2e9ef;">
                <div class="d-flex justify-content-between align-items-center px-grid-gutter py-grid-gutter"
                     style="background-color: rgba(200,255,255,0.15);">
                    <div>
                        <a class="font-size-md text-primary"
                           href="<?php echo url_for('shop') . "?$_inventory->category" ?>">
                            <?php echo $_inventory->title ?>
                            <i class="czi-arrow-right font-size-xs align-middle ml-1"></i>
                        </a>
                    </div>
                    <div class="cz-custom-controls" id="carousel-<?php echo $_inventory->id ?>">
                        <button type="button"><i class="czi-arrow-left"></i></button>
                        <button type="button"><i class="czi-arrow-right"></i></button>
                    </div>
                </div>
                <a class="d-none d-md-block mt-auto" href="<?php echo url_for('shop') . "?$_inventory->category" ?>">
                    <img class="d-block"
                         src="<?php echo $_inventory->image ?>"
                         alt="<?php echo $_inventory->title ?>">
                </a>
            </div>
        </div>

        <div class="col-md-7 pt-4 pt-md-0">
            <div class="cz-carousel">
                <div class="cz-carousel-inner"
                     data-carousel-options="{&quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#carousel-<?php echo $_inventory->id ?>&quot;}">

                    <div>
                        <div class="row mx-n2">
                            <?php foreach ($products as $key => $product): ?>
                                <div class="col-lg-4 col-6 px-0 px-sm-2 mb-sm-4">
                                    <div class="card product-card card-static">
                                        <?php if ($product->sale > 0): ?>
                                            <span class="badge badge-danger badge-shadow">On Sale</span>
                                        <?php endif; ?>
                                        <button class="btn-wishlist btn-sm" type="button" data-toggle="tooltip"
                                                data-placement="left" title="Add to wishlist">
                                            <i class="czi-heart"></i>
                                        </button>
                                        <a class="card-img-top d-block overflow-hidden"
                                           href="<?php echo $product->get_url() ?>">
                                            <img style="max-height: 250px; min-width: 250px"
                                                 src="<?php echo $product->image ?>" alt="<?php echo $product->name ?>">
                                        </a>
                                        <div class="card-body py-2">
                                            <a class="product-meta d-block font-size-xs pb-1" href="#">Hoodies &amp;
                                                Sweatshirts</a>
                                            <div class="product-meta d-inline-block text-accent">
                                                <span class="badge-secondary font-size-sm text-body p-1 rounded align-middle">
                                                    <small><?php echo $product->inventory->category ?></small>
                                                </span>
                                            </div>
                                            <h3 class="product-title font-size-sm mt-1">
                                                <a href="<?php echo $product->get_url() ?>">
                                                    <?php echo $product->name ?>
                                                </a>
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
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid px-0">
    <div class="row no-gutters">
        <div class="col-md-6">
            <a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary"
               href="#blog">
                <div class="card-body text-center">
                    <i class="czi-edit h3 mt-2 mb-4 text-primary"></i>
                    <h3 class="h5 mb-1">Read our blog</h3>
                    <p class="text-muted font-size-sm">Latest news on the shop, fashion & products</p>
                </div>
            </a></div>
        <div class="col-md-6">
            <a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#@evolutio">
                <div class="card-body text-center">
                    <i class="czi-instagram h3 mt-2 mb-4 text-accent"></i>
                    <h3 class="h5 mb-1">Follow on Instagram</h3>
                    <p class="text-muted font-size-sm">@evolutio</p>
                </div>
            </a>
        </div>
    </div>
</section>