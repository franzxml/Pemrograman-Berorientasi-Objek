<?php
// Preserve original behavior
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
  <title>Praktikum & Tugas — Pemrograman Web Dasar</title>

  <!-- Bootstrap 5 (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icons (Bootstrap Icons CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root{
      --bg: #0f172a;
      --card: #111827;
      --muted: #94a3b8;
      --brand: #22c55e;
    }
    body{
      background: radial-gradient(1200px 600px at 10% -10%, rgba(34,197,94,.12), transparent 40%),
                  radial-gradient(900px 500px at 110% -20%, rgba(59,130,246,.12), transparent 40%),
                  var(--bg);
      color: #e5e7eb;
      min-height: 100vh;
      letter-spacing: .2px;
    }
    .glass{
      background: rgba(17,24,39,.5);
      border: 1px solid rgba(255,255,255,.06);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
    }
    .brand{
      color: var(--brand);
    }
    .link-list a{
      text-decoration: none;
    }
    .link-list .list-group-item{
      background-color: rgba(255,255,255,.03);
      border-color: rgba(255,255,255,.08);
    }
    .link-list .list-group-item:hover{
      background-color: rgba(255,255,255,.06);
    }
    footer a{ color: var(--muted); }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg glass sticky-top py-3">
    <div class="container">
      <a class="navbar-brand fw-semibold text-white" href="/">
        <i class="bi bi-code-square brand"></i>
        <span class="ms-2">Pemrograman Web Dasar</span>
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

  <!-- Hero -->
  <header class="py-5">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-7">
          <h1 class="display-5 fw-bold">Selamat datang 👋</h1>
          <p class="lead text-white-50 mb-4">Ini adalah halaman indeks praktikum dan tugas <span class="brand fw-semibold">Pemrograman Web Dasar</span>. Gunakan daftar di bawah untuk membuka materi latihan maupun tugas mandiri.</p>
          <div class="d-flex gap-2">
            <a href="#latihan" class="btn btn-success btn-lg"><i class="bi bi-lightning-charge"></i> Lihat Latihan</a>
            <a href="#tugas" class="btn btn-outline-light btn-lg"><i class="bi bi-journal-text"></i> Lihat Tugas</a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="p-4 rounded-4 glass border text-white-50">
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-stars fs-2 brand"></i>
              <h2 class="h4 ms-2 mb-0 text-white">Ringkasan</h2>
            </div>
            <ul class="mb-0 small">
              <li>Responsif: tampilan rapi di HP hingga desktop.</li>
              <li>Desain gelap dengan efek kaca (glassmorphism).</li>
              <li>Navigasi cepat ke bagian Latihan & Tugas.</li>
              <li>Ikon memperjelas jenis tautan.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="pb-5">
    <div class="container">
      <div class="row g-4">

        <!-- LATIHAN -->
        <section id="latihan" class="col-12">
          <div class="glass rounded-4 p-4">
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-mortarboard fs-3 brand"></i>
              <h2 class="h4 ms-2 mb-0 text-white">Latihan</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 link-list">
              <div class="col">
                <a class="list-group-item list-group-item-action rounded-3 p-3 d-flex justify-content-between align-items-center" href="/latihan_satu.php">
                  <span><i class="bi bi-1-circle"></i> Latihan Satu</span>
                  <i class="bi bi-arrow-right-short fs-4"></i>
                </a>
              </div>
              <div class="col">
                <a class="list-group-item list-group-item-action rounded-3 p-3 d-flex justify-content-between align-items-center" href="/latihan_dua.php">
                  <span><i class="bi bi-2-circle"></i> Latihan Dua</span>
                  <i class="bi bi-arrow-right-short fs-4"></i>
                </a>
              </div>
              <div class="col">
                <a class="list-group-item list-group-item-action rounded-3 p-3 d-flex justify-content-between align-items-center" href="/latihan_tiga.php">
                  <span><i class="bi bi-3-circle"></i> Latihan Tiga</span>
                  <i class="bi bi-arrow-right-short fs-4"></i>
                </a>
              </div>
            </div>
          </div>
        </section>

        <!-- TUGAS -->
        <section id="tugas" class="col-12">
          <div class="glass rounded-4 p-4">
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-journal-code fs-3 brand"></i>
              <h2 class="h4 ms-2 mb-0 text-white">Tugas</h2>
            </div>

            <p class="text-white-50">Berikut adalah tugas <em>Properti, Method,</em> dan <em>Constructor</em>:</p>

            <div class="row row-cols-1 row-cols-md-2 g-3 link-list">
              <div class="col">
                <a class="list-group-item list-group-item-action rounded-3 p-3 d-flex justify-content-between align-items-center" href="/tugas_properti_method_dan_constructor/class_segitiga.php">
                  <span><i class="bi bi-triangle"></i> Class Segitiga</span>
                  <i class="bi bi-arrow-right-short fs-4"></i>
                </a>
              </div>
              <div class="col">
                <a class="list-group-item list-group-item-action rounded-3 p-3 d-flex justify-content-between align-items-center" href="/tugas_properti_method_dan_constructor/objek_segitiga.php">
                  <span><i class="bi bi-bounding-box-circles"></i> Objek Segitiga (Lihat output di sini)</span>
                  <i class="bi bi-arrow-right-short fs-4"></i>
                </a>
              </div>
              <div class="col">
                <a class="list-group-item list-group-item-action rounded-3 p-3 d-flex justify-content-between align-items-center" href="/tugas_mandiri.php">
                  <span><i class="bi bi-clipboard-check"></i> Tugas Mandiri</span>
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
      <div>© <?php echo date('Y'); ?> Pemrograman Web Dasar • Dibuat dengan <i class="bi bi-heart-fill brand"></i></div>
      <div class="mt-1"><a href="https://getbootstrap.com/">Bootstrap</a> · <a href="https://icons.getbootstrap.com/">Bootstrap Icons</a></div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
