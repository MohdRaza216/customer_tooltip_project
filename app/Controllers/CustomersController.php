<?php

namespace App\Controllers;
use App\Models\CustomerModel;

class CustomersController extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();
        $data['customers'] = $customerModel->findAll();

        return view('customers/index', $data);
    }

    public function getTooltip($id)
    {
        $customerModel = new CustomerModel();
        $customer = $customerModel->find($id);

        if (!$customer) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Customer not found!']);
        }

        return '
        <ul class="nav nav-tabs" id="customerTabs">
            <li class="nav-item">
                <a class="nav-link active" id="info-tab" data-bs-toggle="tab" href="#info-' . $id . '">Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="note-tab" data-bs-toggle="tab" href="#note-' . $id . '">Note</a>
            </li>
        </ul>
        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="info-' . $id . '">
                <p><strong>Company:</strong> ' . esc($customer['company_name']) . '</p>
                <p><strong>Address:</strong> ' . esc($customer['address']) . '</p>
                <p><strong>GST:</strong> ' . esc($customer['gst_number']) . '</p>
                <p><strong>Mobile:</strong> ' . esc($customer['mobile_number']) . '</p>
            </div>
            <div class="tab-pane fade" id="note-' . $id . '">
                <p>' . esc($customer['description']) . '</p>
            </div>
        </div>';
    }
}
