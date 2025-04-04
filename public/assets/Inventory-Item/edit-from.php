<style type="text/css">
    #drop-zone1 {
        object-fit: cover;
        max-width: 100%;
        max-height: 100%;
    }
</style>
<hr class="fileline">
<form id="addlead20">
    <div class="row vendcarmt">

        <div class="col-md-12 ">
            <div class="desktop">
                <div class="scroll-images custml toptea tm">
                    <div class="child mb-0 mt-0 h1">
                        <button class="tablinks tb-links active mgtab w1 tmargin evemargin" type="button"
                            onclick="openTab(event, 'general')"><i class="fa-solid fa-bars baricn"></i>General Details
                        </button>
                    </div>
                    <div class="child mb-0 mt-0 h1 ">

                        <button class="tablinks tb-links w1 tmargin evemargin" type="button"
                            onclick="openTab(event, 'billing')"><i
                                class="fa-solid fa-user-group baricn "></i>Properties</button>
                    </div>
                    <div class="child mb-0 mt-0 h1 ">

                        <button class="tablinks tb-links w1 tmargin evemargin" type="button" onclick="openTab(event, 'custom')"><i
                                class="fa-solid fa-bars  baricn"></i>Variation</button>
                    </div>
                    <div class="child mb-0 mt-0 h1 ">

                        <button class="tablinks tb-links w1 tmargin evemargin" type="button"
                            onclick="openTab(event, 'custfield')"><i class="fa-solid fa-bars  baricn"></i>Custom
                            fields</button>
                    </div>


                </div>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-interval="false" style="height: 50px;">
                <div class="carousel-inner scroll-images">

                    <div class="carousel-item active" style="text-align: center;">
                        <div class="">
                            <div class="child mb-0 mt-0 " style="height:auto; margin-top: 10px !important;">
                                <button class="tablinks active tabresact w1" style="width:70%" type="button"
                                    onclick="openTab(event, 'general')"> <i class="fa-solid fa-bars"></i>General
                                    Details </button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="text-align: center; ">
                        <div class="">
                            <div class="child mb-0 mt-0 w1" style="height:auto; margin-top: 10px !important;">
                                <button class="tablinks tabresact w1" style="width:70%" type="button"
                                    onclick="openTab(event, 'billing')"><i
                                        class="fa-solid fa-user-group"></i>Properties</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="text-align: center;">
                        <div class="">
                            <div class="child mb-0 mt-0 " style="height:auto; margin-top: 10px !important;">
                                <button class="tablinks tabresact w1" style="width:70%" type="button"
                                    onclick="openTab(event, 'custom')"><i
                                        class="fa-solid fa-bars"></i>Variation</button>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="text-align: center;">
                        <div class="">
                            <div class="child mb-0 mt-0" style="height:auto; margin-top: 10px !important;">
                                <button class="tablinks tabresact w1" style="width:70%" type="button"
                                    onclick="openTab(event, 'custfield')"><i class="fa-solid fa-bars"></i>Custom
                                    fields</button>
                            </div>
                        </div>
                    </div>

                    <button id="prevButton" class="carousel-control-prev" style="margin-top: 10px;" type="button"
                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <i class="bi bi-chevron-left icon" style="color:black;font-weight: bold;"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button id="nextButton" class="carousel-control-next" style="margin-top: 10px;" type="button"
                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <i class="bi bi-chevron-right icon" style="color:black;font-weight:bold"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <hr class="fileline linehr22">

        </div>
    </div>


    <!--------------------------- first ------------------------------------------->

    <div id="general" class="tabcontent" style="display:block;">

        <div class="row rw2">
            <div class="col-md-12">
                <div class="purchasegrp purch-drop">
                    <label for="tags" class="purchaseinfo mb-2">Parent Item</label>
                    <select class="selectpicker form-control" name="parent_item" data-live-search="true">
                        <?php foreach ($list as $row) { ?>
                        <!-- Compare with the value stored in the database and set 'selected' if they match -->
                            <option value="<?= esc($row->parent_item) ?>" <?= ($edit->parent_item == $row->parent_item) ? 'selected' : '' ?>>
                                <?= esc($row->parent_item) ?>
                            </option>
                        <?php } ?>

                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group purchasegrp">
                    <label class="purchaseinfo"><span class=" aster">* </span> commodity code</label>
                    <input type="text" class="form-control purchaseselects" name="comodity_code"
                        value="<?= $edit->comodity_code ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group purchasegrp">
                    <label class="purchaseinfo"><span class=" aster"> </span> commodity name</label>
                    <input type="text" class="form-control purchaseselects" name="comodity_name"
                        value="<?= $edit->comodity_name ?>">
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group purchasegrp">
                    <label class="purchaseinfo"><span class=" aster"> </span> Commodity Barcode</label>
                    <input type="text" class="form-control purchaseselects" name="comodity_barcode"
                        value="<?= $edit->comodity_barcode ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group purchasegrp">
                    <!-- <span class="pull-right" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="SKU code is created by: the first character of the Commodity Group code and Subgroup code, and the id auto increases until it has four characters">
                        <span class="fa fa-circle-question"></span>
                    </span> -->
                    <label class="purchaseinfo"><span class="aster"></span> SKU code</label><span
                        data-bs-toggle="tooltip" data-bs-placement="top"
                        title="SKU code is created by: the first character of the Commodity Group code and Subgroup code, and the id auto increases until it has four characters">
                        <span class="fa fa-circle-question"></span>
                    </span>
                    <input type="text" class="form-control purchaseselects" name="sku_code"
                        value="<?= $edit->sku_code ?>">

                </div>
            </div>





        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group purchasegrp tags">
                    <label for="tags" class="purchaseinfo evemargin">Tags</label>
                    <i class="fa fa-tag"></i>
                    <div class=" dropdown-with-icon dropdownalignment">
                        <select class=" selectpicker multiselect" name="tags[]" multiple>
                            <?php foreach ($list as $row) { ?>
                                <!-- Compare with the value stored in the database and set 'selected' if they match -->
                                <option value="<?= esc($row->tags) ?>" <?= ($edit->tags == $row->tags) ? 'selected' : '' ?>>
                                    <?= esc($row->tags) ?>
                                </option>
                            <?php } ?>

                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group purchasegrp ">
                    <label class="emailpro Descript1">description</label>
                    <textarea class="textdesc form-control " rows="4"
                        name="description"><?= $edit->description ?></textarea>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12">
                <div class="purchasegrp  purch-drop">
                    <label class="purchaseinfo mb-1">
                        Warehouse name</label>
                    <select class="selectpicker form-control" name="warehouse" data-live-search="true"
                        title="None selected">
                        <?php foreach ($list as $row) { ?>
                            <!-- Compare with the value stored in the database and set 'selected' if they match -->
                            <option value="<?= esc($row->warehouse) ?>" <?= ($edit->warehouse == $row->warehouse) ? 'selected' : '' ?>>
                                <?= esc($row->warehouse) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">Commodities</label>
                    <select class="selectpicker form-control" name="comodities" data-live-search="true"
                        title="None selected">
                        <?php foreach ($list as $row): ?>
                            <option value="<?= esc($row->comodity) ?>" <?= ($edit->comodities == $row->comodity) ? 'selected' : '' ?>>
                                <?= esc($row->comodity) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="purchasegrp purch-drop ">
                    <label class="purchaseinfo mb-1"><span class="aster">* </span>
                        Units</label>
                    <select class="selectpicker form-control" name="units" data-live-search="true"
                        title="None selected">
                        <?php foreach ($list as $row) { ?>
                            <!-- Compare with the value stored in the database and set 'selected' if they match -->
                            <option value="<?= esc($row->units) ?>" <?= ($edit->units == $row->units) ? 'selected' : '' ?>>
                                <?= esc($row->units) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="purchasegrp purch-drop">
                    <label for="tags" class="purchaseinfo mb-1"><span class="aster"> </span>commodity
                        group</label>
                    <select class="selectpicker form-control" name="comodity_group" data-live-search="true"
                        title="None selected">
                        <?php foreach ($list as $row) { ?>
                            <!-- Compare with the value stored in the database and set 'selected' if they match -->
                            <option value="<?= esc($row->comodity) ?>" <?= ($edit->comodity_group == $row->comodity) ? 'selected' : '' ?>>
                                <?= esc($row->comodity) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="purchasegrp purch-drop ">
                    <label for="tags" class="purchaseinfo mb-1"><span class="aster"> </span>sub group</label>
                    <select class="selectpicker form-control" name="comodity_sub" data-live-search="true"
                        title="None selected">

                        <?php foreach ($list as $row) { ?>
                            <!-- Compare with the value stored in the database and set 'selected' if they match -->
                            <option value="<?= esc($row->comodity) ?>" <?= ($edit->comodity_sub == $row->comodity) ? 'selected' : '' ?>>
                                <?= esc($row->comodity) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group purchasegrp">
                    <label class="purchaseinfo mb-1">
                        Default Profit Rate (%)
                    </label>
                    <input type="number" name="profit_rate" class="selectpicker form-control" placeholder="0%"
                        value="<?= $edit->profit_rate ?>">
                </div>
            </div>
            <div class="col-md-3">
                <div class="purchasegrp purch-drop ">
                    <label for="tags" class="purchaseinfo mb-1">tax 1</label>
                    <select class="selectpicker form-control" name="tax" data-live-search="true" title="None selected">

                        <?php foreach ($list as $row) { ?>
                            <!-- Compare with the value stored in the database and set 'selected' if they match -->
                            <option value="<?= esc($row->tax) ?>" <?= ($edit->tax == $row->tax) ? 'selected' : '' ?>>
                                <?= esc($row->tax) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="purchasegrp purch-drop">
                    <label for="tags" class="purchaseinfo mb-1">tax2</label>
                    <select class="selectpicker form-control" name="currency" data-live-search="true" disabled
                        title="None selected">
                        <option value="36" data-subtext="GHS">GHS</option>
                        <option value="38" data-subtext="MAD">MAD</option>
                        <option value="41" data-subtext="¢">GHS</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group purchasegrp">
                    <label class="purchaseinfo mb-1"> purchase price
                    </label>
                    <input type="number" name="purchase_price" class="form-control purchaseselects"
                        value="<?= $edit->purchase_price ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group purchasegrp">
                    <label class="purchaseinfo mb-1"><span class="aster">*</span> Sales price
                    </label>
                    <input type="number" class="form-control purchaseselects" name="sale_price
                        value="<?= $edit->sale_price ?>">
                </div>
            </div>
            <!-- ............. -->
            <!-- <div class="col-md-8  pe-3 mt-3 mb-3 drag1"> -->
            <!-- <div class="col-md-6  pe-3 "> -->
                            <!-- <div class="col-md-2"></div> -->
                            <div class="col-md-12  pe-3 drag1">
                                <div class="overlay" id="overlay">Drop your files here...</div>

                                <div class="upload-files-container">
                                    <div class="drag-file-area pd_evn">
                                        <span class="material-icons-outlined upload-icon"> file_upload
                                        </span>
                                        <h3 class="dynamic-message" style="color: #6c757d;">Drag & drop
                                            any
                                            file here</h3>
                                        <!-- <label class="label" style="margin-left: -300px;">

                                                    <span class="browse-files">
                                                        <input type="file" class="default-file-input" />
                                                        <span style="color: #6c757d;">or</span>
                                                        <span class="browse-files-text">browse file</span>
                                                        <span style="color: #6c757d;">from device</span>
                                                    </span>
                                                </label> -->
                                        <label class="label">
                                            <!-- or
                                                    <span class="browse-files">
                                                        <input type="file" class="default-file-input" />
                                                        <span class="browse-files-text">browse file</span>
                                                        <span>from device</span>
                                                    </span> -->
                                            <span class="browse-files">
                                                <input type="file" class="default-file-input">
                                                <span style="color: #6c757d;">or</span>
                                                <br>
                                                <span>
                                                    <span class="browse-files-text">browse file</span>
                                                </span>

                                            </span>
                                        </label>
                                    </div>
                                    <span class="cannot-upload-message">
                                        <span class="material-icons-outlined">error</span> Please select
                                        a
                                        file
                                        first
                                        <span class="material-icons-outlined cancel-alert-button">cancel</span>
                                    </span>
                                    <div class="file-block">
                                        <div class="file-info">
                                            <span class="material-icons-outlined file-icon">description</span>
                                            <span class="file-name"> </span> <span class="file-size badge rounded-pill">
                                            </span>
                                        </div>
                                        <span class="material-icons remove-file-icon">delete</span>
                                        <div class="progress-bar"></div>
                                    </div>
                                </div>
                                <span class="cannot-upload-message">
                                    <span class="material-icons-outlined">error</span> Please select
                                    a file
                                    first
                                    <span class="material-icons-outlined cancel-alert-button">cancel</span>
                                </span>
                                <?php if (!empty ($edit->file)): ?>
                                    <div class="file-block" style="display:flex;">
                                        <div class="file-info">
                                            <span class="material-icons-outlined file-icon">description</span>
                                            <span class="file-name">
                                                <?= $edit->file ?>
                                            </span>
                                        </div>
                                        <span class="material-icons remove-file-icon"
                                            onclick="removeFile(this)">delete</span>
                                    </div>
                                <?php endif ?>
                            </div>
                            </div>
            <!--   ....... -->
                        </div>
                       
                        </div>
      

    <!--------------------------- second ------------------------------------------->

    <div id="billing" class="tabcontent " >
        <div class="row">
            <div class="col-md-6">
                <div class="form-group purchasegrp">
                    <label class="purchaseinfo"><span class=" aster"> </span> Origin</label>
                    <input type="text" class="form-control purchaseselects" name="origin"
                        value="<?= $property->origin ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="purchasegrp purch-drop ">
                    <label for="tags" class="purchaseinfo mb-1"><span class="aster"> </span>styles</label>
                    <select class="selectpicker form-control" name="style" data-live-search="true"
                        placeholder="None selected">
                        <?php foreach ($list as $row) { ?>
                        <!-- Compare with the value stored in the database and set 'selected' if they match -->
                            <option value="<?= esc($row->style) ?>" <?= ($property->style == $row->style) ? 'selected' : '' ?>>
                                <?= esc($row->tax) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="purchasegrp purch-drop ">
                    <label for="tags" class="purchaseinfo mb-1"><span class="aster"> </span>model</label>
                    <select class="selectpicker form-control" name="modal" data-live-search="true"
                        placeholder="None selected">
                        <?php foreach ($list as $row) { ?>
                            <!-- Compare with the value stored in the database and set 'selected' if they match -->
                            <option value="<?= esc($row->modal) ?>" <?= ($property->modal == $row->modal) ? 'selected' : '' ?>>
                                <?= esc($row->modal) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="purchasegrp purch-drop ">
                    <label for="tags" class="purchaseinfo mb-1"><span class="aster"> </span>sizes</label>
                    <select class="selectpicker form-control" name="size" data-live-search="true"
                        placeholder="None selected">
                        <?php foreach ($list as $row) { ?>
                            <option value="<?= esc($row->size) ?>" <?= ($property->size == $row->size) ? 'selected' : '' ?>>
                                <?= esc($row->size) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="purchasegrp purch-drop ">
                    <label for="tags" class="purchaseinfo mb-1"><span class="aster"> </span>color</label>
                    <select class="selectpicker form-control" name="color" data-live-search="true"
                        placeholder="None selected">
                        laceholder="None selected">
                        <?php foreach ($list as $row) { ?>
                            <!-- Compare with the value stored in the database and set 'selected' if they match -->
                            <option value="<?= esc($row->color) ?>" <?= ($property->color == $row->size) ? 'selected' : '' ?>>
                                <?= esc($row->color) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group purchasegrp">
                    <label class="purchaseinfo"><span class=" aster"> </span> warranty(month)</label>
                    <input type="number" class="form-control purchaseselects" name="month"
                        value="<?= $property->month ?>">
                </div>
            </div>

        </div>
        <div class="row checkk">
            <div class="col-md-5">
                <div class="form-group purchasegrp tmargin">
                    <input class="form-check-input " type="checkbox"> Do not update inventory numbers<br><small> ( Stock
                        quantity is not updated when an Inventory
                        receipt
                        or Inventory delivery is created for this item)</small>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row tmargin">
                    <div class="col-md-6 sold ">
                        <input class="form-check-input " type="checkbox">
                        <label>Can be sold</label>
                    </div>
                    <div class="col-md-6">
                        <input class="form-check-input" type="checkbox">
                        <label>Can be inventory</label>
                    </div>
                </div>

                <div class="row checkk">
                    <div class="col-md-6 tmargin">
                        <input class="form-check-input " type="checkbox">
                        <label>Can be purchased</label>
                    </div>
                    <div class="col-md-6">
                        <input class="form-check-input" type="checkbox">
                        <label>Can be manufacturing</label>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group purchasegrp">
                    <label for="name" class="emailpro mb-1">Long Description </label>
                    <div id="summernote" name="long_description"></div>
                    <textarea name="long_description" id="content_idid" cols="30" rows="10"
                        style="display:none;"><?= $property->long_description ?></textarea>
                </div>
            </div>
        </div>
    </div>

   
    <!--------------------------- third ------------------------------------------->


    <div id="custom" class="tabcontent">
        <div id="parent1" class="banking-parent">
            <?php foreach ($variant as $index => $variantItem): ?>
            <div class="row variant-row">
                <div class="col-md-4">
                    <div class="form-group purchasegrp">
                        <label class="purchaseinfo">Variant Name</label>
                        <input type="text" class="form-control purchaseselects" name="name[]"
                            value="<?= $variantItem->name ?>">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group purchasegrp">
                        <label class="purchaseinfo">
                            <i class="fa fa-circle-question" data-bs-toggle="tooltip"
                                data-bs-title="Populate the field by separating the options by coma. eq. apple,orange,banana"></i>
                            Variant Options
                        </label>
                        <input type="text" class="form-control purchaseselects" name="option[]"
                            value="<?= $variantItem->option ?>">
                        <input type="hidden" name="variant_id[]" value="<?= $variantItem->variant_id ?>">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group purchasegrp mtp">
                        <span class="input-group-addon">
                            <?php if ($index === 0): ?>
                            <button type="button" class="ctctgrnbtn btontick add_btn"><i
                                    class="fa fa-plus"></i></button>
                            <?php else: ?>
                            <button type="button" class="ctctredbtn ctctgrnbtn btontick remove_btn"><i
                                    class="fa fa-minus"></i></button>
                            <?php endif; ?>
                        </span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 blkftr">
            <div class="modal-footer taskfooter mb-2 mr-2 saveclose  ">
                <button type="button" class="taskclose1" data-bs-dismiss="modal">
                    CLOSE
                </button>
                <button type="submit" class="tasksave1 scbtn safe" form="addlead20">SAVE</button>
            </div>
        </div>
    </div>
</form>



<!--------------------------- four ------------------------------------------->

<script>
    $(document).ready(function ()
    {
        $(document).on('click', '.add_btn', function ()
        {
            $("#parent1").append('<div id="coldiv"  class="row"><div class="col-md-4"><div class="purchasegrp"><label class="purchaseinfo">Variant Name</label><input type="text" class="form-control purchaseselects" name="name[]"></div></div><div class="col-md-7"><div class="purchasegrp "><label class="purchaseinfo"><i class="fa fa-circle-question" data-bs-toggle="tooltip" data-bs-title="Populate the field by separating the options by coma. eq. apple,orange,banana"></i> Variant Options</label><input type="text" class="form-control purchaseselects " name="option[]"> <input type="hidden" name="variant_id[]" value="0"></div></div><div class="col-md-1"><div class="purchasegrp mtp"><span class="input-group-addon"><button id="remove_btn" type="button" class="ctctredbtn ctctgrnbtn btontick remove_btn"><i class="fa fa-minus"></i></button></span></div></div></div>');
        });
        $(document).on('click', '.remove_btn', function ()
        {
            $(this).closest('#coldiv').remove();
        });
    });
</script>


<!-- tooltip -->
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl)
    {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
</script>

<!--upload-files-->

<script>
    const dropZone = document.querySelector('#drop-zone1');
    const inputElement = document.querySelector('#myfile');
    const img = document.querySelector('img');
    const p = document.querySelector('.dropfile');
    const fileNameElement = document.querySelector('.file-name');
    const deleteButton = document.querySelector('#deleteBtn');

    inputElement.addEventListener('change', function (e)
    {
        const file = this.files[0];
        if (file)
        {
            img.style.display = "block";
            p.style.display = 'none';
            fileNameElement.textContent = file.name;
            deleteButton.style.display = 'inline-block';

            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onloadend = function ()
            {
                const src = this.result;
                img.src = src;
                img.alt = file.name;
            }
        }
    });

    dropZone.addEventListener('click', () => inputElement.click());
    dropZone.addEventListener('dragover', (e) =>
    {
        e.preventDefault();
    });

    dropZone.addEventListener('drop', (e) =>
    {
        e.preventDefault();
        img.style.display = "block";
        const file = e.dataTransfer.files[0];
        // p.style.display = 'none';

        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = function ()
        {
            e.preventDefault();
            p.style.display = 'none';
            fileNameElement.textContent = file.name;
            deleteButton.style.display = 'inline-block';

            const src = this.result;
            img.src = src;
            img.alt = file.name;
        }
    });

    deleteButton.addEventListener('click', () =>
    {
        img.src = '';
        img.style.display = 'none';
        p.style.display = 'block';
        fileNameElement.textContent = '';
        deleteButton.style.display = 'none';
        inputElement.value = '';
    });
</script>


<!-- Modal -->
<div class="modal fade" id="modal_md" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
                <h5 class="modal-title"></h5>
            </div>
            <div class="modal-body ">
            </div>
        </div>
    </div>
</div>

<!-- Modal script -->

<script>
    function showMdModal(url, title)
    {

        $('#modal_md').on('shown.bs.modal', function ()
        {
            $('.selectpicker').selectpicker('refresh');
        });
        $('#modal_md').modal('show', { backdrop: 'true' });
        $.ajax({
            url: url,
            success: function (response)
            {
                $('#modal_md .modal-title').html(title);
                $('#modal_md .modal-body').html(response);
            }
        });
    }
</script>
<script>
    $(document).ready(function ()
    {

        // Initialize FormValidation for addlead10 form
        var validator;

        function initFormValidation(formId)
        {
            validator = $(formId).formValidation({
                framework: 'bootstrap',
                fields: {
                    comodity_code: {
                        validators: {
                            notEmpty: {
                                message: 'This field is required'
                            }
                        }
                    },
                    units: {
                        validators: {
                            notEmpty: {
                                message: 'This field is required'
                            }
                        }
                    },
                    sale_price: {
                        validators: {
                            notEmpty: {
                                message: 'This field is required'
                            }
                        }
                    },
                    origin: {
                        validators: {
                            notEmpty: {
                                message: 'This field is required'
                            }
                        }
                    },
                    modal: {
                        validators: {
                            notEmpty: {
                                message: 'This field is required'
                            }
                        }
                    },
                    color: {
                        validators: {
                            notEmpty: {
                                message: 'This field is required'
                            }
                        }
                    }
                }
            })
                .on('success.form.fv', function (e)
                {
                    e.preventDefault();

                    const htmlContent = $('#summernote').summernote('code');
                    $('#content_idid').val(htmlContent);

                    var form = document.querySelector(formId);
                    var dataForm = new FormData(form);

                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url() ?>/home/updateAllSections/<?= $edit->inventory_id ?>',
                        data: dataForm,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function (result)
                        {
                            toastr.success('Data upadated successfully', 'Success');
                        }
                    });
                });
        }

        // Initialize Summernote for summernote element
        $('#summernote').summernote({
            placeholder: '',
            tabsize: 2,
            height: 100
        });

        // Event delegation for FormValidation initialization
        $(document).on('click', '.tablinks', function (e)
        {
            console.log('Tab button clicked');

            // Assuming your form ID is dynamic based on the tab, replace 'dynamicFormId' with the actual logic
            var dynamicFormId = '#addlead20'; // Replace with actual logic
            console.log('Initializing FormValidation for form: ' + dynamicFormId);

            // Destroy existing FormValidation instance if available
            if (validator)
            {
                validator.data('formValidation').destroy();
                console.log('FormValidation instance destroyed');
            } else
            {
                console.log('No FormValidation instance found');
            }

            // Initialize FormValidation for the new form
            initFormValidation(dynamicFormId);
        });

        // Initial FormValidation setup
        // Assuming your initial form ID is 'addlead10', replace with the actual ID if different
        initFormValidation('#addlead20');

    });
</script>
<script type="text/javascript">

    $(document).on('click', '.removeRow', function ()
    {
        var rowId = $(this).data('row-id');
        console.log(rowId);
        $(this).closest('tr').remove();
        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>/home/deletedeliveryRow',
            data: { rowId: rowId },
            dataType: 'json',
            success: function (result)
            {
                console.log(result);
            },

        });
    });
</script>

<!-- multiselect -->
<script>
    const dropdowns = document.querySelectorAll('.multiselect');

    dropdowns.forEach(dropdown =>
    {
        const inputBox = document.createElement('input');
        inputBox.type = 'hidden';
        inputBox.classList.add('selected-values');
        const name = dropdown.getAttribute('name');
        inputBox.setAttribute('name', name);
        dropdown.after(inputBox);

        dropdown.addEventListener('change', () =>
        {
            const selectedOptions = Array.from(dropdown.selectedOptions).map(option => option.value);
            inputBox.value = selectedOptions.join(', ');
        });
    });
</script>
<script>


    $(document).ready(function ()
    {

        var options = {
            html: true,
            title: "Optional: HELLO(Will overide the default-the inline title)",
            //html element
            //content: $("#popover-content")
            content: $('[data-name="popover-content"]')
            //Doing below won't work. Shows title only
            //content: $("#popover-content").html()

        }
        var exampleEl = document.getElementById('example10')
        var popover = new bootstrap.Popover(exampleEl, options)
    })

</script>

<script>
    function openTab(evt, tabName)
    {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++)
        {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++)
        {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";

    }
    var carousel = document.getElementById("carouselExampleIndicators");

    carousel.addEventListener("slid.bs.carousel", function (event)
    {
        var activeSlideIndex = event.to;
        if (activeSlideIndex === 0)
        {

            openTab(event, 'general');

        }
        else if (activeSlideIndex === 1)
        {

            openTab(event, 'billing');

        }
        else if (activeSlideIndex === 2)
        {

            openTab(event, 'custom');

        }
        else if (activeSlideIndex === 3)
        {

            openTab(event, 'custfield');

        }
    });



</script>


<!-- summernote -->
<link href="<?= base_url() ?>/assets/css/summernote.min.css" rel="stylesheet">
<link href="<?= base_url() ?>/assets/css/summernote-lite.min.css" rel="stylesheet">
<script src="<?= base_url() ?>/assets/js/summernote-lite.min.js"></script>
<!-- Example Bootstrap CDN link for Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- ........ -->
<script>
var isAdvancedUpload = (function () {
  var div = document.createElement("div");
  return (
    ("draggable" in div || ("ondragstart" in div && "ondrop" in div)) &&
    "FormData" in window &&
    "FileReader" in window
  );
})();

let fileInput = document.querySelector(".default-file-input");
let uploadButton = document.querySelector(".upload-button");
let uploadedFilesContainer = document.querySelector(".upload-files-container");
let overlay = document.getElementById("overlay");
let dragFileArea = document.querySelector(".drag-file-area");
let dragCounter = 0;

function showOverlay() {
  overlay.style.display = "flex";
  overlay.style.flexDirection = "column";
}

function hideOverlay() {
  overlay.style.display = "none";
}

["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
  window.addEventListener(
    eventName,
    function (e) {
      e.preventDefault();
      e.stopPropagation();
    },
    false
  );
});

window.addEventListener("dragenter", function (e) {
  dragCounter++;
  showOverlay();
});

window.addEventListener("dragleave", function (e) {
  dragCounter--;
  if (dragCounter === 0) {
    hideOverlay();
  }
});

window.addEventListener("drop", function (e) {
  dragCounter = 0;
  hideOverlay();
  processFiles(e.dataTransfer.files);
});

fileInput.addEventListener("change", function () {
  processFiles(fileInput.files);
});

dragFileArea.addEventListener("click", () => {
  let input = document.createElement("input");
  input.type = "file";
  input.onchange = (_this) => {
    let files = Array.from(input.files);
    processFiles(files);
  };
  input.click();
});

let allFiles = []; // Array to store all files

function processFiles(files) {
  Array.from(files).forEach((file) => {
    allFiles.push(file); // Add new file to the array
    processFile(file);
  });
}

function processFile(file) {
  let fileBlock = document.createElement("div");
  fileBlock.className = "file-block";
  fileBlock.style.display = "flex";
  fileBlock.innerHTML = `
    <div class="file-info">
     <span class="material-icons-outlined file-icon">description</span>
     <span class="file-name">${file.name}</span> 
     <span class="file-size badge rounded-pill">${(file.size / 1024).toFixed(
       1
     )} KB</span>
    </div>
    <span class="material-icons remove-file-icon" onclick="removeFile(this)">delete</span>
    <div class="progress-bar" style="width: 0; height: 5px; bottom: 0; position: absolute;"></div>`;
  uploadedFilesContainer.appendChild(fileBlock);
}

window.removeFile = function (element) {
  let fileName = element
    .closest(".file-block")
    .querySelector(".file-name").textContent;
  allFiles = allFiles.filter((file) => file.name !== fileName); // Remove file from the array
  element.closest(".file-block").remove();
};

uploadButton.addEventListener("click", function () {
  // Remove the behavior that opens the file input
  // Instead, call the function to start uploading files
  uploadFiles();
});

window.addEventListener("paste", function (e) {
  const items = (e.clipboardData || e.originalEvent.clipboardData).items;
  let files = [];
  for (let item of items) {
    if (item.kind === "file") {
      let file = item.getAsFile();
      files.push(file);
    }
  }
  if (files.length > 0) {
    processFiles(files);
  }
});

// Function to simulate the upload process
function uploadFiles() {
  let fileBlocks = uploadedFilesContainer.querySelectorAll(".file-block");
  fileBlocks.forEach((block) => {
    // Simulate file upload progress
    let progressBar = block.querySelector(".progress-bar");
    let width = 0;
    let intervalId = setInterval(() => {
      if (width >= 100) {
        clearInterval(intervalId);
        progressBar.style.width = "100%";
      } else {
        width++;
        progressBar.style.width = width + "%";
      }
    }, 50);
  });
}

// Trigger the upload process when the upload button is clicked
uploadButton.addEventListener("click", function () {
  // Assuming all files are ready to upload, for example purposes
  uploadFiles();
});

// Add a click event listener to the cancel (X) button to hide the upload message
document
  .querySelector(".cancel-alert-button")
  .addEventListener("click", function () {
    document.querySelector(".cannot-upload-message").style.display = "none";
  });</script>