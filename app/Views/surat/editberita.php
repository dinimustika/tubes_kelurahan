<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
<br>
<div class="container">
		<h2>Tambah Berita</h2><br>
	<div class="card">
		<div class="card-body">
			<form action="<?php echo base_url('berita/update/'.$berita['id_berita']); ?>" method="post" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="titleArticle" class="card-title">Title</label>
			    <input value="<?=$berita['title']?>" type="text" class="form-control" id="titleArticle" placeholder="Enter title" maxlength="150" name="title">
			  </div>
			  <div class="form-group">
			    <label for="isiBerita">Isi Berita</label>
			    <textarea class="form-control" rows="3" name="isi"><?=$berita['berita']?></textarea>
			  </div>
			  <div class="form-row">
			  	<div class="form-group col-md-6">
			    <label for="gambarBerita">Gambar Berita</label>
			    <img src="<?= base_url('assets/images/'.$berita['gambar']);?>" width="200px">
				</div>
				<div class="form-group col-md-6">
			    <input class="form-control" type="file" name="thumbnail">
			</div>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			  <button type="reset" class="btn btn-danger">Cancel</button>
			</form>
		</div>
	</div>
</div>