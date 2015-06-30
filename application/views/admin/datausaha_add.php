<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script src="../jquery.geocomplete.js"></script>
<script src="asset/js/logger.js"></script>
<script>
    $(function(){
        $("#geocomplete").geocomplete()
    });

    $(function(){
        $("#geocomplete").geocomplete({
            map: "#map_canvas",
            details: "form",
            types: ["geocode", "establishment"],
        });

        $("#find").click(function(){
            $("#geocomplete").trigger("geocode");
        });
    });

</script>

<div id="page-wrapper" >
<script type="text/javascript">
  function initialize() {
	  
		//Map
	    var latlng = new google.maps.LatLng(35.658517,139.70133399999997);
	    var myOptions = {
	      zoom: 15,
	      center: latlng,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    var map = new google.maps.Map(document.getElementById("map_canvas"),
	        myOptions);
		
		//Marker
		var marker_latlng = new google.maps.LatLng(35.658517, 139.70133399999997);
		var marker = new google.maps.Marker({
			position: marker_latlng,
			map: map,
			//draggable:true,
			animation: google.maps.Animation.DROP,
			icon: 'phones.png',
			title:"Title Marker!"
		});
		//Marker
		var marker_latlng2 = new google.maps.LatLng(35.65955434501228, 139.69873762167356);
		var marker2 = new google.maps.Marker({
			position: marker_latlng2,
			map: map,
			//draggable:true,
			animation: google.maps.Animation.DROP,
			icon: 'music.png',
			title:"Title Marker2!"
		});
		
		//Info Marker
		var contentString = 'Info Map Marker';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
		
		//Info Marker
		var contentString2 = 'Info Map Marker 2';

		var infowindow2 = new google.maps.InfoWindow({
			content: contentString2
		});

		google.maps.event.addListener(marker2, 'click', function() {
			infowindow2.open(map,marker2);
		});
		
		//lingkaran radius
		var bufferOptions = {
	        strokeColor: "#FF0000",
	        strokeOpacity: 0.5,
	        strokeWeight: 1,
	        fillColor: "#FF0000",
	        fillOpacity: 0.1,
	        map: map,
	        center: new google.maps.LatLng(35.65955434501228, 139.69873762167356),
	        radius: 255
	      };
	      
	      var cityCircle = new google.maps.Circle(bufferOptions);
	
  }
 google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div id="page-wrapper" onload="initialize()">
<div class="container-fluid">
    <div class="row">

            <form action="<?php echo !empty($edit)? base_url('admin/datausaha/edit/'.$usaha->id_usaha): base_url('admin/datausaha/add'); ?>" method="post" role="form">
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
                    <input type="text" class="form-control" name="omzet" id="" placeholder="Rp." required value="<?php echo !empty($datausaha)?$datausaha->omzet:''?>">
                </div>
        </div>
        <div class="col-md-3">
                <div class="form-group">
                    <label for="">Nama Pemilik</label>
                    <input type="text" class="form-control" name="id_user" id="" placeholder="Pemilik Usaha" required value="<?php echo !empty($datausaha)?$datausaha->id_user:''?>">
                </div>
                <div class="form-group">
                    <label for="">Produk</label>
                    <input type="text" class="form-control" name="produk" id="" placeholder="Produk" required
                           value="<?php echo !empty($datausaha)?$datausaha->produk:''?>">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat_usaha" id="geocomplete" placeholder="Alamat" required
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
                <div class="form-group">
                    <label for="">No Telp</label>
                    <input type="text" class="form-control" name="no_telp" id="" placeholder="No Telp" required
                           value="<?php echo !empty($datausaha)?$datausaha->no_tlp:''?>">
                </div>
        </div>
         </form>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">Map</div>
                </div>
                <div id="map_canvas" class="panel-body" style="height: 384px"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <table class="table table-striped table-hover" id="myTable">
                <thead>
                <tr>
                    <th>Foto Usaha</th>
                </tr>
                </thead>
                <tbody id="RepeatRow">
                <tr>
                    <td><input class="form-control" type="file" name="tmbhgambar0" id=""/></td>
                    <td><a href="#" class="btn btn-success" id="TambahRow"><i class="fa fa-plus"></i></a></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3"></div>
        <div class="form-group text-right col-lg-3" style="margin-top: 40px">
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
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
        </div>
         </form>
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

    var jumlah = 1;
    $('#TambahRow').on('click',function(){
        $('#RepeatRow').prepend(
            "<tr id='tmbhgambar"+jumlah+"'><td><input class='form-control' type='file' name='tmbhgambar"+jumlah+"' id=''/></td>"+
            "<td><a onclick='deleteRow(this)' href='#' class='btn btn-danger' id='tmbhgambar"+jumlah+"'><i class='fa fa-minus'></i></a></td></tr>"
        );
        jumlah++;
        if(jumlah>=5){
            $('#TambahRow').hide();
        }
    });


    function deleteRow(t)
    {
        var msg = "Yakin Dikurangi ?";
        if(confirm(msg)){
            var row = t.parentNode.parentNode;
            document.getElementById("myTable").deleteRow(row.rowIndex);
            console.log(row);
            $('#TambahRow').show();
            jumlah--;
        }
    }
</script>