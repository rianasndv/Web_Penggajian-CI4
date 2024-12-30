<?php

namespace App\Models;

use CodeIgniter\Model;

class Laporan_Model extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'jabatan', 
                                'status_kepegawaian', 'tanggal_gajian', 
                                'gaji_bersih', 'kode_penggajian'];
}