<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="1.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8"> --}}
      <br>
                   <span class="brand-text "> &nbsp;&nbsp;&nbsp;SEMIG<sup>SA</sup></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('1.png') }}" class="img-fluid" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Accueil | {{Auth::user()->name }}</a>
        </div>
      </div>

      {{-- <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw">bbbbbbbbbbb</i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de Bord
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rechercher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accueil.index') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nouvoulles visites</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('accueil.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste en Attentes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('direction.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Direction
                <span class="right badge badge-danger">new</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
              <div class="nav-link">
                  <input type="submit" class="form-control" value="Se déconnecter">
              </div>
            </form>
          </li>
        </ul>
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>