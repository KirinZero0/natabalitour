  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">A-Panel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->username}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{auth()->user()->username}}</h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href={{route('admin.logout')}}>
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      @if(auth()->guard('admin')->check() && auth()->guard('admin')->user()->username === 'owner')
      <li class="nav-item">
          <a class="nav-link collapsed" href="{{ route('admin.user.index') }}">
              <i class="bi bi-journal-text"></i><span>Admins</span>
          </a>
      </li>
    @endif
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-layout-text-window-reverse"></i><span>Bookings</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
              <li>
                <a href="{{ route('admin.booking.package.index') }}">
                  <i class="bi bi-circle"></i><span>Package Booking</span>
                </a>
              </li>
              <li>
                <a href="{{ route('admin.booking.activity.index') }}">
                  <i class="bi bi-circle"></i><span>Activity Booking</span>
                </a>
              </li>
            </ul>
          </li><!-- End Tables Nav -->

          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.article.index') }}">
                <i class="bi bi-journal-text"></i><span>Articles</span>
            </a>
          </li>
        <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('admin.package.index') }}">
            <i class="bi bi-gem"></i><span>Packages</span>
        </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.activity.index') }}">
            <i class="bi bi-gem"></i><span>Activities</span>
            </a>
        </li>
    </ul>

  </aside><!-- End Sidebar-->