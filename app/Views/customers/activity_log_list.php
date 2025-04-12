<?php if (empty($logs)): ?>
    <p>No activity found for this customer.</p>
<?php else: ?>
    <ul class="list-group list-group-flush">
        <?php foreach ($logs as $log): ?>
            <li class="list-group-item">
                <strong><?= esc($log['action']) ?></strong> - <?= esc($log['description']) ?>
                <br><small class="text-muted"><?= esc($log['created_at']) ?></small>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<script>
    $(document).ready(function () {
        $('#activityLogModal').modal('show');
    });
</script>