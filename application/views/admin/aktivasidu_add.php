<div id="page-wrapper" >
    <div class="container-fluid">
        <div class="row">

            <form action="<?php echo !empty($edit)? base_url('admin/aktivasidu/edit/'.$aktivasidu->id_user): base_url('admin/aktivasidu/add'); ?>"
                  method="post" role="form">
                <legend><?php echo !empty($edit)?"Edit Aktivasi Data Usaha":"Tambah Data Data Usaha";?></legend>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Nama Usaha</label>
                        <input type="text" class="form-control" name="nama_usaha" id="" placeholder="Nama Usaha" required
                               value="<?php echo !empty($aktivasidu)?$aktivasidu->nama_usaha:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Sektor Usaha</label>
                        <select name="id_sektor" id="inputID" class="form-control">
                            <option value="" disabled selected> -- Pilih Sektor Usaha--</option>
                            <?php foreach($sektorusaha as $row):?>
                                <option value="<?php echo $row->id_sektor;?>"><?php echo $row->nama_sektor;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Produk Utama</label>
                        <textarea class="form-control" name="produk" id="" placeholder="Produk Utama" rows="7" style="resize: none;"><?php
                            echo !empty($aktivasidu)?$aktivasidu->produk:''?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status_usaha" id="" class="form-control">
                            <option value="" disabled selected>-- Pilih Status--</option>
                            <option value="aktif" <?php error_reporting(0); if($_POST[status_usaha]=='aktif') echo "selected"; ?>>Aktif</option>
                            <option value="tidak" <?php if($_POST[status_usaha]=='tidak') echo "selected"; ?>>No Aktif</option>
                        </select>
                    </div>
                        <div class="form-group text-right"><br>
                            <button type="submit" class="btn btn-primary"> Simpan </button>
                        </div>
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
            <br>
            <br>
            <br>
            </div>
        </div></div>
</div>

