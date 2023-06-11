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
			<h4 class="fw-bold py-3 mb-4"> Surat Perintah Kerja EDP - Infrastruktur</h4>
			<div class="col-sm-4 input-group input-group-merge">
						
				<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalcari">Cari</button>
				&nbsp;
				&nbsp;
			<form action="<?php echo site_url("/Cspk/insertSpk");?>" method="post">	
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
												

													<div class="row">
														<div class="col-xl">

															<div class="mb-3 row">
																<label for="inputPassword" class=" col-form-label">no complain</label>
																<div class="col-sm-4 input-group input-group-merge">
																	<div>
																		
																		<div>
																		<input type="text" class="form-control" name="no_complain" id="no_complain" value="<?= $nocomp ?>" onchange="caricomplain()" readonly>
																		</div>
																	</div>
																</div>
															</div>

															
															<div class="mb-3 row">
																<label for="inputPassword" class=" col-form-label">Tgl dan jam lapor</label>
																<div class="col-sm-4 input-group input-group-merge">
																	<input type="datetime-local" class="form-control" name="tgljamlapor" id="tgljamlapor" readonly>
																</div>
															</div>
															<div class="mb-3 row">
																<label for="inputPassword" class=" col-form-label">Divisi dan nama pelapor</label>
																<div class="col-sm-4 input-group input-group-merge">
																	<input type="text" class="form-control" id="divisi" name="divisi" readonly>
																</div>
															</div>
															
															<div class="mb-3 row">
																<label for="inputPassword" class=" col-form-label">Kode Unit</label>
																<div class="col-sm-4 input-group input-group-merge">
																<input type="text" class="form-control" id="inputPassword">
																</div>
															</div>
															
															<div class="mb-3 row">
																<label for="inputPassword" class=" col-form-label">Lokasi Unit</label>
																<div class="col-sm-4 input-group input-group-merge">
																<input type="text" class="form-control" id="inputPassword">
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
														
															
															</div>
													
															<div class="col-xl">
										
													
																<div class="mb-3 row">
																	<label for="inputPassword" class=" col-form-label">no spk</label>
																	<div class="col-sm-4 input-group input-group-merge">
																	<input type="text" class="form-control" id="nospk" name="no_spk" readonly>
																	</div>
																</div>
																<div class="mb-3 row">
																	<label for="inputPassword" class=" col-form-label">tgl spk</label>
																	<div class="col-sm-4 input-group input-group-merge">
																	<input type="datetime-local" class="form-control" id="tglspk" name="tglspk" readonly>
																	</div>
																</div>
																<div class="mb-3 row">
																	<label for="uraian" class=" col-form-label">Pekerjaan</label>
																	<div class="col-sm-4 input-group input-group-merge">
																	<textarea class="form-control" id="pekerjaan" name="pekerjaan" readonly></textarea>
																	</div>
																</div>
													
											
																

															</div>
														</div>
													</form>
													<br>
												
										
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

			<!-- start modal cari  -->
			<form action="<?= base_url("/Cspk/cariSPK") ?>" method="post">
				<div class="modal fade" id="modalcari" tabindex="-1" aria-labelledby="modalcari" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="labelcari">Cari SPK</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								
									<label for="cariNoSPK" class="col-form-label">Nomor SPK</label>
									<input type="text" name="cariNoSPK" id="cariNoSPK" class="form-control">
								
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
		



	<script src='http://code.jquery.com/jquery.js'></script>
	<script language='javascript'>
		var myurl = "<?php echo site_url();?>";

		var today = new Date();
		var date = today.getFullYear() + '-' + (today.getMonth() + 1).toString().padStart(2, '0') + '-' + today.getDate().toString().padStart(2, '0');
		var time = today.getHours().toString().padStart(2, '0') + ':' + today.getMinutes().toString().padStart(2, '0') + ':' + today.getSeconds().toString().padStart(2, '0');
		var todayDateTime = date + ' ' + time;

		// var t = "2020-10-10 10:11:24";
		
		// alert(todayDateTime);
		function tambahpetugas(){
			var petugas = $("#petugas").val();

			$.post(myurl + "/Cspk/insertTablePetugas",
				{petugas: petugas}, function(result) {
				
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

		function deletepetugas(id){
			$.post(myurl + "/Cspk/deletepetugas",{id: id}, function(result){
				showpetugas();
			});
		}

		function deletespk(id){
			// alert(id);
			$.post(myurl + "/Cspk/deletespk",{id: id}, function(result){
				showspk();
			});
		}
		
		function tambahspk(){
			var spk = $("#jenisspk").val();
			var keterangan = $("#keterangan").val();

			$.post(myurl + "/Cspk/insertTableSpk",
				{spk: spk, keterangan: keterangan}, function(result) {
				// alert(result); 
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
				// alert(result); 
				// alert(todayDateTime)
				var data = JSON.parse(result);
				for(var i = 0; i < data.length; i++){
					// alert(data[i][0]['KODE_UNIT']);
					$("#tgljamlapor").val(data[i][0]['TGL']);
					$("#uraian").val(data[i][1]['KET']);
					$("#divisi").val(data[i][0]['KODEDIV']+"-"+data[i][0]["USERE"]);
					$("#kodeunit").val(data[i][0]['KODE_UNIT']);
					// $("#pekerjaan").val(data[i][2]['NAMA_SPK']);
				}
				$("#tglspk").val(todayDateTime); 
			}
			);
		}

		caricomplain();
		showspk();
		showpetugas();
	</script>
	