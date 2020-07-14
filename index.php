
<?php 
session_start();
define("BASE_URL","http://localhost/websiteku/dashboard/");
define("BASE_TEMPLATE","http://localhost/websiteku/dashboard/admintemplate/");

$user=$_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Websiteku Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo BASE_TEMPLATE;?>vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo BASE_TEMPLATE;?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo BASE_TEMPLATE;?>vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <link rel="stylesheet" href="<?php echo BASE_TEMPLATE;?>css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo BASE_TEMPLATE;?>images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="index.html">
            <img src="<?php echo BASE_TEMPLATE;?>images/logo.svg" alt="logo" class="logo-dark" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo BASE_TEMPLATE;?>images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Dasboard <?php echo $user['nama']; ?>!</h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
             <li class="nav-item dropdown">
              <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-speech"></i>
                <span class="count">7</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 font-weight-medium float-left">You have a unread mails </p>
                  <span class="badge badge-pill badge-primary float-right">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo BASE_TEMPLATE;?>images/faces/face10.jpg" alt="image" class="img-sm profile-pic"> </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis font-weight-medium text-dark"><?php echo $user['nama'];?> </p>
                    <p class="font-weight-light small-text"> Ujian Akhir Semester </p>
                  </div>
                </a>
                
              </div>
            </li>
            <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
              <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <div class="d-inline-flex mr-3">
                  <i class="flag-icon flag-icon-id"></i>
                </div>
                <span class="profile-text font-weight-normal">Indonesia</span>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-id"></i> Indonesia </a>
                <a class="dropdown-item">
                  <i class="flag-icon flag-icon-us"></i> English </a>
                
              </div>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="<?php echo BASE_TEMPLATE;?>images/faces/face8.jpg" alt="Profile image"> <span class="font-weight-normal"> <?php echo $user['nama'];?> </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="<?php echo BASE_TEMPLATE;?>images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3"><?php echo $user['nama'];?> </p>
                  <p class="font-weight-light text-muted mb-0"><?php echo $user['email'];?></p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-speech text-primary"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon icon-energy text-primary"></i> Activity</a>
                <a href="http://localhost/websiteku/logout.php" class="dropdown-item"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="<?php echo BASE_TEMPLATE ?>images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $user['nama'];?></p>
                  <p class="designation">Administrator</p>
                </div>
                <div class="icon-container">
                  <i class="icon-bubbles"></i>
                  <div class="dot-indicator bg-danger"></div>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Data Master</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL.'index.php?menu=daftarsiswa&module=mahasiswa'; ?>">Mahasiswa</a></li>
                  <li class="nav-item"> <a class="nav-link" href="<?php echo BASE_URL. 'index.php?menu=daftarmatkul&module=matkul'; ?>">Mata Kuliah</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
           
            <!-- main page-->
           <?php
              $menu=$_GET['menu'] ?? '';
              $module=$_GET['module'] ?? '';
               if (strlen($menu)>1) {
                   include $module.'/'.$menu.".php";
                   
               }
              
           ?>
            <!-- main page Ends-->
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2017 <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap Dash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo BASE_TEMPLATE;?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo BASE_TEMPLATE;?>vendors/chart.js/Chart.min.js"></script>
    <script src="<?php echo BASE_TEMPLATE;?>vendors/moment/moment.min.js"></script>
    <script src="<?php echo BASE_TEMPLATE;?>vendors/daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo BASE_TEMPLATE;?>vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo BASE_TEMPLATE;?>js/off-canvas.js"></script>
    <script src="<?php echo BASE_TEMPLATE;?>js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo BASE_TEMPLATE;?>js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>