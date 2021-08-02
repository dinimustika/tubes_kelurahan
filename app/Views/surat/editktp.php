<head>
    <link rel="stylesheet" type="text/css" href="../../dist/css/zoom.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="<?php echo base_url('ktp/update/'.$ktp['id_permohonan']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNamaLengkap">Nama Pemohon :</label>
                <input value="<?=$ktp['nama_pemohon']?>" type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Pemohon :" name="nama">
                </div>
                <div class="form-group col-md-6">
                <label for="inputAlamat">Alamat</label>
                <input value="<?=$ktp['alamat']?>" type="text" class="form-control" id="inputAlamat" placeholder="Alamat" name="alamat">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="Pekerjaan">Pekerjaan</label>
                <input value="<?=$ktp['pekerjaan']?>" type="text" class="form-control" id="Pekerjaan" placeholder="Pekerjaan" name="pekerjaan">
                </div>
                <div class="form-group col-md-4">
                <label for="kk">File Kartu Keluarga</label>
                <img src="<?= base_url('assets/images/'.$ktp['file_kk']);?>" width="200px"data-action="zoom">
                </div>
                <div class="form-group col-md-4">
                <label for="kk">File Dokumen</label>
                <input type="file" name="dokumen" class="form-control">
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
                <input value="<?=$ktp['nik']?>" type="text" class="form-control" id="inputNIK" placeholder="Input NIK :" name="nik">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                <label for="inputStatusKawin">Status Kawin</label>
                <input value="<?=$ktp['status_kawin']?>" type="text" class="form-control" id="inputStatusKawin" placeholder="Status Kawin" name="kawin">
                </div>
                <div class="form-group col-md-4">
                <label for="inputTempatLahir">Tempat Lahir :</label>
                <input value="<?=$ktp['tempat_lahir']?>" type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir :" name="tempat">
                </div>
                <div class="form-group col-md-2">
                <label for="inputDate">Tanggal Lahir</label>
                <input value="<?=$ktp['tgl_lahir']?>" type="date" class="form-control" id="inputDate" name="tgl_lahir">
                </div>
                <div class="form-group col-md-3">
                <label for="statusSurat">Status Surat</label>
                <select id="inputState" class="form-control" name="status">
                    <option selected>Masukkan Status Surat</option>
                    <option value="2">disetujui</option>
                    <option value="3">ditolak</option>
                </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="../dist/js/zoom.js"></script>
</body>
