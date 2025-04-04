<body id="wrapper">
    <div class="row">
        <div class="content2 productcontainer" id="first_col">
            <div class="container-fluid  tblcontainer p-2">
                <div class="row">
                    <div class="col-md-12 addpadding">
                        <button type="submit" class="hrbtns btnmargin btnpadding addbttn crm-add-btn"
                            onclick="showModal(`<?= base_url('Crm/addzone') ?>`,`Add`)"><i class="fa fa-plus" aria-hidden="true"></i> ADD</button>

                        <button type="button" id="toggle_btn" onclick="toggleView(id)"
                            class=" contractfilter edittglbtn5 edittglbtn6 viewbtnByToggle pull-right " data-bs-toggle="tooltip" title=""
                            data-bs-title="Toggle Table">
                            <i class="fa fa-angle-double-left "></i>
                        </button>

                    </div>
                </div>
                <br>
                <div class="row ">

                    <div class="col-md-2 datepicker1">
                        <div class="purchasegrp">
                            <input type="text" id="reportrange" name="dates"
                                class="form-control purchaseselects statbtn">
                        </div>
                    </div>

                    <!-- <form
                                    class="row gy-2 gx-2  align-items-center justify-content-xl-start justify-content-between"
                                  >  -->
                    <!-- <div class="col-md-4">
                        <div class="purchasegrp">
                            <div class=" dropdown-with-icon dropdownalignment">
                                <select class="selectpicker multiselect" data-name="name" multiple
                                    data-actions-box="true" data-live-search="true" title="Change...">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-4 qarow">
                      <div class="purchasegrp">
                        <div class="dropdown-with-icon dropdownalignment drop-1" style="border-radius:4px 0px 0px 4px;">
                            <select class="selectpicker multiselect" data-name="name" multiple data-actions-box="true"
                                data-live-search="true">
                                <option value="">All</option>
                                <optgroup label="Divider" class="divider"></optgroup>
                                <option value="">Billable</option>
                                <option value="">Non Billable</option>
                                <option value="">Invoiced</option>
                                <option value="">Not invoiced</option>
                                <option value="">Recurring</option>
                                <optgroup label="Divider" class="divider"></optgroup>
                                <option value="">2024</option>
                                <optgroup label="Divider" class="divider"></optgroup>
                                <option value="" disabled>By Category</option>
                                <option value="">Bank Charges</option>
                                <option value="">BANK TRANSACTION CHARGES</option>
                                <option value="">Beli Behan</option>
                                <option value="">Commission</option>
                                <option value="">Cost of Sales</option>
                                <optgroup label="Divider" class="divider"></optgroup>
                                <option value="">Make Payment By Net Payment</option>
                                <option value="">Make Payment By UPI</option>
                            </select>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="demo-html">
                            <table id="example" class="display dataTable display responsive nowrap "
                                style="width: 100%; " aria-describedby="example_info">
                                <thead class="theadrow hdrw">
                                    <tr>
                                        <th><input type="checkbox" id="all_check" onchange="checkAll()"></th>
                                        <th>Zone Name</th>
                                        <th>Locations</th>
                                        <th>Calls</th>
                                        <th>Campaigns</th>
                                        <th>teammates</th>
                                        <th>Leads</th>
                                        <th>order</th>
                                        <th>Actual / Achieved</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody id="append">

                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="content2 productcontainer col-md-8 mt-2" id="sec_col">
            <div class="container-fluid  tblcontainer p-2">
                <hr class="fileline" />
                <div class="row vendcarmt mt-0" style="padding-left: 20px !important;">
                    <div class="col-md-12 ">
                        <div class="desktop">
                        <div class="scroll-images custml toptea border-bott ">
                                    <div class="child mb-0 ms-0 childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links active"
                                            onclick="openTab(event, 'profile')">
                                            Preview</button>
                                    </div>
                                    <div class="child mb-0 childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links"
                                            onclick="openTab(event, 'proposals')">Teams</button>
                                    </div>
                                    <div class="child mb-0 childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links"
                                            onclick="openTab(event, 'deal')">Deals</button>
                                    </div>
                                    <div class="child mb-0 childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links"
                                            onclick="openTab(event, 'task')">Tasks</button>
                                    </div>
                                    <div class="child mb-0 childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links"
                                            onclick="openTab(event, 'reimbur')">Reimbursement</button>
                                    </div>
                                    <div class="child mb-0 childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links"
                                            onclick="openTab(event, 'target')">Targets</button>
                                    </div>
                                    <div class="child mb-0 childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links"
                                            onclick="openTab(event, 'payment')">Payments</button>
                                    </div>
                                    <div class="child mb-0 childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links"
                                            onclick="openTab(event, 'user')">Users</button>
                                    </div>
                                    <div class="child mb-0 childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links"
                                            onclick="openTab(event, 'remainder')">Remainder</button>
                                    </div>
                                    <div class="child mb-0 childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links"
                                            onclick="openTab(event, 'expense')">Expense</button>
                                    </div>
                                    <div class="child mb-0 childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links"
                                            onclick="openTab(event, 'file')">Files</button>
                                    </div>
                                    <div class="child mb-0 childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links"
                                            onclick="openTab(event, 'activity')">Activity   </button>
                                    </div>
                                    <div class="child mb-0 childd-tabb">
                                        <button id="expandbtn" class="tablinks tb-links expand-button childd-tabb-links"
                                            data-toggle="tooltip" data-bs-title="Toggle full view"
                                            data-bs-custom-class="custom-tooltip" data-bs-trigger="hover"><i
                                                class="fa fa-expand"></i></button>
                                    </div>

                                </div> 

                            <!-- <div class="scroll-images custml toptea">
                                <div class="tabs d-flex newtabml ml-1">
                                    <div>
                                        <button class="tablinks active" onclick="openTab(event, 'profile')">
                                            Preview</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px"
                                            onclick="openTab(event, 'proposals')"> Teams</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'deal')">
                                            Deals</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'task')">
                                            Tasks</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px"
                                            onclick="openTab(event, 'reimbur')"> Reimbursement</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'target')">
                                            Targets</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px"
                                            onclick="openTab(event, 'payment')"> Payments</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'user')">
                                            Users</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px"
                                            onclick="openTab(event, 'remainder')"> Remainder</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px"
                                            onclick="openTab(event, 'expense')"> Expense</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'file')">
                                            Files</button>
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
                            </div> -->
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
                                        onclick="openTab(event, 'proposals')">Teams</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%"
                                        onclick="openTab(event, 'deal')">Deals</button>
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
                                        onclick="openTab(event, 'reimbur')">Reimbrishment</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%"
                                        onclick="openTab(event, 'target')">Targets</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%"
                                        onclick="openTab(event, 'payment')">Payments</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%"
                                        onclick="openTab(event, 'user')">Users</button>
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
                                        onclick="openTab(event, 'expense')">Expense</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%"
                                        onclick="openTab(event, 'file')">Files</button>
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
                <hr class="fileline linehr"><br>
                <div id="profile" class="tabcontent  mtgb prev">

                    <!-- Analytics Dashboard -->
                    <div class="analytics_dashboard">
                        <div class="analytics_dashboard_upper">
                            <div class="analytics_dashboard_upper_right">
                                <div class="col-md-2 datepicker1 Date">
                                    <div class="purchasegrp">
                                        <input type="text" id="reportrange" name="dates"
                                            class="form-control purchaseselects statbtn doubledate" placeholder="Date">
                                    </div>
                                </div>
                                <div id="chart">
                                </div>
                            </div>
                            <div class="analytics_dashboard_upper_left">
                                <div class="two_card_arrange">
                                    <div class="card_box">
                                        <p class="card_heading">Customers</p>
                                        <p class="card_icon"><i class="fa-solid fa-users"></i></p>
                                        <p class="card_number">2.382</p>
                                        <span class="card_week">
                                            <p class="red">-3.65%</p> Since Last Week
                                        </span>
                                    </div>
                                    <div class="card_box">
                                        <p class="card_heading">Deals</p>
                                        <p class="card_icon"><i class="fa-solid fa-handshake"></i></p>
                                        <p class="card_number">&#x24; 21.300</p>
                                        <span class="card_week">
                                            <p class="green">6.65%</p> Since Last Week
                                        </span>
                                    </div>
                                </div>
                                <div class="two_card_arrange">
                                    <div class="card_box">
                                        <p class="card_heading" style="text-wrap: wrap;">Revenue</p>
                                        <p class="card_icon"><i class="fa-solid fa-sack-dollar"></i></p>
                                        <p class="card_number">14.212</p>
                                        <span class="card_week">
                                            <p class="green">5.25%</p> Since Last Week
                                        </span>
                                    </div>
                                    <div class="card_box">
                                        <p class="card_heading">Growth</p>
                                        <p class="card_icon"><i class="fa-solid fa-arrow-up-right-dots"></i></p>
                                        <p class="card_number">64</p>
                                        <span class="card_week">
                                            <p class="red">-2.25%</p> Since Last Week
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><br>
                            <table class="details-table table table-striped">
                                <tbody id="stripedtab">

                                </tbody>
                            </table>
                            <img src="https://perfexmodules.gtssolution.site/modules/warehouse/uploads/approval/approved.png"
                                class="img-width-height">
                        </div>
                    </div>



                </div>
                <div id="proposals" class="tabcontent  mtgb">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp"
                                onclick="showMdModal('add.html','ADD ZONE');">ADD ZONE
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <table class=" example1 display dataTable display responsive nowrap " style="width: 100%; "
                                aria-describedby="example_info">
                                <thead class="theadrow hdrw">
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-sort="descending"
                                            aria-label="Name: activate to sort column descending"
                                            style="font-weight:normal ;">Team Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="font-weight:normal ;">Leaders</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Staff</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Zone</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>ABC
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
                                        <td><span class="undelsp draftsp">cfvgbh</span></td>
                                        <td><span class="undelsp draftsp">cfvgbh</span></td>
                                        <td><span class="undelsp draftsp">cfvgbh</span></td>
                                        <td><span class="approvedbtn accept_bttn">Accepted</span></td>
                                    </tr>
                                    <tr class="odd">
                                        <td>qsr
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
                                        <td><span class="undelsp draftsp">sdfg</span></td>
                                        <td><span class="undelsp draftsp">ftgyh</span></td>
                                        <td><span class="undelsp draftsp">cfvgbh</span></td>
                                        <td><span class="approvedbtn accept_bttn">Accepted</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="deal" class="tabcontent  mtgb">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp"
                                onclick="showMdModal('add.html','ADD ZONE');">ADD ZONE
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <table class=" example1 display dataTable display responsive nowrap " style="width: 100%; "
                                aria-describedby="example_info">
                                <thead class="theadrow hdrw">
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-sort="descending"
                                            aria-label="Name: activate to sort column descending"
                                            style="font-weight:normal ;">Company</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="font-weight:normal ;">Phone</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="font-weight:normal ;">Value</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Assigned</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Tags</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Last Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>ABC</td>
                                        <td>924568990
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
                                        <td><span class="undelsp draftsp">Type</span> <span
                                                class="undelsp draftsp">Status</span></td>>
                                        <td>may</td>
                                    </tr>
                                    <tr class="odd">
                                        <td>qsr</td>
                                        <td>12345687
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
                                        <td><span class="undelsp draftsp">Type</span> <span
                                                class="undelsp draftsp">Status</span></td>
                                        <td>june</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="task" class="tabcontent  mtgb">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp"
                                onclick="showMdModal('add.html','ADD ZONE');">ADD ZONE
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <table class=" example1 display dataTable display responsive nowrap " style="width: 100%; "
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
                                            Start Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Age: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Due Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Age: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Assigned to
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Salary: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Tags</th>
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
                                                Crm Solution</a>
                                        </td>
                                        <td><span class="undelsp draftsp">Type</span></td>
                                        <td><button type="button" id="stbutton2" style="border: none;"
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
                <div id="reimbur" class="tabcontent  mtgb">
                    <!-- <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp"
                                onclick="showMdModal('add.html','ADD ZONE');">ADD ZONE
                            </button>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="demo-html">
                            <table class="example1 display dataTable display responsive nowrap " style="width: 100%; "
                                aria-describedby="example_info">
                                <thead class="theadrow hdrw">
                                    <tr>
                                        <th>Staff</th>
                                        <th>Request Amount</th>
                                        <th>Approved Amount</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody id="viewreimbtble">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="target" class="tabcontent  mtgb">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp"
                                onclick="showMdModal('add.html','ADD ZONE');">ADD ZONE
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <table class=" example1 display dataTable display responsive nowrap " style="width: 100%; "
                                aria-describedby="example_info">
                                <thead class="theadrow hdrw">
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-sort="descending"
                                            aria-label="Name: activate to sort column descending"
                                            style="font-weight:normal ;">Target name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="font-weight:normal ;">Leaders</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Staff</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Type</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Assigned / Actual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>ABC
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
                                        <td><span class="undelsp draftsp">xddcfvgbh</span></td>
                                        <td><span class="undelsp draftsp">fghj</span></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="odd">
                                        <td>qsr
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
                                        <td><span class="undelsp draftsp">drctfvygbhunjim</span></td>
                                        <td><span class="undelsp draftsp">sxdcfvg</span></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="payment" class="tabcontent  mtgb">
                    <!-- <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp"
                                onclick="showMdModal('add.html','ADD ZONE');">ADD ZONE
                            </button>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo-html mt-0" style="overflow-x: auto;">
                                <table class=" example1 display dataTable display responsive nowrap "
                                    style="width: 100%;" aria-describedby="example_info">
                                    <thead class="theadrow hdrw">
                                        <tr>
                                            <th class="select-checkbox sorting_disabled">
                                                Payment #
                                            </th>
                                            <th class="select-checkbox sorting_disabled">
                                                Payment Mode
                                            </th>
                                            <th class="sorting sorting_asc">
                                                Date
                                            </th>
                                            <th class="sorting sorting_asc">
                                                Amount
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="paymenttable">    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="user" class="tabcontent  mtgb">
                    <!-- <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp"
                                onclick="showMdModal('add.html','Add Campaign');">ADD CAMPAIGN
                            </button>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo-html mt-0" style="overflow-x: auto;">
                                <table class=" example1 display dataTable display responsive nowrap "
                                    style="width: 100%;" aria-describedby="example_info">
                                    <thead class="theadrow hdrw">
                                        <tr>
                                            <th>Staff Name</th>
                                            <th>Role</th>
                                            <th>Desigation</th>
                                            <th> Teamname</th>
                                            <th> Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="viewsealesmemtble">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="remainder" class="tabcontent  mtgb">
                    <!-- <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp"
                                onclick="showMdModal('add.html','ADD ZONE');">ADD ZONE
                            </button>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <div class="table-responsive">
                                <table class="example1 display dataTable display responsive nowrap tblalign "
                                    style="width: 100%;" aria-describedby="example_info">
                                    <thead class="theadrow hdrw">
                                        <tr>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Remind</th>
                                            <th>Is notified ?</th>
                                        </tr>
                                    </thead>
                                    <tbody id="remain">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="activity" class="tabcontent  mtgb">
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
                <div id="file" class="tabcontent  mtgb">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp"
                                onclick="showMdModal('add.html','ADD ZONE');">ADD ZONE
                            </button>
                        </div>
                    </div>
                    <br>
                    <div class="row hi hls1">
                        <!-- <div class="col-md-12 p-0">
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
                        </div> -->
                        <div class="col-md-12 pe-3">

<link
    href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined"
    rel="stylesheet" />
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
        <span
            class="material-icons-outlined cancel-alert-button">cancel</span>
    </span>
    <div class="file-block">
        <div class="file-info">
            <span
                class="material-icons-outlined file-icon">description</span>
            <span class="file-name"> </span>  <span class="file-size badge rounded-pill">
            </span>
        </div>
        <span class="material-icons remove-file-icon">delete</span>
        <div class="progress-bar"></div>
    </div>
</div>

</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo-html mt-0" style="overflow-x: auto;">
                                <table class=" example1 display dataTable display responsive nowrap "
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
                                                    Spreadsheet Online New (1).xlsx</a></td>
                                            <td>Teacher
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
                                                    Albi Solution Solutions</a></td>
                                            <td></td>
                                            <td>
                                                <button type="button" class="closexbtn clsheight"
                                                    onclick="showModal('edit-job.html','Edit Position')"
                                                    style="background-color: #03A9F4;" data-bs-toggle="tooltip"
                                                    data-bs-title="Mail"><i class="fa fa-envelope"></i></button>
                                                <button class="closexbtn clsheight" data-bs-toggle="tooltip"
                                                    data-bs-title="Remove"><i class="fa fa-remove"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="expense" class="tabcontent  mtgb">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp"
                                onclick="showMdModal('add.html','Add Campaign');">ADD CAMPAIGN
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <table class=" example1 display dataTable display responsive nowrap  " style="width: 100%; "
                                aria-describedby="example_info">
                                <thead class="theadrow hdrw">
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-sort="descending"
                                            aria-label="Name: activate to sort column descending"
                                            style="font-weight:normal ;">#</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="font-weight:normal ;">category</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Expense Receipt</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Tags</th>

                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Reference #</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td>ABC</td>
                                        <td>924568990
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
                                        <td>nwerthjsra...pdf</td>
                                        <td>ABC</td>
                                        <td><span class="undelsp draftsp">Tag</span> </td>
                                        <td></td>
                                    </tr>
                                    <tr class="odd">
                                        <td>qsr</td>
                                        <td>12345687
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
                                        <td>nwerthjsra...pdf</td>
                                        <td>qsr</td>
                                        <td><span class="undelsp draftsp">Tag</span> </td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals-->
    <div class="modal fade" id="modal_md" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
                    <h5 class="modal-title popuphead"></h5>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
    <script>
    function showMdModal(url, title) {
        $('#modal_md').modal('show', {
            backdrop: 'true'
        });
        $.ajax({
            url: url,
            success: function(response) {
                $('#modal_md .modal-title').html(title);
                $('#modal_md .modal-body').html(response);
            }
        });
    }
    </script>
    <!--upload-files-->

    <script>
    const dropZone = document.querySelector('#drop-zone');
    const inputElement = document.querySelector('#myfile');
    const img = document.querySelector('img');
    const p = document.querySelector('.dropfile');
    const fileNameElement = document.querySelector('.file-name');
    const deleteButton = document.querySelector('#deleteBtn');

    inputElement.addEventListener('change', function(e) {
        const file = this.files[0];
        if (file) {
            img.style.display = "block";
            p.style.display = 'none';
            fileNameElement.textContent = file.name;
            deleteButton.style.display = 'inline-block';

            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onloadend = function() {
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
        reader.onloadend = function() {
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

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <!-- Apex Chart -->
    <script>
    var options = {
        series: [{
            name: "Projection",
            data: [50000, 60000, 80000, 100000, 120000, 150000, 160000, 120000, 130000, 150000, 180000,
                190000
            ]
        }, {
            name: "Actual",
            colors: '#8ae707',
            data: [60000, 40000, 50000, 90000, 100000, 70000, 120000, 100000, 90000, 110000, 150000, 160000]
        }],
        chart: {
            type: 'bar',
            height: 380,
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

    carousel.addEventListener("slid.bs.carousel", function(event) {
        var activeSlideIndex = event.to;
        if (activeSlideIndex === 0) {

            openTab(event, 'profile');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'proposals');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'deal');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'task');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'reimbur');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'target');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'payment');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'user');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'remainder');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'expense');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'file');

        } else if (activeSlideIndex === 1) {

            openTab(event, 'activity');

        }

    });
    </script>
    <!-- Modals -->

    <script>
    function showModal(url, title) {

        $('#modal_md').on('shown.bs.modal', function() {
            $('.selectpicker').selectpicker('refresh');
        });
        $('#modal_md').modal('show', {
            backdrop: 'true'
        });
        $.ajax({
            url: url,
            success: function(response) {
                $('#modal_md .modal-title').html(title);
                $('#modal_md .modal-body').html(response);
            }
        });
    }
    </script>
    <!--Datatable-->
    <!-- <script>
    $(document).ready(function() {
        var table = $('#example').DataTable({
            language: {
                lengthMenu: '_MENU_'
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                {
                    text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                }
            ]
        });
    });

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
    new DataTable('.example', {
        columnDefs: [{
            orderable: false,
            className: 'select-checkbox',
            targets: 0
        }],
        select: {
            style: 'os',
            selector: 'td:first-child'
        },
        order: [
            [1, 'asc']
        ]
    });
    </script>
    <script>
    function toggleRowBackground(checkbox) {
        var row = checkbox.closest('tr');
        row.classList.toggle('selected', checkbox.checked);
    }
    </script> -->

  


    <script>
    $(function() {

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
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                    'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
    });
    </script>
    <script>
    $(document).ready(function() {
        $(document).on("click", ".dropdown-item", function() {
            $(this).toggleClass("active");
        });
        $("ul#one>li:first-child").click(function() {
            $("ul#one>li:first-child ~ li a").removeClass("active");
        });
        $("ul#one>li:first-child ~ li").click(function() {
            $("ul#one>li:first-child a").removeClass("active");
        });
    });
    </script>
    <script>
    $(function() {

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
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                    'month').endOf('month')]
            }
        }, cb);

        cb(start, end);
    });
    </script>

    <!--  Select2 Plugin Js -->
    <script src="../../assets/vendor/select2/js/select2.min.js"></script>


    <!-- App js -->
    <script src="../../assets/js/app.min.js"></script>

    <script>
    function getzoneUser() {
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>/Crm/getzoneUser',
            dataType: 'json',
            success: function(result) {
                $('#example').DataTable().destroy();
                $('#append').html(result);
                initzoneTable();
            }
        });
    }
    getzoneUser();


    function initzoneTable() {
        var table = $('#example').DataTable({
            language: { lengthMenu: '_MENU_', search: '', searchPlaceholder: " Search for order ID, customer, order status or something..." },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [
                {},
                
                
                // {
                //     text: 'EXPORT',
                //     extend: 'collection',
                //     buttons: ['excel', 'csv', 'pdf', 'print'],
                //     className: 'px-3'

                // },

                // {
                //     text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                // }
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
    };

    function toggleView(id) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>/Crm/tabzoneUsers/' + id,
            dataType: 'json',
            success: function(result) {
                $('#stripedtab').html(result);
            }
        });

        var hidden_columns = [3, 4, 5, 7];
        var _visible = false;
        if ($("#first_col").hasClass("col-md-12")) {
            $("#first_col").removeClass("col-md-12").addClass("col-md-4");
            $("#sec_col").show();

        } else {
            $("#first_col").removeClass("col-md-4").addClass("col-md-12");
            $("#sec_col").hide();
            _visible = true;
        }

        var _table = $("#example").DataTable();
        // Show hide hidden columns
        _table.columns(hidden_columns).visible(_visible, true);
        _table.columns.adjust();

        $('#toggle_btn').on('click', function() {
            // Assuming you have an ID to pass to the toggleView function, replace 'yourId' with the actual ID
            var element = document.getElementById(ID);
            if (event.target.checked) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        });
    }
    </script>
    <script>
    $(document).ready(function() {
        $(document).on('click', '.sliderreimb', function() {
            var deductionTypeId = $(this).data('dedtypeid');
            var newStatus = $(this).is(':checked') ? 1 : 0;
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/Crm/getzoneslideUsers',

                data: {
                    deductionTypeId: deductionTypeId,
                    newStatus: newStatus
                },
                success: function(response) {
                    toastr.success('status updated successfully', 'Success');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
    </script>
    <!-- tab tables -->
    <script>
    function getviewreimb() {
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>/Crm/getviewreimb',
            dataType: 'json',
            success: function(result) {
                $('.example1').DataTable().destroy();
                $('#viewreimbtble').html(result);
                initviewreimb();
            }
        });
    }
    getviewreimb();
    function getviewsalesmem() {
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>/Crm/getviewsalesmem',
            dataType: 'json',
            success: function(result) {
                $('.example1').DataTable().destroy();
                $('#viewsealesmemtble').html(result);
                initviewreimb();
            }
        });
    }
    getviewsalesmem();

    function getviewremind() {
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>/Crm/getviewremind',
            dataType: 'json',
            success: function(result) {
                $('.example1').DataTable().destroy();
                $('#remain').html(result);
                initviewreimb();
            }
        });
    }
    getviewremind();
    function getviewpayment() {
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>/Crm/getviewpayment',
            dataType: 'json',
            success: function(result) {
                $('.example1').DataTable().destroy();
                $('#paymenttable').html(result);
                initviewreimb();
            }
        });
    }
    getviewpayment();



    function initviewreimb() {
        var table = $('.example1').DataTable({
            language: { lengthMenu: '_MENU_', search: '', searchPlaceholder: " Search for order ID, customer, order status or something..." },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            dom: 'Blfrtip',
            buttons: [{
                    text: 'EXPORT',
                    extend: 'collection',
                    buttons: ['excel', 'csv', 'pdf', 'print'],
                    className: 'px-3'

                },

                // {
                //     text: '<i class="bi bi-arrow-repeat" style="font-size:12px"></i>'
                // }
            ]
        });
    }
    </script>

</body>