
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
              <!-- <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div> -->
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
                          <h2 class="card-title text-primary"> Surat Perintah Kerja EDP - Infrastrktur</h2>
						  
						  <form action="" method="post">

							<!-- start form 1 -->
						  <!-- <div class="row">
									<div class="col-xl">
									
									
										<div class="card-body">
										
											
											<div class="mb-3 row">
												<label for="inputPassword" class=" col-form-label">no complain</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="password" class="form-control" id="inputPassword">
												</div>
											</div>
											<div class="mb-3 row">
												<label for="inputPassword" class=" col-form-label">Tgl dan dam lapor</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="password" class="form-control" id="inputPassword">
												</div>
											</div>
											<div class="mb-3 row">
												<label for="inputPassword" class=" col-form-label">Divisi dan nama pelapor</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="password" class="form-control" id="inputPassword">
												</div>
											</div>
											<div class="mb-3 row">
												<label for="inputPassword" class=" col-form-label">Kode Unit</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="password" class="form-control" id="inputPassword">
												</div>
											</div>
											<div class="mb-3 row">
												<label for="inputPassword" class=" col-form-label">Lokasi Unit</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="password" class="form-control" id="inputPassword">
												</div>
											</div>
											
											<div class="mb-3">
											<label class="form-label" for="basic-default-email">Email</label>
											<div class="input-group input-group-merge">
												<input
												type="text"
												id="basic-default-email"
												class="form-control"
												
												/>
												
											</div>
											
											</div>
											<div class="mb-3">
											<label class="form-label" for="basic-default-phone">Phone No</label>
											<input
												type="text"
												id="basic-default-phone"
												class="form-control"
												placeholder="658 799 8941"
											/>
											</div>
											<div class="mb-3">
											<label class="form-label" for="basic-default-message">Message</label>
											<textarea
												id="basic-default-message"
												class="form-control"
												placeholder="Hi, Do you have a moment to talk Joe?"
											></textarea>
											</div>
											<button type="submit" class="btn btn-dark">Send</button>
										
										</div>
									
									</div>
									
								</div>
								</div> -->
								<!-- end form 1-->

								<!-- start form 2 -->
								<div class="row">
                <div class="col-xl">
                  
                    
                    <div class="card-body">
                      
											<div class="mb-3 row">
												<label for="inputPassword" class=" col-form-label">no complain</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="password" class="form-control" id="inputPassword">
												</div>
											</div>
											<div class="mb-3 row">
												<label for="inputPassword" class=" col-form-label">Tgl dan dam lapor</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="password" class="form-control" id="inputPassword">
												</div>
											</div>
											<div class="mb-3 row">
												<label for="inputPassword" class=" col-form-label">Divisi dan nama pelapor</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="password" class="form-control" id="inputPassword">
												</div>
											</div>
											<div class="mb-3 row">
												<label for="inputPassword" class=" col-form-label">Kode Unit</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="password" class="form-control" id="inputPassword">
												</div>
											</div>
											<div class="mb-3 row">
												<label for="inputPassword" class=" col-form-label">Lokasi Unit</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="password" class="form-control" id="inputPassword">
												</div>
											</div>
											<div class="mb-3 row">
												<label for="uraian" class=" col-form-label">Uraian Problem/kerusakan</label>
												<div class="col-sm-4 input-group input-group-merge">
												<textarea class="form-control" id="uraian"></textarea>
												</div>
											</div>
                        
                      
                    </div>
                  
                </div>
                <div class="col-xl">
                  
                    
                    <div class="card-body">
											<div class="mb-3 row">
												<label for="inputPassword" class=" col-form-label">no spk</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="password" class="form-control" id="inputPassword">
												</div>
											</div>
											<div class="mb-3 row">
												<label for="inputPassword" class=" col-form-label">tgl spk</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="password" class="form-control" id="inputPassword">
												</div>
											</div>
											<div class="mb-3 row">
												<label for="uraian" class=" col-form-label">Pekerjaan</label>
												<div class="col-sm-4 input-group input-group-merge">
												<textarea class="form-control" id="uraian"></textarea>
												</div>
											</div>
                    </div>

                  
                </div>
              </div>
            </div>

								<!-- end form 2 -->

						  </form>
                          	
                        </div>
                      </div>
                      
											
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
      