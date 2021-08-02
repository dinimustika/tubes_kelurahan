<?php

namespace App\Controllers;
use App\Models\PenghasilanModel;

class Penghasilan extends BaseController
{
	public function __construct(){
        $this->penghasilan = new PenghasilanModel();
    }
	public function index(){
		return view('surat/penghasilan');
	}
	public function uruspenghasilan(){

		$file_gambar = $this->request->getFile('ktp');
        $file_gambar->move('assets/images/');

        $nama_gambar = $file_gambar->getName();


        $nik = $this->request->getPost('nik');
        $nama_lngkp = $this->request->getPost('nama');
        $jenis  = $this->request->getPost('jeniskelamin');
        $tmpt  = $this->request->getPost('tempat');
        $tgl_lhr  = $this->request->getPost('tgl');
        $negara = $this->request->getPost('negara');
        $agama  = $this->request->getPost('agama');
        $alamat = $this->request->getPost('alamat');
        $pekerjaan = $this->request->getPost('pekerjaan');
        $penghasilan  = $this->request->getPost('penghasilan');
        $kawin  = $this->request->getPost('status');
        $notes  = $this->request->getPost('catatan');

        $data = [
        	
            'id_user'   => user_id(),
            'NIK' => $nik,
            'nama_lengkap'  => $nama_lngkp,
            'jenis_kelamin'  => $jenis,
            'tempat_lahir'  => $tmpt,
            'tanggal_lahir'  => $tgl_lhr,
            'alamat' => $alamat,
            'kewarganegaraan' => $negara,
            'file_ktp' => $nama_gambar,
            'pekerjaan'  => $pekerjaan,
            'agama'    => $agama,
            'penghasilan' => $penghasilan,
            'status_kawin' => $kawin,
            'notes'  => $notes,
            'id_status' => "1",
            'id_surat'  => "3"
        ];

        // Membuat array collection yang disiapkan untuk insert ke table
        /* 
        Membuat variabel simpan yang isinya merupakan memanggil function 
        insert_product dan membawa parameter data 
        */
        $simpan = $this->penghasilan->insertData($data);

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
        $data['penghasilan'] = $this->penghasilan->getRiwayat($id);
        // Mengirim data ke dalam view
        return view('surat/editpenghasilan', $data);
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
        $ubah = $this->penghasilan->updatepenghasilan($data, $id);
        
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