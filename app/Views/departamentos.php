<?php echo $this->extend('layouts/main'); ?>
<?php echo $this->section('content'); ?>
<style>
  body {font-family: 'Lato', sans-serif;}
  a {color: var(--school-primary); text-decoration: none;}
  a:hover {color: #004d00;}
  .table thead th {background-color: var(--school-primary); color: var(--school-light);}
  .table tbody td {background-color: var(--school-light);}
  .table {background-color: #e0f7fa;}
</style>

<h1 class="mb-4">Listado de Departamentos</h1>
<a href="<?= base_url('departamentos/create') ?>" class="btn btn-success mb-3">Nuevo Departamento</a>
<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Región</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($departamentos as $d): ?>
        <tr>
            <td><?= esc($d['cod_depto'] ?? '') ?></td>
            <td><?= esc($d['nombre_depto'] ?? '') ?></td>
            <td><?= esc($d['cod_region'] ?? '') ?></td>
            <td>
                <a href="<?= base_url('departamentos/edit/'.($d['cod_depto'] ?? '')) ?>" class="btn btn-primary btn-sm me-1">Editar</a>
                <form action="<?= base_url('departamentos/delete/'.($d['cod_depto'] ?? '')) ?>" method="post" class="d-inline" onsubmit="return confirm('¿Eliminar este departamento?');">
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $this->endSection(); ?>
