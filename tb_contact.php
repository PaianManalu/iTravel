<!DOCTYPE html>
<html>

<head>
  <title>Form Kontak</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 80vh;
      margin: 0;
      flex-direction: column;
      background-color: white;
    }

    .form-kontak {
      width: 600px;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
      border: 1px solid #dddddd;
      /* Garis keliling */
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      width: 650px;
      padding: 20px;
    }

    h2 {
      color: #ffffff;
      transition: color 0.3s ease;
      cursor: pointer;
      font-size: 44px;
      color: #333;
      margin-bottom: 20px;
    }

    h2:hover {
      color: #e0e0e0;
    }




    label {
      display: block;
      font-size: 14px;
      color: #555;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }

    input[type="text"]:hover,
    input[type="email"]:hover,
    textarea:hover {
      border-color: #0dcdc2;
    }



    button[type="submit"],
    a.btn {
      display: inline-block;
      padding: 10px 20px;
      font-size: 14px;
      text-align: center;
      text-decoration: none;
      background-color: #333;
      color: #fff;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover,
    a.btn:hover {
      background-color: #0dcdc2;
      cursor: pointer;
    }

    .mt-3 {
      margin-top: 15px;
    }
  </style>
</head>

<body>
  <h2>Contact Us</h2><br>
  <div class="container">
    <div class="form-kontak">
      <form method="POST" action="process_contact.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Masukkan Email Aktif Anda" required>

        <label for="subjek">Subjek:</label>
        <input type="text" id="subjek" name="subjek" placeholder="Masukkan Subjek" required>

        <label for="pesan">Pesan:</label>
        <textarea id="pesan" name="pesan" placeholder="Masukkan Pesan Atau Kritikan" required></textarea>

        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>

      <a href="home.php" class="btn btn-secondary mt-3">Kembali</a>
    </div>
  </div>
</body>

</html>