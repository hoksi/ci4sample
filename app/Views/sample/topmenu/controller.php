<li class="nav-item <?= ($location == 'controller' ? 'active' : '') ?> dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
      </span>
      <span class="nav-link-title">
        컨트롤러와 라우팅
      </span>
    </a>
    <div class="dropdown-menu">
      <div class="dropdown-menu-columns">
        <div class="dropdown-menu-column">
          <!-- Controller -->
          <a class="dropdown-item <?= ($menu == 'controller' ? 'active' : '') ?>" href="/controller" >Controller</a>
          <!-- Routing -->
          <a class="dropdown-item <?= ($menu == 'routing' ? 'active' : '') ?>" href="/routing" >Routing</a>
          <!-- Filters -->
          <a class="dropdown-item <?= ($menu == 'filters' ? 'active' : '') ?>" href="/filters" >Filters</a>
          <!-- IncomingRequest -->
          <a class="dropdown-item <?= ($menu == 'incomming' ? 'active' : '') ?>" href="/incomming" >IncomingRequest Class</a>
        </div>
      </div>
    </div>
</li>