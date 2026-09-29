<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index(): string
    {
        return view('layout/header', [
            'title' => 'Customer accounts | LabDesk POS',
            'active' => 'customers',
        ])
            . view('accounts/customers', ['customers' => (new CustomerModel())->findAll()])
            . view('layout/footer');
    }

    public function newForm(): string
    {
        return $this->formView('New customer account', 'customers/create');
    }

    public function create()
    {
        $rules = [
            'full_name' => 'required|max_length[100]',
            'email' => 'required|valid_email|max_length[100]',
            'phone' => 'permit_empty|max_length[20]',
        ];

        if (! $this->validate($rules)) {
            return $this->formView('New customer account', 'customers/create');
        }

        (new CustomerModel())->insert([
            'full_name' => trim((string) $this->request->getPost('full_name')),
            'email' => trim((string) $this->request->getPost('email')),
            'phone' => trim((string) $this->request->getPost('phone')),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(site_url('customers'));
    }

    public function edit(int $id)
    {
        $customer = (new CustomerModel())->find($id);

        if (! $customer) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return $this->formView('Edit customer account', 'customers/update/' . $id, $customer);
    }

    public function update(int $id)
    {
        $model = new CustomerModel();

        if (! $model->find($id)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'full_name' => 'required|max_length[100]',
            'email' => 'required|valid_email|max_length[100]',
            'phone' => 'permit_empty|max_length[20]',
        ];

        if (! $this->validate($rules)) {
            return $this->formView('Edit customer account', 'customers/update/' . $id, $model->find($id));
        }

        $model->update($id, [
            'full_name' => trim((string) $this->request->getPost('full_name')),
            'email' => trim((string) $this->request->getPost('email')),
            'phone' => trim((string) $this->request->getPost('phone')),
        ]);

        return redirect()->to(site_url('customers'));
    }

    private function formView(string $heading, string $action, array $customer = []): string
    {
        return view('layout/header', [
            'title' => $heading . ' | LabDesk POS',
            'active' => 'customers',
        ])
            . view('accounts/customer_form', [
                'heading' => $heading,
                'action' => $action,
                'customer' => $customer,
            ])
            . view('layout/footer');
    }
}
