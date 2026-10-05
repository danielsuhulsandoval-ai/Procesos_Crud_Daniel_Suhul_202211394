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
        <h1>Regiones</h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar Región
    </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_region') ?>" method="post">
                            <label for="txt_codigo" class="form-label">Codigo</label>
                            <input type="number" name="txt_codigo" id="txt_codigo" class="form-control">
                            <label for="txt_nombre" class="form-label">Nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                            <label for="txt_descripcion" class="form-label">Descripción</label>
                            <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control">
                            <button type="submit" class="btn btn-primary form-control mt-2">Guardar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped table-bordered w-auto text-center">
            <thead>
                <tr>
                    <th>Código</th>
                    <th class="w-25">Nombre</th>
                    <th class="w-75">Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $region):
                ?>
                <tr>
                    <td> <?=$region['cod_region']; ?> </td>
                    <td> <?=$region['nombre']; ?> </td>
                    <td> <?=$region['descripcion']; ?> </td>
                    <td class="d-flex gap-2 align-items-center">
                      <a href="<?= base_url('buscar/'.$region['cod_region']) ?>" class="btn btn-primary btn-sm me-1">
                        <i class="bi bi-pencil-square"></i> Editar
                      </a>
                      <a href="<?= base_url('eliminar/'.$region['cod_region']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta región?');">
                        <i class="bi bi-trash"></i> Eliminar
                      </a>
                    </td>
                </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>

<?php echo $this->endSection(); ?>