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

				<!-- Nama yang login -->
				<li class="nav-item lh-1 me-3">
					Admin
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
								<h2 class="card-title text-primary"> Dashboard</h2>
 								
								<div class="container mt-3" style="width:600px">
										<h4 style="text-align: center;"><?= $title; ?></h4>
										<br />

										<canvas id="myChart"></canvas>
										<?php
										$divisi = "";            // string kosong untuk menampung data divisi
										$total_complain = null;    // nilai awal null untuk menampung data total jumlah

										// looping data dari $chartSiswa
										foreach ($datadivisi as $row) {
											$dataDivisi     = "" . $row->DIVISI;
											$divisi         .= "'$dataDivisi'" . ",";
											$dataTotal     = $row->TOTAL;
											$total_complain .= "'$dataTotal'" . ",";
											
										}

										

										?>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script type="text/javascript">
    const chartSiswa = document.getElementById('myChart').getContext('2d');
    const chart = new Chart(chartSiswa, {
        type: 'bar',
        data: {
            labels: [<?= $divisi; ?>], // data tahun sebagai label dari chart
            datasets: [{
                label: 'Jumlah Complain',
                backgroundColor: [
					'rgb(255, 99, 132)',
    'rgba(56, 86, 255, 0.87)',
    'rgb(60, 179, 113)',
    'rgb(175, 238, 239)',
    'rgb(0, 0, 0)',
    'rgb(255, 2, 255)',
    'rgb(128, 128, 128)',
    'rgb(255, 0, 0)',
    'rgb(0, 255, 0)',
    'rgb(0, 0, 255)',
    'rgb(255, 255, 0)',
    'rgb(255, 0, 255)',
    'rgb(0, 255, 255)',
    'rgb(128, 0, 0)',
    'rgb(0, 128, 0)',
    'rgb(0, 0, 128)'
],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?= $total_complain; ?>] //data siswa sebagai data dari chart
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

