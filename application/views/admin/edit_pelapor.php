<div class="container-fluid">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4>Edit Pelapor</h4>
    </div>
    <div class="col-md-7 p-3">
        <?php foreach($pelapor as $plpr) ?>
      <form action="<?= base_url()?>admin/update_pelapor/<?=$plpr->id_pelapor?>" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" value="<?=$plpr->nama_pelapor?>" name="nama" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="telp">Telp</label>
                <input type="number" class="form-control" id="telp" name="telp" value="<?=$plpr->telp?>" placeholder="Nomor Telephone">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3"><?=$plpr->alamat?></textarea>
            </div>
            <input type="hidden" value="<?=$plpr->id_pelapor?>" name="idp">
            <div class="modal-footer">
                <input class="btn btn-primary" type="submit" value="Update pelapor">
            </div>
            
        </form>
    </div>
    </div>
</div>