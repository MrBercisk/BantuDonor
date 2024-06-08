<?= $this->extend('layouts_admin/template_admin') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Rumah Sakit</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Tabel Data RS -->
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-md-6">
                <form action="<?= base_url('datars/update/' . $datars['id']); ?>" method="post">
                    <div class="mb-3">
                        <label for="nama_rs" class="form-label">Nama Rumah Sakit</label>
                        <input type="text" name="nama_rs" class="form-control" value="<?= $datars['nama_rs']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" name="alamat"><?= $datars['alamat']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">Nomor Telepon</label>
                        <input type="number" name="no_telp" class="form-control" value="<?= $datars['no_telp']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $datars['email']; ?>">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>