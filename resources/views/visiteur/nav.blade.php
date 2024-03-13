<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Accueil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="dropdown user_profile">
        <div class="dropdown-toggle" data-bs-toggle="dropdown">
            <img src="{{ asset('man1.png')}}" alt="user" height="30px" width="30px
            
            ">
        </div>
        <ul class="dropdown-menu dropdown-menu-end">
            <li class="body">
                <ul class="user_dw_menu">
                    <li>
                        <a href="#" onclick="return false;">
                            <i class="material-icons"></i>Profile
                        </a>
                    </li>
                     <a href="#">
                        <li>{{Auth::user()->prenom }} {{Auth::user()->nom }}</li>
                     </a>
                    <li>
                        
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    </ul>
  </nav>    