<style>
  p.header-effect {
    position: relative;
  }

  a span {
    display: flex;
    gap: 5px;
    align-items: center;
  }
</style>


<body style="background-color: rgb(208, 218, 218);">
  <!--<div class="dflx">-->


  <div class="row invtblerow ">
    <div class="col-md-12  expbdymt " id="first_col"><!--itembdypd pageT dflx-->
      <div class=" tblcontainer container-fluid p-2 "><!--expbody-->
        <div class="relative">
          <div class="newthebtn algh_tpo">
            <!-- <div class="flex mt-2"> -->
            <button type="button" class="hrbtns  addbttn indRadBttn"
              onclick="showMdModal('<?= base_url() ?>/Purchase/saveItem/0','Add Item') ; callUploadScript();">
              <i class="fa fa-plus" aria-hidden="true"></i> ADD
            </button>
            <button type="button" class="hrbtns impbtn-default indRadBttn"
              onclick="window.location.href='<?= base_url() ?>/Purchase/importItem'">
              <i class="fa-solid fa-arrow-down-wide-short" aria-hidden="true"></i>
              IMPORT ITEMS
            </button>
            <!-- </div> -->
          </div>
        </div>
        <!-- <hr class="fileline inactiveBttn"> -->
        <div class="row">

          <div class="col-md-12 flex items-center justify-between mr-2">
            <h5 class="itmmtrem ml-2 list"><i class="fa fa-clone me-1"></i>List items</h5>
            <!-- <div class="mr-4">
              <button type="button" id="toggle_btn" class="contractfilter " data-bs-toggle="tooltip"
                data-bs-title="Toggle Table"><i class="fa fa-angle-double-left  "></i>
              </button>
            </div> -->
            <div class="col-md-3 mr-2 mb-4 qarow">
              <div class="ctrfilter editbttn toggle-items">
                <!-- <button type="button" class="contractfilter edittglbtn5" data-bs-toggle="tooltip" data-bs-title="Filter"
                  aria-haspopup="true" aria-expanded="true" data-bs-auto-close="outside" data-bs-original-title=""
                  title="">
                  <i class="fa-solid fa-sliders" style="font-size: 12px" aria-hidden="true"></i>
                </button> -->
                <button type="button" id="toggle_btn" onclick="toggleView(id)"
                  class="contractfilter edittglbtn6 edittglbtn5 viewbtnByToggle padfsin rightarrow toggleright"
                  data-bs-toggle="tooltip" title="" data-bs-title="Toggle Table"
                  style=" margin-right: -5px !important;">
                  <i class="fa-solid fa-angle-left" style="font-size: 12px; "></i>
                </button>
                <!-- <button class="contractfilter edittglbtn5 ali_crctmargtog" type="button" data-bs-toggle="tooltip"
                  data-bs-title="Chart" data-bs-target="#collapseThree" aria-expanded="false"
                  aria-controls="collapseThree" data-bs-original-title="" title="">
                  <i class="fa-regular fa-chart-bar" style="font-size: 12px" aria-hidden="true"></i>
                </button> -->
              </div>
            </div>
          </div>
        </div>
        <div class="demo-html tabpad purchase-top">
          <table class=" example display dataTable display responsive nowrap tblalign" style="width: 100%"
            aria-describedby="example_info" id="table_dp">
            <thead class="theadrow">
              <tr>
                <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 0px">
                  <input type="checkbox" id="all_check" onchange="checkAll()">
                </th>
                <th class="select-checkbox sorting_disabled" rowspan="1" colspan="1" aria-label=""
                  style="width: 0px; font-weight: normal">
                  Image
                </th>
                <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                  aria-sort="ascending" aria-label="Name: activate to sort column descending"
                  style="width: 100px; font-weight: normal">
                  Commodity Code
                </th>
                <th class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                  aria-sort="ascending" aria-label="Name: activate to sort column descending"
                  style="width: 100px; font-weight: normal">
                  Commodity Name
                </th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                  aria-label="Position: activate to sort column ascending" style="width: 100px; font-weight: normal">
                  Groups
                </th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                  aria-label="Office: activate to sort column ascending" style="width: 97px; font-weight: normal">
                  Unit
                </th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                  aria-label="Age: activate to sort column ascending" style="width: 85px; font-weight: normal">
                  Sale Price
                </th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                  aria-label="Salary: activate to sort column ascending" style="width: 103px; font-weight: normal">
                  Purchase Price
                </th>
                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                  aria-label="Salary: activate to sort column ascending" style="width: 103px; font-weight: normal">
                  Tax
                </th>
              </tr>
            </thead>
            <tbody id="append">

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div id="sec_col" class="col-md-7 exptblecol  "><!--itemsecbdy-->
      <div id="showcontent" class="col-md-12 " style="display: block">
        <div class="invseccol invt_owrrr1">
          <div class=" container-fluid p-2 ">
            <div class="row">
              <h5 class="itmmtrem redhr deatilg">General Details</h5>
            </div>
            <hr class="redhr mt-2">
            <div class="row mt-3">
              <div class="col-md-1"></div>
              <div class="col-md-3 image-cons">
                <img src="" class="item-image" alt="nul_image" id="image_d" />
              </div>
              <div class="col-md-8">
                <table class=" table table-striped viewjobft">
                  <tbody>
                    <tr>
                      <td class="grntec">Commodity code</td>
                      <td id="code_d"></td>
                    </tr>
                    <tr>
                      <td class="grntec">Commodity Name</td>
                      <td id="name_d"></td>
                    </tr>
                    <tr>
                      <td class="grntec">Commodity Barcode</td>
                      <td id="barcode_d"></td>
                    </tr>
                    <tr>
                      <td class="grntec">SKU code</td>
                      <td id="sku_code_d"></td>
                    </tr>
                    <tr>
                      <td class="grntec">SKU Name</td>
                      <td id="sku_name_d"></td>
                    </tr>
                    <tr>
                      <td class="grntec">Item Group</td>
                      <td id="group_id_d"></td>
                    </tr>
                    <tr>
                      <td class="grntec">Sale price</td>
                      <td id="sale_price_d"></td>
                    </tr>
                    <tr>
                      <td class="grntec">Purchase Price</td>
                      <td id="purchase_price_d"></td>
                    </tr>
                    <tr>
                      <td class="grntec">Unit</td>
                      <td id="unit_id_d"></td>
                    </tr>
                    <tr>
                      <td class="grntec">Tax 1</td>
                      <td id="tax_1_d"></td>
                    </tr>
                    <tr>
                      <td class="grntec">Tax 2</td>
                      <td id="tax_2_d"></td>
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
  <!--</div>-->
  <!-- </div> -->
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
  <!-- Modals -->

  <script>
    function showMdModal(url, title) {

      $('#modal_md').on('shown.bs.modal', function () {
        $('.selectpicker').selectpicker('refresh');
      });
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

  <!-- modal  -->
  <div class="modal fade" id="modal_md2" role="dialog">
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

  <!-- Modals -->

  <script>
    function showMdModal2(url, title) {

      $('#modal_md2').on('shown.bs.modal', function () {
        $('.selectpicker').selectpicker('refresh');
      });
      $('#modal_md2').modal('show', { backdrop: 'true' });
      $.ajax({
        url: url,
        success: function (response) {
          $('#modal_md2 .modal-title').html(title);
          $('#modal_md2 .modal-body').html(response);
        }
      });
    }
  </script>
  <!-- script for toggle table -->

  <script>
    $("#toggle_btn").click(function () {
      var hidden_columns = [3, 4, 5, 6];
      var _visible = true;
      if ($("#first_col").hasClass("col-md-12")) {
        $("#first_col").removeClass("col-md-12").addClass("col-md-5");
        _visible = false;
        $("#sec_col").show();
        $("#toggle_btn")
          .find("i")
          .removeClass("fa fa-angle-double-left")
          .addClass("fa fa-angle-double-right");
      } else {
        $("#first_col").removeClass("col-md-5").addClass("col-md-12");
        $("#sec_col").hide();
        $("#toggle_btn")
          .find("i")
          .removeClass("fa fa-angle-double-right")
          .addClass("fa fa-angle-double-left");
      }
      var _table = $(".example").DataTable();
      // Show hide hidden columns
      _table.columns(hidden_columns).visible(_visible, true);
      _table.columns.adjust();
    });

    // script for expand button
    $("#expandbtn").click(function () {
      if ($("#sec_col").hasClass("col-md-7")) {
        $("#sec_col").removeClass("col-md-7").addClass("col-md-12");
        $("#first_col").hide();
      } else {
        $("#sec_col").removeClass("col-md-12").addClass("col-md-7");
        $("#first_col").show();
      }
    });
    $("#expandbtn2").click(function () {
      if ($("#sec_col").hasClass("col-md-7")) {
        $("#sec_col").removeClass("col-md-7").addClass("col-md-12");
        $("#first_col").hide();
      } else {
        $("#sec_col").removeClass("col-md-12").addClass("col-md-7");
        $("#first_col").show();
      }
    });

    // view toggle for show contract
    function viewView(id) {
      $.ajax({
        type: 'POST',
        url: '<?= base_url() ?>/Purchase/viewItem/' + id,
        dataType: 'json',
        success: function (result) {

          $('#code_d').html(result.code);
          $('#name_d').html(result.name);
          $('#barcode_d').html(result.barcode);
          $('#sku_code_d').html(result.sku_code);
          $('#sku_name_d').html(result.sku_name);
          $('#unit_id_d').html(result.unit_id);
          $('#group_id_d').html(result.group_id);
          $('#sub_group_id_d').html(result.sub_group_id);
          $('#purchase_price_d').html(result.purchase_price);
          $('#sale_price_d').html(result.sale_price);
          $('#tax_1_d').html(result.tax_1);
          $('#tax_2_d').html(result.tax_2);
          $('#image_d').attr("src", "<?= base_url() ?>/uploads/item/" + result.image)
          var hidden_columns = [1, 4, 5, 7];
          var _visible = true;
          if ($("#first_col").hasClass("col-md-12")) {
            $("#first_col").removeClass("col-md-12").addClass("col-md-5");
            _visible = false;
            $("#sec_col").show();
            $("#toggle_btn")
              .find("i")
              .removeClass("fa fa-angle-double-left")
              .addClass("fa fa-angle-double-right");
          }
          var _table = $(".example").DataTable();
          // Show hide hidden columns
          _table.columns(hidden_columns).visible(_visible, true);
          _table.columns.adjust();

          $("#showcontent").show();
        }
      });
    }
  </script>
  <!-- script for data table -->

  <script>
    function tableDp() {
      var table = $("#table_dp").DataTable({
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
          // {
          //   text: '<button type="button" style="font-size:0.9rem; font-weight:400; border:none;padding:0;background-color: inherit;" onclick="showMdModal2(`<?= base_url() ?>/Purchase/manipulation`,`Manipulation`)"><i class="fas fa-cog text-muted"></i> MANIPULATION</button>',
          // },


        ],

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
  <!-- multiselect -->
  <script>
    const dropdowns = document.querySelectorAll(".multiselect");

    dropdowns.forEach((dropdown) => {
      const inputBox = document.createElement("input");
      inputBox.type = "hidden";
      inputBox.classList.add("selected-values");
      name = dropdown.getAttribute("data-name");
      inputBox.setAttribute("name", name);
      dropdown.after(inputBox);

      dropdown.addEventListener("change", () => {
        const selectedOptions = Array.from(dropdown.selectedOptions).map(
          (option) => option.value
        );
        inputBox.value = selectedOptions.join(", ");
      });
    });
    function getItem() {
      clear = $('#table_dp').DataTable(); clear.destroy();
      $.ajax({
        type: 'POST',
        url: '<?= base_url() ?>/Purchase/getItem',
        dataType: 'json',
        success: function (result) {
          $('#append').html(result);
          tableDp();
        }
      });
    }
    getItem();
    function deleteItem(id) {
      $.confirm({
        title: 'Delete Item',
        content: 'Do you want to delete Item ?',
        type: 'red',
        typeAnimated: true,
        closeIcon: true,
        buttons: {
          tryAgain: {
            text: 'Confirm',
            btnClass: 'btn-red',
            action: function () {
              $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/Purchase/deleteItem/' + id,
                dataType: 'json',
                success: function (result) {
                  toastr.success('Item Deleted successfully!', 'Success');
                  getItem();
                }
              });
            }
          },
          close: function () {

          },
        }
      });
    }
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
</body>