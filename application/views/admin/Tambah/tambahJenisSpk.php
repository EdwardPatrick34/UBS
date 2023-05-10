

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
					<a class="dropdown-item" href="<?= base_url('login') ?>">
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
                          <h2 class="card-title text-primary"> Tambah Jenis Spk</h2>
                          <br>
                          <?php if($this->session->userdata ('errormsg')): ?>
                              <div style="background-color: lightslategray; padding: 4px; color: white; height: 50px">
                                <?php echo $this->session->flashdata('errormsg');?>
                              </div>
                          <?php endif ?>
						  
						  <br><br>
						  <form action="<?php site_url('CJenisSpk/insertjenisspk');?>" method="post">
							
							<div class="mb-3">
							<label class="form-label" for="jenis_spk">Jenis SPK</label>
							<input type="text" class="form-control" id="jenis_spk" name="jenis_spk" placeholder="......." />
							</div>

							<div class="mb-3">
							<label class="form-label" for="nama_spk">Nama SPK</label>
							<input type="text" class="form-control" id="nama_spk" name="nama_spk" placeholder="......." />
							</div>

							<div class="mb-3">
							<label class="form-label" for="menit">Menit</label>
							<input type="text" class="form-control" id="menit" name="menit" placeholder="......." />
							</div>

							<div class="mb-3">
							<label class="form-label" for="usere">USERE</label>
							<input type="text" class="form-control" id="usere" name="usere" placeholder="......." />
							</div>
							
							
							
							
							
							<button type="submit" name="btntambahjenisspk" class="btn btn-primary">Tambah</button>
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
      