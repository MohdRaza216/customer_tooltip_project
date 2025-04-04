<style>
    .drpl{
        margin-left : 10px !important;
        margin-top: 15px !important;
    }
    .mlst{
        margin-top: 10px !important;
    }
    .tgral{
        margin-top: 15px !important;
    }
    .btntop{
        position: inherit;
        margin-left : 10px !important;
    }
    .addbttn{
        margin-top: 20px !important;
        margin-left : 10px !important;
    }
    #sec_col{
        margin-top: 0px !important;
    }
    #first_col{
        margin-top: 0px !important;
    }
</style>
<body id="wrapper">
    <div class="row invtblerow2">
        <div class="col-md-12 expbdymt" id="first_col">
            <div class="container-fluid  tblcontainer p-2">


            <div class=" relative">
    <div class="newthebtn algh_tpo">
    <button type="submit" class="hrbtns newbttn_default indRadBttn"
                            onclick="showModal(`<?= base_url('crm/addmember') ?>`,`Add`)"> <i class="fa fa-plus" aria-hidden="true"></i>
        ADD </button>
        
    </div>
    </div>


                       <!-- <div class="col-md-8 qarow btntop">
                        <button type="submit" class="hrbtns newbttn_default"
                            onclick="showModal(`<?= base_url('crm/addmember') ?>`,`Add`)"><i class="fa fa-plus"></i> ADD</button>
                        </div>-->
                      

                <div class="row drpl">
                    <div class="col-md-2 datepicker1">
                        <div class="purchasegrp cdm">
                            <input type="text" id="reportrange" name="dates"
                                class="form-control purchaseselects statbtn">
                        </div>
                    </div>
                    <div class="col-md-4 mlst">
                        <div class="purchasegrp alghi_selectdeselect">
                            <div class=" dropdown-with-icon dropdownalignment">
                                <select class="selectpicker multiselect" data-name="name" multiple
                                    data-actions-box="true" data-live-search="true" title="Change..." >
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
                    <div class="col-md-6 ctrfilter toggle-items lign_topmarg tog">
                        <button type="button" id="toggle_btn" onclick="toggleView(id)"
                        class="contractfilter edittglbtn6 viewbtnByToggle padfsin" data-bs-toggle="tooltip" title=""
                            data-bs-title="Toggle Table">
                            <i class="fa-solid fa-angle-left" style="font-size: 12px"></i>
                        </button>
                    </div>
                    <div class="row">
                        <div class="demo-html">
                            <table id="example" class="display dataTable display responsive nowrap "
                                style="width: 100%; " aria-describedby="example_info">
                                <thead class="theadrow hdrw">
                                    <tr>
                                        <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1"
                                            aria-label="" style="width: 0px">
                                            <input type="checkbox" class="select-checkbox" />
                                        </th>
                                        <th>Employee Id</th>

                                        <th>Staff Name</th>

                                        <th>Role</th>

                                        <th>Designation</th>

                                        <th>Team</th>

                                        <th>Leader</th>

                                        <th>Target</th>

                                        <th>Achieved Target</th>

                                        <th>Status</th>


                                </thead>
                                <tbody id="append">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7 sec-column exptblecol " id="sec_col" style="margin-top : 5px !important;">
            <div id="showcontent">
                <!-- <div class="invseccol invt_owrr"> -->
            <div class="container-fluid  tblcontainer p-2 btlsin">
                <!-- <hr class="fileline" /> -->
                <div class="row vendcarmt mt-0">
                    <div class="col-md-12 ">
                        <div class="desktop">
                            <div class="scroll-images custml toptea snsin">
                                <div class="tabs d-flex newtabml ml-1">
                                    <div class=" child childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links active" onclick="openTab(event, 'profile')">
                                            Preview</button>
                                    </div>
                                    <div class=" child childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links" style="width:140px"
                                            onclick="openTab(event, 'proposals')"> Teams</button>
                                    </div>
                                    <div class=" child childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links" style="width:140px" onclick="openTab(event, 'deal')">
                                            Deals</button>
                                    </div>
                                    <div class=" child childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links" style="width:140px" onclick="openTab(event, 'task')">
                                            Tasks</button>
                                    </div>
                                    <div class=" child childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links" style="width:140px"
                                            onclick="openTab(event, 'reimbur')"> Reimbursement</button>
                                    </div>
                                    <div class=" child childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links" style="width:140px" onclick="openTab(event, 'target')">
                                            Targets</button>
                                    </div>
                                    <div class=" child childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links" style="width:140px"
                                            onclick="openTab(event, 'payment')"> Payments</button>
                                    </div>
                                    <!-- <div>
                                        <button class="tablinks" style="width:140px" onclick="openTab(event, 'user')">
                                            Users</button>
                                    </div> -->
                                    <div class=" child childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links" style="width:140px"
                                            onclick="openTab(event, 'remainder')"> Remainder</button>
                                    </div>
                                    <div class=" child childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links" style="width:140px"
                                            onclick="openTab(event, 'expense')"> Expense</button>
                                    </div>
                                    <div class=" child childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links" style="width:140px" onclick="openTab(event, 'file')">
                                            Files</button>
                                    </div>
                                    <div class=" child childd-tabb">
                                        <button class="tablinks tb-links childd-tabb-links" style="width:140px;text-wrap: nowrap;"
                                            onclick="openTab(event, 'activity')"> Activity Log</button>
                                    </div>
                                    <div class=" child childd-tabb">
                                        <button id="expandbtn tb-links childd-tabb-links" class=" tablinks  tb-links " data-bs-toggle="tooltip"
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
                        <!-- <div class="carousel-item" style="text-align: center;">
                            <div class="container">
                                <div class="child mb-0" style="height:auto;">
                                    <button class="tablinks tabresact" style="width:70%"
                                        onclick="openTab(event, 'user')">Users</button>
                                </div>
                            </div>
                        </div> -->
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
                <hr class="fileline linehr" style="padding-left: 20px !important; margin-top: -4px !important;"><br>
                <div id="profile" class="tabcontent  mtgb prev">
                    <!-- Analytics Dashboard -->
                    <div class="analytics_dashboard">
                        <div class="analytics_dashboard_upper">
                            <div class="analytics_dashboard_upper_right fff">
                                <div class="col-md-2 datepicker1 Date">
                                    <div class="purchasegrp">
                                        <input type="text" id="reportrange" name="dates"
                                            class="form-control purchaseselects statbtn doubledate" placeholder="Date">
                                    </div>
                                </div>
                                <div id="chart">
                                </div>
                            </div>
                            <div class="analytics_dashboard_upper_left ffff">
                                <div class="two_card_arrange">
                                    <div class="card_box pad">
                                        <p class="card_heading">Tasks</p>
                                        <p class="card_icon"><i class="fa-solid fa-list-check"></i></p>
                                        <p class="card_number">2.382</p>
                                        <span class="card_week">
                                            <p class="red">-3.65%</p> Since Last Week
                                        </span>
                                    </div>
                                    <div class="card_box padd">
                                        <p class="card_heading">Deals</p>
                                        <p class="card_icon"><i class="fa-solid fa-handshake"></i></p>
                                        <p class="card_number">&#x24; 21.300</p>
                                        <span class="card_week">
                                            <p class="green">6.65%</p> Since Last Week
                                        </span>
                                    </div>
                                </div>
                                <div class="two_card_arrange">
                                    <div class="card_box psr">
                                        <p class="card_heading" style="text-wrap: wrap;">Reimbrishment</p>
                                        <p class="card_icon ila_icno"><i class="fa-solid fa-sack-dollar"></i></p>
                                        <p class="card_number">14.212</p>
                                        <span class="card_week">
                                            <p class="green">5.25%</p> Since Last Week
                                        </span>
                                    </div>
                                    <div class="card_box mls">
                                        <p class="card_heading">Followups</p>
                                        <p class="card_icon ila_icno"><i class="fa-solid fa-user-plus"></i></p>
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
                <div id="proposals" class="tabcontent  mtgb mtfosin">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3 marg_ali alis">
                            <button type="button" class="hrbtns contractbtn addbttn "
                                onclick="showMdModal('add.html','ADD MEMBER');">ADD MEMBER
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="demo-html scltsin" style="overflow-x: auto;">
                            <table class="example1 display dataTable display responsive nowrap "
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
                                    <tr class="odd" >
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
                                    <tr class="odd" >
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
                <div id="deal" class="tabcontent  mtgb mtfosin ">
                <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3 marg_ali aliss">
                            <button type="button" class="hrbtns contractbtn addbttn "
                                onclick="showMdModal('add.html','ADD MEMBER');">ADD MEMBER
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="demo-html " style="overflow-x: auto;">
                            <table class="example1 display dataTable display responsive nowrap "
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
                <div id="task" class="tabcontent  mtgb mtfosin ">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3 marg_ali taskbtn alis">
                            <button type="button" class="hrbtns contractbtn addbttn"
                                onclick="showMdModal('add.html','ADD MEMBER');">ADD MEMBER
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="demo-html scltsin" style="overflow-x: auto;">
                            <table class="example1 display dataTable display responsive " style="width: 100%; "
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
                                onclick="showMdModal('add.html','ADD MEMBER');">ADD MEMBER
                            </button>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="demo-html scltsin">
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
                <div id="target" class="tabcontent  mtgb ">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3 marg_ali tarbtn alis">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp targbtn"
                                onclick="showMdModal('add.html','ADD MEMBER');">ADD MEMBER
                            </button>
                        </div>
                    </div>
                    <div class="row"> 
                        <div class="demo-html scltsin" style="overflow-x: auto;">
                            <table class="example1 display dataTable display responsive nowrap "
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
                <div id="payment" class="tabcontent  mtgb ">
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
                            <div class="demo-html scltsin mt-0" style="overflow-x: auto;">
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
                <!-- <div id="user" class="tabcontent  mtgb">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp"
                                onclick="showMdModal('add.html','ADD MEMBER');">ADD MEMBER
                            </button>
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
                                            style="font-weight:normal ;">Staff Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="font-weight:normal ;">Role</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Desigation</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="font-weight:normal ;">
                                            Teamname</th>
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
                </div> -->
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
                        <div class="demo-html scltsin" style="overflow-x: auto;">
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
                    <!-- <div class="row pb-3">
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
                    </div> -->
                    <div class="notification-wrapper activity-feed feed" id="show_activity">
                        <div class="activity-head">
                            <div class="activity-head-line"></div>
                            <div class="activity-head-title">Today</div>
                            <div class="activity-head-line"></div>
                        </div>
                        <div class="notification-box-all">
                            <div class="stripe"></div>
                            <div class="imgcontent">
                            <i class="fa-regular fa-user" aria-hidden="true"></i>
                            </div>
                            <div class="activity-inner">
                            <div class="activity-content">
                                <div class="activity-tag">
                                <div class="activity-title"><span>GTS Solution</span></div>
                                <div class="activity-time"><span><i class="fa-solid fa-circle small-icon" aria-hidden="true"></i>3 Months Ago</span>
                                </div>
                                <div class="activity-detail">
                                    <div class="activity-detail-text">converted to invoice from expense.
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="activity-close-icon">
                                <i class="fa-solid fa-xmark" style="color:#fc2d42" id="remove-btn" aria-hidden="true"></i>
                            </div>
                            </div>
                        </div>
                        <div class="activity-head">
                            <div class="activity-head-line"></div>
                            <div class="activity-head-title">Yesterday</div>
                            <div class="activity-head-line"></div>
                        </div>
                        <div class="notification-box-all ">
                            <div class="stripe"></div>
                            <div class="imgcontent">
                            <i class="fa-regular fa-user icon-green" aria-hidden="true"></i>
                            </div>
                            <div class="activity-inner">
                            <div class="activity-content">
                                <div class="activity-tag">
                                <div class="activity-title"><span>GTS Solution</span></div>
                                <div class="activity-time"><span><i class="fa-solid fa-circle small-icon" aria-hidden="true"></i>12
                                    Minute Ago</span>
                                </div>
                                <div class="activity-detail">
                                    <div class="activity-detail-text">converted to invoice from expense
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="activity-close-icon">
                                <i class="fa-solid fa-xmark" style="color:#fc2d42" id="remove-btn" aria-hidden="true"></i>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="file" class="tabcontent  mtgb mtthsin ">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3 marg_ali filbtn alis">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp filebtn"
                                onclick="showMdModal('add.html','ADD MEMBER');">ADD MEMBER
                            </button>
                        </div>
                    </div>
                    <br>
                    <!-- <div class="row hi hls1">
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
                    </div> -->
                    <div class="upload-files-container" style="background: none;">
                        <div class="drag-file-area">
                            <span class="material-icons-outlined upload-icon"> file_upload
                            </span>
                            <h3 class="dynamic-message" style="color: #6c757d;">Drag &amp; drop
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
                                        <span style="color: #6c757d;">from device</span>
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
                                <span class="file-name"> </span> | <span class="file-size">
                                </span>
                            </div>
                            <span class="material-icons remove-file-icon">delete</span>
                            <div class="progress-bar"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="demo-html scltsin mt-0" style="overflow-x: auto;">
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
                <div id="expense" class="tabcontent  mtgb mtfosin ">
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3 expbtn alis">
                            <button type="button" class="hrbtns contractbtn addbttn pull-right camp expsbtbn"
                                onclick="showMdModal('add.html','Add Campaign');">ADD CAMPAIGN
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="demo-html scltsin" style="overflow-x: auto;">
                            <table class="example1 display dataTable display responsive  " style="width: 100%; "
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
</div>
    </div>

<!-- modal  -->
<div class="modal fade" id="modal_md" role="dialog">
            <div class="modal-dialog modal-lg">
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

        } else if (activeSlideIndex === 2) {

            openTab(event, 'deal');

        } else if (activeSlideIndex === 3) {

            openTab(event, 'task');

        } else if (activeSlideIndex === 4) {

            openTab(event, 'reimbur');

        } else if (activeSlideIndex === 5) {

            openTab(event, 'target');

        } else if (activeSlideIndex === 6) {

            openTab(event, 'payment');

        } else if (activeSlideIndex === 7) {

            openTab(event, 'user');

        } else if (activeSlideIndex === 8) {

            openTab(event, 'remainder');

        } else if (activeSlideIndex === 9) {

            openTab(event, 'activity');

        } else if (activeSlideIndex === 10) {

            openTab(event, 'file');

        } else if (activeSlideIndex === 11) {

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

    <script>
    $(document).ready(function() {
        var table = $('.example1').DataTable({
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
    function getsalememUsers() {
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>/crm/getsalememUsers',
            dataType: 'json',
            success: function(result) {
                $('#example').DataTable().destroy();
                $('#append').html(result);
                initcampTable();
            }
        });
    }
    getsalememUsers();

    function initcampTable() {
        var table = $('#example').DataTable({
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
    }

    function toggleView(id) {
        $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>/crm/getsalesmemtab/' + id,
            dataType: 'json',
            success: function(result) {
                $('#stripedtab').html(result);
            }
        });

        var hidden_columns = [3, 4, 5, 7];
        var _visible = false;
        if ($("#first_col").hasClass("col-md-12")) {
            $("#first_col").removeClass("col-md-12").addClass("col-md-5");
            $("#sec_col").show();

        } else {
            $("#first_col").removeClass("col-md-5").addClass("col-md-12");
            $("#sec_col").hide();
            _visible = true;
        }

        var _table = $("#example").DataTable();
        // Show hide hidden columns
        _table.columns(hidden_columns).visible(_visible, true);
        _table.columns.adjust();

        $('#toggle_btn').on('click', function() {
            var element = document.getElementById(ID);
            if (event.target.checked) {
                element.style.display = "block";
            } else {
                element.style.display = "none";
            }
        });
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


    };
    </script>
    <!-- tab tables -->
    <script>
    function getviewreimb() {
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>/crm/getviewreimb',
            dataType: 'json',
            success: function(result) {
                $('.example1').DataTable().destroy();
                $('#viewreimbtble').html(result);
                initviewreimb();
            }
        });
    }
    getviewreimb();


    function getviewremind() {
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>/crm/getviewremind',
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
            url: '<?=base_url()?>/crm/getviewpayment',
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
    }
    </script>
    <script>
    $(document).ready(function() {
        $(document).on('click', '.sliderreimb', function() {
            var deductionTypeId = $(this).data('dedtypeid');
            var newStatus = $(this).is(':checked') ? 1 : 0;
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/crm/getsalesmemslideUsers',

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
    $(document).ready(function() {
        $('#nameInput').on('input', function() {
            var name = $(this).val();
            $.ajax({
                url: 'check_name.php',
                method: 'POST',
                data: {
                    name: name
                },
                success: function(response) {
                    $('#validationMessage').text(response);
                }
            });
        });
    });
    </script>
     <!-- tooltip -->
     <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>


</body>