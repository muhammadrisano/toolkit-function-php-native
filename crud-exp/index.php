<?php
require('./function/funciton.php');
$siswa = query("SELECT siswa.*, kelas.kelas_nama, kelas.kelas_wali FROM siswa INNER JOIN kelas ON siswa.siswa_kelas = kelas.kelas_id");

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Daftar siswa</title>
</head>

<body>
    <div class="container">


        <h1>Daftar Siswa</h1>
        <a href="./add.php" class="btn btn-primary my-3"> Add Siswa</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">ALamat</th>
                    <th scope="col">TGL</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Wali Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($siswa as $key => $value) : ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><?= $value['siswa_nama'] ?></td>
                        <td><?= $value['siswa_alamat'] ?></td>
                        <td><?= $value['siswa_tgl_lahir'] ?></td>
                        <td><?= $value['kelas_nama'] ?></td>
                        <td><?= $value['kelas_wali'] ?></td>
                        <td>
                            <a href="./update.php?id=<?= $value['siswa_id']; ?>" class="badge badge-success">Edit</a>
                            <a href="./delete.php?id=<?= $value['siswa_id']; ?>" onclick="return confirm('Yakin');" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>