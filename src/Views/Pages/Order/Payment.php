<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
        <section class="col-lg-8">
            <?php $last = 4;
            include_once('Navigation/Steps.php'); ?>
            <h2 class="h6 pb-3 mb-2">Choose payment method</h2>
            <div class="accordion mb-2" id="payment-method" role="tablist">
                <div class="card">
                    <div class="card-header" role="tab">
                        <h3 class="accordion-heading">
                            <a href="#card" data-toggle="collapse">
                                <i class="czi-card font-size-lg mr-2 mt-n1 align-middle"></i>
                                Pay with Credit Card / PayPal
                                <span class="accordion-indicator"></span>
                            </a>
                        </h3>
                    </div>
                    <div class="collapse show" id="card" data-parent="#payment-method" role="tabpanel">
                        <div class="card-body">
                            <div id="payment-load" class="spinner-border mx-auto" style="width: 3rem; height: 3rem;"
                                 role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div id="payment-container"></div>
                            <button id="payment-select" type="button"
                                    class="btn btn-success btn-shadow btn-block mt-4" hidden>
                                <i class="czi-card font-size-lg mr-2"></i>Use Credit Card
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once('Navigation/Desktop.php') ?>
        </section>
        <?php include_once('Summary.php') ?>
    </div>
    <?php include_once('Navigation/Mobile.php') ?>
</div>
<script src="/public/js/braintree-dropin-ui.js"></script>
<script>
    const braintree_client_token = "<?php echo($app->gateway->ClientToken()->generate()); ?>";

    braintree.dropin.create({
        authorization: braintree_client_token,
        selector: '#payment-container',
        paypal: {
            flow: 'vault'
        }
    }, function (error, instance) {
        if (error) console.log('Error: On Creation of Container', error)

        $('#payment-load').remove();
        const select_btn = $('#payment-select');

        instance.on('paymentMethodRequestable', function () {
            select_btn.attr('hidden', false);
        });


        select_btn.click(function () {
            instance.requestPaymentMethod(function (err, payload) {
                if (err) console.log('Request Payment Method Error', err);
                console.log(payload)
                // document.querySelector('#nonce').value = payload.nonce;
            });
        });
    });
</script>