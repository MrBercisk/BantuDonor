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
                            <h3>Halaman Daftar Bantu Donor</h3>
                        </div>

                        <!-- Form Daftar -->
                        <div class="form-daftar uk-container uk-card uk-card-medium uk-card-body">
                            <form action="<?= base_url('daftar/create'); ?>" method="post">
                                <div class="from-rs uk-margin">
                                    <div class="uk-inline">
                                        <select name="rs_id" id="rs_id" class="uk-input uk-form-width-large">
                                            <option value="" disabled selected>Pilih Rumah Sakit Anda</option>
                                            <?php foreach ($rs as $rumahsakit) : ?>
                                                <option value="<?= $rumahsakit['id'] ?>"><?= $rumahsakit['nama_rs'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="from-nama uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                                        <input class="uk-input uk-form-width-large" type="text" name="nama" placeholder="Masukkan Nama Anda">
                                    </div>
                                </div>
                                <div class="from-email uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: message"></span>
                                        <input class="uk-input uk-form-width-large" type="email" name="email" placeholder="Masukkan Email Anda">
                                    </div>
                                </div>
                                <div class="form-password uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input uk-form-width-large" type="password" name="password" placeholder="Masukkan Password Anda">
                                    </div>
                                </div>
                                <div class="form-password uk-margin">
                                    <div class="uk-inline">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input uk-form-width-large" type="password" name="confirm_password" placeholder="Ulangi Password Anda">
                                    </div>
                                </div>
                                <div class="login-button">
                                    <button class="uk-button" type="submit">Daftar</button>
                                </div>
                            </form>
                            <div class="daftar-akun uk-container uk-margin">
                                <p>Sudah Punya Akun? <a href="<?= base_url('login'); ?>" uk-toggle>Login!</a></p>

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