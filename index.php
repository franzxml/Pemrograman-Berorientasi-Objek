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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Pemrograman Berorientasi Objek</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root{
      --bg: #0b1020;
      --muted: #9aa3b2;
      --brand: #38bdf8;
      --accent: #a78bfa;
    }
    body{
      background:
        radial-gradient(600px 300px at 20% -10%, rgba(56,189,248,.15), transparent 40%),
        radial-gradient(800px 400px at 120% -20%, rgba(167,139,250,.15), transparent 40%),
        var(--bg);
      color:#e6eaf2;
      min-height:100vh;
    }
    .glass{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.08);backdrop-filter:blur(10px)}
    .brand{color:var(--brand)}
    .accent{color:var(--accent)}
    .card-link{background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08)}
    .card-link:hover{background:rgba(255,255,255,.09)}
    a{text-decoration:none}
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg glass sticky-top py-3">
    <div class="container">
      <a class="navbar-brand fw-semibold text-white" href="/">
        <i class="bi bi-braces brand"></i>
        <span class="ms-2">Pemrograman Berorientasi Objek</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link text-white-50" href="?page=home">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white-50" href="#latihan">Latihan</a></li>
          <li class="nav-item"><a class="nav-link text-white-50" href="#tugas">Tugas</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="py-5">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-7">
          <h1 class="display-5 fw-bold">Halo! 👋</h1>
          <p class="lead text-white-50">Ini adalah beranda indeks untuk latihan dan tugas. Dibuat oleh Frans Maylandgo Saragih.</p>
          <div class="d-flex gap-2">
            <a href="#latihan" class="btn btn-primary btn-lg"><i class="bi bi-rocket-takeoff"></i> Ke Latihan</a>
            <a href="#tugas" class="btn btn-outline-light btn-lg"><i class="bi bi-journal-code"></i> Ke Tugas</a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="p-4 rounded-4 glass border text-white-50">
            <div class="d-flex align-items-center mb-2">
              <i class="bi bi-info-circle brand fs-2"></i>
              <h2 class="h5 ms-2 mb-0 text-white">Informasi</h2>
            </div>
            <ul class="small mb-0">
              <li>Nama: Frans Maylandgo Saragih</li>
              <li>NIM: H1101241059</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="pb-5">
    <div class="container">
      <div class="row g-4">
        <section id="latihan" class="col-12">
          <div class="glass rounded-4 p-4">
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-mortarboard fs-3 brand"></i>
              <h2 class="h4 ms-2 mb-0 text-white">Latihan pada pertemuan 3</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-3">
              <div class="col">
                <a class="card-link rounded-3 p-3 d-flex justify-content-between align-items-center" href="/tugas_pertemuan_tiga/persegi_panjang.php">
                  <span><i class="bi bi-square"></i> Latihan Satu — Persegi Panjang</span>
                  <i class="bi bi-arrow-right-short fs-4"></i>
                </a>
              </div>
              <div class="col">
                <a class="card-link rounded-3 p-3 d-flex justify-content-between align-items-center" href="/tugas_pertemuan_tiga/class_produk.php">
                  <span><i class="bi bi-box-seam"></i> Latihan Dua — Class Produk</span>
                  <i class="bi bi-arrow-right-short fs-4"></i>
                </a>
              </div>
              <div class="col">
                <a class="card-link rounded-3 p-3 d-flex justify-content-between align-items-center" href="/tugas_pertemuan_tiga/mini_project_login.php">
                  <span><i class="bi bi-person-lock"></i> Latihan Tiga — Mini Project Login</span>
                  <i class="bi bi-arrow-right-short fs-4"></i>
                </a>
              </div>
              <div class="col">
                <a class="card-link rounded-3 p-3 d-flex justify-content-between align-items-center" href="/tugas_pertemuan_tiga/manajemen_perpustakaan.php">
                  <span><i class="bi bi-bookshelf"></i> Tugas Mandiri — Manajemen Perpustakaan</span>
                  <i class="bi bi-arrow-right-short fs-4"></i>
                </a>
              </div>
            </div>
          </div>
        </section>

        <section id="tugas" class="col-12">
          <div class="glass rounded-4 p-4">
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-journal-text fs-3 accent"></i>
              <h2 class="h4 ms-2 mb-0 text-white">Tugas Properti Method dan Constructor</h2>
            </div>
            <p class="text-white-50">Tugas <em>Properti, Method,</em> &amp; <em>Constructor</em>:</p>
            <div class="row row-cols-1 row-cols-md-2 g-3">
              <div class="col">
                <a class="card-link rounded-3 p-3 d-flex justify-content-between align-items-center" href="/tugas_properti_method_dan_constructor/class_segitiga.php">
                  <span><i class="bi bi-triangle"></i> Class Segitiga</span>
                  <i class="bi bi-arrow-right-short fs-4"></i>
                </a>
              </div>
              <div class="col">
                <a class="card-link rounded-3 p-3 d-flex justify-content-between align-items-center" href="/tugas_properti_method_dan_constructor/objek_segitiga.php">
                  <span><i class="bi bi-bounding-box-circles"></i> Objek Segitiga (Untuk melihat output disini.)</span>
                  <i class="bi bi-arrow-right-short fs-4"></i>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>

  <footer class="py-4 mt-auto">
    <div class="container text-center text-white-50 small">
      <div> <?php echo date('Y'); ?> Pemrograman Berorientasi Objek <i class="bi bi-heart-fill accent"></i></div>
      <div class="mt-1"><a class="text-decoration-underline text-white-50" href="https://getbootstrap.com/">Bootstrap</a> · <a class="text-decoration-underline text-white-50" href="https://icons.getbootstrap.com/">Bootstrap Icons</a></div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>