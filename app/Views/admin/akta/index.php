<?= view('App\Views\Template\head') ?>

<div class="row">
  <div class="container">
    <table class="table table-hover table-dark">
    <thead>
      
    <tr>
      <th scope="col">Ayah</th>
      <th scope="col">Ibu</th>
      <th scope="col">Anak</th>
      <th scope="col">Status</th>
      <th scope="col">Pengurusan</th>
      <?php
        if(in_groups('pegawai')) : ?>
          <th scope="col">Progress</th>
          <th scope="col">Action</th>
      <?php
      endif;
      ?>
      <th scope="col">Tgl</th>
      <?php foreach ($riwyt as $surt): ?> 
      <?php if(in_groups('warga')):?>
      <?php if($surt->id_status==1):?>
      <th scope="col">Dokumen</th>
      <?php endif;?>
      <?php endif;?>
    </tr>
    </thead>
    <tbody>
    <tr>  
      <td><?= $surt->nama_ayah; ?></td>
      <td><?= $surt->nama_ibu; ?></td>
      <td><?= $surt->nama_anak; ?></td>
      <td><?= $surt->nama_status; ?></td>
      <td><?= $surt->nama_surat;?></td>
      <?php if(in_groups('warga')): ?>
      <td><a href="<?= base_url('user/download')?>" class="btn btn-warning">Download File</a></td>
    <?php endif; ?>
    <?php if(in_groups('pegawai')): ?>
      <?php if($surt->id_status==1):?>
              <td>Selesai</td>
      <?php endif; ?>
      <?php if($surt->id_status!=1):?>
              <td style="color: red">Belum Selesai</td>
      <?php endif; ?>
    <?php endif; ?>
      <?php
        if(in_groups('pegawai') && $surt->id_status!=1) : ?>
          <td><a href="<?= base_url('surat/' . $surt->id_permohonan);?>" class="btn btn-info">Detail</a></td>
      <?php
      endif;
      ?>
      <?php
        if($surt->id_status==1) : ?>
          <td>Sudah Selesai</td>
      <?php
      endif;
      ?>
      <td><?= $surt->created_at;?></td>
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
<?= view('App\Views\Template\footer') ?>