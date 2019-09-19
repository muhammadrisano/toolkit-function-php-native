<?php
require('./function/crud.php');
$id = $_GET['id'];

$siswa = query("SELECT siswa.*, kelas.kelas_nama, kelas.kelas_wali FROM siswa INNER JOIN kelas ON siswa.siswa_kelas = kelas.kelas_id WHERE siswa_id = $id")[0];
if (isset($_POST['update'])) {
    if (update($_POST) >= 1) {
        echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php'; 
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal ditambahkan');
            document.location.href = 'index.php'; 
        </script>";
    };
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Add Siswa</title>
</head>

<body>
    <div class="container">
        <h1>Add Siswa</h1>
        <div class="row">
            <div class="col-6">
                <form method="post" action="">
                    <input type="hidden" name="id" id="id" value="<?= $id; ?>">
                    <div class="form-group">
                        <label for="nama_siswa">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama_siswa" placeholder="Nama siswa" value="<?= $siswa['siswa_nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $siswa['siswa_alamat']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?= $siswa['siswa_tgl_lahir']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select id="kelas" class="form-control" name="kelas_id">
                            <option value="<?= $siswa['siswa_kelas']; ?>" selected><?= $siswa['kelas_nama']; ?></option>
                            <option value=1>kelas 10</option>
                            <option value=2>kelas 11</option>
                        </select>
                    </div>
                    <button type="submit" name="update">Update</button>
                </form>
            </div>
        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>