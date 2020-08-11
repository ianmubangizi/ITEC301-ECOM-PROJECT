<?php
$steps = [
    1 => ['txt' => 'Cart', 'icon' => 'cart', 'url' => 'cart'],
    2 => ['txt' => 'Your details', 'icon' => 'user-circle', 'url' => 'details'],
    3 => ['txt' => 'Shipping', 'icon' => 'package', 'url' => 'shipping'],
    4 => ['txt' => 'Payment', 'icon' => 'card', 'url' => 'payment'],
    5 => ['txt' => 'Review', 'icon' => 'check-circle', 'url' => 'review']
];
?>
<div class="steps steps-light pt-2 pb-3 mb-5">
    <?php foreach ($steps as $key => $step): ?>
        <a class="step-item<?php echo $key <= $last ? ' active' : '' ?>"
           href="<?php echo url_for('order-' . $step['url']) ?>">
            <div class="step-progress">
                <span class="step-count"><?php echo $key ?></span>
            </div>
            <div class="step-label">
                <i class="czi-<?php echo $step['icon'] ?>"></i><?php echo $step['txt'] ?>
            </div>
        </a>
    <?php endforeach; ?>
</div>
