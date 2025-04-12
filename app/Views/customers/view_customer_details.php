<!-- Customer Info Panel with Tabs -->
<div class="card shadow-sm rounded-3 p-3 slide-in-right" id="customerDetailsCard"
    style="z-index: 1050; position: relative;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Customer Details</h5>
        <button class="btn btn-sm btn-danger" id="closeDetails">
            <i class="bi bi-x-circle"></i> Close
        </button>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-tabs" id="tooltipTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#tab-details">Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="log-tab" data-bs-toggle="tab" href="#tab-activity-log">Activity Log</a>
        </li>
    </ul>

    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="tab-details">
            <p><i class="bi bi-person me-2 text-primary"></i><strong>Name:</strong> <?= esc($customer['name']) ?></p>
            <p><i class="bi bi-building me-2 text-success"></i><strong>Company:</strong>
                <?= esc($customer['company_name']) ?></p>
            <p class="text-wrap"><i class="bi bi-geo-alt me-2 text-warning"></i><strong>Address:</strong>
                <?= esc($customer['address']) ?></p>
            <p><i class="bi bi-receipt me-2 text-info"></i><strong>GST:</strong> <?= esc($customer['gst_number']) ?></p>
            <p><i class="bi bi-telephone me-2 text-danger"></i><strong>Mobile:</strong>
                <?= esc($customer['mobile_number']) ?></p>
            <p class="text-wrap"><i class="bi bi-stickies me-2 text-secondary"></i><strong>Description:</strong>
                <?= esc($customer['description']) ?></p>
        </div>
        <div class="tab-pane fade" id="tab-activity-log">
            <p>Loading activity log...</p>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#log-tab').on('click', function () {
            $.ajax({
                url: '<?= base_url('customers/getActivityLog/' . $customer['id']) ?>',
                method: 'GET',
                success: function (response) {
                    $('#tab-activity-log').html(response);
                },
                error: function () {
                    $('#tab-activity-log').html('<p>Error loading activity log.</p>');
                }
            });
        });

        $('#closeDetails').on('click', function () {
            $('#customerDetailsCard').fadeOut();
        });
    });
</script>