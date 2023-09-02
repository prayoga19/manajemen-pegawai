<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pegawai</h1>  
        <a href="<?= base_url(); ?>/pegawai/create" class="btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Pegawai
        </a>
    </div>
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Pegawai</h6>
                        </div>
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table id="crudTable" class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>nama</th>
                            <th>posisi</th>
                            <th>jabatan</th>
                            <th>control</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php foreach ($pegawai as $pegawaiItem) : ?>
                            <tr>
                                <td><?= $pegawaiItem->nama; ?></td>
                                <td><?= $pegawaiItem->posisi; ?></td>
                                <td><?= $pegawaiItem->jabatan; ?></td>
                                <td>
                                <a class="btn btn-danger" href="<?= base_url('/pegawai/delete/' . $pegawaiItem->id); ?>">
                                <i class="fa fa-trash"></i>
                                </a>
                                <a class="btn btn-info" href="<?= base_url('/pegawai/edit/' . $pegawaiItem->id); ?>">
                                <i class="fas fa-pencil-alt"></i>
                                </a>
                                </td>
        
                            </tr>
                        <?php endforeach; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
     
</div>
<?= $this->endSection() ?>