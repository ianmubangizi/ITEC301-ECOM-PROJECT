<?php if ($last > 1 | $last < 5): ?>
    <div class="row d-lg-none">
        <div class="col-lg-8">
            <div class="d-flex pt-4 mt-3">
                <div class="w-50 pr-3">
                    <a class="btn btn-secondary btn-block"
                       href="<?php echo url_for('order-' . $steps[$last - 1]['url']) ?>">
                        <i class="czi-arrow-left mt-sm-0 mr-1"></i>
                        <span class="d-none d-sm-inline">Back to <?php echo $steps[$last - 1]['txt'] ?></span>
                        <span class="d-inline d-sm-none">Back</span>
                    </a>
                </div>
                <div class="w-50 pl-2">
                    <a class="btn btn-primary btn-block"
                       href="<?php echo url_for('order-' . $steps[$last + 1]['url']) ?>">
                        <span class="d-none d-sm-inline">Proceed to <?php echo $steps[$last + 1]['txt'] ?></span>
                        <span class="d-inline d-sm-none">Proceed</span>
                        <i class="czi-arrow-right mt-sm-0 ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


