<div class="pcoded-content">
	<!-- Page-header start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10">Beras</h5>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Tambah Data Beras
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
					<!-- Basic table card start -->
					<div class="card">
						<div class="card-header">
							<h5>Beras</h5>
							<!-- Button trigger modal -->

							<span>Informasi Beras</span>
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
											<th>Nama Beras</th>
											<th>Nama Padi</th>
											<th>Jenis Beras</th>
											<th>Harga Beras / kg</th>
											<th>Stok Beras</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($beras as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $value->nama_beras ?></td>
												<td><?= $value->nama_padi ?></td>
												<td><?= $value->jenis_beras ?></td>
												<td>Rp. <?= number_format($value->harga_beras) ?></td>
												<td><?= $value->stok_beras ?></td>
												<td class="text-center"> <a href="<?= base_url('Admin/cKelolaDataMaster/deteleberas/' . $value->id_beras) ?>" class="btn waves-effect waves-light btn-danger">
														Hapus Beras
													</a> <button type="button" data-toggle="modal" data-target="#edit<?= $value->id_beras ?>" class="btn waves-effect waves-light btn-warning">
														Edit Beras
													</button></td>
											</tr>
											<!-- Modal -->
											<div class="modal fade" id="edit<?= $value->id_beras ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<form action="<?= base_url('Admin/cKelolaDataMaster/updateberas/' . $value->id_beras) ?>" method="POST" role="form">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">Update Data Beras</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">

																<div class="card-body">
																	<div class="row">
																		<div class="col-lg-6">
																			<div class="form-group">
																				<label for="exampleInputEmail1">Nama Padi</label>
																				<select class="form-control" name="padi" required>
																					<option value="">---Pilih Padi---</option>
																					<?php
																					foreach ($padi as $key => $data) {
																					?>
																						<option value="<?= $data->id_padi ?>" <?php if ($value->id_padi == $data->id_padi) {
																																	echo 'selected';
																																} ?>><?= $data->nama_padi ?></option>
																					<?php
																					}
																					?>
																				</select>
																			</div>
																		</div>
																		<div class="col-lg-6">
																			<div class="form-group">
																				<label for="exampleInputPassword1">Nama Beras</label>
																				<input type="text" name="nama" value="<?= $value->nama_beras ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama Beras" required>

																			</div>
																		</div>
																	</div>


																	<div class="form-group">
																		<label for="exampleInputEmail1">Jenis Beras</label>
																		<input type="text" name="jenis" value="<?= $value->jenis_beras ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Jenis Beras" required>

																	</div>
																	<div class="row">
																		<div class="col-lg-6">
																			<div class="form-group">
																				<label for="exampleInputEmail1">Harga /kg</label>
																				<input type="text" name="harga" value="<?= $value->harga_beras ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Harga /kg" required>

																			</div>
																		</div>
																		<div class="col-lg-6">
																			<div class="form-group">
																				<label for="exampleInputEmail1">Stok Beras</label>
																				<input type="text" name="stok" value="<?= $value->stok_beras ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Stok Beras" required>

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
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Basic table card end -->
					<!-- Inverse table card start -->

					<!-- Background Utilities table end -->
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
		<form action="<?= base_url('Admin/cKelolaDataMaster/createberas') ?>" method="POST" role="form">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data Beras</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="card-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Padi</label>
									<select class="form-control" name="padi" required>
										<option value="">---Pilih Padi---</option>
										<?php
										foreach ($padi as $key => $data) {
										?>
											<option value="<?= $data->id_padi ?>"><?= $data->nama_padi ?></option>
										<?php
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputPassword1">Nama Beras</label>
									<input type="text" name="nama" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Nama Beras" required>

								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="exampleInputEmail1">Jenis Beras</label>
							<input type="text" name="jenis" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Jenis Beras" required>

						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Harga /kg</label>
									<input type="text" name="harga" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Harga /kg" required>

								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Stok Beras</label>
									<input type="text" name="stok" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Stok Beras" required>

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