<!DOCTYPE html>


<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?= base_url("assets/") ?>"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"  href="<?= base_url("assets/img/icons/brands/ubs.png")?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/vendor/css/core.css")?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url("assets/vendor/css/theme-default.css")?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url("assets/css/demo.css") ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css") ?>" />

    <link rel="stylesheet" href="<?= base_url("assets/vendor/libs/apex-charts/apex-charts.css") ?>"/>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url("assets/vendor/js/helpers.js") ?>"></script>

    <!-- Data Table -->
    <!-- <link href='http://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css'>
    <script src='https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js'></script> -->

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url("assets/js/config.js") ?> "></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
				
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme bg-primary" >
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="<?= base_url("assets/img/icons/brands/ubs.png") ?>" alt class="w-px-40">
              </span> 
               
              <span class="menu-text fw-bolder ms-2 px-15">UBS</span> 
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <!--SideBar-->
          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="<?= base_url("CAdminSIT/HomeAdminSIT") ?>" class="menu-link">
							<i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- HOME MENU -->

            <!-- Menu Sidebar -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">MENU</span>
            </li>

						
            <li class="menu-item">
              <a href="<?= base_url("Ccompkomputer/List") ?>" class="menu-link">
							<i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Complain Problem Komputer</div>
              </a>
            </li>
						<li class="menu-item">
              <a href="<?= base_url("CPengesahanpromblem") ?>" class="menu-link">
							<i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Pengesahan Problem Komputer yang sudah Selesai</div>
              </a>
            </li>
						<li class="menu-item">
              <a href="<?= base_url("CAdminSIT/PGantiPass") ?>" class="menu-link">
							<i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Ganti Password</div>
              </a>
            </li>

						<!-- end menu sidebar -->


            

            
            
          </ul>
        </aside>
        <!-- / Menu -->

       
      
