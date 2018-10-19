<div class="container mt-5">
  <nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Pemesanan</li>
    </ol>
  </nav>

  <h1 class="display-4 text-center mt-5">
    <i class="fa fa-shopping-bag"></i>
    Pemesanan
  </h1>


  <table class="table text-center mt-5 table-hover">
      <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>ID Paket</th>
          <th>ID Member</th>
          <th>Tanggal Pesan</th>
          <th>Tanggal Acara</th>
          <th>Status Pemesanan</th>
          <th colspan="2">Konfirmasi</th>
        </tr> 
      </thead>
      <tbody>
      	<?php 
      		$no = 1;
      		foreach($result as $pemesanan): ?>
      	<tr>	
      		<td><?php echo $no++; ?></td>
      		<td><?php echo $pemesanan['id_paket'] ?></td>
      		<td><?php echo $pemesanan['id_member'] ?></td>
      		<td><?php echo $pemesanan['tanggal_pesan'] ?></td>
      		<td><?php echo $pemesanan['tanggal_acara'] ?></td>
      		<td class="text-capitalize"><?php echo $pemesanan['status_pemesanan'] ?></td>
      		<td>
      			<a href="<?php echo site_url('admin/konfirmasi?id='.$pemesanan['id_pemesanan'].'&konfirmasi=sukses') ?>" class="btn btn-success btn-sm">Sukses</a>
      		</td>
      		<td>
      			<a href="<?php echo site_url('admin/konfirmasi?id='.$pemesanan['id_pemesanan'].'&konfirmasi=batal') ?>" class="btn btn-danger btn-sm">Batal</a>
      		</td>
      	</tr>
      	<?php endforeach; ?>
      </tbody>
  </table>
</div>