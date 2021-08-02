<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
<br>
<div class="container">
		<h2>Edit Event</h2><br>
	<div class="card">
		<div class="card-body">
			<form action="<?php echo base_url('event/update/'.$event['id_event']); ?>" method="post">
			  <div class="form-group">
			    <label for="titleArticle" class="card-title">Title</label>
			    <input value="<?=$event['isi']?>" type="text" class="form-control" id="titleArticle" placeholder="Enter title" maxlength="150" name="nama">
			  </div>
			  <div class="form-group">
			    <label for="tgl_event">Tanggal Event</label>
			    <input class="form-control" rows="3" value="<?=$event['tgl_event']?>" name="tgl_event" type="date">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			  <button type="reset" class="btn btn-danger">Cancel</button>
			</form>
		</div>
	</div>
</div>