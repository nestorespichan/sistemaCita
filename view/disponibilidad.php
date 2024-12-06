<div class="row mb-2 mb-xl-3">
  <div class="col-auto d-none d-sm-block">
    <h3>Disponibilidad</h3>
  </div>
</div>
<div class="mb-1 row">
          <label class="col-form-label col-sm-2 text-sm-right" for="username">Especialista</label>
          <div class="col-sm-10">
            <select class="form-control" id="especialista_id" name="especialista_id">
              <option value="0">-- SELECCIONE --</option>
              <?php
                $especialistas = ControllerEspecialista::GetEspecialistas();
                foreach ($especialistas as $key => $value) {
                  if ($value['especialista_estado'] == 1) {
                    echo '<option value="'.$value["especialista_id"].'">'.$value["especialista_nombre"].'</option>';
                  }
                }
              ?>
            </select>
          </div>
        </div>
<div class="card flex-fill">
  <div class="card-header">
    <h5 class="card-title mb-0">Horario</h5>
  </div>
  <table id="tbresultado" class="table  my-0">
    <thead>
      <tr>
        <th style="width:5%;">#</th>
        <th style="width:15%;" class="d-none d-xl-table-cell">Horario</th>
        <th class="d-none d-xl-table-cell">Lunes</th>
        <th class="d-none d-xl-table-cell">Martes</th>
        <th class="d-none d-xl-table-cell">Miercoles</th>
        <th class="d-none d-xl-table-cell">Jueves</th>
        <th class="d-none d-xl-table-cell">Viernes</th>
        <th class="d-none d-xl-table-cell">Sábado</th>
        <th class="d-none d-xl-table-cell">Domingo</th>
      </tr>
    </thead>
    <tbody id="tablaHorario">
      <?php
        $contador = 0;
        $horarios = ControllerHorario::GetHorarios();
        foreach ($horarios as $key => $value) {
          $contador++;
          echo '<tr>
                  <td>'.$contador.'</td>
                  <td>'.$value['horario_hora_inicio'].'-'.$value['horario_hora_fin'].'</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>';
        }
        ?>
    </tbody>
  </table>
</div>