<form class="needs-validation modal fade" method="post" id="add-payment" tabindex="-1" novalidate="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add a payment method</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="custom-control custom-radio mb-4">
                    <input class="custom-control-input" type="radio" id="paypal" name="payment-method">
                    <label class="custom-control-label" for="paypal">PayPal<img class="d-inline-block align-middle ml-2" src="img/card-paypal.png" width="39" alt="PayPal"></label>
                </div>
                <div class="custom-control custom-radio mb-4">
                    <input class="custom-control-input" type="radio" id="card" name="payment-method" checked="">
                    <label class="custom-control-label" for="card">Credit / Debit card<img class="d-inline-block align-middle ml-2" src="img/cards.png" width="187" alt="Credit card"></label>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <input class="form-control" type="text" name="number" placeholder="Card Number" required="">
                        <div class="invalid-feedback">Please fill in the card number!</div>
                    </div>
                    <div class="form-group col-sm-6">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required="">
                        <div class="invalid-feedback">Please provide name on the card!</div>
                    </div>
                    <div class="form-group col-sm-3">
                        <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required="">
                        <div class="invalid-feedback">Please provide card expiration date!</div>
                    </div>
                    <div class="form-group col-sm-3">
                        <input class="form-control" type="text" name="cvc" placeholder="CVC" required="">
                        <div class="invalid-feedback">Please provide card CVC code!</div>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-primary btn-block mt-0" type="submit">Register this card</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>