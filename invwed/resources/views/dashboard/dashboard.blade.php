<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    {{-- <link rel="stylesheet" href="css/dashboard/styles.css" /> --}}
    <link href="css/sidebars.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
  
        .b-example-divider {
          width: 100%;
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
  
        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }
  
        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }
  
        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }
  
        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }
  
        .btn-bd-primary {
          --bd-violet-bg: #712cf9;
          --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
  
          --bs-btn-font-weight: 600;
          --bs-btn-color: var(--bs-white);
          --bs-btn-bg: var(--bd-violet-bg);
          --bs-btn-border-color: var(--bd-violet-bg);
          --bs-btn-hover-color: var(--bs-white);
          --bs-btn-hover-bg: #6528e0;
          --bs-btn-hover-border-color: #6528e0;
          --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
          --bs-btn-active-color: var(--bs-btn-hover-color);
          --bs-btn-active-bg: #5a23c8;
          --bs-btn-active-border-color: #5a23c8;
        }
        .bd-mode-toggle {
          z-index: 1500;
        }
      </style>
    <title>Dashboard || Wedding</title>
</head>
<body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/">Adit Blog</a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
                <div class="navbar-nav">
                  <div class="nav-item text-nowrap">
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="nav-link px-3 bg-dark border-0"><span data-feather="log-out"></span> Log Out</button>
                    </form>
                  </div>
                </div>
              </header>
        {{-- Sidebar --}}
        <div class="flex-shrink-0 p-3" style="width: 280px;">
                <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                  <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                  <span class="fs-5 fw-semibold">Dashboard Admin</span>
                </a>
                <ul class="list-unstyled ps-0">
                  <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                      Home
                    </button>
                    <div class="collapse show" id="home-collapse">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Updates</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Reports</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                      Dashboard
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Overview</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Weekly</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Monthly</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Annually</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                      Orders
                    </button>
                    <div class="collapse" id="orders-collapse">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Processed</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Shipped</a></li>
                        <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Returned</a></li>
                      </ul>
                    </div>
                  </li>
                  <li class="border-top my-3"></li>
                  <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                      Account
                    </button>
                    <div class="collapse" id="account-collapse">
                      <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
                        <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
        {{-- Sidebar Wrapper --}}

        {{-- page content --}}
              @yield('main content')

    <script src="js/sidebars.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>