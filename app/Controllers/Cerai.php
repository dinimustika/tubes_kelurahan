<?php

namespace App\Controllers;
use App\Models\CeraiModel;

class Cerai extends BaseController
{
	public function __construct(){
        $this->cerai = new CeraiModel();
    }
	public function index(){
		return view('surat/cerai');
	}
	public function uruscerai(){


		$ktp_suami = $this->request->getFile('ktp_suami');
        $ktp_suami->move('assets/images/');

        $nama_ktp_suami = $ktp_suami->getName();
        //------------------------------------------------
        $ktp_istri = $this->request->getFile('ktp_istri');
        $ktp_istri->move('assets/images/');

        $nama_ktp_istri = $ktp_istri->getName();
        //------------------------------------------------
        $kartu_keluarga = $this->request->getFile('file_kk');
        $kartu_keluarga->move('assets/images/');

        $nama_kartu_keluarga = $kartu_keluarga->getName();
        //------------------------------------------------
        $buku_suami = $this->request->getFile('buku_suami');
        $buku_suami->move('assets/images/');

        $nama_buku_suami = $buku_suami->getName();
        //------------------------------------------------
        $buku_istri = $this->request->getFile('buku_istri');
        $buku_istri->move('assets/images/');

        $nama_buku_istri = $buku_istri->getName();
        //------------------------------------------------
        $nama_suami = $this->request->getPost('nama_suami');
        $nama_istri = $this->request->getPost('nama_istri');
        $alamat  = $this->request->getPost('alamat');
        $nik_suami  = $this->request->getPost('nik_suami');
        $nik_istri  = $this->request->getPost('nik_istri');

        $data = [
            'id_user'   => user_id(),
            'nama_suami' => $nama_suami,
            'nama_istri'  => $nama_istri,
            'alamat'  => $alamat,
            'nik_suami'  => $nik_suami,
            'nik_istri'  => $nik_istri,
            'file_buku_suami' => $nama_buku_suami,
            'file_buku_istri' => $nama_buku_istri,
            'file_kk' => $nama_kartu_keluarga,
            'file_kk_suami'  => $nama_ktp_suami,
            'filek_kk_istri'    => $nama_ktp_istri,
            'id_status' => "1",
            'id_surat'  => "5"
        ];

        // Membuat array collection yang disiapkan untuk insert ke table
        /* 
        Membuat variabel simpan yang isinya merupakan memanggil function 
        insert_product dan membawa parameter data 
        */
        $simpan = $this->cerai->insertData($data);

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
        $data['cerai'] = $this->cerai->getRiwayat($id);
        // Mengirim data ke dalam view
        return view('surat/editcerai', $data);
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
        $ubah = $this->cerai->updatecerai($data, $id);
        
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