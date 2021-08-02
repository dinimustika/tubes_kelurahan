<?php

namespace App\Models;

use CodeIgniter\Model;

class KematianModel extends Model
{
    protected $table      = 'urus_kematian';

    public function getRiwayat($id = false)
    {
        if($id === false){
            return $this->table('urus_kematian')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('urus_kematian')
                        ->where('id_permohonan', $id)
                        ->get()
                        ->getRowArray();
        }   
    }

    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updatekematian($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_permohonan' => $id]);
    }
}