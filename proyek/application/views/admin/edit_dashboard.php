	<div id="content-wrapper">

			<div class="container-fluid">


				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('admin/dashboard'); ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo base_url('dashboard/edit_karyawan') ?>" method="post" enctype="multipart/form-data" >
							<input type="text" name="id" hidden="hidden" value="<?php echo $pengiriman->id_karyawan ?>">
							<div class="form-group">
								<label for="nama_karyawan">nama_karyawan</label>

								<input class="form-control <?php echo form_error('nama_karyawan') ? 'is-invalid':'' ?>"
								 type="text" name="nama_karyawan" placeholder="Nama karyawan" value="<?php echo $pengiriman->nama?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_karyawan') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="role_id">role id</label>			
								<input class="form-control <?php echo form_error('role_id') ? 'is-invalid':'' ?>"
								 type="int" name="role_id" placeholder="role id" value="<?php echo $pengiriman->role_id?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_karyawan') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="email">email</label>			
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" placeholder="email" value="<?php echo $pengiriman->email?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('email') ?>
								</div>
							</div>
							<div class="form-group">
								<label for="shift_kerja">shift_kerja</label>
								<input class="form-control <?php echo form_error('shift_kerja') ? 'is-invalid':'' ?>"
								 type="text" name="shift_kerja" placeholder="shift_kerja" value="<?php echo $pengiriman->shift_kerja?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('shift_kerja') ?>
								</div>
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="save"/>
						</form>
						
					</div>

					
					<div class="card-footer small text-muted">
						* required fields
					</div>

