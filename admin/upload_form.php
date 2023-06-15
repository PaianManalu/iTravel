<!DOCTYPE html>
<html>

<head>
    <title>Form Upload Data Map</title>
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
    </div>
</body>

</html>