    <div class="row ps6 vendori invtblerow_adj1 resmargininline ">
                <div class="col-md-12 ">
                    <div class="tblcontainer br4px venditmt vendorpage resmargininline">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="margin1rem fs-14 mt-2 mb-3 font14px">Vendor-Items</h5>
                            </div>
                        </div>
        
                        <hr class="fileline">
                        <form id="addform">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="purchasegrp  addd_zindandposi">
                                    <label class="purchaseinfo"><span class="aster">*</span>Vendors</label>
                                    <select class="selectpicker form-control" data-live-search="true" name="ven_id">
                                        <option value="">Non-selected</option>
                                        <?php foreach($ven as $row){?>
                                          <option value="<?=$row->id?>"><?=ucfirst($row->company)?> <?=($row->company!='')?"-":""?> <?=ucfirst($row->code)?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="purchasegrp addd_zindandposi">
                                    <label class="purchaseinfo ">Group Items</label>
                                    <select class="selectpicker form-control" data-live-search="true" name="group_id" onchange="getItems(this.value)">
                                        <option value="all">All</option>
                                        <?php foreach($group as $ro){?>
                                          <option value="<?=$ro->id?>"><?=ucfirst($ro->name)?></option>
                                        <?php }?>
                                    </select>
                                </div>
        
                            </div>
        
                            <div class="col-md-6">
                                <div class="purchasegrp">
                                    <label class="purchaseinfo ">Items</label>
                                    <select class="selectpicker form-control multiselect" multiple data-live-search="true" data-name="items" id="item_id">
                                        
                                    </select>
                                </div>
                            </div>
        
                        </div>
        
        
                        <div class="row">
                            <div class="col-md-12 blkftr ali_esolc marginbottom5px">
                                <div class="modal-footer taskfooter">
                                    <button type="submit" class="btn btn-primary tasksave1 " id="submit_button" style="margin-right: 0px !important;">Save</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
    </div>
        
    </div>
<script>
    function getItems(id)
    {
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>/Purchase/getGroupItem/'+id,
            dataType: 'json', 
            success: function(result)
            {
                $('#item_id').html(result);
                $('.selectpicker').selectpicker('refresh');
            }
        });
    }
    getItems('all');
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
        inputBox.value = selectedOptions.join(",");
      });
    });
    $("#addform").formValidation({
    framework: "bootstrap",
    fields: {
      ven_id: {
        validators: {
          notEmpty: {
            message: "This field is required",
          },
        },
      },
      group_id: {
        validators: {
          notEmpty: {
            message: "This field is required",
          },
        },
      },
    },
  }).on('success.form.fv', function(e) {
		e.preventDefault();
		var form = document.querySelector('#addform');
		var formData = new FormData(form);
		$.ajax({
      type:'POST',
      url:'<?=base_url()?>/Purchase/saveVenItem',
      data:formData,
			cache:false,
			contentType: false,
			processData: false, // serializes the form's elements.
			dataType:'json',
			success:function(result)
			{
        if(result==1)
        {
            toastr.success('Item Added successfully!','Success');
            setTimeout(()=>{window.location.href="<?=base_url()?>/vendor-item"},1500);
        }else{
            toastr.warning('Item Not Selected!','Warning');
        }
        $('#submit_button').attr("disabled",false);
        $('#submit_button').removeClass("disabled");
			}
		});
	});
</script>