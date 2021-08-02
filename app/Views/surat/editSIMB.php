
<head>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="<?php echo base_url('SIMB/update/'.$SIMB['id_permohonan']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputNamaLengkap">Nama Lengkap Pemilik</label>
                    <input value="<?= $SIMB['nama_pemilik']?>" type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap Pemilik" name="pemilik">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAlamat">Alamat Bangunan</label>
                    <input value="<?= $SIMB['alamat']?>" type="text" class="form-control" id="inputAlamat" placeholder="Alamat Bangunan" name="bangunan">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputNPWP">File NPWP</label>
                    <img src="<?= base_url('assets/images/'.$SIMB['file_npwp']);?>" width="200px">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="luas">Luas Bangunan</label>
                    <input value="<?= $SIMB['luas_bangunan']?>" type="number" class="form-control" id="luas" placeholder="Luas Bangunan" name="imb">
                </div>
                <div class="form-group col-md-4">
                    <label for="sppt">File SPPT</label>
                    <img src="<?= base_url('assets/images/'.$SIMB['file_sppt']);?>" width="200px">
                </div>
                <div class="form-group col-md-4">
                    <label for="statusTanah">Status Tanah</label>
                    <input value="<?= $SIMB['status_tanah']?>" type="text" class="form-control" id="statusTanah" placeholder="Milik Pribadi, Kuasa, dll" name="status">
                </div>
            </div>
            <div class="form-row">
                 <div class="form-group col-md-6">
                    <label for="ktp">File KTP Pemilik</label>
                    <img src="<?= base_url('assets/images/'.$SIMB['file_ktp']);?>" width="200px">
                </div>
                <div class="form-group col-md-6">
                    <label for="nik">NIK Pemilik</label>
                    <input value="<?= $SIMB['nik']?>" type="text" class="form-control" id="nik" placeholder="NIK Pemilik" name="nik">
                </div>
            </div>
            <div class="form-row">  
                <div class="form-group col-md-6">
                    <label for="kk">File Dokumen</label>
                    <input type="file" name="dokumen" class="form-control">
                </div>
                <div class="form-group col-md-6">
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
<?php include 'footer.php'; ?>
