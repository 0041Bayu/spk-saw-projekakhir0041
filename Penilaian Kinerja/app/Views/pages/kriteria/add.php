<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-3 mb-3">
  <h1>Input Data Kriteria</h1>
  <form method="post" action="<?= base_url('kriteria/save');?>">
    <div class="row mb-3">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">Nama Kriteria</label>
          <input type="text" class="form-control" name="nama_kriteria" placeholder="Input Nama Kriteria" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Tipe Kriteria</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioTipe" id="radioTipe1" value="b" checked>
            <label class="form-check-label" for="radioTipe1">
              Benefit
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioTipe" id="radioTipe2" value="c">
            <label class="form-check-label" for="radioTipe2">
              Cost
            </label>
          </div>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="reset" class="btn btn-secondary">Batal</button>
        </div>
      </div>
    </div>
  </form>
</div>
</div>

<?= $this->endSection() ?>