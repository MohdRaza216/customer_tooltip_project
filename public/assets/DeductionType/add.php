<form action="" id="Add">
    <div class="row">
        <div class="col-md-6">

            <div class="purchasegrp">
                <label class="purchaseinfo">Deduction Type</label>
                <input type="text" class="form-control purchaseselects" name="Deductiontype"
                    placeholder="Enter deduction type title">
            </div>
        </div>

        <div class="col-md-6">

            <div class="purchasegrp">
                <label class="purchaseinfo">Remarks</label>
                <input type="text" class="form-control purchaseselects" name="Remarks" placeholder="Type remarks here">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="purchasegrp" style="margin-top: 10px;">
                <label class="purchaseinfo">Status</label>
                <label class="switchslider">
                    <input type="hidden" name="dedType_status" value="0">
                    <input type="checkbox" name="dedType_status" value="1">
                    <span class="slider round slid_aln"></span></label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 blkftr">
            <div class="modal-footer taskfooter mgtp">
                <button type="button" class="taskclose1" data-bs-dismiss="modal">
                    CLOSE
                </button>
                <button type="submit" class="tasksave1">SAVE</button>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function ()
    {
        fetch_dedtype();
        $('#Add').formValidation({
            framework: 'bootstrap',
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'This feild is required'
                        }
                    }
                },
            }
        })

            .on('success.form.fv', function (e)
            {
                e.preventDefault();
                var form = document.querySelector('#Add');
                var dataForm = new FormData(form);
                console.log(dataForm);
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>/Payroll/DeductionType/add_dedTyp',
                    data: dataForm,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function (result)
                    {

                        toastr.success('Added successfully', 'Success');
                        $('#modal_md').modal('hide');
                        fetch_dedtype();
                    }
                });
            });
    });

</script>