
<head>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="<?php echo base_url('SIUP/update/'.$SIUP['id_permohonan']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputNamaLengkap">Nama Lengkap Pemilik</label>
                    <input type="text" value="<?= $SIUP['nama_pemilik']?>" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap Pemilik" name="pemilik">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAlamat">Alamat Bangunan</label>
                    <input type="text" value="<?= $SIUP['alamat']?>" class="form-control" id="inputAlamat" placeholder="Alamat Bangunan" name="bangunan">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputTempat">Tempat Lahir</label>
                    <input type="text" value="<?= $SIUP['tmpt_lahir']?>" class="form-control" id="inputTempat" placeholder="Tempat Lahir" name="tmpt_lahir">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="modal">Besar Modal</label>
                    <input type="text" value="<?= $SIUP['besar_modal']?>" class="form-control" id="modal" placeholder="Besar Modal" name="modal">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputTempat">Tanggal Lahir</label>
                    <input value="<?= $SIUP['tgl_lahir']?>" type="date" class="form-control" id="inputTanggal" placeholder="Tanggal Lahir" name="tgl_lahir">
                </div>
                <div class="form-group col-md-4">
                    <label for="jenisUsaha">Jenis Usaha</label>
                    <input value="<?= $SIUP['jenis_usaha']?>" type="text" class="form-control" id="jenisUsaha" placeholder="Salon, Grosir dll" name="jenis">
                </div>
            </div>
            <div class="form-row">
                 <div class="form-group col-md-6">
                    <label for="ktp">File KTP Pemilik</label>
                    <img src="<?= base_url('assets/images/'.$SIUP['file_ktp']);?>" width="200px">
                </div>
                <div class="form-group col-md-6">
                    <label for="nik">NIK Pemilik</label>
                    <input value="<?= $SIUP['nik']?>" type="text" class="form-control" id="nik" placeholder="NIK Pemilik" name="nik">
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
