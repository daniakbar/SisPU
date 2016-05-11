			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-home"></i> <span class="text-semibold">Rumah Negara Gol. III</span> - Detail Rumah</h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?=base_url()?>dashboard"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="<?=base_url()?>rumah"><i class="icon-stack position-left"></i> Data Rumah Negara</a></li>
							<li class="active">Detail Data Rumah Negara</li>
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
							<h5 class="panel-title">Detail Data Rumah Negara</h5>
						</div>

						<div class="panel-body">

							<table class="table">
							    <tbody>
							        <tr class="success">
							          <th class="col-md-5">Judul</th>
							            <td class="col-md-5">Deskripsi</td>
							        </tr>
							        <tr>
							          <th>HD No</th>
							            <td><?=$rumah->hdno?></td>
							        </tr>
							        <tr>
							          <th>Alamat</th>
							          	<td><?=$rumah->alamat?></td>
							          </th>
							        </tr>
							        <tr>
							          <th>Nama Penghuni</th>
							          	<td><?=$rumah->nama?></td>
							          </th>
							        </tr>
							        <tr>
							          <th>Kementrian/Lembaga</th>
							          	<td><?=$rumah->lembaga?></td>
							          </th>
							        </tr>
							        <tr>
							          <th>Tipe/Kelas</th>
							          	<td><?=$rumah->tipe?></td>
							          </th>
							        </tr>
							        <tr>
							          <th>Konstruksi</th>
							          	<td><?=$rumah->konstruksi?></td>
							          </th>
							        </tr>
							        <tr>
							          <th>Jumlah Lantai</th>
							          	<td><?=$rumah->jml_lantai?></td>
							          </th>
							        </tr>
							    </tbody>
							</table>
							<hr>
							<!-- ==================================== -->
							<div class="">
								<h4><i class="icon-home7 position-left"></i> <span class="text-semibold">Luas</span></h4>
							</div>
							<hr>
							<table class="table">
							    <tbody>
							        <tr class="success">
							          <th class="col-md-5">Judul </th>
							            <td class="col-md-5">Luas M<sup>2</sup></td>
							        </tr>
							        <tr>
							          <th>Luas Bangunan</th>
							            <td><?=$rumah->luas_bangunan?></td>
							        </tr>
							        <tr>
							          <th>Luas Tanah</th>
							            <td><?=$rumah->luas_tanah?></td>
							        </tr>
							    </tbody>
							</table>
							<!-- ==================================== -->
							<!-- ==================================== -->
							<div class="">
								<h4><i class="icon-home7 position-left"></i> <span class="text-semibold">Harga</span></h4>
							</div>
							<hr>
							<table class="table">
							    <tbody>
							        <tr class="success">
							          <th class="col-md-5">Judul </th>
							            <td class="col-md-5">Harga R<sup>p</sup></td>
							        </tr>
							        <tr>
							          <th>Harga Bangunan</th>
							            <td><?=$rumah->harga_bangunan?></td>
							        </tr>
							        <tr>
							          <th>Harga Tanah</th>
							            <td><?=$rumah->harga_tanah?></td>
							        </tr>
							    </tbody>
							</table>
							<!-- ==================================== -->
							<!-- ==================================== -->
							<div class="">
								<h4><i class="icon-home7 position-left"></i> <span class="text-semibold">Tahun</span></h4>
							</div>
							<hr>
							<table class="table">
							    <tbody>
							        <tr class="success">
							          <th class="col-md-5">Judul </th>
							            <td class="col-md-5">Tahun</td>
							        </tr>
							        <tr>
							          <th>Tahun Bangunan</th>
							            <td><?=$rumah->tahun_bangunan?></td>
							        </tr>
							        <tr>
							          <th>Tahun Tanah</th>
							            <td><?=$rumah->tahun_tanah?></td>
							        </tr>
							    </tbody>
							</table>
							<!-- ==================================== -->
							<!-- ==================================== -->
							<div class="">
								<h4><i class="icon-home7 position-left"></i> <span class="text-semibold">Sumber</span></h4>
							</div>
							<hr>
							<table class="table">
							    <tbody>
							        <tr class="success">
							          <th class="col-md-5">Judul </th>
							            <td class="col-md-5">Sumber</td>
							        </tr>
							        <tr>
							          <th>Sumber Bangunan</th>
							            <td><?=$rumah->sumber_bangunan?></td>
							        </tr>
							        <tr>
							          <th>Sumber Tanah</th>
							            <td><?=$rumah->sumber_tanah?></td>
							        </tr>
							    </tbody>
							</table>
							<!-- ==================================== -->

							<!-- ==================================== -->
							<hr>
							<div class="">
								<h4><i class="icon-home7 position-left"></i> <span class="text-semibold">Detail Berkas</span></h4>
							</div>
							<!-- ==================================== -->
							<hr>
							<div class="">
								<h4><span class="text-semibold">Detail Berkas SK Golongan III</span></h4>
							</div>
							<hr>
							<table class="table">
							    <tbody>
							        <tr class="success">
							          <th class="col-md-5">Judul </th>
							            <td class="col-md-5">Deskripsi</td>
							        </tr>
							        <tr>
							          <th>Status</th>
							            <td>Tersedia (Berkas fisik ada)</td>
							        </tr>
							        <tr>
							          <th>No.</th>
							            <td><?=$rumah->no_sk?></td>
							        </tr>
							        <tr>
											<th>Tgl.</th>
											<td><?=$rumah->tgl_sk?></td>							        
							        </tr>
							        <tr>
							          <th>Lokasi Berkas</th>
							            <td><?=$rumah->lokasi_sk?></td>
							        </tr>
							    </tbody>
							</table>
							<!-- ==================================== -->
							<hr>
							<div class="">
								<h4><span class="text-semibold">Detail Berkas SIP (Surat Izin Penghunian)</span></h4>
							</div>
							<hr>
							<table class="table">
							    <tbody>
							        <tr class="success">
							          <th class="col-md-5">Judul </th>
							            <td class="col-md-5">Deskripsi</td>
							        </tr>
							        <tr>
							          <th>Status</th>
							            <td>Tidak Tersedia (Berkas fisik tidak ada)</td>
							        </tr>
							        <tr>
							          <th>No.</th>
							            <td><?=$rumah->no_sip?></td>
							        </tr>
							        <tr>
											<th>Tgl.</th>
											<td><?=$rumah->tgl_sip?></td>							        
							        </tr>
							        <tr>
							          <th>Lokasi Berkas</th>
							            <td><?=$rumah->lokasi_sip?></td>
							        </tr>
							    </tbody>
							</table>
							<!-- ==================================== -->

							<!-- ==================================== -->
							<hr>
							<div class="">
								<h4><span class="text-semibold">Detail Berkas Pengalihan Hak</span></h4>
							</div>
							<hr>
							<table class="table">
							    <tbody>
							        <tr class="success">
							          <th class="col-md-5">Judul </th>
							            <td class="col-md-5">Deskripsi</td>
							        </tr>
							        <tr>
							          <th>Status</th>
							            <td>Tidak Tersedia (Berkas fisik tidak ada)</td>
							        </tr>
							        <tr>
							          <th>No. & Tgl.</th>
							            <td><?=$rumah->no_pengalihanhak?></td>
							        </tr>
							        <tr>
											<th>Tgl.</th>
											<td><?=$rumah->tgl_pengalihanhak?></td>							        
							        </tr>
							        <tr>
							          <th>Lokasi Berkas</th>
							            <td><?=$rumah->lokasi_pengalihanhak?></td>
							        </tr>
							    </tbody>
							</table>
							<!-- ==================================== -->

							<!-- ==================================== -->
							<hr>
							<div class="">
								<h4><span class="text-semibold">Detail Berkas Kontrak</span></h4>
							</div>
							<hr>
							<table class="table">
							    <tbody>
							        <tr class="success">
							          <th class="col-md-5">Judul </th>
							            <td class="col-md-5">Deskripsi</td>
							        </tr>
							        <tr>
							          <th>Status</th>
							            <td>Tidak Tersedia (Berkas fisik tidak ada)</td>
							        </tr>
							        <tr>
							          <th>No.</th>
							            <td><?=$rumah->no_kontrak?></td>
							        </tr>
							        <tr>
											<th>Tgl.</th>
											<td><?=$rumah->tgl_kontrak?></td>							        
							        </tr>
							        <tr>
							          <th>Lokasi Berkas</th>
							            <td><?=$rumah->lokasi_kontrak?></td>
							        </tr>
							    </tbody>
							</table>
							<!-- ==================================== -->

							<!-- ==================================== -->
							<hr>
							<div class="">
								<h4><span class="text-semibold">Detail Berkas Hak</span></h4>
							</div>
							<hr>
							<table class="table">
							    <tbody>
							        <tr class="success">
							          <th class="col-md-5">Judul </th>
							            <td class="col-md-5">Deskripsi</td>
							        </tr>
							        <tr>
							          <th>Status</th>
							            <td>Tidak Tersedia (Berkas fisik tidak ada)</td>
							        </tr>
							        <tr>
							          <th>No. & Tgl.</th>
							            <td><?=$rumah->no_hak?></td>
							        </tr>
							        <tr>
											<th>Tgl.</th>
											<td><?=$rumah->tgl_hak?></td>							        
							        </tr>
							        <tr>
							          <th>Lokasi Berkas</th>
							            <td><?=$rumah->lokasi_hak?></td>
							        </tr>
							    </tbody>
							</table>
							<!-- ==================================== -->

							<!-- ==================================== -->
							<hr>
							<div class="">
								<h4><span class="text-semibold">Detail Angsuran</span></h4>
							</div>
							<hr>
							<table class="table">
							    <tbody>
							        <tr class="success">
							          <th class="col-md-5">Judul </th>
							            <td class="col-md-5">Deskripsi</td>
							        </tr>
							        <tr>
							          <th>Angsuran Pertama R<sup>p</sup></th>
							            <td>10.000</td>
							        </tr>
							        <tr>
							          <th>Angsuran Perbulan R<sup>p</sup></th>
							            <td>100.000</td>
							        </tr>
							        <tr>
							          <th>Angsuran Terakhir R<sup>p</sup></th>
							            <td>1.500.000</td>
							        </tr>
							        <tr>
							          <th>Lama Angsuran</th>
							            <td>1.500.000</td>
							        </tr>
							    </tbody>
							</table>
							<!-- ==================================== -->
							
						</div>
					</div>
					<!-- /input group addons -->