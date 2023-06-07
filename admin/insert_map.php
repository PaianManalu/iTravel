<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "go_map";
$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Menangkap data yang dikirim melalui form
$id = $_POST['id'] ?? '';
$nama = $_POST['nama'] ?? '';
$garis_lintang = $_POST['garis_lintang'] ?? '';
$garis_bujur = $_POST['garis_bujur'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$icon = $_POST['icon'] ?? '';

// Meng-handle upload gambar
if (isset($_FILES['gambar'])) {
    $gambar = $_FILES['gambar'];
    $gambar_name = $gambar['name'];
    $gambar_tmp = $gambar['tmp_name'];
    $gambar_size = $gambar['size'];
    $gambar_error = $gambar['error'];

    // Cek apakah terjadi error saat upload gambar
    if ($gambar_error === 0) {
        // Mendapatkan informasi file gambar
        $gambar_info = getimagesize($gambar_tmp);
        $gambar_mime = $gambar_info['mime'];

        // Mendapatkan ekstensi file gambar
        $gambar_ext = pathinfo($gambar_name, PATHINFO_EXTENSION);
        $gambar_ext = strtolower($gambar_ext);

        // Ekstensi file yang diizinkan
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];

        // Cek apakah ekstensi file gambar valid
        if (in_array($gambar_ext, $allowed_ext)) {
            // Cek ukuran file gambar
            if ($gambar_size < 25242880) { // 5MB
                // Generate nama unik untuk file gambar
                $gambar_new_name = uniqid('gambar_', true) . '.' . $gambar_ext;

                // Lokasi penyimpanan file gambar
                $gambar_path = 'C:/xampp/htdocs/iTravel/img/' . $gambar_new_name;

                // Pindahkan file gambar ke folder tujuan
                if (move_uploaded_file(
                    $gambar_tmp,
                    $gambar_path
                )) {
                    // Memasukkan data ke tabel jika upload gambar sukses
                    $selectedTable = $_GET['table'] ?? 'tb_map';
                    $sql = "INSERT INTO `$selectedTable` (id, nama, garis_lintang, garis_bujur, alamat, icon, gambar) 
                            VALUES ('$id', '$nama', '$garis_lintang', '$garis_bujur', '$alamat', '$icon', 'img/$gambar_new_name')";

                    if (mysqli_query($conn, $sql)) {
                        echo '<script>alert("Data berhasil diupload ke database.");</script>';
                    } else {
                        echo '<script>alert("Error: ' . $sql . '\n' . mysqli_error($conn) . '");</script>';
                    }
                } else {
                    echo "Maaf, terjadi kesalahan saat mengupload file gambar.";
                }
            }
        } else {
            echo "Ekstensi file gambar tidak valid. Hanya diperbolehkan JPG, JPEG, PNG, dan GIF.";
        }
    } else {
        echo "Terjadi error saat upload gambar.";
    }
} else {
    echo "Gambar tidak diunggah.";
}

mysqli_close($conn);
