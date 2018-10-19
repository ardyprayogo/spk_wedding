<div class="container mt-5">
  <nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url('member') ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Rekomendasi Paket</li>
    </ol>
  </nav>

  <h1 class="display-4 text-center mt-5">
    <i class="fa fa-shopping-basket"></i>
    Rekomendasi Untuk Anda
  </h1>
  <div class="row text-center">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <?php
      foreach ($result as $paket):
      ?>
      <div class="card text-capitalize my-5">
        <div class="card-body">
          <h4 class="card-title mb-2"><?php echo $paket['nama_paket'] ?></h4>
          <hr>
          <h5>Catering</h5>
          <p class="card-text"><?php echo $paket['catering'] ?></p>
          <h5>Dekorasi</h5>
          <p class="card-text"><?php echo $paket['dekorasi'] ?></p>
          <h5>Dokumentasi</h5>
          <p class="card-text"><?php echo $paket['dokumentasi'] ?></p>
          <h5>Rias</h5>
          <p class="card-text"><?php echo $paket['rias'] ?></p>
          <h5>Undangan</h5>
          <p class="card-text"><?php echo $paket['tamu'] ?></p>
          <hr>
          <p class="card-text">
            <a href="<?php echo site_url('member/pesan_paket'.'?paket='.$paket['id_paket']) ?>" class="btn btn-danger">
              <i class="fa fa-shopping-bag"></i>
              Pesan Sekarang
            </a>
            Atau <a href="<?php echo site_url('member') ?>" class="card-link">Pilih paket lain.</a>
          </p>
        </div>
      </div>
      <?php
      endforeach;
      ?>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>