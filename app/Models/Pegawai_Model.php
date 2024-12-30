<?php
namespace App\Models;
use CodeIgniter\Model;
class Pegawai_Model extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'kode_pegawai';
    protected $allowedFields = ['kode_pegawai', 'nama_pegawai', 'tempat_lahir', 'tanggal_lahir', 
                                'jenis_kelamin', 'agama', 'alamat', 'no_telp', 'status_pegawai', 
                                'kode_jabatan', 'kode_tunjangan', 'kode_potongan'];

    public function getPegawai($kode_pegawai = false)
    {
        if ($kode_pegawai === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['kode_pegawai' => $kode_pegawai]);
        }
    }

    public function savePegawai($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function editPegawai($data, $kode_pegawai)
    {
        $builder = $this->db->table($this->table);
        $builder->where('kode_pegawai', $kode_pegawai);
        return $builder->update($data);
    }
    public function hapusPegawai($kode_pegawai)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['kode_pegawai' => $kode_pegawai]);
    }
}