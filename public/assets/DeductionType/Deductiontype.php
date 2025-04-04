<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");

    .form-container {
        width: 100vw;
        height: 100vh;
        background-color: #4eafffe0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .upload-files-container {
        background-color: #f7fff7;
        width: 420px;
        padding: 30px 60px;
        border-radius: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 10px 20px,
            rgba(0, 0, 0, 0.28) 0px 6px 6px;
    }

    .drag-file-area {
        border: 2px dashed #4eafffe0;
        border-radius: 40px;
        margin: 10px 0 15px;
        padding: 30px 50px;
        width: 350px;
        text-align: center;
    }

    .drag-file-area .upload-icon {
        font-size: 50px;
    }

    .drag-file-area h3 {
        font-size: 26px;
        margin: 15px 0;
    }

    .drag-file-area label {
        font-size: 19px;
    }

    .drag-file-area label .browse-files-text {
        color: #4eafffe0;
        font-weight: bolder;
        cursor: pointer;
    }

    .browse-files span {
        position: relative;
        top: -25px;
    }

    .default-file-input {
        opacity: 0;
    }

    .cannot-upload-message {
        background-color: #ffc6c4;
        font-size: 17px;
        display: flex;
        align-items: center;
        margin: 5px 0;
        padding: 5px 10px 5px 30px;
        border-radius: 5px;
        color: #bb0000;
        display: none;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .cannot-upload-message span,
    .upload-button-icon {
        padding-right: 10px;
    }

    .cannot-upload-message span:last-child {
        padding-left: 20px;
        cursor: pointer;
    }

    .file-block {
        color: #f7fff7;
        background-color: #4eafffe0;
        transition: all 1s;
        width: 390px;
        position: relative;
        display: none;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin: 10px 0 15px;
        padding: 10px 20px;
        border-radius: 25px;
        cursor: pointer;
    }

    .file-info {
        display: flex;
        align-items: center;
        font-size: 15px;
    }

    .file-icon {
        margin-right: 10px;
    }

    .file-name,
    .file-size {
        padding: 0 3px;
    }

    .remove-file-icon {
        cursor: pointer;
    }

    .progress-bar {
        display: flex;
        position: absolute;
        bottom: 0;
        left: 4.5%;
        width: 0;
        height: 5px;
        border-radius: 25px;
        background-color: #4bb543;
        max-width: calc(100% - 40px);
        /* Adjust the 40px to match the actual sum of left and right padding */

    }

    .upload-button {
        font-family: "Montserrat";
        background-color: #4eafffe0;
        color: #f7fff7;
        display: flex;
        align-items: center;
        font-size: 18px;
        border: none;
        border-radius: 20px;
        margin: 10px;
        padding: 7.5px 50px;
        cursor: pointer;
    }

    /* New overlay style */
    .overlay {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Cover the entire viewport */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 123, 255, 0.9);
        /* Blue color with transparency */
        z-index: 1000;
        /* Above everything else */
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 6em;
        font-weight: 700;
        transition: all 0.5s;
        /* Smooth transition */
    }
</style>
<style>
    /* Add your CSS styles here */
    .file-block {
        margin-bottom: 10px;
    }

    .file-info {
        display: flex;
        align-items: center;
    }

    .file-info .file-icon {
        margin-right: 5px;
    }

    .image-preview {
        margin-top: 5px;
    }

    .preview-image {
        max-width: 100px;
        max-height: 100px;
        display: block;
    }
</style>
<style>
    .help-block {
        margin-left: 10px;
        color: red;
    }

    .hdrw {
        border: none !important;
        padding-top: 20px !important;
    }

    .select2-container .select2-selection--multiple {
        min-height: 0px;
    }

    .addbtn {
        margin: 15px 4px 20px;
    }

    .select2-container--default .select2-selection--multiple {
        background-color: white;
        border: 1px solid #aaa;
        border-radius: 4px;
        cursor: text;
        padding-bottom: 8px;
        margin-top: -1px;
        padding-right: 5px;
        position: relative;
    }

    label {
        font-weight: normal;
    }

    .dataTables_info {
        font-weight: normal;
    }

    table.dataTable {
        padding-top: 20px !important;
    }

    button.dt-button,
    div.dt-button,
    a.dt-button {
        margin-bottom: 20px;
    }

    .addbttn {
        margin-left: 0px !important;
        padding: 6px 12px;
        font-size: 14px;
    }

    .marginset1 {
        padding-left: 10px;
        padding-right: 10px;
    }

    .linehr {
        margin: -1px !important;
    }

    .new-approve {
        font-size: 12px !important;
        background-color: #3CD114;
        color: #3CD114;
        border-radius: 0.25em;
    }

    .mapplan {
        color: #c53da9;
        border: 1px solid #c53da9;
    }

    .btn-margin {
        margin-top: 5px;
        margin-bottom: 5px;
        margin-left: -1px;
    }

    .btn-margin1 {
        margin-top: 10px;
        margin-bottom: -50px;
        margin-left: -1px;
    }

    .general-info-color {
        color: #d81b60;
    }

    .general-info {
        font-size: 18px;
        font-weight: 500;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .general-hr {
        border: 0.5px solid;
        color: #d81b60;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .col-padding {
        padding-left: 15px;
        padding-right: 15px;
    }

    .form-panel-text {
        align-items: center;
        border-radius: 0.5rem;
        /* display: inline-flex;  */
        font-size: .75rem;
        font-weight: 500;
        line-height: 1rem;
        padding: 0.25rem 0.625rem;
        display: block;
    }

    .form-panel {
        --tw-border-opacity: 1;
        --tw-bg-opacity: 1;
        --tw-text-opacity: 1;
        background-color: rgb(248 250 252/var(--tw-bg-opacity));
        border: 1px solid #bec6d9 !important;
        ;
        color: #63686f;
        width: 450px;
    }

    .text-inline {
        display: inline;
    }

    .txt {
        color: #fb8c00;
        font-size: 18px;
        font-weight: 400;
    }

    .h4-text {
        font-size: 18px;
        font-weight: 400;
    }

    .can-hr {
        border: 0.5px solid;
        color: #fb8c00;
    }

    .drp-margin {
        margin-top: 15px;
    }

    .icon-margin {
        margin-top: 4px;
    }

    .row-mtop10 {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .row-mbottom {

        margin-bottom: -15px;
    }

    .row-mtop-1 {
        margin-top: 20px;
        margin-bottom: -15px;
    }

    .vendor {
        padding: 7px !important;
    }

    .row-mtop5 {
        border: 1px solid #e6e9eb;
        color: #415164;
        background-color: #f1f5f7;
        border-color: #e6e9eb;
        border-radius: 4px;
    }

    .thead_color {
        color: black;
        background-color: white;
    }

    .accept_bttn {
        border: none;
        border-radius: 4px;
        font-family: var(--primary-font);
        float: none !important;
        color: whitesmoke;
        background-color: #daf4f0 !important;
        font-size: 14px !important
            /* 0.75em*/
        ;
        color: #0AB39C !important;
        padding: 0.25em 0.4em !important;
    }

    .table-striped>tbody>tr:nth-child(odd)>td,
    .table-striped>tbody>tr:nth-child(odd)>th {
        /* background-color: rgba(33, 37, 41, 0.02) !important; */
        color: #212529 !important;
        background-color: none;
    }

    .table-striped>tbody>tr:nth-child(odd)>td,
    .table-striped>tbody>tr:nth-child(odd)>th {
        /* background-color: #f0f0f0 !important; */
        background-color: none;
    }

    .table-striped>tbody>tr:nth-child(odd)>td,
    .table-striped>tbody>tr:nth-child(odd)>th {
        background-color: #fff;
    }

    #drop-zone {
        max-width: 100% !important;
        margin-left: 10px;
        margin-right: 10px;

    }

    @media (max-width:768px) {
        .addbttn {
            width: 100%;
        }
    }
</style>


<body id="wrapper" style="margin-top: 10px;">
    
    <div class="row invtblerow1 ware_1">
        <div class="relative">
            <div class="newthebtn afghitpo">
                 <button type="button" class="hrbtns contractbtn addbttn indRadBttn" style="margin-bottom: 7px;" onclick="showModal(`<?= base_url('Payroll/DeductionType/deduction_addmodal') ?>`,`Add Deduction Type`)"> <i class="fa fa-plus"></i> ADD DEDUCTION TYPE</button> 
                <!--<button type="button" class="hrbtns contractbtn addbttn indRadBttn" style="margin-bottom: 7px;" onclick="showModal(`<?= base_url('Payroll/DeductionType/deduction_addmodal') ?>`,`Add Deduction Type`)" style="padding: 6px 12px;"> ADD DEDUCTION TYPE</button> -->
            </div>
        </div>

        <div class="expbdymt col-md mhj_crcto " id="first_col" style="display: block;">
            <div class="container-fluid hjk_crct colr ">
                <!-- <div class="container-fluid hjk_crct colr rd_1"> -->
                <div class="card">
                    <div class="card-body">
                        <div class="row asd_alicrctmarg">
                            <div class="col-md-6 ">
                                <!--<button type="button" class="approvedbtn finishedbtn addbttn"
                                    style="margin-bottom: 7px;"
                                    onclick="showModal(`<?= base_url('Payroll/DeductionType/deduction_addmodal') ?>`,`Add Deduction Type`)"
                                    style="height: fit-content;padding: 6px 12px;">ADD DEDUCTION TYPE</button>-->
                            </div>
                            <div class="ctrfilter toggle-items togglebttn">
                                <!-- <button type="button" id="toggle_btn" class="contractfilter edittglbtn6 viewbtnByToggle pull-right " data-bs-toggle="tooltip" title="Toggle Table" data-bs-title="Toggle Table" style="margin-right: 10px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;">
                                    <i class="fa-solid fa-angle-left" style="font-size: 12px"></i>
                                </button> -->
                                <!-- <button type="button" class="contractfilter edittglbtn6 viewbtnByToggle"
                                data-bs-toggle="tooltip" data-bs-title="Toggle Table">
                                    <i class="fa-solid fa-angle-left" style="font-size: 12px"></i>
                                </button> -->
                                <button type="button" class="contractfilter edittglbtn6 viewbtnByToggle"
                                data-bs-toggle="tooltip" data-bs-title="Toggle Table">
                                <i class="fa-solid fa-angle-left" style="font-size: 12px"></i>
                            </button>
                            </div>
                            <!--  <div class="col-md-6 addpadding123 qarw">
                                <div class="ctrfilter toggle-items">
                                    <button type="button" id="toggle_btn" class="contractfilter pull-right edittglbtn6   
                                                      viewbtnByToggle" data-bs-toggle="tooltip" data-bs-title="Toggle Table" style="margin-right: 10px; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;">
                                        <i class="fa-solid fa-angle-left" style="font-size: 12px"></i>
                                    </button>
                                </div>
                            </div> -->

                            <!-- <div class="col-md-2 datepicker1 " style="margin-top: 9px;">
                                <div class="purchasegrp">
                                    <input type="text" id="reportrange" name="dates" class="form-control purchaseselects statbtn">
                                </div>
                            </div> -->
                     <!--<div class="col-md-2 datepicker1 dd12" style="margin-top: 9px;">
                                <div class="purchasegrp">
                                    <input type="text" id="reportrange" name="dates" class="form-control purchaseselects statbtn">
                                </div>
                            </div>-->

                            <div class="col-md-4" style="margin-top: 19px;">
                               <div class="purchasegrp">
                                    <div class=" dropdown-with-icon dropdownalignment num123"
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

                                  <!--   <div class="col-md-4 dd12" style="margin-top: 19px;">
                                    <div class="purchasegrp">
                                    <div class="dropdown-with-icon dropdownalignment drop-1" style="border-radius:4px 0px 0px 4px;">
                                        <select class="selectpicker multiselect" data-name="name" multiple data-actions-box="true" data-live-search="true">
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
                                </div> -->
                            </div>  



                            <div class="row">
                                <div class="demo-html">
                                        <table class="example display dataTable display responsive nowrap tblalign table borderless"
                                        style="width: 100%" id="example" aria-describedby="example_info">
                                            <thead class="theadrow">
                                                <!-- <div class="table-responsive"> jii
                                                    <table id="example" class="display example dataTable display responsive " style="width: 100%;margin-top:-10px; " aria-describedby="example_info">
                                                        <thead class="theadrow hdrw"> -->
                                                <tr>

                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="descending" aria-label="Name: activate to sort column descending" style="font-weight:normal ;">Deduction Type</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="font-weight:normal ;">Remarks</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="font-weight:normal ;">
                                                        Employee Count</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="font-weight:normal ;">
                                                        Payments / Month</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="font-weight:normal ;">
                                                        Status</th>

                                            </thead>
                                            <tbody id="dedTypeappend">
                                                <!-- <tr class="odd">
                                                <td>Type1
                                                    <br>
                                                    <p class="header-effect">
                                                        <a href="#" id="v1">
                                                            <span class="">View </span>
                                                        </a>
                                                        <span class="black"> |</span>
                                                        <a onclick="showModal('Edit.html','Edit Deduction Type')"
                                                            style="height: fit-content;">
                                                            <span class="sp-class3">Edit </span>
                                                        </a>
                                                    </p>
                                                </td>
                                                <td>Good</td>
                                                <td>20</td>
                                                <td></td>
                                                <td>
                                                    <label class="switchslider"> <input type="checkbox" checked><span
                                                            class="slider round"></span></label>
                                                </td>
                                            </tr> -->
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

        <div class="col-md-8 exptblecol  " id="sec_col" style="display: none;margin-top: -1px !important;margin-right: -16px !important;">
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
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'deal')">
                                            Earnings</button>
                                    </div>
                                    <!-- <div>
                                                <button class="tablinks" style="width:140px"
                                                    onclick="openTab(event, 'reimbur')"> Deductions</button>
                                                </div> -->
                                    <div>
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'proposals')">Employees</button>
                                    </div>
                                    <!-- <div>
                                                <button class="tablinks" style="width:140px"
                                                    onclick="openTab(event, 'target')"> Taxes</button>
                                                </div> -->
                                    <div>
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'task')">
                                            Tasks</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'remainder')"> Remainder</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'file')">
                                            Attachments</button>
                                    </div>
                                    <div>
                                        <button class="tablinks" style="width:140px;text-wrap: nowrap;" onclick="openTab(event, 'activity')"> Activity Log</button>
                                    </div>
                                    <div>
                                        <button id="expandbtn" class=" tablinks  tb-links " data-bs-toggle="tooltip" data-bs-title="Toggle full view"><i class="fa fa-expand" style="margin-top: 6px;"></i></button>
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
                                    <button class="tablinks tabresact active" style="width:70%" onclick="openTab(event, 'profile')">Preview</button>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%" onclick="openTab(event, 'deal')">Earnings</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%" onclick="openTab(event, 'proposals')">Employees</button>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%"
                                        onclick="openTab(event, 'reimbur')">Deductions</button>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%"
                                        onclick="openTab(event, 'target')">Taxes</button>
                                </div>
                            </div>
                        </div> -->
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%" onclick="openTab(event, 'task')">Tasks</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%" onclick="openTab(event, 'remainder')">Remainder</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%" onclick="openTab(event, 'file')">Attachments</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%" onclick="openTab(event, 'activity')">Activity Log</button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button id="expandbtn" class=" tablinks  tb-links " data-bs-toggle="tooltip" data-bs-title="Toggle full view">
                                        <i class="fa fa-expand" style="margin-top: 8px;"></i></button>
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

                </div>
                <hr class="fileline linehr" style="padding-left: 20px !important;"><br>
                <div id="profile" class="tabcontent  mtgb" style="display:block;">

                    <!-- Analytics Dashboard -->
                    <div class="analytics_dashboard" style="display:none;">
                        <div class="analytics_dashboard_upper">
                            <div class="analytics_dashboard_upper_right">
                                <div class="col-md-2 datepicker1" style="margin-top: 10px !important;margin-bottom: -25px !important;">
                                    <div class="purchasegrp">
                                        <input type="text" id="reportrange" name="dates" class="form-control purchaseselects statbtn" style="height: 20px !important;text-align: center;" placeholder="Date">
                                    </div>
                                </div>
                                <div id="chart" style="height: 100% !important; width: 100%;margin-top: 20px;margin-left: -10px;">
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
                    </div>
                    <div class="row">
                        <div class="col-md-12"><br>
                            <table class="details-table table table-striped">
                                <tbody id="dedType_detailsappend">
                                    <!-- <tr class="project-overview">
                                        <td class="viewjobft"><b>Deduction Type</b></td>
                                        <td class="viewjobft"></td>
                                    </tr>
                                    <tr class="project-overview">
                                        <td class="viewjobft"><b>Remarks</b></td>
                                        <td class="viewjobft"></td>
                                    </tr>
                                    <tr class="project-overview">
                                        <td class="viewjobft"><b>Employee Count</b></td>
                                        <td class="viewjobft"></td>
                                    </tr>
                                    <tr class="project-overview">
                                        <td class="viewjobft"><b>Payment/Month</b></td>
                                        <td class="viewjobft"></td>
                                    </tr>
                                    <tr class="project-overview">
                                        <td class="viewjobft"><b>Status</b></td>
                                        <td class="viewjobft"><label class="switchslider"> <input type="checkbox" checked><span class="slider round"></span></label></td>
                                    </tr>
                                </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>



                </div>
                <div id="proposals" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <table id="example1" class="display dataTable display example responsive nowrap " style="width: 100%; " aria-describedby="example_info">
                                <thead class="theadrow hdrw">
                                    <tr>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="descending" aria-label="Name: activate to sort column descending" style="font-weight:normal ;">Employee ID</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="font-weight:normal ;">Employee Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="font-weight:normal ;">
                                            Basic</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="font-weight:normal ;">
                                            HRA</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="font-weight:normal ;">
                                            Earnings</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="font-weight:normal ;">
                                            Deductions</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="font-weight:normal ;">
                                            Loans</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="font-weight:normal ;">
                                            status</th>
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
                                                <a onclick="showModal('Edit.html',' Edit accessory')" class="text-danger" style="height: fit-content;">
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
                            <table id="example3" class="display dataTable display example responsive nowrap " style="width: 100%; " aria-describedby="example_info">
                                <thead class="theadrow hdrw">
                                    <tr>

                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="descending" aria-label="Name: activate to sort column descending" style="font-weight:normal ;">Earning Type</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="font-weight:normal ;">Earning Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="font-weight:normal ;">
                                            Amount</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="font-weight:normal ;">
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
                                                <a onclick="showModal('Edit.html',' Edit accessory')" class="text-danger" style="height: fit-content;">
                                                    <span class="sp-class3">Edit </span>
                                                </a>
                                                <span class="black"> |</span>
                                                <span class="sp-class3" onclick="myFunction()">Delete</span>
                                            </p>
                                        </td>
                                        <td></td>
                                        <td><span class="approvedbtn accept_bttn">Accepted</span></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="task" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <table id="example2" class="display dataTable example display responsive " style="width: 100%; " aria-describedby="example_info">
                                <thead class="theadrow hdrw">
                                    <tr>
                                        <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="">#</th>
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="font-weight:normal ;">Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="font-weight:normal ;">Status
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="font-weight:normal ;">
                                            Start Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="font-weight:normal ;">
                                            Due Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="font-weight:normal ;">
                                            Assigned to
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="font-weight:normal ;">
                                            Tags</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="font-weight:normal ;">
                                            Priority
                                        </th>
                                    </tr>


                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td class="invtble"><a href="#" class="" onclick="showMdModal('../vtestmodal.html','jaya')">253</a>
                                        </td>
                                        <td class="progtble2">
                                            <a href="#" class="" onclick="showMdModal('../vtestmodal.html','jaya')">jaya</a>

                                            <p class="header-effect">
                                                <a><span class=" text-success">Start
                                                        Timer</span></a>
                                                <span class="black">|</span> <a href="#" onclick="showMdModal('../edittaskmodal.html','Edit')"><span class="">
                                                        Edit</span></a><span class="black">
                                                    |</span>
                                                <span class="sp-class3">Delete</span>
                                            </p>
                                        </td>
                                        <td>


                                            <button type="button" id="stbutton" class=" status-button  dropdown-toggle dd-toggle" data-bs-toggle="dropdown">In Progress</button>
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
                                                <img src="../../assets/img/user-placeholder.jpg" alt="user" height="32px" width="32px" style="border-radius: 16px;">
                                                CRM Solution</a>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            <button type="button" id="stbutton2" style="border: none;" class=" status-button  dropdown-toggle range-toggle" data-bs-toggle="dropdown">Low </button>
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
                <!-- <div id="reimbur" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
                    <div class="row" >
                        <div class="demo-html" style="overflow-x: auto;">
                        <table id="example4" class="display dataTable display example responsive nowrap "
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
                                    <a onclick="showModal('Edit.html',' Edit accessory')" class="text-danger" style="height: fit-content;">
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
                                    <a onclick="showModal('Edit.html',' Edit accessory')" class="text-danger" style="height: fit-content;">
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
                </table> -->
            </div> 
        </div>

    

    
                <!-- <div id="target" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
                    <div class="row" >
                        <div class="demo-html" style="overflow-x: auto;">
                        <table id="example5" class="display dataTable display example responsive nowrap "
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
                                    <a onclick="showModal('Edit.html',' Edit accessory')" class="text-danger" style="height: fit-content;">
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
                                    <a onclick="showModal('Edit.html',' Edit accessory')" class="text-danger" style="height: fit-content;">
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
        </div> -->
                <div id="remainder" class="tabcontent  mtgb" style="margin-left: 10px; margin-right: 10px;">
                    <div class="row">
                        <div class="demo-html" style="overflow-x: auto;">
                            <div class="table-responsive">
                                <table id="example8" class="display dataTable display example responsive nowrap tblalign " style="width: 100%;" aria-describedby="example_info">
                                    <thead class="theadrow hdrw">
                                        <tr>
                                            <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0px;font-weight:normal ;">
                                                Description
                                            </th>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 98px;font-weight:normal ;">Date
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 100px;font-weight:normal ;">Remind
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 97px;font-weight:normal ;">
                                                Is notified ?</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr class="odd">
                                            <td class="hrtble1">
                                                <span>good</span>
                                                <p class="header-effect">
                                                    <a href="#" onclick="showMdModal('../remindermodal.html',`<i class='fa fa-question-circle remques'></i>Set Invoice Reminder`)"><span class=""> Edit</span></a><span class="black"> |</span>
                                                    <span class="sp-class3">Delete</span>
                                                </p>
                                            </td>
                                            <td>2023-05-18 17:45:00</td>

                                            <td><a href="../unitmanag.html">
                                                    <img src="../../assets/img/user-placeholder.jpg" alt="user" height="32px" width="32px" style="border-radius: 16px;">
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
                                                <a href="#" class="text-muted float-end" data-bs-placement="left" data-bs-toggle="tooltip" data-bs-title="Mark as Read"><small><i class="fa fa-circle-thin" aria-hidden="true"></i></small></a>
                                                <span class="text-has-action ms-3" style="border-bottom:1px dashed    black" data-toggle="tooltip" data-title="2023-03-13 03:09:31" data-original-title="" title="">
                                                    3 months ago </span>
                                            </div>
                                            <div class="d-flex ms-3 mt-1 align-items-center">

                                                <a href="#" class="me-1"><img src="../../assets/img/user.png" alt="user" height="22px" width="22px"></a>
                                                <div class="blacktdinp ms-1">
                                                    <a href="notificationlinked.html" class="text-secondary">
                                                        <div class="description" style="font-size:12px;">GTS
                                                            Solution -
                                                            converted to
                                                            invoice from expense
                                                        </div>
                                                    </a>
                                                </div>
                                                <i class="fa-solid fa-xmark" style="color:#fc2d42" id="remove-btn" style="cursor:pointer;"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="notification-box-all py-2 feed-item mb-0">
                                        <div class="single-notification" id="single-notification">
                                            <div class="d-flex">
                                                <a href="#" class="text-muted float-end" data-bs-placement="left" data-bs-toggle="tooltip" data-bs-title="Mark as Read"><small><i class="fa fa-circle-thin" aria-hidden="true"></i></small></a>
                                                <span class="text-has-action ms-3" style="border-bottom:1px dashed    black" data-toggle="tooltip" data-title="2023-03-13 03:09:31" data-original-title="" title="">
                                                    3 months ago </span>
                                            </div>
                                            <div class="d-flex ms-3 mt-1 align-items-center">

                                                <a href="#" class="me-1"><img src="../../assets/img/user.png" alt="user" height="22px" width="22px"></a>
                                                <div class="blacktdinp ms-1">
                                                    <a href="notificationlinked.html" class="text-secondary">
                                                        <div class="description" style="font-size:12px;">GTS
                                                            Solution -
                                                            converted to
                                                            invoice from expense
                                                        </div>
                                                    </a>
                                                </div>
                                                <i class="fa-solid fa-xmark" style="color:#fc2d42" id="remove-btn" style="cursor:pointer;"></i>
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
                            <form class="form-container justcn" enctype="multipart/form-data">
                                <!-- Added overlay div -->
                                <div class="overlay" id="overlay">Drop your files here...</div>

                                <div class="upload-files-container evn_marg">
                                    <div class="drag-file-area">
                                        <span class="material-icons-outlined upload-icon"> file_upload </span>
                                        <h3 class="dynamic-message">Drag & drop any file here</h3>
                                        <label class="label">
                                            or
                                            <span class="browse-files">
                                                <input type="file" class="default-file-input" />
                                                <span class="browse-files-text">browse file</span>
                                                <span>from device</span>
                                            </span>
                                        </label>
                                    </div>
                                    <span class="cannot-upload-message">
                                        <span class="material-icons-outlined">error</span> Please select a file
                                        first
                                        <span class="material-icons-outlined cancel-alert-button">cancel</span>
                                    </span>
                                    <div class="file-block">
                                        <div class="file-info">
                                            <span class="material-icons-outlined file-icon">description</span>
                                            <span class="file-name"> </span> | <span class="file-size"> </span>
                                        </div>
                                        <span class="material-icons remove-file-icon">delete</span>
                                        <div class="progress-bar"></div>
                                    </div>
                                    <button type="button" class="upload-button">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo-html mt-0" style="overflow-x: auto;">
                                <table id="example10" class="display dataTable display example responsive nowrap tblalign" style="width: 100%;" aria-describedby="example_info">
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
                                                    <a onclick="showModal('Edit.html',' Edit accessory')" class="text-danger" style="height: fit-content;">
                                                        <span class="sp-class3">Edit </span>
                                                    </a>
                                                    <span class="black"> |</span>
                                                    <span class="sp-class3" onclick="myFunction()">Delete</span>
                                                </p>
                                            </td>
                                            <td>Plus size modeling</td>
                                            <td></td>
                                            <td><label class="switchslider"> <input type="checkbox"><span class="slider round"></span></td>
                                            <td style="text-wrap: wrap;"><a href="../GTS/unitmanag.html">
                                                    <img src="../../assets/img/user-placeholder.jpg" alt="user" height="32px" width="32px" style="border-radius: 16px;">
                                                    Albi Solution Solutions</a></td>
                                            <td></td>
                                            <td>
                                                <button type="button" class="closexbtn clsheight" onclick="showModal('edit-job.html','Edit Position')" style="background-color: #03A9F4;"><i class="fa fa-envelope" data-bs-toggle="tooltip" data-bs-title="Set this fi"></i></button>
                                                <button class="closexbtn clsheight"><i class="fa fa-remove"></i></button>
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
    <!-- </div>
    </div>
    </div>
    </div>-->

    <!-- Modals       -->
    <!-- Ref Modal  -->
    <div id="modal_md" class="modal fade custom-content" role="dialog" style="padding-right:0">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header hdrbg ">
                    <button type="button" class="btn-close closebtn " data-bs-dismiss="modal"></button>
                    <h5 id="myModalLabel" class="modal-title "></h5>
                    <div class="vertical-line">

                        <span class="Bcgtop capsule"></span>
                        <span class="Bcgbttm capsule"></span>
                    </div>

                </div>
                <div class="modal-body"></div>
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
    <script>
        $('#modal_md').on('shown.bs.modal', function() {
            $('.selectpicker').selectpicker('refresh');
        });
    </script>
    <!--upload-files-->

    <!-- <script>
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
    </script> -->
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

        $(document).ready(function() {

            $("#toggle_btn").click(function() {
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
                var _table = $(".example").DataTable();
                //     Show hide hidden columns
                _table.columns(hidden_columns).visible(_visible, true);
                _table.columns.adjust();
            });
            $(".v1").click(function() {

                var hidden_columns = [3, 4, 5];

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
                var _table = $(".example").DataTable();
                //     Show hide hidden columns
                _table.columns(hidden_columns).visible(_visible, true);
                _table.columns.adjust();
            });
        });
        $("#v2").click(function() {

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
            var _table = $(".example").DataTable();
            //     Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        });

        $("#v3").click(function() {

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
            var _table = $(".example").DataTable();
            //     Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        });
        $("#v4").click(function() {

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
            var _table = $(".example").DataTable();
            //     Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        });
        $("#v5").click(function() {

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
            var _table = $(".example").DataTable();
            //     Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        });
        $("#v6").click(function() {

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
            var _table = $(".example").DataTable();
            //     Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();
        });

        // script for expand button
        $("#expandbtn").click(function() {

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

                openTab(event, 'activity');

            } else if (activeSlideIndex === 1) {

                openTab(event, 'file');

            } else if (activeSlideIndex === 1) {

                openTab(event, 'expense');

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
    <script>
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
    <!-- <script>
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
    </script> -->
    <script>
        function toggleRowBackground(checkbox) {
            var row = checkbox.closest('tr');
            row.classList.toggle('selected', checkbox.checked);
        }
    </script>
    <!-- <script>
        function getResponse() {
            var table = $('#example').DataTable({
                // language: { lengthMenu: '_MENU_' },
                // rowReorder: {
                //     selector: 'td:nth-child(2)'
                // },
                // responsive: true,
                // dom: 'Blfrtip',
                // buttons: [
                //     {
                //         text: 'EXPORT',
                //         extend: 'collection',
                //         buttons: ['excel', 'csv', 'pdf', 'print'],
                //         className: 'px-3'

                //     },
                // ]

                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                language: {
                    lengthMenu: '_MENU_',
                    //search: '',
                    //searchPlaceholder: " Search for order ID, customer, order status or something..."
                },
                responsive: true,
                dom: 'Blfrtip',

                buttons: [{

                    },
                     {
                         text: '<i class="fa-solid fa-arrow-rotate-right p-1" style="font-size:.9rem; margin-left:12px;"></i>',
                     },
                      //{
                       //   text: '<button type="button" style="font-size:0.9rem; font-weight:400; border:none;padding:0;background-color: inherit;"><i class="fas fa-cog text-muted"></i> MANIPULATION</button>',
                      //},
                    /*
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

                    }*/

                ],
            });
        }
    </script> -->
    <!--<script>
        $(document).ready(function () {
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
        $(document).ready(function () {
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
        $(document).ready(function () {
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
        $(document).ready(function () {
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
        $(document).ready(function () {
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
        $(document).ready(function () {
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
        $(document).ready(function () {
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
        $(document).ready(function () {
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
        $(document).ready(function () {
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
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);
        });
    </script>

    <!-- table sin -->

    <script>
        $(document).ready(function () {
            var table = $('.example').DataTable({

                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                language: { lengthMenu: '_MENU_', search: '', searchPlaceholder: " Search for order ID, customer, order status or something..." },
                responsive: true,
                dom: 'Blfrtip',

                buttons: [
                    {

                    },

                    // {
                    //     text: '<i class="fa-solid fa-arrow-rotate-right p-1" style="font-size:.9rem"></i>'
                    // },
                    // {
                    //     text: '<button type="button" style="font-size:0.9rem; font-weight:400; border:none;padding:0;background-color: inherit;"><i class="fas fa-cog text-muted"></i> MANIPULATION</button>',
                    // },
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



    <script>
        var dropdownToggles = document.querySelectorAll("#stbutton");

        dropdownToggles.forEach(function(dropdownToggle) {
            var dropdownMenu = dropdownToggle.nextElementSibling;

            dropdownMenu.addEventListener("click", function(event) {
                var selectedOption = event.target.textContent;

                dropdownToggle.textContent = selectedOption;

                dropdownToggle.classList.remove("await", "testing", "notselected", "complete");
                if (selectedOption === "Not Started") {
                    dropdownToggle.classList.add("notselected");
                } else if (selectedOption === "Awaiting Feedback") {
                    dropdownToggle.classList.add("await");
                } else if (selectedOption === "Testing") {
                    dropdownToggle.classList.add("testing");
                } else if (selectedOption === "Complete") {
                    dropdownToggle.classList.add("complete");
                } else {
                    dropdownToggle.classList.remove("await", "testing", "notselected", "complete");
                }
            });
            dropdownToggle.addEventListener("click", function() {
                var selectedOption = dropdownToggle.textContent.trim();
                dropdownMenu.innerHTML = "";
                if (selectedOption === "In Progress") {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Not Started</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Testing</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Awaiting Feedback</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Complete</a></li>';
                } else if (selectedOption === "Not Started") {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">In Progress</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Testing</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Awaiting Feedback</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Complete</a></li>';
                } else if (selectedOption === "Testing") {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">In Progress</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Not Started</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Awaiting Feedback</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Complete</a></li>';
                } else if (selectedOption === "Awaiting Feedback") {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">In Progress</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Not Started</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Testing</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Complete</a></li>';
                } else if (selectedOption === "Complete") {
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">In Progress</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Not Started</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Awaiting Feedback</a></li>';
                    dropdownMenu.innerHTML += '<li><a class="dropdown-item" href="#">Awaiting Feedback</a></li>';
                }
            });
        });
    </script>
    <script>
        function changeButton() {
            const selectBox = document.getElementById("statusSelect");
            const selectedOption = selectBox.options[selectBox.selectedIndex];
            const button = document.getElementById("statusButton");
            // Update button text
            button.innerText = selectedOption.text;
            // Reset border and text colors
            button.style.border = "";
            button.style.color = "";
            // Apply specific styles based on selected option value
            if (selectedOption.value === "Testing") {
                button.style.border = "2px solid black";
                button.style.color = "black";
            } else if (selectedOption.value === "Awaiting Feedback") {
                button.style.border = "2px solid green";
                button.style.color = "green";
            } else if (selectedOption.value === "Complete") {
                button.style.border = "2px solid red";
                button.style.color = "red";
            }
        }
    </script>
    <script>
        var dropdownToggles = document.querySelectorAll("#stbutton2");
        dropdownToggles.forEach(function(dropdownToggle) {
            var dropdownMenu = dropdownToggle.nextElementSibling;
            dropdownMenu.addEventListener("click", function(event) {
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
            dropdownToggle.addEventListener("click", function() {
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



    <!-- file upload -->

    <script>
        let uploadButton = document.querySelector(".upload-button");
        let uploadedFilesContainer = document.querySelector(".upload-files-container");
        let allFiles = []; // Array to store all files

        function processFiles(files) {
            Array.from(files).forEach(file => {
                allFiles.push(file); // Add new file to the array
                processFile(file);
            });
        }

        function processFile(file) {
            let fileBlock = document.createElement("div");
            fileBlock.className = "file-block";
            fileBlock.style.display = "flex";

            let fileInfo = document.createElement("div");
            fileInfo.className = "file-info";
            let fileIcon = document.createElement("span");
            fileIcon.className = "material-icons-outlined file-icon";
            fileIcon.textContent = "description";
            let fileName = document.createElement("span");
            fileName.className = "file-name";
            fileName.textContent = file.name;
            let fileSize = document.createElement("span");
            fileSize.className = "file-size";
            fileSize.textContent = (file.size / 1024).toFixed(1) + " KB";

            fileInfo.appendChild(fileIcon);
            fileInfo.appendChild(fileName);
            fileInfo.appendChild(document.createTextNode(" | "));
            fileInfo.appendChild(fileSize);

            let imagePreview = document.createElement("div");
            imagePreview.className = "image-preview";
            let img = document.createElement("img");
            img.src = URL.createObjectURL(file);
            img.className = "preview-image";

            imagePreview.appendChild(img);

            let removeIcon = document.createElement("span");
            removeIcon.className = "material-icons remove-file-icon";
            removeIcon.textContent = "delete";
            removeIcon.onclick = function() {
                removeFile(removeIcon);
            };

            fileBlock.appendChild(fileInfo);
            fileBlock.appendChild(removeIcon);
            fileBlock.appendChild(imagePreview);

            uploadedFilesContainer.appendChild(fileBlock);
        }

        function removeFile(element) {
            let fileName = element.closest(".file-block").querySelector(".file-name").textContent;
            allFiles = allFiles.filter(file => file.name !== fileName); // Remove file from the array
            element.closest(".file-block").remove();
        }

        // Trigger the upload process when the upload button is clicked
        uploadButton.addEventListener("click", function() {
            uploadFilesAjax(allFiles);
        });

        function uploadFilesAjax(files) {
            let formData = new FormData();
            files.forEach(file => {
                formData.append('files[]', file);
            });

            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'upload.php', true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        console.log('All files uploaded successfully:', xhr.responseText);
                    } else {
                        console.error('File upload failed:', xhr.statusText);
                    }
                }
            };

            xhr.send(formData);
        }
    </script>

    <script>
        function fetch_dedtype() {
            table = $('#example').DataTable();
            table.destroy();
            console.log('dedtype function called');
            $.ajax({
                type: 'GET',
                url: '<?= base_url() ?>/Payroll/DeductionType/fetch_dedTyp',
                dataType: 'json',
                success: function(result) {
                    $('#dedTypeappend').html(result);
                    getResponse();

                },
            });
        }
        fetch_dedtype();
    </script>

    <script>
        function fetchdeddetails(id) {
            console.log('dedtypedetails function called');
            $.ajax({
                type: 'post',
                url: '<?= base_url() ?>/Payroll/DeductionType/fetchdeddetails/' + id,
                // data:{id:id},
                dataType: 'json',
                success: function(result) {

                    $('#dedType_detailsappend').html(result);
                    // $('.myButton').on('click', function() {
                    //     // Event handler code
                    //     alert('Button clicked!');
                    // });

                },
                error: function(xhr, status, error) {
                    console.error('Error fetching item:', error);
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.status-toggle', function() {
                var deductionTypeId = $(this).data('dedtypeid');
                var newStatus = $(this).is(':checked') ? 1 : 0;
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>/Payroll/DeductionType/updateDeductionTypeStatus',

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
    <script>
        var _visible = true;

        function toggleview(id) {
            fetchdeddetails(id);
            // var _visible_1 = true;
            // var _visible = true;
            var hidden_columns = [3, 4, 5, 6];

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
            var _table = $(".example").DataTable();
            //     Show hide hidden columns
            _table.columns(hidden_columns).visible(_visible, true);
            _table.columns.adjust();


        }
    </script>
    <!-- <script>
    function fetchded_details(id){
         $.ajax({
            
            type: 'post',
            url: '<?= base_url() ?>/Payroll/DeductionType/fetchdeddetails',
            data: {
               
                id: id
            },
            dataType: 'json',
            success: function(result) {
       
        $('#deddetailsappend').html(result);
        // $('.myButton').on('click', function() {
        //     // Event handler code
        //     alert('Button clicked!');
        // });
        
    },
            error: function(xhr, status, error) {
                console.error('Error fetching item:', error);
            }

        });
    }
</script> -->
<!-- tooltip -->
<!-- <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl)
        {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script> -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script> 
 <script>
        $(document).ready(function () {
            const td = document.querySelector('table.dataTable.display tbody tr td');
            const table = document.querySelector('table.dataTable.display  ');
            // const options = document.querySelectorAll('.dataTables_wrapper .dataTables_length select option');
            if ($('table.dataTable.display tbody tr').length < 2) {
                if (td.innerHTML == 'No data available in table') {
                    table.insertAdjacentHTML('afterend', `<div style="width:100%;display:flex;justify-content:center"> <img src="./404page.png" height="500vmin" width="500vmin"
                            alt="three-dots" data-bs-toggle="tooltip" data-bs-title="more"
                            data-bs-auto-close="outside"> </div>`)
                }
            }

            // options.forEach((option) => {
            //     console.log(option);
            //     option.addEventListener('click', () => {
            //         alert('hi')
            //         option.style.color = 'red !important';
            //     })
            // })
        });
    </script>

</body>

</html>