<?php include 'head.php'; ?>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="../akta/urusakta" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNamaLengkap">Nama Lengkap Ayah</label>
                <input type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap Ayah" name="ayah">
                </div>
                <div class="form-group col-md-6">
                <label for="inputNamaIbu">Nama Lengkap Ibu</label>
                <input type="text" class="form-control" id="inputNamaIbu" placeholder="Nama Lengkap Ibu" name="ibu">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNIK">NIK Ayah</label>
                <input type="text" class="form-control" id="inputNIK" placeholder="NIK Ayah" name="nikyah">
                </div>
                <div class="form-group col-md-6">
                <label for="inputNIKIbu">NIK Ibu</label>
                <input type="text" class="form-control" id="inputNIKIbu" placeholder="NIK Ibu" name="nikbu">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="agamaAyah">Agama Ayah</label>
                <select id="inputState" class="form-control" name="agama_ayah">
                    <option selected>Masukkan Agama Ayah</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                </div>
                <div class="form-group col-md-6">
                <label for="agamaIbu">Agama Ibu</label>
                <select id="inputState" class="form-control" name="agama_ibu">
                    <option selected>Masukkan Agama Ibu</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputNamaAnak">Nama Anak</label>
                <input type="text" class="form-control" id="inputNamaAnak" placeholder="Nama Anak" name="anak">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputAlamat">Alamat</label>
                <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat" name="alamat">
                </div>
                <div class="form-group col-md-4">
                <label for="inputKota">Kota</label>
                <input type="text" class="form-control" id="inputKota" placeholder="Kota" name="kota">
                </div>
                <div class="form-group col-md-2">
                <label for="inputZip">Kode Pos</label>
                <input type="text" class="form-control" id="inputZip" placeholder="Kode Pos" name="zip">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="bukuayah">File Buku Nikah Ayah</label>
                <input type="file" class="form-control" id="bukuayah" name="ayah">
                </div>
                <div class="form-group col-md-6">
                <label for="bukuibu">File Buku Nikah Ibu</label>
                <input type="file" class="form-control" id="bukuibu" name="ibu">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>
<?php include 'footer.php'; ?>
