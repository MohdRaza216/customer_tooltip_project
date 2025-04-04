<style>
  .help-block {
    margin-left: 9px;
    color: red;
  }

  @media (max-width: 768px) {
    .tglbton {
      display: none !important;
    }
  }

  .statbtn {
    margin: 15px 4px 0px 0px !important;
    padding: 0px !important;
  }
</style>

<div class="">
  <div class="invrowbdy relative">
    <div class="newthebtn">
      <button type="button" class="hrbtns newbttn_default indRadBttn" onclick="window.location.href='<?= site_url('sales/new-proposal') ?>'"> <i class="fa fa-plus-square"></i>
        PROPOSAL</button>
    </div>
    <!-- <hr class="fileline inactiveBttn"> -->
    <div class="row">
      <div class="col-md-6">
        <div style="margin-top: 15px;">
          <h5 style="margin: 0;color: #333B54;" class="prop"><b>Proposals</b></h5>
        </div>
      </div>

      <div class="col-md-6 adjust_margin_tgl">
        <div class="ctrfilter toggle-items me-2">
          <!-- <button type="button" class="contractfilter" onclick="$('#filter-box').slideToggle();"
            data-bs-toggle="tooltip" data-bs-title="Open Filter " style="margin-right: 13px;">
            <i class="fa-solid fa-sliders" style="font-size: 12px"></i>
          </button> -->
          <button type="button" class="contractfilter hrbtns contractbtn addbttn" id="toggle_btn" onclick="toggleTable()" style="display:none;" data-bs-toggle="tooltip" data-bs-title="Toggle Table">
            <span class="button_text_container">
              <i class="fa fa-angle-double-left " aria-hidden="true"></i>
            </span>
          </button>
          <!-- <button type="button" class="hrbtns contractbtn addbttn" onclick="window.location.href='<?= site_url('sales/new-proposal') ?>'"> <i class="fa fa-plus-square"></i> PROPOSAL</button> -->
        </div>
      </div>

    </div>
  </div>

  <!-- <div class="invrowbdy" id="filter-box" style="display: none;">
    <div class="row">
      <div class="col-md-3">
        <input type="text" id="reportrange" name="dates" class="form-control purchaseselects statbtn">
      </div>
      <div class="col-md-3">
        <div class=" dropdown-with-icon dropdownalignment statbtn" style="border-radius:4px 0px 0px 4px;">
          <select class="selectpicker multiselect" data-name="name" multiple data-actions-box="true"
            data-live-search="true">
            <optgroup label="STATUS">
              <option value="Received">Received</option>
              <option value="Pending">Pending</option>
            </optgroup>
            <optgroup label="USER">
              <option value="User 1">User 1</option>
              <option value="User 2">User 2</option>
              <option value="User 3">User 3</option>
            </optgroup>
          </select>
        </div>
      </div>

    </div>
  </div> -->

  <div class="row invtblerow invt_row">
    <div class="col-md-12 expbdymt" id="first_column">
      <div class="expbody">
        <div class="demo-html mt-0 tabpad">
          <table id="proposal-table" class="display dataTable responsive nowrap tblalign " style="width: 100%;" aria-describedby="example_info">
            <thead class="theadrow">
              <tr>
                <th>Proposal #</th>
                <th>Subject</th>
                <th>to</th>
                <th>Total</th>
                <th>Date</th>
                <th>Open Till</th>
                <th>Tag</th>
                <th>Created On</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-7 sec-column exptblecol" id="second_column">
      <div id="showcontent" style="display: none;">


      </div>
    </div>
  </div>


  <!-- table script -->
  <script>
    $(document).ready(function() {
      let table = $('#proposal-table').DataTable({
        ajax: {
          url: '<?= site_url('sales/proposal-table') ?>',
          dataSrc: '',
          // data: function(d) {
          //   let status = $('#status').val();
          //   d.status = status;
          // }
        },
        columns: [{
          data: 'proposal'
        }, {
          data: 'subject'
        }, {
          data: 'to'
        }, {
          data: 'total'
        }, {
          data: 'date'
        }, {
          data: 'open_till'
        }, {
          data: 'tag'
        }, {
          data: 'created_on'
        }, {
          data: 'status'
        }],
        rowReorder: {
          selector: 'td:nth-child(2)'
        },
        language: {
          lengthMenu: '_MENU_',
          search: '',
          searchPlaceholder: " Search for order ID, customer, order status or something..."
        },
        responsive: true,
        dom: 'Blfrtip',

        buttons: [{

          },

          {
            text: '<i class="fa-solid fa-arrow-rotate-right p-1" style="font-size:.9rem"></i>'
          },
        ],
      });

      $('#refresh-button').click(function() {
        table.ajax.reload();
      });

    });
  </script>

  <!-- toggle -->
  <script>
    function toggleTable() {
      var hidden_columns = [4, 5, 6, 7, 8];
      var _visible = true;
      if ($("#first_column").hasClass("col-md-12")) {
        $("#first_column").removeClass("col-md-12").addClass("col-md-5");
        _visible = false;
        $("#second_column").show();
        addGroupButtons();
        $("#toggle_btn").find("i").removeClass("fa fa-angle-double-left").addClass("fa fa-angle-double-right");
        $("#toggle_btn").show();
      } else {
        $("#first_column").removeClass("col-md-5").addClass("col-md-12");
        addGroupButtons();
        $("#second_column").hide();
        $("#toggle_btn").find("i").removeClass("fa fa-angle-double-right").addClass("fa fa-angle-double-left");
        $("#toggle_btn").hide();
      }
      var _table = $("#proposal-table").DataTable();
      // Show hide hidden columns
      _table.columns(hidden_columns).visible(_visible, true);
      _table.columns.adjust();
    }

    // script for expand button
    function expandTable() {
      if ($("#second_column").hasClass("col-md-7")) {
        $("#second_column").removeClass("col-md-7").addClass("col-md-12");
        $("#first_column").hide();
        addGroupButtons();
      } else {
        $("#second_column").removeClass("col-md-12").addClass("col-md-7");
        $("#first_column").show();
        addGroupButtons();
      }
    }


    // view toggle for show contract
    function toggleView(id) {
      var hidden_columns = [4, 5, 6, 7, 8];
      var _visible = true;
      if ($("#first_column").hasClass("col-md-12")) {
        $("#first_column").removeClass("col-md-12").addClass("col-md-5");
        _visible = false;
        $("#second_column").show();
        addGroupButtons();

        $("#toggle_btn").find("i").removeClass("fa fa-angle-double-left").addClass("fa fa-angle-double-right");
        $("#toggle_btn").show();
        var _table = $("#proposal-table").DataTable();
        // Show hide hidden columns
        _table.columns(hidden_columns).visible(_visible, true);
        _table.columns.adjust();
      }
      $("#showcontent").load('<?= site_url('sales/view-proposal/') ?>' + id, function() {
        $("#showcontent").show();
      });
    }
  </script>

  <!-- delete  -->
  <script>
    function deleteIt(url) {
      $.ajax({
        type: "DELETE",
        url: url,
        dataType: "json",
        success: function(response) {
          if (response.isSuccess) {
            toastr.success('Deleted successfully!', 'Success');
            setTimeout(() => {
              window.location.reload();
            }, 500);
          } else {
            toastr.error('Something went wrong!', 'Error');
          }
        }
      });
    }
  </script>

  <!-- tooltip -->
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>


  <!--Daterange picker -->
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

  <script>
    function addGroupButtons() {
      const secCol = document.querySelector('#showcontent');
      let buttonGroup = ` <div class="fixed-buttons-right">

<button type="button" class="editpenbtn " data-bs-toggle="tooltip" data-bs-placement="bottom"
    data-bs-title="Edit Expense" id="view_edit"><i class="fa fa-edit expicon "></i></button>
<button id="view_print" type="button" class="editpenbtn" data-bs-toggle="tooltip"
    data-bs-placement="bottom" data-bs-title="Print"><i
        class="bi bi-printer expicon "></i></button>
<button type="button" class="editpenbtn" id="view_copy" data-bs-toggle="tooltip"
    data-bs-placement="bottom" data-bs-title="Copy"><i
        class="fa fa-clone expicon "></i></i></button>
<button type="button" class="closexbtn close-button" id="delete_view" data-bs-toggle="tooltip"
    data-bs-placement="bottom" data-bs-title="Delete"><i
        class="fa fa-times expicon"></i></button>
<button type="button" onclick="togg(1)" class="editpenbtn "
    class="contractfilter edittglbtn5 edittglbtn6 viewbtnByToggle" data-bs-toggle="tooltip"
    data-bs-title="Toggle Table" data-bs-original-title="" title="" data-bs-trigger="hover">
    <i class="fa-solid fa-angle-left" style="font-size: 12px" aria-hidden="true"></i>
</button>
<span id="view_invoice"></span>
</div>`

      secCol.insertAdjacentHTML('afterbegin', buttonGroup);
    }
  </script>