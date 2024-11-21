<?php
if (isset($_SESSION['is_auth']) == false) {
    header("location: http://localhost:8000/login.php");
}
$title = 'FORM DAFTAR SISWA | APLIKASI DAFTAR SISWA';
include('templates/header.php');

?>

<div class="main-content login-panel">
    <div class="login-body">
        <div class="top d-flex justify-content-between align-items-center">
            <a href="/"><i class="fa-duotone fa-house-chimney"></i></a>
        </div>
        <div class="bottom">
            <h3 class="panel-title">STUDENT CREATE <?= $_SESSION['angka'] ?></h3>
            <form method="POST" action="/db/create.php">
                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-building"></i></span>
                    <input type="text" class="form-control" placeholder="Class" name="class">
                </div>
                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-home"></i></span>
                    <input type="text" class="form-control" placeholder="Jurusan" name="major">
                </div>
                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-users"></i></span>
                    <input type="text" class="form-control" placeholder="Umur" name="age">
                </div>
                <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-note"></i></span>
                    <select class="form-control" name="keterangan">
                        <option value="">PILIH KETERANGAN</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Sakit">Sakit</option>
                        <option value="Izin">Izin</option>
                        <option value="Alfa">Alfa</option>
                    </select>
                </div>
                <button class="btn btn-primary w-100 login-btn" type="submit">SUBMIT</button>
            </form>
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