<style>
    .help-block {
        margin-left: 10px;
        color: red;
    }

    .addmultab {
        border-bottom: 1px solid #dee2e6;
        margin-left: 5px;
        border-top: 1px solid #dee2e6;
    }

    .invtaddtab {
        margin: 1px 10px -7px 0px !important;
    }

    .alignrtpad {
        padding-right: 8px;
    }

    div.dt-buttons {
        margin-bottom: 15px;
        margin-left: 5px;
    }

    .btnaline3 {
        left: 0;
        top: -31px;
        display: flex;
    }
</style>



<body>

<div class="row invtblerow1 ware_1">
    <div class=" tblcontainer relative">
        <div class="" style="margin-top:15px;">
            <div class="newthebtn">
                <button type="button" class="hrbtns newbttn_default indRadBttn" style="font-size: 14px; margin-left:0px;"
                    onclick="showMdModal('<?= base_url() ?>/inventory/addWarehouse','Add Warehouse')"><i
                        class="fa fa-plus"></i> ADD A WAREHOUSE</button>

               
            </div>
            <!-- <hr class="fileline inactiveBttn"> -->
            <!-- <hr class="fileline" style="margin-top: 25px;"> -->

        </div>

<div class="row alignh_marg5">
    <div class="col-md">
<div class="expbody  tbbl-contain">
        <div class="demo-html mt-0 tabpad expense-tbl-div">
            <table class="example display dataTable display responsive nowrap tblalign table" style="width: 100%;"
                aria-describedby="example_info">
                <thead class="theadrow">
                    <tr>
                        <th>
                            Warehouse Code
                        </th>
                        <th>
                            Warehouse Name
                        </th>
                        <th>
                            Warehouse Address
                        </th>
                        <th>
                            Warehouse Value
                        </th>
                        <th>
                            Stock
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row) {
                        if ($row->display == 0) {
                            $display = "";
                        } else {
                            $display = "Display";
                        }
                        ?>

                        <tr>
                            <td> <a href="<?= base_url() ?>/view_warehouse_detail"><?= $row->warehouse_code ?></a>
                                <p class="header-effect">
                                    <a href="<?= base_url('view_warehouse_detail/' . $row->id) ?>"><img src="<?= base_url() ?>/assets/img/view.svg" height="15px" width="15px" alt=""></a>
                                    <a href="#" class=""
                                        onclick="showMdModal3('<?= base_url() ?>/inventory/editWarehouse/<?= $row->id ?>','Edit Warehouse');"><img src="<?= base_url() ?>/assets/img/edit.svg" height="15px" width="15px" alt=""></a>
                                    <a href="#" class="sp-class3"><img src="<?= base_url() ?>/assets/img/delete.svg" height="15px" width="15px" alt=""></a>
                                </p>
                            </td>
                            <td><?= $row->warehouse_name ?></td>
                            <td><?= $row->address ?></td>
                            <td>Warehouse value</td>
                            <td>
                               stock
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div></div></div></div></div>
                    
    <!---  modal-->
    <div id="modal_md" class="modal fade custom-content" role="dialog">
        <div class="modal-dialog modal-xl">
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
            $.ajax({
                url: url,
                success: function (response) {
                    $('.selectpicker').selectpicker('refresh');
                    $('#modal_md').modal('show', { backdrop: 'true' });
                    $('#modal_md .modal-title').html(title);
                    $('#modal_md .modal-body').html(response);
                }
            });
        }
    </script>
    <script>
        function showMdModal2(url, title) {
            $.ajax({
                url: url,
                success: function (response) {
                    $('.selectpicker').selectpicker('refresh');
                    $('#modal_md').modal('show', { backdrop: 'true' });
                    $('#modal_md .modal-title').html(title);
                    $('#modal_md .modal-body').html(response);
                }
            });
        }
    </script>
    <script>
        function showMdModal3(url, title) {
            $.ajax({
                url: url,
                success: function (response) {
                    $('.selectpicker').selectpicker('refresh');
                    $('#modal_md').modal('show', { backdrop: 'true' });
                    $('#modal_md .modal-title').html(title);
                    $('#modal_md .modal-body').html(response);
                }
            });
        }
    </script>

    <script>
        $(document).ready(function () {
            var table = $('.example').DataTable({
                language: { lengthMenu: '_MENU_' },
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                language: { lengthMenu: '_MENU_', search: '', searchPlaceholder: " Search for order ID, customer, order status or something..." },
                responsive: true,
                dom: 'Blfrtip',

                buttons: [
                    {

                    },

                    


                ],
            });
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