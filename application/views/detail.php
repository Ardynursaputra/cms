	<div id="products">
		<div class="content-lg container">
			<div class="container py-5">
				<div class="row pt-5">
					<div class="col-lg-8		">
						<div class="d-flex flex-column text-left mb-3">
							<p class="section-title pr-5">
								<h1 class="mb-3" class="pr-2">Blog Detail Page</h1>
							</p>
							<h3 class="mb-3"><?= $konten->judul;?></h3>
							<div class="d-flex">
								<h4 class="mr-3"><i class="fa fa-user text-primary"></i> <?= $konten->nama;?>
									<i class="fa fa-folder text-primary"></i> <?= $konten->nama_kategori;?>
								</h4>
							</div>
						</div>
						<div class="mb-5">
							<img class="img-fluid" src="<?= base_url('assets/upload/konten/' . $konten->foto );?>">
							<p>
								<?= $konten->keterangan;?>
							</p>
						</div>

					</div>

					<div class="col-lg-4 mt-5 mt-lg-0">

						<div class="mb-5">
							<h2 class="mb-4">Categories</h2>
							<ul class="list-group list-group-flush">
								<?php foreach ($kategori as $kate) {?>
								<li class="list-group-item d-flex justify-content-between align-items-center px-0">
									<a
										href="<?= base_url('home/kategori/' . $kate['id_kategori']);?>"><?= $kate['nama_kategori']; ?></a>
								</li>
								<?php } ?>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
