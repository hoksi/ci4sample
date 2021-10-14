<li class="nav-item <?= ($location == 'model' ? 'active' : '') ?> dropdown">
    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
	<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /></svg>
        <span class="nav-link-title">
          모델
        </span>
    </a>
    <div class="dropdown-menu">
        <div class="dropdown-menu-columns">
          <div class="dropdown-menu-column">
            <!-- 모델 기초 -->
            <a class="dropdown-item <?= ($menu == 'cimodel' ? 'active' : '') ?>" href="/model/cimodel" >모델 기초</a>
            <!-- 데이터 검증 -->
            <a class="dropdown-item <?= ($menu == 'validation' ? 'active' : '') ?>" href="/model/validation" >모델 데이터 검증</a>
            <!-- 모델 이벤트 -->
            <a class="dropdown-item <?= ($menu == 'event' ? 'active' : '') ?>" href="/model/event" >모델 이벤트</a>
            <!-- Entity -->
            <a class="dropdown-item <?= ($menu == 'entity' ? 'active' : '') ?>" href="/model/entity" >Entity</a>
          </div>
        </div>
    </div>
</li>