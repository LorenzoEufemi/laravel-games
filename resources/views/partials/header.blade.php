<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
      <a class="navbar-brand" href="#">Backoffice Videogames</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('games') ? 'active' : '' }}" href="/games">Giochi</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="/dashboard">Dashboard</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}" href="/profile">Profilo</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="/register">Registrati</a>
              </li>
          </ul>
      </div>
  </nav>
</header>
