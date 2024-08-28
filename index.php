<?php
include('templates/header.php');

$students =  [
    [
        "name" => "Ira",
        "kelas" => "XI",
        "jurusan" => "PPLG",
        "umur" => 15,
        "keterangan" => "Hadir",
    ],
    [
        "kelas" => "XI",
        "name" => "Satria",
        "jurusan" => "PPLG",
        "umur" => 17,
        "keterangan" => "Sakit",
    ],
    [
        "kelas" => "XI",
        "name" => "Fauzi",
        "jurusan" => "PPLG",
        "umur" => 17,
        "keterangan" => "Izin",
    ],
    [
        "kelas" => "XI",
        "name" => "Haifa",
        "jurusan" => "PPLG",
        "umur" => 17,
        "keterangan" => "Sakit",
    ],

];

// echo count($students[0])
// var_dump($students);
$number = 1;


?>

<div class="main-content">
    <div class="col-xxl-8">
        <div class="panel">
            <div class="panel-header py-4">
                <h1>DAFTAR SISWA</h1>
                <button class="btn btn-success"><i class="fa-solid fa-plus"></i> Tambah</button>
            </div>
            <div class="panel-body">
                <table class="table table-dashed recent-order-table" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Umur</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $student) : ?>
                            <tr>
                                <td><?= $number++ ?></td>
                                <td><?= $student['name']  ?></td>
                                <td><?= $student['kelas'] ?></td>
                                <td> <?= $student['jurusan'] ?></td>
                                <td> <?= $student['umur'] ?></td>
                                <td> <?php
                                        if ($student['keterangan'] == 'Hadir') {
                                            echo '<span class="bg-success p-2 rounded text-light">HADIR</span>';
                                        } else if ($student['keterangan'] == 'Sakit') {
                                            echo '<span class="bg-danger p-2 rounded text-light">SAKIT</span>';
                                        } else {
                                            echo '<span class="bg-info p-2 rounded text-light">IZIN</span>';
                                        }

                                        ?></td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <div class="table-bottom-control"></div>
            </div>
        </div>
    </div>


    <!-- <?php for ($i = 0; $i < count($students); $i++) : ?>
        <ul style="margin-bottom: 20px;">
            <li>Nama: <?php echo $students[$i]['nama'] ?></li>
            <li>Kelas: <?php echo $students[$i]['kelas'] ?></li>
            <li>Jurusan: <?php echo $students[$i]['jurusan'] ?></li>
            <li>Umur: <?php echo $students[$i]['umur'] ?></li>
            <li>Keterangan: <?php echo $students[$i]['keterangan'] ?></li>
        </ul>
    <?php endfor ?> -->
</div>

<?php include('templates/footer.php') ?>