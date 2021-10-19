<li class="nav-item <?= ($location == 'library' ? 'active' : '') ?> dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <rect x="3" y="4" width="18" height="4" rx="2"></rect>
            <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10"></path>
            <line x1="10" y1="12" x2="14" y2="12"></line>
        </svg>
        <span class="nav-link-title">
            라이브러리
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
            <div class="dropdown-menu-column">
                <!-- 페이지네이션 -->
                <a class="dropdown-item <?= ($menu == 'pagination' ? 'active' : '') ?>" href="/library/pagination" >페이지네이션</a>
            </div>
        </div>
    </div>
</li>
