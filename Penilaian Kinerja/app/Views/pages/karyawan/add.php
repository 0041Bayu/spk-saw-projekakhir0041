<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="container mt-3 mb-3">
  <h1>Input Data Karyawan</h1>
  <form method="post" action="<?= base_url('karyawan/save');?>">
    <div class="row mb-3">
      <div class="col">
        <div class="mb-3">
          <label class="form-label">NIP</label>
          <input type="text" class="form-control" placeholder="Input NIP" name="nip" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" placeholder="Input Nama" name="nama" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Jenis Kelamin</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioJnsKel" id="radioJnsKel1" value="L" checked>
            <label class="form-check-label" for="radioJnsKel1">
              laki-laki
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="radioJnsKel" id="radioJnsKel2" value="P">
            <label class="form-check-label" for="radioJnsKel2">
              Perempuan
            </label>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">No HP</label>
          <input type="text" class="form-control" placeholder="Input No HP" name="no_hp" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Alamat</label>
          <textarea class="form-control" name="alamat"></textarea>
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