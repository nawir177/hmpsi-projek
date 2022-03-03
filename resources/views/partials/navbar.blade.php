<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/LOGO.png" alt="" width="40px" style="margin-right: 10px"> HMP-SI UNISKA
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($tittle==='Home')?'active' :'' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle==='Profile')?'active' :'' }}" href="/profile">profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($tittle==='')?'active' :'' }}" href="#">hmp-si Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>        
      </ul>
    </div>
  </div>
</nav>