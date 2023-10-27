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
								<table class="table table-bordered">
									<thead>
										<tr>
											<th style="width: 10px">#</th>
											<th>Periode</th>
											<th>Permintaan</th>
											<!-- <th>Proses Analisis Forecast</th> -->
											<th style="width: 40px">Forecast</th>
											<th>Percentage Error (PE)</th>

										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($periode as $key => $value) {

										?>
											<tr>
												<td><?= $no++ ?>.</td>
												<td><?php
													if ($value->bulan == '1') {
														echo 'Januari ';
													} else if ($value->bulan == '2') {
														echo 'Februari ';
													} else if ($value->bulan == '3') {
														echo 'Maret ';
													} else if ($value->bulan == '4') {
														echo 'April ';
													} else if ($value->bulan == '5') {
														echo 'Mei ';
													} else if ($value->bulan == '6') {
														echo 'Juni ';
													} else if ($value->bulan == '7') {
														echo 'Juli ';
													} else if ($value->bulan == '8') {
														echo 'Agustus ';
													} else if ($value->bulan == '9') {
														echo 'September ';
													} else if ($value->bulan == '10') {
														echo 'Oktober ';
													} else if ($value->bulan == '11') {
														echo 'November ';
													} else if ($value->bulan == '12') {
														echo 'Desember ';
													}
													?></td>
												<td><?= $value->qty ?></td>
												<?php
												$forecast = $this->db->query("SELECT SUM(kg_beras) as qty, detail_transaksi.id_beras, MONTH(tgl_transaksi) as bulan FROM `transaksi_beras` JOIN detail_transaksi ON transaksi_beras.id_transaksi=detail_transaksi.id_transaksi WHERE id_beras='" . $value->id_beras . "' AND MONTH(tgl_transaksi) < '" . $value->bulan . "' GROUP BY id_beras, MONTH(tgl_transaksi) ORDER BY MONTH(tgl_transaksi) DESC LIMIT 3")->result();
												$hasil = 0;
												$bobot = 3;


												$rekomendasi = 0;
												if ($value->bulan > 3) {
												?>
													<!-- <td> -->
													<?php
													foreach ($forecast as $key => $item) {
														$hasil += (($item->qty * $bobot--));
													}
													$hasil_forecast = $hasil / 6;
													// $hasil . '/ 6';
													$rekomendasi = $hasil_forecast;
													?>
													<!-- </td> -->
													<td><span class="badge bg-danger"><?= round($hasil_forecast) ?></span></td>

													<?php
													$pe = round((($value->qty - round($hasil_forecast)) / $value->qty) * 100, 2);
													$jml_pe[] = $pe;
													?>
													<td><?= $pe ?>%</td>

												<?php
												}

												?>

											</tr>
										<?php
										}
										?>
									</tbody>
									<tfoot>
										<?php
										$total = 0;
										for ($pe = 0; $pe  < sizeof($jml_pe); $pe++) {
											$total += $jml_pe[$pe];
										}
										?>
										<tr>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td><strong>MAPE %</strong></td>
											<td><?= round($total / 12) ?></td>
										</tr>
									</tfoot>
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