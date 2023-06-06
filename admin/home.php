<!DOCTYPE html>
<html>

<head>
  <title>Halaman Login</title>
  <style>
    body {
      background-color: #f2f2f2;
    }

    h2 {
      text-align: center;
    }

    .container {
      background-color: #ffffff;
      padding: 18px;
      border-radius: 30px;
      box-shadow: 0 2px 40px rgba(0, 0, 0, 0.3);
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
    }

    label {
      font-size: 16px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      width: 94%;
      padding: 10px;
      font-size: 16px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #333333;
      color: #ffffff;
      border: none;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 30px;
      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Form Login</h2>
    <form method="POST" action="getData.php">
      <label for="username">Username:</label>
      <input type="text" name="username" required><br><br>
      <label for="password">Password:</label>
      <input type="password" name="password" required><br><br>
      <input type="submit" name="login" value="Login">
    </form>
  </div>
</body>

</html>