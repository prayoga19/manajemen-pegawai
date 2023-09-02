<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use App\Models\UsersModel;
use CodeIgniter\Controller;

class PegawaiController extends BaseController
{
    public function index()
    {
        $pegawaiModel = new PegawaiModel();
        $data['pegawai'] = $pegawaiModel->findAll(); // Mengambil semua data pegawai

        return view('pages/pegawai/index', $data); // Mengirim data ke view
    }

    public function create()
    {
        return view('pages/pegawai/create');
    }

    public function store(){
          
    
        // Simpan data ke database
        $pegawai = new PegawaiModel();
        
        $pegawai->insert([
            'nama' => $this->request->getVar('nama'),
            'posisi' => $this->request->getVar('posisi'),
            'jabatan' => $this->request->getVar('jabatan'),
        ]);


    
        return redirect()->to('/pegawai');
    }

    public function edit($id)
    {
        $pegawaiModel = new PegawaiModel();

        // Ambil data pegawai berdasarkan ID
        $pegawai = $pegawaiModel->find($id);
        
        if (empty($pegawai)) {
            return redirect()->to('/pegawai')->with('error', 'Pegawai tidak ditemukan.');
        }

        // Tampilkan form edit data pegawai
        return view('pages/pegawai/edit', ['pegawai' => $pegawai]);
    }

    public function update($id)
    {
        $pegawaiModel = new PegawaiModel();

        

        // Update data pegawai
        $data = [
            'nama' => $this->request->getVar('nama'),
            'posisi' => $this->request->getVar('posisi'),
            'jabatan' => $this->request->getVar('jabatan'),
        ];

        $pegawaiModel->update($id, $data);

        return redirect()->to('/pegawai')->with('success', 'Data pegawai berhasil diupdate.');
    }
    public function delete($id)
    {
        $pegawaiModel = new PegawaiModel();
    
        // Hapus data pegawai berdasarkan ID
        $pegawaiModel->delete($id);
    
        return redirect()->to('/pegawai')->with('success', 'Data pegawai berhasil dihapus.');
    }
    
   
    }

