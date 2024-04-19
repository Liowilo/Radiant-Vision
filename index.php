

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Radiant Vision</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="indexStyles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400..700;1,400..700&family=Inter:wght@100..900&display=swap"
    rel="stylesheet" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #000000">
    <div class="container-fluid d-flex justify-content-between">
      <a class="navbar-brand" href="index.php">Radiant Vision</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto" style="margin-top: 10px; margin-bottom: 10px">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="cursos/cursos.php">Cursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Análisis de partida</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="d-inline-flex mr-2">
        <a href="login/login.php" class="btn btn-outline-light mx-2" role="button">Iniciar sesión</a>
        <a href="login/login.php" class="btn btn-outline-light" role="button">Registrarse</a>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header>
    <video id="videoFondo" autoplay loop muted>
      <source src="rsc/clips/header.mp4" type="video/mp4" />
      Tu navegador no soporta el elemento de video.
    </video>
    <div id="textoSobreVideo">
      <h1 class="display-4">Radiant Vision</h1>
      <p class="lead">
        ¡Mejora tu juego con Radiant vision!<br />Compara tus habilidades con
        tus ídolos y fortalece tus debilidades.
      </p>
    </div>
  </header>

  <div></div>

  <section class="container mt-4" id="principiantes">
    <div class="mt-4">
      <h2>Cursos para principiantes</h2>
    </div>

    <div id="carruselCursos" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex">
            <div class="col-sm-6 col-12">
              <div class="card">
                <img src="rsc/Logo_Wallpapers/valorantLogo/VALORANT_logo4.jpg" class="card-img-top" alt="Curso 1" />
                <div class="card-body">
                  <h5 class="card-title">¿Qué es Valorant?</h5>
                  <p class="card-text">
                    Conoce de que se trata Valorant y sus conceptos básicos.
                  </p>
                  <a href="#" class="btn btn-primary">Más detalles</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-12">
              <div class="card">
                <video class="card-img-top" autoplay loop muted>
                  <source src="rsc/LNY_Sage-Wallpapers/LNY_Sage-Wallpapers/Animated/LNY_Sage-5_CallBack.mp4"
                    type="video/mp4" />
                  Tu navegador no soporta el elemento de video.
                </video>
                <div class="card-body">
                  <h5 class="card-title">Lenguaje coloquial del juego</h5>
                  <p class="card-text">
                    ¿Confundido con los conceptos del juego? Aprende el nuevo
                    idioma Valorant
                  </p>
                  <a href="#" class="btn btn-primary">Más detalles</a>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-12">
              <div class="card">
                <video class="card-img-top" autoplay loop muted>
                  <source src="rsc/clips/curso5.mp4" type="video/mp4" />
                  Tu navegador no soporta el elemento de video.
                </video>
                <div class="card-body">
                  <h5 class="card-title">¿Como y cuando disparar?</h5>
                  <p class="card-text">
                    Conoce tecnicas de disparo para dar tus balas al 100%
                  </p>
                  <a href="#" class="btn btn-primary">Más detalles</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Agregar más items del carrusel según sea necesario -->

        <div class="carousel-item">
          <div class="d-flex">
            <div class="col-sm-6 col-12">
              <div class="card">
                <video class="card-img-top" autoplay loop muted>
                  <source src="rsc/clips/curso4.mp4" type="video/mp4" />
                  Tu navegador no soporta el elemento de video.
                </video>
                <div class="card-body">
                  <h5 class="card-title">Mis primeras bajas!</h5>
                  <p class="card-text">
                    Conoce conceptos basicos como crosshair placement y
                    tecnicas de disparo
                  </p>
                  <a href="#" class="btn btn-primary">Más detalles</a>
                </div>
              </div>
            </div>

            <!-- Agregar más items del carrusel según sea necesario -->
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carruselCursos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carruselCursos" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </section>

  <div id="experimentados">
    <section class="container mt-4">
      <div class="mt-4">
        <h2>Cursos para experimentados</h2>
      </div>

      <div id="carruselCursos" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex">
              <div class="col-sm-6 col-12">
                <div class="card">
                  <img src="rsc/Logo_Wallpapers/valorantLogo/VALORANT_logo4.jpg" class="card-img-top" alt="Curso 1" />
                  <div class="card-body">
                    <h5 class="card-title">¿Qué es Valorant?</h5>
                    <p class="card-text">
                      Conoce de que se trata Valorant y sus conceptos básicos.
                    </p>
                    <a href="#" class="btn btn-primary">Más detalles</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-12">
                <div class="card">
                  <video class="card-img-top" autoplay loop muted>
                    <source src="rsc/LNY_Sage-Wallpapers/LNY_Sage-Wallpapers/Animated/LNY_Sage-5_CallBack.mp4"
                      type="video/mp4" />
                    Tu navegador no soporta el elemento de video.
                  </video>
                  <div class="card-body">
                    <h5 class="card-title">Lenguaje coloquial del juego</h5>
                    <p class="card-text">
                      ¿Confundido con los conceptos del juego? Aprende el
                      nuevo idioma Valorant
                    </p>
                    <a href="#" class="btn btn-primary">Más detalles</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-12">
                <div class="card">
                  <video class="card-img-top" autoplay loop muted>
                    <source src="rsc/clips/curso5.mp4" type="video/mp4" />
                    Tu navegador no soporta el elemento de video.
                  </video>
                  <div class="card-body">
                    <h5 class="card-title">¿Como y cuando disparar?</h5>
                    <p class="card-text">
                      Conoce tecnicas de disparo para dar tus balas al 100%
                    </p>
                    <a href="#" class="btn btn-primary">Más detalles</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Agregar más items del carrusel según sea necesario -->

          <div class="carousel-item">
            <div class="d-flex">
              <div class="col-sm-6 col-12">
                <div class="card">
                  <video class="card-img-top" autoplay loop muted>
                    <source src="rsc/clips/curso4.mp4" type="video/mp4" />
                    Tu navegador no soporta el elemento de video.
                  </video>
                  <div class="card-body">
                    <h5 class="card-title">Mis primeras bajas!</h5>
                    <p class="card-text">
                      Conoce conceptos basicos como crosshair placement y
                      tecnicas de disparo
                    </p>
                    <a href="#" class="btn btn-primary">Más detalles</a>
                  </div>
                </div>
              </div>

              <!-- Agregar más items del carrusel según sea necesario -->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselCursos" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carruselCursos" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
    </section>
  </div>

  <div id="profesionales">
    <section class="container mt-4">
      <div class="mt-4">
        <h2>Cursos para profesionales</h2>
      </div>

      <div id="carruselCursos" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex">
              <div class="col-sm-6 col-12">
                <div class="card">
                  <img src="rsc/Logo_Wallpapers/valorantLogo/VALORANT_logo4.jpg" class="card-img-top" alt="Curso 1" />
                  <div class="card-body">
                    <h5 class="card-title">¿Qué es Valorant?</h5>
                    <p class="card-text">
                      Conoce de que se trata Valorant y sus conceptos básicos.
                    </p>
                    <a href="#" class="btn btn-primary">Más detalles</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-12">
                <div class="card">
                  <video class="card-img-top" autoplay loop muted>
                    <source src="rsc/LNY_Sage-Wallpapers/LNY_Sage-Wallpapers/Animated/LNY_Sage-5_CallBack.mp4"
                      type="video/mp4" />
                    Tu navegador no soporta el elemento de video.
                  </video>
                  <div class="card-body">
                    <h5 class="card-title">Lenguaje coloquial del juego</h5>
                    <p class="card-text">
                      ¿Confundido con los conceptos del juego? Aprende el
                      nuevo idioma Valorant
                    </p>
                    <a href="#" class="btn btn-primary">Más detalles</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-12">
                <div class="card">
                  <video class="card-img-top" autoplay loop muted>
                    <source src="rsc/clips/curso5.mp4" type="video/mp4" />
                    Tu navegador no soporta el elemento de video.
                  </video>
                  <div class="card-body">
                    <h5 class="card-title">¿Como y cuando disparar?</h5>
                    <p class="card-text">
                      Conoce tecnicas de disparo para dar tus balas al 100%
                    </p>
                    <a href="#" class="btn btn-primary">Más detalles</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Agregar más items del carrusel según sea necesario -->

          <div class="carousel-item">
            <div class="d-flex">
              <div class="col-sm-6 col-12">
                <div class="card">
                  <video class="card-img-top" autoplay loop muted>
                    <source src="rsc/clips/curso4.mp4" type="video/mp4" />
                    Tu navegador no soporta el elemento de video.
                  </video>
                  <div class="card-body">
                    <h5 class="card-title">Mis primeras bajas!</h5>
                    <p class="card-text">
                      Conoce conceptos basicos como crosshair placement y
                      tecnicas de disparo
                    </p>
                    <a href="#" class="btn btn-primary">Más detalles</a>
                  </div>
                </div>
              </div>

              <!-- Agregar más items del carrusel según sea necesario -->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselCursos" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carruselCursos" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
    </section>
  </div>

  <footer>© 2024 Radiant Vision. Todos los derechos reservados.</footer>

  <!-- Bootstrap JavaScript y dependencias -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"></script>
</body>

</html>