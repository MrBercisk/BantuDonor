<?= $this->extend('layouts_admin/template_admin') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Rumah Sakit</h1>
                </div>
                <div class="col-sm-6">
                    <!-- Button Tambah Data -->
                    <button type="button" class="btn btn-primary float-sm-right" data-bs-toggle="modal" data-bs-target="#modalTambahRs">
                        <i class="fas fa-plus-square"></i>
                        Tambah Data
                    </button>

                    <!-- Modal Tambah Data -->
                    <div class="modal fade text-left" id="modalTambahRs" tabindex="-1" aria-labelledby="modalTambahRsLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalTambahRsLabel">Tambah Data Rumah Sakit</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('datars/create'); ?>" method="post">
                                        <div class="mb-3">
                                            <label for="nama_rs" class="form-label">Nama Rumah Sakit</label>
                                            <input type="text" name="nama_rs" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <textarea class="form-control" name="alamat" id=""></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_telp" class="form-label">Nomor Telepon</label>
                                            <input type="number" name="no_telp" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Tabel Data RS -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Rumah Sakit</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rs as $index => $rumahsakit) : ?>
                                    <tr>
                                        <td><?= $index + 1; ?></td>
                                        <td><?= $rumahsakit['nama_rs']; ?></td>
                                        <td><?= $rumahsakit['alamat']; ?></td>
                                        <td><?= $rumahsakit['no_telp']; ?></td>
                                        <td><?= $rumahsakit['email']; ?></td>
                                        <td>
                                            <a href="<?= base_url('DataRs/show/' . $rumahsakit['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil"></i></a>
                                            <a href="<?= base_url('DataRs/delete/' . $rumahsakit['id']); ?>" class="btn btn-danger btn-sm delete-btn"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<!-- /.content-wrapper -->


<?= $this->endSection() ?>