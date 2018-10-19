<div class="container mt-5">
  <nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Paket</li>
    </ol>
  </nav>

  <h1 class="display-4 text-center mt-5">
    <i class="fa fa-tag"></i>
    Paket
  </h1>

	<div class="text-right mt-5">
		<a href="<?php echo site_url('admin/input_paket') ?>" class="btn btn-success">
			<i class="fa fa-plus"></i>
			Input Paket
		</a>
	</div>

  <table class="table text-center mt-5 table-hover table-bordered">
      <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>Nama Paket</th>
          <th>Total Harga</th>
          <th colspan="2">Action</th>
        </tr> 
      </thead>
      <tbody>
      	<?php
      	$no = 1;
      	foreach ($result as $paket):
      	$t = $paket['harga_catering']+$paket['harga_dekorasi']+$paket['harga_dokumentasi']+$paket['harga_rias']+$paket['harga_undangan'];
      	?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $paket['nama_paket'] ?></td>
          <td><?php echo number_format($t) ?></td>
          <td>
            <a class="btn btn-warning btn-sm" href="<?php echo site_url('admin/update_paket/'.$paket['id_paket']) ?>">
              <i class="fa fa-pencil-square-o"></i>
              Update
            </a>
          </td>
          <td>
            <a class="btn btn-danger btn-sm" href="<?php echo site_url('admin/delete_paket/'.$paket['id_paket']) ?>">
              <i class="fa fa-trash-o"></i>
              Delete
            </a>
          </td>
        </tr>
        <?php
      	endforeach;
        ?>
      </tbody>
  </table>
</div>