<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href='{{ asset('assets/img/only_logo_main.png') }}'>
  <link rel="icon" type="image/png" href='{{ asset('assets/img/only_logo_main.png') }}'>
  <title>
    Login :: SABI CORPORATE LIMTED
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href='{{  asset("assets/css/nucleo-icons.css")  }}' rel="stylesheet")/>
  <link href='{{  asset("assets/css/nucleo-svg.css")  }}' rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href='{{  asset("assets/css/nucleo-svg.css")  }}' rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href='{{  asset("assets/css/soft-ui-dashboard.css?v=1.0.7")  }}' rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href='/'>
                <img src="{{ asset('assets/img/main_logo.png') }}" style="width: 10em" alt="Logo">
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                <li class="nav-item">
                  <a class="nav-link me-2" href="https://sabicorporate.com/">
                    <i class="fa fa-home opacity-6 text-success me-1"></i>
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="https://sabicorporate.com/#about">
                    <i class="fas fa-building opacity-6 text-success me-1"></i>
                    About
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="https://sabicorporate.com/#service">
                    <i class="fab fa-servicestack opacity-6 text-success me-1"></i>
                    Service
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="https://sabicorporate.com/#team">
                    <i class="fas fa-users opacity-6 text-success me-1"></i>
                    Team
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="https://sabicorporate.com/blog">
                    <i class="fas fa-blog opacity-6 text-success me-1"></i>
                    Blog
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="https://sabicorporate.com/#contact" class="btn btn-sm btn-round mb-0 me-1 bg-gradient-success">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">

    @yield('content')
     

  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="https://sabicorporate.com/" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Home
          </a>
          <a href="https://sabicorporate.com/#about" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            About Us
          </a>
          <a href="https://sabicorporate.com/#team" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Team
          </a>
          <a href="https://sabicorporate.com/#service" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Sercices
          </a>
          <a href="https://sabicorporate.com/blog" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Blog
          </a>
          <a href="https://sabicorporate.com/#contact" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
            Contact
          </a>
        </div>
        <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
          <a href="/" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-dribbble"></span>
          </a>
          <a href="/" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-twitter"></span>
          </a>
          <a href="/" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-instagram"></span>
          </a>
          <a href="/" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-pinterest"></span>
          </a>
          <a href="/" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg fab fa-github"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Sabi Corporate Limited
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src='{{  asset("assets/js/core/popper.min.js")  }}'></script>
  <script src='{{  asset("assets/js/core/bootstrap.min.js")  }}'></script>
  <script src='{{  asset("assets/js/plugins/perfect-scrollbar.min.js")  }}'></script>
  <script src='{{  asset("assets/js/plugins/smooth-scrollbar.min.js")  }}'></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src='{{  asset("../assets/js/soft-ui-dashboard.min.js?v=1.0.7")  }}'></script>
</body>

</html>