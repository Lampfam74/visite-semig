<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SuperAdmin</title>
    <link rel="stylesheet" href="{{ @asset('./css/mdb.min.css') }}">
    <script src="{{ @asset('./js/mdb.min.js') }}"></script>
</head>

<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="{{ @asset('1.png') }}"
            height="30"
            alt="lamp@semig"
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('direction.create') }}">Directions</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">  
        <!-- Notifications -->
        <div class="dropdown">
          <a
            data-mdb-dropdown-init
            class="text-reset me-3 dropdown-toggle hidden-arrow"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            aria-expanded="false"
          >
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="padding: 10px">
            @csrf
            <div class="nav-link">
                <input type="submit" class="form-control" value="Se déconnecter">
            </div>
          </form>
          </a>  
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
  <!-- Navbar -->
  @yield('main')
</body>
</html>