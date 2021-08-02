<?php

namespace App\Controllers;
use App\Models\KematianModel;

class Kematian extends BaseController
{
    public function __construct(){
        $this->kematian = new KematianModel();
    }
    public function index(){
        return view('surat/kematian');
    }
    public function uruskematian(){


        $file_gambar_kk = $this->request->getFile('filekk_almarhum');
        $file_gambar_kk->move('assets/images/');

        $nama_gambar = $file_gambar_kk->getName();
        // -------------------------------------------------------------
        $surat_keterangan = $this->request->getFile('surat_keterangan');
        $surat_keterangan->move('assets/images/');

        $nama_surat_keterangan = $surat_keterangan->getName();
        // -------------------------------------------------------------
        $file_gambar_pelapor = $this->request->getFile('ktp_pelapor');
        $file_gambar_pelapor->move('assets/images/');

        $nama_gambar_pelapor = $file_gambar_pelapor->getName();
        // -------------------------------------------------------------
        $file_gambar_almarhum = $this->request->getFile('ktp_almarhum');
        $file_gambar_almarhum->move('assets/images/');

        $nama_gambar_almarhum = $file_gambar_almarhum->getName();
        // -------------------------------------------------------------
        $file_saksi = $this->request->getFile('ktp_saksi');
        $file_saksi->move('assets/images/');

        $nama_gambar_saksi = $file_saksi->getName();
        // -------------------------------------------------------------

        $nama_pelapor = $this->request->getPost('nama_pelapor');
        $alamat = $this->request->getPost('alamat');
        $nama_almarhum = $this->request->getPost('nama_almarhum');
        $nik_almarhum = $this->request->getPost('nik_almarhum');
        $tempat_lahir = $this->request->getPost('tempat_lahir');
        $tanggal_lahir = $this->request->getPost('tgl_lahir');
        $status_kawin = $this->request->getPost('status_kawin');
        $jenis_kelamin = $this->request->getPost('jeniskelamin_almarhum');
        $agama_almarhum = $this->request->getPost('agama_almarhum');
        $nama_saksi = $this->request->getPost('nama_saksi');
        $nik_pelapor = $this->request->getPost('nik_pelapor');

        // Membuat array collection yang disiapkan untuk insert ke table
        $data = [
            'id_user'=>user_id(),
            'id_surat'=>"4",
            'id_status'=>"1",
            'nama_pelapor' => $nama_pelapor, 
            'alamat' => $alamat, 
            'file_ktp_pelapor' => $nama_gambar_pelapor,
            'nama_almarhum' => $nama_almarhum,
            'nik_almarhum' => $nik_almarhum,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'file_ktp_almarhum' => $nama_gambar_almarhum,
            'status_kawin' => $status_kawin,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama_almarhum,
            'surat_rs' => $nama_surat_keterangan,
            'nama_saksi' => $nama_saksi,
            'nik_pelapor' => $nik_pelapor,
            'file_ktp_saksi' => $nama_gambar_saksi,
            'file_kk_almarhum' => $nama_gambar
        ];

        /* 
        Membuat variabel simpan yang isinya merupakan memanggil function 
        insert_product dan membawa parameter data 
        */
        $simpan = $this->kematian->insertData($data);

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
        $data['kematian'] = $this->kematian->getRiwayat($id);
        // Mengirim data ke dalam view
        return view('surat/editkematian', $data);
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
        $ubah = $this->kematian->updatekematian($data, $id);
        
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