<style>
  .help-block {
    margin-left: 10px;
    color: red;
  }

  ::-webkit-scrollbar {
    height: 8px;
  }

  input[type="checkbox"] {
    margin-top: 0px !important;
  }

  .newalinetems {
    margin-top: 5px;
    gap: 15px;
    display: flex;

  }

  span.select2-dropdown.select2-dropdown--below {
    width: 95px !important;
    position: relative !important;
    left: -11px;
  }

  .shipping-card {
    padding: 24px 24px 0px 24px;
    margin: 0px;
    width: 100%;
  }

  .shipping-card-heading {
    padding-bottom: 8px;

  }

  .newalineitem {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    margin-right: 2px !important;
    margin-top: 22px !important;
    margin-bottom: 12px !important;
  }

  .newalineitem {
    margin-right: 8px;
    margin-bottom: 2px;
    margin-top: 5px;
  }

  .card-foot {
    padding: 20px;
  }

  .check-mark {
    font-size: 15px;
    color: #1c841b;
  }

  .newwithdaline {
    padding-left: 10rem;
  }

  .resizethetable {
    display: flex;
    flex-direction: column;
    /* align-items: flex-end; */
    justify-content: space-between;
  }

  .no-border {
    border: none !important;
  }

  .no-border:active {
    border: none !important;
  }

  .no-border:focus {
    border: none !important;
  }

  .bor4px {
    border-radius: 4px !important;
    margin-bottom: 26px !important;
  }

  @media (max-width: 768px) {
    .moaline {
      margin-right: 5px !important;
    }
  }
</style>


<form action="<?= site_url('sales/new-invoice') ?>" id="add-form">
  <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>">
  <div class="estnewcontainer p-4 mhhchan mrsschan">
    <div class="row first" style="height:auto">
      <!-- <div class="bg-white" style="box-shadow: 0px 2px 20px rgb(1 41 112 / 10%);padding: 10px 20px;">
        <h5 style="margin: 0;"><i><b>New Invoice</b></i></h5>
      </div> -->

      <div class="tblcontainer1 bg-white bor4px ">
        <div class="row">
          <h5 style="margin: 0;"><i><b>NEW INVOICE</b></i></h5>
          <hr class="mbtsin mtfichan">
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrp purch-drop">
                  <label for="tags" class="purchaseinfo mb-1"><span class="aster">* </span>
                    Customer</label>
                  <select name="customer_id" onchange="getBillAndShipAddress('<?= site_url('sales/credit-billdetails') ?>',this.value);" class="selectpicker form-control" data-live-search="true" data-none-selected-text="Select customer">
                    <!--<option value=""></option>-->
                    <?php if (!empty($customers)) : ?>
                      <?php foreach ($customers as $customer) : ?>
                        <option value="<?= $customer->id ?>">
                          <?= $customer->company ?>
                        </option>
                      <?php endforeach ?>
                    <?php endif ?>
                    <option value="add_new_customer" class="fixed ps-1" data-content="<i class='fa-solid fa-circle-plus text-primary'></i> Create New Customer">
                    </option>
                  </select>

                </div>
              </div>
            </div>

            <div class="row mt-2">
              <div class="col-md-12 mb-1">
                <div class="pophover">
                  <div class="purchasegrp mngsin">
                    <label class="purchaseinfo mb-0"><span class="aster">* </span> Invoice Number
                      #</label>
                    <div class="input-group" style="border: none !important;">
                      <span class="input-group-text cn estspnbox" style="border: 1px solid #ced4da !important;">INV-
                        <input type="hidden" name="prefix" value="INV-000"></span>
                      <input type="text" name="number" value="000<?= (int) $sno_number->num + 1 ?>" class="form-control purchaseselect">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-1">
                <div class="purchasegrp mtosin">
                  <label for="creationdate" class="purchaseinfo mb-0 "><span class="aster">* </span>
                    Invoice Date</label>
                  <input type="date" id="date1" name="date" value="<?= date('Y-m-d') ?>" class="form-control purchaseselects">
                </div>
              </div>
              <div class="col-md-12">
                <div class="purchasegrp mmsin">
                  <label for="creationdate" class="purchaseinfo mb-0 ">Due Date</label>
                  <input type="date" id="date2" name="due_date" value="<?= date('Y-m-d', strtotime("+1 Month")) ?>" class="form-control purchaseselects">
                </div>
              </div>


            </div>

            <!--end of row sec-->
          </div>

          <div class="col-md-4">
            <div class="row billcreditml">

              <div class="col-md-6" onclick="showBillModal()">
                <a href="javascript:void(0)" class="editbillicn" onclick="showBillModal()">
                  <i class="bi bi-truck"></i></a>
                <br>
                <p class="mb-0 grntec">Bill</p>
                <p class="mb-2" id="bStreet">Street
                  <hr class="mb-2">
                </p>
                <p class="mb-2" id="bCityState">city
                  <hr class="mb-2">
                </p>
                <p class="mb-2" id="bzipcode">Zipcode
                  <hr>
                </p>
                <input type="hidden" name="bill_address">
              </div>

              <div class="col-md-6" onclick="showBillModal()">
                <br>
                <p class="mb-0 grntec">Ship to</p>

                <p class="mb-2" id="sStreet">Street
                  <hr class="mb-2">
                </p>
                <p class="mb-2" id="sCityState">city
                  <hr class="mb-2">
                </p>
                <p class="mb-2" id="szipcode">Zipcode
                  <hr>
                </p>
                <input type="hidden" name="ship_address">
              </div>
            </div>
            <div class="row mt-1">
              <div class="col-md-12">
                <div class="purchasegrp purch-drop">
                  <label class="purchaseinfo mb-1"></span> Allowed Payment Mode</label>
                  <select class="selectpicker form-control" name="allowed_payment_mode[]" multiple>
                    <?php if (!empty($pay_modes)) : ?>
                      <?php foreach ($pay_modes as $pay_mode) : ?>
                        <option value="<?= $pay_mode->id ?>">
                          <?= $pay_mode->name ?>
                        </option>
                      <?php endforeach ?>
                    <?php endif ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-md-12 ">
                <div class="purchasegrp purch-drop " style="margin-top:-1px !important;">
                  <label for="tags" class="purchaseinfo mb-1">Sales Agent</label>
                  <select class="selectpicker form-control" name="sales_agent" data-live-search="true" title="Nothing Selected">
                    <!--<option value=""></option>-->
                    <?php if (!empty($staffs)) : ?>
                      <?php foreach ($staffs as $staff) : ?>
                        <option value="<?= $staff->id ?>">
                          <?= $staff->first_name . " " . $staff->last_name ?>
                        </option>
                      <?php endforeach ?>
                    <?php endif ?>
                  </select>
                </div>
              </div>
            </div>



          </div>
          <!-- <div class="col-md-4 pl-10"> -->
          <div class="col-md-4">
            <div class="col-md-12">
              <div class="purchasegrp purch-drop">
                <label class="contractselect pb-2">Recurring Invoice?</label>
                <select name="recurring" id="repeat_every" class="selectpicker form-control" data-live-search="true" data-none-selected-text="None selected">
                  <option>No</option>
                  <option>Every 1 month</option>
                  <option>Every 2 months</option>
                  <option>Every 3 months</option>
                  <option>Every 4 months</option>
                  <option>Every 5 months</option>
                  <option>Every 6 months</option>
                  <option>Every 7 months</option>
                  <option>Every 8 months</option>
                  <option>Every 9 months</option>
                  <option>Every 10 months</option>
                  <option>Every 11 months</option>
                  <option>Every 12 months</option>
                  <option value="custom">Custom</option>
                </select>
              </div>
            </div>

            <div class="row" id="tutorial" style="display:none;">
              <div class="col-md-6 ">
                <input type="number" name="repeat_every_custom" min="1" value="1" class="form-control purchaseselects">
              </div>
              <div class="col-md-6">
                <div class="purchasegrp">
                  <select name="repeat_type_custom" class="selectpicker form-control">
                    <option value="day">Day(s)</option>
                    <option value="week">Week(s)</option>
                    <option value="month">Month(s)</option>
                    <option value="year">Year(s)</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row" id="tutorial2" style="display:none;">
              <div class="col-md-12">
                <div class="purchasegrp">
                  <div class="col-md-12">
                    <div class="form-group m-0">
                      <label class="contractselect">Total Cycles</label>
                      <div class="input-group">
                        <input type="number" id="checkinpt" name="cycles" value="0" disabled class="form-control purchaseselects">
                        <button class="btn shadow-none add_more_attachments" type="button" style="border: 1px solid #aaaaaa ;margin-top: 5px;height: 36px;">
                          <input type="checkbox" checked id="cyclecheckbox">
                          <label style="font-size: 14px;">Infinity</label>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row mtnsin">
              <div class="col-md-12">
                <div class="purchasegrps ms-0 me-0">
                  <label for="tags" class="purchaseinfo mb-2">Tags</label>
                  <i class="fa fa-tag"></i>
                  <div class="dropdown-with-icon dropdownalignment">
                    <select name="tag[]" class="selectpicker multiselect" multiple>
                      <?php if (!empty($tags)) : ?>
                        <?php foreach ($tags as $tg) : ?>
                          <option value="<?= $tg->id ?>">
                            <?= $tg->name ?>
                          </option>
                        <?php endforeach ?>
                      <?php endif ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-md-12 ali_disc_inp">
                <div class="purchasegrp purch-drop mnvsin">
                  <label class="purchaseinfo mb-1"> Discount Type</label>
                  <select name="discount_type" onchange="setDiscount(event)" class="selectpicker form-control">
                  <option>No Discount</option>
                    <option value="Before Tax" selected>Overall - Before Tax</option>
                    <option value="After Tax">Overall - After Tax</option>
                    <option value="Before Tax">Separate - Before Tax</option>
                    <option value="After Tax">Separate - After Tax</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="purchasegrp mtsschan ">
                <label for="myCheckbox" class="ali_cent flex gap-1 items-center">
                  <input type="hidden" name="prevent_reminder" value="0">
                  <input id="myCheckbox" type="checkbox" class="form-check-input " style="margin-top:-12px !important;"> <label name="prevent_reminder  " value="1" class="me-1 mt-2"> Prevent sending overdue
                    reminders for this invoice</label>
              </div>
            </div>
            <!-- <div class="row ">
              <div class="col-md-12 ali_disc_inp">
                <div class="purchasegrp purch-drop">
                  <label class="purchaseinfo mb-1"> Discount Type</label>
                  <select name="discount_type" onchange="setDiscount(event)" class="selectpicker form-control">
                    <option>No Discount</option>
                    <option selected>Before Tax</option>
                    <option>After Tax</option>
                  </select>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div class=" ">
          <div class="">
            <div class="row">
              <div class="col-md-12">
                <div class="accordion-item borchan alig_btnt">
                  <h2 class="accordion-header" id="accordionwithplusExample1">
                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#date-selector-div" aria-expanded="false" aria-controls="date-selector-div">
                      Advanced Options
                    </button>
                  </h2>
                </div>
              </div>
            </div>
            <div class="collapse collapse-vertical mtfsin" id="date-selector-div">
              <div class="row">
                <div class="col-md-3">
                  <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">Currency</label>
                    <select name="currency" class="selectpicker form-control" data-live-search="true">
                      <?php if (!empty($currencies)) : ?>
                        <?php foreach ($currencies as $currency) : ?>
                          <option <?= ($currency->name == 'IND') ? 'selected' : '' ?> value="<?= $currency->id ?>" data-subtext="<?= $currency->symbol ?>">
                            <?= $currency->name ?>
                          </option>
                        <?php endforeach ?>
                      <?php endif ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-3 ">
                  <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">GST Treatment</label>
                    <select name="GST_treatment" class="selectpicker form-control">
                      <option selected>Registered Business - Regular</option>
                      <option>Registered Business - Composition</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3 ">
                  <div class="purchasegrp ">
                    <label class="purchaseinfo mb-0">GSTIN</label>
                    <input name="GSTIN" placeholder="GSTIN" type="text" class="form-control purchaseselects">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">Place Of Supply</label>
                    <select name="place_of_supply" class="selectpicker form-control" data-live-search="true">
                      <!-- <option value=""></option> -->
                      <?php if (!empty($states)) : ?>
                        <?php foreach ($states as $state) : ?>
                          <option value="<?= $state->id ?>">
                            <?= $state->state_name ?>
                          </option>
                        <?php endforeach ?>
                      <?php endif ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">Quantity </label>
                    <select name="quantity_unit" class="selectpicker form-control">
                      <option selected>Qty</option>
                      <option>Hours</option>
                      <option>Qty/Hours</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">Project</label>
                    <select name="project" class="selectpicker form-control" data-live-search="true" data-none-selected-text="None Selected">
                      <!-- <option value=""></option> -->
                      <?php if (!empty($projects)) : ?>
                        <?php foreach ($projects as $project) : ?>
                          <option value="<?= $project->id ?>">
                            <?= $project->project_name ?>
                          </option>
                        <?php endforeach ?>
                      <?php endif ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="purchasegrp">
                    <label class="emailpro mt-0">Admin's note</label><br>
                    <textarea name="admin_note" placeholder="ENter Admin's Note" class="form-control txtarea" rows="3"></textarea>
                  </div>
                </div>
              </div>

             
            </div>
          </div>
        </div>

      </div>


      <div class="tblcontainer1 mb-3 bg-white borrsin borlsin">
        <div class="row hide" id="no-item-alert">
          <div class="col-md-12">
            <div class="alert alert-warning m-0 mb-2 py-2" style="margin-bottom: 15px !important;" role="alert">
              Enter at least one item.
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-3">
            <div class="purchasegrp">
              <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
                <select id="add-new-item" class="selectpicker form-control" onchange="fetchItem('<?= site_url('sales/get-one-item/') ?>',this.value)" data-live-search="true" data-none-selected-text="Add Items">
                  <option></option>
                  <?php if (!empty($items)) : ?>
                    <?php foreach ($items as $item) : ?>
                      <option value="<?= $item->id ?>" data-subtext="<?= $item->long_description ?>">(
                        <?= $item->price ?>)
                        <?= $item->description ?>
                      </option>
                    <?php endforeach ?>
                  <?php endif ?>
                </select>
                <button type="button" class="select-container dropdownplusbtn" onclick="showItemModal()">
                  <span class="input-group-addon colorlabels"><i class="bi bi-plus-lg plus-blue"></i></span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 py-3">
            <!-- <div class="s_table"> -->
            <!-- add item table  -->
            <!-- <table id="items-table" class="table blktbleth blktbltdwidth"> -->
            <!-- <thead class="bordchan">
                  <tr>
                    <th> </th>
                    <th class="blkitemswidth"><i class="fa-solid fa-circle-exclamation"></i> Items</th>
                    <th class="blkdesswidth">Description</th>
                    <th class="blkqtywidth"><span id="changeQty">Qty</span></th>
                    <th class="blkratewidth">Rate</th>
                    <th class="blktaxwidth">Tax</th>
                    <th class="blkamountwidth">Amount</th>
                    <th class="blksetwidth"><i class="bi bi-gear-fill"></i></th>
                  </tr>
                </thead> -->
            <!-- <tbody id="items_body">
                  <tr id="main_row" draggable="false"> -->
            <!-- <td> </td>
                    <td>
                      <textarea class="form-control txtarea" id="item_description" rows="4"
                        placeholder="Description"></textarea>
                    </td>
                    <td>
                      <textarea id="item_long_description" rows="4" placeholder="Long Description"
                        class="form-control txtarea "></textarea>
                    </td>
                    <td>
                      <input type="number" id="item_quantity" min="1" value="1" class="blacktdinp form-control ">
                      <input type="text" id="item_unit" class="blacktdinp form-control"
                        style="border:none!important;text-align: right;" placeholder="Unit">
                    </td>
                    <td> <input type="number" id="item_rate" min="0" placeholder="Rate"
                        class="blacktdinp form-control "></td>
                    <td class="purch-drop"> -->
            <!-- <select id="item_no_tax" class="selectpicker form-control blkselectheight" multiple
                        data-none-selected-text="No Tax">
                        <?php foreach ($tax as $row) { ?>
                          <option value="<?= $row->id ?>" data-subtext="<?= $row->name ?>">
                            <?= $row->percentage ?>%
                          </option>
                        <?php } ?>
                      </select>
                    </td> -->
            <!-- <td class="amounttdalign"><span></span></td>
                    <td class="check-mark">
                      <button type="button" onclick="pushItem()" class="btn btn-info ms-0 table-button"><i
                          class="fa fa-check"></i></button> -->
            <!-- <i class="bi bi-check2-circle fschan" onclick="pushItem()"></i>
                    </td>
                  </tr> -->


            <!-- </tbody>
              </table>
            
            </div> -->
            <div class="tablewrapper ">
              <table id="items-table" class="table table-bordered table-condensed contracttable">
                <thead class="table-head">
                  <tr>
                    <th>#</th>
                    <th>Items</th>
                    <th>HSN / SAC</th>
                    <th><span id="changeQty">Qty</span> (Unit)</th>
                    <th>Unit Price (<i class="bi bi-currency-rupee"></i>)</th>
                    <th>Tax</th>
                    <th>Net Amount (<i class="bi bi-currency-rupee"></i>)</th>
                    <th class="blksetwidth"><i class="bi bi-sliders"></i></th>
                  </tr>
                </thead>

                <tbody id="items_body">
                  <tr id="main_row" draggable="false">
                    <td>1</td>
                    <td class="purchasegrp purch-drop">
                      <input type="text" id="item_description" placeholder="Item Name" class="form-control no-border" />
                    </td>
                    <td><input type="text" id="item_long_description" placeholder="HSN / SAC" class="form-control no-border" /></td>
                    <td>
                      <input type="number" id="item_quantity" min="1" value="1" class="blacktdinp form-control no-border ">
                    </td>
                    <td> <input type="number" id="item_rate" min="0" placeholder="Rate" class="blacktdinp form-control no-border ">
                    </td>
                    <td class="purch-drop">
                      <select id="item_no_tax" class="selectpicker form-control no-border blkselectheight" multiple data-none-selected-text="No Tax">
                        <?php foreach ($tax as $row) { ?>
                          <option value="<?= $row->id ?>" data-subtext="<?= $row->name ?>">
                            <?= $row->percentage ?>%
                          </option>
                        <?php } ?>
                      </select>
                    </td>
                    <td class="amounttdalign"><input type="number"min="0" class="blacktdinp form-control no-border "></td>
                    <td class="check-mark">
                      <i class="bi bi-check2-circle fschan" onclick="pushItem()"></i>
                    </td>

                  </tr>


                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="newtableline">
            <table class="table removetheborder">
              <tbody class="borderfortable">
                <!-- sub total  -->
                <tr class="tablealine">
                  <td class="bbnew"><span class="bold">Sub Total :</span></td>
                  <td class="subtotal bbnew"><span id="show_subtotal">0.00</span><input type="hidden" name="subTotal" value="0.00"></td>
                </tr>

                <!-- discount -->
                <tr>
                  <td class="bbnew td-right-border" style="margin-right: 30px;">
                    <span class="bold">Discount </span>
                  </td>
                  <td style="margin-right: -65px;margin-left: -15px;">
                    <div class="input-group">
                      <input type="number" id="discount-input" value="0.00" oninput="setDiscount(event)" class="form-control pull-left input-discount-percent" min="0" style="border: 0 !important;" data-fv-field="discount">
                      <div class="input-group-addon myFormselect fxedamntsel">
                        <div class="dropdown bootstrap-select discount-select form-control">
                          <div class="dropdown bootstrap-select discount-select form-control">
                            <select id="discount-select" onchange="setDiscount(event)" class="discount-select selectpicker form-control">
                              <option value="pc" selected="" class="dropdown-item">% </option>
                              <option value="fa" class="dropdown-item">₹
                              </option>
                            </select>
                          </div>
                          <div class="dropdown-menu ">
                            <div class="inner show" role="listbox" id="bs-select-13" tabindex="-1">
                              <ul class="dropdown-menu inner show" role="presentation"></ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="discount-total bbnew">
                  </td>
                  <td class="discount-total bbnew">-<span id="show_discount">0.00</span><input type="hidden" name="discountTotal" value="0.00"></td>

                </tr>

                <!-- tax total  -->
                <tr class="tax-area tablealine">
                  <td class="bbnew">Total Tax :</td>
                  <td class="bbnew">+<span id="show_taxtotal">0.00</span><input type="hidden" name="taxTotal" value="0.00">
                  </td>
                </tr>

                <!-- adjustment  -->
                <tr class="tablealine">
                  <td class="bbnew">
                    <div class="row" style="padding-left: 0px;">
                      <div class="col-md-4 addpaddingright " style="padding-right: 89px;margin-right: 29px;">
                        <span class="bold">Adjustment </span>
                      </div>
                      <div class="col-md-5" style="padding-right: 0;">
                        <input type="number" id="adjustment-input" oninput="setAdjustment()" value="0.00" class="form-control pull-left" style="width: 100%; padding:8px !important;">
                      </div>
                    </div>
                  </td>
                  <td class="adjustment bbnew"><span id="show_adjustment">0.00</span><input type="hidden" name="adjustmentTotal" value="0.00"></td>
                </tr>

                <!-- shipping charges -->

                <tr>
                  <td class="bbnew td-right-border">

                    <span class="bold d-block ">Shipping Charges </span>
                    <a class="bold" data-bs-toggle="collapse" data-bs-target="#date-selector-div-a" aria-expanded="false" aria-controls="date-selector-div">Apply Tax on Shipping Charges </a>
                    <div class="col-md-12 bg-light my-3 rounded border border-dark collapse collapse-vertical text-align-left justify-content-start" id="date-selector-div-a">
                      <div class="purchasegrp shipping-card">
                        <h5 class="shipping-card-heading">Tax on Shipping Charges</h5>
                        <hr>
                        <div class="dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
                          <div class="dropdown bootstrap-select show-tick multiselect my-2">
                            <select class="selectpicker multiselect my-2" multiple="" data-live-search="true" data-none-selected-text="Select Tax">
                              <?php foreach ($tax as $row) { ?>
                                <option value="<?= $row->id ?>" data-subtext="<?= $row->name ?>">
                                  <?= $row->percentage ?>%
                                </option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="bbnew td-left-border">
                    <div class="input-group mb-3" style="width: 150%;position: relative;left: -46px;">
                      <input type="number" value="0.00" id="ship-input" oninput="setShipCharge()" class="form-control" min="0" style="border: 0 !important;">
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2" style="padding: 3px 3px 3px 3px;font-size: 12px;">
                          <!-- <i class="fa-regular fa-circle-question p-2" aria-hidden="true"> -->
                          <i class="fa-regular fa-circle-question p-2" data-bs-toggle="tooltip" data-bs-title="tooltip" data-bs-original-title="" title=""></i>
                          </i>
                        </span>
                      </div>
                    </div>
                  </td>
                  <td class="discount-total"><span id="show_shipcharge">0.00</span><input type="hidden" name="shipChargeTotal" value="0.00">
                  </td>
                </tr>

                <!-- total amount  -->
                <tr class="tablealine">
                  <td class="bbnew"><span class="bold">Total :</span>
                  </td>
                  <td class="total bbnew"><span id="show_total">0.00</span><input type="hidden" name="total" value="0.00">
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>


      <div class="tblcontainer1 bg-white borrsin borlsin" style="margin-bottom:78px !important;">
        <div class="row">
          <div class="col-md-6">
            <label class="emailpro">Customer Note</label>
            <textarea rows="4" name="client_note" placeholder="Enter any additional note from the client here..." class="txtarea form-control "></textarea>
          </div>
          <!-- <div class="row termsmt"> -->
          <div class="col-md-6 ">
            <label class="emailpro">Terms &amp; Conditions</label>
            <textarea rows="4" name="terms_and_conditions" placeholder="Please enter terms and conditions here" class="txtarea form-control"></textarea>
          </div>
          <!-- </div> -->
        </div>
        <div class="bg-white fixed-footer mrg-27 mt-4 pb-2 pt-2 taskfooter text-end" style="left: 288px; right:1px;">
          <div class=" moaline" style="   margin-right: 30px;    margin-top: 4px;    margin-bottom: 3px;    ">
            <button class="tasksave1 custsave" type="submit">SAVE
            </button>
            <!-- <button class="fixedcaretbtn dropdown-toggle add_margin_right" data-bs-toggle="dropdown" aria-expanded="false"> -->
            <!-- </button> -->
            <ul class="dropdown-menu">
              <li><button class="dropdown-item mr-2" type="submit">Save &amp; Send</button></li><br>
              <li><button class="dropdown-item" type="submit">Save &amp; Send later</button></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</form>


<!--Add customer -->
<div id="addCustomer" class="modal fade custom-content" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header hdrbg">
        <!-- <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button> -->
        <button type="button" class="btn-close closebtn witchan" data-bs-dismiss="modal"></button>
        
        <h5 class="modal-title">Add New Customer
         <div class="vertical-line">
            <span class="Bcgtop capsule"></span>
            <span class="Bcgbttm capsule"></span>
         </div>
        </h5>
      </div>
      <div class="modal-body">
        <form id="newCustomer" action="<?= site_url('sales/new-customer') ?>">
          <div class="row">
            <div class="col-md-12">
              <div class="purchasegrp">
                <label class="purchaseinfo"><span class="aster">* </span> Company Name</label>
                <input type="text" name="company" class="form-control purchaseselects">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="purchasegrp">
                <label class="purchaseinfo"><span class="aster">* </span> Email Address</label>
                <input type="text" name="email" class="form-control purchaseselects">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="purchasegrp">
                <label class="purchaseinfo"><span class="aster">* </span> Phone Number</label>
                <input type="text" name="mobile_number" class="form-control purchaseselects">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 blkftr">
              <div class="modal-footer taskfooter">
                <button type="button" class="taskclose1" data-bs-dismiss="modal">
                  CLOSE
                </button>
                <button type="submit" class="tasksave1">SAVE</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- bill address edit modal  -->
<div id="billEditModal" class="modal fade custom-content" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">

        <div class="row">
          <div class="col-md-12">
            <div id="billing_details">
              <div class="purchasedesc">
                <label for="bill_street" class=" mb-1">Street</label>
                <textarea class="textdesc" id="bill_street"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="purchasegrps billmlmr">
              <label for="bill_city" class="purchaseinfo">City</label>
              <input type="text" id="bill_city" class="form-control purchaseselects">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="purchasegrps billmlmr">
              <label for="bill_state" class="purchaseinfo">State</label>
              <input type="text" id="bill_state" class="form-control purchaseselects">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="purchasegrps billmlmr">
              <label for="bill_zipcode" class="purchaseinfo ms-1">Zip Code</label>
              <input type="text" id="bill_zipcode" class="form-control purchaseselects">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="purchasegrps billmlmr purch-drop">
              <label for="bill_country" class="purchaseinfo mb-1">Country</label>
              <select id="bill_country" class="selectpicker form-control" data-live-search="true">
                <!-- <option value=""></option> -->
                <?php if (!empty($countries)) : ?>
                  <?php foreach ($countries as $country) : ?>
                    <option value="<?= $country->name ?>">
                      <?= $country->name ?>
                    </option>
                  <?php endforeach ?>
                <?php endif ?>
              </select>
            </div>
          </div>
        </div>
        <hr class="fileline linemt mb-4">
        <div class="text-end mnvsin">
          <i id="user-icon" class="fa-solid fa-user" data-bs-toggle="collapse" data-bs-target="#date-selector-div-t2" aria-expanded="true" aria-controls="date-selector-div"></i>
        </div>

        <div class="col-md-12 shipmb flex items-center">
          <input type="checkbox" class="checksin" id="shipAddress">
          <label for="shipAddress"> Shipping Address</label>
        </div>
        <div class="collapse collapse-vertical " id="date-selector-div-t2">
          <div class="col-md-12  accordion-content" style="display: none;">
            <div class="col-md-12 showship flex items-center">
              <input type="checkbox" class="checksin" id="showShipAdd" name="" value="" checked>
              <label for="showShipAdd"> Show shipping details on credit note</label>
            </div>
            <div class="">
              <div class="row">
                <div class="col-md-12">
                  <div id="billing_details">
                    <div class="purchasedesc">
                      <label for="ship_street" class=" mb-1">Street</label>
                      <textarea class="textdesc" id="ship_street"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrps billmlmr">
                    <label for="ship_city" class="purchaseinfo">City</label>
                    <input type="text" id="ship_city" class="form-control purchaseselects">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrps billmlmr">
                    <label for="ship_state" class="purchaseinfo">State</label>
                    <input type="text" id="ship_state" class="form-control purchaseselects">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrps billmlmr">
                    <label for="ship_zipcode" class="purchaseinfo ms-1">Zip Code</label>
                    <input type="text" id="ship_zipcode" class="form-control purchaseselects">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrps billmlmr purch-drop">
                    <label for="ship_country" class="purchaseinfo mb-1">Country</label>
                    <select id="ship_country" class="selectpicker form-control" data-live-search="true">
                      <!-- <option value=""></option> -->
                      <?php if (!empty($countries)) : ?>
                        <?php foreach ($countries as $country) : ?>
                          <option value="<?= $country->name ?>">
                            <?= $country->name ?>
                          </option>
                        <?php endforeach ?>
                      <?php endif ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 blkftr">
            <div class="modal-footer mtfsin mrschan ">
              <!-- <button type="button" onclick="ApplyAddress()" class="tasksave1">Apply</button> -->
              <button class="fixedsavebtn borrsin borlsin " onclick="ApplyAddress()" type="button">APPLY
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--add new Modal -->
<div id="add-new-item-modal" class="modal fade custom-content" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header hdrbg">
        <button type="button" class="btn-close closebtn " data-bs-dismiss="modal"></button>
        <div class="vertical-line">

          <span class="Bcgtop capsule"></span>
          <span class="Bcgbttm capsule"></span>
        </div>
        <h5 id="myModalLabel" class="modal-title ">Add New Item</h5>
      </div>
      <div class="modal-body">
        <form id="add_item_form" action="<?= site_url('sales/add-new-item') ?>">
          <div class="row">
            <div class="col-md-10 pe-3">
              <!-- Your existing HTML content here -->
            </div>
            <div class="col-md-2">
              <div id="nonClickableElement">
                ID34353434
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="purchasegrps">
                <label for="recipient-name" class="purchaseinfo"><span class=" aster">*
                  </span>Item Name</label>
                <input type="text" value="" class="form-control purchaseselects" id="recipient-name" name="description" placeholder="Enter Item Name">
              </div>
            </div>
          </div>
          <div class=" ">
            <div class="">
              <div class="row">
                <div class="col-md-12">
                  <div class="accordion-item borchan alig_btnt">
                    <h2 class="accordion-header" id="accordionwithplusExample1">
                      <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#date-selector-div" aria-expanded="false" aria-controls="date-selector-div">
                        Advanced Options
                      </button>
                    </h2>
                  </div>
                </div>
              </div>
              <div class="collapse collapse-vertical mtfsin" id="date-selector-div">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrps">
                      <label for=" message-text" class="emailpro" style="margin-left: 6px;"> Description</label>
                      <textarea class="textdesc" id="message-text" name="long_description" placeholder="Explain About Item"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="purchasegrps">
                      <label for="recipient-name" class="purchaseinfo mb-0">
                        Rate -
                        INR <sub>(Base Currency)</sub> </label>
                      <input type="number"  class="form-control purchaseselects" placeholder="Enter Amount">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="purchasegrps">
                      <label for="recipient-name" class="purchaseinfo mb-0">Unit</label>
                      <input type="text" class="form-control purchaseselects" name="unit" placeholder="Type Unit">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="purchasegrps purch-drop">
                      <label for="tags" class="purchaseinfo mb-1">Tax</label>
                      <select class="selectpicker form-control" name="tax[]" multiple data-none-selected-text="Select Tax Value">
                        <?php foreach ($tax as $row) { ?>
                          <option value="<?= $row->id ?>" data-subtext="<?= $row->name ?>">
                            <?= $row->percentage ?>%
                          </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <!-- <div class="col-md-6">
                                <div class="purchasegrps purch-drop">
                                  <label for="repeat" class="purchaseinfo mb-1">Item Group</label><br>
                                  <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
                                    <select class="selectpicker multiselect" data-live-search="true" title="Select Item Group"
                                      name="item_group">
                                      <?php foreach ($item_group as $roww) { ?>
                                        <option value="<?= $roww->id ?>">
                                          <?= ucfirst($roww->name) ?>
                                        </option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                </div>
                              </div> -->
                  <div class="col-md-6">
                    <div class="purchasegrps ">
                      <label for="repeat" class="purchaseinfo mb-1">Item Group</label><br>
                      <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
                        <select class="selectpicker multiselect" data-live-search="true" title="Select Item Group" name="item_group" multiple data-actions-box="true">
                          <!-- <option value=""></option> -->
                          <?php foreach ($item_group as $roww) { ?>
                            <option value="<?= $roww->id ?>">
                              <?= ucfirst($roww->name) ?>
                            </option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="purchasegrps ">
                      <label for="repeat" class="purchaseinfo mb-1">Tags</label><br>
                      <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
                        <select class="selectpicker multiselect" data-live-search="true" title="Select Tags" name="item_group" multiple data-actions-box="true">
                          <!-- <option value=""></option> -->
                          <?php foreach ($item_group as $roww) { ?>
                            <option value="<?= $roww->id ?>">
                              <?= ucfirst($roww->name) ?>
                            </option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3 mb-3">
                  <div class="col-md-2"></div>
                  <div class="col-md-8  pe-3">

                    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet" />
                    <!-- Added overlay div -->
                    <div class="overlay" id="overlay">
                      <i class="fa-solid fa-cloud-arrow-up"></i>
                      Drop your files here...
                      <span class="corner-symbol symbole-top-left">L</span>
                      <span class="corner-symbol symbole-bottom-left">L</span>
                      <span class="corner-symbol symbole-top-right">L</span>
                      <span class="corner-symbol symbole-bottom-right">L</span>
                    </div>
                    <div class="upload-files-container" style="background: none;">
                      <div class="drag-file-area">
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
                  </div>
                </div>

              </div>
            </div>
          </div>



          <div class="newalineitem">
            <div class="taskfooter newalinetems ">
              <button type="button" class="taskclose1" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="tasksave1 mltechan " style="margin-right:-1px !important;">Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $('#repeat_every').change(function() {
    let seletedValue = $(this).val();
    if (seletedValue == 'custom') {
      $('#tutorial, #tutorial2').show();
    } else if (seletedValue == 'No') {
      $('#tutorial, #tutorial2').hide();
    } else {
      $('#tutorial').hide();
      $('#tutorial2').show();
    }
  });

  $('#cyclecheckbox').change(function() {
    if (this.checked) {
      $('#checkinpt').attr('disabled', true);
    } else {
      $('#checkinpt').removeAttr('disabled');
    }
  });
</script>

<!-- tooltip -->
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>
<script>
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

<!--form validation -->
<script>
  $('#add-form').formValidation({
    framework: 'bootstrap',
    fields: {
      customer_id: {
        validators: {
          notEmpty: {
            message: 'This field is required.'
          }
        }
      },
      date: {
        validators: {
          notEmpty: {
            message: 'This field is required.'
          }
        }
      },
      number: {
        validators: {
          notEmpty: {
            message: 'This field is required.'
          }
        }
      }
    }
  }).on('success.form.fv', function(e) {
    e.preventDefault();
    if (document.querySelector('[name="description[]"]') !== null) {
      sendData(this);
      setTimeout(() => {
        location.href = '<?= site_url('sales/invoice') ?>';
      }, 1500);
    } else {
      $('#item_description').focus();
      $('#no-item-alert').removeClass('hide');
    }
  });
</script>

<!-- code by DJ  -->
<!--not work without php code  -->
<script>
  function getSelectElement(id = []) {
    return `<select id="taxes" onchange="setTax(event)" class="selectpicker form-control no-border" multiple data-none-selected-text="No Tax"><?php foreach ($tax as $row) { ?><option ${id.includes('<?= $row->id ?>') ? 'selected' : ''} value="<?= $row->id ?>" data-subtext="<?= $row->name ?>"><?= $row->percentage ?>%</option><?php } ?></select> <input type="hidden" name="tax[]" value="${id}">`;
  }

  let tax_array = <?= json_encode($tax) ?> ?? [];
</script>

<script src="<?= base_url() ?>/assets/custom js/sales_common.js"></script>

<script>
  document.getElementById('date1').addEventListener('click', () => {
    if ('showPicker' in HTMLInputElement.prototype) {
      document.getElementById('date1').showPicker();
    }
  })
</script>
<script>
  document.getElementById('date2').addEventListener('click', () => {
    if ('showPicker' in HTMLInputElement.prototype) {
      document.getElementById('date2').showPicker();
    }
  })
</script>

<script>
  // Get the hamburger element
  const hamburger = document.querySelector('.hamburger');

  // Get the fixed footer element
  const fixedFooter = document.querySelector('.fixed-footer');

  // Function to handle hamburger state change
  function handleHamburgerState() {
    if (hamburger.classList.contains('is-active')) {
      // If hamburger is active, set margin-left to 287px
      fixedFooter.style.left = '287px';
    } else {
      // If hamburger is not active, set margin-left to 77px
      if (window.innerWidth <= 768) {
        // If window width is less than or equal to 768px, set width to 0
        fixedFooter.style.left = '0px';
      } else {
        fixedFooter.style.left = '77px';
      }
    }
  }

  // Add event listener to hamburger for click event
  hamburger.addEventListener('click', handleHamburgerState);

  // Call the function initially to set the initial state
  handleHamburgerState();
</script>

<script>
  $(".js-example-tags").select2({
    tags: true
  });
</script>

<script>
  // Toggle accordion on click anywhere inside the div
  $('.purchasegrp.custom-box').click(function() {
    $('#date-selector-div').collapse('toggle');
  });
</script>