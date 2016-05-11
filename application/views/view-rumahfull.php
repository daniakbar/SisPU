<?php include'header.php' ?>
<?php include'sidebar.php' ?>
	<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Dashboard</span> - Lihat Data Rumah Negara</h4>
						</div>

						<div class="heading-elements">
							<a href="edit-DRN.php" class="btn btn-labeled btn-labeled-right bg-blue heading-btn">Tambah Data <b><i class=" icon-database-add"></i></b></a>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="index.html"><i class="icon-stack position-left"></i> Data Rumah Negara</a></li>
							<li class="active">Lihat Semua</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

						<!-- Highlighting rows and columns -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h5 class="panel-title">Data Rumah Negara</h5>
							</div>

							<div class="panel-body">
								Lihat Detail Data Rumah Negara
							</div>

							<!-- <table class="table table-bordered table-hover datatable-highlight">
								<thead>
									<tr>
										<td rowspan="2">No</td>
										<td rowspan="2">HDNo</td>
										<td rowspan="2">Alamat</td>
										<td rowspan="2">Kementrian / Lembaga</td>
										<td rowspan="2">Diperoleh / DIbangun Th.</td>
										<td rowspan="2">Konstruksi</td>
										<td rowspan="2">Luas M2</td>
									</tr>
									<tr>
										<td>Bangunan</td>
										<td>Tanah</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td><a href="#">HD 123</a></td>
										<td>Pertanian</td>
										<td>1972</td>
										<td>Konstruksi</td>
										<td>Luas</td>
										<td><span class="label label-success">Active</span></td>
									</tr>
									
									
								</tbody>
							</table> -->
							<div class="table-responsive">
								<table style="border-color: #f1f1f1;" border="1" class="table table-striped table-hover datatable-highlight">
									<thead>
										 <tr class="success">
										 	<td rowspan="2">No</td>
										    <td rowspan="2">HD No</td>
										    <td rowspan="2">Alamat</td>
										    <td rowspan="2">Kementrian/Lembaga</td>
										    <td rowspan="2">Diperoleh/Dibangun th.</td>
										    <td rowspan="2">Tipe/Kelas</td>
										    <td rowspan="2">Konstruksi</td>
										    <td colspan="2" class="text-center">Luas M2</td>
										    <td rowspan="2">No & SK Tgl. SK Gol III</td>
										    <td rowspan="2">Lokasi Berkas</td>
											<td rowspan="2">No & Tgl. SIP</td>
											<td rowspan="2">Nama Penghuni</td>
											<td rowspan="2">No & Tgl. SK Pengalihan Hak</td>
											<td rowspan="2">No & Tgl. Surat Perjanjian Sewa Beli</td>
											<td rowspan="2">No & Tgl SK Hak Milik</td>
											<td colspan="2" class="text-center">Harga</td>
											<td rowspan="2">Jumlah</td>							    

										 </tr>
										 <tr class="success">
										   <td>Bangunan</td>
										   <td>Tanah</td>
										   <td>Bangunan</td>
										   <td>Tanah</td>
										 </tr>
									 </thead>
								 	<tbody>
										<tr>
											<td>1</td>
											<td><a href="#">HD 123</a></td>
											<td>Kec.Pontianak Selatan Kota Pontianak,Kalimantan Barat</td>
											<td>Pertanian</td>
											<td>1972</td>
											<td>A</td>
											<td>Permanent</td>
											<td>10000</td>
											<td>20000</td>
											<td width="100%">12/07/1998</td>
											<td>02.11.04.04.02</td>
											<td>12/07/1998</td>
											<td>Hasan Saleh. SH</td>
											<td>09/09/1998</td>
											<td>HK.02.08/CK/551</td>
											<td>23/11/1999</td>
											<td>Harga Bangunan</td>
											<td>Harga Tanah</td>
											<td>3.850.000</td>
										</tr>	
									</tbody>
								</table>
							</div>

						</div>
						<!-- /highlighting rows and columns -->
				
					


					<?php include'footer.php' ?>
					<!-- Footer -->
