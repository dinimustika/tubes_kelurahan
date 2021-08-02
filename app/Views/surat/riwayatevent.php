<?= view('App\Views\Surat\head') ?>

<div class="card shadow mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover table-dark" id="dataTable" width="100%" cellspacing="0">
    <thead>
      
    <tr>
      <th>Judul</th>
      <th>Tanggal Terbit</th>
      <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <tr>  
      <?php foreach($riwyt as $surt) : ?>
      <td><?= $surt->isi; ?></td>
      <td><?= $surt->tgl_event; ?></td>
      <td>
        <a href="<?= base_url('event/edit/' . $surt->id_event);?>" class="btn btn-primary">Edit </a>
        <a href="<?= base_url('event/delete/' . $surt->id_event);?>" class="btn btn-danger">Delete </a>
      </td>
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