				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr align="center">
										<th>No</th>
										<th>Nama</th>
										<th>Role id</th>
										<th>Email</th>
										<th>Shift Kerja</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$no=0; 
										foreach ($dashboard as $query): 
										$no++;?>
										<tr align="center">
											<td><?php echo htmlentities($no);?></td>
											<td><?php echo htmlentities($query->nama);?></td>
											<td><?php echo htmlentities($query->role_id);?></td>
											<td><?php echo htmlentities($query->email);?></td>
											<td><?php echo htmlentities($query->shift_kerja);?></td>
											<td>
											<a href="<?php echo site_url('dashboard/edit_dashboard/'.$query->id_karyawan) ?>"
											 class="btn btn-small">
											<span class="fa fa-edit"></span>Edit</a>
								
											 <a href="<?php echo site_url('dashboard/delete/'.$query->id_karyawan) ?>" class="btn btn-small text-danger">
											<span class="fa fa-trash"></span>Hapus</a>
											</td>
										</tr>
										<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>