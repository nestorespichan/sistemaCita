<div class="main d-flex justify-content-center w-100">
        <main class="content d-flex p-0">
          <div class="container d-flex flex-column">
            <div class="row h-100">
              <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                  <div class="text-center mt-4">
                    <h1 class="h2">Bienvenido</h1>
                    <p class="lead">
                      Inicia sesión en tu cuenta para continuar
                    </p>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="m-sm-4">
                        <div class="text-center">
                          <img src="assets/img/avatars/avatar0.jpg" alt="Chris Wood" class="img-fluid rounded-circle" width="132" height="132" />
                        </div>
                        <form id="loginform" method="post">
                          <div class="mb-3">
                            <label class="form-label">Correo Electrónic</label>
                            <input class="form-control form-control-lg" type="email" id="txtCorreo" name="txtCorreo" required />
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Contraseña</label>
                            <input class="form-control form-control-lg" type="password" id="txtClave" name="txtClave"  required/>
                            <small>
                  <a href="pages-reset-password.html">¿Has olvidado tu contraseña?</a>
                  </small>
                          </div>
                          <div>
                            <div class="form-check align-items-center">
                              <input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me" checked>
                              <label class="form-check-label text-small" for="customControlInline">Recuérdame la próxima vez</label>
                            </div>
                          </div>
                          <div class="text-center mt-3">
                            <button class="btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
                            <?php
                                    $login = new ControllerUsuario();
                                    $login -> Login();        
                                ?>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </main>
      </div>