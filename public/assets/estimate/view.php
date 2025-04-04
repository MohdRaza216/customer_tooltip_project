<style>
  .modal-footer.taskfooter {
    margin-bottom: 0;
  }

  tr.border-bottom td {
    /* background-color: #f6f6f6 !important; */
    color: #000 !important;
  }

  .newalimeth {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .dataTables_wrapper {
    padding-top: 0 !important;
  }

  .pull-right {
    position: relative !important;
    bottom: 22px !important;
  }

  /* .{
    position: relative;
    top: -27px;
  }
  .{
    position: relative;
    bottom: -26px;
  } */
</style>
<!-- <div id="sec_col" class="col-md-7 exptblecol sec-column ">            <div class="row"> -->
<div id="showcontent" style="display: block;">
  <div class="expbodysec sec-column-body " style="
          width: 100%;" >
    <!-- <div class="invseccol invt_row mlnfchan" style="
          width: 112%;"> -->

      <div class="row">
        <div class="col-md-12 ">
          <div class="tab-container invtabhdr">
            <!-- added hr line-->
            <!-- <hr class="fileline mt-minus-margin_1"> -->
            <!-- <ul id="tabList" class="desktop">
                <li>
                  <div class="child invchildmtmb ">
                    <button class="tablinks tb-linksmb active" onclick="openTab(event, 'Tab1')">Preview</button>
                  </div>
                </li>
                <li>
                  <div class="child invchildmtmb ">
                    <button class="tablinks tb-linksmb" onclick="openTab(event, 'Tab2')">Tasks</button>
                  </div>
                </li>
                <li>
                  <div class="child invchildmtmb ">
                    <button class="tablinks tb-linksmb" onclick="openTab(event, 'Tab3')">Activity Log</button>
                  </div>
                </li>
                <li>
                  <div class="child invchildmtmb ">
                    <button class="tablinks tb-linksmb" onclick="openTab(event, 'Tab4')">Reminder
                    </button>
                  </div>
                </li>
                <li>
                  <div class="child invchildmtmb ">
                    <button class="tablinks tb-linksmb" onclick="openTab(event, 'Tab5')">Notes
                      <?php if ((int) $number_of_notes): ?><span class="notifbtn ml-1">
                          <?= $number_of_notes ?>
                        </span>
                      <?php endif ?>
                    </button>
                  </div>
                </li>
                <li>
                  <div class="child invchildmtmb">
                    <button class="tablinks tb-linksmb invtogtabmail" onclick="openTab(event, 'Tab6')"
                      data-bs-toggle="tooltip" data-bs-title="Email Tracking"><i class="bi-envelope-open"></i></button>
                  </div>
                </li>
                <li>
                  <div class="child invchildmtmb invchildml">
                    <button class="tablinks tb-linksmb invtogtabeye" onclick="openTab(event, 'Tab7')" data-bs-toggle="tooltip"
                      data-bs-title="View"><i class="fa fa-eye"></i></button>
                  </div>
                </li>
                <li>
                  <div class="child invchildmtmb invchildml">
                    <button onclick="expandTable()" class=" tablinks  tb-links intogtabexp" data-bs-toggle="tooltip"
                      data-bs-title="Toggle full view"><i class="fa fa-expand"></i></button>
                  </div>
                </li>

              </ul> -->
            <div class="row">
              <div class="col-md-12 ">
                <div class="desktop desk-mrg-top20">
                  <div class="scroll-images custml toptea border-bott">
                    <div class="child mb-0 childd-tabb">
                      <button class="tablinks tb-links childd-tabb-links newalimeth active"
                        onclick="openTab(event, 'Tab1')">Expense
                        Of</button>
                    </div>
                    <div class="child mb-0 childd-tabb">
                      <button class="tablinks tb-links childd-tabb-links newalimeth"
                        onclick="openTab(event, 'Tab2')">Tasks</button>
                    </div>
                    <div class="child mb-0 childd-tabb">
                      <button class="tablinks tb-links childd-tabb-links newalimeth" onclick="openTab(event, 'Tab3')">Activity
                        Log</button>
                    </div>
                    <div class="child mb-0 childd-tabb">
                      <button class="tablinks tb-links childd-tabb-links newalimeth"
                        onclick="openTab(event, 'Tab4')">Reminders</button>
                    </div>
                    <div class="child mb-0 childd-tabb">
                      <button class="tablinks tb-links childd-tabb-links newalimeth" onclick="openTab(event, 'Tab5')">Notes
                        <?php if ((int) $number_of_notes): ?><span class="notifbtn ml-1">
                            <?= $number_of_notes ?>
                          </span>
                        <?php endif ?>
                      </button>
                    </div>

                    <div class="child mb-0 childd-tabb">
                      <button onclick="openTab(event, 'Tab6')"
                        class="tablinks tb-links childd-tabb-links newalimeth" ><i class="bi-envelope-open"></i> </button>
                    </div>
                    <div class="child mb-0 childd-tabb">
                      <button onclick="openTab(event, 'Tab7')" class="tablinks tb-links childd-tabb-links newalimeth"
                        data-bs-toggle=" tooltip" data-bs-title="Toggle full view"><i class="fa fa-eye"></i></button>
                    </div>
                    <div class="child mb-0 childd-tabb">
                      <button onclick="expandTable()" class="tablinks tb-links childd-tabb-links newalimeth"
                        data-bs-toggle="tooltip" data-bs-title="Toggle full view"><i class="fa fa-expand"></i></button>
                    </div>

                  </div>
                </div>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-interval="false"
                  style="height: 50px;">
                  <div class="carousel-inner scroll-images">

                    <div class="carousel-item active" style="text-align: center;">
                      <div class="container">
                        <div class="child mb-0  " style="height:auto;">
                          <button class="tablinks tabresact childd-tabb-links-carsl active" style="width:70%"
                            onclick="openTab(event, 'Tab1')">Expense
                            Of</button>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item" style="text-align: center;">
                      <div class="container">
                        <div class="child mb-0" style="height:auto;">
                          <button class="tablinks tabresact childd-tabb-links-carsl" style="width:70%"
                            onclick="openTab(event, 'Tab2')">Tasks</button>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item" style="text-align: center;">
                      <div class="container">
                        <div class="child mb-0" style="height:auto;">
                          <button class="tablinks tabresact childd-tabb-links-carsl" style="width:70%"
                            onclick="openTab(event, 'Tab3')">Reminders</button>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item" style="text-align: center;">
                      <div class="container">
                      <div class="child mb-0 childd-tabb">
                      <button class="tablinks tb-links childd-tabb-links newalimeth" onclick="openTab(event, 'Tab5')">Notes
                        <?php if ((int) $number_of_notes): ?><span class="notifbtn ml-1">
                            <?= $number_of_notes ?>
                          </span>
                        <?php endif ?>
                      </button>
                    </div>
                      </div>
                    </div>
                    <div class="carousel-item" style="text-align: center;">
                      <div class="container">
                      <div class="child mb-0 childd-tabb">
                      <button onclick="openTab(event, 'Tab6')"
                        class="tablinks tb-links childd-tabb-links newalimeth" ><i class="bi-envelope-open"></i> </button>
                    </div>
                      </div>
                    </div>
                    <div class="carousel-item" style="text-align: center;">
                      <div class="container">
                      <div class="child mb-0 childd-tabb">
                      <button onclick="openTab(event, 'Tab7')" class="tablinks tb-links childd-tabb-links newalimeth"
                        data-bs-toggle=" tooltip" data-bs-title="Toggle full view"><i class="fa fa-eye"></i></button>
                    </div>
                      </div>
                    </div>
                    <div class="carousel-item" style="text-align: center;">
                      <div class="container">
                      <div class="child mb-0 childd-tabb">
                      <button onclick="expandTable()" class="tablinks tb-links childd-tabb-links newalimeth"
                        data-bs-toggle="tooltip" data-bs-title="Toggle full view"><i class="fa fa-expand"></i></button>
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
                <hr class="tab-hr">
              </div>
            </div>
            <!-- added hr line-->
            <!-- <hr class="fileline mt-minus-margin"> -->
            <div class="tab-arrow lefts" onclick="scrollTabs('left')">
              <i class="bi bi-chevron-left arrowfont"></i>
            </div>
            <div class="tab-arrow right" onclick="scrollTabs('right')">
              <i class="bi bi-chevron-right arrowfont "></i>
            </div>

          </div>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-interval="false" style="height:54px">
            <div class="carousel-inner scroll-images">
              <div class="carousel-item active" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto">
                    <button class="tablinks active tabresact" style="width:70%"
                      onclick="openTab(event, 'Tab1')">Preview</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks tabresact" style="width:70%" onclick="openTab(event, 'Tab2')">Tasks</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks tabresact" style="width:70%" onclick="openTab(event, 'Tab3')">Activity
                      Log</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks tabresact" style="width:70%"
                      onclick="openTab(event, 'Tab4')">Reminder</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks tabresact" style="width:70%" onclick="openTab(event, 'Tab5')">Notes</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks tabresact" style="width:70%" onclick="openTab(event, 'Tab6')">Email
                      Tracking</button>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="text-align: center;">
                <div class="container">
                  <div class="child mb-0" style="height:auto;">
                    <button class="tablinks tabresact" style="width:70%" onclick="openTab(event, 'Tab7')">View</button>
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
        </div>
      </div>

      <div class="pl-5 pb-3 pr-5">

        <div class="row ">

          <div class="col-md-2  propaidmt" style="cursor: pointer;">
            <?php $status = '<span class="square-label" style="margin-top: 14px; margin-left: -8px;">DRAFT</span>';
            if ($estimate->status == 'Sent') {
              $status = '<span class="square-label in-progress-label">SENT</span>';
            } else if ($estimate->status == 'Expired') {
              $status = '<span class="square-label on-hold-label">EXPIRED</span>';
            } else if ($estimate->status == 'Accepted') {
              $status = '<span class="square-label finished-label">ACCEPTED</span>';
            } else if ($estimate->status == 'Declined') {
              $status = '<span class="square-label cancelled-label">DECLINED</span>';
            }
            echo $status; ?>
          </div>

          <div class="col-md-10 tabbtnwidth ">
            <div class="proposaltabbtns flex items-center justify-end">
              <!-- pdf icon -->
              <button type="button" class="pdfconbtn  butnew protabbtn"
                onclick="window.location.href = '<?= site_url('sales/edit-estimate/' . $estimate->id) ?>';"
                data-bs-toggle="tooltip" data-bs-title="Edit"><i class="fa fa-edit mailicn "></i></button>
              <button type="button" class="pdfconbtn  butnew protabbtn" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="bi bi-file-earmark-pdf"></i><i class="fa-solid fa-caret-down hrques caretml"></i>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item left-dropdown-text" href="#">PDF</a></li>
                <li><a class="dropdown-item left-dropdown-text" href="#">Print</a></li>
              </ul>
              <button type="button" data-bs-toggle="tooltip" data-bs-title="Send an email" data-bs-placement="bottom"
                class="pdfconbtn  butnew protabbtn"><i class="fa fa-envelope"></i>
              </button>

              <button class="pdfconbtn  butnew protabbtn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                More<i class="fa-solid fa-caret-down hrques caretml"></i>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#attachment_model">Attach File</a>
                </li>
                <?php
                if ($invoice == null) {
                  $sts = ['Draft', 'Sent', 'Expired', 'Accepted', 'Declined'];
                  foreach ($sts as $value) {
                    if ($value != $estimate->status) {
                      echo '<li><a class="dropdown-item" href="javascript:void(0);" onclick="updateStatus(\'sales_estimate\',\'' . $estimate->id . '\', \'' . $value . '\')">Mark as ' . $value . '</a></li>';
                    }
                  }
                }
                ?>
                <li><a class="dropdown-item moredel" href="javascript:void(0)"
                    onclick="deleteIt('<?= site_url('sales/delete-estimate/' . $estimate->id) ?>')">Delete</a></li>
              </ul>

              <?php if ($invoice == null): ?>
                <button type="button" class="tabpaymentbtnestt protabbtn hrtbtns itemgrnbtn" data-bs-toggle="dropdown"
                  aria-expanded="false">Convert<i class="fa-solid fa-caret-down caretml"></i>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item"
                      href="<?= base_url('sales/estimate-to-invoice/' . $estimate->id) ?>">Convert To
                      Invoice</a></li>
                  <!--<li><a class="dropdown-item" href="#">Convert To Purchase Order</a></li>-->
                </ul>
              <?php else: ?>
                <button type="button" class="">
                  <?= $invoice->prefix . $invoice->number ?>
                </button>
              <?php endif ?>

            </div>
          </div>

          <hr class="fileline mt-3 ml-3 mr-3" style="width: 95%; ">
        </div>
        <!-- challan tab  -->
        <div class=" tabcontent " id=" Tab1" style="display: block;">
          <!-- ----  -->
          <div class="row invstabrowpb">
            <div class="col-md-6 col-sm-6">
              <h5 class="fo18" style="cursor:pointer">
                <a href="sales_credit_edit.html" class="invhvr">
                  <?= $estimate->prefix . $estimate->number ?>
                </a>
              </h5>
              <div class="bankview">
                <?= $company->company_name ?>
              </div>
              <div class="fntthrtn">
                <?= $company->address ?><br>
                <?= $company->city . ',' ?>
                <?= $company->state . ',' ?><br>
                <?= $company->country_code . ',' ?>
                <?= $company->zip_code . '.' ?><br>
                <?php if (!empty($company->vat_number)): ?>VAT Number:
                  <?= $company->vat_number ?>
                <?php endif ?>
              </div>
            </div>

            <div class="col-sm-6 tabestimate">
              <?php if (!empty($estimate->bill_address)): ?>
                <div>
                  <span> <b>Bill To:</b></span>
                  <address>
                    <a class="aacmpy" href="javascript:void(0)">
                      <?= $customer?->company ?>
                    </a><br>
                    <?= $estimate->bill_address ?>
                  </address>
                </div>
              <?php endif ?>
              <?php if (!empty($estimate->ship_address)): ?>
                <div>
                  <span> <b>Ship To:</b></span>
                  <address>
                    <?= $estimate->ship_address ?>
                  </address>
                </div>
              <?php endif ?>
              <p class="mb-0">
                <span class="grntec">
                  Estimate Date:
                </span>
                <?= date('jS M Y', strtotime($estimate->date)) ?>
              </p>
              <?php if (!empty($estimate->expiry_date)): ?>
                <div>
                  <span class="grntec">
                    Expiry Date:
                  </span>
                  <?= date('jS M Y', strtotime($estimate->expiry_date)) ?>
                </div>
              <?php endif ?>
              <?php if (!empty($estimate->reference)): ?>
                <p class="mb-0">
                  <span class="grntec">
                    Reference #:
                  </span>
                  <?= $estimate->reference ?? '' ?>
                </p>
              <?php endif ?>
              <?php if (!empty($estimate->sales_agent)): ?>
                <p class="mb-0">
                  <span class="grntec">
                    Sales Agent:
                  </span>
                  <?= $staff->first_name . " " . $staff->last_name ?>
                </p>
              <?php endif ?>

            </div>
          </div>
          <!-- ----  -->
          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table draggable-table">
                  <thead class="trprimry" style="background-color: #f6f6f6 !important;color: #000 !important;">
                    <tr>
                      <th></th>
                      <th>#</th>
                      <th>Item</th>
                      <th>Qty</th>
                      <th>Rate</th>
                      <th>Tax</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($items)):
                      $sno = 1; ?>

                      <?php foreach ($items as $item): ?>
                        <tr>
                          <td class="handle-icon ">
                            <i class="bi bi-grip-vertical "></i>
                          </td>
                          <td>
                            <?= $sno ?>
                          </td>
                          <td>
                            <strong>
                              <?= $item->description ?>
                            </strong>
                            <br>
                            <?= $item->long_description ?>
                          </td>
                          <td>
                            <?= $item->quantity ?>
                            <?= $item->unit ?>
                          </td>
                          <td>
                            <?= $item->rate ?>
                          </td>
                          <td>
                            <?php if (!empty($item->tax) && !empty($taxes)): ?>
                              <?php foreach (explode(',', $item->tax) as $taxId): ?>
                                <?php foreach ($taxes as $tax): ?>
                                  <?php if ($tax->id == $taxId): ?>
                                    <?php echo "$tax->name ($tax->percentage%)<br />" ?>
                                  <?php endif ?>
                                <?php endforeach ?>
                              <?php endforeach ?>
                            <?php endif ?>
                          </td>
                          <td>
                            <?= $item->amount ?>
                          </td>
                        </tr>
                        <?php $sno++; ?>
                      <?php endforeach ?>
                    <?php endif ?>

                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-md-7"></div>
            <div class="col-md-5 col-md-offset-7">
              <table style="float:right">
                <tbody class="borcsin">
                  <tr class="">
                    <td> <span class="grntec">Subtotal</span>
                    </td>
                    <td>
                      <?= $estimate->subTotal ?>
                    </td>
                  </tr>
                  <?php if (!empty($estimate->discountTotal)): ?>
                    <tr class="">
                      <td> <span class="grntec">Discount</span>
                      </td>
                      <td>
                        <?= $estimate->discountTotal ?>
                      </td>
                    </tr>
                  <?php endif ?>
                  <?php if (!empty($estimate->taxTotal)): ?>
                    <tr class="">
                      <td> <span class="grntec">Tax</span>
                      </td>
                      <td>
                        <?= $estimate->taxTotal ?>
                      </td>
                    </tr>
                  <?php endif ?>
                  <?php if (!empty($estimate->adjustmentTotal)): ?>
                    <tr class="">
                      <td> <span class="grntec">Adjustment</span>
                      </td>
                      <td>
                        <?= $estimate->adjustmentTotal ?>
                      </td>
                    </tr>
                  <?php endif ?>
                  <tr class="border-bottom">
                    <td> <span class="grntec">Total</span></td>
                    <td>
                      <?= $estimate->total ?>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-12">
              <?php if (!empty($estimate->client_note)): ?>
                <div>
                  <b>Client Note:</b>
                  <p>
                    <?= $estimate->client_note ?>
                  </p>
                </div>
              <?php endif ?>

            </div>
            <div class="col-md-12">
              <?php if (!empty($estimate->terms_and_conditions)): ?>
                <div>
                  <b>Terms And Conditions:</b>
                  <p>
                    <?= $estimate->terms_and_conditions ?>
                  </p>
                </div>
              <?php endif ?>

            </div>
            <div id="list_of_attachments" class="col-md-12">

            </div>
          </div>
          <!-- ----  -->
        </div>

        <!-- task tab -->
        <div class="tabcontent tab2task" id="Tab2">
          <div class="row" style="margin-bottom: 23px;">
            <div class="col-6 mt-3 mb-1 ">
              <button type="button" class="hrbtns  contractbtn addbttn"
                onclick="showTaskModal('Add New Task','<?= site_url('tasks/new-task') ?>')"> <i class="fa fa-plus"></i>
                NEW
                TASK</button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <table id="task-table" class="display dataTable responsive nowrap tblalign" style="width: 100%;">
                <thead class="theadrow">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>Due Date</th>
                    <th>Assigned to</th>
                    <th>Tags</th>
                    <th>Priority</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="tabcontent " id="Tab3" style="padding: 0px;">
          <div class="row pb-3">
            <div class="col-md-12">
              <div class="notifications">
                <div class="notification-wrapper activity-feed" id="show_activity">
                  <div class="activity-head">
                    <div class="activity-head-line"></div>
                    <div class="activity-head-title">Today</div>
                    <div class="activity-head-line"></div>
                  </div>
                  <div class="notification-box-all">
                    <div class="stripe"></div>
                    <div class="imgcontent">
                      <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="activity-inner">
                      <div class="activity-content">
                        <div class="activity-tag">
                          <div class="activity-title"><span>New Sale</span></div>
                          <div class="activity-time"><span><i class="fa-solid fa-circle small-icon"></i>6
                              Minute Ago</span>
                          </div>
                          <div class="activity-detail">
                            <div class="activity-detail-text">A Returning Visitor From Rome, Italy just
                              bought a new <span class="text-marked">Macbook Pro</span> for $1099.99.
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="activity-close-icon">
                        <i class="fa-solid fa-xmark" style="color:#fc2d42" id="remove-btn" style="cursor:pointer;"></i>
                      </div>
                    </div>
                  </div>
                  <div class="activity-head">
                    <div class="activity-head-line"></div>
                    <div class="activity-head-title">Yesterday</div>
                    <div class="activity-head-line"></div>
                  </div>
                  <div class="notification-box-all">
                    <div class="stripe"></div>
                    <div class="imgcontent">
                      <i class="fa-regular fa-user icon-green"></i>
                    </div>
                    <div class="activity-inner">
                      <div class="activity-content">
                        <div class="activity-tag">
                          <div class="activity-title"><span>New Activity Log</span></div>
                          <div class="activity-time"><span><i class="fa-solid fa-circle small-icon"></i>12
                              Minute Ago</span>
                          </div>
                          <div class="activity-detail">
                            <div class="activity-detail-text">A Returning Visitor From Rome, Italy just
                              bought a new <span class="text-marked">Macbook Pro</span> for $1099.99.
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="activity-close-icon">
                        <i class="fa-solid fa-xmark" style="color:#fc2d42" id="remove-btn" style="cursor:pointer;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- reminder tab  -->
        <div class="tabcontent " id="Tab4">
          <div class="row pb-3">
            <!-- added mt tag-->
            <div class="col-md-12  mb-3">
              <button type="button" class="hrbtns contractbtn addbttn mt-2" onclick="showReminderAddModel()"><i
                  class="bi bi-bell"></i> SET
                REMINDER</button>
            </div>
          </div>
          <div>
            <table id="reminder-table" class=" example display dataTable display responsive nowrap tblalign "
              style="width: 100%;" aria-describedby="example_info">
              <thead class="theadrow">
                <tr>
                  <th>Description</th>
                  <th>Date</th>
                  <th>Remind </th>
                  <th>Is notified ?</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>

        <!-- notes tab -->
        <div id="Tab5" class="tabcontent  ">
          <form action="<?= site_url('notes/set-note') ?>" onsubmit="addNote(this,event)">
            <input type="hidden" name="id">
            <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>">
            <input type="hidden" name="created_by" value="<?= session('login')['id'] ?>">
            <input type="hidden" name="belongs_to" value="estimate">
            <input type="hidden" name="belongs_to_id" value="<?= $estimate->id ?>">
            <div class="row ">
              <div class="col-md-12">
                <div class="margin-btm">
                  <textarea class="textdesc" name="notes"></textarea>
                  <button type="submit" class="addnotebtn addbttn mtfichan">ADD NOTE</button>
                </div>
              </div>
            </div>
          </form>
          <hr class="fileline mtschan mbttchan">
          <div id="show_notes">

          </div>

        </div>

        <!-- Tab 6 -->
        <div id="Tab6" class="tabcontent  ">

          <div class="row mailtrack">
            <div class="col-md-12">
              <h6>No tracked emails sent</h6>
            </div>
          </div>

        </div>
        <!-- Tab 7-->
        <div id="Tab7" class="tabcontent  ">
          <div class="row mailtrack">
            <div class="col-md-12">
              <h6>This Challan is not yet viewed by the customer</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- </div> -->

<!-- task modal  -->
<div class="modal fade" id="task_modal" role="dialog">
  <div class="modal-dialog task_modal">
    <div class="modal-content">
      <div class="modal-header hdrbg">
        <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
        <!-- <h5 class="modal-title"></h5> -->
        <h5 class="fnt_head">

          <b class="modal-title"></b>
          <div class="vertical-line">

            <span class="Bcgtop capsule"></span>
            <span class="Bcgbttm capsule"></span>
          </div>
        </h5>
      </div>
      <div class="modal-body mbdclr">
      </div>
    </div>
  </div>
</div>
</div>

<script>
  function showTaskModal(title, url) {
    $('#task_modal .modal-title').text(title);
    $('#task_modal .modal-body').load(url, () => {
      $('.selectpicker').selectpicker('refresh');
      $('select[name="related_to"]').selectpicker('val', 'estimate').change();
      $('#task_modal').modal('show');
      setTimeout(() => {
        $('select[name="rel_id"]').selectpicker('val', '<?= $estimate->id ?>');
      }, 500);
    });
  }

  function deleteTask(url) {
    $.ajax({
      type: "DELETE",
      url: url,
      dataType: "json",
      success: function (response) {
        if (response.isSuccess) {
          toastr.success('Deleted successfully!');
          $("#task-table").DataTable().ajax.reload();
        } else {
          toastr.error('Oops! something went wrong', 'Error');
        }
      }
    });
  }
  $(document).ready(function () {
    var table = $("#task-table").DataTable({
      ajax: {
        url: '<?= site_url('tasks') ?>',
        dataSrc: '',
        data: {
          relatedTo: 'estimate',
          relId: <?= $estimate->id ?>,
        }
      },
      columns: [{
        data: 'task_id'
      }, {
        data: 'name'
      }, {
        data: 'status'
      },
      {
        data: 'start_date'
      },
      {
        data: 'end_date'
      },
      {
        data: 'assigned_to'
      },
      {
        data: 'tags'
      },
      {
        data: 'priority'
      },
      ],
      rowReorder: {
        selector: 'td:nth-child(2)'
      },
      language: { lengthMenu: '_MENU_', search: '', searchPlaceholder: " Search for order ID, customer, order status or something..." },
      responsive: true,
      dom: 'Blfrtip',

      buttons: [
        {

        },

        {
          text: '<i class="fa-solid fa-arrow-rotate-right p-1" style="font-size:.9rem"></i>'
        },




      ],
    });
  });
</script>

<!-- file attachment modal  -->
<div id="attachment_model" class="modal fade" role="dialog" style="padding-right:0">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header ">
        <button type="button" class="btn-close closebtn " data-bs-dismiss="modal"></button>
        <h5 class="modal-title ">
        <b class="modal-title"> Attach File</b>
          <div class="vertical-line">

            <span class="Bcgtop capsule"></span>
            <span class="Bcgbttm capsule"></span>
          </div>  
        </h5>
      </div>
      <div class="modal-body">
        <!-- <form class="dropzone" id="my-awesome-dropzone">
        </form> -->
        <div class="upload-files-container" style="background: none;">
            <div class="drag-file-area">
                <span class="material-icons-outlined upload-icon"> file_upload
                </span>
                <h3 class="dynamic-message" style="color: #6c757d;">Drag &amp; drop
                    any
                    file here</h3>
                <label class="label">
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
                    <span class="file-name"> </span>  <span class="file-size badge rounded-pill">
                    </span>
                    <span class="material-icons remove-file-icon">delete</span>
                  </div>
                <div class="progress-bar"></div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="reminder_model" class="modal fade custom-content" role="dialog" style="padding-right:0">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header hdrbg ">
        <button type="button" class="btn-close closebtn " data-bs-dismiss="modal"></button>
        <h5 class="modal-title mltsin"><i class='fa fa-question-circle' data-toggle="tooltip" data-placement="top"
            title="Tooltip on top"></i>Set Reminder</h5>
        <div class="vertical-line">
              <span class="Bcgtop capsule"></span>
              <span class="Bcgbttm capsule"></span>
        </div>    
      </div>
      <div class="modal-body">
        <form id="set-reminder-form" action="<?= site_url('reminder/set-reminder') ?>">
          <input type="hidden" name="id">
          <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>">
          <input type="hidden" name="belongs_to" value="estimate">
          <input type="hidden" name="belongs_to_id" value="<?= $estimate->id ?>">
          <div class="row">
            <div class="col-md-12">
              <div class="purchasegrp">
                <label for="creationdate" class="purchaseinfo"><span class="aster">*</span> Date to be
                  notified</label>
                <input type="datetime-local" name="date" id="date" class="form-control purchaseselects">
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-12">
              <div class="purchasegrp purch-drop">
                <label for="tags" class="purchaseinfo"><span class="aster">*</span> Set reminder to</label>
                <select name="remind_to" class="form-control selectpicker note-text" data-live-search="true">
                  <option value=""></option>
                  <?php if (!empty($staffs)): ?>
                    <?php foreach ($staffs as $staff): ?>
                      <option value="<?= $staff->id ?>">
                        <?= $staff->first_name . ' ' . $staff->last_name ?>
                      </option>
                    <?php endforeach ?>
                  <?php endif ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="purchasegrp">
                <label for="purchasedesc purchaseinfo"><span class="aster">*</span> Description</label>
                <textarea name="description" class="textdesc note-text" rows="4"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="purchasegrp">
                <div class="form-check">
                  <input type="hidden" name="email_notify" value="0">
                  <input class="form-check-input" type="checkbox" name="email_notify" value="1" id="send_mail">
                  <label class="form-check-label" for="send_mail">Send also an email for this reminder</label>
                </div>
              </div>
            </div>
          </div>
          <input type="hidden" name="is_notified" value="no">
          <div class="row">
            <div class="col-md-12 blkftr">
              <div class="modal-footer taskfooter mbmsin mzzchan">
                <button type="button" class="taskclose1" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="tasksave1" style="margin-right: 0px;">Save</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- set reminder -->
<div class="modal fade" id="set-reminder-form" role="dialog">
  <div class="modal-dialog set-reminder-form">
    <div class="modal-content">
      <div class="modal-header hdrbg">
        <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
        <!-- <h5 class="modal-title"></h5> -->
        <h5 class="fnt_head">

          <b class="modal-title"></b>
          <div class="vertical-line">

            <span class="Bcgtop capsule"></span>
            <span class="Bcgbttm capsule"></span>
          </div>
        </h5>
      </div>
      <div class="modal-body mbdclr">
      </div>
    </div>
  </div>
</div>
</div>

<script>
  // for set reminder 
  function showReminderAddModel() {
    $('#set-reminder-form').trigger('reset');
    $('input[name="id"]').val('');
    $('.selectpicker').selectpicker('refresh');
    $('#reminder_model').modal('show', {
      backdrop: 'true'
    });
  }

  function showReminderEditModel(url) {
    $('#set-reminder-form').trigger('reset');
    $('.selectpicker').selectpicker('refresh');
    $.get(url,
      function (data) {
        $('input[name="id"]').val(data.id);
        $('input[type="datetime-local"][name="date"]').val();
        $('select[name="remind_to"]').selectpicker('val', data.remind_to);
        $('[name="description"]').val(data.description);
        $('[name="email_notify"]').prop('checked', data.email_notify);
        $('#reminder_model').modal('show', {
          backdrop: 'true'
        });
      },
      "json"
    );
  }

  $('#set-reminder-form').formValidation({
    framework: 'bootstrap',
    fields: {
      date: {
        validators: {
          notEmpty: {
            message: 'This field is required.'
          }
        }
      },
      remind_to: {
        validators: {
          notEmpty: {
            message: 'This field is required.'
          }
        }
      },
      description: {
        validators: {
          notEmpty: {
            message: 'This field is required.'
          }
        }
      }

    }
  }).on('success.form.fv', function (e) {
    e.preventDefault();
    let url = this.action;
    let formData = new FormData(this);
    $.ajax({
      type: 'POST',
      url: url,
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (result) {
        if (result.isSuccess) {
          toastr.success(result.msg);
        } else {
          toastr.error('Oops! something went wrong', 'Error');
        }
        $('#reminder_model').modal('hide');
        $("#reminder-table").DataTable().ajax.reload();
      }
    });
  });

  function deleteReminder(url) {
    $.ajax({
      type: "DELETE",
      url: url,
      dataType: "json",
      success: function (response) {
        if (response.isDeleted) {
          toastr.success('Deleted successfully!');
          $("#reminder-table").DataTable().ajax.reload();
        } else {
          toastr.error('Oops! something went wrong', 'Error');
        }
      }
    });
  }

  // reminder dataTable
  $(document).ready(function () {
    var table = $("#reminder-table").DataTable({
      ajax: {
        url: '<?= site_url('reminder') ?>',
        dataSrc: '',
        data: function (d) {
          d.belongsTo = 'estimate';
          d.belongsToId = '<?= $estimate->id ?>';
          d.comId = <?= session('login')['com_id'] ?? 0 ?>;
        }
      },
      columns: [{
        data: 'description'
      }, {
        data: 'date'
      }, {
        data: 'remind'
      }, {
        data: 'is_notified'
      }],
      rowReorder: {
        selector: 'td:nth-child(2)'
      },
      language: { lengthMenu: '_MENU_', search: '', searchPlaceholder: " Search for order ID, customer, order status or something..." },
      responsive: true,
      dom: 'Blfrtip',

      buttons: [
        {

        },

        {
          text: '<i class="fa-solid fa-arrow-rotate-right p-1" style="font-size:.9rem"></i>'
        },




      ],
    });
  });
</script>

<script>
  function getNotes() {
    $('#show_notes').load('<?= site_url('notes') ?>', {
      belongsTo: 'estimate',
      belongsToId: '<?= $estimate->id ?>',
      comId: <?= session('login')['com_id'] ?? 0 ?>
    });
  }

  getNotes();

  function toggleNoteEditor(thatElement) {
    const parent = thatElement.closest('.media-body');
    const editor = parent.querySelector('.editor');
    const note = parent.querySelector('.note-show');
    note.classList.toggle('d-none');
    editor.classList.toggle('d-none');
  }

  function addNote(form, e) {
    e.preventDefault();
    let url = form.action;
    let formData = new FormData(form);
    $.ajax({
      type: 'POST',
      url: url,
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function (result) {
        if (result.isSuccess) {
          toastr.success(result.msg);
          form.reset();
          getNotes();
        } else {
          toastr.error('Oops! something went wrong', 'Error');
        }
      }
    });
  }

  function deleteNote(url) {
    $.ajax({
      type: "DELETE",
      url: url,
      dataType: "json",
      success: function (response) {
        if (response.isDeleted) {
          toastr.success('Deleted successfully!');
          getNotes();
        } else {
          toastr.error('Oops! something went wrong', 'Error');
        }
      }
    });
  }
</script>

<!-- script for upload file attachment  -->
<script>
  $("#my-awesome-dropzone").dropzone({
    url: "<?= site_url('sales/attach-file') ?>",
    method: 'post',
    paramName: 'file',
    params: {
      category: 'estimate',
      category_id: '<?= $estimate->id ?>'
    },
    success: function (file, response) {
      res = JSON.parse(response)
      if (res.isSuccess) {
        toastr.success('File Added successfully!', 'Success');
        getAttachments();
      } else {
        toastr.error('Oops! something went wrong', 'Error');
      }
    }
  });

  function getAttachments() {
    $('#list_of_attachments').load('<?= site_url('sales/attachments/estimate/' . $estimate->id) ?>');
  }
  getAttachments();

  function deleteAttachment(url) {
    $.ajax({
      type: "DELETE",
      url: url,
      dataType: "json",
      success: function (response) {
        if (response.isSuccess) {
          toastr.success('Deleted successfully!');
          getAttachments();
        } else {
          toastr.error('Oops! something went wrong', 'Error');
        }
      }
    });
  }
</script>

<!-- drag -->
<script>
  // Initialize Sortable for the table body
  new Sortable(document.querySelector(".draggable-table tbody"), {
    animation: 150,
    ghostClass: "sortable-ghost",
    handle: ".handle-icon",
  });
</script>

<!-- carousel -->
<script>
  var carousel = document.getElementById("carouselExampleIndicators");
  carousel.addEventListener("slid.bs.carousel", function (event) {
    var activeSlideIndex = event.to;
    if (activeSlideIndex === 0) {
      openTab(event, 'Tab1');
    } else if (activeSlideIndex === 1) {
      openTab(event, 'Tab2');
    } else if (activeSlideIndex === 2) {
      openTab(event, 'Tab3');
    } else if (activeSlideIndex === 3) {
      openTab(event, 'Tab4');
    } else if (activeSlideIndex === 4) {
      openTab(event, 'Tab5');
    } else if (activeSlideIndex === 5) {
      openTab(event, 'Tab6');
    } else if (activeSlideIndex === 6) {
      openTab(event, 'Tab7');
    } else if (activeSlideIndex === 7) {
      openTab(event, 'open');
    }
  });
</script>

<!-- tooltip -->
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl, {
      trigger: 'hover'
    });
  });
</script>

<!-- change status  -->
<script>
  function updateStatus(tableName, id, status) {
    $.post("<?= site_url('sales/update-status') ?>", {
      tableName: tableName,
      id: id,
      status: status
    },
      function (response) {
        if (response.isSuccess) {
          toastr.success('Status Updated');
          location.reload();
        }
      },
      "json"
    );
  }
</script>
<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>

  <!--   show date picker  -->
  <script>
        document.getElementById('date').addEventListener('click', () => {
            if ('showPicker' in HTMLInputElement.prototype) {
                document.getElementById('date').showPicker();
            }
        })
    </script>