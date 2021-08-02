<?php

namespace App\Models;

use CodeIgniter\Model;

class SIUPModel extends Model
{
    protected $table      = 'urus_siup';

    public function getRiwayat($id = false)
    {
        $db = \Config\Database::connect();
        if($id === false){
            $builder = $db->table('urus_siup');
            $builder->select('*');
            $builder->join('users', 'users.id = urus_siup.id_user');
            $builder->join('status', 'status.id_status = urus_siup.id_status');
            $builder->join('perizinan', 'perizinan.id_perizinan = urus_siup.id_perizinan');
            $query = $builder->get();
            return $query->getResultArray();
        } else {
            $builder = $db->table('urus_siup');
            $builder->select('*');
            $builder->join('users', 'users.id = urus_siup.id_user');
            $builder->join('status', 'status.id_status = urus_siup.id_status');
            $builder->join('perizinan', 'perizinan.id_perizinan = urus_siup.id_perizinan');
            $builder->where('id_permohonan', $id);
            $query = $builder->get();
            return $query->getRowArray();
        }   
    }

    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updatesiup($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_permohonan' => $id]);
    }
}