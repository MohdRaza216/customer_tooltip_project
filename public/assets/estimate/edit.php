<style>
  .help-block {
    margin-left: 10px;
    color: red;
  }

  .shipping-card {
    padding: 24px 24px 0px 24px;
    margin: 0px;
    width: 100%;
  }

  .shipping-card-heading {
    padding-bottom: 8px;
  }

  .card-foot {
    padding: 20px;
  }

  .check-mark {
    font-size: 15px;
    color: #1c841b;
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

  .newbar {
    border: none !important;
    border-right: 1px solid #b5b2b2d4 !important;
  }
</style>


<form action="<?= site_url('sales/edit-estimate/' . $previous->id) ?>" id="edit-form">

  <div class="estnewcontainer alnchan">
    <div class="row first  borrsin borlsin" style="height:auto">
      <!-- <div class="bg-white" style="box-shadow: 0px 2px 20px rgb(1 41 112 / 10%);padding: 10px 20px;">
        <h5 style="margin: 0;"><i><b>Edit Estimate</b></i></h5>
      </div> -->

      <div class="tblcontainer1 bg-white borrssin borlssin">
        <div class="row ">
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrp purch-drop">
                  <label for="tags" class="purchaseinfo mb-1"><span class="aster">* </span> Customer</label>
                  <select name="customer_id"
                    onchange="getBillAndShipAddress('<?= site_url('sales/credit-billdetails') ?>',this.value);"
                    class="selectpicker form-control" data-live-search="true" data-none-selected-text="Select customer">
                    <!--<option value=""></option>-->


                    <?php if (!empty($customers)): ?>
                      <?php foreach ($customers as $customer): ?>
                        <option <?= ($previous->customer_id == $customer->id) ? 'selected' : '' ?>
                          value="<?= $customer->id ?>">
                          <?= $customer->company ?>
                        </option>
                      <?php endforeach ?>
                    <?php endif ?>
                    <option value="add_new_customer" class="fixed ps-1"
                      data-content="<i class='fa-solid fa-circle-plus text-primary'></i> Create New Customer"></option>
                  </select>
                </div>
              </div>

              <div class="col-md-12">
                <div class="pophover">
                  <div class="purchasegrp">
                    <label class="purchaseinfo "><span class="aster">* </span> Estimate Number #</label>
                    <div class="input-group" style="border:0 !important;">
                      <span class="input-group-text cn estspnbox" style="border: 1px solid #ced4da !important;">EST- <input type="hidden" name="prefix"
                          value="EST-000"></span>
                      <input type="text" name="number" value="<?= $previous->number ?>"
                        class="form-control purchaseselect">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="purchasegrp">
                  <label for="creationdate" class="purchaseinfo "><span class="aster">* </span> Estimate Date</label>
                  <input type="date" name="date" id="date1" value="<?= $previous->date ?>"
                    class="form-control purchaseselects">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4" >
            <div class="row billcreditml">
              <div class="col-md-6" onclick="showBillModal()">
                <a href="javascript:void(0)" class="editbillicn" >
                  <i class="bi bi-truck"></i></a>
                <br>
                <?php $b = explode(',', $previous->bill_address); ?>
                <p class="mb-0 grntec">Bill</p>
                <p class="mb-0" id="bStreet">
                  <?= $b[0] ?? '--' ?>
                </p>
                <p class="mb-0" id="bCityState">
                  <?= $b[1] ?? '--' ?>,
                  <?= $b[2] ?? '--' ?>
                </p>
                <p id="bzipcode">
                  <?= $b[3] ?? '--' ?>,
                  <?= $b[4] ?? '--' ?>
                </p>
                <input type="hidden" name="bill_address" value="<?= $previous->bill_address ?>">
              </div>
              <div class="col-md-6" onclick="showBillModal()">
                <br>
                <?php $s = explode(',', $previous->ship_address); ?>
                <p class="mb-0 grntec">Ship to</p>
                <p class="mb-0" id="sStreet">
                  <?= $s[0] ?>
                </p>
                <p class="mb-0" id="sCityState">
                  <?= $s[1] ?? '--' ?>,
                  <?= $s[2] ?? '--' ?>
                </p>
                <p id="szipcode">
                  <?= $s[3] ?? '--' ?>,
                  <?= $s[4] ?? '--' ?>
                </p>
                <input type="hidden" name="ship_address" value="<?= $previous->ship_address ?>">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrp purch-drop mtfrchan">
                  <label class="purchaseinfo mb-1"> Discount Type</label>
                  <select name="discount_type" onchange="setDiscount(event)" class="selectpicker form-control">
                    <option <?= ($previous->discount_type == 'No Discount') ? 'selected' : '' ?>>No Discount</option>
                    <option <?= ($previous->discount_type == 'Before Tax') ? 'selected' : '' ?>>Before Tax</option>
                    <option <?= ($previous->discount_type == 'After Tax') ? 'selected' : '' ?>>After Tax</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrps mlzchan">
                  <label for="tags" class="purchaseinfo mb-2">Tags</label>
                  <i class="fa fa-tag"></i>
                  <div class=" dropdown-with-icon dropdownalignment">
                    <select name="tag[]" class="selectpicker multiselect" multiple>
                      <?php if (!empty($tags)): ?>
                        <?php foreach ($tags as $tg): ?>
                          <option <?= (in_array($tg->id, explode(',', $previous->tag))) ? 'selected' : '' ?>
                            value="<?= $tg->id ?>">
                            <?= $tg->name ?>
                          </option>
                        <?php endforeach ?>
                      <?php endif ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="purchasegrp purch-drop">
                <label class="purchaseinfo mb-1"></span> Status</label>
                <select class="selectpicker form-control" name="status">
                  <option <?= ($previous->status == 'Draft') ? 'selected' : '' ?>>Draft</option>
                  <option <?= ($previous->status == 'Accepted') ? 'selected' : '' ?>>Accepted</option>
                  <option <?= ($previous->status == 'Declined') ? 'selected' : '' ?>>Declined</option>
                  <option <?= ($previous->status == 'Sent') ? 'selected' : '' ?>>Sent</option>
                  <option <?= ($previous->status == 'Expired') ? 'selected' : '' ?>>Expired</option>
                </select>
              </div>
            </div>
            <!-- added mt tag to align-->
            <div class="col-md-12 mt-3 ">
              <div class="purchasegrp purch-drop">
                <label for="tags" class="purchaseinfo mb-1">Sales Agent</label>
                <select class="selectpicker form-control" name="sales_agent" data-live-search="true"
                  title="Nothing Selected">
                  <!--<option value=""></option>-->
                  <?php if (!empty($staffs)): ?>
                    <?php foreach ($staffs as $staff): ?>
                      <option <?= ($previous->sales_agent == $staff->id) ? 'selected' : '' ?> value="<?= $staff->id ?>">
                        <?= $staff->first_name . " " . $staff->last_name ?>
                      </option>
                    <?php endforeach ?>
                  <?php endif ?>
                </select>
              </div>
            </div>
          </div>
          <div class=" accordion custom-accordionwithicon-plus" id="accordionWithplusicon">
            <div class="accordion-item borchan newbroderfull mnesin ">
              <h2 class="accordion-header" id="accordionwithplusExample89">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#accor_plusExamplecollapse89" aria-expanded="false"
                  aria-controls="accor_plusExamplecollapse89">
                  Advance option
                </button>
              </h2>
              <div id="accor_plusExamplecollapse89" class="accordion-collapse collapse mt-2"
                aria-labelledby="accordionwithplusExample89" data-bs-parent="#accordionWithplusicon">
                <div class="accordion-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="purchasegrp purch-drop">
                          <label class="purchaseinfo mb-1">Currency</label>
                          <select name="currency" class="selectpicker form-control" data-live-search="true">
                            <?php if (!empty($currencies)): ?>
                              <?php foreach ($currencies as $currency): ?>
                                <option <?= ($currency->name == 'IND') ? 'selected' : '' ?> value="<?= $currency->id ?>"
                                  data-subtext="<?= $currency->symbol ?>">
                                  <?= $currency->name ?>
                                </option>
                              <?php endforeach ?>
                            <?php endif ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="purchasegrp">
                          <label class="purchaseinfo ">Reference #</label>
                          <input name="reference" value="<?= $previous->reference ?>" placeholder="Reference" type="text"
                            class="form-control purchaseselects">
                        </div>
                      </div>
                    </div>

                  <div class="row">
                    <div class="col-md-12">
                      <div class="purchasegrp">
                        <label class="emailpro">Admin's note</label><br>
                        <textarea name="admin_note" class="form-control txtarea"
                          rows="3"><?= $previous->admin_note ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="purchasegrp purch-drop">
                        <label class="purchaseinfo mb-1">GST Treatment</label>
                        <select name="GST_treatment" class="selectpicker form-control">
                          <option <?= ($previous->GST_treatment == 'Registered Business - Regular') ? 'selected' : '' ?>>
                            Registered Business - Regular</option>
                          <option <?= ($previous->GST_treatment == 'Registered Business - Composition') ? 'selected' : '' ?>>
                            Registered Business - Composition</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="purchasegrp">
                        <label class="purchaseinfo ">GSTIN</label>
                        <input name="GSTIN" value="<?= $previous->GSTIN ?>" placeholder="GSTIN" type="text"
                          class="form-control purchaseselects">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="purchasegrp purch-drop">
                        <label class="purchaseinfo mb-1">Place Of Supply</label>
                        <select name="place_of_supply" class="selectpicker form-control" data-live-search="true">
                          <option value=""></option>
                          <?php if (!empty($states)): ?>
                            <?php foreach ($states as $state): ?>
                              <option <?= ($previous->place_of_supply == $state->id) ? 'selected' : '' ?>
                                value="<?= $state->id ?>">
                                <?= $state->state_name ?>
                              </option>
                            <?php endforeach ?>
                          <?php endif ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="purchasegrp purch-drop">
                        <label class="purchaseinfo mb-1">Quantity </label>
                        <select name="quantity_unit" class="selectpicker form-control">
                          <option <?= ($previous->quantity_unit == 'Qty') ? 'selected' : '' ?>>Qty</option>
                          <option <?= ($previous->quantity_unit == 'Hours') ? 'selected' : '' ?>>Hours</option>
                          <option <?= ($previous->quantity_unit == 'Qty/Hours') ? 'selected' : '' ?>>Qty/Hours</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="purchasegrp purch-drop">
                        <label class="purchaseinfo mb-1">Project</label>
                        <select name="project" class="selectpicker form-control" data-live-search="true"
                          data-none-selected-text="None Selected">
                          <option value=""></option>
                          <?php if (!empty($projects)): ?>
                            <?php foreach ($projects as $project): ?>
                              <option <?= ($previous->project == $project->id) ? 'selected' : '' ?> value="<?= $project->id ?>">
                                <?= $project->project_name ?>
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
          <!-- <div class="row ">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">

                  <div class="accordion-item borchan">
                    <h2 class="accordion-header" id="accordionwithplusExample1">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#date-selector-div" aria-expanded="false" aria-controls="date-selector-div">
                        Advanced Options
                      </button>
                    </h2>
                  </div>
                </div>
              </div>
            </div>

            <div class="collapse collapse-vertical" id="date-selector-div">
              <div class="row">
                <div class="col-md-6">
                  <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">Currency</label>
                    <select name="currency" class="selectpicker form-control" data-live-search="true">
                      <?php if (!empty($currencies)): ?>
                        <?php foreach ($currencies as $currency): ?>
                          <option <?= ($currency->name == 'IND') ? 'selected' : '' ?> value="<?= $currency->id ?>"
                            data-subtext="<?= $currency->symbol ?>">
                            <?= $currency->name ?>
                          </option>
                        <?php endforeach ?>
                      <?php endif ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="purchasegrp">
                    <label class="purchaseinfo ">Reference #</label>
                    <input name="reference" value="<?= $previous->reference ?>" placeholder="Reference" type="text"
                      class="form-control purchaseselects">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrp">
                    <label class="emailpro">Admin's note</label><br>
                    <textarea name="admin_note" class="form-control txtarea"
                      rows="3"><?= $previous->admin_note ?></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 ">
                  <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">GST Treatment</label>
                    <select name="GST_treatment" class="selectpicker form-control">
                      <option <?= ($previous->GST_treatment == 'Registered Business - Regular') ? 'selected' : '' ?>>
                        Registered Business - Regular</option>
                      <option <?= ($previous->GST_treatment == 'Registered Business - Composition') ? 'selected' : '' ?>>
                        Registered Business - Composition</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 ">
                  <div class="purchasegrp">
                    <label class="purchaseinfo ">GSTIN</label>
                    <input name="GSTIN" value="<?= $previous->GSTIN ?>" placeholder="GSTIN" type="text"
                      class="form-control purchaseselects">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 ">
                  <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">Place Of Supply</label>
                    <select name="place_of_supply" class="selectpicker form-control" data-live-search="true">
                      <option value=""></option>
                      <?php if (!empty($states)): ?>
                        <?php foreach ($states as $state): ?>
                          <option <?= ($previous->place_of_supply == $state->id) ? 'selected' : '' ?>
                            value="<?= $state->id ?>">
                            <?= $state->state_name ?>
                          </option>
                        <?php endforeach ?>
                      <?php endif ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">Quantity </label>
                    <select name="quantity_unit" class="selectpicker form-control">
                      <option <?= ($previous->quantity_unit == 'Qty') ? 'selected' : '' ?>>Qty</option>
                      <option <?= ($previous->quantity_unit == 'Hours') ? 'selected' : '' ?>>Hours</option>
                      <option <?= ($previous->quantity_unit == 'Qty/Hours') ? 'selected' : '' ?>>Qty/Hours</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">Project</label>
                    <select name="project" class="selectpicker form-control" data-live-search="true"
                      data-none-selected-text="None Selected">
                      <option value=""></option>
                      <?php if (!empty($projects)): ?>
                        <?php foreach ($projects as $project): ?>
                          <option <?= ($previous->project == $project->id) ? 'selected' : '' ?> value="<?= $project->id ?>">
                            <?= $project->project_name ?>
                          </option>
                        <?php endforeach ?>
                      <?php endif ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>


  <div class="tblcontainer1 mb-5 bg-white nalnchan   borrsin borlsin">
    <div class="row hide" id="no-item-alert">
      <div class="col-md-12">
        <div class="alert alert-warning m-0 mb-1 py-2" role="alert">
          Enter at least one item.
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-md-3">
        <div class="purchasegrp">
          <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
            <select id="add-new-item" class="selectpicker form-control"
              onchange="fetchItem('<?= site_url('sales/get-one-item/') ?>',this.value)" data-live-search="true"
              data-none-selected-text="Add Items">
              <option></option>
              <?php if (!empty($items)): ?>
                <?php foreach ($items as $item): ?>
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
        <div class="tablewrapper table-responsive">
          <table id="items-table" class="table table-bordered table-condensed contracttable">
            <thead class="table-head">
              <tr>
                <th>#</th>
                <th>Items</th>
                <th>HSN / SAC</th>
                <th>Qty (Unit)</th>
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
                  <p class="shower"></p>
                  <div class="select-field" datas="1">
                    <select class="one selectpicker form-control no-border" id="item_description" name="status"
                      title="Select Item">
                      <option value=""></option>
                      <option value="">Products</option>
                      <option value="">Services</option>
                    </select>
                  </div>
                </td>

                <td><input type="text" id="item_long_description" placeholder="HSN / SAC"
                    class="form-control no-border" /></td>

                <td><input type="number" id="item_quantity" min="1" value="1"
                    class="blacktdinp form-control no-border "></td>

                <td> <input type="number" id="item_rate" min="0" placeholder="Rate"
                    class="blacktdinp form-control no-border ">
                </td>
                <td class="purch-drop">
                  <select id="item_no_tax" class="selectpicker form-control blkselectheight no-border" multiple
                    data-none-selected-text="No Tax">
                    <?php foreach ($tax as $row) { ?>
                      <option value="<?= $row->id ?>" data-subtext="<?= $row->name ?>">
                        <?= $row->percentage ?>%
                      </option>
                    <?php } ?>
                  </select>
                </td>
                <td class="amounttdalign"><span></span></td>
                <td class="check-mark">
                  <i class="bi bi-check2-circle fschan" onclick="pushItem()"></i>
                </td>
              </tr>
              <?php if (!empty($s_items)): ?>
                <?php foreach ($s_items as $item): ?>
                  <tr class="childRow">
                    <td class="handle-icon ">
                      <i class="bi bi-grip-vertical"></i>
                    </td>

                    <!-- <td><textarea name="description[]" class="form-control no-border txtarea" rows="4" placeholder="Description"></textarea></td> -->

                    <td class="purchasegrp purch-drop">
                      <p class="shower"></p>
                      <div class="select-field" datas="1">
                        <select class="one selectpicker form-control no-border" id="item_description" name="description[]"
                          value="<?= $item->description ?>">
                          <option value=""></option>
                          <option value="">Products</option>
                          <option value="">Services</option>
                        </select>

                      </div>
                    </td>

                    <!-- <td><textarea name="long_description[]" rows="4" placeholder="Long Description" class="form-control no-border txtarea"></textarea></td> -->

                    <td><input type="text" id="item_long_description" class="form-control no-border"
                        name="long_description[]" value="<?= $item->long_description ?>" /></td>

                    <td>
                      <input type="number" oninput="setAmount(event)" name="quantity[]" value="<?= $item->quantity ?>"
                        min="1" class="blacktdinp form-control no-border">
                      <!-- <input type="text" name="unit[]" value="<?= $item->unit ?>" class="blacktdinp form-control no-border " style="border:none!important;text-align: right;" placeholder="Unit"> -->
                    </td>

                    <!-- <td><input type="number" id="item_quantity" oninput="setAmount(event)" min="1" value=" class="blacktdinp form-control no-border " name="quantity[]"></td> -->

                    <td> <input type="number" oninput="setAmount(event)" name="rate[]" value="<?= $item->rate ?>" min="0"
                        placeholder="Rate" class="blacktdinp form-control  no-border blkselectheight"></td>

                    <!-- <td> <input type="number" id="item_rate" min="0" placeholder="Rate" oninput="setAmount(event)" name="rate[]"
                                    class="blacktdinp form-control no-border " >
                                </td> -->

                    <td class="purch-drop">
                      <select id="taxes" onchange="setTax(event)"
                        class="selectpicker form-control no-border blkselectheight" multiple
                        data-none-selected-text="No Tax">
                        <?php foreach ($tax as $row) { ?>
                          <option <?= (in_array($row->id, explode(',', $item->tax))) ? 'selected' : '' ?>
                            value="<?= $row->id ?>" data-subtext="<?= $row->name ?>">
                            <?= $row->percentage ?>%
                          </option>
                        <?php } ?>
                      </select>
                      <input type="hidden" name="tax[]" value="<?= $item->tax ?>">
                    </td>

                    <!-- <td class="purch-drop">
                                      <select id="taxes" class="selectpicker form-control blkselectheight no-border" multiple
                                        data-none-selected-text="No Tax">
                                        
                                      </select>
                                      <input type="hidden" name="tax[]" value=">
                              </td> -->

                    <td class="amounttdalign">
                      <input type="hidden" name="amount[]" value="<?= $item->amount ?>"><span class="amtext">
                        <?= $item->amount ?>
                      </span>
                      <input type="hidden" name="tax_amount[]" value="<?= $item->tax_amount ?>">
                    </td>

                    <td class="check-mark">
                      <!-- <i class="fa-regular fa-trash-can table-button removeTR fscchan"></i>                         -->
                      <i class="bi bi-x-circle text-danger removeTR fscchan ml-2"></i>
                    </td>

                  </tr>
                <?php endforeach ?>
              <?php endif ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>


    <div class="newtableline">
      <table class="table removetheborder" >
        <tbody class="borderfortable">

          <!-- subtotal  -->
          <tr class="tablealine">
             <td class="bbnew"><span class="bold">Sub Total :</span></td>
              <td class="subtotal bbnew"><span id="show_subtotal"><?= $previous->subTotal ?></span><input type="hidden" name="subTotal"
              value="<?= $previous->subTotal ?>"></td>
          </tr>

          <!-- discount -->
          <tr>
            <td class="bbnew td-right-border" style="margin-right: 30px;">
                    <span class="bold">Discount </span>
            </td>
            <td class="">
                    <div class="input-group" style="">
                      <input type="number" id="discount-input" name="discount" value="0.00" oninput="setDiscount(event)"
                        class="form-control pull-left input-discount-percent" min="0" style="border: 0 !important;"
                        data-fv-field="discount">
                      <div class="input-group-addon myFormselect fxedamntsel">
                        <div class="dropdown bootstrap-select discount-select form-control">
                          <div class="dropdown bootstrap-select discount-select form-control"><select
                              id="discount-select" onchange="setDiscount(event)"
                              class="discount-select selectpicker form-control">
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
            
            <td class="discount-total bbnew">-<span id="show_discount">0.00</span><input type="hidden"
                      name="discountTotal" value="0.00"></td>
          </tr>          
          <!-- tax total  -->
          <tr class="tax-area tablealine">
                  <td class="bbnew">Total Tax :</td>
                  <td class="bbnew">+<span id="show_taxtotal"><?= $previous->taxTotal ?></span><input type="hidden" name="taxTotal"
                  value="<?= $previous->taxTotal ?>">
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
                  <input type="number" id="adjustment-input " oninput="setAdjustment()" data-toggle="tooltip"
                    data-title="The number in the input field is not formatted while edit/add item and should remain not formatted do not try to format it manually in here."
                    value="<?= $previous->adjustmentTotal ?>" class="form-control pull-left" style="width: 100%; padding:8px !important;">
                </div>
              </div>
            </td>
            <td class="adjustment bbnew"><span id="show_adjustment"><?= $previous->adjustmentTotal ?></span><input type="hidden"
                      name="adjustmentTotal" value="<?= $previous->adjustmentTotal ?>">
            </td>
          </tr>
          <!-- shipping charges  -->
          <tr>
            <td class="bbnew td-right-border">

              <span class="bold d-block ">Shipping Charges </span>
              <a class="bold" data-bs-toggle="collapse" data-bs-target="#date-selector-div-a"
                aria-expanded="false" aria-controls="date-selector-div">Apply Tax on Shipping Charges </a>
              <div
                class="col-md-12 bg-light my-3 rounded border border-dark collapse collapse-vertical text-align-left justify-content-start"
                id="date-selector-div-a">
                <div class="purchasegrp shipping-card">
                  <h5 class="shipping-card-heading">Tax on Shipping Charges</h5>
                  <hr>
                  <div class="dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
                    <div class="dropdown bootstrap-select show-tick multiselect my-2"><select
                        class="selectpicker multiselect my-2" multiple="" data-live-search="true"
                        data-none-selected-text="Select Tax">
                        <?php foreach ($tax as $row) { ?>
                        <option value="<?= $row->id ?>" data-subtext="<?= $row->name ?>">
                          <?= $row->percentage ?>%
                        </option>
                      <?php } ?>
                      </select><button type="button" tabindex="-1"
                        class="btn dropdown-toggle bs-placeholder btn-light" data-bs-toggle="dropdown"
                        role="combobox" aria-owns="bs-select-14" aria-haspopup="listbox" aria-expanded="false"
                        title="Select Tax" >
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Select Tax</div>
                          </div>
                        </div>
                      </button>
                      <div class="dropdown-menu ">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off"
                            role="combobox" aria-label="Search" aria-controls="bs-select-14"
                            aria-autocomplete="list"></div>
                        <div class="inner show" role="listbox" id="bs-select-14" tabindex="-1"
                          aria-multiselectable="true">
                          <ul class="dropdown-menu inner show" role="presentation"></ul>
                        </div>
                      </div>
                    </div><input type="hidden" class="selected-values" name="null">
                  </div>
                </div>
              </div>
            </td>
            <td class="bbnew td-left-border">
                    <div class="input-group mb-3" style="width: 150%;position: relative;left: -46px;">
                      <input type="number" value="0.00" id="ship-input" oninput="setShipCharge()" class="form-control"
                        min="0" style="border: 0 !important;">
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"
                          style="padding: 3px 3px 3px 3px;font-size: 12px;">
                          <i class="fa-regular fa-circle-question p-2" aria-hidden="true">
                          </i>
                        </span>
                      </div>
                    </div>
            </td>
            <td class="discount-total"><span id="show_shipcharge"><?= $previous->shipChargeTotal ?></span><input type="hidden"
                      name="shipChargeTotal" value="<?= $previous->shipChargeTotal ?>">
            </td>
          </tr>
          <!-- total amount  -->
          <tr class="tablealine">
            <td class="bbnew"><span class="bold">Total :</span>
            <td class="total bbnew"><span id="show_total"><?= $previous->total ?></span><input type="hidden" name="total"
              value="<?= $previous->total ?>">
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="tblcontainer1  nalnchan   borrsin borlsin">
    <div class="row">
      <div class="col-md-6">
        <label class="emailpro">Customer Name</label>
        <textarea rows="4" name="client_note" placeholder="Enter any additional note from the client here..."
          class="txtarea form-control "><?= $previous->client_note ?></textarea>
      </div>
      <div class="col-md-6 ">
        <label class="emailpro">Terms &amp; Conditions</label>
        <textarea rows="4" name="terms_and_conditions" placeholder="Please enter terms and conditions here"
          class="txtarea form-control"><?= $previous->terms_and_conditions ?></textarea>
      </div>
    </div>
    <div class="bg-white fixed-footer mrg-27 mt-4 pb-2 pt-2 taskfooter text-end" style="left: 288px; right:1px;">
        <div class=" " style="   margin-right: 17px;    margin-top: 4px;    margin-bottom: 3px;    ">
          <!-- <button class="fixedsavebtn" type="submit">SAVE AS DRAFT
          </button> -->
          <button class="fixedsavebtn edit-save-btn" type="submit">SAVE
          </button>
          <button class="fixedcaretbtn dropdown-toggle add_margin_right" data-bs-toggle="dropdown"
            aria-expanded="false">
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item mr-2" type="submit">Save &amp; Send</button></li><br>
            <li><button class="dropdown-item" type="submit">Save &amp; Send later</button></li>
          </ul>
        </div>
    </div>
    <!-- <div class="">
      <div class="">
        <div class="taskfooter bg-white fixed-footer text-center pb-2 pt-2 align_end_save mrg-27">
          <! to align save button to right added class-->
          <!-- <button class="fixedsavebtn align-save-btn" type="submit">SAVE
          </button>
          <button class="fixedcaretbtn dropdown-toggle add_margin_right" data-bs-toggle="dropdown"
            aria-expanded="false">
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="submit">Save &amp; Send</button></li>
            <li><button class="dropdown-item" type="submit">Save &amp; Send later</button></li>
          </ul> -->
        <!-- </div> -->
      <!-- </div> -->
    <!-- </div> -->

  </div>

  <div>
    <br>
    <br>
    <br>
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
        <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
        <div class="vertical-line">

          <span class="Bcgtop capsule"></span>
          <span class="Bcgbttm capsule"></span>
        </div>
        <h5 class="modal-title">Add New Customer</h5>
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
              <div class="modal-footer taskfooter ">
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
                <option value=""></option>
                <?php if (!empty($countries)): ?>
                  <?php foreach ($countries as $country): ?>
                    <option value="<?= $country->name ?>">
                      <?= $country->name ?>
                    </option>
                  <?php endforeach ?>
                <?php endif ?>
              </select>
            </div>
          </div>
        </div>
        <hr class="fileline linemt">
        <div class="text-end mnvsin">
          <i id="user-icon" class="fa-solid fa-user" data-bs-toggle="tooltip"
            data-bs-title="Get shipping details from customer profile"></i>
        </div>

        <div class="col-md-12 shipmb">
          <input type="checkbox" id="shipAddress">
          <label for="shipAddress"> Shipping Address</label>
        </div>

        <div class="col-md-12  accordion-content" style="display: none;">
          <div class="col-md-12 showship">
            <input type="checkbox" id="showShipAdd" name="" value="" checked>
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
                    <option value=""></option>
                    <?php if (!empty($countries)): ?>
                      <?php foreach ($countries as $country): ?>
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

        <div class="row">
          <div class="col-md-12 blkftr">
            <div class="modal-footer ">
              <button type="button" onclick="ApplyAddress()" class="hrbtns contractbtn addbttn">Apply</button>
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
            <div class="col-md-12">
              <div class="purchasegrps">
                <label for="recipient-name" class="purchaseinfo"><span class=" aster">* </span>Description</label>
                <input type="text" value="" class="form-control purchaseselects" id="recipient-name" name="description">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="purchasegrps">
                <label for="message-text" class="emailpro"> Long
                  Description</label>
                <textarea class="textdesc" id="message-text" name="long_description"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="purchasegrps">
                <label for="recipient-name" class="purchaseinfo"><span class=" aster">* </span>
                  Rate -
                  INR <sub>(Base Currency)</sub> </label>
                <input type="number" name="price" class="form-control purchaseselects">
              </div>
            </div>
            <div class="col-md-6">
              <div class="purchasegrps">
                <label for="recipient-name" class="purchaseinfo">Unit</label>
                <input type="text" class="form-control purchaseselects" name="unit">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="purchasegrps purch-drop ">
                <label for="tags" class="purchaseinfo mb-1">Tax</label>
                <select class="selectpicker form-control" name="tax[]" multiple data-none-selected-text="No Tax">
                  <?php foreach ($tax as $row) { ?>
                    <option value="<?= $row->id ?>" data-subtext="<?= $row->name ?>">
                      <?= $row->percentage ?>%
                    </option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="purchasegrps purch-drop">
                <label for="repeat" class="purchaseinfo mb-1">Item Group</label><br>
                <select class="selectpicker" data-live-search="true" placeholder="None Selected" name="item_group">
                  <option value=""></option>
                  <?php foreach ($item_group as $roww) { ?>
                    <option value="<?= $roww->id ?>">
                      <?= ucfirst($roww->name) ?>
                    </option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 blkftr">
              <div class="modal-footer taskfooter mtschan mrthchan">
                <button type="button" class="taskclose1" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="tasksave1  mllchan">Save</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--form validation -->
<script>
  $('#edit-form').formValidation({
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
  }).on('success.form.fv', function (e) {
    e.preventDefault();
    if (document.querySelector('[name="description[]"]') !== null) {
      sendData(this);
      setTimeout(() => {
        location.href = '<?= site_url('sales/estimate') ?>';
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
    return `<select id="taxes" onchange="setTax(event)" class="selectpicker form-control" multiple data-none-selected-text="No Tax"><?php foreach ($tax as $row) { ?><option ${id.includes('<?= $row->id ?>') ? 'selected' : ''} value="<?= $row->id ?>" data-subtext="<?= $row->name ?>"><?= $row->percentage ?>%</option><?php } ?></select> <input type="hidden" name="tax[]" value="${id}">`;
  }

  let tax_array = <?= json_encode($tax) ?> ?? [];
</script>

<script src="<?= base_url() ?>/assets/custom js/sales_common.js"></script>

<!--Multiselect-->
<script>
  const dropdowns = document.querySelectorAll('.multiselect');

  dropdowns.forEach(dropdown => {
    const inputBox = document.createElement('input');
    inputBox.type = 'hidden';
    inputBox.classList.add('selected-values');
    name = dropdown.getAttribute('data-name');
    inputBox.setAttribute("name", name);
    dropdown.after(inputBox);

    dropdown.addEventListener('change', () => {
      const selectedOptions = Array.from(dropdown.selectedOptions).map(option => option.value);
      inputBox.value = selectedOptions.join(', ');
    });
  });
</script>

<!-- // Toggle accordion on click anywhere inside the div// -->

<script>
  $('.purchasegrp.custom-box').click(function () {
    $('#date-selector-div').collapse('toggle');
  });
</script>
<!-- added script for datepicker-->
<!-- Datepicker -->

<script>
  document.getElementById('date1').addEventListener('click', () => {
    if ('showPicker' in HTMLInputElement.prototype) {
      document.getElementById('date1').showPicker();
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
      fixedFooter.style.left = '77px';
    }
  }

  // Add event listener to hamburger for click event
  hamburger.addEventListener('click', handleHamburgerState);

  // Call the function initially to set the initial state
  handleHamburgerState();
</script>