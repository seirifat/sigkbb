<div id="page-wrapper" >
    <div class="container-fluid">
        <div class="row">

            <form action="<?php echo !empty($edit)? base_url('admin/user/edit/'.$user->id_user): base_url('admin/user/add'); ?>"
                  method="post" role="form">
                <legend><?php echo !empty($edit)?"Edit Data User":"Tambah Data User";?></legend>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" class="form-control" name="nama_user" id="" placeholder="Nama user" required
                               value="<?php echo !empty($user)?$user->nama_user:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control"
                               name="email_user" id="" placeholder="Email" required
                               value="<?php echo !empty($user)?$user->email_user:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea class="form-control" name="alamat_user" id="" placeholder="Alamat" rows="7" style="resize: none;"><?php
                            echo !empty($user)?$user->alamat_user:''?></textarea>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password_user" id="" placeholder="Password" required
                               value="<?php echo !empty($user)?$user->password:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">File KTP</label>
                        <input class="form-control" type="file" name="file_ktp" id="" required
                               value="<?php echo !empty($user)?$user->file_ktp:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Status User</label>
                        <select name="status_user" id="" class="form-control">
                            <option value="" disabled selected> -- Pilih Status User--</option>
                            <option value="admin" <?php error_reporting(0); if($_POST[status_user]=='admin') echo "selected"; ?>>Administrator</option>
                            <option value="pemilik_usaha" <?php if($_POST[status_user]=='pemilik_usaha') echo "selected"; ?>>Pemilik Usaha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat"
                               placeholder="Tempat Lahir" required value="<?php echo !empty($user)?$user->tempat:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <div class="input-group date" id="datetimepicker1">
                            <input type="text" class="form-control"
                                   name="tgl_lahir" id="datepicker" required="required">
                            <span class="input-group-addon"><span
                                    class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                        <div class="form-group text-right"><br>
                            <button type="submit" class="btn btn-primary"> Simpan </button>
                        </div>
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
            </div>
        </div></div>
</div>

<script>
    $(function() {
        $( "#datepicker" ).datepicker({
            dateFormat: "dd-mm-yy"
        });
    });
</script>
