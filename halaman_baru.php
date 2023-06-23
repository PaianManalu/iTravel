<?php
// Lakukan koneksi ke database
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'go_map';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

// Periksa apakah parameter nama telah dikirimkan
if (isset($_GET['nama'])) {
    // Ambil nilai parameter
    $namaDestinasi = $_GET['nama'];

    // Query SQL dengan menggunakan parameter nama_destinasi
    $sql = "SELECT `alamat` FROM `tb_map` WHERE `nama` = '$namaDestinasi'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Menampilkan keterangan
        $row = mysqli_fetch_assoc($result);
        echo "Keterangan: " . $row["keterangan"];
    } else {
        echo "Keterangan tidak ditemukan.";
    }
} else {
    echo "Nama destinasi tidak ditemukan.";
}

// Menutup koneksi database
mysqli_close($conn);
?>