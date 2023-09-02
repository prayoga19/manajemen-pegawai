<?php

namespace App\Controllers;

use App\Models\UsersModel;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('pages/user/register');
    }

    
    

    public function process()
    {
        // Validasi data yang diunggah
        if (!$this->validate([
            'email' => [
                'rules' => 'required|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => 'Email sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
            'name' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
            'profile_image' => [ // Validasi file yang diunggah
                'rules' => 'uploaded[profile_image]|mime_in[profile_image,image/jpg,image/jpeg]|max_size[profile_image,300]',
                'errors' => [
                    'mime_in' => 'File harus dalam format JPG/JPEG',
                    'max_size' => 'Ukuran file terlalu besar. Maksimal 300KB.',
                ],
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    
        
        $file = $this->request->getFile('profile_image');
        $newName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/img/profile', $newName);
    
        // Simpan data ke database
        $users = new UsersModel();
        
        $users->insert([
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'name' => $this->request->getVar('name'),
            'profile_image' => $newName, // Simpan nama file gambar ke dalam database
        ]);


    
        return redirect()->to('/login');
    }
    
}