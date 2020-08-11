<form method="post" action="<?php echo url_for('@products') ?>" enctype="multipart/form-data">
    <div class="form-group pb-2">
        <label class="font-weight-medium" for="product-name">Product name</label>
        <input class="form-control" type="text" id="product-name" name="product-name" max="120">
        <small class="form-text text-muted">Maximum 120 characters. No HTML or emoji allowed.</small>
    </div>
    <div class="cz-file-drop-area form-group">
        <div class="cz-file-drop-icon czi-cloud-upload"></div>
        <span class="cz-file-drop-message">Drag and drop here to upload product screenshot</span>
        <input class="cz-file-drop-input" type="file" id="product-image" name="product-image">
        <button class="cz-file-drop-btn btn btn-primary btn-sm mb-2" type="button">
            Or select file
        </button>
        <small class="form-text text-muted">1000 x 800px ideal size for hi-res displays</small>
    </div>
    <div class="form-group py-2">
        <label class="font-weight-medium" for="product-details">Product description</label>
        <textarea class="form-control" rows="6" id="product-details" name="product-details"></textarea>
        <div class="bg-secondary p-3 font-size-ms rounded-bottom mt-n2">
            <span class="d-inline-block font-weight-medium mr-2 my-1">Markdown supported:</span>
            <em class="d-inline-block border-right pr-2 mr-2 my-1">*Italic*</em>
            <strong class="d-inline-block border-right pr-2 mr-2 my-1">**Bold**</strong>
            <span class="d-inline-block border-right pr-2 mr-2 my-1">- List item</span>
            <span class="d-inline-block border-right pr-2 mr-2 my-1">##Heading##</span>
            <span class="d-inline-block">--- Horizontal rule</span>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 form-group">
            <label class="font-weight-medium" for="product-price">Standard price</label>
            <div class="input-group">
                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="czi-dollar"></i>
                                    </span>
                </div>
                <input class="form-control" type="text" id="product-price" name="product-price">
            </div>
            <small class="form-text text-muted">
                Price for this category is <?php echo CURRENCY['ZAR'] . get_categories()[0]->sale ?>
            </small>
        </div>
        <div class="col-sm-6 form-group">
            <label class="font-weight-medium" for="product-sale">Sale price</label>
            <div class="input-group">
                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="czi-dollar"></i>
                                    </span>
                </div>
                <input class="form-control" type="text" id="product-sale" name="product-sale">
            </div>
        </div>
    </div>
    <div class="form-group py-2">
        <label class="font-weight-medium" for="product-tags">Product tags</label>
        <textarea class="form-control" rows="4" id="product-tags" name="product-tags"></textarea>
        <small class="form-text text-muted">
            Up to 10 keywords that describe your item. Tags should all
            be in lowercase and separated by commas.
        </small>
    </div>
    <label>
        <input name="product-inventory" hidden type="text" id="product-inventory">
    </label>
    <button class="btn btn-primary btn-block" type="submit">
        <i class="czi-cloud-upload font-size-lg mr-2"></i>Save Product
    </button>
</form>