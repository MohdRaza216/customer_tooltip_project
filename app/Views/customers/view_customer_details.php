<div class="card shadow-sm rounded-3 p-3 fade-in">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Customer Details</h5>
        <button class="btn btn-sm btn-danger" id="closeDetails"><i class="bi bi-x-circle"></i> Close</button>
    </div>
    <div class="">
        <p><i class="bi bi-person me-2 text-primary"></i><strong>Name:</strong> <?= esc($customer['name']) ?></p>
        <p><i class="bi bi-building me-2 text-success"></i><strong>Company:</strong>
            <?= esc($customer['company_name']) ?></p>
        <p class="text-wrap">
            <i class="bi bi-geo-alt me-2 text-warning"></i><strong>Address:</strong> <?= esc($customer['address']) ?>
        </p>
        <p><i class="bi bi-receipt me-2 text-info"></i><strong>GST:</strong> <?= esc($customer['gst_number']) ?></p>
        <p><i class="bi bi-telephone me-2 text-danger"></i><strong>Mobile:</strong>
            <?= esc($customer['mobile_number']) ?></p>
        <p class="text-wrap">
            <i class="bi bi-stickies me-2 text-secondary"></i><strong>Description:</strong>
            <?= esc($customer['description']) ?>
        </p>
    </div>

</div>