<?php

namespace App\Models;

use CodeIgniter\Model;

class KtpModel extends Model
{
    protected $table      = 'urus_ktp';

    public function getRiwayat($id = false)
    {
        if($id === false){
            return $this->table('urus_ktp')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('urus_ktp')
                        ->where('id_permohonan', $id)
                        ->get()
                        ->getRowArray();
        }   
    }

    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updatektp($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_permohonan' => $id]);
    }
}