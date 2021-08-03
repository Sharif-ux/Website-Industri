	<div id="content-wrapper">

			<div class="container-fluid">

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?= base_url('pengiriman/index'); ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo base_url('pengiriman/edit') ?>" method="post" enctype="multipart/form-data" >
							<input type="hidden" name="id" value="<?php echo $pengiriman->id?>" />
								<div class="form-group">
                                <label for="id_kendaraan">ID kendaraan</label>
                                <select name="id_kendaraan" id="id_kendaraan" class ="form-control">
                                <option value="">PILIH KENDARAAN</option>
                                <?php foreach ($kendaraan as $kend ) :{ ?>
                                      <option value="<?=$kend['id'];?>"><?=$kend['id'];?>-<?=$kend['id'];?></option>
                                <?php } endforeach ?> 
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_kendaraan') ?>
                                </div>
                            </div>

							<div class="form-group">
								<label for="id_supir">Supir</label>
								<input class="form-control <?php echo form_error('id_supir') ? 'is-invalid':'' ?>"
								 type="text" name="id_supir" min="0" placeholder="Supir" value="<?php echo $pengiriman->id_supir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="id_barang">Barang</label>
								<input class="form-control <?php echo form_error('id_barang') ? 'is-invalid':'' ?>"
								 type="text" name="id_barang" min="0" placeholder="Barang" value="<?php echo $pengiriman->id_barang ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_barang') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" min="0" placeholder="Alamat" value="<?php echo $pengiriman->alamat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div> ss

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>
					</div>