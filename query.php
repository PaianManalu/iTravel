<?php
$selectedTable = ""; // Menentukan nilai awal untuk variabel $selectedTable

// Handling table selection
if (isset($_GET['table'])) {
    $selectedTable = $_GET['table'];
}

// ... (kode lainnya)

?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Komentar User</title>
    <style>
        h1 {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            border-radius: 4px;
            text-transform: uppercase;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        th {
            background-color: #f2f2f2;
        }

        .button {
            display: inline-block;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .back-button {
            position: fixed;
            left: 10px;
            bottom: 10px;
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            z-index: 9999;
        }
    </style>
</head>

<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "go_map";
$db = mysqli_connect($server, $user, $password, $database);
if (!$db) {
    die("Gagal Terhubung Dengan Database : " . mysqli_connect_error());
}

// Mengecek apakah parameter category ada dalam URL
if (isset($_GET['category'])) {
    $category = $_GET['category'];

    // Melakukan sanitasi pada kategori untuk mencegah serangan SQL Injection
    $category = mysqli_real_escape_string($db, $category);

    // Query untuk SELECT dari tabel dengan kategori yang diterima
    $sql = "SELECT * FROM tb_map WHERE category = '$category'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<h1>Data dari " . $category . " <span id=\"table-name\">" . $selectedTable . "</span></h1><br><br>";
        echo "<table>";
        echo "<thead><tr><th>ID</th><th>Nama</th><th>Alamat</th></tr></thead>";
        echo "<tbody>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['alamat'] . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "Tidak ada data yang ditemukan.";
    }
} else {
    echo "Kategori tidak ditemukan.";
}

mysqli_close($db);
?>