
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
			<!-- Place this tag where you want the button to render. -->
			<li class="nav-item lh-1 me-3">
				
				</li>
				<!-- User -->
				<li class="nav-item navbar-dropdown dropdown-user dropdown">
					<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
						<div class="avatar avatar-online">
							<img src="<?= base_url("assets/img/avatars/blank.png") ?>" alt class="w-px-40 h-auto rounded-circle" />
						</div>
					</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li>
							<a class="dropdown-item" href="#">
								<div class="d-flex">
									<div class="flex-shrink-0 me-3">
										<div class="avatar avatar-online">
											<img src="<?= base_url("assets/img/avatars/blank.png") ?>" alt class="w-px-40 h-auto rounded-circle" />
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
				<h4 class="fw-bold py-3 mb-4"> Complain Problem Komputer</h4>
				<div class="col-sm-4 input-group input-group-merge">
					<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalcari">Cari</button>
					&nbsp;
					&nbsp;
					
					<a href="<?= base_url("Ccompkomputer/CreateComplain") ?>">
						<button class="btn btn-primary">Input</button>
					</a>
						
				</div>
				<br>
				<div class="row">
					<div class="col-xxl">
						<div class="card mb-4">
							<div class="d-flex align-items-end row">
								<div>
									<!-- start form 1 -->
									<!-- start untuk inisiasi data yang diambil -->
									<?php $data = $dataheader->row();  ?>
									<!-- end untuk inisiasi data yang diambil -->
									<div class="row">
										<div class="col-xl">
											<div class="card-body">
												<div class="mb-12 row">
													<label for="no_complain" class=" col-form-label">no complain</label>
													<div class="col-sm-4 input-group input-group-merge">
														<input type="text" class="form-control" name="no_complain" id="no_complain" readonly='readonly' value="<?= $data->NO_COMPLAIN ?>">
													</div>
												</div>
												<br>
												<div class="mb-12 row">
													<label for="divisi" class=" col-form-label">Tanggal Dan Jam Lapor</label>
													<div class="col-sm-4 input-group input-group-merge">
														<div style="width: 150px;">
															<input type="text"  id="tgl" name="tgl"  class="form-control" value="<?= $data->TANGGAL ?>">
														</div>
														&nbsp;
														&nbsp;
														<div style="width: 100px;">
															<input type="text"  id="jam" name="jam"  class="form-control" value="<?= $data->JAM ?>">
														</div>
													</div>
												</div>
												<br>
												<div class="mb-12 row">
													<label for="nama_pelapor" class=" col-form-label">Nama pelapor</label>
													<div class="col-sm-4 input-group input-group-merge">
													<input type="text" class="form-control" name="nama_uc" id="nama_pelapor" value="<?= $data->PELAPOR ?>">
													</div>
												</div>																						
												<br>
												<div class="mb-12 row">
													<label for="divisi" class=" col-form-label">Divisi</label>
													<div class="col-sm-4 input-group input-group-merge">
														<div style="width: 100px;">
															<input type="text"  id="kodedivisi" name="kode_divisi"  class="form-control" value="<?= $data->DIVISI ?>">
														</div>
														&nbsp;
														&nbsp;
													</div>
												</div>
												<br>
												<div class="mb-12 row">
													<label for="kode_unit" class=" col-form-label">Kode Unit</label>
													<div class="col-sm-4 input-group input-group-merge">
													<input type="text" class="form-control" name="kode_unit" id="kode_unit" value="<?= $data->KODE_UNIT ?>">
													</div>
												</div>
												<br>
												<div class="mb-12 row">
													<label for="uraian" class=" col-form-label">Uraian Problem/kerusakan</label>
													<div class="col-sm-4 input-group input-group-merge">
													<textarea class="form-control" name="uraian" id="uraian"><?= $data->URAIAN ?></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
								

								
		
								
									
								
								
														
												
												
		
					<div class="col-xxl">
						<div class="card mb-4">
							<div class="d-flex align-items-end row">
								<div>
									<div class="card-body">
										<div class="col-xxl">   	
											<div class="d-flex align-items-end row">
												<div>
													<table class="table table-striped">
														<thead>
															<tr>
															<th scope="col">Sub</th>
															<th scope="col">Jenis Unit</th>
															<th scope="col">Nama Jenis Unit</th>
															<th scope="col">Jenis Comp</th>
															<th scope="col">Nama Jenis Complain</th>
															<th scope="col">Keterangan</th>
															
															</tr>
														</thead>
														<tbody id="hasiljeniscomplain">
															<?php foreach ($datadetail1->result() as $row):?>
																	<tr>
																		<th scope="col"><?php echo $row->SUB; ?></th>
																		<th scope="col"><?php echo $row->JENIS_UNIT; ?></th>
																		<th scope="col"><?php echo $row->NAMA_JENIS_UNIT; ?></th>
																		<th scope="col"><?php echo $row->JENIS_COMPLAIN; ?></th>
																		<th scope="col"><?php echo $row->NAMA_COMPLAIN; ?></th>
																		<th scope="col"><?php echo $row->KETERANGAN; ?></th>
																		
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
					</div>
					
					<div class="col-xxl">
						<div class="card mb-4">
							<div class="d-flex align-items-end row">
								<div>
									<div class="card-body">
										<table class="table table-striped">
											<thead>
												<tr>
													<th scope="col">Urut</th>
													<th scope="col">Jenis SPK</th>
													<th scope="col">Nama SPK</th>
													<th scope="col">Durasi (Menit)</th>
													<th scope="col">Aksi</th>
												</tr>
											</thead>
											<tbody id="hasiljenisspk">
	
												<?php foreach ($datadetail2->result() as $row):?>
													<tr>
														<th scope="col"><?php echo $row->URUT; ?></th>
														<th scope="col"><?php echo $row->JENIS_SPK; ?></th>
														<th scope="col"><?php echo $row->NAMA_SPK; ?></th>
														<th scope="col"><?php echo $row->MENIT; ?></th>
														
														
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
		</div>
						
		<!-- start modal cari  -->
		<form action="<?= base_url("/Ccompkomputer/cariComplain") ?>" method="post">
		<div class="modal fade" id="modalcari" tabindex="-1" aria-labelledby="modalcari" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Cari Complain</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<label for="cariNoComplain" class="col-form-label">Nomor Complain</label>
						<input type="text" name="cariNoComplain" id="cariNoComplain" class="form-control">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Cari</button>
					</div>
				</div>
			</div>
		</div>
	</form>
		
	<!-- end modal cari  -->
											
	<div class="content-backdrop fade"></div>
	</div>
	<!-- Content wrapper -->
	</div>
	<!-- / Layout page -->
	</div>
	<!-- Overlay -->
	<script src='http://code.jquery.com/jquery.js'></script>
		
														


			
			




			




						
						
									

								
								
										
								
                      
											
															
															
														
		
                          
								

								
						  
						  
                      
											


					


		
		
		
		
	

	

