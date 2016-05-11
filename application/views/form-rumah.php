			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-home"></i> <span class="text-semibold">Rumah Negara Gol. III</span> - Tambah Data</h4>
						</div>

						<div class="heading-elements">
							<a href="<?=base_url()?>rumah" class="btn btn-labeled btn-labeled-right bg-blue heading-btn">Lihat Semua Data <b><i class="icon-stack"></i></b></a>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?=base_url()?>dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="<?=base_url()?>rumah"><i class="icon-stack position-left"></i> Data Rumah Negara Gol. III</a></li>
							<li class="active">Tambah Data</li>
						</ul>

						<ul class="breadcrumb-elements">
							
						</ul>
					</div>
				</div>
				<!-- /page header -->

				<div class="content">
					<!-- Input group addons -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah Data Rumah Negara Gol. III</h5>
						</div>

						<div class="panel-body">
							<p class="content-group-lg">Silahkan masukkan data rumah negara gol. III dengan benar.</p>

							<?php echo form_open('rumah/add', array('method' => 'POST', 'class' => 'form-horizontal'));?>
								<fieldset class="content-group">
									<?php echo validation_errors();?>

									<legend class="text-bold">Detail Bangunan</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">HD No</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-credit-card"></i></span>
												<input name="hdno" value="<?=set_value('hdno');?>" type="text" class="form-control" placeholder="">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Alamat</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-home7"></i></span>
												<textarea name="alamat" id="input" class="form-control" rows="3" required="required" placeholder=""></textarea>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Nama Penghuni</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-user"></i></span>
												<input name="nama" value="<?=set_value('nama');?>" type="text" class="form-control" placeholder="">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Kementrian / Lembaga</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-office"></i></span>
												<select name="lembaga" id="input" class="form-control">
													<?php 
														if(!empty($attribute['lembaga']))
	                                                  	{
	                                                    	foreach ($attribute['lembaga'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->id?>"><?=$row->lembaga?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Tipe / Kelas</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king"></i></span>
												<select name="tipe" id="input" class="form-control">
													<?php 
														if(!empty($attribute['tipe']))
	                                                  	{
	                                                    	foreach ($attribute['tipe'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->id?>"><?=$row->tipe?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Konstruksi</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-office"></i></span>
												<select name="konstruksi" id="input" class="form-control">
													<?php 
														if(!empty($attribute['konstruksi']))
	                                                  	{
	                                                    	foreach ($attribute['konstruksi'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->id?>"><?=$row->konstruksi?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Jumlah lantai</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king"></i></span>
												<select name="lantai" id="input" class="form-control">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Luas M<sup>2</sup></label>
											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-home7"> <small>Bangunan</small></i></span>
													<input name="luasbangunan" value="<?=set_value('luasbangunan');?>" type="text" class="form-control" placeholder="">
												</div>
											</div>

											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-shear"> <small class="padding-right-tanah">Tanah</small></i></span>
													<input name="luastanah" value="<?=set_value('luastanah');?>" type="text" class="form-control" placeholder="">
												</div>
											</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Harga<sup>Rp</sup></label>
											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-home7"> <small>Bangunan</small></i></span>
													<input type="text" value="<?=set_value('hargabangunan');?>" name="hargabangunan" class="form-control" placeholder="">
												</div>
											</div>

											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-shear"> <small class="padding-right-tanah">Tanah</small></i></span>
													<input type="text" value="<?=set_value('hargatanah');?>" name="hargatanah" class="form-control" placeholder="">
												</div>
											</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Tahun</label>
											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-home7"> <small>Bangunan</small></i></span>
													<input type="text" value="<?=set_value('tahunbangunan');?>" name="tahunbangunan" class="form-control" placeholder="">
												</div>
											</div>

											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-shear"> <small class="padding-right-tanah">Tanah</small></i></span>
													<input type="text" value="<?=set_value('tahuntanah');?>" name="tahuntanah"  class="form-control" placeholder="">
												</div>
											</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Sumber</label>
											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-home7"> <small>Bangunan</small></i></span>
													<input type="text" value="<?=set_value('sumberbangunan');?>" name="sumberbangunan" class="form-control" placeholder="">
												</div>
											</div>

											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-shear"> <small class="padding-right-tanah">Tanah</small></i></span>
													<input type="text" value="<?=set_value('sumbertanah');?>" name="sumbertanah" class="form-control" placeholder="">
												</div>
											</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Jumlah<sup>Rp</sup></label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-list-numbered"></i></span>
												<input type="text" name="jumlah" class="form-control" readonly>
											</div>
										</div>
									</div>
									<!-- <div class="form-group">
										<label class="control-label col-lg-2">Tahun Lengkap</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar5"></i></span>
												<input type="date" name="" id="datepicker" class="form-control  pickadate" value="" required="required" title="">  
											</div>
										</div>
									</div> -->
								</fieldset>

								<fieldset class="content-group">
									<legend class="text-bold">Detail Berkas</legend>

									<!-- ============================================================= -->

									<legend class="text-bold">Detail Berkas Golongan III</legend>


									<div class="form-group">
										<label class="control-label col-lg-2">Status</label>
										<label class="radio-inline">
												<input type="checkbox" class="styled" name="statussk">
												<i>Centang untuk status tersedia</i>
											</label>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">No. & Tgl. SK Golongan III</label>
										
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-list-numbered padding-right-no-sk"> No SK</i></span>
												<input name="nosk" value="<?=set_value('nosk');?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input name="tglsk" type="text" value="<?=set_value('tglsk');?>" class="form-control pickadate" value="03/18/2013">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Lokasi Berkas</label>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king"> Ruangan</i></span>
												<select name="berkasruangansk" id="input" class="form-control">
													<?php 
														if(!empty($attribute['ruangan']))
	                                                  	{
	                                                    	foreach ($attribute['ruangan'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->ruangan?>"><?=$row->ruangan?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-roll"> Rollpact</i></span>
												<select name="berkasrollpactsk" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['rollpact']))
	                                                  	{
	                                                    	foreach ($attribute['rollpact'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->rollpact?>"><?=$row->rollpact?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-lemari"> Lemari</i></span>
												<select name="berkaslemarisk" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['lemari']))
	                                                  	{
	                                                    	foreach ($attribute['lemari'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->lemari?>"><?=$row->lemari?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2"></label>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-rak"> Rak</i></span>
												<select name="berkasraksk" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['rak']))
	                                                  	{
	                                                    	foreach ($attribute['rak'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->rak?>"><?=$row->rak?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-box"> Box</i></span>
												<select name="berkasboxsk" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['box']))
	                                                  	{
	                                                    	foreach ($attribute['box'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->box?>"><?=$row->box?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
									</div>
									<!-- =============================================== -->

									<legend class="text-bold">Detail SIP (Surat Izin Penghunian)</legend>


									<div class="form-group">
										<label class="control-label col-lg-2">Status</label>
										<label class="radio-inline">
												<input type="checkbox" class="styled" name="statussip">
												<i>Centang untuk status tersedia</i>
											</label>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">No. & Tgl. Surat Izin Penghuni</label>
										
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-list-numbered padding-right-no-sip"> No SIP</i></span>
												<input name="nosip" value="<?=set_value('nosip');?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input name="tglsip" value="<?=set_value('tglsip');?>" type="text" class="form-control pickadate" value="03/18/2013">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Lokasi Berkas</label>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king"> Ruangan</i></span>
												<select name="berkasruangansip" id="input" class="form-control">
													<?php 
														if(!empty($attribute['ruangan']))
	                                                  	{
	                                                    	foreach ($attribute['ruangan'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->ruangan?>"><?=$row->ruangan?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-roll"> Rollpact</i></span>
												<select name="berkasrollpactsip" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['rollpact']))
	                                                  	{
	                                                    	foreach ($attribute['rollpact'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->rollpact?>"><?=$row->rollpact?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-lemari"> Lemari</i></span>
												<select name="berkaslemarisip" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['lemari']))
	                                                  	{
	                                                    	foreach ($attribute['lemari'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->lemari?>"><?=$row->lemari?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2"></label>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-rak"> Rak</i></span>
												<select name="berkasraksip" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['rak']))
	                                                  	{
	                                                    	foreach ($attribute['rak'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->rak?>"><?=$row->rak?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-box"> Box</i></span>
												<select name="berkasboxsip" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['box']))
	                                                  	{
	                                                    	foreach ($attribute['box'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->box?>"><?=$row->box?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
									</div>
									<!-- =============================================== -->

									<legend class="text-bold">Detail Pengalihan Hak</legend>


									<div class="form-group">
										<label class="control-label col-lg-2">Status</label>
										<label class="radio-inline">
												<input type="checkbox" class="styled" name="statusph">
												<i>Centang untuk status tersedia</i>
											</label>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">No. & Tgl. Pengalihan Hak</label>
										
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-list-numbered padding-right-no-sk"> No PH</i></span>
												<input name="noph" value="<?=set_value('noph');?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input name="tglph" value="<?=set_value('tglph');?>" type="text" class="form-control pickadate" value="03/18/2013">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Lokasi Berkas</label>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king"> Ruangan</i></span>
												<select name="berkasruanganph" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['ruangan']))
	                                                  	{
	                                                    	foreach ($attribute['ruangan'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->ruangan?>"><?=$row->ruangan?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-roll"> Rollpact</i></span>
												<select name="berkasrollpactph" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['rollpact']))
	                                                  	{
	                                                    	foreach ($attribute['rollpact'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->rollpact?>"><?=$row->rollpact?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-lemari"> Lemari</i></span>
												<select name="berkaslemariph" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['lemari']))
	                                                  	{
	                                                    	foreach ($attribute['lemari'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->lemari?>"><?=$row->lemari?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2"></label>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-rak"> Rak</i></span>
												<select name="berkasrakph" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['rak']))
	                                                  	{
	                                                    	foreach ($attribute['rak'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->rak?>"><?=$row->rak?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-box"> Box</i></span>
												<select name="berkasboxph" id="input" class="form-control">
													<?php 
														if(!empty($attribute['box']))
	                                                  	{
	                                                    	foreach ($attribute['box'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->box?>"><?=$row->box?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
									</div>
									<!-- =============================================== -->

									<legend class="text-bold">Detail Kontrak</legend>


									<div class="form-group">
										<label class="control-label col-lg-2">Status</label>
										<label class="radio-inline">
												<input type="checkbox" class="styled" name="statuskontrak">
												<i>Centang untuk status tersedia</i>
											</label>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">No. & Tgl. Kontrak</label>
										
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-list-numbered padding-right-no-kontrak"> No Kontrak</i></span>
												<input name="nokontrak" value="<?=set_value('nokontrak');?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input name="tglkontrak" value="<?=set_value('tglkontrak');?>" type="text" class="form-control pickadate" value="03/18/2013">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Lokasi Berkas</label>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-ruangan-kontrak"> Ruangan</i></span>
												<select name="berkasruangankontrak" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['ruangan']))
	                                                  	{
	                                                    	foreach ($attribute['ruangan'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->ruangan?>"><?=$row->ruangan?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-roll-kontrak"> Rollpact</i></span>
												<select name="berkasrollpactkontrak" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['rollpact']))
	                                                  	{
	                                                    	foreach ($attribute['rollpact'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->rollpact?>"><?=$row->rollpact?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-lemari-kontrak"> Lemari</i></span>
												<select name="berkaslemarikontrak" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['lemari']))
	                                                  	{
	                                                    	foreach ($attribute['lemari'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->lemari?>"><?=$row->lemari?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2"></label>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-rak-kontrak"> Rak</i></span>
												<select name="berkasrakkontrak" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['rak']))
	                                                  	{
	                                                    	foreach ($attribute['rak'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->rak?>"><?=$row->rak?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-box-kontrak"> Box</i></span>
												<select name="berkasboxkontrak" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['box']))
	                                                  	{
	                                                    	foreach ($attribute['box'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->box?>"><?=$row->box?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
									</div>
									<!-- =============================================== -->

									<legend class="text-bold">Detail SKTL Sewa Beli</legend>


									<div class="form-group">
										<label class="control-label col-lg-2">Status</label>
										<label class="radio-inline">
												<input type="checkbox" value="<?=set_value('hdno');?>" class="styled" name="statussktl">
												<i>Centang untuk status tersedia</i>
											</label>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">No. & Tgl. SKTL Sewa Beli</label>
										
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-list-numbered padding-right-no-sktl"> No SKTL</i></span>
												<input name="nosktl" value="<?=set_value('nosktl');?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input name="tglsktl" value="<?=set_value('tglsktl');?>" type="text" class="form-control pickadate" value="03/18/2013">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Lokasi Berkas</label>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-ruangan-sktl"> Ruangan</i></span>
												<select name="berkasruangansktl" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['ruangan']))
	                                                  	{
	                                                    	foreach ($attribute['ruangan'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->ruangan?>"><?=$row->ruangan?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-roll-sktl"> Rollpact</i></span>
												<select name="berkasrollpactsktl" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['rollpact']))
	                                                  	{
	                                                    	foreach ($attribute['rollpact'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->rollpact?>"><?=$row->rollpact?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-lemari-sktl"> Lemari</i></span>
												<select name="berkaslemarisktl" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['lemari']))
	                                                  	{
	                                                    	foreach ($attribute['lemari'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->lemari?>"><?=$row->lemari?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2"></label>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-rak-sktl"> Rak</i></span>
												<select name="berkasraksktl" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['rak']))
	                                                  	{
	                                                    	foreach ($attribute['rak'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->rak?>"><?=$row->rak?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-box-sktl"> Box</i></span>
												<select name="berkasboxsktl" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['box']))
	                                                  	{
	                                                    	foreach ($attribute['box'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->box?>"><?=$row->box?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
									</div>
									<!-- =============================================== -->
									
									<legend class="text-bold">Detail Hak Milik</legend>


									<div class="form-group">
										<label class="control-label col-lg-2">Status</label>
										<label class="radio-inline">
												<input type="checkbox" class="styled" name="statushm">
												<i>Centang untuk status tersedia</i>
											</label>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">No. & Tgl. Hak Milik</label>
										
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-list-numbered padding-right-no-hm"> No HM</i></span>
												<input name="nohm" value="<?=set_value('nohm');?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input name="tglhm" value="<?=set_value('tglhm');?>" type="text" class="form-control pickadate" value="03/18/2013">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Lokasi Berkas</label>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king"> Ruangan</i></span>
												<select name="berkasruanganhm" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['ruangan']))
	                                                  	{
	                                                    	foreach ($attribute['ruangan'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->ruangan?>"><?=$row->ruangan?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-roll"> Rollpact</i></span>
												<select name="berkasrollpacthm" id="input" class="form-control">
													<?php 
														if(!empty($attribute['rollpact']))
	                                                  	{
	                                                    	foreach ($attribute['rollpact'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->rollpact?>"><?=$row->rollpact?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-lemari"> Lemari</i></span>
												<select name="berkaslemarihm" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['lemari']))
	                                                  	{
	                                                    	foreach ($attribute['lemari'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->lemari?>"><?=$row->lemari?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2"></label>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-rak"> Rak</i></span>
												<select name="berkasrakhm" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['rak']))
	                                                  	{
	                                                    	foreach ($attribute['rak'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->rak?>"><?=$row->rak?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-chess-king padding-right-box"> Box</i></span>
												<select name="berkasboxhm" id="input" class="form-control" >
													<?php 
														if(!empty($attribute['box']))
	                                                  	{
	                                                    	foreach ($attribute['box'] as $row) 
	                                                    	{
	                                                ?>
	                                                <option value="<?=$row->box?>"><?=$row->box?></option>
	                                                <?php
	                                                    	}
	                                                  	}
	                                                ?>
												</select>
											</div>
										</div>
									</div>
									<!-- =============================================== -->
									
								</fieldset>

								<!-- <fieldset class="content-group">
									<legend class="text-bold">Detail Angsuran</legend>

									<div class="form-group">
										
										<div class="col-lg-6">
											<div class="input-group">
												<span class="input-group-addon padding-pertama">Angsuran Pertama<sup>Rp</sup></span>
												<input name="angsuranpertama" value="<?=set_value('angsuranpertama');?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="input-group">
												<span class="input-group-addon">Angsuran Perbulan<sup>Rp</sup></span>
												<input name="angsuranperbulan" value="<?=set_value('angsuranperbulan');?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>
									</div>

									<div class="form-group">
										
										<div class="col-lg-6">
											<div class="input-group">
												<span class="input-group-addon padding-terakhir">Angsuran Terakhir<sup>Rp</sup></span>
												<input name="angsuranterakhir" value="<?=set_value('angsuranterakhir');?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="input-group">
												<span class="input-group-addon padding-angsuran">Lama Angsuran<sup>Bulan</sup></span>
												<input name="lamaangsuran" value="<?=set_value('lamaangsuran');?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>
									</div>
									
								</fieldset> -->

								<fieldset class="content-group">
									<div class="pull-right">
										<button type="submit" class="btn btn-labeled btn-labeled-right bg-blue heading-btn">Simpan Data <b><i class="icon-floppy-disk"></i></b></button>
									</div>
								</fieldset>
								
							</form>
						</div>
					</div>
					<!-- /input group addons -->
