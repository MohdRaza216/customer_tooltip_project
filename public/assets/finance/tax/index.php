<style>
    button.btn-close.closebtn {
        font-size: 31px;
    }   
</style>
<div class="tblcontainer1 relative ml-3 mr-3 borderradius4px3s">
    <div class="newthebtn mffmsin  " style="margin-top:-15px !important;">
        <button type="button" class="hrbtns addbttn contractbtn indRadBttn " accesskey="a"
            onclick="openAddModal('Add New Tax')">
            <i class="fa-solid fa-plus  tw-mr-1  plus-weight"></i> <span class="uppercase">New Tax</span>
            <small>(Alt+a)</small></button>
    </div>
    <!-- <hr class="fileline "> -->
    <!-- data-table for  -->

    <div class="row ">
        <div class="col-md-12">
            <div class="demo-html mt-0">
                <table class="example display dataTable display responsive nowrap tblalign " style="width: 100%"
                    aria-describedby="example_info">
                    <thead class="theadrow">
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Tax Name
                            </th>
                            <th>
                                Rate (percent)
                            </th>
                            <th>
                                Options
                            </th>

                        </tr>
                    </thead>
                    <tbody id="table-body">
                        <tr>
                            <td>3</td>
                            <td><a href="#" onclick="showModal('edit-tax.html','Edit Tax')">TAX3</a></td>
                            <td>5.00</td>
                            <td><button type="button" class="editpenbtn"
                                    onclick="showModal('edit-tax.html','Edit Tax')">
                                    <i class="fa fa-edit" data-bs-toggle="tooltip" data-bs-title="Edit"></i></button>
                                <button class="closexbtn clsheight">
                                    <i class="fa fa-remove" data-bs-toggle="tooltip"
                                        data-bs-title="Delete"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="#" onclick="showModal('edit-tax.html','Edit Tax')">TAX2</a></td>
                            <td>10.00</td>
                            <td><button type="button" class="editpenbtn"
                                    onclick="showModal('edit-tax.html','Edit Tax')">
                                    <i class="fa fa-edit" data-bs-toggle="tooltip" data-bs-title="Edit"></i></button>
                                <button class="closexbtn clsheight">
                                    <i class="fa fa-remove" data-bs-toggle="tooltip"
                                        data-bs-title="Delete"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="#" onclick="showModal('edit-tax.html','Edit Tax')">TAX1</a></td>
                            <td>18.00</td>
                            <td><button type="button" class="editpenbtn"
                                    onclick="showModal('edit-tax.html','Edit Tax')">
                                    <i class="fa fa-edit" data-bs-toggle="tooltip" data-bs-title="Edit"></i></button>
                                <button class="closexbtn clsheight"><i class="fa fa-remove" data-bs-toggle="tooltip"
                                        data-bs-title="Delete"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- modal for add and update -->
<div class="modal fade" id="au_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header hdrbg">
                <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
                <div class="vertical-line">

                    <span class="Bcgtop capsule"></span>
                    <span class="Bcgbttm capsule"></span>
                </div>
                <h5 class="modal-title">

                </h5>
            </div>
            <div class="modal-body">
                <form id="modalForm">
                    <input type="hidden" name="id">
                    <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>">

                    <!-- fields -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="purchasegrp">
                                <label for="unitname" class="purchaseinfo lbl-font"> <span class=" aster">* </span> Tax
                                    Name</label>
                                <input type="text" class="form-control purchaseselects" placeholder="Enter Tax Name"
                                    name="name">
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="purchasegrp">
                                <label for="unitname" class="purchaseinfo lbl-font">Tax Rate (percent)</label>
                                <input type="number" placeholder="Enter Tax Rate" class="form-control purchaseselects"
                                    name="percentage">
                            </div>
                        </div>
                    </div>
                    <!-- fields -->

                    <div class="row">
                        <div class="col-md-12 blkftr">
                            <div class="modal-footer taskfooter mt-2 mr-1 ">
                                <button type="button" class="taskclose1" style="margin-right: 0px;"
                                    data-bs-dismiss="modal">CLOSE</button>
                                <button type="submit" class="tasksave1" accesskey="s" style="text-transform: none !important;">SAVE
                                    <small>(Alt+s)</small></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--script for tooltip -->
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
</script>

<script src="<?= site_url() ?>/assets/custom js/crud_operation.js"></script>

<script>
    function openAddModal(title) {
        $('#au_modal h5.modal-title').text(title);
        $('input[name="id"]').val('');

        $('input[name="name"]').val('');
        $('input[name="percentage"]').val('');

        $('#au_modal').modal('show', {
            backdrop: 'true'
        });
    }

    function openEditModal(title, url) {
        $('#au_modal h5.modal-title').text(title);

        $.getJSON(url,
            function (data) {
                $('input[name="id"]').val(data.id);
                $('input[name="name"]').val(data.name);
                $('input[name="percentage"]').val(data.percentage);

                $('#au_modal').modal('show', {
                    backdrop: 'true'
                });
            }
        );
    }

    $('#modalForm').formValidation({
        framework: 'bootstrap',
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Enter Tax Name'
                    }
                }
            }
        }
    }).on('success.form.fv', function (e) {
        e.preventDefault();
        addOneRecord('<?= site_url('setup/add-tax') ?>', 'modalForm');
    });

    window.onload = () => {
        loadTable('<?= site_url('setup/tax-table') ?>', 'table-body', '.example');
    };

    function refreshTable() {
        loadTable('<?= site_url('setup/tax-table') ?>', 'table-body', '.example');
    }
</script>

<script>
    function initDataTable() {
        var table = $('.example').DataTable({
            language: {
                lengthMenu: '_MENU_'
            },
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