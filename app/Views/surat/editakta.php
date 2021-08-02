<head>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="container">
        <h2>Isi Data Berikut ini</h2><br>
            <form action="<?php echo base_url('akta/update/'.$akta['id_permohonan']); ?>" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNamaLengkap">Nama Lengkap Ayah</label>
                <input value="<?=$akta['nama_ayah']?>" type="text" class="form-control" id="inputNamaLengkap" placeholder="Nama Lengkap Ayah" name="ayah">
                </div>
                <div class="form-group col-md-6">
                <label for="inputNamaIbu">Nama Lengkap Ibu</label>
                <input value="<?=$akta['nama_ibu']?>" type="text" class="form-control" id="inputNamaIbu" placeholder="Nama Lengkap Ibu" name="ibu">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputNIK">NIK Ayah</label>
                <input value="<?=$akta['nik_ayah']?>" type="text" class="form-control" id="inputNIK" placeholder="NIK Ayah" name="nikyah">
                </div>
                <div class="form-group col-md-6">
                <label for="inputNIKIbu">NIK Ibu</label>
                <input value="<?=$akta['nik_ibu']?>" type="text" class="form-control" id="inputNIKIbu" placeholder="NIK Ibu" name="nikbu">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="agamaAyah">Agama Ayah</label>
                <select id="inputState" class="form-control" name="agama_ayah">
                    <option selected><?=$akta['agama_ayah']?></option>
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
                    <option selected><?=$akta['agama_ibu']?></option>
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
                <input value="<?=$akta['nama_anak']?>" type="text" class="form-control" id="inputNamaAnak" placeholder="Nama Anak" name="anak">
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                <label for="inputAlamat">Alamat</label>
                <input value="<?=$akta['alamat']?>" type="text" class="form-control" id="inputAlamat" placeholder="Alamat" name="alamat">
                </div>
                <div class="form-group col-md-4">
                    <label for="statusSurat">Status Surat</label>
                    <select id="inputState" class="form-control" name="status">
                    <option selected>Masukkan Status Surat</option>
                    <option value="2">disetujui</option>
                    <option value="3">ditolak</option>
                </select>
                </div>
                <div class="form-group col-md-5">
                <label for="kk">File Dokumen</label>
                <input type="file" name="dokumen" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="bukuayah">File Buku Nikah Ayah</label>
                <img src="<?= base_url('assets/images/'.$akta['gmbr_ayah']);?>" width="200px">
                </div>
                <div class="form-group col-md-6">
                <label for="bukuibu">File Buku Nikah Ibu</label>
                <img src="<?= base_url('assets/images/'.$akta['gmbr_ibu']);?>" width="200px">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Cancel</button>
            </form>
        </div>
    </div>
</body>
