<?php
$page = $_GET['page'] ?? '';

if ($page === 'home') {
    header('Location: /home.php');
    exit;
}
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Index PHP Sederhana</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{font-family:system-ui,Segoe UI,Arial,sans-serif;max-width:720px;margin:40px auto;padding:0 16px}
    a{text-decoration:none}
    .card{border:1px solid #ddd;border-radius:12px;padding:16px}
  </style>
</head>
<body>
  <h1 style= "color:blue;">Halo, selamat datang di situs yang dibuat oleh Frans 👋</h1>
  <div class="card">
    <p>Ini adalah situs untuk memenuhi kebutuhan tugas PBO. silahkan buka halaman di bawah ini:</p>
    <ul>
      <li><a href="/home.php">Home</a></li>
    <p>Berikut adalah tugas pada pertemuan ke 3:</p>
    <ul>
      <li><a href="/latihan_satu.php">Latihan Satu</a></li>
      <li><a href="/latihan_dua.php">Latihan Dua</a></li>
      <li><a href="/latihan_tiga.php">Latihan Tigas</a></li>
      <li><a href="/tugas_mandiri.php">Tugas Mandiri</a></li>
    </ul>
    </ul>
  </div>
</body>
</html>
