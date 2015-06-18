<div id="page-wrapper" >

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-3">
                <form action="<?php echo !empty($edit)? base_url('admin/kelurahan/edit/'.$kelurahan->id_kelurahan): base_url('admin/kelurahan/add'); ?>" method="post" role="form">
                    <legend><?php echo !empty($edit)?"Edit Kelurahan":"Add Kelurahan";?></legend>

                    <div class="form-group">
                        <label for="">Nama Kelurahan</label>
                        <input type="text" class="form-control" name="nama_kelurahan" id="" placeholder="Nama Kelurahan" required
                               value="<?php echo !empty($kelurahan)?$kelurahan->nama_kelurahan:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Kecamatan</label>
                        <select name="id_kecamatan" id="inputID" class="form-control">
                            <?php foreach($kecamatan as $row):?>
                                <option value="<?php echo $row->id_kecamatan;?>"><?php echo $row->nama_kecamatan;?></option>
                            <?php endforeach;?>
                        </select>
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

