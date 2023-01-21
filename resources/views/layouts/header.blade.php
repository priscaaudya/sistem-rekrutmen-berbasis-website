
  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="/img/logo3.png" alt="" style="width: 40%"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#lowongan">Lowongan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/#kontak">Kontak</a>
            </li>
            <ul class="navbar-nav ms-auto">
                @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back,
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="fa fa-home"></i>  Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="dropdown-item"><i class="fa fa-arrow-right"></i><span>  Keluar</i></button>
                        </form>
                      </li>
                    </ul>
                  </li>
                      
                  @else
                      
                  <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="/login">Login / Register</a>
                  </li>
                @endauth
              </ul>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>