<?php

namespace App\Models;

use CodeIgniter\Model;

class PenghasilanModel extends Model
{
    protected $table      = 'urus_penghasilan';

    public function getRiwayat($id = false)
    {
        if($id === false){
            return $this->table('urus_penghasilan')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('urus_penghasilan')
                        ->where('id_permohonan', $id)
                        ->get()
                        ->getRowArray();
        }   
    }

    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updatepenghasilan($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_permohonan' => $id]);
    }
}