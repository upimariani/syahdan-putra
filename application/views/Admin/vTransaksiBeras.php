<div class="pcoded-content">
	<!-- Page-header start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10">Transaksi Beras</h5>

					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Page-header end -->
	<div class="pcoded-inner-content">
		<!-- Main-body start -->
		<div class="main-body">
			<div class="page-wrapper">
				<!-- Page-body start -->
				<div class="page-body">
					<div class="card">
						<div class="card-header">
							<h5 class="card-header-text">Informasi Transaksi Beras</h5>
						</div>
						<div class="card-block accordion-block">
							<div id="accordion" role="tablist" aria-multiselectable="true">
								<div class="accordion-panel">
									<div class="accordion-heading" role="tab" id="headingOne">
										<h3 class="card-title accordion-title">
											<a class="accordion-msg waves-effect waves-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Pesanan Belum Bayar
											</a>
										</h3>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
										<div class="accordion-content accordion-desc">
											<div class="card">
												<div class="card-header">
													<h5>Informasi Pesanan Belum Bayar</h5>
													<div class="card-header-right">
														<ul class="list-unstyled card-option">
															<li><i class="fa fa fa-wrench open-card-option"></i></li>
															<li><i class="fa fa-window-maximize full-card"></i></li>
															<li><i class="fa fa-minus minimize-card"></i></li>
															<li><i class="fa fa-refresh reload-card"></i></li>
															<li><i class="fa fa-trash close-card"></i></li>
														</ul>
													</div>
													<?php if ($this->session->userdata('success')) {
													?>
														<div class="alert alert-success alert-dismissible">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
															<h5><i class="ti-check"></i> Alert!</h5>
															<?= $this->session->userdata('success') ?>
														</div>
													<?php
													} ?>
												</div>
												<div class="card-block table-border-style">
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th>No</th>
																	<th>Nama Reseller</th>
																	<th>Tanggal Proses</th>
																	<th>Total Transaksi</th>
																	<th>Status Pesan</th>
																	<th class="text-center">Action</th>
																</tr>
															</thead>
															<tbody>
																<?php
																$no = 1;
																foreach ($transaksi as $key => $value) {
																	if ($value->status_transaksi == '0') {

																?>
																		<tr>
																			<td><?= $no++ ?></td>
																			<td><?= $value->nama_user ?></td>
																			<td><?= $value->tgl_transaksi ?></td>
																			<td>Rp. <?= number_format($value->total_transaksi) ?></td>
																			<td><?php
																				if ($value->status_transaksi == '0') {
																				?>
																					<span class="badge badge-danger">Belum Bayar</span>
																				<?php
																				} else if ($value->status_transaksi == '1') {
																				?>
																					<span class="badge badge-warning">Menunggu Konfirmasi</span>
																				<?php
																				} else if ($value->status_transaksi == '2') {
																				?>
																					<span class="badge badge-info">Pesanan Diproses</span>
																				<?php
																				} else if ($value->status_transaksi == '3') {
																				?>
																					<span class="badge badge-primary">Pesanan Dikirim</span>
																				<?php
																				} else if ($value->status_transaksi == '4') {
																				?>
																					<span class="badge badge-success">Selesai</span>
																				<?php
																				}
																				?>
																			</td>
																			<td class="text-center"> <a href="<?= base_url('Admin/cTransaksiBeras/detail/' . $value->id_transaksi) ?>" class="btn waves-effect waves-light btn-warning">
																					Detail Pesanan
																				</a></td>
																		</tr>

																<?php
																	}
																}
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-panel">
									<div class="accordion-heading" role="tab" id="headingfive">
										<h3 class="card-title accordion-title">
											<a class="accordion-msg waves-effect waves-dark" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
												Menunggu Konfirmasi
											</a>
										</h3>
									</div>
									<div id="collapsefive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingfive">
										<div class="accordion-content accordion-desc">
											<div class="card">
												<div class="card-header">
													<h5>Informasi Pesanan Menunggu Konfirmasi</h5>
													<div class="card-header-right">
														<ul class="list-unstyled card-option">
															<li><i class="fa fa fa-wrench open-card-option"></i></li>
															<li><i class="fa fa-window-maximize full-card"></i></li>
															<li><i class="fa fa-minus minimize-card"></i></li>
															<li><i class="fa fa-refresh reload-card"></i></li>
															<li><i class="fa fa-trash close-card"></i></li>
														</ul>
													</div>
												</div>
												<div class="card-block table-border-style">
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th>No</th>
																	<th>Nama Reseller</th>
																	<th>Tanggal Proses</th>
																	<th>Total Transaksi</th>
																	<th>Status Pesan</th>
																	<th class="text-center">Action</th>
																</tr>
															</thead>
															<tbody>
																<?php
																$no = 1;
																foreach ($transaksi as $key => $value) {
																	if ($value->status_transaksi == '1') {

																?>
																		<tr>
																			<td><?= $no++ ?></td>
																			<td><?= $value->nama_user ?></td>
																			<td><?= $value->tgl_transaksi ?></td>
																			<td>Rp. <?= number_format($value->total_transaksi) ?></td>
																			<td><?php
																				if ($value->status_transaksi == '0') {
																				?>
																					<span class="badge badge-danger">Belum Bayar</span>
																				<?php
																				} else if ($value->status_transaksi == '1') {
																				?>
																					<span class="badge badge-warning">Menunggu Konfirmasi</span>
																				<?php
																				} else if ($value->status_transaksi == '2') {
																				?>
																					<span class="badge badge-info">Pesanan Diproses</span>
																				<?php
																				} else if ($value->status_transaksi == '3') {
																				?>
																					<span class="badge badge-primary">Pesanan Dikirim</span>
																				<?php
																				} else if ($value->status_transaksi == '4') {
																				?>
																					<span class="badge badge-success">Selesai</span>
																				<?php
																				}
																				?>
																			</td>
																			<td class="text-center"> <a href="<?= base_url('Admin/cTransaksiBeras/detail/' . $value->id_transaksi) ?>" class="btn waves-effect waves-light btn-warning">
																					Detail Pesanan
																				</a></td>
																		</tr>

																<?php
																	}
																}
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-panel">
									<div class="accordion-heading" role="tab" id="headingTwo">
										<h3 class="card-title accordion-title">
											<a class="accordion-msg waves-effect waves-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Pesanan Diproses
											</a>
										</h3>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										<div class="accordion-content accordion-desc">
											<div class="card">
												<div class="card-header">
													<h5>Informasi Pesanan Diproses</h5>
													<div class="card-header-right">
														<ul class="list-unstyled card-option">
															<li><i class="fa fa fa-wrench open-card-option"></i></li>
															<li><i class="fa fa-window-maximize full-card"></i></li>
															<li><i class="fa fa-minus minimize-card"></i></li>
															<li><i class="fa fa-refresh reload-card"></i></li>
															<li><i class="fa fa-trash close-card"></i></li>
														</ul>
													</div>
												</div>
												<div class="card-block table-border-style">
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th>No</th>
																	<th>Nama Reseller</th>
																	<th>Tanggal Proses</th>
																	<th>Total Transaksi</th>
																	<th>Status Pesan</th>
																	<th class="text-center">Action</th>
																</tr>
															</thead>
															<tbody>
																<?php
																$no = 1;
																foreach ($transaksi as $key => $value) {
																	if ($value->status_transaksi == '2') {

																?>
																		<tr>
																			<td><?= $no++ ?></td>
																			<td><?= $value->nama_user ?></td>
																			<td><?= $value->tgl_transaksi ?></td>
																			<td>Rp. <?= number_format($value->total_transaksi) ?></td>
																			<td><?php
																				if ($value->status_transaksi == '0') {
																				?>
																					<span class="badge badge-danger">Belum Bayar</span>
																				<?php
																				} else if ($value->status_transaksi == '1') {
																				?>
																					<span class="badge badge-warning">Menunggu Konfirmasi</span>
																				<?php
																				} else if ($value->status_transaksi == '2') {
																				?>
																					<span class="badge badge-info">Pesanan Diproses</span>
																				<?php
																				} else if ($value->status_transaksi == '3') {
																				?>
																					<span class="badge badge-primary">Pesanan Dikirim</span>
																				<?php
																				} else if ($value->status_transaksi == '4') {
																				?>
																					<span class="badge badge-success">Selesai</span>
																				<?php
																				}
																				?>
																			</td>
																			<td class="text-center"> <a href="<?= base_url('Admin/cTransaksiBeras/detail/' . $value->id_transaksi) ?>" class="btn waves-effect waves-light btn-warning">
																					Detail Pesanan
																				</a></td>
																		</tr>

																<?php
																	}
																}
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-panel">
									<div class=" accordion-heading" role="tab" id="headingThree">
										<h3 class="card-title accordion-title">
											<a class="accordion-msg waves-effect waves-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												Pesanan Dikirim
											</a>
										</h3>
									</div>
									<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										<div class="accordion-content accordion-desc">
											<div class="card">
												<div class="card-header">
													<h5>Informasi Pesanan Dikirim</h5>
													<div class="card-header-right">
														<ul class="list-unstyled card-option">
															<li><i class="fa fa fa-wrench open-card-option"></i></li>
															<li><i class="fa fa-window-maximize full-card"></i></li>
															<li><i class="fa fa-minus minimize-card"></i></li>
															<li><i class="fa fa-refresh reload-card"></i></li>
															<li><i class="fa fa-trash close-card"></i></li>
														</ul>
													</div>
												</div>
												<div class="card-block table-border-style">
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th>No</th>
																	<th>Nama Reseller</th>
																	<th>Tanggal Proses</th>
																	<th>Total Transaksi</th>
																	<th>Status Pesan</th>
																	<th class="text-center">Action</th>
																</tr>
															</thead>
															<tbody>
																<?php
																$no = 1;
																foreach ($transaksi as $key => $value) {
																	if ($value->status_transaksi == '3') {

																?>
																		<tr>
																			<td><?= $no++ ?></td>
																			<td><?= $value->nama_user ?></td>
																			<td><?= $value->tgl_transaksi ?></td>
																			<td>Rp. <?= number_format($value->total_transaksi) ?></td>
																			<td><?php
																				if ($value->status_transaksi == '0') {
																				?>
																					<span class="badge badge-danger">Belum Bayar</span>
																				<?php
																				} else if ($value->status_transaksi == '1') {
																				?>
																					<span class="badge badge-warning">Menunggu Konfirmasi</span>
																				<?php
																				} else if ($value->status_transaksi == '2') {
																				?>
																					<span class="badge badge-info">Pesanan Diproses</span>
																				<?php
																				} else if ($value->status_transaksi == '3') {
																				?>
																					<span class="badge badge-primary">Pesanan Dikirim</span>
																				<?php
																				} else if ($value->status_transaksi == '4') {
																				?>
																					<span class="badge badge-success">Selesai</span>
																				<?php
																				}
																				?>
																			</td>
																			<td class="text-center"> <a href="<?= base_url('Admin/cTransaksiBeras/detail/' . $value->id_transaksi) ?>" class="btn waves-effect waves-light btn-warning">
																					Detail Pesanan
																				</a></td>
																		</tr>

																<?php
																	}
																}
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-panel">
									<div class=" accordion-heading" role="tab" id="headingFOur">
										<h3 class="card-title accordion-title">
											<a class="accordion-msg waves-effect waves-dark" data-toggle="collapse" data-parent="#accordion" href="#collapseFOur" aria-expanded="false" aria-controls="collapseFOur">
												Pesanan Selesai
											</a>
										</h3>
									</div>
									<div id="collapseFOur" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFOur">
										<div class="accordion-content accordion-desc">
											<div class="card">
												<div class="card-header">
													<h5>Informasi Pesanan Selesai</h5>
													<div class="card-header-right">
														<ul class="list-unstyled card-option">
															<li><i class="fa fa fa-wrench open-card-option"></i></li>
															<li><i class="fa fa-window-maximize full-card"></i></li>
															<li><i class="fa fa-minus minimize-card"></i></li>
															<li><i class="fa fa-refresh reload-card"></i></li>
															<li><i class="fa fa-trash close-card"></i></li>
														</ul>
													</div>
												</div>
												<div class="card-block table-border-style">
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th>No</th>
																	<th>Nama Reseller</th>
																	<th>Tanggal Proses</th>
																	<th>Total Transaksi</th>
																	<th>Status Pesan</th>
																	<th class="text-center">Action</th>
																</tr>
															</thead>
															<tbody>
																<?php
																$no = 1;
																foreach ($transaksi as $key => $value) {
																	if ($value->status_transaksi == '4') {

																?>
																		<tr>
																			<td><?= $no++ ?></td>
																			<td><?= $value->nama_user ?></td>
																			<td><?= $value->tgl_transaksi ?></td>
																			<td>Rp. <?= number_format($value->total_transaksi) ?></td>
																			<td><?php
																				if ($value->status_transaksi == '0') {
																				?>
																					<span class="badge badge-danger">Belum Bayar</span>
																				<?php
																				} else if ($value->status_transaksi == '1') {
																				?>
																					<span class="badge badge-warning">Menunggu Konfirmasi</span>
																				<?php
																				} else if ($value->status_transaksi == '2') {
																				?>
																					<span class="badge badge-info">Pesanan Diproses</span>
																				<?php
																				} else if ($value->status_transaksi == '3') {
																				?>
																					<span class="badge badge-primary">Pesanan Dikirim</span>
																				<?php
																				} else if ($value->status_transaksi == '4') {
																				?>
																					<span class="badge badge-success">Selesai</span>
																				<?php
																				}
																				?>
																			</td>
																			<td class="text-center"> <a href="<?= base_url('Admin/cTransaksiBeras/detail/' . $value->id_transaksi) ?>" class="btn waves-effect waves-light btn-warning">
																					Detail Pesanan
																				</a></td>
																		</tr>

																<?php
																	}
																}
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Page-body end -->
						</div>
					</div>
					<!-- Main-body end -->

					<div id="styleSelector">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>