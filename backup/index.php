<?php

$title = 'HOME | DASHBOARD';
include('templates/header.php');
include('db/data.php');
$number = 1;
?>

<div class="main-content">
    <div class="col-xxl-12">
        <div class="panel">
            <div class="panel-header py-4">
                <h1>DAFTAR SISWA </h1>

                <a class="btn btn-success" href="/student-create.php"><i class="fa-solid fa-plus"></i> Tambah</a>
                <a class="btn btn-danger" href="/db/logout.php"><i class="fa-solid fa-sign-out"></i> Logout</a>
            </div>
            <div class="panel-body">
                <?php if (isset($_SESSION['message'])) : ?>
                    <div class="alert alert-success text-center">
                        <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                        ?>
                    </div>
                <?php endif ?>
                <?php if (isset($_SESSION['deleted'])) : ?>
                    <div class="alert alert-danger text-center">
                        <?php
                        echo $_SESSION['deleted'];
                        unset($_SESSION['deleted']);
                        ?>
                    </div>
                <?php endif ?>
                <?php if (isset($_SESSION['updated'])) : ?>
                    <div class="alert alert-info text-center">
                        <?php
                        echo $_SESSION['updated'];
                        unset($_SESSION['updated']);
                        ?>
                    </div>
                <?php endif ?>
                <table class="table table-dashed recent-order-table" id="myTable">
                    <thead>
                        <tr>
                            <th>No </th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Umur</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // print_r($_SERVER['REQUEST_URI']);

                        foreach ($students as $student) : ?>
                            <tr>
                                <td><?= $number++ ?></td>
                                <td><?= $student['name']  ?></td>
                                <td><?= $student['class'] ?></td>
                                <td> <?= $student['major'] ?></td>
                                <td> <?= $student['age'] ?></td>
                                <td> <?php
                                        if ($student['keterangan'] == 'Hadir') {
                                            echo '<span class="bg-success p-2 rounded text-light">HADIR</span>';
                                        } else if ($student['keterangan'] == 'Sakit') {
                                            echo '<span class="bg-warning p-2 rounded text-light">SAKIT</span>';
                                        } else if ($student['keterangan'] == 'Izin') {
                                            echo '<span class="bg-info p-2 rounded text-light">IZIN</span>';
                                        } else {
                                            echo '<span class="bg-danger p-2 rounded text-light">ALFA</span>';
                                        }

                                        ?></td>
                                <td>
                                    <div class="btn-box">
                                        <a href="/detail.php?id=<?= $student['id']  ?>"><i class="fa-light fa-eye"></i></a>
                                        <a href="/student-update.php?id=<?= $student['id'] ?>"><i class="fa-light fa-pen"></i></a>
                                        <button
                                            onclick="deleteConfirmation()">
                                            <i class="fa-light fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteConfirmation() {
        if (confirm('are you sure want to delete this data?') == true) {
            window.location.href = '/db/delete.php?id=<?= $student['id'] ?>'
        }
    }
</script>
<?php
include('templates/footer.php')

?>