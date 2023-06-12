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
								<h2 class="card-title text-primary"> Laporan History Complain</h2>
								
							
												
								<br><br>
								<div style="margin: 4px, 4px;
        padding: 4px;
        
        width: 100%;
        overflow-x: auto;
        overflow-y: hidden;
        white-space: nowrap;">
								<table id="LHComplain" class="table table-striped">
									<thead>
										<tr>

											<th scope="col">Aksi</th>
											<th scope="col">NOMOR COMPLAIN</th>
											<th scope="col">Tanggal Lapor</th>
											<th scope="col">Jam</th>
											<th scope="col">Pelapor</th>
											<th scope="col">Div</th>
											<th scope="col">No. Spk</th>
											<th scope="col">Kode Unit</th>
											
											<th scope="col">Uraian Problem</th>
											<th scope="col">Tgl.Selesai</th>
											<th scope="col">Jam Selesai</th>
											<th scope="col">Tgl Sah</th>
											<th scope="col">Jam Sah</th>
											<th scope="col">Status</th>
										</tr>
									</thead>
									<tbody>
										<?php 
								if (isset($data)) {
									# code...
									foreach($data->result() as $row):
										?>
									<tr>
										<td>
											<a href="<?= base_url('CRTeknisi/DetailComplain?nocomp='.$row->NO_COMPLAIN) ?>"><button class="btn btn-primary">Pilih</button></a>
										</td>
										<td scope="col"><?php echo $row->NO_COMPLAIN; ?></td>
										<td scope="col"><?php echo $row->TGL; ?></td>
										<td scope="col"><?php echo $row->JAM; ?></td>
										<td scope="col"><?php echo $row->KODEDIV; ?></td>
										<td scope="col"><?php echo $row->KODEDIV; ?></td>
										<td scope="col"><?php echo $row->NO_SPK; ?></td>
										<td scope="col"><?php echo $row->KODE_UNIT; ?></td>
										<td scope="col"><?php echo $row->URAIAN; ?></td>
										<td scope="col"><?php echo $row->TGL_SELESAI; ?></td>
										<td scope="col"><?php echo $row->JAM_SELESAI; ?></td>
										<td scope="col"><?php echo $row->TGL_SAH; ?></td>
										<td scope="col"><?php echo $row->JAM_SAH; ?></td>
										<td scope="col"><?php echo $row->STATUS; ?></td>
						
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
	</div>
		
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
				



		