<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'go_map';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Tangkap data yang dikirim dari form kontak dan lakukan pembersihan
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$subjek = mysqli_real_escape_string($conn, $_POST['subjek']);
$pesan = mysqli_real_escape_string($conn, $_POST['pesan']);

// Buat prepared statement untuk memasukkan data ke dalam tabel
$sql = "INSERT INTO kontak (nama, email, subjek, pesan) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $nama, $email, $subjek, $pesan);

if (mysqli_stmt_execute($stmt)) {
    $response = "Pesan kontak berhasil dikirim";
} else {
    $response = "Error: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

// Mengirimkan notifikasi ke halaman sebelumnya menggunakan JavaScript
echo "<script>
    window.onload = function() {
        alert('$response');
        window.history.go(-1);
    }
</script>";
