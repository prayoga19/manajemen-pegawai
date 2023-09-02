<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\UsersModel;

class UserController extends BaseController
{
    public function editProfile()
{

        $rules = [
            'name' => 'required|min_length[3]',
            'profile_image' => 'max_size[profile_image,300]|is_image[profile_image]'
        ];

        $errors = [
            'name' => [
                'required' => 'Nama harus diisi.',
                'min_length' => 'Nama minimal terdiri dari 3 karakter.'
            ],
            'profile_image' => [ 
                'rules' => 'uploaded[profile_image]|mime_in[profile_image,image/jpg,image/jpeg]|max_size[profile_image,300]',
                'errors' => [
                    'mime_in' => 'File harus dalam format JPG/JPEG',
                    'max_size' => 'Ukuran file terlalu besar. Maksimal 300KB.',
                ],
            ],
        ];

        if (!$this->validate($rules, $errors)) {
            session()->setFlashdata('errors', $this->validator->getErrors());
        } else {
            
            $userModel = new UsersModel();
            $userID = session()->get('id');
            $nama = $this->request->getVar('name');
            $profileImage = $this->request->getFile('profile_image');

            
            if ($profileImage->isValid() && !$profileImage->hasMoved()) {
                $newName = $profileImage->getRandomName();
                $profileImage->move(ROOTPATH . 'public/img/profile', $newName);
                $userModel->where('id', $userID)->set(['name' => $nama, 'profile_image' => $newName])->update();
               
            } else {
                $userModel->where('id', $userID)->set('name', $nama)->update();
            }

            session()->setFlashdata('success', 'Profil berhasil diperbarui.');
            return redirect()->to('pegawai');
            
        }
    

    return view('pages/user/update');
}


}
