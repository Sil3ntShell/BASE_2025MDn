<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="build/js/app.js"></script>
    <link rel="shortcut icon" href="<?= asset('images/cit.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= asset('build/styles.css') ?>">
    <title>DemoApp</title>
</head>
<body>

<!-- NAVBAR -->
<nav id="navbar-example2" class="navbar navbar-expand-lg navbar-dark bg-dark px-4 shadow-sm sticky-top">
  <a class="navbar-brand fw-bold text-warning" href="/frame">
    <i class="bi bi-house-fill me-2"></i>Inicio
  </a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarLinks">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="/frame/usuario">
          <i class="bi bi-person-circle me-1"></i>Usuarios
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#scrollspyHeading2">
          <i class="bi bi-arrow-down-short me-1"></i>Second
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" role="button" aria-expanded="false">
          <i class="bi bi-menu-button-wide me-1"></i>Opciones
        </a>
        <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" href="#scrollspyHeading3">Tercera opción</a></li>
          <li><a class="dropdown-item" href="#scrollspyHeading4">Cuarta opción</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#scrollspyHeading5">Quinta opción</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>


    <div class="progress fixed-bottom" style="height: 6px;">
        <div class="progress-bar progress-bar-animated bg-danger" id="bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="container-fluid pt-5 mb-4" style="min-height: 85vh">
    
        


    <!-- Etse esta mandando a llamar a el contenido -->
        <?php echo $contenido; ?>
        <!--  -->
    
    
    </div>
    <div class="container-fluid " >
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <p style="font-size:xx-small; font-weight: bold;">
                        Comando de Informática y Tecnología, <?= date('Y') ?> &copy;
                </p>
            </div>
        </div>
    </div>
</body>
</html>