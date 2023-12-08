<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">
	Tambah User
</button>
<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= base_url('admin/user/simpan') ?> " method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel1">Tambah User</h5>
					<!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col mb-3">
							<label for="nameBasic" class="form-label">Name</label>
							<input type="text" id="nameBasic" name="nama" class="form-control" placeholder="Enter Name">
						</div>
					</div>
					<div class="col mb-3">
						<label for="nameBasic" class="form-label">Username</label>
						<input type="text" id="nameBasic" name="username" class="form-control" placeholder="Enter Name">
					</div>
				</div>
				<div class="col mb-3">
					<label for="nameBasic" class="form-label">Password</label>
					<input type="password" id="nameBasic" name="password" class="form-control" placeholder="Enter Name">
				</div>
				<div>
					<div class="col mb-3">
						<label for="nameBasic" class="form-label">Level</label>
						<select id="nameBasic" name="level" class="form-control" placeholder="Enter Name">
							<option value="Admin">Admin</option>
							<option value="Kontributor">Kontributor</option>
						</select>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="card">
	<h5 class="card-header">Data Pengguna<h5>
			<div class="table-responsive text-nowrap">
				<table class="table">
					<thead>
						<tr>
							<th> Username</th>
							<th> Name</th>
							<th> Level</th>
							<th> Aksi</th>
						</tr>
					</thead>
					<tbody class="table-border-bottom-0">
						<?php foreach($user as $aa){ ?>
						<tr>
							<td><?= $aa['username'] ?></td>
							<td><?= $aa['nama'] ?></td>
							<td><?= $aa['level'] ?></td>
							<td>
								<button type="button" class="btn btn-primary" data-toggle="modal"
									data-target="#myModal<?= $aa['id_user'] ?>"><i class="fa fa-edit"></i></button>
								<a href="<?= base_url('admin/user/delete_data/'.$aa['id_user']) ?>"
									onclick="return confirm('Apakah anda yakin menghapus data ini?')"
									class="btn btn-square btn-danger m-2"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
						<div id="myModal<?= $aa['id_user'] ?>" class="modal fade" tabindex="-1" role="dialog"
							aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<form action="<?= base_url('admin/user/update/'.$aa['id_user']) ?> " method="post">
									<div class="modal-content">
										<div class="modal-header">.
											<h4 class="modal-title" id="myModalLabel">Update User</h4>
											<button type="button" class="close" data-dismiss="modal"
												aria-hidden="true"></button>
										</div>
										<div class="modal-header">
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
										<div class="modal-body">
											<div class="row">
												<div class="col mb-3">
													<label for="nameBasic" class="form-label">Username</label>
													<input type="text" id="nameBasic" name="username"
														value='<?= $aa['username'] ?>' class="form-control"
														placeholder="Enter Name">
												</div>
											</div>
											<div class="col mb-3">
												<label for="nameBasic" class="form-label">Nama</label>
												<input type="text" id="nameBasic" name="nama" value='<?= $aa['nama'] ?>'
													class="form-control" placeholder="Enter Name">
											</div>
											<div class="col mb-3">
												<label for="nameBasic" class="form-label">Level</label>
												<select id="nameBasic" name="level" class="form-control"
													placeholder="Enter Name">
													<option value="Admin">Admin</option>
													<option value="Kontributor">Kontributor</option>
												</select>
											</div>
										</div>
										<div>
											<button type="button" class="btn btn-label-secondary"
												data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
											<div class="modal-footer">
											</div>
										</div>
								</form>
							</div>
						</div>
						<?php } ?>
					</tbody>
				</table>
			</div>
</div>
