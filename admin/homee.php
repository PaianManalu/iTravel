<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "go_map";
$db = mysqli_connect($server, $user, $password, $database);
if (!$db) {
    die("Gagal Terhubung Dengan Database : " . mysqli_connect_error());
}

// Query untuk SELECT dari tabel "kontak"
$query_kontak = "SELECT `id`, `nama`, `email`, `subjek`, `pesan`, `tanggal_waktu` FROM `kontak`";
$result_kontak = mysqli_query($db, $query_kontak);

echo "Data dari tabel 'kontak':<br><br>";

if (mysqli_num_rows($result_kontak) > 0) {
    while ($row = mysqli_fetch_assoc($result_kontak)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nama: " . $row['nama'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Subjek: " . $row['subjek'] . "<br>";
        echo "Pesan: " . $row['pesan'] . "<br>";
        echo "Tanggal/Waktu: " . $row['tanggal_waktu'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Tidak ada data yang ditemukan.";
}

echo "<br><br>";

// Query untuk SELECT dari tabel "ratings"
$query_ratings = "SELECT `id`, `rating`, `comment` FROM `ratings`";
$result_ratings = mysqli_query($db, $query_ratings);

echo "Data dari tabel 'ratings':<br><br>";

if (mysqli_num_rows($result_ratings) > 0) {
    while ($row = mysqli_fetch_assoc($result_ratings)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Rating: " . $row['rating'] . "<br>";
        echo "Komentar: " . $row['comment'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Tidak ada data yang ditemukan.";
}

echo "<br><br>";


// Query untuk SELECT dari tabel "tb_map"
$query_tb_map = "SELECT `id`, `nama`, `garis_lintang`, `garis_bujur`, `alamat`, `icon`, `gambar` FROM `tb_map`";
$result_tb_map = mysqli_query($db, $query_tb_map);

echo "Data dari tabel 'tb_map':<br><br>";

if (mysqli_num_rows($result_tb_map) > 0) {
    while ($row = mysqli_fetch_assoc($result_tb_map)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nama: " . $row['nama'] . "<br>";
        echo "Garis Lintang: " . $row['garis_lintang'] . "<br>";
        echo "Garis Bujur: " . $row['garis_bujur'] . "<br>";
        echo "Alamat: " . $row['alamat'] . "<br>";
        echo "Icon: " . $row['icon'] . "<br>";
        echo "Gambar: " . $row['gambar'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Tidak ada data yang ditemukan.";
}

echo "<br><br>";
