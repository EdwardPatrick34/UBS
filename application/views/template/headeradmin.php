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
    <link rel="icon" type="image/x-icon" href="../assets/img/icons/brands/ubs.png" />

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

    
    <script src="<?= base_url("assets/js/config.js") ?> "></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
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
              <a href="<?= base_url("CRAdmin/HomeAdminIT") ?>" class="menu-link">
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
                  <a href="<?= base_url('CRAdmin/masterUser') ?>" class="menu-link">
                    <div >User</div>
                  </a>
                </li>
                <!-- <li class="menu-item">
                  <a href="<?= base_url('CUnit/masterUnit') ?>" class="menu-link">
                    <div >Unit</div>
                  </a>
                </li> -->
                <li class="menu-item">
                  <a href="<?= base_url('CJenisUnit/masterJenisUnit') ?>" class="menu-link">
                    <div >Jenis Unit</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="<?= base_url('Cpetugas/masterPetugas') ?>" class="menu-link">
                    <div >Petugas</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="<?= base_url('CJenisComplain/masterJenisComplain') ?>" class="menu-link">
                    <div >Jenis Complain</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="<?= base_url('Cstatus/masterStatus') ?>" class="menu-link">
                    <div >Status</div>
                  </a>
                </li>
									<!-- <li class="menu-item">
										<a href="<?= base_url('CRepair/masterRepair') ?>" class="menu-link">
											<div >Repair</div>
										</a>
									</li> -->
								<li class="menu-item">
                  <a href="<?= base_url('CJenisSpk/masterJenisSpk') ?>" class="menu-link">
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
                  <a href="<?= base_url('CRAdmin/monitoringComplain') ?>" class="menu-link">
                    <div >Monitoring Complain</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?= base_url('CRAdmin/listComplain') ?>" class="menu-link">
                    <div >SPK (Infrastruktur) </div>
                  </a>
                </li>
								
								<li class="menu-item">
                  <a href="<?= base_url('CRAdmin/listmonitorspkselesai')?>" class="menu-link">
                    <div >Complain/SPK Selesai</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="<?= base_url('CRAdmin/listmonitorspkbatal')?>" class="menu-link">
                    <div >Complain/SPK Batal</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="<?= base_url('CRAdmin/listmonitorspkpending')?>" class="menu-link">
                    <div >Pending Complain/SPK</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="<?= base_url('CRAdmin/listpendingkeselesai')?>" class="menu-link">
                    <div >Ubah Pending Jadi SPK lagi</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="<?= base_url('CRAdmin/spkStart')?>" class="menu-link">
                    <div>SPK START-STOP</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="CRAdmins-account-settings-notifications.html" class="menu-link">
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
                  <a href="<?= base_url('CRAdmin/LaporanHistoryComplain') ?>" class="menu-link">
                    <div >History Complain</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="<?= base_url('CRAdmin/UraianComplainDivisi')?>" class="menu-link">
                    <div >Listing Uraian Complain Divisi</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="<?= base_url('CRAdmin/LaporanBulananInfrastruktur')?>" class="menu-link">
                    <div >Laporan Bulanan Infrastruktur</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="<?= base_url('CRAdmin/LaporanKegiatanInfrastruktur') ?>" class="menu-link">
                    <div >Laporan Kegiatan Infrastruktur</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="<?= base_url('CRAdmin/LaporanPendinganTeknisi') ?>" class="menu-link">
                    <div >Laporan Pendingan per teknisi</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="<?= base_url('CRAdmin/LaporanBarangRusak')?>" class="menu-link">
                    <div >Laporan Barang Rusak</div>
                  </a>
                </li>
								<!-- <li class="menu-item">
                  <a href="CRAdmins-account-settings-notifications.html" class="menu-link">
                    <div >Listing Teknisi yang belum dapat SPK</div>
                  </a>
                </li> -->
								<!-- <li class="menu-item">
                  <a href="CRAdmins-account-settings-notifications.html" class="menu-link">
                    <div >Listing Teknisi yang dapat SPK per range Tanggal</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="CRAdmins-account-settings-notifications.html" class="menu-link">
                    <div >Jumlah SPK per Teknisi</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="CRAdmins-account-settings-notifications.html" class="menu-link">
                    <div >Listing SPK per teknisi per Range Tanggal SPK</div>
                  </a>
                </li> -->
								
								
								<!-- <li class="menu-item">
                  <a href="CRAdmins-account-settings-notifications.html" class="menu-link">
                    <div >Laporan Perbaikan Infrastruktur</div>
                  </a>
                </li>
								<li class="menu-item">
                  <a href="CRAdmins-account-settings-notifications.html" class="menu-link">
                    <div >Jumlah Complain Divisi per Bulan</div>
                  </a>
                </li> -->
								
								
								<!-- <li class="menu-item">
                  <a href="CRAdmins-account-settings-notifications.html" class="menu-link">
                    <div >Laporan KPI Infrastruktur</div>
                  </a>
                </li> -->
								

              </ul>
            </li>
            
          </ul>
        </aside>
        <!-- / Menu -->
				<div>
				<?php
				$this->load->view('alert');
				?>
					</div>

       
      
