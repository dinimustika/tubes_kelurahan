<?php

namespace App\Models;

use CodeIgniter\Model;

class CeraiModel extends Model
{
    protected $table      = 'urus_cerai';

    public function getRiwayat($id = false)
    {
        if($id === false){
            return $this->table('urus_cerai')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('urus_cerai')
                        ->where('id_permohonan', $id)
                        ->get()
                        ->getRowArray();
        }   
    }

    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updatecerai($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_permohonan' => $id]);
    }
}