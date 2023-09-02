<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Edit Profil</h2>

            <?php if (session()->get('success')) : ?>
                <div class="alert alert-success">
                    <?= session()->get('success') ?>
                </div>
            <?php endif; ?>

            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <h4>Periksa Entrian Form</h4>
                                </hr />
                                <?php echo session()->getFlashdata('error'); ?>
                            </div>
                              <?php endif; ?>

            <form action="<?= base_url('/user/edit-profile'); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" value="<?= old('name', session()->get('name')); ?>" required>
                </div>

                <div class="form-group">
                    <label for="profile_image">Foto Profil</label>
                    <input type="file" name="profile_image" class="form-control">

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
