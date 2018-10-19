<div class="container mt-5">

  <h1 class="display-4 text-center mt-5">
    <i class="fa fa-table"></i>
    Pilih Paket
  </h1>

  <div class="row text-center pt-5">

		<?php
		foreach ($result as $paket):
		?>

  	<div class="col-md-4 mb-5">
  		<div class="card">
			  <div class="card-body">
			  	<h4 class="card-title text-capitalize">
			  		<i class="fa fa-tags"></i>
			  		<?php echo $paket['nama_paket'] ?>
			  	</h4>
			  	<hr>
			  	<h5>Catering</h5>
			    <p class="card-text">
			    	<?php echo $paket['catering'] ?>
			    </p>
			    <h5>Dekorasi</h5>
			    <p class="card-text">
			    	<?php echo $paket['dekorasi'] ?>
			    </p>
			    <h5>Dokumentasi</h5>
			    <p class="card-text">
			    	<?php echo $paket['dokumentasi'] ?>
			    </p>
			    <h5>Rias</h5>
			    <p class="card-text">
			    	<?php echo $paket['rias'] ?>
			    </p>
			    <h5>Undangan</h5>
			    <p class="card-text">
			    	<?php echo $paket['tamu'].' Tamu' ?>
			    </p>
			    <hr>
			    <a href="<?php echo site_url('member/pesan_paket'.'?paket='.$paket['id_paket']) ?>" class="btn btn-danger">
			    	<i class="fa fa-shopping-bag"></i>
			    	Pesan Sekarang
			    </a>
			  </div>
			</div>
  	</div>

  	<?php
  	endforeach;
  	?>

  </div>


</div>