<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Customer List</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="assets/css/toastr.min.css">

    <!-- Toastr JS -->
    <script src="assets/js/toastr.min.js"></script>

    <style>
        .popover {
            max-width: 300px;
        }

        .popover-body {
            padding: 0.75rem;
        }
    </style>
</head>

<body>
    <div class="container-fluid mt-4">
        <div class="d-flex" id="mainContainer">

            <div class="flex-grow-1 me-3" id="customerTableWrapper" style="width: 100%;">
                <h2>Customer List</h2>
                <button class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#addCustomerModal">Add
                    Customer</button>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Mobile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sr_no = 1;
                        foreach ($customers as $customer): ?>
                            <tr>
                                <td><?= $sr_no++; ?></td>
                                <td>
                                    <span class="customer-tooltip" data-customer-id="<?= $customer['id']; ?>"
                                        data-bs-toggle="popover" data-bs-trigger="hover focus"
                                        title="<?= $customer['name'] ?>" style="cursor: pointer;">
                                        <?= esc($customer['name']); ?>
                                    </span>
                                </td>
                                <td><?= esc($customer['company_name']); ?></td>
                                <td><?= esc($customer['mobile_number']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="d-none border-start ps-3" id="customerDetailsWrapper" style="width: 50%;">
                <h4>Customer Details</h4>
                <div id="customerDetailsContent">
                    <!-- Content will be loaded via AJAX -->
                </div>
            </div>
        </div>
    </div>



    <!-- Add Customer Modal -->
    <div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="addCustomerForm">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Customer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" class="form-control" required>
                            <span class="text-danger error-name"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="company">Company Name</label>
                            <input type="text" name="company" class="form-control" required>
                            <span class="text-danger error-company"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">Address</label>
                            <textarea name="address" class="form-control" required></textarea>
                            <span class="text-danger error-address"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="gst">GST Number</label>
                            <input type="text" name="gst" class="form-control">
                            <span class="text-danger error-gst"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="mobile">Mobile Number</label>
                            <input type="text" name="mobile" class="form-control" required>
                            <span class="text-danger error-mobile"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                            <span class="text-danger error-description"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Customer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- View Customer Modal -->
    <div class="modal fade" id="viewCustomerModal" tabindex="-1" aria-labelledby="viewCustomerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="viewCustomerContent">
                    <!-- Content will be loaded via AJAX -->
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $("#addCustomerForm").submit(function (e) {
                e.preventDefault();
                $(".text-danger").text("");

                let formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "<?= base_url('customers/store') ?>",
                    data: formData,
                    dataType: "json",
                    success: function (response) {
                        if (response.status === "success") {
                            toastr.success("Customer added successfully!");
                            $("#addCustomerForm")[0].reset();
                            $("#addCustomerModal").modal("hide");
                            setTimeout(() => location.reload(), 1000);
                        } else if (response.status === "error") {
                            $.each(response.errors, function (key, value) {
                                $(".error-" + key).text(value);
                            });
                        }
                    },
                    error: function () {
                        toastr.error("An error occurred while adding the customer.");
                    }
                });
            });

            $('[data-bs-toggle="popover"]').popover({
                html: true,
                content: 'Loading...',
                trigger: 'manual',
                placement: 'right',
                sanitize: false,
            });

            $(document).on('mouseenter', '.customer-tooltip', function () {
                let el = $(this);
                let id = el.data('customer-id');

                if (!el.data('loaded')) {
                    $.get("<?= base_url('customers/getTooltip/') ?>" + id, function (data) {
                        el.attr('data-bs-content', data);
                        el.data('loaded', true);
                        el.popover('dispose').popover({
                            html: true,
                            content: el.attr('data-bs-content'),
                            trigger: 'manual',
                            placement: 'right',
                            sanitize: false,
                        }).popover('show');
                    });
                } else {
                    el.popover('show');
                }
            });

            $(document).on('mouseenter', '.popover', function () {
                $(this).addClass('popover-hover');
            });

            $(document).on('mouseleave', '.popover', function () {
                $(this).removeClass('popover-hover');
                setTimeout(function () {
                    if (!$('.popover-hover').length) {
                        $('.customer-tooltip').popover('hide');
                    }
                }, 100);
            });

            $(document).on('mouseleave', '.customer-tooltip', function () {
                setTimeout(function () {
                    if (!$('.popover:hover').length) {
                        $('.customer-tooltip').popover('hide');
                    }
                }, 100);
            });

            $(document).on('click', '.viewCustomerBtn', function () {
                const customerId = $(this).data('id');

                $.get("<?= base_url('customers/view/') ?>" + customerId, function (html) {
                    $('#customerDetailsContent').html(html);
                    $('#customerDetailsWrapper').removeClass('d-none');
                    $('#customerTableWrapper').css('width', '50%');
                });

                $('.customer-tooltip').popover('hide');
            });

            $(document).on('click', '#closeDetails', function () {
                $('#customerDetailsWrapper').addClass('d-none');
                $('#customerDetailsContent').html('');
                $('#customerTableWrapper').css('width', '100%');
            });
        });
    </script>
</body>

</html>