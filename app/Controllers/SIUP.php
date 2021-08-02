<?php

namespace App\Controllers;
use App\Models\SIUPModel;

class SIUP extends BaseController
{
	public function __construct(){
        $db = \Config\Database::connect();
        $this->SIUP = new SIUPModel();
    }
	public function index(){
		return view('surat/SIUP');
	}
	public function urus_siup(){
        

		$db = \Config\Database::connect();
        $harga= $this->request->getPost('modal');
        $jenis_siup = $db->query("SELECT harga_siup($harga) AS harga_siup")->getResultArray();
        $moew = json_encode($jenis_siup);
        $nama_pemilik = $this->request->getPost('pemilik');
        $alamat = $this->request->getPost('bangunan');
        $tmpt_lahir = $this->request->getPost('tmpt_lahir');
        $tgl_lahir = $this->request->getPost('tgl_lahir');
        $jenis = $this->request->getPost('jenis');
        $nik_pemilik = $this->request->getPost('nik');

        $file_ktp = $this->request->getFile('ktp');
        $file_ktp->move('assets/images/');

        $nama_ktp = $file_ktp->getName();

        $data = [
            'id_user'   => user_id(),
            'id_perizinan' => "2",
            'nama_pemilik'  => $nama_pemilik,
            'file_ktp'  => $nama_ktp,
            'nik' => $nik_pemilik,
            'tmpt_lahir' => $tmpt_lahir,
            'tgl_lahir' => $tgl_lahir,
            'besar_modal' => $harga,
            'alamat'  => $alamat,
            'jenis_siup'    => $moew,
            'jenis_usaha'   => $jenis,
            'id_status' => "1"
        ];

        // Membuat array collection yang disiapkan untuk insert ke table
        /* 
        Membuat variabel simpan yang isinya merupakan memanggil function 
        insert_product dan membawa parameter data 
        */
        $simpan = $this->SIUP->insertData($data);

        // Jika simpan berhasil, maka ...
        if($simpan)
        {
            // Deklarasikan session flashdata dengan tipe success
            session()->setFlashdata('success', 'Created product successfully');
            // Redirect halaman ke product
            return redirect()->to(base_url('user')); 
        }
	}
    public function edit($id)
    {
        // Memanggil function getProduct($id) dengan parameter $id di dalam ProductModel dan menampungnya di variabel array product
        $data['SIUP'] = $this->SIUP->getRiwayat($id);
        // Mengirim data ke dalam view
        return view('surat/editSIUP', $data);
    }

    public function update($id)
    {
        $dokumen = $this->request->getFile('dokumen');
        $dokumen->move('assets/');

        $namadokumen = $dokumen->getName();

        $status = $this->request->getPost('status');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'id_status'=> $status,
            'dokumen'  => $namadokumen
        ];

        /* 
        Membuat variabel ubah yang isinya merupakan memanggil function 
        update_product dan membawa parameter data beserta id
        */
        $ubah = $this->SIUP->updateSIUP($data, $id);
        
        // Jika berhasil melakukan ubah
        if($ubah)
        {
            // Deklarasikan session flashdata dengan tipe info
            session()->setFlashdata('info', 'Updated product successfully');
            // Redirect ke halaman product
            return redirect()->to(base_url('user')); 
        }
    }
}