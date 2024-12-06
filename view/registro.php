<div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                  <h3>Registro de Citas</h3>
                </div>
              </div>
              <div class="mb-2">
  <button class="btn btn-primary" data-id="0" data-nombre="-" data-bs-toggle="modal" data-bs-target="#mdlRegistro">
    <i class="align-middle me-2 fas fa-fw fa-file"></i>Agregar
  </button>              
</div>
              <div class="card flex-fill">
                <div class="card-header">
                  <h5 class="card-title mb-0">Pacientes Citados</h5>
                </div>
                <table id="datatables-dashboard-projects" class="table table-striped my-0">
                  <thead>
                    <tr>
                      <th>Paciente</th>
                      <th class="d-none d-xl-table-cell">Hora Inicio</th>
                      <th class="d-none d-xl-table-cell">Hora Fin</th>
                      <th>Estado</th>
                      <th class="d-none d-md-table-cell">Especialista</th>
                      <th class="d-none d-md-table-cell">Especialidad</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $color = 'bg-danger';
                      $estado = 'Registrado';
                      $registros = ControllerRegistro::GetRegistros();
                      foreach ($registros as $key => $value) {
                        $color = 'bg-danger';
                        if ($value['cita_estado'] == 2) {
                          $color = 'bg-primary';
                          $estado = 'Confirmado';
                        } 
                        if ($value['cita_estado'] == 3) {
                          $color = 'bg-success';
                          $estado = 'Pagado';
                        }
                        ?>
                        <tr>
                          <td><?= $value['paciente_apellidos'].' '.$value['paciente_nombres']; ?></td>
                          <td><?= $value['horario_hora_inicio']; ?></td>
                          <td><?= $value['horario_hora_fin']; ?></td>
                          <td><span class="badge <?= $color;?>"><?= $estado; ?></span></td>
                          <td><?= $value['especialista_nombre']; ?></td>
                          <td><?= $value['especialidad_nombre']; ?></td>
                        </tr>    
                      <?php }
                    ?>
                    <!--<tr>
                      <td>Espichan Levano, Nestor James</td>
                      <td class="d-none d-xl-table-cell">10:00am</td>
                      <td class="d-none d-xl-table-cell">11:00am</td>
                      <td><span class="badge bg-success">Cancelado</span></td>
                      <td class="d-none d-md-table-cell">Espirometría</td>
                    </tr>
                    <tr>
                      <td>Garcia Rios, Luis Felipe</td>
                      <td class="d-none d-xl-table-cell">11:00am</td>
                      <td class="d-none d-xl-table-cell">12:00pm</td>
                      <td><span class="badge bg-danger">Pendiente</span></td>
                      <td class="d-none d-md-table-cell">Espirometría</td>
                    </tr>
                    <tr>
                      <td>Torrejón Pacheco, Ivan Fermín</td>
                      <td class="d-none d-xl-table-cell">12:00pm</td>
                      <td class="d-none d-xl-table-cell">01:00pm</td>
                      <td><span class="badge bg-danger">Pendiente</span></td>
                      <td class="d-none d-md-table-cell">Espirometría</td>
                    </tr>-->
                  </tbody>
                </table>
              </div>