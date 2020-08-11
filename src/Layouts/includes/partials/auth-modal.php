<!-- Sign in / sign up modal-->
<div class="modal fade" id="auth-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#sign-in-tab" data-toggle="tab" role="tab"
                           aria-selected="true">
                            <i class="czi-unlocked mr-2 mt-n1"></i>Sign in
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sign-up-tab" data-toggle="tab" role="tab"
                           aria-selected="false">
                            <i class="czi-user mr-2 mt-n1"></i>Sign up
                        </a>
                    </li>
                </ul>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body tab-content py-4">
                <form class="needs-validation tab-pane fade active show" autocomplete="off" novalidate=""
                      id="sign-in-tab" method="post" action="<?php echo url_for('sign-in'); ?>">
                    <?php $form_location = 'modal'; include(layouts('sign-in', 'forms')); ?>
                </form>
                <form class="needs-validation tab-pane fade" autocomplete="off" novalidate=""
                      id="sign-up-tab" method="post" action="<?php echo url_for('sign-up'); ?>">
                    <?php include(layouts('sign-up', 'forms')); ?>
                </form>
            </div>
        </div>
    </div>
</div>