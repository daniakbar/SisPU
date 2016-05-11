			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-home"></i> <span class="text-semibold">Rumah Negara Gol. III</span> - Lihat Data Rumah</h4>
						</div>

						<div class="heading-elements">
							<a href="<?=base_url()?>rumah/add" class="btn btn-labeled btn-labeled-right bg-blue heading-btn">Tambah Data <b><i class=" icon-database-add"></i></b></a>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?=base_url()?>dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Data Rumah Negara</li>
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
								Lihat Semua Data Rumah Negara
								
								<hr>

								<table style="padding: 5px; border-top: 1px solid #ddd; border-bottom: 1px solid #ddd;" class="ganti-bahasa table table-bordered table-hover">
									<thead>
										<tr>
											<th>No.</th>
											<th>HDNo</th>
											<th>Nama Penghuni</th>
											<th>Alamat</th>
											<th>Lembaga</th>
											<th class="text-center">Kelola Data</th>
										</tr>
									</thead>
									<tbody>
										<?php
											if(is_object($rumah) || is_array($rumah)) :
	                                            $no = 1;
	                                            foreach ($rumah as $row) :
										?>
										<tr>
											<td><?=$no?></td>
											<td><a href="<?=base_url().'rumah/detail/'.$row->id?>"><?=$row->hdno?></a></td>
											<td><?=$row->nama?></td>
											<td><?=$row->alamat?></td>
											<td><?=$row->lembaga?></td>
											<td class="text-center">
												<ul class="icons-list">
													<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown">
															<i class="icon-menu9"></i>
														</a>

														<ul class="dropdown-menu dropdown-menu-right">
															<!-- <li><a href="full-view-DRN.php"><i class="icon-file-eye"></i> Lihat</a></li> -->
															<li><a href="<?=base_url().'rumah/edit/'.$row->id?>"><i class="icon-pencil7"></i> Ubah</a></li>
															<li><a href="#"><i class="icon-trash"></i> Hapus</a></li>
														</ul>
													</li>
												</ul>
											</td>
										</tr>
										<?php
												$no++;
	                                            endforeach;
	                                        endif;
										?>
									</tbody>
								</table>
						</div>
						<!-- /highlighting rows and columns -->

	<script type="text/javascript">
		$(document).ready(function() {
	    $('.ganti-bahasa').DataTable( {
	        "language": {
	        	"sSearch": "Cari Data ",
	            "lengthMenu": "Tampilkan _MENU_ data per halaman",
	            "zeroRecords": "Maaf Data tidak ditemukan",
	            "info": "Tampilkan halaman _PAGE_ dari _PAGES_",
	            "infoEmpty": "Tidak ada data yang tersedia",
	            "infoFiltered": "(Mancari dari _MAX_ data yang ada)"
		        }
		    } );
		} );

	</script>