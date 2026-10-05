<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión Ciudadanos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Panel de CRUD para Ciudadanos, Departamentos, Municipios, Regiones y Niveles Académicos.">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4" style="background: linear-gradient(135deg, hsl(210, 30%, 20%), hsl(210, 30%, 30%));">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Gestión</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="<?= base_url('ciudadanos') ?>">Ciudadanos</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('departamentos') ?>">Departamentos</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('municipios') ?>">Municipios</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('regiones') ?>">Regiones</a></li>
        <li class="nav-item"><a class="nav-link" href="<?= base_url('niveles') ?>">Niveles Académicos</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <?= $this->renderSection('content') ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
<script src="/js/app.js"></script>
</body>
</html>
