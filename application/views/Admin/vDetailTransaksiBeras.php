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
													<?= $transaksi['transaksi']->nama_user ?>
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
													<strong><?= $transaksi['transaksi']->alamat ?></strong><br>

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
																<td><?= $value->kg_beras ?></td>
																<td><?= $value->nama_beras ?></td>
																<td>Rp. <?= number_format($value->harga_beras)  ?></td>
																<td>Rp. <?= number_format($value->harga_beras * $value->kg_beras)  ?></td>
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
												if ($transaksi['transaksi']->status_transaksi == '0') {
												?>
													<?php echo form_open_multipart('Reseller/cTransaksiBeras/bayar/' . $transaksi['transaksi']->id_transaksi); ?>
													<label>Pembayaran</label>
													<input type="file" name="bayar" class="form-control">
													<button type="submit" class="btn btn-success mt-3">Submit
														Payment
													</button>
													</form>
												<?php
												} else {
												?>
													<img class="mb-5" style="width: 150px;" src="<?= base_url('asset/pembayaran/' . $transaksi['transaksi']->bukpem_transaksi)  ?>">
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
															<td>Rp. <?= number_format($transaksi['transaksi']->total_transaksi)  ?></td>
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
												if ($transaksi['transaksi']->status_transaksi == '1') {
												?>
													<a href="<?= base_url('Admin/cTransaksiBeras/konfirmasi/' . $transaksi['transaksi']->id_transaksi) ?>" class="mt-5 btn btn-warning"> Konfirmasi Pesanan</a>

												<?php
												} else if ($transaksi['transaksi']->status_transaksi == '2') {
												?>
													<a href="<?= base_url('Admin/cTransaksiBeras/dikirim/' . $transaksi['transaksi']->id_transaksi) ?>" class="mt-5 btn btn-info"> Pesanan Dikirim</a>

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
