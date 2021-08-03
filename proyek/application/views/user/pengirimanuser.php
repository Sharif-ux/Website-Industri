<div class="card mb-3">
					<div class="card-header">
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr align="center">
										<tr>
										<th>No</th>
										<th>Kendaraan</th>
										<th>Supir</th>
										<th>barang</th>
										<th>Alamat</th>
									</tr>
									</tr>
								</thead>
								<tbody>
									<?php
										$no=0; 
										foreach ($pengiriman as $query): 
										$no++;?>
										<tr align="center">
											<td><?php echo htmlentities($no);?></td>
											<td><?php echo htmlentities($query->id_kendaraan);?></td>
											<td><?php echo htmlentities($query->id_supir);?></td>
											<td><?php echo htmlentities($query->id_barang);?></td>
											<td><?php echo htmlentities($query->alamat);?></td>
											<td>
											</td>
										</tr>
										<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</