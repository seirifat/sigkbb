<?php 
	include('../includes/conn.php');	
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
			Profil
		</h1>
		<ol class="breadcrumb">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Beranda</a></li>
			<li class="active">Profil</li>
		</ol>
	</section>
                   <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="box box-primary">
                            <div class="box-header">
                                <center><font face="comic sans ms" size="5%"><b>Profil Anda</center></font></b>
								<img src="media/icon/profil_user.png" class="center-block" height="143px" style="border-radius: 40%;";/>
								<hr>
								<div class="table-responsive" style="padding-top: 0.05em;">
								<?php
									//include('includes/koneksi.php');
									
									$id_user=$_SESSION['id_user'];
									
									$query = mysql_query("SELECT *FROM user WHERE id_user=$id_user") or die(mysql_error());
									if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
										echo 'Error';
										
									}else{//else ini artinya jika data hasil query ada (data diu database tidak kosong)
										
										while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database			
												$nama=$data['nama_user'];
												$email=$data['email_user'];
												$alamat=$data['alamat_user'];
												$email=$data['email_user'];
												$tmpt=$data['tempat'];
												$tgl=$data['tgl_lahir'];
										}
									}
								?>
									<table class="table table-bordered table-striped">
										<tbody>
											<tr>
												<td><strong>Username (No KTP)</strong></td>
												<td><?php echo $id_user ?></td>
											</tr>
											<tr>
												<td><strong>Nama</strong></td>
												<td><?php echo $nama ?></td>
											</tr>
											<tr>
												<td><strong>Tempat, tanggal lahir</strong></td>
												<td><?php echo $tmpt.' ,'.$tgl ?></td>
											</tr>
											<tr>
												<td><strong>Alamat</strong></td>
												<td><?php echo $alamat ?></td>
											</tr>
											<tr>
												<td><strong>Email</strong></td>
												<td><?php echo $email ?></td>
											</tr>
										</tbody>
`									</table>
								<?php echo'<p align="right"><a href="ubah_profil.php?id_user='.$id_user.'"><button class="btn btn-info">Ubah profil</button></a></p>';?>
								</div>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                        </div>
                    </div>
					<div class="col-sm-6">
						<div class="box box-primary">
                            <div class="box-header">
                                <center><font face="comic sans ms" size="5%"><b>Riwayat Pendaftaran Usaha</center></font></b>
								<img src="media/icon/riwayat_pdf.png" class="center-block" height="143px" style="border-radius: 40%;";/>
								<hr>
								<div class="box-body table-responsive no-padding" style="padding-top:20px;">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>No.</th>
											<th>Nama Usaha</th>
											<th>Produk</th>
											<th>Alamat</th>
											<th>Opsi</th>
										</tr>
                                        <?php
											//iclude file koneksi ke database
											//include('includes/koneksi.php');
											
											//query ke database dg SELECT table tempat wisata diurutkan berdasarkan id paling kecil
											$query = mysql_query("SELECT *FROM data_usaha WHERE id_user=$id_user") or die(mysql_error());
											
											//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
											if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
												
												//jika data kosong, maka akan menampilkan row kosong
												echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
												
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
														echo '<td><a href="riwayat_pendaftaran_usaha.php?id_usaha='.$data['id_usaha'].'"><button class="btn btn-info">Detil</button></a><a href="hapus_riwayat_daftar.php?id=' . $data['id_usaha'] . '" onclick="return confirm(\'Apakah anda akan menghapusnya?\')"><button class="btn btn-danger">Hapus</button></a></td>';	//menampilkan data kelas dari database
													echo '</tr>';
													
													$no++;	//menambah jumlah nomor urut setiap row
												}
												
											}
										?>
										</table>
										<p align="right"><a href="daftar_usaha.php"><button class="btn btn-info">Tambah Data</button></a></p>
                                </div><!-- /.box-body -->
                        </div>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            
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
