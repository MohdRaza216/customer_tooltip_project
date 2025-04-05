<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="mb-0">Customer Details</h5>
    <button class="btn btn-sm btn-danger" id="closeDetails">Close</button>
</div>

<div>
    <p><strong>Name:</strong> <?= esc($customer['name']) ?></p>
    <p><strong>Company:</strong> <?= esc($customer['company_name']) ?></p>
    <p><strong>Address:</strong> <?= esc($customer['address']) ?></p>
    <p><strong>GST:</strong> <?= esc($customer['gst_number']) ?></p>
    <p><strong>Mobile:</strong> <?= esc($customer['mobile_number']) ?></p>
    <p><strong>Description:</strong> <?= esc($customer['description']) ?></p>
</div>
