<link rel="stylesheet" href="Styles.css">
<body id="wrapper" style="margin-top: 10px;">
  <div class="row invtblerow565 ">
  <div class="relative">
<div class="newthebtn afghitpo ab_gh">
<button type="button" class="approvedbtn finishedbtn addbttn ab_klm indRadBttn"
                  onclick="showMdModal('<?=base_url()?>/Payroll/AdvanceLoan/deduction_addmodal/0','New Loan')"
                  style="padding: 6px 12px;font-size: 14px;">New Loan </button>
                  <button type="button" class="approvedbtn finishedbtn addbttn  "
                  onclick="showMdModal('<?=base_url()?>/Payroll/AdvanceLoan/payment_addmodal/0','Make payment')"
                  style="padding: 6px 12px;font-size: 14px;">Make Payments</button>
</div>
</div>


    <div class="expbdymt col-md ab_ef mhj_crcto" id="first_col" style="display: block;margin-right: -10px !important;">
      <!-- <div class="container-fluid hjk_crct colr "> -->
      <div class="container-fluid bg-white advnc_brdrrr " style="margin-top: -1px !important;margin-right: -10px;">
        <!--<div class="card">
          <div class="card-body">-->
           <div class="row" style="margin-top: 20px;margin-bottom: 15px;">
               <!-- <div class="col-md-2"> -->
                <div class="col-md-6">
               <!--<button type="button" class="approvedbtn finishedbtn addbttn"
                  onclick="showMdModal('<?=base_url()?>/Payroll/AdvanceLoan/deduction_addmodal/0','New Loan')"
                  style="padding: 6px 12px;font-size: 14px;">New Loan </button>-->
              </div>
              <!-- <div class="col-md-2 " style="margin-left: -120px;"> -->
                <!-- <button type="button" class="approvedbtn finishedbtn addbttn "
                  onclick="showMdModal('<?=base_url()?>/Payroll/AdvanceLoan/payment_addmodal/0','Make payment')"
                  style="padding: 6px 12px;font-size: 14px;">Make Payments</button> -->
              <!-- </div> -->
              
              <div class="col-md-6 addpadding mryt tgllbtnn_rgt ">
                                <!-- <button type="button" id="toggle_btn" class="contractfilter edittglbtn5 edittglbtn6 viewbtnByToggle " data-bs-toggle="tooltip" title="" data-bs-title="Toggle Table" style="margin-right: 10px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;">
                                    <i class="fa-solid fa-angle-left"></i>
                                </button> -->

                                <button type="button" id="toggle_btn" class="contractfilter pull-right edittglbtn6   
                                                      viewbtnByToggle tgllclr-1"
                                      data-bs-toggle="tooltip" data-bs-title="Toggle Table" style="margin-right: 10px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;">
                                    <i class="fa-solid fa-angle-left" style="font-size: 12px"></i>
                                </button>
              </div>

             <!--_ <div class="col-md addpadding pdd">
                                <button type="button" id="toggle_btn" class="contractfilter   row-mtop5 ab_cd edittglbtn5 edittglbtn6 viewbtnByToggle" data-bs-toggle="tooltip" title="" 
                                data-bs-title="Toggle Table"   style=" margin-right: -120px;padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;">
                                    <i class="fa-solid fa-angle-left"></i>
                                </button>
                            </div> --->
          </div>
            <div class="row mt-4">
              <div class="demo-html ab_gh">
                <div class="table-responsive ">
                  <table id="examplecon" class="display dataTable table-responsive display responsive "
                    style="width: 100%; " aria-describedby="example_info">
                    <thead class="theadrow hdrw">
                      <tr>
                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example"
                          rowspan="1" colspan="1" aria-sort="descending"
                          aria-label="Name: activate to sort column descending"
                          style="font-weight:normal ;">Employee ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                          colspan="1" aria-label="Position: activate to sort column ascending"
                          style="font-weight:normal ;">Employee Name</th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                          colspan="1" aria-label="Office: activate to sort column ascending"
                          style="font-weight:normal ;">
                          Disbursement Date
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                          colspan="1" aria-label="Office: activate to sort column ascending"
                          style="font-weight:normal ;">
                          Type
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                          colspan="1" aria-label="Office: activate to sort column ascending"
                          style="font-weight:normal ;">
                          Attachments
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                          colspan="1" aria-label="Office: activate to sort column ascending"
                          style="font-weight:normal ;">
                          Interest Rate
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                          colspan="1" aria-label="Office: activate to sort column ascending"
                          style="font-weight:normal ;">
                          Tenure
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                          colspan="1" aria-label="Office: activate to sort column ascending"
                          style="font-weight:normal ;">
                          Pay/Month
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                          colspan="1" aria-label="Office: activate to sort column ascending"
                          style="font-weight:normal ;">
                          Payment Mode
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                          colspan="1" aria-label="Office: activate to sort column ascending"
                          style="font-weight:normal ;">
                          Reason
                        </th>
                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                          colspan="1" aria-label="Office: activate to sort column ascending"
                          style="font-weight:normal ;">
                          Status
                        </th>
                    </thead>
                    <tbody id="append">
                    </tbody>
                    <!--<tr class="fold row11" id="hidden_row1" class="hidden_row"
                                            style="display: none;">
                                            <td colspan="20">
      <div class="fold-content">
      <div id="parent1">
      <table class="display dataTable display responsive"
          style="width: 100%;">
          <thead class="thead-dark"
              style="background-color:#bed0ec40;">
              <tr>
                  <th class="tbl2">Employee ID</th>
                  <th class="tbl2">Paycode</th>
                  <th class="tbl2">Payment Date</th>
                  <th class="tbl2">Interest</th>
                  <th class="tbl2">Beginning Balance</th>
                  <th class="tbl2">Principle</th>
                  <th class="tbl2">Total Payment</th>
                  <th class="tbl2">Ending Balance</th>
                  <th class="tbl2">PDF</th>
                  <th class="tbl2">Status</th>

              </tr>
          </thead>
          <tbody>
           <tr class="">
              <td class="">'.$base->id.'</td>
              <td class="">jamesleo
                  <p class="header-effect">
                      <a href="#" id="v2">
                          <span class="">View</span>
                      </a>
                      <span class="black"> |</span>
                      <a onclick=""
                          class="text-danger"
                          style="height: fit-content;">
                          <span class="sp-class3">Edit</span>
                      </a>

                  </p>
              </td>
              <td>03-01-2024</td>
              <td>$833.00</td>
              <td>$100,000.00</td>
              <td>$489.00</td>
              <td> $1322.00 </td>
              <td> $99,511.00</td>
              <td> </td>
              <td> Paid</td>
          </tr>
          </tbody></table>-->
                  </table>
                <!--</div>
              </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8  mt-2 ab_hij sndpg_brdtp" id="sec_col"
      style="display: none;margin-top: 19px !important;">
      <div class="container-fluid  tblcontainer p-2">
        <hr class="fileline" />
        <div class="row vendcarmt mt-0" style="padding-left: 20px !important;margin-top: -7px !important;">
          <div class="col-md-12 ">
            <div class="desktop">
              <div class="scroll-images custml toptea">
                <div class="tabs d-flex newtabml ml-1">
                  <div>
                    <button class="tablinks active" onclick="openTab(event, 'profile')">
                    Preview</button>
                  </div>
                  <div>
                    <button class="tablinks" style="width:140px"
                      onclick="openTab(event, 'proposals')">Employee</button>
                  </div>
                  <div>
                    <button class="tablinks" style="width:140px" onclick="openTab(event, 'deal')">
                    Paychart</button>
                  </div>
                  <div>
                    <button class="tablinks" style="width:140px" onclick="openTab(event, 'task')">
                    Tasks</button>
                  </div>
                  <div>
                    <button class="tablinks" style="width:140px"
                      onclick="openTab(event, 'remainder')"> Remainder</button>
                  </div>
                  <div>
                    <button class="tablinks" style="width:140px" onclick="openTab(event, 'file')">
                    Attachments</button>
                  </div>
                  <div>
                    <button class="tablinks" style="width:140px;text-wrap: nowrap;"
                      onclick="openTab(event, 'activity')"> Activity Log</button>
                  </div>
                  <div>
                    <button id="expandbtn" class=" tablinks  tb-links " data-bs-toggle="tooltip"
                      data-bs-title="Toggle full view"><i class="fa fa-expand"
                      style="margin-top: 6px;"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="carouselExampleIndicators" class="carousel slidemt" data-bs-interval="false">
          <div class="carousel-inner scroll-images">
            <div class="carousel-item active" style="text-align: center;">
              <div class="container">
                <div class="child mb-0" style="height:auto;">
                  <button class="tablinks tabresact active" style="width:70%"
                    onclick="openTab(event, 'profile')">Preview</button>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="text-align: center;">
              <div class="container">
                <div class="child mb-0" style="height:auto;">
                  <button class="tablinks tabresact" style="width:70%"
                    onclick="openTab(event, 'proposals')">Employee</button>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="text-align: center;">
              <div class="container">
                <div class="child mb-0" style="height:auto;">
                  <button class="tablinks tabresact" style="width:70%"
                    onclick="openTab(event, 'deal')">Paychart</button>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="text-align: center;">
              <div class="container">
                <div class="child mb-0" style="height:auto;">
                  <button class="tablinks tabresact" style="width:70%"
                    onclick="openTab(event, 'task')">Tasks</button>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="text-align: center;">
              <div class="container">
                <div class="child mb-0" style="height:auto;">
                  <button class="tablinks tabresact" style="width:70%"
                    onclick="openTab(event, 'remainder')">Remainder</button>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="text-align: center;">
              <div class="container">
                <div class="child mb-0" style="height:auto;">
                  <button class="tablinks tabresact" style="width:70%"
                    onclick="openTab(event, 'file')">Attachments</button>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="text-align: center;">
              <div class="container">
                <div class="child mb-0" style="height:auto;">
                  <button class="tablinks tabresact" style="width:70%"
                    onclick="openTab(event, 'activity')">Activity Log</button>
                </div>
              </div>
            </div>
            <div class="carousel-item" style="text-align: center;">
              <div class="container">
                <div class="child mb-0" style="height:auto;">
                  <button id="expandbtn" class=" tablinks  tb-links " data-bs-toggle="tooltip"
                    data-bs-title="Toggle full view">
                  <i class="fa fa-expand" style="margin-top: 8px;"></i></button>
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
        <hr class="fileline linehr" style="padding-left: 20px !important;">
        <br>
        <div id="profile" class="tabcontent  mtgb" style="display:block;">
          <!-- Analytics Dashboard -->
          <div class="analytics_dashboard">
            <div class="analytics_dashboard_upper">
              <div class="analytics_dashboard_upper_right">
                <div class="col-md-2 datepicker1"
                  style="margin-top: 10px !important;margin-bottom: -25px !important;">
                  <div class="purchasegrp">
                    <input type="text" id="reportrange" name="dates"
                      class="form-control purchaseselects statbtn"
                      style="height: 20px !important;text-align: center;" placeholder="Date">
                  </div>
                </div>
                <div id="chart"
                  style="height: 100% !important; width: 100%;margin-top: 20px;margin-left: -10px;">
                </div>
              </div>
              <div class="analytics_dashboard_upper_left">
                <div class="two_card_arrange">
                  <div class="card_box">
                    <p class="card_heading">Tasks</p>
                    <p class="card_icon"><i class="fa-solid fa-list-check"></i></p>
                    <p class="card_number">2.382</p>
                    <span class="card_week">
                      <p style="color:red;">-3.65%</p>
                      Since Last Week
                    </span>
                  </div>
                  <div class="card_box">
                    <p class="card_heading">Deals</p>
                    <p class="card_icon"><i class="fa-solid fa-handshake"></i></p>
                    <p class="card_number">&#x24; 21.300</p>
                    <span class="card_week">
                      <p style="color:rgb(10, 208, 10)">6.65%</p>
                      Since Last Week
                    </span>
                  </div>
                </div>
                <div class="two_card_arrange">
                  <div class="card_box">
                    <p class="card_heading" style="text-wrap: wrap;">Reimbrishment</p>
                    <p class="card_icon"><i class="fa-solid fa-sack-dollar"></i></p>
                    <p class="card_number">14.212</p>
                    <span class="card_week">
                      <p style="color:rgb(10, 208, 10)">5.25%</p>
                      Since Last Week
                    </span>
                  </div>
                  <div class="card_box">
                    <p class="card_heading">Followups</p>
                    <p class="card_icon"><i class="fa-solid fa-user-plus"></i></p>
                    <p class="card_number">64</p>
                    <span class="card_week">
                      <p style="color:red">-2.25%</p>
                      Since Last Week
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <br>
              <table class="details-table table table-striped">
                <tbody>
                  <tr class="project-overview">
                    <td class="viewjobft"><b>
                      Employee ID</b>
                    </td>
                    <td class="viewjobft"> 123456</td>
                  </tr>
                  <tr class="project-overview">
                    <td class="viewjobft"><b>Employee Name</b></td>
                    <td class="viewjobft"> EM1001</td>
                  </tr>
                  <tr class="project-overview">
                    <td class="viewjobft"><b> Disbursement Date</b></td>
                    <td class="viewjobft"></td>
                  </tr>
                  <tr class="project-overview">
                    <td class="viewjobft"><b>Type</b></td>
                    <td class="viewjobft"> Advance/Loan</td>
                  </tr>
                  <tr class="project-overview">
                    <td class="viewjobft"><b>Attachments</b></td>
                    <td class="viewjobft"></td>
                  </tr>
                  <tr class="project-overview">
                    <td class="viewjobft"><b>Interest Rate</b></td>
                    <td class="viewjobft">In Progress</td>
                  </tr>
                  <tr class="project-overview">
                    <td class="viewjobft"><b>Tenure</b></td>
                    <td class="viewjobft"></td>
                  </tr>
                  <tr class="project-overview">
                    <td class="viewjobft"><b>Pay/Month</b></td>
                    <td class="viewjobft"></td>
                  </tr>
                  <tr class="project-overview">
                    <td class="viewjobft"><b>Payment Mode</b></td>
                    <td class="viewjobft"></td>
                  </tr>
                  <tr class="project-overview">
                    <td class="viewjobft"><b>Reason</b></td>
                    <td class="viewjobft"></td>
                  </tr>
                  <tr class="project-overview">
                    <td class="viewjobft"><b>Status</b></td>
                    <td class="viewjobft"><label class="switchslider"> <input type="checkbox"
                      checked><span class="slider round"></span></label></td>
                  </tr>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div id="proposals" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
          <div class="row">
            <div class="col-md-4">
              <button type="button" class="approvedbtn finishedbtn addbttn" onclick="">ADD</button>
            </div>
          </div>
          <div class="row">
            <div class="demo-html" style="overflow-x: auto;">
              <table id="example1" class="display dataTable display responsive nowrap "
                style="width: 100%; " aria-describedby="example_info">
                <thead class="theadrow hdrw">
                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                      colspan="1" aria-sort="descending"
                      aria-label="Name: activate to sort column descending"
                      style="font-weight:normal ;">Employee ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Position: activate to sort column ascending"
                      style="font-weight:normal ;">Employee Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Basic
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="font-weight:normal ;">
                      HRA
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Earning
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Deductions
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Loans
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="odd">
                    <td>ABC</td>
                    <td>
                      924568990
                      <p class="header-effect">
                        <a href="view.html">
                        <span class="">View </span>
                        </a>
                        <span class="black"> |</span>
                        <a onclick="showModal('Edit.html',' Edit accessory')"
                          class="text-danger" style="height: fit-content;">
                        <span class="sp-class3">Edit </span>
                        </a>
                        <span class="black"> |</span>
                        <span class="sp-class3" onclick="myFunction()">Delete</span>
                      </p>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class="approvedbtn accept_bttn">Accepted</span></td>
                  </tr>
                  <tr class="odd">
                    <td>qsr</td>
                    <td>
                      12345687
                      <p class="header-effect">
                        <a href="view.html">
                        <span class="">View </span>
                        </a>
                        <span class="black"> |</span>
                        <a onclick="showModal('Edit.html',' Edit accessory')"
                          class="text-danger" style="height: fit-content;">
                        <span class="sp-class3">Edit </span>
                        </a>
                        <span class="black"> |</span>
                        <span class="sp-class3" onclick="myFunction()">Delete</span>
                      </p>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><span class="approvedbtn accept_bttn">Accepted</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div id="deal" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
          <div class="row">
            <div class="col-md-4">
              <button type="button" class="approvedbtn finishedbtn addbttn" onclick="">ADD</button>
            </div>
          </div>
          <div class="row">
            <div class="demo-html" style="overflow-x: auto;">
              <table id="example3" class="display dataTable display responsive nowrap "
                style="width: 100%; " aria-describedby="example_info">
                <thead class="theadrow hdrw">
                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                      colspan="1" aria-sort="descending"
                      aria-label="Name: activate to sort column descending"
                      style="font-weight:normal ;">Payment Date</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Position: activate to sort column ascending"
                      style="font-weight:normal ;">Interest</th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Beginning Balance
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Principle
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Total payment
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Ending Balance
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="font-weight:normal ;">
                      status
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="odd">
                    <td>ABC</td>
                    <td>
                      924568990
                      <p class="header-effect">
                        <a href="view.html">
                        <span class="">View </span>
                        </a>
                        <span class="black"> |</span>
                        <a onclick="showModal('Edit.html',' Edit accessory')"
                          class="text-danger" style="height: fit-content;">
                        <span class="sp-class3">Edit </span>
                        </a>
                        <span class="black"> |</span>
                        <span class="sp-class3" onclick="myFunction()">Delete</span>
                      </p>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>may</td>
                    <td><span class="cancelbtn">CANCELLED</span></td>
                  </tr>
                  <tr class="odd">
                    <td>qsr</td>
                    <td>
                      12345687
                      <p class="header-effect">
                        <a href="view.html">
                        <span class="">View </span>
                        </a>
                        <span class="black"> |</span>
                        <a onclick="showModal('Edit.html',' Edit accessory')"
                          class="text-danger" style="height: fit-content;">
                        <span class="sp-class3">Edit </span>
                        </a>
                        <span class="black"> |</span>
                        <span class="sp-class3" onclick="myFunction()">Delete</span>
                      </p>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>june</td>
                    <td><span class="cancelbtn">CANCELLED</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div id="task" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
          <div class="row">
            <div class="demo-html" style="overflow-x: auto;">
              <table id="example2" class="display dataTable display responsive " style="width: 100%; "
                aria-describedby="example_info">
                <thead class="theadrow hdrw">
                  <tr>
                    <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1"
                      aria-label="">#</th>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                      colspan="1" aria-sort="ascending"
                      aria-label="Name: activate to sort column descending"
                      style="font-weight:normal ;">Name
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Position: activate to sort column ascending"
                      style="font-weight:normal ;">Status
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Start Date
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Age: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Due Date
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Age: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Assigned to
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Salary: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Tags
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                      aria-label="Salary: activate to sort column ascending"
                      style="font-weight:normal ;">
                      Priority
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="odd">
                    <td class="invtble"><a href="#" class=""
                      onclick="showMdModal('../vtestmodal.html','jaya')">253</a>
                    </td>
                    <td class="progtble2">
                      <a href="#" class=""
                        onclick="showMdModal('../vtestmodal.html','jaya')">jaya</a>
                      <p class="header-effect">
                        <a><span class=" text-success">Start
                        Timer</span></a>
                        <span class="black">|</span> <a href="#"
                          onclick="showMdModal('../edittaskmodal.html','Edit')"><span
                          class="">
                        Edit</span></a><span class="black">
                        |</span>
                        <span class="sp-class3">Delete</span>
                      </p>
                    </td>
                    <td>
                      <button type="button" id="stbutton"
                        class=" status-button  dropdown-toggle dd-toggle"
                        data-bs-toggle="dropdown">In Progress</button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Not Started</a></li>
                        <li><a class="dropdown-item" href="#">Testing</a></li>
                        <li><a class="dropdown-item" href="#">Awaiting Feedback</a></li>
                        <li><a class="dropdown-item" href="#">Complete</a></li>
                      </ul>
                    </td>
                    <td>1957-02-05</td>
                    <td>10</td>
                    <td><a href="../GTS/unitmanag.html">
                      <img src="../../assets/img/user-placeholder.jpg" alt="user"
                        height="32px" width="32px" style="border-radius: 16px;">
                      CRM Solution</a>
                    </td>
                    <td>
                    </td>
                    <td>
                      <button type="button" id="stbutton2" style="border: none;"
                        class=" status-button  dropdown-toggle range-toggle"
                        data-bs-toggle="dropdown">Low
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="" href="#">Medium </a></li>
                        <li><a class="" href="#">High </a></li>
                        <li><a class="" href="#">Urgent </a></li>
                      </ul>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div id="remainder" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
          <div class="row">
            <div class="demo-html" style="overflow-x: auto;">
              <div class="table-responsive">
                <table id="example8" class="display dataTable display responsive nowrap tblalign "
                  style="width: 100%;" aria-describedby="example_info">
                  <thead class="theadrow hdrw">
                    <tr>
                      <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1"
                        aria-label="" style="width: 0px;font-weight:normal ;">
                        Description
                      </th>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example"
                        rowspan="1" colspan="1" aria-sort="ascending"
                        aria-label="Name: activate to sort column descending"
                        style="width: 98px;font-weight:normal ;">Date
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                        colspan="1" aria-label="Position: activate to sort column ascending"
                        style="width: 100px;font-weight:normal ;">Remind
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                        colspan="1" aria-label="Office: activate to sort column ascending"
                        style="width: 97px;font-weight:normal ;">
                        Is notified ?
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td class="hrtble1">
                        <span>good</span>
                        <p class="header-effect">
                          <a href="#"
                            onclick="showMdModal('../remindermodal.html',`<i class='fa fa-question-circle remques'></i>Set Invoice Reminder`)"><span
                            class=""> Edit</span></a><span class="black"> |</span>
                          <span class="sp-class3">Delete</span>
                        </p>
                      </td>
                      <td>2023-05-18 17:45:00</td>
                      <td><a href="../unitmanag.html">
                        <img src="../../assets/img/user-placeholder.jpg" alt="user"
                          height="32px" width="32px" style="border-radius: 16px;">
                        CRM Solution</a>
                      </td>
                      <td>No</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div id="activity" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
          <div class="row pb-3">
            <div class="col-md-12">
              <div class="notifications">
                <div class="notification-wrapper activity-feed">
                  <div class="notification-box-all py-2 feed-item mb-0">
                    <div class="single-notification" id="single-notification">
                      <div class="d-flex">
                        <a href="#" class="text-muted float-end" data-bs-placement="left"
                          data-bs-toggle="tooltip" data-bs-title="Mark as Read"><small><i
                          class="fa fa-circle-thin"
                          aria-hidden="true"></i></small></a>
                        <span class="text-has-action ms-3"
                          style="border-bottom:1px dashed    black" data-toggle="tooltip"
                          data-title="2023-03-13 03:09:31" data-original-title="" title="">
                        3 months ago </span>
                      </div>
                      <div class="d-flex ms-3 mt-1 align-items-center">
                        <a href="#" class="me-1"><img src="../../assets/img/user.png" alt="user"
                          height="22px" width="22px"></a>
                        <div class="blacktdinp ms-1">
                          <a href="notificationlinked.html" class="text-secondary">
                            <div class="description" style="font-size:12px;">GTS Solution -
                              converted to
                              invoice from expense
                            </div>
                          </a>
                        </div>
                        <i class="fa-solid fa-xmark" style="color:#fc2d42" id="remove-btn"
                          style="cursor:pointer;"></i>
                      </div>
                    </div>
                  </div>
                  <div class="notification-box-all py-2 feed-item mb-0">
                    <div class="single-notification" id="single-notification">
                      <div class="d-flex">
                        <a href="#" class="text-muted float-end" data-bs-placement="left"
                          data-bs-toggle="tooltip" data-bs-title="Mark as Read"><small><i
                          class="fa fa-circle-thin"
                          aria-hidden="true"></i></small></a>
                        <span class="text-has-action ms-3"
                          style="border-bottom:1px dashed    black" data-toggle="tooltip"
                          data-title="2023-03-13 03:09:31" data-original-title="" title="">
                        3 months ago </span>
                      </div>
                      <div class="d-flex ms-3 mt-1 align-items-center">
                        <a href="#" class="me-1"><img src="../../assets/img/user.png" alt="user"
                          height="22px" width="22px"></a>
                        <div class="blacktdinp ms-1">
                          <a href="notificationlinked.html" class="text-secondary">
                            <div class="description" style="font-size:12px;">GTS Solution -
                              converted to
                              invoice from expense
                            </div>
                          </a>
                        </div>
                        <i class="fa-solid fa-xmark" style="color:#fc2d42" id="remove-btn"
                          style="cursor:pointer;"></i>
                      </div>
                    </div>
                  </div>
                  <div class="feed-item"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="file" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
          <div class="row hi hls1">
            <div class="col-md-12 p-0">
              <div id="drop-zone">
                <img src="" alt="">
                <p class="dropfile">Attach images</p>
                <label for="myfile" class="file-input-label">
                <input type="file" id="myfile">
                </label>
              </div>
              <div class="text-container">
                <div class="file-name"></div>
                <button class="delete-button btn-danger" id="deleteBtn">Delete</button>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="demo-html mt-0" style="overflow-x: auto;">
                <table id="example10" class="display dataTable display responsive nowrap tblalign"
                  style="width: 100%;" aria-describedby="example_info">
                  <thead class="theadrow hdrw">
                    <tr>
                      <th class="select-checkbox sorting_disabled">
                        Filename
                      </th>
                      <th class="select-checkbox sorting_disabled">
                        File type
                      </th>
                      <th class="sorting sorting_asc" style="text-wrap: wrap;">
                        Last Activity
                      </th>
                      <th class="sorting sorting_asc" style="text-wrap: wrap;">
                        Total Comments
                      </th>
                      <th class="sorting sorting_asc" style="text-wrap: wrap;">
                        Visible to Customer
                      </th>
                      <th class="sorting sorting_asc" style="text-wrap: wrap;">
                        Uploded by
                      </th>
                      <th class="sorting sorting_asc" style="text-wrap: wrap;">
                        Date Uploded
                      </th>
                      <th class="sorting">
                        Options
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td style="text-wrap: wrap;"><a href="../GTS/unitmanag.html">
                        Spreadsheet Online New (1).xlsx</a>
                      </td>
                      <td>
                        Teacher
                        <p class="header-effect">
                          <a href="view.html">
                          <span class="">View </span>
                          </a>
                          <span class="black"> |</span>
                          <a onclick="showModal('Edit.html',' Edit accessory')"
                            class="text-danger" style="height: fit-content;">
                          <span class="sp-class3">Edit </span>
                          </a>
                          <span class="black"> |</span>
                          <span class="sp-class3" onclick="myFunction()">Delete</span>
                        </p>
                      </td>
                      <td>Plus size modeling</td>
                      <td></td>
                      <td><label class="switchslider"> <input type="checkbox"><span
                        class="slider round"></span></td>
                      <td style="text-wrap: wrap;"><a href="../GTS/unitmanag.html">
                        <img src="../../assets/img/user-placeholder.jpg" alt="user"
                          height="32px" width="32px" style="border-radius: 16px;">
                        Albi Solution Solutions</a>
                      </td>
                      <td></td>
                      <td>
                        <button type="button" class="closexbtn clsheight"
                          onclick="showModal('edit-job.html','Edit Position')"
                          style="background-color: #03A9F4;"><i class="fa fa-envelope"
                          data-bs-toggle="tooltip"
                          data-bs-title="Set this fi"></i></button>
                        <button class="closexbtn clsheight"><i
                          class="fa fa-remove"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modals       -->
  <!-- Ref Modal  -->
  <div id="modal_md" class="modal fade custom-content" role="dialog" style="padding-right:0">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header ">
          <button type="button" class="btn-close closebtn " data-bs-dismiss="modal"></button>
          <h5 id="myModalLabel" class="modal-title "></h5>
        </div>
        <div class="modal-body"></div>
      </div>
    </div>
  </div>

<script>
    function showMdModal(url, title) {
        $('#modal_md').modal('show', { backdrop: 'true' });
        $.ajax({
            url: url,
            success: function (response) {
                $('#modal_md .modal-title').html(title);
                $('#modal_md .modal-body').html(response);
            }
        });
    }
</script>
<script>
    $('#modal_md').on('shown.bs.modal', function () {
        $('.selectpicker').selectpicker('refresh');
    });
</script>
<!--upload-files-->

<script>
    const dropZone = document.querySelector('#drop-zone');
    const inputElement = document.querySelector('#myfile');
    const img = document.querySelector('img');
    const p = document.querySelector('.dropfile');
    const fileNameElement = document.querySelector('.file-name');
    const deleteButton = document.querySelector('#deleteBtn');

    inputElement.addEventListener('change', function (e) {
        const file = this.files[0];
        if (file) {
            img.style.display = "block";
            p.style.display = 'none';
            fileNameElement.textContent = file.name;
            deleteButton.style.display = 'inline-block';

            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onloadend = function () {
                const src = this.result;
                img.src = src;
                img.alt = file.name;
            }
        }
    });

    dropZone.addEventListener('click', () => inputElement.click());
    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        img.style.display = "block";
        const file = e.dataTransfer.files[0];
            // p.style.display = 'none';

        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = function () {
            e.preventDefault();
            p.style.display = 'none';
            fileNameElement.textContent = file.name;
            deleteButton.style.display = 'inline-block';

            const src = this.result;
            img.src = src;
            img.alt = file.name;
        }
    });

    deleteButton.addEventListener('click', () => {
        img.src = '';
        img.style.display = 'none';
        p.style.display = 'block';
        fileNameElement.textContent = '';
        deleteButton.style.display = 'none';
        inputElement.value = '';
    });
</script>
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

<script>
    var _visible_1 = true;
    var _visible = true;

    $(document).ready(function () {

        $("#toggle_btn").click(function () {
            var hidden_columns = [3, 4, 5, 7];

            if (_visible) {
                $("#first_col").removeClass("col-md-12").addClass("col-md-4");

                _visible = false;
                $("#sec_col").show();



                $("#toggle_btn")
                .find("i")
                .removeClass("fa fa-angle-double-left")
                .addClass("fa fa-angle-double-right");
            }
            else {
                $("#first_col").removeClass("col-md-4").addClass("col-md-12");
                _visible = true;
                $("#sec_col").hide();
                $("#toggle_btn")
                .find("i")
                .removeClass("fa fa-angle-double-right")
                .addClass("fa fa-angle-double-left");
            }
            var _table = $("#example").DataTable();
                //     Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        });
        $("#v1").click(function () {

            var hidden_columns = [3, 4, 5, 7];

            if (_visible) {
                $("#first_col").removeClass("col-md-12").addClass("col-md-4");
                _visible = false;
                $("#sec_col").show();



                $("#toggle_btn")
                .find("i")
                .removeClass("fa fa-angle-double-left")
                .addClass("fa fa-angle-double-right");
            } else {
                $("#first_col").removeClass("col-md-4").addClass("col-md-12");
                _visible = true;
                $("#sec_col").hide();
                $("#toggle_btn")
                .find("i")
                .removeClass("fa fa-angle-double-right")
                .addClass("fa fa-angle-double-left");
            }
            var _table = $("#example").DataTable();
                //     Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        });
    });
    $("#v2").click(function () {

        var hidden_columns = [3, 4, 5, 7];

        if (_visible) {
            $("#first_col").removeClass("col-md-12").addClass("col-md-4");
            _visible = false;
            $("#sec_col").show();



            $("#toggle_btn")
            .find("i")
            .removeClass("fa fa-angle-double-left")
            .addClass("fa fa-angle-double-right");
        } else {
            $("#first_col").removeClass("col-md-4").addClass("col-md-12");
            _visible = true;
            $("#sec_col").hide();
            $("#toggle_btn")
            .find("i")
            .removeClass("fa fa-angle-double-right")
            .addClass("fa fa-angle-double-left");
        }
        var _table = $("#example").DataTable();
            //     Show hide hidden columns
        _table.columns(hidden_columns).visible(_visible, true);
        _table.columns.adjust();
    });
    $("#v3").click(function () {

        var hidden_columns = [3, 4, 5, 7];

        if (_visible) {
            $("#first_col").removeClass("col-md-12").addClass("col-md-4");
            _visible = false;
            $("#sec_col").show();



            $("#toggle_btn")
            .find("i")
            .removeClass("fa fa-angle-double-left")
            .addClass("fa fa-angle-double-right");
        } else {
            $("#first_col").removeClass("col-md-4").addClass("col-md-12");
            _visible = true;
            $("#sec_col").hide();
            $("#toggle_btn")
            .find("i")
            .removeClass("fa fa-angle-double-right")
            .addClass("fa fa-angle-double-left");
        }
        var _table = $("#example").DataTable();
            //     Show hide hidden columns
        _table.columns(hidden_columns).visible(_visible, true);
        _table.columns.adjust();
    });
    $("#v4").click(function () {

        var hidden_columns = [3, 4, 5, 7];

        if (_visible) {
            $("#first_col").removeClass("col-md-12").addClass("col-md-4");
            _visible = false;
            $("#sec_col").show();



            $("#toggle_btn")
            .find("i")
            .removeClass("fa fa-angle-double-left")
            .addClass("fa fa-angle-double-right");
        } else {
            $("#first_col").removeClass("col-md-4").addClass("col-md-12");
            _visible = true;
            $("#sec_col").hide();
            $("#toggle_btn")
            .find("i")
            .removeClass("fa fa-angle-double-right")
            .addClass("fa fa-angle-double-left");
        }
        var _table = $("#example").DataTable();
            //     Show hide hidden columns
        _table.columns(hidden_columns).visible(_visible, true);
        _table.columns.adjust();
    });
    $("#v5").click(function () {

        var hidden_columns = [3, 4, 5, 7];

        if (_visible) {
            $("#first_col").removeClass("col-md-12").addClass("col-md-4");
            _visible = false;
            $("#sec_col").show();



            $("#toggle_btn")
            .find("i")
            .removeClass("fa fa-angle-double-left")
            .addClass("fa fa-angle-double-right");
        } else {
            $("#first_col").removeClass("col-md-4").addClass("col-md-12");
            _visible = true;
            $("#sec_col").hide();
            $("#toggle_btn")
            .find("i")
            .removeClass("fa fa-angle-double-right")
            .addClass("fa fa-angle-double-left");
        }
        var _table = $("#example").DataTable();
            //     Show hide hidden columns
        _table.columns(hidden_columns).visible(_visible, true);
        _table.columns.adjust();
    });

        // script for expand button
    $("#expandbtn").click(function () {

        if (_visible_1) {
            $("#sec_col").removeClass("col-md-8").addClass("col-md-12");
            _visible_1 = false;
            $("#first_col").hide();



        } else {
            $("#sec_col").removeClass("col-md-12").addClass("col-md-8");

            _visible_1 = true;
            $("#first_col").show();
        }
    });

</script>



<!--Datatable-->
<script>
    function getResponse() {
        var table = $('#examplecon').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            language: { lengthMenu: '_MENU_', search:"", searchPlaceholder:"Search for Order ID, customer, order status or something..." },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [
            {
                // text: 'EXPORT',
                // extend: 'collection',
                // buttons: ['excel', 'csv', 'pdf', 'print'],
                // className: 'px-3'

            },
            {
              text: '<i class="fa-solid fa-arrow-right-from-bracket"></i> EXPORT',
                            extend: 'collection',
                            buttons: [
                                // '<span class="fexport"><i class="fa-regular fa-file-excel icn me-2"></i> EXCEL</span>', '<span class="fexport"><i class="fa-regular fa-file-lines icn me-2"></i> CSV</span>', '<span class="fexport"><i class="fa-regular fa-file-pdf icn me-2"></i> PDF</span>', '<span class="fexport"><i class="fa-solid fa-print me-2 icn"></i> PRINT</span>'
                                {},
                                {
                                    text: '<i class="fa-regular fa-file-excel icn me-2 excel-icon"></i> EXCEL',
                                    extend: 'excel',

                                },
                                {
                                    text: '<i class="fa-regular fa-file-lines icn me-2 csv-icon"></i> CSV',
                                    extend: 'csv',
                                },
                                {
                                    text: '<i class="fa-regular fa-file-pdf icn me-1 pdf-icon"></i> PDF',
                                    extend: 'pdf'
                                },
                                {
                                    text: '<i class="fa-solid fa-print me-1 icn print-icon"></i> PRINT',
                                    extend: 'print'
                                },
                            ],
                            className: 'px-3'

            }

            ]
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
</script>



<script>
    function toggleRowBackground(checkbox) {
        var row = checkbox.closest('tr');
        row.classList.toggle('selected', checkbox.checked);
    }
</script>



<script>
    $(document).ready(function () {
        $(document).on("click", ".dropdown-item", function () {
            $(this).toggleClass("active");
        });
        $("ul#one>li:first-child").click(function () {
            $("ul#one>li:first-child ~ li a").removeClass("active");
        });
        $("ul#one>li:first-child ~ li").click(function () {
            $("ul#one>li:first-child a").removeClass("active");
        });
    });
</script>


<script type="text/javascript">
    function showHideRow(row) {
        $("#" + row).toggle();
    } 
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
                dropdownToggle.classList.remove("pending", "approved", "rejected"
                    );
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
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">In Progress</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Rejected</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Approved</a></li>';
            } else if (selectedOption === "Approved") {
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">In Progress</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Rejected</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Pending</a></li>';
            } else if (selectedOption === "Rejected") {
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">In Progress</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Pending</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Approved</a></li>';
            }
        });
    });
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

            openTab(event, 'profile');

        }
        else if (activeSlideIndex === 1) {

            openTab(event, 'proposals');

        }
        else if (activeSlideIndex === 1) {

            openTab(event, 'deal');

        }
        else if (activeSlideIndex === 1) {

            openTab(event, 'task');

        }
        else if (activeSlideIndex === 1) {

            openTab(event, 'remainder');

        }
        else if (activeSlideIndex === 1) {

            openTab(event, 'activity');

        }
        else if (activeSlideIndex === 1) {

            openTab(event, 'file');

        }

    });


</script>
<script>
    $(function () {

        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<!-- Apex Chart -->
<script>
    var options = {
        series: [{
            name: "Projection",
            data: [50000, 60000, 80000, 100000, 120000, 150000, 160000, 120000, 130000, 150000, 180000, 190000]
        }, {
            name: "Actual",
            colors: '#8ae707',
            data: [60000, 40000, 50000, 90000, 100000, 70000, 120000, 100000, 90000, 110000, 150000, 160000]
        }],
        chart: {
            type: 'bar',
            height: 390,
        },
        plotOptions: {
            bar: {
                vertical: true,
                dataLabels: {
                    position: 'top',
                },
            }
        },
        dataLabels: {
            enabled: false,
            offsetX: -6,
            style: {
                fontSize: '12px',
                colors: ['#fff']
            }
        },
        stroke: {
            show: true,
            width: 1,
            colors: ['#fff']
        },
        tooltip: {
            shared: true,
            intersect: false
        },
        title: {
            text: "PROJECTION VS ACTUAL",
            fontColor: "#695A42",
            fontSize: 14
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        yaxis: {
            min: 0,
            max: 200000,
            tickAmount: 5,
        },
        colors: ["#02A9F0", "#84c529"],
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();


</script>


<script>
    var dropdownToggles = document.querySelectorAll("#stbutton2");
    dropdownToggles.forEach(function (dropdownToggle) {
        var dropdownMenu = dropdownToggle.nextElementSibling;
        dropdownMenu.addEventListener("click", function (event) {
            var selectedOption = event.target.textContent;
            dropdownToggle.textContent = selectedOption;
            dropdownToggle.classList.remove("medium", "hard", "urgent");
            if (selectedOption === "Medium") {
                dropdownToggle.classList.add("medium");
            } else if (selectedOption === "Hard") {
                dropdownToggle.classList.add("hard");
            } else if (selectedOption === "Urgent") {
                dropdownToggle.classList.add("urgent");
            } else {
                dropdownToggle.classList.remove("medium", "hard", "urgent");
            }
        });
        dropdownToggle.addEventListener("click", function () {
            var selectedOption = dropdownToggle.textContent.trim();
            dropdownMenu.innerHTML = "";
            if (selectedOption === "Low") {
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Medium</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Hard</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Urgent</a></li>';
            } else if (selectedOption === "Medium") {
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Low</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Hard</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Urgent</a></li>';
            } else if (selectedOption === "Hard") {
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Low</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Medium</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Urgent</a></li>';
            } else if (selectedOption === "Urgent") {
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Low</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Medium</a></li>';
                dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Hard</a></li>';
            }
        });
    });
</script>
<script type="text/javascript">
    function deductionTable()
    {
        table=$('#examplecon').DataTable();
        table.destroy();
        $.ajax({
          type:'POST',
          url:'<?=base_url()?>/Payroll/AdvanceLoan/deductionTable',
          dataType:'json',
          success:function(result)
          { 
            $('#append').html(result.table);
            getResponse();
        }
    });
    }
    deductionTable();
</script>


<script type="text/javascript">
  function ChangeStatus(id) {
    var selectElement = document.getElementById("statusSelect");
    var deliveryStatus = selectElement.value;
    console.log(deliveryStatus);
    $.ajax({
        url: '<?=base_url()?>/Payroll/AdvanceLoan/deduction_status/' +id,
        type: 'POST',
        data: { deliveryStatus: deliveryStatus },
        dataType: 'json',
        success: function (result) {
          toastr.success("status Upadted successfully");
      },
  });
}
</script>