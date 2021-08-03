<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body id="page-top">

    <div id="wrapper">


        <div id="content-wrapper">
 
            <div class="container-fluid">

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?= base_url('admin/pengiriman'); ?>"> <i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo base_url('admin/add_pengiriman') ?>" method="post" enctype="multipart/form-data" >
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
                                <label for="supir">Supir</label>
                                <select name="supir" id="supir" class ="form-control">
                                <option value="">PILIH supir</option>
                                <?php foreach ($supir as $supir ) :{ ?>
                                      <option value="<?=$supir['id_karyawan'];?>"><?=$supir['id_karyawan'];?>-<?=$supir['nama'];?></option>
                                <?php } endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="barang">Barang</label>
                                <select name="barang" id="barang" class ="form-control">
                                <option value="">PILIH barang</option>
                                <?php foreach ($barang as $barang ) :{ ?>
                                      <option value="<?=$barang['id'];?>"><?=$barang['id'];?>-<?=$barang['nama_barang'];?></option>
                                <?php } endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
                                 type="text" name="alamat" placeholder="Alamat" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>

                    </div>

                    <div class="card-footer small text-muted">
                        * required fields
                    </div>


</body>

</html>