<?php
namespace App\Models;
use CodeIgniter\Model;
class Tunjangan_model extends Model
{
    protected $table = 'tunjangan';
    protected $primaryKey = 'kode_tunjangan';
    protected $allowedFields = ['kode_tunjangan', 'nama_tunjangan', 'jumlah_tunjangan'];
    public function getTunjangan($kode_tunjangan = false)
    {
        if ($kode_tunjangan === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['kode_tunjangan' => $kode_tunjangan]);
        }
    }
    public function saveTunjangan($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }public function editTunjangan($data, $kode_tunjangan)
    {
        $builder = $this->db->table($this->table);
        $builder->where('kode_tunjangan', $kode_tunjangan);
        return $builder->update($data);
    }
    public function hapusTunjangan($kode_tunjangan)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['kode_tunjangan' => $kode_tunjangan]);
    }
}