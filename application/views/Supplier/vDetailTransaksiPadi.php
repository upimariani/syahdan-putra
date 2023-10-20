<div class="pcoded-content">
	<!-- Page-header start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10">Transaksi Padi</h5>

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
					<div class="row">
						<div class="card">
							<div class="card-body">
								<div class="col-lg-12">
									<!-- Main content -->
									<div class="invoice p-3 mb-3">
										<!-- title row -->
										<div class="row">
											<div class="col-12">
												<h4>
													AdminLTE, Inc.
													<small class="float-right">Date: <?= date('Y-m-d') ?></small>
												</h4>
											</div>
											<!-- /.col -->
										</div>
										<!-- info row -->
										<div class="row invoice-info">
											<div class="col-sm-4 invoice-col">
												From
												<address>
													<strong>Admin, Inc.</strong><br>

												</address>
											</div>
											<!-- /.col -->

											<!-- /.col -->
										</div>
										<!-- /.row -->

										<!-- Table row -->
										<div class="row">
											<div class="col-12 table-responsive">
												<table class="table table-striped">
													<thead>
														<tr>
															<th>No.</th>
															<th>Qty</th>
															<th>Product</th>
															<th>Harga</th>
															<th>Subtotal</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$no = 1;
														foreach ($transaksi['detail'] as $key => $value) {
														?>
															<tr>
																<td><?= $no++ ?></td>
																<td><?= $value->kg_padi ?></td>
																<td><?= $value->nama_padi ?></td>
																<td>Rp. <?= number_format($value->harga)  ?></td>
																<td>Rp. <?= number_format($value->harga * $value->kg_padi)  ?></td>
															</tr>
														<?php
														}
														?>


													</tbody>
												</table>
											</div>
											<!-- /.col -->
										</div>
										<!-- /.row -->

										<div class="row">
											<!-- accepted payments column -->
											<div class="col-6">
												<?php
												if ($transaksi['transaksi']->status_pesan == '0') {
												?>

												<?php
												} else {
												?>
													<img class="mb-5" style="width: 150px;" src="<?= base_url('asset/pembayaran/' . $transaksi['transaksi']->bukti_pembayaran)  ?>">
												<?php
												}
												?>

											</div>
											<!-- /.col -->
											<div class="col-6">
												<p class="lead">Amount Due <?= date('Y-m-d') ?></p>

												<div class="table-responsive">
													<table class="table">
														<tr>
															<th>Total:</th>
															<td>Rp. <?= number_format($transaksi['transaksi']->total_pesan)  ?></td>
														</tr>
													</table>
												</div>
											</div>
											<!-- /.col -->
										</div>
										<!-- /.row -->

										<!-- this row will not appear when printing -->
										<div class="row no-print">
											<div class="col-12">

												<?php
												if ($transaksi['transaksi']->status_pesan == '1') {
												?>
													<a href="<?= base_url('Supplier/cTransaksiPadi/konfirmasi/' . $transaksi['transaksi']->id_pesan) ?>" class="mt-5 btn btn-warning"> Konfirmasi Pesanan</a>

												<?php
												} else if ($transaksi['transaksi']->status_pesan == '2') {
												?>
													<a href="<?= base_url('Supplier/cTransaksiPadi/dikirim/' . $transaksi['transaksi']->id_pesan) ?>" class="mt-5 btn btn-info"> Pesanan Dikirim</a>

												<?php
												}
												?>
											</div>
										</div>
									</div>
									<!-- /.invoice -->
								</div><!-- /.col -->
							</div>
						</div>

					</div><!-- /.row -->
				</div>

				<div id="styleSelector">

				</div>
			</div>
		</div>
	</div>
</div>
</div>