<!DOCTYPE html>
<html>

<head>
    <title>Data Komentar User</title>
    <style>
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

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="submit"] {
            margin-top: 20px;
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
        die("Gagal Terhubung Dengan Database: " . mysqli_connect_error());
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Query untuk SELECT data berdasarkan ID
        $query_select = "SELECT `id`, `nama`, `garis_lintang`, `garis_bujur`, `alamat`, `icon`, `gambar` FROM `tb_rumahmakan` WHERE `id` = $id";
        $result_select = mysqli_query($db, $query_select);

        if (mysqli_num_rows($result_select) > 0) {
            $row = mysqli_fetch_assoc($result_select);
            $nama = $row['nama'];
            $garis_lintang = $row['garis_lintang'];
            $garis_bujur = $row['garis_bujur'];
            $alamat = $row['alamat'];
            $icon = $row['icon'];
            $gambar = $row['gambar'];
        } else {
            echo "Data tidak ditemukan.";
        }
    }

    // Handling form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $garis_lintang = $_POST['garis_lintang'];
        $garis_bujur = $_POST['garis_bujur'];
        $alamat = $_POST['alamat'];
        $icon = $_POST['icon'];
        $gambar = $_POST['gambar'];

        // Query untuk update data
        $query_update = "UPDATE `tb_rumahmakan` SET `nama` = '$nama', `garis_lintang` = '$garis_lintang', `garis_bujur` = '$garis_bujur', `alamat` = '$alamat', `icon` = '$icon', `gambar` = '$gambar' WHERE `id` = $id";
        $result_update = mysqli_query($db, $query_update);

        if ($result_update) {
            echo "Data berhasil diperbarui.";
        } else {
            echo "Gagal memperbarui data.";
        }
    }
    ?>

    <h1>Edit Data</h1>

    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>">

        <label for="garis_lintang">Garis Lintang:</label>
        <input type="text" name="garis_lintang" value="<?php echo $garis_lintang; ?>">

        <label for="garis_bujur">Garis Bujur:</label>
        <input type="text" name="garis_bujur" value="<?php echo $garis_bujur; ?>">

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="<?php echo $alamat; ?>">

        <label for="icon">Icon:</label>
        <input type="text" name="icon" value="<?php echo $icon; ?>">

        <label for="gambar">Gambar:</label>
        <input type="text" name="gambar" value="<?php echo $gambar; ?>">

        <input type="submit" value="Simpan">
    </form>
    <a href="tb_rumahmakan.php" class="back-button">Kembali ke Halaman Utama</a>
</body>

</html>