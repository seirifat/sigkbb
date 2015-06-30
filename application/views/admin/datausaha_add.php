<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../jquery.geocomplete.js"></script>
<script>
    $(function(){
        $("#geocomplete").geocomplete()
    });

</script>

<div id="page-wrapper" >
<div class="container-fluid">
    <div class="row">
        
            <form action="<?php echo !empty($edit)? base_url('admin/datausaha/edit/'.$datausaha->id_usaha): base_url('admin/datausaha/add'); ?>" method="post" role="form">
                <legend><?php echo !empty($edit)?"Edit Data Usaha":"Tambah Data Usaha";?></legend>
		<div class="col-md-3">		
                <div class="form-group">
                    <label for="">Nama Usaha</label>
                    <input type="text" class="form-control" name="nama_usaha" id="" placeholder="Nama Usaha" required value="<?php echo !empty($datausaha)?$datausaha->nama_usaha:''?>">
                </div>
                <div class="form-group">
                    <label for="">Kecamatan</label>
                    <select name="id_kecamatan" id="id_kecamatan" class="form-control">
                    	<option value="" disabled selected> -- Pilih Kecamatan --</option>
                        <?php foreach($kecamatan as $row):?>
                            <option value="<?php echo $row->id_kecamatan;?>"><?php echo $row->nama_kecamatan;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Kelurahan</label>
                    <select name="id_kelurahan" id="id_kelurahan" class="form-control">
                    	<option value="" disabled selected> -- Kecamatan Belum Dipilih --</option>
                        <?php foreach($kelurahan as $row):?>
                            <option value="<?php echo $row->id_kelurahan;?>"><?php echo $row->nama_kelurahan;?></option>
                        <?php endforeach;?>
                    </select>
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
                    <label for="">Skala Usaha</label>
                    <select name="id_skalausahan" id="inputID" class="form-control">
                        <option value="" disabled selected> -- Pilih Sakal Usaha --</option>
                        <?php foreach($skalausaha as $row):?>
                            <option value="<?php echo $row->id_skalausaha;?>"><?php echo $row->nama_skalausaha;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Omzet</label>
                    <input type="text" class="form-control" name="omzet" id="" placeholder="Omzet" required value="Rp. <?php echo !empty($datausaha)?$datausaha->omzet:''?>">
                </div>
        </div>
        <div class="col-md-3">
                <div class="form-group">
                    <label for="">Nama Pemilik</label>
                    <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" placeholder="Pemilik Usaha" required value="<?php echo !empty($datausaha)?$datausaha->id_user:''?>">
                </div>
                <div class="form-group">
                    <label for="">Produk</label>
                    <input type="text" class="form-control" name="produk" id="" placeholder="Produk" required
                           value="<?php echo !empty($datausaha)?$datausaha->produk:''?>">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat_usaha" id="" placeholder="Alamat" required
                           value="<?php echo !empty($datausaha)?$datausaha->alamat_usaha:''?>">
                </div>
                <div class="form-group">
                    <label for="">Latitude</label>
                    <input type="text" class="form-control" name="latitude" id="" placeholder="Latitude" required
                           value="<?php echo !empty($datausaha)?$datausaha->latitude:''?>" disabled>
                </div>
                <div class="form-group">
                    <label for="">Longitude</label>
                    <input type="text" class="form-control" name="longitude" id="" placeholder="Longitude" required
                           value="<?php echo !empty($datausaha)?$datausaha->longitude:''?>" disabled>
                </div>
        </div>
         </form>
    </div>
</div>
</div>

<script>
	$('#id_kecamatan').change(function(){
		var id_kec = $('#id_kecamatan').val();
		$.ajax({
			type:"POST",
			url:"<?php echo base_url('admin/datausaha/getKelurahanByIdKecamatan/');?>",
			data:{id_kec:id_kec},
			dataType:"JSON",
			success:(function(data){
				$('#id_kelurahan').empty();
				$('#id_kelurahan').append("<option value='' disabled selected> -- Pilih Kelurahan --</option>");
				for(i=0;i<data.length;i++){
				  //console.log(data[i].nama_kelurahan);
				  $('#id_kelurahan').append("<option value='"+data[i].id_kelurahan+"'>"+data[i].nama_kelurahan+"</option>");
				}
			})
		});
	});

</script>