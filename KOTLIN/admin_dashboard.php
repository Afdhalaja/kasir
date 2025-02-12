<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
  header("Location: login.php");
  exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>

  <style>
    * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      display: flex;
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: white;
    }

    .sidebar {
      width: 250px;
      height: 100vh;
      background: rgba(0, 0, 0, 0.9);
      padding: 20px;
      position: fixed;
      box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
    }

    .sidebar h3 {
      margin-bottom: 20px;
      padding-left: 20px;
      font-size: 24px;
      color: #fff;
      text-align: center;
    }

    .sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      padding: 12px;
      border-radius: 8px;
      margin-bottom: 15px;
      transition: background 0.3s;
    }

    .sidebar a:hover {
      background: #667eea;
    }

    .main-content {
      margin-left: 270px;
      padding: 40px;
      width: 100%;
      text-align: center;
    }

    .header {
      margin-bottom: 20px;
    }

    .header h2 {
      font-size: 28px;
      font-weight: 600;
    }

    .flex-container {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: center;
      margin-top: 40px;
    }

    .card {
      width: 280px;
      height: 180px;
      background: white;
      color: black;
      border-radius: 15px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.4);
    }

    .card img {
      width: 60px;
      height: 60px;
      margin-bottom: 10px;
    }

    .card h4 {
      font-size: 18px;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <h3>Welcome Admin</h3>
    <a href="pendaftaran_barang.php">Daftar Barang</a>
    <a href="pembelian.php">Pembelian</a>
    <a href="riwayat.php">Riwayat</a>
    <a href="register.php">Daftar</a>
    <a href="logout.php">Logout</a>
  </div>

  <div class="main-content">
    <div class="header">
      <h2>Dashboard Admin</h2>
    </div>
    <div class="flex-container">
      <a href="pendaftaran_barang.php" class="card">
        <img src="assets/clipboard.png">
        <h4>Daftar Barang</h4>
      </a>
      <a href="pembelian.php" class="card">
        <img src="assets/parcel.png">
        <h4>Pembelian</h4>
      </a>
      <a href="riwayat.php" class="card">
        <img src="assets/file (2).png">
        <h4>Riwayat Pembelian</h4>
      </a>
    </div>
  </div>
</body>

</html>
