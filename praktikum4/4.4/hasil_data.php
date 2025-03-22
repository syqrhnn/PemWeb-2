<?php

// mengecek apakah tombol submit sudah ditekan atau belum jika belum maka akan diarahkan kembali ke form-registrasi.php
if (!isset($_POST['submit'])) {
    header("Location: data_mahasiswa.php");
    // menghentikan proses
    exit;
}

// mengambil data dari file data-form-regis.php
require_once 'class_mahasiswa.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Hasil nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="mx-auto mt-5 border border-2 border-dark p-3 bg-success text-white rounded" style="width: 45%;">
        <h3 class="text-center">Hasil Data Mahasiswa</h3>
        <table class="table border border-2 border-success mt-3 text-white w-75 mx-auto">
            <thead>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $nama; ?></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?= $nim; ?></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mata Kuliah</td>
                    <td>:</td>
                    <td><?= $matkul; ?></td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td>:</td>
                    <td><?= $nilai; ?></td>
                </tr>
                <tr>
                    <td>Hasil Ujian</td>
                    <td>:</td>
                    <td><?= $kelulusan; ?></td>
                </tr>
                <tr>
                    <td>Grade</td>
                    <td>:</td>
                    <td><?= $grade; ?></td>
                </tr>
            </tbody>
        </table>
        <div class="text-center my-3">
            <a href="data_mahasiswa.php" class="btn btn-warning">Kembali</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>