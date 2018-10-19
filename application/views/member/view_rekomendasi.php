<div class="container mt-5">
  <nav aria-label="breadcrumb" role="navigation">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url('member') ?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Rekomendasi Paket</li>
    </ol>
  </nav>

  <h1 class="display-4 text-center mt-5">
    <i class="fa fa-info-circle"></i>
    Rekomendasi Paket
  </h1>  
  <div class="row mt-5">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <?php echo form_open('member/hasil_rekomendasi')?>
        <div class="form-group">
          <small class="text-muted">Prioritas Catering</small>
          <select name="c1" class="custom-select form-control" required="">
            <option value="" disabled="" hidden="" selected="">Pilih</option>
            <option value="1">Tidak Penting</option>
            <option value="2">Cukup Penting</option>
            <option value="3">Penting</option>
            <option value="4">Sangat Penting</option>
          </select>
        </div>
        <div class="form-group">
          <small class="text-muted">Prioritas Dekorasi</small>
          <select name="c2" class="custom-select form-control" required="">
            <option value="" disabled="" hidden="" selected="">Pilih</option>
            <option value="1">Tidak Penting</option>
            <option value="2">Cukup Penting</option>
            <option value="3">Penting</option>
            <option value="4">Sangat Penting</option>
          </select>
        </div>
        <div class="form-group">
          <small class="text-muted">Prioritas Dokumentasi</small>
          <select name="c3" class="custom-select form-control" required="">
            <option value="" disabled="" hidden="" selected="">Pilih</option>
            <option value="1">Tidak Penting</option>
            <option value="2">Cukup Penting</option>
            <option value="3">Penting</option>
            <option value="4">Sangat Penting</option>
          </select>
        </div>
        <div class="form-group">
          <small class="text-muted">Prioritas Rias</small>
          <select name="c4" class="custom-select form-control" required="">
            <option value="" disabled="" hidden="" selected="">Pilih</option>
            <option value="1">Tidak Penting</option>
            <option value="2">Cukup Penting</option>
            <option value="3">Penting</option>
            <option value="4">Sangat Penting</option>
          </select>
        </div>
        <div class="form-group">
          <small class="text-muted">Prioritas Undangan</small>
          <select name="c5" class="custom-select form-control" required="">
            <option value="" disabled="" hidden="" selected="">Pilih</option>
            <option value="1">Tidak Penting</option>
            <option value="2">Cukup Penting</option>
            <option value="3">Penting</option>
            <option value="4">Sangat Penting</option>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" name="input" class="btn btn-primary form-control">Lihat Rekomendasi</button>
        </div>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
  

</div>