<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile">
          <a href="#" class="nav-link">
            <div class="nav-profile-image">
              <img src="assets/images/faces/face1.jpg" alt="profile">
              <span class="login-status online"></span>
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex flex-column">
              <span class="font-weight-bold mb-2"> {{ Auth::user()->name }}</span>
              <span class="text-secondary text-small">Student</span>
            </div>
            <i class="mdi mdi-bookmark-check text-gradient-success nav-profile-badge"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/student">
            <span class="menu-title text-gradient-danger">Dashboard</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <span class="menu-title">Admission</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-medical-bag menu-icon"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/application-form">Admission form </a></li>
                <li class="nav-item"> <a class="nav-link" href="/addmission_slip"> View Slip </a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="menu-title text-gradient-danger">Admission status</span>
              <i class="mdi mdi-account-check menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="menu-title text-gradient-danger">Invoice</span>
              <i class="mdi mdi-receipt menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="menu-title text-gradient-danger">Account</span>
              <i class="mdi mdi-account menu-icon"></i>
            </a>
          </li>
        
      </ul>
    </nav>
