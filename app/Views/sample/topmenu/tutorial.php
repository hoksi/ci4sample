<li class="nav-item <?= ($location == 'tutorial' ? 'active' : '') ?> dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
      <span class="nav-link-icon d-md-none d-lg-inline-block">
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><line x1="3" y1="6" x2="3" y2="19" /><line x1="12" y1="6" x2="12" y2="19" /><line x1="21" y1="6" x2="21" y2="19" /></svg>
      </span>
      <span class="nav-link-title">
        Tutorial
      </span>
    </a>
    <div class="dropdown-menu">
      <div class="dropdown-menu-columns">
        <div class="dropdown-menu-column">
          <!-- Tutorial -->
          <a class="dropdown-item <?= (isset($menu) && $menu == 'page' ? 'active' : '') ?>" href="/tutorial/home/page" >Pages</a>
          <a class="dropdown-item <?= (isset($menu) && $menu == 'news' ? 'active' : '') ?>" href="/tutorial/home/news" >News</a>
        </div>
      </div>
    </div>
</li>