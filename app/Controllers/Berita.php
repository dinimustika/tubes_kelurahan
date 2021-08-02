<?php

namespace App\Controllers;
use App\Models\BeritaModel;

class Berita extends BaseController
{
	public function __construct(){
        $this->berita = new BeritaModel();
    }
    public function list(){
        $data = [
            'beritas' => $this->berita->paginate(4),
            'pager' => $this->berita->pager,
        ];
        return view('template/listberita',['data' => $data]);
    }
    public function index(){
        return view('surat/berita');
    }
    public function add(){

    	$file_gambar = $this->request->getFile('thumbnail');
        $file_gambar->move('assets/images/');

        $nama_gambar = $file_gambar->getName();

        $title = $this->request->getPost('judul');
        $isi = $this->request->getPost('isi');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
        	'id_user'=> user_id(),
            'title'=> $title,
            'gambar'  => $nama_gambar,
            'berita'=>	$isi
        ];

        $simpan = $this->berita->insertData($data);

        // Jika simpan berhasil, maka ...
        if($simpan)
        {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Created product successfully');
            // Redirect halaman ke product
            return redirect()->to(base_url('user')); 
        }
    }
    public function edit($id){

        $data['berita'] = $this->berita->getRiwayat($id);
        // Mengirim data ke dalam view
        return view('surat/editberita', $data);
    }
    public function detail($id)
    {
        $data['title']='Berita Kelurahan';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $db = \Config\Database::connect();
        $builder = $db->table('berita');
        $builder->join('users', 'users.id = berita.id_user');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = berita.id_user');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', user_id());
        $query = $builder->get();
        $data['berita'] = $this->berita->getRiwayat($id);
        $data['event'] =$db->query("SELECT * FROM event join users on users.id=event.id_user join auth_groups_users on auth_groups_users.user_id=event.id_user join auth_groups on auth_groups.id=auth_groups_users.group_id limit 5")->getResultArray();
        return view('template/bacaBerita',$data);
    }
    public function update($id)
    {
        $file_gambar = $this->request->getFile('thumbnail');
        $file_gambar->move('assets/images/');

        $nama_gambar = $file_gambar->getName();

        $title = $this->request->getPost('title');
        $isi = $this->request->getPost('isi');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'title'=> $title,
            'gambar'  => $nama_gambar,
            'berita'    => $isi
        ];

        /* 
        Membuat variabel ubah yang isinya merupakan memanggil function 
        update_product dan membawa parameter data beserta id
        */
        $ubah = $this->berita->updateberita($data, $id);
        
        // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('info', 'Updated successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('user')); 
        }
    }
}