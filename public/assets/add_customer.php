<style>
    .fv-form-bootstrap .help-block {
      color: red;
    }
  </style>

  <body>
    <form id="customer" action="">
      <div class="tblcontainer1 radfsin mtt-35 mrg-right10 mrg-left10  mob-mbb">
        <div class="row newagntmb">
          <div class="col-md-12">
            <h4 class=" mbbsin malchan boldsin">ADD NEW COMPANY</h4>
          </div>
        </div>
        <hr class="fileline mb-2 mttsin">
        <!-- <div class="desk">
             <div class="pt-0">
                <div class="tabsss">
                   <div class="tabss ">
                      <div class="tabs d-flex newtabml ml-2">
                         <div>
                            <button type="button" class="tablinks mx-1 active customer" onclick="opentab1(event, 'Home')" style="width:150px;">Customer
                               Details</button>
                         </div>
                         <div>
                            <button type="button" class="tablinks mx-2" style="width:140px" onclick="opentab1(event, 'Contact')">
                               Billing
                               & Shipping</button>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div> -->
        <!-- <div id="carouselExampleIndicators" class="" data-bs-interval="false">
             <div class="carousel-inner scroll-images">
                <div class="carousel-item active" style="text-align: center;">
                   <div class="container">
                      <div class="child mb-0" style="height:auto">
                         <button type="button" class="tablinks tabresact active" style="width:70%" onclick="opentab1(event, 'Home')">Customer Details</button>
                      </div>
                   </div>
                </div>
                <div class="carousel-item" style="text-align: center;">
                   <div class="container">
                      <div class="child mb-0" style="height:auto;">
                         <button type="button" class="tablinks tabresact" style="width:70%" onclick="opentab1(event, 'Contact')">
                            Billing
                            & Shipping</button>
                      </div>
                   </div>
                </div>
 
 
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="margin-top:10px">
                   <i class="bi bi-chevron-left icon" style="color:black;font-weight: bold;"></i>
                   <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="margin-top:10px">
                   <i class="bi bi-chevron-right icon" style="color:black;font-weight:bold"></i>
                   <span class="visually-hidden">Next</span>
                </button>
             </div>
          </div> -->
        <div class="accordion custom-accordionwithicon-plus acc-item" id="accordionWithplusicon">
          <div class="accordion-item mtvsin borsin borrsin">
            <h2 class="accordion-header" id="accordionwithplusExample13">
              <button class="accordion-button tbbl-contain " type="button" data-bs-toggle="collapse"
                data-bs-target="#accor_plusExamplecollapse13" aria-expanded="true"
                aria-controls="accor_plusExamplecollapse13">
                Customer Details
              </button>
            </h2>
            <div id="accor_plusExamplecollapse13" class="accordion-collapse collapse show "
              aria-labelledby="accordionwithplusExample13" data-bs-parent="#accordionWithplusicon">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-3">
                      <div class="purchasegrp purch-drop">
                        <label for="name" class="purchaseinfo mbfsin"><span class="aster">* </span>Company</label>
                        <input type="text" id="ori_company" class="form-control purchaseselects" name="company" placeholder="Enter Company Name" />
                      </div>                     
                        <!-- <div class="purchasegrp purch-drop">
                          <label for="name" class="purchaseinfo mbfsin"><span class="aster">* </span>Company</label>                          
                          <select class="selectpicker form-control" data-live-search="true" name="money_unit"
                            placeholder="Enter Company Name">
                            <?php foreach ($money_unit as $row) { ?>
                            <option value="<?= $row->id ?>">
                              <?= $row->name ?>
                            </option>
                            <?php } ?>
                          </select>
                        </div> -->
                      </div>
                     
                      <div class="col-md-3">
                        <div class="purchasegrp">
                          <label for="name" class="purchaseinfo"> Phone</label>
                          <input type="number" id="name" class="form-control purchaseselects" name="mobile_number"
                            placeholder="Enter Phone Number" />
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="purchasegrp">
                          <label for="name" class="purchaseinfo"> Website</label>
                          <input type="text" id="name" class="form-control purchaseselects" name="website"
                            placeholder="Enter Website Name" />
                        </div>
                      </div>
                    </div>

                    <div class="row">                     
                     
                      <!-- <div class="col-md-3">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label for="name" class="purchaseinfo"> City</label>
                            <input type="text" id="name" class="form-control purchaseselects" name="city"
                              placeholder="Enter City" />
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                  <!-- <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="purchasegrp  mtfsin">
                          <label for="priority" class="emailpro">Address </label>
                          <textarea class="form-control textdesc mbfsin hchan "
                            style="border: 1px solid #ced4da !important;" name="address" id="ori_street"
                            placeholder="Enter Address"></textarea>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="purchasegrp">
                          <label for="name" class="purchaseinfo"> Zip Code</label>
                          <input type="text" id="ori_zipcode" class="form-control purchaseselects" name="zipcode"
                            placeholder="Enter Zip Code" />
                        </div>

                        <div class="purchasegrp purch-drop mteechan">
                          <label for="tags" class="explbl">Country</label>
                          <select class="selectpicker form-control" data-live-search="true" name="country_id"
                            id="ori_country" placeholder="Enter Country">
                            <?php foreach ($country as $row) { ?>
                            <option value="<?= $row->id ?>">
                              <?= $row->name ?>
                            </option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label for="name" class="purchaseinfo"> State</label>
                            <input type="text" id="ori_state" class="form-control purchaseselects" name="state"
                              placeholder="Enter State" />
                          </div>
                        </div>
                      </div>

                    </div>
                  </div> -->
                </div>

              </div>
            </div>
          </div>         
        </div> 
        <div class="accordion custom-accordionwithicon-plus acc-item1" id="accordionWithplusicon1">
        <div class="accordion-item borsin borzsin">
        <h2 class="accordion-header" id="accordionwithplusExample14">
          <button class="accordion-button tbbl-contain collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#accor_plusExamplecollapse14" aria-expanded="false"
            aria-controls="accor_plusExamplecollapse14">
            Advanced Options<sup><span class="notification-span">1</span> </sup>
          </button>
        </h2>
        <div id="accor_plusExamplecollapse14" class="accordion-collapse collapse "
          aria-labelledby="accordionwithplusExample14" data-bs-parent="#accordionWithplusicon1">
          <div class="accordion-body">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-3">
                    <div class="purchasegrp mtichan">
                      <label for="name" class="purchaseinfo"> GST Number</label>
                      <input type="text" id="name" class="form-control purchaseselects" name="vat_number"
                        placeholder="Enter GST Number" />
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="purchasegrp mtichan">
                      <label for="unitname" class="purchaseinfo mb-1">Groups</label>
                      <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
                        <select onchange="grouping()" class="selectpicker" id="gropinggg" multiple
                          data-actions-box="true" data-live-search="true" placeholder="Select Group">
                          <?php foreach ($group as $row) { ?>
                          <option value="<?= $row->id ?>">
                            <?= $row->name ?>
                          </option>
                          <?php } ?>
                        </select>
                        <input type="hidden" id="value_group" name="group_id">
                        <button type="button" class="select-container dropdownplusbtn" data-bs-toggle="modal"
                          data-bs-target="#myModal">
                          <span class="input-group-addon colorlabels"><i class="bi bi-plus-lg plus-blue"></i></span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="purchasegrp purch-drop">
                      <label for="tags" class="explbl" data-bs-toggle="tooltip" data-bs-placement="top"
                        data-bs-custom-class="custom-tooltip"
                        data-bs-title="This top tooltip is themed via CSS variables." style="font-size: 16px;"><i
                          class="bi bi-question-circle-fill"></i>
                        Currency</label>
                      <select class="selectpicker form-control" data-live-search="true" name="money_unit"
                        placeholder="Enter Currency">
                        <?php foreach ($money_unit as $row) { ?>
                        <option value="<?= $row->id ?>">
                          <?= $row->name ?>
                        </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="purchasegrp purch-drop">
                      <label for="tags" class="explbl">Default Language</label>
                      <select class="selectpicker form-control" data-live-search="true" name="lang_id"
                        placeholder="Enter Default Language">
                        <?php foreach ($lang as $row) { ?>
                        <option value="<?= $row->id ?>">
                          <?= $row->name ?>
                        </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="fileline mt-4 mb-2">
            <div class="row">
              <div class="col-lg-6 ">
                <div class="col-lg-12 d-flex displayb justify-content-between billingmb mtrchan">
                  <h1 class="heading fw-normal  mlfsin" style="font-size: 16px;">Billing Address</h1>
                  <h1 class="heading-wait sp-class-grey text-right fw-normal me-1 mt-1 mb-0" onclick="copyOri()"
                    style="cursor:pointer;">Same as Customer Info</h1>
                </div>
                <hr class="fileline mtesin">
                <!-- <div class="row mtsin"> -->
                <div class="col-md-12">
                  <div class="row ">
                    <div class="col-lg-12">
                      <div class="purchasegrps mtosin">
                        <label for="purchasedesc mbfsin" class="emailpro mtvsin">Street</label>
                        <textarea class="textdesc hchan" style="border: 1px solid #ced4da !important;"
                          placeholder="Enter street name"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row ">
                    <div class="col-lg-12">
                      <div class="purchasegrps mtechan ">
                        <label for="name" class="purchaseinfo"> Company</label>
                        <input type="text" class="form-control purchaseselects" name="company_bill"
                          id="company_bill" placeholder="Enter Company Name" />
                      </div>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-lg-12">
                      <div class="purchasegrps ">
                        <label for="name" class="purchaseinfo">State</label>
                        <input type="text" class="form-control purchaseselects" name="state_bill" id="state_bill"
                          placeholder="Enter State Name" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row ">
                    <div class="col-lg-12">
                      <div class="purchasegrps ">
                        <label for="name" class="purchaseinfo">Zip Code</label>
                        <input type="text" class="form-control purchaseselects" name="zipcode_bill"
                          id="zipcode_bill" placeholder="Enter Zip Code" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="purchasegrps purch-drop mteechan">
                        <label for="tags" class="explbl">Country</label>
                        <select class="selectpicker" data-live-search="true" name="country_bill" id="country_bill"
                          placeholder="Enter Country Name">
                          <?php foreach ($country as $row) { ?>
                          <option value="<?= $row->id ?>">
                            <?= $row->name ?>
                          </option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- </div> -->
              </div>
              <div class="col-lg-6 mtt-9">
                <div class="col-lg-12 displayb d-flex justify-content-between billingmb mtrchan">
                  <h1 class="heading fw-normal  dissin" style="font-size: 16px;">
                    <label for="tags" class="explbl" data-bs-toggle="tooltip1" data-bs-placement="top"
                      data-bs-custom-class="custom-tooltip"
                      data-bs-title="This top tooltip is themed via CSS variables."><i
                        class="bi bi-question-circle-fill"></i>
                      Shipping Address</label>

                  </h1>
                  <h1 class="heading-wait sp-class-grey text-right fw-normal me-1 mt-1 mb-0 mttsin"
                    onclick="copyBill()" style="cursor:pointer;"> Copy Billing Address
                  </h1>
                </div>
                <hr class="fileline mtesin">
                <!-- <div class="row mtsin"> -->
                <div class="col-md-12">
                  <div class="row ">
                    <div class="col-lg-12">
                      <div class="purchasegrps mtosin">
                        <label for="priority" class="purchaseinfo mbfnsin mtvsin">Street</label>
                        <textarea class="textdesc hchan" style="border: 1px solid #ced4da !important;"
                          name="street_ship" id="street_ship" placeholder="Enter Street Name"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row ">
                    <div class="col-lg-12">
                      <div class="purchasegrps mtechan">
                        <label for="name" class="purchaseinfo"> Company</label>
                        <input type="text" class="form-control purchaseselects" name="company_ship"
                          id="company_ship" placeholder="Enter Company Name" />
                      </div>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-lg-12">
                      <div class="purchasegrps ">
                        <label for="name" class="purchaseinfo">State</label>
                        <input type="text" class="form-control purchaseselects" name="state_ship" id="state_ship"
                          placeholder="Enter State Name" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row ">
                    <div class="col-lg-12">
                      <div class="purchasegrps ">
                        <label for="name" class="purchaseinfo">Zip Code</label>
                        <input type="text" class="form-control purchaseselects" name="zipcode_ship"
                          id="zipcode_ship" placeholder="Enter Zip Code" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="purchasegrps purch-drop mteechan">
                        <label for="tags" class="explbl ">Country</label>
                        <select class="selectpicker" data-live-search="true" name="country_ship" id="country_ship"
                          placeholder="Enter Country Name">
                          <?php foreach ($country as $row) { ?>
                          <option value="<?= $row->id ?>">
                            <?= $row->name ?>
                          </option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
      <div class="">
        <div
          class="fixed-bottom taskfooter bg-white fixed-footer text-end pb-2 pt-2 pe-4 mt-4 mrg-27 give-left-margin tsk-left">
          <button type="submit" onclick="submitMethod(1)" class="custsave">SAVE</button>&nbsp;
          <button type="submit" onclick="submitMethod(2)" class="resize mrsin tsk-btn-mr-5">SAVE AND CREATE CONTACT</button>
          <!-- <button type="submit" accesskey="s" class="tasksave1 uppercase me-4">Save <small>(alt+s)</small></button> -->
        </div>
      </div>
    </form>
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header hdrbg">
            <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
            <div class="vertical-line">
              <span class="Bcgtop capsule"></span>
              <span class="Bcgbttm capsule"></span>
            </div>
            <h6 class="modal-title">Add New Customer Group
            </h6>
          </div>
          <div class="modal-body popupbdy">
            <div class="content mx-3 mr-4">
              <form id="group">
                <div class="row py-2  me-0">
                  <div class="purchasegrps form-group">
                    <label for="sub" class="purchaseinfo"><span class="required">* </span> Name</label>
                    <input type="text" id="subject" class="form-control purchaseselects" name="name">
                  </div>
                </div>
                <div class="modal-footer taskfooter mtbgsin marchan me-0 ">
                  <button type="button" class="taskclose1" data-bs-dismiss="modal">Close</button>
                  <button type="submit" form="group" class="tasksave1 ms-0 tsk-btn-mr-5">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- tooltip -->
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      });
    </script>
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip1"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      });
    </script>

    <!-- <script>
       function openPage(pageName) {
          let tabButtons = document.getElementsByClassName("tablist");
 
          for (let i = 0; i < tabButtons.length; i++) {
             tabButtons[i].classList.remove("clicked");
          }
 
          event.currentTarget.classList.add("clicked");
 
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
             tabcontent[i].style.position = "absolute";
             tabcontent[i].style.left = "-20000px";
             tabcontent[i].style.display = "block";
          }
 
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
             tablinks[i].style.backgroundColor = "";
          }
 
          document.getElementById(pageName).style.position = "static";
          event.currentTarget.style.backgroundColor = '';
       }
 
       document.getElementById("defaultOpen").click();
       function dy_tag(b) {
          setTimeout(() => {
             a = $('[data-id=selection_' + b + ']').attr("title");
             $('#tag_hidden_' + b).val(a);
          }, 1000);
       }
       function grouping() {
          setTimeout(() => {
             a = $('[data-id=gropinggg]').attr("title");
             $('#value_group').val(a);
          }, 1000);
       }
       function checkop(a, c, d) {
          b = $('#check_' + a).val();
          if (b != 0) {
             $('#check_' + a).val(0);
          } else {
             $('#check_' + a).val(c);
          }
          value = '';
          for (const li of document.querySelectorAll('.cercer')) {
             value += li.value + ',';
          }
          value = value.substring(0, value.length - 1);
          $('#total_check_' + d).val(value);
       }
       function date_change(a) {
          var x = $('#datetime_' + a).val();
          x = x.replace("T", " ");
          $('#datetime_' + a).val(x);
       }
       function popupopen(b) {
          a = $('.card.url_' + b).attr("value");
          if (a == 1) {
             $('.card.url_' + b).show(200);
             $('.arrow-modal_' + b).show(400);
             $('.card.url_' + b).attr("value", "0");
             $('.card.url_' + b).attr("apply_2", "0");
             io = $('#link_title_' + b).val();
             ib = $('#link_url_' + b).val();
             $('#link_title_old_' + b).val(io);
             $('#link_url_old_' + b).val(ib);
          } else {
             $('.card.url_' + b).hide(200);
             $('.arrow-modal_' + b).hide();
             $('.card.url_' + b).attr("value", "1");
             e = $('.card.url_' + b).attr("apply");
             f = $('.card.url_' + b).attr("apply_2");
             if (e == 0) {
                c = $('#link_title_' + b).val('');
                d = $('#link_url_' + b).val('');
             }
             if (f == 0) {
                old_1 = $('#link_title_old_' + b).val();
                old_2 = $('#link_url_old_' + b).val();
                $('#link_title_' + b).val(old_1);
                $('#link_url_' + b).val(old_2);
             }
             if ($('#link_title_' + b).val() != '') {
                title = $('#link_title_' + b).val();
                $('#link_p_' + b).html(title);
             } else {
                $('#link_p_' + b).html('Click Here To Add Link');
             }
             sum_1 = $('#link_title_' + b).val();
             sum_2 = $('#link_url_' + b).val();
             final = sum_1 + ',' + sum_2;
             $('#full_link_input_' + b).val(final);
          }
       }
       function url_show(a) {
          b = $('#link_url_' + a).val();
          $('#link_outside_' + a).attr("href", b);
       }
       function saveChanges(a) {
          b = $('.card.url_' + a).attr("apply");
          if (b == 0) {
             $('.card.url_' + a).attr("apply", "1");
             $('.card.url_' + a).attr("apply_2", "1");
          } else {
             $('.card.url_' + a).attr("apply_2", "1");
          }
          popupopen(a);
       }
       $('.datepicker').datepicker({ autoclose: true, endDate: 'today', dateFormat: 'yy-mm-dd', changeMonth: true, changeYear: true });
       $('#customer').formValidation({
          framework: 'bootstrap',
          fields: {
             company: {
                validators: {
                   notEmpty: {
                      message: 'Enter Company'
                   }
                }
             },
             <?php foreach ($custom_field as $row) {
                if ($row->required == 1) {
             ?>
                                                                                                             <?= $row->field_name ?>: {
                      validators: {
                         notEmpty: {
                            message: '<?= ucfirst($row->field_name) ?> Is Required'
                         }
                      }
                   },
                <?php }
             } ?>
          }
       })
          .on('success.form.fv', function (e) {
             e.preventDefault();
             var form = document.querySelector('#customer');
             var formData = new FormData(form);
             $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/customer/addCustomers',
                data: formData,
                cache: false,
                contentType: false,
                processData: false, // serializes the form's elements.
                dataType: 'json',
                success: function (result) {
                   typeer = $('#subtype').val();
                   if (typeer == 1) {
                      toastr.success('Customer Added successfully!', 'Success');
                      setTimeout(() => {
                         window.location.href = "<?= base_url() ?>/customer";
                      }, 1000);
                   } else {
                      toastr.success('Customer Added successfully!', 'Success');
                      setTimeout(() => {
                         window.location.href = "<?= base_url() ?>/customer/contacts/" + typeer + "/" + result;
                      }, 1000);
                   }
                }
             });
          });
       $('#group').formValidation({
          framework: 'bootstrap',
          fields: {
             name: {
                validators: {
                   notEmpty: {
                      message: 'Enter Name'
                   }
                }
             },
          }
       })
          .on('success.form.fv', function (e) {
             e.preventDefault();
             var form = document.querySelector('#group');
             var formData = new FormData(form);
             $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/customer/addGroup',
                data: formData,
                cache: false,
                contentType: false,
                processData: false, // serializes the form's elements.
                dataType: 'json',
                success: function (result) {
                   toastr.success('Group Added successfully!', 'Success');
                   window.location.reload();
                }
             });
          });
       function copyOri() {
          ori_street = $('#ori_street').val();
          ori_company = $('#ori_company').val();
          ori_state = $('#ori_state').val();
          ori_zipcode = $('#ori_zipcode').val();
          ori_country = $('#ori_country').val();
          //to
          $('#street_bill').val(ori_street);
          $('#company_bill').val(ori_company);
          $('#state_bill').val(ori_state);
          $('#zipcode_bill').val(ori_zipcode);
          $('#country_bill').val(ori_country);
       }
       function copyBill() {
          ori_street = $('#street_bill').val();
          ori_company = $('#company_bill').val();
          ori_state = $('#state_bill').val();
          ori_zipcode = $('#zipcode_bill').val();
          ori_country = $('#country_bill').val();
          //to
          $('#street_ship').val(ori_street);
          $('#company_ship').val(ori_company);
          $('#state_ship').val(ori_state);
          $('#zipcode_ship').val(ori_zipcode);
          $('#country_ship').val(ori_country);
       }
       function submitMethod(a) {
          if (a == 1) {
             $('#subtype').val(1);
             $('#customer').submit();
          } else {
             $('#subtype').val(2);
             $('#customer').submit();
          }
       }
    </script> -->
    <script>
      function opentab1(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      var carousel = document.getElementById("carouselExampleIndicators");

      carousel.addEventListener("slid.bs.carousel", function (event) {
        var activeSlideIndex = event.to;
        if (activeSlideIndex === 0) {

          opentab1(event, 'general');

        } else if (activeSlideIndex === 1) {

          opentab1(event, 'Contact');

        }
      })
    </script>
    <script>
      $('#myModal').formValidation({
        framework: 'bootstrap',
        fields: {


          name: {
            validators: {
              notEmpty: {
                message: 'This field is required'
              }
            }
          },


        }
      })
    </script>
    <script>
      $('#customer').formValidation({
        framework: 'bootstrap',
        fields: {
          company: {
            validators: {
              notEmpty: {
                message: 'This field is required'
              }
            }
          },
        }
      })
    </script>