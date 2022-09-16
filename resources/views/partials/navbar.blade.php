<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="/">Wahyu's Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse container" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }} " href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }} " href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Categories") ? 'active' : '' }} " href="/categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Blog") ? 'active' : '' }} " href="/blog">Blog</a>
        </li>
      </ul>


      <ul class="navbar-nav ms-auto">
      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ auth()->user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>My DashBoard</a>
            <div class="dropdown-divider"></div>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> logout</button>
            </form>
          
            {{-- <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-left"></i> logout</a> --}}
          </div>
        </li>

      @else
        <li class="nav-item">
          <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
        </li>
      @endauth
    </ul>
      
    </div>
</nav>

