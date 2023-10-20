<div class="pcoded-content">
	<!-- Page-header start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10">Transaksi Padi</h5>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Tambah Data Transaksi Padi
						</button>
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
							<h5 class="card-header-text">Informasi Transaksi Padi</h5>
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
												</div>
												<div class="card-block table-border-style">
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th>No</th>
																	<th>Nama Supplier</th>
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
																	if ($value->status_pesan == '0') {

																?>
																		<tr>
																			<td><?= $no++ ?></td>
																			<td><?= $value->nama_supplier ?></td>
																			<td><?= $value->tgl_pesan ?></td>
																			<td>Rp. <?= number_format($value->total_pesan) ?></td>
																			<td><?php
																				if ($value->status_pesan == '0') {
																				?>
																					<span class="badge badge-danger">Belum Bayar</span>
																				<?php
																				} else if ($value->status_pesan == '1') {
																				?>
																					<span class="badge badge-warning">Menunggu Konfirmasi</span>
																				<?php
																				} else if ($value->status_pesan == '2') {
																				?>
																					<span class="badge badge-info">Pesanan Diproses</span>
																				<?php
																				} else if ($value->status_pesan == '3') {
																				?>
																					<span class="badge badge-primary">Pesanan Dikirim</span>
																				<?php
																				} else if ($value->status_pesan == '4') {
																				?>
																					<span class="badge badge-success">Selesai</span>
																				<?php
																				}
																				?>
																			</td>
																			<td class="text-center"> <a href="<?= base_url('Admin/cTransaksiPadi/detail/' . $value->id_pesan) ?>" class="btn waves-effect waves-light btn-warning">
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
																	<th>Nama Supplier</th>
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
																	if ($value->status_pesan == '1') {

																?>
																		<tr>
																			<td><?= $no++ ?></td>
																			<td><?= $value->nama_supplier ?></td>
																			<td><?= $value->tgl_pesan ?></td>
																			<td>Rp. <?= number_format($value->total_pesan) ?></td>
																			<td><?php
																				if ($value->status_pesan == '0') {
																				?>
																					<span class="badge badge-danger">Belum Bayar</span>
																				<?php
																				} else if ($value->status_pesan == '1') {
																				?>
																					<span class="badge badge-warning">Menunggu Konfirmasi</span>
																				<?php
																				} else if ($value->status_pesan == '2') {
																				?>
																					<span class="badge badge-info">Pesanan Diproses</span>
																				<?php
																				} else if ($value->status_pesan == '3') {
																				?>
																					<span class="badge badge-primary">Pesanan Dikirim</span>
																				<?php
																				} else if ($value->status_pesan == '4') {
																				?>
																					<span class="badge badge-success">Selesai</span>
																				<?php
																				}
																				?>
																			</td>
																			<td class="text-center"> <a href="<?= base_url('Admin/cTransaksiPadi/detail/' . $value->id_pesan) ?>" class="btn waves-effect waves-light btn-warning">
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
												</div>
												<div class="card-block table-border-style">
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th>No</th>
																	<th>Nama Supplier</th>
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
																	if ($value->status_pesan == '2') {

																?>
																		<tr>
																			<td><?= $no++ ?></td>
																			<td><?= $value->nama_supplier ?></td>
																			<td><?= $value->tgl_pesan ?></td>
																			<td>Rp. <?= number_format($value->total_pesan) ?></td>
																			<td><?php
																				if ($value->status_pesan == '0') {
																				?>
																					<span class="badge badge-danger">Belum Bayar</span>
																				<?php
																				} else if ($value->status_pesan == '1') {
																				?>
																					<span class="badge badge-warning">Menunggu Konfirmasi</span>
																				<?php
																				} else if ($value->status_pesan == '2') {
																				?>
																					<span class="badge badge-info">Pesanan Diproses</span>
																				<?php
																				} else if ($value->status_pesan == '3') {
																				?>
																					<span class="badge badge-primary">Pesanan Dikirim</span>
																				<?php
																				} else if ($value->status_pesan == '4') {
																				?>
																					<span class="badge badge-success">Selesai</span>
																				<?php
																				}
																				?>
																			</td>
																			<td class="text-center"> <a href="<?= base_url('Admin/cTransaksiPadi/detail/' . $value->id_pesan) ?>" class="btn waves-effect waves-light btn-warning">
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
												</div>
												<div class="card-block table-border-style">
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th>No</th>
																	<th>Nama Supplier</th>
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
																	if ($value->status_pesan == '3') {

																?>
																		<tr>
																			<td><?= $no++ ?></td>
																			<td><?= $value->nama_supplier ?></td>
																			<td><?= $value->tgl_pesan ?></td>
																			<td>Rp. <?= number_format($value->total_pesan) ?></td>
																			<td><?php
																				if ($value->status_pesan == '0') {
																				?>
																					<span class="badge badge-danger">Belum Bayar</span>
																				<?php
																				} else if ($value->status_pesan == '1') {
																				?>
																					<span class="badge badge-warning">Menunggu Konfirmasi</span>
																				<?php
																				} else if ($value->status_pesan == '2') {
																				?>
																					<span class="badge badge-info">Pesanan Diproses</span>
																				<?php
																				} else if ($value->status_pesan == '3') {
																				?>
																					<span class="badge badge-primary">Pesanan Dikirim</span>
																				<?php
																				} else if ($value->status_pesan == '4') {
																				?>
																					<span class="badge badge-success">Selesai</span>
																				<?php
																				}
																				?>
																			</td>
																			<td class="text-center"> <a href="<?= base_url('Admin/cTransaksiPadi/detail/' . $value->id_pesan) ?>" class="btn waves-effect waves-light btn-warning">
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
												</div>
												<div class="card-block table-border-style">
													<div class="table-responsive">
														<table class="table">
															<thead>
																<tr>
																	<th>No</th>
																	<th>Nama Supplier</th>
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
																	if ($value->status_pesan == '4') {

																?>
																		<tr>
																			<td><?= $no++ ?></td>
																			<td><?= $value->nama_supplier ?></td>
																			<td><?= $value->tgl_pesan ?></td>
																			<td>Rp. <?= number_format($value->total_pesan) ?></td>
																			<td><?php
																				if ($value->status_pesan == '0') {
																				?>
																					<span class="badge badge-danger">Belum Bayar</span>
																				<?php
																				} else if ($value->status_pesan == '1') {
																				?>
																					<span class="badge badge-warning">Menunggu Konfirmasi</span>
																				<?php
																				} else if ($value->status_pesan == '2') {
																				?>
																					<span class="badge badge-info">Pesanan Diproses</span>
																				<?php
																				} else if ($value->status_pesan == '3') {
																				?>
																					<span class="badge badge-primary">Pesanan Dikirim</span>
																				<?php
																				} else if ($value->status_pesan == '4') {
																				?>
																					<span class="badge badge-success">Selesai</span>
																				<?php
																				}
																				?>
																			</td>
																			<td class="text-center"> <a href="<?= base_url('Admin/cTransaksiPadi/detail/' . $value->id_pesan) ?>" class="btn waves-effect waves-light btn-warning">
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= base_url('Admin/cTransaksiPadi/create') ?>" method="POST" role="form">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Supplier</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Supplier</label>
									<select class="form-control" name="supplier">
										<option value="">---Pilih Supplier---</option>
										<?php
										foreach ($supplier as $key => $value) {
										?>
											<option value="<?= $value->id_supplier ?>"><?= $value->nama_supplier ?></option>
										<?php
										}
										?>
									</select>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</form>
	</div>
</div>