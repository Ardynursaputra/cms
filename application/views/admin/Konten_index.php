<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
	Tambah Konten
</button>
<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= base_url('admin/konten/simpan') ?> " method="post" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Tambah Konten</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Judul</label>
							<input type="text" class="form-control" placeholder="judul" name="judul" required>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Kategori</label>
							<select name="id_kategori" class="form-control">
								<?php foreach($kategori as $aa){ ?>
								<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Keterangan</label>
							<textarea name="keterangan" class="form-control"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col mb-3">
							<label class="form-label">Foto</label>
							<input type="file" name="foto" class="form-control" accept="image/png, i mage/jpeg" />
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
</div>
<div class="card m-5">
	<h5 class="card-header">Kategori Konten<h5>
			<div class="table-responsive text-nowrap">
				<table class="table">
					<thead>
						<tr>
							<th> No</th>
							<th> Judul</th>
							<th> Kategori Konten</th>
							<th> Tanggal</th>
							<th> Kreator</th>
							<th> Foto</th>
							<th> Aksi</th>
						</tr>
					</thead>
					<?php $no = 1; ?>
					<tbody class="table-border-bottom-0">
						<?php 
						// var_dump($konten);
						foreach($konten as $aa){ ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $aa['judul'] ?></td>
							<td><?= $aa['nama_kategori'] ?></td>
							<td><?= $aa['tanggal'] ?></td>
							<td><?= $aa['username'] ?></td>
							<td>
								<a href="<?= base_url('assets/upload/konten/'. $aa['foto']	) ?>" target="_blank">
									<span class="icon-magnifier m-2">Lihat foto</span>
								</a>
							</td>
							<td>
								<button type="button" class="btn btn-primary" data-toggle="modal"
								data-target="#basicModal<?= $aa['id_konten'] ?>">
								<i class="fa fa-edit"></i>
							</button>
							<a href="<?= base_url('admin/konten/delete_data/'. $aa['foto']) ?>"
								onclick="return confirm('Apakah anda yakin menghapus data ini?')"
								class="btn btn-square btn-danger m-2"><i class="fa fa-trash"></i></a>

								<div class="modal fade" id="basicModal<?=$aa['id_konten']?>" tabindex="-1"
									aria-hidden="true">
									<div class="modal-dialog" role="document">
										<form action="<?= base_url('admin/konten/update') ?> " method="post"
											enctype="multipart/form-data">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel1">Tambah Konten</h5>
													<button type="button" class="btn-close" data-bs-dismiss="modal"
														aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<div class="row">
														<input type="hidden" name='id_konten'
															value="<?= $aa['id_konten'] ?>">
														<div class="col mb-3">
															<input type="hidden" name="footoo"
																value="<?= $aa['foto'] ?>">
															<label class="form-label">Judul</label>
															<input type="text" class="form-control" placeholder="judul"
																value="<?= $aa['judul'] ?>" name="judul" required>
														</div>
													</div>
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Kategori</label>
															<select name="id_kategori" class="form-control">
																<?php foreach($kategori as $ab){ ?>
																<option
																	<?php if($ab['id_kategori']==$aa['id_kategori']) {echo"selected"; }  ?>
																	value="<?= $aa['id_kategori'] ?>">
																	<?= $ab['nama_kategori'] ?></option>
																<?php } ?>
															</select>
														</div>
														<div class="row">
															<div class="col mb-3">
																<label class="form-label">Keterangan</label>
																<textarea name="keterangan"class="form-control"><?= $aa['keterangan'] ?></textarea>
															</div>
														</div>
														<div class="row">
															<div class="col mb-3">
																<label class="form-label">Foto</label>
																<input type="file" name="foto" class="form-control"
																	accept="image/png, i mage/jpeg" />
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-label-secondary"
																data-dismiss="modal">
																Close
															</button>
															<button type="submit"
																class="btn btn-primary">Simpan</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</td>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
</div>
