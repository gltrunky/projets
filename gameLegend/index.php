<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Framework -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Questrial&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"
    />
    <!-- Mon css -->
    <link rel="stylesheet" href="./component/css/style.css" />
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Titre de l'onglet -->
    <title>Game Legend</title>
  </head>
  <body>
    <!-- Menu -->
    <div class="navi">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#"
            ><i class="fas fa-house-damage"></i
          ></a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#services"
                >Services<span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#footer">Footer</a>
            </li>
          </ul>
          <button class="btn btn-primary my-2 my-sm-0 mr-sm-2" type="text">
            Connexion
          </button>
          <button class="btn btn-primary my-2 my-sm-0 mr-sm-2" type="text">
            Inscription
          </button>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Rechercher"
              aria-label="Search"
            />
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
              Rechercher
            </button>
          </form>
        </div>
      </nav>
    </div>
    <!-- Carroussel -->
    <div
      id="carouselExampleFade"
      class="carousel slide carousel-fade"
      data-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="./component/img/carrou1.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="./component/img/carrou2.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
        <div class="carousel-item">
          <img
            src="./component/img/carrou3.jpg"
            class="d-block w-100"
            alt="..."
          />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleFade"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleFade"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- S'identifié -->
    <div id="corp">
      <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">S'identifier</h1>
        <label for="inputEmail" class="sr-only">Adresse Email</label>
        <input
          type="email"
          id="inputEmail"
          class="form-control"
          placeholder="Adresse Email"
          required
          autofocus
        />
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input
          type="password"
          id="inputPassword"
          class="form-control"
          placeholder="Mot de passe"
          required
        />
        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me" /> Se souvenir
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">
          Connexion
        </button>
        <p class="mt-5 mb-3 text-muted">&copy; 2020-Game Legend</p>
      </form>
    </div>
    <!-- Mon script -->
    <script src="./component/js/app.js"></script>
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </body>
</html>
