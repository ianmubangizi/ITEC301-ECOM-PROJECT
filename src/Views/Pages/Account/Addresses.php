<section class="col-lg-8">
    <!-- Toolbar-->
    <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-4">
        <h6 class="font-size-base text-light mb-0">List of your registered addresses:</h6>
        <a class="btn btn-primary btn-sm" href="<?php echo url_for('sign-out') ?>">
            <i class="czi-sign-out mr-2"></i>Sign out
        </a>
    </div>
    <!-- Addresses list-->
    <div class="table-responsive font-size-md">
        <table class="table table-hover mb-0">
            <thead>
            <tr>
                <th>Address</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="py-3 align-middle">396 Lillian Blvd, Holbrook, NY 11741, USA<span class="align-middle badge badge-info ml-2">Primary</span></td>
                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="" data-original-title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Remove">
                        <div class="czi-trash"></div></a></td>
            </tr>
            <tr>
                <td class="py-3 align-middle">769, Industrial, West Chicago, IL 60185, USA</td>
                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="" data-original-title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Remove">
                        <div class="czi-trash"></div></a></td>
            </tr>
            <tr>
                <td class="py-3 align-middle">514 S. Magnolia St. Orlando, FL 32806, USA</td>
                <td class="py-3 align-middle"><a class="nav-link-style mr-2" href="#" data-toggle="tooltip" title="" data-original-title="Edit"><i class="czi-edit"></i></a><a class="nav-link-style text-danger" href="#" data-toggle="tooltip" title="" data-original-title="Remove">
                        <div class="czi-trash"></div></a></td>
            </tr>
            </tbody>
        </table>
    </div>
    <hr class="pb-4">
    <div class="text-sm-right"><a class="btn btn-primary" href="#add-address" data-toggle="modal">Add new address</a></div>
</section>