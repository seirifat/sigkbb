<div id="page-wrapper" >
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-3">
            <form action="<?php echo base_url('admin/user/add'); ?>" method="post" role="form" class="form-horizontal">
                <legend>Add User</legend>

                <div class="form-group">
                    <label for="">Nama User</label>
                    <input type="text" class="form-control" name="nama_user" id="" placeholder="Nama user">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email_user" id="" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="alamat_user" id="" placeholder="Alamat"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password_user" id="" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control"  name="tempat" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <div class="input-group date" id="datetimepicker1">
                    <input type="text" class="form-control" name="tgl_lahir" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
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


<script>
    $(function(){
        $('#datetimepicker1').datetimepicker();
    });
</script>
//    $('input#datepicker').click(function(){
//        alert('hey');
//    });

</script>

