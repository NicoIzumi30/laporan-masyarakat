<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Petugas</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="row d-flex justify-content-end">
    <div class="col-md-3 mt-3 mr-4 text-right">
    <button class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#add_petugas"><i class="fa fa-plus"></i> Add Petugas</button>
    </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Telp</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach($petugas as $ptgs) :
                    ?>
                    <tr>
                        <td><?=$no++ ?></td>
                        <td><?= $ptgs->nama_petugas?></td>
                        <td><?= $ptgs->alamat?></td>
                        <td><?= $ptgs->telp?></td>
                        <td onclick="javascript: return confirm('Apakah anda yakin menghapus petugas ini?')"><?php echo anchor('admin/del_petugas/'.$ptgs->id_petugas, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                        <td><?php echo anchor('admin/edit_petugas/'.$ptgs->id_petugas, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></div>') ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="add_petugas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="<?= base_url()?>admin/add_petugas" method="post">
                <div class="form-group">
                    <label for="nama">Nama Petugas</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="telp">Telp</label>
                    <input type="number" class="form-control" id="telp" name="telp" placeholder="Nomor Telephone">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <input class="btn btn-primary" type="submit" value="Add Petugas">
                </div>
                </form>
                </div>
                
            </div>
        </div>
    </div>