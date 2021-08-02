<?php include 'head.php'; ?>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="../siup/urus_siup" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputNamaLengkap">Nama Lengkap Pemilik</label>
                    <input type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap Pemilik" name="pemilik">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAlamat">Alamat Bangunan</label>
                    <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat Bangunan" name="bangunan">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputTempat">Tempat Lahir</label>
                    <input type="text" class="form-control" id="inputTempat" placeholder="Tempat Lahir" name="tmpt_lahir">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="modal">Besar Modal</label>
                    <input type="text" class="form-control" id="modal" placeholder="Besar Modal" name="modal">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputTempat">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="inputTanggal" placeholder="Tanggal Lahir" name="tgl_lahir">
                </div>
                <div class="form-group col-md-4">
                    <label for="jenisUsaha">Jenis Usaha</label>
                    <input type="text" class="form-control" id="jenisUsaha" placeholder="Salon, Grosir dll" name="jenis">
                </div>
            </div>
            <div class="form-row">
                 <div class="form-group col-md-6">
                    <label for="ktp">File KTP Pemilik</label>
                    <input type="file" class="form-control" id="ktp" name="ktp">
                </div>
                <div class="form-group col-md-6">
                    <label for="nik">NIK Pemilik</label>
                    <input type="text" class="form-control" id="nik" placeholder="NIK Pemilik" name="nik">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>
<?php include 'footer.php'; ?>
