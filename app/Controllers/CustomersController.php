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
    <ul class="nav nav-tabs" id="customerTabs-' . $id . '">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#info-' . $id . '"><i class="bi bi-info-circle me-1"></i>Info</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#note-' . $id . '"><i class="bi bi-card-text me-1"></i>Note</a>
        </li>
    </ul>
    <div class="tab-content mt-2">
        <div class="tab-pane fade show active" id="info-' . $id . '">
            <div class="mb-1"><i class="bi bi-building me-2 text-primary"></i><strong>Company:</strong> ' . esc($customer['company_name']) . '</div>
            <div class="mb-1"><i class="bi bi-geo-alt me-2 text-success"></i><strong>Address:</strong> ' . esc($customer['address']) . '</div>
            <div class="mb-1"><i class="bi bi-receipt me-2 text-warning"></i><strong>GST:</strong> ' . esc($customer['gst_number']) . '</div>
            <div class="mb-1"><i class="bi bi-telephone me-2 text-info"></i><strong>Mobile:</strong> ' . esc($customer['mobile_number']) . '</div>
        </div>
        <div class="tab-pane fade" id="note-' . $id . '">
            <div><i class="bi bi-stickies me-2 text-secondary"></i><strong>Description:</strong> ' . esc($customer['description']) . '</div>
        </div>
        <div class="mt-3 text-end">
            <button class="btn btn-sm btn-info viewCustomerBtn me-1" data-id="' . $id . '"><i class="bi bi-eye"></i></button>
            <button class="btn btn-sm btn-warning editCustomerBtn me-1" data-id="' . $id . '"><i class="bi bi-pencil-square"></i></button>
            <button class="btn btn-sm btn-danger deleteCustomerBtn" data-id="' . $id . '"><i class="bi bi-trash"></i></button>
        </div>
    </div>
    ';
    }

    public function store()
    {
        $customerModel = new CustomerModel();
        $id = $this->request->getPost('id');

        $validationRules = [
            'name' => 'required|min_length[3]|max_length[50]|alpha_numeric_space',
            'company' => 'required|min_length[3]|max_length[50]|alpha_numeric_space',
            'address' => 'required',
            'gst' => 'permit_empty|alpha_numeric',
            'mobile' => 'required|numeric',
            'description' => 'permit_empty'
        ];

        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $this->validator->getErrors()
            ]);
        }

        $existing = $customerModel->where('mobile_number', $this->request->getPost('mobile'))
            ->where('id !=', $id) // for update
            ->first();
        if ($existing) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Mobile number already exists.']);
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'company_name' => $this->request->getPost('company'),
            'address' => $this->request->getPost('address'),
            'gst_number' => $this->request->getPost('gst'),
            'mobile_number' => $this->request->getPost('mobile'),
            'description' => $this->request->getPost('description'),
        ];

        if ($customerModel->insert($data)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setStatusCode(500)->setJSON(['status' => 'error']);
        }
    }

    public function view($id)
    {
        $customerModel = new CustomerModel();
        $customer = $customerModel->find($id);

        if (!$customer) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Customer not found']);
        }

        return view('customers/view_customer_details', ['customer' => $customer]);
    }

    public function edit($id)
    {
        $customerModel = new CustomerModel();
        $customer = $customerModel->find($id);
        
        if ($customer) {
            return $this->response->setJSON(['status' => 'success', 'data' => $customer]);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Customer not found']);
        }
    }

    public function update()
    {
        $customerModel = new CustomerModel();
        $id = $this->request->getPost('id');

        $validationRules = [
            'name' => 'required|min_length[3]|max_length[50]|alpha_numeric_space',
            'company' => 'required|min_length[3]|max_length[50]|alpha_numeric_space',
            'address' => 'required',
            'gst' => 'permit_empty|alpha_numeric',
            'mobile' => 'required|numeric',
            'description' => 'permit_empty'
        ];

        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $this->validator->getErrors()
            ]);
        }

        $existing = $customerModel->where('mobile_number', $this->request->getPost('mobile'))
            ->where('id !=', $id) // for update
            ->first();
        if ($existing) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Mobile number already exists.']);
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'company_name' => $this->request->getPost('company'),
            'address' => $this->request->getPost('address'),
            'gst_number' => $this->request->getPost('gst'),
            'mobile_number' => $this->request->getPost('mobile'),
            'description' => $this->request->getPost('description'),
        ];

        if ($customerModel->update($id, $data)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Update failed']);
        }
    }

    public function delete($id)
    {
        $customerModel = new CustomerModel();
        if ($customerModel->delete($id)) {
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setStatusCode(500)->setJSON(['status' => 'error']);
        }
    }
}
