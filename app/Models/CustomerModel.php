<?php

namespace App\Models;
use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'company_name',
        'address',
        'gst_number',
        'mobile_number',
        'description'
    ];
}
