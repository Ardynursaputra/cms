<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<div class="container">
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		</ol>
	</div>

	<div class="carousel-inner" role="listbox">
		<?php $no=1; foreach ($caraousel as $sell) {?>
		<div class="item ">
			<img class="img-responsive" src="<?= base_url('assets/upload/caraousel/' . $sell['foto']);?>"
				alt="Slider Image">
			<div class="container">
				<div class="carousel-centered">
					<div class="margin-b-40">
						<h1 class="carousel-title">Halo</h1>
						<p class="color-white">My name is Ardy Nur Saputra. I am from class XI RB. I study at SMKN 2
							Karanganyar.
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
</div>
<!--========== SLIDER ==========-->

<!--========== PAGE LAYOUT ==========-->

<!-- Latest Products -->
<?php
// var_dump($konten);
?>
<div id="products">
	<div class="content-lg container">
		<div class="row">
			<!-- Latest Products -->
			<?php foreach ($konten as $ten) { ?>
			<div class="col-sm-4 sm-margin-b-50">
				<div class="margin-b-20">
					<img class="img-responsive" src="<?= base_url('assets/upload/konten/' . $ten['foto'] );?>">
				</div>
				<h4><a href="<?= base_url('home/artikel/'.$ten['slug']) ?>"><?= $ten['judul']; ?></a> <span
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
