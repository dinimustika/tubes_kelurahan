<?php

namespace App\Controllers;
use App\Models\EventModel;

class Event extends BaseController
{
	public function __construct(){
        $this->event = new EventModel();
    }
    public function list(){
        $data = [
            'events' => $this->event->paginate(4),
            'pager' => $this->event->pager,
        ];
        return view('template/listevent',['data' => $data]);
    }
    public function index(){
        return view('surat/event');
    }
    public function add(){


        $title = $this->request->getPost('nama');
        $tgl_event = $this->request->getPost('tgl_event');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
        	'id_user'=> user_id(),
            'isi'=> $title,
            'tgl_event'  => $tgl_event
        ];

        $simpan = $this->event->insertData($data);

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

        $data['event'] = $this->event->getRiwayat($id);
        // Mengirim data ke dalam view
        return view('surat/editevent', $data);
    }
    public function detail($id)
    {
        $data['title']='Event Kelurahan';
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $db = \Config\Database::connect();
        $builder = $db->table('event');
        $builder->join('users', 'users.id = event.id_user');
        $builder->join('auth_groups', 'auth_groups.id = event.id_user');
        $query = $builder->get();
        $data['event'] = $this->event->getRiwayat($id);
        return view('template/bacaEvent',$data);
    }
    public function update($id)
    {
        $title = $this->request->getPost('nama');
        $tgl_event = $this->request->getPost('tgl_event');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'isi'=> $title,
            'tgl_event'  => $tgl_event
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