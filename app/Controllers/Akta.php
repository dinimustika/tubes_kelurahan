<?php

namespace App\Controllers;
use App\Models\AktaModel;

class Akta extends BaseController
{
	public function __construct(){
        $this->akta = new AktaModel();
    }
	public function index(){
		return view('surat/akta');
	}
	public function urusakta(){

		$file_gambar = $this->request->getFile('ayah');
        $file_gambar->move('assets/images/');

        $nama_gambar = $file_gambar->getName();

        $bukuIbu = $this->request->getFile('ibu');
        $bukuIbu->move('assets/images/');

        $namaBuku = $bukuIbu->getName();

        $namabpk = $this->request->getPost('ayah');
        $namammk = $this->request->getPost('ibu');
        $namaank  = $this->request->getPost('anak');
        $nikbpk  = $this->request->getPost('nikyah');
        $nikmmk  = $this->request->getPost('nikbu');
        $agamabpk = $this->request->getPost('agama_ayah');
        $alamat  = $this->request->getPost('alamat');
        $agamammk = $this->request->getPost('agama_ibu');

        $data = [
            'id_user'   => user_id(),
            'nama_ayah' => $namabpk,
            'nama_ibu'  => $namammk,
            'nama_anak'  => $namaank,
            'nik_ayah'  => $nikbpk,
            'nik_ibu'  => $nikmmk,
            'agama_ibu' => $agamammk,
            'agama_ayah' => $agamabpk,
            'gmbr_ayah' => $nama_gambar,
            'gmbr_ibu'  => $namaBuku,
            'alamat'    => $alamat,
            'id_status' => "1",
            'id_surat'  => "2"
        ];

        // Membuat array collection yang disiapkan untuk insert ke table
        /* 
        Membuat variabel simpan yang isinya merupakan memanggil function 
        insert_product dan membawa parameter data 
        */
        $simpan = $this->akta->insertData($data);

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
        $data['akta'] = $this->akta->getRiwayat($id);
        // Mengirim data ke dalam view
        return view('surat/editakta', $data);
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
        $ubah = $this->akta->updateakta($data, $id);
        
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