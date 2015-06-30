<div id="page-wrapper" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <form action="<?php echo !empty($edit)? base_url('admin/skalausaha/edit/'.$skalausaha->id_skalausaha): base_url('admin/skalausaha/add'); ?>" method="post" role="form">
                    <legend><?php echo !empty($edit)?"Edit Skala Usaha":"Tambah Skala Usaha";?></legend>

                    <div class="form-group">
                        <label for="">Nama Skala Usaha</label>
                        <input type="text" class="form-control" name="nama_skalausaha" id="" placeholder="Nama Skala Usaha" required
                               value="<?php echo !empty($skalausaha)?$skalausaha->nama_skalausaha:''?>">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </form>
            </div>
        </div></div>
</div>

