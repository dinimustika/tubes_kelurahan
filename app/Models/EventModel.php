<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table      = 'event';

    public function getRiwayat($id = false)
    {
        if($id === false){
            return $this->table('event')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('event')
                        ->where('id_event', $id)
                        ->get()
                        ->getRowArray();
        }   
    }

    public function insertData($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function updateevent($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id_event' => $id]);
    }
}