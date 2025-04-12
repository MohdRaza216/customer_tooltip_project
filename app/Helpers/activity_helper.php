<?php

use App\Models\ActivityLogModel;

if (!function_exists('log_activity')) {
    function log_activity($action, $entity, $entity_id, $description)
    {
        $logModel = new ActivityLogModel();
        $logModel->insert([
            'action' => $action,
            'entity' => $entity,
            'entity_id' => $entity_id,
            'description' => $description,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
