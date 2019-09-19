<?php
$conn = mysqli_connect("localhost", "risano", "qwe123", "konekthing");


function query($query)
{
    global $conn;
    $data = [];
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}
function adddata($data)
{

    global $conn;
    $siswa_nama = $data['nama'];
    $siswa_alamat = $data['alamat'];
    $siswa_tgl_lahir = $data['tgl_lahir'];
    $siswa_kelas = $data['kelas_id'];

    $query = "INSERT INTO siswa (siswa_nama,siswa_alamat,siswa_tgl_lahir,siswa_kelas) VALUES( '$siswa_nama','$siswa_alamat','$siswa_tgl_lahir','$siswa_kelas')";
    var_dump($query);
    $tes = mysqli_query($conn, $query);
    var_dump($tes);
    return mysqli_affected_rows($conn);
}

function delete($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE siswa_id = $id");
    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;
    $siswa_nama = $data['nama'];
    $siswa_alamat = $data['alamat'];
    $siswa_tgl_lahir = $data['tgl_lahir'];
    $siswa_kelas = $data['kelas_id'];
    $id = $data['id'];
    mysqli_query($conn, "UPDATE siswa SET siswa_nama ='$siswa_nama', siswa_alamat ='$siswa_alamat' WHERE id = $id ");
}
