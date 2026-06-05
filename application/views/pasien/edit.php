<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Edit Data Pasien</h1>

    <div class="card shadow">
        <div class="card-body">

            <form method="post" action="<?= site_url('admin/update_pasien/'.$pasien->id_pasien); ?>">

                <div class="form-group">
                    <label>nama</label>
                    <input type="text"
                           name="nama"
                           value="<?= $pasien->nama; ?>"
                           class="form-control"
                           required>
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date"
                           name="tanggal_lahir"
                           value="<?= $pasien->tanggal_lahir; ?>"
                           class="form-control"
                           required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat"
                              class="form-control"
                              rows="3"
                              required><?= $pasien->alamat; ?></textarea>
                </div>

                <div class="form-group">
                    <label>no_telp</label>
                    <input type="text"
                           name="no_telp"
                           value="<?= $pasien->no_telp; ?>"
                           class="form-control"
                           required>
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text"
                           name="username"
                           value="<?= $pasien->username; ?>"
                           class="form-control"
                           required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text"
                           name="password"
                           value="<?= $pasien->password; ?>"
                           class="form-control"
                           required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

                <a href="<?= site_url('admin/pasien'); ?>"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>