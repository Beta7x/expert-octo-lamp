<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\UserEntity;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    // Fungsi menampilkan semua user
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();

        return view('users/index', $data);
    }

    // Fungsi untuk menampilkan halaman tambah user
    public function create()
    {
        return view('pages/signup');
    }

    // Fungsi untuk menyimpan data user ke Database
    public function store()
    {
        $userModel = new UserModel();
        $user = new UserEntity();

        $user->name = $this->request->getPost('name');
        $user->email = $this->request->getPost('email');
        $user->phone = $this->request->getPost('phone');
        $user->setPassword($this->request->getPost('password'));

        if (! $userModel->save($user)) {
            return redirect()->back()->withInput()->with('errors', $userModel->errors());
        }

        return redirect()->to('/signup')->with('message', 'Pengguna berhasil dibuat');
    }

    // Fungsi untuk menampilkan halaman edit user
    public function edit($id)
    {
        $modelModel = new UserModel();
        $user = $modelModel->find($id);

        // Jika tidak ada user berdasarkan Id maka akan dikembalikan ke halaman semula
        if (!$user) {
            return redirect()->back()->with('error', 'Pengguna tidak ditemukan');
        }

        return view('users/edit', ['user' => $user]);
    }

    // Fungsi untuk update data user di database
    public function update($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);
        
        if (!$user) {
            return redirect()->back()->with('error', 'Pengguna tidak ditemukan');
        }

        $data = $this->request->getPost();
        // Jika password tidak diisi, hapus dari data untuk menghindari penggantian dengan password kosong
        if (empty($data['password'])) {
            unset($data['password']);
        }

        // Assign data ke UserEntity
        $userEntity = new UserEntity($data);

        if (isset($data['password'])) {
            $userEntity->setPassword($data['password']);
        }

        // Validasi dan update
        if (!$userModel->save($userEntity)) {
            return redirect()->back()->withInput()->with('errors', $userModel->errors());
        }

        return redirect()->to('/users')->with('message', 'Pengguna berhasil diperbarui');
    }
}
