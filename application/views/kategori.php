<div id="products">
	<div class="content-lg container">
		<p class="section-title pr-5">
			<h1 class="mb-3" class="pr-2"><?= $nama_kategori ?></h1>
		</p>
		<div class="row">
			<!-- Latest Products -->
			<?php foreach ($konten as $ten) { ?>
			<div class="col-sm-4 sm-margin-b-50">
				<div class="margin-b-20">
					<img class="img-responsive" src="<?= base_url('assets/upload/konten/' . $ten['foto'] );?>">
				</div>
				<h4><a href="#"><?= $ten['judul']; ?></a> <span
						class="text-uppercase margin-l-20"><?= $ten['nama_kategori']; ?></span></h4>
				<p><?= $ten['keterangan']; ?></p>
				<a class="link" href="<?= base_url('home/artikel/'.$ten['slug']) ?>">Baca Selengkapnya..</a>
			</div>
			<?php } ?>
			<!-- End Latest Products -->
		</div>
		<!--// end row -->
	</div>
</div>
