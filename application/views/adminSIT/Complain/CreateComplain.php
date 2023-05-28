
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
			<form action="<?php echo site_url("/Ccompkomputer/createTicket");?>" method="post">
				<div class="container-xxl flex-grow-1 container-p-y">
					<h4 class="fw-bold py-3 mb-4"> Complain Problem Komputer</h4>
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
								<div>
								<!-- start form 1 -->
								<div class="row">
									<div class="col-xl">
										<div class="card-body">
											<div class="mb-12 row">
												<label for="no_complain" class=" col-form-label">no complain</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="text" class="form-control" name="no_complain" id="no_complain" readonly='readonly'>
												</div>
											</div>
											<br>
											<div class="mb-12 row">
												<label for="tgljamlapor" class=" col-form-label">Tgl dan jam lapor</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="datetime-local" class="form-control" name="tgljam" id="tgljamlapor">
												</div>
											</div>
											<br>
											<div class="mb-12 row">
												<label for="nama_pelapor" class=" col-form-label">Nama pelapor</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="text" class="form-control" name="nama_uc" id="nama_pelapor">
												</div>
											</div>																						
											<br>
											<div class="mb-12 row">
												<label for="divisi" class=" col-form-label">Divisi</label>
												<div class="col-sm-4 input-group input-group-merge">
													<div style="width: 100px;">
														<input type="text"  id="kodedivisi" name="kode_divisi"  class="form-control">
													</div>
													&nbsp;
													&nbsp;
													<div>
														<input type="text"  id="nodivisi" name="no_divisi"  class="form-control">
													</div>

												</div>
											</div>
											<br>
											<div class="mb-12 row">
												<label for="kode_unit" class=" col-form-label">Kode Unit</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="text" class="form-control" name="kode_unit" id="kode_unit">
												</div>
											</div>
											<br>
											<div class="mb-12 row">
												<label for="lokasi_unit" class=" col-form-label">Lokasi unit</label>
												<div class="col-sm-4 input-group input-group-merge">
												<input type="text" class="form-control" name="lokasi_unit" id="lokasi_unit">
												</div>
											</div>
											<br>
											<div class="mb-12 row">
												<label for="uraian" class=" col-form-label">Uraian Problem/kerusakan</label>
												<div class="col-sm-4 input-group input-group-merge">
												<textarea class="form-control" name="uraian" id="uraian"></textarea>
												</div>
											</div>
										</div>
									</div>
									<!-- <div class="col-xl">
										<div class="card-body">
										</div>
									</div> -->
								</div>


							<!-- end form 1 -->

					</form>
						  
						  	
							
						  
                        	
                    </div>
                      <!-- <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div> -->
											
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
											<label for="divisi" class=" col-form-label">Jenis Unit</label>
											<div class="col-sm-8 input-group input-group-merge">
												<div>
													<select class="form-select" id="jenis_unit">
														<?php foreach($datajenisunit->result() as $row) :?>
															<option value="<?php echo $row->JENIS_UNIT; ?>"><?php echo $row->JENIS_UNIT." - ".$row->NAMA_JU;?></option>
														<?php endforeach;?>
													</select>
												</div>	
											</div>
										</div>

										<div class="mb-3 row">
											<label for="divisi" class=" col-form-label">Jenis Complain</label>
											<div class="col-sm-8 input-group input-group-merge">
												<div>
													<select class="form-select" id="jenis_complain">
														<?php foreach($datajeniscomplain->result() as $row) :?>
															<option value="<?php echo $row->JENIS_COMPLAIN;?>"><?php echo $row->JENIS_COMPLAIN." - ".$row->NAMA_COMPLAIN;?></option>
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

										<button type="button" class="btn btn-primary" onclick="tambahunit()">Tambah</button>

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
									<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody id="hasiljeniscomplain">
									
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
var myurl = "<?php echo site_url(); ?>";

function showdataunit() {
 $.post(myurl + "/Ccompkomputer/selectTableComplain",
  {}, function(result) {
//    alert(result); 
   var data = JSON.parse(result); 
//    alert(data.length); 

   var kal = ""; 
   var cntr = 0;
   for(var i = 0; i < data.length; i++) {
	cntr++;
	kal = kal + "<tr>"; 
		kal = kal + "<td>" + cntr + "</td>"; 
		kal = kal + "<td>" + data[i][0]['JENIS_UNIT'] + "</td>"; 
		kal = kal + "<td>" + data[i][0]['NAMA_JU'] + "</td>"; 
		kal = kal + "<td>" + data[i][1]['JENIS_COMPLAIN'] + "</td>"; 
		kal = kal + "<td>" + data[i][1]['NAMA_COMPLAIN'] + "</td>"; 
		kal = kal + "<td>" + data[i][2] + "</td>"; 
		kal = kal + "<td><input type='button' value='Delete' onclick= deleteunit('"+i+"') class='btn btn-danger' ></td>"; 
	kal = kal + "</tr>"; 
   }

   $("#hasiljeniscomplain").html(kal); 
  }
 );
 }

 function showdataspk(){
	$.post(myurl + "/Ccompkomputer/selectTableSpk",
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
				kal = kal + "<td>" + data[i][0]['JENIS_SPK'] + "</td>"; 
				kal = kal + "<td>" + data[i][0]['NAMA_SPK'] + "</td>"; 
				kal = kal + "<td>" + data[i][0]['MENIT'] + "</td>"; 
				kal = kal + "<td><input type='button' value='Delete' onclick= deletespk('"+i+"') class='btn btn-danger' ></td>"; 
			kal = kal + "</tr>"; 
		}
		$("#hasiljenisspk").html(kal);
	}
	);
 }

 function deleteunit(id){
	$.post(myurl + "/Ccompkomputer/deleteunit", {id: id}, function(result){
		showdataunit();
	});
 }

 function deletespk(id){
	$.post(myurl + "/Ccompkomputer/deletespk", {id: id}, function(result){
		showdataspk(); 
	});
 }

 function tambahunit() {
	var unit = $("#jenis_unit").val();
	var complain = $("#jenis_complain").val();
	var keterangan = $("#keterangan").val()

	// alert(unit + "-" + complain);
	// alert(keterangan);
	// alert(myurl + "/Ccompkomputer/insertTableComplain");

	$.post(myurl + "/Ccompkomputer/insertTableComplain",
		{unit: unit, complain: complain, keterangan: keterangan}, function(result) {
		// alert(result); 
		showdataunit();
	}
	);
	// $.ajax({
	//  url: myurl + "/Ccompkomputer/insertTableComplain",
	//  type: "POST",
	//  success: function(result){
	//   alert(result); 
	//   // var kal = "";
	//   // kal = kal + "<tr>";
	//   // for(var i = 0; i <result.length; i++){
		
	//   //   kal = kal + "<td>"+ i+1 +"</td>";
	//   //   kal = kal + "<td>"+ result[i].jenis_unit +"</td>";
	//   //   kal = kal + "<td>"+ result[i].nama_ju +"</td>";
	//   //   kal = kal + "<td>"+ result[i].jenis_complain +"</td>";
	//   //   kal = kal + "<td>"+ result[i].keterangan +"</td>";
	//   // }
	//   // kal = kal + "</tr>";
	//   // $("#hasiljeniscomplain").html(kal);
	//  }
	// })
 }

 function tambahspk(){
	var spk = $("#jenisspk").val();
	// alert(spk);
	
	$.post(myurl + "/Ccompkomputer/insertTableSpk",
		{spk: spk}, function(result){
			// alert(result);
			showdataspk();
		}
	);
	// $.ajax({
	// 	url: myurl + "/Ccompkomputer/insertTableSpk",
	// 	data: { spk: spk },
	// 	dataType: "json",
	// 	type: "POST",
	// 	success: function(result){
	// 		var kal = "";
	// 		kal = kal + "<tr>";
			
	// 		kal = kal = "</tr>";
	// 		$("hasiljenisspk").html(kal);
	// 	}
	// })
 }

 showdataspk(); 
 showdataunit(); 
</script>
