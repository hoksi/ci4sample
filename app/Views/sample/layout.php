<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?= $title ?> - Codeignit4 Sample</title>
    <!-- CSS files -->
    <link href="/assets/tabler/css/tabler.min.css" rel="stylesheet"/>
    <link href="/assets/tabler/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="/assets/tabler/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="/assets/tabler/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="/assets/tabler/css/demo.min.css" rel="stylesheet"/>
  </head>
  <body class="antialiased">
    <div class="wrapper">
        <header class="navbar navbar-expand-md navbar-light d-print-none">
          <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
              <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
              <a href="/">
                <img src="/assets/static/ci-logo-big.png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                Codeigniter4 sample
              </a>
            </h1>
            <div class="navbar-nav flex-row order-md-last">
              <div class="nav-item d-none d-md-flex me-3">
                <div class="btn-list">
                  <a href="https://github.com/hoksi/ci4sample" class="btn btn-outline-white" target="_blank" rel="noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                    Source code
                  </a>
                </div>
              </div>
              <div class="nav-item dropdown d-none d-md-flex me-3">
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card">
                  <div class="card">
                    <div class="card-body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad amet consectetur exercitationem fugiat in ipsa ipsum, natus odio quidem quod repudiandae sapiente. Amet debitis et magni maxime necessitatibus ullam.
                    </div>
                  </div>
                </div>
              </div>
              <div class="nav-item dropdown">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                  <span class="avatar avatar-sm" style="background-image: url(/assets/static/hoksi.jpg)"></span>
                  <div class="d-none d-xl-block ps-2">
                    <div>hoksi</div>
                    <div class="mt-1 small text-muted">Framework Designer</div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <a href="#" class="dropdown-item">Set status</a>
                  <a href="#" class="dropdown-item">Profile & account</a>
                  <a href="#" class="dropdown-item">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Settings</a>
                  <a href="#" class="dropdown-item">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </header>

        <div class="navbar-expand-md">
          <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar navbar-light">
              <div class="container-xl">
                <ul class="navbar-nav">
                  <li class="nav-item <?= ($location == 'home' ? 'active' : '') ?>">
                    <a class="nav-link" href="/sample" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                      </span>
                      <span class="nav-link-title">
                        Home
                      </span>
                    </a>
                  </li>
                  <li class="nav-item <?= ($location == 'example' ? 'active' : '') ?> dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" /><line x1="12" y1="12" x2="20" y2="7.5" /><line x1="12" y1="12" x2="12" y2="21" /><line x1="12" y1="12" x2="4" y2="7.5" /><line x1="16" y1="5.25" x2="8" y2="9.75" /></svg>
                      </span>
                      <span class="nav-link-title">
                        Interface
                      </span>
                    </a>
                    <div class="dropdown-menu">
                      <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                          <!-- Tutorial -->
                          <div class="dropend">
                            <a class="dropdown-item dropdown-toggle <?= ($menu == 'tutorial' ? 'active' : '') ?>" href="#sidebar-authentication" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                              Tutorial
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item <?= (isset($type) && $type == 'page' ? 'active' : '') ?>" href="/tutorial/home/page" >Pages</a>
                                <a class="dropdown-item <?= (isset($type) && $type == 'news' ? 'active' : '') ?>" href="/tutorial/home/news" >News</a>
                            </div>
                          </div>
                          <!-- Controller -->
                          <a class="dropdown-item <?= ($menu == 'controller' ? 'active' : '') ?>" href="/controller" >Controller</a>
                          <!-- Routing -->
                          <div class="dropend">
                            <a class="dropdown-item dropdown-toggle <?= ($menu == 'routing' ? 'active' : '') ?>" href="#sidebar-authentication" data-bs-toggle="dropdown" role="button" aria-expanded="false" >
                              Routing
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item <?= (isset($type) && $type == 'basic' ? 'active' : '') ?>" href="/routing/home/basic" >라우팅 기초</a>
                                <a class="dropdown-item <?= (isset($type) && $type == 'custom' ? 'active' : '') ?>" href="/routing/home/custom" >사용자정의 자리 표시자와 정규식</a>
                                <a class="dropdown-item <?= (isset($type) && $type == 'closer' ? 'active' : '') ?>" href="/routing/home/closer" >클로저,다중경로,리다이렉트</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="http://ci4doc.cikorea.net" target="_blank">
                      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14 3v4a1 1 0 0 0 1 1h4" /><path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" /><line x1="9" y1="9" x2="10" y2="9" /><line x1="9" y1="13" x2="15" y2="13" /><line x1="9" y1="17" x2="15" y2="17" /></svg>
                      </span>
                      <span class="nav-link-title">
                        Documentation
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <?= $this->renderSection('content') ?>
      
        <footer class="footer footer-transparent d-print-none">
          <div class="container">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2021
                    <a href="." class="link-secondary">Tabler</a>.
                    All rights reserved.
                  </li>
                  <li class="list-inline-item">
                    <a href="./changelog.html" class="link-secondary" rel="noopener">v1.0.0-beta3</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="/assets/tabler/js/tabler.min.js"></script>
  </body>
</html>