<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-sm-12 col-md-6">
	<div class="card">
		<form action="<?= base_url('admin/caraousel/simpan') ?> " method="post" enctype="multipart/form-data">
			<div class="card-header">File input</div>
			<div class="card-body">
				<div class="col mb-3">
					<label class="form-label">Judul</label>
					<input type="text" class="form-control" placeholder="" name="judul" required>
				</div>
				<div class="col mb-3">
					<label class="form-label">Pilih Foto dengan ukuran (1:3)</label>
					<input class="form-control" type="file" name="foto">
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="row">
	<?php foreach ($caraousel as $aa){ ?>
	<div class="col-lg-3 col-md-6 mt-3">
		<div class="card">
			<img class="card-img-top img-fluid" src="<?= base_url('assets/upload/caraousel/'. $aa['foto']	) ?>">
			<div class="card-body">
				<h4 class="card-title"><?= $aa['judul'] ?></h4>
				<a href="<?= base_url('admin/caraousel/delete_data/'. $aa['foto']) ?>"
					onclick="return confirm('Apakah anda yakin menghapus foto ini?')"
					class="btn btn-square btn-danger m-2"><i class="fa fa-trash"></i></a>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
