<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Memeriksa apakah kunci array 'rating' ada dan tidak kosong
    if (isset($_POST['rating']) && !empty($_POST['rating'])) {
        $rating = $_POST['rating'];
    } else {
        $rating = null;
    }

    // Memeriksa apakah kunci array 'comment' ada dan tidak kosong
    if (isset($_POST['comment']) && !empty($_POST['comment'])) {
        $comment = $_POST['comment'];
    } else {
        $comment = null;
    }

    // Konfigurasi koneksi ke database
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'go_map';

    // Membuat koneksi ke database
    $conn = mysqli_connect($host, $user, $pass, $db);

    // Memeriksa koneksi
    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    // Query SQL untuk menyimpan rating dan komentar ke tabel ratings
    if ($rating !== null && $comment !== null) {
        $query = "INSERT INTO ratings (rating, comment) VALUES ('$rating', '$comment')";
    } elseif ($rating !== null) {
        $query = "INSERT INTO ratings (rating) VALUES ('$rating')";
    } elseif ($comment !== null) {
        $query = "INSERT INTO ratings (comment) VALUES ('$comment')";
    } else {
        echo "Tidak ada data yang diisi";
        mysqli_close($conn);
        exit();
    }

    if (mysqli_query($conn, $query)) {
        echo "Data rating dan komentar berhasil disimpan";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Menutup koneksi ke database
    mysqli_close($conn);
}
