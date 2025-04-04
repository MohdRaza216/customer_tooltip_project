
<form id="addlead10">
  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <div class="purchasegrp">
            <label class="purchaseinfo"><span class="aster">*</span> Commodity Code</label>
            <input type="text" name="code" class="form-control purchaseselects">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 ">
      <div class="row">
        <div class="col-md-12">
          <div class="purchasegrp comn">
            <label class="purchaseinfo"> Commodity Name</label>
            <input type="text" class="form-control purchaseselects" name="name">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row ">
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12">
          <div class="purchasegrp">
            <label class="purchaseinfo"> Commodity Barcode</label>
            <input type="text" class="form-control purchaseselects" name="barcode">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12">
          <div class="purchasegrp scode">
            <label class="purchaseinfo"> SKU code </label><i class="fa fa-question-circle itemques questionm"
              data-bs-toggle="tooltip"
              data-bs-title="SKU code is created by: the first character of the Commodity Group code and Subgroup code, and the id auto increases until it has four characters"></i>
            <input type="text" class="form-control purchaseselects" name="sku_code">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="row">
        <div class="col-md-12">
          <div class="purchasegrp">
            <label class="purchaseinfo"> SKU Name</label>
            <input type="text" class="form-control purchaseselects" name="sku_name">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="purchasegrp">
        <label for="country" class="emailpro descript">Description</label>
        <textarea class="textdesc" name="description"></textarea>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="purchasegrp">
        <label for="tags" class="purchaseinfo mb-1">Commodity group</label>
        <select class="selectpicker form-control" data-live-search="true" onchange="getsub(this.value)" name="group_id">
          <option value=""></option>
          <?php foreach ($group as $row) { ?>
            <option value="<?= $row->id ?>">
              <?= ucfirst($row->name) ?>
            </option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="purchasegrp">
        <label for="tags" class="purchaseinfo mb-1">Sub group</label>
        <select class="selectpicker form-control" data-live-search="true" name="sub_group_id" id="sub_group">
          <!-- <option value=""></option> -->
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <div class="purchasegrp">
            <label class="purchaseinfo"><span class="aster">*</span> Sales price</label>
            <input type="text" class="form-control purchaseselects" name="sale_price">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <div class="purchasegrp">
            <label class="purchaseinfo"> purchase price</label>
            <input type="text" class="form-control purchaseselects" name="purchase_price">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row ">
    <div class="col-md-6">
      <div class="purchasegrp">
        <label for="tags" class="purchaseinfo mb-1"><span class="aster">*</span> Units</label>
        <select class="selectpicker form-control" name="sale_price" data-live-search="true" title="None selected">
          <!-- <option value=""></option> -->
          <?php foreach ($units as $un) { ?>
            <option value="<?= $un->id ?>">
              <?= ucfirst($un->name) ?>
            </option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="col-md-3">
      <div class="purchasegrp">
        <label for="tags" class="purchaseinfo mb-1">Tax 1</label>
        <select class="selectpicker form-control" data-live-search="true" name="tax_1" onchange="taxchange(this.value)">
          <!-- <option value=""></option> -->
          <?php foreach ($tax as $t) { ?>
            <option value="<?= $t->id ?>">
              <?= ucfirst($t->name) ?>
            </option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="col-md-3">
      <div class="purchasegrp">
        <label for="tags" class="purchaseinfo mb-1">Tax 2</label>
        <select class="selectpicker form-control" data-live-search="true" disabled name="tax_2" id="tax_2">
          <!-- <option value=""></option> -->
          <?php foreach ($tax as $t) { ?>
            <option value="<?= $t->id ?>">
              <?= ucfirst($t->name) ?>
            </option>
          <?php } ?>
        </select>
      </div>
    </div>
  </div>

  <!-- <div class="row">
    <div class="col-md-12  mt-4">
      <div class="purchasegrp">
      <div id="drop-zone">
                                            <img src="" alt="">
                                            <i class="fa-solid fa-cloud-arrow-up display-4 text-muted"></i>
                                            <h4 class="dropfile">Drop file or click to upload</h4>
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
  </div> -->


  <!-- <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8  pe-3 dragdrop">
                                                <div class="overlay" id="overlay">Drop your files here...</div>

                                                <div class="upload-files-container">
                                                    <div class="drag-file-area">
                                                        <span class="material-icons-outlined upload-icon"> file_upload
                                                        </span>
                                                        <h3 class="dynamic-message">Drag & drop any file here</h3>
                                                        <label class="label">
                                                             or
                                                            <span class="browse-files">
                                                                <input type="file" class="default-file-input" />
                                                                <span class="browse-files-text">browse file</span>
                                                                <span>from device</span>
                                                            </span>
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
                                                        a file
                                                        first
                                                        <span
                                                            class="material-icons-outlined cancel-alert-button">cancel</span>
                                                    </span>
                                                   
                                                    <div class="file-block" style="display:flex;">
                                                        <div class="file-info">
                                                            <span
                                                                class="material-icons-outlined file-icon">description</span>
                                                            <span class="file-name">
                                                               
                                                            </span>
                                                        </div>
                                                        <span class="material-icons remove-file-icon"
                                                            onclick="removeFile(this)">delete</span>
                                                    </div>
                                                  
                                                </div>
                                            </div>


                                                    </div> -->

  <div class="row mt-3">
    <div class="col-md-2"></div>
    <!-- dropzone -->
    <form id="import_form">
      <div class="row attitmlt">
        <div class="col-md-12">
          <div class=" excfnthr">
            <label for="" class="excfllbl"><span class="aster">* </span>Choose file (Accepted Format CSV,
              Excel)</label>
            <!-- <div class="input-group d-flex flex-nowrap">
                      <input type="file" class="chooseexcfle" name="file">
                  </div> -->

            <!-- dropzone -->
            <!-- <div class="col-md-12 p-0">
              <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined"
                rel="stylesheet" />
              <div class="overlay" id="overlay">Drop your files here...</div>
              <div class="upload-files-container" style="background: none;">
                <div class="drag-file-area">
                  <span class="material-icons-outlined upload-icon"> file_upload </span>
                  <h3 class="dynamic-message" style="color: #6c757d;">Drag & drop any file here</h3>
                  <label class="label" style="margin-left: -300px;">

                    <span class="browse-files">
                      <input type="file" class="default-file-input" />
                      <span style="color: #6c757d;">or</span>
                      <span class="browse-files-text">browse file</span>
                      <span style="color: #6c757d;">from device</span>
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
              </div>
            </div> -->
            <div class="col-md-12 p-0">

              <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined"
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
              <div class="upload-files-container flex justify-center items-center mt-3">
                <div class="drag-file-area" style="width: 60%;">
                  <span class="material-icons-outlined upload-icon"> file_upload
                  </span>
                  <h3 class="dynamic-message" style="color: #6c757d;">Drag & drop
                    any
                    file here</h3>
                  <label class="label">
                    <span class="browse-files">
                      <input type="file" class="default-file-input  ">
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
                  <span class="material-icons-outlined cancel-alert-button">cancel</span>
                </span>
                <div class="file-block">
                  <div class="file-info">
                    <span class="material-icons-outlined file-icon">description</span>
                    <span class="file-name"> </span> <span class="file-size badge rounded-pill">
                    </span>
                  </div>
                  <span class="material-icons remove-file-icon">delete</span>
                  <div class="progress-bar"></div>
                </div>
              </div>

            </div>


          </div>
        </div>
      </div>
    </form>


    <div class="row">
      <div class="col-md-12 blkftr">
        <div class="modal-footer taskfooter csbtn" style="padding-right: 4px;">
          <button type="button" class="btn btn-secondary taskclose1 footbtn1 " data-bs-dismiss="modal">
            CLOSE
          </button>
          <button type="submit" class="btn btn-primary tasksave1">SAVE</button>
        </div>
      </div>
    </div>
</form>


<script>
  var isAdvancedUpload = (function () {
    var div = document.createElement("div");
    return (
      ("draggable" in div || ("ondragstart" in div && "ondrop" in div)) &&
      "FormData" in window &&
      "FileReader" in window
    );
  })();

  let fileInput = document.querySelector(".default-file-input");
  let uploadButton = document.querySelector(".upload-button");
  let uploadedFilesContainer = document.querySelector(".upload-files-container");
  let overlay = document.getElementById("overlay");
  let dragFileArea = document.querySelector(".drag-file-area");
  let dragCounter = 0;

  function showOverlay() {
    overlay.style.display = "flex";
    overlay.style.flexDirection = "column";
  }

  function hideOverlay() {
    overlay.style.display = "none";
  }

  ["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
    window.addEventListener(
      eventName,
      function (e) {
        e.preventDefault();
        e.stopPropagation();
      },
      false
    );
  });

  window.addEventListener("dragenter", function (e) {
    dragCounter++;
    showOverlay();
  });

  window.addEventListener("dragleave", function (e) {
    dragCounter--;
    if (dragCounter === 0) {
      hideOverlay();
    }
  });

  window.addEventListener("drop", function (e) {
    dragCounter = 0;
    hideOverlay();
    processFiles(e.dataTransfer.files);
  });

  fileInput.addEventListener("change", function () {
    processFiles(fileInput.files);
  });

  dragFileArea.addEventListener("click", () => {
    let input = document.createElement("input");
    input.type = "file";
    input.onchange = (_this) => {
      let files = Array.from(input.files);
      processFiles(files);
    };
    input.click();
  });

  let allFiles = []; // Array to store all files

  function processFiles(files) {
    Array.from(files).forEach((file) => {
      allFiles.push(file); // Add new file to the array
      processFile(file);
    });
  }

  function processFile(file) {
    let fileBlock = document.createElement("div");
    fileBlock.className = "file-block";
    fileBlock.style.display = "flex";
    fileBlock.style.z - index = "10px";
    fileBlock.innerHTML = `
    <div class="file-info">
     <span class="material-icons-outlined file-icon">description</span>
     <span class="file-name">${file.name}</span> 
     <span class="file-size badge rounded-pill">${(file.size / 1024).toFixed(
      1
    )} KB</span>
    </div>
    <span class="material-icons remove-file-icon" onclick="removeFile(this)">delete</span>
    <div class="progress-bar" style="width: 0; height: 5px; bottom: 0; position: absolute;"></div>`;
    uploadedFilesContainer.appendChild(fileBlock);
  }

  window.removeFile = function (element) {
    let fileName = element
      .closest(".file-block")
      .querySelector(".file-name").textContent;
    allFiles = allFiles.filter((file) => file.name !== fileName); // Remove file from the array
    element.closest(".file-block").remove();
  };

  uploadButton.addEventListener("click", function () {
    // Remove the behavior that opens the file input
    // Instead, call the function to start uploading files
    uploadFiles();
  });

  window.addEventListener("paste", function (e) {
    const items = (e.clipboardData || e.originalEvent.clipboardData).items;
    let files = [];
    for (let item of items) {
      if (item.kind === "file") {
        let file = item.getAsFile();
        files.push(file);
      }
    }
    if (files.length > 0) {
      processFiles(files);
    }
  });

  // Function to simulate the upload process
  function uploadFiles() {
    let fileBlocks = uploadedFilesContainer.querySelectorAll(".file-block");
    fileBlocks.forEach((block) => {
      // Simulate file upload progress
      let progressBar = block.querySelector(".progress-bar");
      let width = 0;
      let intervalId = setInterval(() => {
        if (width >= 100) {
          clearInterval(intervalId);
          progressBar.style.width = "100%";
        } else {
          width++;
          progressBar.style.width = width + "%";
        }
      }, 50);
    });
  }

  // Trigger the upload process when the upload button is clicked
  uploadButton.addEventListener("click", function () {
    // Assuming all files are ready to upload, for example purposes
    uploadFiles();
  });

  // Add a click event listener to the cancel (X) button to hide the upload message
  document
    .querySelector(".cancel-alert-button")
    .addEventListener("click", function () {
      document.querySelector(".cannot-upload-message").style.display = "none";
    });
</script>

<script>
  $('#import_form').formValidation({
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
      var form = document.querySelector('#import_form');
      var formData = new FormData(form);
      $.ajax({
        type: 'POST',
        url: '<?= base_url() ?>/Sales/saveImport',
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
              window.location.href = "<?= base_url() ?>/invoice-item";
            }, 1000);
          }
        }
      });
    });
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

<!--upload-files-->
<!-- drop file -->
<script>
  var isAdvancedUpload = (function () {
    var div = document.createElement("div");
    return (
      ("draggable" in div || ("ondragstart" in div && "ondrop" in div)) &&
      "FormData" in window &&
      "FileReader" in window
    );
  })();

  let fileInput = document.querySelector(".default-file-input");
  let uploadButton = document.querySelector(".upload-button");
  let uploadedFilesContainer = document.querySelector(
    ".upload-files-container"
  );
  let overlay = document.getElementById("overlay");
  let dragCounter = 0;

  function showOverlay() {
    overlay.style.display = "flex";
  }

  function hideOverlay() {
    overlay.style.display = "none";
  }

  ["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
    window.addEventListener(
      eventName,
      function (e) {
        e.preventDefault();
        e.stopPropagation();
      },
      false
    );
  });

  window.addEventListener("dragenter", function (e) {
    dragCounter++;
    showOverlay();
  });

  window.addEventListener("dragleave", function (e) {
    dragCounter--;
    if (dragCounter === 0) {
      hideOverlay();
    }
  });

  window.addEventListener("drop", function (e) {
    dragCounter = 0;
    hideOverlay();
    processFiles(e.dataTransfer.files);
  });

  fileInput.addEventListener("change", function () {
    processFiles(fileInput.files);
  });


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
    fileBlock.innerHTML = `
    <div class="file-info">
     <span class="material-icons-outlined file-icon">description</span>
     <span class="file-name">${file.name}</span> |
     <span class="file-size">${(file.size / 1024).toFixed(1)} KB</span>
    </div>
    <span class="material-icons remove-file-icon" onclick="removeFile(this)">delete</span>
    <div class="progress-bar" style="width: 0; height: 5px; bottom: 0; position: absolute;"></div>`;
    uploadedFilesContainer.appendChild(fileBlock);
    console.log(fileBlock)
  }

  window.removeFile = function (element) {
    let fileName = element.closest(".file-block").querySelector(".file-name").textContent;
    allFiles = allFiles.filter(file => file.name !== fileName); // Remove file from the array
    element.closest(".file-block").remove();
  };

  uploadButton.addEventListener("click", function () {
    // Remove the behavior that opens the file input
    // Instead, call the function to start uploading files
    uploadFiles();
  });

  window.addEventListener("paste", function (e) {
    const items = (e.clipboardData || e.originalEvent.clipboardData).items;
    let files = [];
    for (let item of items) {
      if (item.kind === "file") {
        let file = item.getAsFile();
        files.push(file);
      }
    }
    if (files.length > 0) {
      processFiles(files);
    }
  });

  // Function to simulate the upload process
  function uploadFiles() {
    let fileBlocks = uploadedFilesContainer.querySelectorAll(".file-block");
    fileBlocks.forEach((block) => {
      // Simulate file upload progress
      let progressBar = block.querySelector(".progress-bar");
      let width = 0;
      let intervalId = setInterval(() => {
        if (width >= 100) {
          clearInterval(intervalId);
          progressBar.style.width = "100%";
        } else {
          width++;
          progressBar.style.width = width + "%";
        }
      }, 50);
    });
  }

  // Trigger the upload process when the upload button is clicked
  uploadButton.addEventListener("click", function () {
    // Assuming all files are ready to upload, for example purposes
    uploadFiles();
  });

  // Add a click event listener to the cancel (X) button to hide the upload message
  document
    .querySelector(".cancel-alert-button")
    .addEventListener("click", function () {
      document.querySelector(".cannot-upload-message").style.display = "none";
    });
</script>



<script>
  $("#addlead10").formValidation({
    framework: "bootstrap",
    fields: {
      code: {
        validators: {
          notEmpty: {
            message: "This field is required",
          },
        },
      },
      sku_code: {
        validators: {
          notEmpty: {
            message: "This field is required",
          },
        },
      },
      sale_price: {
        validators: {
          notEmpty: {
            message: "This field is required",
          },
        },
      },
      units: {
        validators: {
          notEmpty: {
            message: "This field is required",
          },
        },
      },
    },
  }).on('success.form.fv', function (e) {
    e.preventDefault();
    var form = document.querySelector('#addlead10');
    var formData = new FormData(form);
    $.ajax({
      type: 'POST',
      url: '<?= base_url() ?>/Purchase/saveItem/0',
      data: formData,
      cache: false,
      contentType: false,
      processData: false, // serializes the form's elements.
      dataType: 'json',
      success: function (result) {
        toastr.success('Item Added successfully!', 'Success');
        $('#modal_md').modal('hide');
        getItem();
      }
    });
  });
</script>
<!--upload-files-->

<script>
  function getsub(id) {
    $.ajax({
      type: 'POST',
      url: '<?= base_url() ?>/Purchase/getsub/' + id,
      dataType: 'json',
      success: function (result) {
        $('#sub_group').html(result);
        $('.selectpicker').selectpicker('refresh');
      }
    });
  }
  function taxchange(val) {
    if (val == '') {
      $('#tax_2').prop("disabled", true);
      $('#tax_2').val("");
      $('.selectpicker').selectpicker('refresh');
    } else {
      $('#tax_2').removeAttr("disabled");
      $('.selectpicker').selectpicker('refresh');
    }
  }
  var dropZone = document.querySelector('#drop-zone');
  var inputElement = document.querySelector('#myfile');
  var img = document.querySelector('img');
  var p = document.querySelector('.dropfile');
  var fileNameElement = document.querySelector('.file-name');
  var deleteButton = document.querySelector('#deleteBtn');

  inputElement.addEventListener('change', function (e) {
    var file = this.files[0];
    if (file) {
      img.style.display = "block";
      p.style.display = 'none';
      fileNameElement.textContent = file.name;
      deleteButton.style.display = 'inline-block';

      var reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onloadend = function () {
        var src = this.result;
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
    var file = e.dataTransfer.files[0];
    // p.style.display = 'none';

    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onloadend = function () {
      e.preventDefault();
      p.style.display = 'none';
      fileNameElement.textContent = file.name;
      deleteButton.style.display = 'inline-block';

      var src = this.result;
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
<!-- tooltip -->
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>