<form action="" id="Add1">
    <div class="row">
        <div class="col-md-6">
            <div class="purchasegrp">
                <label for="tags" class="purchaseinfo mb-1">Users</label>
                <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
                    <select class="selectpicker multiselect" data-name="user" multiple="multiple" title="Select Users" data-actions-box="true" data-live-search="true">
                        <option value="user_1">User 1</option>
                        <option value="user_2">User 2</option>
                        <option value="user_3">User 3</option>
                    </select>
                </div>
            </div>
        </div>



        <div class="col-md-6">
            <div class="purchasegrp">
                <label for="creationdate" class="purchaseinfo "> Date 2</label>
                <input type="date" id="start_date" name="date" class="form-control purchaseselects">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="purchasegrp">
                <label class="purchaseinfo">Next Visit</label>
                <input type="number" class="form-control purchaseselects nextv1" name="next_visit" placeholder="Enter Next Visit ">
            </div>
        </div>

        <div class="col-md-6">
            <div class="purchasegrp">
                <label class="purchaseinfo">Medium</label>
                <select class="form-control selectpicker" title="Select Medium " name="medium">
                    <option value="Moderate">Moderate</option>
                    <option value="Low">Low</option>
                    <option value="High">High</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="purchasegrp">
                <label class="purchaseinfo">Remarks</label>
                <input type="text" class="form-control purchaseselects" name="remarks">
            </div>
        </div>

        <div class="col-md-6">
            <div class="purchasegrp">
                <label class="purchaseinfo ">Type</label>
                <select class="form-control selectpicker nextv2" name="type" title="Select Type">
                    <option value="Lead">Lead</option>
                    <option value="Opportunity">Opportunity</option>
                    <option value="Quotation">Quotation</option>
                    <option value="Outstanding">Outstanding</option>
                    <option value="Trial">Trial</option>
                    <option value="Development">Development</option>
                    <option value="Project">Project</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="purchasegrp">
                <label class="purchaseinfo">Tags</label>
                <div class=" dropdown-with-icon dropdownalignment" style="border-radius:4px 0px 0px 4px;">
                    <select class="selectpicker multiselect" data-name="tag" multiple="multiple" data-actions-box="true" data-live-search="true">
                        <option value="Finished">Finished</option>
                        <option value="Pending">Pending</option>
                        <option value="In Progress">In Progress</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="purchasegrp">
                <label class="purchaseinfo">Status</label>
                <select class="form-control selectpicker" title="None" name="status">
                    <option value="Pending">Pending</option>
                    <option value="Approved">Approved</option>
                    <option value="Rejected">Rejected</option>
                    <option value="Cash Issued">Cash Issued</option>
                    <option value="Cas Rejected">Cash Rejected</option>
                </select>
            </div>
        </div>
    </div>
    </div>
    <div class="overlay" id="overlay">Drop your files here...</div>

    <div class="upload-files-container">
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
    <!-- <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label class="purchaseinfo ">Attachment</label>

                <div id="drop-zone">
                    <img src="" alt="">
                    <p class="dropfile">Drop file or click to upload</p>
                    <label for="myfile" class="file-input-label">
                        <input type="file" id="myfile" name="attachment">
                    </label>
                </div>
                <div class="text-container">
                    <div class="file-name"></div>
                    <button class="delete-button btn-danger" id="deleteBtn">Delete</button>
                </div>
            </div>
        </div>
    </div>
    </div> -->

    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp ">
                <label class="purchaseinfo">Expense</label>

                <div class="dropdown-with-icon">
                    <input type="text" class="form-control purchaseselects" name="expense">
                    <button type="button" id="addplusbtn" class="image-plus select-container" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><span class="input-group-addon colorlabels"><i class="bi bi-plus-lg plus-green expdrop1"></i></span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion " id="accordionExample">
        <div class="accordion-item border-0" style="background-color: #84a29024; padding-right: 15px; padding-left: 15px;">
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body accordian-container">
                    <hr class="fileline">




                    <div class="row">
                        <div class="col-md-12">
                            <div class="purchasegrp">
                                <label class="purchaseinfo">Start Time</label>
                                <input type="time" class="form-control purchaseselects" name="start_time">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="purchasegrp">
                                <label class="purchaseinfo">End Time</label>
                                <input type="time" class="form-control purchaseselects" name="end_time">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="purchasegrp">
                                <label class="purchaseinfo">Locality</label>
                                <input type="text" class="form-control purchaseselects" name="locality">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="purchasegrp">
                                <label class="purchaseinfo">Approx KM
                                </label>
                                <input type="text" class="form-control purchaseselects" name="approx">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="purchasegrp">
                                <label class="purchaseinfo">Map</label>
                                <input type="text" class="form-control purchaseselects" name="map">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="purchasegrp">
                                <label class="purchaseinfo">Attachments</label>
                                <div class="input-group d-flex flex-nowrap">
                                    <input type="file" class="chooseexcfle  nextv2" name="attachments">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 blkftr">
            <div class="modal-footer taskfooter">
                <button type="button" class="taskclose1" data-bs-dismiss="modal">
                    CLOSE
                </button>
                <button type="submit" class="tasksave1">SAVE</button>
            </div>
        </div>
    </div>
</form>
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
            inputBox.value = selectedOptions.join(',');
        });
    });
</script>
<script>
    $(document).ready(function() {

        $('#Add1').formValidation({
                framework: 'bootstrap',
                fields: {
                    notEmpty: {
                        message: ''
                    }

                }
            })
            .on('success.form.fv', function(e) {
                e.preventDefault();
                var form = document.querySelector('#Add1');
                var dataForm = new FormData(form);

                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>/Crm/savevisiting',
                    data: dataForm,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(result) {
                        if (result.isAdded) {
                            toastr.success('Added successfully', 'Success');
                            $('#modal_md').modal('hide');
                            savevisitUsers();
                        } else {
                            toastr.error('something went wrong', 'Error');
                        }
                    },

                });
            });
    });
</script>