<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "go_map";
$conn = new mysqli($servername, $username, $password, $dbname);

// Login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Ambil data admin dari database berdasarkan nama pengguna
    $sql = "SELECT * FROM admin WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        // Verifikasi sandi
        if (password_verify($password, $hashedPassword)) {
            // Login berhasil
            session_start();
            $_SESSION["username"] = $username;
            header("Location: admin.php");
            exit();
        } else {
            // Login gagal
            header("Location: home.php");
            exit();
        }
    }
}
