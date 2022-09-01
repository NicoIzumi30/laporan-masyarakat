<div class="container-fluid">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4>Edit Petugas</h4>
    </div>
    <div class="col-md-7 p-3">
        <?php foreach($petugas as $ptg) ?>
      <form action="<?= base_url()?>admin/update_petugas/<?=$ptg->id_petugas?>" method="post">
            <div class="form-group">
                <label for="nama">Nama Petugas</label>
                <input type="text" class="form-control" id="nama" value="<?=$ptg->nama_petugas?>" name="nama" placeholder="Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="telp">Telp</label>
                <input type="number" class="form-control" id="telp" name="telp" value="<?=$ptg->telp?>" placeholder="Nomor Telephone">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" rows="3"><?=$ptg->alamat?></textarea>
            </div>
            <input type="hidden" value="<?=$ptg->id_petugas?>" name="idp">
            <div class="modal-footer">
                <input class="btn btn-primary" type="submit" value="Update Petugas">
            </div>
            
        </form>
    </div>
    </div>
</div>