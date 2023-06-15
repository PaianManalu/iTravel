<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "go_map";
$conn = new mysqli($servername, $username, $password, $dbname);

// Memastikan koneksi berhasil
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Insert data wisata
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $garisLintang = $_POST["garis_lintang"];
    $garisBujur = $_POST["garis_bujur"];
    $alamat = $_POST["alamat"];
    $icon = $_POST["icon"];
    $gambar = $_FILES["gambar"];

    $allowed_ext = array("jpg", "jpeg", "png");
    $gambar_ext = strtolower(pathinfo($gambar["name"], PATHINFO_EXTENSION));
    $gambar_size = $gambar["size"];
    $gambar_tmp = $gambar["tmp_name"];

    if (in_array($gambar_ext, $allowed_ext)) {
        // Cek ukuran file gambar
        if ($gambar_size < 25242880) { // 5MB
            // Generate nama unik untuk file gambar
            $gambar_new_name = uniqid('gambar_', true) . '.' . $gambar_ext;

            // Lokasi penyimpanan file gambar
            $gambar_path = 'C:/xampp/htdocs/iTravel/img/' . $gambar_new_name;

            // Pindahkan file gambar ke folder tujuan
            if (move_uploaded_file($gambar_tmp, $gambar_path)) {
                // File gambar berhasil dipindahkan
                // Lakukan proses insert data ke dalam database di sini
                $sql_insert = "INSERT INTO tb_wisata (id, nama, garis_lintang, garis_bujur, alamat, icon, gambar) VALUES ('$id', '$nama', '$garisLintang', '$garisBujur', '$alamat', 'img/$icon', 'img/$gambar_new_name')";
                if ($conn->query($sql_insert) === true) {
                    echo "Data berhasil diinsert.";
                } else {
                    echo "Error: " . $sql_insert . "<br>" . $conn->error;
                }
            } else {
                // File gambar gagal dipindahkan
                echo "Gagal memindahkan file gambar.";
            }
        } else {
            // Ukuran file gambar terlalu besar
            echo "Ukuran file gambar terlalu besar. Maksimal 5MB.";
        }
    } else {
        // Ekstensi file gambar tidak diizinkan
        echo "Ekstensi file gambar tidak diizinkan.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Insert Data</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        padding: 20px;
    }

    h2 {
        color: #333;
    }

    form {
        width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
        color: #666;
        font-weight: bold;
    }

    input[type="text"],
    input[type="file"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<body>
    <h2>Form Insert Data</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="id">ID:</label>
        <input type="text" name="id" id="id"><br><br>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama"><br><br>

        <label for="garis_lintang">Garis Lintang:</label>
        <input type="text" name="garis_lintang" id="garis_lintang"><br><br>

        <label for="garis_bujur">Garis Bujur:</label>
        <input type="text" name="garis_bujur" id="garis_bujur"><br><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat"><br><br>

        <label for="icon">Icon:</label>
        <input type="text" name="icon" id="icon"><br><br>

        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" id="gambar"><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>