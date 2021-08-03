				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/input_pengiriman') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>No</th>
										<th>Kendaraan</th>
										<th>supir</th>
										<th>barang</th>
										<th>Alamat</th>
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
											<a href="<?php echo site_url('admin/edit_pengiriman/'.$query->id) ?>"
											 class="btn btn-small">
											<span class="fa fa-edit"></span>Edit</a>
											<a href="<?php echo site_url('pengiriman/delete/'.$query->id) ?>" class="btn btn-small text-danger">
											<span class="fa fa-trash"></span>Hapus</a>
											</td>
										</tr>
										<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
											<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>