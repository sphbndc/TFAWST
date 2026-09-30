<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index(): string
    {
        return view('layout/header', [
            'title' => 'User accounts | LabDesk POS',
            'active' => 'users',
        ])
            . view('accounts/users', ['users' => (new UserModel())->findAll()])
            . view('layout/footer');
    }

    public function newForm(): string
    {
        return $this->formView('New user account', 'users/create');
    }

    public function create()
    {
        $rules = [
            'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
            'full_name' => 'required|max_length[100]',
            'password' => 'required|min_length[8]',
            'password_confirm' => 'required|matches[password]',
        ];

        if (! $this->validate($rules)) {
            return $this->formView('New user account', 'users/create');
        }

        (new UserModel())->insert([
            'username' => trim((string) $this->request->getPost('username')),
            'full_name' => trim((string) $this->request->getPost('full_name')),
            'password' => password_hash((string) $this->request->getPost('password'), PASSWORD_DEFAULT),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(site_url('users'));
    }

    public function edit(int $id)
    {
        $user = (new UserModel())->find($id);

        if (! $user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return $this->formView('Edit user account', 'users/update/' . $id, $user);
    }

    public function update(int $id)
    {
        $model = new UserModel();
        $user = $model->find($id);

        if (! $user) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username,id,' . $id . ']',
            'full_name' => 'required|max_length[100]',
        ];
        $file = $this->request->getFile('avatar');

        if ($file && $file->getError() !== UPLOAD_ERR_NO_FILE) {
            $rules['avatar'] = 'is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]|max_size[avatar,2048]';
        }

        if (! $this->validate($rules)) {
            return $this->formView('Edit user account', 'users/update/' . $id, $user);
        }

        $data = [
            'username' => trim((string) $this->request->getPost('username')),
            'full_name' => trim((string) $this->request->getPost('full_name')),
        ];

        if ($file && $file->isValid() && $file->getError() === UPLOAD_ERR_OK) {
            $data['avatar'] = $this->storeAvatar($file);
        }

        $model->update($id, $data);

        return redirect()->to(site_url('users'));
    }

    private function storeAvatar($file): string
    {
        $directory = FCPATH . 'uploads/avatars/';

        if (! is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $filename = bin2hex(random_bytes(12)) . '.jpg';
        service('image')
            ->withFile($file->getTempName())
            ->fit(256, 256)
            ->save($directory . $filename, 85);

        return $filename;
    }

    private function formView(string $heading, string $action, array $user = []): string
    {
        return view('layout/header', [
            'title' => $heading . ' | LabDesk POS',
            'active' => 'users',
        ])
            . view('accounts/user_form', [
                'heading' => $heading,
                'action' => $action,
                'user' => $user,
            ])
            . view('layout/footer');
    }
}
