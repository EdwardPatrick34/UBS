
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
						<h4 class="fw-bold py-3 mb-4"> Surat Perintah Kerja EDP - Infrastruktur</h4>
							<div class="col-sm-4 input-group input-group-merge">
													
								<button class="btn btn-primary">Cari</button>
								&nbsp;
								&nbsp;
								<button class="btn btn-primary">Listing</button>

							
							</div>
							<br>

							<div class="row">

								<div class="col-xxl">
													<div class="card mb-4">
													<div class="d-flex align-items-end row">
														<div >
									
															<div class="card-body" >
																<!-- form1 -->
										<div class="col-xxl">
													
														<div class="d-flex align-items-end row">
															<div>
																
																
																
										<form action="" method="post">

										<div class="row">
											<div class="col-xl">
												
													
													
														
														<div class="mb-3 row">
															<label for="inputPassword" class=" col-form-label">no complain</label>
															<div class="col-sm-4 input-group input-group-merge">
																<div>
																	<select class="form-select" name="" id="no_complain" onchange="caricomplain()">
																		<?php foreach($datacomplain->result() as $row) :?>
																			<option value="<?php echo $row->NO_COMPLAIN ;?>"><?php echo $row->NO_COMPLAIN?></option>
																		<?php endforeach;?>
																	</select>
																</div>
															</div>
														</div>
														<div class="mb-3 row">
															<label for="inputPassword" class=" col-form-label">Tgl dan jam lapor</label>
															<div class="col-sm-4 input-group input-group-merge">
															<input type="datetime-local" class="form-control" name="tgljam" id="tgljamlapor">
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
											<div class="col-xl">
												
													
													
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
					
													
										</form>
										<br>

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
										<tbody id="hasilspk">
											<tr>
											<th scope="row">1</th>
											<td>Unit 1</td>
											<td>Unit gajah</td>
											<td>jojo</td>
											<td>rusak bro</td>
											<td>asd</td>
											</tr>
										</tbody>
										</table>
				
										</div>
									
									
									</div>
													
										</div>
											

											<!-- end form 1 -->
										
										
															</div>
														</div>
														
														
															</div>
														</div>
								</div>
								

								
								<div class="col-xxl">
													<div class="card mb-4">
													<div class="d-flex align-items-end row">
														<div >
									
															<div class="card-body" >
																<!-- form2 -->
										<div class="col-xxl">
													
														<div class="d-flex align-items-end row">
															<div>
																
																
																
										<form action="" method="post">

											<div class="row">
												<div class="col-xl">
					
													<div class="mb-3 row">
														<label for="divisi" class=" col-form-label">Petugas / Teknisi</label>
														<div class="col-sm-8 input-group input-group-merge">
														<div>
															<select class="form-select" name="petugas" id="petugas">
																<?php foreach($datapetugas->result() as $row) :?>
																	<option value="<?php echo $row->PETUGAS; ?>"><?php echo $row->PETUGAS." - ".$row->NAMA_PETUGAS;?></option>
																<?php endforeach;?>
															</select>
														</div>	
														</div>
													</div>
													<button type="button" class="btn btn-primary" onclick="tambahpetugas()">Tambah</button>

												</div>

											</div>
										</form>
										<br>

										<table class="table table-striped">
										<thead>
											<tr>
											<th scope="col">Urut</th>
											<th scope="col">Petugas</th>
											<th scope="col">Nama Petugas/Teknisi</th>
											<th scope="col">Aksi</th>
											</tr>
										</thead>
										<tbody id="hasilpetugas">
											
											
										</tbody>
										</table>
				
															</div>
														
														
														</div>
													
										</div>
											

											<!-- end form 2 -->
										
										
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
													
													<!-- form 3 -->
											

													<form action="" method="post">

														<div class="row">
															<div class="col-xl">
					
																<div class="mb-3 row">
																	<label for="divisi" class=" col-form-label">Jenis SPK</label>
																	<div class="col-sm-8 input-group input-group-merge">	
																		<div>
																			<select class="form-select" name="jenisspk" id="jenisspk">
																				<?php foreach($datajenisspk->result() as $row) :?>
																					<option value="<?php echo $row->JENIS_SPK; ?>"><?php echo $row->JENIS_SPK." - ".$row->NAMA_SPK;?></option>
																				<?php endforeach;?>
																			</select>
																		</div>	
																	</div>
																	
																</div>
																<div class="mb-3 row">
																	<label for="uraian" class=" col-form-label">Keterangan</label>
																	<div class="col-sm-4 input-group input-group-merge">
																	<textarea class="form-control" id="keterangan"></textarea>
																	</div>
																</div>

															</div>

														</div>
													</form>

													<button type="button" class="btn btn-primary" onclick="tambahspk()">Tambah</button>

												<!-- end form 3 -->
												<br>
												<br>
												<table class="table table-striped">
										<thead>
											<tr>
											<th scope="col">Urut</th>
											<th scope="col">Jenis SPK</th>
											<th scope="col">Nama SPK</th>
											<th scope="col">Durasi (Menit)</th>
											<th scope="col">Realisasi</th>
											<th scope="col">Keterangan</th>

											<th scope="col">Aksi</th>

											
											</tr>
										</thead>
										<tbody id="hasiljenisspk">
											
											
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
	<script src='http://code.jquery.com/jquery.js'></script>
	<script language='javascript'>
		var myurl = "<?php echo site_url();?>";

		function tambahpetugas(){
			var petugas = $("#petugas").val();

			$.post(myurl + "/Cspk/insertTablePetugas",
				{petugas: petugas}, function(result) {
				alert(result); 
				showpetugas();
			}
			);
		}

		function showpetugas(){
			$.post(myurl + "/Cspk/selectTablePetugas",
			{}, function(result){
				// alert(result);
				var data = JSON.parse(result); 
				// alert(data.length);

				var kal = "";
				var cnt = 0;
				for(var i = 0; i<data.length; i++){
					cnt++;
					kal = kal + "<tr>"; 
						kal = kal + "<td>" + cnt + "</td>"; 
						kal = kal + "<td>" + data[i][0]['PETUGAS'] + "</td>"; 
						kal = kal + "<td>" + data[i][0]['NAMA_PETUGAS'] + "</td>"; 
						kal = kal + "<td><input type='button' value='Delete' onclick= deletepetugas('"+i+"') class='btn btn-danger' ></td>"; 
					kal = kal + "</tr>"; 
				}
				$("#hasilpetugas").html(kal);
			}
			);
		}
		
		function tambahspk(){
			var spk = $("#jenisspk").val();
			var keterangan = $("#keterangan").val();

			$.post(myurl + "/Cspk/insertTableSpk",
				{spk: spk, keterangan: keterangan}, function(result) {
				alert(result); 
				showspk();
			}
			);
		}

		function showspk(){
			$.post(myurl + "/Cspk/selectTableSpk",
			{}, function(result){
				// alert(result);
				var data = JSON.parse(result); 
				// alert(data.length);

				var kal = "";
				var cnt = 0;
				var realisasi = 0;
				for(var i = 0; i<data.length; i++){
					cnt++;
					kal = kal + "<tr>"; 
						kal = kal + "<td>" + cnt + "</td>"; 
						kal = kal + "<td>" + data[i][0]['JENIS_SPK'] + "</td>"; 
						kal = kal + "<td>" + data[i][0]['NAMA_SPK'] + "</td>"; 
						kal = kal + "<td>" + data[i][0]['MENIT'] + "</td>";
						kal = kal + "<td>" + realisasi + "</td>";
						kal = kal + "<td>" + data[i][1] + "</td>";
						kal = kal + "<td><input type='button' value='Delete' onclick= deletespk('"+i+"') class='btn btn-danger' ></td>"; 
					kal = kal + "</tr>"; 
				}
				$("#hasiljenisspk").html(kal);
			}
			);
		}

		function caricomplain(){
			var no_complain = $("#no_complain").val();
			
			$.post(myurl + "/Cspk/cariComplain",
				{no_complain: no_complain}, function(result) {
				alert(result); 
				
			}
			);
		}
	</script>
	