<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($ciudadano) ? 'Editar Ciudadano' : 'Nuevo Ciudadano' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container py-4">
        <h1 class="mb-4"><?= isset($ciudadano) ? 'Editar Ciudadano' : 'Nuevo Ciudadano' ?></h1>
        <form action="<?= isset($ciudadano) ? base_url('ciudadanos/update/' . esc($ciudadano['dpi'])) : base_url('ciudadanos/store') ?>" method="post" class="row g-3">
            <div class="col-md-6">
                <label class="form-label" for="dpi">DPI</label>
                <input type="text" name="dpi" id="dpi" class="form-control" value="<?= esc($ciudadano['dpi'] ?? '') ?>" <?= isset($ciudadano) ? 'readonly' : 'required' ?>>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?= esc($ciudadano['nombre'] ?? '') ?>" required>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="<?= esc($ciudadano['apellido'] ?? '') ?>" required>
            </div>
            <div class="col-md-6">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= esc($ciudadano['email'] ?? '') ?>" required>
            </div>

            <div class="col-md-6">
                <label class="form-label" for="direccion">Dirección</label>
                <input type="text" name="direccion" id="direccion" class="form-control" value="<?= esc($ciudadano['direccion'] ?? '') ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="tel_casa">Teléfono Casa</label>
                <input type="number" name="tel_casa" id="tel_casa" class="form-control" value="<?= esc($ciudadano['tel_casa'] ?? '') ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="tel_movil">Teléfono Móvil</label>
                <input type="number" name="tel_movil" id="tel_movil" class="form-control" value="<?= esc($ciudadano['tel_movil'] ?? '') ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="fechanac">Fecha de Nacimiento</label>
                <input type="date" name="fechanac" id="fechanac" class="form-control" value="<?= esc($ciudadano['fechanac'] ?? '') ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="cod_nivel_acad">Nivel Académico</label>
                <input type="number" name="cod_nivel_acad" id="cod_nivel_acad" class="form-control" value="<?= esc($ciudadano['cod_nivel_acad'] ?? '') ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="cod_muni">Municipio</label>
                <input type="number" name="cod_muni" id="cod_muni" class="form-control" value="<?= esc($ciudadano['cod_muni'] ?? '') ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="contra">Contraseña</label>
                <input type="password" name="contra" id="contra" class="form-control" value="<?= esc($ciudadano['contra'] ?? '') ?>" <?= isset($ciudadano) ? '' : 'required' ?>>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="<?= base_url('ciudadanos') ?>" class="btn btn-secondary ms-2">Cancelar</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>
