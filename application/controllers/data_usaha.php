<?php include('includes/conn.php');?>
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
			Daftar Usaha
			<small>Data usaha</small>
			
		</h1>
		<ol class="breadcrumb">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Beranda</a></li>
			<li class="active">Data Usaha</li>
		</ol>
	</section>
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-tools">
									    <div class="input-group">
											<div class="rows">
												<div class="col-xs-5">
												</div>
											</div>
											<label class="col-sm-1 control-label">Cari Berdasarkan</label>
											<div class="rows">
												<div class="col-sm-3">
													<form name="fcari_usaha" action="hcari_usaha.php" method="get" class="form-group" >
													<select name="opsi_cari" class="form-control">
														<option value="nama_usaha">Nama Usaha</option>
														<option value="produk">Produk</option>
													</select>
												</div>
											</div>
											
											<div class="rows">
												<div class="col-xs-3">
														<div class="input-group" >
															<input type="text" name="cari" class="form-control" placeholder="Silakan masukkan keyword pencarian..">
															<span class="input-group-btn">
																<button type="submit" class="btn btn-info">Go</button>
															</span>
														</div>
													</form>
												</div>
											</div>
                                        </div>
										 <div class="input-group">
											<div class="rows">
												<div class="col-xs-5">
												</div>
											</div>
											<label class="col-sm-1 control-label">Filter Berdasarkan</label>
											<div class="rows">
												<div class="col-sm-3">
													<form name="fcari_usaha" action="hcari_usaha.php" method="get" class="form-group" >
													<select name="opsi_cari" class="form-control">
														<option value="kecamatan">Kecamatan</option>
														<option value="kelurahan">Kelurahan</option>
														<option value="kelurahan">Sektor</option>
														<option value="kelurahan">Skala Usaha</option>
													</select>
												</div>
											</div>
											
											<div class="rows">
												<div class="col-xs-3">
														<div class="input-group" >
															<select name="opsi_cari" class="form-control" >
																<div  id="txtHint"></div>
															</select>
															
															<span class="input-group-btn">
																<button type="submit" class="btn btn-info"> Go</button>
															</span>
														</div>
													</form>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding" style="padding-top:20px;">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>No.</th>
											<th>Nama Usaha</th>
											<th>Produk</th>
											<th>Alamat</th>
											<th>Kecamatan</th>
											<th>Kelurahan</th>
											<th>Opsi</th>
										</tr>
                                        <?php
											//iclude file koneksi ke database
											//include('includes/koneksi.php');
											
											//query ke database dg SELECT table tempat wisata diurutkan berdasarkan id paling kecil
											$query = mysql_query("SELECT a.id_usaha, a.nama_usaha, a.produk, a.alamat_usaha, b.nama_kecamatan, c.nama_kelurahan FROM data_usaha a, kecamatan b, kelurahan c WHERE (a.id_kecamatan=b.id_kecamatan)&&(a.id_kelurahan=c.id_kelurahan)") or die(mysql_error());
											
											//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
											if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
												
												//jika data kosong, maka akan menampilkan row kosong
												echo '<tr>
														<td></td>
														<td></td>
														<td></td>
														
														</tr>';
												
											}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
												
												//jika data tidak kosong, maka akan melakukan perulangan while
												$no = 1;	//membuat variabel $no untuk membuat nomor urut
												while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
													
													//menampilkan row dengan data di database
													echo '<tr>';
														echo '<td>'.$no.'</td>';	//menampilkan nomor urut
														echo '<td>'.$data['nama_usaha'].'</td>';	//menampilkan data nis dari database
														echo '<td>'.$data['produk'].'</td>';	//menampilkan data nis dari database
														echo '<td>'.$data['alamat_usaha'].'</td>';	//menampilkan data nis dari database
														echo '<td>'.$data['nama_kecamatan'].'</td>';
														echo '<td>'.$data['nama_kelurahan'].'</td>';
														echo '<td><a href="detil_usaha.php?id_usaha='.$data['id_usaha'].'"><button class="btn btn-info">Detil</button></a></td>';	//menampilkan data kelas dari database
													echo '</tr>';
													
													$no++;	//menambah jumlah nomor urut setiap row
												}
												
											}
										?>
										</table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->
	</div>
	<hr class="featurette-divider">
	<?php include 'includes/footer.php'; ?>  
	</body>
	<script>
		function showValue(str)
		{
		if (str=="")
		  {
		  document.getElementById("txtHint").innerHTML="";
		  return;
		  }
		if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		  }
		xmlhttp.open("GET","getvalue.asp?q="+str,true);
		xmlhttp.send();
		}
	</script>
</html>