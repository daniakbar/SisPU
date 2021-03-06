			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Lihat Data Kelembagaan</span></h4>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?=base_url()?>dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Data Kelembagaan</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->



				<!-- Content area -->
				<div class="content" >

						<!-- Info alert -->
						<div class="alert alert-info alert-styled-left alert-arrow-left alert-component">
							<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
							<h6 class="alert-heading text-semibold">Data Berhasil di Ubah</h6>
							
					    </div>
					    <!-- /info alert -->
					    <!-- Info alert -->
						<div class="alert alert-success alert-styled-left alert-arrow-left alert-component">
							<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
							<h6 class="alert-heading text-semibold">Data Berhasil di Tambahkan</h6>
							
					    </div>
					    <!-- /info alert -->
					     <!-- Info alert -->
						<div class="alert alert-danger alert-styled-left alert-arrow-left alert-component">
							<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
							<h6 class="alert-heading text-semibold">Data Berhasil di Hapus</h6>
							
					    </div>
					    <!-- /info alert -->

						<div id="form" class="panel panel-flat animated" >

							<div class="panel-body bg-indigo-400">
								<div class="heading-elements">
									<i id="icon-header" class="icon-file-plus position-right"></i>
								</div>

								<h3 id="title" class="no-margin">Tambah Kelembagaan </h3>
								<span id="deskripsi">Adalah form input untuk menambahkan daftar kelembagaan pada sistem.</br> Lengkapi isi form dengan benar dan klik tombol di pojok kanan bawah untuk menyimpan</span>
							</div>
							

							<div class="panel-body">
								<p class="content-group-lg"></p>

								<?php echo form_open('component/viewlembaga', array('method' => 'POST', 'class' => 'form-horizontal'));?>
								<fieldset class="content-group">

									<?php echo validation_errors();?>

									<legend class="text-bold">Detail Kelembagaan</legend>

									<input type="hidden" name="id" id="id" value="">

									<div class="form-group">
										<label class="control-label col-lg-2">Nama Kelembagaan</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-credit-card"></i></span>
												<input name="lembaga" id="lembaga" type="text" class="form-control" placeholder="">
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
							<div class="panel-body bg-slate">
								<div class="heading-elements">
								<span class="heading-text badge">4.100 Data</span>
							</div>

								<h3 class="no-margin"> <i class="icon-file-text2"></i> Data Kelembagaan</h3>
								Lihat Semua Data Kelembagaan. <p>Icon <i class="icon-menu9"></i> pada tabel ( "Kelola Data" pojok kanan ) adalah menu <i>Dropdown</i> untuk <b>Merubah</b> atau <b>Menghapus</b> data.</p>
							</div>

							<div class="">

								<table style="border-top: 1px solid #ddd; border-bottom: 1px solid #ddd;" class="ganti-bahasa table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Lembaga</th>
										<th class="text-center">Kelola Data</th>
									</tr>
								</thead>
								<tbody>
									<?php
										if(is_object($lembaga) || is_array($lembaga)) :
                                            $no = 1;
                                            foreach ($lembaga as $row) :
									?>
									<tr>
										<td><?=$no?></td>
										<td><?=$row->lembaga?></td>
										<td class="text-center">
											<ul class="icons-list">
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="icon-menu9"></i>
													</a>

													<ul class="dropdown-menu dropdown-menu-right">
														<!-- <li><a href="full-view-DRN.php"><i class="icon-file-eye"></i> Lihat</a></li> -->
														<li><a href="#" onclick="ubah(<?=$row->id?>, '<?=$row->lembaga?>')"><i class="icon-pencil7 animation"  data-animation="zoomInUp"></i> Ubah</a></li>
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

		function ubah(id, lembaga)
    	{
    		$('#title').text("Ubah Kelembagaan");
    		$('#id').val(id);
    		$('#lembaga').val(lembaga);
    		$('#reset').removeClass('hidden');
    		$('#submit').val('edit');
    		$('#submit').html('Ubah Data <b><i class="icon-floppy-disk"></i></b>');
    		$('#deskripsi').html('Adalah form input untuk Merubah daftar kelembagaan yg sudah di pilih pada sistem.</br> Lengkapi isi form dengan benar dan klik tombol di pojok kanan bawah untuk menyimpan kiri bawah untuk batal.');
    		$('#form').addClass('shake');
    		$('#icon-header').removeClass('icon-file-plus');
    		$('#icon-header').addClass('icon-pencil7');
    	}

    	function tambah()
    	{
    		$('#form').removeClass('shake');
    		$('#icon-header').addClass('icon-file-plus');
    		$('#icon-header').removeClass('icon-pencil7');
    		$('#title').text("Tambah Kelembagaan");
    		$('#id').val("");
    		$('#lembaga').val("");
    		$('#reset').addClass('hidden');
    		$('#info').removeClass('hidden');
    		$('#submit').val('add');
    		$('#submit').html('Simpan Data <b><i class="icon-floppy-disk"></i></b>');
    	}

	</script>