<?php include 'head.php'; ?>
<head>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<br>
<div class="container">
		<h2>Tambah Event</h2><br>
	<div class="card">
		<div class="card-body">
			<form action="../event/add" method="post">
			  <div class="form-group">
			    <label for="titleArticle" class="card-title">Nama Event</label>
			    <input type="text" class="form-control" id="titleArticle" placeholder="Enter title" maxlength="150" name="nama">
			  </div>
			  <div class="form-group">
			    <label for="isiBerita">Tanggal Event</label>
			    <input type="date" name="tgl_event" class="form-control">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			  <button type="reset" class="btn btn-danger">Cancel</button>
			</form>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>