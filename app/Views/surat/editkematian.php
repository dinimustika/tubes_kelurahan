<head>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="<?php echo base_url('kematian/update/'.$kematian['id_permohonan']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputNamaLengkap">Nama Lengkap Pelapor</label>
                <input value="<?=$kematian['nama_pelapor']?>" type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap" name="nama_pelapor">
                </div>
                <div class="form-group col-md-4">
                <label for="inputNIK">NIK Pelapor</label>
                <input value="<?=$kematian['nik_pelapor']?>" type="text" class="form-control" id="inputNIK" placeholder="NIK Pelapor" name="nik_pelapor">
                </div>
                <div class="form-group col-md-4">
                <label for="inputNamaLengkap">Nama Lengkap Almarhum</label>
                <input value="<?=$kematian['nama_almarhum']?>" type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap Almarhum" name="nama_almarhum">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                <label for="inputStatus">Status Kawin Almarhum</label>
                <input value="<?=$kematian['status_kawin']?>" type="text" class="form-control" id="inputStatus" placeholder="Status Kawin" name="status_kawin">
                </div>
                <div class="form-group col-md-3">
                <label for="inputSaksi">Nama Saksi</label>
                <input value="<?=$kematian['nama_saksi']?>" type="text" class="form-control" id="inputSaksi" name="nama_saksi">
                </div>
                <div class="form-group col-md-3">
                <label for="inputStatus">Jenis Kelamin Almarhum</label>
                 <select id="inputState" class="form-control" name="jeniskelamin_almarhum">
                    <option selected><?=$kematian['jenis_kelamin'];?></option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                </div>
                <div class="form-group col-md-3">
                <label for="inputKK">File Kartu Keluarga Almarhum</label>
                <img src="<?= base_url('assets/images/'.$kematian['file_kk_almarhum']);?>" width="200px">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputSurat">Surat Keterangan dari Bidan/ Rumah Sakit</label> <br>
                    <a href="<?= base_url('assets/'.$kematian['surat_rs']);?>" class="btn btn-warning">View</a>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAgama">Agama Almarhum</label>
                    <select id="inputState" class="form-control" name="agama_almarhum">
                    <option selected><?=$kematian['agama'];?></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                </div>
                <div class="form-group col-md-4">
                <label for="kk">File Dokumen</label>
                <input type="file" name="dokumen" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                <label for="inputAlamat">Alamat Almarhum</label>
                <input value="<?=$kematian['alamat']?>" type="text" class="form-control" id="inputAlamat" placeholder="Alamat" name="alamat">
                </div>
                <div class="form-group col-md-3">
                <label for="inputKTP">KTP Pelapor</label>
                <img src="<?= base_url('assets/images/'.$kematian['file_ktp_pelapor']);?>" width="200px">
                </div>
                <div class="form-group col-md-3">
                <label for="inputKTP">KTP Almarhum</label>
                <img src="<?= base_url('assets/images/'.$kematian['file_ktp_almarhum']);?>" width="200px">
                </div>
                <div class="form-group col-md-3">
                <label for="inputKTP">KTP Saksi</label>
                <img src="<?= base_url('assets/images/'.$kematian['file_ktp_saksi']);?>" width="200px">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                <label for="nik_almarhum">NIK Almarhum</label>
                <input value="<?=$kematian['nik_almarhum']?>" type="text" placeholder="Dokter" class="form-control" id="nik_almarhum" name="nik_almarhum">
                </div>
                <div class="form-group col-md-3">
                <label for="tgl_lahir">Tanggal Lahir Almarhum</label>
                <input value="<?=$kematian['tanggal_lahir']?>" type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                </div>
                <div class="form-group col-md-3">
                <label for="tempatLahir">Tempat Lahir Almarhum</label>
                <input value="<?=$kematian['tempat_lahir']?>" type="text" placeholder="Kawin" class="form-control" id="tempatLahir" name="tempat_lahir">
                </div>
                <div class="form-group col-md-3">
                    <label for="statusSurat">Status Surat</label>
                    <select id="inputState" class="form-control" name="status">
                    <option selected>Masukkan Status Surat</option>
                    <option value="2">disetujui</option>
                    <option value="3">ditolak</option>
                </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>
</body>
