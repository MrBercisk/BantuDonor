<?= $this->extend('layouts_admin/template_admin') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pendonor</h1>
                </div>
                <div class="col-sm-6">
                    <!-- Button Tambah Data -->
                    <button type="button" class="btn btn-primary float-sm-right" data-bs-toggle="modal" data-bs-target="#modalTambahStok">
                        <i class="fas fa-plus-square"></i>
                        Tambah Data
                    </button>

                    <!-- Modal Tambah Data -->
                    <div class="modal fade text-left" id="modalTambahStok" tabindex="-1" aria-labelledby="modalTambahStokLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalTambahStokLabel">Tambah Data Stok Darah</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('datapendonor/create'); ?>" method="post">
                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Tanggal Donor</label>
                                            <input type="date" class="form-control" name="tanggal">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_id" class="form-label">Nomor ID (KTP/SIM)</label>
                                            <input type="number" class="form-control" name="no_id">
                                        </div>
                                        <div class="mb-3">
                                            <label for="no_telp" class="form-label">Nomor HP / WA</label>
                                            <input type="number" class="form-control" name="no_telp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="goldar" class="form-label">Golongan Darah</label>
                                            <select class="form-select" aria-label="Default select example" name="goldar_id">
                                                <option value="" disabled selected>Pilih Golongan Darah</option>
                                                <?php foreach ($goldar as $gol) : ?>
                                                    <option value="<?= $gol['id'] ?>"><?= $gol['nama_goldar'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="rs" class="form-label">Lokasi Donor</label>
                                            <select class="form-select" aria-label="Default select example" name="rs_id">
                                                <option value="" disabled selected>Pilih Lokasi Donor</option>
                                                <?php foreach ($rs as $rumahsakit) : ?>
                                                    <option value="<?= $rumahsakit['id'] ?>"><?= $rumahsakit['nama_rs'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
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
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Donor</th>
                                    <th>Nama Lengkap</th>
                                    <th>ID (KTP / SIM)</th>
                                    <th>No HP / WA</th>
                                    <th>Golongan Darah</th>
                                    <th>Lokasi Donor</th>
                                    <th>Keterangan (Sudah Donor / Belum)</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pendonor as $index => $donor) : ?>
                                    <tr>
                                        <td><?= $index + 1; ?></td>
                                        <td><?= $donor['tanggal']; ?></td>
                                        <td><?= $donor['nama']; ?></td>
                                        <td><?= $donor['no_id']; ?></td>
                                        <td><?= $donor['no_telp']; ?></td>
                                        <td><?= $donor['nama_goldar']; ?></td>
                                        <td><?= $donor['nama_rs']; ?></td>
                                        <td><?= $donor['keterangan']; ?></td>
                                        <td>
                                            <a href="<?= base_url('datapendonor/show/' . $donor['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil"></i></a>
                                            <a href="<?= base_url('datapendonor/delete/' . $donor['id']); ?>" class="btn btn-danger btn-sm delete-btn"><i class="fas fa-trash"></i></a>
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