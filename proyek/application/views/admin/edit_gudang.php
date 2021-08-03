
		<div id="content-wrapper">

			<div class="container-fluid">


				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('admin/gudang'); ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo base_url('gudang/edit_data') ?>" method="post" enctype="multipart/form-data" >
							<input type="text" name="id" hidden="hidden" value="<?php echo $gudang->id ?>">
							<div class="form-group">
								<label for="nama_kendaraan">Name gudang</label>
								<input class="form-control <?php echo form_error('nama_gudang') ? 'is-invalid':'' ?>"
								 type="text" name="nama_gudang" placeholder="Nama gudang" value="<?php echo $gudang->nama_gudang ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_gudang') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					
					<div class="card-footer small text-muted">
						* required fields
					</div>
