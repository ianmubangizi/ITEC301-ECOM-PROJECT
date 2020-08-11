<div class="container py-2 py-lg-2 my-3">
    <div class="row py-5">
        <div class="col-md-6 mx-auto">
            <div class="card border-0 box-shadow">
                <div class="card-body">
                    <h2 class="h4 mb-3">No account? Sign up</h2>
                    <p class="font-size-sm text-muted mb-4">
                        Registration takes less than a minute but gives you full control over your orders.
                    </p>
                    <form class="needs-validation" autocomplete="off" novalidate method="post"
                          action="<?php echo url_for('sign-up') ?>">
                        <?php $form_location = 'page';
                        include(layouts('sign-up', 'forms')) ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>