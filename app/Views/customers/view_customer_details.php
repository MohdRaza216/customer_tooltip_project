<!-- Background Overlay -->
<div id="detailsOverlay" class="details-overlay"></div>

<!-- Customer Details Panel -->
<div class="card shadow-sm rounded-3 p-3 slide-in-right" id="customerDetailsCard"
    style="z-index: 1050; position: relative;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Customer Details</h5>
        <button class="btn btn-sm btn-danger" id="closeDetails">
            <i class="bi bi-x-circle"></i> Close
        </button>
    </div>
    <div>
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
</div>

<style>
    .slide-in-right {
        animation: slideInRight 0.4s ease-in-out;
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(100%);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .details-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 1040;
    }
</style>

<script>
    $(document).on('click', '#closeDetails', function () {
        $('#customerDetailsContainer').empty();
        $('#detailsOverlay').remove();
    });
</script>