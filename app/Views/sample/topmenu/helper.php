<li class="nav-item <?= ($location == 'helper' ? 'active' : '') ?> dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="7 8 3 12 7 16"></polyline>
            <polyline points="17 8 21 12 17 16"></polyline>
            <line x1="14" y1="4" x2="10" y2="20"></line>
        </svg>
        <span class="nav-link-title">
            헬퍼
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
          <div class="dropdown-menu-column">
            <!-- Array 헬퍼 -->
            <a class="dropdown-item <?= ($menu == 'array' ? 'active' : '') ?>" href="/helper/arr" >Array 헬퍼</a>
            <!-- Cookie 헬퍼 -->
            <a class="dropdown-item <?= ($menu == 'cookie' ? 'active' : '') ?>" href="/helper/cookie" >Cookie 헬퍼</a>
          </div>
        </div>
    </div>
</li>