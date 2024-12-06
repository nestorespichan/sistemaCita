<div class="row mb-2 mb-xl-3">
  <div class="col-auto d-none d-sm-block">
    <h3>Roles</h3>
  </div>
</div>
<div class="mb-2">
  <button class="btn btn-primary" data-id="0" data-nombre="-" data-bs-toggle="modal" data-bs-target="#mdlRol">
    <i class="align-middle me-2 fas fa-fw fa-file"></i>Agregar
  </button>              
</div>
<div class="card flex-fill">
  <div class="card-header">
    <h5 class="card-title mb-0">Listado de Roles</h5>
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
      $roles = ControllerRol::GetRoles();
      foreach ($roles as $key => $value) {?>        
        <tr>
          <td><?= $value["rol_id"]; ?></td>
          <td class="d-none d-xl-table-cell"><?= $value["rol_nombre"]; ?></td>
          <?php 
          if ($value["rol_estado"] == 1) {
            echo '<td class="d-none d-xl-table-cell"><span class="badge bg-success">Activo</span></td>';
          } else {
            echo '<td class="d-none d-xl-table-cell"><span class="badge bg-danger">Inactivo</span></td>';
          }
          ?>
          <td><?= $value["usuario_registro"]; ?></td>
          <td><?= date("Y-m-d", strtotime($value["fecha_registro"])); ?></td>
          <td class="table-action">
            <i class="align-middle text-primary btnEditar" style="cursor: pointer" data-feather="edit-2" id="<?= $value["rol_id"] ;?>" data-nombre="-" data-bs-toggle="modal" data-bs-target="#mdlRol"></i>
            <i class="align-middle text-danger btnEliminar" style="cursor: pointer" id="<?= $value["rol_id"]; ?>"  data-feather="trash"></i>
          </td>          
        </tr>
      <?php }
      ?>      
    </tbody>
  </table>
</div>
<form method="post" autocomplete="off" id="frmFormulario" name="frmFormulario">
  <div class="modal fade show" id="mdlRol" tabindex="-1" style="display: none;" aria-modal="true" role="dialog">
    <div class="modal-dialog" role="document">          
    <div class="modal-content">
      <div class="modal-header bg-custom">
        <h5 class="modal-title text-white" id="mdlTitle" name="mdlTitle">Agregar Rol</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body m-1">
        <input type="hidden" id="accion" name="accion" value="new">
        <div class="mb-1 row">
          <label class="col-form-label col-sm-3 text-sm-right" for="rol_id">Código</label>
          <div class="col-sm-3">            
            <input type="number" class="form-control" id="rol_id" name="rol_id" value="0" readonly readonly>
          </div>
        </div>
        <div class="mb-1 row">
          <label class="col-form-label col-sm-3 text-sm-right" for="username">Nombre</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="rol_nombre" name="rol_nombre" value="" maxlength="100" required>
          </div>
        </div>
        <!--<div class="mb-1 row">
          <label class="col-form-label col-sm-3 text-sm-right" for="rol_estado">Estado</label>
          <div class="form-check form-switch col-sm-9">
            <input type="checkbox" id="rol_estado" name="rol_estado" class="form-control form-check-input">
          </div>
        </div>-->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="width: 100px">Atrás</button>
          <button type="submit" class="btn btn-primary btnGrabar" style="width: 100px">Grabar</button>
        </div>
        <?php
          $agregarRol = new ControllerRol();
          $agregarRol -> AddRol();
        ?>
      </div>
    </div>
    </div>
  </div>
</form>