<?php
namespace App\Models;
use CodeIgniter\Model;
class Potongan_model extends Model
{
    protected $table = 'potongan';
    protected $primaryKey = 'kode_potongan';
    protected $allowedFields = ['kode_potongan', 'nama_potongan', 'jumlah_potongan'];
    public function getPotongan($kode_potongan = false)
    {
        if ($kode_potongan === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['kode_potongan' => $kode_potongan]);
        }
    }
    public function savePotongan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }public function editPotongan($data, $kode_potongan)
    {
        $builder = $this->db->table($this->table);
        $builder->where('kode_potongan', $kode_potongan);
        return $builder->update($data);
    }
    public function hapusPotongan($kode_potongan)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['kode_potongan' => $kode_potongan]);
    }
}