<!DOCTYPE html>
<html>

<head>
  <title>Form Kontak</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/tb_contact.css">
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