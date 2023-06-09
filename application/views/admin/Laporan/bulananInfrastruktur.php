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
								<h2 class="card-title text-primary"> Laporan Bulanan Infrastruktur per Range Tanggal SPK</h2>
								<br>
								<form action="<?php echo base_url('CRAdmin/SearchLBI'); ?>" method="post">
									<div class="mb-12 row">
										<div class="col-sm-4 input-group input-group-merge">
											
											<label for="divisi" class=" col-form-label">Tanggal Awal</label>
											&nbsp;
											&nbsp;
											&nbsp;
											<div style="width: 200px;">
												<input type="date"  id="tglawal" name="tglawal"  class="form-control" value='' >
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
											
											
											
											
										</div>

									</div>

											<br>
											<?php  if(isset($tglawal)): ?>
											<a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?php echo base_url('CExportExcel/LaporanUraianComplainDivisi?tglawal='.$tglawal ."&tglakir=" . $tglakir ."&divisi=".$divisi); ?>">
											
											<i class="fa fa-file-excel-o"></i> 
											Export to Excel
											</a>

											<?php else: ?>
												<a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="">
											
											<i class="fa fa-file-excel-o"></i> 
											Export to Excel
											</a>
												
											<?php endif; ?>
								</form>
								<br>
							
												
								<br><br>
								<div style="margin: 4px, 4px;
        padding: 4px;
        
        width: 100%;
        overflow-x: auto;
        overflow-y: hidden;
        white-space: nowrap;">
								<table id="UCDivisi" class="table table-striped">
									<thead>
										<tr>

											<th scope="col">No</th>
											<th scope="col">Nama Teknisi</th>
											<th scope="col">NO Induk</th>
											<th scope="col">No Complain</th>
											
											<th scope="col">KODEDIV</th>
											<th scope="col">Kode Unit</th>
											
											<th scope="col">Uraian</th>
											<th scope="col">Tgl.Complain</th>
											<th scope="col">No SPk</th>
											<th scope="col">Tgl Selesai</th>
											<th scope="col">Tgl Sah</th>
											<th scope="col">Realisasi</th>
											
										</tr>
									</thead>
									<tbody>
										<?php 
								if (isset($data)) {
									# code...
									$no = 1;
									foreach($data->result() as $row):
										
										?>
									<tr>
										
										<td scope="col"><?php echo $no; ?></td>
										<td scope="col"><?php echo $row->NO_SPK; ?></td>
										<td scope="col"><?php echo $row->NO_COMPLAIN; ?></td>
										<td scope="col"><?php echo $row->USERE; ?></td>
										<td scope="col"><?php echo $row->KODEDIV; ?></td>
										<td scope="col"><?php echo $row->KODE_UNIT; ?></td>
										<td scope="col"><?php echo $row->URAIAN; ?></td>
										<td scope="col"><?php echo $row->TGL; ?>  <?php echo $row->JAM; ?></td>
										<td scope="col"><?php echo $row->STATUS; ?></td>
										<td scope="col"><?php echo $row->NAMA_STATUS; ?></td>
										<td scope="col"><?php echo $row->TGL; ?></td>
										
						
									</tr>

									<?php $no++; endforeach; } ?>

								
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
		tabel = $("#UCDivisi").DataTable({

		});
	});
	</script>
					
					<script>
						function printPage() {

							// Mencetak halaman
							window.print(); 	
						}

						</script>
				



		