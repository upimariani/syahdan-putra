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
						<div class="col-md-5 col-lg-5">
							<div class="card">
								<div class="card-header">
									<h5>Transaksi Padi</h5>
									<!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
								</div>
								<div class="card-block">
									<form action="<?= base_url('Admin/cTransaksiPadi/addtocart') ?>" method="POST" class="form-material" role="form">
										<div class="card-body">

											<div class="row">
												<div class="col-lg-12">
													<div class="form-group">
														<input type="hidden" name="id_supplier" value="<?= $id_supplier ?>">
														<label for="exampleInputEmail1">Pesan</label>
														<select class="form-control" id="bb" name="padi" required>
															<option value="">---Pilih Padi---</option>
															<?php
															foreach ($bb as $key => $value) {
															?>
																<option data-nama="<?= $value->nama_padi ?>" data-harga="<?= $value->harga ?>" data-stok="<?= $value->stok_padi ?>" value="<?= $value->id_padi ?>"><?= $value->nama_padi ?></option>
															<?php
															}
															?>

														</select>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label for="exampleInputEmail1">Nama Padi</label>
														<input type="text" name="nama" class="nama form-control" id="exampleInputEmail1" readonly>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label for="exampleInputPassword1">Harga Padi</label>
														<input type="number" name="harga" class="harga form-control" id="exampleInputPassword1" readonly>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-lg-6">
													<div class="form-group">
														<label for="exampleInputEmail1">Stok Supplier</label>
														<input type="text" name="stok" class="stok form-control" id="exampleInputEmail1" readonly>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label for="exampleInputPassword1">Quantity Pesan</label>
														<input type="number" name="qty" class="form-control" id="exampleInputPassword1" required>
													</div>
												</div>
											</div>
										</div>
										<!-- /.card-body -->

										<div class="card-footer">
											<button type="submit" class="btn btn-primary"><i class="ti-shopping-cart"></i>Add To Cart</button>
											<a href="<?= base_url('Admin/cTransaksiPadi') ?>" class="btn btn-danger"><i class="ti-close"></i> Kembali</a>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-lg-7">
							<div class="card">
								<div class="card-header">
									<h3 class="card-title">Informasi Keranjang</h3>
								</div>
								<!-- /.card-header -->
								<div class="card-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Nama</th>
												<th>Harga</th>
												<th>Quantity</th>
												<th>Subtotal</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 1;
											foreach ($this->cart->contents() as $key => $value) {
											?>
												<tr>
													<td><?= $no++ ?>.</td>
													<td><?= $value['name'] ?></td>
													<td>Rp. <?= number_format($value['price'])  ?></td>
													<td><span class="badge bg-danger"><?= $value['qty'] ?></span></td>
													<td>Rp. <?= number_format($value['price'] * $value['qty'])  ?></td>
													<td><a href="<?= base_url('Admin/cTransaksiPadi/hapus/' . $value['rowid'] . '/' . $id_supplier) ?>" class="btn btn-danger btn-sm"><i class="ti-trash"></i></a></td>

												</tr>

											<?php
											}
											?>
											<form action="<?= base_url('Admin/cTransaksiPadi/selesai') ?>" method="POST">
												<input type="hidden" name="id_supplier" value="<?= $id_supplier ?>">

												<tr>
													<td><button type="submit" class="btn btn-success btn-sm"><i class="ti-angle-right"></i> Selesai</button></td>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
													<td>Total: </td>
													<td><strong>Rp.<?= number_format($this->cart->total())  ?></strong></td>
												</tr>
											</form>
										</tbody>
									</table>
								</div>
								<!-- /.card-body -->
							</div>
						</div>
					</div>
				</div>

				<div id="styleSelector">

				</div>
			</div>
		</div>
	</div>
</div>
</div>