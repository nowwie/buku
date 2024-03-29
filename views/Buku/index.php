<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>List Buku</h1>
<div class="d-flex justify-content-end">
<a class="btn btn-success btn-sm" href="<?= base_url("buku/form")?>">Tambah</a>
</div>
<table class="table table-striped"> 
    <tr>
        <th>ISBN</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['isbn'] ?></td>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['pengarang'] ?></td>
            
            <td>
                <div class="btn-group">
<a class="btn btn-primary btn-sm" href="<?=
base_url("buku/detail/{$data['id']}")?>">Detail</a>
<a class="btn btn-warning btn-sm" href="<?= base_url("buku/form/{$data['id']}")?>">Edit</a>
<a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?=
base_url("buku/hapus/{$data['id']}")?>">Hapus</a>
</div>

            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>