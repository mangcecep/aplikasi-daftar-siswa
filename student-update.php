<?php
$title = 'FORM UPDATE SISWA | APLIKASI DAFTAR SISWA';
include('templates/header.php');
include('db/update.php');

?>

<div class="main-content login-panel">
    <div class="login-body">
        <div class="top d-flex justify-content-between align-items-center">
            <a href="/aplikasi-daftar-siswa"><i class="fa-duotone fa-house-chimney"></i></a>
        </div>
        <div class="bottom">
            <h3 class="panel-title">STUDENT UPDATE</h3>
            <?php if ($student->num_rows > 0) { ?>

                <form method="POST" action="/aplikasi-daftar-siswa/db/update.php">
                    <?php foreach ($student as $s) : ?>
                        <input
                            type="hidden"
                            name="id"
                            value="<?= $s['id'] ?>" />
                        <div class="input-group mb-25">
                            <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Name"
                                name="name"
                                value="<?= $s['name'] ?>" />
                        </div>
                        <div class="input-group mb-25">
                            <span class="input-group-text"><i class="fa-regular fa-building"></i></span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Class"
                                name="class"
                                value="<?= $s['class'] ?>" />
                        </div>
                        <div class="input-group mb-25">
                            <span class="input-group-text"><i class="fa-regular fa-home"></i></span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Jurusan"
                                name="major"
                                value="<?= $s['major'] ?>" />
                        </div>
                        <div class="input-group mb-25">
                            <span class="input-group-text"><i class="fa-regular fa-users"></i></span>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Umur"
                                name="age"
                                value="<?= $s['age'] ?>" />
                        </div>
                        <div class="input-group mb-25">
                            <span class="input-group-text"><i class="fa-regular fa-note"></i></span>
                            <select
                                class="form-control"
                                name="keterangan">
                                <option value="">PILIH KETERANGAN</option>
                                <option value="Hadir" <?= $s['keterangan'] == 'Hadir' ? 'selected' : '' ?>>Hadir</option>
                                <option value="Sakit" <?= $s['keterangan'] == 'Sakit' ? 'selected' : '' ?>>Sakit</option>
                                <option value="Izin" <?= $s['keterangan'] == 'Izin' ? 'selected' : '' ?>>Izin</option>
                                <option value="Alfa" <?= $s['keterangan'] == 'Alfa' ? 'selected' : '' ?>>Alfa</option>
                            </select>
                        </div>
                    <?php endforeach ?>
                    <button class="btn btn-primary w-100 login-btn" type="submit">UPDATE</button>
                </form>

            <?php } else { ?>
                <div class="d-flex justify-content-center">
                    <img src="assets/images/error-404.png" class="img-fluid" />
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- footer start -->
    <div class="footer">
        <p>Copyright© <script>
                document.write(new Date().getFullYear())
            </script> All Rights Reserved By <span class="text-primary">Digiboard</span></p>
    </div>
    <!-- footer end -->
</div>

<?php include('templates/footer.php') ?>