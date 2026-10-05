
<?php echo $this->extend('layouts/main'); ?>
<?php echo $this->section('content'); ?>
<style>
  body {font-family: 'Lato', sans-serif;}
  a {color: var(--school-primary); text-decoration: none;}
  a:hover {color: #004d00;}
</style>

<h1 class="mb-4">Listado de Ciudadanos</h1>
<style>
.table thead th {
    background-color: var(--school-primary);
    color: var(--school-light);
}
.table tbody td {
    background-color: var(--school-light);
}
.table {background-color: var(--school-light);}
</style>
<a href="<?= base_url('ciudadanos/create') ?>" class="btn btn-primary mb-3">Nuevo ciudadano</a>
<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>DPI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Tel Casa</th>
            <th>Tel Móvil</th>
            <th>Fecha Nac.</th>
            <th>Nivel Acad.</th>
            <th>Municipio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ciudadanos as $c): ?>
        <tr>
            <td><?= esc($c['dpi']) ?></td>
            <td><?= esc($c['nombre']) ?></td>
            <td><?= esc($c['apellido']) ?></td>
            <td><?= esc($c['email']) ?></td>
            <td><?= esc($c['telefono'] ?? '') ?></td>
            <td><?= esc($c['direccion'] ?? '') ?></td>
            <td><?= esc($c['tel_casa'] ?? '') ?></td>
            <td><?= esc($c['tel_movil'] ?? '') ?></td>
            <td><?= esc($c['fechanac'] ?? '') ?></td>
            <td><?= esc($c['cod_nivel_acad'] ?? '') ?></td>
            <td><?= esc($c['cod_muni'] ?? '') ?></td>
            <td>
                <a href="<?= base_url('ciudadanos/edit/' . esc($c['dpi'])) ?>" class="btn btn-primary btn-sm me-1">Editar</a>
                <form action="/ciudadanos/delete/<?= esc($c['dpi']) ?>" method="post" class="d-inline" onsubmit="return confirm('¿Eliminar este ciudadano?');">
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $this->endSection(); ?>