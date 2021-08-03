				<div class="card mb-3">
					<div class="card-header">
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr align="center">
										<th>No</th>
										<th>Barang</th>
										<th>Gudang</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$no=0; 
										foreach ($barang as $query): 
										$no++;?>
										<tr align="center">
											<td><?php echo htmlentities($no);?></td>
											<td><?php echo htmlentities($query->nama_barang);?></td>
											<td><?php echo htmlentities($query->id_gudang);?></td>
											<td>
										</tr>
										<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>