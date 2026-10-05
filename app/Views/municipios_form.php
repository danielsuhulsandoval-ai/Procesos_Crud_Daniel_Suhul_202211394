<?php echo $this->extend('layouts/main'); ?>
<?php echo $this->section('content'); ?>
<ul class="nav nav-pills mb-3">
  <li class="nav-item"><a class="nav-link" href="<?= base_url('ciudadanos') ?>">Ciudadanos</a></li>
  <li class="nav-item"><a class="nav-link" href="<?= base_url('departamentos') ?>">Departamentos</a></li>
  <li class="nav-item"><a class="nav-link" href="<?= base_url('municipios') ?>">Municipios</a></li>
  <li class="nav-item"><a class="nav-link" href="<?= base_url('regiones') ?>">Regiones</a></li>
  <li class="nav-item"><a class="nav-link" href="<?= base_url('niveles') ?>">Niveles Académicos</a></li>
</ul>
<h1 class="mb-4"><?= isset($municipio) ? 'Editar' : 'Crear' ?> Municipio</h1>
<form action="<?= isset($municipio) ? base_url('municipios/update/' . esc($municipio['cod_muni'])) : base_url('municipios/store') ?>" method="post">
    <div class="mb-3">
        <label for="cod_depto" class="form-label">Departamento</label>
        <select name="cod_depto" id="cod_depto" class="form-select" required>
            <option value="" disabled selected>Seleccione Departamento</option>
            <?php foreach ($departamentos as $dept): ?>
                <option value="<?= esc($dept['cod_depto']) ?>" <?= isset($municipio) && $municipio['cod_depto'] == $dept['cod_depto'] ? 'selected' : '' ?>>
                    <?= esc($dept['nombre_depto']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="nombre_municipio" class="form-label">Nombre Municipio</label>
        <input type="text" name="nombre_municipio" id="nombre_municipio" class="form-control" value="<?= esc($municipio['nombre_municipio'] ?? '') ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="<?= base_url('municipios') ?>" class="btn btn-secondary ms-2">Cancelar</a>
</form>
<?php echo $this->endSection(); ?>
