<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
	Tambah Kategori
</button>
<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= base_url('admin/kategori/simpan') ?> " method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Tambah Kategori</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label for="nameBasic" class="form-label">Name kategori</label>
							<input type="text" id="nameBasic" name="nama_kategori" class="form-control"
								placeholder="Enter Name">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
						Close
					</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
	</div>
	</form>
</div>
</div>
<div class="card m-5">
	<h5 class="card-header">Kategori Konten<h5>
			<div class="table-responsive text-nowrap">
				<table class="table">
					<thead>
						<tr>
							<th> Username</th>
							<th> Name Kategori Konten</th>
							<th> Aksi</th>
						</tr>
					</thead>
					<?php $no = 1; ?>
					<tbody class="table-border-bottom-0">
						<?php foreach($kategori as $aa){ ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $aa['nama_kategori'] ?></td>
							<td>
								<button type="button" class="btn btn-primary" data-toggle="modal"
									data-target="#myModal<?= $aa['id_kategori'] ?>"><i class="fa fa-edit"></i></button>
								<a href="<?= base_url('admin/kategori/delete_data/'.$aa['id_kategori']) ?>"
									onclick="return confirm('Apakah anda yakin menghapus data ini?')"
									class="btn btn-square btn-danger m-2"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
						<div id="myModal<?= $aa['id_kategori'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
							aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title" id="myModalLabel">Update Kategori</h4>
										<button type="button" class="close" data-dismiss="modal"
											aria-hidden="true"></button>
									</div>
									<form action="<?= base_url('admin/kategori/update/'.$aa['id_kategori']) ?> "
										method="post">
										<div class="modal-body">	
											<div class="row">
												<div class="col mb-3">
													<label for="nameBasic" class="form-label">Nama Kategori
														Konten</label>
													<input type="text" name="nama_kategori"
														value="<?= $aa['nama_kategori']?>" class="form-control"
														placeholder="Enter Name">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-label-secondary" data-dismiss="modal">
												Close
											</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>
									</form>
								</div>
							</div>
						</div>
			</div>
			<?php } ?>
			</tbody>
			</table>
</div>
</div>

</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div>
