<div id="page-wrapper" >
    <div class="container-fluid">
	<div class="row">

            <form action="<?php echo !empty($edit)? base_url('admin/user/edit/'.$user->id_user): base_url('admin/user/add'); ?>" method="post" role="form">
                <legend><?php echo !empty($edit)?"Edit Data User":"Tambah Data User";?></legend>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" class="form-control" name="nama_user" id="" placeholder="Nama user" required
                               value="<?php echo !empty($datauser)?$datauser->nama_user:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">No KTP</label>
                        <input type="text" class="form-control" name="no_ktp" id="" placeholder="No KTP" required
                               value="<?php echo !empty($datauser)?$datauser->no_ktp:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input type="text" class="form-control" name="nip" id="" placeholder="NIP" required
                               value="<?php echo !empty($datauser)?$datauser->nip:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email_user" id="" placeholder="Email" required
                               value="<?php echo !empty($datauser)?$datauser->email_user:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea class="form-control" name="alamat_user" id="" placeholder="Alamat" rows="7" style="resize: none;">
                            <?php echo !empty($datauser)?$datauser->alamat_user:''?></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password_user" id="" placeholder="Password" required
                               value="<?php echo !empty($datauser)?$datauser->password_user:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">File KTP</label>
                        <input class="form-control" type="file" name="file_ktp" id="" required
                               value="<?php echo !empty($datauser)?$datauser->file_ktp:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Status User</label>
                        <select name="status_user" id="" class="form-control">
                            <option value="" disabled selected> -- Pilih Status User--</option>
                            <option value="admin">Administrator</option>
                            <option value="pemilik_usaha">Pemilik Usaha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control"  name="tempat" placeholder="Tempat Lahir" required value="<?php echo !empty($datauser)?$datauser->nama_usaha:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <div class="input-group date" id="datetimepicker1">
                        <input type="text" class="form-control" name="tgl_lahir" id="datepicker" required="required">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6"></div>

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
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
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

