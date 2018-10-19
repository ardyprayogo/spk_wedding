<div class="container mt-5">
  <nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Laporan</li>
    </ol>
  </nav>

  <h1 class="display-4 text-center mt-5">
    <i class="fa fa-file"></i>
    Laporan
  </h1>

  <div class="text-right mt-5">
  	<button class="btn btn-sm btn-primary" onclick="windows:print()">
  		<i class="fa fa-print"></i>
  		Cetak
  	</button>
  </div>

  <table class="table table-hover mt-5 text-center table-striped">
  	<thead>
  		<tr>
	  		<th>No</th>
	  		<th>ID Member</th>
	  		<th>Paket</th>
	  		<th>Tanggal Pesan</th>
	  		<th>Tanggal Acara</th>
	  		<th>Status Pemesanan</th>
	  	</tr>
  	</thead>
 		<tbody>
 			<?php
 			$no = 1;
 			foreach($result as $laporan):
 			?>
	 		<tr>
	 			<td><?php echo $no++ ?></td>
	 			<td><?php echo $laporan['id_member'] ?></td>
	 			<td class="text-capitalize"><?php echo $laporan['nama_paket'] ?></td>
	 			<td><?php echo $laporan['tanggal_pesan'] ?></td>
	 			<td><?php echo $laporan['tanggal_acara'] ?></td>
	 			<td class="text-capitalize"><?php echo $laporan['status_pemesanan'] ?></td>
	 		</tr>
	 		<?php
	 		endforeach;
	 		?>
 		</tbody> 	
  </table>

  
</div>