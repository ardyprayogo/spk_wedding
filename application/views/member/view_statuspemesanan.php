<div class="container mt-5">
  <nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url('member') ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Status</li>
    </ol>
  </nav>

  <h1 class="display-4 text-center mt-5">
    <i class="fa fa-shopping-bag"></i>
    Status Pemesanan
  </h1>
  <div class="row mt-5">
  	<?php
  	$no = 1;
  	foreach($pemesanan as $result):
  	?>
    <div class="col-md-3"></div>
    <div class="col-md-6 mt-5">
    	<p class="lead">
    		<?php echo 'Status Pemesanan '.$no++ ?>
    	</p>
    	<table class="table lead table-hover text-capitalize">
        <tr>
          <td>Kepada</td>
          <td>:</td>
          <td><?php echo $result['nama_member'] ?></td>
        </tr>
    		<tr>
    			<td>Tanggal Pesan</td>
    			<td>:</td>
    			<td><?php echo $result['tanggal_pesan'] ?></td>
    		</tr>
    		<tr>
    			<td>Tanggal Acara</td>
    			<td>:</td>
    			<td><?php echo $result['tanggal_acara'] ?></td>
    		</tr>
        <tr>
          <td>Paket Pilihan</td>
          <td>:</td>
          <td><?php echo $result['nama_paket'] ?></td>
        </tr>
        <tr class="table-warning">
          <td>Total Biaya</td>
          <td>:</td>
          <td><?php echo 'Rp '.number_format($result['total']) ?></td>
        </tr>
    		<tr>
    			<td>Status Pemesanan</td>
    			<td>:</td>
    			<td><?php echo $result['status_pemesanan'] ?></td>
    		</tr>
    	</table>
    </div>
    <div class="col-md-3"></div>
    <?php
  	endforeach;
    ?>
  </div>
  

</div>