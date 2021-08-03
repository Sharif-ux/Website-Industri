
		<div id="content-wrapper">

			<div class="container-fluid">


				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
				<?php 
					
				?>


				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('admin/barang'); ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">
						<form action="<?php echo base_url('barang/edit_barang') ?>" method="post" enctype="multipart/form-data" >
							<input type="text" hidden="hidden" name="id"  value="<?php echo $barang->id?>" /> 
							<div class="form-group">
								<label for="nama barang">Name barang</label>
								<input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid':'' ?>"
								 type="text" name="nama_barang" placeholder="Nama barang" value="<?php echo $barang->nama_barang ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_barang') ?>
								</div>
								<label for="nama barang">id_gudang</label>
								<input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid':'' ?>"
								 type="text" name="id_gudang" placeholder="Id Gudang" value="<?php echo $barang->id_gudang ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('id_gudang') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					
					<div class="card-footer small text-muted">
						* required fields
					</div>
 