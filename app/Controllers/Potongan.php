<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Potongan_model;

class Potongan extends Controller
{
    public function index()
    {
        helper('currency');
        $model = new Potongan_model;
        $data['title'] = 'Data Potongan';
        $data['getPotongan'] = $model->getPotongan();
        echo view('konten/potongan/view', $data);
    }

    public function add()
    {
        $model = new Potongan_model;
        $data = array(
            'kode_potongan'       => $this->request->getPost('kode_potongan'),
            'nama_potongan'         => $this->request->getPost('nama_potongan'),
            'jumlah_potongan'          => $this->request->getPost('jumlah_potongan')
        );
        
        $model->savepotongan($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data potongan");
                window.location="' . base_url('potongan') . '"
            </script>';
    }
    public function edit($kode_potongan)
    {
        $model = new Potongan_model;
        $getPotongan = $model->getPotongan($kode_potongan)->getRow();
        if (isset($getPotongan)) {
            $data['potongan'] = $getPotongan;
            $data['title']  = 'rianasndv';

            
            echo view('konten/potongan/edit_view', $data);
            
        } else {

            echo '<script>
                    alert("kode_potongan  ' . $kode_potongan . ' Tidak ditemukan");
                    window.location="' . base_url('potongan') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new Potongan_model;
        $kode_potongan = $this->request->getPost('kode_potongan');
        $data = array(
            'kode_potongan'       => $this->request->getPost('kode_potongan'),
            'nama_potongan'         => $this->request->getPost('nama_potongan'),
            'jumlah_potongan'          => $this->request->getPost('jumlah_potongan')
        );
        
        $model->editpotongan($data, $kode_potongan);
        echo '<script>
                alert("Selamat! Anda berhasil melakukan update data.");
                window.location="' . base_url('potongan') . '"
            </script>';
    }
    public function hapus($kode_potongan)
    {
        $model = new Potongan_model;
        $getPotongan = $model->getPotongan($kode_potongan)->getRow();
        if (isset($getPotongan)) {
            $model->hapuspotongan($kode_potongan);
            echo '<script>
                    alert("Selamat! Data berhasil terhapus.");
                    window.location="' . base_url('potongan') . '"
                </script>';
        } else {
            echo '<script>
                    alert("Gagal Menghapus !, ID potongan ' . $kode_potongan . ' Tidak ditemukan");
                    window.location="' . base_url('potongan') . '"
                </script>';
        }
    }
}
