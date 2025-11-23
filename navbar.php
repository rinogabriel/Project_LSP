<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
    .navbar-custom {
        background: linear-gradient(90deg, #2f2f31ff, #232424ff);
        box-shadow: 0 2px 10px rgba(0,0,0,0.15);
    }

    .nav-link {
        font-weight: 500;
        font-size: 16px;
        margin-left: 10px;
        transition: 0.2s;
    }

    .nav-link:hover {
        color: #ffdd57 !important;
        transform: translateY(-2px);
    }

    .navbar-brand {
        font-size: 22px;
        font-weight: bold;
        letter-spacing: 0.5px;
    }

    .active-nav {
        color: #ffdd57 !important;
        font-weight: 700;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-4">
  <div class="container">

    <a class="navbar-brand d-flex align-items-center" href="/Project_LSP/">
      <i class="bi bi-speedometer2 me-2 fs-4"></i> SkillHub
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link" href="/Project_LSP/">
            <i class="bi bi-house-door me-1"></i> Dashboard
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/Project_LSP/peserta/">
            <i class="bi bi-people me-1"></i> Peserta
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/Project_LSP/kelas/">
            <i class="bi bi-journal-bookmark me-1"></i> Kelas
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/Project_LSP/pendaftaran/">
            <i class="bi bi-pencil-square me-1"></i> Pendaftaran
          </a>
        </li>

        <!-- Menu tambahan modern -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-gear me-1"></i> Pengaturan
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-gear me-2"></i> Profil Admin</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-shield-lock me-2"></i> Keamanan</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
