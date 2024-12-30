<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\MyProfileModel;

class Myprofile extends BaseController
{
    public function index()
    {
        $model = new MyProfileModel();
        $data['profile'] = $model->getProfile(); // Mengambil data profil dari model
        return view('my_profile', $data);
    }

    public function update()
    {
        $model = new MyProfileModel();

        $data = [
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'agama' => $this->request->getPost('agama'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'pendidikan_terakhir' => $this->request->getPost('pendidikan_terakhir'),
            'tmt' => $this->request->getPost('tmt'),
            'jabatan' => $this->request->getPost('jabatan'),
            'golongan' => $this->request->getPost('golongan'),
            'status_kepegawaian' => $this->request->getPost('status_kepegawaian'),
            'gaji_pokok' => $this->request->getPost('gaji_pokok'),
            'status_pernikahan' => $this->request->getPost('status_pernikahan'),
            'jumlah_anak' => $this->request->getPost('jumlah_anak'),
        ];

        $model->updateProfile($data);
        return redirect()->to(base_url('user/myprofile'));
    }
}
