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
<h1>Data dari <span id="table-name"><?php echo $selectedTable; ?></span></h1><br><br>

<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "go_map";
$db = mysqli_connect($server, $user, $password, $database);
if (!$db) {
    die("Gagal Terhubung Dengan Database : " . mysqli_connect_error());
}

// Query untuk SELECT dari tabel yang dipilih
$query_selected_table = "SELECT `id`, `nama`, `garis_lintang`, `garis_bujur`, `alamat`, `icon`, `gambar` FROM `$selectedTable`";
$result_selected_table = mysqli_query($db, $query_selected_table);

if (mysqli_num_rows($result_selected_table) > 0) {
    echo "<table>";
    echo "<thead><tr><th>ID</th><th>Nama</th><th>Alamat</th></tr></thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($result_selected_table)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['garis_lintang'] . "</td>";
        echo "<td>" . $row['garis_bujur'] . "</td>";
        echo "<td>" . $row['alamat'] . "</td>";
        echo "<td>" . $row['icon'] . "</td>";
        echo "<td>" . $row['gambar'] . "</td>";
        echo "<td><a href='edit_map.php?id=" . $row['id'] . "' class='button'>Edit</a></td>";
        echo "<td><a href='?delete_id=" . $row['id'] . "' class='button'>Delete</a></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "Tidak ada data yang ditemukan.";
}
?>

<br><br>

<a href="home.php" class="back-button">Kembali ke Halaman Utama</a>
</body>

</html>