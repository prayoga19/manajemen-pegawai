<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Halaman Pegawai</h2>
            <p class="dashboard-subtitle">Form Edit Pegawai</p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h4>Periksa Entrian Form</h4>
                            </hr />
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= base_url('/pegawai/update/' . $pegawai->id); ?>" method="POST">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" name="nama" class="form-control" value="<?= $pegawai->nama ?>"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="posisi">Posisi:</label>
                                    <input type="text" name="posisi" class="form-control"
                                        value="<?= $pegawai->posisi ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan:</label>
                                    <input type="text" name="jabatan" class="form-control"
                                        value="<?= $pegawai->jabatan ?>" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
