<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivityLogModel extends Model
{
    protected $table = 'activity_log';
    protected $primaryKey = 'id';
    protected $allowedFields = ['action', 'entity', 'entity_id', 'description', 'created_at'];
    public $timestamps = false;
    public function logActivity($action, $entity, $entity_id, $description)
    {
        $data = [
            'action' => $action,
            'entity' => $entity,
            'entity_id' => $entity_id,
            'description' => $description,
            'created_at' => date('Y-m-d H:i:s')
        ];
        return $this->insert($data);
    }

}
