<?php echo $this->extend('layouts/main'); ?>
<?php echo $this->section('content'); ?>
<ul class="nav nav-pills mb-3">
  <li class="nav-item"><a class="nav-link" href="<?= base_url('ciudadanos') ?>">Ciudadanos</a></li>
  <li class="nav-item"><a class="nav-link" href="<?= base_url('departamentos') ?>">Departamentos</a></li>
  <li class="nav-item"><a class="nav-link" href="<?= base_url('municipios') ?>">Municipios</a></li>
  <li class="nav-item"><a class="nav-link" href="<?= base_url('regiones') ?>">Regiones</a></li>
  <li class="nav-item"><a class="nav-link" href="<?= base_url('niveles') ?>">Niveles Académicos</a></li>
</ul>

<h1 class="mb-4"><?= isset($departamento) ? 'Editar' : 'Crear' ?> Departamento</h1>
<form action="<?= isset($departamento) ? base_url('departamentos/update/'.$departamento['cod_depto']) : base_url('departamentos/store') ?>" method="post">
    <div class="mb-3">
        <label for="txt_nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre_depto" id="txt_nombre" class="form-control" value="<?= esc($departamento['nombre_depto'] ?? '') ?>" required>
    </div>
    <div class="mb-3">
        <label for="txt_region" class="form-label">Región</label>
        <select name="cod_region" id="txt_region" class="form-select" required>
            <option value="" disabled <?= empty($departamento['cod_region'] ?? '') ? 'selected' : '' ?>>Selecciona una región</option>
            <?php foreach ($regiones ?? [] as $region): ?>
                <option value="<?= $region['cod_region'] ?>" <?= (isset($departamento['cod_region']) && $departamento['cod_region'] == $region['cod_region']) ? 'selected' : '' ?>>
                    <?= esc($region['nombre']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="<?= base_url('departamentos') ?>" class="btn btn-secondary ms-2">Cancelar</a>
</form>
<?php echo $this->endSection(); ?>
