<?php use Mubangizi\Models\Product;

$actions = [
    'add-product' => ['Add Product', 'add-document'],
    'update-product' => ['Update Product', 'edit']
];
$action = isset($_REQUEST['edit']) ? $_REQUEST['edit'] : 'add-product';
?>
<section class="col-lg-8 pt-lg-4 pb-4 mb-3">
    <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
        <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="nav-item">
                <a class="nav-link px-0<?php echo isset($_REQUEST['list']) | !isset($_REQUEST['edit']) ? ' active show' : '' ?>"
                   href="#list" data-toggle="tab"
                   role="tab"
                   aria-selected="<?php echo isset($_REQUEST['list']) | !isset($_REQUEST['edit']) ? 'true' : 'false' ?>">
                    <div class="d-none d-lg-block">
                        <i class="czi-package opacity-60 mr-2"></i>All Products
                    </div>
                    <div class="d-lg-none text-center">
                        <i class="czi-package opacity-60 d-block font-size-xl mb-2"></i>
                        <span class="font-size-ms">All Products</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link px-0<?php echo isset($_REQUEST['edit']) ? ' active show' : '' ?>" href="#edit"
                   data-toggle="tab" role="tab"
                   aria-selected="<?php echo isset($_REQUEST['edit']) ? 'true' : 'false' ?>">
                    <div class="d-none d-lg-block">
                        <i class="czi-<?php echo $actions[$action][1]; ?> opacity-60 mr-2"></i><?php echo $actions[$action][0]; ?>
                    </div>
                    <div class="d-lg-none text-center">
                        <i class="czi-<?php echo $actions[$action][1]; ?> opacity-60 d-block font-size-xl mb-2"></i>
                        <span class="font-size-ms"><?php echo $actions[$action][0]; ?></span>
                    </div>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade<?php echo isset($_REQUEST['list']) | !isset($_REQUEST['edit']) ? ' active show' : '' ?>"
                 id="list" role="tabpanel">
                <div class="pt-2 px-4 pl-lg-0 pr-xl-5">
                    <!-- Title-->
                    <div class="d-flex flex-nowrap justify-content-between align-items-center border-bottom">
                        <div class="py-2">
                            <div class="form-inline flex-nowrap pb-3">
                                <a class="btn btn-primary btn-sm px-2"
                                   href="<?php echo url_for('dashboard') . '?tab=products&edit=add-product' ?>">
                                    <i class="czi-add-document font-size-lg mr-2"></i>Add Product
                                </a>
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="form-inline flex-nowrap pb-3">
                                <label class="text-nowrap mr-2" for="sorting">Sort by:</label>
                                <select class="custom-select custom-select-sm mr-2" id="sorting">
                                    <option>Stock</option>
                                    <option>Price</option>
                                    <option>Updates</option>
                                    <option>Category</option>
                                </select>
                                <button class="btn btn-outline-secondary btn-sm px-2" type="button">
                                    <i class="czi-arrow-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Product-->
                    <?php foreach (get_products() as $key => $product): ?>
                        <div class="media d-block d-sm-flex py-4 border-bottom">
                            <a class="d-block mb-3 mb-sm-0 mr-sm-4 mx-auto" href="<?php echo $product->get_url() ?>"
                               style="width: 12.5rem;">
                                <img class="rounded-lg" src="<?php echo $product->image ?>" alt="Product">
                            </a>
                            <div class="media-body text-center text-sm-left">
                                <h3 class="h6 product-title mb-2">
                                    <a href="marketplace-single.html"><?php echo $product->name ?></a>
                                </h3>
                                <div class="d-inline-block text-accent">
                                    <span class="badge badge-secondary font-size-sm text-body align-middle">
                                        <small><?php echo $product->inventory->category ?></small>
                                    </span>
                                </div>
                                <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">
                                    Stock: <span
                                            class="font-weight-medium"><?php echo $product->inventory->stock ?></span>
                                </div>
                                <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">
                                    <?php if ($product->sale > 0): ?>
                                        <del class="font-weight-medium text-muted"><?php echo CURRENCY['ZAR'] . $product->price ?></del>
                                    <?php else: ?>
                                        <span class="font-weight-medium text-success">
                                            <?php echo CURRENCY['ZAR'] . $product->price ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <?php if ($product->sale > 0): ?>
                                    <div class="d-inline-block text-muted font-size-ms border-left ml-2 pl-2">
                                        Now on Sale:
                                        <span class="font-weight-medium text-primary">
                                            <?php echo CURRENCY['ZAR'] . $product->sale ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                                <hr class="my-2">
                                <div class="d-flex justify-content-center justify-content-sm-start">
                                    <p class="font-size-xs m-0">
                                        <?php echo trim_string($product->details, '420') ?>
                                    </p>
                                </div>
                                <hr class="my-2">
                                <div class="d-flex justify-content-center justify-content-sm-start">
                                    <a class="btn bg-faded-info btn-icon mr-2" data-toggle="tooltip"
                                       href="<?php echo url_for('dashboard') . "?tab=products&edit=update-product&id=$product->id" ?>"
                                       data-original-title="Edit">
                                        <i class="czi-edit text-info"></i>
                                    </a>
                                    <button class="btn bg-faded-danger btn-icon" type="button" data-toggle="tooltip"
                                            onclick="delete_product('<?php echo $product->id ?>')"
                                            data-original-title="Delete">
                                        <i class="czi-trash text-danger"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <hr class="pb-4">
                    <?php include_once(layouts('page-pagination', 'partials')) ?>
                </div>
            </div>
            <div class="tab-pane fade<?php echo isset($_REQUEST['edit']) ? ' active show' : '' ?>" id="edit"
                 role="tabpanel">
                <div class="d-sm-flex flex-wrap justify-content-between align-items-center pb-2">
                    <h2 class="h3 py-2 mr-2 text-center text-sm-left"><?php echo $actions[$action][0]; ?></h2>
                    <div class="py-2">
                        <label for="category"></label>
                        <select class="custom-select mr-2" id="category"
                                onchange="$('#product-inventory').attr('value', this.value)">
                            <option selected>Select inventory</option>
                            <?php foreach (get_inventory() as $inventory): ?>
                                <option value="<?php echo $inventory->id ?>"
                                        style="background-image:url(<?php echo $inventory->image ?>);">
                                    <?php echo $inventory->title ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <?php include_once(layouts('edit-product', 'forms')) ?>
            </div>
        </div>
    </div>
</section>