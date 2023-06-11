

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
			<h4 class="fw-bold py-3 mb-4"> Monitoring Complain Divisi</h4>

			<div class="row">
				<div class="col-xxl">
					<div class="card mb-4">
						<div class="d-flex align-items-end row">
							<div >
								<div class="card-header d-flex align-items-center justify-content-between">
									
									</div>
              
									<div class="card-body" >
										
										<form action="<?= base_url("CRAdmin/FilterMonitoringComplain") ?>" method="post">
										<div class="d-flex align-items-center">
											<h5 class="mb-0" style="margin-top: 1px;">Pilihan</h5>
											&nbsp;
											&nbsp;
											&nbsp;
                      
											<div style="width: 150px;">
												<select name="statusc" id="statusc" class="form-select">
												<option value="1">Complain</option>
												<option value="2">Spk</option>
												</select>
											</div>
								
											&nbsp;
											&nbsp;
											&nbsp;
											<button type="submit" class="btn btn-primary">Pilih</button>
										</div>
									</form>
									<br><br>
									<?php $status = $stat;
										
									
									?>
									
									<h5 class="mb-0" style="margin-top: 1px;">Status <?php echo "$status"; ?></h5>

									<table id="Tcomplain2" class="table  border-dark table-hover">
										<br>
										<thead>
											<tr>
												
												<th scope="col">NO COMPLAIN</th>
												<th scope="col">DIV</th>
												<th scope="col">PELAPOR</th>
												<th scope="col">TGL</th>
												<th scope="col">JAM</th>
												<th scope="col">UNIT</th>
												<th scope="col">NOMOR SPK</th>
												<th scope="col">NAMA PETUGAS</th>
                                                <th scope="col">Aksi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach($data->result() as $row): ?>
												<tr>
												
													<td scope="col" ><?= $row->NO_COMPLAIN  ?> </td>
													<td scope="col" ><?= $row->KODEDIV  ?> </td>
													<td scope="col" ><?= $row->PELAPOR  ?> </td>
													<td scope="col" ><?= $row->TANGGAL  ?> </td>
													<td scope="col" ><?= $row->JAM  ?> </td>
													<td scope="col" ><?= $row->UNIT  ?> </td>
													<td scope="col" ><?= $row->NO_SPK  ?> </td>
													<td scope="col" ><?= $row->NAMA_PETUGAS  ?> </td>
													<td scope="col">
                                                        <a href="<?php echo base_url('')?>">
                                                            <button class="btn btn-danger">Batal</button>
                                                        </a>
                                                    </td>
													
									
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
	var tabel2 = null;
	$(document).ready(function(){
		tabel = $("#Tcomplain1").DataTable({

		});
		
		tabel2 = $("#Tcomplain2").DataTable({
            
		});

	});
	</script>



      