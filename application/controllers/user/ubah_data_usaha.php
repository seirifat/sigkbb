<?php
include('conn.php');
$id_usaha = $_GET['id_usaha'];
?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/head.php'; ?>
  <?php include 'includes/menu.php'; ?>
	<body role="document" style="padding-top: 80px;">
	<div class="container theme-showcase" role="main" style="padding-top:200;">
	<!-- Main jumbotron for a primary marketing essage or call to action -->
    <!-- Main content -->
	<section class="content-header">
		<h1>
			Ubah Data Usaha
		</h1>
		<ol class="breadcrumb">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Beranda</a></li>
			<li><a href="profil.php"><i class="fa fa-dashboard"></i> Profil</a></li>
			<li><a href="riwayat_pendaftaran_usaha.php?id_usaha=<?php echo $id_usaha ;?>"><i class="fa fa-dashboard"></i> Detil Usaha</a></li>
			<li class="active">Ubah Data Usaha</li>
		</ol>
	</section>
                <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-primary">
                            <div class="box-header">
                                <h3 class="box-title">Form Ubah Data Usaha</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
							
							<?php
								//query ke database dg SELECT table tempat wisata diurutkan berdasarkan id paling kecil
								$query = mysql_query("SELECT a.id_usaha,a.nama_usaha,a.produk,a.alamat_usaha,a.omzet,a.deskripsi,b.nama_kelurahan,c.nama_kecamatan FROM data_usaha a, kelurahan b, kecamatan c WHERE (a.id_usaha = $id_usaha)&&(a.id_kecamatan = c.id_kecamatan)&& (a.id_kelurahan =b.id_kelurahan)ORDER BY id_usaha ASC") or die(mysql_error());
								$data = mysql_fetch_assoc($query);
								$omz = $data['omzet'];
								$deskripsi = $data['deskripsi'];
							?>		
							
							
                            <form action="ubah_data_usaha_proses.php" method="post" enctype="multipart/form-data">
                                <div class="box-body">
									<div class="form-group">
										<?php
											$username=1;
										?>
										<input type="hidden" name="username" value='<?php echo $username; ?>'>
										<input type="hidden" name="id_usaha" value='<?php echo $id_usaha; ?>'>
									</div>
                                    <div class="form-group">
                                        <label for="nu_id">Nama Usaha</label>
                                        <input name="nama_usaha" class="form-control" id="nu_id"
                                               value="<?php echo $data['nama_usaha']; ?>">
                                    </div>
									<div class="form-group">
                                        <label for="p_id">Produk</label>
                                        <input name="produk" class="form-control" id="p_id"
                                               value="<?php echo $data['produk']; ?>">
                                    </div>
									<div class="form-group">
                                        <label for="a_id">Alamat Usaha</label>
                                        <textarea name="alamat_usaha" class="form-control" rows="3" id="a_id"
                                                  ><?php echo $data['alamat_usaha']; ?></textarea>
                                    </div>
									<div class="form-group">
										<label for="kc_id">Kecamatan</label>
										<select name="kecamatan" class="form-control" id="kecamatan">
										<?php
											$query = mysql_query("SELECT *FROM kecamatan") or die(mysql_error());
											//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
											if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
												//jika data kosong, maka akan menampilkan row kosong
												echo '<option>Tidak ada data!</option>';
											}
											else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
												//jika data tidak kosong, maka akan melakukan perulangan while
												while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
												$id_kecamatan = $data['id_kecamatan'];
												//menampilkan row dengan data di database
												echo '<option value="'.$id_kecamatan.'">'.$data['nama_kecamatan'].'</option>';
											}
										}
										?>
										</select>
									</div>

									<div class="form-group">
										<label for="ke_id">Kelurahan</label>
										<select name="kelurahan" class="form-control" id="kelurahan">
										<?php
											$query = mysql_query("SELECT *FROM kelurahan") or die(mysql_error());
											//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
											if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
												//jika data kosong, maka akan menampilkan row kosong
												echo '<option>Tidak ada data!</option>';
											}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
												//jika data tidak kosong, maka akan melakukan perulangan while
												while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
												$id_kelurahan = $data['id_kelurahan'];
												//menampilkan row dengan data di database
												echo '<option value="'.$id_kelurahan.'" class="'.$data['id_kecamatan'].'">'.$data['nama_kelurahan'].'</option>';
												}
											}
										?>
										</select>
									</div>
									
									<script type="text/javascript" src="js/jquery.min.js"></script>
									<script type="text/javascript" src="js/jquery.chained.js"></script>
									<script>
										$(document).ready(function() {
											$('#kelurahan').chained('#kecamatan');
										});
									</script>
							
									
									<div class="form-group">
                                        <label for="o_id">Omzet</label>
                                        <input name="omzet" class="form-control" id="o_id" value="<?php echo $omz;?>">
									</div>
									<div class="form-group">
                                        <label for="d_id">Deskripsi Usaha</label>
                                        <textarea align="left" name="deskripsi" class="form-control" rows="3" id="d_id">
											<?php echo $deskripsi;?>
										</textarea>
                                    </div>
									
						
								</div><!-- /.box-body -->
								<div class="box-footer">
									<input type="submit" class="btn btn-primary" name="ubah" value="Submit">
								</div>
                            </form>						
							<?php
								// function to geocode alamat, it will return false if unable to geocode alamat
								function geocode($alamat){

								// url encode the alamat
								$alamat = urlencode($alamat);
								
								// google map geocode api url
								$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&alamat={$alamat}";

								// get the json response
								$resp_json = file_get_contents($url);
								
								// decode the json
								$resp = json_decode($resp_json, true);

								// response status will be 'OK', if able to geocode given alamat 
								if($resp['status']='OK'){

									// get the important data
									$lati = $resp['results'][0]['geometry']['location']['lat'];
									$longi = $resp['results'][0]['geometry']['location']['lng'];
									$formatted_alamat = $resp['results'][0]['formatted_alamat'];
									
									// verify if data is complete
									if($lati && $longi && $formatted_alamat){
									
										// put the data in the array
										$data_arr = array();			
										
										array_push(
											$data_arr, 
												$lati, 
												$longi, 
												$formatted_alamat
											);
										
										return $data_arr;
										
									}else{
										return false;
									}
									
								}else{
									return false;
								}
							}

							?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
	</div>
	<hr class="featurette-divider">
	<?php include 'includes/footer.php'; ?>  
	</body>
</html>
<?php 
