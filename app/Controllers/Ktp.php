<?php

namespace App\Controllers;
use App\Models\KtpModel;

class Ktp extends BaseController
{
	public function __construct(){
        $this->ktp = new KtpModel();
    }
	public function index(){
		return view('surat/ktp');
	}
	public function urusktp(){

		$file_gambar = $this->request->getFile('kartu_keluarga');
        $file_gambar->move('assets/images/');

        $nama_gambar = $file_gambar->getName();

		$name = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $pekerjaan = $this->request->getPost('pekerjaan');
        $kawin = $this->request->getPost('kawin');
        $jk = $this->request->getPost('jenis');
        $agama = $this->request->getPost('agama');
        $tgl_lahir = $this->request->getPost('tgl_lahir');
        $tempat_lahir = $this->request->getPost('tempat');
        $nik = $this->request->getPost('nik');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
        	'id_user'=>user_id(),
        	'id_surat'=>"1",
        	'id_status'=>"1",
            'nama_pemohon' => $name, 
            'alamat' => $alamat, 
            'pekerjaan' => $pekerjaan,
            'status_kawin' => $kawin,
            'jenis_kelamin' => $jk,
            'agama' => $agama,
            'tgl_lahir' => $tgl_lahir,
            'tempat_lahir' => $tempat_lahir,
            'file_kk' => $nama_gambar,
            'nik' => $nik

        ];

        /* 
        Membuat variabel simpan yang isinya merupakan memanggil function 
        insert_product dan membawa parameter data 
        */
        $simpan = $this->ktp->insertData($data);

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
        $data['ktp'] = $this->ktp->getRiwayat($id);
        // Mengirim data ke dalam view
        return view('surat/editktp', $data);
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
        $ubah = $this->ktp->updatektp($data, $id);
        
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