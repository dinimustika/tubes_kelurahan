<?php include 'head.php'; ?>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="../cerai/uruscerai" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputNamaSuami">Nama Suami :</label>
                <input type="text" class="form-control" id="inputNamaSuami" placeholder="Nama Suami :" name="nama_suami">
                </div>
                <div class="form-group col-md-4">
                <label for="inputNamaIstri">Nama Istri :</label>
                <input type="text" class="form-control" id="inputNamaIstri" placeholder="Nama Istri :" name="nama_istri">
                </div>
                <div class="form-group col-md-4">
                <label for="inputAlamat">Alamat :</label>
                <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat :" name="alamat">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputFileSuami">File Buku Nikah Suami :</label>
                <input type="file" class="form-control" id="inputFileSuami" name="buku_suami">
                </div>
                <div class="form-group col-md-4">
                <label for="inputFileIstri">File Buku Nikah Istri :</label>
                <input type="file" class="form-control" id="inputFileIstri" name="buku_istri">
                </div>
                <div class="form-group col-md-4">
                <label for="inputFileKK">File Kartu Keluarga :</label>
                <input type="file" class="form-control" id="inputFileKK" name="file_kk">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="NIKSuami">NIK Suami</label>
                <input type="text" name="nik_suami" class="form-control" id="inputNIK" placeholder="NIK Suami:">
                </div>
                <div class="form-group col-md-6">
                <label for="NIKIstri">NIK Istri</label>
                <input type="text" name="nik_istri" class="form-control" id="inputNIK" placeholder="NIK Istri:">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="ktpSuami">KTP Suami</label>
                <input type="file" name="ktp_suami" class="form-control" id="inputktp">
                </div>
                <div class="form-group col-md-6">
                <label for="ktpIstri">KTP Istri</label>
                <input type="file" name="ktp_istri" class="form-control" id="inputktp">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>
<?php include 'footer.php'; ?>
