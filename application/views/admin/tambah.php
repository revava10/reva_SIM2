<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Tambah Data Pasien</h1>

    <div class="card shadow">
        <div class="card-body">

            <form method="post" action="<?= site_url('admin/simpan_pasien'); ?>">

                <div class="form-group">
                    <label>No Pasien</label>
                    <input type="text" name="no_pasien" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Nama Pasien</label>
                    <input type="text" name="nama_pasien" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label>No Telepon</label>
                    <input type="text" name="telepon" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="<?= site_url('admin/pasien'); ?>" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>