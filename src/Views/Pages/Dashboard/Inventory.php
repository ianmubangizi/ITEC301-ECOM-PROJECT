<section class="col-lg-8 pt-lg-4 pb-4 mb-3">
    <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
        <!-- Title-->
        <div class="d-sm-flex flex-wrap justify-content-between align-items-center border-bottom">
            <h2 class="h3 py-2 mr-2 text-center text-sm-left">Product Inventory
                <span class="badge badge-secondary font-size-sm text-body align-middle ml-2">5
                    <small>out of stock</small>
                </span>
            </h2>
            <div class="py-2">
                <div class="form-inline flex-nowrap pb-3">
                    <label class="text-nowrap mr-2" for="sorting">Sort by:</label>
                    <select class="custom-select custom-select-sm mr-2" id="sorting">
                        <option>Stock</option>
                        <option>Updates</option>
                        <option>Category</option>
                    </select>
                    <button class="btn btn-outline-secondary btn-sm px-2" type="button">
                        <i class="czi-arrow-down"></i>
                    </button>

                    <button class="btn btn-primary btn-sm ml-2 px-2" type="button">
                        <i class="czi-add-document font-size-lg mr-2"></i>Add Inventory
                    </button>
                </div>
            </div>
        </div>
        <!-- Product-->
        <?php foreach (get_inventory() as $key => $inventory):?>
            <div class="media d-block d-sm-flex align-items-center py-4 border-bottom">
                <a class="d-block mb-3 mb-sm-0 mr-sm-4 mx-auto" href="marketplace-single.html" style="width: 12.5rem;">
                    <img class="rounded-lg" src="<?php echo $inventory->image ?>" alt="Product">
                </a>
                <div class="media-body text-center text-sm-left">
                    <h3 class="h6 product-title mb-2">
                        <a href="marketplace-single.html"><?php echo $inventory->title ?></a>
                    </h3>
                    <div class="d-inline-block text-accent">
                        <span class="badge badge-secondary font-size-sm text-body align-middle ml-2">
                            <small><?php echo $inventory->category ?></small>
                        </span>
                    </div>
                    <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">
                        Stock: <span class="font-weight-medium"><?php echo $inventory->stock ?></span>
                    </div>
                    <div class="d-flex justify-content-center justify-content-sm-start pt-3">
                        <button class="btn bg-faded-info btn-icon mr-2" type="button" data-toggle="tooltip" title=""
                                data-original-title="Edit">
                            <i class="czi-edit text-info"></i>
                        </button>
                        <button class="btn bg-faded-danger btn-icon" type="button" data-toggle="tooltip" title=""
                                data-original-title="Delete">
                            <i class="czi-trash text-danger"></i>
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <hr class="pb-4">
        <?php include_once(layouts('page-pagination', 'partials')) ?>
    </div>
</section>