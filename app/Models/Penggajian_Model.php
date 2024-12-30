<?php
namespace App\Models;
use CodeIgniter\Model;

class Penggajian_Model extends Model
{
    protected $table = 'penggajian';

    public function getPenggajian($kode_penggajian = false)
    {
        if ($kode_penggajian === false) {
            return $this->SELECT('penggajian.*, pegawai.nama_pegawai as nama_pegawai, tunjangan.nama_tunjangan, tunjangan.jumlah_tunjangan, potongan.nama_potongan, potongan.jumlah_potongan')
                        ->JOIN('pegawai', 'pegawai.kode_pegawai = penggajian.kode_pegawai')
                        ->JOIN('tunjangan', 'tunjangan.kode_tunjangan = penggajian.kode_tunjangan')
                        ->JOIN('potongan', 'potongan.kode_potongan = penggajian.kode_potongan')
                        ->findAll();
        } else {
            return $this->SELECT('penggajian.*, pegawai.nama_pegawai as nama_pegawai, tunjangan.nama_tunjangan, tunjangan.jumlah_tunjangan, potongan.nama_potongan, potongan.jumlah_potongan')
                        ->JOIN('pegawai', 'pegawai.kode_pegawai = penggajian.kode_pegawai')
                        ->JOIN('tunjangan', 'tunjangan.kode_tunjangan = penggajian.kode_tunjangan')
                        ->JOIN('potongan', 'potongan.kode_potongan = penggajian.kode_potongan')
                        ->getWhere(['kode_penggajian' => $kode_penggajian])
                        ->getRow();
        }
    }

    public function savePenggajian($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    
    public function editPenggajian($data, $kode_penggajian)
    {
        $builder = $this->db->table($this->table);
        $builder->where('kode_penggajian', $kode_penggajian);
        return $builder->update($data);
    }
    
    public function hapusPenggajian($kode_penggajian)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['kode_penggajian' => $kode_penggajian]);
    }
}
