<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div> 
<form action="<?= base_url('admin/konfigurasi/update') ?> " method="post">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel1">Konfigurasi</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">

			<div class="col mb-3">
				<label class="form-label">Judul Website</label>
				<input type="text" class="form-control" name="judul" value="<?= $konfig->judul_website; ?>" />
			</div>
			<div class="row">
			<div class="col mb-3">
				<label class="form-label">Profile</label>
				<textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
			</div>
            </div>
			<div class="col mb-3">
				<label class="form-label">Facebook</label>
				<input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>">
			</div>


			<div class="col mb-3">
				<label class="form-label">Instagram</label>
				<input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>">
			</div>
 
			<div class="col mb-3">
				<label class="form-label">Email</label>
				<input type="text" class="form-control" name="email" value="<?= $konfig->email; ?>">
			</div>


			<div class="col mb-3">
				<label class="form-label">Alamat</label>
				<input type="text" class="form-control" placeholder="judul" name="alamat" value="<?= $konfig->alamat; ?>">
			</div>


			<div class="col mb-3">
				<label class="form-label">Whatsapp</label>
				<input type="text" class="form-control" placeholder="judul" name="no_wa" value="<?= $konfig->no_wa; ?>">
			</div>

			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
</form>
