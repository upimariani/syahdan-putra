<div class="pcoded-content">
	<!-- Page-header start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10">Supplier</h5>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Tambah Data Supplier
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
							<h5>Supplier</h5>
							<!-- Button trigger modal -->

							<span>Informasi Supplier</span>

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
											<th>Nama Supplier</th>
											<th>Alamat Supplier</th>
											<th>No Telepon</th>
											<th>Username</th>
											<th>Password</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($supplier as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $value->nama_supplier ?></td>
												<td><?= $value->alamat_supplier ?></td>
												<td><?= $value->no_hp_supplier ?></td>
												<td><?= $value->username_supp ?></td>
												<td><?= $value->pass_supp ?></td>
												<td class="text-center"> <a href="<?= base_url('Admin/cKelolaDataMaster/detelesupplier/' . $value->id_supplier) ?>" class="btn waves-effect waves-light btn-danger">
														Hapus Supplier
													</a> <button type="button" data-toggle="modal" data-target="#edit<?= $value->id_supplier ?>" class="btn waves-effect waves-light btn-warning">
														Edit Supplier
													</button></td>
											</tr>
											<!-- Modal -->
											<div class="modal fade" id="edit<?= $value->id_supplier ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<form action="<?= base_url('Admin/cKelolaDataMaster/updatesupplier/' . $value->id_supplier) ?>" method="POST" role="form">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">Update Data Supplier</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">
																<div class="card-body">
																	<div class="row">
																		<div class="col-lg-6">
																			<div class="form-group">
																				<label for="exampleInputEmail1">Nama Supplier</label>
																				<input type="text" name="nama" value="<?= $value->nama_supplier ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama user" required>
																				<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
																			</div>
																		</div>
																		<div class="col-lg-6">
																			<div class="form-group">
																				<label for="exampleInputPassword1">No Telepon</label>
																				<input type="number" name="no_hp" value="<?= $value->no_hp_supplier ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan no telepon" required>
																				<?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
																			</div>
																		</div>
																	</div>
																	<div class="form-group">
																		<label for="exampleInputEmail1">Alamat</label>
																		<input type="text" name="alamat" class="form-control" value="<?= $value->alamat_supplier ?>" id="exampleInputEmail1" placeholder="Masukkan alamat" required>
																		<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
																	</div>
																	<div class="row">
																		<div class="col-lg-6">
																			<div class="form-group">
																				<label for="exampleInputEmail1">Username</label>
																				<input type="text" name="username" class="form-control" value="<?= $value->username_supp ?>" id="exampleInputEmail1" placeholder="Masukkan username" required>
																				<?= form_error('username', '<small class="text-danger">', '</small>') ?>
																			</div>
																		</div>
																		<div class="col-lg-6">
																			<div class="form-group">
																				<label for="exampleInputEmail1">Password</label>
																				<input type="text" name="password" value="<?= $value->pass_supp ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan password" required>
																				<?= form_error('password', '<small class="text-danger">', '</small>') ?>
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
		<form action="<?= base_url('Admin/cKelolaDataMaster/createsupplier') ?>" method="POST" role="form">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data Supplier</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="card-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama Supplier</label>
									<input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama user" required>
									<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputPassword1">No Telepon</label>
									<input type="number" name="no_hp" class="form-control" id="exampleInputPassword1" placeholder="Masukkan no telepon" required>
									<?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="exampleInputEmail1">Alamat</label>
							<input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Masukkan alamat" required>
							<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Username</label>
									<input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukkan username" required>
									<?= form_error('username', '<small class="text-danger">', '</small>') ?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Password</label>
									<input type="text" name="password" class="form-control" id="exampleInputEmail1" placeholder="Masukkan password" required>
									<?= form_error('password', '<small class="text-danger">', '</small>') ?>
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