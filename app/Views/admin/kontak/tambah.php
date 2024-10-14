<?= $this->extend('admin/template/template'); ?>
<?= $this->Section('content'); ?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Tambah Kontak</h1>
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="card-body">
                        <form action="<?= base_url('admin/kontak/proses_tambah') ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kontak</label>
                                <input type="text" class="form-control" name="kontak" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No HP</label>
                                <input type="text" class="form-control" name="no_hp" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control" name="alamat"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?= base_url('admin/kontak/index') ?>" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div><!--//app-card-->
            </div>
        </div><!--//row-->
    </div><!--//container-fluid-->
</div><!--//app-content-->

<?= $this->endSection(); ?>