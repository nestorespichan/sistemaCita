<div class="row mb-2 mb-xl-3">
  <div class="col-auto d-none d-sm-block">
    <h3>Especialidades</h3>
  </div>
</div>
<div class="mb-2">
  <button class="btn btn-primary" data-id="0" data-nombre="-" data-bs-toggle="modal" data-bs-target="#mdlEspecialidad">
    <i class="align-middle me-2 fas fa-fw fa-file"></i>Agregar
  </button>              
</div>
<div class="card flex-fill">
  <div class="card-header">
    <h5 class="card-title mb-0">Listado de Especialidades</h5>
  </div>
  <table id="tbresultado" class="table table-striped my-0 tablas">
    <thead>
      <tr>
        <th style="width:5%;">Código</th>
        <th class="d-none d-xl-table-cell">Nombre</th>
        <th class="d-none d-xl-table-cell" style="width:10%;">Estado</th>
        <th style="width:10%;">Usuario</th>
        <th style="width:10%;">Fecha</th>
        <th style="width:6%;">Acciones</th>
      </tr>
    </thead>
    <tbody>      
      <?php
      $especialidades = ControllerEspecialidad::GetEspecialidades();
      foreach ($especialidades as $key => $value) {?>        
        <tr>
          <td><?= $value["especialidad_id"]; ?></td>
          <td class="d-none d-xl-table-cell"><?= $value["especialidad_nombre"]; ?></td>
          <?php 
          if ($value["especialidad_estado"] == 1) {
            echo '<td class="d-none d-xl-table-cell"><span class="badge bg-success">Activo</span></td>';
          } else {
            echo '<td class="d-none d-xl-table-cell"><span class="badge bg-danger">Inactivo</span></td>';
          }
          ?>
          <td><?= $value["usuario_registro"]; ?></td>
          <td><?= date("Y-m-d", strtotime($value["fecha_registro"])); ?></td>
          <td class="table-action">
            <i class="align-middle text-primary btnEditar" style="cursor: pointer" data-feather="edit-2" id="<?= $value["especialidad_id"] ;?>" data-nombre="-" data-bs-toggle="modal" data-bs-target="#mdlEspecialidad"></i>
            <i class="align-middle text-danger btnEliminar" style="cursor: pointer" id="<?= $value["especialidad_id"]; ?>"  data-feather="trash"></i>
          </td>          
        </tr>
      <?php }
      ?>      
    </tbody>
  </table>
</div>
<form method="post" autocomplete="off" id="frmFormulario" name="frmFormulario">
  <div class="modal fade show" id="mdlEspecialidad" tabindex="-1" style="display: none;" aria-modal="true" role="dialog">
    <div class="modal-dialog" role="document">          
    <div class="modal-content">
      <div class="modal-header bg-custom">
        <h5 class="modal-title text-white" id="mdlTitle" name="mdlTitle">Agregar Especialidad</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body m-1">
        <input type="hidden" id="accion" name="accion" value="new">
        <div class="mb-1 row">
          <label class="col-form-label col-sm-3 text-sm-right" for="especialidad_id">Código</label>
          <div class="col-sm-3">            
            <input type="number" class="form-control" id="especialidad_id" name="especialidad_id" value="0" readonly readonly>
          </div>
        </div>
        <div class="mb-1 row">
          <label class="col-form-label col-sm-3 text-sm-right" for="username">Nombre</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="especialidad_nombre" name="especialidad_nombre" value="" maxlength="100" required>
          </div>
        </div>
        <!--<div class="mb-1 row">
          <label class="col-form-label col-sm-3 text-sm-right" for="especialidad_estado">Estado</label>
          <div class="form-check form-switch col-sm-9">
            <input type="checkbox" id="especialidad_estado" name="especialidad_estado" class="form-control form-check-input">
          </div>
        </div>-->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="width: 100px">Atrás</button>
          <button type="submit" class="btn btn-primary btnGrabar" style="width: 100px">Grabar</button>
        </div>
        <?php
          $agregarEspecialidad = new ControllerEspecialidad();
          $agregarEspecialidad -> AddEspecialidad();
        ?>
      </div>
    </div>
    </div>
  </div>
</form>