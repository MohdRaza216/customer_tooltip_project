<form action="" id="Add">
    <div class="row">
        <div class="col-md-6">
            <div class="purchasegrp">
                <label class="purchaseinfo"><span class=" aster">* </span>Title</label>
                <input type="text" class="form-control purchaseselects" name="title"
                    value="<?=$editcommission->title?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="purchasegrp">
                <label class="purchaseinfo"> Request By</label>
                <input type="text" class="form-control purchaseselects" name="req_by"
                    value="<?=$editcommission->req_by?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="purchasegrp">
                <label for="tags" class="purchaseinfo mb-1">Approved By</label>
                <select class="selectpicker form-control inp" data-live-search="true" title="None Selected"
                    name="app_by">
                    <option value="manager" <?=($editcommission->app_by == "manager")? "selected" :""?>>Manager</option>
                    <option value="approved_by_admin"
                        <?=($editcommission->app_by == "approved_by_admin")? "selected" :""?>>approved by admin</option>
                    <option value="hr" <?=($editcommission->app_by == "hr")? "selected" :""?>>HR</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="purchasegrp">
                <label for="tags" class="purchaseinfo mb-1">Status</label>
                <select class="selectpicker form-control inp" data-live-search="true" title="None Selected"
                    name="status">
                    <option value="pending" <?=($editcommission->status == "pending")? "selected" :""?>>Pending</option>
                    <option value="paid" <?=($editcommission->status == "paid")? "selected" :""?>>Paid</option>
                    <option value="hold" <?=($editcommission->status == "hold")? "selected" :""?>>Hold</option>
                    <option value="rejected" <?=($editcommission->status == "rejected")? "selected" :""?>>Rejected
                    </option>
                </select>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="col-md-6">
            <div class="purchasegrp">
                <label for="creationdate" class="purchaseinfo"> Request Date</label>
                <input type="date" id="dateInput" name="req_date" class="form-control purchaseselects mt-1"
                    style="margin-top: 11px;">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="purchasegrp">
            <label for="creationdate" class="purchaseinfo"> Issue Date</label>
            <input type="date" id="start_date" name="Issue_date" class="form-control purchaseselects mt-1"
                style="margin-top: 11px;">
        </div>
    </div>
    </div> -->
    <div class="row">
        <div class="col-md-6">
            <div class="purchasegrp">
                <label for="creationdate" class="purchaseinfo marginbtm"> Request Date</label>
                <input type="date" id="dateInput" name="req_date" class="form-control purchaseselects mt-1" style="margin-top: 11px;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="purchasegrp">
                <label for="creationdate" class="purchaseinfo marginbtm"> Issue Date</label>
                <input type="date" id="start_date" name="Issue_date" class="form-control purchaseselects mt-1" style="margin-top: 11px;">
            </div>
        </div>
    </div>
    <!--  -->
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="purchasegrp">
                        <label for="tags" class="purchaseinfo mb-2">Tags</label>
                        <div class=" dropdown-with-icon dropdownalignment"
                            style="border-radius:4px 0px 0px 4px;margin-top: -6px;">
                            <?php $array=explode(',',$editcommission->tags)?>
                            <select class="selectpicker multiselects" data-name="tags" multiple="multiple"
                                data-actions-box="true" data-live-search="true" title="None Selected">
                                <option value="tag1" <?=(in_array('tag1',$array))?"selected":""?>>Tag1</option>
                                <option value="tag2" <?=(in_array('tag2',$array))?"selected":""?>>Tag2</option>
                                <option value="tag3" <?=(in_array('tag3',$array))?"selected":""?>>Tag3</option>
                                <option value="tag4" <?=(in_array('tag4',$array))?"selected":""?>>Tag4</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="description mb-0">Reason</label>
                    <div class="text-area">
                        <textarea class="purchasedescription mleft textdesc mt-0" id="desc" name="reason" rows="4"
                            cols="120" value="<?=$editcommission->reason?>">
                </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div id="drop-zone" class="ms-0">
                        <img src="" alt="">
                        <p class="dropfile">Drop file or click to upload</p>
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
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="purchasegrp">
                <label for="tags" class="purchaseinfo mb-1">Commission Period</label>
                <select class="selectpicker form-control " data-live-search="true" title="None Selected"
                    name="comm_period">
                    <option value="every_day" <?=($editcommission->comm_period == "every_day")? "selected" :""?>>Every
                        Day</option>
                    <option value="every_week" <?=($editcommission->comm_period == "every_week")? "selected" :""?>>Every
                        Week</option>
                    <option value="bi_weekly" <?=($editcommission->comm_period == "bi_weekly")? "selected" :""?>>Bi
                        Weekly</option>
                    <option value="every_month" <?=($editcommission->comm_period == "every_month")? "selected" :""?>>
                        Every Month</option>
                    <option value="3_months_once"
                        <?=($editcommission->comm_period == "3_months_once")? "selected" :""?>>3 Month Once</option>
                    <option value="half_yearly" <?=($editcommission->comm_period == "half_yearly")? "selected" :""?>>
                        Half Yearly</option>
                    <option value="yearly_once" <?=($editcommission->comm_period == "yearly_once")? "selected" :""?>>
                        Yearly Once</option>
                </select>
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

<script>
$(document).ready(function() {
    $('#Add').formValidation({
            framework: 'bootstrap',
            fields: {
                title: {
                    validators: {
                        notEmpty: {
                            message: 'This field is required.'
                        }
                    }
                },
            }
        })
        .on('success.form.fv', function(e) {
            e.preventDefault();
            var form = document.querySelector('#Add');
            var dataForm = new FormData(form);

            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>/Crm/updatecommission/<?=$editcommission->id?>',
                data: dataForm,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(result) {
                    toastr.success('Added successfully', 'Success');
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                }
            });
        });
});
</script>
<script>
const dropdowns = document.querySelectorAll('.multiselects');

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
// Get today's date in the format "YYYY-MM-DD"
var today = new Date().toISOString().split('T')[0];

// Set the value of the date input field to today's date
document.getElementById('dateInput').value = today;
</script>