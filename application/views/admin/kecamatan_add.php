<div id="page-wrapper" >

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-3">
            <form action="<?php echo !empty($edit)? base_url('admin/kecamatan/edit/'.$kecamatan->id_kecamatan): base_url('admin/kecamatan/add'); ?>" method="post" role="form">
                <legend><?php echo !empty($edit)?"Edit Kecamatan":"Add Kecamatan";?></legend>

                <div class="form-group">
                    <label for="">Nama Kecamatan</label>
                    <input type="text" class="form-control" name="nama_kecamatan" id="" placeholder="Nama Kecamatan" required
                           value="<?php echo !empty($kecamatan)?$kecamatan->nama_kecamatan:''?>">
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

