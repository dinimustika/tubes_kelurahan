<?php

namespace App\Models;

use CodeIgniter\Model;

class AktaModel extends Model
{
    protected $table      = 'urus_akta';

    public function getRiwayat($id = false)
    {
        $db = \Config\Database::connect();
        if($id === false){
            $builder = $db->table('urus_akta');
            $builder->select('*');
            $builder->join('users', 'users.id = urus_akta.id_user');
            $builder->join('status', 'status.id_status = urus_akta.id_status');
            $builder->join('surat', 'surat.id_surat = urus_akta.id_surat');
            $query = $builder->get();
            return $query->getResultArray();
        } else {
            $builder = $db->table('urus_akta');
            $builder->select('*');
            $builder->join('users', 'users.id = urus_akta.id_user');
            $builder->join('status', 'status.id_status = urus_akta.id_status');
            $builder->join('surat', 'surat.id_surat = urus_akta.id_surat');
            $builder->where('id_permohonan', $id);
            $query = $builder->get();
            return $query->getRowArray();
        }   
    }

    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateakta($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_permohonan' => $id]);
    }
}