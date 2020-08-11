<section class="col-lg-8">
    <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
        <h6 class="font-size-base text-light mb-0">Update you profile details below:</h6>
        <a class="btn btn-primary btn-sm" href="<?php echo url_for('sign-out') ?>">
            <i class="czi-sign-out mr-2"></i>Sign out
        </a>
    </div>
    <form>
        <div class="bg-secondary rounded-lg p-4 mb-4">
            <div class="media align-items-center"><img src="<?php echo $user->image ?>" width="90"
                                                       alt="Susan Gardner">
                <div class="media-body pl-3">
                    <label class="btn btn-light btn-shadow btn-sm mb-2">
                        <i class="czi-loading mr-2"></i>Upload image
                        <input type="file" style="display: none">
                    </label>
                    <div class="p mb-0 font-size-ms text-muted">Upload JPG, GIF or PNG image. min of 300 x 300
                        required.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="account-fn">First Name</label>
                    <input class="form-control" type="text" id="account-fn"
                           value="<?php echo $user->firstname ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="account-ln">Last Name</label>
                    <input class="form-control" type="text" id="account-ln"
                           value="<?php echo $user->lastname ?>">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="account-email">Email Address</label>
                    <input class="form-control" type="email" id="account-email"
                           value="<?php echo $user->email ?>"
                           disabled>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="account-phone">Phone Number</label>
                    <input class="form-control" type="text" id="account-phone"
                           value="<?php echo $user->phone ?>"
                           required>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="account-pass">New Password</label>
                    <div class="password-toggle">
                        <input class="form-control" type="password" id="account-pass">
                        <label class="password-toggle-btn">
                            <input class="custom-control-input" type="checkbox"><i
                                class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="account-confirm-pass">Confirm Password</label>
                    <div class="password-toggle">
                        <input class="form-control" type="password" id="account-confirm-pass">
                        <label class="password-toggle-btn">
                            <input class="custom-control-input" type="checkbox"><i
                                class="czi-eye password-toggle-indicator"></i><span class="sr-only">Show password</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <hr class="mt-2 mb-3">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <button name="update-profile-submit" class="btn btn-primary mt-3 mt-sm-0" type="button">
                        Update profile
                    </button>
                </div>
            </div>
        </div>
    </form>
</section>