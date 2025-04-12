<?php

use App\Models\ActivityLogModel;

if (!function_exists('log_activity')) {
    function log_activity(string $action, string $entity, int $entity_id, string $description)
    {
        $model = new ActivityLogModel();

        $model->insert([
            'action'      => $action,
            'entity'      => $entity,
            'entity_id'   => $entity_id,
            'description' => $description,
            'created_at'  => date('Y-m-d H:i:s')
        ]);
    }
}
