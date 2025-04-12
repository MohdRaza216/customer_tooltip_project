<?php if (empty($logs)): ?>
    <p>No activity found for this customer.</p>
<?php else: ?>
    <ul class="list-group list-group-flush">
        <?php foreach ($logs as $log): ?>
            <li class="list-group-item">
                <span class="badge <?= (strpos($log['action'], 'Modal') !== false) ? 'bg-warning' : 'bg-info' ?>">
                    <?= esc($log['action']) ?>
                </span>
                - <?= esc($log['description']) ?>
                <br><small class="text-muted"><?= esc((new \DateTime($log['created_at']))->format('M d, Y - h:i A')) ?></small>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<script>
    $(document).ready(function () {
        $('#activityLogModal').modal('show');
    });
</script>