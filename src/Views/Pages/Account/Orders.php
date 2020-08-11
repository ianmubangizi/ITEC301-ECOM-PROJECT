<section class="col-lg-8">
    <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
        <div class="form-inline">
            <label class="text-light opacity-75 text-nowrap mr-2 d-none d-lg-block" for="order-sort">Sort
                orders:</label>
            <select class="form-control custom-select" id="order-sort">
                <option>All</option>
                <option>Delivered</option>
                <option>In Progress</option>
                <option>Delayed</option>
                <option>Canceled</option>
            </select>
        </div>
        <a class="btn btn-primary btn-sm" href="<?php echo url_for('sign-out') ?>">
            <i class="czi-sign-out mr-2"></i>Sign out
        </a>
    </div>
    <?php include_once(layouts('order-list', 'partials')) ?>
    <hr class="pb-4">
    <?php include_once(layouts('page-pagination', 'partials')) ?>
</section>