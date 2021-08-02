<?php

namespace App\Controllers;
use App\Models\SIMBModel;

class SIMB extends BaseController
{
	public function __construct(){
        $db = \Config\Database::connect();
        $this->SIMB = new SIMBModel();
    }
	public function index(){
		return view('surat/SIMB');
	}
	public function urus_imb(){

		$db = \Config\Database::connect();
        $harga= $this->request->getPost('imb');
        $hargaimb = $db->query("SELECT harga_imb($harga) AS harga_imb")->getResultArray();
        $moew = json_encode($hargaimb);
        $nama_pemilik = $this->request->getPost('pemilik');
        $alamat = $this->request->getPost('bangunan');
        $status_tanah = $this->request->getPost('status');
        $nik_pemilik = $this->request->getPost('nik');

        $file_npwp = $this->request->getFile('npwp');
        $file_npwp->move('assets/images/');

        $file_sppt = $this->request->getFile('sppt');
        $file_sppt->move('assets/images/');

        $file_ktp = $this->request->getFile('ktp');
        $file_ktp->move('assets/images/');

        $nama_npwp = $file_npwp->getName();
        $nama_sppt = $file_sppt->getName();
        $nama_ktp = $file_ktp->getName();

        $data = [
            'id_user'   => user_id(),
            'id_perizinan' => "1",
            'nama_pemilik'  => $nama_pemilik,
            'status_tanah'  => $status_tanah,
            'file_ktp'  => $nama_ktp,
            'file_npwp'  => $nama_npwp,
            'file_sppt' => $nama_sppt,
            'nik' => $nik_pemilik,
            'luas_bangunan' => $harga,
            'alamat'  => $alamat,
            'biaya'    => $moew,
            'id_status' => "1"
        ];

        // Membuat array collection yang disiapkan untuk insert ke table
        /* 
        Membuat variabel simpan yang isinya merupakan memanggil function 
        insert_product dan membawa parameter data 
        */
        $simpan = $this->SIMB->insertData($data);

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
        $data['SIMB'] = $this->SIMB->getRiwayat($id);
        // Mengirim data ke dalam view
        return view('surat/editSIMB', $data);
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
        $ubah = $this->SIMB->updateSIMB($data, $id);
        
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