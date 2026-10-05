<?php echo $this->extend('layouts/main'); ?>
<?php echo $this->section('content'); ?>
<style>
  body {font-family: 'Lato', sans-serif;}
  a {color: var(--school-primary); text-decoration: none;}
  a:hover {color: #004d00;}
  .table thead th {background-color: var(--school-primary); color: var(--school-light);}
  .table tbody td {background-color: var(--school-light);}
  .table {background-color: var(--school-light);}
</style>
<ul class="nav nav-pills mb-3">
    <li class="nav-item"><a class="nav-link" href="<?= base_url('ciudadanos') ?>">Ciudadanos</a></li>
    <li class="nav-item"><a class="nav-link" href="<?= base_url('departamentos') ?>">Departamentos</a></li>
    <li class="nav-item"><a class="nav-link" href="<?= base_url('municipios') ?>">Municipios</a></li>
    <li class="nav-item"><a class="nav-link" href="<?= base_url('regiones') ?>">Regiones</a></li>
    <li class="nav-item"><a class="nav-link active" href="<?= base_url('niveles') ?>">Niveles Académicos</a></li>
</ul>
<h1 class="mb-4"><?= isset($nivel) ? 'Editar Nivel' : 'Crear Nivel' ?></h1>
<form action="<?= isset($nivel) ? base_url('niveles/update/'.$nivel['cod_nivel_acad']) : base_url('niveles/store') ?>" method="post">
    <div class="mb-3">
        <label for="txt_codigo" class="form-label">Código</label>
        <input type="number" name="cod_nivel_acad" id="txt_codigo" class="form-control" value="<?= esc($nivel['cod_nivel_acad'] ?? '') ?>" <?= isset($nivel) ? 'readonly' : '' ?> required>
    </div>
    <div class="mb-3">
        <label for="txt_nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="txt_nombre" class="form-control" value="<?= esc($nivel['nombre'] ?? '') ?>" required>
    </div>
    <div class="mb-3">
        <label for="txt_descripcion" class="form-label">Descripción</label>
        <textarea name="descripcion" id="txt_descripcion" class="form-control" rows="3" required><?= esc($nivel['descripcion'] ?? '') ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="<?= base_url('niveles') ?>" class="btn btn-secondary ms-2">Cancelar</a>
</form>
<?php echo $this->endSection(); ?>
