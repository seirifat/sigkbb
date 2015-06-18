<div id="page-wrapper" >

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <form action="<?php echo !empty($edit)? base_url('admin/sektorusaha/edit/'.$sektorusaha->id_sektor): base_url('admin/sektorusaha/add'); ?>" method="post" role="form">
                    <legend><?php echo !empty($edit)?"Edit Sektor Usaha":"Add Sektor Usaha";?></legend>

                    <div class="form-group">
                        <label for="">Nama Sektor Usaha</label>
                        <input type="text" class="form-control" name="nama_sektor" id="" placeholder="Nama Sektor" required
                               value="<?php echo !empty($sektorusaha)?$sektorusaha->nama_sektor:''?>">
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

