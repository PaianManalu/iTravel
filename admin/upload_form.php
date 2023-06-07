<!DOCTYPE html>
<html>

<head>
    <title>Form Upload Data Map</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            width: 450px;
            border: 1px solid #ccc;
            padding: 40px;
            border-radius: 5px;
            background-color: #f5f5f5;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
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
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<script>
    function changeTable(table) {
        var url = new URL(window.location.href);
        url.searchParams.set('table', table);
        window.location.href = url;
    }
</script>
</head>

<body>
    <h2>Form Upload Data Map</h2>
    <form action="insert_map.php" method="post" enctype="multipart/form-data">
        <label for="id">ID:</label>
        <input type="text" name="id" id="id" required><br><br>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="garis_lintang">Garis Lintang:</label>
        <input type="text" name="garis_lintang" id="garis_lintang" required><br><br>

        <label for="garis_bujur">Garis Bujur:</label>
        <input type="text" name="garis_bujur" id="garis_bujur" required><br><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required><br><br>

        <label for="icon">Icon:</label>
        <input type="text" name="icon" id="icon" required><br><br>

        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" id="gambar" required><br><br>

        <input type="submit" value="Upload Data">
    </form>
    <div>
        <div>
            <button id="tb_penginapan" class="table-button" onclick="changeTable('tb_penginapan')">Tabel Penginapan</button>
            <button id="rumahmakan" class="table-button" onclick="changeTable('rumahmakan')">Tabel Rumah Makan</button>
            <button id="tb_wisata" class="table-button" onclick="changeTable('tb_wisata')">Tabel Wisata</button>
            <button id="tb_hotel" class="table-button" onclick="changeTable('tb_hotel')">Tabel Hotel</button>
            <button id="tb_transportasi" class="table-button" onclick="changeTable('tb_transportasi')">Tabel Transportasi</button>
        </div>

    </div>
</body>

</html>