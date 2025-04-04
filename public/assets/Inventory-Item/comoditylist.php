<style>
    .alinebtntotop1 {
        left: 0;
        top: -33px;
    }

    .top-mg15 {
        margin-top: 15px;
        margin-bottom: 15px;
    }
</style>

<body id="wrapper">
    <form id="commodity_filter">
        <div class="row invtblerow1 ware_1">
            <!-- <div class=" tblcontainer tabaline relative padlsin mrg-container cust_container">  -->
            <div class=" tblcontainer tabaline relative padlsin  cust_container mrglf ">

                <div class="newthebtn11">
                    <div class="btnsgapsandflex">
                        <button type="button" class="hrbtns contractbtn addbttn indRadBttn"
                            onclick="showModal1('<?= base_url() ?>/inventory/addItemModal','Add item')"><i
                                class="fa fa-plus"></i>
                            ADD</button>
                        <button type="button" class=" impbtn-default indRadBttn"
                            onclick="window.location.href = '<?= base_url() ?>/importitems'"><i
                                class="fa-solid fa-arrow-down-wide-short"></i> IMPORT ITEMS</button>
                        <button id="dbtn" type="button" class=" hrbtns contractbtn hrimport"
                            style="display: none;">DOWNLOAD
                            ITEM LIST</button>
                        <button type="button" class="hrbtns itemgrnbtn indRadBttn alighf_btnxt1 algn "
                            onclick="window.location.href = '<?= base_url() ?>/openingstock'"><i
                                class="fa-solid fa-arrow-down-wide-short"></i> IMPORT OPENING STOCK</button>
                        <button type="button" class="hrbtns grpBttn indRadBttn"
                            onclick="window.location.href = '<?= base_url() ?>/serialnum'">SERIAL
                            NUMBERS</button>
                        <!--hrbtns grpBttn indRadBttn-->
                    </div>
                </div>

                <div class="row algh_margfulwor pagepadding">
                    <div class="row rowmargin">
                        <div class="col-md-12">
                            <h5 class="icnclone top-mg15">
                                <i class="fa-regular fa-clone"></i>
                                commodity list
                            </h5>
                        </div>
                    </div>

                    <div class="row rw3 rowmargin">
                        <div class="col-md-3">
                            <div class="purchasegrp purch-drop addd_zindandposi">
                                <select name="warehouse" class="form-control selectpicker" title="Select Warehouse"
                                    onchange="getUsers()">
                                    <option value="all"></option>

                                    <?php foreach ($edit as $row) { ?>
                                        <option value="<?= $row->warehouse ?>">
                                            <?= $row->warehouse ?>
                                        </option>
                                    <?php } ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="purchasegrp purch-drop addd_zindandposi">
                                <select name="commodity" class="form-control selectpicker" title="Select Commodity"
                                    onchange="getUsers()">
                                    <option value="all"></option>

                                    <?php foreach ($com as $row) { ?>
                                        <option value="<?= $row->comName ?>">
                                            <?= $row->comName ?>
                                        </option>
                                    <?php } ?>

                                </select>


                            </div>

                        </div>
                        <div class="col-md-2">
                            <div class="purchasegrp purch-drop addd_zindandposi">
                                <select name="tags" class="form-control selectpicker" title="Select Tags"
                                    onchange="getUsers()">
                                    <option value="all"></option>
                                    <?php foreach ($edit as $row) { ?>
                                        <option value="<?= $row->tags ?>">
                                            <?= $row->tags ?>
                                        </option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="purchasegrp purch-drop addd_zindandposi">
                                <select name="alerts" class="form-control selectpicker" title="Select Alerts"
                                    onchange="getUsers()">
                                    <option value="all"></option>
                                    <?php foreach ($edit as $row) { ?>
                                        <option value="<?= $row->alerts ?>">
                                            <?= $row->alerts ?>
                                        </option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                            <div class="purchasegrp purch-drop addd_zindandposi">
                                <div class=" dropdown-with-icon dropdownalignment">
                                    <select name="group" class="selectpicker multiselect" data-live-search="true"
                                        placeholder="Can be Inventory" multiple>
                                        <option value="" disabled selected>Select Alerts</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row rowmargin">
                        <div class="col-md-5 "> </div>

                        <!-- <div class="col-md-3  boxcheck pull-right">
                    <div class="checkbox p2">
                        <input type="checkbox" class="form-check-input cbx">
                        <label class="lbar1">
                            Search for simple and variation product <i class="fa fa-circle-question ibar2"
                                data-bs-toggle="tooltip" data-bs-title="Search for simple and variation product"></i>
                        </label>

                    </div>
                </div> -->
                        <!-- <div class="col-md-3 boxcheck pull-right"> -->
                        <div class="col-md-4 boxcheck mt-3">
                            <div class="checkbox flx p2">
                                <input type="checkbox" class="form-check-input cbx chk_marg">
                                <label class="lbar1 l_mrg toolque">
                                    Search for simple and variation product
                                    <i class="fa fa-circle-question " data-bs-toggle="tooltip"
                                        data-bs-title="Search for simple and variation product"></i>
                                </label>
                            </div>
                        </div>

                        <div class="col-md-3 ">
                            <!-- <div class="col-md-3 pull-right"> -->
                            <div class="purchasegrp mrtp">
                                <input type="text" id="subject" class="form-control purchaseselects " name="sb_code"
                                    onchange="getUsers()" placeholder="Filter By Barcode">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="expbody  tbbl-contain padaln">
                                <div class="demo-html mt-0 row  tabpad expense-tbl-div">
                                    <table class=" example display dataTable display responsive nowrap tblalign table "
                                        style="width: 100%;" aria-describedby="example_info">
                                        <thead class="theadrow">
                                            <tr>
                                                <th>
                                                    <input class="checkbox" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                </th>
                                                <th>
                                                    Images</th>
                                                <th>
                                                    Item code</th>
                                                <th>
                                                    Item name </th>
                                                <th>
                                                    SKU Code</th>
                                                <th>
                                                    Group name</th>
                                                <th>
                                                    Warehouse name</th>
                                                <th>
                                                    Tags </th>
                                                <th>
                                                    Inventory</th>
                                                <th>
                                                    Name </th>
                                                <th>
                                                    Sale price</th>
                                                <th>
                                                    Purchase price</th>
                                                <th>
                                                    Tax1 </th>
                                                <th>
                                                    Tax2 </th>
                                                <th>
                                                    Status </th>
                                                <th>
                                                    Minimum stock</th>
                                                <th>
                                                    Maximum stock
                                                </th>
                                                <th>
                                                    Price after tax
                                                </th>
                                                <th>
                                                    HSN Code
                                                </th>
                                            </tr>


                                        </thead>
                                        <tbody id="append"></tbody>
                                    </table>
                                </div>
                            </div>
    </form>

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


    <div class="modal fade" id="modal_md1" role="dialog">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
                    <h5 class="modal-title"></h5>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    <!-- tooltip -->
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl)
        {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

    <script>
        function getTableResponse()
        {
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

                    //{
                    //   text: '<i class="fa-solid fa-arrow-rotate-right p-1" style="font-size:.9rem"></i>'
                    // },
                    //{
                    //    text: '<button type="button" onclick="showModal(\'<?= base_url() ?>/inventory/manipulation\', \'Add item\')" style="font-size:0.9rem; font-weight:400; border:none;padding:0;background-color: inherit;"><i class="fas fa-cog text-muted"></i> MANIPULATION</button>',
                    // },
                    // {
                    //     text: '<button type="button" style="font-size:0.9rem; font-weight:300; border:none;padding:0;background-color: inherit;" onclick="showButton();">EXPORT THE SELECTED ITEM</button>',
                    // },
                    // {
                    //     text: '<button type="button" onclick="showModal2(\'<?= base_url() ?>/inventory/showPop\', \'Add item\')" style="font-size:0.9rem; font-weight:400;width:100% !important; border:none;padding:0;background-color: inherit;">BARCODE PRINTING</button>',
                    // },
                    {
                        text: '<i class="fa-solid fa-arrow-right-from-bracket barcode"></i> EXPORT',
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


    </script>
    <script>
        function showButton()
        {
            var btn = document.getElementById("dbtn");
            btn.style.display = 'inline';
        }
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

    <script>
        function showModal(url, title)
        {

            $.ajax({
                url: url,
                success: function (response)
                {
                    $('#modal_md .modal-title').html(title);
                    $('#modal_md .modal-body').html(response);
                    $('.selectpicker').selectpicker('refresh');
                    $('#modal_md').modal('show', { backdrop: 'true' });


                }
            });
        }

    </script>
    <script>
        function showModal2(url, title)
        {

            $.ajax({
                url: url,
                success: function (response)
                {
                    $('#modal_md .modal-title').html(title);
                    $('#modal_md .modal-body').html(response);
                    $('.selectpicker').selectpicker('refresh');
                    $('#modal_md').modal('show', { backdrop: 'true' });


                }
            });
        }

    </script>
    <script>
        function showModal1(url, title)
        {
            $.ajax({
                url: url,
                success: function (response)
                {
                    $('#modal_md .modal-title').html(title);
                    $('#modal_md .modal-body').html(response);
                    $('.selectpicker').selectpicker('refresh');
                    $('#modal_md').modal('show', { backdrop: 'true' });


                }
            });
        }

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
    <script>
        function getUsers()
        {

            var form = document.querySelector('#commodity_filter');
            var dataForm = new FormData(form);

            table = $('.example').DataTable();
            table.destroy();
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/home/getUsers',
                data: dataForm,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (result)
                {
                    $('#append').html(result);
                    getTableResponse();
                },

            });
        }

        getUsers();

    </script>
    <script>

        function deleteUser(inventory_id)
        {
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/home/deleteUser/' + inventory_id,
                dataType: 'json',
                success: function (result)
                {
                    if (result == 1)
                    {
                        toastr.success('Deleted successfully', 'Success');
                        getUsers();
                    } else
                    {
                        toastr.error('Deletion failed', 'Error');
                    }
                }
            });
        }
    </script>