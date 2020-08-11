
<div class="container py-2 py-lg-2 my-3">
    <div class="row py-5">
        <div class="col-md-6 mx-auto">
            <div class="card border-0 box-shadow">
                <div class="card-body">
                    <form class="needs-validation" autocomplete="off" novalidate method="post"
                          action="<?php echo url_for('sign-in') ?>">
                        <h2 class="h4 mb-1">Sign in</h2>
                        <div class="py-3">
                            <h3 class="d-inline-block align-middle font-size-base font-weight-semibold mb-2 mr-2">With
                                social account:</h3>
                            <div class="d-inline-block align-middle">
                                <a class="social-btn sb-google mr-2 mb-2" href="#"
                                   data-toggle="tooltip" title=""
                                   data-original-title="Sign in with Google">
                                    <i class="czi-google"></i>
                                </a>
                                <a class="social-btn sb-facebook mr-2 mb-2" href="#"
                                   data-toggle="tooltip" title=""
                                   data-original-title="Sign in with Facebook">
                                    <i class="czi-facebook"></i>
                                </a>
                                <a class="social-btn sb-twitter mr-2 mb-2" href="#"
                                   data-toggle="tooltip" title=""
                                   data-original-title="Sign in with Twitter">
                                    <i class="czi-twitter"></i>
                                </a>
                            </div>
                        </div>
                        <hr class="my-3">
                        <?php $form_location = 'page';
                        include(layouts('sign-in', 'forms')) ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>