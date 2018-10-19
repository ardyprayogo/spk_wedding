<div class="container mt-5">
  <nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url('admin') ?>">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="<?php echo site_url('admin/paket') ?>">Paket</a></li>
      <li class="breadcrumb-item active" aria-current="page">Input Paket</li>
    </ol>
  </nav>

  <h1 class="display-4 text-center mt-5">
    <i class="fa fa-book"></i>
    Input Paket
  </h1>

  <?php echo form_open('admin/input_paket/') ?>
    <h3>Paket</h3>
    <div class="form-group">
      <small class="text-muted">Nama Paket</small>
      <input type="text" class="form-control" placeholder="Nama Paket" name="nama_paket" value="<?php echo $this->input->post('nama_paket') ?>">
      <small class="text-primary"><?php echo form_error('nama_paket') ?></small>
    </div>
    <h3>Catering</h3>
    <div class="form-group">
      <small class="text-muted">Catering</small>
      <textarea name="catering" rows="5" class="form-control" placeholder="Isi Catering"><?php echo $this->input->post('catering') ?></textarea>
      <small class="text-primary"><?php echo form_error('catering') ?></small>
    </div>
    <div class="form-group">
      <small class="text-muted">Harga Catering</small>
      <input type="text" class="form-control" placeholder="Harga Catering (Rp)" name="harga_catering" value="<?php echo $this->input->post('harga_catering') ?>">
      <small class="text-primary"><?php echo form_error('harga_catering') ?></small>
    </div>
    <h3>Dekorasi</h3>
    <div class="form-group">
      <small class="text-muted">Dekorasi</small>
      <textarea name="dekorasi" rows="5" class="form-control" placeholder="Isi Dekorasi"><?php echo $this->input->post('dekorasi') ?></textarea>
      <small class="text-primary"><?php echo form_error('dekorasi') ?></small>
    </div>
    <div class="form-group">
      <small class="text-muted">Harga Dekorasi</small>
      <input type="text" class="form-control" placeholder="Harga Dekorasi (Rp)" name="harga_dekorasi" value="<?php echo $this->input->post('harga_dekorasi') ?>">
      <small class="text-primary"><?php echo form_error('harga_dekorasi') ?></small>
    </div>
    <h3>Dokumentasi</h3>
    <div class="form-group">
      <small class="text-muted">Dokumentasi</small>
      <textarea name="dokumentasi" rows="5" class="form-control" placeholder="Isi Dokumentasi"><?php echo $this->input->post('dokumentasi') ?></textarea>
      <small class="text-primary"><?php echo form_error('dokumentasi') ?></small>
    </div>
    <div class="form-group">
      <small class="text-muted">Harga Dokumentasi</small>
      <input type="text" class="form-control" placeholder="Harga Dokumentasi (Rp)" name="harga_dokumentasi" value="<?php echo $this->input->post('harga_dokumentasi') ?>">
      <small class="text-primary"><?php echo form_error('harga_dokumentasi') ?></small>
    </div>
    <h3>Rias</h3>
    <div class="form-group">
      <small class="text-muted">Rias</small>
      <textarea name="rias" rows="5" class="form-control" placeholder="Isi Rias"><?php echo $this->input->post('rias') ?></textarea>
      <small class="text-primary"><?php echo form_error('rias') ?></small>
    </div>
    <div class="form-group">
      <small class="text-muted">Harga Rias</small>
      <input type="text" class="form-control" placeholder="Harga Rias (Rp)" name="harga_rias" value="<?php echo $this->input->post('harga_rias') ?>">
      <small class="text-primary"><?php echo form_error('harga_rias') ?></small>
    </div>
    <h3>Undangan</h3>
    <div class="form-group">
      <small class="text-muted">Jumlah Tamu</small>
      <input type="text" class="form-control" placeholder="Jumlah Tamu" name="tamu" value="<?php echo $this->input->post('tamu') ?>">
      <small class="text-primary"><?php echo form_error('tamu') ?></small>
    </div>
    <div class="form-group">
      <small class="text-muted">Harga Undangan</small>
      <input type="text" class="form-control" placeholder="Harga Undangan (Rp)" name="harga_undangan" value="<?php echo $this->input->post('harga_undangan') ?>">
      <small class="text-primary"><?php echo form_error('harga_undangan') ?></small>
    </div>
    <div class="form-group text-center">
      <a href="<?php echo site_url('admin/paket') ?>" class="btn btn-warning">Kembali</a>
      <button type="submit" class="btn btn-success">Input</button>
    </div>
  </form>
</div>