<div class="pcoded-content">
	<!-- Page-header start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10">User</h5>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Tambah Data User
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
							<h5>User</h5>
							<!-- Button trigger modal -->

							<span>Informasi akun user</span>
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
											<th>Nama User</th>
											<th>Alamat User</th>
											<th>No Telepon</th>
											<th>Username</th>
											<th>Password</th>
											<th>Level User</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($user as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $value->nama_user ?></td>
												<td><?= $value->alamat ?></td>
												<td><?= $value->no_tlpon ?></td>
												<td><?= $value->username ?></td>
												<td><?= $value->password ?></td>
												<td><?php if ($value->type_user == '1') {
														echo '<span class="badge badge-warning">Admin</span>';
													} else {
														echo '<span class="badge badge-danger">Pimpinan</span>';
													} ?></td>
												<td class="text-center"> <a href="<?= base_url('Admin/cKelolaDataMaster/deleteuser/' . $value->id_user) ?>" class="btn waves-effect waves-light btn-danger">
														Hapus User
													</a> <button type="button" data-toggle="modal" data-target="#edit<?= $value->id_user ?>" class="btn waves-effect waves-light btn-warning">
														Edit User
													</button></td>
											</tr>
											<!-- Modal -->
											<div class="modal fade" id="edit<?= $value->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<form action="<?= base_url('Admin/cKelolaDataMaster/updateuser/' . $value->id_user) ?>" method="POST" role="form">
														<div class="modal-content">
															<div class="modal-header">
																<h5 class="modal-title" id="exampleModalLabel">Update Data User</h5>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
															</div>
															<div class="modal-body">

																<div class="card-body">
																	<div class="row">
																		<div class="col-lg-6">
																			<div class="form-group">
																				<label for="exampleInputEmail1">Nama User</label>
																				<input type="text" name="nama" value="<?= $value->nama_user ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama user" required>
																				<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
																			</div>
																		</div>
																		<div class="col-lg-6">
																			<div class="form-group">
																				<label for="exampleInputPassword1">No Telepon</label>
																				<input type="number" name="no_hp" value="<?= $value->no_tlpon ?>" class="form-control" id="exampleInputPassword1" placeholder="Masukkan no telepon" required>
																				<?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
																			</div>
																		</div>
																	</div>


																	<div class="form-group">
																		<label for="exampleInputEmail1">Alamat</label>
																		<input type="text" name="alamat" class="form-control" value="<?= $value->alamat ?>" id="exampleInputEmail1" placeholder="Masukkan alamat" required>
																		<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
																	</div>
																	<div class="row">
																		<div class="col-lg-6">
																			<div class="form-group">
																				<label for="exampleInputEmail1">Username</label>
																				<input type="text" name="username" value="<?= $value->username ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan username" required>
																				<?= form_error('username', '<small class="text-danger">', '</small>') ?>
																			</div>
																		</div>
																		<div class="col-lg-6">
																			<div class="form-group">
																				<label for="exampleInputEmail1">Password</label>
																				<input type="text" name="password" value="<?= $value->password ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan password" required>
																				<?= form_error('password', '<small class="text-danger">', '</small>') ?>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="form-group">
																			<label for="exampleInputEmail1">Type User</label>
																			<select class="form-control" name="type" required>
																				<option value="">---Pilih Type User---</option>
																				<option value="1" <?php if ($value->type_user == '1') {
																										echo 'selected';
																									} ?>>Admin</option>
																				<option value="2" <?php if ($value->type_user == '2') {
																										echo 'selected';
																									} ?>>Pimpinan</option>
																			</select>
																			<?= form_error('type', '<small class="text-danger">', '</small>') ?>
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
		<form action="<?= base_url('Admin/cKelolaDataMaster/createuser') ?>" method="POST" role="form">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="card-body">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="exampleInputEmail1">Nama User</label>
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
						<div class="col-lg-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Type User</label>
								<select class="form-control" name="type" required>
									<option value="">---Pilih Type User---</option>
									<option value="1">Admin</option>
									<option value="2">Pimpinan</option>
								</select>
								<?= form_error('type', '<small class="text-danger">', '</small>') ?>
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