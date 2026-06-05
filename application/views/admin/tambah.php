<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Tambah Data Pasien</h2>

<form method="post" action="<?= site_url('admin/simpan'); ?>">

<div class="form-group">
    <label>Nomor Pasien</label>
    <input type="text" name="nomor_pasien" class="form-control" required>
</div>

<div class="form-group">
    <label>Nama Pasien</label>
    <input type="text" name="nama" class="form-control" required>
</div>

<div class="form-group">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" required>
        <option value="">-- Pilih --</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select>
</div>

<div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" required></textarea>
</div>

<div class="form-group">
    <label>Telepon</label>
    <input type="text" name="telepon" class="form-control">
</div>

<div class="form-group">
    <label>Tanggal Daftar</label>
    <input type="date" name="tanggal_daftar" class="form-control" required>
</div>

<div class="form-group">
    <label>Keluhan</label>
    <textarea name="keluhan" class="form-control"></textarea>
</div>

<div class="form-group">
    <label>Status</label>
    <select name="status" class="form-control">
        <option value="menunggu">Menunggu</option>
        <option value="diproses">Diproses</option>
        <option value="selesai">Selesai</option>
    </select>
</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<a href="<?= site_url('admin');?>" class="btn btn-secondary">Kembali</a>

</form>
</div>