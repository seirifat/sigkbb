<?php include('includes/conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/head.php'; ?>
  <?php include 'includes/menu.php'; ?>
  <style>
	div.relative {
		position: relative;
		top :90px;
		width: 100%;
		
	} 

	div.absolute {
		position: absolute;
		top: -30px;
		width:30%;
		margin-left:7.4em;
		
		
	}
	</style>
	<body role="document" style="padding-top:50px;">
        <!-- Fixed navbar -->
	<div class="relative">
		<div class="absolute">
          <div class="container">
            <div class="col-md-23">
				<div class="panel" style="background-image:url('user/media/img/bg-header.jpg');background-size:cover;width:28%;height:50px;padding:5px;margin-left: 20.99999em;">
					<font size="5"color="white">Temukan Data Usaha Disini</font>
				</div>
          </div>
		  <img src="user/media/icon/arrow_down.png" height="50px" style="margin-left: 30em;margin-top:-30px">
          </div><!-- End navbar -->
		</div>
        <!-- Fixed Content -->  
        <div class="jumbotron padding-top" style="background-color:#F8F8F8; padding:0 0px; height:auto;">
			<div class="container">
            <div class="rows">
                    <div class="col-sm-auto">
                        <div class="content-welcome" style="margin-left: -50px;margin-right: -75px;padding-left: 1em;padding-bottom: 1em;padding-top: 1em;" >
                        </div>
                <div class="rows">       
                <div class="col-lg-9" style="padding:auto; margin:0em">
                <div class="content-welcome" style="border-radius:5px;margin-left: -20px;margin-right: -70px;padding-left: 1em;padding-bottom: 1em;padding-top: 1em;" >
                    <div class="rows">
						<div class="col-xs-4">
						</div>
						<div class="col-xs-4">
						<form name="form1" action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">
							<div class="input-group" style="width:300px;">
								<input type="text" name="cari" class="form-control" placeholder="Silakan masukkan keyword pencarian.." width="50px">
								<span class="input-group-btn">
									<button type="submit" name="submit"class="btn btn-info">Go</button><br>
								</span>
							</div>
							</div>
							<div class="col-xs-4">
							</div>
						
						</form>
					</div>
					<br>
					<?php
						if (isset($_POST['cek']))
						{					
							$cek = $_POST['cek'];
							echo $cek;die();
							if ($cek == 1)
							{
							?>
								<div class="alert alert-warning alert-dismissible fade in" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<strong>Data tidak ditemukan!</strong>.
								</div>
							<?php 
							} 
						}
					?>
                    <hr class="featurette-divider" width="100%">
                    <div id="map" style="margin-top:1em;margin-bottom:0.5em;width:800px; height:500px"></div></center>
                        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAqhJ6sg9DMHKhLvWrzUs96NDMemaDXriw&sensor=false"></script>
                        <script>		
                            var map;
                            
                            function initialize() {
                                var mapOptions = {
                                    zoom: 12,
                                    center: new google.maps.LatLng(-6.9052639,107.4542340),
                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                };
                                    
                                map = new google.maps.Map(document.getElementById('map'), mapOptions);
                                
                                addmarker();
                            }
            
                            google.maps.event.addDomListener(window, 'load', initialize);
                        </script>
                        <?php
                            if (isset($_POST['submit']))
                            {					
                                $cari = $_POST['cari'];
                                
                                $query = mysql_query("SELECT id_usaha,produk,nama_usaha,latitude,longitude FROM data_usaha WHERE nama_usaha LIKE '%$cari%'");
                                
                                if (mysql_num_rows($query) == 0)
                                {    
									echo '<input type="hidden" name="cek" value=1	>';
                                }
                                else
                                { 
                                    while ($data = mysql_fetch_assoc($query))
                                    {
                                        $location[] = [$data['nama_usaha'], (float) $data['latitude'], (float) $data['longitude'], $data['id_usaha'], $data['produk']];
                                    }
                                ?>
                                
                                    <script>		
										var locations = <?php echo json_encode($location); ?>;
										var infowindow;
											
										function addmarker() {
											infowindow = new google.maps.InfoWindow();
											
											var marker, i;
											for (i = 0; i < locations.length; i++) {  
												marker = new google.maps.Marker({
													position: new google.maps.LatLng(locations[i][1], locations[i][2]),
													map: map
												});
												var contentString = 'Nama Usaha : ' +locations[i][0]+'<br>Produk : ' +locations[i][4]+'<br><a href="detil_usaha.php?id_usaha='+locations[i][3]+'">Detail..</a>';
												var infowindow = new google.maps.InfoWindow({
													content: contentString
												});
												google.maps.event.addListener(marker, 'click', (function(marker, i) {
													return function() {
														//infowindow.setContent(locations[i][0]+'<a href="detil_usaha.php?id_usaha='+locations[i][3]+'>Detail..</a>');
														infowindow.open(map, marker);
													}
												})(marker, i));
											}
										}
									</script>
                        <?php
                            }
                        } ?>
					</div>
				</div>
			</div>
		</div>
        </div>
		<div class="col-lg-3" style="padding:0px">
            <div class="panel panel-primary">
                <div class="panel-body">
                <center><h3><b><center>Selamat datang</center></b></h3>
					</center>
					<h5>
					  <p align="center">Selamat datang di Sistem Informasi Geografis Kabupaten Bandung Barat. Situs ini dipersiapkan sebagai pusat informasi, pendaftaran dan pengolahan data usaha di kabupaten Bandung Barat. </p>
					</h5></center>
                </div>
            </div>
			<div class="panel panel-primary">
				<div class="panel-heading">
						<h3 class="panel-title"><center>Data Usaha</center></h3>
				</div>
				<div class="panel-body">
				<center><img src="user/media/icon/sekolah.png" height="40" align="middle"> <h5>Memuat daftar usaha di kabupaten Bandung Barat<br><a href='data_usaha.php'>Selengkapnya.</a></h5></center>
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
						<h3 class="panel-title"><center>Daftar Pemilik Usaha</center></h3>
				</div>
				<div class="panel-body">
					<center><img src="user/media/icon/user.png" height="40" align="middle"><br><h5>Laman untuk melakukan pendaftaran sebagai pemilik usaha<br><a href='_signin/signup.php'>Selengkapnya.</a></h5></center>
				</div>
			</div>
        </div>
	    </div>
        </div>
    </div>  
     <br>   
			<hr class="featurette-divider">
             
	<hr class="featurette-divider" width="80%">
	<?php include 'includes/footer.php'; ?>  
	</body>
</html>
