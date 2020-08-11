<section class="container-fluid pt-grid-gutter">
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-grid-gutter">
            <a class="card" href="#map" data-scroll>
                <div class="card-body text-center">
                    <i class="czi-location h3 mt-2 mb-4 text-primary"></i>
                    <h3 class="h6 mb-2">Main store address</h3>
                    <p class="font-size-sm text-muted">1st floor, 98 Long St, Cape Town City Centre, Cape Town, 8000</p>
                    <div class="font-size-sm text-primary">
                        Click to see map<i class="czi-arrow-right align-middle ml-1"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6 mb-grid-gutter">
            <div class="card">
                <div class="card-body text-center">
                    <i class="czi-time h3 mt-2 mb-4 text-primary"></i>
                    <h3 class="h6 mb-3">Working hours</h3>
                    <ul class="list-unstyled font-size-sm text-muted mb-0">
                        <li>Mon - Fri: 10AM - 7PM</li>
                        <li class="mb-0">Sta - Sun: 11:30AM - 5PM</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-grid-gutter">
            <div class="card">
                <div class="card-body text-center">
                    <i class="czi-phone h3 mt-2 mb-4 text-primary"></i>
                    <h3 class="h6 mb-3">Phone numbers</h3>
                    <ul class="list-unstyled font-size-sm mb-0">
                        <li><span class="text-muted mr-1">For customers:</span>
                            <a class="nav-link-style" href="tel:+27814286507">+27 (81) 428 6507</a>
                        </li>
                        <li class="mb-0"><span class="text-muted mr-1">Tech support:</span>
                            <a class="nav-link-style" href="tel:+27817047516">+27 (81) 704 7516</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-grid-gutter">
            <div class="card">
                <div class="card-body text-center">
                    <i class="czi-mail h3 mt-2 mb-4 text-primary"></i>
                    <h3 class="h6 mb-3">Email addresses</h3>
                    <ul class="list-unstyled font-size-sm mb-0">
                        <li><span class="text-muted mr-1">For customers:</span>
                            <a class="nav-link-style" href="mailto:customer@evolutio.com">customer@evolutio.com</a>
                        </li>
                        <li class="mb-0"><span class="text-muted mr-1">Tech support:</span>
                            <a class="nav-link-style" href="mailto:support@evolutio.com">support@evolutio.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid px-0" id="map">
    <div class="row no-gutters">
        <div class="col-lg-6 iframe-full-height-wrap">
            <iframe class="iframe-full-height" width="600" height="250"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3310.6594665625626!2d18.41607421531065!3d-33.92416292936597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dcc6765ccaed335%3A0x60a7d19d633094d2!2s1st%20floor%2C%2098%20Long%20St%2C%20Cape%20Town%20City%20Centre%2C%20Cape%20Town%2C%208000!5e0!3m2!1sen!2sza!4v1596982174413!5m2!1sen!2sza"></iframe>
        </div>
        <div class="col-lg-6 px-4 px-xl-5 py-5 border-top">
            <h2 class="h4 mb-4">Drop us a line</h2>
            <form class="needs-validation mb-3" novalidate>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="cf-name">Your name:&nbsp;<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="cf-name" placeholder="First Lastname" required>
                            <div class="invalid-feedback">Please fill in you name!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="cf-email">Email address:&nbsp;<span class="text-danger">*</span></label>
                            <input class="form-control" type="email" id="cf-email" placeholder="example@email.com"
                                   required>
                            <div class="invalid-feedback">Please provide valid email address!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="cf-phone">Your phone:&nbsp;<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="cf-phone" placeholder="+27 (011) 000 000"
                                   required>
                            <div class="invalid-feedback">Please provide valid phone number!</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="cf-subject">Subject:</label>
                            <input class="form-control" type="text" id="cf-subject"
                                   placeholder="Provide short title of your request">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cf-message">Message:&nbsp;<span class="text-danger">*</span></label>
                    <textarea class="form-control" id="cf-message" rows="6"
                              placeholder="Please describe in detail your request" required></textarea>
                    <div class="invalid-feedback">Please write a message!</div>
                </div>
                <button class="btn btn-primary" type="submit">Send message</button>
            </form>
        </div>
    </div>
</div>