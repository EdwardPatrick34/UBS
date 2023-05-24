      <!-- Data Table -->
      <script src="<?= base_url("assets/js/jquery-1.12.0.min.js") ?>" language="javascript"></script>
      <link href='http://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css' type='text/css' rel='stylesheet'>
      <script src='http://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js' language='javascript'></script>
        
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
                          <h2 class="card-title text-primary"> Laporan History Complain</h2>
                          <br>
													<form action="<?php echo base_url('CRAdmin/SearchLHistoryComplain'); ?>" method="post">
						  	<div class="mb-12 row">
								  <div class="col-sm-4 input-group input-group-merge">
										
											<label for="divisi" class=" col-form-label">Tanggal Awal</label>
											&nbsp;
											&nbsp;
											&nbsp;
											<div style="width: 200px;">
												<input type="date"  id="tglawal" name="tglawal"  class="form-control">
											</div>
											&nbsp;
											&nbsp;
											&nbsp;
											&nbsp;
											<label for="divisi" class=" col-form-label">Tanggal Akhir</label>
											&nbsp;
											&nbsp;
											&nbsp;
											<div style="width: 200px;">
												<input type="date"  id="tglakhir" name="tglakhir"  class="form-control">
											</div>
												&nbsp;
												&nbsp;
												&nbsp;
											<button type="submit" class="btn btn-primary">Search</button>
											&nbsp;
											&nbsp;
											&nbsp;
											<button type="button" class="btn btn-primary" onclick="printPage()">Cetak</button>
										

								</div>
								
							</div>
							</form>
							<br>
                          
						  
						  <br><br>
              				<table id="LHComplain" class="table table-striped">
								<thead>
									<tr>
										<th scope="col">NOMOR COMPLAIN</th>
										<th scope="col">Tanggal</th>
										<th scope="col">Status</th>
										<th scope="col">Uraian</th>
									</tr>
								</thead>
								<tbody>
                  <?php 
									if (isset($dataHComplain)) {
										# code...
										foreach($dataHComplain->result() as $row):
									  ?>
										<tr>
											<td scope="col"><?php echo $row->NO_COMPLAIN; ?></td>
											<td scope="col"><?php echo $row->TGL; ?></td>
											<td scope="col"><?php echo $row->NAMA_STATUS; ?></td>
											<td scope="col"><?php echo $row->URAIAN; ?></td>

										</tr>

									<?php endforeach; } ?>
									
                    
                  
								</tbody>
							</table>
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

      <script language='javascript'>
        var tabel = null;
        $(document).ready(function(){
          tabel = $("#LHComplain").DataTable({
            
          });
        });
      </script>

			<script>
				function printPage() {

					// Mencetak halaman
					window.print(); 	
				}
					
			</script>



      