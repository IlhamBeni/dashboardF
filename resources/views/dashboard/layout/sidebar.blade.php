<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse ">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/satu*') ? 'active' : '' }}" href="/dashboard/satu">
              <span data-feather="folder" class="align-text-bottom"></span>
              App Lembaga
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link  {{ Request::is('dashboard/dua*') ? 'active' : '' }}" href="/dashboard/dua">
              <span data-feather="folder" class="align-text-bottom"></span>
              Ref Produk
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/tiga*') ? 'active' : '' }}" href="/dashboard/tiga">
              <span data-feather="folder" class="align-text-bottom"></span>
              Server Service
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/empat*') ? 'active' : '' }}" href="/dashboard/empat">
              <span data-feather="folder" class="align-text-bottom"></span>
              Template IBSLITE
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/lima*') ? 'active' : '' }}" href="/dashboard/lima">
              <span data-feather="folder" class="align-text-bottom"></span>
              Sister Company
            </a>
          </li>
          
      </div>
    </nav>
    