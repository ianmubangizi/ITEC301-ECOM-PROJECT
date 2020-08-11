<?php $product = get_products()[0]; ?>
<div class="modal-quick-view modal fade" id="quick-view" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title product-title">
                    <a href="<?php echo $product->get_url(); ?>"
                       data-toggle="tooltip" data-placement="right"
                       data-original-title="Go to product page"><?php echo $product->name; ?>
                        <i class="czi-arrow-right font-size-lg ml-2"></i>
                    </a>
                </h4>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-7 pr-lg-0">
                        <div class="cz-product-gallery">
                            <div class="cz-preview order-sm-2">
                                <div class="cz-preview-item active" id="first">
                                    <img class="cz-image-zoom"
                                         src="<?php echo $product->image ?>"
                                         data-zoom="<?php echo $product->image ?>"
                                         alt="Product image">
                                    <div class="cz-image-zoom-pane"></div>
                                </div>
                            </div>
                            <div class="cz-thumblist order-sm-1">
                                <a class="cz-thumblist-item active" href="#first">
                                    <img src="<?php echo $product->image ?>" alt="Product thumb">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 pt-4 pt-lg-0 cz-image-zoom-pane">
                        <div class="product-details ml-auto pb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <a href="shop-single-v1.html#reviews">
                                    <div class="star-rating">
                                        <i class="sr-star czi-star-filled active"></i>
                                        <i class="sr-star czi-star-filled active"></i>
                                        <i class="sr-star czi-star-filled active"></i>
                                        <i class="sr-star czi-star-filled active"></i>
                                        <i class="sr-star czi-star"></i>
                                    </div>
                                    <span class="d-inline-block font-size-sm text-body align-middle mt-1 ml-1">3 Reviews</span>
                                </a>
                                <button class="btn-wishlist" type="button" data-toggle="tooltip" title=""
                                        data-original-title="Add to wishlist"><i class="czi-heart"></i>
                                </button>
                            </div>
                            <div class="mb-3">
                                <?php if ($product->sale > 0): ?>
                                    <span class="h3 font-weight-normal text-accent mr-1"><?php echo CURRENCY['ZAR'] . $product->sale ?></span>
                                    <del class="text-muted font-size-lg mr-3"><?php echo CURRENCY['ZAR'] . $product->price ?></del>
                                    <span class="badge badge-danger badge-shadow align-middle mt-n2">On Sale</span>
                                <?php else: ?>
                                    <span class="text-success"><?php echo CURRENCY['ZAR'] . $product->price ?></span>
                                <?php endif; ?>
                            </div>
                            <h5 class="h6 mb-3 pb-2 border-bottom">
                                <i class="czi-announcement text-muted font-size-lg align-middle mt-n1 mr-2"></i>
                                Product details
                            </h5>
                            <div class="font-size-sm mb-2"><?php echo $product->details ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>