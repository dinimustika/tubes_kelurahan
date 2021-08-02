<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table      = 'berita';

    public function getRiwayat($id = false)
    {
        if($id === false){
            return $this->table('berita')
                        ->join('users', 'users.id = berita.id_user')
                        ->join('auth_groups_users', 'auth_groups_users.user_id = berita.id_user')
                        ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                        ->where('users.id', user_id())
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('berita')
                        ->join('users', 'users.id = berita.id_user')
                        ->join('auth_groups_users', 'auth_groups_users.user_id = berita.id_user')
                        ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
                        ->where('id_berita', $id)
                        ->get()
                        ->getRowArray();
        }   
    }

    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateberita($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_berita' => $id]);
    }
}