<?php

// Membuat koneksi ke database
$conn = new mysqli("localhost", "root", "", "2106146_Akmal");

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memproses data dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $golongan_darah = $_POST['golongan_darah'];
    $email = $_POST['email'];

    // Menyimpan data ke database
    $sql = "INSERT INTO formulir ( nama, usia, alamat, jenis_kelamin, golongan_darah, email)
    VALUES ('$nama', '$usia', '$alamat', '$jenis_kelamin', '$golongan_darah', '$email')";


    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
