<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Wedding Organizer</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css')?>">
    <!-- Font -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css')?>">
  </head>
  <!-- The scrollable area -->
	<body data-spy="scroll" data-target=".navbar" data-offset="50" class="bg-light">

		<!-- The navbar - The <a> elements are used to jump to a section in the scrollable area -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
			<div class="container">
				<a class="navbar-brand" href="#">Star Enterprise Wedding</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			    	<li class="nav-item">
			        <a class="nav-link" href="#gallery">Gallery</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#daftar-paket">Daftar Paket</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#member">Member</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#about">About</a>
			      </li>
			    </ul>
			  </div>
			</div>  
		</nav>

		<div id="home" style="
			text-align: center;
			color: #fff;
			background-image: url(../wedding/asset/img/bg/home.jpg);
			background-repeat: no-repeat;
			background-attachment: scroll;
			background-position: center center;
			background-size: cover;
		">
			<p class="display-4" style="padding-top: 150px;">Star Enterprise <br> Wedding Organizer</p>
			<p class="lead" style="padding-bottom: 150px"></p>
		</div>

		<!-- Gallery -->
		<div id="gallery" class="container-fluid bg-white" style="padding-top: 150px; padding-bottom: 150px">
		  <p class="display-4 text-center">
		  	<i class="fa fa-file-image-o"></i>
		  	Gallery
		  </p>
		  <div class="container text-center">
		  	<div class="row pt-5">
		  		<div class="col-md-12">
		  			<h4 class="my-3 text-right">
		  				Paket 1
		  			</h4>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/ca1.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Catering</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/de1.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Dekorasi</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/do1.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Dokumentasi</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/ri1.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Rias</p>
						  </div>
						</div>
		  		</div>

		  		<!-- Paket 2 -->
		  		<div class="col-md-12">
		  			<h4 class="my-3 text-right">
		  				Paket 2
		  			</h4>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/ca2.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Catering</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/de2.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Dekorasi</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/do2.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Dokumentasi</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/ri2.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Rias</p>
						  </div>
						</div>
		  		</div>


					<!-- Paket 3 -->
		  		<div class="col-md-12">
		  			<h4 class="my-3 text-right">
		  				Paket 3
		  			</h4>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/ca3.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Catering</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/de3.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Dekorasi</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/do3.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Dokumentasi</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/ri3.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Rias</p>
						  </div>
						</div>
		  		</div>


		  		<!-- Paket 4 -->
		  		<div class="col-md-12">
		  			<h4 class="my-3 text-right">
		  				Paket 4
		  			</h4>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/ca4.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Catering</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/de4.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Dekorasi</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/do4.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Dokumentasi</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/ri4.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Rias</p>
						  </div>
						</div>
		  		</div>


		  		<!-- Paket 5 -->
		  		<div class="col-md-12">
		  			<h4 class="my-3 text-right">
		  				Paket 5
		  			</h4>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/ca5.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Catering</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/de5.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Dekorasi</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/do5.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Dokumentasi</p>
						  </div>
						</div>
		  		</div>
		  		<div class="col-md-3">
		  			<div class="card" style="width: 18rem;">
						  <img class="card-img-top" src="<?php echo base_url('asset/gallery/ri5.jpg') ?>" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-text">Rias</p>
						  </div>
						</div>
		  		</div>


		  	</div>
		  </div>
		</div>

		<!-- Daftar Paket -->
		<div id="daftar-paket" class="container-fluid" style="padding-top: 150px; padding-bottom: 150px">
		  <p class="display-4 text-center">
		  	<i class="fa fa-table"></i>
		  	Daftar Paket
		  </p>
		  <div class="container">
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
						    <a href="#member" class="btn btn-danger">
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
		</div>

		<!-- Member -->
		<div id="member" class="container-fluid bg-white" style="padding-top: 150px; padding-bottom: 150px">
			<div class="container">
			  <p class="display-4 text-center">
			  	<i class="fa fa-user-o"></i>
			  	Member
			  </p>
			  <div class="row pt-5 text-center">
			  	<div class="col-md-6 border-right" style="padding-left: 150px">
			  		<h1 class="display-4 mb-3">
			  			Daftar
			  		</h1>
			  		<?php echo form_open('') ?>
			  			<div class="form-group">
			  				<input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?php echo set_value('nama') ?>">
			  				<small class="text-info text-left"><?php echo form_error('nama') ?></small>
			  			</div>
			  			<div class="form-group">
			  				<input type="text" class="form-control" placeholder="Username" name="id_member" value="<?php echo set_value('id_member') ?>">
			  				<small class="text-info text-left"><?php echo form_error('id_member') ?></small>
			  			</div>
			  			<div class="form-group">
			  				<input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo set_value('password') ?>">
			  				<small class="text-info text-left"><?php echo form_error('password') ?></small>
			  			</div>
			  			<div class="form-group">
			  				<textarea name="alamat" rows="5" class="form-control" placeholder="Alamat"><?php echo set_value('alamat') ?></textarea>
			  				<small class="text-info text-left"><?php echo form_error('alamat') ?></small>
			  			</div>
			  			<div class="form-group">
			  				<input type="number" class="form-control" placeholder="No. Telp" name="no_telp" value="<?php echo set_value('no_telp') ?>">
			  				<small class="text-info text-left"><?php echo form_error('no_telp') ?></small>
			  			</div>
			  			<div class="form-group">
			  				<input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo set_value('email') ?>">
			  				<small class="text-info text-left"><?php echo form_error('email') ?></small>
			  			</div>
			  			<div class="form-group">
			  				<button type="submit" name="daftar" class="btn btn-success form-control">
			  					Daftar
			  				</button>
			  			</div>
			  		</form>
			  	</div>
			  	<div class="col-md-6 border-left" style="padding-right: 150px">
			  		<h1 class="display-4 mb-3">
			  			Login
			  		</h1>
						<?php echo form_open('home/login') ?>
			  			<div class="form-group">
			  				<input type="text" class="form-control" placeholder="Username" name="id" required="">
			  			</div>
			  			<div class="form-group">
			  				<input type="password" class="form-control" placeholder="Password" name="pass" required="">
			  			</div>
			  			<div class="form-group">
			  				<select name="status" class="form-control custom-select">
			  					<option selected disabled hidden>Login Sebagai</option>
			  					<option value="admin">Admin</option>
			  					<option value="member">Member</option>
			  				</select>
			  			</div>
			  			<div class="form-group">
			  				<button type="submit" name="login" class="btn btn-primary form-control">
			  					Login
			  				</button>
			  			</div>
			  		</form>
			  	</div>
			  </div>
			</div>
		</div>

		<!-- About -->
		<div id="about" class="container-fluid" style="padding-top: 150px; padding-bottom: 150px">
		  <p class="display-4 text-center">
		  	<i class="fa fa-address-book-o"></i>
		  	About
		  </p>
		  <div class="container text-center">
		  	<div class="row pt-5">
		  		<div class="col-md-3">
		  			<img src="<?php echo base_url('asset/img/foto/juwita.jpg') ?>" class="rounded-circle w-100">
		  		</div>
		  		<div class="col-md-3">
		  			<img src="<?php echo base_url('asset/img/foto/faisal.jpg') ?>" class="rounded-circle w-100">
		  		</div>
		  		<div class="col-md-3">
		  			<img src="<?php echo base_url('asset/img/foto/reza.jpg') ?>" class="rounded-circle w-100">
		  		</div>
		  		<div class="col-md-3">
		  			<img src="<?php echo base_url('asset/img/foto/indra.jpg') ?>" class="rounded-circle w-100">
		  		</div>
		  	</div>
		  </div>
		</div>

		<!-- Footer -->
		<div class="container-fluid bg-dark text-light text-center mt-5" style="padding-top: 30px; padding-bottom: 30px">
		  <div class="container">
		  	<div class="row">
		  		<div class="col-md-4">
		  		</div>
		  		<div class="col-md-4">
		  			<p class="lead mt-5">
		  				<i class="fa fa-2x fa-google-plus-circle"></i>
		  				<i class="fa fa-2x fa-instagram"></i>
		  				<i class="fa fa-2x fa-twitter"></i>
		  			</p>
		  			<h4>Star Eterprise Wedding</h4>
		  			<p>
		  				<i class="fa fa-map"></i>
		  				Jakarta, Indonesia
		  				<br>
		  				083873648118
		  			</p>
		  		</div>
		  		<div class="col-md-4">
		  		</div>
		  	</div>
		  </div>
		</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('asset/js/jquery-3.2.1.slim.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js') ?>"></script>
  </body>
</html>