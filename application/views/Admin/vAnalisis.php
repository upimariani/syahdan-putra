<div class="pcoded-content">
	<!-- Page-header start -->
	<div class="page-header">
		<div class="page-block">
			<div class="row align-items-center">
				<div class="col-md-8">
					<div class="page-header-title">
						<h5 class="m-b-10">Analisis Permintaan Beras</h5>

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
								<table class="myTable table">
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
												<td class="text-center"> <a href="<?= base_url('Admin/cAnalisis/viewdetail/' . $value->id_beras) ?>" class="btn waves-effect waves-light btn-warning">
														Analisis Beras
													</a> </td>
											</tr>

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