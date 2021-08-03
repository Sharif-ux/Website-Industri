
        <div id="content-wrapper">

            <div class="container-fluid">

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?= base_url('admin/barang'); ?>"> <i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo base_url('admin/add_barang') ?>" method="post" enctype="multipart/form-data" >

                             <div class="form-group">
                                <label for="nama_barang">Nama barang</label>
                                <input class="form-control <?php echo form_error('nama_barang') ? 'is-invalid':'' ?>"
                                 type="text" name="nama_barang" placeholder="Nama Barang" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_barang') ?>
                                </div>
                            </div>

                           <div class="form-group">
                                <label for="id_gudang">ID Gudang</label>
                                <select name="id_gudang" id="id_gudang" class ="form-control">
                                <option value="">PILIH Gudang</option>
                                <?php foreach ($gudang as $gdng ) :{ ?>
                                      <option value="<?=$gdng['id'];?>"><?=$gdng['id'];?><?=$gdng['nama_gudang'];?></option>
                                <?php } endforeach ?>
                                </select>
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_gudang') ?>
                                </div>
                            </div>


                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>

                    </div> 

                    <div class="card-footer small text-muted">
                        * required fields
                    </div>