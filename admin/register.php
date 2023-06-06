<!DOCTYPE html>
<html>

<head>
  <title>Halaman Registrasi</title>
  <style>
    body {
      background-color: #f2f2f2;
    }

    h1 {
      text-align: center;
    }

    .container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 30px;
      box-shadow: 0 2px 40px rgba(0, 0, 0, 0.3);
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
    }

    .card {
      background-color: #ffffff;
      margin: 0px;
      padding: 20px;
      border-radius: 30px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .btn-dark {
      background-color: #333333;
      color: #ffffff;
      border: none;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 30px;
      margin: 5px;
    }

    .btn-secondary {
      background-color: #888888;
      color: #ffffff;
      border: none;
      width: 100%;
      padding: 10px;
      font-size: 20px;
    }

    .containerbx {
      background-color: #333333;
      padding: 20px;
      border-radius: 30px;
      box-shadow: 0 2px 40px rgba(0, 0, 0, 0.3);
      max-width: 400px;
      margin-top: 100px;
      justify-content: center;
    }

    .containerbx a {
      text-decoration: none;
      justify-content: center;
      color: #ffffff !important;
      padding-left: 100px;
    }

    .containerbx p {
      padding-top: 10px;
    }

    .kembali {
      margin-top: 10px;
      justify-content: center;
      padding-left: 135px;
      padding-top: 10px;
    }

    .kembali a {
      text-decoration: none !important;
    }

    input[type="text"],
    input[type="password"] {
      width: 93%;
      padding: 10px;
      font-size: 16px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Registrasi Admin</h1>
    <form method="POST" action="admin.php" class="card">
      <label for="username">Username:</label>
      <input type="text" name="username" required><br><br>
      <label for="password">Password:</label>
      <input type="password" name="password" required><br><br>
      <input type="submit" name="register" value="Register" class="btn-dark">
    </form>
  </div>
</body>

</html>