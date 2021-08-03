				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/input_barang') ?>"><i class="fas fa-plus"></i> Add New</a>
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
											<a href="<?php echo site_url('barang/edit_barang1/'.$query->id) ?>"
											 class="btn btn-small"> 
											<span class="fa fa-edit"></span>Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('barang/delete/'.$query->id) ?>')"
											 href="#!" class="btn btn-small text-danger">
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