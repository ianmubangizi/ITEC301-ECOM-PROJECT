<?php
if (isset(get_form_data()['login-form'])) {
    list('email' => $email, 'password' => $password) = get_form_data()['login-form'];
}
?>
<div class="form-group">
    <label for="si-email-<?php echo $form_location ?>">Email address</label>
    <div class="input-group-overlay">
        <div class="input-group-prepend-overlay">
            <span class="input-group-text"><i class="czi-mail"></i></span>
        </div>
        <input name="email" value="<?php echo isset($email) ? $email : '' ?>"
               class="form-control prepended-form-control" type="email" id="si-email-<?php echo $form_location ?>"
               placeholder="Email"
               required>
    </div>
</div>

<div class="form-group">
    <label for="si-password-<?php echo $form_location ?>">Password</label>
    <div class="input-group-overlay">
        <div class="input-group-prepend-overlay">
            <span class="input-group-text"><i class="czi-locked"></i></span>
        </div>
        <div class="password-toggle">
            <input name="password" value="<?php echo isset($password) ? $password : '' ?>"
                   class="form-control prepended-form-control" type="password"
                   id="si-password-<?php echo $form_location ?>"
                   placeholder="Password"
                   required>
            <label class="password-toggle-btn">
                <input class="custom-control-input" type="checkbox">
                <i class="czi-eye password-toggle-indicator"></i>
                <span class="sr-only">Show password</span>
            </label>
        </div>
    </div>
</div>

<div class="form-group d-flex flex-wrap justify-content-between">
    <div class="custom-control custom-checkbox mb-2">
        <input name="remember" class="custom-control-input" type="checkbox"
               id="si-remember-<?php echo $form_location ?>">
        <label class="custom-control-label" for="si-remember-<?php echo $form_location ?>">Remember me</label>
    </div>
    <div>
        <a class="font-size-sm" href="<?php echo url_for('reset-password') ?>">Forgot password?</a>
        <?php if ($form_location === 'page'): ?>
            <a class="font-size-sm" href="<?php echo url_for('sign-up') ?>">| Create Account</a>
        <?php endif; ?>
    </div>
</div>

<hr class="my-4">
<button name="sign-in-submit" class="btn btn-primary btn-block btn-shadow" type="submit">Sign in</button>
