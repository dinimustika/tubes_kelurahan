<?php include 'head.php'; ?>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="../simb/urus_imb" method="post" enctype="multipart/form-data">
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
                    <label for="inputNPWP">File NPWP</label>
                    <input type="file" class="form-control" id="inputNPWP" name="npwp">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="luas">Luas Bangunan</label>
                    <input type="number" class="form-control" id="luas" placeholder="Luas Bangunan" name="imb">
                </div>
                <div class="form-group col-md-4">
                    <label for="sppt">File SPPT</label>
                    <input type="file" class="form-control" id="sppt" name="sppt">
                </div>
                <div class="form-group col-md-4">
                    <label for="statusTanah">Status Tanah</label>
                    <input type="text" class="form-control" id="statusTanah" placeholder="Milik Pribadi, Kuasa, dll" name="status">
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
