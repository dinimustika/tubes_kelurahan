<?php

namespace App\Controllers;
use App\Models\BeritaModel;

class Home extends BaseController
{
	public function __construct(){
        $this->berita = new BeritaModel();
    }
	public function index()
	{
		helper('date');
		$db = \Config\Database::connect();
        $builder = $db->table('berita');
        $builder->select('*');
        $builder->join('users', 'users.id = berita.id_user');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = berita.id_user');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();
        // $data['riwyt'] = $query->getResult();
        // return view('template/index',$data);
        $data = [
			    'beritas' => $this->berita->paginate(5),
			    'pager' => $this->berita->pager,
			    // 'beritas'	=> $query->getResult()
			];
		$data['event'] =$db->query("SELECT * FROM event join users on users.id=event.id_user join auth_groups_users on auth_groups_users.user_id=event.id_user join auth_groups on auth_groups.id=auth_groups_users.group_id limit 5");

		return view('template/index',['data' => $data]);
	}
	
}
