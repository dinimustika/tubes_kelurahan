<?php

namespace App\Models;

use CodeIgniter\Model;

class SIMBModel extends Model
{
    protected $table      = 'urus_simb';

    public function getRiwayat($id = false)
    {
        $db = \Config\Database::connect();
        if($id === false){
            $builder = $db->table('urus_simb');
            $builder->select('*');
            $builder->join('users', 'users.id = urus_simb.id_user');
            $builder->join('status', 'status.id_status = urus_simb.id_status');
            $builder->join('perizinan', 'perizinan.id_perizinan = urus_simb.id_perizinan');
            $query = $builder->get();
            return $query->getResultArray();
        } else {
            $builder = $db->table('urus_simb');
            $builder->select('*');
            $builder->join('users', 'users.id = urus_simb.id_user');
            $builder->join('status', 'status.id_status = urus_simb.id_status');
            $builder->join('perizinan', 'perizinan.id_perizinan = urus_simb.id_perizinan');
            $builder->where('id_permohonan', $id);
            $query = $builder->get();
            return $query->getRowArray();
        }   
    }

    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updatesimb($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_permohonan' => $id]);
    }
}