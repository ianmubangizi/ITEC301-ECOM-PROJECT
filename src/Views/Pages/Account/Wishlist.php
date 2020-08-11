<section class="col-lg-8">
    <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
        <h6 class="font-size-base text-light mb-0">List of items you added to wishlist:</h6>
        <a class="btn btn-primary btn-sm" href="<?php echo url_for('sign-out') ?>">
            <i class="czi-sign-out mr-2"></i>Sign out
        </a>
    </div>
    <?php include_once(layouts('basket', 'partials')) ?>
    <hr class="pb-4">
    <?php include_once(layouts('page-pagination', 'partials')) ?>
</section>