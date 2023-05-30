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
								<h2 class="card-title text-primary"> Master Status</h2>
								<br>
								<?php if($this->session->userdata('msg')): ?>
									<div style="background-color: lightslategray; padding: 4px; color: white; height : 50px">
										<?php echo $this->session->flashdata('msg');?>
									</div>
								<?php endif ?>
									<a href="<?= base_url('CRAdmin/tambahStatus') ?>"><button class="btn btn-primary">Tambah Status</button></a>
									<br><br>
									<table id="Tstatus" class="table table-striped">
										<thead>
											<tr>
												
												<th scope="col">Status</th>
												<th scope="col">Nama Status</th>
												<th scope="col">USERE</th>
												<th scope="col" style="text-align: center;">Aksi</th>		
											</tr>
										</thead>
										<tbody>
											<?php foreach($datastatus->result() as $row): ?>
												<tr>

													<th scope="col"><?php echo $row->STATUS; ?></th>
													<th scope="col"><?php echo $row->NAMA_STATUS; ?></th>
													<th scope="col"><?php echo $row->USERE; ?></th>
													<th>
														<a href="<?php echo site_url('Cstatus/deleteStatus/'.$row->STATUS) ;?>">
															<button class="btn btn-danger">Delete</button>
														</a>
														<a href="<?php echo base_url('Cstatus/getstatusbyid/'.$row->STATUS);?>">
															<button class="btn btn-info">Edit</button>
														</a>
													</th>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
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


<script language='javascript'>
	var tabel = null;
	$(document).ready(function(){
		tabel = $("#Tstatus").DataTable({

		});
	});
	</script>
            
      