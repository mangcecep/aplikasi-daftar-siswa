<?php
$title = 'DETAIL | DASHBOARD';
include('templates/header.php');
include('db/detail.php');

?>

<div class="main-content">
    <div class="col-xxl-12">
        <div class="panel">
            <div class="panel-header py-4">
                <h1>DETAIL SISWA </h1>
                <a class="btn btn-success" href="/aplikasi-daftar-siswa/"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="panel-body">

                <?php if ($student->num_rows > 0) { ?>

                    <table class="table table-dashed recent-order-table" id="myTable">
                        <thead>
                            <?php foreach ($student as $detail) : ?>
                                <tr>
                                    <th>Nama</th>
                                    <th><?= $detail['name'] ?></th>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <th><?= $detail['class'] ?></th>
                                </tr>
                                <tr>
                                    <th>Jurusan</th>
                                    <th><?= $detail['major'] ?></th>
                                </tr>
                                <tr>
                                    <th>Umur</th>
                                    <th><?= $detail['age'] ?></th>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <th><?= $detail['keterangan'] ?></th>
                                </tr>
                            <?php endforeach; ?>
                        </thead>

                    </table>

                <?php } else { ?>
                    <div class="d-flex justify-content-center">\
                        <img src="assets/images/error-404.png" class="img-fluid" />
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>