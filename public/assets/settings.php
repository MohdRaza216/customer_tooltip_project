<body style="margin-bottom:100px;">

  <div class="container-fluid tblcontainer1 tbl">
    <div class="row vendcarmt" style="text-align: middle;">
      <div class="col-md-12 ">
        <div class="desktop" style="font-size: 14px;">
          <div class="scroll-images custml toptea">
            <div class="child mb-0 ">
              <button class="tablinks  tb-links active" type="button" onclick="openTab(event, 'general')"> <i
                  class="fa fa-cog menu-icon pd-icon"></i> Settings</button>
            </div>
            <div class="child mb-0">
              <button class="tablinks tb-links" type="button" onclick="openTab(event, 'table1')"><i
                  class="fa-solid fa-bars bars-esi "></i>ESI</button>
            </div>
            <div class="child mb-0">
              <button class="tablinks tb-links" type="button" onclick="openTab(event, 'table2')"><i
                  class="fa-solid fa-bars bars-esi"></i>EPF</button>
            </div>
            <div class="child mb-0">
              <button class="tablinks tb-links" type="button" onclick="openTab(event, 'salary1')">Salary
                Structures</button>
            </div>
            <div class="child mb-0 ">
              <button class="tablinks  tb-links active" type="button" onclick="openTab(event, 'addons')">Salary
                Addons</button>
            </div>
          </div>

        </div>
      </div>

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-interval="false" style="height: 50px;">
        <div class="carousel-inner scroll-images">

          <div class="carousel-item active" style="text-align: center;">
            <div class="">
              <div class="child mb-0" style="height:auto;">
                <button class="tablinks active tabresact" style="width:70%" type="button"
                  onclick="openTab(event, 'general')">Settings</button>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="text-align: center;">
            <div class="">
              <div class="child mb-0" style="height:auto;">
                <button class="tablinks tabresact" style="width:70%" type="button"
                  onclick="openTab(event, 'table1')">ESI</button>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="text-align: center;">
            <div class="">
              <div class="child mb-0" style="height:auto;">
                <button class="tablinks tabresact" style="width:70%" type="button"
                  onclick="openTab(event, 'table2')">EPF</button>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="text-align: center;">
            <div class="">
              <div class="child mb-0" style="height:auto;">
                <button class="tablinks tabresact" style="width:70%" type="button"
                  onclick="openTab(event, 'salary1')">Salary Structures</button>
              </div>
            </div>
          </div>
          <div class="carousel-item" style="text-align: center;">
            <div class="">
              <div class="child mb-0" style="height:auto;">
                <button class="tablinks tabresact" style="width:70%" type="button"
                  onclick="openTab(event, 'addons')">Salary Addons</button>
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
    </div>
  </div>
  <hr class="fileline vendcarline linehr">

  <!-- salary structure tab -->

  <div id="salary1" class="tabcontent mtgb p-2">
    <form id="modalsaveStruct">
      <div class="row ml-1 mb-2 mt-2">
        <div class="row">
          <button type="button" class="hrbtns contractbtn addbttn" data-bs-toggle="modal"
            data-bs-target="#exampleModal"><i class="fa fa-plus"></i>ADD</button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content" style="width:130% !important;">
                <div class="modal-header hdrbg">
                  <h5 id="myModalLabel" class="modal-title ">Add</h5>
                  <div class="vertical-line">
                    <span class="Bcgtop capsule"></span>
                    <span class="Bcgbttm capsule"></span>
                  </div>
                  <button type="button" class="btn-close closebtn " data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="purchasegrp">
                        <label for="tags" class="purchaseinfo astername">Structure Name</label>
                        <input type="text" class="purchaseselects form-control " name="struc_name"
                          placeholder="Enter Structure Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="purchasegrp">
                        <label class="purchaseinfo">
                          Staffs</label>
                        <select id="" class="selectpicker multiselect" name="name[]" multiple data-actions-box="true"
                          data-live-search="true" title="Select Staffs">
                          <?php foreach ($staff as $row) { ?>
                            <option value="<?= $row->id ?>">
                              <?= ucfirst($row->first_name) ?>
                              <?= ucfirst($row->last_name) ?>
                            </option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="purchasegrp">
                        <label for="tags" class="purchaseinfo astername">Basic Pay</label>
                        <input type="number" class="purchaseselects form-control " name="basic_pay"
                          placeholder="Enter Basic Pay">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="purchasegrp">
                        <label for="tags" class="purchaseinfo astername">HRA</label>
                        <input type="number" class="purchaseselects form-control " name="hra" placeholder="Enter HRA">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 blkftr">
                    <div class="modal-footer taskfooter" style="margin-right:20px;margin-top:0px;margin-bottom:10px">
                      <button type="button" class="taskclose1" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="tasksave1">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <table class="example display dataTable display responsive nowrap tblalign table borderless" style="width: 100%"
      id="example" aria-describedby="example_info">
      <thead class="theadrow">
        <tr>
          <th>Structure Name</th>
          <th>Staffs</th>
          <th>Count</th>
          <th>Basic Pay</th>
          <th>HRA </th>
        </tr>
      </thead>
      <tbody id="append1">
        <!--<tr class="row-hover">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>-->
      </tbody>
    </table>
  </div>

  <!-- salary Addons -->

  <div id="addons" class="tabcontent mtgb">
    <form class="container-fluid" id="savesalaryAddons">
      <div class="row center-all">
        <div class="accordion custom-accordionwithicon-plus" id="accordionWithplusicon">
        </div>
        <div class="accordion-item  borsin borrsin">
          <h2 class="accordion-header" id="accordionwithplusExample1">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#accor_plusExamplecollapse1" aria-expanded="false"
              aria-controls="accor_plusExamplecollapse1">
              Late Entry Rules
            </button>
          </h2>
          <div id="accor_plusExamplecollapse1" class="accordion-collapse collapse "
            aria-labelledby="accordionwithplusExample1" data-bs-parent="#accordionWithplusicon">
            <div class="accordion-body">
              <div class="row mt-2 ">
                <h1 class="bold">Create a Late Entry Rule</h1>
              </div>
              <div class="col-md-12  mt-2">
                <h2 class="bold">Rules</h2>
                <div class="row center-all mt-2">
                  <div class="purchasegrp">
                    <input type="checkbox" id="tum ">
                    <label class="purchaseinfo" for="tum">If User is late,more than..(Salary
                      Detection)
                    </label>
                  </div>
                  <div class="row mt-2" id="showcontent">
                    <?php if (empty($edit_late)) { ?>
                      <div class="row" id="parentsin">
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="tags" class="purchaseinfo astername">If staff is
                              late by</label>
                            <input type="time" class="purchaseselects form-control " name="late_time[]" placeholder="">
                            <label for="" class="mt-2">No late fine for 0 mins</label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="unitname" class="purchaseinfo mb-1">Detection Type
                            </label>
                            <div class=" dropdown-with-icon dropdownalignment">
                              <select class="selectpicker " name="late d_type[]">
                                <option value="1">Fixed amount</option>
                                <option value="2">BB</option>
                                <option value="3">CC</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="tags" class="purchaseinfo astername">Fixed
                              amount</label>
                            <input type="number" class="purchaseselects form-control " name="late_value[]" placeholder="">
                          </div>
                        </div>
                        <div class="col-md-1">
                          <div class="purchasegrp ">
                            <button id="add_sin" style="margin-top:30px " name="add" class="hrbtns contractbtn addbttn"
                              data-ticket="true" type="button"><i class="fa fa-plus"></i></button>
                          </div>
                        </div>
                      </div>
                    <?php } else {
                      foreach ($edit_late as $key => $row) { ?>
                        <div class="row" id="parentsin">
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="tags" class="purchaseinfo astername">If staff is
                                late by</label>
                              <input type="time" class="purchaseselects form-control " name="late_time[]" placeholder=""
                                value="<?= $row->late_time ?>">
                              <label for="">No late fine for 0 mins</label>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="unitname" class="purchaseinfo mb-1">Detection Type
                              </label>
                              <div class=" dropdown-with-icon dropdownalignment">
                                <select class="selectpicker " name="late_d_type[]">
                                  <option value="1" <?= $row->late_d_type == 1 ? "selected" : "" ?>>Fixed amount</option>
                                  <option value="2" <?= $row->late_d_type == 2 ? "selected" : "" ?>>BB</option>
                                  <option value="3" <?= $row->late_d_type == 3 ? "selected" : "" ?>>CC</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="tags" class="purchaseinfo astername">Fixed
                                amount</label>
                              <input type="number" class="purchaseselects form-control " name="late_value[]" placeholder=""
                                value="<?= $row->late_value ?>">
                            </div>
                          </div>
                          <div class="col-md-1">
                            <div class="purchasegrp">
                              <?php if ($key === 0) { ?>
                                <button id="add_sin" style="margin-top:30px " name="add" class="hrbtns contractbtn addbttn"
                                  data-ticket="true" type="button"><i class="fa fa-plus"></i></button>
                              <?php } else { ?>
                                <button class="minusbtns setmartp" data-ticket="true" type="button"><i
                                    class="fa fa-minus"></i></button>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    <?php } ?>

                    <div class="row mt-2">
                      <h3 class="bold text-primary">Add Time Range</h3>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-4 mt-2">
                        <input type="checkbox" name="late_limit" id="late_limit" value="1" checked>
                        <label for="late_limit">Threshold Limit</label>
                      </div>
                      <div class="row">
                        <div class="col-md-4 mt-2">
                          <div class="purchasegrp ">
                            <label for="unitname" class="purchaseinfo mb-1">Minimum
                              Occurances(exclusive)</label>
                            <div class=" dropdown-with-icon dropdownalignment">
                              <select class="selectpicker " name="mini_occ">
                                <option value="1" <?= ($edit_late_->mini_occ ?? 0) == 1 ? "selected" : "" ?>>count</option>
                                <option value="2" <?= ($edit_late_->mini_occ ?? 0) == 2 ? "selected" : "" ?>>BB</option>
                                <option value="3" <?= ($edit_late_->mini_occ ?? 0) == 3 ? "selected" : "" ?>>CC</option>
                              </select>
                            </div>
                            <label for="">Fine will be pardoned upto 5 times</label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="purchasegrp" style="margin-top:40px">
                            <input type="number" class="purchaseselects form-control " name="occ_value" placeholder=""
                              value="<?= $edit_late_->occ_value ?? '' ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1" style="padding-bottom: 5px;">
                        Staff</label>
                      <?php $array = explode(',', $edit_late_->late_name ?? ''); ?>
                      <select id="" class="selectpicker multiselect" name="late_name[]" multiple data-actions-box="true"
                        data-live-search="true">
                        <?php foreach ($staff as $row) { ?>
                          <option value="<?= $row->id ?>" <?= in_array($row->id, $array) ? "selected" : "" ?>>
                            <?= ucfirst($row->first_name) ?>
                            <?= $row->last_name ?>
                          </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item borsin borzsin">
          <h2 class="accordion-header" id="accordionwithplusExample11">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#accor_plusExamplecollapse11" aria-expanded="false"
              aria-controls="accor_plusExamplecollapse11">
              Breaks Rules
            </button>
          </h2>
          <div id="accor_plusExamplecollapse11" class="accordion-collapse collapse "
            aria-labelledby="accordionwithplusExample11" data-bs-parent="#accordionWithplusicon">
            <div class="accordion-body">
              <div class="row mt-2 ">
                <h1 class="bold">Create a Breaks Rules</h1>
              </div>
              <div class="col-md-12  mt-2">
                <h2 class="bold">Rules</h2>
                <div class="row center-all mt-2">
                  <div class="purchasegrp">
                    <input type="checkbox" id="tum ">
                    <label class="purchaseinfo" for="tum">If User is late,more than..(Salary
                      Detection)
                    </label>
                  </div>
                  <div class="row mt-2" id="showcontent">
                    <?php if (empty($edit_break)) { ?>
                      <div class="row" id="parentsin1">
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="tags" class="purchaseinfo astername">If staff is
                              late by</label>
                            <input type="time" class="purchaseselects form-control" name="break_time[]" placeholder="">
                            <label for="">No late fine for 0 mins</label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="unitname" class="purchaseinfo mb-1">Detection Type
                            </label>
                            <div class=" dropdown-with-icon dropdownalignment">
                              <select class="selectpicker " name="break_d_type[]">
                                <option value="1">Fixed amount</option>
                                <option value="2">BB</option>
                                <option value="3">CC</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="tags" class="purchaseinfo astername">Fixed
                              amount</label>
                            <input type="number" class="purchaseselects form-control " name="break_value[]"
                              placeholder="">
                          </div>
                        </div>
                        <div class="col-md-1">
                          <div class="purchasegrp ">
                            <button id="add_sin1" style="margin-top:30px " name="add" class="hrbtns contractbtn addbttn"
                              data-ticket="true" type="button"><i class="fa fa-plus"></i></button>
                          </div>
                        </div>
                      </div>
                    <?php } else {
                      foreach ($edit_break as $key => $row) { ?>
                        <div class="row" id="parentsin1">
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="tags" class="purchaseinfo astername">If staff is
                                late by</label>
                              <input type="time" class="purchaseselects form-control" name="break_time[]" placeholder=""
                                value="<?= $row->break_time ?>">
                              <label for="">No late fine for 0 mins</label>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="unitname" class="purchaseinfo mb-1">Detection Type
                              </label>
                              <div class=" dropdown-with-icon dropdownalignment">
                                <select class="selectpicker " name="break_d_type[]">
                                  <option value="1" <?= $row->break_d_type == 1 ? "selected" : "" ?>>Fixed amount</option>
                                  <option value="2" <?= $row->break_d_type == 2 ? "selected" : "" ?>>BB</option>
                                  <option value="3" <?= $row->break_d_type == 3 ? "selected" : "" ?>>CC</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="tags" class="purchaseinfo astername">Fixed
                                amount</label>
                              <input type="number" class="purchaseselects form-control " name="break_value[]" placeholder=""
                                value="<?= $row->break_value ?>">
                            </div>
                          </div>
                          <div class="col-md-1 adr">
                            <div class="purchasegrp ">
                              <?php if ($key === 0) { ?>
                                <button id="add_sin1" style="margin-top:30px " name="add" class="hrbtns contractbtn addbttn"
                                  data-ticket="true" type="button"><i class="fa fa-plus"></i></button>
                              <?php } else { ?>
                                <button class="minusbtns setmartp" data-ticket="true" type="button"><i
                                    class="fa fa-minus"></i></button>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    <?php } ?>
                    <div class="row mt-2">
                      <h3 class="bold text-primary">Add Time Range</h3>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-4 mt-2">
                        <input type="checkbox" name="break_limit" id="tim" value="1" checked>
                        <label for="tim">Threshold Limit</label>
                      </div>
                      <div class="row">
                        <div class="col-md-4 mt-2">
                          <div class="purchasegrp ">
                            <label for="unitname" class="purchaseinfo mb-1">Minimum
                              cccurances(exclusive)</label>
                            <div class=" dropdown-with-icon dropdownalignment">
                              <select class="selectpicker" name="break_occ">
                                <option value="1" <?= ($edit_break_->break_occ ?? 0) == 1 ? "selected" : "" ?>>count
                                </option>
                                <option value="2" <?= ($edit_break_->break_occ ?? 0) == 2 ? "selected" : "" ?>>BB</option>
                                <option value="3" <?= ($edit_break_->break_occ ?? 0) == 3 ? "selected" : "" ?>>CC</option>
                              </select>
                            </div>
                            <label for="">Fine will be pardoned upto 0 times</label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="purchasegrp" style="margin-top:40px">
                            <input type="number" class="purchaseselects form-control " name="break_occ_value"
                              placeholder="" value="<?= $edit_break_->break_occ_value ?? '' ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1" style="padding-bottom: 5px;">
                        Staff</label>
                      <?php $array = explode(',', $edit_break_->break_name ?? ''); ?>
                      <select id="" class="selectpicker multiselect" name="break_name[]" multiple
                        data-actions-box="true" data-live-search="true">
                        <?php foreach ($staff as $row) { ?>
                          <option value="<?= $row->id ?>" <?= in_array($row->id, $array) ? "selected" : "" ?>>
                            <?= ucfirst($row->first_name) ?>
                            <?= $row->last_name ?>
                          </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item borsin borzsin">
          <h2 class="accordion-header" id="accordionwithplusExample21">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#accor_plusExamplecollapse21" aria-expanded="false"
              aria-controls="accor_plusExamplecollapse21">
              Early Exit Rules
            </button>
          </h2>
          <div id="accor_plusExamplecollapse21" class="accordion-collapse collapse "
            aria-labelledby="accordionwithplusExample21" data-bs-parent="#accordionWithplusicon">
            <div class="accordion-body">
              <div class="row mt-2 ">
                <h1 class="bold">Create a Early Exit Rules</h1>
              </div>
              <div class="col-md-12  mt-2">
                <h2 class="bold">Rules</h2>
                <div class="row center-all mt-2">
                  <div class="purchasegrp">
                    <input type="checkbox" id="tum ">
                    <label class="purchaseinfo" for="tum">If User is late,more than..(Salary
                      Detection)
                    </label>
                  </div>
                  <div class="row mt-2" id="showcontent">
                    <?php if (empty($edit_early)) { ?>
                      <div class="row" id="parentsin2">
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="tags" class="purchaseinfo astername">If staff is
                              late by</label>
                            <input type="time" class="purchaseselects form-control " name="early_exit_time[]"
                              placeholder="">
                            <label for="">No late fine for 0 mins</label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="unitname" class="purchaseinfo mb-1">Detection Type
                            </label>
                            <div class=" dropdown-with-icon dropdownalignment">
                              <select class="selectpicker " name="early_exit_d_type[]">
                                <option value="1">Fixed amount</option>
                                <option value="2">BB</option>
                                <option value="3">CC</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="tags" class="purchaseinfo astername">Fixed
                              amount</label>
                            <input type="number" class="purchaseselects form-control " name="early_exit_value[]"
                              placeholder="">
                          </div>
                        </div>
                        <div class="col-md-1">
                          <div class="purchasegrp ">
                            <button id="add_sin2" style="margin-top:30px " name="add" class="hrbtns contractbtn addbttn"
                              data-ticket="true" type="button"><i class="fa fa-plus"></i></button>
                          </div>
                        </div>
                      </div>
                    <?php } else {
                      foreach ($edit_early as $key => $row) { ?>
                        <div class="row" id="parentsin2">
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="tags" class="purchaseinfo astername">If staff is
                                late by</label>
                              <input type="time" class="purchaseselects form-control " name="early_exit_time[]"
                                placeholder="" value="<?= $row->early_exit_time ?>">
                              <label for="">No late fine for 0 mins</label>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="unitname" class="purchaseinfo mb-1">Detection Type
                              </label>
                              <div class=" dropdown-with-icon dropdownalignment">
                                <select class="selectpicker " name="early_exit_d_type[]">
                                  <option value="1" <?= $row->early_exit_d_type == 1 ? "selected" : "" ?>>Fixed amount</option>
                                  <option value="2" <?= $row->early_exit_d_type == 2 ? "selected" : "" ?>>BB</option>
                                  <option value="3" <?= $row->early_exit_d_type == 3 ? "selected" : "" ?>>CC</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="tags" class="purchaseinfo astername">Fixed
                                amount</label>
                              <input type="number" class="purchaseselects form-control " name="early_exit_value[]"
                                placeholder="" value="<?= $row->early_exit_value ?>">
                            </div>
                          </div>
                          <div class="col-md-1 adr2">
                            <div class="purchasegrp ">
                              <?php if ($key === 0) { ?>
                                <button id="add_sin2" style="margin-top:30px " name="add" class="hrbtns contractbtn addbttn"
                                  data-ticket="true" type="button"><i class="fa fa-plus"></i></button>
                              <?php } else { ?>
                                <button class="minusbtns setmartp" data-ticket="true" type="button"><i
                                    class="fa fa-minus"></i></button>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    <?php } ?>

                    <div class="row mt-2">
                      <h3 class="bold text-primary">Add Time Range</h3>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-4 mt-2">
                        <input type="checkbox" name="early_exit_limit" id="tim" value="1" checked>
                        <label for="tim">Threshold Limit</label>
                      </div>
                      <div class="row">
                        <div class="col-md-4 mt-2">
                          <div class="purchasegrp ">
                            <label for="unitname" class="purchaseinfo mb-1">Minimum
                              cccurances(exclusive)</label>
                            <div class=" dropdown-with-icon dropdownalignment">
                              <select class="selectpicker " name="early_exit_occ">
                                <option value="1" <?= ($edit_early_->early_exit_occ ?? 0) == 1 ? "selected" : "" ?>>count
                                </option>
                                <option value="2" <?= ($edit_early_->early_exit_occ ?? 0) == 2 ? "selected" : "" ?>>BB
                                </option>
                                <option value="3" <?= ($edit_early_->early_exit_occ ?? 0) == 3 ? "selected" : "" ?>>CC
                                </option>
                              </select>
                            </div>
                            <label for="">Fine will be pardoned upto 0 times</label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="purchasegrp" style="margin-top:40px">
                            <input type="number" class="purchaseselects form-control " name="early_exit_occ_value"
                              placeholder="" value="<?= $edit_early_->early_exit_occ_value ?? '' ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1" style="padding-bottom: 5px;">
                        Staff</label>
                      <?php $array = explode(',', $edit_early_->early_exit_name ?? ''); ?>
                      <select id="" class="selectpicker multiselect" name="early_exit_name[]" multiple
                        data-actions-box="true" data-live-search="true">
                        <?php foreach ($staff as $row) { ?>
                          <option value="<?= $row->id ?>" <?= in_array($row->id, $array) ? "selected" : "" ?>>
                            <?= ucfirst($row->first_name) ?>
                            <?= $row->last_name ?>
                          </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item borsin borzsin">
          <h2 class="accordion-header" id="accordionwithplusExample31">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#accor_plusExamplecollapse31" aria-expanded="false"
              aria-controls="accor_plusExamplecollapse31">
              Overtime Rules
            </button>
          </h2>
          <div id="accor_plusExamplecollapse31" class="accordion-collapse collapse "
            aria-labelledby="accordionwithplusExample31" data-bs-parent="#accordionWithplusicon">
            <div class="accordion-body">
              <div class="row mt-2 ">
                <h1 class="bold">Create a Overtime Rules</h1>
              </div>
              <div class="col-md-12  mt-2">
                <h2 class="bold">Rules</h2>
                <div class="row center-all mt-2">
                  <div class="purchasegrp">
                    <input type="checkbox" id="tum ">
                    <label class="purchaseinfo" for="tum">If User is late,more than..(Salary
                      Detection)
                    </label>
                  </div>
                  <div class="row mt-2" id="showcontent">
                    <?php if (empty($edit_over)) { ?>
                      <div class="row" id="parentsin3">
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="tags" class="purchaseinfo astername">If staff is
                              late by</label>
                            <input type="time" class="purchaseselects form-control " name="over_time[]" placeholder="">
                            <label for="">No late fine for 0 mins</label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="unitname" class="purchaseinfo mb-1">Detection Type
                            </label>
                            <div class=" dropdown-with-icon dropdownalignment">
                              <select class="selectpicker " name="over__d_type[]">
                                <option value="1">Fixed amount</option>
                                <option value="2">BB</option>
                                <option value="3">CC</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="tags" class="purchaseinfo astername">Fixed
                              amount</label>
                            <input type="number" class="purchaseselects form-control " name="over_value[]" placeholder="">
                          </div>
                        </div>
                        <div class="col-md-1">
                          <div class="purchasegrp ">
                            <button id="add_sin3" style="margin-top:30px " name="add" class="hrbtns contractbtn addbttn"
                              data-ticket="true" type="button"><i class="fa fa-plus"></i></button>
                          </div>
                        </div>
                      </div>
                    <?php } else {
                      foreach ($edit_over as $key => $row) { ?>
                        <div class="row" id="parentsin3">
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="tags" class="purchaseinfo astername">If staff is
                                late by</label>
                              <input type="time" class="purchaseselects form-control " name="over_time[]" placeholder=""
                                value="<?= $row->over_time ?>">
                              <label for="">No late fine for 0 mins</label>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="unitname" class="purchaseinfo mb-1">Detection Type
                              </label>
                              <div class=" dropdown-with-icon dropdownalignment">
                                <select class="selectpicker " name="over__d_type[]">
                                  <option value="1" <?= $row->over__d_type == 1 ? "selected" : "" ?>>Fixed amount</option>
                                  <option value="2" <?= $row->over__d_type == 2 ? "selected" : "" ?>>BB</option>
                                  <option value="3" <?= $row->over__d_type == 3 ? "selected" : "" ?>>CC</option>
                                </select>

                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="tags" class="purchaseinfo astername">Fixed
                                amount</label>
                              <input type="number" class="purchaseselects form-control " name="over_value[]" placeholder=""
                                value="<?= $row->over_value ?>">
                            </div>
                          </div>
                          <div class="col-md-1 adr3">
                            <div class="purchasegrp ">
                              <?php if ($key === 0) { ?>
                                <button id="add_sin3" style="margin-top:30px " name="add" class="hrbtns contractbtn addbttn"
                                  data-ticket="true" type="button"><i class="fa fa-plus"></i></button>
                              <?php } else { ?>
                                <button class="minusbtns setmartp" data-ticket="true" type="button"><i
                                    class="fa fa-minus"></i></button>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    <?php } ?>

                    <div class="row mt-2">
                      <h3 class="bold text-primary">Add Time Range</h3>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-4 mt-2">
                        <input type="checkbox" name="over_limit" id="tim" value="1" checked>
                        <label for="tim">Threshold Limit</label>
                      </div>
                      <div class="row">
                        <div class="col-md-4 mt-2">
                          <div class="purchasegrp ">
                            <label for="unitname" class="purchaseinfo mb-1">Minimum
                              cccurances(exclusive)</label>
                            <div class=" dropdown-with-icon dropdownalignment">
                              <select class="selectpicker" name="over_occ">
                                <option value="1" <?= ($edit_over_->over_occ ?? 0) == 1 ? "selected" : "" ?>>count</option>
                                <option value="2" <?= ($edit_over_->over_occ ?? 0) == 2 ? "selected" : "" ?>>BB</option>
                                <option value="3" <?= ($edit_over_->over_occ ?? 0) == 3 ? "selected" : "" ?>>CC</option>
                              </select>
                            </div>
                            <label for="">Fine will be pardoned upto 0 times</label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="purchasegrp" style="margin-top:40px">
                            <input type="number" class="purchaseselects form-control " name="over_occ_value"
                              placeholder="" value="<?= $edit_over_->over_occ_value ?? '' ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1" style="padding-bottom: 5px;">
                        Staff</label>
                      <?php $array = explode(',', $edit_over_->over_name ?? ''); ?>
                      <select id="" class="selectpicker multiselect" name="over_name[]" multiple data-actions-box="true"
                        data-live-search="true">
                        <?php foreach ($staff as $row) { ?>
                          <option value="<?= $row->id ?>" <?= in_array($row->id, $array) ? "selected" : "" ?>>
                            <?= ucfirst($row->first_name) ?>
                            <?= $row->last_name ?>
                          </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item borsin borzsin">
          <h2 class="accordion-header" id="accordionwithplusExample41">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#accor_plusExamplecollapse41" aria-expanded="false"
              aria-controls="accor_plusExamplecollapse41">
              Early Overtime Rules
            </button>
          </h2>
          <div id="accor_plusExamplecollapse41" class="accordion-collapse collapse "
            aria-labelledby="accordionwithplusExample41" data-bs-parent="#accordionWithplusicon">
            <div class="accordion-body">
              <div class="row mt-2 ">
                <h1 class="bold">Create a Early Overtime Rules</h1>
              </div>
              <div class="col-md-12  mt-2">
                <h2 class="bold">Rules</h2>
                <div class="row center-all mt-2">
                  <div class="purchasegrp">
                    <input type="checkbox" id="tum ">
                    <label class="purchaseinfo" for="tum">If User is late,more than..(Salary
                      Detection)
                    </label>
                  </div>
                  <div class="row mt-2" id="showcontent">
                    class="row mt-2" id="showcontent">
                    <?php if (empty($edit_earlyover)) { ?>
                      <div class="row" id="parentsin4">
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="tags" class="purchaseinfo astername">If staff is
                              late by</label>
                            <input type="time" class="purchaseselects form-control " name="early_over_time[]"
                              placeholder="">
                            <label for="">No late fine for 0 mins</label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="unitname" class="purchaseinfo mb-1">Detection Type
                            </label>
                            <div class=" dropdown-with-icon dropdownalignment">
                              <select class="selectpicker " name="early_over__d_type[]">
                                <option value="1">Fixed amount</option>
                                <option value="2">BB</option>
                                <option value="3">CC</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="purchasegrp">
                            <label for="tags" class="purchaseinfo astername">Fixed
                              amount</label>
                            <input type="number" class="purchaseselects form-control " name="early_over_value[]"
                              placeholder="">
                          </div>
                        </div>
                        <div class="col-md-1">
                          <div class="purchasegrp ">
                            <button id="add_sin4" style="margin-top:30px " name="add" class="hrbtns contractbtn addbttn"
                              data-ticket="true" type="button"><i class="fa fa-plus"></i></button>
                          </div>
                        </div>
                      </div>
                    <?php } else {
                      foreach ($edit_earlyover as $key => $row) { ?>
                        <div class="row" id="parentsin4">
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="tags" class="purchaseinfo astername">If staff is
                                late by</label>
                              <input type="time" class="purchaseselects form-control " name="early_over_time[]"
                                placeholder="" value="<?= $row->early_over_time ?>">
                              <label for="">No late fine for 0 mins</label>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="unitname" class="purchaseinfo mb-1">Detection Type
                              </label>
                              <div class=" dropdown-with-icon dropdownalignment">
                                <select class="selectpicker " name="early_over__d_type[]">
                                  <option value="1" <?= $row->early_over__d_type == 1 ? "selected" : "" ?>>Fixed amount
                                  </option>
                                  <option value="2" <?= $row->early_over__d_type == 2 ? "selected" : "" ?>>BB</option>
                                  <option value="3" <?= $row->early_over__d_type == 3 ? "selected" : "" ?>>CC</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="purchasegrp">
                              <label for="tags" class="purchaseinfo astername">Fixed
                                amount</label>
                              <input type="number" class="purchaseselects form-control " name="early_over_value[]"
                                placeholder="" value="<?= $row->early_over_value ?>">
                            </div>
                          </div>
                          <div class="col-md-1 adr4">
                            <div class="purchasegrp ">
                              <?php if ($key === 0) { ?>
                                <button id="add_sin4" style="margin-top:30px " name="add" class="hrbtns contractbtn addbttn"
                                  data-ticket="true" type="button"><i class="fa fa-plus"></i></button>
                              <?php } else { ?>
                                <button class="minusbtns setmartp" data-ticket="true" type="button"><i
                                    class="fa fa-minus"></i></button>
                              <?php } ?>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                    <?php } ?>
                    <div class="row mt-2">
                      <h3 class="bold text-primary">Add Time Range</h3>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-4 mt-2">
                        <input type="checkbox" name="early_over_limit" id="tim" value="1" checked>
                        <label for="tim">Threshold Limit</label>
                      </div>
                      <div class="row">
                        <div class="col-md-4 mt-2">
                          <div class="purchasegrp ">
                            <label for="unitname" class="purchaseinfo mb-1">Minimum
                              cccurances(exclusive)</label>
                            <div class=" dropdown-with-icon dropdownalignment">
                              <select class="selectpicker " name="early_over_occ">
                                <option value="1" <?= ($edit_earlyover_->early_over_occ ?? 0) == 1 ? "selected" : "" ?>>
                                  count
                                </option>
                                <option value="2" <?= ($edit_earlyover_->early_over_occ ?? 0) == 2 ? "selected" : "" ?>>BB
                                </option>
                                <option value="3" <?= ($edit_earlyover_->early_over_occ ?? 0) == 3 ? "selected" : "" ?>>CC
                                </option>
                              </select>
                            </div>
                            <label for="">Fine will be pardoned upto 0 times</label>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="purchasegrp" style="margin-top:40px">
                            <input type="number" class="purchaseselects form-control " name="early_over_occ_value"
                              placeholder="" value="<?= $edit_earlyover_->early_over_occ_value ?? '' ?>">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1" style="padding-bottom: 5px;">
                        Staff</label>
                      <?php $array = explode(',', $edit_earlyover_->early_over_name ?? ''); ?>
                      <select id="" class="selectpicker multiselect" name="early_over_name[]" multiple
                        data-actions-box="true" data-live-search="true">
                        <?php foreach ($staff as $row) { ?>
                          <option value="<?= $row->id ?>" <?= in_array($row->id, $array) ? "selected" : "" ?>>
                            <?= ucfirst($row->first_name) ?>
                            <?= $row->last_name ?>
                          </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 blkftr">
            <div class="modal-footer taskfooter" style="margin-right:20px;margin-top:0px;margin-bottom:10px">
              <button type="submit" class="tasksave1">Save</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- new setting -->
  <div id="general" class="tabcontent  mtgb " style="display:block;  margin-left: 10px; margin-right: 10px;">
    <form id="settingsavedetail" class="container-fluid">
      <div class="row center-all">
        <div class="col-md-12 ">
          <div class="purchasegrp">
            <label for="tags" class="purchaseinfo astername">Company PAN number</label>
            <input type="text" class="purchaseselects form-control " name="com_pan_no"
              value="<?= $edit->com_pan_no ?? '' ?>" placeholder="Enter Company PAN">
          </div>
        </div>
        <div class="col-md-12">
          <div class="purchasegrp">
            <label for="tags" class="purchaseinfo astername">TAX number</label>
            <input type="text" class="purchaseselects form-control " name="com_tax_no"
              value="<?= $edit->com_tax_no ?? '' ?>" placeholder="Enter TAX Number">
          </div>
        </div>
      </div>
      <div class="row center-all mb-3">
        <div class="col-md-12 row-h  ">
          <div class="purchasegrp">
            <label for="tags" class="purchaseinfo astername">Tds circle/AO code</label>
            <input type="text" class="purchaseselects form-control " name="tds_no" value="<?= $edit->tds_no ?? '' ?>"
              placeholder="Enter TDS/AO Code">
          </div>
        </div>
        <br>
        <div class="col-md-12">
          <div class="purchasegrp">
            <label for="unitname" class="purchaseinfo mb-1 payschedule-lab">
              <!--<hr class="fileline"> -->
              <b>Pay schedule</b>
              <!--<hr class="fileline"> -->
              <b>select your work week <span class="aster">*</span></b>
              <p class="calender-week-p">The days worked in a calendar week</p>
            </label>
            <div class=" dropdown-with-icon dropdownalignment payschedule-input "
              style="border-radius:4px 0px 0px 4px;">
              <?php $array = explode(',', $edit->day_week ?? ''); ?>
              <select class="selectpicker multiselect" name="day_week[]" multiple data-actions-box="true"
                data-live-search="true">
                <option value="1" <?= (in_array('1', $array)) ? "selected" : "" ?>>Mon</option>
                <option value="2" <?= (in_array('2', $array)) ? "selected" : "" ?>>Tue</option>
                <option value="3" <?= (in_array('3', $array)) ? "selected" : "" ?>>Wed</option>
                <option value="4" <?= (in_array('4', $array)) ? "selected" : "" ?>>Thur</option>
                <option value="5" <?= (in_array('5', $array)) ? "selected" : "" ?>>Fri</option>
                <option value="6" <?= (in_array('6', $array)) ? "selected" : "" ?>>Sat</option>
                <option value="7" <?= (in_array('7', $array)) ? "selected" : "" ?>>Sun</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="row center-radio mb-2 mt-2">
        <div class="col-md-6 ">
          <div class="row">
            <div class="col-md-12">
              <label for="tags" class="purchaseinfo mb-1 Calculate-lab "> <b>How salary is calculated
                </b><span class="aster">*</span><i class="fa-solid fa-circle-info"
                  style="margin-left: 0px !important; margin-top: 0px !important;" data-bs-toggle="tooltip"
                  data-placement="top" title="" data-bs-title="Need activate the Warehouse module "></i></label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 ">
              <div class="some-class sumclass">
                <input type="radio" class="radio rd-left" name="col_mon" <?= ($edit->col_mon ?? 0) == 1 ? "checked" : "" ?>
                  value="1" id="y" />
                <label for="y">Total Month Days (Ex: Apr 30 Days; Apr = Total salary / 30 Days)
                </label><br>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 ">
              <div class="some-class sumclass">
                <input type="radio" class="radio rd-left" name="col_mon" <?= ($edit->col_mon ?? 0) == 2 ? "checked" : "" ?>
                  value="2" id="y" />
                <label for="y">Fixed Days (Ex: Apr = Total Salary /Fixed Days)
                </label><br>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 ">
              <div class="some-class sumclass">
                <input type="radio" class="radio rd-left" name="col_mon" <?= ($edit->col_mon ?? 0) == 3 ? "checked" : "" ?>value="3" id="y" />
                <label for="y">Exclude Week Offs(Ex: 4 Sunday Average. Apr = Total salary / 26 Days)
                </label><br>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 ">
              <div class="some-class sumclass">
                <input type="checkbox" class="checkbox" id="y" onchange="checkCheckbox()" />
                <label for="y">Exclude Holidays for salary <span class="aster">*</span> </label><br>

              </div>
              <div class="col-md-4 select-Holidays-permonth">
                <div class="purchasegrp">
                  <label for="select-holiday">Select holiday type </label>
                  <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
                    <select class="selectpicker multiselect" id="select-holiday" name="holiday_" title="None Selected">
                      <option value="1" <?= ($edit->holiday_ ?? 0) == 1 ? "selected" : "" ?>>Casual Leave</option>
                      <option value="2" <?= ($edit->holiday_ ?? 0) == 2 ? "selected" : "" ?>>Sick Leave</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mt-2 days-per-month">
          <p>per month</p>
        </div>
        <div class="col-md-6">
          <div class="row mt-2">
            <div class="col-md-12">
              <label for="tags" class="purchaseinfo mb-3 "><b>Pay your employees on</b> <span
                  class="aster">*</span></label>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="some-class sumclass">
                  <input type="radio" class="radio rd-left" name="pay_mon" value="1" id="y" />
                  <label for="y">The last working day of every month</label><br>

                </div>
              </div>
            </div>
            <div class="row">
              <div class=" col-md-2 mt-2">
                <input type="radio" class="radio rd-left" name="pay_mon" value="2" id="z" checked="" />
                <label for="z"> day -</label>

              </div>
              <div class="col-md-4">
                <div class="purchasegrp selectday">
                  <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
                    <select class="selectpicker multiselect" name="pay_mon_date" title="Select...">
                      <option value="1" <?= ($edit->pay_mon_date ?? 0) == 1 ? "selected" : "" ?>>1
                      </option>
                      <option value="2" <?= ($edit->pay_mon_date ?? 0) == 2 ? "selected" : "" ?>>2
                      </option>
                      <option value="3" <?= ($edit->pay_mon_date ?? 0) == 3 ? "selected" : "" ?>>3
                      </option>
                      <option value="4" <?= ($edit->pay_mon_date ?? 0) == 4 ? "selected" : "" ?>>4
                      </option>
                      <option value="5" <?= ($edit->pay_mon_date ?? 0) == 5 ? "selected" : "" ?>>5
                      </option>
                      <option value="6" <?= ($edit->pay_mon_date ?? 0) == 6 ? "selected" : "" ?>>6
                      </option>
                      <option value="7" <?= ($edit->pay_mon_date ?? 0) == 7 ? "selected" : "" ?>>7
                      </option>
                      <option value="8" <?= ($edit->pay_mon_date ?? 0) == 8 ? "selected" : "" ?>>8
                      </option>
                      <option value="9" <?= ($edit->pay_mon_date ?? 0) == 9 ? "selected" : "" ?>>9
                      </option>
                      <option value="10" <?= ($edit->pay_mon_date ?? 0) == 10 ? "selected" : "" ?>>10
                      </option>
                      <option value="11" <?= ($edit->pay_mon_date ?? 0) == 11 ? "selected" : "" ?>>11
                      </option>
                      <option value="12" <?= ($edit->pay_mon_date ?? 0) == 12 ? "selected" : "" ?>>12
                      </option>
                      <option value="13" <?= ($edit->pay_mon_date ?? 0) == 13 ? "selected" : "" ?>>13
                      </option>
                      <option value="14" <?= ($edit->pay_mon_date ?? 0) == 14 ? "selected" : "" ?>>14
                      </option>
                      <option value="15" <?= ($edit->pay_mon_date ?? 0) == 15 ? "selected" : "" ?>>15
                      </option>
                      <option value="16" <?= ($edit->pay_mon_date ?? 0) == 16 ? "selected" : "" ?>>16
                      </option>
                      <option value="17" <?= ($edit->pay_mon_date ?? 0) == 17 ? "selected" : "" ?>>17
                      </option>
                      <option value="18" <?= ($edit->pay_mon_date ?? 0) == 18 ? "selected" : "" ?>>18
                      </option>
                      <option value="19" <?= ($edit->pay_mon_date ?? 0) == 19 ? "selected" : "" ?>>19
                      </option>
                      <option value="20" <?= ($edit->pay_mon_date ?? 0) == 20 ? "selected" : "" ?>>20
                      </option>
                      <option value="21" <?= ($edit->pay_mon_date ?? 0) == 21 ? "selected" : "" ?>>21
                      </option>
                      <option value="22" <?= ($edit->pay_mon_date ?? 0) == 22 ? "selected" : "" ?>>22
                      </option>
                      <option value="23" <?= ($edit->pay_mon_date ?? 0) == 23 ? "selected" : "" ?>>23
                      </option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-2 days-per-month">
              <p>Of every month</p>
            </div>
          </div>

        </div>
      </div>
      <div class="">
        <div class="mgleft center-all note  mt-3 mb-2">
          <b>Note:</b>When payday falls on a non-working day or a holiday , employees will get
          paid on the
          previous working day.
        </div>
        <div class="row mb-3 center-all">
          <div class="col-md-12 ">
            <div class="purchasegrp dates-input">
              <label class="purchaseinfo mb-2 "><b>Start your first payroll from</b> <span class=" aster">*
                </span></label>
              <input type="text" id="startDate" class="form-control col-md-12 purchaseselects" name="select_pay"
                value="<?= $edit->select_pay ?? '' ?>">
            </div>
          </div>

          <div class="col-md-12">
            <div class="purchasegrp dates-input">
              <label class="purchaseinfo mb-2 "><b>Salary for the month of june-2023 will be
                  paid
                  on</b><span class=" aster">* </span></label>
              <input type="text" id="endDate" class="form-control purchaseselects" name="paid_date"
                value="<?= $edit->paid_date ?? '' ?>">
            </div>
          </div>
          <div class="banking-parent row bg-gray">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="purchasegrp">
            <label for="unitname" class="purchaseinfo mb-1">
              Show payslip details to staff
            </label>
            <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
              <?php $array = explode(',', $edit->payslip ?? ''); ?>

              <select class="selectpicker multiselect" name="payslip[]" multiple data-actions-box="true"
                data-live-search="true">
                <option value="0" <?= in_array("0", $array) ? "selected" : "" ?>>All</option>
                <optgroup label="Divider" class="divider"></optgroup>
                <option value="" disabled>Roles</option>
                <?php foreach ($staff as $row) { ?>
                  <option value="<?= $row->id ?>" <?= in_array($row->id, $array) ? "selected" : "" ?>>
                    <?= ucfirst($row->member_department) ?>
                  </option>
                <?php } ?>
                <optgroup label="Divider" class="divider"></optgroup>
                <option value="" disabled>List of staffs</option>
                <?php foreach ($staff as $row) { ?>
                  <option value="<?= $row->id ?>" <?= in_array($row->id, $array) ? "selected" : "" ?>>
                    <?= ucfirst($row->first_name) . " " . ucfirst($row->last_name) ?>
                  </option>
                <?php } ?>
              </select>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="purchasegrp">
            <label for="unitname" class="purchaseinfo mb-1">
              Accrual Type
            </label>
            <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
              <select class="selectpicker" name="accural_type">
                <option value="1" <?= ($edit->accural_type ?? 0) == 1 ? "selected" : "" ?>>All At Once</option>
                <option value="2" <?= ($edit->accural_type ?? 0) == 2 ? "selected" : "" ?>>Month Start</option>
                <option value="3" <?= ($edit->accural_type ?? 0) == 3 ? "selected" : "" ?>>Month End</option>
              </select>

            </div>
          </div>
        </div>
      </div>
      <hr class="expline">
      <div class="col-md-6">
        <div class="purchasegrp">
          <label for="unitname" class="purchaseinfo mb-1">Salary access to staff</label>
          <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
            <?php $array = explode(',', $edit->user_staff ?? ''); ?>
            <select class="selectpicker multiselect" name="user_staff[]" multiple data-actions-box="true"
              data-live-search="true">
              <?php foreach ($staff as $row) { ?>
                <option value="<?= $row->id ?>" <?= in_array($row->id, $array) ? "selected" : "" ?>>
                  <?= ucfirst($row->first_name) ?>
                  <?= $row->last_name ?>
                </option>
              <?php } ?>
            </select>

          </div>
        </div>
      </div>
      <hr class="expline">
      <div class="row">
        <div class="col-md-7">
          <div class="upload-files-container" style="background: none;">
            <div class="drag-file-area">
              <span class="material-icons-outlined upload-icon"> file_upload
              </span>
              <h3 class="dynamic-message" style="color: #6c757d;">Drag &amp; drop
                any
                file here</h3>

              <label class="label">

                <span class="browse-files">
                  <input type="file" class="default-file-input" name="pdf_">
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

        <div class="col-md-5">
          <div class="file-block" style="display: flex;">
            <div class="file-info">
              <span class="material-icons-outlined file-icon">description</span>
              <span class="file-name">Screenshot (353).png</span>
              <span class="file-size badge rounded-pill">173.3 KB</span>
            </div>
            <span class="material-icons remove-file-icon" onclick="removeFile(this)">delete</span>
            <div class="progress-bar" style="width: 0; height: 5px; bottom: 0; position: absolute;"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="purchasegrp">
            <label for="tags" class="purchaseinfo astername">Business Name</label>
            <input type="text" class="purchaseselects form-control " disabled
              value="<?= ucfirst($company_edit->company_name) ?>">
          </div>
        </div>
        <div class="col-md-6">
          <div class="purchasegrp">
            <label for="tags" class="purchaseinfo astername">Business Address</label>
            <input type="text" class="purchaseselects form-control " disabled
              value="<?= ucfirst($company_edit->address) ?>">
          </div>
        </div>
      </div>
      <div class="row">
        <h2 class="bold ml-1">Company Bank account</h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="purchasegrp">
            <label for="unitname" class="purchaseinfo">
              Bank Name
            </label>
            <div class=" dropdown-with-icon dropdownalignment">
              <select class="selectpicker" name="bank_name">
                <option value="">Select a Bank</option>
                <option value="1" <?= ($edit->pay_mon_date ?? 0) == 1 ? "selected" : "" ?>>State Bank of India</option>
                <option value="2" <?= ($edit->pay_mon_date ?? 0) == 2 ? "selected" : "" ?>>HDFC Bank</option>
                <option value="3" <?= ($edit->pay_mon_date ?? 0) == 3 ? "selected" : "" ?>>ICICI Bank</option>
                <option value="4" <?= ($edit->pay_mon_date ?? 0) == 4 ? "selected" : "" ?>>Punjab National Bank</option>
                <option value="5" <?= ($edit->pay_mon_date ?? 0) == 5 ? "selected" : "" ?>>Axis Bank</option>
                <option value="6" <?= ($edit->pay_mon_date ?? 0) == 6 ? "selected" : "" ?>>Canara Bank</option>
                <option value="7" <?= ($edit->pay_mon_date ?? 0) == 7 ? "selected" : "" ?>>Bank of Baroda</option>
                <option value="8" <?= ($edit->pay_mon_date ?? 0) == 8 ? "selected" : "" ?>>Union Bank of India</option>
                <option value="9" <?= ($edit->pay_mon_date ?? 0) == 9 ? "selected" : "" ?>>Bank of India</option>
                <option value="10" <?= ($edit->pay_mon_date ?? 0) == 10 ? "selected" : "" ?>>Indian Bank</option>
                <option value="11" <?= ($edit->pay_mon_date ?? 0) == 11 ? "selected" : "" ?>>IDBI Bank</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="purchasegrp">
            <label for="tags" class="purchaseinfo astername">Account Number</label>
            <input type="text" class="purchaseselects form-control " name="acc_name"
              value="<?= $edit->acc_name ?? '' ?>">
          </div>
        </div>
        <div class="col-md-6">
          <div class="purchasegrp">
            <label for="tags" class="purchaseinfo astername">IFSC Code</label>
            <input type="text" class="purchaseselects form-control " name="ifsc_num"
              value="<?= $edit->ifsc_num ?? '' ?>">
          </div>
        </div>
        <div class="col-md-6">
          <div class="purchasegrp">
            <label for="tags" class="purchaseinfo astername">Branch Name</label>
            <input type="text" class="purchaseselects form-control " name="branch_name"
              value="<?= $edit->branch_name ?? '' ?>">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="purchasegrp">
          <label for="unitname" class="purchaseinfo mb-1">
            Default Attendance Mode
          </label>
          <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
            <select class="selectpicker" name="present">
              <option value="1" <?= ($edit->present ?? 0) == 1 ? "selected" : "" ?>>Present by</option>
              <option value="2" <?= ($edit->present ?? 0) == 2 ? "selected" : "" ?>> Manual attendance</option>
              <option value="3" <?= ($edit->present ?? 0) == 3 ? "selected" : "" ?>>location based Selfie & location based
              </option>
              <option value="4" <?= ($edit->present ?? 0) == 4 ? "selected" : "" ?>>Selfie & location based</option>
            </select>

          </div>
        </div>
      </div>
      <div class="row ">
        <div class="flex justify-end">
          <button type="submit" style="margin-top:5%;" class="hrbtns contractbtn savebtn1">Save</button>
        </div>
      </div>
    </form>
  </div>

  <!--tab2-->
  <div id="table1" class="tabcontent  mtgb">
    <form action="" id="secform">
      <div id="newparent" class="banking-parent row p-2 ">
        <div class="row">
          <div class="col-md-6">
            <div class="purchasegrp ">
              <label class="purchaseinfo"> Salary</label>
              <?php $array = explode(',', $edit_esi->name ?? ''); ?>
              <select id="" class="selectpicker multiselect" name="name[]" multiple data-actions-box="true"
                data-live-search="true">
                <option value="36" <?= in_array("36", $array) ? "selected" : "" ?>>Basic</option>
                <option value="37" <?= in_array("37", $array) ? "selected" : "" ?>>HRA</option>
                <option value="38" <?= in_array("38", $array) ? "selected" : "" ?>>ESI</option>
                <option value="39" <?= in_array("39", $array) ? "selected" : "" ?>>Pf</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="purchasegrp">
              <label class="purchaseinfo ">ESI Employee</label>
              <input type="text" class="purchaseselects form-control" name="value"
                value="<?= $edit_esi->value ?? '' ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="">
              <label class="purchaseinfo">ESI Employer</label>
              <input type="text" class="purchaseselects form-control" name="e_value"
                value="<?= $edit_esi->e_value ?? '' ?>">
            </div>
          </div>
          <div class="col-md-6">
            <label class="purchaseinfo">Add User</label>
            <?php $array = explode(',', $edit_esi->add_remove2 ?? ''); ?>

            <select id="add_remove" class="selectpicker " name="add_remove2[]" data-actions-box="true" title="select..."
              data-live-search="true" multiple>
              <option value="0" <?= in_array("0", $array) ? "selected" : "" ?>>All</option>
              <optgroup label="Divider" class="divider"></optgroup>
              <option value="" disabled>Roles</option>
              <?php foreach ($staff as $row) { ?>
                <option value="<?= $row->id ?>" <?= in_array($row->id, $array) ? "selected" : "" ?>>
                  <?= ucfirst($row->member_department) ?>
                </option>
              <?php } ?>
              <optgroup label="Divider" class="divider"></optgroup>
              <option value="" disabled>List of staffs</option>
              <?php foreach ($staff as $row) { ?>
                <option value="<?= $row->id ?>" <?= in_array($row->id, $array) ? "selected" : "" ?>>
                  <?= ucfirst($row->first_name) . " " . ucfirst($row->last_name) ?>
                </option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="row center-radio mb-2 mt-2">
          <div class="col-md-3 ">
            <div class="row">
              <div class="col-md-12">
                <label for="tags" class="purchaseinfo mb-1 Calculate-lab "> <b>ESI Eligibility Based On
                    Leave Payment </b><span class="aster">*</span></label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 ">
                <div class="some-class sumclass">
                  <input type="radio" class="radio rd-left" name="leave_pay" <?= ($edit_esi->leave_pay ?? 0) == 1 ? "checked" : "" ?> value="1" id="y" />
                  <label for="y">Enable</label><br>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="radio" class="radio rd-left" name="leave_pay" <?= ($edit_esi->leave_pay ?? 0) == 2 ? "checked" : "" ?> value="2" id="z" />
                <label for="z">Disable</label>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="row">
              <div class="col-md-12">
                <label for="tags" class="purchaseinfo mb-1 Calculate-lab "> <b>Leave Payment </b><span
                    class="aster">*</span></label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 ">
                <div class="some-class sumclass">
                  <input type="radio" class="radio rd-left" name="pay" <?= ($edit_esi->pay ?? 0) == 1 ? "checked" : "" ?>
                    value="1" id="y" />
                  <label for="y">Detect Leave Payment </label><br>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="radio" class="radio rd-left" name="pay" <?= ($edit_esi->pay ?? 0) == 2 ? "checked" : "" ?>
                  value="2" id="z" />
                <label for="z">Pay from Basic Pay</label>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="purchasegrp">
              <label class="purchaseinfo mb-1">Minimum salary For ESI</label>
              <input type="number" class="purchaseselects form-control" name="min_esi"
                value="<?= $edit_esi->min_esi ?? '' ?>">
            </div>
          </div>
          <div class="col-md-3">
            <div class="purchasegrp">
              <label class="purchaseinfo mb-1">Maximum salary For ESI</label>
              <input type="number" class="purchaseselects form-control" name="max_esi"
                value="<?= $edit_esi->max_esi ?? '' ?>">
            </div>
          </div>
          <div class="flex justify-end ">
            <div class="">
              <button type="submit" class="hrbtns contractbtn savebtn1">Save</button>
            </div>
          </div>
        </div>

      </div>
    </form>
  </div>

  <!--tab3-->
  <div id="table2" class="tabcontent mtgb">
    <form action="" id="thirdform">
      <div id="newparent" class="banking-parent row p-2">
        <div class="row">
          <div class="col-md-6">
            <div class="purchasegrp">
              <label class="purchaseinfo"> Salary</label>
              <?php $array = explode(',', $edit_epf->salary ?? ''); ?>
              <select id="" class="selectpicker multiselect" name="salary[]" multiple data-actions-box="true"
                data-live-search="true">
                <option value="36" <?= in_array("36", $array) ? "selected" : "" ?>>Basic</option>
                <option value="37" <?= in_array("37", $array) ? "selected" : "" ?>>HRA</option>
                <option value="38" <?= in_array("38", $array) ? "selected" : "" ?>>ESI</option>
                <option value="39" <?= in_array("39", $array) ? "selected" : "" ?>>Pf</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="purchasegrp">
              <label class="purchaseinfo">EPF Employee</label>
              <input type="text" class="purchaseselects form-control" name="epf_value"
                value="<?= $edit_epf->epf_value ?? '' ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="purchasegrp">
              <label class="purchaseinfo">EPF Employer</label>
              <input type="text" class="purchaseselects form-control" name="cepf_value"
                value="<?= $edit_epf->cepf_value ?? '' ?>">
            </div>
          </div>
          <div class="col-md-6 mt-1">
            <label class="purchaseinfo">Add User</label>
            <?php $array = explode(',', $edit_epf->add_remove2 ?? ''); ?>
            <select id="add_remove" class="selectpicker " name="add_remove2[]" data-actions-box="true" title="select..."
              data-live-search="true" multiple>
              <option value="0" <?= in_array("0", $array) ? "selected" : "" ?>>All</option>
              <optgroup label="Divider" class="divider"></optgroup>
              <option value="" disabled>Roles</option>
              <?php foreach ($staff as $row) { ?>
                <option value="<?= $row->id ?>" <?= in_array($row->id, $array) ? "selected" : "" ?>>
                  <?= ucfirst($row->member_department) ?>
                </option>
              <?php } ?>
              <optgroup label="Divider" class="divider"></optgroup>
              <option value="" disabled>List of staffs</option>
              <?php foreach ($staff as $row) { ?>
                <option value="<?= $row->id ?>" <?= in_array($row->id, $array) ? "selected" : "" ?>>
                  <?= ucfirst($row->first_name) . " " . ucfirst($row->last_name) ?>
                </option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="row center-radio mb-2 mt-2">
          <div class="col-md-3 ">
            <div class="row">
              <div class="col-md-12">
                <label for="tags" class="purchaseinfo mb-1 Calculate-lab "> <b>EPF Eligibility Based On
                    Leave Payment </b><span class="aster">*</span></label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 ">
                <div class="some-class sumclass">
                  <input type="radio" class="radio rd-left" name="leave_pay" <?= ($edit_epf->leave_pay ?? 0) == 1 ? "checked" : "" ?> value="1" id="y" />
                  <label for="y">Enable</label><br>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="radio" class="radio rd-left" name="leave_pay" <?= ($edit_epf->leave_pay ?? 0) == 2 ? "checked" : "" ?> value="2" id="z" />
                <label for="z">Disable</label>
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="row">
              <div class="col-md-12">
                <label for="tags" class="purchaseinfo mb-1 Calculate-lab "> <b>Leave Payment </b><span
                    class="aster">*</span></label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 ">
                <div class="some-class sumclass">
                  <input type="radio" class="radio rd-left" name="pay" <?= ($edit_epf->pay ?? 0) == 1 ? "checked" : "" ?>
                    value="1" id="y" />
                  <label for="y">Detect Leave Payment </label><br>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <input type="radio" class="radio rd-left" name="pay" <?= ($edit_epf->pay ?? 0) == 2 ? "checked" : "" ?>
                  value="2" id="z" />
                <label for="z">Pay from Basic Pay</label>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="purchasegrp">
              <label class="purchaseinfo mb-1">Minimum salary For EPF</label>
              <input type="number" class="purchaseselects form-control" name="min_epf"
                value="<?= $edit_epf->min_epf ?? '' ?>">
            </div>
          </div>
          <div class="col-md-3">
            <div class="purchasegrp">
              <label class="purchaseinfo mb-1">Maximum salary For EPF</label>
              <input type="number" class="purchaseselects form-control" name="max_epf"
                value="<?= $edit_epf->max_epf ?? '' ?>">
            </div>
          </div>
          <div class="flex justify-end ">
            <div class="">
              <button type="submit" style="margin-top:5%;" class="hrbtns contractbtn savebtn1">
                Save</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>


  <!--  </div>
    </form>
    </div>
    </div>
    </div>
   script-->
  <script>
    $(document).ready(function () {
      $('.minusbtns').click(function () {
        // Hide the closest row when the minus button is clicked
        $(this).closest('.col-md-1').parent().hide();
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.minusbtns').click(function () {
        // Hide the closest row when the minus button is clicked
        $(this).closest('.adr').parent().hide();
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.minusbtns').click(function () {
        // Hide the closest row when the minus button is clicked
        $(this).closest('.adr2').parent().hide();
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.minusbtns').click(function () {
        // Hide the closest row when the minus button is clicked
        $(this).closest('.adr3').parent().hide();
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('.minusbtns').click(function () {
        // Hide the closest row when the minus button is clicked
        $(this).closest('.adr4').parent().hide();
      });
    });
  </script>
  <script>
    const ibox = document.getElementById('tum');
    const show = document.getElementById('showcontent');
    // Add event listener to checkbox
    ibox.addEventListener('change', function () {

      if (ibox.checked) {
        show.style.display = 'flex';
      } else {
        show.style.display = 'none';
      }
    });
  </script>

  <script>
    $(function () {
      $("#startDate").datepicker({
        dateFormat: 'yy-mm-dd',
        onSelect: function (selectedDate) {
          $("#endDate").datepicker("option", "minDate", selectedDate);
        }
      });
      $("#endDate").datepicker({
        dateFormat: 'yy-mm-dd',
        onSelect: function (selectedDate) {
          $("#startDate").datepicker("option", "maxDate", selectedDate);
        }
      });
    });
  </script>

  <script>
    var dropdownToggles = document.querySelectorAll("#stbutton");

    dropdownToggles.forEach(function (dropdownToggle) {
      var dropdownMenu = dropdownToggle.nextElementSibling;

      dropdownMenu.addEventListener("click", function (event) {
        var selectedOption = event.target.textContent;

        dropdownToggle.textContent = selectedOption;

        dropdownToggle.classList.remove("pending", "approved", "rejected");
        if (selectedOption === "Pending") {
          dropdownToggle.classList.add("notselected");
        } else if (selectedOption === "Approved") {
          dropdownToggle.classList.add("approved");
        } else if (selectedOption === "Rejected") {
          dropdownToggle.classList.add("rejected");
        } else {
          dropdownToggle.classList.remove("pending", "approved", "rejected");
        }
      });
      dropdownToggle.addEventListener("click", function () {
        var selectedOption = dropdownToggle.textContent.trim();
        dropdownMenu.innerHTML = "";
        if (selectedOption === "In Progress") {
          dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Pending</a></li>';
          dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Approved</a></li>';
          dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Rejected</a></li>';
        } else if (selectedOption === "Pending") {
          dropdownMenu.innerHTML +=
            '<li><a class="dropdown-item" href="#">In Progress</a></li>';
          dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Rejected</a></li>';
          dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Approved</a></li>';
        } else if (selectedOption === "Approved") {
          dropdownMenu.innerHTML +=
            '<li><a class="dropdown-item" href="#">In Progress</a></li>';
          dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Rejected</a></li>';
          dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Pending</a></li>';
        } else if (selectedOption === "Rejected") {
          dropdownMenu.innerHTML +=
            '<li><a class="dropdown-item" href="#">In Progress</a></li>';
          dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Pending</a></li>';
          dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Approved</a></li>';
        }
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function () {
      const dropdown = document.getElementById('add_remove');
      const add_remove2 = document.getElementById('add_remove2');
      dropdown.addEventListener('change', function () {
        const selectedOption = dropdown.value;
        add_remove2.style.display = 'none';

        if (selectedOption === '1' || selectedOption === '2') {

          add_remove2.style.display = 'block';
        }

      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $("#add_btn").click(function () {
        $("#newparent").append(
          '<div id="newparent1" class="row">' +
          '<div class="col-md-3">' +
          '<div class="purchasegrp">' +
          '<div class="purchaseinfo pgr">' +
          '<select name="" id="" class="selectpicker multiselect" name="name" multiple data-actions-box="true" data-live-search="true">' +
          '<option value="1">Employees</option>' +
          '<option value="2">Branches</option>' +
          '</select>' +
          '</div>' +
          '</div>' +
          '</div>' +
          '<div class="col-md-3">' +
          '<div class="purchasegrp">' +
          '<label class="purchaseinfo mb-1">Contribution rate(%)</label>' +
          '<select class="selectpicker form-control" name="currency" data-live-search="true" name="third">' +
          '<option value="36">Basic</option>' +
          '<option value="38">HRA</option>' +
          '<option value="36">ESI</option>' +
          '<option value="38">Pf</option>' +
          '</select>' +
          '</div>' +
          '</div>' +
          '<div class="col-md-3">' +
          '<div class="purchasegrp">' +
          '<label class="purchaseinfo mb-1">Contribution rate</label>' +
          '<select class="selectpicker form-control" name="currency" data-live-search="true" name="third">' +
          '<option value="36">Basic</option>' +
          '<option value="38">HRA</option>' +
          '<option value="36">ESI</option>' +
          '<option value="38">Pf</option>' +
          '</select>' +
          '</div>' +
          '</div>' +
          '<div class="col-md-2">' +
          '<div class="purchasegrp">' +
          '<label class="purchaseinfo" name="third"></label>' +
          '<input type="text" class="purchaseselects form-control" name="third">' +
          '</div>' +
          '</div>' +
          '<div class="col-md-1 padtop25">' +
          '<div class="purchasegrp">' +
          '<button id="r1" name="add" class="minusbtns setmartp" data-ticket="true" type="button">' +
          '<i class="fa fa-minus"></i>' +
          '</button>' +
          '</div>' +
          '</div>' +
          '</div>'
        );
        $('.selectpicker').selectpicker('refresh');
      });
      $(document).on('click', '#r1', function () {
        $(this).closest('#newparent1').remove();
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $("#addd_btn").click(function () {
        $("#newparents").append(
          ' <div id="newparent1" class="row"><div class="col-md-3"><div class="purchasegrp"><label class="purchaseinfo " name="third">Company EPF Number</label><input type="text" class="purchaseselects form-control" name="third"></select></div></div><div class="col-md-3"><div class="purchasegrp"><label class="purchaseinfo " name="third">Employee Contribution</label><input type="text" class="purchaseselects form-control" name="third"></select></div></div><div class="col-md-3"><div class="purchasegrp"><label class="purchaseinfo " name="third">Employer Contribution</label><input type="text" class="purchaseselects form-control" name="third"></select></div></div><div class="col-md-2"><div class="purchasegrp"><label class="purchaseinfo " name="third"></label><input type="text" class="purchaseselects form-control" name="third"></select></div></div> <div class="col-md-1 padtop25 "><div class="purchasegrp"><button id="r1" name="add" class="minusbtns setmartp " data-ticket="true type="button"><i class="fa fa-minus"></i></button></div></div></div>'
        );
        $('.selectpicker').selectpicker('reresh')
      });
      $(document).on('click', '#r1', function () {
        $(this).closest('#newparent1').remove();
      });
    });
  </script>
  <script>
    $('#settingsavedetail').formValidation({
      framework: 'bootstrap',
    }).on('success.form.fv', function (e) {
      e.preventDefault();
      var form = document.querySelector('#settingsavedetail');
      var dataForm = new FormData(form);
      console.log(dataForm);
      $.ajax({
        type: 'POST',
        url: '<?= base_url() ?>/Payroll/settings/addSetting',
        data: dataForm,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (result) {

          toastr.success('Added successfully', 'Success');
          //setTimeout(function() {
          //location.reload();
          //}, 800);
        }
      });
    });
  </script>
  <script>
    $('#savesalaryAddons').formValidation({
      framework: 'bootstrap',
    }).on('success.form.fv', function (e) {
      e.preventDefault();
      var form = document.querySelector('#savesalaryAddons');
      var dataForm = new FormData(form);
      console.log(dataForm);
      $.ajax({
        type: 'POST',
        url: '<?= base_url() ?>/Payroll/settings/savesalaryadd',
        data: dataForm,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (result) {
          toastr.success('Added successfully', 'Success');
          setTimeout(function () {
            location.reload();
          }, 800);
        }
      });
    });
  </script>

  <!-- append -->

  <script>
    $(document).ready(function () {
      $("#add_sin").click(function () {
        $("#parentsin").append(

          '<div class="row"  id="coldiv"><div class="col-md-3"><div class="purchasegrp"><label for="tags" class="purchaseinfo astername">If staff is late by</label><input type="time" class="purchaseselects form-control " name="late_time[]" placeholder="" ><label for="">No late fine for 0 mins</label></div></div> <div class="col-md-3 mlesin"> <div class="purchasegrp">      <label for="unitname" class="purchaseinfo mb-1">Detection Type </label> <div class=" dropdown-with-icon dropdownalignment">   <select class="selectpicker "   name="late d_type[]"> <option value="1">Fixed amount</option>  <option value="2">BB</option> <option value="3">CC</option> </select> </div></div></div> <div class="col-md-3 mlesin"> <div class="purchasegrp"> <label for="tags" class="purchaseinfo astername">Fixed amount</label><input type="number" class="purchaseselects form-control " name="late_value[]" placeholder="" > </div> </div> <div class="col-md-1"> <button id="remove_btn" name="add" class="hrbtns contractbtn addbttn " style="margin-top:36px;background-color:#df2f2f !important; " data-ticket="true" type="button"><i class="fa-solid fa-minus "></i></button></div></div></div> </div></div>'
        );
        $('.selectpicker').selectpicker('reresh')
      });
      $(document).on('click', '#remove_btn', function () {
        $(this).closest('#coldiv').remove();
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $("#add_sin1").click(function () {
        $("#parentsin1").append(
          '<div class="row"  id="coldiv1"><div class="col-md-3"><div class="purchasegrp"><label for="tags" class="purchaseinfo astername">If staff is late by</label><input type="time" class="purchaseselects form-control " name="break_time[]" placeholder="" ><label for="">No late fine for 0 mins</label></div></div> <div class="col-md-3 mlesin"> <div class="purchasegrp">      <label for="unitname" class="purchaseinfo mb-1">Detection Type </label> <div class=" dropdown-with-icon dropdownalignment">   <select class="selectpicker " name="break_d_type[]"  > <option value="1">Fixed amount</option>  <option value="2">BB</option> <option value="3">CC</option> </select> </div></div></div> <div class="col-md-3 mlesin"> <div class="purchasegrp"> <label for="tags" class="purchaseinfo astername">Fixed amount</label><input type="number" class="purchaseselects form-control " name="break_value[]" placeholder="" > </div> </div> <div class="col-md-1"> <button id="remove_btn1" name="add" class="hrbtns contractbtn addbttn " style="margin-top:36px;background-color:#df2f2f !important; " data-ticket="true" type="button"><i class="fa-solid fa-minus "></i></button></div></div></div> </div></div>'
        );
        $('.selectpicker').selectpicker('reresh')
      });
      $(document).on('click', '#remove_btn1', function () {
        $(this).closest('#coldiv1').remove();
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $("#add_sin2").click(function () {
        $("#parentsin2").append(
          '<div class="row"  id="coldiv2"><div class="col-md-3"><div class="purchasegrp"><label for="tags" class="purchaseinfo astername">If staff is late by</label><input type="time" class="purchaseselects form-control " name="early_exit_time[]" placeholder="" ><label for="">No late fine for 0 mins</label></div></div> <div class="col-md-3 mlesin"> <div class="purchasegrp">      <label for="unitname" class="purchaseinfo mb-1">Detection Type </label> <div class=" dropdown-with-icon dropdownalignment">   <select class="selectpicker " name="early_exit_d_type[]" > <option value="">Fixed amount</option>  <option value="">BB</option> <option value="">CC</option> </select> </div></div></div> <div class="col-md-3 mlesin"> <div class="purchasegrp"> <label for="tags" class="purchaseinfo astername">Fixed amount</label><input type="number" class="purchaseselects form-control " name="early_exit_value[]" placeholder="" > </div> </div> <div class="col-md-1"> <button id="remove_btn2" name="add" class="hrbtns contractbtn addbttn " style="margin-top:36px;background-color:#df2f2f !important; " data-ticket="true" type="button"><i class="fa-solid fa-minus "></i></button></div></div></div> </div></div>'
        );
        $('.selectpicker').selectpicker('reresh')
      });
      $(document).on('click', '#remove_btn2', function () {
        $(this).closest('#coldiv2').remove();
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $("#add_sin3").click(function () {
        $("#parentsin3").append(
          '<div class="row"  id="coldiv3"><div class="col-md-3"><div class="purchasegrp"><label for="tags" class="purchaseinfo astername">If staff is late by</label><input type="time" class="purchaseselects form-control " name="over_time[]" placeholder="" ><label for="">No late fine for 0 mins</label></div></div> <div class="col-md-3 mlesin"> <div class="purchasegrp">      <label for="unitname" class="purchaseinfo mb-1">Detection Type </label> <div class=" dropdown-with-icon dropdownalignment">   <select class="selectpicker "   name="over__d_type[]"> <option value="">Fixed amount</option>  <option value="">BB</option> <option value="">CC</option> </select> </div></div></div> <div class="col-md-3 mlesin"> <div class="purchasegrp"> <label for="tags" class="purchaseinfo astername">Fixed amount</label><input type="number" class="purchaseselects form-control " name="over_value[]" placeholder="" > </div> </div> <div class="col-md-1"> <button id="remove_btn3" name="add" class="hrbtns contractbtn addbttn " style="margin-top:36px;background-color:#df2f2f !important; " data-ticket="true" type="button"><i class="fa-solid fa-minus "></i></button></div></div></div> </div></div>'
        );
        $('.selectpicker').selectpicker('reresh')
      });
      $(document).on('click', '#remove_btn3', function () {
        $(this).closest('#coldiv3').remove();
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $("#add_sin4").click(function () {
        $("#parentsin4").append(
          '<div class="row"  id="coldiv4"><div class="col-md-3"><div class="purchasegrp"><label for="tags" class="purchaseinfo astername">If staff is late by</label><input type="time" class="purchaseselects form-control " name="early_over_time[]" placeholder="" ><label for="">No late fine for 0 mins</label></div></div> <div class="col-md-3 mlesin"> <div class="purchasegrp">      <label for="unitname" class="purchaseinfo mb-1">Detection Type </label> <div class=" dropdown-with-icon dropdownalignment">   <select class="selectpicker " name="early_over__d_type[]"  > <option value="">Fixed amount</option>  <option value="">BB</option> <option value="">CC</option> </select> </div></div></div> <div class="col-md-3 mlesin"> <div class="purchasegrp"> <label for="tags" class="purchaseinfo astername">Fixed amount</label><input type="number" class="purchaseselects form-control " name="early_over_value[]" placeholder="" > </div> </div> <div class="col-md-1"> <button id="remove_btn4" name="add" class="hrbtns contractbtn addbttn " style="margin-top:36px;background-color:#df2f2f !important; " data-ticket="true" type="button"><i class="fa-solid fa-minus "></i></button></div></div></div> </div></div>'
        );
        $('.selectpicker').selectpicker('reresh')
      });
      $(document).on('click', '#remove_btn4', function () {
        $(this).closest('#coldiv4').remove();
      });
    });
  </script>


  <script>
    $('#secform').formValidation({
      framework: 'bootstrap',
    }).on('success.form.fv', function (e) {
      e.preventDefault();
      var form = document.querySelector('#secform');
      var dataForm = new FormData(form);
      console.log(dataForm);
      $.ajax({
        type: 'POST',
        url: '<?= base_url() ?>/Payroll/settings/savesec',
        data: dataForm,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (result) {

          toastr.success('Added successfully', 'Success');
          setTimeout(function () {
            location.reload();
          }, 800);
        }
      });
    });
  </script>
  <script>
    $('#thirdform').formValidation({
      framework: 'bootstrap',
    }).on('success.form.fv', function (e) {
      e.preventDefault();
      var form = document.querySelector('#thirdform');
      var dataForm = new FormData(form);
      console.log(dataForm);
      $.ajax({
        type: 'POST',
        url: '<?= base_url() ?>/Payroll/settings/saveThird',
        data: dataForm,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (result) {

          toastr.success('Added successfully', 'Success');
          setTimeout(function () {
            location.reload();
          }, 800);
        }
      });
    });
  </script>

  <!-- table -->

  <script>
    function getResponse() {
      var table = $('.example').DataTable({

        rowReorder: {
          selector: 'td:nth-child(2)'
        },
        language: {
          lengthMenu: '_MENU_',
          search: '',
          searchPlaceholder: " Search for order ID, customer, order status or something..."
        },
        responsive: true,
        dom: 'Blfrtip',

        buttons: [{

        },

        {
          text: '<i class="fa-solid fa-arrow-rotate-right p-1" style="font-size:.9rem"></i>'
        },
        {
          text: '<button type="button" style="font-size:0.9rem; font-weight:400; border:none;padding:0;background-color: inherit;"><i class="fas fa-cog text-muted"></i> MANIPULATION</button>',
        },
        {
          text: '<i class="fa-solid fa-arrow-right-from-bracket"></i> EXPORT',
          extend: 'collection',
          buttons: [
            // '<span class="fexport"><i class="fa-regular fa-file-excel icn me-2"></i> EXCEL</span>', '<span class="fexport"><i class="fa-regular fa-file-lines icn me-2"></i> CSV</span>', '<span class="fexport"><i class="fa-regular fa-file-pdf icn me-2"></i> PDF</span>', '<span class="fexport"><i class="fa-solid fa-print me-2 icn"></i> PRINT</span>'
            {},
            {
              text: '<i class="fa-regular fa-file-excel icn me-2 excel-icon"></i> Excel',
              extend: 'excel',

            },
            {
              text: '<i class="fa-regular fa-file-lines icn me-2 csv-icon"></i> CSV',
              extend: 'csv',
            },
            {
              text: '<i class="fa-regular fa-file-pdf icn me-2 pdf-icon"></i> PDF',
              extend: 'pdf'
            },
            {
              text: '<i class="fa-solid fa-print me-2 icn print-icon"></i> PRINT',
              extend: 'print'
            },
          ],
          className: 'px-3'

        }

        ],


      });

    }

    function checkAll() {
      checkbox = document.getElementById("all_check");
      if (checkbox.checked == true) {
        $('.single_check').prop("checked", true);
        $('.bulk_send').show(1000);
      } else {
        $('.single_check').prop("checked", false);
        $('.bulk_send').hide(1000);
      }
    }

    function singleCheck(id) {
      checkbox = document.getElementById("check_" + id);
      boxes = document.getElementsByClassName("single_check");


      if (checkbox.checked == true) {
        $('.bulk_send').show(1000);
      } else {
        count = 0;
        for (let i = 0; i < boxes.length; i++) {
          if (boxes[i].checked == true) {
            count += 1;
          }
        }
        if (count == 0) {
          $('.bulk_send').hide(1000);
          $('#all_check').prop("checked", false);
        } else {
          $('.bulk_send').show();
        }
      }
    }

    $(document).ready(function () {
      const single_checks = document.querySelectorAll('.single_check');
      const rows = document.querySelectorAll('table.dataTable tbody tr');
      single_checks.forEach((singleCheck) => {
        singleCheck.addEventListener('click', (e) => {
          e.stopPropagation();
          singleCheck.checked = false;
        })
        singleCheck.addEventListener('dblclick', (e) => {
          e.stopPropagation();
          singleCheck.checked = true;

        })
      })
      rows.forEach((row) => {

        row.addEventListener('dblclick', () => {
          if (row.firstElementChild.children[0].checked == false) {
            row.firstElementChild.children[0].checked = true
          } else {
            row.firstElementChild.children[0].checked = false

          }
        })
      })

    })
  </script>

  <script>
    function openTab(evt, tabName) {
      // Declare all variables
      var i, tabcontent, tablinks;

      // Get all elements with class="tabcontent" and hide them
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }

      // Get all elements with class="tablinks" and remove the class "active"
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      // Show the current tab, and add an "active" class to the button that opened the tab
      document.getElementById(tabName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    var carousel = document.getElementById("carouselExampleIndicators");

    carousel.addEventListener("slid.bs.carousel", function (event) {
      var activeSlideIndex = event.to;
      if (activeSlideIndex === 0) {

        openTab(event, 'general');

      } else if (activeSlideIndex === 1) {

        openTab(event, 'billing');

      } else if (activeSlideIndex === 2) {

        openTab(event, 'custom');

      } else if (activeSlideIndex === 3) {

        openTab(event, 'salary1');

      }
    });
  </script>


  <!--  <script>
$(document).ready(function() {
    $("#add_btns").click(function() {
        $("#newparents").append(

            '<div id="newparent2" class="row">' +
            '<div class="col-md-4">' +
            '<div class="purchasegrp">' +
            '<label class="purchaseinfo mb-1">Deduction type</label>' +
            '<select class="selectpicker form-control" name="currency" data-live-search="true" name="third">' +
            '<option value="36">Basic</option>' +
            '<option value="38">HRA</option>' +
            '<option value="36">ESI</option>' +
            '<option value="38">Pf</option>' +
            '</select>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-4">' +
            '<div class="purchasegrp">' +
            '<label class="purchaseinfo mb-1">Calculation</label>' +
            '<select class="selectpicker form-control" name="currency" data-live-search="true" name="third">' +
            '<option value="36">Basic</option>' +
            '<option value="38">HRA</option>' +
            '<option value="36">ESI</option>' +
            '<option value="38">Pf</option>' +
            '</select>' +
            '</div>' +
            '</div>' +
            '<div class="col-md-3">' +
            '<div class="purchasegrp">' +
            '<label class="purchaseinfo mb-1">Value</label>' +
            '<input type="text" class="purchaseselects form-control" name="third">' +
            '</div>' +
            '</div>' +
            '<div class="col-md-1 padtop25" style="margin-top:8px;">' +
            '<div class="purchasegrp">' +
            '<button id="r2" name="add" class="minusbtns setmartp" data-ticket="true" type="button"><i class="fa fa-minus"></i></button>' +
            '</div>' +
            '</div>' +
            '</div>'
        );
        $('.selectpicker').selectpicker('refresh');
    });

$(document).on('click', '#r2', function() {
$(this).closest('#newparent2').remove();
});
});
</script>-->

  <script>
    let checkBox = document.querySelector('.checkbox');
    let selectHodidayPerMonth = document.querySelector('.select-Holidays-permonth');
    selectHodidayPerMonth.style.display = 'none';
    function checkCheckbox() {
      if (checkBox.checked) {
        selectHodidayPerMonth.style.display = 'block';
      } else {
        selectHodidayPerMonth.style.display = 'none';

      }
    }
    let editHoliday = <?= ($edit->holiday_ ?? 0) ?>;
    checkBox.checked = editHoliday === 1 || editHoliday === 2;;
    checkCheckbox();
    checkBox.addEventListener('change', checkCheckbox);
  </script>
  <script>
    $('#modalsaveStruct').formValidation({
    }).on('success.form.fv', function (e) {
      e.preventDefault();
      var form = document.querySelector('#modalsaveStruct');
      var dataForm = new FormData(form);
      console.log(dataForm);
      $.ajax({
        type: 'POST',
        url: '<?= base_url() ?>/Payroll/settings/saveSalaryStruct',
        data: dataForm,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function (result) {
          toastr.success('Added successfully', 'Success');
          $('#modal_md').modal('hide');
          setTimeout(function () {
            location.reload();
          }, 800);
        }
      });
    });
  </script>
  <script>
    function salaryStructureTable() {
      $.ajax({
        type: 'POST',
        url: '<?= base_url() ?>/Payroll/settings/salaryStructureTable',
        dataType: 'json',
        success: function (result) {
          console.log(result);
          $('#append1').html(result);
          getResponse();
        }
      });
    }
    salaryStructureTable();

  </script>