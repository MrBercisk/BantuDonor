<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="assets/style.css">
    <title><?= $title; ?></title>
</head>

<body>

    <!-- Header -->
    <nav class="uk-navbar-container">
        <div class="uk-container-fluid navbar" uk-sticky="uk-navbar-sticky">
            <div class="uk-container" uk-navbar>

                <div class="uk-navbar-left uk-light">

                    <a class="uk-navbar-item uk-logo" href="home">
                        <img src="assets/img/donor.png" width="75" alt="Logo">
                    </a>
                </div>

                <div class="uk-navbar-right uk-light">
                    <ul class="uk-navbar-nav">
                        <li><a href="home"><span uk-icon="icon: home"></span>Home</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>
    <!-- Header End -->

    <!-- Content -->
    <main>
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
            <div class="uk-card-media-left uk-cover-container">
                <img src="https://img.freepik.com/free-vector/flat-world-blood-donor-day-illustration_23-2149407821.jpg?w=740" alt="" uk-cover>
                <!-- <canvas width="600" height="400"></canvas> -->
            </div>

            <div>
                <!-- Halaman Login -->
                <div class="uk-card-body">
                    <div class="login uk-container uk-text-center uk-padding ">
                        <div class="judul-login uk-container uk-padding uk-padding-remove-top">
                            <h3>Halaman Login Bantu Donor</h3>
                        </div>

                        <!-- Form Login -->
                        <div class="form-login uk-container uk-card uk-card-medium uk-card-body">
                            <form action="<?= base_url('login/create'); ?>" method="post">
                                <div class="from-email uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                                        <input class="uk-input uk-form-width-large" type="email" name="email" placeholder="Masukkan Email Anda">
                                    </div>
                                </div>
                                <div class="form-password uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input uk-form-width-large" type="password" name="password" placeholder="Masukkan Password Anda">
                                    </div>
                                </div>
                                <div class="login-button">
                                    <button class="uk-button" type="submit">Masuk</button>
                                </div>
                            </form>
                            <div class="daftar-akun uk-container uk-margin">
                                <p>Belum Punya Akun? <a href="<?= base_url('daftar'); ?>" uk-toggle>Daftar Disini!</a></p>

                                <!-- Register -->
                                <div id="register" uk-modal>
                                    <div class="uk-modal-dialog uk-modal-body modal-register">
                                        <h3 class="uk-modal-title uk-text-center">Daftar Akun</h3>
                                        <div class="form-register">
                                            <form action="<?= base_url('daftar/create'); ?>" method="post" class="uk-grid-small" uk-grid>
                                                <!-- Data RS -->
                                                <div class="nama-Rs uk-width-1-1">
                                                    <input class="uk-input" type="text" placeholder="Masukkan Nama Rumah Sakit Anda">
                                                </div>

                                                <!-- Data RS End -->

                                                <div class="from-register-email uk-width-1-1">
                                                    <input class="uk-input" type="email" name="email" placeholder="Masukkan Email">
                                                </div>
                                                <div class="form-register-password uk-width-1-2@s">
                                                    <input class="uk-input" type="password" name="password" placeholder="Masukkan Password">
                                                </div>
                                                <div class="form-register-repeatPassword uk-width-1-2@s">
                                                    <input class="uk-input" type="password" name="konfirmasi_password" placeholder="Ulangi Password">
                                                </div>
                                            </form>
                                        </div>
                                        <p class="uk-text-right">
                                            <button class="uk-button uk-modal-close" type="button">Batal</button>
                                            <button class="uk-button uk-button-primary" type="submit">Daftar</button>
                                        </p>
                                    </div>
                                </div>
                                <!-- Register End -->

                            </div>
                        </div>
                    </div>
                    <!-- Halaman Login End -->
                </div>
            </div>

    </main>
    <!-- Content End -->

    <!-- Footer -->
    <footer id="footer">
        <div class="uk-container-fluid footer uk-text-center uk-text-warning">
            <p>&copy Bantu Donor</p>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Cek apakah ada notifikasi Sweet Alert
        <?php if (session()->has('sweet_alert')) : ?>
            // Mendapatkan data notifikasi dari Flashdata
            var sweetAlertData = <?= session('sweet_alert') ?>;

            // Menampilkan Sweet Alert
            Swal.fire({
                icon: sweetAlertData.success ? 'success' : 'error',
                title: sweetAlertData.message,
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        <?php endif; ?>
    </script>

</body>

</html>