			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Rumah Negara Gol. III</span> - Ubah Data</h4>
						</div>

						<div class="heading-elements">
							<a href="<?=base_url()?>rumah" class="btn btn-labeled btn-labeled-right bg-blue heading-btn">Lihat Semua Data <b><i class="icon-stack"></i></b></a>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?=base_url()?>dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="<?=base_url()?>rumah"><i class="icon-stack position-left"></i> Data Rumah Negara Gol. III</a></li>
							<li class="active">Ubah Data</li>
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
							<h5 class="panel-title">Ubah Data Rumah Negara Gol. III</h5>
						</div>

						<div class="panel-body">
							<p class="content-group-lg">Silahkan masukkan data rumah negara gol. III dengan benar.</p>

							<?php echo form_open('rumah/edit/'.$rumah->id, array('method' => 'POST', 'class' => 'form-horizontal'));?>
								<fieldset class="content-group">
									<?php echo validation_errors();?>

									<legend class="text-bold">Detail Bangunan</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">HD No</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-credit-card"></i></span>
												<input name="hdno" value="<?=set_value('hdno', $rumah->hdno);?>" type="text" class="form-control" placeholder="">
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Alamat</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-home7"></i></span>
												<textarea name="alamat" id="input" class="form-control" rows="3" required="required" placeholder=""><?=set_value('alamat', $rumah->alamat);?></textarea>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Nama Penghuni</label>
										<div class="col-lg-10">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-user"></i></span>
												<input name="nama" value="<?=set_value('nama', $rumah->nama);?>" type="text" class="form-control" placeholder="">
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
	                                                    		if($row->id==$rumah->lembaga)
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}

	                                                ?>
	                                                <option value="<?=$row->id?>" <?php echo set_select('lembaga', $row->id, $selected);?>><?=$row->lembaga?></option>
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
	                                                    		if($row->id==$rumah->tipe)
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->id?>"
	                                                <?php echo set_select('tipe', $row->id, $selected);?>
	                                                ><?=$row->tipe?></option>
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
	                                                    		if($row->id==$rumah->konstruksi)
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->id?>" 
	                                                <?php echo set_select('konstruksi', $row->id, $selected);?>
	                                                ><?=$row->konstruksi?></option>
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
													<option value="1" <?php if($row->id==$rumah->jml_lantai) {$selected = true; } else {$selected = false; } echo set_select('lantai', 1, $selected);?>>1</option> <option value="2" <?php if($row->id==$rumah->jml_lantai) {$selected = true; } else {$selected = false; } echo set_select('lantai', 2, $selected);?>>2</option>
													<option value="3" <?php if($row->id==$rumah->jml_lantai) {$selected = true; } else {$selected = false; } echo set_select('lantai', 3, $selected);?>>3</option>
													<option value="4" <?php if($row->id==$rumah->jml_lantai) {$selected = true; } else {$selected = false; } echo set_select('lantai', 4, $selected);?>>4</option>
													<option value="5" <?php if($row->id==$rumah->jml_lantai) {$selected = true; } else {$selected = false; } echo set_select('lantai', 5, $selected);?>>5</option>
													
												</select>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Luas M<sup>2</sup></label>
											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-home7"> <small>Bangunan</small></i></span>
													<input name="luasbangunan" value="<?=set_value('luasbangunan', $rumah->luas_bangunan);?>" type="text" class="form-control" placeholder="">
												</div>
											</div>

											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-shear"> <small class="padding-right-tanah">Tanah</small></i></span>
													<input name="luastanah" value="<?=set_value('luastanah', $rumah->luas_tanah);?>" type="text" class="form-control" placeholder="">
												</div>
											</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Harga<sup>Rp</sup></label>
											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-home7"> <small>Bangunan</small></i></span>
													<input type="text" value="<?=set_value('hargabangunan', $rumah->harga_bangunan);?>" name="hargabangunan" class="form-control" placeholder="">
												</div>
											</div>

											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-shear"> <small class="padding-right-tanah">Tanah</small></i></span>
													<input type="text" value="<?=set_value('hargatanah', $rumah->harga_tanah);?>" name="hargatanah" class="form-control" placeholder="">
												</div>
											</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Tahun</label>
											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-home7"> <small>Bangunan</small></i></span>
													<input type="text" value="<?=set_value('tahunbangunan', $rumah->tahun_bangunan);?>" name="tahunbangunan" class="form-control" placeholder="">
												</div>
											</div>

											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-shear"> <small class="padding-right-tanah">Tanah</small></i></span>
													<input type="text" value="<?=set_value('tahuntanah', $rumah->tahun_tanah);?>" name="tahuntanah"  class="form-control" placeholder="">
												</div>
											</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Sumber</label>
											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-home7"> <small>Bangunan</small></i></span>
													<input type="text" value="<?=set_value('sumberbangunan', $rumah->sumber_bangunan);?>" name="sumberbangunan" class="form-control" placeholder="">
												</div>
											</div>

											<div class="col-lg-5">
												<div class="input-group">
													<span class="input-group-addon"><i class="icon-shear"> <small class="padding-right-tanah">Tanah</small></i></span>
													<input type="text" value="<?=set_value('sumbertanah', $rumah->sumber_tanah);?>" name="sumbertanah" class="form-control" placeholder="">
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
												<input name="nosk" value="<?=set_value('nosk', $rumah->no_sk);?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input name="tglsk" type="text" value="<?=set_value('tglsk', date('d/m/Y',strtotime($rumah->tgl_sk)));?>" class="form-control pickadate">
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
	                                                    		if($row->ruangan==explode('.',$rumah->lokasi_sk)[0])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->ruangan?>" 
	                                                <?php echo set_select('berkasruangansk', $row->ruangan, $selected);?>
	                                                ><?=$row->ruangan?></option>
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
	                                                    		if($row->rollpact==explode('.',$rumah->lokasi_sk)[1])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->rollpact?>"
	                                                	<?php echo set_select('berkasrollpactsk', $row->rollpact, $selected);?>
	                                                ><?=$row->rollpact?></option>
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
	                                                    		if($row->lemari==explode('.',$rumah->lokasi_sk)[2])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->lemari?>"
	                                                	<?php echo set_select('berkaslemarisk', $row->lemari, $selected);?>
	                                                ><?=$row->lemari?></option>
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
	                                                    		if($row->rak==explode('.',$rumah->lokasi_sk)[3])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->rak?>"
	                                                <?php echo set_select('berkasraksk', $row->rak, $selected);?>
	                                                ><?=$row->rak?></option>
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
	                                                    		if($row->box==explode('.',$rumah->lokasi_sk)[4])
                                                    			{
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->box?>"
	                                                <?php echo set_select('berkasboxsk', $row->box, $selected);?>
	                                                ><?=$row->box?></option>
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
												<input name="nosip" value="<?=set_value('nosip', $rumah->no_sip);?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input name="tglsip" value="<?=set_value('tglsip', date('d/m/Y',strtotime($rumah->tgl_sip)));?>" type="text" class="form-control pickadate">
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
	                                                    		if($row->ruangan==explode('.',$rumah->lokasi_sip)[0])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->ruangan?>"
	                                                <?php echo set_select('berkasruangansip', $row->ruangan, $selected);?>
	                                                ><?=$row->ruangan?></option>
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
	                                                    		if($row->rollpact==explode('.',$rumah->lokasi_sip)[1])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->rollpact?>"
	                                                <?php echo set_select('berkasrollpactsip', $row->rollpact, $selected);?>
	                                                ><?=$row->rollpact?></option>
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
	                                                    		if($row->lemari==explode('.',$rumah->lokasi_sip)[2])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->lemari?>"
	                                                <?php echo set_select('berkaslemarisip', $row->lemari, $selected);?>
	                                                ><?=$row->lemari?></option>
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
	                                                    		if($row->rak==explode('.',$rumah->lokasi_sip)[3])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->rak?>"
	                                                <?php echo set_select('berkasraksip', $row->rak, $selected);?>
	                                                ><?=$row->rak?></option>
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
	                                                    		if($row->box==explode('.',$rumah->lokasi_sip)[4])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->box?>"
	                                                <?php echo set_select('berkasboxsip', $row->box, $selected);?>
	                                                ><?=$row->box?></option>
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
												<input name="noph" value="<?=set_value('noph', $rumah->no_pengalihanhak);?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input name="tglph" value="<?=set_value('tglph', date('d/m/Y',strtotime($rumah->tgl_pengalihanhak)));?>" type="text" class="form-control pickadate">
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
	                                                    		if($row->ruangan==explode('.',$rumah->lokasi_pengalihanhak)[0])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->ruangan?>"
	                                                <?php echo set_select('berkasruanganph', $row->ruangan, $selected);?>
	                                                ><?=$row->ruangan?></option>
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
	                                                    		if($row->rollpact==explode('.',$rumah->lokasi_pengalihanhak)[1])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->rollpact?>"
	                                                <?php echo set_select('berkasrollpactph', $row->rollpact, $selected);?>
	                                                ><?=$row->rollpact?></option>
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
	                                                    		if($row->lemari==explode('.',$rumah->lokasi_pengalihanhak)[2])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->lemari?>"
	                                                <?php echo set_select('berkaslemariph', $row->lemari, $selected);?>
	                                                ><?=$row->lemari?></option>
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
	                                                    		if($row->rak==explode('.',$rumah->lokasi_pengalihanhak)[3])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->rak?>"
	                                                <?php echo set_select('berkasrakph', $row->rak, $selected);?>
	                                                ><?=$row->rak?></option>
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
	                                                    		if($row->box==explode('.',$rumah->lokasi_pengalihanhak)[4])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->box?>"
	                                                <?php echo set_select('berkasboxph', $row->box, $selected);?>
	                                                ><?=$row->box?></option>
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
												<input name="nokontrak" value="<?=set_value('nokontrak', $rumah->no_kontrak);?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input name="tglkontrak" value="<?=set_value('tglkontrak', date('d/m/Y',strtotime($rumah->tgl_kontrak)));?>" type="text" class="form-control pickadate">
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
	                                                    		if($row->ruangan==explode('.',$rumah->lokasi_kontrak)[0])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->ruangan?>"
	                                                <?php echo set_select('berkasruangankontrak', $row->ruangan, $selected);?>
	                                                ><?=$row->ruangan?></option>
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
	                                                    		if($row->rollpact==explode('.',$rumah->lokasi_kontrak)[1])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->rollpact?>"
	                                                <?php echo set_select('berkasrollpactkontrak', $row->rollpact, $selected);?>
	                                                ><?=$row->rollpact?></option>
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
	                                                    		if($row->lemari==explode('.',$rumah->lokasi_kontrak)[2])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->lemari?>"
	                                                <?php echo set_select('berkaslemarikontrak', $row->lemari,$selected);?>
	                                                ><?=$row->lemari?></option>
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
	                                                    		if($row->rak==explode('.',$rumah->lokasi_kontrak)[3])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->rak?>"
	                                                <?php echo set_select('berkasrakkontrak', $row->rak, $selected);?>
	                                                ><?=$row->rak?></option>
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
	                                                    		if($row->box==explode('.',$rumah->lokasi_kontrak)[4])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->box?>"
	                                                <?php echo set_select('berkasboxkontrak', $row->box, $selected);?>
	                                                ><?=$row->box?></option>
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
												<input name="nosktl" value="<?=set_value('nosktl', $rumah->no_sktl);?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input name="tglsktl" value="<?=set_value('tglsktl', date('d/m/Y',strtotime($rumah->tgl_sktl)));?>" type="text" class="form-control pickadate">
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
	                                                    		if($row->ruangan==explode('.',$rumah->lokasi_sktl)[0])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->ruangan?>"
	                                                <?php echo set_select('berkasruangansktl', $row->ruangan, $selected);?>
	                                                ><?=$row->ruangan?></option>
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
	                                                    		if($row->rollpact==explode('.',$rumah->lokasi_sktl)[1])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->rollpact?>"
	                                                <?php echo set_select('berkasrollpactsktl', $row->rollpact, $selected);?>
	                                                ><?=$row->rollpact?></option>
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
	                                                    		if($row->lemari==explode('.',$rumah->lokasi_sktl)[2])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->lemari?>"
	                                                <?php echo set_select('berkaslemarisktl', $row->lemari, $selected);?>
	                                                ><?=$row->lemari?></option>
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
	                                                    		if($row->rak==explode('.',$rumah->lokasi_sktl)[3])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->rak?>"
	                                                <?php echo set_select('berkasraksktl', $row->rak, $selected);?>
	                                                ><?=$row->rak?></option>
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
	                                                    		if($row->box==explode('.',$rumah->lokasi_sktl)[4])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->box?>"
	                                                <?php echo set_select('berkasboxsktl', $row->box, $selected);?>
	                                                ><?=$row->box?></option>
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
												<input name="nohm" value="<?=set_value('nohm', $rumah->no_hak);?>" type="text" class="form-control" placeholder="" number>
											</div>
										</div>

										<div class="col-lg-3">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input name="tglhm" value="<?=set_value('tglhm', date('d/m/Y',strtotime($rumah->tgl_hak)));?>" type="text" class="form-control pickadate">
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
	                                                    		if($row->ruangan==explode('.',$rumah->lokasi_hak)[0])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->ruangan?>"
	                                                <?php echo set_select('berkasruanganhm', $row->ruangan, $selected);?>
	                                                ><?=$row->ruangan?></option>
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
	                                                    		if($row->rollpact==explode('.',$rumah->lokasi_hak)[1])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->rollpact?>"
	                                                <?php echo set_select('berkasrollpacthm', $row->rollpact, $selected);?>
	                                                ><?=$row->rollpact?></option>
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
	                                                    		if($row->lemari==explode('.',$rumah->lokasi_hak)[2])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->lemari?>"
	                                                <?php echo set_select('berkaslemarihm', $row->lemari, $selected);?>
	                                                ><?=$row->lemari?></option>
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
	                                                    		if($row->rak==explode('.',$rumah->lokasi_hak)[3])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->rak?>"
	                                                <?php echo set_select('berkasrakhm', $row->rak, $selected);?>
	                                                ><?=$row->rak?></option>
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
	                                                    		if($row->box==explode('.',$rumah->lokasi_hak)[4])
                                                    			{ 
                                                    				$selected = true;
                                                    			} 
	                                                    		else 
                                                    			{
                                                    				$selected = false;
                                                    			}
	                                                ?>
	                                                <option value="<?=$row->box?>"
	                                                <?php echo set_select('berkasboxhm', $row->box, $selected);?>
	                                                ><?=$row->box?></option>
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

<!-- 								<fieldset class="content-group">
									<legend class="text-bold">Detail Angsuran</legend>

									<div class="form-group">
										
										<div class="col-lg-6">
											<div class="input-group">
												<span class="input-group-addon padding-pertama">Angsuran Pertama<sup>Rp</sup></span>
												<input name="angsuranpertama" value="<?=set_value('angsuranpertama');?>" type="text" class="form-control" placeholder=""3140" number>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="input-group">
												<span class="input-group-addon">Angsuran Perbulan<sup>Rp</sup></span>
												<input name="angsuranperbulan" value="<?=set_value('angsuranperbulan');?>" type="text" class="form-control" placeholder=""3140" number>
											</div>
										</div>
									</div>

									<div class="form-group">
										
										<div class="col-lg-6">
											<div class="input-group">
												<span class="input-group-addon padding-terakhir">Angsuran Terakhir<sup>Rp</sup></span>
												<input name="angsuranterakhir" value="<?=set_value('angsuranterakhir');?>" type="text" class="form-control" placeholder=""3140" number>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="input-group">
												<span class="input-group-addon padding-angsuran">Lama Angsuran<sup>Bulan</sup></span>
												<input name="lamaangsuran" value="<?=set_value('lamaangsuran');?>" type="text" class="form-control" placeholder=""3140" number>
											</div>
										</div>
									</div>
									
								</fieldset>
 -->
								<fieldset class="content-group">
									<div class="pull-right">
										<button type="submit" class="btn btn-labeled btn-labeled-right bg-blue heading-btn">Ubah Data <b><i class="icon-floppy-disk"></i></b></button>
									</div>
								</fieldset>
								
							</form>
						</div>
					</div>
					<!-- /input group addons -->
