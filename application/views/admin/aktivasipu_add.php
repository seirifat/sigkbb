<div id="page-wrapper" >
    <div class="container-fluid">
        <div class="row">

            <form action="<?php echo !empty($edit)? base_url('admin/aktivasipu/edit/'.$aktivasipu->id_user): base_url('admin/aktivasipu/add'); ?>"
                  method="post" role="form">
                <legend><?php echo !empty($edit)?"Edit Aktivasi Pemilik Usaha":"Tambah Data Pemilik Usaha";?></legend>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" class="form-control" name="nama_user" id="" placeholder="Nama user" required
                               value="<?php echo !empty($aktivasipu)?$aktivasipu->nama_user:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email_user" id="" placeholder="Email" required
                               value="<?php echo !empty($aktivasipu)?$aktivasipu->email_user:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea class="form-control" name="alamat_user" id="" placeholder="Alamat" rows="7" style="resize: none;"><?php
                            echo !empty($aktivasipu)?$aktivasipu->alamat_user:''?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status_aktip" id="" class="form-control">
                            <option value="" disabled selected>-- Pilih Status--</option>
                            <option value="aktif" <?php error_reporting(0); if($_POST[status_aktip]=='aktif') echo "selected"; ?>>Aktif</option>
                            <option value="tidak" <?php if($_POST[status_aktip]=='tidak') echo "selected"; ?>>No Aktif</option>
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

