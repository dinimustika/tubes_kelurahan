<?php include 'head.php'; ?>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="../ktp/urusktp" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNamaLengkap">Nama Pemohon :</label>
                <input type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Pemohon :" name="nama">
                </div>
                <div class="form-group col-md-6">
                <label for="inputAlamat">Alamat</label>
                <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat" name="alamat">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Pekerjaan">Pekerjaan</label>
                <input type="text" class="form-control" id="Pekerjaan" placeholder="Pekerjaan" name="pekerjaan">
                </div>
                <div class="form-group col-md-6">
                <label for="kk">File Kartu Keluarga</label>
                <input type="file" class="form-control" id="kk" name="kartu_keluarga">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="agamaAyah">Agama</label>
                <select id="inputState" class="form-control" name="agama">
                    <option selected>Masukkan Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                </div>
                <div class="form-group col-md-4">
                <label for="agamaIbu">Jenis Kelamin</label>
                <select id="inputState" class="form-control" name="jenis">
                    <option selected>Masukkan Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                </div>
                <div class="form-group col-md-4">
                <label for="inputNIK">Input NIK :</label>
                <input type="text" class="form-control" id="inputNIK" placeholder="Input NIK :" name="nik">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputStatusKawin">Status Kawin</label>
                <input type="text" class="form-control" id="inputStatusKawin" placeholder="Status Kawin" name="kawin">
                </div>
                <div class="form-group col-md-4">
                <label for="inputTempatLahir">Tempat Lahir :</label>
                <input type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir :" name="tempat">
                </div>
                <div class="form-group col-md-2">
                <label for="inputDate">Tanggal Lahir</label>
                <input type="date" class="form-control" id="inputDate" name="tgl_lahir">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" value="POST">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>
<?php include 'footer.php'; ?>
