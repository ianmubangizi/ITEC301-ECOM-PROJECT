<?php if (isset($app->page->data['breadcrumbs'])): ?>
    <div class="page-title-overlap bg-dark pt-2">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <?php foreach ($app->page->data['breadcrumbs'] as $title => $breadcrumbs): ?>
                <div class="order-lg-3 mb-3 mb-lg-0 pt-lg-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                            <?php foreach ($breadcrumbs as $crumb): ?>
                                <li class="breadcrumb-item">
                                    <a class="text-nowrap" href="<?php echo $crumb['url']; ?>">
                                        <?php if ($crumb['root']):?>
                                            <i class="czi-home"></i>
                                        <?php endif; ?>
                                        <?php echo $crumb['title']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">
                                <?php echo $title ?>
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="order-lg-2 pr-lg-4 text-center text-lg-left">
                    <h1 class="h3 text-light mb-0"><?php echo $title ?></h1>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
