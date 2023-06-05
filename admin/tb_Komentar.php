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

<body>
    <?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "go_map";
    $db = mysqli_connect($server, $user, $password, $database);
    if (!$db) {
        die("Gagal Terhubung Dengan Database : " . mysqli_connect_error());
    }

    // Handling delete request
    if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
        $query_delete = "DELETE FROM `kontak` WHERE `id` = $delete_id";
        $result_delete = mysqli_query($db, $query_delete);

        if ($result_delete) {
            echo "Data berhasil dihapus.";
        } else {
            echo "Gagal menghapus data.";
        }
    }

    // Query untuk SELECT dari tabel "kontak"
    $query_kontak = "SELECT `id`, `nama`, `email`, `subjek`, `pesan`, `tanggal_waktu` FROM `kontak`";
    $result_kontak = mysqli_query($db, $query_kontak);

    echo "<h1>Data dari tabel Komentar User</h1><br><br>";

    if (mysqli_num_rows($result_kontak) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nama</th><th>Email</th><th>Subjek</th><th>Pesan</th><th>Tanggal/Waktu</th><th>Aksi</th></tr>";

        while ($row = mysqli_fetch_assoc($result_kontak)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['subjek'] . "</td>";
            echo "<td>" . $row['pesan'] . "</td>";
            echo "<td>" . $row['tanggal_waktu'] . "</td>";
            echo "<td><a href='?delete_id=" . $row['id'] . "' class='button'>Delete</a></td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Tidak ada data yang ditemukan.";
    }
    ?>
    <a href="home.php" class="back-button">Kembali ke Halaman Utama</a>
</body>

</html>