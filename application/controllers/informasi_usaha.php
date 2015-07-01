<?php include('includes/conn.php');?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/head.php'; ?>
  <?php include 'includes/menu.php'; ?>
	<body role="document" style="padding-top: 100px;">
	<div class="container theme-showcase" role="main" >
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<section class="content-header">
		<h1>
			Informasi Usaha
		</h1>
		<ol class="breadcrumb">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Beranda</a></li>
			<li class="active">Informasi Usaha</li>
		</ol>
	</section>
	<center>
		<h1>
			Cari Informasi Usaha
		</h1>
		<form name="form1" action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">
			<div class="input-group" style="width:35%;">
				<input type="text" name="cari" class="form-control" placeholder="Silakan masukkan keyword pencarian.." width="250px">
				<span class="input-group-btn">
					<button type="submit" name="submit"class="btn btn-info">Go</button>
				</span>
			</div>
		</form>
		<hr class="featurette-divider" width="951px">
		<div id="map" style="margin-top:1em;margin-bottom:0.5em;width:500px; height:300px"></div></center>
			
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAqhJ6sg9DMHKhLvWrzUs96NDMemaDXriw&sensor=false"></script>
			<script>		
				var map;
				
				function initialize() {
					var mapOptions = {
						zoom: 10,
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
					
					$query = mysql_query("SELECT id_usaha,nama_usaha,latitude,longitude FROM data_usaha WHERE nama_usaha LIKE '%$cari%'");
					
					if (mysql_num_rows($query) == 0)
					{    //ini artinya jika data hasil query di atas kosong
						//jika data kosong, maka akan menampilkan row kosong
						echo 'Tidak ada data!';
					}
					else
					{ 
						while ($data = mysql_fetch_assoc($query))
						{
							$location[] = [$data['nama_usaha'], (float) $data['latitude'], (float) $data['longitude'], $data['id_usaha']];
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
									var contentString = 'Nama Usaha : ' +locations[i][0]+'<br><a href="detil_usaha.php?id_usaha='+locations[i][3]+'">Detail..</a>';
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
	<hr class="featurette-divider" width="951px">
	<?php include 'includes/footer.php'; ?>  
	</body>
</html>
<?php 
