<section class="col-lg-8">
    <!-- Toolbar-->
    <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-4">
        <h6 class="font-size-base text-light mb-0">Primary payment method is used by default</h6>
        <a class="btn btn-primary btn-sm" href="<?php echo url_for('sign-out') ?>">
            <i class="czi-sign-out mr-2"></i>Sign out
        </a>
    </div>
    <!-- Payment methods list-->
    <div class="table-responsive font-size-md">
        <table class="table table-hover mb-0">
            <thead>
            <tr>
                <th>Your credit / debit cards</th>
                <th>Name on card</th>
                <th>Expires on</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="py-3 align-middle">
                    <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png" width="39" alt="Visa">
                        <div class="media-body"><span class="font-weight-medium text-heading mr-1">Visa</span>ending in 4999<span class="align-middle badge badge-info ml-2">Primary</span></div>
                    </div>
                </td>
                <td class="py-3 align-middle">Susan Gardner</td>
                <td class="py-3 align-middle">08 / 2019</td>
                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="" data-original-title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Remove">
                        <div class="czi-trash"></div></a></td>
            </tr>
            <tr>
                <td class="py-3 align-middle">
                    <div class="media align-items-center"><img class="mr-2" src="img/card-master.png" width="39" alt="MesterCard">
                        <div class="media-body"><span class="font-weight-medium text-heading mr-1">MasterCard</span>ending in 0015</div>
                    </div>
                </td>
                <td class="py-3 align-middle">Susan Gardner</td>
                <td class="py-3 align-middle">11 / 2021</td>
                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="" data-original-title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Remove">
                        <div class="czi-trash"></div></a></td>
            </tr>
            <tr>
                <td class="py-3 align-middle">
                    <div class="media align-items-center"><img class="mr-2" src="img/card-paypal.png" width="39" alt="PayPal">
                        <div class="media-body"><span class="font-weight-medium text-heading mr-1">PayPal</span>s.gardner@example.com</div>
                    </div>
                </td>
                <td class="py-3 align-middle">—</td>
                <td class="py-3 align-middle">—</td>
                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="" data-original-title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Remove">
                        <div class="czi-trash"></div></a></td>
            </tr>
            <tr>
                <td class="py-3 align-middle">
                    <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png" width="39" alt="Visa">
                        <div class="media-body"><span class="font-weight-medium text-heading mr-1">Visa</span>ending in 6073</div>
                    </div>
                </td>
                <td class="py-3 align-middle">Susan Gardner</td>
                <td class="py-3 align-middle">09 / 2021</td>
                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="" data-original-title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Remove">
                        <div class="czi-trash"></div></a></td>
            </tr>
            <tr>
                <td class="py-3 align-middle">
                    <div class="media align-items-center"><img class="mr-2" src="img/card-visa.png" width="39" alt="Visa">
                        <div class="media-body"><span class="font-weight-medium text-heading mr-1">Visa</span>ending in 9791</div>
                    </div>
                </td>
                <td class="py-3 align-middle">Susan Gardner</td>
                <td class="py-3 align-middle">05 / 2021</td>
                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="" data-original-title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Remove">
                        <div class="czi-trash"></div></a></td>
            </tr>
            </tbody>
        </table>
    </div>
    <hr class="pb-4">
    <div class="text-sm-right"><a class="btn btn-primary" href="#add-payment" data-toggle="modal">Add payment method</a></div>
</section>