<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
        <section class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center pt-3 pb-2 pb-sm-5 mt-1">
                <h2 class="h6 text-light mb-0"><?php echo !$app->cart->is_empty() ? 'P' : 'Add some p' ?>roducts</h2>
                <a class="btn btn-outline-primary btn-sm pl-2" href="<?php echo url_for('shop') ?>">
                    <i class="czi-arrow-left mr-2"></i><?php echo !$app->cart->is_empty() ? 'Continue' : 'Try' ?>
                    shopping
                </a>
            </div>
            <?php include_once(layouts('basket', 'partials')) ?>
        </section>
        <?php include_once('Summary.php') ?>
    </div>
</div>