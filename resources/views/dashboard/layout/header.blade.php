<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="/dashboard">Dashboard</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <style>
      .navbar-nav {
        margin-right: 1050px;
      }
    </style>
    <div class="nav-item text-nowrap">
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="nav-link px-3 bg-dark border-0">
            <i>LogOut</i>
          <span data-feather="log-out" class="align-text-bottom"></span>
        </button>
      </form>
    </div>
  </div>
</header>