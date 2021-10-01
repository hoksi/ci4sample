<li class="nav-item <?= ($location == 'response' ? 'active' : '') ?> dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrows-double-sw-ne" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M14 3l-11 11"></path>
          <path d="M3 10v4h4"></path>
          <path d="M17 10h4v4"></path>
          <path d="M10 21l11 -11"></path>
        </svg>
        <span class="nav-link-title">
          응답(Response) 만들기
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
          <div class="dropdown-menu-column">
            <!-- View -->
            <a class="dropdown-item <?= ($menu == 'view' ? 'active' : '') ?>" href="/response/view" >View</a>
            <!-- View Cell -->
            <a class="dropdown-item <?= ($menu == 'cell' ? 'active' : '') ?>" href="/response/cell" >View Cell</a>
            <!-- View Layout -->
            <a class="dropdown-item <?= ($menu == 'layout' ? 'active' : '') ?>" href="/response/layout" >View Layout</a>
            <!-- View Parser -->
            <a class="dropdown-item <?= ($menu == 'parser' ? 'active' : '') ?>" href="/response/parser" >View Parser</a>
            <!-- HTML Table 클래스 -->
            <a class="dropdown-item <?= ($menu == 'table' ? 'active' : '') ?>" href="/response/table" >HTML Table 클래스</a>
            <!-- HTTP 응답(Responses) -->
            <a class="dropdown-item <?= ($menu == 'http' ? 'active' : '') ?>" href="/response/http" >HTTP 응답(Responses)</a>
            <!-- HTTP 응답(Responses) -->
            <a class="dropdown-item <?= ($menu == 'localization' ? 'active' : '') ?>" href="/response/localization" >지역화 (Localization)</a>
          </div>
        </div>
    </div>
</li>