<?= view('App\Views\Surat\head') ?>



<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <h5>Riwayat Akta</h5>
    <tr>
      <th>Nama Suami</th>
      <th>Nama Istri</th>
      <th>Alamat</th>
      <th>Status</th>
      <th>Pengurusan</th>
      <?php
        if(in_groups('pegawai')) : ?>
          <th>Progress</th>
          <th>Action</th>
      <?php
      endif;
      ?>
      <th>Tgl</th>
      <?php if(in_groups('warga')):?>
      <th>Dokumen</th>
      <?php endif;?>
      <?php foreach ($akta->getResult() as $surt): ?> 
      
    </tr>
    </thead>
    <tbody>
    <tr>  
      <td><?= $surt->nama_ayah; ?></td>
      <td><?= $surt->nama_ibu; ?></td>
      <td><?= $surt->nama_anak; ?></td>
      <td><?= $surt->nama_status;?></td>
      <td><?= $surt->nama_surat; ?></td>
        
    <?php if(in_groups('pegawai')): ?>
      <?php if($surt->id_status==2):?>
              <td>Selesai</td>
      <?php endif; ?>
      <?php if($surt->id_status!=2):?>
              <td style="color: red">Belum Selesai</td>
      <?php endif; ?>
    <?php endif; ?>
      <?php
        if(in_groups('pegawai') && $surt->id_status!=2) : ?>
          <td><a href="<?= base_url('cerai/edit/' . $surt->id_permohonan);?>" class="btn btn-info">Detail</a></td>
          <?php
        elseif(in_groups('pegawai') && $surt->id_status==2) : ?>
          <td>Pengajuan telah selesai</td>
      <?php
      endif;
      ?>
      <td><?= $surt->created_at;?></td>
      <?php if(in_groups('warga') && $surt->id_status==2): ?>
      <td><a href="<?= base_url('assets/'.$surt->dokumen);?>" class="btn btn-warning">Download File</a></td>
    <?php endif; ?>
    </tr>
      <?php endforeach; ?>
    </tbody>
    </table>

    <table class="table table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <h5>Riwayat KTP</h5>
    <tr>
      <th>Nama Suami</th>
      <th>Nama Istri</th>
      <th>Alamat</th>
      <th>Status</th>
      <th>Pengurusan</th>
      <?php
        if(in_groups('pegawai')) : ?>
          <th>Progress</th>
          <th>Action</th>
      <?php
      endif;
      ?>
      <th>Tgl</th>
      <?php if(in_groups('warga')):?>
      <th>Dokumen</th>
      <?php endif;?>
      <?php foreach ($ktp->getResult() as $surt): ?> 
      
    </tr>
    </thead>
    <tbody>
    <tr>  
      <td><?= $surt->nama_pemohon; ?></td>
      <td><?= $surt->alamat; ?></td>
      <td><?= $surt->pekerjaan; ?></td>
      <td><?= $surt->nama_status;?></td>
      <td><?= $surt->nama_surat; ?></td>
        
    <?php if(in_groups('pegawai')): ?>
      <?php if($surt->id_status==2):?>
              <td>Selesai</td>
      <?php endif; ?>
      <?php if($surt->id_status!=2):?>
              <td style="color: red">Belum Selesai</td>
      <?php endif; ?>
    <?php endif; ?>
      <?php
        if(in_groups('pegawai') && $surt->id_status!=2) : ?>
          <td><a href="<?= base_url('cerai/edit/' . $surt->id_permohonan);?>" class="btn btn-info">Detail</a></td>
          <?php
        elseif(in_groups('pegawai') && $surt->id_status==2) : ?>
          <td>Pengajuan telah selesai</td>
      <?php
      endif;
      ?>
      <td><?= $surt->created_at;?></td>
      <?php if(in_groups('warga') && $surt->id_status==2): ?>
      <td><a href="<?= base_url('assets/'.$surt->dokumen);?>" class="btn btn-warning">Download File</a></td>
    <?php endif; ?>
    </tr>
      <?php endforeach; ?>
    </tbody>
    </table>
  </div>
</div>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= route_to('logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
<?= view('App\Views\Surat\footer') ?>