<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('penerbit/save') ?>">
<input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>"/>
<div>
    <label></label>
    <div>
    <h3>Tambah/Ubah Penerbit</h3>
    </div>
</div>
<div class="row mb-3">
<label class="form-label">Nama Penerbit</label>
<div class="col-sm-6">
<input class="form-control" type="text" name="nama" id="nama" value="<?= $nama ?>" required/>
</div>
</div>


<div class="row mb-3">
<label class="form-label">Alamat</label>
<div class="col-sm-6">
<textarea class="form-control" type="text" name="alamat" id="alamat" value="<?= $alamat ?>"> </textarea>
</div>
</div>


<div class="row mb-3">
<label class="form-label">Telpon</label>
<div class="col-sm-6">
<input class="form-control" type="tel" name="telpon" id="telpon" value="<?= $telpon ?>" required/>
</div>
</div>


<div class="row mb-3">
<label class="form-label">e-mail</label>
<div class="col-sm-6">
<input class="form-control" type="email" name="email" id="email" value="<?= $email ?>" required/>
</div>
</div>


<div>
    <input type="button" value="Cancel" onclick="history.back()" />
    <input type="submit" value="Simpan" />
</div>

</form>