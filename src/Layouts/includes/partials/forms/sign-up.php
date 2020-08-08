<div class="form-group">
    <label for="su-name-<?php echo $form_location ?>">Full name</label>
    <input name="full-name" class="form-control" type="text" id="su-name-<?php echo $form_location ?>"
           placeholder="John Doe" required>
    <div class="invalid-feedback">Please fill in your name.</div>
</div>
<div class="form-group">
    <label for="su-email-<?php echo $form_location ?>">Email address</label>
    <input name="email" class="form-control" type="email" id="su-email-<?php echo $form_location ?>"
           placeholder="johndoe@example.com"
           required>
    <div class="invalid-feedback">Please provide a valid email address.</div>
</div>
<div class="form-group">
    <label for="su-password-<?php echo $form_location ?>">Password</label>
    <div class="password-toggle">
        <input name="password" class="form-control" type="password"
               id="su-password-<?php echo $form_location ?>" required>
        <label class="password-toggle-btn">
            <input class="custom-control-input" type="checkbox">
            <i class="czi-eye password-toggle-indicator"></i>
            <span class="sr-only">Show password</span>
        </label>
    </div>
</div>
<div class="form-group">
    <label for="su-password-confirm-<?php echo $form_location ?>">Confirm password</label>
    <div class="password-toggle">
        <input class="form-control" type="password" id="su-password-confirm-<?php echo $form_location ?>" required>
        <label class="password-toggle-btn">
            <input class="custom-control-input" type="checkbox">
            <i class="czi-eye password-toggle-indicator"></i>
            <span class="sr-only">Show password</span>
        </label>
    </div>
</div>
<button name="sign-up-submit" class="btn btn-primary btn-block btn-shadow" type="submit">Sign up</button>