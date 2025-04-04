
$('#newCustomer').formValidation({
  framework: 'bootstrap',
  fields: {
    company: {
      validators: {
        notEmpty: {
          message: 'This field is required'
        }
      }
    },
    email: {
      validators: {
        notEmpty: {
          message: 'This field is required'
        }
      }
    },
    mobile_number: {
      validators: {
        notEmpty: {
          message: 'This field is required'
        }
      }
    }
  }
}).on('success.form.fv', function (e) {
  e.preventDefault();
  var form = this;
  var formData = new FormData(form);
  $.ajax({
    type: 'POST',
    url: form.action,
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    dataType: 'json',
    success: function (result) {
      if (result.sts) {
        toastr.success('Customer successfully!', 'Success');
        $('select[name="customer_id"]').load(result.url, function () {
          $('select[name="customer_id"]').selectpicker('refresh');
        });
        form.reset();
      } else {
        toastr.error('Oops! something went wrong', 'Error');
      }
      $('#addCustomer').modal('hide');
    }
  });
});

//--------------------
$('#user-icon').click(function () {
  $(".accordion-content").show();
});

$('input[id="shipAddress"]').change(function () {
  if (this.checked) {
    $(".accordion-content").show();
  } else {
    $(".accordion-content").hide();
  }
});

// to set today date in input type="date"
$(function () {
  $('[name="quantity_unit"]').change(function () {
    $('#changeQty').text(this.value);
  });

});

// Initialize Sortable for the table body
const tbody = document.querySelector("#items-table #items_body2");
const sortable = new Sortable(tbody, {
  animation: 150,
  ghostClass: "sortable-ghost",
  handle: ".handle-icon",
});
//---------------------


// modal script for bill and items

function showBillModal() {
  $('#billEditModal').modal('show', {
    backdrop: 'true'
  });
}

function ApplyAddress() {
  const bill = {
    street: $('#bill_street').val(),
    city: $('#bill_city').val(),
    state: $('#bill_state').val(),
    country: $('#bill_country').val(),
    zipcode: $('#bill_zipcode').val()
  };

  const ship = {
    street: $('#ship_street').val(),
    city: $('#ship_city').val(),
    state: $('#ship_state').val(),
    country: $('#ship_country').val(),
    zipcode: $('#ship_zipcode').val()
  };

  $('#bStreet').text(`${bill.street || '--'}`);
  $('#bCityState').text(`${bill.city || '--'}, ${bill.state || '--'}`);
  $('#bzipcode').text(`${bill.country || '--'}, ${bill.zipcode || '--'}`);

  $('#sStreet').text(`${ship.street || '--'}`);
  $('#sCityState').text(`${ship.city || '--'}, ${ship.state || '--'}`);
  $('#szipcode').text(`${ship.country || '--'}, ${ship.zipcode || '--'}`);

  $('#billEditModal').modal('hide');

  // Store address in hidden input fields
  $('input[name="bill_address"]').val(`${bill.street},${bill.city},${bill.state},${bill.country},${bill.zipcode}`);
  $('input[name="ship_address"]').val(`${ship.street},${ship.city},${ship.state},${ship.country},${ship.zipcode}`);
}

//  script to get billing and shipping address from server -  written by DJ
function getBillAndShipAddress(url, customerId) {
  if (customerId != '' && customerId != 'add_new_customer') {
    $.ajax({
      url: url + '/' + customerId,
      type: 'POST',
      dataType: 'json',
      processData: false,
      contentType: false,
      success: function (result) {
        const billing = result['billing'];
        const shipping = result['shipping'];

        if (billing) {
          //to set billing and shipping value of customer to span elemnt
          $('#bStreet').text(`${billing['street'] || '--'}`);
          $('#bCityState').text(`${billing['city'] || '--'}, ${billing['state'] || '--'}`);
          $('#bzipcode').text(`${billing['country'] || '--'}, ${billing['zipcode'] || '--'}`);
          $('#sStreet').text(`${shipping['street'] || '--'}`);
          $('#sCityState').text(`${shipping['city'] || '--'}, ${shipping['state'] || '--'}`);
          $('#szipcode').text(`${shipping['country'] || '--'}, ${shipping['zipcode'] || '--'}`);

          //to set billing and shipping value of customer to edit modal
          $('#bill_street').val(`${billing['street']}`);
          $('#bill_city').val(`${billing['city']}`);
          $('#bill_state').val(`${billing['state']}`);
          $('#bill_zipcode').val(`${billing['zipcode']}`);
          $('select#bill_country').selectpicker('val', `${billing['country']}`);
          $('#ship_street').val(`${shipping['street']}`);
          $('#ship_city').val(`${shipping['city']}`);
          $('#ship_state').val(`${shipping['state']}`);
          $('#ship_zipcode').val(`${shipping['zipcode']}`);
          $('select#ship_country').selectpicker('val', `${shipping['country']}`);

          //to send address to server stored in hidden input
          $('input[name="bill_address"]').val(`${billing['street']},${billing['city']},${billing['state']},${billing['country']},${billing['zipcode']}`);
          $('input[name="ship_address"]').val(`${shipping['street']},${shipping['city']},${shipping['state']},${shipping['country']},${shipping['zipcode']}`);
        } else {
          emptyAddressField();
        }
        
        const currency = result['currency'];
        if(currency){
            // console.log(currency);
            $('select[name="currency"]').selectpicker('val', `${currency['id']}`);
            $('span.currency_symbol').html(currency.symbol);
        }else{
            $('select[name="currency"]').selectpicker('val', '');
            $('span.currency_symbol').html('₹');
        }
        
      }
    });
  } else if (customerId == '') {
    emptyAddressField();
  } else if (customerId == 'add_new_customer') {
    $('#addCustomer').modal('show', {
      backdrop: 'true'
    });
    emptyAddressField();
  } else {
    console.log(`${customerId} is Wrong option value`);
  }
}
// to empty all address filelds
function emptyAddressField() {
  const fields = ['#bStreet', '#bCityState', '#bzipcode', '#sStreet', '#sCityState', '#szipcode'];
  fields.forEach(field => $(field).text('--'));
  $('#bill_street, #bill_city, #bill_state, #bill_zipcode, #ship_street, #ship_city, #ship_state, #ship_zipcode').val('');
  $('select#bill_country, select#ship_country').selectpicker('val', '');
  $('input[name="billing_address"],input[name="shipping_address"]').val('');
}

// function to get item info from server 
function fetchItem(url, itemId) {
  if (itemId) {
    $.ajax({
      type: "GET",
      url: url + '/' + itemId,
      dataType: "json",
      success: function (response) {
        fillItemInfo(response);
      }
    });
  }
}

function fillItemInfo(item) {
  const mainRow = $('#items-table > #items_body > #main_row');
  const itemDesc = mainRow.find('#item_description');
  // const itemLongDesc = mainRow.find('#item_long_description');
  const itemUnit = mainRow.find('#item_unit');
  const itemRate = mainRow.find('#item_rate');

  itemDesc.val(item.item_name);
  // itemLongDesc.val(item.long_description);
  itemUnit.val(item.unit);
  itemRate.val(item.price);

  $('select#item_no_tax').selectpicker('val', item.tax.split(','));
}

function pushItem() {
  const mainRow = $('#items-table > #items_body > #main_row');
  const itemDesc = mainRow.find('#item_description').val();
  const itemLongDesc = mainRow.find('#item_long_description').val();
  const itemQt = mainRow.find('#item_quantity').val();
//   const itemUnit = mainRow.find('#item_unit').val();
  const itemRate = mainRow.find('#item_rate').val();
  const itemTax = mainRow.find('#item_no_tax').val();

  if (itemDesc || itemLongDesc) {
    let item = {
      description: itemDesc,
      long_description: itemLongDesc,
      quantity: itemQt,
      rate: itemRate,
      tax: itemTax
    }
    appendItem(item);
    $('#item_description,#item_long_description,#item_rate').val('');
    $('#item_quantity').val(1);
    $('#add-new-item,#item_no_tax').selectpicker('val', '');
    $('#no-item-alert').addClass('hide');
  }
}

// remove reom line 315-- <button class="btn btn-danger pull-left  table-button removeTR"><i class="fa fa-trash"></i></button>

function appendItem(item) {
  const tr = `<tr class="childRow">
                <td class="handle-icon">
                  <i class="bi bi-grip-vertical"></i>
                </td>
                <td class="purchasegrp purch-drop">
                  <input type="text" name="description[]" value="${item.description}"placeholder="Item Name" class="form-control no-border" />
                </td>
                <td><input type="text" name="hsn_sac[]" value="${item.long_description}" placeholder="HSN / SAC" class="form-control no-border" /></td>
                <td>
                  <input type="number" oninput="setAmount(event)" name="quantity[]" value="${item.quantity}" min="1" step="0.01" class="blacktdinp form-control no-border">
                </td>
                <td><input type="number" oninput="setAmount(event)" name="rate[]" value="${item.rate}" min="1" step="0.01" placeholder="Rate" class="blacktdinp form-control no-border"></td>
                <td class="purch-drop">
                  ${getSelectElement(item.tax)}
                </td>
                <td class="amounttdalign">
                <input type="hidden" name="amount[]" value="" ><span class="amtext"></span>
                <input type="hidden" name="tax_amount[]" value="0.00" >
                </td>
                <td class="check-mark">
                  <i class="bi bi-x-circle text-danger removeTR fscchan ml-2"></i> 
                </td>
              </tr>`;

  $('#items-table > #items_body2').append(tr);
  $('.selectpicker').selectpicker('refresh');
  $('input[name="quantity[]"]').trigger('input');
}
// remove tr from item table
$(document).on('click', '.removeTR', function () {
  $(this).closest('.childRow').remove();
  setSubTotal();
});

function setAmount(e) {
  const row = e.target.closest('.childRow');
  const quantityInput = parseFloat(row.querySelector('[name="quantity[]"]').value);
  const rateInput =parseFloat(row.querySelector('[name="rate[]"]').value);

  const quantity = isNaN(quantityInput)? 0 : quantityInput;
  const rate = isNaN(rateInput)? 0 : rateInput;
  const amount = (quantity * rate).toFixed(2);

  row.querySelector('[name="amount[]"]').value = amount;
  row.querySelector('.amtext').innerText = amount;
  
  setTax();
}

function setTax() {
//   const selectInput = e.currentTarget;
  const allTaxSelect = document.querySelectorAll('select#taxes');
  const selectArray = Array.from(allTaxSelect);

  selectArray.forEach(function(el){
      setTx(el)
  });
  
  function setTx(selectInput){
      const tableRow = selectInput.closest('.childRow');
      let itemAmount = parseFloat(tableRow.querySelector('[name="amount[]"]').value);
      const taxIds = Array.from(selectInput.selectedOptions, option => option.value);
      
      const inputValue = isNaN(parseFloat(document.querySelector('#discount-input').value))? 0 : parseFloat(document.querySelector('#discount-input').value);
      const selectValue = document.querySelector('#discount-select').value;
      const discountType = document.querySelector('[name="discount_type"]').value;
      if (discountType == 'Before Tax') {
        itemAmount = (selectValue == 'pc') ? (itemAmount *(1 - (inputValue / 100))) : itemAmount - inputValue;
      }
      
      let taxAmount = 0;
      for (const tax of tax_array) {
        if (taxIds.includes(tax.id)) {
          taxAmount += itemAmount * (Number(tax.percentage) / 100);
        }
      }
    
      tableRow.querySelector('[name="tax_amount[]"]').value = taxAmount.toFixed(2);
      $(selectInput).closest('td').find('input[name="tax[]"]').val($(selectInput).val());
          
  }
  setSubTotal();
}

function setSubTotal() {
  const allAmountInput = document.querySelectorAll('[name="amount[]"]');
  let subTotal = 0;
  for (const amountInput of allAmountInput) {
    subTotal += parseFloat(amountInput.value);
  }
  document.querySelector('[name="subTotal"]').value = subTotal.toFixed(2);
  document.querySelector('#show_subtotal').innerHTML = subTotal.toFixed(2);
  setTaxTotal();
  setDiscount();
  setTotal();
}

function setTaxTotal() {
  const allAmountInput = document.querySelectorAll('[name="tax_amount[]"]');
  let taxTotal = 0;
  for (const amountInput of allAmountInput) {
    taxTotal += parseFloat(amountInput.value);
  }
  document.querySelector('[name="taxTotal"]').value = taxTotal.toFixed(2);
  document.querySelector('#show_taxtotal').innerHTML = taxTotal.toFixed(2);
  setTotal();
}

function setDiscount(e) {
  const inputValue = isNaN(parseFloat(document.querySelector('#discount-input').value))? 0 : parseFloat(document.querySelector('#discount-input').value);
  const selectValue = document.querySelector('#discount-select').value;
  const subTotal = isNaN(parseFloat(document.querySelector('[name="subTotal"]').value)) ? 0: parseFloat(document.querySelector('[name="subTotal"]').value);
  const taxTotal = isNaN(parseFloat(document.querySelector('[name="taxTotal"]').value)) ? 0: parseFloat(document.querySelector('[name="taxTotal"]').value) ;
  const discountType = document.querySelector('[name="discount_type"]').value;

  const setDiscountTotal = (selectValue, inputValue, subTotal, taxTotal) => {
    let discountTotal = (selectValue == 'pc') ? ((subTotal + taxTotal) * (inputValue / 100)) : inputValue;
    document.querySelector('[name="discountTotal"]').value = discountTotal.toFixed(2);
    document.querySelector('#show_discount').innerHTML = discountTotal.toFixed(2);
    setTotal();
  }

  if (discountType == 'No Discount') {
    document.querySelector('#discount-input').value = 0;
    setDiscountTotal(selectValue, 0, subTotal, 0);
    // (e.currentTarget == document.querySelector('#discount-input')) ? alert('please select discount type in advanced option') : false;
  } else if (discountType == 'After Tax') {
    setDiscountTotal(selectValue, inputValue, subTotal, taxTotal);
  } else if (discountType == 'Before Tax') {
    setDiscountTotal(selectValue, inputValue, subTotal, 0);
  } else {
    console.log('something is wrong');
  }
}

function setAdjustment() {
  const inputValue = parseFloat(document.querySelector('#adjustment-input').value);
  let adj_value = isNaN(inputValue)? 0: inputValue;
  document.querySelector('[name="adjustmentTotal"]').value = adj_value.toFixed(2);
  document.querySelector('#show_adjustment').innerHTML = adj_value.toFixed(2);
  setTotal();
}

function setShipCharge() {
  const inputValue = parseFloat(document.querySelector('#ship-input').value);
  let ship_value = isNaN(inputValue)? 0: inputValue;
  document.querySelector('[name="shipChargeTotal"]').value = ship_value.toFixed(2);
  document.querySelector('#show_shipcharge').innerHTML = ship_value.toFixed(2);
  $(document.querySelector('select[id="ship_tax_select"]')).change();
}

function setShipTax(element){
    const all_tax = $(element).val();
    const ship_charge = parseFloat(document.querySelector('#ship-input').value);
    const total_ship_charge = parseFloat(document.querySelector('[name="shipChargeTotal"]').value);
    const ship_amount = (isNaN(parseFloat(ship_charge)))? 0: ship_charge;
    

    let total_tax = 0;
    all_tax.forEach(function(tax){
      total_tax += ship_amount *  ((parseFloat(tax))/100);
    });

    document.querySelector('[name="shipChargeTotal"]').value = (ship_amount + total_tax).toFixed(2);
    document.querySelector('#show_shipcharge').innerHTML = (ship_amount + total_tax).toFixed(2);
    setTotal();
  }

function setTotal() {
  const subTotal = parseFloat(document.querySelector('[name="subTotal"]').value);
  const discountTotal = parseFloat(document.querySelector('[name="discountTotal"]').value);
  const taxTotal = parseFloat(document.querySelector('[name="taxTotal"]').value);
  const adjustmentTotal = parseFloat(document.querySelector('[name="adjustmentTotal"]').value);
  const shipChargeTotal = parseFloat(document.querySelector('[name="shipChargeTotal"]')?.value ?? 0);
  let total = (subTotal - discountTotal) + taxTotal + adjustmentTotal +shipChargeTotal;
  document.querySelector('[name="total"]').value = total.toFixed(2);
  document.querySelector('#show_total').innerHTML = total.toFixed(2);

}

function sendData(formElement, successCallback = null) {
  const url = formElement.action;
  const formData = new FormData(formElement);
  
  let success = (successCallback !== null)? successCallback : function (response) {
      if (response.isSuccess) {
        toastr.success('Success');
      } else {
        toastr.error('Oops! Something went wrong');
      }
    };
  
  $.ajax({
    type: "POST",
    url: url,
    data: formData,
    processData: false,
    contentType: false,
    cache: false,
    dataType: "json",
    success: success
  });
}

 $('input[id="discount-input"]').on('input',function(){
        let dinput = parseFloat(this.value);
        if($('select[name="discount_type"]').val() == 'No Discount'){
            alert('please select discount type in advanced option')
        }
        if($('select[id="discount-select"]').val() == 'pc' && dinput >100){
            this.value = 100;
            $(this).trigger('input');
            alert('Discount must be less than or equal to 100%');
        }
        if($('select[id="discount-select"]').val() == 'fa' && dinput > parseFloat($('input[name="subTotal"]').val())){
            this.value = parseFloat($('input[name="subTotal"]').val());
            alert('Discount must be less than or equal to Subtotal');
            $(this).trigger('input');
        }
        
        setTax();
    });
    
 $('select[name="discount_type"]').change(function(){
        setTax();
    });
    
 $('select[name="currency"]').change(function(){
        let symbol = $('select[name="currency"] option:selected').data('subtext');
        if(symbol != ''){
            $('span.currency_symbol').html(symbol);
        }else{
            $('span.currency_symbol').html('₹');
        }
  });
    
 $('input[id="adjustment-input"]').on('input',function(){
     let dinput = parseFloat(this.value);
        if(dinput > parseFloat($('input[name="subTotal"]').val())){
            this.value = parseFloat($('input[name="subTotal"]').val());
            $(this).trigger('input');
            alert('Adjacement must be less than or equal to Subtotal');
        }
    });
    
    $('select[id="bill_country"]').change(function(){
        let isIndia = $(this).val();
        if(isIndia.toLowerCase() == 'india'){
            $('input#bill_state').val('Tamil Nadu');
        }else{
            $('input#bill_state').val('');
        }
  });
  $('select[id="ship_country"]').change(function(){
        let isIndia = $(this).val();
        if(isIndia.toLowerCase() == 'india'){
            $('input#ship_state').val('Tamil Nadu');
        }else{
            $('input#ship_state').val('');
        }
  });