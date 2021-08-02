<head>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="<?php echo base_url('cerai/update/'.$cerai['id_permohonan']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputNamaSuami">Nama Suami :</label>
                <input type="text" class="form-control" id="inputNamaSuami" placeholder="Nama Suami :" name="nama_suami" value="<?=$cerai['nama_suami']?>">
                </div>
                <div class="form-group col-md-4">
                <label for="inputNamaIstri">Nama Istri :</label>
                <input type="text" class="form-control" id="inputNamaIstri" placeholder="Nama Istri :" name="nama_istri" value="<?=$cerai['nama_istri']?>">
                </div>
                <div class="form-group col-md-4">
                <label for="inputAlamat">Alamat :</label>
                <input type="text" class="form-control" id="inputAlamat" placeholder="Alamat :" name="alamat" value="<?=$cerai['alamat']?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputFileSuami">File Buku Nikah Suami :</label>
                <img src="<?= base_url('assets/images/'.$cerai['file_buku_suami']);?>" width="200px">
                </div>
                <div class="form-group col-md-4">
                <label for="inputFileIstri">File Buku Nikah Istri :</label>
                <img src="<?= base_url('assets/images/'.$cerai['file_buku_istri']);?>" width="200px">
                </div>
                <div class="form-group col-md-4">
                <label for="inputFileKK">File Kartu Keluarga :</label>
                <img src="<?= base_url('assets/images/'.$cerai['file_kk']);?>" width="200px">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="NIKSuami">NIK Suami</label>
                <input type="text" name="nik_suami" class="form-control" id="inputNIK" placeholder="NIK Suami:" value="<?=$cerai['nik_suami']?>">
                </div>
                <div class="form-group col-md-4">
                <label for="NIKIstri">NIK Istri</label>
                <input type="text" name="nik_istri" class="form-control" id="inputNIK" placeholder="NIK Istri:" value="<?=$cerai['nik_istri']?>">
                </div>
                <div class="form-group col-md-4">
                <label for="kk">File Dokumen</label>
                <input type="file" name="dokumen" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="ktpSuami">KTP Suami</label>
                <img src="<?= base_url('assets/images/'.$cerai['file_kk_suami']);?>" width="200px">
                </div>
                <div class="form-group col-md-4">
                <label for="ktpIstri">KTP Istri</label>
                <img src="<?= base_url('assets/images/'.$cerai['filek_kk_istri']);?>" width="200px">
                </div>
                <div class="form-group col-md-4">
                <label for="Status">Status Surat</label>
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
