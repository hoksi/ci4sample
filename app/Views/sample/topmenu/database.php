<li class="nav-item <?= ($location == 'database' ? 'active' : '') ?> dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-database" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <ellipse cx="12" cy="6" rx="8" ry="3"></ellipse>
          <path d="M4 6v6a8 3 0 0 0 16 0v-6"></path>
          <path d="M4 12v6a8 3 0 0 0 16 0v-6"></path>
        </svg>
        <span class="nav-link-title">
          데이터베이스
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
          <div class="dropdown-menu-column">
            <!-- 데이터베이스 빠른 시작 -->
            <a class="dropdown-item <?= ($menu == 'quick' ? 'active' : '') ?>" href="/database/quick" >데이터베이스 빠른 시작</a>
            <!-- 데이터베이스 구성 -->
            <a class="dropdown-item <?= ($menu == 'configuration' ? 'active' : '') ?>" href="/database/configuration" >데이터베이스 구성</a>
            <!-- 쿼리 -->
            <a class="dropdown-item <?= ($menu == 'queries' ? 'active' : '') ?>" href="/database/queries" >쿼리</a>
            <!-- 쿼리 결과 -->
            <a class="dropdown-item <?= ($menu == 'result' ? 'active' : '') ?>" href="/database/result" >쿼리 결과</a>
            <!-- 쿼리 헬퍼 -->
            <a class="dropdown-item <?= ($menu == 'helper' ? 'active' : '') ?>" href="/database/helper" >쿼리 헬퍼</a>
            <!-- 쿼리 빌더 -->
            <a class="dropdown-item <?= ($menu == 'qbuilder' ? 'active' : '') ?>" href="/database/qbuilder" >쿼리 빌더</a>
          </div>
        </div>
    </div>
</li>