<?php
// Preserve original logic
$date = date('Y-m-d H:i:s');
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home — Pemrograman Web Dasar</title>

  <!-- Bootstrap 5 (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    :root{
      --bg:#0f172a;
      --brand:#22c55e;
      --muted:#94a3b8;
    }
    body{
      background:
        radial-gradient(900px 500px at 10% -10%, rgba(34,197,94,.12), transparent 40%),
        radial-gradient(900px 500px at 110% -20%, rgba(59,130,246,.12), transparent 40%),
        var(--bg);
      color:#e5e7eb;
      min-height:100vh;
    }
    .glass{background:rgba(17,24,39,.5);border:1px solid rgba(255,255,255,.06);backdrop-filter:blur(10px)}
    .brand{color:var(--brand)}
    a{text-decoration:none}
  </style>
</head>
<body class="d-flex flex-column">
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
          <li class="nav-item"><a class="nav-link text-white-50" href="/">Index</a></li>
          <li class="nav-item"><a class="nav-link text-white-50" href="/?page=home">Home</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero / Content -->
  <main class="flex-grow-1 d-flex align-items-center py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="glass rounded-4 p-5">
            <div class="d-flex align-items-center mb-3">
              <i class="bi bi-house-door-fill fs-2 brand"></i>
              <h1 class="h3 ms-2 mb-0 text-white">Selamat datang di Home</h1>
            </div>

            <p class="text-white-50 mb-4">Berikut adalah waktu saat ini di server:</p>

            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
              <div>
                <div class="text-white-50 small">Waktu server</div>
                <div class="fs-4 fw-semibold"><?php echo htmlspecialchars($date, ENT_QUOTES, 'UTF-8'); ?></div>
              </div>
              <div class="text-end">
                <a href="/" class="btn btn-outline-light btn-lg">
                  <i class="bi bi-arrow-left"></i> Kembali ke Index
                </a>
              </div>
            </div>

            <hr class="border-secondary my-4">

            <div class="row g-3">
              <div class="col-md-6">
                <div class="p-3 rounded-3 glass">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-check2-circle brand me-2"></i>
                    <div>
                      <div class="fw-semibold">Ringan & cepat</div>
                      <div class="small text-white-50">Hanya memanfaatkan CDN Bootstrap & Icons.</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 rounded-3 glass">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-phone brand me-2"></i>
                    <div>
                      <div class="fw-semibold">Responsif</div>
                      <div class="small text-white-50">Tampilan optimal dari HP hingga desktop.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="py-4 mt-auto">
    <div class="container text-center text-white-50 small">
      <div>© <?php echo date('Y'); ?> Pemrograman Web Dasar • Dibuat dengan <i class="bi bi-heart-fill brand"></i></div>
      <div class="mt-1"><a class="text-decoration-underline text-white-50" href="https://getbootstrap.com/">Bootstrap</a> · <a class="text-decoration-underline text-white-50" href="https://icons.getbootstrap.com/">Bootstrap Icons</a></div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
