<div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                  <h3>Dashboard</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                  <div class="card illustration flex-fill">
                    <div class="card-body p-0 d-flex flex-fill">
                      <div class="row g-0 w-100">
                        <div class="col-8">
                          <div class="illustration-text p-3 m-1">
                            <h4 class="illustration-text">Bienvenido, <?php echo $_SESSION["SesionNombre"]; ?></h4>
                          </div>
                        </div>
                        <div class="col-6 align-self-end text-end">
                          <img src="assets/img/illustrations/customer-support.png" alt="Customer Support" class="img-fluid illustration-img">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                  <div class="card flex-fill">
                    <div class="card-body py-4">
                      <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                          <h3 class="mb-2">S/ 0.00</h3>
                          <p class="mb-2">Total del día</p>
                          <div class="mb-0">
                            <span class="badge badge-soft-success me-2"> <i class="mdi mdi-arrow-bottom-right"></i> +0.00% </span>
                            <span class="text-muted">Pagado</span>
                          </div>
                          <div class="mb-0">
                            <span class="badge badge-soft-danger me-2"> <i class="mdi mdi-arrow-bottom-right"></i> +0.00% </span>
                            <span class="text-muted">Pendiente</span>
                          </div>
                        </div>
                        <div class="d-inline-block ms-3">
                          <div class="stat">
                            <i class="align-middle text-success" data-feather="dollar-sign"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                  <div class="card flex-fill">
                    <div class="card-body py-4">
                      <div class="d-flex align-items-start">
                        <div class="flex-grow-1">
                          <h3 class="mb-2">0</h3>
                          <p class="mb-2">Pacientes Programados</p>
                          <div class="mb-0">
                            <span class="badge badge-soft-danger me-2"> <i class="mdi mdi-arrow-bottom-right"></i> +0.00% </span>
                            <span class="text-muted">Por Confirmar</span>
                          </div>
                          <div class="mb-0">
                            <span class="badge badge-soft-success me-2"> <i class="mdi mdi-arrow-bottom-right"></i> +0.00% </span>
                            <span class="text-muted">Confirmado</span>
                          </div>
                        </div>
                        <div class="d-inline-block ms-3">
                          <div class="stat">
                            <i class="align-middle text-danger" data-feather="shopping-bag"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
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
                    </tr>
                  </tbody>
                </table>
              </div>