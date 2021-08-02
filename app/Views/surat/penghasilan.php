<?php include 'head.php'; ?>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="../penghasilan/urusPenghasilan" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputNamaLengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap" name="nama">
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
                <input type="text" class="form-control" id="inputNIK" placeholder="NIK Pemohon" name="nik">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputTempat">Tempat Lahir</label>
                <input type="text" class="form-control" id="inputTempat" placeholder="Tempat Lahir" name="tempat">
                </div>
                <div class="form-group col-md-6">
                <label for="inputTanggal">Tanggal Lahir</label>
                <input type="date" class="form-control" id="inputTanggal" name="tgl">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputKewarganegaraan">Warga Negara</label>
                    <input type="text" class="form-control" id="inputKewarganegaraan" placeholder="Warga Negara" name="negara">
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
                <div class="form-group col-md-6">
                <label for="inputAlamat">Alamat</label>
                <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat" name="alamat">
                </div>
                <div class="form-group col-md-4">
                <label for="inputKTP">KTP</label>
                <input type="file" class="form-control" id="inputKTP" name="ktp">
                </div>
                <div class="form-group col-md-2">
                <label for="inputPenghasilan">Penghasilan</label>
                <input type="text" class="form-control" id="inputPenghasilan" placeholder="Penghasilan" name="penghasilan">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" placeholder="Dokter" class="form-control" id="pekerjaan" name="pekerjaan">
                </div>
                <div class="form-group col-md-6">
                <label for="statusKawin">Status Perkawinan</label>
                <input type="text" placeholder="Kawin" class="form-control" id="statusKawin" name="status">
                </div>
            </div>
            <div class="form-group">
                <label for="notes">Note</label>
                <textarea name="catatan"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>
<?php include 'footer.php'; ?>
