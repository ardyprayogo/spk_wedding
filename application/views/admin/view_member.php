<div class="container mt-5">
  <nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Member</li>
    </ol>
  </nav>

  <h1 class="display-4 text-center mt-5">
    <i class="fa fa-group"></i>
    Daftar Member
  </h1>

  <table class="table text-center mt-5 table-hover table-bordered">
    <thead class="table-primary">
      <tr>
        <th>No</th>
        <th>ID Member</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No. Telp</th>
        <th>Alamat</th>
        <th>Delete</th>
      </tr> 
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($result as $member):
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $member['id_member'] ?></td>
        <td class="text-capitalize"><?php echo $member['nama_member'] ?></td>
        <td><?php echo $member['email'] ?></td>
        <td><?php echo $member['no_telp'] ?></td>
        <td><?php echo $member['alamat'] ?></td>
        <td>
          <a class="btn btn-danger btn-sm" href="<?php echo site_url('admin/delete_member/'.$member['id_member']) ?>">
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