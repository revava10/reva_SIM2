<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Edit Data Dokter</h1>

    <div class="card shadow">
        <div class="card-body">

            <form method="post" action="<?= site_url('admin/update_dokter/'.$dokter->id_dokter); ?>">

                <div class="form-group">
                    <label>id_dokter</label>
                    <input type="text"
                           name="id_dokter"
                           value="<?= $dokter->id_dokter; ?>"
                           class="form-control"
                           readonly>
                </div>

                <div class="form-group">
                    <label>nama_dokter</label>
                    <input type="text"
                           name="nama_dokter"
                           value="<?= $dokter->nama_dokter; ?>"
                           class="form-control"
                           required>
                </div>

                <div class="form-group">
                    <label>spesialis</label>
                    <input type="text"
                           name="spesialis"
                           value="<?= $dokter->spesialis; ?>"
                           class="form-control"
                           required>
                </div>

                <button type="submit" class="btn btn-primary">
                    Update
                </button>

                <a href="<?= site_url('admin/dokter'); ?>"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>