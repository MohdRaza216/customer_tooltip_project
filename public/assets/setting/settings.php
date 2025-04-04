<style>
  .form-panel-text {
    word-wrap: break-word;
    max-width: 100%;
  }

  .row.newpaddinleft {
    padding-left: 4px;
  }

  .mrtpp {
    margin-top: 10px !important;
  }

  x .pmtop {
    margin: 0rem;
  }

  .custbtn {
    display: flex;
  }

  #compinfo {
    text-align: left;
  }

  .boxpd {
    padding-left: 0 !important;
  }

  @media (max-width: 192px) {
    .custbtn {
      display: block;
    }

    #compinfo {
      text-align: center;
    }

    .fa-bars-staggered {
      margin-bottom: 0 !important;
    }
  }

  .textin {
    padding: 3px 12px;
  }

  .newquualmar {
    margin: 16px 0 26px 0;
  }

  .purchaseinfo {
    margin-bottom: 3px;
  }
</style>


<div class="container1">
  <div class="row m-2 gy-3">
    <div class="tblcontainer tabspace bg-white">
      <div class="row">
        <div class="col-md-12 ">
          <div class="tab-container mappingtabhdr">

            <ul id="tabList" class="desktop deskk mb-2">


              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb active" onclick="opentab2(event, 'General')"><i
                      class="fa fa-cog menu-icon pd-icon"></i> General</button>
                </div>
              </li>

              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb custbtn" onclick="opentab2(event, 'Company Information')"><i
                      class="fa-solid fa-bars-staggered menu-icon pd-icon"></i>Company Information</button>
                </div>
              </li>
              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb" onclick="opentab2(event, 'Localization')"><i
                      class="fa-solid fa-globe menu-icon pd-icon"></i>
                    Localization</button>
                </div>
              </li>
              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb" onclick="opentab2(event, 'Finance')"><i
                      class="fa-solid fa-receipt menu-icon pd-icon"></i> Finance</button>
                </div>
              </li>
              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb" onclick="opentab2(event, 'Customers')"><i
                      class="fa-regular fa-user menu-icon pd-icon"></i> Customers</button>
                </div>
              </li>
              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb" onclick="opentab2(event, 'Tasks')"><i
                      class="fa-regular fa-circle-check menu-icon pd-icon"></i> Tasks</button>
                </div>
              </li>
              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb" onclick="opentab2(event, 'Leads')"><i
                      class="fa fa-tty menu-icon pd-icon"></i> Leads</button>
                </div>
              </li>
              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb" onclick="opentab2(event, 'Calendar')"><i
                      class="fa-regular fa-calendar menu-icon pd-icon"></i>
                    Calendar</button>
                </div>
              </li>
              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb" onclick="opentab2(event, 'PDF')"><i
                      class="fa-regular fa-file-pdf menu-icon pd-icon"></i>
                    PDF</button>
                </div>
              </li>
              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb" onclick="opentab2(event, 'E-Sign')"><i
                      class="fa-solid fa-signature menu-icon pd-icon"></i>
                    E-Sign</button>
                </div>
              </li>
              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb" onclick="opentab2(event, 'Tags')"><i
                      class="fa-solid fa-tags menu-icon pd-icon"></i>
                    Tags</button>
                </div>
              </li>
              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb" onclick="opentab2(event, 'System Update')"><i class="fa fa-cog"
                      aria-hidden="true"></i> System Update</button>
                </div>
              </li>
              <li>
                <div class="child invchildmtmb ">
                  <button class="tablinks2 tb-linksmb" onclick="opentab2(event, 'System Update')"><i
                      class="fa-sharp fa-solid fa-circle-info"></i>
                    System/Server Info</button>
                </div>
              </li>
            </ul>
            <div class="tab-arrow lefts" onclick="scrollTabs('left')">
              <i class="bi bi-chevron-left arrowfont"></i>
            </div>
            <div class="tab-arrow right" onclick="scrollTabs('right')">
              <i class="bi bi-chevron-right arrowfont "></i>
            </div>
          </div>
          <div id="carouselExampleIndicators1" class="carousel slide carsl" data-bs-interval="false"
            style="height:54px">
            <div class="carousel-inner scroll-images">
              <div class="carousel-item active" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto">
                    <button class="tablinks2 active tabresact" style="width:70%" onclick="opentab2(event, 'General')"><i
                        class="fa fa-cog menu-icon pd-icon"></i> General</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks2 tabresact" style="width:70%"
                      onclick="opentab2(event, 'Company Information')"><i
                        class="fa-solid fa-bars-staggered menu-icon pd-icon"></i> Company Information</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks2 tabresact" style="width:70%" onclick="opentab2(event, 'Localization')"><i
                        class="fa-solid fa-globe menu-icon pd-icon"></i> Localization</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks2 tabresact" style="width:70%" onclick="opentab2(event, 'Finance')"><i
                        class="fa-solid fa-receipt menu-icon pd-icon"></i> Finance</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks2 tabresact" style="width:70%" onclick="opentab2(event, 'Customers')"><i
                        class="fa-regular fa-user menu-icon pd-icon"></i> Customers</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks2 tabresact" style="width:70%" onclick="opentab2(event, 'Tasks')"><i
                        class="fa-regular fa-circle-check menu-icon pd-icon"></i> Tasks</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks2 tabresact" style="width:70%" onclick="opentab2(event, 'Leads')"><i
                        class="fa fa-tty menu-icon pd-icon"></i> Leads</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks2 tabresact" style="width:70%" onclick="opentab2(event, 'Calendar')"><i
                        class="fa-regular fa-calendar menu-icon pd-icon"></i> Calendar</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks2 tabresact" style="width:70%" onclick="opentab2(event, 'PDF')"><i
                        class="fa-regular fa-file-pdf menu-icon pd-icon"></i> PDF</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks2 tabresact" style="width:70%" onclick="opentab2(event, 'E-Sign')"><i
                        class="fa-solid fa-signature menu-icon pd-icon"></i> E-Sign</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks2 tabresact" style="width:70%" onclick="opentab2(event, 'Tags')"><i
                        class="fa-solid fa-tags menu-icon pd-icon"></i> Tags</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks2 tabresact" style="width:70%" onclick="opentab2(event, 'System Update')"><i
                        class="fa fa-cog" aria-hidden="true"></i> System Update</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks2 tabresact" style="width:70%" onclick="opentab2(event, 'System Update')"><i
                        class="fa-sharp fa-solid fa-circle-info"></i> System/Server Info</button>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev carosel_bttn" type="button"
                data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev" style="margin-top:10px">
                <i class="bi bi-chevron-left icon" style="color:black;font-weight: bold;"></i>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next carosel_bttn" type="button"
                data-bs-target="#carouselExampleIndicators1" data-bs-slide="next" style="margin-top:10px">
                <i class="bi bi-chevron-right icon" style="color:black;font-weight:bold"></i>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="tblcontainer tabspace bg-white side-panel1 mrtpp">
      <div class="col-md-12 p-2">
        <div class="row mb-3 mt-2">
          <div class="col-md-12">
            <label id="lblname" class="heading-txt font-semibold fs-6">General</label>
          </div>
        </div>

        <!--General Tab-->

        <div id="General" class="tabcontent1 ps-0 " style="display:block">

          <!-- <div class=" col-md-12" ></div> -->

          <div class="panel-body1">
            <div class="row">
              <div class="col-md-9" title="Logo">
                <img src="<?= base_url($general->logo) ?>" class="img-margin">
              </div>
              <div class="col-md-3 text-right">
                <a href="#" data-bs-toggle="tooltip" title="" class="remove-color" data-bs-title="Remove company logo">
                  <i class="fa fa-remove"></i></a>
              </div>
            </div>
            <hr class="fileline">
            <div class="row flex items-center mt-2 mb-2">
              <div class="col-md-9" title="Favicon">
                <img src="<?= base_url($general->favicon) ?>" class="img-margin1">
              </div>
              <div class="col-md-3 text-right">
                <a href="#" data-bs-toggle="tooltip" title="" class="remove-color" data-bs-title="Remove company logo">
                  <i class="fa fa-remove"></i></a>
              </div>
            </div>
            <!-- <hr class="fileline">
              <div class="row">

                <div class="col-md-9">
                  <img src="../../assets/img/logo.png" class="img-margin">
                </div>
                <div class="col-md-3 text-right">
                  <a href="#" data-bs-toggle="tooltip" title="" class="remove-color" data-bs-title="Remove company logo">
                    <i class="fa fa-remove"></i></a>
                </div>
              </div> -->

            <hr class="fileline mb-2">
            <form id="general_form" action="<?= site_url('setup/save-setting/general') ?>"
              onsubmit="saveSetting(this,event)">
              <input type="hidden" name="id" value="<?= $general->id ?>">
              <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>">
              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrp">
                    <label class="purchaseinfo marginbottom">Company Name</label>
                    <input type="text" class="form-control purchaseselects" name="company_name"
                   placeholder="enter company name">

                  </div>
                </div>
              </div>
              <hr class="fileline mt-3 mb-2">
              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrp">
                    <label class="purchaseinfo marginbottom">Company Main Domain</label>
                    <input type="text" class="form-control purchaseselects" name="company_main_domain" placeholder="enter company main domain">
                      <!-- value="<?= $general->company_main_domain ?>"> -->
                  </div>
                </div>
              </div>
              <hr class="fileline mt-3 mb-2">
              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrp">
                    <label class="purchaseinfo mb-1">RTL Admin Area (Right to Left)</label><br>
                    <div class="checkbox ml-1 ml-1 mtisin">
                      <input type="radio" class="form-check-input lbl-space1" name="rtl_admin_area" value="1"
                        <?= ($general->rtl_admin_area) ? 'checked' : '' ?>>
                      <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                      <input type="radio" class="form-check-input lbl-margin  lbl-space1" name="rtl_admin_area"
                        <?= ($general->rtl_admin_area) ? '' : 'checked' ?> value="0">
                      <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                    </div>
                  </div>
                </div>
              </div>
              <hr class="fileline mt-3 mb-2 mtisin">
              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrp">
                    <label class="purchaseinfo mb-1">RTL Customers Area (Right to Left)</label><br>
                    <div class="checkbox ml-1 ml-1 mtisin">
                      <input type="radio" class="form-check-input lbl-space1" name="rtl_customer_area" value="1"
                        <?= ($general->rtl_customer_area) ? 'checked' : '' ?>>
                      <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                      <input type="radio" class="form-check-input lbl-margin  lbl-space1" name="rtl_customer_area"
                        value="0" <?= ($general->rtl_customer_area) ? '' : 'checked' ?>>
                      <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                    </div>
                  </div>
                </div>
              </div>
              <hr class="fileline mt-3 mb-2 mtisin">
              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrp">
                    <label class="purchaseinfo marginbottom">Allowed file types</label>
                    <input type="text" class="form-control purchaseselects" name="allowed_file_types"
                      value="<?= $general->allowed_file_types ?>">
                  </div>
                </div>
              </div>
          </div>
          </form>
        </div>

        <!--Company Information-->
        <div id="Company Information" class="tabcontent1 ps-0" style="display:none">

          <div class="accordion custom-accordionwithicon-plus" id="accordionWithplusicon">
            <div class="panel-body1">
              <div class="alert alert-primary alert-box" role="alert">
                These information will be displayed on invoices/estimates/payments and other PDF
                documents where company info is required
              </div>
              <form id="company_form" action="<?= site_url('setup/save-setting/company-info') ?>"
                onsubmit="saveSetting(this,event)">
                <input type="hidden" name="id" value="<?= $com->id ?>">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo ">Company Name</label>
                      <input type="text" name="company_name" class="form-control purchaseselects"  placeholder="enter company name"
                        value="<?= $com->company_name ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo">Address</label>
                      <input type="text" name="address" class="form-control purchaseselects"  placeholder="enter Address"
                        value="<?= $com->address ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo">City</label>
                      <input type="text" name="city" class="form-control purchaseselects" placeholder="enter city"
                      value="<?= $com->city ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo">State</label>
                      <input type="text" name="state" class="form-control purchaseselects" 
                      placeholder="enter state"
                      value="<?= $com->state ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo ">Country Code</label>
                      <input type="text" name="country_code" class="form-control purchaseselects" placeholder="enter Country Code"
                        value="<?= $com->country_code ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo ">Zip Code</label>
                      <input type="text" name="zip_code" class="form-control purchaseselects"  placeholder="enter zip Code"
                        value="<?= $com->zip_code ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo ">Phone</label>
                      <input type="text" name="mobile_number" class="form-control purchaseselects"  placeholder="enter phone"
                        value="<?= $com->mobile_number ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo">VAT Number</label>
                      <input type="text" name="vat_number" class="form-control purchaseselects"  placeholder="enter vat number"
                        value="<?= $com->vat_number ?>">
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="emailpro">Company Information Format (PDF and HTML)</label>
                      <textarea class="textdesc" rows="4"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p>
                      <a href="#" class="" data-to="company_info_format">{company_name}</a>
                      <a href="#" class="" data-to="company_info_format">{address}</a>,
                      <a href="#" class="" data-to="company_info_format">{city}</a>,
                      <a href="#" class="" data-to="company_info_format">{state}</a>,
                      <a href="#" class="" data-to="company_info_format">{zip_code}</a>,
                      <a href="#" class="" data-to="company_info_format">{country_code}</a>,
                      <a href="#" class="" data-to="company_info_format">{phone}</a>,
                      <a href="#" class="" data-to="company_info_format">{vat_number}</a>,
                      <a href="#" class="" data-to="company_info_format">{vat_number_with_label}</a>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
        <!--Localization-->
        <div id="Localization" class="tabcontent1 ps-0" style="display:none">

          <div class="accordion custom-accordionwithicon-plus" id="accordionWithplusicon">
            <form id="localization_form" action="<?= site_url('setup/save-setting/localization') ?>"
              onsubmit="saveSetting(this,event)">
              <input type="hidden" name="id" value="<?= $local->id ?>">
              <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>">
              <div class="panel-body1" style="margin-top: -10px;">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp purch-drop">
                      <label class="purchaseinfo mb-1">Date Format</label>
                      <select name="date_format" class="form-control selectpicker">
                        <option>m-d-Y</option>
                        <option>d-m-Y</option>
                        <option>d/m/Y</option>
                        <option>m-d-Y</option>
                        <option>m.d.Y</option>
                        <option>m/d/Y</option>
                        <option>Y-m-d</option>
                        <option>d.m.Y</option>
                      </select>
                      <script>
                        $('select[name="date_format"]').selectpicker('val', '<?= $local->date_format ?>')
                      </script>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp purch-drop">
                      <label class="purchaseinfo mb-1">Time Format</label>
                      <select name="time_format" class="form-control selectpicker ">
                        <option>24 hours</option>
                        <option>12 hours</option>
                      </select>
                      <script>
                        $('select[name="time_format"]').selectpicker('val', '<?= $local->time_format ?>')
                      </script>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp purch-drop">
                      <label class="purchaseinfo mb-1">Default Timezone</label>
                      <select name="default_timezone" class="form-control selectpicker " data-live-search="true">
                        <option>Europe/Andorra</option>
                        <option>Europe/Astrakhan</option>
                        <option>Europe/Belgrade</option>
                      </select>
                      <script>
                        $('select[name="default_timezone"]').selectpicker('val', '<?= $local->default_timezone ?>')
                      </script>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp purch-drop">
                      <label class="purchaseinfo mb-1">Default Language</label>
                      <select name="default_timezone" class="form-control selectpicker " data-live-search="true">
                        <option>English</option>
                        <option>Hindi</option>
                        <option>France</option>
                      </select>
                      <!-- <select name="default_language" class="form-control selectpicker " data-live-search="true">
                        <?php if (!empty($langs)): ?>
                          <?php foreach ($langs as $lang): ?>
                            <option value="<?= $lang->id ?>">
                              <?= $lang->name ?>
                            </option>
                          <?php endforeach ?>
                        <?php endif ?>
                      </select> -->
                      <script>
                        $('select[name="default_language"]').selectpicker('val', '<?= $local->default_language ?>')
                      </script>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Disable Language</label><br>

                      <div class="checkbox ml-1 ml-1">
                        <input type="radio" class="form-check-input lbl-space1" name="disable_language" value="1"
                          <?= ($local->disable_language) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin lbl-space1" name="disable_language"
                          value="0" <?= ($local->disable_language) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">
                        <i class="fa-regular fa-circle-question" data-bs-toggle="tooltip"
                          data-bs-title="if this option is enabled and the default language of the system is English while the client has set their language to French, the PDF documents will be generated in the language chosen by the client"></i>
                        Output client PDF documents from admin area in client language </label><br>
                      <div class="checkbox ml-1 ml-1">
                        <input type="radio" class="form-check-input lbl-space1" name="output_client_pdf" value="1"
                          <?= ($local->output_client_pdf) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin lbl-space1" name="output_client_pdf"
                          value="0" <?= ($local->output_client_pdf) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!--Finance-->
        <div id="Finance" class="tabcontent1 ps-0" style="display:none;">
          <div class="accordion custom-accordionwithicon-plus" id="accordionWithplusicon">
            <div class="panel-body1">
              <div class="invtencol ">
                <!-- <div class="row">
                  <div class="col-md-12 ">
                    <div class="tab-container  invsectabhdr tab-top2">
                      <ul id="tabList" class="desktop ">
                        <li>
                          <div class="child invchildmtmb tab-margin ">
                            <button class="tablinks tb-linksmb active"
                              onclick="opentab1(event, 'tab10tab1')">General</button>
                          </div>
                        </li>
                        <li>
                          <div class="child invchildmtmb tab-padding">
                            <button class="tablinks tb-linksmb" onclick="opentab1(event, 'tab10tab2')">Invoices</button>
                          </div>
                        </li>
                        <li>
                          <div class="child invchildmtmb tab-padding">
                            <button class="tablinks tb-linksmb" onclick="opentab1(event, 'tab10tab3')">Credit
                              Notes</button>
                          </div>
                        </li>
                        <li>
                          <div class="child invchildmtmb tab-padding">
                            <button class="tablinks tb-linksmb" onclick="opentab1(event, 'tab10tab4')">Estimates</button>
                          </div>
                        </li>
                        <li>
                          <div class="child invchildmtmb tab-padding">
                            <button class="tablinks tb-linksmb" onclick="opentab1(event, 'tab10tab5')">Proposals</button>
                          </div>
                        </li>
                      </ul>
                      <div class="tab-arrow lefts" onclick="scrollTabs('left')">
                        <i class="bi bi-chevron-left arrowfont"></i>
                      </div>
                      <div class="tab-arrow rights" onclick="scrollTabs('right')">
                        <i class="bi bi-chevron-right arrowfont "></i>
                      </div>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide " data-bs-interval="false"
                      style="height:54px; ">
                      <div class="carousel-inner scroll-images">
                        <div class="carousel-item active" style="text-align: center;">
                          <div class="container">
                            <div class="child mb-0" style="height:auto">
                              <button class="tablinks active tabresact" style="width:100%"
                                onclick="opentab1(event, 'tab10tab1')">General</button>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                          <div class="container">
                            <div class="child mb-0" style="height:auto;">
                              <button class="tablinks tabresact" style="width:100%"
                                onclick="opentab1(event, 'tab10tab2')">Invoices</button>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                          <div class="container">
                            <div class="child mb-0" style="height:auto;">
                              <button class="tablinks tabresact" style="width:100%"
                                onclick="opentab1(event, 'tab10tab3')">Credit
                                Notes</button>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                          <div class="container">
                            <div class="child mb-0" style="height:auto;">
                              <button class="tablinks tabresact" style="width:100%"
                                onclick="opentab1(event, 'tab10tab4')">Estimates</button>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                          <div class="container">
                            <div class="child mb-0" style="height:auto;">
                              <button class="tablinks tabresact" style="width:100%"
                                onclick="opentab1(event, 'tab10tab5')">Proposal</button>
                            </div>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                          data-bs-slide="prev" style="margin-top:10px">
                          <i class="bi bi-chevron-left icon" style="color:black;font-weight: bold;"></i>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                          data-bs-slide="next" style="margin-top:10px">
                          <i class="bi bi-chevron-right icon" style="color:black;font-weight:bold"></i>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                    <hr class="fileline linemrg">
                  </div>
                </div> -->
                <div class="accordion-item borsin borrsin">
                  <h2 class="accordion-header" id="accordionwithplusExample21">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accor_plusExamplecollapse21" aria-expanded="false"
                      aria-controls="accor_plusExamplecollapse21">
                      General
                    </button>
                  </h2>
                  <div id="accor_plusExamplecollapse21" class="accordion-collapse collapse"
                    aria-labelledby="accordionwithplusExample21" data-bs-parent="#accordionWithplusicon">
                    <div class="accordion-body">
                      <div class="pl-1">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp" style='margin-bottom: 0px !important;'>
                              <h4 class="h4-text mbtsin"></h4>
                              General Settings
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr newpaddinleft mttsin">
                        <div class="row newpaddinleft">
                          <div class="col-md-6">
                            <div class="purchasegrp purch-drop">
                              <label class="purchaseinfo mb-1">Decimal Separator</label>
                              <select name="decimal_separator" class="form-control selectpicker ">
                                <option>,</option>
                                <option>.</option>
                              </select>
                              <script>
                                $('select[name="decimal_separator"]').selectpicker('val', '<?= $fin->decimal_separator ?>')
                              </script>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="purchasegrp purch-drop">
                              <label class="purchaseinfo mb-1">Thousand Separator</label>
                              <select name="thousand_separator" class="form-control selectpicker ">
                                <option>,</option>
                                <option>.</option>
                                <option>'apostrophe</option>
                                <option>none</option>
                                <option>space</option>
                              </select>
                              <script>
                                $('select[name="thousand_separator"]').selectpicker('val', '<?= $fin->thousand_separator ?>')
                              </script>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr newpaddinleft">
                        <div class="row newpaddinleft">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo "> <!--icon-1 class name -->
                                <i class="fa-regular fa-circle-question " data-bs-toggle="tooltip"
                                  data-bs-title="Invoices, Estimates, Proposals" data-original-title="" title=""></i>
                                Number padding zero's for prefix formats
                                <br />
                                <br />
                                <small style="font-size: 13px;">eq. If this value is 3 the
                                  number will be formatted: 005 or 025</small></label><br>
                              <input type="number" name="number_padding_with_zero"
                                value="<?= $fin->number_padding_with_zero ?>" class="form-control purchaseselects">
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr newpaddinleft">
                        <div class="row newpaddinleft">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                <i class="fa-regular fa-circle-question" data-bs-toggle="tooltip"
                                  data-bs-title="Applicable for: Estimates, invoices, proposal" data-original-title=""
                                  title=""></i>
                                Automatically assign logged in staff as sale agent</label><br>
                              <div class="checkbox ml-1 ml-1">
                                <input type="radio" class="form-check-input " name="assign_staff_as_sales_agent"
                                  value="1" <?= ($fin->assign_staff_as_sales_agent) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="assign_staff_as_sales_agent" value="0" <?= ($fin->assign_staff_as_sales_agent) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr newpaddinleft">
                        <div class="row newpaddinleft">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Show TAX per item</label><br>
                              <div class="checkbox ml-1 ml-1">
                                <input type="radio" class="form-check-input " name="show_tax_per_item" value="1"
                                  <?= ($fin->show_tax_per_item) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin " name="show_tax_per_item"
                                  value="0" <?= ($fin->show_tax_per_item) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr newpaddinleft">
                        <div class="row newpaddinleft">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                <i class="fa-regular fa-circle-question" data-bs-toggle="tooltip"
                                  data-bs-title="eq. Item TAX 15% will be shown as 15% without the tax name (Not applied if multiple taxes with the same name and tax percent found for item)"
                                  data-original-title="" title=""></i>
                                Remove the tax name from item table row</label><br>
                              <div class="checkbox ml-1 ml-1">
                                <input type="radio" class="form-check-input " name="remove_tax_name_item_table_row"
                                  value="1" <?= ($fin->remove_tax_name_item_table_row) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="remove_tax_name_item_table_row" value="0"
                                  <?= ($fin->remove_tax_name_item_table_row) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr newpaddinleft">
                        <div class="row newpaddinleft">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Exclude currency symbol from items table Amount</label><br>
                              <div class="checkbox ml-1 ml-1">
                                <input type="radio" class="form-check-input " name="exclude_currency_symbol_item_table"
                                  value="1" <?= ($fin->exclude_currency_symbol_item_table) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="exclude_currency_symbol_item_table" value="0"
                                  <?= ($fin->exclude_currency_symbol_item_table) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr newpaddinleft">
                        <div class="row newpaddinleft">
                          <div class="col-md-12">
                            <div class="purchasegrp purch-drop">
                              <label class="purchaseinfo mb-1">Default Tax</label>
                              <select name="default_tax" class="form-control selectpicker ">
                                <option value="0" selected>No tax</option>
                                <?php if (!empty($taxes)): ?>
                                  <?php foreach ($taxes as $tax): ?>
                                    <option value="<?= $tax->id ?>"
                                      data-subtext="<?= $tax->name ?>|<?= $tax->percentage ?>">
                                      <?= $tax->percentage ?>%
                                    </option>
                                  <?php endforeach ?>
                                <?php endif ?>
                              </select>
                              <script>
                                $('select[name="default_tax"]').selectpicker('val', '<?= $fin->default_tax ?>')
                              </script>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr newpaddinleft">
                        <div class="row newpaddinleft">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Remove decimals on numbers/money with zero decimals (2.00 will
                                become 2, 2.25 will stay 2.25)</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="remove_decimals" value="1"
                                  <?= ($fin->remove_decimals) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin " name="remove_decimals"
                                  value="0" <?= ($fin->remove_decimals) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline newquualmar newpaddinleft">
                        <div class="row newpaddinleft">
                          <div class="col-md-12">
                            <h5 class="h4text">Amount to words</h5>
                            <p>Output total amount to words in invoice/estimate/proposal</p>
                          </div>
                        </div>
                        <div class="row en-margin-top">
                          <div class="col-md-6">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Enable</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="total_amount_in_words" value="1"
                                  <?= ($fin->total_amount_in_words) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin " name="total_amount_in_words"
                                  value="0" <?= ($fin->total_amount_in_words) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Number words into lowercase</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="number_words_lowercase" value="1"
                                  <?= ($fin->number_words_lowercase) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin " name="number_words_lowercase"
                                  value="0" <?= ($fin->number_words_lowercase) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item borsin borzsin">
                  <h2 class="accordion-header" id="accordionwithplusExample22">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accor_plusExamplecollapse22" aria-expanded="false"
                      aria-controls="accor_plusExamplecollapse22">
                      Invoice
                    </button>
                  </h2>
                  <div id="accor_plusExamplecollapse22" class="accordion-collapse collapse"
                    aria-labelledby="accordionwithplusExample22" data-bs-parent="#accordionWithplusicon">
                    <div class="accordion-body">
                      <div class="cnt-padding">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo ">Invoice Number Prefix</label>
                              <input type="text" name="invoice_prefix" value="<?= $fin->invoice_prefix ?>"
                                class="form-control purchaseselects">
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo "><i class="fa-regular fa-circle-question  tw-mt-0.5 tw-mr-1"
                                  data-bs-toggle="tooltip"
                                  data-bs-title="Set this field to 1 if you want to start from beginning"
                                  data-original-title="" title=""></i>
                                Next Invoice Number
                              </label>
                              <input type="number" name="invoice_next_number" value="<?= $fin->invoice_next_number ?>"
                                class="form-control purchaseselects">
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo "><i class="fa-regular fa-circle-question  tw-mt-0.5 tw-mr-1"
                                  data-bs-toggle="tooltip" data-bs-title="Set zero to avoid calculation"
                                  data-original-title="" title=""></i>
                                Invoice due after (days)</label>
                              <input type="text" name="invoice_due_days" value="<?= $fin->invoice_due_days ?>"
                                class="form-control purchaseselects" value="30">
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Allow staff members to view invoices where they are assigned to</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="allow_staff_view_invoice" value="1"
                                  <?= ($fin->allow_staff_view_invoice) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin " name="allow_staff_view_invoice"
                                  value="0" <?= ($fin->allow_staff_view_invoice) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Require client to be logged in to view invoice</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="client_logged_to_view_invoice"
                                  value="1" <?= ($fin->client_logged_to_view_invoice) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="client_logged_to_view_invoice" value="0"
                                  <?= ($fin->client_logged_to_view_invoice) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Delete invoice allowed only on last invoice</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="delete_invoice_allowed" value="1"
                                  <?= ($fin->delete_invoice_allowed) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin " name="delete_invoice_allowed"
                                  value="0" <?= ($fin->delete_invoice_allowed) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">

                              <label class="purchaseinfo "><i class="fa-regular fa-circle-question  tw-mt-0.5 tw-mr-1"
                                  data-bs-toggle="tooltip"
                                  data-bs-title="Do you want to decrement the invoice number when the last invoice is deleted? eq. If is set this option to YES and before invoice delete the next invoice number is 15 the next invoice number will decrement to 14. If is set to NO the number will remain to 15.  If you have setup delete only on last invoice to NO you should set this option to NO too to keep the next invoice number not decremented."
                                  data-original-title="" title=""></i>
                                Decrement invoice number on delete</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="decrement_invoice_number" value="1"
                                  <?= ($fin->decrement_invoice_number) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin " name="decrement_invoice_number"
                                  value="0" <?= ($fin->decrement_invoice_number) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Exclude invoices with draft status from customers
                                area</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="exclude_invoice_draft" value="1"
                                  <?= ($fin->exclude_invoice_draft) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin " name="exclude_invoice_draft"
                                  value="0" <?= ($fin->exclude_invoice_draft) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Show Sale Agent On Invoice</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="show_sales_agent_on_invoice"
                                  value="1" <?= ($fin->show_sales_agent_on_invoice) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="show_sales_agent_on_invoice" value="0" <?= ($fin->show_sales_agent_on_invoice) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Show Project Name On Invoice</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="show_project_name_on_invoice"
                                  value="1" <?= ($fin->show_project_name_on_invoice) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="show_project_name_on_invoice" value="0" <?= ($fin->show_project_name_on_invoice) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Show Total Paid On Invoice</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="show_total_paid_on_invoice"
                                  value="1" <?= ($fin->show_total_paid_on_invoice) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="show_total_paid_on_invoice" value="0" <?= ($fin->show_total_paid_on_invoice) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Show Credits Applied On Invoice</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="show_credits_applied_on_invoice"
                                  value="1" <?= ($fin->show_credits_applied_on_invoice) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="show_credits_applied_on_invoice" value="0"
                                  <?= ($fin->show_credits_applied_on_invoice) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Show Amount Due On Invoice</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="show_amount_due_on_invoice"
                                  value="1" <?= ($fin->show_amount_due_on_invoice) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="show_amount_due_on_invoice" value="0" <?= ($fin->show_amount_due_on_invoice) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Attach invoice PDF when sending payment receipt to
                                email</label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="attach_invoice_payment_receipt"
                                  value="1" <?= ($fin->attach_invoice_payment_receipt) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="attach_invoice_payment_receipt" value="0"
                                  <?= ($fin->attach_invoice_payment_receipt) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Invoice Number Format
                              </label><br>
                              <div class="checkbox  boxpd">
                                <input type="radio" class="form-check-input " name="invoice_number_format"
                                  value="000001" <?= ($fin->number_words_lowercase == '000001') ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">Number
                                  Based (000001) </label>
                              </div>
                              <div class="checkbox boxpd">
                                <input type="radio" class="form-check-input" name="invoice_number_format"
                                  value="YYYY/000001" <?= ($fin->number_words_lowercase == 'YYYY/000001') ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">Year
                                  Based (YYYY/000001) </label>
                              </div>
                              <div class="checkbox boxpd">
                                <input type="radio" class="form-check-input " name="invoice_number_format"
                                  value="000001-YY" <?= ($fin->number_words_lowercase == '000001-YY') ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">000001-YY
                                </label>
                              </div>
                              <div class="checkbox boxpd">
                                <input type="radio" class="form-check-input " name="invoice_number_format"
                                  value="000001/MM/YYYY" <?= ($fin->number_words_lowercase == '000001/MM/YYYY') ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">000001/MM/YYYY</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="emailpro ">Predefined Client Note</label>
                              <textarea class="textdesc" name="invoice_client_note"
                                rows="4"><?= $fin->invoice_client_note ?></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="emailpro ">Predefined Terms &amp; Conditions</label>
                              <textarea class="textdesc" name="invoice_terms_conditions"
                                rows="4"><?= $fin->invoice_terms_conditions ?></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item borsin borzsin">
                  <h2 class="accordion-header" id="accordionwithplusExample23">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accor_plusExamplecollapse23" aria-expanded="false"
                      aria-controls="accor_plusExamplecollapse23">
                      Credit Notes
                    </button>
                  </h2>
                  <div id="accor_plusExamplecollapse23" class="accordion-collapse collapse "
                    aria-labelledby="accordionwithplusExample23" data-bs-parent="#accordionWithplusicon">
                    <div class="accordion-body">
                      <div class="cnt-padding">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo ">Credit Note Number Prefix</label>
                              <input type="text" name="creditnote_prefix" value="<?= $fin->creditnote_prefix ?>"
                                class="form-control purchaseselects">
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo ">
                                <i class="fa-regular fa-circle-question  tw-mt-0.5 tw-mr-1" data-bs-toggle="tooltip"
                                  data-bs-title="Set this field to 1 if you want to start from beginning"
                                  data-original-title="" title=""></i>
                                Next Credit Note Number
                              </label>
                              <input type="number" name="creditnote_next_number"
                                value="<?= $fin->creditnote_next_number ?>" class="form-control purchaseselects">
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Credit Note Number Format
                              </label><br>
                              <div class="checkbox boxpd">
                                <input type="radio" class="form-check-input " name="creditnote_number_format"
                                  value="000001" <?= ($fin->number_words_lowercase == '000001') ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">Number
                                  Based (000001) </label>
                              </div>
                              <div class="checkbox boxpd">
                                <input type="radio" class="form-check-input  " name="creditnote_number_format"
                                  value="YYYY/000001" <?= ($fin->number_words_lowercase == 'YYYY/000001') ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">Year
                                  Based (YYYY/000001) </label>
                              </div>
                              <div class="checkbox boxpd">
                                <input type="radio" class="form-check-input " name="creditnote_number_format"
                                  value="000001-YY" <?= ($fin->number_words_lowercase == '000001-YY') ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">000001-YY
                                </label>
                              </div>
                              <div class="checkbox boxpd">
                                <input type="radio" class="form-check-input  " name="creditnote_number_format"
                                  value="000001/MM/YYYY" <?= ($fin->number_words_lowercase == '000001/MM/YYYY') ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">000001/MM/YYYY</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              <i class="fa-regular fa-circle-question tw-mt-0.5 tw-mr-1" data-bs-toggle="tooltip"
                                data-bs-title="Number will be decremented only if is last credit note created."></i>
                              Decrement credit note number on delete.
                            </label><br>
                            <div class="checkbox ml-1">
                              <input type="radio" class="form-check-input " name="decrement_creditnote_number" value="1"
                                <?= ($fin->decrement_creditnote_number) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin "
                                name="decrement_creditnote_number" value="0" <?= ($fin->decrement_creditnote_number) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Show Project Name On Credit Note
                            </label><br>
                            <div class="checkbox ml-1">
                              <input type="radio" class="form-check-input " name="show_projectname_on_creditnote"
                                value="1" <?= ($fin->show_projectname_on_creditnote) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin "
                                name="show_projectname_on_creditnote" value="0"
                                <?= ($fin->show_projectname_on_creditnote) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="emailpro ">Predefined Client Note</label>
                            <textarea class="textdesc  " name="creditnote_client_note"
                              rows="4"><?= $fin->creditnote_client_note ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="emailpro">Predefined Terms &amp; Conditions</label>
                            <textarea class="textdesc  " name="creditnote_terms_conditions"
                              rows="4"><?= $fin->creditnote_terms_conditions ?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item borsin borzsin">
                  <h2 class="accordion-header" id="accordionwithplusExample24">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accor_plusExamplecollapse24" aria-expanded="false"
                      aria-controls="accor_plusExamplecollapse24">
                      Estimates
                    </button>
                  </h2>
                  <div id="accor_plusExamplecollapse24" class="accordion-collapse collapse"
                    aria-labelledby="accordionwithplusExample24" data-bs-parent="#accordionWithplusicon">
                    <div class="accordion-body">
                      <div class="cnt-padding">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo ">Estimate Number Prefix</label>
                              <input type="text" name="estimate_prefix" value="<?= $fin->estimate_prefix ?>"
                                class="form-control purchaseselects">
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo">
                                <i class="fa-regular fa-circle-question  tw-mt-0.5 tw-mr-1" data-bs-toggle="tooltip"
                                  data-bs-title="Set this field to 1 if you want to start from beginning"
                                  data-original-title="" title=""></i>
                                Next estimate Number
                              </label>
                              <input type="number" name="estimate_next_number" value="<?= $fin->estimate_next_number ?>"
                                class="form-control purchaseselects">
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo ">
                                <i class="fa-regular fa-circle-question  tw-mt-0.5 tw-mr-1" data-bs-toggle="tooltip"
                                  data-bs-title="Set zero to avoid calculation" data-original-title="" title=""></i>
                                Estimate Due After (days)
                              </label>
                              <input type="text" name="estimate_due_days" value="<?= $fin->estimate_due_days ?>"
                                class="form-control purchaseselects">
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Delete estimate allowed only on last invoice
                              </label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="delete_estimate" value="1"
                                  <?= ($fin->delete_estimate) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                                </label>
                                <input type="radio" class="form-check-input lbl-margin " name="delete_estimate"
                                  value="0" <?= ($fin->delete_estimate) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">

                                <i class="fa-regular fa-circle-question  tw-mt-0.5 tw-mr-1" data-bs-toggle="tooltip"
                                  data-bs-title="Do you want to decrement the estimate number when the last estimate is deleted? eq. If is set this option to YES and before estimate delete the next estimate number is 15 the next estimate number will decrement to 14.If is set to NO the number will remain to 15. If you have setup delete only on last estimate to NO you should set this option to NO too to keep the next estimate number not decremented."
                                  data-original-title="" title=""></i>
                                Decrement estimate number on delete
                              </label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="decrement_estimate_number" value="1"
                                  <?= ($fin->decrement_estimate_number) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                                </label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="decrement_estimate_number" value="0" <?= ($fin->decrement_estimate_number) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Allow staff members to view estimates where they are assigned to
                              </label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="allow_staff_to_view_estimate"
                                  value="1" <?= ($fin->allow_staff_to_view_estimate) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                                </label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="allow_staff_to_view_estimate" value="0" <?= ($fin->allow_staff_to_view_estimate) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Require client to be logged in to view estimate
                              </label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="client_login_to_view_estimate"
                                  value="1" <?= ($fin->client_login_to_view_estimate) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                                </label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="client_login_to_view_estimate" value="0"
                                  <?= ($fin->client_login_to_view_estimate) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Show Sale Agent On Estimate
                              </label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="show_salesagent_on_estimate"
                                  value="1" <?= ($fin->show_salesagent_on_estimate) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                                </label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="show_salesagent_on_estimate" value="0" <?= ($fin->show_salesagent_on_estimate) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Show Project Name On Estimate
                              </label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="show_projectname_on_estimate"
                                  value="1" <?= ($fin->show_projectname_on_estimate) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                                </label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="show_projectname_on_estimate" value="0" <?= ($fin->show_projectname_on_estimate) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Auto convert the estimate to invoice after client accept
                              </label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="auto_convert_estimate_to_invoice"
                                  value="1" <?= ($fin->auto_convert_estimate_to_invoice) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                                </label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="auto_convert_estimate_to_invoice" value="0"
                                  <?= ($fin->auto_convert_estimate_to_invoice) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Exclude estimates with draft status from customers area
                              </label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="exclude_estimate_draft" value="1"
                                  <?= ($fin->exclude_estimate_draft) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                                </label>
                                <input type="radio" class="form-check-input lbl-margin " name="exclude_estimate_draft"
                                  value="0" <?= ($fin->exclude_estimate_draft) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Estimate Number Format
                              </label><br>
                              <div class="checkbox boxpd">
                                <input type="radio" class="form-check-input " name="estimate_number_format"
                                  value="000001" <?= ($fin->number_words_lowercase == '000001') ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">Number
                                  Based (000001) </label>
                              </div>
                              <div class="checkbox boxpd">
                                <input type="radio" class="form-check-input  " name="estimate_number_format"
                                  value="YYYY/000001" <?= ($fin->number_words_lowercase == 'YYYY/000001') ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">Year
                                  Based (YYYY/000001) </label>
                              </div>
                              <div class="checkbox boxpd">
                                <input type="radio" class="form-check-input " name="estimate_number_format"
                                  value="000001-YY" <?= ($fin->number_words_lowercase == '000001-YY') ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">000001-YY
                                </label>
                              </div>
                              <div class="checkbox boxpd">
                                <input type="radio" class="form-check-input  " name="estimate_number_format"
                                  value="000001/MM/YYYY" <?= ($fin->number_words_lowercase == '000001/MM/YYYY') ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">000001/MM/YYYY</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo ">Pipeline limit per status</label>
                              <input type="text" name="pipeline_limit" value="<?= $fin->pipeline_limit ?>"
                                class="form-control purchaseselects">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">Default pipeline sort</label>
                              <select name="default_pipeline_sort" class="form-control selectpicker ">
                                <option>Pipleine Order</option>
                                <option>Date Created</option>
                                <option>Estimate Date</option>
                                <option>Expiry Date</option>
                              </select>
                              <script>
                                $('select[name="default_pipeline_sort"]').selectpicker('val', '<?= $fin->default_pipeline_sort ?>')
                              </script>
                            </div>
                          </div>
                          <div class="col-md-6 mtop text-right mtop1">
                            <div class="checkbox ">
                              <input type="radio" class="form-check-input " name="estimate_ordering" value="ASC"
                                <?= ($fin->estimate_ordering == 'ASC') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Ascending
                              </label>
                              <input type="radio" class="form-check-input lbl-margin " name="estimate_ordering"
                                value="DESC" <?= ($fin->estimate_ordering == 'DESC') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Descending</label>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="emailpro ">Predefined Client Note</label>
                              <textarea class="textdesc  " name="estimate_client_note"
                                rows="4"><?= $fin->estimate_client_note ?></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="emailpro">Predefined Terms &amp; Conditions</label>
                              <textarea class="textdesc  " name="estimate_terms_conditions"
                                rows="4"><?= $fin->estimate_terms_conditions ?></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item borsin borzsin">
                  <h2 class="accordion-header" id="accordionwithplusExample25">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#accor_plusExamplecollapse25" aria-expanded="false"
                      aria-controls="accor_plusExamplecollapse25">
                      Proposals
                    </button>
                  </h2>
                  <div id="accor_plusExamplecollapse25" class="accordion-collapse collapse "
                    aria-labelledby="accordionwithplusExample25" data-bs-parent="#accordionWithplusicon">
                    <div class="accordion-body">
                      <div class="cnt-padding">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo">Proposal Number Prefix</label>
                              <input type="text" name="proposal_prefix" value="<?= $fin->proposal_prefix ?>"
                                class="form-control purchaseselects" text="PRO -">
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo">
                                <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1"
                                  data-bs-toggle="tooltip" data-bs-title="Set zero to avoid calculation"
                                  data-original-title="" title=""></i>
                                Proposal Due After (days)
                              </label>
                              <input type="number" name="proposal_due_days" value="<?= $fin->proposal_due_days ?>"
                                class="form-control purchaseselects">
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo ">Pipeline limit per status</label>
                              <input type="text" name="proposal_pipeline_limit" class="form-control purchaseselects">
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">Default pipeline sort</label>
                              <select name="proposal_pipeline_sort" class="form-control selectpicker purchaseselects ">
                                <option>Pipleine Order</option>
                                <option>Date Created</option>
                                <option>Estimate Date</option>
                                <option>Expiry Date</option>
                              </select>
                              <script>
                                $('select[name="proposal_pipeline_sort"]').selectpicker('val', '<?= $fin->proposal_pipeline_sort ?>')
                              </script>
                            </div>
                          </div>
                          <div class="col-md-6 mtop text-right mtop1">
                            <div class="checkbox ">
                              <input type="radio" class="form-check-input " name="proposal_ordering" value="ASC"
                                <?= ($fin->proposal_ordering == 'ASC') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Ascending
                              </label>
                              <input type="radio" class="form-check-input lbl-margin " name="proposal_ordering"
                                value="DESC" <?= ($fin->proposal_ordering == 'DESC') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Descending</label>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Show Project Name On Proposal
                              </label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="show_projectname_on_proposal"
                                  value="1" <?= ($fin->show_projectname_on_proposal) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                                </label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="show_projectname_on_proposal" value="0" <?= ($fin->show_projectname_on_proposal) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Exclude proposals with draft status from customers area
                              </label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="exclude_proposal_draft" value="1"
                                  <?= ($fin->exclude_proposal_draft) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                                </label>
                                <input type="radio" class="form-check-input lbl-margin " name="exclude_proposal_draft"
                                  value="0" <?= ($fin->exclude_proposal_draft) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrp">
                              <label class="purchaseinfo mb-1">
                                Allow staff members to view proposals where they are assigned to
                              </label><br>
                              <div class="checkbox ml-1">
                                <input type="radio" class="form-check-input " name="allow_staff_view_proposals"
                                  value="1" <?= ($fin->allow_staff_view_proposals) ? 'checked' : '' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                                </label>
                                <input type="radio" class="form-check-input lbl-margin "
                                  name="allow_staff_view_proposals" value="0" <?= ($fin->allow_staff_view_proposals) ? '' : 'checked' ?>>
                                <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr class="fileline equalspaceforhr">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="purchasegrpmb-1">
                              <label class="emailpro ">Proposal Info Format (PDF and HTML)</label>
                              <textarea class="textdesc  " rows="4"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <p>
                              <a href="#" class="settings-textarea-merge-field"
                                data-to="proposal_info_format">{proposal_to}</a>,
                              <a href="#" class="settings-textarea-merge-field"
                                data-to="proposal_info_format">{address}</a>,
                              <a href="#" class="settings-textarea-merge-field"
                                data-to="proposal_info_format">{city}</a>,
                              <a href="#" class="settings-textarea-merge-field"
                                data-to="proposal_info_format">{state}</a>,
                              <a href="#" class="settings-textarea-merge-field"
                                data-to="proposal_info_format">{zip_code}</a>,
                              <a href="#" class="settings-textarea-merge-field"
                                data-to="proposal_info_format">{country_code}</a>,
                              <a href="#" class="settings-textarea-merge-field"
                                data-to="proposal_info_format">{country_name}</a>,
                              <a href="#" class="settings-textarea-merge-field"
                                data-to="proposal_info_format">{phone}</a>,
                              <a href="#" class="settings-textarea-merge-field"
                                data-to="proposal_info_format">{email}</a>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <form id="finance_form" action="<?= site_url('setup/save-setting/finance') ?>"
                  onsubmit="saveSetting(this,event)">
                  <input type="hidden" name="id" value="<?= $fin->id ?>">
                  <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>"> -->
                <!--Finance General-->
                <!-- <div class="tabcontent" id="tab10tab1" style="display: block;">
                    <div class="pl-4">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <h4 class="h4-text">General</h4>
                            General Settings
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="purchasegrp purch-drop">
                            <label class="purchaseinfo mb-1">Decimal Separator</label>
                            <select name="decimal_separator" class="form-control selectpicker ">
                              <option>,</option>
                              <option>.</option>
                            </select>
                            <script>
                              $('select[name="decimal_separator"]').selectpicker('val', '<?= $fin->decimal_separator ?>')
                            </script>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="purchasegrp purch-drop">
                            <label class="purchaseinfo mb-1">Thousand Separator</label>
                            <select name="thousand_separator" class="form-control selectpicker ">
                              <option>,</option>
                              <option>.</option>
                              <option>'apostrophe</option>
                              <option>none</option>
                              <option>space</option>
                            </select>
                            <script>
                              $('select[name="thousand_separator"]').selectpicker('val', '<?= $fin->thousand_separator ?>')
                            </script>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo "> <!--icon-1 class name -->
                <!-- <i class="fa-regular fa-circle-question icon1 pull-left tw-mt-0.5 tw-mr-1"
                                data-bs-toggle="tooltip" data-bs-title="Invoices, Estimates, Proposals"
                                data-original-title="" title=""></i>
                              Number padding zero's for prefix formats<br>
                              <small style="font-size: 13px;">eq. If this value is 3 the
                                number will be formatted: 005 or 025</small></label><br>
                            <input type="number" name="number_padding_with_zero"
                              value="<?= $fin->number_padding_with_zero ?>" class="form-control purchaseselects">
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              <i class="fa-regular fa-circle-question" data-bs-toggle="tooltip"
                                data-bs-title="Applicable for: Estimates, invoices, proposal" data-original-title=""
                                title=""></i>
                              Automatically assign logged in staff as sale agent</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="assign_staff_as_sales_agent" value="1"
                                <?= ($fin->assign_staff_as_sales_agent) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="assign_staff_as_sales_agent"
                                value="0" <?= ($fin->assign_staff_as_sales_agent) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Show TAX per item</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="show_tax_per_item" value="1"
                                <?= ($fin->show_tax_per_item) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="show_tax_per_item" value="0"
                                <?= ($fin->show_tax_per_item) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              <i class="fa-regular fa-circle-question" data-bs-toggle="tooltip"
                                data-bs-title="eq. Item TAX 15% will be shown as 15% without the tax name (Not applied if multiple taxes with the same name and tax percent found for item)"
                                data-original-title="" title=""></i>
                              Remove the tax name from item table row</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="remove_tax_name_item_table_row"
                                value="1" <?= ($fin->remove_tax_name_item_table_row) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin "
                                name="remove_tax_name_item_table_row" value="0" <?= ($fin->remove_tax_name_item_table_row) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Exclude currency symbol from items table Amount</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="exclude_currency_symbol_item_table"
                                value="1" <?= ($fin->exclude_currency_symbol_item_table) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin "
                                name="exclude_currency_symbol_item_table" value="0"
                                <?= ($fin->exclude_currency_symbol_item_table) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp purch-drop">
                            <label class="purchaseinfo mb-1">Default Tax</label>
                            <select name="default_tax" class="form-control selectpicker ">
                              <option value="0" selected>No tax</option>
                              <?php if (!empty($taxes)): ?>
                                <?php foreach ($taxes as $tax): ?>
                                  <option value="<?= $tax->id ?>" data-subtext="<?= $tax->name ?>|<?= $tax->percentage ?>">
                                    <?= $tax->percentage ?>%
                                  </option>
                                <?php endforeach ?>
                              <?php endif ?>
                            </select>
                            <script>
                              $('select[name="default_tax"]').selectpicker('val', '<?= $fin->default_tax ?>')
                            </script>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Remove decimals on numbers/money with zero decimals (2.00 will
                              become 2, 2.25 will stay 2.25)</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="remove_decimals" value="1"
                                <?= ($fin->remove_decimals) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="remove_decimals" value="0"
                                <?= ($fin->remove_decimals) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <h5 class="h4text">Amount to words</h5>
                          <p>Output total amount to words in invoice/estimate/proposal</p>
                        </div>
                      </div>
                      <div class="row en-margin-top">
                        <div class="col-md-6">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Enable</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="total_amount_in_words" value="1"
                                <?= ($fin->total_amount_in_words) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="total_amount_in_words"
                                value="0" <?= ($fin->total_amount_in_words) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Number words into lowercase</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="number_words_lowercase" value="1"
                                <?= ($fin->number_words_lowercase) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="number_words_lowercase"
                                value="0" <?= ($fin->number_words_lowercase) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div> -->
                <!-- </div>
                  </div> -->
                <!--Finance Invoice-->
                <!-- <div id="tab10tab2" class="tabcontent tab2task" style="display: none;">
                    <div class="cnt-padding">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo ">Invoice Number Prefix</label>
                            <input type="text" name="invoice_prefix" value="<?= $fin->invoice_prefix ?>"
                              class="form-control purchaseselects">
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo "><i
                                class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-bs-toggle="tooltip"
                                data-bs-title="Set this field to 1 if you want to start from beginning"
                                data-original-title="" title=""></i>
                              Next Invoice Number
                            </label>
                            <input type="number" name="invoice_next_number" value="<?= $fin->invoice_next_number ?>"
                              class="form-control purchaseselects">
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo "><i
                                class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-bs-toggle="tooltip"
                                data-bs-title="Set zero to avoid calculation" data-original-title="" title=""></i>
                              Invoice due after (days)</label>
                            <input type="text" name="invoice_due_days" value="<?= $fin->invoice_due_days ?>"
                              class="form-control purchaseselects" value="30">
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Allow staff members to view invoices where they are assigned to</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="allow_staff_view_invoice" value="1"
                                <?= ($fin->allow_staff_view_invoice) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="allow_staff_view_invoice"
                                value="0" <?= ($fin->allow_staff_view_invoice) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Require client to be logged in to view invoice</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="client_logged_to_view_invoice" value="1"
                                <?= ($fin->client_logged_to_view_invoice) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin "
                                name="client_logged_to_view_invoice" value="0" <?= ($fin->client_logged_to_view_invoice) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Delete invoice allowed only on last invoice</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="delete_invoice_allowed" value="1"
                                <?= ($fin->delete_invoice_allowed) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="delete_invoice_allowed"
                                value="0" <?= ($fin->delete_invoice_allowed) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              <i class="fa-regular fa-circle-question" data-toggle="tooltip"
                                data-title="Do you want to decrement the invoice number when the last invoice is deleted? eq. If is set this option to YES and before invoice delete the next invoice number is 15 the next invoice number will decrement to 14. If is set to NO the number will remain to 15.  If you have setup delete only on last invoice to NO you should set this option to NO too to keep the next invoice number not decremented."
                                data-original-title="" title=""></i>
                              Decrement invoice number on delete</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="decrement_invoice_number" value="1"
                                <?= ($fin->decrement_invoice_number) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="decrement_invoice_number"
                                value="0" <?= ($fin->decrement_invoice_number) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Exclude invoices with draft status from customers
                              area</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="exclude_invoice_draft" value="1"
                                <?= ($fin->exclude_invoice_draft) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="exclude_invoice_draft"
                                value="0" <?= ($fin->exclude_invoice_draft) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Show Sale Agent On Invoice</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="show_sales_agent_on_invoice" value="1"
                                <?= ($fin->show_sales_agent_on_invoice) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="show_sales_agent_on_invoice"
                                value="0" <?= ($fin->show_sales_agent_on_invoice) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Show Project Name On Invoice</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="show_project_name_on_invoice" value="1"
                                <?= ($fin->show_project_name_on_invoice) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="show_project_name_on_invoice"
                                value="0" <?= ($fin->show_project_name_on_invoice) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Show Total Paid On Invoice</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="show_total_paid_on_invoice" value="1"
                                <?= ($fin->show_total_paid_on_invoice) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="show_total_paid_on_invoice"
                                value="0" <?= ($fin->show_total_paid_on_invoice) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Show Credits Applied On Invoice</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="show_credits_applied_on_invoice"
                                value="1" <?= ($fin->show_credits_applied_on_invoice) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin "
                                name="show_credits_applied_on_invoice" value="0"
                                <?= ($fin->show_credits_applied_on_invoice) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Show Amount Due On Invoice</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="show_amount_due_on_invoice" value="1"
                                <?= ($fin->show_amount_due_on_invoice) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin " name="show_amount_due_on_invoice"
                                value="0" <?= ($fin->show_amount_due_on_invoice) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Attach invoice PDF when sending payment receipt to
                              email</label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="attach_invoice_payment_receipt"
                                value="1" <?= ($fin->attach_invoice_payment_receipt) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                              <input type="radio" class="form-check-input lbl-margin "
                                name="attach_invoice_payment_receipt" value="0" <?= ($fin->attach_invoice_payment_receipt) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Invoice Number Format
                            </label><br>
                            <div class="checkbox boxpd">
                              <input type="radio" class="form-check-input " name="invoice_number_format" value="000001"
                                <?= ($fin->number_words_lowercase == '000001') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Number
                                Based (000001) </label>
                            </div>
                            <div class="checkbox boxpd">
                              <input type="radio" class="form-check-input" name="invoice_number_format"
                                value="YYYY/000001" <?= ($fin->number_words_lowercase == 'YYYY/000001') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Year
                                Based (YYYY/000001) </label>
                            </div>
                            <div class="checkbox boxpd">
                              <input type="radio" class="form-check-input " name="invoice_number_format" value="000001-YY"
                                <?= ($fin->number_words_lowercase == '000001-YY') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">000001-YY
                              </label>
                            </div>
                            <div class="checkbox boxpd">
                              <input type="radio" class="form-check-input " name="invoice_number_format"
                                value="000001/MM/YYYY" <?= ($fin->number_words_lowercase == '000001/MM/YYYY') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">000001/MM/YYYY</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="emailpro ">Predefined Client Note</label>
                            <textarea class="textdesc" name="invoice_client_note"
                              rows="4"><?= $fin->invoice_client_note ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="emailpro ">Predefined Terms &amp; Conditions</label>
                            <textarea class="textdesc" name="invoice_terms_conditions"
                              rows="4"><?= $fin->invoice_terms_conditions ?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                <!--Finance Credit-->
                <!-- <div id="tab10tab3" class="tabcontent tab2task" style="display: none;">
                    <div class="cnt-padding">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo ">Credit Note Number Prefix</label>
                            <input type="text" name="creditnote_prefix" value="<?= $fin->creditnote_prefix ?>"
                              class="form-control purchaseselects">
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo ">
                              <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1"
                                data-bs-toggle="tooltip"
                                data-bs-title="Set this field to 1 if you want to start from beginning"
                                data-original-title="" title=""></i>
                              Next Credit Note Number
                            </label>
                            <input type="number" name="creditnote_next_number" value="<?= $fin->creditnote_next_number ?>"
                              class="form-control purchaseselects">
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Credit Note Number Format
                            </label><br>
                            <div class="checkbox boxpd">
                              <input type="radio" class="form-check-input " name="creditnote_number_format" value="000001"
                                <?= ($fin->number_words_lowercase == '000001') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Number
                                Based (000001) </label>
                            </div>
                            <div class="checkbox boxpd">
                              <input type="radio" class="form-check-input  " name="creditnote_number_format"
                                value="YYYY/000001" <?= ($fin->number_words_lowercase == 'YYYY/000001') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Year
                                Based (YYYY/000001) </label>
                            </div>
                            <div class="checkbox boxpd">
                              <input type="radio" class="form-check-input " name="creditnote_number_format"
                                value="000001-YY" <?= ($fin->number_words_lowercase == '000001-YY') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">000001-YY
                              </label>
                            </div>
                            <div class="checkbox boxpd">
                              <input type="radio" class="form-check-input  " name="creditnote_number_format"
                                value="000001/MM/YYYY" <?= ($fin->number_words_lowercase == '000001/MM/YYYY') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">000001/MM/YYYY</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1" data-bs-toggle="tooltip"
                              data-bs-title="Number will be decremented only if is last credit note created."></i>
                            Decrement credit note number on delete.
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="decrement_creditnote_number" value="1"
                              <?= ($fin->decrement_creditnote_number) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="decrement_creditnote_number"
                              value="0" <?= ($fin->decrement_creditnote_number) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show Project Name On Credit Note
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="show_projectname_on_creditnote" value="1"
                              <?= ($fin->show_projectname_on_creditnote) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="show_projectname_on_creditnote"
                              value="0" <?= ($fin->show_projectname_on_creditnote) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="emailpro ">Predefined Client Note</label>
                          <textarea class="textdesc  " name="creditnote_client_note"
                            rows="4"><?= $fin->creditnote_client_note ?></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="emailpro">Predefined Terms &amp; Conditions</label>
                          <textarea class="textdesc  " name="creditnote_terms_conditions"
                            rows="4"><?= $fin->creditnote_terms_conditions ?></textarea>
                        </div>
                      </div>
                    </div>
                  </div> -->
                <!--Finance Estimate -->
                <!-- <div id="tab10tab4" class="tabcontent tab2task" style="display: none;">
                    <div class="cnt-padding">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo ">Estimate Number Prefix</label>
                            <input type="text" name="estimate_prefix" value="<?= $fin->estimate_prefix ?>"
                              class="form-control purchaseselects">
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo">
                              <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1"
                                data-bs-toggle="tooltip"
                                data-bs-title="Set this field to 1 if you want to start from beginning"
                                data-original-title="" title=""></i>
                              Next estimate Number
                            </label>
                            <input type="number" name="estimate_next_number" value="<?= $fin->estimate_next_number ?>"
                              class="form-control purchaseselects">
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo ">
                              <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1"
                                data-bs-toggle="tooltip" data-bs-title="Set zero to avoid calculation"
                                data-original-title="" title=""></i>
                              Estimate Due After (days)
                            </label>
                            <input type="text" name="estimate_due_days" value="<?= $fin->estimate_due_days ?>"
                              class="form-control purchaseselects">
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Delete estimate allowed only on last invoice
                            </label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="delete_estimate" value="1"
                                <?= ($fin->delete_estimate) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin " name="delete_estimate" value="0"
                                <?= ($fin->delete_estimate) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              <i class="fa-regular fa-circle-question" data-toggle="tooltip"
                                data-title="Do you want to decrement the estimate number when the last estimate is deleted? eq. If is set this option to YES and before estimate delete the next estimate number is 15 the next estimate number will decrement to 14.If is set to NO the number will remain to 15. If you have setup delete only on last estimate to NO you should set this option to NO too to keep the next estimate number not decremented."
                                data-original-title="" title=""></i>
                              Decrement estimate number on delete
                            </label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="decrement_estimate_number" value="1"
                                <?= ($fin->decrement_estimate_number) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin " name="decrement_estimate_number"
                                value="0" <?= ($fin->decrement_estimate_number) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Allow staff members to view estimates where they are assigned to
                            </label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="allow_staff_to_view_estimate" value="1"
                                <?= ($fin->allow_staff_to_view_estimate) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin " name="allow_staff_to_view_estimate"
                                value="0" <?= ($fin->allow_staff_to_view_estimate) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Require client to be logged in to view estimate
                            </label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="client_login_to_view_estimate" value="1"
                                <?= ($fin->client_login_to_view_estimate) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin "
                                name="client_login_to_view_estimate" value="0" <?= ($fin->client_login_to_view_estimate) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Show Sale Agent On Estimate
                            </label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="show_salesagent_on_estimate" value="1"
                                <?= ($fin->show_salesagent_on_estimate) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin " name="show_salesagent_on_estimate"
                                value="0" <?= ($fin->show_salesagent_on_estimate) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Show Project Name On Estimate
                            </label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="show_projectname_on_estimate" value="1"
                                <?= ($fin->show_projectname_on_estimate) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin " name="show_projectname_on_estimate"
                                value="0" <?= ($fin->show_projectname_on_estimate) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Auto convert the estimate to invoice after client accept
                            </label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="auto_convert_estimate_to_invoice"
                                value="1" <?= ($fin->auto_convert_estimate_to_invoice) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin "
                                name="auto_convert_estimate_to_invoice" value="0"
                                <?= ($fin->auto_convert_estimate_to_invoice) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Exclude estimates with draft status from customers area
                            </label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="exclude_estimate_draft" value="1"
                                <?= ($fin->exclude_estimate_draft) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin " name="exclude_estimate_draft"
                                value="0" <?= ($fin->exclude_estimate_draft) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Estimate Number Format
                            </label><br>
                            <div class="checkbox boxpd">
                              <input type="radio" class="form-check-input " name="estimate_number_format" value="000001"
                                <?= ($fin->number_words_lowercase == '000001') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Number
                                Based (000001) </label>
                            </div>
                            <div class="checkbox boxpd">
                              <input type="radio" class="form-check-input  " name="estimate_number_format"
                                value="YYYY/000001" <?= ($fin->number_words_lowercase == 'YYYY/000001') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Year
                                Based (YYYY/000001) </label>
                            </div>
                            <div class="checkbox boxpd">
                              <input type="radio" class="form-check-input " name="estimate_number_format"
                                value="000001-YY" <?= ($fin->number_words_lowercase == '000001-YY') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">000001-YY
                              </label>
                            </div>
                            <div class="checkbox boxpd">
                              <input type="radio" class="form-check-input  " name="estimate_number_format"
                                value="000001/MM/YYYY" <?= ($fin->number_words_lowercase == '000001/MM/YYYY') ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">000001/MM/YYYY</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo ">Pipeline limit per status</label>
                            <input type="text" name="pipeline_limit" value="<?= $fin->pipeline_limit ?>"
                              class="form-control purchaseselects">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">Default pipeline sort</label>
                            <select name="default_pipeline_sort" class="form-control selectpicker ">
                              <option>Pipleine Order</option>
                              <option>Date Created</option>
                              <option>Estimate Date</option>
                              <option>Expiry Date</option>
                            </select>
                            <script>
                              $('select[name="default_pipeline_sort"]').selectpicker('val', '<?= $fin->default_pipeline_sort ?>')
                            </script>
                          </div>
                        </div>
                        <div class="col-md-6 mtop text-right mtop1">
                          <div class="checkbox ">
                            <input type="radio" class="form-check-input " name="estimate_ordering" value="ASC"
                              <?= ($fin->estimate_ordering == 'ASC') ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Ascending
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="estimate_ordering" value="DESC"
                              <?= ($fin->estimate_ordering == 'DESC') ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Descending</label>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="emailpro ">Predefined Client Note</label>
                            <textarea class="textdesc  " name="estimate_client_note"
                              rows="4"><?= $fin->estimate_client_note ?></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="emailpro">Predefined Terms &amp; Conditions</label>
                            <textarea class="textdesc  " name="estimate_terms_conditions"
                              rows="4"><?= $fin->estimate_terms_conditions ?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                <!--Finance Proposal-->
                <!-- <div id="tab10tab5" class="tabcontent tab2task" style="display: none;">
                    <div class="cnt-padding">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo">Proposal Number Prefix</label>
                            <input type="text" name="proposal_prefix" value="<?= $fin->proposal_prefix ?>"
                              class="form-control purchaseselects" text="PRO -">
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo">
                              <i class="fa-regular fa-circle-question pull-left tw-mt-0.5 tw-mr-1"
                                data-bs-toggle="tooltip" data-bs-title="Set zero to avoid calculation"
                                data-original-title="" title=""></i>
                              Proposal Due After (days)
                            </label>
                            <input type="number" name="proposal_due_days" value="<?= $fin->proposal_due_days ?>"
                              class="form-control purchaseselects">
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo ">Pipeline limit per status</label>
                            <input type="text" name="proposal_pipeline_limit" class="form-control purchaseselects">
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">Default pipeline sort</label>
                            <select name="proposal_pipeline_sort" class="form-control selectpicker purchaseselects ">
                              <option>Pipleine Order</option>
                              <option>Date Created</option>
                              <option>Estimate Date</option>
                              <option>Expiry Date</option>
                            </select>
                            <script>
                              $('select[name="proposal_pipeline_sort"]').selectpicker('val', '<?= $fin->proposal_pipeline_sort ?>')
                            </script>
                          </div>
                        </div>
                        <div class="col-md-6 mtop text-right mtop1">
                          <div class="checkbox ">
                            <input type="radio" class="form-check-input " name="proposal_ordering" value="ASC"
                              <?= ($fin->proposal_ordering == 'ASC') ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Ascending
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="proposal_ordering" value="DESC"
                              <?= ($fin->proposal_ordering == 'DESC') ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Descending</label>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Show Project Name On Proposal
                            </label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="show_projectname_on_proposal" value="1"
                                <?= ($fin->show_projectname_on_proposal) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin " name="show_projectname_on_proposal"
                                value="0" <?= ($fin->show_projectname_on_proposal) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Exclude proposals with draft status from customers area
                            </label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="exclude_proposal_draft" value="1"
                                <?= ($fin->exclude_proposal_draft) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin " name="exclude_proposal_draft"
                                value="0" <?= ($fin->exclude_proposal_draft) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrp">
                            <label class="purchaseinfo mb-1">
                              Allow staff members to view proposals where they are assigned to
                            </label><br>
                            <div class="checkbox">
                              <input type="radio" class="form-check-input " name="allow_staff_view_proposals" value="1"
                                <?= ($fin->allow_staff_view_proposals) ? 'checked' : '' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">Yes
                              </label>
                              <input type="radio" class="form-check-input lbl-margin " name="allow_staff_view_proposals"
                                value="0" <?= ($fin->allow_staff_view_proposals) ? '' : 'checked' ?>>
                              <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr class="fileline equalspaceforhr">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="purchasegrpmb-1">
                            <label class="emailpro ">Proposal Info Format (PDF and HTML)</label>
                            <textarea class="textdesc  " rows="4"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <p>
                            <a href="#" class="settings-textarea-merge-field"
                              data-to="proposal_info_format">{proposal_to}</a>,
                            <a href="#" class="settings-textarea-merge-field"
                              data-to="proposal_info_format">{address}</a>,
                            <a href="#" class="settings-textarea-merge-field" data-to="proposal_info_format">{city}</a>,
                            <a href="#" class="settings-textarea-merge-field" data-to="proposal_info_format">{state}</a>,
                            <a href="#" class="settings-textarea-merge-field"
                              data-to="proposal_info_format">{zip_code}</a>,
                            <a href="#" class="settings-textarea-merge-field"
                              data-to="proposal_info_format">{country_code}</a>,
                            <a href="#" class="settings-textarea-merge-field"
                              data-to="proposal_info_format">{country_name}</a>,
                            <a href="#" class="settings-textarea-merge-field" data-to="proposal_info_format">{phone}</a>,
                            <a href="#" class="settings-textarea-merge-field" data-to="proposal_info_format">{email}</a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </form> -->
              </div>
            </div>
          </div>
        </div>

        <!--Customer-->
        <div id="Customers" class="tabcontent1 ps-0" style="display:none">


          <div class="accordion custom-accordionwithicon-plus" id="accordionWithplusicon">
            <div class="panel-body1" style="margin-top: -10px;">
              <form id="customer_form" action="<?= site_url('setup/save-setting/customer') ?>"
                onsubmit="saveSetting(this,event)">
                <input type="hidden" name="id" value="<?= $cus->id ?>">
                <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp purch-drop">
                      <label class="purchaseinfo mb-1">Default Customers Theme</label>
                      <select name="default_customer_theme" class="form-control selectpicker ">
                        <option>Prefix</option>
                      </select>
                      <script>
                        $('select[name="default_customer_theme"]').selectpicker('val', '<?= $cus->default_customer_theme ?>')
                      </script>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp purch-drop">
                      <label class="purchaseinfo mb-1">Default Country</label>
                      <select name="default_country" class="form-control selectpicker " data-live-search="true">
                        <option></option>
                        <?php if (!empty($countries)): ?>
                          <?php foreach ($countries as $country): ?>
                            <option value="<?= $country->id ?>">
                              <?= $country->name ?>
                            </option>
                          <?php endforeach ?>
                        <?php endif ?>
                      </select>
                      <script>
                        $('select[name="default_country"]').selectpicker('val', '<?= $cus->default_country ?>')
                      </script>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Visible Tabs (Profile)</label>
                      <div class="dropdown-with-icon dropdownalignment">
                        <select id="vs_tabs" class="selectpicker multiselect " data-name="visible_tabs" multiple
                          data-actions-box="true" data-live-search="true">
                          <option>All</option>
                          <option>Notes</option>
                          <option>Statement</option>
                          <option>Invoices</option>
                          <option>Payments</option>
                          <option>Proposals</option>
                        </select>
                        <input type="hidden" name="visible_tabs" value="<?= $cus->visible_tabs ?>">
                        <script>
                          $('select[id="vs_tabs"]').selectpicker('val', <?= json_encode(explode(',', $cus->visible_tabs)) ?>)
                        </script>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Company field is required?</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input" name="company_field_required" value="1"
                          <?= ($cus->company_field_required) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin" name="company_field_required" value="0"
                          <?= ($cus->company_field_required) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Company requires the usage of the VAT Number
                        field</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="vat_number_field" value="1"
                          <?= ($cus->vat_number_field) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="vat_number_field" value="0"
                          <?= ($cus->vat_number_field) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Allow customers to register</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="allow_customers_register" value="1"
                          <?= ($cus->allow_customers_register) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="allow_customers_register"
                          value="0" <?= ($cus->allow_customers_register) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Require registration confirmation from
                        administrator after customer register</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="registration_confirmation" value="1"
                          <?= ($cus->registration_confirmation) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="registration_confirmation"
                          value="0" <?= ($cus->registration_confirmation) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Allow primary contact to manage other customer
                        contacts</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="allow_primary_contact" value="1"
                          <?= ($cus->allow_primary_contact) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="allow_primary_contact" value="0"
                          <?= ($cus->allow_primary_contact) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Enable Honeypot spam validation</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="honepot_spam_validation" value="1"
                          <?= ($cus->honepot_spam_validation) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="honepot_spam_validation"
                          value="0" <?= ($cus->honepot_spam_validation) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Allow primary contact to view/edit billing
                        &amp; shipping details</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="primary_contact_view_edit" value="1"
                          <?= ($cus->primary_contact_view_edit) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="primary_contact_view_edit"
                          value="0" <?= ($cus->primary_contact_view_edit) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">
                        <i class="fa-regular fa-circle-question" data-bs-toggle="tooltip"
                          data-bs-title="If you share the file manually from customer profile to other contacts they wil be able to see the file."
                          data-original-title="" title=""></i>
                        Contacts see only own files uploaded in customer area (files uploaded in
                        customer profile)</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="contact_see_own_file_uploade" value="1"
                          <?= ($cus->contact_see_own_file_uploade) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="contact_see_own_file_uploade"
                          value="0" <?= ($cus->contact_see_own_file_uploade) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Allow contacts to delete own files uploaded
                        from customers area</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="contact_delete_own_file" value="1"
                          <?= ($cus->contact_delete_own_file) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="contact_delete_own_file"
                          value="0" <?= ($cus->contact_delete_own_file) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">
                        <i class="fa-regular fa-circle-question" data-bs-toggle="tooltip"
                          data-bs-title="If you allow this options knowledge base will be shown also on clients side"
                          data-original-title="" title=""></i>
                        Use Knowledge Base</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="use_knowledge_base" value="1"
                          <?= ($cus->use_knowledge_base) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="use_knowledge_base" value="0"
                          <?= ($cus->use_knowledge_base) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">
                        Allow knowledge base to be viewed without registration</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="view_knowledge_wo_reg" value="1"
                          <?= ($cus->view_knowledge_wo_reg) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="view_knowledge_wo_reg" value="0"
                          <?= ($cus->view_knowledge_wo_reg) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp purch-drop">
                      <label class="purchaseinfo mb-1">Show Estimate request link in customers
                        area?</label>
                      <select name="estimate_request_link" class="form-control selectpicker ">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                      </select>
                      <script>
                        $('select[name="estimate_request_link"]').selectpicker('val', '<?= $cus->estimate_request_link ?>')
                      </script>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Default contact permissions</label><br><br>
                      <input type="hidden" name="default_contact_permission" value="">
                      <div class="checkbox chk-margin">
                        <input type="checkbox" class="form-check-input dcp_ckbox ml-2 mrtsin" value="invoice"
                          <?= (in_array('invoice', explode(',', $cus->default_contact_permission))) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 lbl-space1">Invoices</label><br><br>
                        <input type="checkbox" class="form-check-input dcp_ckbox ml-2 mrtsin" value="estimate"
                          <?= (in_array('estimate', explode(',', $cus->default_contact_permission))) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 lbl-space1">Estimates</label><br><br>
                        <input type="checkbox" class="form-check-input dcp_ckbox ml-2 mrtsin" value="contracts"
                          <?= (in_array('contracts', explode(',', $cus->default_contact_permission))) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 lbl-space1">Contracts</label><br><br>
                        <input type="checkbox" class="form-check-input dcp_ckbox ml-2 mrtsin" value="proposals"
                          <?= (in_array('proposals', explode(',', $cus->default_contact_permission))) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 lbl-space1">Proposals</label><br><br>
                        <input type="checkbox" class="form-check-input dcp_ckbox ml-2 mrtsin" value="support" checked>
                        <label class="form-check-label lbl-space-1 lbl-space1">Support</label><br><br>
                        <input type="checkbox" class="form-check-input dcp_ckbox ml-2 mrtsin" value="projects" checked>
                        <label class="form-check-label lbl-space-1 lbl-space1">Projects</label><br><br>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <i class="fa-regular fa-circle-question" data-bs-toggle="tooltip"
                        data-bs-title="Invoices, Estimates, Payments, Statement"></i>&nbsp;<label
                        class="emailpro">Company
                        Information Format (PDF and HTML)</label>
                      <textarea class="textdesc  " rows="4"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <p>
                      <a href="#" class="settings-textarea-merge-field"
                        data-to="customer_info_format">{company_name}</a>,
                      <a href="#" class="settings-textarea-merge-field"
                        data-to="customer_info_format">{customer_id}</a>,
                      <a href="#" class="settings-textarea-merge-field" data-to="customer_info_format">{street}</a>,
                      <a href="#" class="settings-textarea-merge-field" data-to="customer_info_format">{city}</a>,
                      <a href="#" class="settings-textarea-merge-field" data-to="customer_info_format">{state}</a>,
                      <a href="#" class="settings-textarea-merge-field" data-to="customer_info_format">{zip_code}</a>,
                      <a href="#" class="settings-textarea-merge-field"
                        data-to="customer_info_format">{country_code}</a>,
                      <a href="#" class="settings-textarea-merge-field"
                        data-to="customer_info_format">{country_name}</a>,
                      <a href="#" class="settings-textarea-merge-field" data-to="customer_info_format">{phone}</a>,
                      <a href="#" class="settings-textarea-merge-field" data-to="customer_info_format">{vat_number}</a>,
                      <a href="#" class="settings-textarea-merge-field"
                        data-to="customer_info_format">{vat_number_with_label}</a>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
        <!--Taks-->
        <div id="Tasks" class="tabcontent1 ps-0" style="display:none">
          <div class="accordion custom-accordionwithicon-plus" id="accordionWithplusicon">
            <form id="task_form" action="<?= site_url('setup/save-setting/task') ?>" onsubmit="saveSetting(this,event)">
              <input type="hidden" name="id" value="<?= $task->id ?>">
              <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>">
              <div class="panel-body1  " style="margin-top: -10px;">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo">Limit tasks kanban rows per status</label>
                      <input type="number" name="tasks_kanban_rows" class="form-control purchaseselects"
                        value="<?= $task->tasks_kanban_rows ?>">
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Allow all staff to see all tasks related to
                        projects (includes non-staff)</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="all_staff_see_all_task" value="1"
                          <?= ($task->all_staff_see_all_task) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="all_staff_see_all_task" value="0"
                          <?= ($task->all_staff_see_all_task) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Allow customer/staff to add/edit task comments
                        only in the first hour (administrators not applied)</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="customer_or_staff_to_add_or_edit" value="1"
                          <?= ($task->customer_or_staff_to_add_or_edit) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="customer_or_staff_to_add_or_edit"
                          value="0" <?= ($task->customer_or_staff_to_add_or_edit) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">
                        <i class="fa-regular fa-circle-question  tw-mt-0.5 tw-mr-1" data-bs-toggle="tooltip"
                          data-bs-title="Not applied if task is linked to project and the creator is not project member"
                          data-original-title="" title=""></i>
                        Auto assign task creator when new task is created</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="auto_assign_task_creator" value="1"
                          <?= ($task->auto_assign_task_creator) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="auto_assign_task_creator"
                          value="0" <?= ($task->auto_assign_task_creator) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Auto add task creator as task follower when new
                        task is created
                      </label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="auto_add_task_creator_as_follower" value="1"
                          <?= ($task->auto_add_task_creator_as_follower) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin "
                          name="auto_add_task_creator_as_follower" value="0"
                          <?= ($task->auto_add_task_creator_as_follower) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Stop all other started timers when starting new
                        timer</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="stop_all_started_timer" value="1"
                          <?= ($task->stop_all_started_timer) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="stop_all_started_timer" value="0"
                          <?= ($task->stop_all_started_timer) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Change task status to In Progress on timer
                        started (valid only if task status is Not Started)</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="change_task_status" value="1"
                          <?= ($task->change_task_status) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="change_task_status" value="0"
                          <?= ($task->change_task_status) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">Billable option is by default checked when new
                        task is created? (only from admin area)</label><br>
                      <div class="checkbox ml-1">
                        <input type="radio" class="form-check-input " name="billable_option_checked" value="1"
                          <?= ($task->billable_option_checked) ? 'checked' : '' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                        <input type="radio" class="form-check-input lbl-margin " name="billable_option_checked"
                          value="0" <?= ($task->billable_option_checked) ? '' : 'checked' ?>>
                        <label class="form-check-label lbl-space-1 radio-text-size">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="fileline equalspaceforhr">
                <div class="row">
                  <div class="col-md-6">
                    <div class="purchasegrp purch-drop">
                      <label class="purchaseinfo mb-1">
                        Round off task timer</label><br>
                      <select name="round_off_timer" class="selectpicker form-control" data-actions-box="true"
                        data-live-search="true">
                        <option>Don't round off</option>
                        <option>Round up</option>
                        <option>Round down</option>
                        <option>Round to nearest</option>
                      </select>
                      <script>
                        $('select[name="round_off_timer"]').selectpicker('val', '<?= $task->round_off_timer ?>')
                      </script>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="purchasegrp purch-drop">
                      <label class="purchaseinfo mb-1">
                        Multiplies of</label><br>
                      <select class="selectpicker form-control" name="multiplies_of">
                        <option value="1">5</option>
                        <option value="2">10</option>
                        <option value="3">15</option>
                        <option value="4">20</option>
                        <option value="5">25</option>
                        <option value="6">30</option>
                        <option value="7">35</option>
                        <option value="8">40</option>
                        <option value="9">45</option>
                      </select>
                      <script>
                        $('select[name="round_off_timer"]').selectpicker('val', '<?= $task->round_off_timer ?>')
                      </script>
                    </div>
                  </div>
                  <div class="col-md-1 mtop-label mtop-dp">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">
                        minutes </label>
                    </div>
                  </div>
                  <!-- <div class="col-md-2 mtop-label mtop-dp">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1 pull-right">
                        multiplies of</label>
                    </div>
                  </div>
                  <div class="col-md-3 mult-margin new-dp-margin  new-dp-margin1">
                    <div class="purchasegrp purch-drop">
                      <select class="selectpicker form-control" name="multiplies_of">
                        <option value="1">5</option>
                        <option value="2">10</option>
                        <option value="3">15</option>
                        <option value="4">20</option>
                        <option value="5">25</option>
                        <option value="6">30</option>
                        <option value="7">35</option>
                        <option value="8">40</option>
                        <option value="9">45</option>
                      </select>
                    </div>
                    <script>
                      $('select[name="multiplies_of"]').selectpicker('val', '<?= $task->multiplies_of ?>')
                    </script>
                  </div>
                  <div class="col-md-1 mtop-label mtop-dp">
                    <div class="purchasegrp">
                      <label class="purchaseinfo mb-1">
                        minutes </label>
                    </div> -->
                </div>
              </div>
              <div class="row mt-2 ">
                <span>Applied to the Timesheets overview report and when invoicing a task/project.
                </span>
              </div>
              <hr class="fileline equalspaceforhr">
              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">
                      Default status when new task is created</label><br>
                    <select class="selectpicker form-control" name="default_task_status">
                      <option>Auto</option>
                      <option>Not started</option>
                      <option>In progress</option>
                      <option>Awiting feedback</option>
                      <option>Compelete</option>
                    </select>
                  </div>
                  <script>
                    $('select[name="default_task_status"]').selectpicker('val', '<?= $task->default_task_status ?>')
                  </script>
                </div>
              </div>
              <hr class="fileline equalspaceforhr">
              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrp purch-drop">
                    <label class="purchaseinfo mb-1">
                      Default Priority</label><br>
                    <select class="selectpicker form-control" name="default_priority">
                      <option>Low</option>
                      <option>Medium</option>
                      <option>High</option>
                      <option>Urgent</option>
                    </select>
                  </div>
                  <script>
                    $('select[name="default_priority"]').selectpicker('val', '<?= $task->default_priority ?>')
                  </script>
                </div>
              </div>
              <hr class="fileline equalspaceforhr">
              <div class="row">
                <div class="col-md-12">
                  <div class="purchasegrp">
                    <label class="purchaseinfo ">Modal Width Class (modal-lg, modal-xl,
                      modal-xxl)</label>
                    <input type="text" name="modal_width_class" class="form-control purchaseselects"
                      value="<?= $task->modal_width_class ?>">
                  </div>
                </div>
              </div>

          </div>
          </form>
        </div>
      </div>

      <!--Leads-->
      <div id="Leads" class="tabcontent1 ps-0 ml-2" style="display:none">
        <form id="leads_form" action="<?= site_url('setup/save-setting/leads') ?>" onsubmit="saveSetting(this,event)">
          <input type="hidden" name="id" value="<?= $lead->id ?>">
          <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>">
          <div class="panel-body1">

            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrp">
                  <label class="purchaseinfo ">Limit leads kanban rows per status</label>
                  <input type="number" name="leads_kanban_rows" class="form-control purchaseselects"
                    value="<?= $lead->leads_kanban_rows ?>">
                </div>
              </div>
            </div>
            <hr class="fileline equalspaceforhr">
            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrp purch-drop">
                  <label class="purchaseinfo mb-1">
                    Default status</label><br>
                  <select class="selectpicker form-control" name="default_status" data-live-search="true">
                  
                    <option>New</option>
                    <option>Contacted</option>
                    <option>Qualified</option>
                    <option>Working</option>
                    <option>Proposal sent</option>
                  </select>
                </div>
                <script>
                  $('select[name="default_status"]').selectpicker('val', '<?= $lead->default_status ?>')
                </script>

              </div>

            </div>
            <hr class="fileline equalspaceforhr">
            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrp purch-drop">
                  <label class="purchaseinfo mb-1">
                    Default source</label><br>
                  <select class="selectpicker form-control" name="default_source" data-live-search="true">
                   
                    <option>Facebook</option>
                    <option>Google</option>

                  </select>
                </div>
                <script>
                  $('select[name="default_source"]').selectpicker('val', '<?= $lead->default_source ?>')
                </script>

              </div>

            </div>
            <hr class="fileline equalspaceforhr">
            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrp">
                  <label class="purchaseinfo mb-1">
                    Perform validation for duplicate lead on the following fields:</label><br>
                  <div class="dropdown-with-icon dropdownalignment">
                    <!-- <select id="vlf" class="form-control selectpicker bs-multiselect" data-name="validation_lead_fields"
                      multiple>
                      <option selected>E-mail</option>
                      <option>Phone</option>
                      <option>Website</option>
                      <option>Company</option>
                    </select> -->
                  </div>
                </div>

                <input type="hidden" name="validation_lead_fields" value="<?= $lead->validation_lead_fields ?>">
                <script>
                  $('select[id="vlf"]').selectpicker('val', <?= json_encode(explode(',', $lead->validation_lead_fields)) ?>)
                </script>

              </div>

            </div>
            <hr class="fileline equalspaceforhr">
            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrp">
                  <label class="purchaseinfo mb-1"><i class="fa-regular fa-circle-question" data-bs-toggle="tooltip"
                      data-bs-title="If this option is set to YES the staff member that converted lead to customer will be auto assigned as customer admin. NOTE: This option will apply only on staff members that do not have permission for customers VIEW"></i>
                    Auto assign as admin to customer after convert</label><br>
                  <div class="checkbox ml-1">
                    <input type="radio" class="form-check-input " name="auto_assign_admin_to_customer" value="1"
                      <?= ($lead->auto_assign_admin_to_customer) ? 'checked' : '' ?>>
                    <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                    <input type="radio" class="form-check-input lbl-margin " name="auto_assign_admin_to_customer"
                      value="0" <?= ($lead->auto_assign_admin_to_customer) ? '' : 'checked' ?>>
                    <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                  </div>
                </div>
              </div>
            </div>
            <hr class="fileline equalspaceforhr">
            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrp">
                  <label class="purchaseinfo mb-1">
                    Allow non-admin staff members to import leads</label><br>
                  <div class="checkbox ml-1">
                    <input type="radio" class="form-check-input " name="non_admin_staff_import_leads" value="1"
                      <?= ($lead->non_admin_staff_import_leads) ? 'checked' : '' ?>>
                    <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                    <input type="radio" class="form-check-input lbl-margin " name="non_admin_staff_import_leads"
                      value="0" <?= ($lead->non_admin_staff_import_leads) ? '' : 'checked' ?>>
                    <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                  </div>
                </div>
              </div>
            </div>
            <hr class="fileline equalspaceforhr">
            <div class="row">
              <div class="col-md-6">
                <div class="purchasegrp purch-drop">
                  <label class="purchaseinfo mb-1">
                    Default leads kanban sort</label><br>
                  <select class="selectpicker form-control" name="kanban_sort">
                    <option value="0">Kanban Order</option>
                    <option value="1">Date Created</option>
                    <option value="2">Last Contact</option>

                  </select>
                </div>
              </div>
              <div class="col-md-6 mtop text-right  mtop1">
                <div class="purchasegrp">

                  <div class="checkbox ">
                    <input type="radio" class="form-check-input " name="ordering" value="ASC"
                      <?= ($lead->ordering == 'ASC') ? 'checked' : '' ?>>
                    <label class="form-check-label lbl-space-1 radio-text-size">Ascending
                    </label>
                    <input type="radio" class="form-check-input lbl-margin" name="ordering" value="DESC"
                      <?= ($lead->ordering == 'DESC') ? 'checked' : '' ?>>
                    <label class="form-check-label lbl-space-1 radio-text-size">Descending</label>


                  </div>
                </div>
              </div>


            </div>
            <hr class="fileline equalspaceforhr">
            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrp">
                  <label class="purchaseinfo mb-1">
                    Do not allow leads to be edited after they are converted to customers
                    (administrators not applied)</label><br>
                  <div class="checkbox ml-1">
                    <input type="radio" class="form-check-input " name="not_lead_edit_customers" value="1"
                      <?= ($lead->non_admin_staff_import_leads) ? 'checked' : '' ?>>
                    <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                    <input type="radio" class="form-check-input lbl-margin " name="not_lead_edit_customers" value="0"
                      <?= ($lead->non_admin_staff_import_leads) ? '' : 'checked' ?>>
                    <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                  </div>
                </div>
              </div>
            </div>
            <hr class="fileline equalspaceforhr">
            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrp">
                  <label class="purchaseinfo ">Modal Width Class (modal-lg, modal-xl,
                    modal-xxl)</label>
                  <input type="text" name="modal_width_class" class="form-control purchaseselects"
                    value="<?= $lead->modal_width_class ?>">
                </div>
              </div>
            </div>


          </div>
        </form>
      </div>

      <!--Calender-->
      <div id="Calendar" class="tabcontent1 ps-0" style="display:none">
        <div class="panel-body1">
          <div class="invtencol ">

            <!-- <div class="row">
                <div class="col-md-12 ">
                  <div class="tab-container  invsectabhdr tab-top2">
                    <ul id="tabList" class="desktop ">
                      <li>
                        <div class="child invchildmtmb tab-margin">
                          <button class="tablinks tb-linksmb active"
                            onclick="opentab3(event, 'tab12tab1')">General</button>
                        </div>
                      </li>
                      <li>

                        <div class="child invchildmtmb tab-padding ">
                          <button class="tablinks tb-linksmb" onclick="opentab3(event, 'tab12tab2')">Styling</button>
                        </div>
                      </li>


                    </ul>
                    <div class="tab-arrow lefts" onclick="scrollTabs('left')">
                      <i class="bi bi-chevron-left arrowfont"></i>
                    </div>
                    <div class="tab-arrow rights" onclick="scrollTabs('right')">
                      <i class="bi bi-chevron-right arrowfont "></i>
                    </div>

                  </div>
                  <div id="carouselExampleIndicators2" class="carousel slide " data-bs-interval="false"
                    style="height:54px">
                    <div class="carousel-inner scroll-images">

                      <div class="carousel-item active" style="text-align: center;">
                        <div class="container">
                          <div class="child mb-0" style="height:auto">
                            <button class="tablinks active tabresact" style="width:100%"
                              onclick="opentab3(event, 'tab12tab1')">General</button>
                          </div>

                        </div>
                      </div>
                      <div class="carousel-item" style="text-align: center;">
                        <div class="container">
                          <div class="child mb-0" style="height:auto;">
                            <button class="tablinks tabresact" style="width:100%"
                              onclick="opentab3(event, 'tab12tab2')">Styling</button>
                          </div>
                        </div>
                      </div>

                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2"
                        data-bs-slide="prev" style="margin-top:10px">
                        <i class="bi bi-chevron-left icon" style="color:black;font-weight: bold;"></i>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2"
                        data-bs-slide="next" style="margin-top:10px">
                        <i class="bi bi-chevron-right icon" style="color:black;font-weight:bold"></i>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <hr class="fileline linemrg">
                </div>
              </div> -->

            <div class="accordion-item borsin borrsin">
              <h2 class="accordion-header" id="accordionwithplusExample1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#accor_plusExamplecollapse1" aria-expanded="false"
                  aria-controls="accor_plusExamplecollapse1">
                  General
                </button>
              </h2>
              <div id="accor_plusExamplecollapse1" class="accordion-collapse collapse"
                aria-labelledby="accordionwithplusExample1" data-bs-parent="#accordionWithplusicon">
                <div class="accordion-body">
                  <div class="cnt-margin1">
                    <div class="row">
                      <div class="col-md-12">
                        <label class="purchaseinfo">Calendar Events Limit (Month and Week View)
                        </label>
                        <input type="number" name="calendar_event_limit" value="<?= $cal->calendar_event_limit ?>"
                          class="form-control purchaseselects">
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop">
                          <label for="tags" class="purchaseinfo mb-1">Default View</label>
                          <select name="default_view" class="form-control selectpicker">
                            <option>Month</option>
                            <option>Week</option>
                            <option>Day</option>
                            <option>Agenda Week</option>
                            <option>Agenda Day</option>
                          </select>
                          <script>
                            $('select[name="default_view"]').selectpicker('val', '<?= $cal->default_view ?>')
                          </script>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop">
                          <label for="tags" class="purchaseinfo mb-1">First Day</label>
                          <select name="first_day" class="form-control selectpicker">
                            <option>Sunday</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                          </select>

                          <script>
                            $('select[name="first_day"]').selectpicker('val', '<?= $cal->first_day ?>')
                          </script>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <h4 class="h4-font-size">Show on Calendar</h4>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">

                      <div class="col-md-6">

                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1 ">
                            Hide notified reminders from calendar
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="hide_notified_reminder" value="1"
                              <?= ($cal->hide_notified_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="hide_notified_reminder"
                              value="0" <?= ($cal->hide_notified_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Ticket Reminders
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="ticket_reminder" value="1"
                              <?= ($cal->ticket_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="ticket_reminder" value="0"
                              <?= ($cal->ticket_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Lead Reminders
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="lead_reminder" value="1"
                              <?= ($cal->lead_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="lead_reminder" value="0"
                              <?= ($cal->lead_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Invoices
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="invoices" value="1" <?= ($cal->invoices) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="invoices" value="0"
                              <?= ($cal->invoices) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Customer Reminders
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="customer_reminder" value="1"
                              <?= ($cal->customer_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="customer_reminder" value="0"
                              <?= ($cal->customer_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Estimates
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="estimates" value="1"
                              <?= ($cal->estimates) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="estimates" value="0"
                              <?= ($cal->estimates) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Estimate Reminders
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="estimate_reminder" value="1"
                              <?= ($cal->estimate_reminder) ? 'checked' : '' ?>>
                            <!-- 10000 -->
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="estimate_reminder" value="0"
                              <?= ($cal->estimate_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Proposals
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="proposals" value="1"
                              <?= ($cal->proposals) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="proposals" value="0"
                              <?= ($cal->proposals) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Invoice Reminders
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="invoice_reminder" value="1"
                              <?= ($cal->invoice_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="invoice_reminder" value="0"
                              <?= ($cal->invoice_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Contracts
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="contracts" value="1"
                              <?= ($cal->contracts) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="contracts" value="0"
                              <?= ($cal->contracts) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Proposal Reminders
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="proposal_reminder" value="1"
                              <?= ($cal->proposal_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="proposal_reminder" value="0"
                              <?= ($cal->proposal_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Tasks
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="tasks" value="1" <?= ($cal->tasks) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="tasks" value="0"
                              <?= ($cal->tasks) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Expense Reminders

                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="expense_reminder" value="1"
                              <?= ($cal->expense_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="expense_reminder" value="0"
                              <?= ($cal->expense_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show only tasks assigned to the logged in staff member
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="show_task_logged_staff" value="1"
                              <?= ($cal->show_task_logged_staff) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="show_task_logged_staff"
                              value="0" <?= ($cal->show_task_logged_staff) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Task Reminders

                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="task_reminder" value="1"
                              <?= ($cal->task_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="task_reminder" value="0"
                              <?= ($cal->task_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Projects
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="projects" value="1" <?= ($cal->projects) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="projects" value="0"
                              <?= ($cal->projects) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Credit Note Reminders

                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="credit_note_reminder" value="1"
                              <?= ($cal->credit_note_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="credit_note_reminder"
                              value="0" <?= ($cal->credit_note_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="accordion-item borsin borzsin">
              <h2 class="accordion-header" id="accordionwithplusExample12">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#accor_plusExamplecollapse12" aria-expanded="false"
                  aria-controls="accor_plusExamplecollapse12">
                  Styling
                </button>
              </h2>
              <div id="accor_plusExamplecollapse12" class="accordion-collapse collapse"
                aria-labelledby="accordionwithplusExample12" data-bs-parent="#accordionWithplusicon">
                <div class="accordion-body">
                  <div class="cnt-padding">
                    <div class="row ">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo ">Invoice Color</label>
                        <div class="input-group color-input-group bnsin">
                          <input type="text" name="invoice_color" value="<?= $cal->invoice_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic dbsin">
                            <input type="color" class="color-input border-0" value="<?= $cal->invoice_color ?>">
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo">Estimate Color</label>
                        <div class="input-group color-input-group bnsin">
                          <input type="text" name="estimate_color" value="<?= $cal->estimate_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic dbsin">
                            <input type="color" value="<?= $cal->estimate_color ?>" class="color-input border-0">
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo">Proposal Color</label>
                        <div class="input-group color-input-group bnsin ">
                          <input type="text" name="proposal_color" value="<?= $cal->proposal_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic dbsin">
                            <input type="color" value="<?= $cal->proposal_color ?>" class="color-input border-0">
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo ">Reminder Color</label>
                        <div class="input-group color-input-group bnsin ">
                          <input type="text" name="remainder_color" value="<?= $cal->remainder_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic dbsin">
                            <input type="color" value="<?= $cal->remainder_color ?>" class="color-input border-0">
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo">Contract Color</label>
                        <div class="input-group color-input-group bnsin">
                          <input type="text" name="contract_color" value="<?= $cal->contract_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic dbsin">
                            <input type="color" value="<?= $cal->contract_color ?>" class="color-input border-0">
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo ">Project Color</label>
                        <div class="input-group color-input-group bnsin ">
                          <input type="text" name="project_color" value="<?= $cal->project_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic dbsin">
                            <input type="color" value="<?= $cal->project_color ?>" class="color-input border-0">
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <!-- <form id="calendar_form" action="<?= site_url('setup/save-setting/calendar') ?>"
                onsubmit="saveSetting(this,event)">
                <input type="hidden" name="id" value="<?= $cal->id ?>">
                <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>">
                <!--Calender General-->
            <!-- <div class="tabcontent3" id="tab12tab1" style="display: block;">
                  <div class="cnt-margin1">
                    <div class="row">
                      <div class="col-md-12">
                        <label class="purchaseinfo">Calendar Events Limit (Month and Week View)
                        </label>
                        <input type="number" name="calendar_event_limit" value="<?= $cal->calendar_event_limit ?>"
                          class="form-control purchaseselects">
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop">
                          <label for="tags" class="purchaseinfo mb-1">Default View</label>
                          <select name="default_view" class="form-control selectpicker">
                            <option>Month</option>
                            <option>Week</option>
                            <option>Day</option>
                            <option>Agenda Week</option>
                            <option>Agenda Day</option>
                          </select>
                          <script>
                            $('select[name="default_view"]').selectpicker('val', '<?= $cal->default_view ?>')
                          </script>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop">
                          <label for="tags" class="purchaseinfo mb-1">First Day</label>
                          <select name="first_day" class="form-control selectpicker">
                            <option>Sunday</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                            <option>Saturday</option>
                          </select>

                          <script>
                            $('select[name="first_day"]').selectpicker('val', '<?= $cal->first_day ?>')
                          </script>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <h4 class="h4-font-size">Show on Calendar</h4>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">

                      <div class="col-md-6">

                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1 ">
                            Hide notified reminders from calendar
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="hide_notified_reminder" value="1"
                              <?= ($cal->hide_notified_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="hide_notified_reminder"
                              value="0" <?= ($cal->hide_notified_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Ticket Reminders
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="ticket_reminder" value="1"
                              <?= ($cal->ticket_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="ticket_reminder" value="0"
                              <?= ($cal->ticket_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Lead Reminders
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="lead_reminder" value="1"
                              <?= ($cal->lead_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="lead_reminder" value="0"
                              <?= ($cal->lead_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Invoices
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="invoices" value="1" <?= ($cal->invoices) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="invoices" value="0"
                              <?= ($cal->invoices) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Customer Reminders
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="customer_reminder" value="1"
                              <?= ($cal->customer_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="customer_reminder" value="0"
                              <?= ($cal->customer_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Estimates
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="estimates" value="1"
                              <?= ($cal->estimates) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="estimates" value="0"
                              <?= ($cal->estimates) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Estimate Reminders
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="estimate_reminder" value="1"
                              <?= ($cal->estimate_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="estimate_reminder" value="0"
                              <?= ($cal->estimate_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Proposals
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="proposals" value="1"
                              <?= ($cal->proposals) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="proposals" value="0"
                              <?= ($cal->proposals) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Invoice Reminders
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="invoice_reminder" value="1"
                              <?= ($cal->invoice_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="invoice_reminder" value="0"
                              <?= ($cal->invoice_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Contracts
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="contracts" value="1"
                              <?= ($cal->contracts) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="contracts" value="0"
                              <?= ($cal->contracts) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Proposal Reminders
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="proposal_reminder" value="1"
                              <?= ($cal->proposal_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="proposal_reminder" value="0"
                              <?= ($cal->proposal_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Tasks
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="tasks" value="1" <?= ($cal->tasks) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="tasks" value="0"
                              <?= ($cal->tasks) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Expense Reminders

                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="expense_reminder" value="1"
                              <?= ($cal->expense_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="expense_reminder" value="0"
                              <?= ($cal->expense_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show only tasks assigned to the logged in staff member
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="show_task_logged_staff" value="1"
                              <?= ($cal->show_task_logged_staff) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="show_task_logged_staff"
                              value="0" <?= ($cal->show_task_logged_staff) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Task Reminders

                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="task_reminder" value="1"
                              <?= ($cal->task_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="task_reminder" value="0"
                              <?= ($cal->task_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Projects
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="projects" value="1" <?= ($cal->projects) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="projects" value="0"
                              <?= ($cal->projects) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <hr class="fileline equalspaceforhr">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Credit Note Reminders

                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="credit_note_reminder" value="1"
                              <?= ($cal->credit_note_reminder) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="credit_note_reminder"
                              value="0" <?= ($cal->credit_note_reminder) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div> -->
            <!--Calender Styling-->
            <!-- <div id="tab12tab2" class="tabcontent3 tab2task" style="display: none;">
                  <div class="cnt-padding">
                    <div class="row ">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo ">Invoice Color</label>
                        <div class="input-group color-input-group">
                          <input type="text" name="invoice_color" value="<?= $cal->invoice_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic">
                            <input type="color" class="color-input border-0" value="<?= $cal->invoice_color ?>">
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo">Estimate Color</label>
                        <div class="input-group color-input-group">
                          <input type="text" name="estimate_color" value="<?= $cal->estimate_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic">
                            <input type="color" value="<?= $cal->estimate_color ?>" class="color-input border-0">
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo">Proposal Color</label>
                        <div class="input-group color-input-group">
                          <input type="text" name="proposal_color" value="<?= $cal->proposal_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic">
                            <input type="color" value="<?= $cal->proposal_color ?>" class="color-input border-0">
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo ">Reminder Color</label>
                        <div class="input-group color-input-group">
                          <input type="text" name="remainder_color" value="<?= $cal->remainder_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic">
                            <input type="color" value="<?= $cal->remainder_color ?>" class="color-input border-0">
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo">Contract Color</label>
                        <div class="input-group color-input-group">
                          <input type="text" name="contract_color" value="<?= $cal->contract_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic">
                            <input type="color" value="<?= $cal->contract_color ?>" class="color-input border-0">
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo ">Project Color</label>
                        <div class="input-group color-input-group">
                          <input type="text" name="project_color" value="<?= $cal->project_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic">
                            <input type="color" value="<?= $cal->project_color ?>" class="color-input border-0">
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </form> -->
          </div>
        </div>
      </div>
      <!--Pdf-->
      <div id="PDF" class="tabcontent1 ps-0" style="display:none">
        <div class="panel-body1">
          <div class="invtencol ">

            <!-- <div class="row">
                <div class="col-md-12 ">
                  <div class="tab-container  invsectabhdr tab-top2">
                    <ul id="tabList" class="desktop ">
                      <li>
                        <div class="child invchildmtmb tab-margin">
                          <button class="tablinks tb-linksmb active"
                            onclick="opentab5(event, 'tab15tab1')">General</button>
                        </div>
                      </li>
                      <li>
                        <div class="child invchildmtmb tab-padding">
                          <button class="tablinks tb-linksmb" onclick="opentab5(event, 'tab15tab2')">Signature</button>
                        </div>
                      </li>
                      <li>
                        <div class="child invchildmtmb tab-padding">
                          <button class="tablinks tb-linksmb" onclick="opentab5(event, 'tab15tab3')">Document
                            Formats</button>
                        </div>
                      </li>


                    </ul>
                    <div class="tab-arrow lefts" onclick="scrollTabs('left')">
                      <i class="bi bi-chevron-left arrowfont"></i>
                    </div>
                    <div class="tab-arrow rights" onclick="scrollTabs('right')">
                      <i class="bi bi-chevron-right arrowfont "></i>
                    </div>

                  </div>
                  <div id="carouselExampleIndicators5" class="carousel slide  " data-bs-interval="false"
                    style="height:54px">
                    <div class="carousel-inner scroll-images">

                      <div class="carousel-item active" style="text-align: center;">
                        <div class="container">
                          <div class="child mb-0" style="height:auto">
                            <button class="tablinks active tabresact" style="width:100%"
                              onclick="opentab5(event, 'tab15tab1')">General</button>
                          </div>

                        </div>
                      </div>
                      <div class="carousel-item" style="text-align: center;">
                        <div class="container">
                          <div class="child mb-0" style="height:auto;">
                            <button class="tablinks tabresact" style="width:100%"
                              onclick="opentab5(event, 'tab15tab2')">Signature</button>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item" style="text-align: center;">
                        <div class="container">
                          <div class="child mb-0" style="height:auto;">
                            <button class="tablinks tabresact" style="width:100%"
                              onclick="opentab5(event, 'tab15tab3')">Document
                              Formats</button>
                          </div>
                        </div>
                      </div>

                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators5"
                        data-bs-slide="prev" style="margin-top:10px">
                        <i class="bi bi-chevron-left icon" style="color:black;font-weight: bold;"></i>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators5"
                        data-bs-slide="next" style="margin-top:10px">
                        <i class="bi bi-chevron-right icon" style="color:black;font-weight:bold"></i>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <hr class="fileline linemrg">
                </div>
              </div> -->

            <div class="accordion-item borsin borrsin">
              <h2 class="accordion-header" id="accordionwithplusExample3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#accor_plusExamplecollapse3" aria-expanded="false"
                  aria-controls="accor_plusExamplecollapse3">
                  General
                </button>
              </h2>
              <div id="accor_plusExamplecollapse3" class="accordion-collapse collapse"
                aria-labelledby="accordionwithplusExample3" data-bs-parent="#accordionWithplusicon">
                <div class="accordion-body">
                  <div class=" cnt-margin1">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop">
                          <label for="tags" class="purchaseinfo mb-1">PDF Font</label>
                          <select class="selectpicker form-control" name="pdf_font" data-live-search="true"
                            title="None Selected">
                            <option></option>
                            <option>fdfsd</option>
                            <option>Pfdd</option>
                            <option>Sfdsf</option>
                            <option>Dsnjjsd</option>
                            <option>gdfgnj</option>
                            <option>dsalkl</option>
                            <option>nsnl</option>
                            <option>cksk</option>
                            <option>Rkckc</option>
                          </select>

                          <script>
                            $('select[name="pdf_font"]').selectpicker('val', '<?= $pdf->pdf_font ?>')
                          </script>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Swap Company/Customer Details (company details to right side,
                            customer details to left side)
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="swap_com_or_cus_details" value="1"
                              <?= ($pdf->swap_com_or_cus_details) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="swap_com_or_cus_details"
                              value="0" <?= ($pdf->swap_com_or_cus_details) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo ">Default font size
                          </label>
                          <input type="number" name="default_font_size" value="<?= $pdf->default_font_size ?>"
                            class="form-control purchaseselects">
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo">Items table heading
                          color</label>
                        <div class="input-group color-input-group bnsin">
                          <input type="text" name="Item_table_head_color" value="<?= $pdf->Item_table_head_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic dbsin">
                            <input type="color" class="color-input border-0" value="<?= $pdf->Item_table_head_color ?>">
                          </div>
                        </div>

                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo ">Items table heading text
                          color</label>
                        <div class="input-group color-input-group bnsin">
                          <input type="text" name="item_table_head_text_color"
                            value="<?= $pdf->item_table_head_text_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic dbsin">
                            <input type="color" class="color-input border-0"
                              value="<?= $pdf->item_table_head_text_color ?>">
                          </div>
                        </div>

                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo ">
                            Custom PDF Company Logo URL
                          </label>
                          <input type="text" name="custom_pdf_company_logo" value="<?= $pdf->custom_pdf_company_logo ?>"
                            class="form-control purchaseselects">
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo ">Logo Width (PX)
                          </label>
                          <input type="number" name="logo_width" value="<?= $pdf->logo_width ?>"
                            class="form-control purchaseselects">
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">


                          <label class="purchaseinfo mb-1">Show Invoice/Estimate/Credit Note
                            status on PDF documents</label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="show_status_on_pdf" value="1"
                              <?= ($pdf->show_status_on_pdf) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                            <input type="radio" class="form-check-input lbl-margin " name="show_status_on_pdf" value="0"
                              <?= ($pdf->show_status_on_pdf) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                          </div>

                        </div>


                      </div>

                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">


                          <label class="purchaseinfo mb-1">Show Pay Invoice link to PDF (Not
                            applied if invoice status is Cancelled)</label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="show_pay_invoice_link" value="1"
                              <?= ($pdf->show_pay_invoice_link) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                            <input type="radio" class="form-check-input lbl-margin " name="show_pay_invoice_link"
                              value="0" <?= ($pdf->show_pay_invoice_link) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                          </div>

                        </div>


                      </div>

                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">


                          <label class="purchaseinfo mb-1">Show invoice payments
                            (transactions) on PDF</label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="show_invoice_payment" value="1"
                              <?= ($pdf->show_invoice_payment) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                            <input type="radio" class="form-check-input lbl-margin " name="show_invoice_payment"
                              value="0" <?= ($pdf->show_invoice_payment) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                          </div>

                        </div>


                      </div>

                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">


                          <label class="purchaseinfo mb-1">Show page number on PDF</label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="show_page_number" value="1"
                              <?= ($pdf->show_page_number) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                            <input type="radio" class="form-check-input lbl-margin " name="show_page_number" value="0"
                              <?= ($pdf->show_page_number) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                          </div>

                        </div>


                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accordion-item borsin borzsin">
              <h2 class="accordion-header" id="accordionwithplusExample4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#accor_plusExamplecollapse4" aria-expanded="false"
                  aria-controls="accor_plusExamplecollapse4">
                  Signature
                </button>
              </h2>
              <div id="accor_plusExamplecollapse4" class="accordion-collapse collapse"
                aria-labelledby="accordionwithplusExample4" data-bs-parent="#accordionWithplusicon">
                <div class="accordion-body">
                  <div class=" cnt-margin1">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show PDF Signature on Invoice
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="show_pdf_signature_on_invoice" value="1"
                              <?= ($pdf->show_pdf_signature_on_invoice) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin "
                              name="show_pdf_signature_on_invoice" value="0" <?= ($pdf->show_pdf_signature_on_invoice) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show PDF Signature on Estimate
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="show_pdf_signature_on_estimate"
                              value="1" <?= ($pdf->show_pdf_signature_on_estimate) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin "
                              name="show_pdf_signature_on_estimate" value="0" <?= ($pdf->show_pdf_signature_on_estimate) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show PDF Signature on Credit Note
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="show_pdf_signature_on_creditnote"
                              value="1" <?= ($pdf->show_pdf_signature_on_creditnote) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin "
                              name="show_pdf_signature_on_creditnote" value="0"
                              <?= ($pdf->show_pdf_signature_on_creditnote) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show PDF Signature on Contract
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="show_pdf_signature_on_contract"
                              value="1" <?= ($pdf->show_pdf_signature_on_contract) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin "
                              name="show_pdf_signature_on_contract" value="0" <?= ($pdf->show_pdf_signature_on_contract) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show PDF Signature on Proposal
                          </label><br>
                          <div class="checkbox ml-1">
                            <input type="radio" class="form-check-input " name="show_pdf_signature_on_proposal"
                              value="1" <?= ($pdf->show_pdf_signature_on_proposal) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin "
                              name="show_pdf_signature_on_proposal" value="0" <?= ($pdf->show_pdf_signature_on_proposal) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row" style="margin-bottom: 11px;">
                      <div class="col-md-12">
                        <div class=" ">
                          <label for="" class="excfllbl purchaseinfo mb-1">Signature
                            Image</label>
                          <div class="input-group d-flex flex-nowrap" style="border: none !important;">
                            <input type="file" name="signature_image" class="chooseexcfle">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accordion-item borsin borzsin">
              <h2 class="accordion-header" id="accordionwithplusExample6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#accor_plusExamplecollapse6" aria-expanded="false"
                  aria-controls="accor_plusExamplecollapse6">
                  Document Formats
                </button>
              </h2>
              <div id="accor_plusExamplecollapse6" class="accordion-collapse collapse"
                aria-labelledby="accordionwithplusExample6" data-bs-parent="#accordionWithplusicon">
                <div class="accordion-body">
                  <div class="cnt-margin1">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop">
                          <label class="purchaseinfo mb-1">Invoice</label>
                          <select name="invoice_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="invoice_size"]').selectpicker('val', '<?= $pdf->invoice_size ?>')
                        </script>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp  purch-drop ">
                          <label class="purchaseinfo mb-1">Estimate</label>
                          <select name="estimate_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="estimate_size"]').selectpicker('val', '<?= $pdf->estimate_size ?>')
                        </script>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop ">
                          <label class="purchaseinfo mb-1">Proposal</label>
                          <select name="proposal_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="proposal_size"]').selectpicker('val', '<?= $pdf->proposal_size ?>')
                        </script>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop ">
                          <label class="purchaseinfo mb-1">Payment</label>
                          <select name="payment_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="payment_size"]').selectpicker('val', '<?= $pdf->payment_size ?>')
                        </script>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop ">
                          <label class="purchaseinfo mb-1">Credit Note</label>
                          <select name="creditnote_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="creditnote_size"]').selectpicker('val', '<?= $pdf->creditnote_size ?>')
                        </script>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp  purch-drop">
                          <label class="purchaseinfo mb-1">Contract</label>
                          <select name="contract_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="contract_size"]').selectpicker('val', '<?= $pdf->contract_size ?>')
                        </script>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop ">
                          <label class="purchaseinfo mb-1">Statement</label>
                          <select name="statement_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="statement_size"]').selectpicker('val', '<?= $pdf->statement_size ?>')
                        </script>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- <form id="pdf_form" action="<?= site_url('setup/save-setting/pdf') ?>" onsubmit="saveSetting(this,event)">
                <input type="hidden" name="id" value="<?= $pdf->id ?>">
                <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>"> -->
            <!--PDf general-->
            <!-- <div class="tabcontent5" id="tab15tab1" style="display: block;">

                  <div class=" cnt-margin1">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop">
                          <label for="tags" class="purchaseinfo mb-1">PDF Font</label>
                          <select class="selectpicker form-control" name="pdf_font" data-live-search="true"
                            title="None Selected">
                            <option></option>
                            <option>fdfsd</option>
                            <option>Pfdd</option>
                            <option>Sfdsf</option>
                            <option>Dsnjjsd</option>
                            <option>gdfgnj</option>
                            <option>dsalkl</option>
                            <option>nsnl</option>
                            <option>cksk</option>
                            <option>Rkckc</option>
                          </select>

                          <script>
                            $('select[name="pdf_font"]').selectpicker('val', '<?= $pdf->pdf_font ?>')
                          </script>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Swap Company/Customer Details (company details to right side,
                            customer details to left side)
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="swap_com_or_cus_details" value="1"
                              <?= ($pdf->swap_com_or_cus_details) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin " name="swap_com_or_cus_details"
                              value="0" <?= ($pdf->swap_com_or_cus_details) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo ">Default font size
                          </label>
                          <input type="number" name="default_font_size" value="<?= $pdf->default_font_size ?>"
                            class="form-control purchaseselects">
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo">Items table heading
                          color</label>
                        <div class="input-group color-input-group">
                          <input type="text" name="Item_table_head_color" value="<?= $pdf->Item_table_head_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic">
                            <input type="color" class="color-input border-0" value="<?= $pdf->Item_table_head_color ?>">
                          </div>
                        </div>

                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">

                      <div class="col-md-12">

                        <label for="color" class="purchaseinfo ">Items table heading text
                          color</label>
                        <div class="input-group color-input-group">
                          <input type="text" name="item_table_head_text_color"
                            value="<?= $pdf->item_table_head_text_color ?>"
                            class="color-input form-control dropdownselect clrfnt">
                          <div class="input-group-text colorpic">
                            <input type="color" class="color-input border-0"
                              value="<?= $pdf->item_table_head_text_color ?>">
                          </div>
                        </div>

                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo ">
                            Custom PDF Company Logo URL
                          </label>
                          <input type="text" name="custom_pdf_company_logo" value="<?= $pdf->custom_pdf_company_logo ?>"
                            class="form-control purchaseselects">
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo ">Logo Width (PX)
                          </label>
                          <input type="number" name="logo_width" value="<?= $pdf->logo_width ?>"
                            class="form-control purchaseselects">
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">


                          <label class="purchaseinfo mb-1">Show Invoice/Estimate/Credit Note
                            status on PDF documents</label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="show_status_on_pdf" value="1"
                              <?= ($pdf->show_status_on_pdf) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                            <input type="radio" class="form-check-input lbl-margin " name="show_status_on_pdf" value="0"
                              <?= ($pdf->show_status_on_pdf) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                          </div>

                        </div>


                      </div>

                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">


                          <label class="purchaseinfo mb-1">Show Pay Invoice link to PDF (Not
                            applied if invoice status is Cancelled)</label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="show_pay_invoice_link" value="1"
                              <?= ($pdf->show_pay_invoice_link) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                            <input type="radio" class="form-check-input lbl-margin " name="show_pay_invoice_link"
                              value="0" <?= ($pdf->show_pay_invoice_link) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                          </div>

                        </div>


                      </div>

                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">


                          <label class="purchaseinfo mb-1">Show invoice payments
                            (transactions) on PDF</label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="show_invoice_payment" value="1"
                              <?= ($pdf->show_invoice_payment) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                            <input type="radio" class="form-check-input lbl-margin " name="show_invoice_payment"
                              value="0" <?= ($pdf->show_invoice_payment) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                          </div>

                        </div>


                      </div>

                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">


                          <label class="purchaseinfo mb-1">Show page number on PDF</label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="show_page_number" value="1"
                              <?= ($pdf->show_page_number) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes</label>
                            <input type="radio" class="form-check-input lbl-margin " name="show_page_number" value="0"
                              <?= ($pdf->show_page_number) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                          </div>

                        </div>


                      </div>

                    </div>
                  </div>

                </div> -->
            <!--Pdf-sign-->
            <!-- <div id="tab15tab2" class="tabcontent5" style="display: none;">

                  <div class=" cnt-margin1">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show PDF Signature on Invoice
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="show_pdf_signature_on_invoice" value="1"
                              <?= ($pdf->show_pdf_signature_on_invoice) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin "
                              name="show_pdf_signature_on_invoice" value="0" <?= ($pdf->show_pdf_signature_on_invoice) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show PDF Signature on Estimate
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="show_pdf_signature_on_estimate"
                              value="1" <?= ($pdf->show_pdf_signature_on_estimate) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin "
                              name="show_pdf_signature_on_estimate" value="0" <?= ($pdf->show_pdf_signature_on_estimate) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show PDF Signature on Credit Note
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="show_pdf_signature_on_creditnote"
                              value="1" <?= ($pdf->show_pdf_signature_on_creditnote) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin "
                              name="show_pdf_signature_on_creditnote" value="0"
                              <?= ($pdf->show_pdf_signature_on_creditnote) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show PDF Signature on Contract
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="show_pdf_signature_on_contract"
                              value="1" <?= ($pdf->show_pdf_signature_on_contract) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin "
                              name="show_pdf_signature_on_contract" value="0" <?= ($pdf->show_pdf_signature_on_contract) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp">
                          <label class="purchaseinfo mb-1">
                            Show PDF Signature on Proposal
                          </label><br>
                          <div class="checkbox">
                            <input type="radio" class="form-check-input " name="show_pdf_signature_on_proposal"
                              value="1" <?= ($pdf->show_pdf_signature_on_proposal) ? 'checked' : '' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">Yes
                            </label>
                            <input type="radio" class="form-check-input lbl-margin "
                              name="show_pdf_signature_on_proposal" value="0" <?= ($pdf->show_pdf_signature_on_proposal) ? '' : 'checked' ?>>
                            <label class="form-check-label lbl-space-1 radio-text-size">No</label>


                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class=" ">
                          <label for="" class="excfllbl purchaseinfo mb-1">Signature
                            Image</label>
                          <div class="input-group d-flex flex-nowrap">
                            <input type="file" name="signature_image" class="chooseexcfle">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div> -->
            <!--Document format-->
            <!-- <div id="tab15tab3" class="tabcontent5" style="display: none;">

                  <div class="cnt-margin1">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop">
                          <label class="purchaseinfo mb-1">Invoice</label>
                          <select name="invoice_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="invoice_size"]').selectpicker('val', '<?= $pdf->invoice_size ?>')
                        </script>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp  purch-drop ">
                          <label class="purchaseinfo mb-1">Estimate</label>
                          <select name="estimate_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="estimate_size"]').selectpicker('val', '<?= $pdf->estimate_size ?>')
                        </script>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop ">
                          <label class="purchaseinfo mb-1">Proposal</label>
                          <select name="proposal_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="proposal_size"]').selectpicker('val', '<?= $pdf->proposal_size ?>')
                        </script>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop ">
                          <label class="purchaseinfo mb-1">Payment</label>
                          <select name="payment_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="payment_size"]').selectpicker('val', '<?= $pdf->payment_size ?>')
                        </script>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop ">
                          <label class="purchaseinfo mb-1">Credit Note</label>
                          <select name="creditnote_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="creditnote_size"]').selectpicker('val', '<?= $pdf->creditnote_size ?>')
                        </script>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp  purch-drop">
                          <label class="purchaseinfo mb-1">Contract</label>
                          <select name="contract_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="contract_size"]').selectpicker('val', '<?= $pdf->contract_size ?>')
                        </script>
                      </div>
                    </div>
                    <hr class="fileline equalspaceforhr">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="purchasegrp purch-drop ">
                          <label class="purchaseinfo mb-1">Statement</label>
                          <select name="statement_size" class="form-control selectpicker">
                            <option>A4 Portrait</option>
                            <option>A4 Landscape</option>
                            <option>Letter Portrait</option>
                            <option>Letter Landscape</option>

                          </select>
                        </div>
                        <script>
                          $('select[name="statement_size"]').selectpicker('val', '<?= $pdf->statement_size ?>')
                        </script>
                      </div>
                    </div>
                  </div>

                </div>
              </form> -->
          </div>
        </div>
      </div>
      <!--E-sign-->
      <div id="E-Sign" class="tabcontent1 ps-0 ml-3" style="display:none">
        <form id="sign_form" action="<?= site_url('setup/save-setting/esign') ?>" onsubmit="saveSetting(this,event)">
          <input type="hidden" name="id" value="<?= $esign->id ?>">
          <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>">
          <div class="panel-body1">

            <div class="row">
              <div class="col-md-12">
                <p>Proposal</p>
                <div class="purchasegrp">
                  <label class="purchaseinfo mb-1">Require digital signature and identity
                    confirmation on accept</label><br>
                  <div class="checkbox ml-1">
                    <input type="radio" id="r1" class="form-check-input " name="proposal_sign" value="1"
                      <?= ($esign->proposal_sign) ? 'checked' : '' ?>>
                    <label for="r1" class="form-check-label lbl-space-1 radio-text-size mrfsin">Yes</label>
                    <input type="radio" id="r2" class="form-check-input lbl-margin " name="proposal_sign" value="0"
                      <?= ($esign->proposal_sign) ? '' : 'checked' ?>>
                    <label for="r2" class="form-check-label lbl-space-1 radio-text-size">No</label>
                  </div>

                </div>
              </div>

            </div>
            <hr class="fileline equalspaceforhr">
            <div class="row">
              <div class="col-md-12">
                <p>Estimate</p>
                <div class="purchasegrp">


                  <label class="purchaseinfo mb-1">Require digital signature and identity
                    confirmation on accept</label><br>
                  <div class="checkbox ml-1">
                    <input type="radio" class="form-check-input " name="estimate_sign" value="1"
                      <?= ($esign->estimate_sign) ? 'checked' : '' ?>>
                    <label class="form-check-label lbl-space-1 radio-text-size mrfsin ">Yes</label>
                    <input type="radio" class="form-check-input lbl-margin " name="estimate_sign" value="0"
                      <?= ($esign->estimate_sign) ? '' : 'checked' ?>>
                    <label class="form-check-label lbl-space-1 radio-text-size">No</label>

                  </div>
                </div>
              </div>

            </div>
            <hr class="fileline equalspaceforhr">
            <div class="row">
              <div class="col-md-12">
                <div class="purchasegrp">
                  <label class="emailpro ">Legal Bound Text</label>
                  <textarea class="textdesc" rows="4"
                    style="margin-top: 5px;"><?= $esign->legal_bound_text ?></textarea>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>

      <!--Tag-->
      <div id="Tags" class="tabcontent1 ps-0" style="display:none">
        <form id="tag_form" action="<?= site_url('setup/save-tag-setting') ?>" onsubmit="saveSetting(this,event)">
          <div class="panel-body1">
            <?php if (!empty($tags)): ?>
              <?php foreach ($tags as $tag): ?>
                <div class="row mb-2">
                  <div class="col-md-12">
                    <div class="chseexc ">
                      <div class="input-group d-flex flex-nowrap">
                        <div class=" addon1 text-center textin">
                          <?= $tag->id ?>
                        </div>
                        <input type="hidden" name="id[]" value="<?= $tag->id ?>">
                        <input type="text" name="name[]" class="file_in" value="<?= $tag->name ?>">
                        <span class="input-group-addon">
                          <button id="add_btn1" type="button" class="clsbtn"
                            onclick="deleteIt('<?= site_url('setup/delete-tag/' . $tag->id) ?>')"><i
                              class="fa fa-remove"></i></button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            <?php else: ?>
              <span class="mlesin">No tags used by the system</span>
            <?php endif ?>

          </div>
        </form>

      </div>
      <!--System Update-->
      <div id="System Update" class="tabcontent1 ps-0" style="display: none;">

        <div class="panel-body1" style="margin-top: -12px;">

          <div class="row">
            <div class="col-md-12">
              <div class="purchasegrp">
                <label class="purchaseinfo ">Purchase Key</label>
                <input type="text" class="form-control purchaseselects">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 text-center">
              <div class="alert alert-primary alert-box" role="alert">
                <h4 class="alert-text"> Your Version</h4>
                3.0.6
              </div>
            </div>
            <div class="col-md-6 text-center">
              <div class="alert alert-primary alert-box" role="alert">
                <h4 class="alert-text"> Latest Version</h4>
                3.0.6
              </div>
            </div>
          </div>
          <hr class="fileline equalspaceforhr">
          <div class="row">
            <div class="col-md-12 text-center">
              <h4 class="text-success">
                You are using the latest version
              </h4>
            </div>
          </div>
        </div>


      </div>
      <!--Setting button-->
      <div class="row mr-4 ">
        <div class="col-md-12 blkftr ml-3">
          <div class="modal-footer taskfooter p-2 text-end mr-1 mt-0" style="z-index: 0;">
            <button type="submit" form="general_form" class="tasksave1 mr-5 uppercase" id="save-setting-button"
              style="margin-bottom: 15px;">Save
              Settings</button>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>
</div>

<!---Modal---->
<div class="modal fade" id="modal_md" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>

<script>
  function showMdModal(url, title) {

    $('#modal_md').on('shown.bs.modal', function () {
      $('.selectpicker').selectpicker('refresh');
    });
    $('#modal_md').modal('show', {
      backdrop: 'true'
    });
    $.ajax({
      url: url,
      success: function (response) {
        $('#modal_md .modal-title').html(title);
        $('#modal_md .modal-body').html(response);
      }
    });
  }
</script>


<!-- Tabs--->


<!-- Tabs-->

<script>
  function opentab2(evt, tabName) {
    var i, tabcontent1, tablinks2;
    tabcontent1 = document.getElementsByClassName("tabcontent1");
    for (i = 0; i < tabcontent1.length; i++) {
      tabcontent1[i].style.display = "none";
    }
    tablinks2 = document.getElementsByClassName("tablinks2");
    for (i = 0; i < tablinks2.length; i++) {
      tablinks2[i].className = tablinks2[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Automatically open the first tab when the page loads
  document.addEventListener("DOMContentLoaded", function () {
    document.getElementsByClassName("tablinks2")[0].click();
  });
</script>


<script>
  function opentab(evt, tabName) {
    const tabcontent = document.getElementsByClassName("tabcontent");
    for (let i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    const tablinks = document.getElementsByClassName("tablinks1");
    for (let i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    evt.currentTarget.children[0].children[0].classList.add("active");
    document.getElementById(tabName).style.display = "block";
    document.getElementById('lblname').innerHTML = tabName;
  }
</script>

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
</script>

<script>
  function opentab3(evt, tabName) {

    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent3");
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
</script>
<script>
  function opentab5(evt, tabName) {

    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent5");
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
</script>

<script>
  var carousel = document.getElementById("carouselExampleIndicators");

  carousel.addEventListener("slid.bs.carousel", function (event) {
    var activeSlideIndex = event.to;

    if (activeSlideIndex === 0) {
      opentab1(event, 'tab10tab1');
    } else if (activeSlideIndex === 1) {
      opentab1(event, 'tab10tab2');
    } else if (activeSlideIndex === 2) {
      opentab1(event, 'tab10tab3');
    } else if (activeSlideIndex === 3) {
      opentab1(event, 'tab10tab4');
    } else if (activeSlideIndex === 4) {
      opentab1(event, 'tab10tab5');
    }

  });
</script>

<script>
  var carousel = document.getElementById("carouselExampleIndicators2");

  carousel.addEventListener("slid.bs.carousel", function (event) {
    var activeSlideIndex = event.to;

    if (activeSlideIndex === 0) {
      opentab3(event, 'tab12tab1');
    } else if (activeSlideIndex === 1) {
      opentab3(event, 'tab12tab2');
    }

  });
</script>

<script>
  var carousel = document.getElementById("carouselExampleIndicators5");

  carousel.addEventListener("slid.bs.carousel", function (event) {
    var activeSlideIndex = event.to;

    if (activeSlideIndex === 0) {
      opentab5(event, 'tab15tab1');
    } else if (activeSlideIndex === 1) {
      opentab5(event, 'tab15tab2');
    } else if (activeSlideIndex === 2) {
      opentab5(event, 'tab15tab3');
    }

  });
</script>

<!--Horizontal Tab-->
<script>
  function openTab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";

    }
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.querySelector(".tablinks")?.classList.remove("active");
    document.getElementById(tabName).style.display = "block";
    document.getElementById('lblname').innerHTML = tabName;


  }
</script>


<!--Tooltip-->
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  });
</script>

<!-- by dj  -->
<script>
  $('.tab_button').click(function () {
    const settingId = $(this).attr('id');
    const formId = settingId.replace('_setting', '_form');
    $('#save-setting-button').attr('form', formId);
  });

  function saveSetting(formElement, e) {
    e.preventDefault();
    const url = formElement.action;
    const formData = new FormData(formElement);

    $.ajax({
      type: "POST",
      url: url,
      data: formData,
      processData: false,
      contentType: false,
      cache: false,
      dataType: "json",
      success: function (response) {
        if (response.isUpdated) {
          toastr.success('Updated Successfully');
        } else {
          toastr.error('Oops! Something went wrong');
        }
      }
    });
  }

  function deleteIt(url) {
    const thatElement = event.target.closest('.row');

    $.ajax({
      type: "DELETE",
      url: url,
      dataType: "json",
      success: function (response) {
        if (response.isDeleted) {
          toastr.success('Deleted successfully!', 'Success');
          thatElement.remove();
        } else {
          toastr.error('Something went wrong!', 'Error');
        }
      }
    });
  }
</script>

<script>
  // code for multiple checkbox to get checked values
  $('.dcp_ckbox').change(function () {
    const checkedValues = $('.dcp_ckbox:checked').map(function () {
      return this.value;
    }).get().join(',');
    $('input[name="default_contact_permission"]').val(checkedValues);
  });

  $('.dcp_ckbox').trigger('change');

  // code for multiselect to put values in input element
  $('select.bs-multiselect').change(function () {
    const name = $(this).attr('data-name');
    const selectVal = $(this).selectpicker('val').join(',');
    $(`input[name="${name}"]`).val(selectVal);
  });
</script>

<script>
  // code for color picker
  $(document).ready(function () {
    $(".color-input").on('input', function () {
      const parent = $(this).closest('.color-input-group');
      const type = $(this).attr('type') === 'text' ? 'color' : 'text';
      const colorValue = this.value.length == 7 ? this.value : '#000000';
      parent.find(`input[type="${type}"]`).val(colorValue);
    })
  });
</script>

<script>
  // script to confirm user to leave page code by DJ
  window.addEventListener('beforeunload', (event) => {
    event.returnValue = 'Are you sure you want to leave?';
  });
</script>
<!-- by dj  -->
<script>
  var carousel = document.getElementById("carouselExampleIndicators1");
  carousel.addEventListener("slid.bs.carousel", function (event) {
    var activeSlideIndex = event.to;

    if (activeSlideIndex === 0) {
      opentab2(event, 'General')
    } else if (activeSlideIndex === 1) {
      opentab2(event, 'Company Information');
    } else if (activeSlideIndex === 2) {
      opentab2(event, 'Localization');
    } else if (activeSlideIndex === 3) {
      opentab2(event, 'Finance');
    } else if (activeSlideIndex === 4) {
      opentab2(event, 'Customers');
    } else if (activeSlideIndex === 5) {
      opentab2(event, 'Tasks');
    }
    else if (activeSlideIndex === 6) {
      opentab2(event, 'Leads');
    }
    else if (activeSlideIndex === 7) {
      opentab2(event, 'Calendar');
    }
    else if (activeSlideIndex === 8) {
      opentab2(event, 'PDF');
    }
    else if (activeSlideIndex === 9) {
      opentab2(event, 'E-Sign');
    }
    else if (activeSlideIndex === 9) {
      opentab2(event, 'Tags');
    }
    else if (activeSlideIndex === 9) {
      opentab2(event, 'System Update');
    }
    else if (activeSlideIndex === 9) {
      opentab2(event, 'System Update');
    }
  });
  function checkfirstlogin() {
    $.ajax({
      type: "POST",
      url: '<?= base_url() ?>/Home/checkfirstlogin',
      dataType: "json",
      success: function (response) {

      }
    });
  }
  checkfirstlogin();
</script>