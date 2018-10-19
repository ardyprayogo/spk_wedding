<div class="container mt-5">
  <nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url('member') ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Pesan Paket</li>
    </ol>
  </nav>

  <h1 class="display-4 text-center mt-5">
    <i class="fa fa-shopping-cart"></i>
    Pesan Paket
  </h1>
  <div class="row mt-5">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <?php echo form_open('member/pemesanan')?>
        <input type="text" hidden="" name="id_paket" value="<?php echo $id_paket ?>">
        <div class="form-group">
          <small class="text-muted">Kepada</small>
          <p class="text-capitalize"><?php echo $member['nama_member'] ?></p>
        </div>
        <div class="form-group">
          <small class="text-muted">No. Telp</small>
          <p class="text-capitalize"><?php echo $member['no_telp'] ?> <small class="text-muted"><a href="">
            <i class="fa fa-pencil-square-o"></i> Ubah
          </a></small></p>
        </div>
        <div class="form-group">
          <small class="text-muted">Alamat</small>
          <p class="text-capitalize text-justify"><?php echo $member['alamat'] ?> <small class="text-muted"><a href="">
            <i class="fa fa-pencil-square-o"></i> Ubah
          </a></small></p>
        </div>
        <div class="form-group">
          <small class="text-muted">Nama Paket</small>
          <p class="text-capitalize"><?php echo $paket['nama_paket'] ?></p>
        </div>
        <div class="form-group">
          <small class="text-muted">Tanggal Acara</small>
          <input type="date" class="form-control" name="tglacara">
        </div>
        <div class="form-group">
          <small class="text-muted">Rincian Harga</small>
          <table class="table table-hover">
            <tbody>
              <tr>
                <td class="text-left">Catering</td>
                <td>: Rp</td>
                <td class="text-right"><?php echo number_format($paket['harga_catering']) ?></td>
              </tr>
              <tr>
                <td class="text-left">Dekorasi</td>
                <td>: Rp</td>
                <td class="text-right"><?php echo number_format($paket['harga_dekorasi']) ?></td>
              </tr>
              <tr>
                <td class="text-left">Dokumentasi</td>
                <td>: Rp</td>
                <td class="text-right"><?php echo number_format($paket['harga_dokumentasi']) ?></td>
              </tr>
              <tr>
                <td class="text-left">Rias</td>
                <td>: Rp</td>
                <td class="text-right"><?php echo number_format($paket['harga_rias']) ?></td>
              </tr>
              <tr>
                <td class="text-left">Undangan</td>
                <td>: Rp</td>
                <td class="text-right"><?php echo number_format($paket['harga_undangan']) ?></td>
              </tr>
              <tr class=" table-primary">
                <td class="text-left">Total</td>
                <td>: Rp</td>
                <td class="text-right"><?php
                  $total = $paket['harga_catering']+$paket['harga_dekorasi']+$paket['harga_dokumentasi']+$paket['harga_rias']+$paket['harga_undangan'];
                  echo number_format($total) ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        
        <div class="form-group text-center mt-5">
          <button type="submit" name="input" class="btn btn-danger form-control">Pesan</button>
          <a href="<?php echo site_url('member') ?>" class="btn">Batal</a>
        </div>
      </form>
    </div>
    <div class="col-md-3"></div>
  </div>
  

</div>