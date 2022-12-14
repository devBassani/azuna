<?php
    session_start();
    //echo "Registro: ". $_SESSION['usuarioRegistro'];
    ////?><p> <?php// echo strval($_SESSION['usuarioNome']);?></p><?php
    if(is_null($_SESSION['usuarioNome']) AND $_SESSION['usuarioNiveisAcessoId']>3){
        $_SESSION['loginErro'] = "tente entrar novamente!";
        header("Location: ../index.php");
    }else{
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="tela que apresenta os dipositivos de todos os clientes e permite a consulta/busca por número de série." />
    <meta name="autor" content="André Victor" />
    <meta name="versão" content="Root 14.21.44" />
    <title>Azuna OS</title>

    <link
      href="../node_modules/bootstrap/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <style>
      
    </style>

    <link href="../css/equipamento.css" rel="stylesheet" />
  </head>
  <body>
    <main>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Azuna</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Equipamentos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">OS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../php/logout.php">Sair</a>
              </li>
            </ul>
            <form class="d-flex text-center" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="número de série"
                aria-label="Search"
              />
            </form>
          </div>
        </div>
      </nav>

      <div class="album px-auto bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <div class="col">
              <div class="card shadow-sm align-items-center">
                <img
                  class="img-resposive"
                  alt="equipamento"
                  width="40%"
                  max-height="100px"
                  src="../ex.jpg"
                  alt=""
                  class="bd-placeholder-img card-img-top"
                  xmlns="http://www.w3.org/2000/svg"
                  role="img"
                  aria-label="Imagem do equipamento"
                  preserveAspectRatio="xMidYMid slice"
                  focusable="false"
                />

                <div class="card-body">
                  <p class="card-text">
                    <p> Empresa: <small>SuperTerminais</small></p>
                    <p> Modelo: <small>Conception S1</small></p>
                    <p> Nº série: <small>1200248288</small></p>
                  </p>
                  <div
                    class="d-flex justify-content-md-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Visualizar equipamento
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Criar OS
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <div class="col">
              <div class="card shadow-sm align-items-center">
                <img
                  class="img-resposive"
                  alt="equipamento"
                  width="40%"
                  max-height="100px"
                  src="../ex2.jpg"
                  alt=""
                  class="bd-placeholder-img card-img-top"
                  xmlns="http://www.w3.org/2000/svg"
                  role="img"
                  aria-label="Imagem do equipamento"
                  preserveAspectRatio="xMidYMid slice"
                  focusable="false"
                />

                <div class="card-body">
                  <p class="card-text">
                    <p> Empresa: <small>SuperTerminais</small></p>
                    <p> Modelo: <small>Conception S1</small></p>
                    <p> Nº série: <small>1200248288</small></p>
                  </p>
                  <div
                    class="d-flex justify-content-md-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Visualizar equipamento
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Criar OS
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm align-items-center">
                <img
                  class="img-resposive"
                  alt="equipamento"
                  width="40%"
                  max-height="100px"
                  src="../ex3.jpg"
                  alt=""
                  class="bd-placeholder-img card-img-top"
                  xmlns="http://www.w3.org/2000/svg"
                  role="img"
                  aria-label="Imagem do equipamento"
                  preserveAspectRatio="xMidYMid slice"
                  focusable="false"
                />

                <div class="card-body">
                  <p class="card-text">
                    <p> Empresa: <small>SuperTerminais</small></p>
                    <p> Modelo: <small>Conception S1</small></p>
                    <p> Nº série: <small>1200248288</small></p>
                  </p>
                  <div
                    class="d-flex justify-content-md-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Visualizar equipamento
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Criar OS
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm align-items-center">
                <img
                  class="img-resposive"
                  alt="equipamento"
                  width="40%"
                  max-height="100px"
                  src="../ex.jpg"
                  alt=""
                  class="bd-placeholder-img card-img-top"
                  xmlns="http://www.w3.org/2000/svg"
                  role="img"
                  aria-label="Imagem do equipamento"
                  preserveAspectRatio="xMidYMid slice"
                  focusable="false"
                />

                <div class="card-body">
                  <p class="card-text">
                    <p> Empresa: <small>SuperTerminais</small></p>
                    <p> Modelo: <small>Conception S1</small></p>
                    <p> Nº série: <small>1200248288</small></p>
                  </p>
                  <div
                    class="d-flex justify-content-md-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Visualizar equipamento
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Criar OS
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <div class="col">
              <div class="card shadow-sm align-items-center">
                <img
                  class="img-resposive"
                  alt="equipamento"
                  width="40%"
                  max-height="100px"
                  src="../ex2.jpg"
                  alt=""
                  class="bd-placeholder-img card-img-top"
                  xmlns="http://www.w3.org/2000/svg"
                  role="img"
                  aria-label="Imagem do equipamento"
                  preserveAspectRatio="xMidYMid slice"
                  focusable="false"
                />

                <div class="card-body">
                  <p class="card-text">
                    <p> Empresa: <small>SuperTerminais</small></p>
                    <p> Modelo: <small>Conception S1</small></p>
                    <p> Nº série: <small>1200248288</small></p>
                  </p>
                  <div
                    class="d-flex justify-content-md-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Visualizar equipamento
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Criar OS
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm align-items-center">
                <img
                  class="img-resposive"
                  alt="equipamento"
                  width="40%"
                  max-height="100px"
                  src="../ex3.jpg"
                  alt=""
                  class="bd-placeholder-img card-img-top"
                  xmlns="http://www.w3.org/2000/svg"
                  role="img"
                  aria-label="Imagem do equipamento"
                  preserveAspectRatio="xMidYMid slice"
                  focusable="false"
                />

                <div class="card-body">
                  <p class="card-text">
                    <p> Empresa: <small>SuperTerminais</small></p>
                    <p> Modelo: <small>Conception S1</small></p>
                    <p> Nº série: <small>1200248288</small></p>
                  </p>
                  <div
                    class="d-flex justify-content-md-center"
                  >
                    <div class="btn-group">
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Visualizar equipamento
                      </button>
                      <button
                        type="button"
                        class="btn btn-sm btn-outline-secondary"
                      >
                        Criar OS
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </main>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
    }
?>