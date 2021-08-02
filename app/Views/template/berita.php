<?= view('App\Views\Template\head') ?>
<br>
<div class="container">
		<h2>Tambah Berita</h2><br>
	<div class="card">
		<div class="card-body">
			<form action="../berita/add" method="post" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="titleArticle" class="card-title">Title</label>
			    <input type="text" class="form-control" id="titleArticle" placeholder="Enter title" maxlength="150" name="judul">
			  </div>
			  <div class="form-group">
			    <label for="isiBerita">Isi Berita</label>
			    <textarea class="form-control" rows="3" name="isi"></textarea>
			  </div>
			  <div class="form-group">
			    <label for="gambarBerita">Gambar Berita</label>
			    <input class="form-control" type="file" name="thumbnail">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			  <button type="reset" class="btn btn-danger">Cancel</button>
			</form>
		</div>
	</div>
</div>