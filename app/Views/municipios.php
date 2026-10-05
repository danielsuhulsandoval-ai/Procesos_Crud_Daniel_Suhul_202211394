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

<h1 class="mb-4">Listado de Municipios</h1>
<a href="<?= base_url('municipios/create') ?>" class="btn btn-success mb-3">Nuevo Municipio</a>
<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Departamento ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($municipios as $m): ?>
            <tr>
                <td><?= esc($m['cod_muni'] ?? '') ?></td>
                <td><?= esc($m['cod_depto'] ?? '') ?></td>
                <td><?= esc($m['nombre_municipio'] ?? '') ?></td>
                <td>
                    <a href="<?= base_url('municipios/edit/' . esc($m['cod_muni'] ?? '')) ?>" class="btn btn-primary btn-sm me-1">Editar</a>
                    <form action="<?= base_url('municipios/delete/' . esc($m['cod_muni'])) ?>" method="post" class="d-inline" onsubmit="return confirm('¿Eliminar este municipio?');">
                        <?= csrf_field() ?>
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $this->endSection(); ?>
