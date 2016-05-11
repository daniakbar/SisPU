			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Lihat Data Tipe Rumah Negara Gol. III</span></h4>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?=base_url()?>dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Data Tipe</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

						<div id="form" class="panel panel-flat animated">
							<div class="panel-heading">
								<h5 class="panel-title" id="title">Tambah Tipe</h5>
							</div>

							<div class="panel-body">
								<p class="content-group-lg">Silahkan masukkan data tipe dengan benar.</p>

								<?php echo form_open('component/viewtipe', array('method' => 'POST', 'class' => 'form-horizontal'));?>
								<fieldset class="content-group">

									<?php echo validation_errors();?>

									<legend class="text-bold">Detail Tipe</legend>

									<input type="hidden" name="id" id="id" value="">

									<div class="form-group">
										<label class="control-label col-lg-2">Nama Tipe</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-credit-card"></i></span>
												<input name="tipe" id="tipe" type="text" class="form-control" placeholder="">
											</div>
										</div>
									</div>
								</fieldset>

								<fieldset class="content-group">
									<div class="pull-left">
										<button type="reset" name="reset" id="reset" onclick="tambah()" class="hidden btn btn-labeled btn-labeled-right bg-red heading-btn animation"  data-animation="shake"><b><i class="icon-floppy-disk"></i></b>Batal Ubah</button>
									</div>

									<div class="pull-right">
										<button type="submit" name="submit" id="submit" value="add" class="btn btn-labeled btn-labeled-right bg-blue heading-btn">Simpan Data <b><i class="icon-floppy-disk"></i></b></button>
									</div>
								</fieldset>
								</form>
							</div>
						</div>

						<!-- Highlighting rows and columns -->
						<div class="panel panel-flat">
							<div class="panel-heading">
								<h5 class="panel-title">Data Tipe</h5>
							</div>

							<div class="panel-body">
								Lihat Semua Data Tipe
							
								<hr>

								<table style="border-top: 1px solid #ddd; border-bottom: 1px solid #ddd;" class="ganti-bahasa table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Tipe</th>
										<th class="text-center">Kelola Data</th>
									</tr>
								</thead>
								<tbody>
									<?php
										if(is_object($tipe) || is_array($tipe)) :
                                            $no = 1;
                                            foreach ($tipe as $row) :
									?>
									<tr>
										<td><?=$no?></td>
										<td><?=$row->tipe?></td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="icon-menu9"></i>
													</a>

													<ul class="dropdown-menu dropdown-menu-right">
														<!-- <li><a href="full-view-DRN.php"><i class="icon-file-eye"></i> Lihat</a></li> -->
														<li><a href="#" onclick="ubah(<?=$row->id?>, '<?=$row->tipe?>')"><i class="icon-pencil7"></i> Ubah</a></li>
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
		    });

		});

		function ubah(id, tipe)
    	{
    		$('#title').text("Ubah Tipe");
    		$('#id').val(id);
    		$('#tipe').val(tipe);
    		$('#reset').removeClass('hidden');
    		$('#submit').val('edit');
    		$('#submit').html('Ubah Data <b><i class="icon-floppy-disk"></i></b>');
    		$('#form').addClass('shake');
    	}

    	function tambah()
    	{
    		$('#form').removeClass('shake');
    		$('#title').text("Tambah Tipe");
    		$('#id').val("");
    		$('#tipe').val("");
    		$('#reset').addClass('hidden');
    		$('#submit').val('add');
    		$('#submit').html('Simpan Data <b><i class="icon-floppy-disk"></i></b>');
    	}

	</script>