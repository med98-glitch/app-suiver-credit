<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

         <!--cdn extern-->
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"rel="stylesheet"/>

        <!-- MDB -->
        <script
        type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

       <!--bootstrap-->

       <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
       <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--css-->
     <link rel="stylesheet" href="../assets/style.css">


      <title>Document</title>
</head>
<body>
  <!-- Navbar -->
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
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
        <a class="navbar-brand mt-2 mt-lg-0" href="{{url('/')}}">
          <img
            src="../assets/images/logo.png"
            height="40"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>
        <!-- Left links
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projects</a>
          </li>
        </ul> -->
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
      
  
        <!-- Notifications -->
      
        <!-- Avatar -->
        <div class="dropdown">
          <a
            class="dropdown-toggle d-flex align-items-center hidden-arrow"
            href="#"
            id="navbarDropdownMenuAvatar"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            <img
              src="../assets/images/iconvide.png"
              class="rounded-circle"
              height="80"
              alt="Black and White Portrait of a Man"
              loading="lazy"
            />
          </a>
          <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar" dropdown-item
          >
          @guest
          @if (Route::has('login'))
              <li>
                  <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
          @endif

          @if (Route::has('register'))
              <li >
                  <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li>
              <a class="dropdown-item"  href="#"  >
                  {{ Auth::user()->name }}
              </a>
            </li>   
            
            <li>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                      @csrf
                  </form>
          </li>
      @endguest
          </ul>
          <ul class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  @yield("content")
   
  <section class="">
    <!-- Footer -->
    <footer class="footer mt-auto text-center text-white" style="background-color: #0a4275;" >
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-white" href="https://cc-coteaux.be/">cc-coteaux.be</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>
</body>
</html>