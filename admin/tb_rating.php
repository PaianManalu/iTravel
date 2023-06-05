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
        $query_delete = "DELETE FROM `ratings` WHERE `id` = $delete_id";
        $result_delete = mysqli_query($db, $query_delete);

        if ($result_delete) {
            echo "Data berhasil dihapus.";
        } else {
            echo "Gagal menghapus data.";
        }
    }

    // Query untuk SELECT dari tabel "ratings"
    $query_ratings = "SELECT `id`, `rating`, `comment` FROM `ratings`";
    $result_ratings = mysqli_query($db, $query_ratings);

    echo "<h1>Data dari tabel Rating User</h1><br><br>";

    if (mysqli_num_rows($result_ratings) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Rating</th><th>Komentar</th><th>Aksi</th></tr>";

        while ($row = mysqli_fetch_assoc($result_ratings)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['rating'] . "</td>";
            echo "<td>" . $row['comment'] . "</td>";
            echo "<td><a href='?delete_id=" . $row['id'] . "' class='button'>Delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "Tidak ada data yang ditemukan.";
    }

    echo "<br><br>";
    ?>
    <a href="home.php" class="back-button">Kembali ke Halaman Utama</a>
</body>

</html>