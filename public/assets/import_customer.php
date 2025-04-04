<body>

  <div class=" bord-rad  imptcontainer tblcontainer pb-3 mrg-left10 mrg-right10 cust_container mtt-35">
    <div class="alinemargin mtschan mdfisin mrg-lft-0">
      <button type="button" class="itemgrnbtn hrbtns "><i class="fa-solid fa-download"></i> DOWNLOAD SAMPLE </button>
    </div>
    <hr class="fileline whsin">


    <div class="row imptpara">
      <div class="col-md-12">
        <ul class="import-ul ps-0 mtschan mbwsin" style="font-size: 13px!important;">
          <li>
            Your CSV data should be in the format below. The first line of your
            CSV file should be the column headers as in the table example. Also
            make sure that your file is <b>UTF-8</b> to avoid unnecessary
            <b>encoding problems.</b>
          </li>
          <li>
            If the column
            <b>
              you are trying to import is date make sure that is formatted in
              format Y-m-d (2023-03-04).</b>
          </li>
          <li>
            Make sure you configure the default contact permission in <a href="#" class=" text-primary link-class">Setup-&#62;Settings-&#62;Customers</a> to get the best results like
            auto
            assigning contact permissions and email notification settings based
            on the permission.
          </li>
          <li class="text-danger">Duplicate email rows won't be imported.</li>
        </ul>
      </div>
    </div>
    <div class="impttble">
      <div class="">
        <div class="table-responsive mbbsin sclsin">
          <table class="table table-bordered">
            <thead style="vertical-align: middle!important;">
              <tr>
                <th><span class="aster">*</span> Firstname <span class="text-info">Contact Field</span></th>
                <th><span class="aster">*</span> lastname <span class="text-info">Contact Field</span></th>
                <th><span class="aster">*</span> Email <span class="text-info">Contact Field</span></th>
                <th><span class="aster">*</span> Contact phonenumber <span class="text-info">Contact Field</span>
                </th>
                <th>Position <span class="text-info">Contact Field</span></th>
                <th><span class="aster">*</span>Company</th>
                <th>Vat</th>
                <th>Country</th>
                <th>City</th>
                <th>Zip</th>
                <th>State</th>
                <th>Address</th>
                <th>Website</th>
                <th>Billing Street</th>
                <th>Billing City</th>
                <th>Billing State</th>
                <th>Billing Country</th>
                <th>Shipping Street</th>
                <th>Shipping City</th>
                <th>Shipping State</th>
                <th>Shipping Country</th>
                <?php foreach ($custom_field as $row) { ?>
                  <th>
                    <?= $row->field_name ?>
                  </th>
                <?php } ?>
              </tr>
              <tr>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>6431b4541b88f@example.com </td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <td>Sample Data</td>
                <?php foreach ($custom_field as $row) { ?>
                  <td>Sample Data</td>
                <?php } ?>
              </tr>
          </table>
        </div>
      </div>
    </div>
    <form id="import">
      <div class="row attitmlt ">
        <!-- <div class="col-md-6">
          <div class="purchasegrps mtfchan">
            <label for="sub" class=""><span class="aster">*</span> Choose excel file</label>
            <input type="file" id="subject" class="chooseexcfle" name="file">
          </div>
        </div> -->
        <div class="col-md-6">
              <div class="purchasegrps">
                    <label for="sub" class="purchaseinfo"><span class="aster">*</span> Choose excel file</label>
                    <input type="file" name="Subject" class="form-control purchaseselect excfle frm-exc-fle">
                </div>
        </div>
      </div>
      <div class="row attitmlt">
        <div class="col-md-6">
          <div class="purchasegrps">
            <label for="unitname" class="explbl">Groups</label>
            <div class=" dropdown-with-icon dropdownalignment drop-icon-input" style="border-radius:4px 0px 0px 4px;">
              <select class="SelExample selectpicker form-control multiselect" multiple data-name="group_id">
                <?php foreach ($group as $gr) { ?>
                  <option value="<?= $gr->name ?>"><?= $gr->name ?></option>
                <?php } ?>
              </select>
              <button class="select-container dropdownplusbtn" style="border: 1px solid #ced4da !important;" data-bs-toggle="modal" data-bs-target="#myModal"
                type="button">

                <span class="input-group-addon colorlabels"><i class="bi bi-plus-lg plus-blue"></i></span>
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="row attitmlt">
        <div class="col-md-6">
          <div class="purchasegrps">
            <label for="purname" class="explbl">Default password for all contacts</label>
            <input type="password" id="purname" class="form-control purchaseselects" name="password">
          </div>
        </div>
      </div>

      <div class="row impitmlt">
        <div class="col-md-12 exp-foot-bttns">
          <div class="purchasegrps addpadding mttsin mrg-left-5">
            <button class="impbtn-default" form="import">
            <i class="fa-solid fa-arrow-down-wide-short"></i> IMPORT
            </button>           
            <button type="button" class="hrbtns hrrecbtn">
            <i class="fa-solid fa-arrow-down-wide-short"></i> SIMULATE IMPORT
            </button>
          </div>
        </div>
      </div>
    </form>
    <!--Modal div-->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header hdrbg">
            <button type="button" class="btn-close closebtn" data-bs-dismiss="modal"></button>
            <h6 class="modal-title">Add New Customer Group</h6>
            <div class="vertical-line">
              <span class="Bcgtop capsule"></span>
              <span class="Bcgbttm capsule"></span>
            </div>
          </div>
          <div class="modal-body popupbdy">
            <div class="content mx-3 mr-4">
              <form id="group">
                <div class="row pb-2 pt-2 mr-4">
                  <div class="purchasegrps form-group">
                    <label for="sub" class="purchaseinfo ms-0"><span class="aster">*</span> Name</label>
                    <input type="text" id="subject" class="form-control purchaseselects" name="name">
                  </div>
                </div>
                <div class="modal-footer taskfooter mazsin mbfnsin mrwsin">
                  <button type="button" class="taskclose1 mrzsin" data-bs-dismiss="modal">Close</button>
                  <button type="submit" form="group" class="tasksave1 ms-0">Save</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    <script>
      $('#import').formValidation({
        framework: 'bootstrap',
        fields: {
          file: {
            validators: {
              notEmpty: {
                message: 'Import File'
              }
            }
          },
        }
      })
        .on('success.form.fv', function (e) {
          e.preventDefault();
          var form = document.querySelector('#import');
          var formData = new FormData(form);
          $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>/customer/saveImport',
            data: formData,
            cache: false,
            contentType: false,
            processData: false, // serializes the form's elements.
            dataType: 'json',
            success: function (result) {
              if (result == 0) {
                toastr.warning('File Not Upload', 'Check File');
              } else {
                toastr.success(result + ' Data Added successfully!', 'Success');
                setInterval(() => {
                  window.location.reload();
                }, 1000);
              }
            }
          });
        });
      $('#group').formValidation({
        framework: 'bootstrap',
        fields: {
          name: {
            validators: {
              notEmpty: {
                message: 'Enter Name'
              }
            }
          },
        }
      })
        .on('success.form.fv', function (e) {
          e.preventDefault();
          var form = document.querySelector('#group');
          var formData = new FormData(form);
          $.ajax({
            type: 'POST',
            url: '<?= base_url() ?>/customer/addGroup',
            data: formData,
            cache: false,
            contentType: false,
            processData: false, // serializes the form's elements.
            dataType: 'json',
            success: function (result) {
              toastr.success('Group Added successfully!', 'Success');
              window.location.reload();
            }
          });
        });
      //Multiselect
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
      $(document).ready(function () {
        var table = $("#example").DataTable();
      });
      //export
      $('.export').click(function () {
        var titles = [];
        var data = [];

        /*
         * Get the table headers, this will be CSV headers
         * The count of headers will be CSV string separator
         */
        $('#dtHorizontalExample th').each(function () {
          titles.push($(this).text());
        });

        /*
         * Get the actual data, this will contain all the data, in 1 array
         */
        $('#dtHorizontalExample td').each(function () {
          data.push($(this).text());
        });

        /*
         * Convert our data to CSV string
         */
        var CSVString = prepCSVRow(titles, titles.length, '');
        CSVString = prepCSVRow(data, titles.length, CSVString);

        /*
         * Make CSV downloadable
         */
        var downloadLink = document.createElement("a");
        var blob = new Blob(["\ufeff", CSVString]);
        var url = URL.createObjectURL(blob);
        downloadLink.href = url;
        downloadLink.download = "data.csv";

        /*
         * Actually download CSV
         */
        document.body.appendChild(downloadLink);
        downloadLink.click();
        document.body.removeChild(downloadLink);
      });

      /*
   * Convert data array to CSV string
   * @param arr {Array} - the actual data
   * @param columnCount {Number} - the amount to split the data into columns
   * @param initial {String} - initial string to append to CSV string
   * return {String} - ready CSV string
   */
      function prepCSVRow(arr, columnCount, initial) {
        var row = ''; // this will hold data
        var delimeter = ','; // data slice separator, in excel it's `;`, in usual CSv it's `,`
        var newLine = '\r\n'; // newline separator for CSV row

        /*
         * Convert [1,2,3,4] into [[1,2], [3,4]] while count is 2
         * @param _arr {Array} - the actual array to split
         * @param _count {Number} - the amount to split
         * return {Array} - splitted array
         */
        function splitArray(_arr, _count) {
          var splitted = [];
          var result = [];
          _arr.forEach(function (item, idx) {
            if ((idx + 1) % _count === 0) {
              splitted.push(item);
              result.push(splitted);
              splitted = [];
            } else {
              splitted.push(item);
            }
          });
          return result;
        }
        var plainArr = splitArray(arr, columnCount);
        // don't know how to explain this
        // you just have to like follow the code
        // and you understand, it's pretty simple
        // it converts `['a', 'b', 'c']` to `a,b,c` string
        plainArr.forEach(function (arrItem) {
          arrItem.forEach(function (item, idx) {
            row += item + ((idx + 1) === arrItem.length ? '' : delimeter);
          });
          row += newLine;
        });
        return initial + row;
      }
    </script>