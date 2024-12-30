<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Pegawai_Model;

class Pegawai extends Controller
{
    public function index()
    {
        helper('currency');
        $model = new Pegawai_Model;
        $data['title']     = 'Data Pegawai';
        $data['getPegawai'] = $model->getPegawai();
        echo view('konten/pegawai/view', $data);
        
    }

    public function add()
    {
    $model = new Pegawai_Model();
    $data = array(
        'nama_pegawai'       => $this->request->getPost('nama_pegawai'),
        'tempat_lahir'       => $this->request->getPost('tempat_lahir'),
        'tanggal_lahir'      => $this->request->getPost('tanggal_lahir'),
        'agama'              => $this->request->getPost('agama'),
        'pendidikan_terakhir'=> $this->request->getPost('pendidikan_terakhir'),
        'jenis_kelamin'      => $this->request->getPost('jenis_kelamin'),
        'tmt'                => $this->request->getPost('tmt'),
        'golongan'           => $this->request->getPost('golongan'),
        'jabatan'            => $this->request->getPost('jabatan'),
        'status_kepegawaian' => $this->request->getPost('status_kepegawaian'),
        'status_pernikahan'  => $this->request->getPost('status_pernikahan'),
        'jumlah_anak'        => $this->request->getPost('jumlah_anak'),
        'alamat'             => $this->request->getPost('alamat'),
        'gaji_pokok'         => $this->request->getPost('gaji_pokok'),
        'no_telepon'         => $this->request->getPost('no_telepon')
    );

    $model->savePegawai($data);

    echo '<script>
            alert("Selamat! Berhasil Menambah Data Pegawai");
            window.location="' . base_url('pegawai') . '";
            </script>';
}

    public function edit($kode_pegawai)
    {
        $model = new Pegawai_Model;
        $getPegawai = $model->getPegawai($kode_pegawai)->getRow();
        if (isset($getPegawai)) {
            $data['pegawai'] = $getPegawai;
            $data['title']  = 'rianasndv';

            
            echo view('konten/pegawai/edit_view', $data);
            
        } else {

            echo '<script>
                    alert("kode_pegawai  ' . $kode_pegawai . ' Tidak ditemukan");
                    window.location="' . base_url('pegawai') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new Pegawai_Model;
        $kode_pegawai = $this->request->getPost('kode_pegawai');
        $data = array(
            'nama_pegawai'       => $this->request->getPost('nama_pegawai'),
            'tempat_lahir'       => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir'      => $this->request->getPost('tanggal_lahir'),
            'agama'              => $this->request->getPost('agama'),
            'pendidikan_terakhir'=> $this->request->getPost('pendidikan_terakhir'),
            'jenis_kelamin'      => $this->request->getPost('jenis_kelamin'),
            'tmt'                => $this->request->getPost('tmt'),
            'golongan'           => $this->request->getPost('golongan'),
            'jabatan'            => $this->request->getPost('jabatan'),
            'status_kepegawaian' => $this->request->getPost('status_kepegawaian'),
            'status_pernikahan'  => $this->request->getPost('status_pernikahan'),
            'jumlah_anak'        => $this->request->getPost('jumlah_anak'),
            'alamat'             => $this->request->getPost('alamat'),
            'gaji_pokok'         => $this->request->getPost('gaji_pokok'),
            'no_telepon'         => $this->request->getPost('no_telepon')
        );
        
        $model->editPegawai($data, $kode_pegawai);
        echo '<script>
                alert("Selamat! Anda berhasil melakukan update data.");
                window.location="' . base_url('pegawai') . '"
            </script>';
    }
    public function hapus($kode_pegawai)
    {
        $model = new Pegawai_Model;
        $getPegawai = $model->getPegawai($kode_pegawai)->getRow();
        if (isset($getPegawai)) {
            $model->hapusPegawai($kode_pegawai);
            echo '<script>
                    alert("Selamat! Data berhasil terhapus.");
                    window.location="' . base_url('pegawai') . '"
                </script>';
        } else {
            echo '<script>
                    alert("Gagal Menghapus !, ID Pegawai ' . $kode_pegawai . ' Tidak ditemukan");
                    window.location="' . base_url('pegawai') . '"
                </script>';
        }
    }
}
