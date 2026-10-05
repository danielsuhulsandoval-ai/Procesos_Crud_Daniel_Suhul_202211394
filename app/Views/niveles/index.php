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
    <h1>Niveles Académicos</h1>
    <a href="<?= base_url('niveles/create') ?>" class="btn btn-primary mb-3">Agregar Nivel</a>
    <table class="table table-striped table-bordered w-auto text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($niveles as $nivel): ?>
                <tr>
                    <td><?= $nivel['cod_nivel_acad']; ?></td>
                    <td><?= $nivel['nombre']; ?></td>
                    <td><?= $nivel['descripcion']; ?></td>
                    <td class="d-flex gap-2 align-items-center">
                        <a href="<?= base_url('niveles/edit/'.$nivel['cod_nivel_acad']) ?>" class="btn btn-primary btn-sm me-1">
                            <i class="bi bi-pencil-square"></i> Editar
                        </a>
                        <a href="<?= base_url('niveles/delete/'.$nivel['cod_nivel_acad']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este nivel?');">
                            <i class="bi bi-trash"></i> Eliminar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php echo $this->endSection(); ?>
