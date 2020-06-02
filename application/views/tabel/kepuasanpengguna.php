<div class="col-sm-9">
			<nav>        
				<div class="col-12-ml">
					<ul class='breadcrumb'>
					<li><h6>Tabel Kepuasan Pengguna Lulusan</h6></li>
					</ul>
				</div>
			</nav>

			<div id="wrapper">

				<div id="content-wrapper">

					<div class="container-fluid">

						<!-- DataTables -->
						<div class="card mb-3">
							<div class="card-header">
								
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
										<thead style="text-align: center;">
											<tr>
												<th rowspan='2' style="text-align:center; padding-bottom:35px">Jenis Kemampuan</th>
                                                <th colspan='4' style="text-align:center; padding-bottom:35px">Tingkat Kepuasan Pengguna (%)</th>	
                                                <th rowspan='2' style="text-align:center; padding-bottom:35px">Rencana Tindak Lanjut oleh UPPS/PS</th>		
                                            </tr>
                                            <tr>
                                                <th>Sangat Baik</th>			
                                                <th>Baik</th>
                                                <th>Cukup</th>
                                                <th>Kurang</th>
                                            </tr>
										</thead>
										<tbody style="text-align: center;">
											<?php foreach ($kepuasanpengguna as $data): ?>
											<tr>
												<td width="150">
													<?php echo $data->jenisKemampuan ?>
												</td>
												<td>
													<?php echo $data->sangatBaik ?>
												</td>
												<td>
													<?php echo $data->baik ?>
												</td>
                                                <td>
													<?php echo $data->cukup ?>
                                                </td>
                                                <td>
													<?php echo $data->kurang ?>
                                                </td>
                                                <td>
													<?php echo $data->rencanaTindakLanjut ?>
                                                </td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>

					</div>
					<!-- /.container-fluid -->


					<!-- Sticky Footer -->

				</div>
				<!-- /.content-wrapper -->

			</div>
			<!-- /#wrapper -->
		</div> 
	</div>
</body>