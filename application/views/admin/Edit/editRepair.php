
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

		<ul class="navbar-nav flex-row align-items-center ms-auto">
			
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
								<h2 class="card-title text-primary"> Edit Repair</h2>
              
								<br><br>
								<form action="" method="post">
						  
									<div class="mb-3">
									<label class="form-label" for="jenis_spk">Jenis SPK</label>
									<input type="text" class="form-control" id="jenis_spk" placeholder="......." />
									</div>
							
									<div class="mb-3">
									<label class="form-label" for="nama_spk">Nama SPK</label>
									<input type="text" class="form-control" id="nama_spk" placeholder="......." />
									</div>

									<div class="mb-3">
									<label class="form-label" for="menit">Menit</label>
									<input type="text" class="form-control" id="menit" placeholder="......." />
									</div>

									<div class="mb-3">
									<label class="form-label" for="usere">USERE</label>
									<input type="text" class="form-control" id="usere" placeholder="......." />
									</div>

									<button type="submit" class="btn btn-primary">Simpan</button>
								</form>
							</div>
							
						</div>
                          	
					</div>
				</div>
			</div>
            
                
		</div>
                
              
		<div class="content-backdrop fade"></div>
	</div>
	<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>
    

