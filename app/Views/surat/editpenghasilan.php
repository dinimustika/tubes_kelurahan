<head>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="<?php echo base_url('penghasilan/update/'.$penghasilan['id_permohonan']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputNamaLengkap">Nama Lengkap</label>
                <input value="<?=$penghasilan['nama_lengkap']?>" type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap" name="nama">
                </div>
                <div class="form-group col-md-4">
                <label for="inputTTL">Jenis Kelamin</label>
                <select id="inputJK" class="form-control" name="jeniskelamin">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                </div>
                <div class="form-group col-md-4">
                <label for="inputNIK">NIK Pemohon</label>
                <input value="<?=$penghasilan['NIK']?>" type="text" class="form-control" id="inputNIK" placeholder="NIK Pemohon" name="nik">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputTempat">Tempat Lahir</label>
                <input value="<?=$penghasilan['tempat_lahir']?>" type="text" class="form-control" id="inputTempat" placeholder="Tempat Lahir" name="tempat">
                </div>
                <div class="form-group col-md-6">
                <label for="inputTanggal">Tanggal Lahir</label>
                <input value="<?=$penghasilan['tanggal_lahir']?>" type="date" class="form-control" id="inputTanggal" name="tgl">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputKewarganegaraan">Warga Negara</label>
                    <input value="<?=$penghasilan['kewarganegaraan']?>" type="text" class="form-control" id="inputKewarganegaraan" placeholder="Warga Negara" name="negara">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAgama">Agama</label>
                    <select id="inputState" class="form-control" name="agama">
                    <option selected>Masukkan Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                <label for="inputAlamat">Alamat</label>
                <input value="<?=$penghasilan['alamat']?>" type="text" class="form-control" id="inputAlamat" placeholder="Alamat" name="alamat">
                </div>
                <div class="form-group col-md-4">
                <label for="inputKTP">KTP</label>
                <img src="<?= base_url('assets/images/'.$penghasilan['file_ktp']);?>" width="200px">
                </div>
                <div class="form-group col-md-3">
                <label for="inputPenghasilan">Penghasilan</label>
                <input value="<?=$penghasilan['penghasilan']?>" type="text" class="form-control" id="inputPenghasilan" placeholder="Penghasilan" name="penghasilan">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                <input value="<?=$penghasilan['pekerjaan']?>" type="text" placeholder="Dokter" class="form-control" id="pekerjaan" name="pekerjaan">
                </div>
                <div class="form-group col-md-6">
                <label for="statusKawin">Status Perkawinan</label>
                <input value="<?=$penghasilan['status_kawin']?>" type="text" placeholder="Kawin" class="form-control" id="statusKawin" name="status">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="notes">Note</label>
                    <textarea name="catatan"></textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="statusSurat">Status Surat</label>
                    <select id="inputState" class="form-control" name="status">
                    <option selected>Masukkan Status Surat</option>
                    <option value="2">disetujui</option>
                    <option value="3">ditolak</option></select>
                </div>
                <div class="form-group col-md-4">
                <label for="kk">File Dokumen</label>
                <input type="file" name="dokumen" class="form-control">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>
</body>
