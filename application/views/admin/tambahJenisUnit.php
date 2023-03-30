<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

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
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
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
                <img src="../assets/img/icons/brands/ubs.png" alt class="w-px-40">
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
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- HOME MENU -->

            <!-- Master -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">MENU</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Master</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div >Unit</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Jenis Unit</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Petugas</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Jenis Complain</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Status</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Repair</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Jenis SPK</div>
                  </a>
                </li>
                
              </ul>
            </li>

            <!-- EDP-Infrastruktur -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">EDP - Infrastruktur</div>
              </a>
              <ul class="menu-sub">
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Monitoring Complain</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >SPK (Infrastruktur) </div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Repair (Vendor) </div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Complain/SPK Selesai</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Complain/SPK Batal</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Pending Complain/SPK</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Ubah Pending Jadi SPK lagi</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Ganti Password</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Laporan -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Laporan</div>
              </a>
              <ul class="menu-sub">
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >History Complain</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Listing Teknisi yang belum dapat SPK</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Listing Teknisi yang dapat SPK per range Tanggal</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Jumlah SPK per Teknisi</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Listing SPK per teknisi per Range Tanggal SPK</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Listing Uraian Complain Divisi</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Laporan Bulanan Infrastruktur</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Laporan Perbaikan Infrastruktur</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Jumlah Complain Divisi per Bulan</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Laporan Kegiatan Infrastruktur</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Laporan Pendingan per teknisi</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Laporan KPI Infrastruktur</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div >Laporan Barang Rusak</div>
                  </a>
                </li>

              </ul>
            </li>
            
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/blank.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/blank.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Admin</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    
                    
                  

                    <!-- bisa dipakai buat contoh notification -->
                    <!--
                      <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li> -->
                    <!--Sebagai pemisah antar dropdown item-->
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <!-- -->

                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              
                <div>
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div >
                        <div class="card-body" >
                          <h2 class="card-title text-primary"> Tambah Jenis Unit</h2>
						  
						  <br><br>
						  <form action="" method="post">
							
							<div class="mb-3">
							<label class="form-label" for="jenis_unit">Jenis Unit</label>
							<input type="text" class="form-control" id="jenis_unit" placeholder="......." />
							</div>

							<div class="mb-3">
							<label class="form-label" for="nama_jenis_unit">Nama Jenis Unit</label>
							<input type="text" class="form-control" id="nama_jenis_unit" placeholder="......." />
							</div>

							<div class="mb-3">
							<label class="form-label" for="usere">USERE</label>
							<input type="text" class="form-control" id="usere" placeholder="......." />
							</div>
							
							<div class="mb-3">
							<label class="form-label" for="jenis_complain">Jenis Complain</label>
							<input type="text" class="form-control" id="jenis_complain" placeholder="......." />
							</div>
							
							
							
							<button type="submit" class="btn btn-primary">Tambah</button>
						  </form>
                          	
                        </div>
                      </div>
                      <!-- <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div> -->
											
                    </div>
                  </div>
                </div>
                
                
              
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <!-- <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                </div>
              </div>
            </footer> -->
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
