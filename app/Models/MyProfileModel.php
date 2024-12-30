<?php

namespace App\Models;

use CodeIgniter\Model;

class MyProfileModel extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'kode_pegawai';
    protected $allowedFields = [
        'nama_pegawai', 'tempat_lahir', 'tanggal_lahir',
        'jenis_kelamin', 'agama', 'alamat', 'no_telepon', 'pendidikan_terakhir',
        'tmt', 'jabatan', 'golongan', 'status_kepegawaian', 'gaji_pokok',
        'status_pernikahan', 'jumlah_anak'
    ];

    public function getProfile()
    {
        return $this->where('kode_pegawai', 1)->first();
    }

    public function updateProfile($data)
    {
        return $this->update(1, $data);
    }
}
