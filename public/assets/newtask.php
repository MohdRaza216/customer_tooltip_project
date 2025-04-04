<style>
  .drag-file-area {
    border: 2px dashed #ced4da !important;
    border-radius: 9px;
    margin: 10px 0 15px;
    padding: 0px 50px 0px 50px;
    width: 100%;
    height: 174px;
    text-align: center !important;
    justify-content: center !important;
    box-shadow: 2px 5px 20px -5px rgba(0, 0, 0, 0.2);
  }

  .drag-file-area .upload-icon {
    font-size: 40px;
    color: #6c757d;
  }

  .drag-file-area h3 {
    font-size: 23px;
    margin: 5px 0;
  }

  .drag-file-area label {
    font-size: 15px;
    display: inline !important;
  }

  @media (min-width: 992px) {

    .modal-lg,
    .modal-xl {
      max-width: 992px;
    }
  }
</style>





<form id="task-form" action="<?= site_url('tasks/new-task') ?>">
  <input type="hidden" name="com_id" value="<?= session('login')['com_id'] ?>">



  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <div class="purchasegrp">
            <label for="subject" class="control-label"><span class="aster">*</span> Task Name</label>
            <input type="text" name="subject" id="subject" placeholder="Enter Task" class="form-control purchaseselects">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">


          <div class="purchasegrp">
            <label for="tags" class="purchaseinfo"> <i class="fa fa-tag"></i>&nbsp;Tags - select Projects, users, customers, vendors & more..</label>
            <div class=" dropdown-with-icon dropdownalignment">
              <select name="tags[]" class="selectpicker" multiple placeholder="tag" data-actions-box="true" data-live-search="true">
                <?php if (!empty($tags)) : ?>
                  <?php foreach ($tags as $tag) : ?>
                    <option value="<?= $tag->id ?>">
                      <?= $tag->name ?>
                    </option>
                  <?php endforeach ?>
                <?php endif ?>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-6 pe-3">

      <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
      <!-- Added overlay div -->
      <div class="overlay" id="overlay">
        <i class="fa-solid fa-cloud-arrow-up" aria-hidden="true"></i>
        Drop your files here...
        <span class="corner-symbol symbole-top-left">L</span>
        <span class="corner-symbol symbole-bottom-left">L</span>
        <span class="corner-symbol symbole-top-right">L</span>
        <span class="corner-symbol symbole-bottom-right">L</span>
      </div>
      <div class="upload-files-container" style="background: none;">
        <div class="drag-file-area">
          <span class="material-icons-outlined upload-icon"> file_upload
          </span>
          <h3 class="dynamic-message" style="color: #6c757d;">Drag &amp; drop
            any
            file here</h3>

          <label class="label">

            <span class="browse-files">
              <input type="file" class="default-file-input">
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

  <div class="row">
    <div class="col-md-12">
      <div class="purchasegrp">
        <label for="exampleFormControlTextarea1" class="purchaseinfo ">Explain Briefly</label>
        <textarea id="your_summernote" name="description"></textarea>
      </div>
    </div>
  </div>


  <div class="accordion custom-accordionwithicon-plus acc-item1" id="accordionWithplusicon1">
    <div class="accordion-item borsin ">
      <h2 class="accordion-header" id="accordionwithplusExample14">
        <button class="accordion-button tbbl-contain collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accor_plusExamplecollapse14" aria-expanded="false" aria-controls="accor_plusExamplecollapse14">
          Advanced Options<!--<sup><span class="notification-span">1</span> </sup>-->
        </button>
      </h2>
      <div id="accor_plusExamplecollapse14" class="accordion-collapse collapse " aria-labelledby="accordionwithplusExample14" data-bs-parent="#accordionWithplusicon1">
        <div class="accordion-body">
          <!-- <div class="row ">
            <div class="col-md-8 mb-2 ">
              <div class="checkbox able">
                <input type="hidden" name="is_public" value="0">
                <input type="checkbox" id="public" name="is_public" class="form-check-input cbx" value="1">
                <label class="mtchan" for="public"> Public </label>
              </div>
              <div class="checkbox ms-3">
                <input type="hidden" name="is_billable" value="0">
                <input type="checkbox" id="billable" name="is_billable" class="form-check-input cbx" value="1" checked>
                <label for="billable"> Billable</label>
              </div>
            </div>
            <hr class="fileline">

          </div> -->
          <div class="row">
            <div class="col-md-6">
              <div class="purchasegrp">
                <label for="rate" class="control-label">Estimated Value</label>
                <input type="text" name="hourly_rate" value="0" id="rate" class="form-control purchaseselects">
              </div>
            </div>

            <div class="col-md-6">
              <div class="purchasegrp ">
                <label for="unitname" class="contractselect pb-1">Manage Users</label>
                <div class=" dropdown-with-icon dropdownalignment">
                  <select name="assignees[]" class="selectpicker" data-live-search="true" data-actions-box="true" multiple>
                    <?php if (!empty($staffs)) : ?>
                      <?php foreach ($staffs as $staff) : ?>
                        <option <?= ($staff->id == session('login')['id']) ? 'selected' : '' ?> value="<?= $staff->id ?>">
                          <?= $staff->first_name . " " . $staff->last_name ?>
                        </option>
                      <?php endforeach ?>
                    <?php endif ?>
                  </select>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="purchasegrp">
                <label class="control-label"><span class="aster">*</span> From Date</label>
                <input type="date" id="date1" name="start_date" value="<?= date('Y-m-d') ?>" class="form-control purchaseselects">
              </div>
            </div>
            <div class="col-md-6">
              <div class="purchasegrp">
                <label class="control-label">To Date</label>
                <input type="date" id="date2" value="<?= date('Y-m-d') ?>" name="end_date" class="form-control purchaseselects">
              </div>
            </div>
          </div>
          <div class="row">
            <!-- <div class="col-md-6">
              <div class="purchasegrp purch-drop">
                <label class="contractselect pb-2">Priority</label>
                <select name="priority" class="selectpicker form-control" data-live-search="true" data-none-selected-text="choose priority">
                  <option value="1">Low</option>
                  <option value="2">Medium</option>
                  <option value="3">High</option>
                  <option value="4">Urgent</option>
                </select>
              </div>
            </div> -->
            <div class="col-md-6">
              <div class="purchasegrp purch-drop">
                <label class="contractselect pb-1">Repeat every</label>
                <select name="repeat_every" id="repeat_every" class="selectpicker form-control" data-live-search="true" data-none-selected-text="None selected">
                  <option value="" selected>No Repeat</option>
                  <option value="1-week">Week</option>
                  <option value="2-week">2 Weeks</option>
                  <option value="1-month">1 Month</option>
                  <option value="2-month">2 month</option>
                  <option value="3-month">3 month</option>
                  <option value="6-month">6 month</option>
                  <option value="1-year">1 Year</option>
                  <option value="custom">Custom</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="purchasegrp">
                <label for="unitname" class="purchaseinfo mb-1">Manage Checklist </label>
                <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
                  <select name="checklist_items[]" class="selectpicker form-control" multiple data-actions-box="true" data-live-search="true" placeholder="Manage Checklist ">
                    <option value="1">magrove cleareed</option>
                    <option value="2">paint today</option>
                    <option value="3">PLANTA</option>
                    <option value="4">test</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="row" id="tutorial" style="display:none;">
            <div class="col-md-6 ">
              <input type="number" name="repeat_every_custom" min="1" value="1" class="form-control purchaseselects">
            </div>
            <div class="col-md-6">
              <div class="purchasegrp">
                <select name="repeat_type_custom" class="selectpicker form-control">
                  <option value="day">Day(s)</option>
                  <option value="week">Week(s)</option>
                  <option value="month">Month(s)</option>
                  <option value="year">Year(s)</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row" id="tutorial2" style="display:none;">
            <div class="col-md-12">
              <div class="purchasegrp">
                <div class="col-md-12">
                  <div class="form-group m-0">
                    <label class="contractselect">Total Cycles</label>
                    <div class="input-group">
                      <input type="number" id="checkinpt" name="cycles" value="0" disabled class="form-control purchaseselects">
                      <button class="btn shadow-none add_more_attachments" type="button" style="border: 1px solid #aaaaaa ;margin-top: 5px;height: 36px;">
                        <input type="checkbox" checked id="cyclecheckbox">
                        <label style="font-size: 14px;">Infinity</label>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- <div class="col-md-6">
      <div class="purchasegrp purch-drop">
        <label class="contractselect pb-2">Related to</label>
        <select name="related_to" class="selectpicker form-control" placeholder="Select Related" data-live-search="true">
          <option value=""></option>
          <option value="proposal">Proposal </option>
          <option value="estimate">Estimate </option>
          <option value="invoice">Invoice </option>
          <option value="sales_order">Sales Order </option>
          <option value="delivery_challan">Delivery Challan </option>
          <option value="project">Project </option>
          <option value="expense">Expense of </option>
          <option value="contract">Contract </option>
          <option value="customer">Customer </option>
          <option value="lead">Lead </option>
        </select>
      </div>
    </div> -->

            <!-- <div class="col-md-6">
              <div class="purchasegrp purch-drop">
                <label class="contractselect pb-2">Expense of</label>
                <select name="rel_id" class="selectpicker form-control" data-live-search="true" data-none-selected-text="None selected">

                </select>
              </div>
            </div> -->
          </div>

          <!-- <div class="row"> -->


          <!-- <div class="col-md-6">
              <div class="purchasegrp">
                <label for="unitname" class="contractselect pb-2">Monitors</label>
                <div class=" dropdown-with-icon dropdownalignment">
                  <select name="followers[]" class="selectpicker" data-live-search="true" data-none-selected-text="None selected" placeholder="Select Followers" multiple>
                    <?php if (!empty($staffs)) : ?>
                      <?php foreach ($staffs as $staff) : ?>
                        <option value="<?= $staff->id ?>">
                          <?= $staff->first_name . " " . $staff->last_name ?>
                        </option>
                      <?php endforeach ?>
                    <?php endif ?>
                  </select>
                </div>
              </div>
            </div> -->
          <!-- </div> -->

          <!-- <div class="row">
           
          </div> -->
        </div>
      </div>
    </div>
  </div>







  <!-- <div class="col-md- mt-1">
      <div class="purchasegrp">
        <label for="tags" class="purchaseinfo pb-2"><i class="fa fa-tag"></i>&nbsp;Tags</label>
        <div class=" dropdown-with-icon dropdownalignment">
          <select name="tags[]" class="selectpicker" multiple placeholder="tag">
            <?php if (!empty($tags)) : ?>
              <?php foreach ($tags as $tag) : ?>
                <option value="<?= $tag->id ?>">
                  <?= $tag->name ?>
                </option>
              <?php endforeach ?>
            <?php endif ?>
          </select>
        </div>
      </div>
    </div> -->
  </div>



  <div class="row">
    <div class="col-md-12 blkftr">
      <div class="modal-footer taskfooter">
        <button type="button" class="taskclose1" data-bs-dismiss="modal">CLOSE</button>
        <button type="submit" style="margin-right: 0px;" class="tasksave1">SAVE</button>
      </div>
    </div>
  </div>
</form>

<!--text description-->
<script>
  $('#repeat_every').change(function() {
    let seletedValue = $(this).val();
    if (seletedValue == 'custom') {
      $('#tutorial, #tutorial2').show();
    } else if (seletedValue == '') {
      $('#tutorial, #tutorial2').hide();
    } else {
      $('#tutorial').hide();
      $('#tutorial2').show();
    }
  });

  $('#cyclecheckbox').change(function() {
    if (this.checked) {
      $('#checkinpt').attr('disabled', true);
    } else {
      $('#checkinpt').removeAttr('disabled');
    }
  });
</script>

<script>
  $('#your_summernote').summernote({
    placeholder: 'Description',
    tabsize: 2,
    height: 100
  });
</script>

<script>
  $('#task-form').formValidation({
    framework: 'bootstrap',
    fields: {
      subject: {
        validators: {
          notEmpty: {
            message: 'This field is required.'
          }
        }
      },
      start_date: {
        validators: {
          notEmpty: {
            message: 'This field is required.'
          }
        }
      }
    }
  }).on('success.form.fv', function(e) {
    console.log(e, 'e')
    e.preventDefault();
    var url = this.action;
    var formData = new FormData(this);
    $.ajax({
      type: 'POST',
      url: url,
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      dataType: 'json',
      success: function(result) {
        if (result.isSuccess) {
          toastr.success('Task added successfully!', 'Success');
          $('#task_modal').modal('hide');
          $("#task-table").DataTable().ajax.reload();
        } else {
          toastr.error('Something went wrong!', 'Error');
        }
      }
    });
  });
</script>

<script>
  $(document).ready(function() {
    $("#add_btn").click(function() {
      $("#parent").append('<div id="coldiv" class="col-md-12"><div class="chseexc"><label class="purchaseinfo mb-1">Attachment</label><div class="input-group d-flex flex-nowrap"><input type="file" name="file[]" class="file_in"><span class="input-group-addon"><button id="remove_btn" type="button" class="ctctredbtn ctctgrnbtn"><i class="fa fa-minus"></i></button></span></div></div></div>');
    });
    $(document).on('click', '#remove_btn', function() {
      $(this).closest('#coldiv').remove();
    });
  });

  $('[name="related_to"]').change(function() {
    let relatedTo = $(this).val();
    let related = $('[name="related_to"] option:selected').text();
    if (relatedTo == '') {
      $('[name="rel_id"]').closest('.col-md-6').hide();
      $('[name="rel_id"]').selectpicker('val', '');
    }
    if (relatedTo) {
      let parent = $('[name="rel_id"]').closest('.col-md-6');
      parent.find('label').text(related);
      $('[name="rel_id"]').load('<?= site_url('tasks/get-rel_id/') ?>' + relatedTo, () => {
        $('select[name="rel_id"]').selectpicker('refresh');
      })
      parent.show();
    }
  });
  $('[name="related_to"]').change();
</script>


<!--   show date picker  -->
<script>
  document.getElementById('date1').addEventListener('click', () => {
    if ('showPicker' in HTMLInputElement.prototype) {
      document.getElementById('date1').showPicker();
    }
  })
</script>
<script>
  document.getElementById('date2').addEventListener('click', () => {
    if ('showPicker' in HTMLInputElement.prototype) {
      document.getElementById('date2').showPicker();
    }
  })
</script>


<!--  upload Files -->
<script>
  var isAdvancedUpload = (function() {
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
      function(e) {
        e.preventDefault();
        e.stopPropagation();
      },
      false
    );
  });

  window.addEventListener("dragenter", function(e) {
    dragCounter++;
    showOverlay();
  });

  window.addEventListener("dragleave", function(e) {
    dragCounter--;
    if (dragCounter === 0) {
      hideOverlay();
    }
  });

  window.addEventListener("drop", function(e) {
    dragCounter = 0;
    hideOverlay();
    processFiles(e.dataTransfer.files);
  });

  if (typeof fileInput !== "undefined" && fileInput !== null) {
    // If fileInput exists, attach the event listener
    fileInput.addEventListener("change", function() {
      processFiles(fileInput.files);
    });
  }

  if (typeof dragFileArea !== "undefined" && dragFileArea !== null) {
    // If dragFileArea exists, attach the event listener
    dragFileArea.addEventListener("click", () => {
      let input = document.createElement("input");
      input.type = "file";
      input.onchange = (_this) => {
        let files = Array.from(input.files);
        processFiles(files);
      };
      input.click();
    });
  }

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

  window.removeFile = function(element) {
    let fileName = element
      .closest(".file-block")
      .querySelector(".file-name").textContent;
    allFiles = allFiles.filter((file) => file.name !== fileName); // Remove file from the array
    element.closest(".file-block").remove();
  };
  if (typeof uploadButton !== "undefined" && uploadButton !== null) {
    // If uploadButton exists, attach the event listener
    uploadButton.addEventListener("click", function() {
      // Remove the behavior that opens the file input
      // Instead, call the function to start uploading files
      uploadFiles();
    });
  }

  window.addEventListener("paste", function(e) {
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
  if (typeof uploadButton !== "undefined" && uploadButton !== null) {
    // If uploadButton exists, attach the event listener
    uploadButton.addEventListener("click", function() {
      // Remove the behavior that opens the file input
      // Instead, call the function to start uploading files
      uploadFiles();
    });
  }

  // Add a click event listener to the cancel (X) button to hide the upload message
  const cancelButton = document.querySelector(".cancel-alert-button");
  if (cancelButton) {
    // If cancelButton exists, attach the event listener
    cancelButton.addEventListener("click", function() {
      // Hide the cannot-upload-message
      const message = document.querySelector(".cannot-upload-message");
      if (message) {
        message.style.display = "none";
      }
    });
  }
</script>