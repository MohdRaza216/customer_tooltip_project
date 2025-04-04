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
    <div class="container mt-5">
        <h2>Customer List</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Mobile</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                    <tr>
                        <td>
                            <span class="customer-tooltip" data-customer-id="<?= $customer['id']; ?>"
                                data-bs-toggle="popover" data-bs-trigger="hover focus" title="<?= $customer['name'] ?>"
                                style="cursor: pointer;">
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

    <script>
        $(document).ready(function () {
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
                    $.get(`/customer_tooltip_project/public/customers/getTooltip/${id}`, function (data) {
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
                }, 200);
            });

            $(document).on('mouseleave', '.customer-tooltip', function () {
                setTimeout(function () {
                    if (!$('.popover-hover').length) {
                        $('.customer-tooltip').popover('hide');
                    }
                }, 200);
            });
        });
    </script>
</body>

</html>