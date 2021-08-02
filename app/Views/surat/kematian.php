<?php include 'head.php'; ?>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="../kematian/urusKematian" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputNamaLengkap">Nama Lengkap Pelapor</label>
                <input type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap" name="nama_pelapor">
                </div>
                <div class="form-group col-md-4">
                <label for="inputNIK">NIK Pelapor</label>
                <input type="text" class="form-control" id="inputNIK" placeholder="NIK Pelapor" name="nik_pelapor">
                </div>
                <div class="form-group col-md-4">
                <label for="inputNamaLengkap">Nama Lengkap Almarhum</label>
                <input type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap Almarhum" name="nama_almarhum">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                <label for="inputStatus">Status Kawin Almarhum</label>
                <input type="text" class="form-control" id="inputStatus" placeholder="Status Kawin" name="status_kawin">
                </div>
                <div class="form-group col-md-3">
                <label for="inputSaksi">Nama Saksi</label>
                <input type="text" class="form-control" id="inputSaksi" name="nama_saksi">
                </div>
                <div class="form-group col-md-3">
                <label for="inputStatus">Jenis Kelamin Almarhum</label>
                 <select id="inputState" class="form-control" name="jeniskelamin_almarhum">
                    <option selected>Masukkan Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                </div>
                <div class="form-group col-md-3">
                <label for="inputKK">File Kartu Keluarga Almarhum</label>
                <input type="file" class="form-control" id="inputKK" name="filekk_almarhum">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputSurat">Surat Keterangan dari Bidan/ Rumah Sakit</label>
                    <input type="file" class="form-control" id="inputSurat" name="surat_keterangan">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAgama">Agama Almarhum</label>
                    <select id="inputState" class="form-control" name="agama_almarhum">
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
                <div class="form-group col-md-3">
                <label for="inputAlamat">Alamat Almarhum</label>
                <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat" name="alamat">
                </div>
                <div class="form-group col-md-3">
                <label for="inputKTP">KTP Pelapor</label>
                <input type="file" class="form-control" id="inputKTP" name="ktp_pelapor">
                </div>
                <div class="form-group col-md-3">
                <label for="inputKTP">KTP Almarhum</label>
                <input type="file" class="form-control" id="inputKTP" name="ktp_almarhum">
                </div>
                <div class="form-group col-md-3">
                <label for="inputKTP">KTP Saksi</label>
                <input type="file" class="form-control" id="inputKTP" name="ktp_saksi">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="nik_almarhum">NIK Almarhum</label>
                <input type="text" placeholder="Dokter" class="form-control" id="nik_almarhum" name="nik_almarhum">
                </div>
                <div class="form-group col-md-4">
                <label for="tgl_lahir">Tanggal Lahir Almarhum</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                </div>
                <div class="form-group col-md-4">
                <label for="tempatLahir">Tempat Lahir Almarhum</label>
                <input type="text" placeholder="Kawin" class="form-control" id="tempatLahir" name="tempat_lahir">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>
<?php include 'footer.php'; ?>
