<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('buku/save') ?>">
<input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>"/>
<div>
    <label></label>
    <div>
    <h3>Tambah/Ubah buku</h3>
    </div>
</div>
<div class="row mb-3">
<label class="form-label">ISBN</label>
<div class="col-sm-6">
<input class="form-control" type="text" name="isbn" id="isbn" value="<?= $isbn ?>" required/>
</div>
</div>

<div class="row mb-3">
<label class="form-label">Judul</label>
<div class="col-sm-6">
<input class="form-control" type="text" name="judul" id="judul" value="<?= $judul ?>" required/>
</div>
</div>

<div class="row mb-3">
<label class="form-label">Pengarang</label>
<div class="col-sm-6">
<input class="form-control" type="text" name="pengarang" id="pengarang" value="<?= $pengarang ?>" required/>
</div>
</div>

<div>
    <input type="button" value="Cancel" onclick="history.back()" />
    <input type="submit" value="Simpan" />
</div>

</form>