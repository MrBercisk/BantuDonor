<?= $this->extend('layouts_admin/template_admin') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-12">
                    <h1 class="m-0">Edit Rumah Sakit</h1>
                    <div class="card mt-2">
                        <div class="card-body">
                            <form action="<?= base_url('datapendonor/update/' . $datadonor['id']); ?>" method="post">
                                <div class="mb-3">
                                    <label for="tanggal" class="form-label">Tanggal Donor</label>
                                    <input type="date" class="form-control" name="tanggal" value="<?= $datadonor['tanggal']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" value="<?= $datadonor['nama']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="no_id" class="form-label">Nomor ID (KTP/SIM)</label>
                                    <input type="number" class="form-control" name="no_id" value="<?= $datadonor['no_id']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">Nomor HP / WA</label>
                                    <input type="number" class="form-control" name="no_telp" value="<?= $datadonor['no_telp']; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="goldar" class="form-label">Golongan Darah</label>
                                    <select class="form-select" aria-label="Default select example" name="goldar_id">
                                        <option value="" disabled selected>Pilih Golongan Darah</option>
                                        <?php foreach ($goldar as $gol) : ?>
                                            <option value="<?= $gol['id'] ?>" <?php if ($gol['id'] == $datadonor['goldar_id']) echo 'selected'; ?>>
                                                <?= $gol['nama_goldar'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="rs" class="form-label">Lokasi Donor</label>
                                    <select class="form-select" aria-label="Default select example" name="rs_id">
                                        <option value="" disabled selected>Pilih Lokasi Donor</option>
                                        <?php foreach ($rs as $rumahsakit) : ?>
                                            <option value="<?= $rumahsakit['id'] ?>" <?php if ($rumahsakit['id'] == $datadonor['rs_id']) echo 'selected'; ?>><?= $rumahsakit['nama_rs'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="keterangan" class="form-label">Keterangan(Sudah Donor/Belum Donor)</label>
                                    <select class="form-select" aria-label="Default select example" name="keterangan">
                                        <option value="" disabled selected>Pilih Keterangan</option>
                                        <option value="Sudah Donor" <?php if ($datadonor['keterangan'] == "Sudah Donor") echo 'selected'; ?>>Sudah Donor</option>
                                        <option value="Belum Donor" <?php if ($datadonor['keterangan'] == "Belum Donor") echo 'selected'; ?>>Belum Donor</option>
                                    </select>
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
    </div>
    <!-- /.content-header -->

    <!-- Tabel Data RS -->
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-md-6">

            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>