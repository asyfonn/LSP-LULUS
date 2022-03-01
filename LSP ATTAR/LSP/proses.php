<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// membuat variabel untuk menampung data dari form
$nama               = $_POST['nama'];
$nik                = $_POST['nik'];
$nohp               = $_POST['nohp'];
$wisata             = $_POST['wisata'];
$harga              = $_POST['harga'];
$tanggal            = $_POST['tanggal'];
$jumlah             = $_POST['jumlah'];
$anak               = $_POST['anak'];
$total              = $_POST['total'];


// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO dbwisata(`nama`, `nik`, `nohp`, `wisata`, harga, `tanggal`, `jumlah`, `anak`, `total`) VALUES ('$nama', '$nik', '$nohp', '$wisata','$harga', '$tanggal', '$jumlah', '$anak', '$total')";
$result = mysqli_query($conn, $query);
// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($conn) .
        " - " . mysqli_error($conn));
} else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil ditambah.');window.location='database.php';</script>";
}

$query = "INSERT INTO dbwisata VALUES ('', '$nama', '$nik', '$nohp', '$wisata','$harga', '$tanggal', '$jumlah', '$anak', '$total','')";
$result = mysqli_query($conn, $query);
// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($conn) .
        " - " . mysqli_error($conn));
} else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
}
