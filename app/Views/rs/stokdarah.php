<?= $this->extend('layouts_rs/template_rs') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Stok Darah</h1>
                </div>
                <div class="col-sm-6">
                    <!-- Modal Tambah Data -->
                    <div class="modal fade text-left" id="modalTambahStok" tabindex="-1" aria-labelledby="modalTambahStokLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalTambahStokLabel">Tambah Data Stok Darah</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="goldar" class="form-label">Golongan Darah</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pilih Golongan Darah</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="AB">AB</option>
                                                <option value="O">O</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jmlStok" class="form-label">Jumlah Stok</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
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
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Golongan Darah</th>
                    <th>Jumlah Stok Darah</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stock as $index => $donor) : ?>
                    <tr>
                        <td><?= $index + 1; ?></td>
                        <td><?= $donor['nama_goldar']; ?></td>
                        <td><?= $donor['stock']; ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>