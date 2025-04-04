<body id="wrapper" style="margin-top: 10px;">
    <div class="row invtblerow565">
    <div class="relative">
<div class="newthebtn afghitpo">
<button type="button" class="approvedbtn finishedbtn addbttn"
                                    style="margin-bottom: 7px;"
                                    onclick="showMdModal('<?= base_url() ?>/Payroll/Deductions/deduction_addmodal/0','Add Deduction')"
                                    style="height: fit-content;padding: 6px 12px;">ADD DEDUCTION</button>
</div></div>
        <div class="cexpbdymt col-md ab_ef mhj_crcto" id="first_col" style="display: block;margin-right: -10px !important;">
            <div class="container-fluid bg-white  " style="margin-top: -1px !important;margin-right: -10px;">


                <!--<div class="card">
                    <div class="card-body">-->
                        <div class="row">
                            <div class="col-md-6">
                                <!--<button type="button" class="approvedbtn finishedbtn addbttn"
                                    style="margin-bottom: 7px;"
                                    onclick="showMdModal('<?= base_url() ?>/Payroll/Deductions/deduction_addmodal/0','Add Deduction')"
                                    style="height: fit-content;padding: 6px 12px;">ADD DEDUCTION K</button>-->
                            </div>
                            <div class="col-md-6 addpadding">

                                <button type="button" id="toggle_btn" class="contractfilter pull-right row-mtop5"
                                    data-bs-toggle="tooltip" title="" data-bs-title="Toggle Table"
                                    style="margin-right: 10px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;">
                                    <i class="fa fa-angle-double-left"></i>
                                </button>

                            </div>

                            <div class="col-md-2 datepicker1" style="margin-top: 15px;">
                                <div class="purchasegrp">
                                    <input type="text" id="reportrange" name="dates"
                                        class="form-control purchaseselects statbtn">
                                </div>
                            </div>


                            <div class="col-md-4" style="margin-top: 24px;">
                                <div class="purchasegrp">
                                    <div class=" dropdown-with-icon dropdownalignment"
                                        style="border-radius:4px 0px 0px 4px;">
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
                            </div>

                <!-- <div class="col-md-4 qarow ">
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
                </div> -->



                            <div class="row">
                                <div class="demo-html">
                                    <table id="example" class="display dataTable table-responsive display responsive  "
                                        style="width: 100%; " aria-describedby="example_info">
                                        <thead class="theadrow hdrw">
                                            <tr>

                                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example"
                                                    rowspan="1" colspan="1" aria-sort="descending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="font-weight:normal ;">Deduction Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                                    style="font-weight:normal ;">Name in Payslip</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="font-weight:normal ;">
                                                    Deduction Type</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="font-weight:normal ;">
                                                    Calculation</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="font-weight:normal ;">
                                                    User</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                                    style="font-weight:normal ;">
                                                    Status</th>

                                        </thead>
                                        <tbody id="append">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!--</div>
        </div>-->

        <div class="col-md-8 exptblecol mt-2 ab_hij" id="sec_col"
            style="display: none;margin-top: -1px !important;">
            <div class="container-fluid  tblcontainer p-2">
                <hr class="fileline" />
                <div class="row vendcarmt mt-0" style="padding-left: 20px !important;margin-top: 0px !important;">
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
                                            onclick="openTab(event, 'proposals')"> Payslips</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'deal')">
                                            Earnings</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px"
                                            onclick="openTab(event, 'reimbur')"> Deductions</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'target')">
                                            Taxes</button>
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
                                        onclick="openTab(event, 'proposals')">Payslips</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%"
                                        onclick="openTab(event, 'deal')">Earnings</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%"
                                        onclick="openTab(event, 'reimbur')">Deductions</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%"
                                        onclick="openTab(event, 'target')">Taxes</button>
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
                <hr class="fileline linehr" style="padding-left: 20px !important;"><br>
                <div id="profile" class="tabcontent  mtgb" style="display:block;">

                    <!-- Analytics Dashboard 
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
                                            <p style="color:red;">-3.65%</p> Since Last Week
                                        </span>
                                    </div>
                                    <div class="card_box">
                                        <p class="card_heading">Deals</p>
                                        <p class="card_icon"><i class="fa-solid fa-handshake"></i></p>
                                        <p class="card_number">&#x24; 21.300</p>
                                        <span class="card_week">
                                            <p style="color:rgb(10, 208, 10)">6.65%</p> Since Last Week
                                        </span>
                                    </div>
                                </div>
                                <div class="two_card_arrange">
                                    <div class="card_box">
                                        <p class="card_heading" style="text-wrap: wrap;">Reimbrishment</p>
                                        <p class="card_icon"><i class="fa-solid fa-sack-dollar"></i></p>
                                        <p class="card_number">14.212</p>
                                        <span class="card_week">
                                            <p style="color:rgb(10, 208, 10)">5.25%</p> Since Last Week
                                        </span>
                                    </div>
                                    <div class="card_box">
                                        <p class="card_heading">Followups</p>
                                        <p class="card_icon"><i class="fa-solid fa-user-plus"></i></p>
                                        <p class="card_number">64</p>
                                        <span class="card_week">
                                            <p style="color:red">-2.25%</p> Since Last Week
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>-->
                    <div class="row">
                        <div class="col-md-12"><br>
                            <table class="details-table table table-striped">
                                <tbody id="append2">

                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>
                <div id="proposals" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <table id="example1" class="display dataTable display responsive nowrap "
                                style="width: 100%; " aria-describedby="example_info">
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
                                        <td><span class="approvedbtn accept_bttn">Accepted</span></td>
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
                                        <td><span class="approvedbtn accept_bttn">Accepted</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="deal" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <table id="example3" class="display dataTable display responsive nowrap "
                                style="width: 100%; " aria-describedby="example_info">
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
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Assigned</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Status</th>
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
                                        <td><span class="approvedbtn accept_bttn">Accepted</span></td>
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
                                        <td><span class="approvedbtn accept_bttn">Accepted</span></td>
                                        <td>june</td>
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
                                                CRM Solution</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <button type="button" id="stbutton2" style="border: none;"
                                                class=" status-button  dropdown-toggle range-toggle"
                                                data-bs-toggle="dropdown">Low </button>
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
                <div id="reimbur" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <table id="example4" class="display dataTable display responsive nowrap "
                                style="width: 100%; " aria-describedby="example_info">
                                <thead class="theadrow hdrw">
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-sort="descending"
                                            aria-label="Name: activate to sort column descending"
                                            style="font-weight:normal ;">Staff</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="font-weight:normal ;">Request Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Approved Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Date</th>
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
                                        <td>924568990</td>
                                        <td></td>
                                        <td></td>
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
                                        <td>12345687</td>
                                        <td></td>
                                        <td></td>
                                        <td><span class="approvedbtn accept_bttn">Accepted</span></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="target" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <table id="example5" class="display dataTable display responsive nowrap "
                                style="width: 100%; " aria-describedby="example_info">
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
                                        <td>924568990</td>
                                        <td></td>
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
                                        <td>12345687</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
                                                Is notified ?</th>
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
        function showMdModal(url, title)
        {
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
        $('#modal_md').on('shown.bs.modal', function ()
        {
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
    <!--Multiselect-->
    <script>
        const dropdowns = document.querySelectorAll('.multiselect');

        dropdowns.forEach(dropdown =>
        {
            const inputBox = document.createElement('input');
            inputBox.type = 'hidden';
            inputBox.classList.add('selected-values');
            name = dropdown.getAttribute('data-name');
            inputBox.setAttribute("name", name);
            dropdown.after(inputBox);

            dropdown.addEventListener('change', () =>
            {
                const selectedOptions = Array.from(dropdown.selectedOptions).map(option => option.value);
                inputBox.value = selectedOptions.join(', ');
            });
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
        var _visible_1 = true;
        var _visible = true;

        $(document).ready(function ()
        {

            $("#toggle_btn").click(function ()
            {
                var hidden_columns = [3, 4, 5, 7];

                if (_visible)
                {
                    $("#first_col").removeClass("col-md-12").addClass("col-md-4");

                    _visible = false;
                    $("#sec_col").show();



                    $("#toggle_btn")
                        .find("i")
                        .removeClass("fa fa-angle-double-left")
                        .addClass("fa fa-angle-double-right");
                }
                else
                {
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
        $("#v2").click(function ()
        {

            var hidden_columns = [3, 4, 5, 7];

            if (_visible)
            {
                $("#first_col").removeClass("col-md-12").addClass("col-md-4");
                _visible = false;
                $("#sec_col").show();



                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-left")
                    .addClass("fa fa-angle-double-right");
            } else
            {
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
        $("#v3").click(function ()
        {

            var hidden_columns = [3, 4, 5, 7];

            if (_visible)
            {
                $("#first_col").removeClass("col-md-12").addClass("col-md-4");
                _visible = false;
                $("#sec_col").show();



                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-left")
                    .addClass("fa fa-angle-double-right");
            } else
            {
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
        $("#v4").click(function ()
        {

            var hidden_columns = [3, 4, 5, 7];

            if (_visible)
            {
                $("#first_col").removeClass("col-md-12").addClass("col-md-4");
                _visible = false;
                $("#sec_col").show();



                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-left")
                    .addClass("fa fa-angle-double-right");
            } else
            {
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
        $("#v5").click(function ()
        {

            var hidden_columns = [3, 4, 5, 7];

            if (_visible)
            {
                $("#first_col").removeClass("col-md-12").addClass("col-md-4");
                _visible = false;
                $("#sec_col").show();



                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-left")
                    .addClass("fa fa-angle-double-right");
            } else
            {
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
        $("#expandbtn").click(function ()
        {

            if (_visible_1)
            {
                $("#sec_col").removeClass("col-md-8").addClass("col-md-12");
                _visible_1 = false;
                $("#first_col").hide();



            } else
            {
                $("#sec_col").removeClass("col-md-12").addClass("col-md-8");

                _visible_1 = true;
                $("#first_col").show();
            }
        });

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

                openTab(event, 'profile');

            }
            else if (activeSlideIndex === 1)
            {

                openTab(event, 'proposals');

            }
            else if (activeSlideIndex === 1)
            {

                openTab(event, 'deal');

            }
            else if (activeSlideIndex === 1)
            {

                openTab(event, 'task');

            }
            else if (activeSlideIndex === 1)
            {

                openTab(event, 'reimbur');

            }
            else if (activeSlideIndex === 1)
            {

                openTab(event, 'target');

            }

            else if (activeSlideIndex === 1)
            {

                openTab(event, 'payment');

            }
            else if (activeSlideIndex === 1)
            {

                openTab(event, 'user');

            }
            else if (activeSlideIndex === 1)
            {

                openTab(event, 'remainder');

            }
            else if (activeSlideIndex === 1)
            {

                openTab(event, 'activity');

            }
            else if (activeSlideIndex === 1)
            {

                openTab(event, 'file');

            }
            else if (activeSlideIndex === 1)
            {

                openTab(event, 'expense');

            }

        });


    </script>
    <!-- Modals -->

    <script>
        function showModal(url, title)
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
    <!--Datatable-->
    <script>
        function getResponse()
        {
            var table = $('#example').DataTable({
                language: { lengthMenu: '_MENU_' },
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    {
                        text: 'EXPORT',
                        extend: 'collection',
                        buttons: ['excel', 'csv', 'pdf', 'print'],
                        className: 'px-3'

                    },

                ]
            });
        }
        function checkAll()
        {
            checkbox = document.getElementById("all_check");
            if (checkbox.checked == true)
            {
                $('.single_check').prop("checked", true);
                $('.bulk_send').show(1000);
            } else
            {
                $('.single_check').prop("checked", false);
                $('.bulk_send').hide(1000);
            }
        }
        function singleCheck(id)
        {
            checkbox = document.getElementById("check_" + id);
            boxes = document.getElementsByClassName("single_check");
            if (checkbox.checked == true)
            {
                $('.bulk_send').show(1000);
            } else
            {
                count = 0;
                for (let i = 0; i < boxes.length; i++)
                {
                    if (boxes[i].checked == true)
                    {
                        count += 1;
                    }
                }
                if (count == 0)
                {
                    $('.bulk_send').hide(1000);
                    $('#all_check').prop("checked", false);
                } else
                {
                    $('.bulk_send').show();
                }
            }
        }
    </script>
    <!--<script>
        new DataTable('.example', {
            columnDefs: [
                {
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }
            ],
            select: {
                style: 'os',
                selector: 'td:first-child'
            },
            order: [[1, 'asc']]
        });
    </script>-->
    <script>
        function toggleRowBackground(checkbox)
        {
            var row = checkbox.closest('tr');
            row.classList.toggle('selected', checkbox.checked);
        }
    </script>
    <script>
        $(document).ready(function ()
        {
            var table = $('#example3').DataTable({
                language: { lengthMenu: '_MENU_' },
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    {
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
    </script>
    <script>
        $(document).ready(function ()
        {
            var table = $('#example1').DataTable({
                language: { lengthMenu: '_MENU_' },
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    {
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
    </script>
    <script>
        $(document).ready(function ()
        {
            var table = $('#example2').DataTable({
                language: { lengthMenu: '_MENU_' },
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    {
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
    </script>
    <script>
        $(document).ready(function ()
        {
            var table = $('#example4').DataTable({
                language: { lengthMenu: '_MENU_' },
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    {
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
    </script>
    <script>
        $(document).ready(function ()
        {
            var table = $('#example5').DataTable({
                language: { lengthMenu: '_MENU_' },
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    {
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
    </script>
    <script>
        $(document).ready(function ()
        {
            var table = $('#example6').DataTable({
                language: { lengthMenu: '_MENU_' },
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    {
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
    </script>
    <script>
        $(document).ready(function ()
        {
            var table = $('#example7').DataTable({
                language: { lengthMenu: '_MENU_' },
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    {
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
    </script>
    <script>
        $(document).ready(function ()
        {
            var table = $('#example8').DataTable({
                language: { lengthMenu: '_MENU_' },
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    {
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
    </script>
    <script>
        $(document).ready(function ()
        {
            var table = $('#example9').DataTable({
                language: { lengthMenu: '_MENU_' },
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    {
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
    </script>
    <script>
        $(document).ready(function ()
        {
            var table = $('#example10').DataTable({
                language: { lengthMenu: '_MENU_' },
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                dom: 'Blfrtip',
                buttons: [
                    {
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
    </script>

    <script>
        $(function ()
        {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end)
            {
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
    <script>
        $(document).ready(function ()
        {
            $(document).on("click", ".dropdown-item", function ()
            {
                $(this).toggleClass("active");
            });
            $("ul#one>li:first-child").click(function ()
            {
                $("ul#one>li:first-child ~ li a").removeClass("active");
            });
            $("ul#one>li:first-child ~ li").click(function ()
            {
                $("ul#one>li:first-child a").removeClass("active");
            });
        });
    </script>
    <script>
        $(function ()
        {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end)
            {
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

    <!--  Select2 Plugin Js -->
    <script src="../../assets/vendor/select2/js/select2.min.js"></script>


    <!-- App js -->
    <script src="../../assets/js/app.min.js"></script>


    <!-- #stbutton status-button -->
    <script>
        var dropdownToggles = document.querySelectorAll("#stbutton");

        dropdownToggles.forEach(function (dropdownToggle)
        {
            var dropdownMenu = dropdownToggle.nextElementSibling;

            dropdownMenu.addEventListener("click", function (event)
            {
                var selectedOption = event.target.textContent;

                dropdownToggle.textContent = selectedOption;

                dropdownToggle.classList.remove("await", "testing", "notselected", "complete");
                if (selectedOption === "Not Started")
                {
                    dropdownToggle.classList.add("notselected");
                } else if (selectedOption === "Awaiting Feedback")
                {
                    dropdownToggle.classList.add("await");
                } else if (selectedOption === "Testing")
                {
                    dropdownToggle.classList.add("testing");
                } else if (selectedOption === "Complete")
                {
                    dropdownToggle.classList.add("complete");
                } else
                {
                    dropdownToggle.classList.remove("await", "testing", "notselected", "complete");
                }
            });
            dropdownToggle.addEventListener("click", function ()
            {
                var selectedOption = dropdownToggle.textContent.trim();
                dropdownMenu.innerHTML = "";
                if (selectedOption === "In Progress")
                {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Not Started</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Testing</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Awaiting Feedback</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Complete</a></li>';
                } else if (selectedOption === "Not Started")
                {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">In Progress</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Testing</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Awaiting Feedback</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Complete</a></li>';
                } else if (selectedOption === "Testing")
                {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">In Progress</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Not Started</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Awaiting Feedback</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Complete</a></li>';
                } else if (selectedOption === "Awaiting Feedback")
                {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">In Progress</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Not Started</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Testing</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Complete</a></li>';
                } else if (selectedOption === "Complete")
                {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">In Progress</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Not Started</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Awaiting Feedback</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Awaiting Feedback</a></li>';
                }
            });
        });
    </script>
    <script>
        function changeButton()
        {
            const selectBox = document.getElementById("statusSelect");
            const selectedOption = selectBox.options[selectBox.selectedIndex];
            const button = document.getElementById("statusButton");
            // Update button text
            button.innerText = selectedOption.text;
            // Reset border and text colors
            button.style.border = "";
            button.style.color = "";
            // Apply specific styles based on selected option value
            if (selectedOption.value === "Testing")
            {
                button.style.border = "2px solid black";
                button.style.color = "black";
            } else if (selectedOption.value === "Awaiting Feedback")
            {
                button.style.border = "2px solid green";
                button.style.color = "green";
            } else if (selectedOption.value === "Complete")
            {
                button.style.border = "2px solid red";
                button.style.color = "red";
            }
        }
    </script>


    <script>
        var dropdownToggles = document.querySelectorAll("#stbutton2");
        dropdownToggles.forEach(function (dropdownToggle)
        {
            var dropdownMenu = dropdownToggle.nextElementSibling;
            dropdownMenu.addEventListener("click", function (event)
            {
                var selectedOption = event.target.textContent;
                dropdownToggle.textContent = selectedOption;
                dropdownToggle.classList.remove("medium", "hard", "urgent");
                if (selectedOption === "Medium")
                {
                    dropdownToggle.classList.add("medium");
                } else if (selectedOption === "Hard")
                {
                    dropdownToggle.classList.add("hard");
                } else if (selectedOption === "Urgent")
                {
                    dropdownToggle.classList.add("urgent");
                } else
                {
                    dropdownToggle.classList.remove("medium", "hard", "urgent");
                }
            });
            dropdownToggle.addEventListener("click", function ()
            {
                var selectedOption = dropdownToggle.textContent.trim();
                dropdownMenu.innerHTML = "";
                if (selectedOption === "Low")
                {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Medium</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Hard</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Urgent</a></li>';
                } else if (selectedOption === "Medium")
                {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Low</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Hard</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Urgent</a></li>';
                } else if (selectedOption === "Hard")
                {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Low</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Medium</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Urgent</a></li>';
                } else if (selectedOption === "Urgent")
                {
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
            table = $('#example').DataTable();
            table.destroy();
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/Payroll/Deductions/deductionTable',
                dataType: 'json',
                success: function (result)
                {
                    $('#append').html(result.table);
                    getResponse();
                }
            });
        }
        deductionTable();
    </script>


    <script>
        function updateBranchStatus(id)
        {
            var status = document.getElementById('checkbox_').checked ? 1 : 0;
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/Payroll/Deductions/updateBranchStatus/' + id,
                data: { status: status },
                dataType: 'json',
                success: function (response)
                {
                    toastr.success("Status updated successfully");
                    deductionTable();
                },

            });
        }
    </script>
    <script type="text/javascript">
        function deductiontaggle(id)
        {
            fetchdeduction(id);
            var hidden_columns = [3, 4, 5, 7];

            if (_visible)
            {
                $("#first_col").removeClass("col-md-12").addClass("col-md-4");
                _visible = false;
                $("#sec_col").show();



                $("#toggle_btn")
                    .find("i")
                    .removeClass("fa fa-angle-double-left")
                    .addClass("fa fa-angle-double-right");
            } else
            {
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
        }
        function fetchdeduction(id)
        {
            $.ajax({
                type: 'post',
                url: '<?= base_url() ?>/Payroll/Deductions/fetchdeduction/' + id,
                dataType: 'json',
                success: function (result)
                {
                    $('#append2').html(result.table);
                },

            });
        }
    </script>