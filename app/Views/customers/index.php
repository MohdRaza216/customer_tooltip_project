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
                                data-bs-toggle="popover" data-bs-trigger="hover focus" title="Loading...">
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
            let popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
            popoverTriggerList.forEach(function (popoverTriggerEl) {
                new bootstrap.Popover(popoverTriggerEl, {
                    html: true,
                    content: 'Loading...',
                    placement: 'right',
                });
            });
        });
    </script>
</body>

</html>